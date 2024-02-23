<?php

    function area ($raio){
        $area = 3.14 * $raio * $raio;
        echo "\nArea: " . $area . ".\n\n";

    }
    function circunferencia ($raio){
        $circunferencia = 2 * 3.14 * $raio;
        echo "\nCircunferencia: " . $circunferencia . ".\n\n";

    }   

    for ($i=1; $i <= 3; $i++) { 
        $raio = readline("Digite um ". $i ."° raio em centimetros: ");
        area($raio);
        circunferencia($raio);
    }
