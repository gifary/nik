<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluarga extends CI_Controller {

	
	function __construct() {
        parent::__construct();
 		$this->load->library('csvimport');
 		$this->load->model('provinsi_model');
 		$this->load->model('kecamatan_model');
 		$this->load->model('kabupaten_model');
 		$this->load->model('rt_model');
 		$this->load->model('rw_model');
 		$this->load->model('kelurahan_model');
 		$this->load->model('kependudukan_model');
 		$this->load->model('metodekontrasepsi_model');
 		$this->load->model('alasanberkb_model');
 		$this->load->model('tempatkb_model');
  	}
	public function index(){
		$dataactive['keluarga'] = true;
		$data['provinsi'] = $this->provinsi_model->getAll();
		$data['kecamatan'] = $this->kecamatan_model->getAll();
		$data['kabupaten'] = $this->kabupaten_model->getAll();
		$data['rt'] = $this->rt_model->getAll();
		$data['rw'] = $this->rw_model->getAll();
		$data['kelurahan'] = $this->kelurahan_model->getAll();
		if(($this->input->post('provinsi')!=null)){
			$filter_provinsi = $this->input->post('provinsi');
			$data['filter_provinsi'] =$filter_provinsi;
		}else{
			$filter_provinsi = null;
			$data['filter_provinsi'] = '';
		}

		if(($this->input->post('kabupaten')!=null)){
			$filter_kabupaten = $this->input->post('kabupaten');
			$data['filter_kabupaten'] = $filter_kabupaten;
			$data['name_kabupaten'] = $filter_kabupaten;
		}else{
			$filter_kabupaten = null;
			$data['filter_kabupaten'] = '';
		}

		if(($this->input->post('kecamatan')!=null)){
			$filter_kecamatan = $this->input->post('kecamatan');
			$data['filter_kecamatan'] = $filter_kecamatan;
		}else{
			$filter_kecamatan = null;
			$data['filter_kecamatan'] = '';
		}

		if(($this->input->post('desa')!=null)){
			$filter_desa = $this->input->post('desa');
			$data['filter_desa'] = $filter_desa;
		}else{
			$filter_desa = null;
			$data['filter_desa'] = '';
		}

		if(!empty($this->input->post('dusun'))){
			$filter_dusun = $this->input->post('dusun');
			$data['filter_dusun'] = $filter_dusun;
		}else{
			$filter_dusun = null;
			$data['filter_dusun'] = '';
		}

		if(!empty($this->input->post('rt'))){
			$filter_rt = $this->input->post('rt');
			$data['filter_rt'] = $filter_rt;
		}else{
			$filter_rt = null;
			$data['filter_rt'] ='';
		}

		if(!empty($this->input->post('no_kendali'))){
			$filter_no_kendali = $this->input->post('no_kendali');
			$data['filter_no_kendali'] =  $filter_no_kendali;
		}else{
			$filter_no_kendali = null;
			$data['filter_no_kendali'] ='';
		}

		if(!empty($this->input->post('kepala_keluarga'))){
			$filter_kepala_keluarga = $this->input->post('kepala_keluarga');
			$data['filter_kepala_keluarga'] =$filter_kepala_keluarga;
		}else{
			$filter_kepala_keluarga = null;
			$data['filter_kepala_keluarga'] = '';
		}

		$data_filter = array (
			'filter_provinsi'	=> $filter_provinsi,
			'filter_kabupaten'	=> $filter_kabupaten,
			'filter_kecamatan'	=> $filter_kecamatan,
			'filter_desa'		=> $filter_desa,
			'filter_dusun'		=> $filter_dusun,
			'filter_rt'			=> $filter_rt,
			'filter_no_kendali'	=> $filter_no_kendali,
			'filter_kepala_keluarga'	=> $filter_kepala_keluarga
		);
		$data['data_table'] = null;
		$this->load->view('header',$dataactive);
		$this->load->view('keluarga',$data);
	}

	public function search(){
		$dataactive['keluarga'] = true;
		$data['provinsi'] = $this->provinsi_model->getAll();
		$data['kecamatan'] = $this->kecamatan_model->getAll();
		$data['kabupaten'] = $this->kabupaten_model->getAll();
		$data['rt'] = $this->rt_model->getAll();
		$data['rw'] = $this->rw_model->getAll();
		$data['kelurahan'] = $this->kelurahan_model->getAll();
		if(($this->input->post('provinsi')!=null)){
			$filter_provinsi = $this->input->post('provinsi');
			$data['filter_provinsi'] =$filter_provinsi;
		}else{
			$filter_provinsi = null;
			$data['filter_provinsi'] = '';
		}

		if(($this->input->post('kabupaten')!=null)){
			$filter_kabupaten = $this->input->post('kabupaten');
			$data['filter_kabupaten'] = $filter_kabupaten;
			$data['name_kabupaten'] = $filter_kabupaten;
		}else{
			$filter_kabupaten = null;
			$data['filter_kabupaten'] = '';
		}

		if(($this->input->post('kecamatan')!=null)){
			$filter_kecamatan = $this->input->post('kecamatan');
			$data['filter_kecamatan'] = $filter_kecamatan;
		}else{
			$filter_kecamatan = null;
			$data['filter_kecamatan'] = '';
		}

		if(($this->input->post('desa')!=null)){
			$filter_desa = $this->input->post('desa');
			$data['filter_desa'] = $filter_desa;
		}else{
			$filter_desa = null;
			$data['filter_desa'] = '';
		}

		if(!empty($this->input->post('dusun'))){
			$filter_dusun = $this->input->post('dusun');
			$data['filter_dusun'] = $filter_dusun;
		}else{
			$filter_dusun = null;
			$data['filter_dusun'] = '';
		}

		if(!empty($this->input->post('rt'))){
			$filter_rt = $this->input->post('rt');
			$data['filter_rt'] = $filter_rt;
		}else{
			$filter_rt = null;
			$data['filter_rt'] ='';
		}

		if(!empty($this->input->post('no_kendali'))){
			$filter_no_kendali = $this->input->post('no_kendali');
			$data['filter_no_kendali'] =  $filter_no_kendali;
		}else{
			$filter_no_kendali = null;
			$data['filter_no_kendali'] ='';
		}

		if(!empty($this->input->post('kepala_keluarga'))){
			$filter_kepala_keluarga = $this->input->post('kepala_keluarga');
			$data['filter_kepala_keluarga'] =$filter_kepala_keluarga;
		}else{
			$filter_kepala_keluarga = null;
			$data['filter_kepala_keluarga'] = '';
		}

		$data_filter = array (
			'filter_provinsi'	=> $filter_provinsi,
			'filter_kabupaten'	=> $filter_kabupaten,
			'filter_kecamatan'	=> $filter_kecamatan,
			'filter_desa'		=> $filter_desa,
			'filter_dusun'		=> $filter_dusun,
			'filter_rt'			=> $filter_rt,
			'filter_no_kendali'	=> $filter_no_kendali,
			'filter_kepala_keluarga'	=> $filter_kepala_keluarga
		);
		$data['data_table'] = $this->kependudukan_model->getDataTable($data_filter)->result();
		$this->load->view('header',$dataactive);
		$this->load->view('keluarga',$data);
	}

	public function detail($no_kendali){
		$nama_kk = $this->kependudukan_model->getKepalaKeluarga($no_kendali)->result();
		$data['details'] =$nama_kk;
		$kontrasepsi = $this->metodekontrasepsi_model->getOne($nama_kk[0]->MetodeKontrasepsi)->result();
		if ($kontrasepsi!=null) {
			$data['metode_kontrasepsi'] = $kontrasepsi[0]->namaMetodeKontrasepsi;
		}else {
			$data['metode_kontrasepsi'] ='-';
		}

		$alasanberkb = $this->alasanberkb_model->getOne($nama_kk[0]->AlasanTidakBerKB)->result();
		if ($kontrasepsi!=null) {
			$data['alasanberkb'] = $alasanberkb[0]->pilihanAlasanTidakBerKB;
		}else {
			$data['alasanberkb'] ='-';
		}

		$tempatkb = $this->tempatkb_model->getOne($nama_kk[0]->TempatPelayananKB)->result();
		if ($kontrasepsi!=null) {
			$data['tempatkb'] = $tempatkb[0]->pilihanTempatPelayanKB;
		}else {
			$data['tempatkb'] ='-';
		}

		$kodeprovinsi = $this->provinsi_model->getOne($nama_kk[0]->KodeProvinsi)->result();
		if($kodeprovinsi!=null){
			$data['kodeprovinsi'] = '';
			for ($i=0; $i < 2-strlen($kodeprovinsi[0]->kodeProvinsi) ; $i++) { 
				$data['kodeprovinsi'] .= '0';
			}
			$data['kodeprovinsi'].=$kodeprovinsi[0]->kodeProvinsi;
		}else{
			$data['kodeprovinsi']='00';
		}
		$kodekabupaten = $this->kabupaten_model->getOne($nama_kk[0]->KodeKabupaten)->result();
		if($kodekabupaten!=null){
			$data['kodekabupaten'] = '';
			for ($i=0; $i < 2-strlen($kodekabupaten[0]->KodeKabupaten) ; $i++) { 
				$data['kodekabupaten'] .= '0';
			}
			$data['kodekabupaten'].=$kodekabupaten[0]->KodeKabupaten;
			// $data['kodekabupaten']=$kodekabupaten[0]->KodeKabupaten;
		}else{
			$data['kodekabupaten']='00';
		}
		 $kodekecamatan= $this->kecamatan_model->getOne($nama_kk[0]->KodeKecamatan)->result();
		if($kodekecamatan!=null){
			$data['kodekecamatan'] = '';
			for ($i=0; $i < 2-strlen($kodekecamatan[0]->KodeKecamatan) ; $i++) { 
				$data['kodekecamatan'] .= '0';
			}
			$data['kodekecamatan'].=$kodekecamatan[0]->KodeKecamatan;
			// $data['kodekecamatan']=$kodekecamatan[0]->KodeKecamatan;
		}else{
			$data['kodekecamatan']='00';
		}
		$kodekelurahan = $this->kelurahan_model->getOne($nama_kk[0]->KodeKelurahan)->result();
		if($kodekelurahan!=null){
			$data['kodekelurahan'] = '';
			for ($i=0; $i < 4-strlen($kodekelurahan[0]->KodeKelurahan) ; $i++) { 
				$data['kodekelurahan'] .= '0';
			}
			$data['kodekelurahan'].=$kodekelurahan[0]->KodeKelurahan;
			// $data['kodekelurahan'] =$kodekelurahan[0]->KodeKelurahan;
		}else{
			$data['kodekelurahan']='00';
		}
		$data['nama_kk'] = $nama_kk[0]->Nama;
		$nomor_rumah = $nama_kk[0]->NomorRumah;
		$data['nomor_rumah'] = '';
		for ($i=0; $i < 10-strlen($nomor_rumah) ; $i++) { 
			$data['nomor_rumah'] .= '0 ';
		}
		$data['nomor_rumah'] .= $nomor_rumah;
		$rt = $nama_kk[0]->KodeRT;
		$data['rt'] = '';
		for ($i=0; $i < 3-strlen($rt) ; $i++) { 
			$data['rt'] .= '0 ';
		}
		$data['rt'] .= $rt;
		$rw = $nama_kk[0]->KodeRW;
		$data['rw'] = '';
		for ($i=0; $i < 3-strlen($rw) ; $i++) { 
			$data['rw'] .= '0 ';
		}
		$data['rw'] .= $rw;
		$nama_provinsi = $this->provinsi_model->getOne($nama_kk[0]->KodeProvinsi)->result();
		if($nama_provinsi!=null){
			$data['nama_provinsi']=$nama_provinsi[0]->namaProvinsi;
		}else{
			$data['nama_provinsi']='-';
		}
		
		$nama_kabupaten = $this->kabupaten_model->getOne($nama_kk[0]->KodeKabupaten)->result();
		if ($nama_kabupaten!=null) {
			$data['nama_kabupaten']=$nama_kabupaten[0]->namaKabupaten;
		}else{
			$data['nama_kabupaten']='-';
		}
		
		$nama_kecamatan = $this->kecamatan_model->getOne($nama_kk[0]->KodeKecamatan)->result();
		if($nama_kecamatan!=null){
			$data['nama_kecamatan']=$nama_kecamatan[0]->namaKecamatan;
		}else{
			$data['nama_kecamatan']='-';
		}
		$nama_kelurahan = $this->kelurahan_model->getOne($nama_kk[0]->KodeKelurahan)->result();
		if($nama_kelurahan!=null){
			$data['nama_kelurahan']=$nama_kelurahan[0]->namaKelurahan;
		}else{
			$data['nama_kelurahan']='-';
		}
		$from_kependudukan =$this->kependudukan_model->dataKeluarga($no_kendali)->result();
		//print_r($from_kependudukan);
		foreach($from_kependudukan as $from_kependudukan) {
			$hubungan =$this->kependudukan_model->hubungan($from_kependudukan->HubunganDenganKK)->result();
			if($hubungan!=null){
				$hubungan = $hubungan[0]->namaHubunganDenganKK;
			}else{
				$hubungan='-';
			}

			$jk =$this->kependudukan_model->jk($from_kependudukan->JenisKelamin)->result();
			if($jk!=null){
				$jk = $jk[0]->namaJenisKelamin;
			}else{
				$jk = '-';
			}

			$agama =$this->kependudukan_model->agama($from_kependudukan->Agama)->result();
			if($agama!=null){
				$agama = $agama[0]->namaAgama;
			}else{
				$agama = '';
			}

			$pendidikan =$this->kependudukan_model->pendidikan($from_kependudukan->Pendidikan)->result();
			if($pendidikan!=null){
				$pendidikan=$pendidikan[0]->namaPendidikan;
			}else{
				$pendidikan ='-';
			}

			$pekerjaan =$this->kependudukan_model->pekerjaan($from_kependudukan->Pekerjaan)->result();
			if($pekerjaan!=null){
				$pekerjaan=$pekerjaan[0]->namaPekerjaan;
			}else{
				$pekerjaan ='-';
			}

			$status_kawin =$this->kependudukan_model->status_kawin($from_kependudukan->StatusKawin)->result();
			if($status_kawin!=null){
				$status_kawin=$status_kawin[0]->namaStatusKawin;
			}else{
				$status_kawin ='-';
			}

			$jkn =$this->kependudukan_model->jkn($from_kependudukan->JKN)->result();
			if($jkn!=null){
				$jkn=$jkn[0]->namaJKN;
			}else{
				$jkn ='-';
			}

			$mutasi =$this->kependudukan_model->mutasi($from_kependudukan->Mutasi)->result();
			if($mutasi!=null){
				$mutasi = $mutasi[0]->namaMutasi;
			}else{
				$mutasi ='';
			}
			$BulanLahir ='';
			switch ($from_kependudukan->BulanLahir) {
				case '01':
					$BulanLahir = 'Jan';
					break;
				case '02':
					$BulanLahir = 'Feb';
					break;
				case '03':
					$BulanLahir = 'Mar';
					break;
				case '04':
					$BulanLahir = 'Apr';
					break;
				case '05':
					$BulanLahir = 'Mei';
					break;
				case '06':
					$BulanLahir = 'Jun';
					break;
				case '07':
					$BulanLahir = 'Jul';
					break;
				case '08':
					$BulanLahir = 'Aug';
					break;
				case '09':
					$BulanLahir = 'Sep';
					break;
				case '10':
					$BulanLahir = 'Okt';
					break;
				case '11':
					$BulanLahir = 'Nov';
					break;
				default:
					$BulanLahir = 'Des';
					break;
			}
			$data['details_keluarga'][] =array(
				
				'NIK' 			=> $from_kependudukan->NIK,
				'Nama'			=> $from_kependudukan->Nama,
				'TanggalLahir'	=> $from_kependudukan->TanggalLahir.'-'.$BulanLahir.'-'.$from_kependudukan->TahunLahir,
				'Umur'			=> Date("Y")-$from_kependudukan->TahunLahir,
				'hubungan'		=> $hubungan,
				'JenisKelamin'	=> $jk,
				'Agama'			=> $agama,
				'Pendidikan'	=> $pendidikan,
				'Pekerjaan'		=> $pekerjaan,
				'Status_kawin'	=> $status_kawin,
				'JKN'			=> $jkn,
				'Mutasi'		=> $mutasi,
			);
		}
		// print_r($data['details_keluarga']);

		$this->load->view('detail_keluarga',$data);
	}

	public function create_pdf($no_kendali) {
    	$nama_kk = $this->kependudukan_model->getKepalaKeluarga($no_kendali)->result();
		$data['details'] =$nama_kk;
		$kontrasepsi = $this->metodekontrasepsi_model->getOne($nama_kk[0]->MetodeKontrasepsi)->result();
		if ($kontrasepsi!=null) {
			$data['metode_kontrasepsi'] = $kontrasepsi[0]->namaMetodeKontrasepsi;
		}else {
			$data['metode_kontrasepsi'] ='-';
		}

		$alasanberkb = $this->alasanberkb_model->getOne($nama_kk[0]->AlasanTidakBerKB)->result();
		if ($kontrasepsi!=null) {
			$data['alasanberkb'] = $alasanberkb[0]->pilihanAlasanTidakBerKB;
		}else {
			$data['alasanberkb'] ='-';
		}

		$tempatkb = $this->tempatkb_model->getOne($nama_kk[0]->TempatPelayananKB)->result();
		if ($kontrasepsi!=null) {
			$data['tempatkb'] = $tempatkb[0]->pilihanTempatPelayanKB;
		}else {
			$data['tempatkb'] ='-';
		}

		$kodeprovinsi = $this->provinsi_model->getOne($nama_kk[0]->KodeProvinsi)->result();
		if($kodeprovinsi!=null){
			$data['kodeprovinsi'] = '';
			for ($i=0; $i < 2-strlen($kodeprovinsi[0]->kodeProvinsi) ; $i++) { 
				$data['kodeprovinsi'] .= '0';
			}
			$data['kodeprovinsi'].=$kodeprovinsi[0]->kodeProvinsi;
		}else{
			$data['kodeprovinsi']='00';
		}
		$kodekabupaten = $this->kabupaten_model->getOne($nama_kk[0]->KodeKabupaten)->result();
		if($kodekabupaten!=null){
			$data['kodekabupaten'] = '';
			for ($i=0; $i < 2-strlen($kodekabupaten[0]->KodeKabupaten) ; $i++) { 
				$data['kodekabupaten'] .= '0';
			}
			$data['kodekabupaten'].=$kodekabupaten[0]->KodeKabupaten;
			// $data['kodekabupaten']=$kodekabupaten[0]->KodeKabupaten;
		}else{
			$data['kodekabupaten']='00';
		}
		 $kodekecamatan= $this->kecamatan_model->getOne($nama_kk[0]->KodeKecamatan)->result();
		if($kodekecamatan!=null){
			$data['kodekecamatan'] = '';
			for ($i=0; $i < 2-strlen($kodekecamatan[0]->KodeKecamatan) ; $i++) { 
				$data['kodekecamatan'] .= '0';
			}
			$data['kodekecamatan'].=$kodekecamatan[0]->KodeKecamatan;
			// $data['kodekecamatan']=$kodekecamatan[0]->KodeKecamatan;
		}else{
			$data['kodekecamatan']='00';
		}
		$kodekelurahan = $this->kelurahan_model->getOne($nama_kk[0]->KodeKelurahan)->result();
		if($kodekelurahan!=null){
			$data['kodekelurahan'] = '';
			for ($i=0; $i < 4-strlen($kodekelurahan[0]->KodeKelurahan) ; $i++) { 
				$data['kodekelurahan'] .= '0';
			}
			$data['kodekelurahan'].=$kodekelurahan[0]->KodeKelurahan;
			// $data['kodekelurahan'] =$kodekelurahan[0]->KodeKelurahan;
		}else{
			$data['kodekelurahan']='0000';
		}
		$data['nama_kk'] = $nama_kk[0]->Nama;
		$nomor_rumah = $nama_kk[0]->NomorRumah;
		$data['nomor_rumah'] = '';
		for ($i=0; $i < 10-strlen($nomor_rumah) ; $i++) { 
			$data['nomor_rumah'] .= '0 ';
		}
		$data['nomor_rumah'] .= $nomor_rumah;
		$rt = $nama_kk[0]->KodeRT;
		$data['rt'] = '';
		for ($i=0; $i < 3-strlen($rt) ; $i++) { 
			$data['rt'] .= '0 ';
		}
		$data['rt'] .= $rt;
		$rw = $nama_kk[0]->KodeRW;
		$data['rw'] = '';
		for ($i=0; $i < 3-strlen($rw) ; $i++) { 
			$data['rw'] .= '0 ';
		}
		$data['rw'] .= $rw;
		$nama_provinsi = $this->provinsi_model->getOne($nama_kk[0]->KodeProvinsi)->result();
		if($nama_provinsi!=null){
			$data['nama_provinsi']=$nama_provinsi[0]->namaProvinsi;
		}else{
			$data['nama_provinsi']='-';
		}
		
		$nama_kabupaten = $this->kabupaten_model->getOne($nama_kk[0]->KodeKabupaten)->result();
		if ($nama_kabupaten!=null) {
			$data['nama_kabupaten']=$nama_kabupaten[0]->namaKabupaten;
		}else{
			$data['nama_kabupaten']='-';
		}
		
		$nama_kecamatan = $this->kecamatan_model->getOne($nama_kk[0]->KodeKecamatan)->result();
		if($nama_kecamatan!=null){
			$data['nama_kecamatan']=$nama_kecamatan[0]->namaKecamatan;
		}else{
			$data['nama_kecamatan']='-';
		}
		$nama_kelurahan = $this->kelurahan_model->getOne($nama_kk[0]->KodeKelurahan)->result();
		if($nama_kelurahan!=null){
			$data['nama_kelurahan']=$nama_kelurahan[0]->namaKelurahan;
		}else{
			$data['nama_kelurahan']='-';
		}
		$from_kependudukan =$this->kependudukan_model->dataKeluarga($no_kendali)->result();
		//print_r($from_kependudukan);
		foreach($from_kependudukan as $from_kependudukan) {
			$hubungan =$this->kependudukan_model->hubungan($from_kependudukan->HubunganDenganKK)->result();
			if($hubungan!=null){
				$hubungan = $hubungan[0]->namaHubunganDenganKK;
			}else{
				$hubungan='-';
			}

			$jk =$this->kependudukan_model->jk($from_kependudukan->JenisKelamin)->result();
			if($jk!=null){
				$jk = $jk[0]->namaJenisKelamin;
			}else{
				$jk = '-';
			}

			$agama =$this->kependudukan_model->agama($from_kependudukan->Agama)->result();
			if($agama!=null){
				$agama = $agama[0]->namaAgama;
			}else{
				$agama = '';
			}

			$pendidikan =$this->kependudukan_model->pendidikan($from_kependudukan->Pendidikan)->result();
			if($pendidikan!=null){
				$pendidikan=$pendidikan[0]->namaPendidikan;
			}else{
				$pendidikan ='-';
			}

			$pekerjaan =$this->kependudukan_model->pekerjaan($from_kependudukan->Pekerjaan)->result();
			if($pekerjaan!=null){
				$pekerjaan=$pekerjaan[0]->namaPekerjaan;
			}else{
				$pekerjaan ='-';
			}

			$status_kawin =$this->kependudukan_model->status_kawin($from_kependudukan->StatusKawin)->result();
			if($status_kawin!=null){
				$status_kawin=$status_kawin[0]->namaStatusKawin;
			}else{
				$status_kawin ='-';
			}

			$jkn =$this->kependudukan_model->jkn($from_kependudukan->JKN)->result();
			if($jkn!=null){
				$jkn=$jkn[0]->namaJKN;
			}else{
				$jkn ='-';
			}

			$mutasi =$this->kependudukan_model->mutasi($from_kependudukan->Mutasi)->result();
			if($mutasi!=null){
				$mutasi = $mutasi[0]->namaMutasi;
			}else{
				$mutasi ='';
			}
			$BulanLahir ='';
			switch ($from_kependudukan->BulanLahir) {
				case '01':
					$BulanLahir = 'Jan';
					break;
				case '02':
					$BulanLahir = 'Feb';
					break;
				case '03':
					$BulanLahir = 'Mar';
					break;
				case '04':
					$BulanLahir = 'Apr';
					break;
				case '05':
					$BulanLahir = 'Mei';
					break;
				case '06':
					$BulanLahir = 'Jun';
					break;
				case '07':
					$BulanLahir = 'Jul';
					break;
				case '08':
					$BulanLahir = 'Aug';
					break;
				case '09':
					$BulanLahir = 'Sep';
					break;
				case '10':
					$BulanLahir = 'Okt';
					break;
				case '11':
					$BulanLahir = 'Nov';
					break;
				default:
					$BulanLahir = 'Des';
					break;
			}
			$data['details_keluarga'][] =array(
				
				'NIK' 			=> $from_kependudukan->NIK,
				'Nama'			=> $from_kependudukan->Nama,
				'TanggalLahir'	=> $from_kependudukan->TanggalLahir.'-'.$BulanLahir.'-'.$from_kependudukan->TahunLahir,
				'Umur'			=> Date("Y")-$from_kependudukan->TahunLahir,
				'hubungan'		=> $hubungan,
				'JenisKelamin'	=> $jk,
				'Agama'			=> $agama,
				'Pendidikan'	=> $pendidikan,
				'Pekerjaan'		=> $pekerjaan,
				'Status_kawin'	=> $status_kawin,
				'JKN'			=> $jkn,
				'Mutasi'		=> $mutasi,
			);
		}
		// print_r($data['details_keluarga']);

		$this->load->view('detail_keluarga_print',$data);
		// Get output html
		$html = $this->output->get_output();
		
		// Load library
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->set_paper('a4', 'landscape');
		$this->dompdf->render();
		$this->dompdf->stream("datakeluarga_idf.pdf");
    }

    public function export_csv(){
    	if(($this->input->post('provinsi')!=null)){
			$filter_provinsi = $this->input->post('provinsi');
			$data['filter_provinsi'] =$filter_provinsi;
		}else{
			$filter_provinsi = null;
			$data['filter_provinsi'] = '';
		}

		if(($this->input->post('kabupaten')!=null)){
			$filter_kabupaten = $this->input->post('kabupaten');
			$data['filter_kabupaten'] = $filter_kabupaten;
		}else{
			$filter_kabupaten = null;
			$data['filter_kabupaten'] = '';
		}

		if(($this->input->post('kecamatan')!=null)){
			$filter_kecamatan = $this->input->post('kecamatan');
			$data['filter_kecamatan'] = $filter_kecamatan;
		}else{
			$filter_kecamatan = null;
			$data['filter_kecamatan'] = '';
		}

		if(($this->input->post('desa')!=null)){
			$filter_desa = $this->input->post('desa');
			$data['filter_desa'] = $filter_desa;
		}else{
			$filter_desa = null;
			$data['filter_desa'] = '';
		}

		if(!empty($this->input->post('dusun'))){
			$filter_dusun = $this->input->post('dusun');
			$data['filter_dusun'] = $filter_dusun;
		}else{
			$filter_dusun = null;
			$data['filter_dusun'] = '';
		}

		if(!empty($this->input->post('rt'))){
			$filter_rt = $this->input->post('rt');
			$data['filter_rt'] = $filter_rt;
		}else{
			$filter_rt = null;
			$data['filter_rt'] ='';
		}

		if(!empty($this->input->post('no_kendali'))){
			$filter_no_kendali = $this->input->post('no_kendali');
			$data['filter_no_kendali'] =  $filter_no_kendali;
		}else{
			$filter_no_kendali = null;
			$data['filter_no_kendali'] ='';
		}

		if(!empty($this->input->post('kepala_keluarga'))){
			$filter_kepala_keluarga = $this->input->post('kepala_keluarga');
			$data['filter_kepala_keluarga'] =$filter_kepala_keluarga;
		}else{
			$filter_kepala_keluarga = null;
			$data['filter_kepala_keluarga'] = '';
		}

		$data_filter = array (
			'filter_provinsi'	=> $filter_provinsi,
			'filter_kabupaten'	=> $filter_kabupaten,
			'filter_kecamatan'	=> $filter_kecamatan,
			'filter_desa'		=> $filter_desa,
			'filter_dusun'		=> $filter_dusun,
			'filter_rt'			=> $filter_rt,
			'filter_no_kendali'	=> $filter_no_kendali,
			'filter_kepala_keluarga'	=> $filter_kepala_keluarga
		);
		$data['data_table'] = $this->kependudukan_model->ExportCSV($data_filter)->result();
    	// $mutasi =$this->kependudukan_model->ExportCSV()->result();
    }
}
