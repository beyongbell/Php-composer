<?php 
include 'vendor/autoload.php';
use League\Plates\Engine;

$templates = new Engine('templates');
$action = isset($_GET['p']) ? $_GET['action'] : null;
switch ($action) {
    case 'about': echo $templates->render('views/site/about', ['name' => 'About']); break;
    default : echo $templates->render('views/site/index', ['name' => 'Tinnakorn CHoompee']);
}