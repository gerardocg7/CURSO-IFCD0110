<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio formulario</title>
</head>

<body>
    <?php
    if (isset ($_POST['nombre'])) {?>
    <button onclick="javascript:history.back();"><b><< Volver</b></button>
    <!--HTML-->
    <ul>
       <li>Nombre: <?php echo $_POST['nombre'];?></li>
       <li>Edad: <?php echo $_POST['edad'];?> años</li>
       <li>Email: <?php echo $_POST['email'];?></li>
       <li>Teléfono: <?php echo $_POST['tel'];?></li>
       <li>Curso: <?php echo $_POST['curso'];?></li>
       <li>Ganas: <?php echo $_POST['cuantoganas'];?> €</li>
       <li>Gastas: <?php echo $_POST['cuantogastas'];?> €
           <ul>
               <li>Te queda: <?php echo $_POST['cuantoganas'] - $_POST['cuantogastas'] ;?> €</li>
           </ul>
       </li>
       
    </ul>

    <?php 
     } else { 
        ?>          
    <!--HTML Mostramos el formulario action "index.php"-->
        <form name="form" target="_self" id="form" action="index.php" method="post">

    <ul>

        <h2>Envianos tus datos</h2>
        <h1>Cubre el formulario</h1> 

        <li>
                <!-- Campo obligatorio tipo texto-->
                <label for="nombre"><span class="required">*</span> Tu nombre</label><br>
                <input type="text" name="nombre" id="nombre" required>

            </li>

        <li>
                <!-- Campo tipo numérico-->
                <label for="edad">Tu edad</label><br>
                <input type="number" name="edad">

            </li>

        <li>
                <!-- Campo tipo numérico-->
                <label for="cuantoganas">Cuanto ganas?</label><br>
                <input type="number" name="cuantoganas">

            </li>

        <li>
                <!-- Campo tipo numérico-->
                <label for="cuantogastas">Cuanto gastas?</label><br>
                <input type="number" name="cuantogastas">

            </li>

        <li>
                <!-- Campo obligatorio tipo Email-->
                <label for="email"><span class="required">*</span> Email</label><br>
                <input type="email" name="email" id="email"  required>

            </li>
            
        <li>
                <!-- Campo tipo Tel (teléfono)-->
                Teléfono <br>(formato xxx yyy zzz):<br>
               <input type="tel" name="tel">
            </li>

            <li>
                <!-- Campo tipo select, que crea un menú desplegable con las ociones
               -->
               ¿Qué curso quieres?
               <label for="curso">Elige uno</label>

               <select name="curso" id="curso">
                   <option value="">Elige uno...</option>
                   <option value="HTML">HTML</option>
                   <option value="CSS">CSS</option>
                    <!-- Este sería el valor seleccionado por defecto
               -->
                   <option value="JS" selected>JAVASCRIPT</option>
               </select>

               <input type="submit" name="Enviar" value="Enviar">

        </li>

    </ul>

    <?php
    } 
    ?>
    
</body>

</html>

