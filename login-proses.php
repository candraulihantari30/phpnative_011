<?php
include "koneksi.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username' AND password ='$password'");
        if(mysqli_num_rows($query) !== 0){
            $GET = mysqli_fetch_array($query);
            $level = $GET['level'];
            $nama = $GET['nm_admin'];
            $_SESSION['nama'] = $nama ;
            $_SESSION['login_in'] = $username;
        if($level == "admin"){
            echo"<script type='text/javascript'>alert('Selamat Datang $level'); location.href=\"admin/index1.php\";</script>";
        }elseif ($level == "user"){            
            echo "<script type='text/javascript'>alert('Selamat Datang $level'); location.href=\"user/userindex.php\";</script>";
        }
        
        }else{
            echo "<script type='text/javascript'>alert('Login Gagal, Username atau Password Salah'); location.href=\"login.php\";</script>";
        }
    }else {
        echo"<script type='text/javascript'>alert('Anda tidak diperkenankan memasuki halaman ini'); location.href=\"admin/login.php\";</script>";
    }

 ?>