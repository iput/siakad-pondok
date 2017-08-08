<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni Page | PP Sabilurrosyad</title>
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
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>landing/img/pondok.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('Alumni/Alumni') ?>" class="logo">
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
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have  messages</li>
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
                  <!-- end message -->
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
                  <small><?php echo $this->session->userdata('email') ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('Login/Logout') ?>" class="btn btn-default btn-flat">Sign out</a>
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
          <a href="<?php echo base_url('Alumni/Alumni') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li><a href="<?php echo base_url('Alumni/Alumni/KotakSaran') ?>"><i class="fa fa-envelope-o"></i><span> Saran dan Masukan</span></a></li>
        <li><a href="<?php echo base_url('Alumni/Alumni/beritaTerbaru') ?>"><i class="fa fa-newspaper-o"></i><span> Informasi terbaru</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <fieldset>
    <?php if ((isset($module))AND ($module=='detaildiri')) {?>
    <section class="content-header">
      <h4>Detail data Diri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
        <li class="active">Detail diri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Detail informasi diri</h4>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Alumni/Alumni/UpdateDataSantri') ?>">
            <div class="form-group">
              <label class="control-label col-md-2">ID Anda</label>
              <div class="col-md-6">
                <input type="text" name="detailID" class="form-control" readonly value="<?php echo $dataku->id_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama Lengkap</label>
              <div class="col-md-8">
                <input type="text" name="detilNamaLengkap" class="form-control"  value="<?php echo $dataku->nama_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama panggilan</label>
              <div class="col-md-8">
                <input type="text" name="detilNamapanggilan" class="form-control"  value="<?php echo $dataku->nama_panggilan ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Kelahiran</label>
              <div class="col-md-8">
                <textarea class="form-control" name="detilKelahiran"  rows="6"><?php echo $dataku->tempat_lahir ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal lahir</label>
              <div class="col-md-8">
                <input type="date" name="detilTglLahir" class="form-control"  value="<?php echo $dataku->tanggal_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Jenis Kelamin</label>
              <div class="col-md-8">
                <?php if ($dataku->jenis_kelamin==1): ?>
                  <label class="radio-inline">
                  <input type="radio" name="detilgender" value="1" checked>Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="detilgender" value="0">Perempuan
                </label>
                <?php else: ?>
                  <label class="radio-inline">
                  <input type="radio" name="detilgender" value="1">Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="detilgender" value="0" checked>Perempuan
                </label>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-8">
                <textarea class="form-control" name="detilAlamat"  rows="6"><?php echo $dataku->alamat_santri ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor telepon</label>
              <div class="col-md-8">
                <input type="text" name="detiltelepon" class="form-control"  value="<?php echo $dataku->noTelpon_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Email </label>
              <div class="col-md-8">
                <input type="email" name="detilemail" class="form-control"  value="<?php echo $dataku->email_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Facebook</label>
              <div class="col-md-8">
                <input type="text" name="detilfacebook" class="form-control"  value="<?php echo $dataku->facebook_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun Masuk</label>
              <div class="col-md-8">
                <input type="date" name="detilmasuk" class="form-control"  value="<?php echo $dataku->tahun_masuk ?>">
              </div>
            </div>
            <div class="form-group">
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <button class="btn btn-danger btn-flat"><i class="fa fa-close"></i>&nbsp;Batal</button>
                <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-refresh"></i>&nbsp;Perbarui Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php unset($dataku); ?>
    <?php }else if((isset($module))AND ($module=='walisantri')){ ?>
    <section class="content-header">
      <h4>Data Wali</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
        <li class="active">Data Wali</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Data informasi Wali santri</h4>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Alumni/Alumni/UpdateDataWali') ?>">
            <div class="form-group">
              <label class="control-label col-md-2">Nama Ayah</label>
              <div class="col-md-8">
                <input type="hidden" name="idwali" class="form-control" readonly value="<?php echo $wali->id_santri ?>">
                <input type="text" name="waliAyah" class="form-control" value="<?php echo $wali->nama_ayah ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Pekerjaan Ayah</label>
              <div class="col-md-8">
                <input type="text" name="pkjAyah" class="form-control" value="<?php echo $wali->pekerjaan_ayah ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Ayah</label>
              <div class="col-md-8">
                <textarea class="form-control" name="almtAyah"  rows="6"><?php echo $wali->alamat_ayah ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor HP Ayah</label>
              <div class="col-md-8">
                <input type="text" name="hpAyah" class="form-control" value="<?php echo $wali->notelpon_ayah ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama Ibu</label>
              <div class="col-md-8">
                <input type="text" name="waliIbu" class="form-control" value="<?php echo $wali->nama_ibu ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Pekerjaan Ibu</label>
              <div class="col-md-8">
                <input type="text" name="pkjIbu" class="form-control" value="<?php echo $wali->pekerjaan_ibu ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Ibu</label>
              <div class="col-md-8">
                <textarea class="form-control" name="almtIbu"  rows="6"><?php echo $wali->alamat_ibu ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor HP Ibu</label>
              <div class="col-md-8">
                <input type="text" name="hpIbu" class="form-control" value="<?php echo $wali->notelpon_ibu ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <button class="btn btn-danger btn-flat"><i class="fa fa-close"></i>&nbsp;Batal</button>
                <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-refresh"></i>&nbsp;Update Data Wali</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php unset($wali); ?>
    <?php }else if ((isset($module))AND($module=='detailpendidikan')) {?>
    <section class="content-header">
      <h4>Detail Riwayat Pendidikan Santri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Detail riwayat Pendidikan</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4>Detail riwayat pendidikan</h4>
        </div>
        <div class="box-body">
          <form class="form-vertical" action="<?php echo base_url('Alumni/Alumni/UpdateEdukasi') ?>" method="POST">
            <div class="form-group">
            <h4>Riwayat sekolah dasar/madrasah ibtida'iyah</h4>
              <div class="row">
                <div class="col-md-6">
                <input type="hidden" name="idedukasi" value="<?php echo $dataku->id_santri ?>">
                <label>Nama Sekolah dasar : </label>
                  <input type="text" name="namasd" class="form-control" placeholder="nama sekolah dasar/ sederajat" value="<?php echo $dataku->nama_sd ?>">
                </div>
                <div class="col-md-6">
                <label>Tahun Kelulusan : </label>
                  <input type="date" name="lulussd" class="form-control" value="<?php echo $dataku->lulus_sd ?>">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                <label>Alamat Sekolah dasar : </label>
                  <textarea name="alamatsd" class="form-control" placeholder="alamat lengkap sekolah dasar/sederajad"><?php echo $dataku->alamat_sd ?></textarea>
                </div>
              </div>
            </div>
            <hr>
            <hr>
            <div class="form-group">
            <h4>Riwayat sekolah menengah pertama/madrasah tsanawiyah</h4>
              <div class="row">
                <div class="col-md-6">
                <label>Nama sekolah menengah pertama/sederajat : </label>
                  <input type="text" name="namasmp" class="form-control" placeholder="nama sekolah menengah pertama/ sederajat" value="<?php echo $dataku->nama_smp ?>">
                </div>
                <div class="col-md-6">
                <label>Tahun Kelulusan sekolah menengah Pertama : </label>
                  <input type="date" name="lulussmp" class="form-control"  value="<?php echo $dataku->lulus_smp ?>">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                <label>Alamat Sekolah Menengah Pertama : </label>
                  <textarea name="alamatsmp" class="form-control" placeholder="alamat lengkap sekolah menengah pertama/sederajad"><?php echo $dataku->alamat_smp ?></textarea>
                </div>
              </div>
            </div>
            <hr>
            <hr>
            <div class="form-group">
            <h4>Riwayat sekolah menengah akhir/madrasah aliyah</h4>
              <div class="row">
                <div class="col-md-6">
                <label>Nama sekolah menengah akhir : </label>
                  <input type="text" name="namasma" class="form-control" placeholder="nama sekolah menengah akhir/sederajat" value="<?php echo $dataku->nama_sma ?>">
                </div>
                <div class="col-md-6">
                <label>Tahun Kelulusan Sekolah menengah akhir : </label>
                  <input type="date" name="lulussma" class="form-control" value="<?php echo $dataku->lulus_sma ?>">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                <label>Alamat Sekolah menengah akhir : </label>
                  <textarea name="alamatsma" class="form-control" placeholder="alamat lengkap sekolah menengah akhir/sederajad"><?php echo $dataku->alamat_sma ?></textarea>
                </div>
              </div>
            </div>
            <hr>
            <hr>
            <div class="form-group">
            <h4>Riwayat Perguruan tinggi (Opsional)</h4>
              <div class="row">
                <div class="col-md-6">
                <label>Nama Perguruan tinggi : </label>
                  <input type="text" name="namapt" class="form-control" placeholder="nama perguruan tinggi" value="<?php echo $dataku->nama_pt ?>">
                </div>
                <div class="col-md-6">
                <label>Tahun Kelulusan : </label>
                  <input type="date" name="luluspt" class="form-control" value="<?php echo $dataku->tahun_wisuda ?>">
                </div>
              </div>
              <label>Jurusan Perkuliahan : </label>
              <input type="text" name="jurusanpt" class="form-control" placeholder="jurusan perguruan tinggi" value="<?php echo $dataku->jurusan_pt ?>">
              <hr>
              <div class="row">
                <div class="col-md-12">
                <label>Alamat Perguruan tinggi  : </label>
                  <textarea name="alamatpt" class="form-control" placeholder="alamat lengkap perguruan tinggi"><?php echo $dataku->alamat_pt ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <a href="<?php echo base_url('Alumni/Alumni') ?>" class="btn btn-danger btn-flat"><i class="fa fa-close"></i>&nbsp;Batal</a>
              <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-refresh"></i>&nbsp;Perbarui Data Riwayat Pendidikan</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php unset($dataku); ?>
    <?php }else if((isset($module))AND ($module=='saranmasukan')) {?>
    <section class="content-header">
      <h4>Kotak Saran Dan Masukan</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Saran dan Masukan</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Saran dan masukan</h3>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
          <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahSaran"><i class="fa fa-plus"></i>&nbsp;Tambah Saran</button>
          <h4>Saran anda</h4>
          <table class="table table-bordered table-striped table-hover" id="tabelSaran">
            <thead>
              <tr>
              <td>Pengirim</td>
              <td>Email Pengirim</td>
              <td>Subjek</td>
              <td>Konten</td>
              <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($saranmasuk as $rowsaran): ?>
                <?php if ($rowsaran['status']==0) {
                  $status='Belum ditanggapi';
                  $kelas ="label-warning";
                  $ikon ="fa fa-exclamation-circle";
                }else if ($rowsaran['status']==1) {
                  $status='Sudah ditanggapi';
                  $kelas ="label-success";
                  $ikon ="fa fa-check-circle-o";
                } ?>
                <tr>
                  <td><?php echo $rowsaran['nama_pengirim']; ?></td>
                  <td><?php echo $rowsaran['email_pengirim']; ?></td>
                  <td><?php echo $rowsaran['tentang']; ?></td>
                  <td><?php echo $rowsaran['konten_saran']; ?></td>
                  <td><label class="label <?php echo $kelas ?>"><i class="<?php echo $ikon ?>"></i>  <?php echo $status ?></label></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" role="dialog" id="tambahSaran">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Masukan saran anda</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url('Alumni/Alumni/TambahSaran') ?>" class="form-vertival">
              <div class="form-group">
              <label>Identitas Pengirim : </label>
                <div class="row">
                <div class="col-md-6">
                  <input type="text" name="namaPengirim" class="form-control" value="<?php echo $this->session->userdata('username') ?>" readonly>
                </div>
                <div class="col-md-6">
                  <input type="text" name="emailPengirim" class="form-control" value="<?php echo $this->session->userdata('email') ?>" readonly>
                </div>
              </div>
              </div>
              <div class="form-group">
                <label>Subjek Masukan dan Saran : </label>
                <input type="text" name="subjekMasukan" class="form-control" placeholder="Subjek masukan dan saran">
              </div>
              <div class="form-group">
                <label>Isi Saran : </label>
                <textarea class="form-control" name="isiSaran" rows="6"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>
    <?php unset($saranmasuk, $rowsaran); ?>
    <?php }else if((isset($module))AND($module=='beritaTerbaru')){ ?>
    <section class="content-header">
      <h4>Berita terbaru</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Berita Terbaru</li>
      </ol>
    </section>
    <section class="content">
      <?php foreach ($infoBerita as $dataInfo): ?>
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-newspaper-o"></i>
              <h3 class="box-title"><?php echo $dataInfo['judulInfo'] ?></h3>
            </div>
              <div class="box-body chat" id="chat-box">
              <div class="item">
                <img src="<?php echo base_url('landing/img/pondok.png') ?>" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $dataInfo['tanggalInput'] ?></small>
                    <?php echo $dataInfo['penulisInfo'] ?>
                  </a>
                  <?php echo $dataInfo['kontentInfo'] ?>
                </p>
              </div>
            </div>
            <div class="box-footer">
              <form method="POST" action="">
                <div class="input-group">
                <input class="form-control" placeholder="Tinggalkan Komentar">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-comment"></i></button>
                </div>
              </div>
              </form>
            </div>
          </div>
      <?php endforeach ?>
    </section>
    <?php }else{ ?>
    <section class="content-header">
      <h4>Beranda</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Alumni/Alumni') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
      </ol>
    </section>
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('landing/img/pondok.png') ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $dataku->nama_santri ?></h3>

              <p class="text-muted text-center"><?php echo $dataku->id_santri?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nomor Telepon</b> <a class="pull-right"><?php echo $dataku->noTelpon_santri ?></a>
                </li>
                <li class="list-group-item">
                  <b>Facebook</b> <a class="pull-right"><?php echo $dataku->facebook_santri ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $dataku->email_santri ?></a>
                </li>
              </ul>

              <a href="<?php echo base_url('Alumni/Alumni/DetilDiri') ?>" class="btn btn-primary btn-block"><b>Edit Data Diri</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi Umum</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-home margin-r-5"></i> Alamat lengkap</strong>

              <p class="text-muted">
                <?php echo $dataku->alamat_santri ?>
              </p>
              <hr>

              <strong><i class="fa fa-calendar margin-r-5"></i> Tempat Tanggal lahir</strong>

              <p class="text-muted"><?php echo $dataku->tempat_lahir ?>, <?php echo $dataku->tanggal_lahir ?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Wali Santri</a></li>
              <li><a href="#timeline" data-toggle="tab">Riwayat pendidikan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('landing/img/pondok.png') ?>" alt="user image">
                        <span class="username">
                          <h4>Nama Ayah : <?php echo $wali->nama_ayah ?></h4>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Pekerjaan : <?php echo $wali->pekerjaan_ayah ?><br>Nomor Telepon : <?php echo $wali->notelpon_ayah ?></span>
                  </div>
                  <!-- /.user-block -->
                  <h4>Alamat : </h4>
                  <p><?php echo $wali->alamat_ayah ?></p>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('landing/img/pondok.png') ?>" alt="User Image">
                        <span class="username">
                          <a href="#">Nama Ibu : <?php echo $wali->nama_ibu ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Pekerjaan : <?php echo $wali->pekerjaan_ibu ?><br>Nomor Telepon : <?php echo $wali->notelpon_ibu ?></span>
                  </div>
                  <!-- /.user-block -->
                  <h4>Alamat : </h4>
                  <p><?php echo $wali->alamat_ibu ?></p>

                  <a href="<?php echo base_url('Alumni/Alumni/WaliSantri') ?>" class="btn btn-success btn-block btn-sm">Lengkapi data wali</a>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Riwayat Pendidikan
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-graduation-cap bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Kelulusan :  <?php echo $edu->lulus_sd ?></span>

                      <h3 class="timeline-header"><a href="#">Nama Sekolah : <?php echo $edu->nama_sd ?></a></h3>

                      <div class="timeline-body">
                        <?php echo $edu->alamat_sd ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-graduation-cap bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Kelulusan :  <?php echo $edu->lulus_smp ?></span>

                      <h3 class="timeline-header"><a href="#">Nama Sekolah : <?php echo $edu->nama_smp ?></a></h3>

                      <div class="timeline-body">
                        <?php echo $edu->alamat_smp ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-graduation-cap bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Kelulusan :  <?php echo $edu->lulus_sma ?></span>

                      <h3 class="timeline-header"><a href="#">Nama Sekolah : <?php echo $edu->nama_sma ?></a></h3>

                      <div class="timeline-body">
                        <?php echo $edu->alamat_sma ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          Riwayat Perkuliahan (Opsional)
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-graduation-cap bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Kelulusan :  <?php echo $edu->tahun_wisuda ?></span>

                      <h3 class="timeline-header"><a href="#">Nama Universitas : <?php echo $edu->nama_pt ?> <br>Jurusan : <?php echo $edu->jurusan_pt ?></a></h3>

                      <div class="timeline-body">
                        <?php echo $edu->alamat_pt ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-pencil bg-gray"></i>
                    <div class="timeline-item">
                      <a href="<?php echo base_url('Alumni/Alumni/RiwayatPendidikan') ?>" class="btn btn-success btn-block">Lengkapi Riwayat Pendidikan</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <?php unset($dataku, $wali, $edu); ?>
    <?php } ?>
    <?php unset($module); ?>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/app.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $('#tabel_alumni').DataTable();
</script>
</body>
</html>
