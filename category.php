<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

            <!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Categories</h3>
				</div>
			</div>
			<!-- /section title -->

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

            <div class="col-md-4 col-sm-6 col-xs-12">
				<div class="shop">
					<div class="shop-img">
						<img src="images/shop3/squid1.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Menu Squid<br>Collection</h3>
						<a href="index.php?menu=showcate&category=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
			
            <!-- shop -->
            <div class="col-md-4 col-sm-6 col-xs-12">
				<div class="shop">
					<div class="shop-img">
						<img src="images/shop3/crap1.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Menu Crap<br>Collection</h3>
						<a href="index.php?menu=showcate&category=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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

<script>
	$(document).ready(function(){
		$("li[id=li3]").addClass("active");
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
        $("a[id=a2]").click(function(){
			$("li[id=li2]").removeClass("active");
            $("li[id=li1]").removeClass("active");
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