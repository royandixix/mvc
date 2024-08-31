<?php
class Web_model
{
    private $table = 'web';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWeb()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getAllWebById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahWeb($data)
    {
        $query = "INSERT INTO web
                VALUES
                ('', :nama, :jabatan, :pengalaman, :umur, :alamat, :kampus, :asal_daerah)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('pengalaman', $data['pengalaman']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kampus', $data['kampus']);
        $this->db->bind('asal_daerah', $data['asal_daerah']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteWeb($id)
    {
        $query = "DELETE FROM web WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount(); // Mengembalikan jumlah baris yang terpengaruh
    }
}
