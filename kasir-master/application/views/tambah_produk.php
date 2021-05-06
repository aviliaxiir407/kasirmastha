<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2/css/select2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') ?>">
  <?php $this->load->view('partials/head'); ?>
  <style>
    @media(max-width: 576px){
      .nota{
        justify-content: center !important;
        text-align: center !important;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view('includes/nav'); ?>

  <?php $this->load->view('includes/aside'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0 text-dark">Tambah Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
          <form action="<?php echo site_url('produk/add') ?>" method="post">
            <div class="form-group">
              <label> Nama </label>
              <input type="text" class="form-control col-sm-6" placeholder="Nama" id="nama" name="nama">
              <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label> Kategori </label>
              <select class="form-control" name="kategori" id="kategori">
                        <option value="">No Selected</option>
                        <?php foreach($kategori_produk as $k) : ?>
                            <option value="<?php echo $k->id_kategori;?>"> <?php echo $k->kategori; ?></option>
                        <?php endforeach; ?>
                </select>
              <?= form_error('kategori', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label> Supplier </label>
              <select class="form-control" name="supplier" id="supplier">
                        <option value="">No Selected</option>
                        <?php foreach($supplier as $k) : ?>
                            <option value="<?php echo $k->id_supplier;?>"> <?php echo $k->nama; ?></option>
                        <?php endforeach; ?>
                </select>
              <?= form_error('supplier', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label> Harga Beli </label>
              <input type="text" class="form-control col-sm-6" placeholder="Harga Beli" id="beli" name="beli">
              <?= form_error('beli', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label> Harga Jual </label>
              <input type="text" class="form-control col-sm-6" placeholder="Harga Jual" id="jual" name="jual">
              <?= form_error('jual', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label> Harga Reseller </label>
              <input type="text" class="form-control col-sm-6" placeholder="Harga Reseller" id="resell" name="resell">
              <?= form_error('resell', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
             <div class="form-group">
             <button class="btn btn-success" type="submit">Add</button>
            </div>
            </form>
          </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/select2/js/select2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/moment/moment.min.js') ?>"></script>
</body>
</html>