<?php

include'../koneksi.php';

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$foto = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$tmpt_gambar = '../assets/image'.$filename;
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
    echo "<script type='text/javascript'>onload =function(){alert('ekstensi Gagal');history.go(-1);}</script>";
}elseif(!empty($filename)){
    if($ukuran < 104407000){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'],'../assets/image/'.$rand.'_'.$filename);
        echo "<script>alert('data telah diupload');window.location.href='../index.php?p=dashboard-siswa';</script>";
    }else{
        echo "<script>alert('gagal ukuran');history.go(-1);</script>";
    }
}

$selectidmax =mysqli_query($conn, "SELECT max(id_informasi) as maxid FROM tb_informasi WHERE no_pendaftaran LIKE 'PSB%'");
$hslidmax=mysqli_fetch_array($selectidmax);
$idmax=$hslidmax['maxid'];
$nourut = (int) substr($idmax, 3,3);
$nourut++;
$IDbaru = "PSB" . sprintf("%03s", $nourut);

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$tmpt_lhr   = $_POST['tmpt_lhr'];
$tgl_lhr    = $_POST['tgl_lhr'];
$jurusan    = $_POST['jurusan'];
$user       = $_POST['user'];
$domisili   = $_POST['domisili'];
$asal       = $_POST['sekolah'];
$tahun      = $_POST['tahun'];
$nilai      = $_POST['nilai'];
$ijazah     = $_FILES['ijazah'];

$query  = mysqli_query($conn, "INSERT INTO tb_informasi (id_informasi, id_user, id_jurusan, no_pendaftaran, domisili, asal_sekolah, tahun, nilai, ijazah, status) value (' ','$user','$jurusan','$IDbaru','$domisili', '$asal', '$tahun', '$nilai', '$ijazah', 'Proses')");
$query1 = mysqli_query($conn, "UPDATE tb_user SET id_informasi='', nama_user='$nama', nik='$nik', jk='$jk', tmpt_lhr='$tmpt_lhr', tgl_lhr='$tgl_lhr', foto='$xx'");

if($query){
    echo "<script>alert('Registrasi Berhasil');window.location.href='../index.php?p=dashboard-siswa';</script>";
}else{
    echo "<script type='text/javascript'>onload =function(){alert('Registrasi Gagal');history.go(-1);}</script>";
}