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
if(isset($_POST['iletisimkaydet'])){
    $kaydet = $db ->prepare("UPDATE ayar SET 
    phone=:phone,
    mail=:mail,
    address=:address
    WHERE id=1");
    $update = $kaydet->execute(array(
        'phone' => $_POST['phone'],
        'mail' => $_POST['mail'],
        'address' => $_POST['address']

    ));
    if($update){
        header("Location:../iletisim.php?status=ok");
    }else{
        header("Location:../iletisim.php?status=fail");
    }
}

if(isset($_POST['sosyalkaydet'])){
    $kaydet = $db ->prepare("UPDATE ayar SET 
    instagram=:instagram,
    facebook=:facebook,
    twitter=:twitter,
    google=:google,
    linkedin=:linkedin,
    github=:github
    WHERE id=1");
    $update = $kaydet->execute(array(
        'instagram' => $_POST['instagram'],
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'google' => $_POST['google'],
        'linkedin' => $_POST['linkedin'],
        'github' => $_POST['github']

    ));
    if($update){
        header("Location:../sosyal.php?status=ok");
    }else{
        header("Location:../sosyal.php?status=fail");
    }
}