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

	$limit = 10;
	$page_number = $_GET['pg'] ?? 1;
	$offset = ($page_number - 1) * $limit;

	$sales = $saleClass->query("select * from sales order by id desc limit $limit offset $offset");


	//today's sales
	$year =  date("Y");
	$month =  date("m");
	$day =  date("d");

	$query = "SELECT sum(total) as total FROM sales WHERE day(date) = $day &&  month(date) = $month && year(date) = $year";

	$stotal = $saleClass->query("$query");
	$sales_total = 0;
	if($stotal){
		$sales_total = $stotal[0]['total'] ?? 0;
	}

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