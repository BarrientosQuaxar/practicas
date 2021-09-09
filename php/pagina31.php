<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from cursos
                        where nombrecurso='$_REQUEST[nombrecurso]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="pagina32.php" method="post">
      Ingrese nuevo nombre de curso:
      <input type="text" name="nombrecursonuevo" value="<?php echo $reg['nombrecurso'] ?>">
      <br>
      <input type="hidden" name="nombrecursoviejo" value="<?php echo $reg['nombrecurso'] ?>">
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe un curso con dicho nombre";
  ?>
</body>

</html>