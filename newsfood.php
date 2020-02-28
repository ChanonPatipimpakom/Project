<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
  <style>
	@import url('https://fonts.googleapis.com/css?family=Prompt&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Sarabun:500&display=swap');
	.greendiv {height: 80px;background-color: #00FF00;border: solid 2px #000000;padding: 10px;}
	.text{
		font-family: 'Prompt', sans-serif;
		color: #D35400;
		text-decoration: none;
		<!--text-align: center;-->
	}
	.text2{
		font-family: 'Sarabun', sans-serif;
	}
	.container{
		display grid;
		
	}
    .text{
        margin-top: 0.5em;
    }
	li{
		list-style: none;
		text-decoration: none;
	}
	.pdbt{
		padding-bottom: 1em;
	}
	#bar1,#bar2{
		border-bottom: 4px dashed #fff;
		border-top: 4px dashed #fff;
		padding:5px;
		margin-bottom:20px;
		margin-top:10px;
		background-color:#c80000;
		font-family: 'Prompt', sans-serif;
		color:white;
		text-align:center;
		font-size: 20pt;
		font-weight: bold;
	}
	
  </style>
  
  <script>
	const square = (number) => {
		return number*number
	}
		$(document).ready(function(){
		function searchnews(keyword){
		$.getJSON("http://newsapi.org/v2/everything?q="+keyword+"&apiKey=a363440f02e84e3fb623f2676017f25c", function(data){
			$("#head1").empty()
			$("#head1").append("<h3 class='text' style='padding-bottom:15px;color:black'>ผลการค้นหาข่าว <font style='font-weight:bold;'>'' "+keyword+" ''</font></h3>");
			$("#bar1").show();
			$("#bar2").show();
			$("#news").empty()
			$("#news1").empty()
			$("#news2").empty()
			$("#news3").empty()
			$("#news4").empty()
			$("#news5").empty()
			$("#news6").empty()
			$("#news4-1").empty()
			$("#news5-1").empty()
			$("#news6-1").empty()
			$("#loading").empty();
			//0
			$("#news").append("<img style='width:100%' src='"+data.articles[0].urlToImage+"'/>")
			$("#news").append("<a href='"+data.articles[0].url+"'><h1 class='text'>"+data.articles[0].title+"</h1></a>")
			$("#news").append("<p class='text2 style='color:#776655'>"+data.articles[0].description+"</p>")
			//1
			$("#news1").append("<img class='center' style='width:100%' src='"+data.articles[1].urlToImage+"'/>")
			$("#news1").append("<a href='"+data.articles[1].url+"'><h4 class='text'>"+data.articles[1].title+"</h4></a>")
			$("#news1").append("<p class='text2 style='color:#776655'>"+data.articles[1].description+"</p>")
			//2
			$("#news2").append("<img class='center' style='width:100%' src='"+data.articles[2].urlToImage+"'/>")
			$("#news2").append("<a href='"+data.articles[2].url+"'><h4 class='text'>"+data.articles[2].title+"</h4></a>")
			$("#news2").append("<p class='text2 style='color:#776655'>"+data.articles[2].description+"</p>")
			//3
			$("#news3").append("<img class='center' style='width:100%' src='"+data.articles[3].urlToImage+"'/>")
			$("#news3").append("<a href='"+data.articles[3].url+"'><h4 class='text'>"+data.articles[3].title+"</h4></a>")
			$("#news3").append("<p class='text2 style='color:#776655'>"+data.articles[3].description+"</p>")
			//4
			$("#news4").append("<img class='center' style='width:100%' src='"+data.articles[4].urlToImage+"'/>")
			$("#news4").append("<a href='"+data.articles[4].url+"'><h4 class='text'>"+data.articles[4].title+"</h4></a>")
			$("#news4").append("<p class='text2 style='color:#776655'>"+data.articles[4].description+"</p>")
			//5
			$("#news5").append("<img class='center' style='width:100%' src='"+data.articles[5].urlToImage+"'/>")
			$("#news5").append("<a href='"+data.articles[5].url+"'><h4 class='text'>"+data.articles[5].title+"</h4></a>")
			$("#news5").append("<p class='text2 style='color:#776655'>"+data.articles[5].description+"</p>")
			//6
			$("#news6").append("<img class='center' style='width:100%' src='"+data.articles[6].urlToImage+"'/>")
			$("#news6").append("<a href='"+data.articles[6].url+"'><h4 class='text'>"+data.articles[6].title+"</h4></a>")
			$("#news6").append("<p class='text2 style='color:#776655'>"+data.articles[6].description+"</p>")
			//4-1
			$("#news4-1").append("<img class='center' style='width:100%' src='"+data.articles[7].urlToImage+"'/>")
			$("#news4-1").append("<a href='"+data.articles[7].url+"'><h4 class='text'>"+data.articles[7].title+"</h4></a>")
			$("#news4-1").append("<p class='text2 style='color:#776655'>"+data.articles[7].description+"</p>")
			//5-1
			$("#news5-1").append("<img class='center' style='width:100%' src='"+data.articles[8].urlToImage+"'/>")
			$("#news5-1").append("<a href='"+data.articles[8].url+"'><h4 class='text'>"+data.articles[8].title+"</h4></a>")
			$("#news5-1").append("<p class='text2 style='color:#776655'>"+data.articles[8].description+"</p>")
			//6-1
			$("#news6-1").append("<img class='center' style='width:100%' src='"+data.articles[9].urlToImage+"'/>")
			$("#news6-1").append("<a href='"+data.articles[9].url+"'><h4 class='text'>"+data.articles[9].title+"</h4></a>")
			$("#news6-1").append("<p class='text2 style='color:#776655'>"+data.articles[9].description+"</p>")
			$.each(data.articles, function(i,fields) {
				//$("#news7").append("<img class='center' style='width:100%' src='"+fields.urlToImage+"'/>")
				//$("#news7").append("<a href='"+fields.url+"'><h3 class='text'>"+fields.title+"</h3></a>")
				//$("#news7").append("<p class='text style='color:#776655'>"+fields.description+"</p>")
				});
				console.log(data);
			});
		}
		searchnews("SeaFood")
		
		$("#buttonsearch").click(function(){
			var kw = $("#searchtext").val()
			$("#head1").empty()
			$("#loading").empty();
			$("#loading").append("<center><img src='images/load.gif'/></center>");
			$("#bar1").hide();
			$("#bar2").hide();
			$("#news").empty();
			$("#news1").empty();
			$("#news2").empty();
			$("#news3").empty();
			$("#news4").empty();
			$("#news5").empty();
			$("#news6").empty();
			$("#news4-1").empty();
			$("#news5-1").empty();
			$("#news6-1").empty();
			searchnews(kw)
		});
	});
  </script>

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
        <!-- SEARCH BAR -->
        <div class="navbar-right hidden-sm hidden-xs">
            <button id="buttonsearch" class="primary-btn">Search</button>
        </div>
        <div class="col-md-3 navbar-right">
            <input type="text" id="searchtext" class="form-control" placeholder="Search here" style="height:43px">    
        </div>
        <center><div class="navbar-right hidden-lg hidden-md" style="margin-top:10px">
            <button id="buttonsearch" class="primary-btn">Search</button>
        </div></center>
        <!-- /SEARCH BAR -->
        <!-- <p class="navbar-right" style="padding-top:0.8em">
            <input class="center" type="text" id="searchtext" style="border:2px solid #F1C40F;padding:5px;  border-radius:5px;" placeholder="ค้นหาข่าว"/>
            <button class="btn btn-default center" id="buttonsearch">ค้นหา</button>
        </p> -->

        <div id="head1" class="col-lg-12">

        </div>
        <div id="loading"></div>
        <div id="news" class="col-lg-9 col-md-12 mark pdbt">

        </div>
        <div id="news1" class="col-lg-3 col-md-6 pdbt">

        </div>
        <div id="news2" class="col-lg-3 col-md-6 pdbt">

        </div>
        <div id="bar1" class="col-lg-12 col-sm-12 col-md-12 pdbt">
        ข่าวใหม่
        </div>
        <div id="news4" class="col-lg-4 col-md-4 pdbt">

        </div>
        <div id="news5" class="col-lg-4 col-md-4 pdbt">

        </div>
        <div id="news6" class="col-lg-4 col-md-4 pdbt">

        </div>
        <div id="bar2" class="col-lg-12 col-sm-12 col-md-12 pdbt">
        ข่าวยอดนิยม
        </div>
        <div id="news4-1" class="col-lg-4 col-md-4 pdbt">

        </div>
        <div id="news5-1" class="col-lg-4 col-md-4 pdbt">

        </div>
        <div id="news6-1" class="col-lg-4 col-md-4 pdbt">

        </div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<script>
	$(document).ready(function(){
		$("li[id=li5]").addClass("active");
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