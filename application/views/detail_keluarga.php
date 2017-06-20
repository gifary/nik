<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Import Data to Database</title>
    <link href="<?php echo CSS_URI; ?>bootstrap.css" rel="stylesheet">
    <link href="<?php echo CSS_URI; ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo CSS_URI; ?>assets/css/styles.css" type="text/css" rel="stylesheet" />
    <script src="<?php echo JS_URI; ?>jquery/jquery-1.12.3.min.js"></script>
    <script src="<?php echo JS_URI; ?>bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo JS_URI; ?>jquery/jquery.dataTables.min.js"></script>
    <script src="<?php echo JS_URI; ?>bootstrap/dataTables.bootstrap.min.js"></script>
   
</head>
<body>
      
       <div class="container" style="margin-top:20px">
            <div class="row" style="float:left;">
                 <a href="<?php echo base_url('keluarga/create_pdf').'/'.$details[0]->NomorKendali; ?>" class="btn btn btn-primary">
                  <span class="glyphicon glyphicon-export"></span> Ekspor Ke PDF
                </a>
                
            </div>     
            <div class="row" style="float:right;">
                 <a href="<?php echo base_url('keluarga') ?>" class="btn btn btn-primary">
                  <span class="glyphicon glyphicon-arrow-left"></span> Kembali Ke Halaman Sebelumnya         </a>
                
            </div>   
            <div class="row">
                <img style="display: block; margin-left: 480px; margin-right: auto;" src="<?php echo IMG_URI;?>logo.png" alt="image"/>
            </div>
            <div class="row" style="margin-top:20px">
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                     <table> 
                      <tr>
                        <td>Nama Kepala Keluarga</td>
                        <td>:</td>
                        <td><strong><?php echo strtoupper($nama_kk); ?></strong></td>
                      </tr>
                      <tr>
                        <td>Nomor Rumah/Rumah Tangga</td>
                        <td>:</td>
                        <td><?php echo $nomor_rumah; ?></td>
                      </tr>
                      <tr>
                        <td>RT</td>
                        <td>:</td>
                        <td><?php echo $rt; ?></td>
                      </tr>
                      <tr>
                        <td>Dusun/RW</td>
                        <td>:</td>
                        <td><?php echo $rw; ?></td>
                      </tr>
                    </table>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="margin-top:-20px;">
                    <h3 style="text-align:center">DATA KELUARGA INDONESIA</h3>
                    <h4 style="text-align:center">No. KKI : <?php echo $kodeprovinsi.$kodekabupaten.$kodekecamatan.$kodekelurahan.'-'.$details[0]->NomorKendali ?></h4>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <table cellspacing="20"  cellpadding="20" style="float:right;"> 
                      <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td><strong><?php echo strtoupper($nama_provinsi); ?></strong></td>
                        <td><?php echo $kodeprovinsi;?></td>
                      </tr>
                      <tr>
                        <td>Kabupaten/Kota</td>
                        <td>:</td>
                        <td><strong><?php echo strtoupper($nama_kabupaten); ?></strong></td>
                        <td><?php echo $kodekabupaten;?></td>
                      </tr>
                      <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><strong><?php echo strtoupper($nama_kecamatan); ?></strong></td>
                        <td><?php echo $kodekecamatan;?></td>
                      </tr>
                      <tr>
                        <td>Desa/Kelurahan</td>
                        <td>:</td>
                        <td><strong><?php echo strtoupper($nama_kelurahan); ?></strong></td>
                        <td><?php echo $kodekelurahan;?></td>
                      </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <strong>I. KEPENDUDUKAN</strong>
                </div>
            </div>
            <br>
            <div class="row">
                <table class="table table-bordered table-striped" style="margin-left:10px;">
                        <thead style="background-color: black; color: #fff;">
                          <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</td>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Hubungan dengan KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Status Kawin</th>
                            <th>JKN</td>
                            <th>Mutasi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach ($details_keluarga as $data_keluarga) { ?>
                            <tr>
                                <td><?php echo $i; $i++;?></td>
                                <td><?php echo $data_keluarga['NIK']?></td>
                                <td><?php echo $data_keluarga['Nama']?></td>
                                <td><?php echo $data_keluarga['TanggalLahir']; ?></td>
                                <td><?php echo $data_keluarga['Umur']?></td>
                                <td><?php echo $data_keluarga['hubungan']?></td>
                                <td><?php echo $data_keluarga['JenisKelamin']?></td>
                                <td><?php echo $data_keluarga['Agama']?></td>
                                <td><?php echo $data_keluarga['Pendidikan']?></td>
                                <td><?php echo $data_keluarga['Pekerjaan']?></td>
                                <td><?php echo $data_keluarga['Status_kawin']?></td>
                                <td><?php echo $data_keluarga['JKN']?></td>
                                <td><?php echo $data_keluarga['Mutasi']?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                </table>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 jarak ">
                    <small>*) 1. Menikah &nbsp;&nbsp;&nbsp;&nbsp; 2. Bercerai &nbsp;&nbsp;&nbsp;&nbsp;3. Meninggal Dunia &nbsp;&nbsp;&nbsp;&nbsp;4. Pindah Keluarga &nbsp;&nbsp;&nbsp;&nbsp;5. Anggota Baru</small>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                     <strong>II. KELUARGA BERENCANA</strong>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <strong>III. PEMBANGUNAN KELUARGA</strong>
                </div>

                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <table style="float:left;" width="80%"> 
                      <tr>
                        <td width="35%">1. Usia Kawin Pertama</td>
                        <td width="2%">:</td>
                        <td width="3%">SUAMI</td>
                        <td width="3%"><?php echo $details[0]->UsiaKawinPertamaSuami; ?></td>
                        <td width="4%">Tahun</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>:</td>
                        <td>ISTERI</td>
                        <td><?php echo $details[0]->UsiaKawinPertamaIstri; ?></td>
                        <td>Tahun</td>
                      </tr>
                      <tr>
                        <td>2. Jumlah Anak</td>
                        <td></td>
                        <td>Laki-laki</td>
                        <td></td>
                        <td>Perempuan</td>
                      </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Yang pernah dilahirkan hidup</td>
                            <td>:</td>
                            <td><?php echo $details[0]->AnakDilahirkanHidupLakiLaki; ?> Orang</td>
                            <td></td>
                            <td><?php echo $details[0]->AnakDilahirkanHidupPerempuan; ?> Orang</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Yang masih hidup</td>
                            <td>:</td>
                            <td><?php echo $details[0]->AnakMasihHidupLakiLaki; ?> Orang</td>
                            <td></td>
                            <td><?php echo $details[0]->AnakMasihHidupPerempuan; ?> Orang</td>
                        </tr>
                        <tr>
                            <td>3. Kesertaan ber-KB</td>
                            <td>:</td>
                            <td><?php $var = ($details[0]->KesertaanBerKB==1) ? 'Pernah' : 'Tidak Pernah' ; echo $var; ?></td>
                            
                        </tr>
                        <tr>
                            <td>4. Metode Kontrasepsi Yang Sedang/Pernah Digunakan</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $metode_kontrasepsi; ?></td>
                            
                        </tr>
                        <tr>
                            <td>5. Bila Sedang, Lamanya Penggunaan Metode Kontrasepsi Tersebut</td>
                            <td>:</td>
                            <td><?php echo $details[0]->LamaKBTahun ?> Tahun</td>
                            <td colspan="2"><?php echo $details[0]->LamaKBBulan ?> Bulan</td>
                        </tr>
                        <tr>
                            <td>6. Keinginan Punya Anak Lagi</td>
                            <td>:</td>
                            <td colspan="3"><?php $var = ($details[0]->InginPunyaAnakLagi==1) ? 'Ingin punya anak lagi' : 'Tidak ingin punya anak lagi' ; echo $var; ?></td>
                            
                        </tr>
                        <tr>
                            <td>7. Alasan Tidak Ber-KB</td>
                            <td>:</td>
                            <td colspan="3"><?php echo $alasanberkb;?></td>
                            
                        </tr>
                        <tr>
                            <td>8. Tempat Pelayanan KB</td>
                            <td>:</td>
                            <td colspan="3"><?php echo $tempatkb; ?></td>
                            
                        </tr>
                    </table>
                </div>

                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <table cellspacing="20"  cellpadding="20" style="float:right;"> 
                        <tr>
                            <td>A. Indikator kebutuhan Dasar Keluarga</td>
                            <td>:</td>
                            <td>
                                <table>
                                    <tr>
                                        <td style="border: 1px solid;">
                                        <?php 
                                            if($details[0]->PK1=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK1=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK2=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK2=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK3=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK3=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK4=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK4=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK5=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK5=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>     
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>B. Indikator Pengembangan Keluarga Sejahtera</td>
                            <td>:</td>
                            <td>
                                <table>
                                    <tr border="1">
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK6=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK6=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK7=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK7=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK8=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK8=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK9=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK9=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK10=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK10=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK11=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK11=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK12=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK12=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                    </tr>     
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>C. Indikator Kesetaraan Keluarga Dalam Kelompok Kegiatan</td>
                            <td>:</td>
                            <td>
                                <table>
                                    <tr border="1">
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK13=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK13=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK14=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK14=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK15=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK15=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK16=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK16=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;"><?php 
                                            if($details[0]->PK17=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK17=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    </td>
                                        <td style="border: 1px solid;">
                                            <?php 
                                            if($details[0]->PK18=='1'){
                                                echo 'V';
                                            }else if($details[0]->PK18=='2'){
                                                echo 'X';
                                            }else{
                                                echo '*';
                                            }
                                        ?>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        
                                    </tr>     
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>D. Indikator Rumah Sehat</td>
                            <td>:</td>
                            <td>
                                <table>
                                    <tr border="1">
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK19; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK20; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK21; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK22; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK23; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK24; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK25; ?></td>
                                        <td style="border: 1px solid;"><?php echo $details[0]->PK26; ?></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                    </tr>     
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;27. Luas Rumah/Bangunan Keseluruhan</td>
                            <td>:</td>
                            <td><?php echo $details[0]->PK27; ?> m2</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;28. Jumlah Orang Yang Tinggal/Menetap</td>
                            <td>:</td>
                            <td><?php echo $details[0]->PK28; ?> orang</td>
                        </tr>
                        <tr>
                            <table border="1" cellpadding="1" cellspacing="1" style="width: 100%;">
                                <thead align="center">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kepala Keluarga</th>
                                        <th>Kader Pendata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="height: 50px;">&nbsp;</td>
                                        <td style="height: 50px;">&nbsp;</td>
                                        <td style="height: 50px;">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>
<style type="text/css">
    .jarak{
        padding-left:10px;
    }
    .gray{
        background-color: gray;
    }
    th, td {
        padding: 5px 10px;
    }
    body{
        font-size: 11px;
    }
</style>
</html>