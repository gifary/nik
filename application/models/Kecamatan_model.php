<?php
 
class Kecamatan_model extends CI_Model {
    
    private $table = 'dbkodekecamatan';
    private $primary_key = 'idKodeKecamatan';

    
    function __construct() {
        parent::__construct();
    }
 
    function getAll() {     
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert($data) {
        $this->db->insert($this->table, $data);
    }

   function getOne($id_provinsi){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->primary_key,$id_provinsi);
        $query = $this->db->get();

        return $query;
    }

    function getKecamatanByKabupaten($id_kabupaten){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idKecKab',$id_kabupaten);
        $query = $this->db->get();

        return $query;
    }
}