<!doctype html>

<html>

<head>

</head>

<body>
    <H1>VAMOS A VALIDAR</H1>
    <?php
    // Si se reciben datos del forumulario, validamos.
    $nombre = '';
    $edad = '';
    $email = '';
    $errores_array = array();

    if (isset($_GET['submit'])) {
        $nombre = filter_input(INPUT_GET, 'nombre', FILTER_CALLBACK, array('options' => 'validarNombre'));
        $edad = filter_input(INPUT_GET, 'edad', FILTER_CALLBACK, array('options' => 'validarEdad'));
        $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

        // email se valida pero no es obligatorio.
        if ($email === FALSE && is_null($email)) {
            $errores_array[] = "EMAIL: introduzca un correo válido";
        }
        // ha pasado la validación
        if (!count($errores_array)) { 
            echo "Validación correcta- Los datos introducidos son: $nombre, $edad y $email";
        }
        //no ha pasado la validación
        else { 
            echo "Validación Falló:<br/>";
            displayForm($errores_array);
        }
    } else {
        displayForm($errores_array);
    }

    function validarNombre($nom = "")
    {
        global $errores_array;
        $nom = trim($nom);

        if (is_string($nom) && (strlen($nom) > 2)) {
            return $nom;
        }
        $errores_array[] = "Nombre: debe tener al menos 2 caracteres alfanuméricos";
        return '';
    }

    function validarEdad($edad)
    {
        global $errores_array;
        if (is_numeric($edad) && ($edad >= 1 && $edad <= 140)) {
            return $edad;
        } else {
            $errores_array[] = "EDAD: debe estar en el rango 1 a 140";
            return '';
        }
    }

    function DisplayForm($errores)
    {
        global $nombre, $edad, $email;

        if (count($errores)) {
            foreach ($errores as $error) {
                echo "<br/>$error";
            }
            echo  '<br/>Codificación JSON: ' . json_encode($errores);
        }
    ?>
        <h1>Registro de usuario</h1>
        <form>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>" />
            <input type="text" name="edad" placeholder="Edad" value="<?= $edad; ?>" />
            <input type="text" name="email" placeholder="email" value="<?= $email; ?>" />
            <input type="submit" name="submit" />
        </form>
    <?php
    }
    ?>
</body>

</html>