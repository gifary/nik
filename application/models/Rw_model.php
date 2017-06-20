<?php
 
class Rw_model extends CI_Model {
    
    private $table = 'dbkoderw';
    private $primary_key = 'RWRWid';

    
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

    function getRWByKelurahan($id_kelurahan){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idKelRW',$id_kelurahan);
        $query = $this->db->get();

        return $query;
    }
}