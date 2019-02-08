-- CREATE DATABASE Instadog;

-- CREATE USER "adminInstadog"@"localhost" IDENTIFIED by "Inst@D0g";

-- GRANT ALL PRIVILEGES ON Instadog.* TO "adminInstadog"@"localhost";

CREATE TABLE Profile_User (
userId INT (100) not null primary key,
nom VARCHAR (255),
prénom VARCHAR (255),
password VARCHAR (255),
login VARCHAR (25)
);

CREATE TABLE Chien (
chienId INT (100)not null primary key,
userId INT (100),
nom VARCHAR (255),
race VARCHAR (255),
age INT (10),
surnom VARCHAR (255),
elevage VARCHAR (255),
photo VARCHAR (255),
FOREIGN KEY (userId) REFERENCES Profile_User (userId)
);

CREATE TABLE Article (
articleId INT (100) not null primary key,
chienId INT (100),
message VARCHAR (255),
photo VARCHAR (255),
dateParution DATE,
FOREIGN KEY (chienId) REFERENCES Chien (chienId)
);

CREATE TABLE Commentaire (
iD INT (100),
userId INT (100),
articleId INT (100),
login VARCHAR (25),
texte VARCHAR (255),
date DATE,
FOREIGN KEY (userId) REFERENCES Profile_User (userId),
FOREIGN KEY (articleId) REFERENCES Article (articleId)
);
