<?php
$idade = 48;
$sexo = "M";
$pet = "gato";
$cor = "azul";
if ($idade <= 30 || ($pet == "gato" && $cor == "azul")) {
    echo "ok";
} else {
    echo "falha";
}