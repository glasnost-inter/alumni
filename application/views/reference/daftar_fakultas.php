
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $judul;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <a href="<?php echo base_url('index.php/Creferensi/entry_fakultas') ?>" class="btn btn-primary">Entry Fakultas</a><br><br>
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
                                    if($hasil) {                                    
                                    ?> 
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Kode Fakultas</th>
                                                    <th>Nama Fakultas</th>
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
                                                    <td><?php echo $data->kd_fakultas; ?></td>
                                                    <td><?php echo $data->nama_fakultas; ?></td>                                                    
                                                    <td><a href="<?php echo base_url('index.php/Creferensi/update_fakultas/'.$data->kd_fakultas) ?>" class="btn btn-primary">Update</a>
                                                        <a href="<?php echo base_url('index.php/Creferensi/delete_fakultas/'.$data->kd_fakultas) ?>" class="btn btn-primary">Delete</a>                                                            
                                                        <a href="<?php echo base_url('index.php/Creferensi/daftar_jurusan/'.$data->kd_fakultas) ?>" class="btn btn-primary">Jurusan</a>                                                            
                                                    </td>                                                    
                                                </tr>
                                                <?php 
                                                }
                                                ?>    
                                            </tbody>
                                        </table>
                                    </div>
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
