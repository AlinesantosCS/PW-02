CREATE DATABASE EAD_PWII;

USE EAD_PWII;

CREATE TABLE Usuario (
	idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    UserName VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL,
    tipo VARCHAR (20) NOT NULL DEFAULT 'usuario',
    ativo BOOL NOT NULL DEFAULT true,
    CPF VARCHAR(14) NOT NULL UNIQUE);
    
    SELECT * FROM Usuario;
    INSERT INTO Usuario VALUES(1,'Aline Santos','alinesantos@gamil.com','santosAline','123456','administrador',true,'12345678911')