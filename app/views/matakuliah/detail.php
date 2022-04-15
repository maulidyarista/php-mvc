<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['matkul']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['matkul']['kode']; ?></h6>
      <p class="card-text"><?= $data['matkul']['jurusan']; ?></p>
      <a href="<?= BASEURL; ?>/matakuliah" class="card-link">Kembali</a>
    </div>
  </div>

</div>