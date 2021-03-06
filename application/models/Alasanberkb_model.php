<?php
 
class Alasanberkb_model extends CI_Model {
    
    private $table = 'dbalasantidakberkb';
    private $primary_key = 'iddbAlasanTidakBerKB';

    
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

    function getOne($id_kontrasepsi){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->primary_key,$id_kontrasepsi);
        $query = $this->db->get();

        return $query;
    }
}