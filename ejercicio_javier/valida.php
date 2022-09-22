
<?php
if (empty($_POST)){
   header ("location:index.html"); // genera nueva localización 
   die();  // que no esté vacio el formulario 
} else{
 if(empty($_POST['nombre'])){
   echo "campo nombre vacio";
   die();
 }else{
$nombre = htmlspecialchars($_POST['nombre']);} // variable propia de php para que no inyecten código
$apellido = $_POST['apellidos'];
$Email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$contrasinal = $_POST['contrasinal'];
$recontrasinal = $_POST['recontrasinal'];

//verificar contraseñas son iguales
if($contrasinal != $recontrasinal){
    echo "las contraseñas no coinciden";
    header ("location:index.html");
    die();
}
$fecha = date('j-m-y');// envia fecha del dia 

   /*
echo "los datos recibidos son:" .$nombre." " .$apellido." <br>".$Email." ".$direccion." " .$telefono." ".$edad."<br> ".$contrasinal." " .$recontrasinal;
echo "<br>".$fecha;
$archivo ="datosformulario.txt";// variable nombre archivo
$creofichero = fopen ($archivo , "a"); // creamos funcion  pare que abra la fila con el nombre del archivo y la a es que vaya engadindo al final
fwrite($creofichero, $nombre."-" .$apellido. "-" .$Email. "-" .$edad."-" .$telefono."-" .$direccion."-" .$contrasinal."-" .$fecha. "\n"); //escribe en el fichero
fclose($creofichero);
*/
// conectar base de datos 
// creamos 4 variable 
$nombreServidor = "localhost";
$nombreUsuario = "admin";
$pwd = "12345678";
$Basededatos = "agenda";
//creamos la conexion : una  variable mew mysqli con las variable anteriores en el orden exacto.
$conexionn = new mysqli($nombreServidor,$nombreUsuario,$pwd,$Basededatos);

// probamos conexión 
 if($conexionn ->connect_error){
    echo "error en la conexion";

 } else {
    echo "conexion ok";
 }

$sql = "INSERT INTO `usuarios`(`ID`, `NOMBRE`, `APELLIDOS`, `EMAIL`, `TELEFONO`, `DIRECCION`, `EDAD`, `CONTRASINAL`, `FECHA_ALTA`) VALUES 
  (' ','$nombre', '$apellidos', '$Email','$telefono','$direccion','$edad','$contrasinal','$fecha')";

// sentencia que hace ejecutar  es $conexionn -> query ($sql)

 if ($conexionn ->query($sql) ===TRUE){
    echo "datos guardados";
   
 } else{
    echo "nooo";
 }
}
?>

