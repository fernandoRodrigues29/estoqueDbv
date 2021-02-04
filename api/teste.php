<?php
require_once('databaseConection.php');

$db = new DatabaseConection('database.db');
$db->inserir(null);
$db->listarTudo();
