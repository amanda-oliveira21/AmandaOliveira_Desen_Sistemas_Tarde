<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Caso</title>
</head>
<body>
    <?php
       $s = "lampada";
       switch ($s){
        case "casa":
            print "A casa é amarela";
            break;
        case "arvore":
            print "a árvore é bonita";
            break;
        case "lampada":
            print "joao apagou a lampada";
            break;
        default:
           print "você não selecionou";
           break;
       }
    ?>

<?php
         echo "<h2> Aluna: Amanda de Oliveira</h2>"
      ?>
</body>
</html>