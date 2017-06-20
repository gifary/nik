<!doctype html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .center{
            /*display: block; margin-left: auto; margin-right: auto;*/
            margin-left: 460px;
            margin-right: 400px;
            /*display: block;*/
            /*margin-top: -0px;*/
            
        }
        body{
            font-size: 12px;
        }
        @page {
            margin: 0.1em;
        }
    </style>
</head>
<body>
<div style="width:15%;">
    <div style="background-color:black; padding:3px; color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATA RAHASIA </div><br>
<div style="font-size:7px; font-style:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIDAK UNTUK DISEBARLUASKAN</div>
</div>
<div style="width:10%; display:inline-block;">
    
<div style="font-style:bold; margin-left:800px;">FI/BDK/<?php echo date("y"); ?></div>
</div>
<img src="<?php echo IMG_URI;?>logo.png" class="center">
<table border="0" style="width: 100%;">
    <tbody>
        <tr>
            <td>
            <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                <tbody>
                    <tr>
                        <td>Nama Kepala Keluarga</td>
                        <td>:</td>
                        <td><?php echo strtoupper($nama_kk); ?></td>
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
                </tbody>
            </table>
            </td>
            <td>
            <h4 style="text-align:center;">DATA KELUARGA INDONESIA</h4>
              <h5 style="text-align:center">No. KKI : <?php echo $kodeprovinsi.$kodekabupaten.$kodekecamatan.$kodekelurahan.'-'.$details[0]->NomorKendali ?></h5>
            
            </td>
            <td>
            <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                <tbody>
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
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>

<p><strong>I. KEPENDUDUKAN</strong></p>

<table border="1" width="100%" style="border-spacing: 0; border-collapse: collapse;">
    <thead style="background-color: black; color: #fff;">
        <tr>
            <td>No</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Hubungan dengan KK</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Pendidikan</td>
            <td>Pekerjaan</td>
            <td>Status Kawin</td>
            <td>JKN</td>
            <td>Mutasi</td>
        </tr>
       
    </thead>
    <tbody>
         <tr style="background-color: gray; color: #000; font-style:bold;">
            <th style="background-color: #ccc">1</th>
            <th style="background-color: #ccc">2</th>
            <th style="background-color: #ccc">3</th>
            <th style="background-color: #ccc">4</th>
            <th style="background-color: #ccc">5</th>
            <th style="background-color: #ccc">6</th>
            <th style="background-color: #ccc">7</th>
            <th style="background-color: #ccc">8</th>
            <th style="background-color: #ccc">9</th>
            <th style="background-color: #ccc">10</th>
            <th style="background-color: #ccc">11</th>
            <th style="background-color: #ccc">12</th>
        </tr>
        <?php $i=1; foreach ($details_keluarga as $data_keluarga) { ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $i; $i++;?></td>
                                <td><?php echo $data_keluarga['NIK']?></td>
                                <td><?php echo $data_keluarga['Nama']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['TanggalLahir']; ?></td>
                                <td><?php echo $data_keluarga['hubungan']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['JenisKelamin']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['Agama']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['Pendidikan']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['Pekerjaan']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['Status_kawin']?></td>
                                <td style="text-align:center;"><?php echo $data_keluarga['JKN']?></td>
                                <td><?php echo $data_keluarga['Mutasi']?></td>
                            </tr>
        <?php } ?>
        <tr>
            <td style="background-color: #ccc; font-style:bold;" colspan="12">Penambahan Anggota Baru</td>
        </tr>
        <tr>
            <td style="text-align:center;">1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align:center;">2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<p><small>*) 1. Menikah &nbsp;&nbsp;&nbsp;&nbsp; 2. Bercerai &nbsp;&nbsp;&nbsp;&nbsp;3. Meninggal Dunia &nbsp;&nbsp;&nbsp;&nbsp;4. Pindah Keluarga &nbsp;&nbsp;&nbsp;&nbsp;5. Anggota Baru</small>&nbsp;</p>

    <div style="width:50%;">
        <table width="80%"> 
                      <tr>
                          <td colspan="5"><strong>II. KELUARGA BERENCANA</strong></td>
                      </tr>
                      <tr>
                        <td width="35%">1. Usia Kawin Pertama</td>
                        <td width="2%">:</td>
                        <td width="7%">SUAMI</td>
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

    <div style="width:50%; display:inline-block;">
        <table> 
                        <tr>
                          <td colspan="3"><strong>III. PEMBANGUNAN KELUARGA</strong></td>
                      </tr>
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
                            <td><?php echo $details[0]->PK27; ?>m2</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;28. Jumlah Orang Yang Tinggal/Menetap</td>
                            <td>:</td>
                            <td><?php echo $details[0]->PK28; ?> orang</td>
                        </tr>
                        <tr>
                            <table border="1" width="90%" style="border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kepala Keluarga</th>
                                        <th>Kader Pendata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="10"></td>
                                        <td rowspan="10"></td>
                                        <td rowspan="10"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </tr>
                    </table>
    </div>
</div>
</body>
</html>
