<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/php/createDatabase.php');

$tablename = 'Sport';


if (!empty($_GET['insert'])) {
    $values = $_GET;
    $values = array_values($values);
    array_pop($values);

    for ($i = 0; $i < count($values); $i++) {
        if (empty($values[$i])) {
            $values[$i] = 0;
        }
    }

    $table->insert($tablename, $values);
    header('Location:list.php');
}

$smarty = new Smarty();
$smarty->assign('columns', $columns);
$smarty->display('insert.tpl');
