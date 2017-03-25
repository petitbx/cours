<?php
error_reporting(0);

include __DIR__.'/Database.php';
include __DIR__.'/src/Role.php';
include __DIR__.'/src/User.php';
/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 12/03/2017
 * Time: 16:06
 */

function addUser($name, $lastname, $roleName, $address, $password, $email) {
   $bdd = new Database();
    if ($bdd = !$bdd->try_connection())
        return false;
    //$roletmp = new Role()
    if (($roleid = $bdd->query("SELECT id FROM Role WHERE name = ".$roleName)->fetch() == NULL)) {
        return false;
    }
    else {
       //$role = new Role($roleName);
        //$roleID = $role->getID();
       // $user = new User($name, $lastname, $address, $email, $password, $roleID);
       // return $user;
    }
}


function getUserById($id) {
    $bdd = new Database();
    $bdd = $bdd->try_connection();
    if ($bdd == FALSE)    
        return false;
    //var_dump($bdd);
    $result = $bdd->query("SELECT * FROM user WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    //var_dump($result);
    //echo($result['name']);

    $user = new User($result['name'],$result['lastname'],$result['address'],$result['email'],$result['password'],$result['roleID']);



    return $user;

}
if (!isset($_POST['nbr'])) {
?>

<html>
<head>
    <title></title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" id="nbr" name="nbr"/>
        <input type="submit" value="Send"/>
    </form>

</body>
</html>

<?php
}
else {
print_r(getUserById($_POST['nbr']));
}
//var_dump(__DIR__);