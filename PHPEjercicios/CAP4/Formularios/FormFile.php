<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida ficheros Form</title>
</head>
<body>
    
<form action="Files.php" method="post" enctype="multipart/form-data">

    <input type="text">

    <label>Sube un fichero</label> <input type="file" name="file" id="file" placeholder="file">
    
    <input type="submit" name="submit" id="enviar">


</form>
<?php

?>
</body>
</html>