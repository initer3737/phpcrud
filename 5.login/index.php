<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php
    include "db.php";
     $util=new db;
    if(isset($_POST['submit'])){
        $util->login($_POST);
        
        //jika berhasil login saya ingin menyimpan datanya ke dalam session 
        // session_start();
        // $_SESSION['nama']='puthut wahyu aji';
        // echo $_SESSION['nama'];     

         ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
                ///coded by puthut wahyu aji
    }
?>
</head>
<body>
    <h1>login</h1>
    
    <ul>
        <form action="" method="post">
        <li><input type="text" name="username" 
        placeholder="username" required></li>
        <li><input type="password" name="password"
         placeholder="password" required></li>
         <li><button name="submit">login</button></li>
    </form>
    <li><a href="register.php">buat akun</a></li>
    <li><a href="reset.php">lupa akun??</a></li>
</ul>
    
   
</body>
</html>