CREATE DATABASE YOUCODECLUBS;
USE YOUCODECLUBS;
CREATE TABLE ADMIN(
	Id INT NOT NULL PRIMARY KEY auto_increment,
    UserName VARCHAR(255),
    Password VARCHAR(255)
);

CREATE TABLE USER(
	Id INT NOT NULL PRIMARY KEY auto_increment,
    FullName VARCHAR(255),
    Class VARCHAR(255),
    Email VARCHAR(255),
    Club VARCHAR(255)
);

CREATE TABLE CLUBS(
    Id INT NOT NULL PRIMARY KEY auto_increment,
	Clubname VARCHAR(255),
    Description longtext,
	Image varchar(255)
);

CREATE TABLE ADMIN(
    Id INT NOT NULL PRIMARY KEY auto_increment,
	UserName VARCHAR(255),
    Password VARCHAR(255)
);

SELECT * FROM ADMIN;

