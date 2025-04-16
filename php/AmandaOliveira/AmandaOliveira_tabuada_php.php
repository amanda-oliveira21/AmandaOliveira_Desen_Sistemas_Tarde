<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em php</title>
    <style type="text/css">
        table{
            border-collapse: collapse;

        }
        th, td{
            border-style:solid;
            width: 100px;
        }
    </style>
</head>
<body>
<table>
    <h1>Tabuada em php</h1>
        <?php
        for($l=1;$l<=10;$l++)
        {
            echo"<tr>";
            for ($c=1; $c<=10;$c++){
               $resultado = $l * $c;
               echo "<td> $l x $c = $resultado</td>";
            }
            echo "<tr/>";
        }
        ?>

    </table>
    <?php
         echo "<h2> Aluna: Amanda de Oliveira</h2>"
      ?>
</body>
</html>