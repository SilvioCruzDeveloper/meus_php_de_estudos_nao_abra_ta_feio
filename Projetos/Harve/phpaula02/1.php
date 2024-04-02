<?php
$idade = 18;
$sexo = "F";
if ($idade >= 18 && $sexo == "M") {
    echo "alistamento militar obrigatorio";
} else if ($idade >= 18 && $sexo == "F") {
    echo "alistamento militar opicional";
} else {
    echo "menor de idade";
}
