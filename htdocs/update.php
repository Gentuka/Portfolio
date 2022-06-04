<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/php/createDatabase.php');

$tablename = 'Sport';

if (!empty($_GET['id'])) {
    $array = $table->read($tablename, $_GET['id']);
    $id = $_GET['id'];
}


if (!empty($_GET['id']) && !empty($_GET['update'])) {
    $columnnames = $table->read($tablename, $id);
    $columnnames = array_keys($columnnames);

    $values = $_GET;
    $values = array_values($values);

    for ($i = 0; $i < count($columnnames); $i++) {
        $table->update($tablename, $id, $columnnames[$i], $values[$i]);
    }
    header('Location:list.php');
}

$smarty = new Smarty();
$smarty->assign('array', $array);
$smarty->display('update.tpl');
