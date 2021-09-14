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

?>