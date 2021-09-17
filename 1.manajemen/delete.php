<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <?php
    require('db.php');
       include('fungsi.php')
    ?>
</head>
<body>
   berhasil mendelete data
    <?=delete();?>
    <a href="index.php">kembali</a>
</body>
</html>