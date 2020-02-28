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
					<h3 class="aside-title"><i class="fa fa-user-o" style="color:#c80000"></i> Welcome <?php echo $prd->username;?></h3>
					<div class="checkbox-filter">
                        <div class="input-checkbox">
                            <label for="category-1">
                                <span></span>
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
				<div class="aside" style="margin-bottom:4%">
					<h3 class="aside-title">Go To Cart</h3>
					<a href="index.php?menu=order" class="primary-btn">Your Cart</a>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9" style="border: solid #ddd 3px; padding:50px; font-size:12pt; border-radius:10px;">	
				<!-- store products -->
				<div class="row">
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
                    <div style="font-weight:bold">
                        <p style="text-align:center; font-weight:bold"><i class="fa fa-user-circle" style="color:#c80000; font-size:90pt;"></i></br>
                        <p style="font-size:20pt; text-align:center; font-weight:bold; margin-bottom:5%"><?php echo $prd->username;?></p><p>
                        <p><i class="fa fa-user" style="color:#c80000; font-size:18pt;"></i> ชื่อ-นามสกุล: <?php echo $prd->firstname;?> <?php echo $prd->lastname;?><p>
                        <p><i class="fa fa-map-marker" style="color:#c80000; font-size:18pt;"></i> ที่อยู่จัดส่ง: <?php echo $prd->address;?><p>
                        <p><i class="fa fa-phone" style="color:#c80000; font-size:18pt;"></i> เบอร์โทรศัพท์: <?php echo $prd->tel;?><p>
                        <p><i class="fa fa-envelope" style="color:#c80000; font-size:18pt;"></i> E-mail: <?php echo $prd->email;?><p>
                    </div>
                    <?php	
                            }
                        }
                    }		
                    ?>
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