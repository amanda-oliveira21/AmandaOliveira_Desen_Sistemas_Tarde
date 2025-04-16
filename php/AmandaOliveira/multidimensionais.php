<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $musicas = array(
        array ("Kid Abelha", "Amanhã", 1993),
        array ("Ultrage A Rigor", "Peladps", 1985),
        array ("Paralamas do Sucesso", "Alagados", 1987));
        for($linha=0;$linha<3;$linha++)
        {
            for($coluna= 0;$coluna<3;$coluna++)
        {
            echo $musicas[$linha][$coluna]." | ";

       }
            echo "<br/>";
    }
    ?>

    <?php
         echo "<br/>";
         $AmazonProducts = array(
            array ("Código"=>"Livro","Descrição"=>"Livros","Preço" => 50),
            array ("Código"=>"DVDs","Descrição"=>"Filmes","Preço" => 15),
            array ("Código"=>"CDs","Descrição"=>"Música","Preço" => 20),
         );
         for($linha= 0;$linha<3;$linha++){?>
            | <?= $AmazonProducts[$linha]["Código"] ?>
            | <?= $AmazonProducts[$linha]["Descrição"] ?>
            | <?= $AmazonProducts[$linha]["Preço"] ?>
         </p>
         <?php
         }
         ?>
         <?php
         echo "<h2> Aluna: Amanda de Oliveira</h2>"
      ?>
</body>
</html>