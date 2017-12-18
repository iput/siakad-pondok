<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengajar | PP Sabilurrosyad</title>
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
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
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>landing/img/pondok.png" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
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
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="active treeview">
          <a href="<?php echo base_url('Pengajar/pengajar') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li><a href="<?php echo base_url('Pengajar/nilai') ?>"><i class="fa fa-pencil"></i><span> Penilaian akhir</span></a></li>
        <li class="header">SETTING</li>
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
      <?php if (isset($page)AND($page=='raport')) {?>
      <section class="content-header">
        <h2>Form Hasil Ujian  Akhir</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Pengajar/pengajar') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Penilaian akhir</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Data Santri</h4>
          </div>
          <div class="box-body">
            <div class="aler alert-success" style="display: none;"></div>
            <table class="table table-condensed table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Pelajaran</th>
                  <th>Kelas</th>
                  <th>nilai</th>
                  <th>Operasi</th>
                </tr>
              </thead>
              <tbody id="tabel_nilai">
              <?php $nomor=1; ?>
              <?php foreach ($nilai as $row): ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $row->nama_santri ?></td>
                  <td><?php echo $row->nama_pelajaran ?></td>
                  <td><?php echo $row->nama_kelas ?></td>
                  <td><?php echo $row->nilai ?></td>
                  <td>
                    <a href="javascript:;" class="btn btn-info btn-flat btn-xs btn_nilai" data="<?php echo $row->id_penilaian ?>"><i class="fa fa-pencil"></i> Tambah nilai</a>
                  </td>
                </tr>  
                <?php $nomor++; ?>
              <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <div class="modal fade" tabindex="-1" id="tambah_nilai">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title">Tambah Nilai</h4>
            </div>
            <div class="modal-body">
              <form class="form-vertical" method="post" action="<?php echo base_url('Pengajar/nilai/tambah_nilai') ?>">
                <div class="form-group">
                  <label>Nama Santri</label>
                  <div class="input-group">
                    <input type="text" name="santri" class="form-control" readonly>
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <div class="input-group">
                    <input type="text" name="nama_kelas" class="form-control" readonly="readonly">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <div class="input-group">
                    <input type="text" name="nama_pelajaran" class="form-control" readonly="readonly">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Jumlah Nilai</label>
                  <div class="input-group">
                    <input type="text" name="nilai" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="id_penilaian">
                  <button class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
                  <button class="btn btn-success btn-flat" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php }else{ ?>
      <section class="content-header">
        <h2>Beranda</h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Pengajar/pengajar') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        </ol>
      </section>
      <section class="content">
        
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
<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/app.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('#tabel_nilai').on('click','.btn_nilai', function() {
      var id = $(this).attr('data');
      $('#tambah_nilai').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        data : {id:id},
        url: '<?php echo base_url('Pengajar/nilai/edit_nilai') ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=santri]').val(data.id_santri);
          $('input[name=nama_pelajaran]').val(data.nama_pelajaran);
          $('input[name=nama_kelas]').val(data.nama_kelas);
          $('input[name=id_penilaian]').val(data.id_penilaian);
        },
        error: function() {
          alert('error');
        }
      });
    });
  });
</script>
</body>
</html>
