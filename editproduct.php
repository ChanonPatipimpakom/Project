<?php
    include("connect.php");
    if(!isset($_GET['pid']) || $_GET['pid']==""){
        header("Location:index.php");
    }
    else{
        $pid = $_GET['pid'];
    }

    $sql = "SELECT * FROM ocean WHERE id=$pid";
    $result = $conn->query($sql);
    if(!$result){
        echo "Error ".$conn->error;
    }
    else{
        if($result->num_rows>0){
            $prd = $result->fetch_object();
        }
        else{
            $prd = NULL;
        }
    }
?>
<div class="container" style="margin:3%">
    <div class="row">
        <form action="updateproduct.php" class="form-horizontal" method="post" enctype="multipart/form-data">
        <img src="images/<?php echo $prd->picture;?>" alt="" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-push-1 thumbnail">
        <div class="col-md-6 col-sm-6 col-xs-6 col-md-push-1">
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Name: </label>
                <div class="col-md-9">
                    <input type="text" name="txtName" class="form-control" value="<?php echo $prd->name;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="control-label col-md-3">Description: </label>
                <div class="col-md-9">
                    <textarea type="text" name="txtDescrip" class="form-control" ><?php echo $prd->desc;?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="control-label col-md-3">Price: </label>
                <div class="col-md-9">
                    <input type="text" name="txtPrice" class="form-control" value="<?php echo $prd->price;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="stock" class="control-label col-md-3">Stock: </label>
                <div class="col-md-9">
                    <input type="text" name="txtQty" class="form-control" value="<?php echo $prd->qty;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="picture" class="control-label col-md-3">Picture: </label>
                <div class="col-md-9">
                    <input type="file" name="filePic" class="form-control-file" accept="images/*">
                </div>
            </div>
            <div class="form-group">
                <label for="picture" class="control-label col-md-3">Type: </label>
                <div class="col-md-9">
                    <input type="radio" name="rdoType" value="1" checked required> หอย</label>
                    <input type="radio" name="rdoType" value="2"> ปลาหมึก</label>
                    <input type="radio" name="rdoType" value="3"> ปู</label>
                    <input type="radio" name="rdoType" value="4"> ปลา</label>
                    <input type="radio" name="rdoType" value="5"> กุ้ง</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <input type="hidden" name="hdnProductId" value="<?php echo $prd->id;?>">
                    <input type="hidden" name="hdnProductPic" value="<?php echo $prd->picture;?>">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>    
        </form>
    </div>
</div>