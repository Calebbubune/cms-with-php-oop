<?php

$sql = "CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userType ENUM('public','author','admin'),
    username VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL, 
    “pass CHAR(40) NOT NULL,
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE (username),
    UNIQUE (email),
    INDEX login (email, pass)
    )";
?>