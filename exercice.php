<?php

class Conversion
{
    public $_nombreDecimal;
    public $_nombreBinaire;

    public function decimalTobinary(){
        $binaire = decbin($this->_nombreDecimal);
        
        return $binaire;
    }

    public function binaryTodecimal(){
        $decimal = bindec($this->_nombreBinaire);
        return $decimal;
    }
}

$result = new Conversion();
$nbDecimal = $result -> _nombreDecimal = "15";
$nbBinaire = $result -> _nombreBinaire = "10101";

$result1 = $result -> decimalTobinary();

$result2 = $result -> binaryTodecimal();

echo "le nombre $nbDecimal en binaire est: $result1";

echo "</br></br>";

echo "le nombre $nbBinaire en decimal est: $result2";



/*
// nombre decimal à convertir
$nombreDecimal ="15";

//fonction pour le convertir decbin()
$binaire = decbin($nombreDecimal);
//affichage resultat
echo "le nombre $nombreDecimal est: $binaire en binaire";

echo "</br></br>";
// nombre binaire à convertir
$nombreBinaire = "1101010";

//fonction pour le convertir bindec()
$decimal = bindec($nombreBinaire);
//affichage resultat
echo "le nombre $nombreBinaire est: $decimal en decimal";
*/
?>