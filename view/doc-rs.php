<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Document</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">&nbsp;<i class=""></i>&nbsp;&nbsp;&nbsp;DASHBOARD</span>
            </a>


            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Document | RS NUR ROHMAH</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link">
                                    <i class="nav-icon fas fa-clipboard-list"></i>
                                    <p>
                                        Main Portal
                                        <span class="right badge badge-danger"></span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>PORTAL Dokumen | RSNR</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Soon</a></li>
                                <li class="breadcrumb-item active">Soon</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card-header -->
                            <div class="card">
                                <div class="card-header bg-purple">
                                    <h3 class="card-title">Dokumen Rumah Sakit</h3>
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-gruop mb-3">
                                            <div class="form-inline">
                                                <div class="mr-2 mt-1">
                                                    <!-- <label for="" class="form-label">Jenis Dokumen</label> -->
                                                    <select class="custom-select" name="jenis_dokumen" required>
                                                        <option selected>Pilih Jenis Dokumen</option>
                                                        <option value="SK">SK</option>
                                                        <option value="SPO">SPO</option>
                                                        <option value="Panduan">Panduan</option>
                                                        <option value="Kebijakan">Kebijakan</option>
                                                        <option value="Dokumen Lainnya">Dokumen Lainnya</option>
                                                        <option value="Pedoman Pelayanan">Pedoman Pelayanan</option>
                                                        <option value="Pedoman Pengorganisasian">Pedoman Pengorganisasian</option>
                                                    </select>
                                                </div>
                                                <div class="mr-1 mt-1">
                                                    <select class="custom-select" name="unit" required>
                                                        <option selected>Pilih Pemilik Dokumen</option>
                                                        <option value="Instalasi Rawat Inap">Instalasi Rawat Inap</option>
                                                        <option value="Instalasi Rawat Jalan">Instalasi Rawat Jalan</option>
                                                        <option value="Instalasi Gawat Darurat">Instalasi Gawat Darurat</option>
                                                        <option value="Instalasi Hemodialisa">Instalasi Hemodialisa</option>
                                                        <option value="Instalasi Kebidanan dan Kandungan">Instalasi Kebidanan dan Kandungan</option>
                                                        <option value="Asuhan Keperawatan dan Kebidanan">Unit Asuhan Keperawatan dan Kebidanan</option>
                                                        <option value="Instalasi Farmasi">Instalasi Farmasi</option>
                                                        <option value="Instalasi Radiologi">Instalasi Radiologi</option>
                                                        <option value="Instalasi Rekam Medis">Instalasi Rekam Medis</option>
                                                        <option value="Instalasi Sanitasi">Instalasi Sanitasi</option>
                                                        <option value="Instalasi Gizi">Instalasi Gizi</option>
                                                        <option value="Instalasi Rehabilitasi Medik">Instalasi Rehabilitasi Medik</option>
                                                        <option value="Instalasi Laboratoriu">Instalasi Laboratorium</option>
                                                        <option value="Instalasi CSSD">Instalasi CSSD</option>
                                                        <option value="unit SDM">unit SDM</option>
                                                        <option value="unit Rumah tangga">unit Rumah tangga</option>
                                                        <option value="unit IT">unit IT</option>
                                                        <option value="unit IPSRS">unit IPSRS</option>
                                                        <option value="unit Keamanan">unit Keamanan</option>
                                                        <option value="unit Driver">unit Driver</option>
                                                        <option value="unit PKRS">unit PKRS</option>
                                                        <option value="Keuangan">Keuangan</option>
                                                        <option value="Unit Administrasi Pembiayaan">Unit Administrasi Pembiayaan</option>
                                                        <option value="Komite PMKP">Komite PMKP</option>
                                                        <option value="Tim SKP">Tim SKP</option>
                                                        <option value="Komite PPI">Komite PPI</option>
                                                        <option value="Tim K3">Tim K3</option>
                                                        <option value="Tim manajemen komplain">Tim manajemen komplain</option>
                                                        <option value="komite keperawatan<">komite keperawatan</option>
                                                        <option value="komite medis">komite medis</option>
                                                        <option value="komite etik dan hukum">komite etik dan hukum</option>
                                                        <option value="tim marketing">tim marketing</option>
                                                        <option value="Manajemen">Manajemen</option>
                                                        <option value="Pelayanan Medis">Pelayanan Medis</option>
                                                        <option value="Komite Kesehatan Lain">Komite Kesehatan Lain</option>
                                                        <option value="Tim Fraud">Tim Fraud</option>
                                                        <option value="Tim Code blue">Tim Code blue</option>
                                                        <option value="Tim KMKB">Tim KMKB</option>
                                                        <option value="Unit Kamar Jenazah">Unit Kamar Jenazah</option>
                                                        <option value="Tim Lainnya">Tim Lainnya</option>
                                                    </select>
                                                </div>

                                                <div class="form-inline">
                                                    <button type="submit" name="cari" class="btn btn-success ml-1">Search</button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Dokumen</th>
                                                <th>Unit/Ins. Pemilik Dokumen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Nomor Dokumen</th>
                                                <th>Tanggal Pengesahan</th>
                                                <th>Status</th>
                                                <th>Tanggal Verifikasi</th>
                                                <th>File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "../conn.php";
                                            if (isset($_POST['cari'])) {

                                                $jenis_dokumen = $_POST['jenis_dokumen'];
                                                $unit = $_POST['unit'];

                                                $sql = " SELECT * FROM document_rs_spo where jenis_dokumen='$jenis_dokumen' and  unit='$unit' ";
                                                $no = 1;
                                                $query = sqlsrv_query($conn, $sql) or die(sqlsrv_errors());;
                                                while ($data = sqlsrv_fetch_array($query)) {
                                            ?>

                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $data['jenis_dokumen']; ?></td>
                                                        <td><?php echo $data['unit']; ?></td>
                                                        <td><?php echo $data['nama_file']; ?></td>
                                                        <td><?php echo $data['no_spo']; ?></td>
                                                        <td><?php echo $data['tanggal']; ?></td>
                                                        <td><?php echo $data['status']; ?></td>
                                                        <td><?php echo $data['tanggal_verif']; ?></td>
                                                        <td><?php echo $data['file_nama']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#view<?php echo $data['id']; ?>">View</button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="view<?php echo $data['id']; ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="Label">View</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <embed type="application/pdf" src="../Asset/save_file/<?= $data['file_nama']; ?>#toolbar=0" width="750" height="800"></embed>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            <!-- <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button> -->
                                                            <div class="modal-footer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                            </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>



        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b></b>
            </div>
            <strong>Copyright &copy; 2022 <a href="">IT-RSNR</a></strong> | Anything U Want.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../dashboard/plugins/jszip/jszip.min.js"></script>
    <script src="../dashboard/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../dashboard/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../dashboard/dist/js/adminlte.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>