<?php
 
class Rt_model extends CI_Model {
    
    private $table = 'dbkodert';
    private $primary_key = 'iddbkodert';

    
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

    function getRTByRW($id_rw){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idRWRT',$id_rw);
        $query = $this->db->get();

        return $query;
    }
}