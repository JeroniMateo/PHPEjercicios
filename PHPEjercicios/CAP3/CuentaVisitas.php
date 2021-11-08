<!-- Numero de veces que entras en una Pagina usando views-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Veces que has entrado a la pagina</title>
</head>
<body>
    <h1>Vamos a contar cuantas veces has entrado a esta Pagina</h1>
</body>
</html>
<?php
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
    $mensaje = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
}
else {

    setcookie( 'visitas', 2, time() + 3600 * 24 );
    $mensaje = 'Bienvenido a nuestra pagina, espero que disfrutes de tu 1a vez';
}

print_r($mensaje);
?>