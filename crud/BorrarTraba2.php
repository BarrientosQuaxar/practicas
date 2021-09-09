<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre
                        from trabajadores where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from trabajadores where nombre='$_REQUEST[nombre]'") or
          die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el despido del trabajador.";
      } else {
        echo "No existe un trabajador con este nombre.";
      }

  mysqli_close($conexion);
  ?>
  <button onclick="location.href='trabajadores1.php'">Regresar pagina principal</button>
</body>

</html>