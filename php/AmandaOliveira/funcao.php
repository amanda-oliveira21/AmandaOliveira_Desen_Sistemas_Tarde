<html>
   <body>
      <?php
          echo $name = "Amanda de Oliveira";
          echo $length = strlen($name);
          echo $cmp = strcmp($name, "Brian Le");
          echo $index = strpos($name, "e");
          echo $first = substr($name, 9,5);
          echo $name = strtoupper($name);
      ?>

     <?php
         $cidade = "Joinville";
         $estado = "SC";
         $idade = 174;
         $frase_capital = "A cidade de $cidade tem a maior população de $estado";
         $frase_idade = "$cidade tem mais de $idade anos";
         echo "<h3>$frase_capital </h3>";
         echo "<h4>$frase_idade </h4>";
      ?>

      <?php
         echo "<h2> Aluna: Amanda de Oliveira</h2>"
      ?>
    </body>
</html>