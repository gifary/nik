       <div class="container" style="margin-top:20px">    
             <br>
 
             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
            <img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo IMG_URI;?>logo.png" alt="image"/>
            <div class="row" style="float:left;">
                 <h2>Data Keluarga</h2>
                 <strong>Kriteria Pencarian</strong>
                
            </div> 
            <br><br><br>    
            <div class="row">
            </div>
           
            <div class="row" style="margin-top:20px;">
                 <form method="post" action="<?php echo base_url() ?>keluarga/search" enctype="multipart/form-data">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bg-gray">
                         <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                             <label for="email">Negara</label>
                         </div>
                         <div class="col-md-11 col-lg-11 col-sm-12 col-xs-12">
                             <label for="email">Republik Indonesia</label>
                         </div>
                    </div>
                    <br> <br>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Provinsi</small></label>
                            </div>
                             <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <select class="form-control" id="provinsi" name="provinsi" onchange="ajaxKabupaten(this.value)">
                                    <option value='' >Semua Provinsi</option>
                                    <?php foreach ($provinsi as $provinsi) { ?>
                                        <?php if($provinsi['idKodeProvinsi']===$filter_provinsi) { ?>
                                            <option value='<?php echo $provinsi['idKodeProvinsi']; ?>' selected><?php echo $provinsi['idKodeProvinsi'].' '. $provinsi['namaProvinsi']; ?></option>
                                        <?php } else { ?>
                                             <option value='<?php echo $provinsi['idKodeProvinsi']; ?>'><?php echo $provinsi['idKodeProvinsi'].' '. $provinsi['namaProvinsi']; ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                       
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Kab/Kota</small></label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <select class="form-control" id="kabupaten" name="kabupaten" onchange="ajaxKecamtan(this.value)">
                                <?php foreach ($kabupaten as $kabupaten) { ?>
                                        <?php if($kabupaten['idKodeProvinsi']===$filter_kabupaten) { ?>
                                            <option value='<?php echo $kabupaten['idKodeKabupaten']; ?>' selected><?php echo $kabupaten['idKodeKabupaten'].' '. $kabupaten['namaKabupaten']; ?></option>
                                        <?php } ?>
                                    <?php } ?> 
                                </select>
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Kecamatan</small></label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <select class="form-control" id="kecamatan" name="kecamatan" onchange="ajaxKelurahan(this.value)">
                                </select>
                             </div>
                        </div>
                    </div>
                    <br> <br> <br>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bg-gray">
                        <div class="form-group">
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Kel/Desa</small></label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <select class="form-control" id="desa" name="desa" onchange="ajaxrw(this.value)">
                                    
                                </select>
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Nomor Kendali</small></label>
                            </div>
                              <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <input class="form-control" type="text" name="no_kendali" id="no_kendali" value="<?php echo $filter_no_kendali; ?>">
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <label for="provinsi"><small>Kepala Keluarga</small></label>
                            </div>
                              <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <input class="form-control" type="text" name="kepala_keluarga" id="kepala_keluarga" value="<?php echo $filter_kepala_keluarga; ?>">
                            </div>
                        </div>                        
                    </div>
                    <br> <br><br>
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"> -->
                    <div class="hidden-lg hidden-md hidden-xs hidden-sm">
                        <div class="form-group">
                            <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                <!-- <div class="hidden-lg hidden-md hidden-xs hidden-sm"> -->
                                    <label for="provinsi"><small>Dusun/RW</small></label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <select class="form-control" id="dusun" name="dusun" onchange="ajaxrt(this.value)">
                                       
                                    </select>
                                </div>
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <label for="provinsi"><small>RT</small></label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <select class="form-control" id="rt" name="rt">
                                        
                                    </select>
                            </div>
                        </div>
                    </div>
                    <br> <br> <br>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search"></span> Search
                            </button>
                            <a href="<?php echo base_url('keluarga/export_csv');?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-download-alt"></span> Unduh
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <p>Jumlah Keluarga: <?php echo count($data_table); ?></p>
                      <table id="example" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Nomor Kendali</th>
                            <th>Provinsi</th>
                            <th>Kepala Keluarga</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if($data_table!=null){ ?>
                            <?php foreach ($data_table as $data_table) { ?>
                                <tr>
                                    <td><a href="<?php echo base_url('keluarga/detail/'.$data_table->NomorKendali) ?>"><?php echo $data_table->NomorKendali; ?></a></td>
                                    <td><?php echo $data_table->namaProvinsi; ?></td>
                                    <td><?php echo $data_table->Nama; ?></td>
                                </tr>
                            <?php } ?> 
                        <?php } ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
</body>
<style type="text/css">
    .bg-gray{
        background-color: rgba(234, 228, 228, 0.37);
        padding-bottom: 5px;
        padding-top: 5px;
    }

</style>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable({
        'filter' : false,
        'infor' :false
    });
} );
</script>
 <script src="<?php echo JS_URI; ?>area.js"></script>
</html>