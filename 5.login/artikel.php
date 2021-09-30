<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
    //indonesia
$url=file_get_contents('https://api.kawalcorona.com/indonesia');
$datas=json_decode($url,true);
//berdasar provinsi
$provurl=file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
$provinsi=json_decode($provurl,true);
//global data
//bukan arai dimensi tidak perlu di iterasi
//meninggal
$Gmeninggalurl=file_get_contents('https://api.kawalcorona.com/meninggal');
$Gmeninggal=json_decode($Gmeninggalurl,true);
//sembuh
$Gsembuhurl=file_get_contents('https://api.kawalcorona.com/sembuh');
$Gsembuh=json_decode($Gsembuhurl,true);
//positive
$Gpositifurl=file_get_contents('https://api.kawalcorona.com/positif');
$Gpositif=json_decode($Gpositifurl,true);
//dunia
$Gworldurl=file_get_contents('https://api.kawalcorona.com/');
    $Gworld=json_decode($Gworldurl,true);

     ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data korona</title>
   
    <center>
        <ul>
        <li><a href="logout.php">logout</a></li>
        </ul>
        <h1>data korona provinsi di indonesia</h1>
        <table border="1">
            <tr>
                <th>no</th>
                <th>positif</th>
                <th>meninggal</th>
                <th>sembuh</th>
                <th>provinsi</th>
                <th>kode provinsi</th>
                <th>Fid</th>
            </tr>
            
    <?php $no=1; foreach($provinsi as $data){ ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['attributes']['Kasus_Posi']?></td>
            <td><?=$data['attributes']['Kasus_Meni']?></td>
            <td><?=$data['attributes']['Kasus_Semb']?></td>
            <td><?=$data['attributes']['Provinsi']?></td>
            <td><?=$data['attributes']['Kode_Provi']?></td>
            <td><?=$data['attributes']['FID']?></td>
        </tr>
        <?php }?>
           
        </table>
    </center>

    <center>
        <h1>data korona indonesia</h1>
        <table border="1">
            <tr>
                <th>no</th>
                <th>positif</th>
                <th>meninggal</th>
                <th>sembuh</th>
                <th>negara</th>
            </tr>
            <tr>
    <?php  foreach($datas as $data){ $no=1;?>
            <td><?=$no?></td>
            <td><?=$data['positif']?></td>
            <td><?=$data['meninggal']?></td>
            <td><?=$data['sembuh']?></td>
            <td><?=$data['name']?></td>
        <?php $no++;}?>
            </tr>
        </table>
    </center>

    <center>
        <h1>data global</h1>
        <table border="1">
            <tr>
                <th><?= $Gsembuh['name']?></th>
                <th><?= $Gpositif['name']?></th>
                <th><?= $Gmeninggal['name']?></th>
            </tr>
            <tr>
                <th><?= $Gsembuh['value']?></th>
                <th><?= $Gpositif['value']?></th>
                <th><?= $Gmeninggal['value']?></th>
            </tr>
        </table>
    </center>
    
    <center>
        <h1>data dunia</h1>
        <table border="1">
            <tr>
                <th>no</th>
                <th>positif</th>
                <th>meninggal</th>
                <th>sembuh</th>
                <th>negara</th>
                <th>kode negara</th>
            </tr>
            
    <?php $no=1; foreach($Gworld as $data){ ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['attributes']['Confirmed']?></td>
            <td><?=$data['attributes']['Deaths']?></td>
            <td><?=$data['attributes']['Recovered']?></td>
            <td><?=$data['attributes']['Country_Region']?></td>
            <td><?=$data['attributes']['OBJECTID']?></td>
        </tr>
        <?php }?>
           
        </table>
    </center>


</head>
<body>
    
</body>
</html>