<?php 
    if ( !$isset($_POST['name']) || !$isset($_POST['email']) ) {
        die('esta pag nao pode ser acessada diretamente');
    }else{
        $var = $_POST['name'];
        $var2 = $_POST['email'];
        
        echo "o nome e $var e o email e $var2";
    }
   
?>