<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaksi</title>
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
            <h1 class="m-0 text-dark">Tambah Stok Masuk</h1>
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
          <div class="form-group">
              <label>Tanggal</label>
              <input id="tanggal" type="text" class="form-control col-sm-6" placeholder="Tanggal" name="tanggal" disabled>
          </div>
          <div class="form-group">
              <label>Supplier</label>
              <select id="supplier" class="form-control select2 col-sm-6" onchange="getNama()"></select>
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <div class="form-inline">
                <select id="nama" class="form-control select2 col-sm-6" onchange="getNama()"></select>
                <span class="ml-3 text-muted" id="nama_produk"></span>
              </div>
              <small class="form-text text-muted" id="sisa"></small>
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input type="number" class="form-control col-sm-6" placeholder="Jumlah" id="jumlah" onkeyup="checkEmpty()">
            </div>
            <div class="form-group">
              <button id="tambah" class="btn btn-success" onclick="checkStok()" disabled>Tambah</button>
            </div>
          </div>
          <div class="col-sm-6 d-flex justify-content-end text-right nota">
            <div>
              <div class="mb-0">
                <b class="mr-2">Nota</b> <span id="nota"></span>
              </div>
              <span id="total" style="font-size: 80px; line-height: 1" class="text-danger">0</span>
            </div>
          </div>
        </div>
        </div>
        <div class="card-body">
        <b class="mr-2">Tanggal : </b> <span id="nota"></span>
          <table class="table w-100 table-bordered table-hover" id="transaksi">
            <thead>
              <tr>
                <th>Supplier</th>
                <th>Nama Barang</th>
                <th>Harga Beli</th>
                <th>Stok Ditambahkan</th>
                <th>Total</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="card-body">
              <button id="bayar" class="btn btn-success" data-toggle="modal" data-target="#modal" disabled>Simpan</button>
            </div>
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
<script>
  var produkGetNamaUrl = '<?php echo site_url('produk/get_nama') ?>';
  var produkGetStokUrl = '<?php echo site_url('produk/get_stok') ?>';
  var addUrl = '<?php echo site_url('transaksi/add') ?>';
  var getBarcodeUrl = '<?php echo site_url('produk/get_barcode') ?>';
  var pelangganSearchUrl = '<?php echo site_url('pelanggan/search') ?>';
  var cetakUrl = '<?php echo site_url('transaksi/cetak/') ?>';
</script>
<script src="<?php echo base_url('assets/js/unminify/transaksi.js') ?>"></script>
</body>
</html>
