<?php

$tab = $_GET['tab'] ?? 'dashboard';


if ($tab == "products") 
{
	
	$productClass = new Product();
	$products = $productClass->query("select * from products order by id desc");

}else
if ($tab == "sales") 
{
	
	$saleClass = new Sale();
	$sales = $saleClass->query("select * from sales order by id desc");

}else
if ($tab == "users") 
{
	
	$userClass = new User();
	$users = $userClass->query("select * from users order by id desc");

}



if(Auth::access('owner')){
	require viewpath('admin/admin');
}
else{

	Auth::set_message("You don't have access to ADMIN PAGE!!");
	require viewpath('auth/security');
}