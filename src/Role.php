<?php

class Role
{
	private $name;
	private $id;

	public function __construct($name) {
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