<?php

$tab = $_GET['tab'] ?? 'dashboard';


if ($tab == "products") 
{
	
	$productClass = new Product();
	$products = $productClass->query("select * from products order by id desc");

}	
if(Auth::access('owner')){
	require viewpath('admin/admin');
}
else{

	Auth::set_message("You don't have access to ADMIN PAGE!!");
	require viewpath('auth/security');
}