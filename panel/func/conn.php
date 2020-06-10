<?php

ob_start();
$id = 'root';
$pass = 'sanane21';
try {

    $db = new PDO("mysql:host=localhost;port=3306;dbname=blog", $id, $pass);

} catch (PDOException $e) {
    echo $e->getMessage();


}



