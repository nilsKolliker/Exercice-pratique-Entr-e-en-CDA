<?php
$ville=new Ville($_POST);
$maintenant=new DateTime("now");
$ville->setDateDeMaj($maintenant->format("Y-m-d"));
VilleManager::update($ville);
header("location:index.php");
?>