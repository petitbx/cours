<?php
include_once '../Database.php';
class Role
{
    private $_bdd;
	private $name;
	private $id;

	public function __construct($name) {
        $toto = new Database();
        if (($toto->try_connection()) != FALSE)
            $this->_bdd =  $toto->try_connection();
        else
            $this->_bdd=FALSE;
        $id = $this->_bdd->query("SELECT id FROM role WHERE name = ".$name);
        $this->id = $id->getAttribute();
		$this->name = $name;
	}

	public function getName() {
		return $this->name; 
	}

	public function getID() {
		return $this->id;
	}

}


?>