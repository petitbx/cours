<?php

/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 12/03/2017
 * Time: 14:57
 */
class User
{
    private $name;
    private $lastName;
    private $address;
    private $email;
    private $password;
    private $roleID;

    public function __construct($name, $lastName, $address, $email, $password, roleID){
    	$this->name = $name;
    	$this->lastName = $lastName;
    	$this->address = $address;
    	$this->email = $email;
    	$this->password = $password;
    	$this->roleID = $roleID;
    }

    public function getName(){
    	return $this->name;
    }
    public function getLastName(){
    	return $this->lastName;
    }
    public function getAddress(){
    	return $this->address;
    }
    public function getEmail(){
    	return $this->email;
    }

    public function getPassword(){
    	return $this->password;
    }

    public function getRoleID() {
    	return $this->roleID;
    }

    public function setName($name) {
    	$this->name = $name;
    }

    public function setLastName($lastName) {
    	$this->lastName = $lastName;
    }

    public function setAddress($address) {
    	$this->address = $address;
    }

    public function setEmail($email) {
    	$this->email = $email;
    }

    public function setPassword($password) {
    	$this->password = $password;
    }

    public function setRoleID($roleID) {
    	$this->roleID = $roleID;
    }



}