<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	function __construct() {
        parent::__construct();
 		$this->load->model('provinsi_model');
 		$this->load->model('kecamatan_model');
 		$this->load->model('kabupaten_model');
 		$this->load->model('rt_model');
 		$this->load->model('rw_model');
 		$this->load->model('kelurahan_model');
 		$this->load->model('kependudukan_model');
  	}
	public function kabupaten(){
        $q = $this->input->get('q');
        $city = $this->kabupaten_model->getKabupatenByProvinsi($q)->result();
        echo "<option selected value=''>Pilih Kota/Kab</option>";
        foreach($city as $row){
            echo "<option value='".$row->idKodeKabupaten."'>".$row->KodeKabupaten.' '.$row->namaKabupaten."</option>";
        }
    }

    public function kecamatan(){
        $q = $this->input->get('q');
        $city = $this->kecamatan_model->getKecamatanByKabupaten($q)->result();
        echo "<option selected value=''>Pilih Kecamatan</option>";
        foreach($city as $row){
            echo "<option value='".$row->idKodeKecamatan."'>".$row->KodeKecamatan.' '.$row->namaKecamatan."</option>";
        }
    }

    public function kelurahan(){
        $q = $this->input->get('q');
        $city = $this->kelurahan_model->getKelurahanByKecamatan($q)->result();
        echo "<option selected value=''>Pilih Kelurahan</option>";
        foreach($city as $row){
            echo "<option value='".$row->iddbkodekelurahan."'>".$row->KodeKelurahan.' '.$row->namaKelurahan."</option>";
        }
    }

    public function rw(){
        $q = $this->input->get('q');
        $city = $this->rw_model->getRWByKelurahan($q)->result();
        echo "<option selected value=''>Pilih Dusun/RW</option>";
        foreach($city as $row){
            echo "<option value='".$row->RWRWid."'>".$row->KodeRW.' '.$row->namaKodeRW."</option>";
        }
    }

    public function rt(){
        $q = $this->input->get('q');
        $city = $this->rt_model->getRTByRW($q)->result();
        echo "<option selected value=''>Pilih RT</option>";
        foreach($city as $row){
            echo "<option value='".$row->iddbkodert."'>".$row->KodeRT.' '.$row->namaKodeRT."</option>";
        }
    }
}
