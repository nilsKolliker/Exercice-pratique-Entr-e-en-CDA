<?php
class VilleManager{
	public static function add(Ville $obj){
		$db = DbConnect::getDb();
		$q=$db->prepare('INSERT INTO Ville (nom,numero_de_departement,code_postal,date_de_maj)VALUES(:nom,:numero_de_departement,:code_postal,:date_de_maj)');
		$q->bindValue(':nom', $obj->getNom());
		$q->bindValue(':numero_de_departement', $obj->getNumero_de_departement());
		$q->bindValue(':code_postal', $obj->getCode_postal());
		$q->bindValue(':date_de_maj', $obj->getDate_de_maj());
		$q->execute();
	}

	public static function update(Ville $obj){
		$db = DbConnect::getDb();
		$q=$db->prepare('UPDATE Ville SET nom=:nom,numero_de_departement=:numero_de_departement,code_postal=:code_postal,date_de_maj=:date_de_maj WHERE id=:id');
		$q->bindValue(':id', $obj->getId());
		$q->bindValue(':nom', $obj->getNom());
		$q->bindValue(':numero_de_departement', $obj->getNumero_de_departement());
		$q->bindValue(':code_postal', $obj->getCode_postal());
		$q->bindValue(':date_de_maj', $obj->getDate_de_maj());
		$q->execute();
	}

	public static function delete(Ville $obj){
		$db = DbConnect::getDb();
		$db->exec('DELETE FROM Ville WHERE id='.$obj->getId());
	}

	public static function findById($id){
		$db = DbConnect::getDb();
		$id = (int) $id;
		$q = $db->query('SELECT * FROM Ville WHERE id='.$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if ($results != false){
			return new Ville($results);
		}else{
			return false;
		}
	}

	public static function getList(){
		$db = DbConnect::getDb();
		$liste=[];
		$q=$db->query('SELECT * FROM Ville ORDER BY id');
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
			if ($donnees != false){
				$liste[] = new Ville($donnees);
			}
		}
		return $liste;
	}
}
?>