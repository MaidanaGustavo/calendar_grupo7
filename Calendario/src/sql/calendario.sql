

CREATE DATABASE PersonalCalendar;

CREATE TABLE usuario(
	nome VARCHAR(20),
 sobrenome VARCHAR(50),
 id int auto_increment primary key,
 senha VARCHAR(100),
 userName VARCHAR(20),
 email VARCHAR(100)
);

CREATE TABLE notas(
	texto VARCHAR(1000),
 dataNota date,
 idNota int auto_increment primary key,
 idUsuario int,
 CONSTRAINT fk_usuario FOREIGN KEY(idUsuario) REFERENCES usuario(id)
);
