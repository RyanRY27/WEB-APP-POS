<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Table View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Graph View</a>
  </li>
</ul>
<br>
<div class="table-responsive">
	<h2>Today's Total Sales: ₱<?=number_format($sales_total,2)?></h2>
	<table class="table table-striped table-hover">
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
						<button class="btn btn-outline-primary btn-sm me-3"><i class="fa-solid fa-pen-to-square me-2 ms-2"></i></button></a>
					<a href="index.php?page=sale-delete&id=<?=$sale['id']?>">
						<button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash me-2 ms-2"></i></button></a>
				</td>
			</tr>
			<?php endforeach;?>
		<?php endif;?>
		
	</table>
</div>

<script>
	function addsale(){
		var name
	}
</script>