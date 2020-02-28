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
                header("Location: index.php");
            }
            else{
                echo "Error during insert product: ".$conn->error;
            }
		}
		
?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Your Cart</h3>
					<input type="hidden" value="<?php
						if(!isset($_POST['nameid'])){
							header("Location: login.php");
						}
					?>">
				</div>
			</div>
			<!-- /section title -->

			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
			<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">BILLING ADDRESS</h3>
					<div class="checkbox-filter">
						<?php
							if(isset($_SESSION['id'])){
							$cudid = $_SESSION['id'];
							$sql = "SELECT * FROM customer WHERE id=$cudid";
							//include($page);
							$result = $conn->query($sql);
							if(!$result){
								echo "Error During Retrival";
							}
							else{
								//ดึงข้อมูล
								while($prd=$result->fetch_object()){
									$prd->id; //$prd["id]
						?>
						<div class="input-checkbox">
							<label for="category-1">
								<span></span>
								<p style="font-size:11pt"><i class="fa fa-user-o" style="color:#c80000"></i> User: <?php echo $prd->username;?><p>
								<p style="font-size:11pt"><i class="fa fa-user" style="color:#c80000"></i> ชื่อ-นามสกุล: <?php echo $prd->firstname;?> <?php echo $prd->lastname;?><p>
								<p style="font-size:11pt"><i class="fa fa-map-marker" style="color:#c80000"></i> ที่อยู่จัดส่ง: <?php echo $prd->address;?><p>
								<p style="font-size:11pt"><i class="fa fa-phone" style="color:#c80000"></i> เบอร์โทรศัพท์: <?php echo $prd->tel;?><p>
								<p style="font-size:11pt"><i class="fa fa-envelope" style="color:#c80000"></i> E-mail: <?php echo $prd->email;?><p>
							</label>
						</div>
						<?php	
								}
							}
						}		
						?>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Order List</h3>
					<div class="checkbox-filter">
						<?php
							if(isset($_SESSION['id'])){
							$cudid = $_SESSION['id'];
							$total = 0;
							$sql = "SELECT * FROM orderpro WHERE idorder AND cusid=$cudid";
							$result = $conn->query($sql);
							if(!$result){
								echo "Error During Retrival";
							}
							else{
								//ดึงข้อมูล
							while($prd=$result->fetch_object()){
								$prd->idorder; //$prd["id]
						?>
						<div class="input-checkbox">
							<label for="category-1">
								<span></span>
									<p style="font-size:11pt"><i class="fa fa-cutlery" style="color:#c80000"></i> <?php echo $prd->name;?> Price <?php echo $prd->price;?>฿<p>
							</label>
						</div>
						<?php	
								$total = $prd->price+$total;
								}
							}
						}
						?>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Total Price</h3>
					<div class="checkbox-filter">
						<div class="input-checkbox">
							<label for="category-1">
								<div class="price-filter">
									<p style="font-size:13pt">TP: <?php echo $total;?> Bath<p>
								</div>
							</label>
						</div>
						<div class="input-checkbox">
							<label for="category-1">
							<button class="primary-btn atext btn active delete" style=" background:#c80000; border: 1px solid #c80000; border-radius: 5px; color:white; padding:10px;" onclick="window.location.href = 'checkout.php?pid=<?php echo $_SESSION['id'];?>';"> Check Out!</button>
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">	
				<!-- store products -->
				<div class="row">
				<form action="" method="post" id="frmProduct">
					<!-- product -->
					<?php
						if(isset($_SESSION['id'])){
						$cudid = $_SESSION['id'];
						$sql = "SELECT * FROM orderpro WHERE idorder AND cusid=$cudid";
						//include($page);
						$result = $conn->query($sql);
						if(!$result){
							echo "Error During Retrival";
						}
						else{
							//ดึงข้อมูล
							while($prd=$result->fetch_object()){
								$prd->idorder; //$prd["id]
					?>
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="images/<?php echo $prd->picture;?>" alt="">
								<div class="product-label">
									<span class="new">Your Order</span>
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#"><?php echo $prd->name;?></a></h3>
								<h4 class="product-price"><?php echo $prd->price;?> Bath</h4>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn linkDelete" onclick="window.location.href = 'del.php?pid=<?php echo $prd->idorder;?>';"><i class="fa fa-trash"></i> Remove</button>
							</div>
						</div>
					</div>
					<?php
							}
						}
					}
					?>
					<!-- /product -->
					</form>
				</div>
				<!-- /store products -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->