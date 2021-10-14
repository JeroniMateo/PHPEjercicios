<html>
    <head>
/* Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
        <title>Formulario PHP</title>
    </head>
    <body>
        <h2>VALIDACION</h2>


<?php
/*
 *$nombre='';
 *$edad='';
 *$email='';  
 *$error_array=array();
 *  */

if(isset($_GET['submit'])){
    echo 'Validado';
    /*
     * if(isset($_GET['submit']){
     *  $nombre=$_GET{'nombr];}
     * else{
     *      $nombre=null;}

          */
    
    
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
