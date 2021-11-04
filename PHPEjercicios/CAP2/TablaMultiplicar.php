<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla Multiplicar</title>
    </head>
    <body>
        
              <?php //Programa de tablas de multiplicar
    echo "<table  text-align:center; border=5>";
    echo "<tr>";
    
for ($tabla=1; $tabla <=10 ; $tabla++){
	echo "<td>Tabla del $tabla </td>";
        echo "</tr>";
	echo "<tr>";
for ($x=1; $x <=10 ; $x++){
	echo '<tr><td>'. $tabla.' * '.$x.' = '. ($tabla * $x) .'<td></tr>' ;
}
echo '</tr>';

}
echo '</table>';
?>
    </body>
</html>
