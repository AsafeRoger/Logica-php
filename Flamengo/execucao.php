<?php
require_once("modelo/Time.php");
require_once("modelo/Jogador.php");


    //1-Criar objeto Time
    $time = new Time();
    $time->setNome("Flamengo");
    $time->setCidade("Rio de Janeiro");
    //print_r($time);

    //2-Criar objeto Jogador

    $jogador = new Jogador();
    $jogador->setNome("Pedro");
    $jogador->setNumero("9");
    $jogador->setTime($time);

    $jogador2 = new Jogador();
    $jogador2->setNome("RODILINDO");
    $jogador2->setNumero("666");
    $jogador2->setTime($time);

    //print_r($jogador);

    
    /*//3-Imprimir o nome do time do jogador Pedro

    echo $jogador->gettime()->getNome()."\n";
    $t = $jogador->getTime();
    echo $t->getCidade()."\n";*/

    //4- Array jogadores
  
    $jogadores = array();
    array_push($jogadores, $jogador);
    array_push($jogadores, $jogador2);
    $time->setJogadores($jogadores);
    print_r($time->getJogadores());
    
