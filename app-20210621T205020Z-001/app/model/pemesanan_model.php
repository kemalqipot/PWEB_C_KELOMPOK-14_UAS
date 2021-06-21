<?php

class pemesanan_model {
    private $table = 'pesan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function get($id) {
        $this->db->query('SELECT * FROM pesan WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAllPesan()
    {
        $this->db->query('SELECT * FROM pesan');
        return $this->db->resultSet();
    }

}