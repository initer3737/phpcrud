<?php
class db{
function __construct()
{
    $host='localhost';$user='root';$pass='';$dbname='todolist';
    $this->conn=mysqli_connect($host,$user,$pass,$dbname);
}   

function login($post){
    session_start();
    //cek user
    $user=$post['username'];
    $pass=$post['password'];
    $queri="SELECT *  From login WHERE username='$user' ";
    $username=mysqli_query($this->conn,$queri);
        //cek usernamenya ada di db?
    if(mysqli_num_rows($username) == 1 ){
        //tangkap semua data dalam bentuk arrai 
        $result=mysqli_fetch_assoc($username);
        //verifikasi password?
        if(password_verify($pass,$result['password'])){
            echo'<h3 style="color: green;font-style:italic;"> login sukses!!</h3>';
            $_SESSION['login']=true;
            //ketika user berhasil login maka buat 2 cookie untuk menyimpan data terdapat 3 parameter 1.key 2.value 3.waktu kadaluarsa
            setcookie('user',$result['username'],time()+24*60*60);
            setcookie('pass',$result['password'],time()+24*60*60);
            header('location:artikel.php');
        }else if(!password_verify($pass,$result['password'])){
            echo'<h3 style="color: red;font-style:italic;">gagal login </h3>';
        }
       
    }
}

function register($post){
    $user=$post['username'];
    //salah satu harus dienkrip yang dienkrip digunakkan untuk insert ke database yang tidak di enkrip digunakkan untuk validasi
    $pass=password_hash($post['password'],PASSWORD_DEFAULT);
    $pass2=$post['password2'];
    //cek apakah ke2 input password sama?? 
    if(!password_verify($pass2,$pass)){
        echo"<p style='color:red;'>passwordnya tidak cocok lho!!</p>";
            return false;
    }
    //untuk validasi inputan yang kosong gunakkan required di dalam tag input
    //cek apakah inputan user sama dengan username di db??
        $validate=mysqli_num_rows(mysqli_query($this->conn,"select* from login where username='$user'"));
        //cek jika username sudah ada??
        //$validate akan menghasilkan nilai 1 pertanda bahwa ada data yang sama antara inputan user dan database
        if($validate >0){
            echo"<p style='color:red'>username sudah dipakai!!</p>";
            return false;
            //return false bermaksud agar saat kondisinya bernilai true maka program akan berhenti sehingga queri insert tidak dijalankan jadi anda tidak tidak perlu menambahkan pengkondisian else
         }
            $queri="INSERT INTO login (id,username,password) VALUES ('','$user','$pass')";
            echo"<p style='color:green'>registrasi berhasil selamat ya!!</p>";
          return mysqli_query($this->conn,$queri);
        
    }


    function reset($post){
        //password dtangkap lalu dihash
        //masukkan password baru berdasarkan username  
            //validasi apakah 2 input password nya sama??
        $user=$post['username'];
        //pass new digunakkan untuk reset password
        $passnew=password_hash($post['password'],PASSWORD_DEFAULT);
        $pass2=$post['password2'];
        //VALIDASI PASSWORD?
            if(!password_verify($pass2,$passnew)){
                echo"<p style='color:red'>password tidak cocok ulangi lagi!!</p>";
                return false; 
            }
        //cek dulu apakah usernamenya ada di database??
        $db=mysqli_num_rows(mysqli_query($this->conn,"select* from login where username='$user'"));
            if($db !== 1){
                echo"<p style='color:red'>username tidak ada di ditemukan!!!!</p>";
                return false;
            }
        //$user digunakkan untuk menselect data di database kalo ada maka bisa diupdate ke langkah  selanjutnya jika tidak maka tapilkan pesan validasi tidak valid 
        //update password baru ke dalam database
            $queri="update login set password='$passnew' where username='$user' ";
            echo"<p style='color:green'>berhasil mereset sandi akun!!</p>";
            return mysqli_query($this->conn,$queri); 
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
}//end class
?>