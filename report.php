<?php
    require_once 'vendor/autoload.php';
    ob_start();
    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];
    $mpdf = new \Mpdf\Mpdf(['tempDir' =>  __DIR__ .'/tmp',
        'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabun.ttf',
                    'I' => 'THSarabun Italic.ttf',
                    'B' =>  'THSarabun Bold.ttf',
                    'BI' => "THSarabun Bold Italic.ttf",
                ]
            ],
        'format' => 'A4-L' //ตั้งกระดาษเป็นแนวนอน
    ]);
?>
<style>
    a.btn{
        font-family: sarabun;
        font-size: 15pt;
    }
    table,#row- {
        border-collapse: collapse;
        width: 100%;
        background-color: #c1c1c1;
        font-family: sarabun;
        font-size: 13pt;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: white;
    }
</style>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
            <!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Report Product</h3>
				</div>
			</div>
			<!-- /section title -->
            <table style="border: 3px solid #f1f1f1; margin-bottom:20px;">
            <tr>
                <td style="text-align:center">ID</td>
                <td style="text-align:center">Name</td>
                <td style="text-align:center">Description</td>
                <td style="text-align:center">Price</td>
                <td style="text-align:center">Qty</td>
                <td style="text-align:center">Category</td>
            <?php
                $sql = "SELECT * FROM ocean WHERE id";
                $result = $conn->query($sql);
                if(!$result){
                    echo "Error During Retrival";
                }
                else {
                    while($prd=$result->fetch_object()){
                ?>
                <tr id="row-<?php echo $prd->id;?>">
                    <td id="pid-<?php echo $prd->id ?>"><?php echo $prd->id;?></td>
                    <td id="pname-<?php echo $prd->id ?>"><?php echo $prd->name;?></td>
                    <td id="pdesc-<?php echo $prd->id ?>"><?php echo $prd->desc;?></td>
                    <td  id="pprice-<?php echo $prd->id ?>"><?php echo $prd->price;?></td>
                    <td id="pstock-<?php echo $prd->id ?>"><?php echo $prd->qty;?></td>
                    <td id="pcate-<?php echo $prd->id ?>"><?php echo $prd->category;?></td>
                </tr>
                <?php
                    }
                }
                ?>
                </tr>
            </table>
            <?php
                $html = ob_get_contents();
                $mpdf->WriteHTML($html);
                $mpdf->Output("product_report.pdf");
                ob_end_flush();
            ?>
            <a class="primary-btn pull-left" href="product_report.pdf" target="_blank"><i class="fa fa-flag"></i> Export</a>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<script>
	$(document).ready(function(){
		$("li[id=li8]").addClass("active");
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
	});
</script>