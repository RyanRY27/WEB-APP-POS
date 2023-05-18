<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><h10>Table View</h10></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><h10>Graph View</h10></a>
  </li>
</ul>

<h2 class="mt-2">Today's Total Sales: ₱<?=number_format($sales_total,2)?></h2>

<div class="table-responsive">
	
	<table class="table table-hover">
		<thead>
		<tr>	
			<th>Barcode</th><th>Receipt No</th><th>Description</th><th>Qty</th><th>Price</th><th>Total</th><th>Cashier ID</th><th>Customer Name</th><th>Customer Contact#</th><th>Date</th>
			<th>
				<a href="index.php?page=home">
				<button type="button" class="btn btn-outline-primary">
				  <i class="fa-solid fa-plus me-1"></i>Add Sales	
				</button>
			</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php if (!empty($sales)):?>
			<?php foreach ($sales as $sale):?>
	 		<tr>
				<td><?=esc($sale['barcode'])?></td>
				<td><?=esc($sale['receipt_no'])?></td>
				<td><?=esc($sale['description'])?></td>
				<td><?=esc($sale['qty'])?></td>
				<td><?=esc($sale['amount'])?></td>
				<td><?=esc($sale['total'])?></td>
				<td><?=esc($sale['user_id'])?></td>
				<td><?=esc($sale['customer_name'])?></td>
				<td><?=esc($sale['customer_contact'])?></td>
				<td><?=esc($sale['date'])?></td>
				<td>
					<a href="index.php?page=sale-edit&id=<?=$sale['id']?>">
						<button class="btn btn-outline-primary btn-sm me-1"><i class="fa-solid fa-pen-to-square me-1 ms-1"></i></button></a>
					<a href="index.php?page=sale-delete&id=<?=$sale['id']?>">
						<button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash me-1 ms-1"></i></button></a>
				</td>
			</tr>
			<?php endforeach;?>
		<?php endif;?>
	</tbody>
	</table>

<?php

function page_link($pg)
{
	//url
	$url = "index.php?";
	$url2 = "";
	foreach ($_GET as $key => $value) {
		if($key == 'pg'){
			$url2 .= "&".$key ."=$pg";
		}else{
			$url2 .= "&".$key ."=".$value;
		}
	}
			

	$url2 = trim($url2,"&");
	if(!strstr($url2, "pg="))
	{
		$url2 .= "&pg=$pg";
	}

	$url .= $url2;
	return $url;
}


?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end me-3">
    <li class="page-item">
      <a class="page-link" href="<?=page_link($page_number - 1)?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <li class="page-item active">
    	<a class="page-link" href="<?=page_link(1)?>">1</a>
    </li>

    <li class="page-item">
    	<a class="page-link" href="<?=page_link(2)?>">2</a>
    </li>

    <li class="page-item">
    	<a class="page-link" href="<?=page_link(3)?>">3</a>
    </li>

    <li class="page-item">
      <a class="page-link" href="<?=page_link($page_number + 1)?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>

<script>
	function addsale(){
		var name
	}
</script>