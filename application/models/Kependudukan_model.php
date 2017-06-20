<?php
 
class Kependudukan_model extends CI_Model {
    
    private $table = 'dbkependudukan';
    private $primary_key = 'idKependudukan';

    
    function __construct() {
        parent::__construct();
 
    }
 
    function get_kependudukan() {     
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_kependudukan($data) {
        $this->db->insert($this->table, $data);
    }

    function getDataTableAll(){
        $this->db->select('dbkependudukan.NomorKendali, dbkodeprovinsi.namaProvinsi, dbhubungandengankk.namaHubunganDenganKK, dbkependudukan.Nama');
        $this->db->from('dbkependudukan');
        $this->db->join('dbnomorkendali', 'dbnomorkendali.NomorKendali = dbnomorkendali.NomorKendali');
        $this->db->join('dbkodeprovinsi', 'dbkodeprovinsi.idKodeProvinsi = dbnomorkendali.KodeProvinsi');
        $this->db->join('dbhubungandengankk', 'dbhubungandengankk.iddbHubunganDenganKK = dbkependudukan.HubungandenganKK');
        $this->db->like('namaHubunganDenganKK', 'KK');

        $query = $this->db->get();

        return $query;
    }

    function getDataTable($data= array()){
        $this->db->select('dbkependudukan.NomorKendali, dbkodeprovinsi.namaProvinsi, dbhubungandengankk.namaHubunganDenganKK, dbkependudukan.Nama');
        $this->db->from('dbkependudukan');
        $this->db->join('dbnomorkendali', 'dbkependudukan.NomorKendali = dbnomorkendali.NomorKendali');
        $this->db->join('dbkodeprovinsi', 'dbkodeprovinsi.idKodeProvinsi = dbnomorkendali.KodeProvinsi');
        $this->db->join('dbhubungandengankk', 'dbhubungandengankk.iddbHubunganDenganKK = dbkependudukan.HubungandenganKK');
        
         
        if(isset($data['filter_provinsi'])){
            $this->db->where('dbnomorkendali.KodeProvinsi',$data['filter_provinsi']);
        }

        if(isset($data['filter_kabupaten'])){
            $this->db->where('dbnomorkendali.KodeKabupaten',$data['filter_kabupaten']);
            // echo $data['filter_kabupaten'];
        }

        if(isset($data['filter_kecamatan'])){
            $this->db->where('dbnomorkendali.KodeKecamatan',$data['filter_kecamatan']);
        }

        if(isset($data['filter_desa'])){
            $this->db->where('dbnomorkendali.KodeKelurahan',$data['filter_desa']);
        }

        if(isset($data['filter_dusun'])){
            $this->db->where('dbnomorkendali.KodeRW',$data['filter_dusun']);
        }

        if(isset($data['filter_rt'])){
            $this->db->where('dbnomorkendali.KodeRT',$data['filter_rt']);
        }

        if(isset($data['filter_no_kendali'])){
            $this->db->where('dbnomorkendali.NomorKendali',$data['filter_no_kendali']);
            // echo $data['filter_no_kendali'];
        }

        if(isset($data['filter_kepala_keluarga'])){
            $this->db->like('dbkependudukan.Nama',$data['filter_kepala_keluarga']);
            // echo $data['filter_kepala_keluarga'];
        }
        $this->db->like('namaHubunganDenganKK', 'KK');
        $this->db->group_by('dbkependudukan.NomorKendali'); 
        $query = $this->db->get();

        return $query;
    }

    function getKepalaKeluarga($no_kendali){
        $this->db->select('*');
        $this->db->from('dbkependudukan');
        $this->db->join('dbhubungandengankk', 'dbkependudukan.HubungandenganKK = dbhubungandengankk.iddbHubunganDenganKK');
        $this->db->join('dbnomorkendali', 'dbnomorkendali.NomorKendali = dbkependudukan.NomorKendali');
        $this->db->where('dbkependudukan.NomorKendali',$no_kendali);
        $query = $this->db->get();

        return $query;
    }

    function dataKeluarga($no_kendali){
        $this->db->select('*');
        $this->db->from('dbkependudukan');
        $this->db->where('dbkependudukan.NomorKendali',$no_kendali);
        $query = $this->db->get();

        return $query;
    }

    function hubungan($id){
        $this->db->select('*');
        $this->db->from('dbhubungandengankk');
        $this->db->where('dbhubungandengankk.iddbHubunganDenganKK',$id);
        $query = $this->db->get();

        return $query;
    }

    function jk($id){
        $this->db->select('*');
        $this->db->from('dbjeniskelamin');
        $this->db->where('dbjeniskelamin.iddbJenisKelamin',$id);
        $query = $this->db->get();

        return $query;
    }

    function agama($id){
        $this->db->select('*');
        $this->db->from('dbagama');
        $this->db->where('dbagama.iddbAgama',$id);
        $query = $this->db->get();

        return $query;
    }

    function pendidikan($id){
        $this->db->select('*');
        $this->db->from('dbpendidikan');
        $this->db->where('dbpendidikan.iddbPendidikan',$id);
        $query = $this->db->get();

        return $query;
    }

    function pekerjaan($id){
        $this->db->select('*');
        $this->db->from('dbpekerjaan');
        $this->db->where('dbpekerjaan.iddbPekerjaan',$id);
        $query = $this->db->get();

        return $query;
    }

    function status_kawin($id){
        $this->db->select('*');
        $this->db->from('dbstatuskawin');
        $this->db->where('dbstatuskawin.iddbStatusKawin',$id);
        $query = $this->db->get();

        return $query;
    }

    function jkn($id){
        $this->db->select('*');
        $this->db->from('dbjkn');
        $this->db->where('dbjkn.iddbJKN',$id);
        $query = $this->db->get();

        return $query;
    }

    function mutasi($id){
        $this->db->select('*');
        $this->db->from('mutasi');
        $this->db->where('mutasi.idMutasi',$id);
        $query = $this->db->get();

        return $query;
    }

    function ExportCSV($data = array()){
            $this->db->select('dbkependudukan.NomorKendali, dbkodeprovinsi.namaProvinsi, dbhubungandengankk.namaHubunganDenganKK, dbkependudukan.Nama');
        $this->db->from('dbkependudukan');
        $this->db->join('dbnomorkendali', 'dbnomorkendali.NomorKendali = dbnomorkendali.NomorKendali');
        $this->db->join('dbkodeprovinsi', 'dbkodeprovinsi.idKodeProvinsi = dbnomorkendali.KodeProvinsi');
        $this->db->join('dbhubungandengankk', 'dbhubungandengankk.iddbHubunganDenganKK = dbkependudukan.HubungandenganKK');
        $this->db->like('namaHubunganDenganKK', 'KK');
        
        if(isset($data['filter_provinsi'])){
            $this->db->where('dbnomorkendali.KodeProvinsi',$data['filter_provinsi']);
        }

        if(isset($data['filter_kabupaten'])){
            $this->db->where('dbnomorkendali.KodeKabupaten',$data['filter_kabupaten']);
        }

        if(isset($data['filter_kecamatan'])){
            $this->db->where('dbnomorkendali.KodeKecamatan',$data['filter_kecamatan']);
        }

        if(isset($data['filter_desa'])){
            $this->db->where('dbnomorkendali.KodeKelurahan',$data['filter_desa']);
        }

        if(isset($data['filter_dusun'])){
            $this->db->where('dbnomorkendali.KodeRW',$data['filter_dusun']);
        }

        if(isset($data['filter_rt'])){
            $this->db->where('dbnomorkendali.KodeRT',$data['filter_rt']);
        }

        if(isset($data['filter_no_kendali'])){
            $this->db->where('dbnomorkendali.NomorKendali',$data['filter_no_kendali']);
        }

        if(isset($data['filter_kepala_keluarga'])){
            $this->db->like('dbkependudukan.Nama',$data['filter_kepala_keluarga']);
            // echo $data['filter_kepala_keluarga'];
        }
        $this->db->group_by('dbkependudukan.Nama'); 
        $result = $this->db->get();
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "filename_you_wish.csv";
        // $query = "SELECT * FROM mutasi WHERE 1";
        // $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }
}