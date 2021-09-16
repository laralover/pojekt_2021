<?php

echo <<<E

<h3> dane uzytkownika get<h3>

<form method="GET">
<input type="text" name="name" placeholder="podaj imie"><br>
<input type="text" name="surname" placeholder="podaj nazwisko"><br>
<input type="submit" value="Apply">

</form>


E;



echo isset($_GET["name"]) ? $_GET["name"] : "";

if (!empty($_GET["name"]) and $_GET["surname"]) {
    
    echo <<< L
    
    
    Imie : $_GET[name] <br>
    Nazwisko : $_GET[surname]
    
    L;
    
}
else{

    echo "wypelnij dane";
}

echo <<<E

<h3> dane uzytkownika post<h3>

<form method="POST">
<input type="text" name="name" placeholder="podaj imie"><br>
<input type="text" name="surname" placeholder="podaj nazwisko"><br>
<input type="submit" value="Apply">

</form>


E;



echo isset($_POST["name"]) ? $_POST["name"] : "";

if (!empty($_POST["name"]) and $_POST["surname"]) {
    
    echo <<< L
    
    
    Imie : $_GET[name] <br>
    Nazwisko : $_GET[surname]
    
    L;
    
}
else{

    echo "wypelnij dane";
}


?>
