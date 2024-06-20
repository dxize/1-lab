<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully<br>";
    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getAndPrintPostsFromDB(mysqli $conn): void
{
    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: {$row['id']} - Title: {$row['title']} - Subtitle: {$row['subtitle']} - Content: {$row['content']} - Author: {$row['author']} - Author_url: {$row['author_url']} - Date: {$row['publish_date']} - Image: {$row['image_url']} - Is Featured: {$row['featured']} <br>";
        }
    } else {
        echo "0 results";
    }
}

$conn = createDBConnection();
getAndPrintPostsFromDB($conn);
closeDBConnection($conn);

?>