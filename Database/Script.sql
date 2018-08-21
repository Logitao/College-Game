CREATE DATABASE CollegeGame;

USE CollegeGame;

CREATE TABLE SystemUser(
	Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Score INT NOT NULL
);

CREATE TABLE UserLogin(
	Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    LoginName varchar(255) not null,
    UserPassword varchar(255) not null,
    IsActive BOOL NOT NULL,
    idSystemUser int not null,
    FOREIGN KEY (idSystemUser) REFERENCES SystemUser(id)
);