CREATE DATABASE login_system;

USE login_system;

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);



-- add sample user
INSERT INTO users (username, password) VALUES ('testuser', 'testpassword');