<?php
// include "../connection.php"; //memanggil file connection.php untuk koneksi ke database
// session_start(); //memulai session
// if(isset($_SESSION['username'])){ //jika session username terisi
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Informasi Inventory</title> 
  
  <!-- file css yang dibutuhkan -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/sb-admin.css'?>">
  <!-- <link rel="stylesheet" href="<?php //echo base_url().'assets/css/responsive.bootstrap.min.css'?>"> -->
</head>

<!-- body -->
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin.php">SI Inventory</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url().'Admin/' ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <!-- <?php $username //= $this->session->userdata('username'); ?> -->
            <!-- <span class="nav-link-text"><?php //echo $username; ?>'s Dashboard</span> -->
            <span class="nav-link-text">Dashboard Admin</span>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php //echo site_url().'Beasiswa/' ?>">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Data Jurusan</span>
          </a>
        </li> -->
        <!-- <?php //if($this->session->userdata('level') == 1) : ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Operator">
          <a class="nav-link" href="<?php //echo site_url().'Operator/' ?>">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Data Operator</span>
          </a>
        </li>
        <?php// endif; ?>  -->
        


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Barang">
          <a class="nav-link" href="<?php echo site_url().'Barang/' ?>">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Data Barang</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Kategori">
          <a class="nav-link" href="<?php echo site_url().'Kategori/' ?>">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Data Kategori Barang</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Member">
          <a class="nav-link" href="<?php echo site_url().'Member/' ?>">
            <i class="fa fa-fw fa-trophy"></i>
            <span class="nav-link-text">Data Member</span>
          </a>
        <!-- </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="<?php echo site_url().'Laporan/' ?>">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Data Order</span>
          </a>
        </li> -->


       
      </ul>
      <ul class="navbar-nav sidenav-toggler"> <!-- navigasi atas -->
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <!-- <a class="nav-link" data-toggle="modal" data-target="#exampleModal"> -->
            <a class="nav-link" href="<?php echo site_url().'Logout/' ?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>





    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/sb-admin.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/sb-admin-datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.responsive.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/custom.js'?>"></script>
    
  </div>
</body>
</html>
