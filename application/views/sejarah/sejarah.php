
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
                                    <form role="form" action="<?php echo base_url('index.php/Csejarah/update_data_statis') ?>" method="post">
                                    <?php 
                                        foreach($hasil as $data) {
                                    ?>    
                                        <div class="form-group">
                                            <label>User Entry</label>
                                            <input class="form-control" name="user_entry" value="<?php echo $data->id_user_update; ?>">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Perubahan</label>
                                            <input class="form-control" name="tgl_entry" value="<?php echo $data->tgl_update; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ringkasan Sejarah</label>
                                            <textarea id="textareamce" name="ringkasan_sejarah" rows="12" cols="50"><?php echo $data->ringkasan_sejarah; ?></textarea>                                            
                                        </div> 
                                        <div class="form-group">
                                            <label>Isi Sejarah</label>
                                            <textarea id="textareamce2" name="isi_sejarah" rows="12" cols="50"><?php echo $data->isi_sejarah; ?></textarea>                                            
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
