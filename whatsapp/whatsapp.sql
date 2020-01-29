create database cuenta;
CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50),
    pass VARCHAR(250)
);
 CREATE TABLE telefono (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nombre varchar(50) DEFAULT '',
     numero VARCHAR(50) DEFAULT ''
     );
 
