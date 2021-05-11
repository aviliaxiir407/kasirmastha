<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
  <?php $this->load->view('partials/head'); ?>
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
            <h1 class="m-0 text-dark">Supplier</h1>
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
          <a href="<?= base_url('supplier/add/'); ?>"><button class="btn btn-success">Add</button></a>
          </div>
          <div class="card-body">
            <table class="table w-100 table-bordered table-hover">
            <thead>
                  <tr>
                    <th>No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $no = 1; 
                   foreach ($supplier as $m) { ?>
                    <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['alamat']; ?></td>
                    <td><?= $m['telepon']; ?></td>
                    <td><?= $m['keterangan']; ?></td>
                    <td class="text-center"><a href="<?= base_url('supplier/edit/'); ?><?= $m['id_supplier']; ?>"><button type="submit"  class="btn btn-sm btn-primary" name="edit">Edit</button></a>
                    <a href="<?= base_url('supplier/delete/'); ?><?= $m['id_supplier']; ?>"><button type="submit"  class="btn btn-sm btn-primary" name="hapus">Hapus</button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>

<div class="modal fade" id="modal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Add Data</h5>
    <button class="close" data-dismiss="modal">
      <span>&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="form">
      <input type="hidden" name="id">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="number" class="form-control" placeholder="Telepon" name="telepon" required>
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control" placeholder="Keterangan" required></textarea>
      </div>
      <button class="btn btn-success" type="submit">Add</button>
      <button class="btn btn-danger" data-dismiss="modal">Close</button>
    </form>
  </div>
</div>
</div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
</body>
</html>
