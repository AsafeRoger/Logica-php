<?php


        class pessoa{
            private $nome;
            private $sobrenome;
            private $idade;

            public function __toString(){
                return sprintf("%s, %s, %d anos\n",
                $this->nome, $this->sobrenome, $this->idade);
            }

            
            /**
             * Get the value of nome
             */
            public function getNome()
            {
                        return $this->nome;
            }

            /**
             * Set the value of nome
             */
            public function setNome($nome): self
            {
                        $this->nome = $nome;

                        return $this;
            }

            /**
             * Get the value of sobrenome
             */
            public function getSobrenome()
            {
                        return $this->sobrenome;
            }

            /**
             * Set the value of sobrenome
             */
            public function setSobrenome($sobrenome): self
            {
                        $this->sobrenome = $sobrenome;

                        return $this;
            }

            /**
             * Get the value of idade
             */
            public function getIdade()
            {
                        return $this->idade;
            }

            /**
             * Set the value of idade
             */
            public function setIdade($idade): self
            {
                        $this->idade = $idade;

                        return $this;
            }
        }

            $pessoas = array();

        $opcao = 0;
            do {
                echo "\n-----------MENU-----------\n";
                echo "1- Cadastrar\n";
                echo "2- Listar\n";
                echo "0- SAIR\n";
                $opcao = readline("Escolha a opção: ");
            switch($opcao) {
            case 0:
                echo "Programa encerrado!\n";
            break;
            case 1:
                echo "Inserindo....\n";
                $pessoa = new pessoa();
                $pessoa ->setNome(readline("Digite o nome da pessoa: "))
                ->setSobrenome(readline("Digite o sobrenome: "))
                ->setIdade(readline("digite a idade: "));
                array_push($pessoas, $pessoa);
            break;
            case 2:
                echo "Listando....\n";
                foreach($pessoas as $e){
                    printf("%s | %s | %d\n", $e->getNome(), $e->getSobrenome(), $e->getIdade());
               }

            break;
            default:
                echo "Opção INVÁLIDA!\n";
            }
            } while($opcao != 0);
