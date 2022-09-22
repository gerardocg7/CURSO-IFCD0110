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

    $contador1 = 1;   
    while($contador1<=10){
      echo "Vuelta numero $contador1<br>";
      $contador1++;
    }
 
    while($variable3 == "HOLA"){
      echo "HOLA COMO ESTÁS?";
      $variable3 = "ADIOS";
    }


    $var_bool=true;
    while($var_bool){
      echo "Lo que sea<br>";
      $var_bool = false;
    }
  */
       $contador1=21;
      do{
        echo "Entra por lo menos 1 vez";
        $contador1++;
      }while($contador1<20);


    for($i=0;$i<=10;$i+=2){

      if(($i%2) == 0){
        
        echo "El número ".$i." es par";
      }else{
        echo "El número ".$i." es impar";
      }
      echo "Vuelta numero $i<br>";
    }
?>