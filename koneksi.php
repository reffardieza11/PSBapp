<?php
	$conn = new mysqli('localhost','root','','db_psb');

	if ($conn->connect_error){
		exit("Koneksi ke database Gagal".$conn->connect_error);
	}
	