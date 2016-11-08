
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
                                    <form role="form" action="<?php echo base_url('index.php/Cberita/simpan_update_berita') ?>" method="post">                                       
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="id_berita" type="hidden" value="<?php echo $data->id_berita; ?>">                                            
                                            <input class="form-control" name="judul" value="<?php echo $data->judul; ?>">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Detail Berita</label>
                                            <textarea id="textareamce2" name="detail_berita" rows="12" cols="50"><?php echo $data->detail_berita; ?></textarea>                                            
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
