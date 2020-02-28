<?php 
    session_start();
    include("connect.php");
    $pid = $_POST['hdnProductId'];
    $name = $_POST['txtName'];
    $desc = $_POST['txtDescrip'];
    $price = $_POST['txtPrice'];
    $unitInStock = $_POST['txtQty'];
    $tcategory = $_POST["rdoType"];
    //update
    $picture = $_POST["hdnProductPic"];
    //$filename = $_FILES["filePic"]["name"];
    if($_FILES['filePic']['name']!=""){
        //อัปโหลดไฟล์โดยเอาชื่อเข้ามาด้วย
        $picture = $_FILES["filePic"]["name"];
        //move file
        move_uploaded_file($_FILES["filePic"]["tmp_name"],"images/".$_FILES["filePic"]["name"]);
    }

    $sql = "UPDATE `ocean` SET `name` = '$name', `desc` = '$desc', `price` = '$price', `qty` = '$unitInStock', `picture` = '$picture', `category` = '$tcategory' WHERE `ocean`.`id` = $pid";
    //echo $sql;
    $result = $conn->query($sql);
        if(!$result){
            echo "Error during update product: ".$conn->error;
        }
        else{
            header("Location: index.php");
        }
?>