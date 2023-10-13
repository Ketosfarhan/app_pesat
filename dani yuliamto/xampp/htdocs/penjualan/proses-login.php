<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty ($username) && !empty ($password)) {
        $sql =mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username' && 'password' ");
        $result =mysqli_num_rows( $sql);
        if ($result) {
            echo "Anda Berhasil Masuk!";
            echo "Klik <a href='home.php'> Disini </a> Untuk Melanjutkan";
        }
        else{
            echo "Username dan Password Anda Salah";
        }
    }
    else {
        echo "Username dan Password Anda Kosong, Silahkan Diisi";
    }
?>