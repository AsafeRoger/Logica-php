<?php

    class cartas{
        private $nome;
        private  $numero;

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }
    }
  
// Naipes e valores do baralho
$naipes = ['Copas', 'Espadas', 'Ouros', 'Paus'];
$valores = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

// Array para armazenar o baralho
$baralho = array();

// Criando as cartas com um laço
foreach ($naipes as $naipe) {
    foreach ($valores as $valor) {
        // Criando um objeto Carta
        $carta = new cartas($naipe, $valor);
        // Adicionando a carta ao baralho
        $baralho[] = $carta;
    }
}

        //MENU PRINCIPAL//

$opcao = 0;

            do {
                echo "\n-----------MENU-----------\n";
                echo "1- Jogar\n";
                echo "2- Como Jogar\n";
                echo "0- SAIR\n";
                $opcao = readline("Escolha a opção: ");
            switch($opcao) {
            case 0:
                echo "Programa encerrado!\n";
            break;
            case 1:
                         do {
                                echo "\n-----------MENU-----------\n";
                                echo "1- Cadastrar Jogadores\n";
                                echo "2- Como Jogar\n";
                                echo "0- SAIR\n";
                                $opcao = readline("Escolha a opção: ");
                            switch($opcao) {
                            case 0:
                                echo "Programa encerrado!\n";
                            break;
                           
                            case 1:
                                
                                    echo"opaaa";
                                    do {
                    
                                        echo "\n-----------MENU-----------\n";
                                        echo "1- Jogar Sozinho\n";
                                        echo "2- Dois Jogadores\n";
                                        echo "3- Três Jogadores\n";
                                        echo "4- Quatro Jogadores\n";
                                        echo "0- SAIR\n";
                                        $opcao = readline("Escolha a opção: ");
                                    switch($opcao) {
                                    case 0:
                                        echo "Programa encerrado!\n";
                                    break;
                                    case 1:
                                        $CartaDaSorte = array_rand($baralho, 1);
                                        $jogador1 = readline("Escolha um nome: \n");
                                        echo "\n-----TENTE ADIVINHAR-----\n";
                             aaaaaa           $CartaEscolhida = readline($jogador1." Escolha uma carta: \n");
                                        if($CartaEscolhida =! $baralho){
                                            echo "A carta escolhinda nao existe\n";
                                        }if($CartaEscolhida == $CartaDaSorte){
                                            echo"\nParabens ".$jogador1." VOCE ACERTOU\n";
                                        }else{
                                            echo "VOCE ERROU HAHAHAHA";
                                        }

                            
                                        
                                    break;
                                    case 2:
                                        echo "Listando....\n";
                        
                        
                                    break;
                                    case 3:
        
        
                                    break;
                                    case 4:
        
        
                                    break;
                    
                                    default:
                                        echo "Opção INVÁLIDA!\n";
                                    }
                                    } while($opcao != 0);
                                
                            break;
        
        
                            case 2:
                                echo "Listando....\n";
                
                
                            break;
                            default:
                                echo "Opção INVÁLIDA!\n";
                            }
                            } while($opcao != 0);
                
                
            break;
            case 2:
                echo "Listando....\n";


            break;
            default:
                echo "Opção INVÁLIDA!\n";
            }
            } while($opcao != 0);

                    //FIM DO MENU PRINCIPAL
/*
                    do {
                    
                                echo "\n-----------MENU-----------\n";
                                echo "1- Jogar Sozinho\n";
                                echo "2- Dois Jogadores\n";
                                echo "3- Três Jogadores\n";
                                echo "4- Quatro Jogadores\n";
                                echo "0- SAIR\n";
                                $opcao = readline("Escolha a opção: ");
                            switch($opcao) {
                            case 0:
                                echo "Programa encerrado!\n";
                            break;
                            case 1:
                                $CartaDaSorte = array_rand($baralho, 1);
                                $jogador1 = readline("Escolha um nome: \n");
                                echo "\n-----TENTE ADIVINHAR-----\n";
                                $CartaEscolhida = readline($jogador1." Escolha uma carta: \n");
                                if($CartaEscolhida = $CartaDaSorte){
                                    echo"\nParabens ".$jogador1." VOCE ACERTOU\n";
                                }else{
                                    echo "VOCE ERROU HAHAHAHA";
                                }
                                
                                
                            break;
                            case 2:
                                echo "Listando....\n";
                
                
                            break;
                            case 3:


                            break;
                            case 4:


                            break;
            
                            default:
                                echo "Opção INVÁLIDA!\n";
                            }
                            } while($opcao != 0);
                        
                        //outro menu
                            do {
                                echo "\n-----------MENU-----------\n";
                                echo "1- Cadastrar Jogadores\n";
                                echo "2- Como Jogar\n";
                                echo "0- SAIR\n";
                                $opcao = readline("Escolha a opção: ");
                            switch($opcao) {
                            case 0:
                                echo "Programa encerrado!\n";
                            break;
                           
                            case 1:
                                
                                    echo"opaaa";
        
                            break;
        
        
                            case 2:
                                echo "Listando....\n";
                
                
                            break;
                            default:
                                echo "Opção INVÁLIDA!\n";
                            }
                            } while($opcao != 0);
                        */