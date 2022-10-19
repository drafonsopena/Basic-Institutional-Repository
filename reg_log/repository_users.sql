CREATE TABLE IF NOT EXISTS `repository users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `user_firstname` varchar(250) NOT NULL,
 `user_lastname` varchar(250) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
