<?php
//CONEXÃO COM O BANCO DE DADOS
$host = 'localhost:3306';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';

try{
    //CRIA UMA NOVA INSTANCIA DE pdo PARA CONECTAR AO BANCO DE DADOS
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//DEFINE O MODO DE ERRO DO pdo PARA EXCEÇÕES
   
    //RECUPERA TODOS OS FUNCIONARIOS DO BANCO DE DADOS
        $sql = "SELECT id,nome FROM funcionarios";
        $stmt = $pdo->prepare($sql); //PREPARA A INSTRUÇÃO SQL PARA EXECUÇÃO
        $stmt->execute();//EXECUTA A INSTRUÇAO
        $funcionarios = $stmt->fetchALL(PDO::FETCH_ASSOC);//BUSCA TODOS OS RESULTADOS COM UMA MATRIZ ASSOCIATIVA

        //VERIFICA SE FOI SOLICITADO A EXCLUSAO DE UM FORNECEDOR DE UM FORMULARIO
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['excluir_id'])){
            $excluir_id = $_POST['excluir_id'];
            $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";
            $stmt_excluir = $pdo->prepare($sql_excluir);
            $stmt_excluir->bindParam(':id',$excluir_id,PDO::PARAM_INT);
            $stmt_excluir->execute();

            //REDIRECIONA PARA EVITAR O REENVIO DO FORMULARIO
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        }
       }catch(PDOException $e){
            echo "Erro.". $e->getMessage();
        }
        
?>
<?php
$opcoes_menu = [
    "Cadastrar" => ["cadastro_funcionario.php"],
    "Buscar" => ["consultar_funcionario.php"],
    "Visualizar" => ["visualizar_funcionario.php"],
    "Início" => ["index.php"]
];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Funcionário</title>
    <style>
        ul.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #007bff;
            display: flex;
            justify-content: center;
        }

        ul.menu > li {
            position: relative;
            padding: 15px 20px;
        }

        ul.menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
        }

        ul.menu li:hover {
            background-color: #0056b3;
        }

        ul.menu li ul.dropdown-menu {
            display: none;
            position: absolute;
            top: 50px;
            left: 0;
            background-color: #007bff;
            list-style: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
        }

        ul.menu li:hover ul.dropdown-menu {
            display: block;
        }

        ul.menu li ul.dropdown-menu li {
            padding: 10px;
        }

        ul.menu li ul.dropdown-menu li:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
            margin-top: 60px;
        }
    </style>
</head>
<body>
<nav>
    <ul class="menu">
        <?php foreach ($opcoes_menu as $categoria => $arquivos): ?>
            <li class="dropdown">
                <a href="#"><?= $categoria ?> ▾</a>
                <ul class="dropdown-menu">
                    <?php foreach ($arquivos as $arquivo): ?>
                        <li>
                            <a href="<?= $arquivo ?>">
                                <?= ucfirst(str_replace("_", " ", basename($arquivo, ".php"))) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

    <h1>Consulta de Funcionário</h1>

    <ul>
        <?php foreach ($funcionarios as $funcionario):?>
            <li>
                <a href="visualizar_funcionario.php?id=<?= $funcionario['id']?>">
                    <?=htmlspecialchars($funcionario['nome'])?>
                </a>

                <form method="POST" style="display: inline;">
                    <input type="hidden" name="excluir_id" value="<?= $funcionario['id']?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
            <?php endforeach;?>
    </ul>
</body>
</html>