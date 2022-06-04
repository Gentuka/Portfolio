<?php
require_once(__DIR__ . '/vendor/autoload.php');

$name = 'Gent';

//TODO: $array soll angepasst werden

$smarty = new Smarty();
$smarty->assign('name', $name);
$smarty->display('index.tpl');
