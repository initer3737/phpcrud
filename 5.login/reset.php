<?php
    session_start();
    include "db.php";
     $util=new db;
    if(isset($_POST['submit'])){
        $util->reset($_POST);
    }
    //apakah sesi login sudah di set??
     
      //ambil data      
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
    <title>reset akun</title>
  
</head>
<body>
    <h1>reset akun</h1>
   
    <ul>
        <form action="" method="post">
        <li><input type="text" name="username" 
        placeholder="username" required></li>
        <li><input type="password" name="password"
         placeholder="password baru" required></li>
         <li><input type="password" name="password2"
         placeholder="re-typed password" required></li>
         <li><button name="submit">reset akun</button></li>
    </form>
    <a href="index.php">login</a>
</ul>
    
   
</body>
</html>