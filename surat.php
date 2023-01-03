<?php
  include('../koneksi.php'); 
  session_start();
    
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Education- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/favicon1.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/favicon1.png" alt="" width="43" height="45" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">Computer Education </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Alat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Alat:</h6>
                        <a class="collapse-item" href="surat.php">Auto Create Surat</a>
                        <a class="collapse-item" href="qr.php">Qr Code Generate</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="visi.php">
                    <i class="fas fa-fw fa-bullseye"></i>
                    <span>Visi-Misi</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="kas.php">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Kas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="proker.php">
                    <i class="fas fa-fw fa-clipboard-check"></i>
                    <span>Proker</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anggota.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Anggota</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="https://drive.google.com/drive/folders/1VYcc5us97qQ0FQz44hLzqBNcPw6N_Nfp?usp=share_link">
                    <i class="fas fa-fw fa-upload"></i>
                    <span>File</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="blog.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Blog</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Kelola
            </div>


            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Users</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>  

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">                               
                                 <?php
                                echo $_SESSION['username'];
                                ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Generate surat</h1>
                    <p class="mb-4">Program membuat surat secara instan.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">List Daftar Surat</h6>
                        </div>
                                        <center><h3>Daftar surat</h3><center>
                                           
                                                         <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button> -->


                   <!-- Modal -->
                   <div class="modal fade" id="suratacara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="surat/surat.php" enctype="multipart/form-data" >
                        <section class="base align-items-center "> 
                        <div>
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nomer Surat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="number" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" autofocus="" />
                        </div>
                        </div>

                                                
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="jabatan" autofocus="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="nama" autofocus="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama Acara</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="acara" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="tgl" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="pukul" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="tempat" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Titimangsa</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="titimangsa" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Pelaksana</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketuplak" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Ketua</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="noceketu" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="sekertaris" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocesek" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketum" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label"> No CE Ketum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocetum" autofocus="" required=""/>
                        </div>
                        </div>
       
                            </div>
                            <div>
                            <label> Jenis</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis" >
                                    <option value="0">Surat Pemberitahuan</option>
                                </select>
                                <div class="input-group-append">
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value = "print" class="btn btn-primary">Buat Surat</button>
            </div>
            </form>
            </div>
        </div>
        </div>

                           <!-- Modal -->
        <div class="modal fade" id="suratpermohonan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="surat/surat.php" enctype="multipart/form-data" >
                        <section class="base align-items-center "> 
                        <div>
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nomer Surat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="number" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" autofocus="" />
                        </div>
                        </div>


                            
                            <div class="row mb-4">
                            <label for="Nama Proker" class="col-sm-3 col-form-label">Perihal</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control"  name="perihal" autofocus="" />
                            </div>
                            </div>

                                                

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="nama" autofocus="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama Acara</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="acara" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="tgl" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="pukul" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="tempat" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Titimangsa</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="titimangsa" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Pelaksana</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketuplak" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Ketua</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="noceketu" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="sekertaris" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocesek" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketum" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label"> No CE Ketum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocetum" autofocus="" required=""/>
                        </div>
                        </div>
       
                            </div>
                            <div>
                            <label> Jenis</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis" >
                                    <option  value="1">Surat Permohonan</option>

                                </select>
                                <div class="input-group-append">
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value = "print" class="btn btn-primary">Buat Surat</button>
            </div>
            </form>
            </div>
        </div>
        </div>

                   <!-- Modal -->
                   <div class="modal fade" id="suratpeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="surat/surat.php" enctype="multipart/form-data" >
                        <section class="base align-items-center "> 
                        <div>
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nomer Surat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="number" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" autofocus="" />
                        </div>
                        </div>


   

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="nama" autofocus="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama Acara</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="acara" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="tgl" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="pukul" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="tempat" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Titimangsa</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="titimangsa" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Pelaksana</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketuplak" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Ketua</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="noceketu" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="sekertaris" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocesek" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketum" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label"> No CE Ketum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocetum" autofocus="" required=""/>
                        </div>
                        </div>
       
                            </div>
                            <div>
                            <label> Jenis</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis" >
                                    <option  value="2">Surat Peminjaman</option>

                                </select>
                                <div class="input-group-append">
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value = "print" class="btn btn-primary">Buat Surat</button>
            </div>
            </form>
            </div>
        </div>
        </div>

        
                   <!-- Modal -->
        <div class="modal fade" id="suratundangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="surat/surat.php" enctype="multipart/form-data" >
                        <section class="base align-items-center "> 
                        <div>
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nomer Surat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="number" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" autofocus="" />
                        </div>
                        </div>



                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama Acara</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="acara" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="tgl" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="pukul" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="tempat" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Titimangsa</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="titimangsa" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Pelaksana</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketuplak" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Ketua</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="noceketu" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="sekertaris" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocesek" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketum" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label"> No CE Ketum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocetum" autofocus="" required=""/>
                        </div>
                        </div>
       
                            </div>
                            <div>
                            <label> Jenis</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis" >
                                    <option  value="3">Surat Undangan</option>
                                

                                </select>
                                <div class="input-group-append">
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value = "print" class="btn btn-primary">Buat Surat</button>
            </div>
            </form>
            </div>
        </div>
        </div>

                     <!-- Modal -->
                     <div class="modal fade" id="suratsponsor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="surat/surat.php" enctype="multipart/form-data" >
                        <section class="base align-items-center "> 
                        <div>
                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nomer Surat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="number" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" autofocus="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="nama" autofocus="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Nama Acara</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="acara" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="tgl" autofocus="" required=""  />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="pukul" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  name="tempat" autofocus="" required=""/>
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Titimangsa</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="titimangsa" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Pelaksana</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketuplak" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Ketua</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="noceketu" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="sekertaris" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">No CE Sekertaris</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocesek" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="ketum" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-4">
                        <label for="Nama Proker" class="col-sm-3 col-form-label"> No CE Ketum</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="nocetum" autofocus="" required=""/>
                        </div>
                        </div>
       
                            </div>
                            <div>
                            <label> Jenis</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis" >
                                    <option  value="4">Surat Dana Sponsor</option>

                                </select>
                                <div class="input-group-append">
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value = "print" class="btn btn-primary">Buat Surat</button>
            </div>
            </form>
            </div>
        </div>
        </div>

                    <br/>

                    <table class="table table-hover">

                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Surat</th>
                        <th scope="col"></th>
         
                   
                        </tr>
                    </thead>
                    <tbody>
                    <?php
           


                    ?>
                    <tr>
                        <td  scope="row">1</td>
                        <td  scope="row">Surat Pemberitahuan Acara</td>
                        <td>         
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#suratacara">
                        Buat
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td  scope="row">2</td>
                        <td  scope="row">Surat Permohonan</td>
                        <td>         
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#suratpermohonan">
                        Buat
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td  scope="row">3</td>
                        <td  scope="row">Surat Peminjaman</td>
                        <td>         
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#suratpeminjaman">
                        Buat
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td  scope="row">4</td>
                        <td  scope="row">Surat Undangan Acara</td>
                        <td>         
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#suratundangan">
                        Buat
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td  scope="row">5</td>
                        <td  scope="row">Surat Pengajuan Kerja Sama (sponsorship)</td>
                        <td>         
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#suratsponsor">
                        Buat
                        </button>
                        </td>
                    </tr>
                        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2">
                            Edit
                            </button> -->
   

                            
                        </td>
                    </tr>

                    </tbody>
                    </table>
                        </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Computer Education 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>