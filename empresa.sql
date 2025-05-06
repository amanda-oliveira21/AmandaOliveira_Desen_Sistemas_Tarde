CREATE DATABASE empresa;
CREATE TABLE cliente (
`id_cliente` int NOT NULL AUTO_INCREMENT,
`nome` varchar(50) NOT NULL, 
`endereco` varchar(20) NOT NULL,
`telefone` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
PRIMARY KEY(`id_cliente`)
);


