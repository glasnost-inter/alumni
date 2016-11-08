
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $judul;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('index.php/Cregistrasi/update_my_profile') ?>" method="post">
                                    <?php 
                                    foreach($hasil as $data) {
                                    ?>                                            
                                        <div class='form-group'> 
                                            <label>NPM</label> 
                                            <input class="form-control" name="npm" value="<?php echo $data->npm; ?>" placeholder='NPM belum diisi' readonly="true"> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>NAMA</label> 
                                            <input class="form-control" name="nama" value="<?php echo $data->nama; ?>" placeholder='NAMA belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>TGL_LAHIR</label> 
                                            <input class="form-control" name="tgl_lahir" value="<?php echo $data->tgl_lahir; ?>" placeholder='TGL_LAHIR belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>TGL_MASUK</label> 
                                            <input class="form-control" name="tgl_masuk" value="<?php echo $data->tgl_masuk; ?>" placeholder='TGL_MASUK belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>TGL_LULUS</label> 
                                            <input class="form-control" name="tgl_lulus" value="<?php echo $data->tgl_lulus; ?>" placeholder='TGL_LULUS belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>KD_FAKULTAS</label> 
                                            <input class="form-control" name="kd_fakultas" value="<?php echo $data->kd_fakultas; ?>" placeholder='KD_FAKULTAS belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>KD_JURUSAN</label> 
                                            <input class="form-control" name="kd_jurusan" value="<?php echo $data->kd_jurusan; ?>" placeholder='KD_JURUSAN belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>KD_PEMINATAN</label> 
                                            <input class="form-control" name="kd_peminatan" value="<?php echo $data->kd_peminatan; ?>" placeholder='KD_PEMINATAN belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>TEMPAT_LAHIR</label> 
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" placeholder='TEMPAT_LAHIR belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>KD_PEKERJAAN</label> 
                                            <input class="form-control" name="kd_pekerjaan" value="<?php echo $data->kd_pekerjaan; ?>" placeholder='KD_PEKERJAAN belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>JABATAN</label> 
                                            <input class="form-control" name="jabatan" value="<?php echo $data->jabatan; ?>" placeholder='JABATAN belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>NO_HP1</label> 
                                            <input class="form-control" name="no_hp1" value="<?php echo $data->no_hp1; ?>" placeholder='NO_HP1 belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>NO_HP2</label> 
                                            <input class="form-control" name="no_hp2" value="<?php echo $data->no_hp2; ?>" placeholder='NO_HP2 belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>ALAMAT_RUMAH</label> 
                                            <input class="form-control" name="alamat_rumah" value="<?php echo $data->alamat_rumah; ?>" placeholder='ALAMAT_RUMAH belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>KD_KOTA_DOMISILI</label> 
                                            <input class="form-control" name="kd_kota_domisili" value="<?php echo $data->kd_kota_domisili; ?>" placeholder='KD_KOTA_DOMISILI belum diisi'> 
                                        </div>
                                        <div class='form-group'> 
                                            <label>MOTTO</label> 
                                            <input class="form-control" name="motto" value="<?php echo $data->motto; ?>" placeholder='MOTTO belum diisi'> 
                                        </div>

                                        <button type="submit" class="btn btn-default">Update</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    <?php 
                                        }
                                    ?>    
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->
