<?php
	include "../koneksi.php";

	$nama       = $_POST['nama'];
	$nik        = $_POST['nik'];
	$email      = $_POST['email'];
	$username   = $_POST['username'];
	$tmpt_lhr   = $_POST['tmpt_lhr'];
	$tgl_lhr    = $_POST['tgl_lhr'];
	$jk         = $_POST['jk'];
	$alamat     = $_POST['alamat'];
	$no_telp    = $_POST['no_telp'];
	$password   = $_POST['password'];
	$repassword = $_POST['repassword'];

	if($password == $repassword){
		$password = md5($password);
	}else{
		echo "<script>alert('Password Tidak Sama, silahkan coba kembali');history.go(-1);</script>";
	}

	$sql = "INSERT INTO tb_user(id_user, nama_user, nik, email, username, password, jk, alamat, kontak, tmpt_lhr, tgl_lhr, foto, hak_akses) VALUES(' ', ' $nama', '$nik', '$email', '$username', '$password', '$jk', '$alamat', '$no_telp', '$tmpt_lhr', '$tgl_lhr', ' ', 'siswa')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Registrasi akun berhasil, silahkan login kembali');</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";	
    }else{
        echo "<script>alert('Registrasi akun anda gagal, silahkan coba kembali');history.go(-1);</script>";
	}