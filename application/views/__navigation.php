        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                                                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                                                
                        <li><a href="<?php echo base_url('index.php/Cregistrasi/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cregistrasi/my_autentification') ?>"><i class="fa fa-edit fa-fw"></i> My Authentification</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cregistrasi/my_profile') ?>"><i class="fa fa-edit fa-fw"></i> My Profile</a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url('index.php/Cstruktur_organisasi') ?>"><i class="fa fa-edit fa-fw"></i> Struktur Organisasi</a>
                        </li>                        
                        <li>
                            <a href="<?php echo base_url('index.php/Cad_art') ?>"><i class="fa fa-edit fa-fw"></i> AD ART</a>
                        </li>                        
                        <li>
                            <a href="<?php echo base_url('index.php/Cprogram_kerja') ?>"><i class="fa fa-edit fa-fw"></i> Program Kerja</a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url('index.php/Csejarah') ?>"><i class="fa fa-edit fa-fw"></i> Sejarah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cregistrasi/daftar_user') ?>"><i class="fa fa-edit fa-fw"></i> Admin User</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Creferensi/daftar_fakultas') ?>"><i class="fa fa-edit fa-fw"></i> Setup Fakultas & Jurusan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Ckarir/daftar_karir') ?>"><i class="fa fa-edit fa-fw"></i> Lowongan Kerja</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cpeluang_usaha/daftar_peluang_usaha') ?>"><i class="fa fa-edit fa-fw"></i> Peluang Usaha</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cberita/daftar_berita') ?>"><i class="fa fa-edit fa-fw"></i> Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Cforum/daftar_forum') ?>"><i class="fa fa-edit fa-fw"></i> Forum</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
