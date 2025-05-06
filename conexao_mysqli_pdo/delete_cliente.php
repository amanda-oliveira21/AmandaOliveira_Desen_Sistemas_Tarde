<?php
//Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Estabelece conexão
$conexao = conectadb();

//Define o ID do cliente que será excluído
$id_cliente = 2;

//Prepara a consulta SQL segura
$stmt = $conexao ->prepare("DELETE FROM cliente WHERE id_cliente = ?");

//Associa o parâmetro ao valor da consulta
$stmt->bind_param("i", $id_cliente);