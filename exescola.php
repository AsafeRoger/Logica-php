<?php

    class escola{
        private string $nome;
        private string $endereço;
        private  int $qtAlunos;

       public function __toString(){
          return  $this->getEndere() . $this->getNome;
      
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
         * Get the value of endere
         */
        public function getEndere()
        {
                return $this->endere;
        }

        /**
         * Set the value of endere
         */
        public function setEndere($endere): self
        {
                $this->endere = $endere;

                return $this;
        }

        /**
         * Get the value of qtAlunos
         */
        public function getQtAlunos()
        {
                return $this->qtAlunos;
        }

        /**
         * Set the value of qtAlunos
         */
        public function setQtAlunos($qtAlunos): self
        {
                $this->qtAlunos = $qtAlunos;

                return $this;
        }
    }
        $escolas = array();

        for ($i=0; $i < 4 ; $i++) { 
            $escola = new escola();
            $escola ->setNome(readline("Digite o nome da escola: "))
            ->setEndere(readline("onde fica essa escola: "))
            ->setQtAlunos(readline("digite a quantidade de alunos: "));
        }

        array_push($escolas, $escola);
        
        
        foreach($escolas as $e){
             printf("%s | %s | %d\n", $e->getNome(), $e->getEndere(), $e->getQtAlunos());
        }


        $escolaMaluno = $escolas[0];
        foreach($escolas as $e){
            if($e->getQtAlunos() > $escolaMaluno->getQtAlunos())
                $escolaMaluno = $e;
        }
        echo "\n Escola com mais alunos: ";
            printf("%s | %s | %d\n",
            $e->getNome(), $e->getEndere(), $e->getQtAlunos());




               // if($escola1->getQtAlunos() > $escola2->getQtAlunos() && $escola3->getQtAlunos() && $escola4->getQtAlunos()  ){
       //    echo $escola1->getNome() . "\n". $escola1->getEndere() . "\n". $escola1->getQtAlunos() . "\n";
       // }else if($escola2->getQtAlunos() > $escola1->getQtAlunos() && $escola3->getQtAlunos() && $escola4->getQtAlunos()  ){
       //     echo $escola2->getNome() . "\n". $escola2->getEndere() . "\n". $escola2->getQtAlunos() . "\n";
        //}else if($escola3->getQtAlunos() > $escola2->getQtAlunos() && $escola1->getQtAlunos() && $escola4->getQtAlunos()  ){
        //    echo $escola3->getNome() . "\n". $escola3->getEndere() . "\n". $escola3->getQtAlunos() . "\n";
        //}else if($escola4->getQtAlunos() > $escola2->getQtAlunos() && $escola3->getQtAlunos() && $escola1->getQtAlunos()  ){
        //    echo $escola4->getNome() . "\n". $escola4->getEndere() . "\n". $escola4->getQtAlunos() . " esta é a escola com mais alunos\n";
        //}
