<?php
	include("connect.php")
?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Food Type</h3>
					<div class="checkbox-filter">
						<!--C1-->
						<?php
							$sql = "SELECT category FROM ocean WHERE category=1";
							$result = $conn->query($sql);
							$count1 = 0;
							while($prd=$result->fetch_object()){
								$prd->category;
								$count1 = 1+$count1;
							}
						?>
						<div class="input-checkbox">
							<label for="category-1">
								<span></span>
								Shellfish
								<small>(<?php echo $count1;?>)</small>
							</label>
						</div>
						<!--C2-->
						<?php
							$sql = "SELECT category FROM ocean WHERE category=2";
							$result = $conn->query($sql);
							$count2 = 0;
							while($prd=$result->fetch_object()){
								$prd->category;
								$count2 = 1+$count2;
							}
						?>
						<div class="input-checkbox">
							<label for="category-2">
								<span></span>
								Squid
								<small>(<?php echo $count2;?>)</small>
							</label>
						</div>
						<!--C3-->
						<?php
							$sql = "SELECT category FROM ocean WHERE category=3";
							$result = $conn->query($sql);
							$count3 = 0;
							while($prd=$result->fetch_object()){
								$prd->category;
								$count3 = 1+$count3;
							}
						?>
						<div class="input-checkbox">
							<label for="category-3">
								<span></span>
								Crap
								<small>(<?php echo $count3;?>)</small>
							</label>
						</div>
						<!--C4-->
						<?php
							$sql = "SELECT category FROM ocean WHERE category=4";
							$result = $conn->query($sql);
							$count4 = 0;
							while($prd=$result->fetch_object()){
								$prd->category;
								$count4 = 1+$count4;
							}
						?>
						<div class="input-checkbox">
							<label for="category-4">
								<span></span>
								Fish
								<small>(<?php echo $count4;?>)</small>
							</label>
						</div>
						<!--C5-->
						<?php
							$sql = "SELECT category FROM ocean WHERE category=5";
							$result = $conn->query($sql);
							$count5 = 0;
							while($prd=$result->fetch_object()){
								$prd->category;
								$count5 = 1+$count5;
							}
						?>
						<div class="input-checkbox">
							<label for="category-5">
								<span></span>
								Shrimp
								<small>(<?php echo $count5;?>)</small>
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Price</h3>
					<div class="price-filter">
					<form action="" method="post">
						<div id="price-slider"></div>
						<div class="input-number price-min">
							<input id="price-min" type="number" name="min">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
						<span>-</span>
						<div class="input-number price-max">
							<input id="price-max" type="number" name="max">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
						<button name="submit" id="sub" class="add-to-cart-btn atext btn active" style="background:#c80000; border: 1px solid #c80000; border-radius: 5px; margin-top:2%; color:white; padding:3%;"><i class="fa fa-search" style="color:white"></i> GO!</button>
					</form>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
					<div class="product-widget">
						<?php
							$sql = "SELECT * FROM ocean WHERE id<16";
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
						<div class="product-widget">
							<a href="index.php?menu=check&pid=<?php echo $prd->id;?>">
							<div class="product-img">
								<img src="images/<?php echo $prd->picture;?>" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#"><?php echo $prd->name;?></a></h3>
								<h4 class="product-price"><?php echo $prd->price;?> Bath</h4>
							</div>
							</a>
						</div>
						<?php
								}
							}
						?>
					</div>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">	
				<!-- store products -->
				<div class="row">
					<!-- product -->
					<?php
						$max = 999;
						$min = 1;
						$cate = "";
						if(isset($_POST['submit'])){
							$min = $_POST['min'];
							$max = $_POST['max'];
						}
						$sql = "SELECT * FROM ocean WHERE price BETWEEN '$min' AND '$max'";
						//$sql = "SELECT * FROM ocean WHERE id<10";
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
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<form action="order1.php" method="post" enctype="multipart/form-data">
							<a href="index.php?menu=check&pid=<?php echo $prd->id;?>">
							<div class="product-img">
								<?php
									if(isset($_SESSION['id'])){
								?>
									<input type="hidden" name="nameid" class="form-control" value="<?php echo $_SESSION['id'];?>">
								<?php
									}
								?>
								<img src="images/<?php echo $prd->picture;?>" alt="">
								<input type="hidden" name="filePic" class="form-control" value="<?php echo $prd->picture;?>">
							</div>
							</a>
							<div class="product-body">
								<h3 class="product-name"><a href="#"><?php echo $prd->name;?></a></h3>
								<input type="hidden" name="txtName" class="form-control" value="<?php echo $prd->name;?>">
								<h4 class="product-price"><?php echo $prd->price;?> Bath</h4>
								<input type="hidden" name="txtPrice" class="form-control" value="<?php echo $prd->price;?>">
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
							</form>
						</div>
					</div>
					<?php
							}
						}
					?>
					<!-- /product -->
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
<script>
$(document).ready(function(){
	$("li[id=li2]").addClass("active");
		$("a[id=a1]").click(function(){
			$("li[id=li2]").removeClass("active");
			$("li[id=li1]").removeClass("active");
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
		$("a[id=a6]").click(function(){
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