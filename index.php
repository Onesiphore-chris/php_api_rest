<?php
require('./config/Database.php');
require('./models/Etudiant.php');

$data = new Database();
$dbb = $data->getConnexion();

$etudiant = new Etudiant($dbb);

   $data =  $etudiant->readAll();

    var_dump($data->fetchAll());

?>