<?php

@require_once './connect.php';




if (!empty($_GET["id"])){
    $id = $_GET["id"];
    
    echo "delete ".$id;

    $sql = "delete FROM users where id=$id";

    $connect->query($sql);

}
else{
    header('location: ./database2.php');
}
