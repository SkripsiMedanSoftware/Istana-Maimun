<!--Counter Inbox-->
<?php
    error_reporting(0);
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Istana Maimun | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo-yayasan.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js' ?>"></script>
  

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!--Header-->
  <?php
    $this->load->view('admin/v_header');
  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li>
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-archive"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
        <a href="<?php echo base_url().'admin/status'?>">
            <i class="fa fa-home"></i> <span>Status Beranda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/adminS'?>">
            <i class="fa fa-user"></i> <span>Admin</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <li class="active">
          <a href="<?php echo base_url().'admin/page'?>">
            <i class="fa fa-file-text-o"></i> <span>Halaman</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/tiket'?>">
            <i class="fa fa-ticket"></i> <span>Tiket</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>

        

         <li>
          <a href="<?php echo base_url().'admin/login/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
<div class="box">
  <div class="box-body" style="overflow-x: scroll;">
    <table class="table table-hover table-striped">
      <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Konten</th>
        <th>Opsi</th>
      </thead>
      <tbody>
        <?php 
          $i = 1;
          foreach ($page as $value) :
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $value['judul'] ?></td>
            <td><?php echo $value['konten'] ?></td>
            <td>
              <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit<?php echo $value['id'] ?>">edit</a>
            </td>
          </tr>
<div class="modal fade" id="modal-edit<?php echo $value['id'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sunting Halaman</h4>
      </div>
      <form method="post" action="<?php echo base_url('admin/page/'.$value['id']) ?>">
        <div class="modal-body">
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" placeholder="Judul" value="<?php echo $value['judul'] ?>">
          </div>
          <div class="form-group">
            <label>Konten</label>
            <textarea id="content<?php echo $value['id'];?>"><?php echo $value['konten'] ?></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
  function nl2br (str, is_xhtml) {
      if (typeof str === 'undefined' || str === null) {
          return '';
      }
      var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
      return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
  }
$(document).ready(function(){
  CKEDITOR.replace( 'content<?php echo $value['id']?>' );
   CKEDITOR.instances.content<?php echo $value['id']?>.on('change', function(e) {
      var self = this;

      setTimeout(function() {
          $('#show-text').html(nl2br(self.getData()));
      }, 10);
  });
})
</script>
        <?php 
        $i++;
        endforeach; 
        ?>
      </tbody>
    </table>
  </div>
  <div class="box-footer">
    <a class="btn btn-success" href="<?php echo base_url('admin/page') ?>">Tambah Halaman</a>
  </div>
</div>
</section>


</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://mhaviz.com">M Haviz Hasibuan</a>.</strong> All rights reserved.
  </footer>


</div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>


</body>
</html>
