<?php
require_once( __DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/php/createDatabase.php');

$tablename = 'Sport';

if (!empty($_GET['id'])){
    $table->delete($tablename, $_GET['id']);
    header('Location:list.php');
} 
