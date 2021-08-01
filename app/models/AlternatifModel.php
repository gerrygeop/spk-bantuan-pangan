<?php

class AlternatifModel {

    private $table = 'alternatif';
    private $db;

    private $kriteria;
    private $updateKriteria;
    private $values;
    private $jmlKriteria = 16;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAlternatif()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getAlternatifById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_alt=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahAlternatif($data)
    {
        for ($j=1; $j <= $this->jmlKriteria; $j++) { 
            $this->kriteria .= "c$j, ";
            $this->values .= ":c$j, ";
        }

        $this->kriteria = substr($this->kriteria, 0, -2);
        $this->values = substr($this->values, 0, -2);

        $query = "INSERT INTO ". $this->table ." (nama, $this->kriteria) VALUES (:nama, $this->values)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        
        for ($i=1; $i <= $this->jmlKriteria; $i++) { 
            $this->db->bind('c'.$i, $data['c'.$i]);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateAlternatif($data)
    {
        for ($j=1; $j <= $this->jmlKriteria; $j++) {
            $this->updateKriteria .= "c$j=:c$j, ";
        }

        $this->updateKriteria = substr($this->updateKriteria, 0, -2);

        $query = "UPDATE ". $this->table ." SET nama=:nama, $this->updateKriteria WHERE id_alt=:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id_alt']);
        $this->db->bind('nama', $data['nama']);

        for ($i=1; $i <= $this->jmlKriteria; $i++) { 
            $this->db->bind('c'.$i, $data['c'.$i]);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusAlternatif($id)
    {
        $query = "DELETE FROM ". $this->table ." WHERE id_alt=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}