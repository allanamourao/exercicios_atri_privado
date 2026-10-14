
<?php
class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicio = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicio;
    }

    public function abastecer($litros){
        if($litros > 0){
           $this->tanque += $litros;
           echo "Abastecidos " . $litros . " litro(s) no " . $this->modelo . ".";
        }else{
            echo "Erro!Informe uma quantidade de litros válida";
        }
    }

    public function dirigir($km){
        if ($km <= 0){
            echo "Erro!Informe uma distância válida.<br>";
            return;
        }

        $necessario = $km / $this->consumo;

        if ($necessario <= $this->tanque){
            $this->tanque -= $necessario;
            echo "O carro " . $this->modelo . " percorreu " . $km . "km e consumiu " . number_format($necessario, 0, ',', '.') . " litros.";
        }else {
            echo "Combustível insuficiente para percorrer " . $km . "km.<br>";
        }
    }

    public function exibirInfo() {
        echo "Modelo: " . $this->modelo . " | ";
        echo "Consumo: " . $this->consumo . " km/L | ";
        echo "Tanque: " . number_format($this->tanque, 2, ',', '.') . " litros";
    }
}

$carro = new Carro("Chevrolet Onix", 15, 15);

$carro->exibirInfo();
echo "<br>";
$carro->dirigir(70);
echo "<br>";
$carro->abastecer(30);
echo "<br>";
$carro->exibirInfo();

?>