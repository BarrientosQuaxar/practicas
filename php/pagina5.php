<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  //Mostramos la tabla del 2 
  echo "Tabla del 2 con el for";
  echo "<br>";
  for ($entero = 2; $entero <= 20; $entero = $entero + 2) {
    echo $entero;
    echo "-";
  }

  echo "<br>";
  echo "Tabla del 2 con el while";
  echo "<br>";
  $entero = 2;
  while ($entero <= 20) {
    echo $entero;
    echo "-";
    $entero = $entero + 2;
  }



  echo "<br>";
  echo "Tabla del 2 con el do/while";
  echo "<br>";
  $entero = 2;
  do {
    echo $entero;
    echo "-";
    $entero = $entero + 2;
  } while ($entero <= 20);
  ?>

</body>

</html>