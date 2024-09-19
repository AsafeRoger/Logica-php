<?php

    $turma1 = new Turma();
    $turma1->setNome("1TDS");
    $turma1->setCurso("Técnico em Desenvolvimento de Sistemas");

 
    $alunos = array();

    for ($i=0; $i <= 4 ; $i++) { 
        $aluno1 = new Aluno();
        $aluno1->setNome(readline("Digite o nome do aluno: "));
        $aluno1->setIdade(readline("Digite a idade do aluno: "));
        $aluno1->setTurma($turma1);
        array_push($alunos, $aluno1);
    }
