CREATE DATABASE Ajax_FB;
USE Ajax_FB;

CREATE TABLE membre(
     Nom VARCHAR(10),
    Email VARCHAR(50),
    Pwd VARCHAR(20)
);

INSERT INTO membre (Nom,Email,Pwd) VALUES("test","test@gmail.com","test");