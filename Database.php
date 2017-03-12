<?php

/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 12/03/2017
 * Time: 16:03
 */
class Database
{
    public function try_connection()
    {
        try {
            $bdd =  (new PDO('mysql:host=localhost;port=9998;', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)));
            $bdd->query("SET NAMES utf8");
            $bdd->query("USE airshoe");
        }
        catch(PDOException $e) {
            return FALSE;
        }
        return $bdd;
    }
}