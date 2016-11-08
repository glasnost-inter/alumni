
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
                                    <form role="form" action="<?php echo base_url('index.php/Cregistrasi/simpan_update_user') ?>" method="post">                                       
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $data->email; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>NPM</label>
                                            <input class="form-control" placeholder="E-mail" name="npm" type="email" value="<?php echo $data->npm; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="New Password" name="newpassword" value="<?php echo $data->password; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="kd_role"  class="form-control">
                                                <option value="<?php echo $data->kd_role; ?>" selected><?php echo $data->kd_role; ?></option>
                                                <option value="ADM">Admin</option>
                                                <option value="">User</option>
                                            </select>
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
