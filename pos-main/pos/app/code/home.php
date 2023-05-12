<?php

defined("ABSPATH") ? "":die();

if(Auth::access('cashier')){
	require viewpath('home');
}
else{

	Auth::set_message("You need to be Logged In!!");
	require viewpath('auth/security');
}





