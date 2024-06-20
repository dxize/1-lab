CREATE TABLE post (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    subtitle VARCHAR(255),
    content TEXT NOT NULL,
    author VARCHAR(255),
    author_url VARCHAR(255),
    publish_date VARCHAR(255),
    image_url VARCHAR(255),
    featured TINYINT(1) DEFAULT 0
);
