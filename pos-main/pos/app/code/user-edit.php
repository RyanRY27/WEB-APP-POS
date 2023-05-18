<?php

$errors = [];
$user = new User();

$id = $_GET['id'] ?? null;
$row = $user->first(['id'=>$id]);
	
if ($_SERVER['REQUEST_METHOD'] == "POST")
{

	//restriction in editing profile role
	if(isset($_POST['role']) && $_POST['role'] != $row['role'])
	{
		if(Auth::get('role') != "admin")
		{
			$_POST['role'] = $row['role'];
		}
	}	
	
	$errors = $user->validate($_POST, $id);
	if(empty($errors)){

		if(empty($_POST['password'])){
			unset($_POST['password']);
		}else{

			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		}
		

		$user->update($id,$_POST);
		
		
		redirect("user-edit&id=$id");
	}
	
}
if(Auth::access('owner') || ($row && $row['id'] == Auth::get('id'))){
	require viewpath('auth/user-edit');
}
else{

	Auth::set_message("Only Admin can Create Users!!");
	require viewpath('auth/security');
}	