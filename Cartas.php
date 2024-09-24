<?php

class Carta
{
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

$naipes = ["Ouro", "Espadas", "Copas", "Paus"];
$numeros = ["Ás", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Rei"];
$baralho = [];

foreach ($naipes as $naipe) {
    foreach ($numeros as $numero) {
        $carta = new Carta();
        $carta->setNome($numero);
        $carta->setNumero($naipe);
        $baralho[] = $carta; // Adiciona a carta ao baralho
    }
}
// TESTE: print_r($baralho);

//MENU PRINCIPAL//

$opcao = 0;

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Jogar\n";
    echo "2- Como Jogar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            $Rounds = 1;
            $jogador1 = readline("Escolha um nome para o Jogador: ");
            $acertos = 0;
            $tentativas = 4;

            $CartaDaSorte = $baralho[array_rand($baralho)];

            print_r($CartaDaSorte);



            for ($i = 0; $i <= 3; $i++) {

                echo "\n-----TENTE ADIVINHAR-----\n";
                echo "\n-----ROUND " . $Rounds . " -----\n";

                $CartaEscolhida = new Carta;
                $CartaEscolhida->setNome(readline("Digite o nome/numero da carta escolhida: "));
                $CartaEscolhida->setNumero(readline("Digite o naipe da carta escolhida: "));

                if ($CartaEscolhida->getNumero() == $CartaDaSorte->getNumero() && $CartaEscolhida->getNome() == $CartaDaSorte->getNome()) {
                    echo "\nParabens " . $jogador1 . " VOCE ACERTOU\n";
                    $Rounds = $Rounds + 1;
                    $acertos = $acertos + 1;
                } else {
                    echo "VOCE ERROU HAHAHAHA, Voce ainda Tem " . $tentativas - $Rounds  . " tentativas\n";
                    $Rounds = $Rounds + 1;
                }
            }

            if ($acertos == 4) {
                echo "Parabens " . $jogador1 . " você acertou todas as vezes";
            }
            
            if ($acertos >= 2 && $acertos != 4) {
                echo "Voce até que foi bem";
            }
            
            if ($acertos == 1 || $acertos == 0) {
                echo "MEU DEUS " . $jogador1 . " VOCE É MUITO RUIM";
            }
            

            break;
        case 2:
            
            echo "\n-----REGRAS DO JOGO-----\n";
            echo "No jogo é utilizado um baralho comum, como o de poker por exemplo\n";
            echo "É sorteada uma carta, e seu objetivo é adivinhar qual é a carta\n";
            echo "Você tera 4 tentativas\n";
            echo "\n-----BOA SORTE-----\n";
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);

