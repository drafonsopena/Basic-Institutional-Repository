CREATE TABLE mock_user (user_uid VARCHAR(20) NOT NULL 

first_name VARCHAR(250) NOT NULL,
last_name VARCHAR(250) NOT NULL,
user_email VARCHAR(250) NOT NULL,
user_pswd VARCHAR (20) NOT NULL,
user_id INT (20) NOT NULL ,PRIMARY KEY(user_id);

/*-- CREATE and DROP TABLE --*/
DROP TABLE `project_article`;
CREATE TABLE IF NOT EXISTS `project_article` (
	`proj_id` INT (50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`proj_author` VARCHAR (255) NOT NULL,
	`proj_supervisor` VARCHAR (255) NOT NULL,
	`proj_faculty` VARCHAR (255) NOT NULL,
	`proj_title` VARCHAR (255) NOT NULL,
	`proj_file` LONGBLOB NOT NULL, 
	`upload_date` DATETIME NOT NULL);
