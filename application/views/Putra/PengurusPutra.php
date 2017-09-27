<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Pengurus Putra | PP Sabilurrosyad</title>
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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/css/dataTables.bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/select2.min.css') ?>">
  <link rel="shortcut icon" href="<?php echo base_url() ?>landing/img/pondok.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('Putra/Putra') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>PSR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pengurus</b>Putra</span>
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
              <li class="header">Anda memiliki pemberitahuan</li>
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
                  <small><?php echo $this->session->userdata('email') ?></small>
                </p>
              </li>
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
        <li class="<?php echo $ac1;?>">
          <a href="<?php echo base_url('Putra/Putra') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="<?php echo $ac2;?>"><a href="<?php echo base_url('Putra/Putra/DataSantri') ?>"><i class="fa fa-users"></i><span> Data Santri</span></a></li>
        <li class="<?php echo $ac3;?>"><a href="<?php echo base_url('Putra/Putra/AnggotaKamar') ?>"><i class="fa fa-home"></i><span> Anggota Kamar</span></a></li>
        <li class="<?php echo $ac4;?>"><a href="<?php echo base_url('Putra/Putra/SaranMasukan') ?>"><i class="fa fa-envelope-o"></i><span> Saran & Masukan</span></a></li>
        <li class="header">LABELS</li>
        <li class="<?php echo $ac5;?>"><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Setting</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <fieldset>
    <?php if ((isset($module))AND($module=='datasantri')) {?>
    <section class="content-header">
      <h4>Santri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Data Santri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Santri</h3>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
        <div class="alert alert-danger" style="display: none;"></div>
          <a href="<?php echo base_url('Putra/Putra/SantriBaru') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>&nbsp;Tambah data santri</a>
          <table class="table table-hover table-striped table-bordered table-responsive" id="tabelsantriPutra">
            <thead>
              <tr>
                <td>Nama Lengkap</td>
                <td>Panggilan</td>
                <td>Alamat</td>
                <td>Nomor HP</td>
                <td>Nama Facebook</td>
                <td>Alamat Email</td>
                <td><i class="fa fa-cogs"></i></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($santriPutra as $rows): ?>
                <tr>
                  <td><?php echo $rows['nama_santri'] ?></td>
                  <td><?php echo $rows['nama_panggilan'] ?></td>
                  <td><?php echo $rows['alamat_santri'] ?></td>
                  <td><?php echo $rows['noTelpon_santri'] ?></td>
                  <td><?php echo $rows['facebook_santri'] ?></td>
                  <td><?php echo $rows['email_santri'] ?></td>
                  <td>
                    <a href="<?php echo base_url('Putra/Putra/EditDataSantri/'.$rows['id_santri']) ?>" class="btn btn-info btn-flat
                     btn-xs"><i class="fa fa-pencil"></i></a>
                     <a href="<?php echo base_url('Putra/Putra/HapusDataSantri/'.$rows['id_santri']) ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $rows['nama_santri'] ?>')" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <?php }else if((isset($module))AND($module=='santribaru')){ ?>
    <section class="content-header">
      <h4>Tambah Santri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Tambah Data Santri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Santri</h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Putra/Putra/TambahSantriBaru') ?>">
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="tambahNamaSantri" class="form-control" placeholder="Nama Lengkap">
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
                <input type="text" name="tambahKelahiran" class="form-control" placeholder="Kelahiran">
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
                <a href="<?php echo base_url('Putra/Putra/DataSantri') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php }else if ((isset($module))AND ($module=='editdatasantri')){ ?>
    <section class="content-header">
      <h4>Edit Data Santri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Edit Data santri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data santri</h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('Putra/Putra/UpdateSantri') ?>">
          <div class="form-group">
                <label class="control-label col-md-2">ID Alumni</label>
                <div class="col-md-6">
                  <input type="text" name="editIDSantri" class="form-control" value="<?php echo $detailsantri->id_santri ?>" readonly>
                </div>
              </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama lengkap</label>
              <div class="col-md-6">
                <input type="text" name="editNamaSantri" class="form-control" value="<?php echo $detailsantri->nama_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama Panggilan</label>
              <div class="col-md-6">
                <input type="text" name="editPanggilan" class="form-control" value="<?php echo $detailsantri->nama_panggilan ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tempat Lahir</label>
              <div class="col-md-6">
                <input type="text" name="editKelahiran" class="form-control" value="<?php echo $detailsantri->tempat_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tanggal Lahir</label>
              <div class="col-md-6">
                <input type="date" class="form-control"  name="editTglLahir" value="<?php echo $detailsantri->tanggal_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Jenis Kelamin</label>
              <div class="col-md-6">
                <?php if ($detailsantri->jenis_kelamin==1): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editGender" value="1" checked>&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editGender" value="0">&nbsp;Perempuan
                </label>
                <?php endif ?>
                <?php if ($detailsantri->jenis_kelamin==0): ?>
                  <label class="radio-inline">
                  <input type="radio" name="editGender" value="1">&nbsp;Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="editGender" value="0" checked>&nbsp;Perempuan
                </label>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Alamat Lengkap</label>
              <div class="col-md-6">
                <textarea name="editAlamat" class="form-control" rows="6" cols="4"><?php echo $detailsantri->alamat_santri ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nomor Telepon</label>
              <div class="col-md-6">
                <input type="text" name="editNoTelp" class="form-control" value="<?php echo $detailsantri->noTelpon_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-6">
                <input type="text" name="editEmail" class="form-control" value="<?php echo $detailsantri->email_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Facebook</label>
              <div class="col-md-6">
                <input type="text" name="editFacebook" class="form-control" value="<?php echo $detailsantri->facebook_santri ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Tahun masuk</label>
              <div class="col-md-6">
                <input type="date" name="editTahunMasuk" class="form-control" value="<?php echo $detailsantri->tahun_masuk ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <a href="<?php echo base_url('Putra/Putra/DataSantri') ?>" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</a>
                <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
              </div>
            </div>
            </form>
        </div>
      </div>
    </section>
    <?php unset($detailsantri); ?>
    <?php }else if ((isset($module))AND ($module=='personilkamar')){ ?>
    <section class="content-header">
      <h4>Anggota Kamar</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
        <li class="active">Anggota Kamar</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Anggota Kamar</h3>
        </div>
        <div class="box-body">
        <div class="alert alert-success" style="display: none;"></div>
          <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambahPersonil"><i class=" fa fa-plus"></i>&nbsp;Tambah Anggota Kamar</button>
          <table class="table table-bordered table-striped table-hover table-responsive" id="tabelPersonil">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama Kamar</td>
                <td>Nama Santri</td>
                <td>Keterangan</td>
                <td><i class="fa fa-cogs"></i></td>
              </tr>
            </thead>
            <tbody id="showPersonil">
              <?php foreach ($personilputra as $dataputra): ?>
                <tr>
                  <td><?php echo $dataputra['id_trans'] ?></td>
                  <td><?php echo $dataputra['nama_kamar'] ?></td>
                  <td><?php echo $dataputra['nama_santri'] ?></td>
                  <td><?php echo $dataputra['keterangan'] ?></td>
                  <td>
                  <input type="hidden" name="idKamar" value="<?php echo $dataputra['id_kamar'] ?>">
                    <a href="javascript:;" class="btn btn-info btn-flat btn-xs btnPersonil" data="<?php echo $dataputra['id_trans'] ?>"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('Putra/Putra/HapusPersonilKamar/'.$dataputra['id_trans']) ?>" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('apakah anda akan menghapus data <?php echo $dataputra['nama_santri'] ?> dari kamar <?php echo $dataputra['nama_kamar'] ?>')"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="tambahPersonil">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Tambahkan data anggota Kamar</h3>
          </div>
          <div class="modal-body">
            <form class="form-vertical" method="POST" action="<?php echo base_url('Putra/Putra/TambahPersonil') ?>">
              <div class="form-group">
                <label>Nama Kamar</label>
                <select class="form-control" name="listKamar">
                  <option>Pilih Nama Kamar : </option>
                  <?php foreach ($detailkamar as $lkamar): ?>
                    <option value="<?php echo $lkamar->id_kamar ?>"><?php echo $lkamar->nama_kamar ?>&nbsp;(<?php echo $lkamar->kuota_kamar ?>)</option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Santri : </label>
                <select class="form-control select2" name="nama_santri[]" multiple="" style="width: 100%;">
                  <?php foreach ($santriPutra as $lSantri): ?>
                    <option value="<?php echo $lSantri['id_santri'] ?>"><?php echo $lSantri['nama_santri'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
              <label>Keterangan Kamar : </label>
              <textarea name="keterangan" class="form-control" rows="6"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-save"></i>&nbsp;Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="editPersonil">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Edit data anggota Kamar</h3>
          </div>
          <div class="modal-body">
            <form class="form-vertical" method="POST" action="<?php echo base_url('Putra/Putra/UpdatePersonil') ?>">
              <div class="form-group">
                <label>Nama Kamar</label>
                <select class="form-control" name="editlistKamar">
                  <option>Pilih Nama Kamar : </option>
                  <?php foreach ($detailkamar as $lkamar): ?>
                    <option value="<?php echo $lkamar->id_kamar ?>"><?php echo $lkamar->nama_kamar ?>&nbsp;(<?php echo $lkamar->kuota_kamar ?>)</option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Santri : </label>
                <select class="form-control" name="editnama_santri">
                  <?php foreach ($santriPutra as $lSantri): ?>
                    <option value="<?php echo $lSantri['id_santri'] ?>"><?php echo $lSantri['nama_santri'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
              <label>Keterangan Kamar : </label>
              <textarea name="editketerangan" class="form-control" rows="6"></textarea>
              </div>
              <div class="form-group">
              <input type="hidden" name="idtransaksi">
                <button class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batal</button>
                <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-refresh"></i>&nbsp;Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php unset($dataputra, $personilputra, $detailkamar, $lkamar, $santriPutra, $lSantri); ?>
    <?php }else if((isset($module))AND ($module=='saranmasukan')){ ?>
    <section class="content-header">
      <h4>Kotak Saran Dan Masukan</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i>Beranda</a></li>
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
          <table class="table table-bordered table-striped table-hover table-responsive" id="tabelSaran">
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
                  $kelas="label-warning";
                  $ikon = "fa fa-exclamation-circle";
                }else if ($rowsaran['status']==1) {
                  $status='Sudah ditanggapi';
                  $kelas="label-success";
                  $ikon = "fa fa-check-circle";
                } ?>
                <tr>
                  <td><?php echo $rowsaran['nama_pengirim']; ?></td>
                  <td><?php echo $rowsaran['email_pengirim']; ?></td>
                  <td><?php echo $rowsaran['tentang']; ?></td>
                  <td><?php echo $rowsaran['konten_saran']; ?></td>
                  <td><label class="label <?php echo $kelas ?>"><i class="<?php echo $ikon ?>"></i> <?php echo $status ?></label></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="tambahSaran">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Masukan saran anda</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url('Putra/Putra/TambahSaran') ?>" class="form-vertival">
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
    <?php unset($rowsaran, $saranmasuk); ?>
    <?php }else{ ?>
    <section class="content-header">
      <h4>Beranda</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Putra/Putra') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
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
            <a href="<?php echo base_url('Putra/Putra/DataSantri') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Saran</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <a href="<?php echo base_url('Putra/Putra/SaranMasukan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="<?php echo base_url('Putra/Putra/AnggotaKamar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
    </section>
    <?php } ?>
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
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
<script type="text/javascript">
  $('#tabelsantriPutra').DataTable();
  $('#tabelPersonil').DataTable();
  $('#tabelSaran').DataTable();
  $('.select2').select2();
<?php if ($this->session->flashdata('sukses')): ?>
  $('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn();
<?php endif ?>
<?php if ($this->session->flashdata('gagal')): ?>
  $('.alert-danger').html('<?php echo $this->session->flashdata('gagal') ?>').fadeIn();
<?php endif ?>

$('#showPersonil').on('click','.btnPersonil',function(){
  var id = $(this).attr('data');
  // alert(id);
  $('#editPersonil').modal('show');
  $.ajax({
    type : 'ajax',
    method : 'get',
    url : '<?php echo base_url('Putra/Putra/EditPersonilKamar') ?>',
    data : {id : id},
    async : false,
    dataType : 'json',
    success: function(data) {
      $('select[name=editlistKamar]').val(data.id_kamar);
      $('select[name=editnama_santri]').val(data.id_santri);
      $('textarea[name=editketerangan]').val(data.keterangan);
      $('input[name=idtransaksi]').val(data.id_trans);
    },
    error : function(){
      alert('data tidak bisa ditampilkan');
    }
  });
  });
</script>
</body>
</html>
