<?php
$var = [1, 2, 5, 8, 12, 33];
$sum = 0;
foreach ($var as $value) {
    $sum = $sum + $value;
}

echo "A soma dos valores é: " . $sum;