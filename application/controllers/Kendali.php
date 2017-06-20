<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendali extends CI_Controller {

	function __construct() {
    parent::__construct();
 		$this->load->library('csvimport');
 		$this->load->model('kendali_model');
    $this->load->model('kependudukan_model');
  }
	public function index()
	{
        $data['kendali'] =true;
        $this->load->view('header',$data);
		    $this->load->view('kendali');
	}

	public function importcsv() {
        ini_set('max_execution_time', 259200);
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '99999999999';
 
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
				        $this->db->trans_begin();
			          foreach ($csv_array as $row) {
					
          					if(isset($row['NomorKendali'])&&$row['NomorKendali']!=null && $row['NomorKendali']!=0){
            						$insert_data = array(
                                    'NomorKendali'	=>$row['NomorKendali'],
                                    'NomorUrut'		=>($row['NomorUrut']),
                                    'KodeProvinsi'			=>($row['KodeProvinsi']),
                                    'KodeKabupaten'	=>($row['KodeKabupaten']),
                                    'KodeKecamatan'	=>($row['KodeKecamatan']),
                                    'KodeKelurahan'	=>($row['KodeKelurahan']),
                                    'KodeRW'	=>($row['KodeRW']),
                                    'KodeRT'	=>($row['KodeRT']),
                                    'NomorRumah'			=>($row['NomorRumah']),
                                    'UsiaKawinPertamaSuami'	=>$row['UsiaKawinPertamaSuami'],
                                    'UsiaKawinPertamaIstri'		=>$row['UsiaKawinPertamaIstri'],
                                    'AnakDilahirkanHidupLakiLaki'	=>$row['AnakDilahirkanHidupLakiLaki'],
                                    'AnakDilahirkanHidupPerempuan'			=>$row['AnakDilahirkanHidupPerempuan'],
                                    'AnakMasihHidupLakiLaki'		=>$row['AnakMasihHidupLakiLaki'],
                                    'AnakMasihHidupPerempuan'        =>$row['AnakMasihHidupPerempuan'],
                                    'StatusPUS'        =>$row['StatusPUS'],
                                    'KesertaanBerKB'        =>$row['KesertaanBerKB'],
                                    'LamaKBTahun'        =>$row['LamaKBTahun'],
                                    'LamaKBBulan'        =>$row['LamaKBBulan'],
                                    'InginPunyaAnakLagi'        =>$row['InginPunyaAnakLagi'],
                                    'AlasanTidakBerKB'        =>$row['AlasanTidakBerKB'],
                                     'TempatPelayananKB'        =>$row['TempatPelayananKB'],
                                      'PK1'        =>$row['PK1'],
                                      'PK2'        =>$row['PK2'],
                                      'PK3'        =>$row['PK3'],
                                      'PK4'        =>$row['PK4'],
                                      'PK5'        =>$row['PK5'],
                                      'PK6'        =>$row['PK6'],
                                      'PK7'        =>$row['PK7'],
                                      'PK8'        =>$row['PK8'],
                                      'PK9'        =>$row['PK9'],
                                      'PK10'        =>$row['PK10'],
                                      'PK11'        =>$row['PK11'],
                                      'PK12'        =>$row['PK12'],
                                      'PK13'        =>$row['PK13'],
                                      'PK14'        =>$row['PK14'],
                                      'PK15'        =>$row['PK15'],
                                      'PK16'        =>$row['PK16'],
                                      'PK17'        =>$row['PK17'],
                                      'PK18'        =>$row['PK18'],
                                      'PK19'        =>$row['PK19'],
                                      'PK20'        =>$row['PK20'],
                                      'PK21'        =>$row['PK21'],
                                      'PK22'        =>$row['PK22'],
                                      'PK23'        =>$row['PK23'],
                                      'PK24'        =>$row['PK24'],
                                      'PK25'        =>$row['PK25'],
                                      'PK26'        =>$row['PK26'],
                                      'PK27'        =>$row['PK27'],
                                      'PK28'        =>$row['PK28']
            						);
          						$this->kendali_model->insert_kendali($insert_data);
          					}
                   
                    for ($i=1; $i <50 ; $i++) { 
                        if(isset($row['NIK'.$i])){
                          if($row['NIK'.$i]!=null && $row['NIK'.$i]!='' && !empty($row['NIK'.$i])){
                               $insert_data_kependudukan = array(
                                  'NomorKendali'  =>$row['NomorKendali'],
                                  'NIK'     =>$row['NIK'.$i],
                                  'Nama'      =>$row['Nama'.$i],
                                  'TanggalLahir'  =>$row['TanggalLahir'.$i],
                                  'BulanLahir'  =>$row['BulanLahir'.$i],
                                  'TahunLahir'  =>$row['TahunLahir'.$i],
                                  'HubunganDenganKK'  =>$row['HubunganDenganKK'.$i],
                                  'JenisKelamin'  =>$row['JenisKelamin'.$i],
                                  'Agama'     =>$row['Agama'.$i],
                                  'Pendidikan'  =>$row['Pendidikan'.$i],
                                  'Pekerjaan'   =>$row['Pekerjaan'.$i],
                                  'StatusKawin' =>$row['StatusKawin'.$i],
                                  'JKN'     =>$row['JKN'.$i],
                                  'Mutasi'    => $retVal = (isset($row['Mutasi'.$i])) ? $row['Mutasi'.$i] : ''
                              );
                              $this->kependudukan_model->insert_kependudukan($insert_data_kependudukan);
                              }
                        }else{
                          break;
                        } 
                    } 
					
                }
                if ($this->db->trans_status() === FALSE){
                        $this->db->trans_rollback();
      					}
      					else{
      							$this->db->trans_commit();
      					}
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'kendali');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $data['kendali'] =true;
                $this->load->view('header',$data);
                $this->load->view('kendali', $data);
            }
 
        } 
}
