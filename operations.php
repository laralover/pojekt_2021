<?php

echo PHP_VERSION;

echo 2**10;//power

$x = 1;
$y = 10;

echo $x<=>$y;//-1 0 1

echo gettype($x);

if($x == $y){
    echo "rowne";
}
else{
    echo "rozne";
}

if($x === $y){
    echo "identyczne";
}

$x++;//po przypisaniu do zmiennej zmienia sie
++$x;

$x--;
--$x;

?>