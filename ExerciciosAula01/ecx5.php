<?php

$altura = 1.70; 
$peso = 10 ;

$imc = $peso / ($altura*$altura);

if ($imc <= 18.5 ) {

    echo "peso abaixo do normal";

} else if ($imc >= 18.5 && $imc <= 24.9 ) {

    echo "Peso Normal";

}else if ($imc >= 25 && $imc <= 29.9 ) {

    echo "Peso excessivo";

}else if ($imc >= 30 && $imc <= 34.9 ) {

    echo "obesidade I";

} else {

    echo "Obesidade II";
}




?>