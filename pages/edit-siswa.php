<?php
	$id = $_GET['id'];
	$data01 = mysqli_query($conn,"SELECT * FROM (tb_informasi LEFT JOIN tb_user ON tb_informasi.id_user = tb_user.id_user) LEFT JOIN tb_jurusan ON tb_jurusan.id_jurusan = tb_informasi.id_jurusan WHERE tb_informasi.id_user = '$id'");
?>

<h2>Edit Status Pendaftaran</h2>
<hr>
<a href="index.php?p=informasi-pendaftaran" class="btn btn-primary" style="width: 98px; font-size: 15px;"><span data-feather="chevron-left"></span>Kembali</a>
<div class="card-body bg-light rounded">
	<div class="row">
		<?php while($info01 = mysqli_fetch_array($data01)){ ?>
		<div class="col-4">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td align="center">
						<div class="card-body bg-secondary" style="width:200px; height: 220px;">
							<img src="assets/image/<?= $info01['foto']; ?>" alt="Pas Foto 4x6" class="img" ><br>
							<input type="file" class="form-control m-3" name="foto_baru" id="#input_foto" hidden>
						</div>
					</td>			
				</tr>
				<tr>
					<td align="center">
						<a class="btn btn-success m-1 p-1 text-white" href="index.php?p=siswa-status&status=Diterima&id=<?= $id ;?>"> Diterima</a>
						<a class="btn btn-warning m-1 p-1 text-white" href="index.php?p=siswa-status&status=Cadangan&id=<?= $id ;?>"> Cadangan</a>
						<a class="btn btn-danger m-1 p-1 text-white" href="index.php?p=siswa-status&status=Tidak Diterima&id=<?= $id ;?>"> Tidak Diterima</a>
					</td>			
				</tr>
			</table>
		</div>
		<div class="col-4">
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
		<div class="col-4">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td><h6>Nomor Pendaftaran </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['no_pendaftaran']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Jurusan </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['nama_jurusan']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Status Pendaftaran </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['status']; ?></strong></h6></td>
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
					<td><h6>Scan Ijazah/SKL </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['ijazah']; ?></strong></h6></td>
				</tr>
			</table>
		</div>
		<?php } ?>
	</div>
</div>