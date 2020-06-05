<?php

ob_start();
$id = 'root';
$pass = '976431root';
try {

    $db = new PDO("mysql:host=localhost;port=3306;dbname=blog", $id, $pass);

} catch (PDOException $e) {
    echo $e->getMessage();


}



