<?php

function show(){
    echo "show <br>";
}

function showName($name){
    return $name;
}

function validateString($name, $len){
    
    return substr(ucfirst(strtolower(trim($name))), 0, $len);
}



?>