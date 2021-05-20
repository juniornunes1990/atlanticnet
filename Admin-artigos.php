<?php

use \Atlantic\PageAdmin;
use \Atlantic\Model\User;
use \Atlantic\Model\Artigo;

$app->get("/admin/artigos", function(){

    User::verifyLogin();

    $artigos = Artigo::listAll();

    $page = new PageAdmin();

    $page->setTpl("artigos", [
        'artigos'=>$artigos
    ]);

});

$app->get("/admin/artigos/create", function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("artigos-create");

});

$app->post("/admin/artigos/create", function(){

    User::verifyLogin();

    $artigo = new Artigo();

    $artigo->setData($_POST);

    $artigo->save();

    header("Location: /admin/artigos");
    exit;

});

$app->get("/admin/artigos/:idartigo", function($idartigo){

    User::verifyLogin();

    $artigo = new Artigo();

    $artigo->get((int)$idartigo);

    $page = new PageAdmin();

    $page->setTpl("artigos-update", [
        'artigo'=>$artigo->getValues()

    ]);

});

$app->post("/admin/artigos/:idartigo", function($idartigo){

	User::verifyLogin();

	$artigo = new Artigo();

	$artigo->get((int)$idartigo);

	$artigo->setData($_POST);

	$artigo->save();

	$artigo->setPhoto($_FILES["file"]);

	header('Location: /admin/artigos');
	exit;

});


$app->get("/admin/artigos/:idartigo/delete", function($idartigo){

    User::verifyLogin();

	$artigo = new Artigo();

	$artigo->get((int)$idartigo);

	$artigo->delete();

	header('Location: /admin/artigos');
	exit;

});

?>