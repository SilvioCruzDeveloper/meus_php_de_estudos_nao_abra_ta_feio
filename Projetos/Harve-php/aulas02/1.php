<?php

$aray = ["cerveja", "Sabao", "Amandita"];
echo $aray;
echo "<br>";
echo "<br>";
echo var_dump($aray);
echo "<br>";
echo "<br>";
foreach ($aray as $key => $value) {
    echo "<br>  o valor da key e : $key | o valor da value e : $value <br> ";
}