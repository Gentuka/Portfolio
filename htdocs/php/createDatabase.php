<?php

require_once(__DIR__ . '/database/Database.php');
require_once(__DIR__ . '/database/Table.php');

//Muss Immer drin sein, Stellen welche angepasst werden soll, sind als Kommentar makiert
$database = new Database('db', 'root', 'root', 'SportApp'); //Alle Parameter
$conn = $database->getConn();

$table = new Table($conn);
$table->createTable('Sport'); //tablename kann man anpassen
$table->addColumn('Sport', ['teot','test','gent'],['varchar(255)','varchar(255)','int']); //tablename, columnnames, datentypes anpassen
$array = $database->getTableEntries('Sport'); //wichtig für die List
$columns = $table->getColumnNamesByTable('Sport'); // wichtig für List
