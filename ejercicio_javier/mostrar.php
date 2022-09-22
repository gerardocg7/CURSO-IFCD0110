<?php
//conexión a bbdd
$nombreServidor = "localhost";
$nombreUsuario = "admin";
$pwd = "12345678";
$Basededatos = "agenda";

//creamos la conexión
$conexionn = new mysqli($nombreServidor,$nombreUsuario,$pwd,$Basededatos);

// probamos la conexión 
 if($conexionn ->connect_error){
    echo "error en la conexion";

 } else {
    echo "conexion aceptada";
 }
 $sql = "SELECT * from `usuarios`";
    echo "<table border = 1>";

 if($resultado = $conexion->query($sql)){

    while($row = $resultado ->fetch_assoc()){
        $Id = $row["id"];
        $Nombre = $row["nombre"];
        $Apellidos = $row["apellidos"];
        $Email = $row["email"];
        $Telefono = $row["telefono"];
        $Direccion = $row["direccion"];
        $Edad = $row["edad"];
        $Contrasinal = $row["contrasinal"];
        $Fecha = $row["fecha_alta"];

        echo "<tr>;
        <td>".$Id."</td>
        <td>".$Nombre."</td>
        <td>".$Apellidos."</td>
        <td>".$Email."</td>
        <td>".$Telefono."</td>
        <td>".$Direccion."</td>
        <td>".$Edad."</td>
        <td>".$Contrasinal."</td>
        <td>".$Fecha."</td>";
        
        $resultado ->free();
        echo "</table>";
    }     

 }
 ?>