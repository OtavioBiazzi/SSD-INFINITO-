<?php

$numero = $_POST["numero"];

if($numero >= 100 && $numero <= 200){
    echo "Está entre 100 e 200";
}else{
    echo "Não está entre 100 e 200";
}

?>