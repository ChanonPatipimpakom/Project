<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="shop">
					<div class="shop-img">
						<img src="images/shop3/shrimp1.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Menu Shrimp<br>Collection</h3>
						<a href="index.php?menu=showcate&category=5" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="shop">
					<div class="shop-img">
						<img src="images/shop3/fish1.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Menu Fish<br>Collection</h3>
						<a href="index.php?menu=showcate&category=4" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="shop">
					<div class="shop-img">
						<img src="images/shop3/chell1.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Menu Shellfish<br>Collection</h3>
						<a href="index.php?menu=showcate&category=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<?php
									$sql = "SELECT * FROM ocean WHERE id";
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
								<div class="product">
								<form action="order.php" method="post" enctype="multipart/form-data">
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
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
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
								<?php
										}
									}
								?>
								<!-- /product -->
							</div>
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

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3 id="days"></h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3 id="hours"></h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3 id="min"></h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3 id="sec"></h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase" style="color:white;">hot deal this week</h2>
					<p style="color:white;">All Collection Sell to 5% OFF</p>
					<a class="primary-btn cta-btn" href="index.php?menu=category">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<?php
									$sql = "SELECT * FROM ocean WHERE id";
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
								<div class="product">
								<form action="order.php" method="post" enctype="multipart/form-data">
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
										<div class="product-label">
											<span class="new">TOP</span>
										</div>
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
								<?php
										}
									}
								?>
								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id<4";
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
						<!-- /product widget -->
					</div>

					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id>3 and id<12";
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
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id>11 AND id<15";
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
						<!-- /product widget -->
					</div>

					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id>14 and id<18";
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
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id>17 and id<21";
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
						<!-- /product widget -->
					</div>

					<div>
						<!-- product widget -->
						<?php
							$sql = "SELECT * FROM ocean WHERE id>20 AND id<24";
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
						<!-- product widget -->
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<script>
	$(document).ready(function(){
		$("li[id=li1]").addClass("active");
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

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 31, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("days").innerHTML = "0"+days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("min").innerHTML = minutes;
  document.getElementById("sec").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
	document.getElementById("days").innerHTML = "EXPIRED";
	document.getElementById("hours").innerHTML = "EXPIRED";
	document.getElementById("min").innerHTML = "EXPIRED";
	document.getElementById("sec").innerHTML = "EXPIRED";
  }
}, 1000);
</script>