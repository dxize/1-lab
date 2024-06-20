<?php
// Получаем метод запроса
$method = $_SERVER['REQUEST_METHOD'];

// Проверяем метод запроса
if ($method === 'POST') {
    // Получаем содержимое тела запроса
    $request_body = file_get_contents('php://input');

    // Проверяем, было ли получено содержимое запроса
    if (!empty($request_body)) {
        // Преобразуем JSON-данные из тела запроса в ассоциативный массив
        $data = json_decode($request_body, true);

        // Проверяем, существует ли поле 'image' в массиве данных
        if (isset($data['image'])) {
            // Получаем содержимое изображения в формате base64
            $base64_image = $data['image'];

            // Декодируем изображение из формата base64
            $image_data = base64_decode($base64_image);

            // Путь к папке, куда хотим сохранить изображения
            $upload_directory = __DIR__ . '/src/images/';

            // Проверяем, существует ли папка, и если нет, создаем ее
            if (!file_exists($upload_directory)) {
                mkdir($upload_directory, 0777, true);
            }

            // Имя файла для сохранения (можно сгенерировать уникальное имя)
            $filename = 'image_' . uniqid() . '.png';

            // Сохраняем основное изображение в указанную папку
            if (file_put_contents($upload_directory . $filename, $image_data) !== false) {
                // Создаем ссылку на основное изображение через localhost
                $image_url = 'http://' . $_SERVER['HTTP_HOST'] . '/src/images/' . $filename;

                // Определяем переменную для авторского изображения, если оно было передано
                $author_url = isset($data['author_url']) ? saveAuthorImage($data['author_url'], $upload_directory) : null;

                // Продолжаем обработку данных и сохранение в базу данных
                saveToDatabase($data, $image_url, $author_url);
            } else {
                echo "Ошибка при сохранении основного изображения.";
            }
        } else {
            echo "Отсутствует поле 'image' в теле запроса.";
        }
    } else {
        echo "Отсутствует тело запроса.";
    }
} else {
    echo "Метод запроса не поддерживается.";
}

// Функция для сохранения авторского изображения
function saveAuthorImage($author_url_data, $upload_directory)
{
    // Получаем содержимое изображения 'author_url' в формате base64
    $base64_author_image = $author_url_data;
    // Декодируем изображение из формата base64
    $author_image_data = base64_decode($base64_author_image);
    // Имя файла для сохранения (можно сгенерировать уникальное имя)
    $author_filename = 'author_image_' . uniqid() . '.png';
    // Сохраняем изображение 'author_url' в ту же папку
    if (file_put_contents($upload_directory . $author_filename, $author_image_data) !== false) {
        // Создаем ссылку на изображение 'author_url' через localhost
        return 'http://' . $_SERVER['HTTP_HOST'] . '/src/images/' . $author_filename;
    } else {
        echo "Ошибка при сохранении изображения из 'author_url'.";
        return null;
    }
}

// Функция для сохранения данных в базу данных
function saveToDatabase($data, $image_url, $author_url)
{
    // Создаем подключение к базе данных
    $conn = new mysqli('localhost', 'root', '', 'blog');

    // Проверяем подключение
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Подготавливаем SQL-запрос для вставки данных о посте в базу данных
    $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, image_url, featured) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Проверяем, удалось ли подготовить запрос
    if ($stmt === false) {
        die("Ошибка при подготовке запроса: " . $conn->error);
    }

    // Связываем параметры запроса с переменными
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $content = $data['content'];
    $author = $data['author'];
    $publish_date = $data['publish_date'];
    $featured = intval($data['featured']);
    // Используем условное выражение для определения, какие параметры добавлять в запрос
    $author_param = isset($author_url) ? "sssssssi" : "ssssssi";
    $stmt->bind_param($author_param, $title, $subtitle, $content, $author, $author_url, $publish_date, $image_url, $featured);

    // Выполняем SQL-запрос
    if ($stmt->execute()) {
        echo "Данные успешно сохранены в базе данных.";
    } else {
        echo "Ошибка при сохранении данных в базе данных: " . $stmt->error;
    }

    // Закрываем соединение с базой данных
    $conn->close();
}
?>