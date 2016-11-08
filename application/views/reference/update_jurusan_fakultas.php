
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
                                    <?php                                    
                                    foreach($hasil as $data) {                                    
                                    ?> 
                                    <form role="form" action="<?php echo base_url('index.php/Creferensi/simpan_update_data_jurusan_fakultas') ?>" method="post">                                       
                                        <div class="form-group">
                                            <label>Kode Fakultas</label>
                                            <input class="form-control" name="kd_fakultas" value="<?php echo $data->kd_fakultas; ?>" readonly="true">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Jurusan</label>
                                            <input class="form-control" name="kd_jurusan" value="<?php echo $data->kd_jurusan; ?>" readonly="true">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                            <input class="form-control" name="nama_jurusan" value="<?php echo $data->nama_jurusan; ?>">
                                        </div>                                        
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Reset</button>                                     
                                    </form>
                                    <?php                                    
                                    }
                                    ?> 
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
