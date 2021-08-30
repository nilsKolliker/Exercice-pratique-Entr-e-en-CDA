<?PHP
include "./PHP/Outils.php";
spl_autoload_register("ChargerClasse");
Parametre::init();
DbConnect::init();
session_start();

$routes = [
	"default" => ["PHP/VIEW/", "Accueil", "Accueil"],

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