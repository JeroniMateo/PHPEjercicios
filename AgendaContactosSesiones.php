<?php
        //Start the session
        session_start();
/*session created*/    
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Agenda de contactos</title>
    </head>
    <body>   
       <?php

        $nuevo_nombre = filter_input(INPUT_GET,'nombre');
        $nuevo_telefono = filter_input(INPUT_GET,'telefono');
        
        if (isset($_GET['submit']))
        {
            $_SESSION[$nuevo_nombre]=$nuevo_telefono;
        }
        ?>

        <!-- Creamos el formulario de introducción de un nuevo contacto -->
        <h2>Nuevo contacto</h2>
        <form>
            <!-- Comentamos los contactos ya existentes ocultos en el formulario -->
            <div style="align-items: left">

                <label>Nombre:<input type="text" name="nombre"/></label><br />
                <label>Teléfono:<input type="number" name="telefono"/></label><br />
                <input type="submit" name='submit' value="Ejecutar"/><br />
            </div>
        </form>
        <br />
        <?php
        print_r($_SESSION);
        ?>
             
    </body>
</html>