<html>
    <head>
    <link rel="stylesheet" href="style/style.css">
        
    
    </head>
    <body>
    




<?php

@require_once "./connect.php";


$sql = "SELECT * FROM `users`";
        
$sql2 = "select u.id, u.name, u.surname, u.birthday, c.city FROM users u left join cities c on u.cityId = c.id;";


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
            <td><a href="delete.php?id=$row[id]">Usuń</a></td>
        </tr>
    ROW;
}

echo "</table>";

$connect->close();
        
        
?> 
        
    
    </body>
</html>