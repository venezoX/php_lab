#<?php

echo 'olá mundo';

//$compras = [];  versão mais simples do codigo abaixo para array, tipo dinâmico
//$compras = array();

//$compras = ['bala','abacaxi','cerveja']
//              0       1          2

$tamanho = count($compras); //pode ser trocado a quantidade de repetições pelo tamanho do array compras

$compras=[
    'doce'=> 'bala',
    'frutas'=>['abacaxi','maça'],
    'bebidas'=>'cerveja'
];

//var_dump($compras); mostra tudo que há dentro de um array

foreach ($compras as $idx => $value){
    echo $idx ."-". $compras[$i]."<br>";
}
