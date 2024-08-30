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
    
    
}
?>
