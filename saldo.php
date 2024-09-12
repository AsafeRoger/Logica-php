<?php



class receita
{
    private $descricao;
    private $valor;



    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;
        return $this;
    }
}

class despesa
{
    private $descricao;
    private $valor;


    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;
        return $this;
    }
}
$receitas = array();
$despesas = array();



$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Adicionar receita\n";
    echo "2- Adicionar Despesas\n";
    echo "3 Listar Receitas\n";
    echo "4- Listar Despesas\n";
    echo "5- Sumarizar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            echo "Inserindo....\n";
            $receita = new receita();
            $receita->setDescricao(readline("Digite a Descricação: "))
                ->setValor(readline("Digite o Valor: "));
            array_push($receitas, $receita);
            break;
        case 2:
            echo "Inserindo....\n";
            $despesa = new despesa();
            $despesa->setDescricao(readline("Digite a Descricação: "))
                ->setValor(readline("Digite o Valor: "));
            array_push($despesas, $despesa);
            break;
        case 3:
            echo "Listando....\n";
            foreach ($receitas as $e) {
                printf("%s | %d\n", $e->getDescricao(), $e->getValor());
            }

            break;
        case 4:
            echo "Listando....\n";
            foreach ($despesas as $e) {
                printf("%s | %d\n", $e->getDescricao(), $e->getValor());
            }

            break;
        case 4:
            echo "Listando....\n";
            foreach ($despesas as $e) {
                printf("%s | %d\n", $e->getDescricao(), $e->getValor());
            }

            break;
        case 5:
            $totalDespesa = 0;
            $totalReceitas = 0;
            $saldo = 0;
            foreach ($despesas as $desp ) {
                $totalDespesa += $desp->getValor();
            }

            foreach ($receitas as $totalRes) {
                $totalReceitas += $totalRes->getValor();
            }

            $saldo = $totalReceitas - $totalDespesa;

            echo "Saldo: R$ " . $saldo . "\n";
            echo "Total de receitas: R$ " . $totalReceitas . "\n";
            echo "Total de despesas: R$ " . $totalDespesa . "\n";


            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
