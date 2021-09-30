<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buat akun</title>
    <?php
    include "db.php";
     $util=new db;
    if(isset($_POST['submit'])){
        $util->register($_POST);
    }
      
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
</head>
<body>
    <h1>buat akun</h1>
   
    <ul>
        <form action="" method="post">
        <li><input type="text" name="username" 
        placeholder="username" required></li>
        <li><input type="password" name="password"
         placeholder="password" required></li>
         <li><input type="password" name="password2"
         placeholder="re-type password" required></li>
         <li><button name="submit">buat akun</button></li>
    </form>
    <a href="index.php">login</a>
</ul>
    
   
</body>
</html>