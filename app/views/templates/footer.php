<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script>
    $(function() {

        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#mata_kuliah').val('');
            $('#id').val('');
        });

        $('.tombolTambahDataMatkul').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mata Kuliah');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#kode').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });


        $('.tampilModalUbah').on('click', function() {

            $('#formModalLabel').html('Ubah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASEURL; ?>/mahasiswa/ubah');

            const id = $(this).data('id');

            $.ajax({
                url: '<?= BASEURL; ?>/mahasiswa/getubah',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#nrp').val(data.nrp);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                    $('#mata_kuliah').val(data.mata_kuliah);
                    $('#id').val(data.id);
                }
            });

        });

        $('.tampilModalUbahMatkul').on('click', function() {

            $('#formModalLabel').html('Ubah Data Matakuliah');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASEURL; ?>/matakuliah/ubah');

            const id = $(this).data('id');

            $.ajax({
                url: '<?= BASEURL; ?>/matakuliah/getubah',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#kode').val(data.kode);
                    $('#jurusan').val(data.jurusan);
                    $('#id').val(data.id);
                }
            });

        });

    });
</script>
</body>

</html>