<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update cursos
                          set nombrecurso='$_REQUEST[nombrecursonuevo]' 
                        where nombrecurso='$_REQUEST[nombrecursoviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El curso fue modificado con exito";
    ?>
</body>

</html>