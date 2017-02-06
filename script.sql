CREATE DATABASE formlib;
CREATE TABLE submissions(
id int(10) NOT NULL AUTO_INCREMENT,
firstname varchar(255) NOT NULL,
lastname varchar(255) NOT NULL,
gender varchar(1) NOT NULL,
description varchar(255) NOT NULL,
status varchar(255) NOT NULL,
PRIMARY KEY (id)
);