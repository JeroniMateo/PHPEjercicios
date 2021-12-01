<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contactos Con Sesiones</title>
</head>

<body>
    <?php
    //Iniciamos la sesion con una cookie de 1 dia
    session_start(['cookie_lifetime' => 86400]);

    if (!isset($_SESSION['agenda']))
        // Creamos $agenda como un array vacío
        $_SESSION['agenda'] = array();

    if (isset($_REQUEST['submit'])) {
        $nuevo_nombre = trim($_REQUEST['nombre']);
        $nuevo_telefono = $_REQUEST['telefono'];
        if (empty($nuevo_nombre))
            echo "<p style='color:red'>Debe introducir un nombre!!</p><br />";
        elseif (empty($nuevo_telefono))
            unset($_SESSION['agenda'][$nuevo_nombre]);
        else
            $_SESSION['agenda'][$nuevo_nombre] = $nuevo_telefono;
    }
    ?>


    <!-- Creamos el formulario para añadir un nuevo contacto  toda esta parte es igual que sin sesiones -->
    <h2>Nuevo contacto</h2>
    <form action="" method="get">
        <!-- Metemos los contactos ya existentes ocultos en el formulario  -->
        <div style="align-items: left">
            <label>Nombre:<input type="text" name="nombre" /></label><br />
            <label>Teléfono:<input type="text" name="telefono" /></label><br />
            <input type="submit" name='submit' value="Ejecutar" /><br />
        </div>
    </form>
    <br />

    <!-- Mostramos los contactos de la agenda -->
    <h2>Agenda</h2>
    <?php
    $agenda = $_SESSION['agenda'];
    if (count($agenda) == 0)
        echo "<p>No hay contactos en la agenda.</p>";
    else {
        echo "<ul>";
        foreach ($agenda as $nombre => $telefono)
            echo "<li>" . $nombre . ': ' . $telefono . "</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>