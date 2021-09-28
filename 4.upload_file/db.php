<?php
class db{
    function __construct()
    {
        $db='todolist';$host='localhost';$pass='';$user='root';
        $this->db=new mysqli($host,$user,$pass,$db);
    }
//delete data
function delete($get){
    //tambah data tabel bernama gambar
    $id=$get['id'];

    //delete gambar dari upload direktori
    //ambil semua data dari gambar berdasar id
    //iterasi lalu delete dengan unlink
    $deletes=$this->query("select*from gambar where id=$id");
     foreach($deletes as $delete){
         $deletes=$delete['img'];
         $direktory="upload/$deletes";
            if(unlink($direktory)){
                echo "sukses mengdelete file";
            }
     }
    //untuk mendelete data dari db
    $queri="delete from gambar where id=$id";
    return mysqli_query($this->db,$queri);
}


//tambah data
function AddData($namaGambar,$nama){
    //tambah data tabel bernama gambar
    $queri="insert into gambar values('','$namaGambar','$nama')";
    return mysqli_query($this->db,$queri);
}
  

    //kueri
function query($queris){
    //queri lalu tangkap dalam bentuk arrai asosiatif
    $kuerimysql=mysqli_query($this->db,$queris);
    //iterasi simpan dalam array kosong
    $datas=[];
    while($queri=mysqli_fetch_assoc($kuerimysql)){
        $datas[]=$queri;
    }
    return $datas;
}

} //end class

?>