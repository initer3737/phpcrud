<?php
session_start();
session_destroy();
header('location:index.php');

//delete cookie ketika user log out
setcookie('pass','',time()-3600);
setcookie('user','',time()-3600);
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