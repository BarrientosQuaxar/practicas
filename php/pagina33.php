
<html>
<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into trabajadores(nombre,dirección,puesto,sueldos) values 
  ('$_REQUEST[nombre]','$_REQUEST[dirección]','$_REQUEST[puesto]',$_REQUEST[sueldos])")
or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "La persona fue dada de alta.";
  ?>
  <button onclick="location.href='trabajadores1.php'">Regresar pagina principal</button>
</body>

</html>