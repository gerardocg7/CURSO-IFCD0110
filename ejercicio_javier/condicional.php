<?php
   $variable1 = 6;
   $variable2 = 45;
   $variable3 = "HOLA";
   /*
   if($variable1 < 18){
     echo "NO PUEDES ACCEDER A LA PÁGINA";
     $variable3 = "USUARIO";

   } else{
    echo "BIENVENIDO A LA PÁGINA";
   }
   
   if($variable1 < 18){
    echo "NO PUEDES ACCEDER A LA PÁGINA";
  }
  elseif($variable1 > 67){
    echo "BIENVENIDO JUBILADO";
  }
  else{
    echo "ESTUDIAS O TRABAJAS";
  }
*/
if($variable3 == "HOLA"){
    if($variable1 == 85){
        echo "TODO CORRECTO";
    }
    switch($variable1){
        case 1: echo "LUNES";
                 break;
        case 2: echo "MARTES";
                 break;
        case 3: echo "MIERCOLES";
                 break; 
        case 4: echo "JUEVES";
                 break; 
        case 5: echo "VIERNES";
                 break;
        default: echo "NO ES LABORABLE";
                 break;                                       
    }
}
?>