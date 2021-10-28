
<h1>ALGORITMO BURBUJA</h1>
<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//Creamos un array desordenado i lo mostramos
$numeros = [3, -2, 8, 230.2, 78, 8.9, 0];
echo "Array Desordenado:";
echo '<br>';
echo    "<p>NUMEROS ARRAY= $numeros[0], $numeros[1], $numeros[2], $numeros[3], $numeros[4], $numeros[5], $numeros[6]</p>";

//Creamos una funcion para que que recorra el array
function burbuja(&$numeros)
{
   //Rerroremos el array con 2 for
    
    for ($i = 0; $i < count($numeros); $i++) {
        for ($j = 0; $j < count($numeros) - 1; $j++) {
            //luego comparamos los numeros para ordenarlos
            if ($numeros[$j] > $numeros[$j + 1]) {
                $temporal = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $temporal;
            }
        }
    }
}


//llamamos a la función para que nos ordene el array y lo mostramos en una lista
echo '<br>';
burbuja($numeros);
echo "Array Ordenado:";
echo '<br>';

echo "<ul>";
foreach ($numeros as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";
    ?>