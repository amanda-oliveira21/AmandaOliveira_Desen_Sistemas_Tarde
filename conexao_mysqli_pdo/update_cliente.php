<?php
//Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Estabelece conexão
$conexao = conectadb();

// Define os novos valores
$nome="Maria da Silva";
$endereco="Rua Kalamango, 32";
$telefone="(41) 5555-5555";
$email="mariasilva@teste.com";

// Define o ID do cliente a ser atualizado
$id_cliente = 4;

// Prepara a consulta SQL segura
$stmt = $conexao->prepare("UPDATE cliente SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id_cliente = ?");

// Associa os parâmetros aos valores da consulta
$stmt->bind_param("ssssi",$nome,$endereco,$telefone,$email,$id_cliente);


// CLIENTE QUE FOI ALTERADO: Cliente número >>4<<, pois foi criado 2 vezes então alterei um deles (o 4).