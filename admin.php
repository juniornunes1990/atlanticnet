<?php

use \Atlantic\PageAdmin;
use \Atlantic\Page;
use \Atlantic\Model\User;

$app->get('/admin', function() {

	User::verifyLogin();

	$page = new PageAdmin();
	
	$page->setTpl("index");

});

$app->get('/admin/login', function() {

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);
	
	$page->setTpl("login");

});

$app->post('/admin/login', function() {

	User::login($_POST["username"],$_POST["password"]);

	header("Location: ".Page::getBaseUrl()."/admin");
	exit;

});

$app->get('/admin/logout', function() {
	
	User::logout();

	header("Location: ".Page::getBaseUrl()."/admin/login");
	exit;

});

?>
