<?php
function ChargerClasse($classe){
	if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php")){
		require "PHP/CONTROLLER/" . $classe . ".Class.php";
	}
	if (file_exists("PHP/MODEL/" . $classe . ".Class.php")){
		require "PHP/MODEL/" . $classe . ".Class.php";
	}
}

function AfficherPage($page){
	$chemin = $page[0];
	$nom = $page[1];
	$titre = $page[2];

	include 'PHP/VIEW/Head.php';
	include 'PHP/VIEW/Header.php';
	include 'PHP/VIEW/Nav.php';
	include $chemin . $nom . '.php';
	include 'PHP/VIEW/Footer.php';
}
?>