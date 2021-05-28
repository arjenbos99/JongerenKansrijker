<?php

require_once 'database.php';

$db=new database();
$sql= "INSERT into medewerkers VALUES (:id, :username, :password)";

$placeholders = [

    'id'=> NULL,
    'username'=> 'admin',
    'password'=> password_hash('kaas', PASSWORD_DEFAULT)

];

$db->insert($sql, $placeholders);

?>