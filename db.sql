CREATE DATABASE blog_pujats;

USE blog_pujats;

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");