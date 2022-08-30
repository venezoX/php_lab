<?php
$primos = array();
$minimo = 0;
$maximo = 28;

for ($i = $minimo; $i < $maximo; $i++){
    $divisores = 0;
   for($div = $i; $div >=1; $div--){
        if(($i % $div) == 0){
            $divisores++;
        }
   }
      
if ($divisores == 2)
{
    echo $i . ',';
}

}