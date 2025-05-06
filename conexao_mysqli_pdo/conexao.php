<?php
//Habilita relátorio detalhado de erros no MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
/**
 * Função para conectar o banco de dados
 * Retorna um objeto de conexão MySQLi ou interrompe o script em caso de erro.
 */
function conectadb(){
    //Configuração de banco de dados
    $nomeservidor = "localhost:3307"; //Endereço do servidor
    $usuario = "root"; //Nome de usuário do banco
    $senha = "root"; //Senha do banco
    $bancodedados = "empresa"; //Nome do banco de dados
        
    try{
        //Criação da conexão
        $con = new mysqli($nomeservidor, $usuario, $senha, $bancodedados);
    
        //Definição do conjunto de caracteres para evitar 
    
        $con->set_charset("utf8mb4"); 
        return $con;
    } catch(Exception $e){
        //Exibe uma mensagem de erro e encerra o script
        die("Erro na conexão". $e->getMessage());
    
    }
}

?>