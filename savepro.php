<?php
    session_start();
    include("connect.php");
    //echo ini_get("upload_max_filesize")."<br>";
    $allowType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);

    if(!in_array($fileType[1],$allowType)){
        //เมื่ออัพโหลดไฟล์ที่ไม่ตรงกัน
        echo "Non-image file is not allowed";
    }
        $name = $_POST['txtName'];
        $desc = $_POST['txtDescrip'];
        $price = $_POST['txtPrice'];
        $qty = $_POST['txtQty'];
        $filename = $_FILES["filePic"]["name"];
        $tcategory = $_POST["rdoType"];
        echo "Name: ".$_FILES["filePic"]["name"] . "<br>";
        echo "Size: ".$_FILES["filePic"]["size"] . "<br>";
        echo "Temp name: ".$_FILES["filePic"]["tmp_name"] . "<br>";
        echo "Error: ".$_FILES["filePic"]["error"] . "<br>";

        move_uploaded_file($_FILES["filePic"]["tmp_name"],"images/".$_FILES["filePic"]["name"]);

        $sqlInsert = "INSERT INTO ocean (`id`, `name`, `desc`, `price`, `qty`, `picture`, `category`) VALUES (NULL, '$name', '$desc', '$price', '$qty', '$filename', '$tcategory');";

        //echo $sqlInsert;
        $result = $conn->query($sqlInsert);
            if($result){
                echo "<script> alert('Inser Product Complete'); </script>"; 
                header("Location: index.php");
            }
            else{
                echo "Error during insert product: ".$conn->error;
            }
?>