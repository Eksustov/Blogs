CREATE DATABASE blog_pujats;

USE blog_pujats;

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

CREATE TABLE categories(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT
)

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

INSERT INTO categories
(name)
VALUES
("sport"),
("music"),
("food");

ALTER TABLE posts
ADD COLUMN category_id INT,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = "sport")
WHERE id = 1;

UPDATE posts 
SET category_id =  (SELECT id FROM categories WHERE name = "food")
WHERE id = 2;

SELECT * FROM posts 
JOIN categories
ON posts.category_id = categories.id;