<?php

echo date("Y-m-d") . "<br>";
echo date("d-Y-m") . "<br>";
echo date("M-D-y") . "<br>";
echo date("Y-M-d") . "<br>";

setlocale(LC_ALL, 'polish');

echo strftime("%d %B %Y") . "<br>";

echo date("G i s") . "<br>";
echo date("G i sa") . "<br>";

echo date("H i s") . "<br>";

echo date("L") . "<br>";//przestepnosc roku

$date = getDate();
echo var_dump($date);

echo "<pre>";
print_r($date);
echo "</preS>";


$today = mktime(0,0,0,0,0,0);//hour minute second month day year



echo $today . "<br>";

//lat minelo od 1 st 1970
$today = mktime(0,0,0,date("m"),date("d"),date("y"));
$years = $today / (3600 * 24 * 365);
echo $years . "<br>";

// poprzedni rok

$today = mktime(0,0,0,date("m"),date("d"),date("y")-1);
$years = $today / (3600 * 24 * 365);
echo (int)$years . "<br>";

?>



<script>
    setTimeout(function(){
        window.location.reload();
    },1000);
</script>



