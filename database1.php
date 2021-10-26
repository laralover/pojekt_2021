<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "zsk_4b1_baza1";


$connect = new mysqli($servername, $username, $password, $database);


$sql = "SELECT * FROM `users`";


$result = $connect->query($sql);
//$row = $result->fetch_assoc();
//
//print_r($row);
while($row = $result->fetch_assoc()){
//    print_r($row);
    
    
    echo <<<E
        Id: $row[id]<br>
        Imie: $row[name],
        Nazwisko: $row[surname]<br>
        Data urodzenia: $row[birthday]<br>
        <hr>
    E;
}

$connect->close();


