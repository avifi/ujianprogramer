<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/') ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
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

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/mahasiswa') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php echo base_url('index.php/mahasiswa') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">
            Tambah Data
          </button>
          Start creating your amazing application!
          <br>
          <br>
          <br>
          
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Agama</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>HP</th>
                <th>Asal Sekolah</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($mahasiswa->result_array() as $mhs): ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $mhs['nim']; ?></td>
                  <td><?php echo $mhs['nama']; ?></td>
                  <td>
                    <?php 
                    if ($mhs['gender'] == 'L') {
                      echo "Laki-laki";
                    }
                    if ($mhs['gender'] == 'P') {
                      echo "Perempuan";
                    } ?>
                  </td>
                  <td><?php echo $mhs['tempat_lahir'].', '.date('d-M-Y', strtotime($mhs['tgl_lahir'])); ?></td>
                  <td>
                    <?php 
                    if ($mhs['agama'] == 1) {
                       echo "Islam";
                    }
                    if ($mhs['agama'] == 2) {
                       echo "Kristen";
                    }
                    if ($mhs['agama'] == 3) {
                       echo "Hindu";
                    }
                    if ($mhs['agama'] == 4) {
                       echo "Budha";
                    }
                      ?>
                  </td>
                  <td>
                    <?php 
                    if ($mhs['prodi'] == 1) {
                       echo "Teknik Informatika";
                    }
                    if ($mhs['prodi'] == 2) {
                       echo "Teknik Sipil";
                    }
                    if ($mhs['prodi'] == 3) {
                       echo "Desain Produk";
                    }
                    if ($mhs['prodi'] == 4) {
                       echo "Sistem Informasi";
                    } ?>
                  </td>
                  <td><?php echo $mhs['email']; ?></td>
                  <td><?php echo $mhs['hp']; ?></td>
                  <td><?php echo $mhs['asal_sekolah']; ?></td>
                  <td><a href="#" data-toggle="modal" data-target="#modal-detail<?php echo $mhs['id_mhs']; ?>"><i class="fa fa-eye"></i></a></td>
                </tr>
                <div class="modal fade" id="modal-detail<?php echo $mhs['id_mhs']; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                      </div>
                      <div class="modal-body">
                      <?php echo form_open('mahasiswa/update/'.$mhs['id_mhs']); ?>
                        <div class="form-group">
                          <label>NIM</label>
                          <input type="text" required="required" name="nim" class="form-control" value="<?php echo $mhs['nim'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" required="required" name="nama" class="form-control" value="<?php echo $mhs['nama'] ?>">
                        </div>
                        <div class="form-group" id="kategori" >
                          <label>Jenis Kelamin</label>
                          <select class="form-control" id="hewan" name="gender">
                            <option value="L" <?php if ($mhs['gender'] == 'L') { echo 'selected="selected"'; } ?>>Laki-laki</option>
                            <option value="P" <?php if ($mhs['gender'] == 'P') { echo 'selected="selected"'; } ?>>Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" required="required" name="tempat_lahir" class="form-control" value="<?php echo $mhs['tempat_lahir'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" required="required" name="tgl_lahir" class="form-control" value="<?php echo $mhs['tgl_lahir'] ?>">
                        </div>
                        <div class="form-group" id="kategori" >
                          <label>Agama</label>
                          <select class="form-control" id="hewan" name="agama">
                            <option value="1" <?php if ($mhs['agama'] == 1) { echo 'selected="selected"'; } ?>>Islam</option>
                            <option value="2" <?php if ($mhs['agama'] == 2) { echo 'selected="selected"'; } ?>>Kristen</option>
                            <option value="3" <?php if ($mhs['agama'] == 3) { echo 'selected="selected"'; } ?>>Hindu</option>
                            <option value="4" <?php if ($mhs['agama'] == 4) { echo 'selected="selected"'; } ?>>Budha</option>
                          </select>
                        </div>
                        <div class="form-group" id="kategori" >
                          <label>Program Studi</label>
                          <select class="form-control" id="hewan" name="prodi">
                            <option value="1" <?php if ($mhs['prodi'] == 1) { echo 'selected="selected"'; } ?>>Teknik Informatika</option>
                            <option value="2" <?php if ($mhs['prodi'] == 2) { echo 'selected="selected"'; } ?>>Teknik Sipil</option>
                            <option value="3" <?php if ($mhs['prodi'] == 3) { echo 'selected="selected"'; } ?>>Desain Produk</option>
                            <option value="4" <?php if ($mhs['prodi'] == 4) { echo 'selected="selected"'; } ?>>Sistem Informasi</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" required="required" name="email" class="form-control" value="<?php echo $mhs['email'] ?>">
                        </div>
                        <div class="form-group">
                          <label>HP</label>
                          <input type="text" required="required" name="hp" class="form-control" value="<?php echo $mhs['hp'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Asal Sekolah</label>
                          <input type="text" required="required" name="asal_sekolah" class="form-control" value="<?php echo $mhs['asal_sekolah'] ?>">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="<?php echo base_url('index.php/mahasiswa/delete/'.$mhs['id_mhs']) ?>" class="btn btn-danger">Delete</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              <?php endforeach ?>
              
            </tbody>
          </table>

          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Mahasiswa</h4>
                </div>
                <div class="modal-body">
                <?php echo form_open('mahasiswa/insert'); ?>
                  <div class="form-group">
                    <label>NIM</label>
                    <input type="text" required="required" name="nim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" required="required" name="nama" class="form-control">
                  </div>
                  <div class="form-group" id="kategori" >
                    <label>Jenis Kelamin</label>
                    <select class="form-control" id="hewan" name="gender">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" required="required" name="tempat_lahir" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" required="required" name="tgl_lahir" class="form-control">
                  </div>
                  <div class="form-group" id="kategori" >
                    <label>Agama</label>
                    <select class="form-control" id="hewan" name="agama">
                      <option value="1">Islam</option>
                      <option value="2">Kristen</option>
                      <option value="3">Hindu</option>
                      <option value="4">Budha</option>
                    </select>
                  </div>
                  <div class="form-group" id="kategori" >
                    <label>Program Studi</label>
                    <select class="form-control" id="hewan" name="prodi">
                      <option value="1">Teknik Informatika</option>
                      <option value="2">Teknik Sipil</option>
                      <option value="3">Desain Produk</option>
                      <option value="4">Sistem Informasi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" required="required" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>HP</label>
                    <input type="text" required="required" name="hp" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" required="required" name="asal_sekolah" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/') ?>dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
