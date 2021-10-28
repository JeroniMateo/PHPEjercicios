

<?php
  function factorial($n){
      if($n == 1){
         return 1;
      } 
      return $n * factorial($n - 1);
    }
echo "El numero factorial de 3 es:" . factorial(3);
    ?>