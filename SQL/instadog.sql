  create database InstaDog; 
 
create user "adminInstadog"@"localhost" identified by "inst@D0g";

grant all privilege ON InstaDog.* to "adminInstadog"@"localhost"






create table Profile_User(
    userId int(100) AUTO_INCREMENT primary key,
    nom varchar (255),
    prenom varchar(255),
    pwd varchar (255),
    email varchar(25)
);

create table Chien(
    chienId int(100) AUTO_INCREMENT primary key,
    userId int(100),
    nom varchar (255),
    race varchar(255),
    age int(10),
    surnom varchar(255),
    elevage varchar(255),
    photo varchar(255),
    foreign key (userId) references Profile_User (userId)
);

create table Article (
    articleId int (100) AUTO_INCREMENT primary key,
    chienId int(100),
    message varchar(255),
    photo varchar(255),
    dateParution date,
    foreign key (chienId)references Chien (chienId)    
);

create table commentaire (
    id int(100) AUTO_INCREMENT primary key,
    userId int(100),
    articleId int (100),
    login varchar(25),
    message varchar (255),
    date date,
    foreign key (userId)references Profile_User (userId),
    foreign key (articleId)references Article (articleId)    
);
