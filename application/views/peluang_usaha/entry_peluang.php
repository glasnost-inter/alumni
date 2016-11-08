
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
                                    <form role="form" action="<?php echo base_url('index.php/Cpeluang_usaha/simpan_peluang') ?>" method="post">                                       
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input class="form-control" name="company_name" value="">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Perusahaan</label>
                                            <input class="form-control" name="jenis_usaha" value="">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Profil Perusahaan</label>
                                            <input class="form-control" name="company_profile" value="">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Syarat</label>
                                            <input class="form-control" name="syarat" value="">
                                        </div>           
                                        <div class="form-group">
                                            <label>Tata Cara</label>
                                            <input class="form-control" name="tata_cara" value="">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Berlaku Sampai Dengan</label>
                                            <input class="form-control" name="valid_until" value="">                                            
                                        </div>
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Reset</button>                                     
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
