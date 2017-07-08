<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Page | PP Sabilurrosyad</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/flat/blue.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/css/dataTables.bootstrap.min.css') ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/select2.min.css') ?>">
  <link rel="shortcut icon" href="<?php echo base_url() ?>landing/img/pondok.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('Dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>PSR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Gasek</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>landing/img/pondok.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username') ?> - <?php echo $this->session->userdata('iduser') ?>
                  <small><?php echo $this->session->userdata('username') ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('C_Login/Logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="active treeview">
          <a href="<?php echo base_url('Dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-leaf"></i>
            <span>Santri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Dashboard/Santri_Baru') ?>"><i class="fa fa-circle-o"></i> Santri Baru</a></li>
            <li><a href="<?php echo base_url('Dashboard/Alumni') ?>"><i class="fa fa-circle-o"></i> Alumni</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master Kamar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin/Kamar/DataKamar') ?>"><i class="fa fa-circle-o"></i> Data Kamar</a></li>
            <li><a href="<?php echo base_url('Admin/Kamar/PersonilKamar') ?>"><i class="fa fa-circle-o"></i> Penghuni Kamar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Diniyah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Kelas Diniyah</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Kelas Santri</a></li>
          </ul>
        </li>
        <li class="treeview"><a href=""><i class="fa fa-envelope-o"></i><span> Kotak Saran</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Setting</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <fieldset>
    <!-- santri baru -->
    <?php if ((isset($page)) AND ($page=='santri_baru')) {?>
    <section class="content-header">
      <h1>
        Santri
        <small>Data Santri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li>Santri</li>
        <li class="active">Santri Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Santri Baru</h3>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
          <a href="<?php echo base_url('Dashboard/tambah_santri') ?>" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Santri Baru</a>
          <table class="table table-bordered table-striped table-hover" style="margin-top: 20px;" id="tabel_santri">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>NO HP</td>
                <td>Email</td>
                <td>Status</td>
                <td><span class="fa fa-gears"></span></td>
                <td><i class="fa fa-key"></i></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data_santri as $rows): ?>
                <?php 
                $stats='';
                if ($rows['status']=='1') {
                  $stats='aktif';}?>
                <tr>
                  <td><?php echo $rows['id_santri'] ?></td>
                  <td><?php echo $rows['nama_santri'] ?></td>
                  <td><?php echo $rows['alamat_santri'] ?></td>
                  <td><?php echo $rows['noTelpon_santri'] ?></td>
                  <td><?php echo $rows['email_santri'] ?></td>
                  <td><span class="label label-success"><?php echo $stats ?></span></td>
                  <td>
                    <a href="<?php echo base_url('Admin/Santri/EditSantri/'.$rows['id_santri']) ?>" class="btn btn-info btn-flat btn-xs"><span class="fa fa-pencil"></span></a>
                    <a href="<?php echo base_url('Admin/Santri/HapusSantri/'.$rows['id_santri']) ?>" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')"><span class="fa fa-trash"></span></a>
                  </td>
                  <td>
                    <a href="<?php echo base_url('Admin/Santri/UbahStatus/'.$rows['id_santri']) ?>" class="btn btn-flat btn-xs btn-success" onclick="return confirm('Apakah anda yakin akan menjadikan <?php echo $rows['nama_santri'] ?> sebagai pengurus ?')"><span class="fa fa-unlock-alt"></span></a>
                    <a href="<?php echo base_url('Admin/Santri/LepasPengurus/'.$rows['id_santri']) ?>" class="btn btn-flat btn-xs btn-warning" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $rows['nama_santri'] ?> sebagai pengurus ?')"><span class="fa fa-lock"></span></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- alumni -->
    <?php } else if ((isset($page))AND ($page=='data_alumni')) {?>
    <section class="content-header">
      <h1>
        Alumni
        <small>Data Alumni</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li>Santri</li>
        <li class="active">Alumni</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Alumni</h3>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
        <a href="<?php echo base_url('Admin/Alumni/Tambah_Alumni') ?>" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Alumni Baru</a>
          <table class="table table-bordered table-striped table-hover" id="tabel_alumni" style="margin-top: 20px;">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Nomor HP</td>
                <td>Facebook</td>
                <td>Tahun Masuk</td>
                <td>Tahun Boyong</td>
                <td>Status</td>
                <td><i class="fa fa-gears"></i></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($master_alumni as $row_al): ?>
                <?php $stats_al;
                if ($row_al['status']=='0') {
                  $stats_al='Alumni';
                }else{
                  $stats_al='santri baru';
                 }?>
                
                <tr>
                  <td><?php echo $row_al['id_santri'] ?></td>
                  <td><?php echo $row_al['nama_santri'] ?></td>
                  <td><?php echo $row_al['alamat_santri'] ?></td>
                  <td><?php echo $row_al['noTelpon_santri'] ?></td>
                  <td><?php echo $row_al['facebook_santri'] ?></td>
                  <td><?php echo $row_al['tahun_masuk'] ?></td>
                  <td><?php echo $row_al['tahun_boyong'] ?></td>
                  <td><label class="label label-info"><?php echo $stats_al ?></label></td>
                  <td>
                    <a href="<?php echo base_url('Admin/Alumni/EditAlumni/'.$row_al['id_santri']) ?>" class="btn btn-info btn-flat btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('Admin/Alumni/HapusAlumni/'.$row_al['id_santri']) ?>" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
    </section>
    <?php } else if ((isset($page))&& ($page=='tambah_santri')) {?>
    <section class="content-header">
      <h1><span class="glyphicon glyphicon-list"></span>&nbsp;Santri Baru</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Tambah Santri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Santri</h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Santri/Tambah_Santri') ?>">
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="TambahNamaSantri" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Panggilan</label>
              <div class="col-md-6">
                <input type="text" name="tambahPanggilan" class="form-control" placeholder="Nama panggilan anda selama mondok">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tempat Lahir</label>
              <div class="col-md-6">
                <input type="text" name="TambahKelahiran" class="form-control" placeholder="Kelahiran">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Lahir</label>
              <div class="col-md-6">
                <input type="date" class="form-control" name="tambahTglLahir" placeholder="Tanggal Lahir anda">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Jenis Kelamin</label>
              <div class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="tambahGender" value="1">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="tambahGender" value="0">&nbsp;Perempuan
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-6">
                <textarea name="tambahAlamat" class="form-control" rows="6" cols="4" placeholder="Alamat Lengkap anda"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Telepon</label>
              <div class="col-md-6">
                <input type="text" name="tambahNoTelp" class="form-control" placeholder="masukan nomor aktif anda">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-6">
                <input type="text" name="tambahEmail" class="form-control" placeholder="masukan email anda jika anda punya">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Facebook</label>
              <div class="col-md-6">
                <input type="text" name="tambahFacebook" class="form-control" placeholder="masukan nama fb anda">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun masuk</label>
              <div class="col-md-6">
                <input type="date" name="tambahTahunMasuk" class="form-control" placeholder="hh/bb/tttt">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <a href="<?php echo base_url('Dashboard/Santri_Baru') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- alumni -->
    <?php }else if((isset($page))AND ($page=='tambah_alumni')){ ?>
    <section class="content-header">
      <h1><span class="glyphicon glyphicon-list"></span>&nbsp;Tambah Alumni</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>" class="fa fa-dashboard">&nbsp;Beranda</a></li>
        <li>Tambah Alumni</li>
      </ol>
    </section>
      <section class="content">
        <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Alumni</h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Alumni/Alumni_Baru') ?>">
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="alumniNamaSantri" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Panggilan</label>
              <div class="col-md-6">
                <input type="text" name="alumniPanggilan" class="form-control" placeholder="Nama panggilan anda selama mondok">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tempat Lahir</label>
              <div class="col-md-6">
                <input type="text" name="alumniKelahiran" class="form-control" placeholder="Kelahiran">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Lahir</label>
              <div class="col-md-6">
                <input type="date" class="form-control"  name="alumniTglLahir" placeholder="Tanggal Lahir anda">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Jenis Kelamin</label>
              <div class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="alumniGender" value="1">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="alumniGender" value="0">&nbsp;Perempuan
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-6">
                <textarea name="alumniAlamat" class="form-control" rows="6" cols="4" placeholder="Alamat Lengkap anda"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Telepon</label>
              <div class="col-md-6">
                <input type="text" name="alumniNoTelp" class="form-control" placeholder="masukan nomor aktif anda">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-6">
                <input type="text" name="alumniEmail" class="form-control" placeholder="masukan email anda jika anda punya">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Facebook</label>
              <div class="col-md-6">
                <input type="text" name="alumniFacebook" class="form-control" placeholder="masukan nama fb anda">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun masuk</label>
              <div class="col-md-6">
                <input type="date" name="alumniTahunMasuk" class="form-control" placeholder="hh/bb/tttt">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Boyong</label>
              <div class="col-md-6">
                <input type="date" name="alumniTahunBoyong"  class="form-control" placeholder="hh/bb/tttt">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <a href="<?php echo base_url('Dashboard/Alumni') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
              </div>
            </div>
        </div>
      </div>
      </section>
    <?php }else if((isset($page))AND ($page=='ubah_santri')){ ?>
    <section class="content-header">
      <h1>Ubah Data santri</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>"><span class="fa fa-dashboard"></span>&nbsp;Beranda</a></li>
        <li>Santri</li>
        <li>Edit Data Santri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Santri/UpdateSantri') ?>">
          <div class="form-group">
            <label class="control-label col-md-2">ID Santri</label>
            <div class="col-md-6">
              <input type="text" name="editIDSantri" class="form-control" readonly="" value="<?php echo $ubah_str->id_santri ?>">
            </div>
          </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="editNamaSantri" class="form-control" value="<?php echo $ubah_str->nama_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Panggilan</label>
              <div class="col-md-6">
                <input type="text" name="editPanggilan" class="form-control" value="<?php echo $ubah_str->nama_panggilan ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tempat Lahir</label>
              <div class="col-md-6">
                <input type="text" name="editKelahiran" class="form-control" value="<?php echo $ubah_str->tempat_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Lahir</label>
              <div class="col-md-6">
                <input type="date" class="form-control" id="editTglLahir" name="editTglLahir" value="<?php echo $ubah_str->tanggal_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Jenis Kelamin</label>
              <div class="col-md-6">
                <?php if ($ubah_str->jenis_kelamin==1): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editGender" value="1" checked="">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editGender" value="0">&nbsp;Perempuan
                </label>
                <?php endif ?>
                <?php if ($ubah_str->jenis_kelamin==0): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editGender" value="1">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editGender" value="0"  checked="">&nbsp;Perempuan
                </label>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-6">
                <textarea name="editAlamat" class="form-control" rows="6" cols="4" placeholder="Alamat Lengkap anda"><?php echo $ubah_str->alamat_santri ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Telepon</label>
              <div class="col-md-6">
                <input type="text" name="editNoTelp" class="form-control" value="<?php echo $ubah_str->noTelpon_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-6">
                <input type="text" name="editEmail" class="form-control" value="<?php echo $ubah_str->email_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Facebook</label>
              <div class="col-md-6">
                <input type="text" name="editFacebook" class="form-control" value="<?php echo $ubah_str->facebook_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun masuk</label>
              <div class="col-md-6">
                <input type="date" name="editTahunMasuk" class="form-control" value="<?php echo $ubah_str->tahun_masuk ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Boyong</label>
              <div class="col-md-6">
                <input type="date" name="editTahunBoyong" class="form-control" value="<?php echo $ubah_str->tahun_boyong ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <a href="<?php echo base_url('Dashboard/Santri_Baru') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    <?php }else if((isset($page))AND ($page=='edit_alumni')){ ?>
    <section class="content-header">
      <h1><span class="fa fa-pencil"></span>&nbsp;Edit Data Alumni</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>" ><span class="fa fa-dashboard"></span>Beranda</a></li>
        <li>Santri</li>
        <li>Alumni</li>
        <li>Edit Data Alumni</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Alumni/Update_Alumni') ?>">
          <div class="form-group">
                <label class="control-label col-md-2">ID Alumni</label>
                <div class="col-md-6">
                  <input type="text" name="editIDAlumni" class="form-control" value="<?php echo $edit_almn->id_santri ?>" readonly>
                </div>
              </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="editalumniNamaSantri" class="form-control" value="<?php echo $edit_almn->nama_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Panggilan</label>
              <div class="col-md-6">
                <input type="text" name="editalumniPanggilan" class="form-control" value="<?php echo $edit_almn->nama_panggilan ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tempat Lahir</label>
              <div class="col-md-6">
                <input type="text" name="editalumniKelahiran" class="form-control" value="<?php echo $edit_almn->tempat_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Lahir</label>
              <div class="col-md-6">
                <input type="date" class="form-control"  name="editalumniTglLahir" value="<?php echo $edit_almn->tanggal_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Jenis Kelamin</label>
              <div class="col-md-6">
                <?php if ($edit_almn->jenis_kelamin==1): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editalumniGender" value="1" checked="">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editalumniGender" value="0">&nbsp;Perempuan
                </label>
                <?php endif ?>
                <?php if($edit_almn->jenis_kelamin==0): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editalumniGender" value="1">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editalumniGender" value="0" checked="">&nbsp;Perempuan
                </label>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-6">
                <textarea name="editalumniAlamat" class="form-control" rows="6" cols="4"><?php echo $edit_almn->alamat_santri ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Telepon</label>
              <div class="col-md-6">
                <input type="text" name="editalumniNoTelp" class="form-control" value="<?php echo $edit_almn->noTelpon_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-6">
                <input type="text" name="editalumniEmail" class="form-control" value="<?php echo $edit_almn->email_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Facebook</label>
              <div class="col-md-6">
                <input type="text" name="editalumniFacebook" class="form-control" value="<?php echo $edit_almn->facebook_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun masuk</label>
              <div class="col-md-6">
                <input type="date" name="editalumniTahunMasuk" class="form-control" value="<?php echo $edit_almn->tahun_masuk ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Boyong</label>
              <div class="col-md-6">
                <input type="date" name="editalumniTahunBoyong"  class="form-control" value="<?php echo $edit_almn->tahun_boyong ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <a href="<?php echo base_url('Dashboard/Alumni') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
              </div>
            </div>
            </form>
        </div>
      </div>
    </section>
    <?php }else if ((isset($page))AND ($page=='dataKamar')){ ?>
    <section class="content-header">
      <h1>Kamar</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Data Kamar</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h1 class="box-title">Aset Kamar</h1>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
          <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahKamar"><i class="fa fa-plus"></i>&nbsp;Tambah Kamar</button>
          <table class="table table-striped table-bordered table-hover" id="tabelKamar">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama Kamar</td>
                <td>Sisa kuota Kamar</td>
                <td>Keterangan</td>
                <td><i class="fa fa-gears"></i></td>
              </tr>
            </thead>
            <tbody id="showKamar">
              <?php foreach ($db_kamar as $rows): ?>

                <?php
                $keterangan_kmr='';
                if ($rows->ket_kamar=='1') {
                  $keterangan_kmr='Kamar Putra';
                }
                if ($rows->ket_kamar=='0') {
                  $keterangan_kmr='Kamar Putri';
                }
                 ?>
                <tr>
                  <td><?php echo $rows->id_kamar ?></td>
                  <td><?php echo $rows->nama_kamar ?></td>
                  <td><?php echo $rows->kuota_kamar ?></td>
                  <td><label class="label label-success"><?php echo $keterangan_kmr ?></label></td>
                  <td>
                    <a href="javascript:;" data="<?php echo $rows->id_kamar ?>" class="btn btn-info btn-xs btn-flat btnEditKamar"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('Admin/Kamar/HapusKamar/'.$rows->id_kamar) ?>" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('apakah anda yakin akan menghapus data kamar <?php echo $rows->nama_kamar ?> ?')"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="tambahKamar">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal"><span>&times;</span></button>
            <h3 class="modal-title">Tambah Data Kamar</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Kamar/TambahKamar') ?>">
              <div class="form-group">
                <label class="control-label col-md-3">Nama Kamar</label>
                <div class="col-md-8">
                  <input type="text" name="namaKamar" class="form-control" placeholder="nama kamar">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Kuota Kamar</label>
                <div class="col-md-8">
                  <input type="text" name="kuotakamar" class="form-control" placeholder="Kuota kamar">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Jenis Kamar</label>
                <div class="col-md-8">
                  <label class="radio-inline">
                    <input type="radio" name="modulKamar" value="1">&nbsp;Putra
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="modulKamar" value="0">&nbsp;Putri
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                  <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i>&nbsp;Batal</button>
                  <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="updateKamar">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal"><span>&times;</span></button>
            <h3 class="modal-title">Edit Data Kamar</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/Kamar/UpdateKamar') ?>">
              <div class="form-group">
                <label class="control-label col-md-3">ID Kamar</label>
                <div class="col-md-8">
                  <input type="text" name="editIdKamar" class="form-control" readonly="readonly">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Nama Kamar</label>
                <div class="col-md-8">
                  <input type="text" name="editnamaKamar" class="form-control" placeholder="nama kamar">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Kuota Kamar</label>
                <div class="col-md-8">
                  <input type="text" name="editkuotakamar" class="form-control" placeholder="Kuota kamar">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Jenis Kamar</label>
                <div class="col-md-8">
                  <label class="radio-inline">
                    <input type="radio" name="editmodulKamar" value="1">&nbsp;Putra
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="editmodulKamar" value="0">&nbsp;Putri
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                  <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i>&nbsp;Batal</button>
                  <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-refresh"></i>&nbsp;Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } else if ((isset($page))AND ($page=='datapersonilKamar')){ ?>
    <section class="content-header">
      <h1>Personil Kamar</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Data Anggota Kamar</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Aset Anggota Kamar</h4>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
          <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahAnggotaKamar"><i class="fa fa-plus"></i>&nbsp;Tambah Anggota Kamar</button>
          <table class="table table-hover table-striped table-bordered tabel-responsive" id="tabelPersonil">
          <thead>
            <tr>
              <td>Nama Kamar</td>
              <td>Nama Santri</td>
              <td>Nomor HP Santri</td>
              <td>Keterangan</td>
              <td><i class="fa fa-gears"></i></td>
            </tr>
          </thead>
          <tbody id="tabelPersonil">
            <?php foreach ($list_personil as $lPersonil): ?>
              <tr>
                <td><?php echo $lPersonil['nama_kamar'] ?></td>
                <td><?php echo $lPersonil['nama_santri'] ?></td>
                <td><?php echo $lPersonil['noTelpon_santri'] ?></td>
                <td><?php echo $lPersonil['keterangan'] ?></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn-xs btnEditPersonil" data="<?php echo $lPersonil['id_trans'] ?>"><i class="fa fa-pencil"></i></a>
                  <a href="<?php echo base_url('Admin/Kamar/HapusPersonil/'.$lPersonil['id_trans']) ?>" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('Apakah anda akan menghapus data anggota Kamar ini ?')"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
          </table>
        </div>
      </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="tambahAnggotaKamar">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal"><i>&times;</i></button>
            <h4 class="modal-title">Tambah Kuota Kamar</h4>
          </div>
          <div class="modal-body">
            <form class="form-vertical" method="POST" action="<?php echo base_url('Admin/Kamar/TambahPersonilKamar') ?>">
              <div class="form-group">
                <label>Nama Kamar</label>
                <select class="form-control" name="listNamaKamar">
                  <option>Pilih Nama Kamar</option>
                  <?php foreach ($list_kamar as $PersonilKmr): ?>
                    <option value="<?php echo $PersonilKmr->id_kamar ?>">
                    <?php echo $PersonilKmr->nama_kamar ?>
                    &nbsp;(<?php echo $PersonilKmr->kuota_kamar ?>)
                    </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Santri</label>
                <select class="form-control select2" style="width: 100%;" name ="cb_personil[]" multiple="multiple">
                  <?php foreach ($list_santri as $rowsantri): ?>
                    <option value="<?php echo $rowsantri['id_santri'] ?>"><?php echo $rowsantri['nama_santri'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="ketPersonil" rows="6" placeholder="keterangan anggota baru masuk"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i>&nbsp;Batal</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>&nbsp;Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } else { ?>
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Santri</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url('Dashboard/Santri_Baru') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Alumni</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url('Dashboard/Alumni') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Kamar</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="<?php echo base_url('Admin/Kamar/DataKamar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Personil Kamar</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    
    <?php } ?>
    <?php unset($page); ?>
    </fieldset>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong><a href="http://ponpesgasek.com">Gasek Multimedia Studio</a>.</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/app.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
<script type="text/javascript">
  $('#tabel_alumni').DataTable();
  $('#tabel_santri').DataTable();
  $('#tabelKamar').DataTable();
  $('#tabelPersonil').DataTable();
  $('#alumniTglLahir').datepicker({
    autoclose : true
  });
  $('#alumniTahunMasuk').datepicker({
    autoclose : true
  });
  $('#alumniTahunBoyong').datepicker({
    autoclose : true
  });

  <?php if ($this->session->flashdata('sukses')): ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn().delay(1000).fadeOut('slow');
  <?php elseif($this->session->flashdata('gagal')): ?>
  $('.alert-success').html('<?php echo $this->session->flashdata('gagal') ?>').fadeIn().delay(1000).fadeOut('slow');
  <?php endif ?>
  $('.select2').select2();
</script>
<script type="text/javascript">
  $(function(){
    $('#showKamar').on('click','.btnEditKamar',function(){
      var id =$(this).attr('data');
      // alert(id);
      $('#updateKamar').modal('show');
      $.ajax({
        type : 'ajax',
        method : 'get',
        url : '<?php echo base_url('Admin/Kamar/EditKamar') ?>',
        data : {id:id},
        async : false,
        dataType : 'json',
        success : function(data){
          $('input[name=editIdKamar]').val(data.id_kamar);
          $('input[name=editnamaKamar]').val(data.nama_kamar);
          $('input[name=editkuotakamar]').val(data.kuota_kamar);
          $('input[name=editmodulKamar]').val(data.ket_kamar);
        },
        error: function(xx){
          alert(xx);
        }
      });
    });
  });
</script>
</body>
</html>