<!DOCTYPE html> 
<html>
    <head>
        <title>Estados Variable</title>
    </head>
    <body>
        

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
echo "<table  text-align:center; border=2>";
    echo "<tr>";

    $var=0;
    $ContenidoVar = array(null,0,null,false,"0","","foo",array());


    $VariacionVar= array(  "<td>".'$var=null'."</td>", "<td>".'$var = 0;'."</td>", "<td>".'$var = true'."</td>","<td>".'$var = false'."</td>",
        "<td>".'$var = "0";'."</td>", "<td>".'$var = "";'."</td>", "<td>".'$var = "foo"; '."</td>", "<td>".'$var = array( );'."</td>",
        "<td>".'unset ($var); '."</td>");
    
    for ($j = 0; $j < $VariacionVar; $j++) {   
        for ($i = 0; $i <$ContenidoVar; $i++) {
              echo $j;        
              $ContenidoVar[$i]=$var;

    
echo "<td>";
function confugurada($var){
    if(isset($var)){
    return "true";
    } else {
        return "false";    
    }
    
}
echo  confugurada($var);

echo "</td>";


echo "<td>";
function vacia($var) {
        if(empty($var)){
    return "true";
    } else {
        return "false";    
    }
} 

echo vacia($var) ;
echo "</td>";


echo "<td>";
function conversion($var) {
    if((bool) $var){
        return "true";
    } else {
        return "false";    
    }
    }      

echo conversion($var) ;
echo "</td></tr>";
    }  } 
    
    
?>
            </table>
</body>
</html>
