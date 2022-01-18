<?php 
$nome = $_GET['nome'];
$mail = $_GET['mail'];
$età = $_GET['età'];

if(isset ($nome && $mail && $età) ){
    if(strlen($nome) > 3 && strpos($mail , '@')!== false && strpos($mail , '.')!== false && is_numeric($età) ){
        echo "Accesso Riuscito";
    }else{
        echo "Accesso Negato";
    }
}
