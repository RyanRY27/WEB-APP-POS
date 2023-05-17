<?php require viewpath('partials/head');?>

<h3 class="ms-5 pt-5 mt-3"><i class="fa-solid fa-user-shield me-1 ms-5" style="color: #000000;"></i>ADMIN</h3>

<div class="pt-4 container-fluid row">
	<div class="col-12 col-sm-4 col-md-3 col-lg-2">
		<div class="list-group">
			<a href="index.php?page=admin&tab=dashboard" class="list-group-item list-group-item-action <?=!$tab || $tab == 'dashboard'?'active':''?>"><i class="fa-solid fa-chart-line ms-2 me-2"style="color: #000000;" ></i>Dashboard</a>
			<a href="index.php?page=admin&tab=products" class="list-group-item list-group-item-action <?=$tab=='products'?'active':''?>"><i class="fa-solid fa-cart-plus ms-2 me-2" style="color: #000000;"></i>Products</a>
			<a href="index.php?page=admin&tab=inventory" class="list-group-item list-group-item-action <?=$tab=='inventory'?'active':''?>"><i class="fa-solid fa-warehouse ms-2 me-2" style="color: #000000;"></i>Inventory</a>
			<a href="index.php?page=admin&tab=sales" class="list-group-item list-group-item-action <?=$tab=='sales'?'active':''?>"><i class="fa-solid fa-file-circle-check ms-2 me-2" style="color: #000000;"></i>Sales Reports</a>
			<a href="index.php?page=admin&tab=users" class="list-group-item list-group-item-action <?=$tab=='users'?'active':''?>"><i class="fa-solid fa-users me-2 ms-2" style="color: #000000;"></i>Users/Roles</a>
			<a href="index.php?page=logout" class="list-group-item list-group-item-action"><i class="fa-solid fa-right-from-bracket ms-2 me-2" style="color: #000000;"></i>Log Out</a>
		</div>
	</div>
	<div class="border col p-3">
		<h2><?=strtoupper($tab)?></h2>
		
		<?php

			switch ($tab) {
				case 'products':
					require viewpath('admin/products');
					break;

				case 'users':
					require viewpath('admin/users');
					break;

				case 'sales':
					require viewpath('admin/sales');
					break;
				
				default:
					// code...
					break;
			}
			?>

	</div>
</div>

<?php require viewpath('partials/foot');?>