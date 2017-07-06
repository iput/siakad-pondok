<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Santri | PP Sabilurrosyad</title>
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>San</b>tri</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Santri</b>Gasek</span>
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
                  <small><?php echo $this->session->userdata('email') ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('C_Login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
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
          <a href="<?php echo base_url('Santri/Santri') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li><a href="<?php echo base_url('Santri/Santri/DetilDiri') ?>"><i class="fa fa-leaf"></i>&nbsp;Data Diri</a></li>
        <li><a href="<?php echo base_url('Santri/Santri/WaliSantri') ?>"><i class="fa fa-users"></i>&nbsp;Data Wali</a></li>
        <li><a href="<?php echo base_url('Santri/Santri/riwayatPendidikan') ?>"><i class="fa fa-users"></i>&nbsp;Riwayat Pendidikan</a></li>
        <li><a href="<?php echo base_url('Santri/Santri/kotakSaran') ?>"><i class="fa fa-users"></i>&nbsp;Kotak Saran</a></li>
        <li class="header">LAIN-LAIN</li>
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
    <?php if ((isset($module))AND ($module=='detaildiri')) {?>
    <section class="content-header">
      <h4>Detail data Diri</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Santri/Santri') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
        <li class="active">Detail diri</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Detail informasi diri</h4>
        </div>
        <div class="box-body">
          <button class="btn btn-primary btn-flat" id="btnEdit" onclick="ubahdata()"><i class="fa fa-pencil"></i>&nbsp;Edit Data diri</button>
          <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
              <label class="control-label col-md-2">ID Anda</label>
              <div class="col-md-6">
                <input type="text" name="detailID" class="form-control" readonly="true" value="<?php echo $dataku->id_santri ?>">
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
                <input type="date" name="detilNamapanggilan" class="form-control"  value="<?php echo $dataku->tanggal_lahir ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Jenis Kelamin</label>
              <div class="col-md-8">
                <label class="radio-inline">
                  <input type="radio" name="detilgender" value="1">Laki-laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="detilgender" value="0">Perempuan
                </label>
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
              <label class="control-label col-md-2">Tahun Boyong</label>
              <div class="col-md-8">
                <input type="date" name="detilboyong" class="form-control"  value="<?php echo $dataku->tahun_boyong ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Password</label>
              <div class="col-md-8">
                <input type="text" name="detilpassword" class="form-control"  value="<?php echo base64_decode($dataku->password_santri) ?>">
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
    <?php }else if((isset($module))AND ($module=='walisantri')){ ?>
    <section class="content-header">
      <h4>Data Wali</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Santri/Santri') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
        <li class="active">Data Wali</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Data informasi Wali santri</h4>
        </div>
        <div class="box-body">
          <button class="btn btn-primary btn-flat" id="btnEditWali"><i class="fa fa-pencil"></i>&nbsp;Edit Data Wali</button>
          <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
              <label class="control-label col-md-2">ID Wali</label>
              <div class="col-md-8">
                <input type="text" name="idwali" class="form-control" readonly value="<?php echo $wali->id_wali ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">Nama Ayah</label>
              <div class="col-md-8">
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
                <textarea class="form-control" name="almtAyah"  rows="6"><?php echo $wali->pekerjaan_ayah ?></textarea>
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
                <textarea class="form-control" name="almtIbu"  rows="6"><?php echo $wali->pekerjaan_ibu ?></textarea>
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
    
    <?php }else{ ?>
    <section class="content-header">
      <h4>Beranda</h4>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Santri/Santri') ?>"><i class="fa fa-dashboard"></i>&nbsp;Beranda</a></li>
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

              <a href="#" class="btn btn-primary btn-block"><b>Edit Data Diri</b></a>
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

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-success btn-block btn-sm">Lengkapi Data Wali</button>
                      </div>
                    </div>
                  </form>
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
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="<?php echo base_url('landing/img/pondok.png') ?>" alt="..." class="margin" style="width: 100px;height: 100px;">
                        <img src="<?php echo base_url('landing/img/pondok.png') ?>" alt="..." class="margin" style="width: 100px;height: 100px;">
                        <img src="<?php echo base_url('landing/img/pondok.png') ?>" alt="..." class="margin" style="width: 100px;height: 100px;">
                        <img src="<?php echo base_url('landing/img/pondok.png') ?>" alt="..." class="margin" style="width: 100px;height: 100px;">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
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
    <?php } ?>
    </fieldset>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://ponpesgasek.com">Gasek Multimedia Studio</a>.</strong> Barokah
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

  $('#datepicker').datepicker({
      autoclose: true
    });
</script>
<script type="text/javascript">
  $(function() {
    function ubahdata() {
      $('#idsantri').attr('readonly',false);
    }
  });
</script>
</body>
</html>
