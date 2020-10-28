<?php
    include "koneksi.php";
    session_start();
    $login = $_SESSION['login'];
    if($login == "admin" ){
        header("location:admin/index1.php");
    }elseif($login == "user"){
      header("location:user/index1.php");
    }else{
       header("location:login.php");
    }
?>