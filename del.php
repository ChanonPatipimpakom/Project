<?php
    session_start();
    include("connect.php");
    
    $pid = $_GET['pid'];
    $sql ="DELETE FROM orderpro WHERE idorder=$pid";

    $result=$conn->query($sql);
    if(!$result){
        echo "Error: ".$conn->error;
    }
    else{
        header("Location: order.php");
    }
?>