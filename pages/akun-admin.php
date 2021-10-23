<?php 
	$data01 = mysqli_query($conn, "SELECT * FROM tb_user WHERE hak_akses = 'admin'")
?>

<h2>Pengaturan Akun</h2>
<hr>

<div class="card-body bg-light rounded">
	<div class="row">
		<?php while($info01 = mysqli_fetch_array($data01)){ ?>
		<div class="col-6">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td><h6>ID user </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['id_user']; ?></strong></h6></td>				
				</tr>
				<tr>
					<td><h6>Nama </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['nama_user']; ?></strong></h6></td>				
				</tr>
				<tr>
					<td><h6>Username </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['username']; ?></strong></h6></td>				
				</tr>
			</table>
		</div>
		<div class="col-6">
			<table cellpadding="5" cellspacing="2">
				<tr>
					<td><h6>Email </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['email']; ?></strong></h6></td>
				</tr>
				<tr>
					<td><h6>Kontak </h6></td>
					<td> <h6> : </h6> </td>
					<td><h6><strong><?= $info01['kontak']; ?></strong></h6></td>
				</tr>
			</table>
		</div>
		<?php } ?>
	</div>
</div>