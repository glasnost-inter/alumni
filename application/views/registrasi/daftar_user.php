
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $judul;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <a href="<?php echo base_url('index.php/Cregistrasi/register_admin') ?>" class="btn btn-primary">Entry Admin</a><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Email</th>                                                                                                                                                            
                                                    <th>Password</th>                                                    
                                                    <th>NPM</th>
                                                    <th>Role</th>
                                                    <th>Action</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=1;
                                                foreach($hasil as $data) {
                                                //for($i=1;$i<=10;$i++){
                                                if($i%2 > 0){
                                                    $class_tr = 'odd gradeX';
                                                }else{
                                                    $class_tr = 'even gradeC'; 
                                                }
                                                ?>    
                                                <tr class=<?php echo $class_tr;?>>                                                                                                       
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $data->email; ?></td>                                                    
                                                    <td><?php echo $data->password; ?></td>
                                                    <td><?php echo $data->npm; ?></td>
                                                    <td><?php echo $data->kd_role; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('index.php/Cregistrasi/update_user/'.str_replace("@", "%87", $data->email)) ?>" class="btn btn-primary">Update</a>                                                        
                                                    </td>                                                    
                                                </tr>
                                                <?php 
                                                }
                                                ?>    
                                            </tbody>
                                        </table>
                                    </div>
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
