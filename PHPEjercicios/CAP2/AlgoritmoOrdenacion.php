<?php

function burbuja(&$numeros)
{
   
    for ($i = 0; $i < count($numeros); $i++) {
        for ($j = 0; $j < count($numeros) - 1; $j++) {
            if ($numeros[$j] > $numeros[$j + 1]) {
                $const = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $const;
            }
        }
    }
}

$numeros = [3, -2, 8, 230.2, 78, 8.9, 0];
print_r($numeros);
echo '<br>';
echo '<br>';
burbuja($numeros);
print_r($numeros);
    ?>
