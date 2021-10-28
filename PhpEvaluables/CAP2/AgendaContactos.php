<html>
    <head>

        <title>AGENDA DE CONTACTOS</title>
    </head>
    <body>
        
        <?php
        $contacto= '';
        $telefono= '';
        $nombre='';
        
 /*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */ 
   echo "Rellena los siguientes campos";
        if(isset($_GET['contacto'])){
        $contacto=$_GET['contacto'];}
        else{
            $contacto =array();
             //Creamos $contacto com un array vacio
        }
        
        
        if(isset($_GET['submit']))
        {
              $nombre = filter_input(INPUT_GET, $_GET['nombre']);
              $telefono=filter_input(INPUT_GET, $_GET['telefono']);
              if(empty($nombre))
              {
                  echo "debe introducir un nombre";
              }elseif(empty ($telefono)){
                  unset($contacto[$nombre]);
              } elseif($nombre && $telefono) {
                  set($contacto);
                  if ($nombre=$nombre) {
                       unset($contacto[$nombre]);
                       unset($contacto[$telefono]);
                  }elseif ($telefono=$telefono) {
                       unset($contacto[$nombre]);
                       unset($contacto[$telefono]);
                        
        }
              }
          }
        
        
?>

       <form method="get">
           
            
            <input type="text" name="contacto[]" value=" "/>
            <input type="text" name="telefono" value=" "/>
            <input type="submit" name="submit" value="Enviar">
            
            
        </form>
            
        
        <h3>CONTACTOS</h3>
        <?php
                echo "<ul>";
                   foreach($contacto as $nombre =>$telefono){
                       echo "<li>" . $nombre . '=' . $telefono . "<li/>" ;
                   }
                    echo "<ul/>";

               
            ?>
    </body>
</html>

