<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>

  <?php
  echo "Hola <br>";
  echo $_REQUEST['nombre'];  
 
  if($_REQUEST['edad']>=18){

    echo "<br>Es mayor de edad";

  }else{
      echo"<br>Losiento pero eres menor de edad";
  }



  ?>

</body>

</html>