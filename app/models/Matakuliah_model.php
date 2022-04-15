<?php

class Matakuliah_model
{
  private $table = 'matakuliah';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMatakuliah()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMatakuliahById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataMatakuliah($data)
  {
    $query = "INSERT INTO matakuliah
                    VALUES
                  (null, :nama, :kode, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kode', $data['kode']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataMatakuliah($id)
  {
    $query = "DELETE FROM matakuliah WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }


  public function ubahDataMatakuliah($data)
  {
    $query = "UPDATE matakuliah SET
                    nama = :nama,
                    kode = :kode,
                    jurusan = :jurusan
                  WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kode', $data['kode']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }


  public function cariDataMatakuliah()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM matakuliah WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
