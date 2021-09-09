

</html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select ID_empleado,nombre,dirección,puesto,sueldos
                        from trabajadores where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

 
   if($reg = mysqli_fetch_array($registros)) {
    echo "ID_empleado:" . $reg['ID_empleado'] . "<br>";
    echo "nombre:" . $reg['nombre'] . "<br>";
    echo "dirección:" . $reg['dirección'] . "<br>";
    echo "puesto:" . $reg['puesto'] . "<br>";
    echo "sueldos:" . $reg['sueldos'] . "<br>";
    

   



    echo "<hr>";
  }
  
  
  
  
  else{  echo "No existen alumnos con dicho nombre";
  }
  mysqli_close($conexion);
  ?>
   <form action="Actualizar3.php" method="post">
    Ingrese nuevo nombre del trabajador:
    <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
    <br>
    <input type="hidden" name="nombreviejo" value="<?php echo $reg['nombre'] ?>">
    <br>
      Ingrese una nueva dirección del  trabajador:
    <input type="text" name="direcciónnuevo" value="<?php echo $reg['dirección'] ?>">
    <br>
    <input type="hidden" name="direcciónviejo" value="<?php echo $reg['dirección'] ?>">
    <br>
    Ingrese el nuevo puesto del trabajador:
    <input type="text" name="puestonuevo" value="<?php echo $reg['puesto'] ?>">
    <br>
    <input type="hidden" name="puestoviejo" value="<?php echo $reg['puesto'] ?>">
    <br>
    Ingrese el nuevo sueldo del trabajador:
    <input type="text" name="sueldosnuevo" value="<?php echo $reg['sueldos'] ?>">
    <br>
    <input type="hidden" name="sueldosviejo" value="<?php echo $reg['sueldos'] ?>">



      <input type="submit" value="Modificar">




    </form>



</body>

</html>