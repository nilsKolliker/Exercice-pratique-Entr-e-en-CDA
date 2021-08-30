<?php
class VilleManager{
	public static function add(Ville $obj){
		$db = DbConnect::getDb();
		$q=$db->prepare('INSERT INTO Ville (nom,numerodedepartement,codepostal,datedemaj)VALUES(:nom,:numerodedepartement,:codepostal,:datedemaj)');
		$q->bindValue(':nom', $obj->getNom());
		$q->bindValue(':numerodedepartement', $obj->getNumeroDeDepartement());
		$q->bindValue(':codepostal', $obj->getCodePostal());
		$q->bindValue(':datedemaj', $obj->getDateDeMaj());
		$q->execute();
	}

	public static function update(Ville $obj){
		$db = DbConnect::getDb();
		$q=$db->prepare('UPDATE Ville SET nom=:nom,numerodedepartement=:numerodedepartement,codepostal=:codepostal,datedemaj=:datedemaj WHERE id=:id');
		$q->bindValue(':id', $obj->getId());
		$q->bindValue(':nom', $obj->getNom());
		$q->bindValue(':numerodedepartement', $obj->getNumeroDeDepartement());
		$q->bindValue(':codepostal', $obj->getCodePostal());
		$q->bindValue(':datedemaj', $obj->getDateDeMaj());
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