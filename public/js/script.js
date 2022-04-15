$(function () {

  $('.tombolTambahData').on('click', function () {

    $('#formModalLabel').html('Tambah Data Mahasiswa')
    $('.modal-footer button[type=submit]').html('Tambah Data');
  })

  $('.tampilModalUbah').on('click', function () {

    $('#formModalLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/php-mvc/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/php-mvc/public/mahasiswa/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nrp').val(data.nrp);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#mata_kuliah').val(data.mata_kuliah);
        $('#id').val(data.id);
      }

    });

  });

});

$(function () {

  $('.tombolTambahDataMatkul').on('click', function () {

    $('#formModalLabel').html('Tambah Data Mata Kuliah')
    $('.modal-footer button[type=submit]').html('Tambah Data');
  })

  $('.tampilModalUbahMatkul').on('click', function () {

    $('#formModalLabel').html('Ubah Data Mata Kuliah');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/php-mvc/public/matakuliah/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/php-mvc/public/matakuliah/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#kode').val(data.kode);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }

    });

  });

});