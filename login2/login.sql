CREATE DATABASE IF NOT EXISTS LOGIN;
use login;
CREATE TABLE users (
    id int,
    user varchar(50),
    pass varchar(255)
);


/* inset */
INSERT INTO users (user,pass)
VALUES ('Mickey', '$2y$10$EwgwmASvzMis0.M/CkZyqeJwvlgbwVjTN.t7Zw0qjMQgn32NtpBBW');