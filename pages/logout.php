<?php
unset($_SESSION['nama_user']);
	session_unset();
	session_destroy();

	echo "<script>alert('Anda berhasil logout');</script>";
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";