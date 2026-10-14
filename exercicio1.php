<?php
class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        if($percentual <= 10 && $percentual > 0){
            $this->salario += $this->salario * ($percentual / 100);
        }else{
            echo "Percentual Inválido!Apenas valores maiores que 0 e menores/iguais a 10.)<br>";
        }
    }

    public function exibirSalario(){
        echo "<br>Funcionário: " . $this->nome . " - ";
        echo "Salário: " . $this->salario ;
    }
}

$funcionario1 = new Funcionario("Allana", 2000);
$funcionario2 = new Funcionario("Eloá");

$funcionario1->aumentarSalario(10);
$funcionario1->exibirSalario();
$funcionario2->aumentarSalario(5);
$funcionario2->exibirSalario();
?>