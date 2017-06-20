<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller {

	function __construct() {
        parent::__construct();
 		$this->load->library('csvimport');
 		$this->load->model('kependudukan_model');
    }
	public function index()
	{
		$data['kependudukan'] =true;
		$this->load->view('header',$data);
		$this->load->view('kependudukan');
	}

	public function importcsv() {
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '100000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('csv', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'NomorKendali'	=>$row['NomorKendali'],
                        'NIK'			=>$row['NIK'],
                        'Nama'			=>$row['Nama'],
                        'TanggalLahir'	=>$row['TanggalLahir'],
                        'BulanLahir'	=>$row['BulanLahir'],
                        'TahunLahir'	=>$row['TahunLahir'],
                        'HubunganDenganKK'	=>$row['HubunganDenganKK'],
                        'JenisKelamin'	=>$row['JenisKelamin'],
                        'Agama'			=>$row['Agama'],
                        'Pendidikan'	=>$row['Pendidikan'],
                        'Pekerjaan'		=>$row['Pekerjaan'],
                        'StatusKawin'	=>$row['StatusKawin'],
                        'JKN'			=>$row['JKN'],
                        'Mutasi'		=>$row['Mutasi']
                    );
                    $this->kependudukan_model->insert_kependudukan($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'kependudukan');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $data['kependudukan'] =true;
       			$this->load->view('header',$data);
                $this->load->view('kependudukan', $data);
            }
 
        } 
}
