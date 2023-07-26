<?php

require_once './class/Siswa.php';

if(isset($_POST['daftar'])) {
  $dataSiswa = [
    'nama'=> $_POST['nama'],
    'alamat'=> $_POST['alamat'],
    'jenis_kelamin'=> $_POST['jenis_kelamin'],
    'agama'=> $_POST['agama'],
    'sekolah_asal'=> $_POST['sekolah_asal'],
  ];

  $siswa = new Siswa($dataSiswa);
  $siswa->insert();

}


?>

<div class="form-wrapper">
<h2 class="mb-5 fw-semibold">Form Tambah Peserta</h2>
<form action="" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="input-nama" aria-describedby="input-nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
  </div>
  <div>
      <label class="mb-2 d-block" for="">Jenis Kelamin</label>
      <input class="form-check-input" type="radio" name="jenis_kelamin"  value="L" id="jenis_kelamin">
      <label class="form-check-label" for="jenis_kelamin">
        Laki-Laki
      </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2">
        <label class="form-check-label" for="jenis_kelamin2">
          Perempuan
        </label>
      </div>
  <div class="mt-4">
    <label class="mb-2" for="">Agama</label>
    <select class="form-select" name="agama" aria-label="Default select example">
      <option selected>Pilih Salah Satu</option>
      <option value="islam">Islam</option>
      <option value="protestan">Protestan</option>
      <option value="katolik">Katolik</option>
      <option value="hindu">Hindu</option>
      <option value="buddha">Buddha</option>
      <option value="konghucu">Konghucu</option>
    </select>
  </div>
  <div class="mt-3 mb-3">
    <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
    <input type="text" class="form-control" name="sekolah_asal" id="sekolah-asal" aria-describedby="sekolah-asal">
  </div>
  <div class="d-flex">
    <button type="submit" name="daftar" class="btn btn-primary fw-semibold mt-5 me-3">Daftar Sekarang</button>
    <button  class="btn btn-secondary fw-semibold mt-5 me-3">Reset</button>
    <button  class="btn btn-success fw-semibold mt-5 me-3">Kembali</button>
  </div>
</form>
</div>
