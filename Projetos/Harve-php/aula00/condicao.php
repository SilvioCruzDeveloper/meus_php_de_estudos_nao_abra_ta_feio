<?php 
    $idade = 28;
    $genero = "F";
    $pet = "gato";
    $cor = "azul";

    // idade = 16 ou pet = gato
    
    // if( ( $idade == 16 ) || ($pet == 'gato') ){
    //     echo  "ok condicao idade = $idade ou pet = $pet "; 
    // }else{
    //     echo  "NAO ok condicao idade = $idade ou pet = $pet "; 
    // }

    // pet igual gato e idade maior 28
    // if( ( $idade > 28 ) && ($pet == 'gato') ){
    //     echo  "ok  "; 
    // }else{
    //     echo  "erro "; 
    // }


    // idade <= a 30 ou cor = azul e pet = gato
    // if( ( ( $idade <= 30 ) || ( $cor == 'azul') ) && ($pet == 'gato') ){
    //     echo "ok";
    // }else{
    //     echo "erro";
    // }

    // idade <= a 30 ou cor = azul e pet = gato
    // if( $idade <= 30  || ( $cor == 'azul' && $pet == 'gato' ) ){
    //     echo "ok";
    // }else{
    //     echo "erro";
    // }

    // ------------------------------------------------------------------------------------------
    // idade maior 28 e
    //     genero F ou 
    //     a cor azul e pet seja gato 
    // ou
    //   idade maior 50 e
    //   o pet seja gato ou a cor seja amarela

    // if( ($idade > 28 && $genero = "F") || ($cor == "azul" && $pet == "gato") || ($idade == 50 && ($pet == "gato" || $cor == "amarelo") ) ){
    //     echo "ok";
    // }else{
    //     echo "erro";
    // }    


//     Aplique as regras de validação abaixo no login do sistema:
// * Checar se a senha tem pelo menos um número
// * Tem pelo menos uma letra
// * Tem pelo menos um caractere especial
// * Possui pelo menos 8 caracteres

//if (str_contains($string, 'raposa')) {

function temnumero($senha){
    return preg_match('/[0-9]/', $senha);
}
function temletra($senha){
    return preg_match('/[a-zA-Z]/', $senha);
}

function temcarac($senha){
    return preg_match('/[^a-zA-Z 0-9]+/g', $senha);
}

function numero($senha){
    for ( $i = 0; $i <= strlen( $senha); $i++ ){
        if( is_numeric($senha[$i]) ){
            return true;
        }else{
            return false;
        }
    }
}

$senha = "12345671a";

if( temnumero($senha) && temletra($senha) /*&& temcarac($senha) && strlen($senha)*/ ){ 
    echo "senha ok";
}else{
    echo "senha invalida";
}


// array posicional 0, 1, 2 , etc... 

// array  referencia
// array[ 'a' => 'pos1' ,  'b' => 'pos2' ]
// array_shift 1 elem do array
// end ultimo elemento array 

?>