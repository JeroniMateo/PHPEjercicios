<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES to Upload</title>
</head>
<body>
    
<?php

var_dump($_FILES);

move_uploaded_file($_FILES['file']["tmp_name"],"ficheros/".$_FILES['file']["name"])


?>
</body>
</html>