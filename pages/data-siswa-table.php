<?php
  $data01 = mysqli_query($conn, "SELECT * FROM (tb_informasi LEFT JOIN tb_user ON tb_informasi.id_user = tb_user.id_user) LEFT JOIN tb_jurusan ON tb_jurusan.id_jurusan = tb_informasi.id_jurusan");
    $no = 1;
   
?>
<h2>Daftar Siswa Pendaftar</h2>
<hr>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Pendaftaran</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Status</th>
        <th scope="col" colspan="3" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($info01 = mysqli_fetch_array($data01)){ ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $info01['nama_user']; ?></td>
        <td><?= $info01['no_pendaftaran']; ?></td>
        <td><?= $info01['nama_jurusan']; ?></td>
        <td><?= $info01['status']; ?></td>
        <td><a href="" class="btn btn-info text-white" style="font-size:15px;"><span data-feather="info"></span> Detail</a></td>
        <td><a href="" class="btn btn-warning text-white" style="font-size:15px;"><span data-feather="edit"></span> Edit</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>