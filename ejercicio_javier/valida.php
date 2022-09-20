<?php

  $Nombre = $_POST['nombre'];
  $Apellidos = $_POST['apellidos'];
  $Email = $_POST['mail'];
  $Telefono = $_POST['telefono'];
  $Direccion = $_POST['direccion'];
  $Edad = $_POST['edad'];
  $Contrasinal = $_POST['contrasinal'];
  $Recontrasinal = $_POST['recontrasinal'];

  echo "Los datos recibidos son: <br> ".$Nombre."<br> ".$Apellidos."<br> ".$Email."<br> ".$Telefono."<br> 
   ".$Direccion."<br> ".$Edad."<br> ".$Contrasinal."<br> ".$Recontrasinal;

?>