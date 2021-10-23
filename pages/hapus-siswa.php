<?php
  $id_info = $_GET['id'];
  
  $query = mysqli_query($conn, "DELETE FROM tb_informasi WHERE id_user ='$id_info'");
  
  if($query){
	      echo "<script>alert('Sukses Di Hapus');window.location.href='index.php?p=informasi-pendaftaran';</script>";
  }