<?php

@require_once './connect.php';




if (!empty($_GET["id"])){
    $id = $_GET["id"];
    
    echo "delete ".$id."<br>";

    $sql = "delete FROM users where id=$id";

    $connect->query($sql);
    
    if ($connect->affected_rows){
        echo $connect->affected_rows;
                
        header("location: ./database2.php?deleteUser=$id");
    }
    else{
        header('location: ./database2.php?error=1');
    }

}
else{
    header('location: ./database2.php');
}
