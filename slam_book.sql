-- Database Name `Slam Book`

CREATE DATABASE `SlamBook`

USE `SlamBook`;

-- Table `ROLES`

CREATE TABLE roles 
(
        role_id INT AUTO_INCREMENT PRIMARY KEY,
        role VARCHAR(10) NOT NULL UNIQUE,
        status VARCHAR(10) NOT NULL DEFAULT 'active',  
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO roles (role) values
 ('admin'),
 ('user');


 --Create table `USER TABLE`--


     CREATE TABLE users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) UNIQUE NOT NULL,
        password VARCHAR(100) NOT NULL,
        role_id INT NOT NULL,
        status VARCHAR(10) NOT NULL DEFAULT 'active',
        gender VARCHAR(15) NOT NULL,
        address VARCHAR(100) NOT NULL,
        contact VARCHAR(10) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (role_id) REFERENCES roles(role_id)
     );


    --Insert admin in user--

     INSERT INTO users (username, email, password, role_id, gender, address, contact) VALUES
     ('Prajakta Garodi','prajaktagarodi@gmail.com','praju_123', 1 ,'Female', 'gandhibagh Nagpur','9561234096' );


     



