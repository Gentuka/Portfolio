<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/php/createDatabase.php');

$smarty = new Smarty();
$smarty->assign('array', $array);
$smarty->assign('columns', $columns);
$smarty->display('list.tpl');
