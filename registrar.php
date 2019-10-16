<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $db_host="localhost";
    $db_nombre="usuarios";
    $db_usuario="root";
    $db_contrase="";
    
    //primer metodo de conexion por procedimiento
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contrase, $db_nombre);

    if(mysqli_connect_errno()){
        echo "fallo la conexion!";
        exit();
    }

    //guardo la sentencia SQL
    $consulta="SELECT * FROM DATOSPERSONALES";

    //genero la consulta y la guardo en un resultado
    $resultado=mysqli_query($conexion,$consulta);

    //almacena fila por fila el resultado de la consulta en un array
    while( $fila=mysqli_fetch_row($resultado)){
        $i=0;
        //muestra uno por uno los datos del registro
        while($fila[$i]){
            echo $fila[$i]. " ";
            $i++;
        }
        //echo $fila[0]. " ";
        //echo $fila[1]. " ";
        //echo $fila[2]. " ";
        //echo $fila[3];
        echo "<br>";
    } 

    
    
    //cerrar la conexion
    mysqli_close($conexion);
?>
</body>
</html>