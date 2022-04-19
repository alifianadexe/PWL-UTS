<?php 
    require 'koneksi.php';

    // proses login
    if(!empty($_GET['aksi'] == 'login'))
    {
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        
        $row = $koneksi->prepare('SELECT * FROM user WHERE nama = ? AND password = md5(?)');
        $row->execute(array($user,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            // buat sesi 
            session_start();

            $result = $row->fetch();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan 
            echo "<script>window.location='index.php';</script>";
        }else{
            echo "<script>window.location='login.php?get=failed';</script>";
        }
    }
    
    if(!empty($_GET['aksi'] == 'logout'))
    {
        session_start();
        session_destroy();
        echo "<script>window.location='login.php?signout=success';</script>";
    }

    if(!empty($_GET['aksi'] == 'delete_user')){
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $kode_id = strip_tags($_GET['kode_id']);
        
        $row = $koneksi->prepare('DELETE FROM user WHERE kode_user = ?');
        $row->execute(array($kode_id));
        
        echo "<script>window.location='index.php?hal=barang&file=barang-input';</script>";        
    }

    if(!empty($_GET['aksi'] == 'barang_input')){
        echo "<script>window.location='index.php?hal=barang&file=barang-input';</script>";        
    }

    