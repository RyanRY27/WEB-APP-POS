<br>
<?php 

	$graph = new Graph();

	$data = daily_sales_data($today_records);
	$graph->title = "Today's Sales";
	$graph->xtitle = "Hours";
	$graph->canvasX = "1500";
	$graph->canvasY = "400";
	$graph->styles = "width: 80%;margin:auto;display:block;";
	$graph->display_graph($data);
?>

	<br>


<div class="row justify-content-center">
	
	<div class="col-md-2 rounded border p-4 my-3 shadow-sm m-2">
		<h4><i class="fa-solid fa-cart-plus"></i> Total Products:</h4>
		<h1><?=$total_products?></h1>
	</div>
	<div class="col-md-3 rounded border p-4 my-3 shadow-sm m-2">		
		<h4><i class="fa fa-money-bill-wave"></i> This Month's Total Sales:</h4>
		<h1>₱ <?=number_format($Msales,2)?></h1>
	</div>
	<div class="col-md-3 rounded border p-4 my-3 shadow-sm m-2">		
		<h4><i class="fa fa-money-bill-wave"></i> Today's Total Sales:</h4>
		<h1>₱ <?=number_format($salest,2)?></h1>
	</div>
		
	<div class="col-md-3 rounded border p-4 my-3 shadow-sm m-2">
		<h4><i class="fa fa-money-bill-wave"></i> Total Sales:</h4>
		<h1>₱ <?=number_format($total_sales,2)?></h1>
	</div>


</div>
