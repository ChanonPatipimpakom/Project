<?php
	include("connect.php");
    //echo ini_get("upload_max_filesize")."<br>";
    if(isset($_POST['usreid'])){
        $name = $_POST['usrname'];
        $usremail = $_POST['usremail'];
        $rating = $_POST['rating'];
        $comment = $_POST['usrcomment'];
        $usreid = $_POST['usridgg'];
        $useridpro = $_POST['usrcomid'];
        /*echo "Name: ".$_FILES["filePic"]["name"] . "<br>";
        echo "Size: ".$_FILES["filePic"]["size"] . "<br>";
        echo "Temp name: ".$_FILES["filePic"]["tmp_name"] . "<br>";
        echo "Error: ".$_FILES["filePic"]["error"] . "<br>";*/

        $sqlInsert = "INSERT INTO comment (`comid`, `comment`, `rating`, `usrname`, `usremail`, `usrid`, `comidpro`, `date`) VALUES 
        (NULL, '$comment', '$rating', '$name', '$usremail', '$usreid', '$useridpro', NOW())";
        echo $sqlInsert;
        //echo $sqlInsert;
        $result = $conn->query($sqlInsert);
            if($result){
                echo "<script> alert('Comment Complete'); </script>"; 
                header("Location: index.php?menu=check&pid=$useridpro");
            }
            else{
                echo "Error during insert product: ".$conn->error;
            }
		}
		
?>
<input type="hidden" value="<?php
    if(!isset($_POST['usreid'])){
        header("Location: login.php");
    }
?>">