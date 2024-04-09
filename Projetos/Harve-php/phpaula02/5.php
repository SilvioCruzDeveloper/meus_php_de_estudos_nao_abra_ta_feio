<?php
//trabalhando com string 
$email = "teste@.com";
if (str_contains($email,"@") && str_contains($email,".")){
    echo "email valido";
}else{
    echo "email invalido";
}