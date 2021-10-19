<?php

require_once '../functions/function.php';

show();

if (!empty($_POST['name'])){
    echo "Imie ". validateString($_POST['name'], 4) . " Dlugosc " . strlen($_POST['name']);
}