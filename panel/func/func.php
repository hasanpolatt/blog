<?php
ob_start();
session_start();
include 'conn.php';

if(isset($_POST['seokaydet'])){
    $kaydet = $db ->prepare("UPDATE ayar SET 
    title=:title,
    keyword=:keyword,
    description=:description,
    author=:author WHERE id=1");
    $update = $kaydet->execute(array(
        'title' => $_POST['title'],
        'keyword' => $_POST['keyword'],
        'description' => $_POST['description'],
        'author' => $_POST['author']
    ));
    if($update){
        header("Location:../seo.php?status=ok");
    }else{
        header("Location:../seo.php?status=fail");
    }
    
}

