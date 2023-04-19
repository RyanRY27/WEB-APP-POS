<?php require viewpath('partials/head');?>

    <div class="coantainer-fluid border rounded p-4 m-5 col-lg-4 mx-auto">
        <form>
            <h5 class="text-dark"><i class="fa fa-hamburger"></i> Add Product</h5>
            <div class="form-floating mt-4 mb-3">
                <input name="description" type="text" class="form-control" id="productfloatingInput" placeholder="Product Name">
                <label for="productfloatingInput" class="form-label">Product Name</label>
            </div>
            <div class="form-floating mt-2 mb-3">
                <input name="description" type="text" class="form-control" id="barcodefloatingInput" placeholder="Product Barcode">
                <label for="barcodedfloatingInput" class="form-label">Product Barcode<small class="text-muted">(optional)</small></label>
            </div>

            <div class="input-group mt-4 mb-3">
                <span class="input-group-text">Qty</span>
                <input name="qty" value="1" type="number" class="form-control" placeholder="Quantity" aria-label="Quantity">
                <span class="input-group-text">Amount</span>
                <input name="amount" value="0.00" step="0.10" type="number" class="form-control" placeholder="Amount" aria-label="Amount">
            </div>


            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <br>
            <button class="btn btn-primary float-end">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </form>
    </div>
<?php require viewpath('partials/foot');?>
