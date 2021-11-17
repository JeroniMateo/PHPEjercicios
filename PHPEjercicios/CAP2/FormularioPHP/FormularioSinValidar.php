<html>
    <head>

        <title>Formulario PHP</title>
    </head>
    <body>
        <h2>SIN VALIDACION</h2>


<?php


if(isset($_GET['submit'])){
    echo 'Validado';
}else{
    displayForm();
}


function DisplayForm(){
    global $nombre,$edae,$email;

?>
        <form>
            <input name="Nombre" placeholder="Nombre" type="text" value=" ">
            <input name="Edad" placeholder="Edad"  type="number" value=" ">
            <input name="Email" placeholder="Email" type="email" value=" "/>
            <input name="submit" placeholder="Validar" type="submit" value="Validar"/>
        </form>
<?php
}
?>
    </body>
</html>
