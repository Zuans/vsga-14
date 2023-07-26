<?php

if($_GET['id']) {
  $id = $_GET['id'];
  $siswaSql = Siswa::getById($id);
  $siswa = mysqli_fetch_array($siswaSql);
}


if(isset($_POST['edit'])) {
  $id = $_GET['id'];
  $dataSiswa = [
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
    'jenis_kelamin' => $_POST['jenis_kelamin'],
    'agama' => $_POST['agama'],
    'sekolah_asal' => $_POST['sekolah_asal'],
  ];
  $siswa = new Siswa($dataSiswa);
  $siswa->update($id);
}


?>


<div class="form-wrapper">
<h2 class="mb-5 fw-semibold">Form Edit Peserta</h2>
<form action="" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" value="<?php echo isset($siswa['nama_siswa']) ? $siswa['nama_siswa'] : '' ;?>"  name="nama" id="input-nama" aria-describedby="input-nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="alamat"cols="30" rows="3"><?php echo isset($siswa['alamat']) ? $siswa['alamat'] : '' ;?></textarea>
  </div>
  <div>
      <label class="mb-2 d-block" for="">Jenis Kelamin</label>
      <?php if (isset($siswa['jenis_kelamin']) && $siswa['jenis_kelamin'] == 'L') :?>
        <input class="form-check-input"  type="radio" name="jenis_kelamin" value="L"  checked required >
      <?php else: ?>
        <input class="form-check-input"  type="radio" name="jenis_kelamin"  value="L" >
      <?php endif;?>
      <label class="form-check-label" for="jenis_kelamin" >
        Laki-Laki
      </label>
      </div>
      <div class="form-check">
        <?php if(isset($siswa['jenis_kelamin']) && $siswa['jenis_kelamin'] == 'P'): ?>
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2" checked>
        <?php else: ?>
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2">
        <?php endif;?>
        <label class="form-check-label" for="jenis_kelamin2">
          Perempuan
        </label>
      </div>
  <div class="mt-4">
    <label class="mb-2" for="">Agama</label>
    <select class="form-select" name="agama" aria-label="Default select example">
      <option selected>Pilih Salah Satu</option>
      <option value="islam" <?php echo isset($siswa['agama']) && $siswa['agama'] == 'islam' ? 'selected' : '' ?> >Islam</option>
      <option value="protestan" <?php echo isset($siswa['agama']) && $siswa['agama'] == 'protestan' ? 'selected' : '' ?> >Protestan</option>
      <option <?php echo isset($siswa['agama']) && $siswa['agama'] == 'katolik' ? 'selected' : '' ?> value="katolik">Katolik</option>
      <option <?php echo isset($siswa['agama']) && $siswa['agama'] == 'hindu' ? 'selected' : '' ?> value="hindu">Hindu</option>
      <option <?php echo isset($siswa['agama']) && $siswa['agama'] == 'buddha' ? 'selected' : '' ?> value="buddha">Buddha</option>
      <option <?php echo isset($siswa['agama']) && $siswa['agama'] == 'konghucu' ? 'selected' : '' ?> value="konghucu">Konghucu</option>
    </select>
  </div>
  <div class="mt-3 mb-3">
    <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
    <input type="text" class="form-control" name="sekolah_asal" id="sekolah-asal" value="<?php echo isset($siswa['sekolah_asal']) ? $siswa['sekolah_asal'] : '' ;?>" aria-describedby="sekolah-asal">
  </div>
  <div class="d-flex">
    <button type="submit" name="edit" class="btn btn-primary fw-semibold mt-5 me-3">Ubah Sekarang</button>
    <button  class="btn btn-secondary fw-semibold mt-5 me-3">Reset</button>
    <button  class="btn btn-success fw-semibold mt-5 me-3">
              <a href="./index.php" class="d-block text-white text-decoration-none ">Kembali</a>
    </button>
  </div>
</form>
</div>
