<?php
class Ville{

	/*******************************************************************Attributs**************************************************************************** */
	private $_id;
	private $_nom;
	private $_numeroDeDepartement;
	private $_codePostal;
	private $_dateDeMaj;

	/*******************************************************************Accesseurs*************************************************************************** */

	public function getId(){
		return $this->_id;
	}

	public function setId(int $id){
		$this->_id=$id;
	}

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom=$nom;
	}

	public function getNumeroDeDepartement(){
		return $this->_numeroDeDepartement;
	}

	public function setNumeroDeDepartement(int $numeroDeDepartement){
		$this->_numeroDeDepartement=$numeroDeDepartement;
	}

	public function getCodePostal(){
		return $this->_codePostal;
	}

	public function setCodePostal(int $codePostal){
		$this->_codePostal=$codePostal;
	}

	public function getDateDeMaj(){
		return $this->_dateDeMaj->format("Y-m-d");
	}

	public function setDateDeMaj(string $dateDeMaj){
		$this->_dateDeMaj=new DateTime($dateDeMaj);
	}

	/*******************************************************************Constructeur************************************************************************* */

	public function __construct(array $options = []){
		if (!empty($options)){
			$this->hydrate($options);
		}
	}
	public function hydrate($data){
		foreach ($data as $key => $value){
			$methode = 'set' . ucfirst($key);
			if (is_callable([$this, $methode])){
				$this->$methode($value);
			}
		}
	}

	/*******************************************************************Autres Méthodes********************************************************************** */
}
?>