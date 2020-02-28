<?php
    session_start();
    include("connect.php");
    
    $check = $_GET['pid'];
    $sql ="DELETE FROM orderpro WHERE cusid = $check";

    $result=$conn->query($sql);
    if(!$result){
        echo "Error: ".$conn->error;
    }
    else{
        header("Location: index.php");
    }
?>