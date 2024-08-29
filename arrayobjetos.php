<?php


    class robo{
        
    private  string $nome;
    private  string $tipo;
    private  int $quatSensores;

        //construtor
        public function __construct($n="",$t="", $qtS=0 ){
            return $this->getNome() = $n;
            return $this->getTipo() = $t;
            return $this->getQuatSensores() = $qtS;
            
        }


        //metodo

      public function __toString(){
            return  $this->getTipo() . $this->getNome;
      }

        
        
        
        /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of quatSensores
     */
    public function getQuatSensores(): int
    {
        return $this->quatSensores;
    }

    /**
     * Set the value of quatSensores
     */
    public function setQuatSensores(int $quatSensores): self
    {
        $this->quatSensores = $quatSensores;

        return $this;
    }
    }

   

    //programa principal

    $robo1 = new Robo();
    $robo1 -> setNome("Otimusprime")->setTipo("Arduino")->setQuatSensores(3);
    $robo2 = new Robo();
    $robo2->setNome("Micael")->setTipo("Arduino")->setQuatSensores(2);
    $robo3 = new Robo();
    $robo3 -> setNome("Jesus")->setTipo("Arduino")->setQuatSensores(5);

    $robos = array($robo1, $robo2);

    //echo $robos[1]->getNome(),"\n";

    array_push($robos, $robo3 , new Robo("laercio","arduino",4));
    //echo $robos[2]->getNome(),"\n";
    //echo $robos[2],"\n";

    //for ($i=0; $i <count($robos); $i++) { 
     //   echo $robos[$i]->getNome() . "\n";
    //}

    //foreach($robos as $robo){
   //     echo $robo->getNome() . "\n";
   // }
$algumRobo - $robos[3];
echo $algumRobo->getTipo() . "\n";
echo $algumRobo[3]->getTipo() . "\n";
