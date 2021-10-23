<h1>Form Pendaftaran Siswa Baru</h1>
<hr>
<div class="card-body bg-light rounded">
  <form class="row g-3" action="pages/form-pendaftaran-proses.php" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
      <label for="inputNama" class="form-label">Nama</label>
      <input type="text" name="user" class="form-control" value="<?= $_SESSION['id_user']; ?>" hidden>
      <input type="text" name="nama" class="form-control" id="inputNama" value="<?= $_SESSION['nama_user']; ?>" required>
    </div>
    <div class="col-md-6">
      <label for="inputNik" class="form-label">NIK</label>
      <input type="text" name="nik" class="form-control" id="inputNik" value="<?= $_SESSION['nik']; ?>" required>
    </div>
    <div class="col-6">
      <label for="inputTempat" class="form-label">Tempat Lahir</label>
      <input type="text" name="tmpt_lhr" class="form-control" id="inputTempat" value="<?= $_SESSION['tmpt_lhr']; ?>" required>
    </div>
    <div class="col-6">
      <label for="inputTanggal" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tgl_lhr" class="form-control" id="inputTanggal" value="<?= $_SESSION['tgl_lhr']; ?>" required>
    </div>
    <div class="col-6">
      <label for="inputJK" class="form-label">Jenis Kelamin</label><br>
      <input type="radio" name="jk" class="form-check-input" id="inputJk" value="L" <?php if($_SESSION['jk']=='L'){ echo 'checked';} ?> required> <label  class="form-check-label">Laki-laki</label>
      <input type="radio" name="jk" class="form-check-input" id="inputJk" value="P" <?php if($_SESSION['jk']=='P'){ echo 'checked';} ?>> <label  class="form-check-label">Perempuan
    </div>
    <div class="col-12">
      <label for="inputAlamat" class="form-label">Alamat Domisili</label>
      <textarea type="text" name="domisili" class="form-control" id="inputAlamat" required></textarea>
    </div>
    <div class="col-12">
      <?php 
        $data01 = mysqli_query($conn,"SELECT * FROM tb_jurusan ORDER BY id_jurusan");
      ?>
      <label for="inputJurusan" class="form-label">Jurusan</label>
      
      <select name="jurusan" id="inputJurusan" class="form-select" required>
        <option selected required>Pilih...</option>
        <?php while($info01 = mysqli_fetch_array($data01)){ ?>
        <option value="<?= $info01['id_jurusan']; ?>"><?= $info01['nama_jurusan']; ?></option>
         <?php } ?>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputSekolah" class="form-label">Asal Sekolah</label>
      <input type="text" name="sekolah" class="form-control" id="inputSekolah" placeholder="SMP/MTs" required>
    </div>
    <div class="col-md-4">
      <label for="inputTahun" class="form-label">Tahun Lulus</label>
      <select name="tahun" id="inputTahun" class="form-select" required>
        <option selected>Pilih...</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputNilai" name="nilai" class="form-label">Nilai Rata-rata</label>
      <input type="number" name="nilai" class="form-control" id="inputNilai" required>
    </div>
    <div class="col-md-6">
      <label for="inputIjazah" class="form-label">Scan ijazah/SKL</label>
      <input type="file" name="ijazah" class="form-control" id="inputIjazah">
    </div>
    <div class="col-md-6">
      <label for="inputFoto" class="form-label">Pas Foto 4x6</label>
      <input type="file" name="foto" class="form-control" id="inputFoto">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          Telah mengisi formulir dengan sebenar-benarnya
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
</div>