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
					
				</div>
			</div>
			<!-- /section title -->
			<input type="hidden" value="<?php
				if(!isset($_POST['nameid'])){
					header("Location: login.php");
				}
			?>">
			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
						<form action="" method="post" id="frmProduct">
							<div class="products-slick" data-nav="#slick-nav-1">
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
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn linkDelete" onclick="window.location.href = 'del.php?pid=<?php echo $prd->idorder?>';"><i class="fa fa-trash"></i> Remove</button>
									</div>
								</div>
								<?php
										}
									}
								}
								?>
								<!-- /product -->
							</div>
							</form>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
