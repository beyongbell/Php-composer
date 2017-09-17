<?php 
include 'vendor/autoload.php';
use League\Plates\Engine;

$templates = new Engine('templates');
echo $templates->render('views/site/index', ['name' => 'Tinnakorn']);