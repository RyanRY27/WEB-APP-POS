<div class="table-responsive">
	
	<table class="table table-striped table-hover">
		<tr>
			<th>Barcode</th><th>Receipt No</th><th>Description</th><th>Qty</th><th>Price</th><th>Total</th><th>User ID</th><th>Customer Name</th><th>Customer Contact#</th><th>Date</th>
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
						<button class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</button></a>
					<a href="index.php?page=sale-delete&id=<?=$sale['id']?>">
						<button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash me-1"></i>Delete</button></a>
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