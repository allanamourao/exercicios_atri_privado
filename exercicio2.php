<?php
class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
            echo "Venda realizada com sucesso.<br>";
        }else{
            echo "Estoque insuficiente!<br>";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco -= $this->preco * ($percentual / 100);
    }

    public function exibirInfo(){
        echo $this->nome . " => ";
        echo "R$: " . $this->preco . " | " ;
        echo "Estoque:" . $this->estoque . "unidade(s)";
    }
}

$produto = new Produto("Teclado Gamer", 250, 10);

$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();
?>