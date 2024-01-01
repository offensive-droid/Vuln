REATE DATABASE vulnapp;
USE vulnapp;

CREATE TABLE users (
    id INT PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255),
    expiry_date DATE
);

INSERT INTO users (id, email, password, expiry_date)
VALUES
    (1001, 'user1@example.com', 'pass1234', '2023-01-15'),
    (1002, 'user2@example.com', 'secretPwd', '2023-02-28'),
    (1003, 'user3@example.com', 'myPassWord321', '2023-03-10'),
    (1004, 'user4@example.com', 'securePass!', '2023-04-22');