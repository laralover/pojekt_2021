<?php

$name = "michal";

echo "twoje imie " . $name;

$bin = 0b1010;
$oct = 011;
$hex = 0x14;

//echo "<br>" . gettype($hex);

echo "<br>";

echo var_dump($hex);


$hd = <<< E

nfoenalnwpfnpk
rgjgj
E;

//heredoc
echo <<< F

Imie i nazwisko

$hd
F;




?>