<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base2") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update trabajadores
                          set nombre='$_REQUEST[nombrenuevo]' 
                        where nombre='$_REQUEST[nombreviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El nombre fue modificado con  exito";
    ?>


<?php
    $conexion = mysqli_connect("localhost", "root", "", "base2") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update trabajadores
                          set dirección='$_REQUEST[direcciónnuevo]' 
                        where dirección='$_REQUEST[direcciónviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "La dirección fue modificada con  exito";
    ?>


<?php
    $conexion = mysqli_connect("localhost", "root", "", "base2") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update trabajadores
                          set puesto='$_REQUEST[puestonuevo]' 
                        where puesto='$_REQUEST[puestoviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El puesto fue modificado con  exito";
    ?>
    
<?php
    $conexion = mysqli_connect("localhost", "root", "", "base2") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update trabajadores
                          set sueldos='$_REQUEST[sueldosnuevo]' 
                        where sueldos='$_REQUEST[sueldosviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El sueldo fue modificado con  exito";
    ?>
<button onclick="location.href='trabajadores1.php'">Regresar al menú </button>
</body>

</html>