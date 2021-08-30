<?PHP
include "./PHP/Outils.php";
spl_autoload_register("ChargerClasse");
Parametre::init();
DbConnect::init();
session_start();

$routes = [
	"default" => ["PHP/VIEW/", "Accueil", "Liste des villes"],//la page d'acceuil
	"update"=>["PHP/VIEW/","form",'Mise à jour'],//le formulaire qui n'est qu'en update
	"action"=>["PHP/VIEW/","action",'matuvu'],//la page qui normalement fait l'update
];

if (isset($_GET["codePage"])){
	$codePage = $_GET["codePage"];
	if (isset($routes[$codePage])){
		AfficherPage($routes[$codePage]);
	}else{
		AfficherPage($routes["default"]);
	}
}else{
	AfficherPage($routes["default"]);
}
?>