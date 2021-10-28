<html>
    <head>
    <link rel="stylesheet" href="style/style.css">
        
    
    </head>
    <body>
    




<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "zsk_4b_baza1";


$connect = new mysqli($servername, $username, $password, $database);


$sql = "SELECT * FROM `users`";
        
$sql2 = "select * FROM users u left join cities c on u.city_id = c.id;";


$result = $connect->query($sql2);
//$row = $result->fetch_assoc();
//
//print_r($row);

echo <<<TBL
    <table>
        <tr>
            <th>Id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>data urodzenia</th>
        </tr>

TBL;

while($row = $result->fetch_assoc()){
//    print_r($row);
    
    
    echo <<<ROW
        <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$row[city]</td>
        </tr>
    ROW;
}

echo "</table>";

$connect->close();
        
        
?> 
        
    
    </body>
</html>