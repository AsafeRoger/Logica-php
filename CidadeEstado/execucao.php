<?php

    require_once("modelo/Cidade.php");
    require_once("modelo/Estado.php");

    //Criar objetos

    $SC = new Estado();
    $SC->setNome("Santa-Catarina");
    $SC->setSigla("SC");

    $PR = new Estado();
    $PR->setNome("Paraná");
    $PR->setSigla("PR");

    $florianopolis = new Cidade();
    $florianopolis->setNome("Florianopolis");
    $florianopolis->setQtdAbitantes(10);
    $florianopolis->setAltitude(100);
    $florianopolis->setEstado($SC);

    $blumenau = new Cidade();
    $blumenau->setNome("blumenau");
    $blumenau->setQtdAbitantes(100);
    $blumenau->setAltitude(1000);
    $blumenau->setEstado($SC);

    $foz = new Cidade();
    $foz->setNome("Foz-do-Iguaçu");
    $foz->setQtdAbitantes(200);
    $foz->setAltitude(300);
    $foz->setEstado($PR);

    $cascavel = new Cidade();
    $cascavel->setNome("Cascavel");
    $cascavel->setQtdAbitantes(2000);
    $cascavel->setAltitude(3000);
    $cascavel->setEstado($PR);

    $cidades = array($florianopolis, $blumenau, $foz, $cascavel);

    foreach($cidades as $c){

        print("\nA cidade de ". $c->getNome().",localizada no estado ". $c->getEstado()->getNome().$c->getEstado()->getSigla().", possui "
        . $c->getQtdAbitantes() . " habitantes e uma altitude de ". $c->getAltitude()." metros;\n");
      
    }
