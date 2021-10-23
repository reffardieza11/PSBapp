<?php

   session_start();

   include "../koneksi.php";

   $username = $_POST["username"];
   $password = md5($_POST["password"]);

   $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' limit 1";
   $total = mysqli_query($conn, $sql);
   $result = mysqli_num_rows($total);

   if ($result == True) {
        $data = mysqli_fetch_array($total);
        
        if ($data['hak_akses']=="admin"){
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama_user'] = $data['nama_user'];
            $_SESSION['hak_akses'] = "admin";
            echo "<script>alert('Anda berhasil Login');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../index.php?user=$result'>";
        } else if ($data['hak_akses']=="siswa"){
            $_SESSION['id_user']   = $data['id_user'];
            $_SESSION['nama_user'] = $data['nama_user'];
            $_SESSION['tgl_lhr']   = $data['tgl_lhr'];
            $_SESSION['tmpt_lhr']  = $data['tmpt_lhr'];
            $_SESSION['alamat']    = $data['alamat'];
            $_SESSION['jk']        = $data['jk'];
            $_SESSION['kontak']    = $data['kontak'];
            $_SESSION['nik']       = $data['nik'];
            $_SESSION['hak_akses'] = "siswa";
            echo "<script>alert('Anda berhasil Login');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../index.php?user=$result'>";
        }

   } else {
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        echo "<script>alert('Login anda gagal');</script>";
   }
   