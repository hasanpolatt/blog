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
if(isset($_POST['icerikekle'])){
    if(isset($_FILES['image_yol'])){
    $uploads_dir="../img/posts";
    $tmp_name=$_FILES['image_yol']["tmp_name"];
    $name=$_FILES['image_yol']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(2000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(2000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

    $refimgyoll=substr($uploads_dir,3)."/".$benzersizad.$name;

    @move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad.$name");



    $add=$db->prepare("INSERT INTO posts (title,image_yol,
		date, detail, keyword, status) VALUES ( :title,  :image_yol,
		:date, :detail, :keyword, :status)");
    $insert=$add->execute(array(

        'title'=>$_POST['title'],

        'image_yol' => $refimgyoll,
        'date' => $_POST['date'],
        'detail' => $_POST['detail'],
        'keyword' => $_POST['keyword'],
        'status' => $_POST['status']

    ));
    if($insert){
        header("Location:../icerik-ekle.php?status=success");
    }else{
        header("Location:../icerik-ekle.php?status=fail");

    }
}
}
