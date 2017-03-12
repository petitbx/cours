<?php
include_once 'src/User.php';
include_once 'src/Role.php';
include_once 'Database.php';

/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 12/03/2017
 * Time: 16:06
 */

public function addUser($name, $lastname, $roleName, $address, $password, $email) {
   $bdd = new Database();
    if ($bdd = !$bdd->try_connection())
        return false;
    //$roletmp = new Role()
    if (($roleid = $bdd->query("SELECT id FROM Role WHERE name = ".$roleName))->fetch() == NULL) {
        return false;
    }
    else {
        $role = new Role($roleName);
        $roleID = $role->getID();
        $user = new User($name, $lastname, $address, $email, $password, $roleID);
        return $user;
    }
}