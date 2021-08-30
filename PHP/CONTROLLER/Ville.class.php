<?php
class Ville{

	/*******************************************************************Attributs**************************************************************************** */
	private $_id;
	private $_nom;
	private $_numero_de_departement;
	private $_code_postal;
	private $_date_de_maj;

	/*******************************************************************Accesseurs*************************************************************************** */

	public function getId(){
		return $this->_id;
	}

	public function setId($id){
		$this->_id=$id;
	}

	public function getNom(){
		return $this->_nom;
	}

	public function setNom($nom){
		$this->_nom=$nom;
	}

	public function getNumero_de_departement(){
		return $this->_numero_de_departement;
	}

	public function setNumero_de_departement($numero_de_departement){
		$this->_numero_de_departement=$numero_de_departement;
	}

	public function getCode_postal(){
		return $this->_code_postal;
	}

	public function setCode_postal($code_postal){
		$this->_code_postal=$code_postal;
	}

	public function getDate_de_maj(){
		return $this->_date_de_maj;
	}

	public function setDate_de_maj($date_de_maj){
		$this->_date_de_maj=$date_de_maj;
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