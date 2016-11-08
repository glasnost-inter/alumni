
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
                            &nbsp;
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php                                    
                                    foreach($hasil as $data) {                                    
                                    ?> 
                                    <form role="form" action="<?php echo base_url('index.php/Creferensi/simpan_update_data_fakultas') ?>" method="post">                                       
                                        <div class="form-group">
                                            <label>Kode Fakultas</label>
                                            <input class="form-control" name="kd_fakultas" value="<?php echo $data->kd_fakultas; ?>" readonly="true">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                            <input class="form-control" name="nama_fakultas" value="<?php echo $data->nama_fakultas; ?>">
                                        </div>                                        
                                        <br>
                                        <a href="<?php echo base_url('index.php/Creferensi/entry_jurusan_fakultas/'.$data->kd_fakultas) ?>" class="btn btn-primary">Entry Jurusan</a><br><br>                                                                             
                                    </form>
                                    <?php                                    
                                    }
                                    ?>                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->                                
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            &nbsp;
                                        </div>
                                        <div class="panel-body">                            
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="dataTable_wrapper">
                                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Fakultas</th>
                                                                    <th>Kode Jurusan</th>
                                                                    <th>Nama Jurusan</th>
                                                                    <th>Action</th>                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                $i=1;
                                                                if(isset($hasil2)){
                                                                    foreach($hasil2 as $data) {
                                                                    //for($i=1;$i<=10;$i++){
                                                                    if($i%2 > 0){
                                                                        $class_tr = 'odd gradeX';
                                                                    }else{
                                                                        $class_tr = 'even gradeC'; 
                                                                    }
                                                                    ?>    
                                                                    <tr class=<?php echo $class_tr;?>>
                                                                        <td><?php echo $data->kd_fakultas; ?></td>
                                                                        <td><?php echo $data->kd_jurusan; ?></td>                                                    
                                                                        <td><?php echo $data->nama_jurusan; ?></td>                                                    
                                                                        <td><a href="<?php echo base_url('index.php/Creferensi/update_jurusan/'.$data->kd_fakultas.'/'.$data->kd_jurusan) ?>" class="btn btn-primary">Update</a>
                                                                            <a href="<?php echo base_url('index.php/Creferensi/delete_jurusan/'.$data->kd_fakultas.'/'.$data->kd_jurusan) ?>" class="btn btn-primary">Delete</a>                                                            
                                                                            <a href="<?php echo base_url('index.php/Creferensi/daftar_peminatan/'.$data->kd_jurusan) ?>" class="btn btn-primary">Peminatan</a>                                                            
                                                                        </td>                                                    
                                                                    </tr>
                                                                    <?php 
                                                                    }
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
