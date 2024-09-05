<?php

    class posto {
        private $LitrosGaso;
        private $abasGasolina;


        public function __construct() {
            $this->LitrosGaso = 0;
            $this->abasGasolina = array();
        }
        public function abastecer($litros) {
            if($this->LitrosGaso >= $litros){
                return true;
            }

        }

        public function reporEstoque($litros){
            $this->$LitrosGaso += $litros;
        }

        /**
         * Get the value of abasGasolina
         */
        public function getAbasGasolina()
        {
                return $this->abasGasolina;
        }

        /**
         * Set the value of abasGasolina
         */
        public function setAbasGasolina($abasGasolina): self
        {
                $this->abasGasolina = $abasGasolina;

                return $this;
        }
    }

    $AutoPosto = new posto;

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Abastecer\n";
    echo "2- Repor Estoque\n";
    echo "3- Listar o Abastecimento \n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        
        case 1:
            $litros = readline("Quantos litros voce quer abastecer? \n");
            $retorno = $posto->abastecer($litros);
            if($retorno){
                echo "abastecimento realizado com sucesso ";
            }else
                echo "nao deu faltou litros"

            break;

        case 2:
            $litros = readline("informe a quantidade de litros: \n");
            $AutoPosto->reporEstoque($litros);
            
               
            
            break;
            case 3:


               
        
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while($opcao != 0);



