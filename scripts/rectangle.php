<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
        <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
        <input type="submit" name="button" value="Oblicz">
    </form>
      
      <?php
//        if (!empty($_GET['sideA']) and is_numeric($_GET['sideA'])){
        if (!empty($_GET['sideA']) and !empty($_GET['sideB'])){
            $sideA = str_replace(',','.', $_GET['sideA']);
            $sideB = str_replace(',','.', $_GET['sideB']);
            
            $p = $sideA * $sideB;
            $o = $sideA*2 + $sideB*2;
            
            echo <<< E
            pole rowne $p cm<sup>2</sup>
            <br>
            obw rowny $o cm
            
            
            E;
            
            
//            echo "pole rowne " . $sideA**2 . "cm^2";
//            echo "<br>";
//            echo "obw rowny " . $sideA*4 . "cm";
        }
        else{
            if (isset($_GET['button'])){
                echo "wypelnij wszystkie pola";
            }
            
        }
      ?>
  </body>
</html>
