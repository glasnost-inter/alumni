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
                            <?php echo $error;?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" enctype="multipart/form-data" action="<?php echo base_url('index.php/Cstruktur_organisasi/do_upload') ?>" method="post">
                                    <?php 
                                        foreach($hasil as $data) {
                                    ?>    
                                        <div class="form-group">
                                            <label>User Upload</label>
                                            <input class="form-control" name="userid_upload" value="<?php echo $data->id_user_update; ?>">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Upload</label>
                                            <input class="form-control" name="tgl_upload" value="<?php echo $data->tgl_update; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="url_picture">                                            
                                        </div>  
                                        <div class="form-group">
                                            <label>Gambar Struktur Organisasi</label>
                                            <img src="<?php echo base_url('assets/images/'.$data->url_picture) ?>" />
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
