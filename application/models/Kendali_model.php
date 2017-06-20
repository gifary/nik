<?php
 
class Kendali_model extends CI_Model {
    
    private $table = 'dbnomorkendali';
    private $primary_key = 'idNomorKendali';

    
    function __construct() {
        parent::__construct();
 
    }
 
    function get_kendali() {     
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_kendali($data) {
        $this->db->insert($this->table, $data);
    }
}