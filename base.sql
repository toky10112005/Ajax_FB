CREATE DATABASE Ajax_FB;
USE Ajax_FB;

CREATE TABLE membre(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(10),
    Email VARCHAR(50),
    Pwd VARCHAR(20)
);

INSERT INTO membre (Nom,Email,Pwd) VALUES("test","test@gmail.com","test");

CREATE TABLE publication(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_membre INT,
    contenu TEXT,
    date_pub TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    auteur VARCHAR(10)
);

CREATE TABLE commentaire(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pub INT,
    id_membre INT,
    contenu TEXT,
    date_com TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    auteur VARCHAR(10)
);

