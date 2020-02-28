<?php
	include("connect.php");
    //echo ini_get("upload_max_filesize")."<br>";
    if(isset($_POST['nameid'])){
        $name = $_POST['txtName'];
        $price = $_POST['txtPrice'];
		$filename = $_POST["filePic"];
		$cudid = $_POST['nameid'];
        /*echo "Name: ".$_FILES["filePic"]["name"] . "<br>";
        echo "Size: ".$_FILES["filePic"]["size"] . "<br>";
        echo "Temp name: ".$_FILES["filePic"]["tmp_name"] . "<br>";
        echo "Error: ".$_FILES["filePic"]["error"] . "<br>";*/

        $sqlInsert = "INSERT INTO orderpro (name,price,picture,cusid) VALUE('$name', '$price', '$filename', '$cudid')";

        //echo $sqlInsert;
        $result = $conn->query($sqlInsert);
            if($result){
                echo "<script> alert('Inser Product Complete'); </script>"; 
                header("Location: index.php?menu=product");
            }
            else{
                echo "Error during insert product: ".$conn->error;
            }
		}
?>