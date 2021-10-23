<?php 
	$id = $_GET['id'];
	$status = $_GET['status'];

	$query	= mysqli_query ($conn, "UPDATE tb_informasi SET status='$status' WHERE id_user='$id'");

	echo "<script>alert('Ubah Status Berhasil');window.location.href='index.php?p=informasi-pendaftaran';</script>";;