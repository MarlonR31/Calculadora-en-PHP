<?php

echo "Multiplicando ".$_POST["Numero1"];
echo " x ".$_POST["Numero2"];
echo "<br>";

class Multiplicacion
{
    public $Num1;
    public $Num2;

    public function __construct($Numero1, $Numero2)
    {
        $this->Num1 = $Numero1;
        $this->Num2 = $Numero2;
    }

    public function operacion()
    {
        $Resultado = $this->Num1 * $this->Num2;
        echo "La Multiplicacion de ".$this->Num1. " x ". $this->Num2. " es igual a: ". $Resultado;
    }

}

$Operacion = new Multiplicacion($_POST['Numero1'], $_POST["Numero2"]);
$Operacion->operacion()

?>