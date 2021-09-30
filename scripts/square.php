<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
      <input type="submit" value="Oblicz">
    </form>
      
      <?php
//        if (!empty($_GET['sideA']) and is_numeric($_GET['sideA'])){
        if (!empty($_GET['sideA'])){
            $sideA = str_replace(',','.', $_GET['sideA']);
            
            
            $p = $sideA**2;
            $o = $sideA*4;
            
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
