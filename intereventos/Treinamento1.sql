/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  daniel
 * Created: 14/06/2018
 */

USE intereventos;

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario(
codigo INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(30),
senha VARCHAR(15),
PRIMARY KEY (codigo)
);

INSERT INTO usuario (nome, email, senha)
VALUES ('maria', 'maria@gmail.com', '123');

INSERT INTO usuario (nome, email, senha)
VALUES ('Claudia', 'claudia@gmail.com', '123');

INSERT INTO usuario (nome, email, senha)
VALUES ('Daniel', 'daniel@gmail.com','123');