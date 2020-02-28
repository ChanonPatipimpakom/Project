<div class="container" style="margin:3%">
    <div class="row">
        <form action="savepro.php" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Name: </label>
                <div class="col-md-9">
                    <input type="text" name="txtName" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="control-label col-md-3">Description: </label>
                <div class="col-md-9">
                    <textarea type="text" name="txtDescrip" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="control-label col-md-3">Price: </label>
                <div class="col-md-9">
                    <input type="text" name="txtPrice" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="stock" class="control-label col-md-3">QTY: </label>
                <div class="col-md-9">
                    <input type="text" name="txtQty" class="form-control">
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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
	$(document).ready(function(){
		$("li[id=li6]").addClass("active");
		$("a[id=a2]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
			$("li[id=li3]").removeClass("active");
			$("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
		});
		$("a[id=a3]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
			$("li[id=li3]").removeClass("active");
			$("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
		});
		$("a[id=a4]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
            $("li[id=li3]").removeClass("active");
            $("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
        });
        $("a[id=a5]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
            $("li[id=li3]").removeClass("active");
            $("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
        });
        $("a[id=a1]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
            $("li[id=li3]").removeClass("active");
            $("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
        });
        $("a[id=a7]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
            $("li[id=li3]").removeClass("active");
            $("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
        });
        $("a[id=a8]").click(function(){
			$("li[id=li1]").removeClass("active");
			$("li[id=li2]").removeClass("active");
            $("li[id=li3]").removeClass("active");
            $("li[id=li4]").removeClass("active");
            $("li[id=li5]").removeClass("active");
            $("li[id=li6]").removeClass("active");
            $("li[id=li7]").removeClass("active");
            $("li[id=li8]").removeClass("active");
        });
	});
</script>