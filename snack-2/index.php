<?php 
$nome = $_GET['nome'];
$mail = $_GET['mail'];
$eta = $_GET['eta'];

if(isset ($nome) && isset($mail) && isset ($eta) ){
    if(strlen($nome) > 3 && strpos($mail , '@')!== false && strpos($mail , '.')!== false && is_numeric($eta) ){
        echo "Accesso Riuscito";
    }else{
        echo "Accesso Negato";
    }
}
