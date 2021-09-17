<?php
$host="localhost";
$pass="";
$user="root";
$database="todolist";
//sebuah instance 
$conn=new mysqli($host,$user,$pass,$database);

// if($conn->connect_error){
//     echo "eror";
//     var_dump($conn);
// }else{
//     echo "koneksi ke databse berhasil yeay";
// }

//queri untuk memebuat database 
//1. create database todolist;
//2. use todolist
//3 create table list(id int auto_increment,todos varchar(60),primary key(id));
 ?>