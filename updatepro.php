<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Edit Products</h3>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active col-md-12">
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
                            <div class="col-md-3">
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