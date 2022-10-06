<?php

    $idade = $_GET["idade"];
    if($idade < 16){
        echo "Não Pode Votar...";
    }else if($idade < 18){
        echo "Seu voto é Opcional...";
    }else if($idade <= 70){
        echo "Voto Obrigatório...";
    }else{
        echo "Voto Opcional...";
    }
 






?>