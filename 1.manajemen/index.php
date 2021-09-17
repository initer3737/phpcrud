<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    <?php
        include('db.php');
       //queri untuk ambil semua data di database
        include('fungsi.php');
    

        if(isset($_POST['submit'])){
            Tambah($_POST);
        }

        $results=mysqli_query($conn,"select* from list");
    ?>
</head>
<body>
        <table>
            <tr>
                <th>no</th>
                <th>list</th>
                <th>aksi</th>
            </tr>
            <tr>
              <?php $no=1;
              while($datas=mysqli_fetch_array($results) ){?>
                <?php 
                    $delete="<a href=delete.php?id=".$datas['id'].">Delete</a>";
                    $edit="<a href=edit.php?id=".$datas['id'].">Edit</a>";
                ?>
                <td><?=$no++?></td> 
                <td><?=$datas['todos']?></td>
                <td><?=$delete." ".$edit?></td>
            </tr>
            <?php }?>
        </table>
                
        <form action="" method="post">
            <input name="todos" placeholder="todos..">
            <button name="submit">kirim</button>
        </form>
</body>
</html>