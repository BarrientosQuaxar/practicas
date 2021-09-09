<?php
include("conexionTra.php");
$user = "SELECT * from trabajadores ";




?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
  <title>Trabajadores walmartk</title>
</head>  
<link rel="stylesheet"
          href="estilo.css">
<body>
<div class="container-table">
    <div class="table__title">Datos trabajadores</div>
    <div class="table__header">ID_empleado</div>
    <div class="table__header">Nombre</div>
    <div class="table__header">Dirección</div>
    <div class="table__header">puesto</div>
    <div class="table__header">Sueldo</div>

<?php $resultado=mysqli_query($conexion, $user);

while($filas=mysqli_fetch_array($resultado)){ ?>

<div class="table__item"><?php echo $filas["ID_empleado"];?></div>
<div class="table__item"><?php echo $filas["nombre"];?></div>    
<div class="table__item"><?php echo $filas["dirección"];?></div>
<div class="table__item"><?php echo $filas["puesto"];?></div>
<div class="table__item"><?php echo $filas["sueldos"];?></div>

<?php  }  mysqli_free_result($resultado);?>
</div>
<button onclick="location.href='Alta1.php'">Agregar Trabajador</button>
<button onclick="location.href='BorrarTraba1.php'">Eliminar Trabajador</button>
<button onclick="location.href='Actualizar1.php'">Actualizar datos trabajador</button>
</body>
</html>
