<?php
include('db.php');
$util=new db;


if(isset($_POST['upload'])){
    //tangkap file nama
    $nama_Gambar=$_FILES['file']['name'];
    $tmp=$_FILES['file']['tmp_name'];
    $direktory="upload/".$nama_Gambar;
    move_uploaded_file($tmp,$direktory);
    $nama=$_POST['user'];
    $util->AddData($nama_Gambar,$nama);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload php </title>
</head>
<body>
    <p>upload file didatabase</p>
    <?php
        $no=1;
    foreach($data=$util->query("SELECT * FROM gambar") as $datas){
        $delete="<a href=delete.php?id=".$datas['id'].">delete</a>";?>
        <img src="upload/<?=$datas["img"];?>" alt="">
        <p><?=$no?> nama:<?=$datas['nama'];?></p>
        <p><?=$delete;?></p>
        <?php $no++; ?>
    <?php }?>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="text" name="user" placeholder="nama">
        <button name="upload">upload</button>
    </form>
</body>
</html>
<style>
    img{
        width: 25%;
        height: 20%;
    }
</style>