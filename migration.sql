CREATE DATABASE blog_ipb24;
USE blog_ipb24;

CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200) NOT NULL
);

INSERT INTO posts
(content)
VALUES
("Lieldienas nāk"),
("Otrais bloga ieraksts");