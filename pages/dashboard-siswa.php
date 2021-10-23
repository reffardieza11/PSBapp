<?php
	$id = $_SESSION['id_user'];
	$data01 = mysqli_query($conn,"SELECT * FROM (tb_informasi LEFT JOIN tb_user ON tb_informasi.id_user = tb_user.id_user) LEFT JOIN tb_jurusan ON tb_jurusan.id_jurusan = tb_informasi.id_jurusan WHERE tb_informasi.id_user = '$id'");
?>

<h2>Hai, <?php echo$_SESSION['nama_user']; ?>! calon peserta didik baru</h2>
<hr>

<div class="card-body bg-light rounded">
	<h4 class="text-center pb-3">Status Pendaftaran</h4>
	<div class="row">
		<div class="col-md-3">
			<?php 
			  while($info01 = mysqli_fetch_array($data01)) {
			?>
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td align="center">
						<div class="card-body bg-secondary" style="width:200px; height: 220px;">
							<img src="assets/image/<?= $info01['foto']; ?>" alt="Pas Foto 4x6" class="img" >
						</div>
					</td>			
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td><h6>Nama </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['nama_user']; ?></strong></h6></td>				
				</tr>
				<tr>
					<td><h6>Tempat Lahir </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['tmpt_lhr']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Tanggal Lahir </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['tgl_lhr']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Jenis Kelamin </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['jk']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Alamat Domisili </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['domisili']; ?></strong></h6></td>
				</tr>
			</table>
		</div>
		<div class="col-md-5">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td><h6>No Pendaftaran </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['no_pendaftaran']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Jurusan </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['nama_jurusan']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Asal Sekolah </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['asal_sekolah']; ?></strong></h6></td>				
				</tr>
				<tr>
					<td><h6>Nilai Rata-rata </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['nilai']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Status Pendaftaran </h6></td>
					<td> <h6> : </h6> </td>
					<?php
						if($info01['status']=='Proses'){
							$warna = 'bg-secondary text-white';
						}else if($info01['status']=='Diterima'){
							$warna = 'bg-success text-white';
						}else if($info01['status']=='Cadangan'){
							$warna = 'bg-warning text-white';
						}else if($info01['status']=='Tidak Diterima'){
							$warna = 'bg-danger text-white';
						}
					 ?>
					<td><h6><strong class="<?= $warna; ?> m-1 p-1 rounded"><?= $info01['status']; ?></strong></h6></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php } ?>