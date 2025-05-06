CREATE DATABASE empresa;
USE empresa;

CREATE TABLE cliente (
`id_cliente` int NOT NULL AUTO_INCREMENT,
`nome` varchar(50) NOT NULL, 
`endereco` varchar(20) NOT NULL,
`telefone` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
PRIMARY KEY(`id_cliente`)
);

CREATE TABLE usuario(
`nome` varchar(50) DEFAULT NULL,
`usuario` varchar(10) DEFAULT NULL,
`senha` varchar(32) DEFAULT NULL,
`nivel` int DEFAULT NULL
);


a
