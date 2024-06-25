<?php

session_start();

//Bikin koneksi
$c = mysqli_connect('localhost','root','','kasir');

//login
if(isset($_POST['login'])){
    //Initiate variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($check);

    if($hitung>0){
        //jika datanya ditemukan
        //berhasil login

        $_SESSION['login'] = 'True';
        header('location:index.php');
    } else {
        //data tidak ditemukan
        //gagal login
        echo '
        <sricpt>alert("username atau password salah");
        window.location.href="login.php"
        </script>
        ';
    }
}

?>