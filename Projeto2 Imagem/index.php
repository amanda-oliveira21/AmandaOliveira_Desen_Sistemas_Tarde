<?php
// Define as páginas separadas por categoria
$opcoes_menu = [
    "Cadastrar" => ["cadastro_funcionario.php"],
    "Buscar" => ["consultar_funcionario.php"],
    "Visualizar" => ["visualiza_funcionario.php"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início do Projeto</title>
    <link rel="stylesheet" href="styles.css">
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

<h1>Bem-vindo ao Sistema de Funcionários</h1>

</body>
</html>
