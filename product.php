<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php
				include("connect.php");
				if(isset($_GET['pid'])){
					$pid = $_GET['pid'];
				}
				else{
					header("location:index.php");
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
			<!-- Product main img -->
			<form action="order.php" method="post" enctype="multipart/form-data">
			<?php
				if(isset($_SESSION['id'])){
			?>
				<input type="hidden" name="nameid" class="form-control" value="<?php echo $_SESSION['id'];?>">
			<?php
				}
			?>
			<div class="col-md-4 col-md-push-1">
				<div id="product-main-img">
					<img src="images/<?php echo $prd->picture;?>" alt="">
					<input type="hidden" name="filePic" class="form-control" value="<?php echo $prd->picture;?>">
				</div>
			</div>
			<!-- /Product main img -->
			
			<!-- Product details -->
			<div class="col-md-7 col-md-push-1" style="margin-top:20px;">
				<div class="product-details">
					<h2 class="product-name"><?php echo $prd->name;?></h2>
					<input type="hidden" name="txtName" class="form-control" value="<?php echo $prd->name;?>">
					<div>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
					<div>
						<h3 class="product-price"><?php echo $prd->price;?> Bath</h3>
						<input type="hidden" name="txtPrice" class="form-control" value="<?php echo $prd->price;?>">
						<span class="product-available">In Stock</span>
					</div>
					<?php $typecate = $prd->category;?>
					<p><?php echo $prd->desc;?></p>
					<?php
						if(isset($_SESSION['id'])){
					?>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
					<?php
						}
					?>
				</div>
			</div>
			<!-- /Product details -->
			</form>
			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
						<li><a data-toggle="tab" href="#tab2">Details</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews</a></li>
					</ul>
					<!-- /product tab nav -->

					<!-- product tab content -->
					<div class="tab-content">
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
									<p>เมนู <?php echo $prd->name;?> ราคา <?php echo $prd->price;?> บาท <?php echo $prd->desc;?></p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->

						<!-- tab2  -->
						<div id="tab2" class="tab-pane fade in">
							<div class="row">
								<div class="col-md-12">
									<?php
										$type = $prd->category;
										switch($type){
											case 1:{
												$tname = "หอย";
												break;
											}
											case 2:{
												$tname = "ปลาหมึก";
												break;
											}
											case 3:{
												$tname = "ปู";
												break;
											}
											case 4:{
												$tname = "ปลา";
												break;
											}
											case 5:{
												$tname = "กุ้ง";
												break;
											}
										}
									?>
									<p>เมนู <?php echo $prd->name;?> เป็นอาหารทะเลประเภท <?php echo $tname?> </p>
								</div>
							</div>
						</div>
						<!-- /tab2  -->

						<!-- tab3  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<!-- Rating -->
								<div class="col-md-3">
									<div id="rating">
										<div class="rating-avg">
											<span>5</span>
											<div class="rating-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<ul class="rating">
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 80%;"></div>
												</div>
												<span class="sum">3</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 60%;"></div>
												</div>
												<span class="sum">2</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Rating -->

								<!-- Reviews -->
								<div class="col-md-6">
									<div id="reviews">
										<ul class="reviews">
										<?php
											$sql = "SELECT * FROM comment WHERE comidpro=$pid";
											//include($page);
											$result = $conn->query($sql);
											if(!$result){
												echo "Error During Retrival";
											}
											else{
												//ดึงข้อมูล
												while($prd=$result->fetch_object()){
													$prd->comid; //$prd["id]
										?>
											<li>
												<div class="review-heading">
													<h5 class="name"><?php echo $prd->usrname?></h5>
													<p class="date"><?php echo $prd->date?></p>
													<div class="review-rating">
													<?php
														$start = 1;
														while($start<=$prd->rating){
													?>
														<i class="fa fa-star"></i>
													<?php
														$start++;
														}
													?>
													</div>
												</div>
												<div class="review-body">
													<p><?php echo $prd->comment?></p>
												</div>
											</li>
										<?php
											}
										}
										?>
										</ul>
									</div>
								</div>
								<!-- /Reviews -->

								<!-- Review Form -->
								<div class="col-md-3">
									<div id="review-form">
										<form class="review-form" action="cuscomment.php" method="post" enctype="multipart/form-data" >
											<?php
												if(isset($_SESSION['id'])){
													$usrname = $_SESSION['name'];
													$usremail = $_SESSION['email'];
													?>
												<input type="hidden" name="usreid" class="form-control" value="<?php echo $_SESSION['id'];?>">
												<?php
												}else{
													$usrname = "";
													$usremail = "";
												}
											?>
											<input type="hidden" name="usridgg" class="form-control" value="<?php echo $_SESSION['id'];?>">
											<input class="input" value="<?php echo $usrname;?>" type="text" placeholder="Your Name" name="usrname" readonly>
											<input class="input" value="<?php echo $usremail;?>" type="email" placeholder="Your Email" name="usremail" readonly>
											<input class="hidden" value="<?php echo $pid;?>" type="text" placeholder="Your ID" name="usrcomid" readonly>
											<textarea class="input" name="usrcomment" placeholder="Your Review"></textarea>
											<div class="input-rating">
												<span>Your Rating: </span>
												<div class="stars">
													<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
													<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
													<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
													<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
													<input id="star1" name="rating" value="1" type="radio" checked required><label for="star1"></label>
												</div>
											</div>
											<button class="primary-btn">Submit</button>
										</form>
									</div>
								</div>
								<!-- /Review Form -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<?php
									$sql = "SELECT * FROM ocean WHERE category=$typecate";
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
<!-- /Section -->
