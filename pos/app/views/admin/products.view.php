<!-- Modal -->
<div class="modal fade" id="newproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-burger me-1"></i>ADD PRODUCT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating mt-4 mb-3">
                <input name="description" type="text" class="form-control <?=!empty($errors['description']) ? 'border-danger':''?>" id="productfloatingInput" placeholder="Product Name">
                <label for="productfloatingInput" class="form-label">Product Name</label>
                <?php if(!empty($errors['description'])):?>
                    <small class="text-danger"><?=$errors['description']?></small>
                <?php endif;?>
            </div>
            <div class="form-floating mt-2 mb-3">
                <input name="barcode" type="text" class="form-control <?=!empty($errors['barcode']) ? 'border-danger':''?>" id="barcodefloatingInput" placeholder="Product Barcode">
                <label for="barcodedfloatingInput" class="form-label">Product Barcode<small class="text-muted"> (optional)</small></label>
                <?php if(!empty($errors['barcode'])):?>
                    <small class="text-danger"><?=$errors['barcode']?></small>
                <?php endif;?>
            </div>

            <div class="row g-2 mb-3">
              <div class="col-md">
                <div class="form-floating">
                <input name="qty" type="number" class="form-control <?=!empty($errors['qty']) ? 'border-danger':''?>" id="floatingInputGrid" placeholder="Quantity" value="1" aria-label="Quantity">
                <label for="floatingInputGrid">Quantity</label>
                </div>
            </div>
            <div class="col-md">
            <div class="form-floating">
                <input name="amount" type="number" class="form-control <?=!empty($errors['amount']) ? 'border-danger':''?>" id="floatingInputGrid" placeholder="Price" step="0.50">
                <label for="floatingInputGrid">Price (₱)</label>
                <?php if(!empty($errors['amount'])):?>
                    <small class="text-danger"><?=$errors['amount']?></small>
                <?php endif;?>
            </div>
          </div>
        </div>
                <?php if(!empty($errors['qty'])):?>
                    <small class="text-danger"><?=$errors['qty']?></small>
                <?php endif;?>
                

                <br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input name="image" class="form-control <?=!empty($errors['image']) ? 'border-danger':''?>" type="file" id="formFile">
                <?php if(!empty($errors['image'])):?>
                    <small class="text-danger"><?=$errors['image']?></small>
                <?php endif;?>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><div class="table-responsive">
	
	<table class="table table-striped table-hover">
		<tr>
			<th>Barcode</th><th>Product</th><th>Qty</th><th>Price</th><th>Image</th><th>Date</th>
			<th>
				<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#newproduct">
				  <i class="fa-solid fa-plus me-1"></i>Add Product
				</button>
			</th>
		</tr>

		<?php if (!empty($products)):?>
			<?php foreach ($products as $product):?>
	 		<tr>
				<td><?=esc($product['barcode'])?></td>
				<td>
					<a href="index.php?page=product-single&id=<?=$product['id']?>">
						<?=esc($product['description'])?>
					</a>	
				</td>
				<td><?=esc($product['qty'])?></td>
				<td><?=esc($product['amount'])?></td>
				<td>
					<img src="<?=crop($product['image'])?>" style="width: 100%;max-width:100px;" >
				</td>
				<td><?=esc($product['date'])?></td>
				<td>
					<a href="index.php?page=product-edit&id=<?=$product['id']?>">
						<button class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</button></a>
					<a href="index.php?page=product-delete&id=<?=$product['id']?>">
						<button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash me-1"></i>Delete</button></a>
				</td>
			</tr>
			<?php endforeach;?>
		<?php endif;?>
		
	</table>
	<!--modals-->



	<!--endmodals-->
</div>

