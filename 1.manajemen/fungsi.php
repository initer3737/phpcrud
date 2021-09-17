<?php
include('db.php');
function Tambah($post){
    global $conn;
    $dataAdd=$post['todos'];
    $queri="insert into list values ('','$dataAdd')";
    return mysqli_query($conn,$queri);
}
 //update data
 function update(){
    global $conn;
    $id=$_GET['id'];
   
   
    //cek apakah sudah disubmit??
    if(isset($_POST['updated'])){
        
        $updated=$_POST['update'];
        $queri="update list set todos='$updated' where id=$id";
       return mysqli_query($conn,$queri);
    }
}

    //ambil data
function getData(){
    global $conn;
    $id=$_GET['id'];
    $queri="select* from list where id=$id";
    $datas=mysqli_query($conn,$queri);
    //iterate
    while($data=mysqli_fetch_array($datas)){
       return $data['todos'];
    }
}
function delete(){
    global $conn;
 $id=$_GET['id'];
 $queri="delete from list where id=$id";
    header('location:index.php');
 return mysqli_query($conn,$queri);
}
?>