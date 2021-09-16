<?php

echo "AAAAAA";
$name = 'Michal';


echo "<br>";

//heredoc
echo <<< AAA
    l
   $name
  l
AAA;


echo "<br>";

//nowdoc
echo <<< 'AAA'
    l
   $name
  l
AAA;

//include
//require_once

//__FILE__ pelna sciezka do danego pliku



?>
