<?php
require_once( __DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/php/createDatabase.php');

$tablename = 'Sport';


if (!empty($_GET['id'])){
    $array = $table->read($tablename, $_GET['id']);
} 

$smarty = new Smarty();
$smarty->assign('array', $array);
$smarty->display('read.tpl');
