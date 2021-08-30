<?php
$ville=new Ville($_POST);
$maintenant=new DateTime("now");
$ville->setDateDeMaj($maintenant->format("Y-m-d"));//on fixe à la date du jour
VilleManager::update($ville);//le probleme vien du manageur mais le temps me manque
header("location:index.php");
?>