<!DOCTYPE thml>

<html>
<head>
    <title>Zadanie 5.10</title>
</head>

<body>
    
    
    
    
    <?php
        
        if (!isset($_GET['person'])){
            echo <<< E
            
            <h3>Ilość osób w rodzinie:</h3>
    
            <br>
            <form method="GET">
                <input type="number" name="person" placeholder="ilosc"><br>
                <input type="submit" value="zatwierdz">

            </form>
E;
        }
        
        if (!empty($_GET['person'])){
            echo "Ilość osób w rodzinie:".$_GET['person'];
            
            echo "<form method='POST'>";
            
            for($i=1; i<$_GET['person']; $i++){
                echo "<input type='number' name='person$i' placeholder='osoba $i'><br>";
            }
            
            
        }
    
        
    ?>
</body>
</html>