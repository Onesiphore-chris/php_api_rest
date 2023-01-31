<?php
require('./config/Database.php');
$data = new Database();

$dbb = $data->getConnexion();
?>