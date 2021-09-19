<?php
include('db.php');

class fungsi{
    function __construct()
    {
        $host="localhost";
        $pass="";
        $user="root";
        $database="todolist";
        //sebuah instance 
        $this->conn=new mysqli($host,$user,$pass,$database);
    }



    //tambah data

function Tambah($post){
    //global $conn;
    $dataAdd=$post['todos'];
    $queri="insert into list values ('','$dataAdd')";
    return mysqli_query($this->conn,$queri);
}
 //update data
 function update($get){
    //global $conn;
    $id=$get['id'];
   
   
    //cek apakah sudah disubmit??
    if(isset($_POST['updated'])){
        
        $updated=$_POST['update'];
        $queri="update list set todos='$updated' where id=$id";
            header("location:index.php");
       return mysqli_query($this->conn,$queri);
    }
}

    //ambil data
function getData($get){
    //global $conn;
    $id=$get['id'];
        $queri="select* from list where id=$id";
        $datas=mysqli_query($this->conn,$queri);
   
    //iterate
    while($data=mysqli_fetch_array($datas)){
       return $data['todos'];
    }
}

function delete($get){
    //global $conn;
 $id=$get['id'];
 $queri="delete from list where id=$id";
    header('location:index.php');
 return mysqli_query($this->conn,$queri);
}

}
?>