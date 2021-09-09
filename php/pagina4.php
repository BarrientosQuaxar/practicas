<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  //Generar un valor aleatorio entre 1 y 3. Luego imprimir 
  //en castellano el número

  $valor = rand(1,3);
  echo "El valor sorteado es $valor<br>";
  if ($valor == 1) {
    echo "Uno";
  } else {
    if ($valor ==2) {
      echo "Dos";
    } else {
      echo "Tres";
    }
  }
  ?>

</body>

</html>