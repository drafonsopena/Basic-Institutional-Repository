CREATE TABLE `mock_user` (
  `admin_id` NUMERIC  NOT NULL,
  `admin_name` TEXT  NOT NULL,
  `customer_address` TEXT  NOT NULL,
  PRIMARY KEY (`customer_id`)
)
ENGINE = MyISAM;


CREATE TABLE IF NOT EXISTS `repository_visitor` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `user_firstname` varchar(250) NOT NULL,
 `user_lastname` varchar(250) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);

/*
CREATE A DATA BASE LIKE:
CREATE DATABASE iumrper;

USE iumrper; // (use the db to insert tables)

CREATE A TABLE LIKE:

CREATE TABLE adminstrator (username VARCHAR(50) NOT NULL,
email VARCHAR(320) NOT NULL,
password VARCHAR(20) NOT NULL,
passwordAgain VARCHAR (20),
idnumber INT NOT NULL,PRIMARY KEY(idnumber));



CREATE TABLE pdf documents (authorname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
title VARCHAR(255) NOT NULL,
supervisor VARCHAR (255),
publicationNumber INT NOT NULL,
PRIMARY KEY(publicationnumber));


CREATE TABLE guest (username VARCHAR(50) NOT NULL,
password VARCHAR(20) NOT NULL,
visitorNumber INT NOT NULL,
PRIMARY KEY(idnumber));

CREATE TABLE student (username VARCHAR(50) NOT NULL,
email VARCHAR(320) NOT NULL,
password VARCHAR(20) NOT NULL,
passwordAgain VARCHAR (20),
studentnumber INT NOT NULL,
PRIMARY KEY(studentnumber));


-- insert information to the DB
INSERT INFORMATION USING "dbCon.php"

CREATE A VIEW LIKE:

CREATE VIEW minimum_release_year AS SELECT title FROM movies WHERE release_year >= 2022 ;


CREATE TABLE mock_user (user_uid VARCHAR(20) NOT NULL 

first_name VARCHAR(250) NOT NULL,
last_name VARCHAR(250) NOT NULL,
user_email VARCHAR(250) NOT NULL,
user_pswd VARCHAR (20) NOT NULL,
user_id INT (20) NOT NULL ,PRIMARY KEY(user_id);

-- CREATE and DROP TABLE
DROP TABLE `project_article`;
CREATE TABLE IF NOT EXISTS `project_article` (
	`proj_id` INT (50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`proj_author` VARCHAR (255) NOT NULL,
	`proj_supervisor` VARCHAR (255) NOT NULL,
	`proj_faculty` VARCHAR (255) NOT NULL,
	`proj_title` VARCHAR (255) NOT NULL,
	`proj_file` LONGBLOB NOT NULL, 
	`upload_date` DATETIME NOT NULL);








`proj_file` BLOB NOT NULL (in case we need to upload a whole file to the database)

Restart Auto INCREMENT

TRUNCATE TABLE table_name;
*/

