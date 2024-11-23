# PHP CRUD Application

A simple PHP CRUD (Create, Read, Update, Delete) application with MySQL database integration and Bootstrap styling.

## Features

- Create new user records
- Display all users in a table format
- Update existing user information
- Delete user records
- Responsive design using Bootstrap 5

## Requirements

- PHP 7.0 or higher
- MySQL/MariaDB
- Web server (Apache/Nginx)
- Web browser

## Database Setup

-Create a MySQL table with the following structure:

-CREATE TABLE IF NOT EXISTS `crud` (

    -`id` int(11) NOT NULL AUTO_INCREMENT,
    
    -`name` varchar(100) NOT NULL,
    
    -`email` varchar(100) NOT NULL,
    
    -`mobile` varchar(20) NOT NULL,
    
    -`password` varchar(255) NOT NULL,
    
    - PRIMARY KEY (`id`)
    
-) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

## demonstration

https://github.com/user-attachments/assets/d00c63bc-2c3a-4da6-b992-4d55caee63da


