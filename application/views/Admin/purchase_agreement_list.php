<!DOCTYPE html>
<html>
<?php
$page = "purchase_agrement_list";
include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>PURCHASE AGREEMENT</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Purchase Agreement</h3>
              <!-- <div class="card-tools">
                <a href="<?php echo base_url(); ?>Transaction/purchase_agreement" class="btn btn-sm btn-block btn-primary">Add P O</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>P O No.</th>
                  <th>Date</th>
                  <th>Party Name</th>
                  <th>Invoice No.</th>
                  <th>Invoice Date</th>
                  <th>Basic Amount</th>
                  <th>Total Amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i=0;
                    foreach ($purchase_agrement_list as $list) {
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->purchase_order_no; ?></td>
                    <td><?php echo $list->purchase_date; ?></td>
                    <td><?php echo $list->party_firm; ?></td>
                    <td><?php echo $list->invoice_no; ?></td>
                    <td><?php echo $list->invoice_date; ?></td>
                    <td><?php echo $list->purchase_basic_price; ?></td>
                    <td><?php echo $list->purchase_total; ?></td>
                    <td>
                      <?php if($admin_roll_id == 1){ ?>
                      <a href="<?php echo base_url(); ?>Transaction/edit_purchase_agreement/<?php echo $list->purchase_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a class="ml-2" href="<?php echo base_url(); ?>Transaction/delete_purchase_agreement/<?php echo $list->purchase_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                      <?php } ?>
                      <a class="ml-2" href="<?php echo base_url(); ?>Receipt/purchase_agrement_receipt/<?php echo $list->purchase_id; ?>"> <i class="fa fa-print"></i> </a>
                    </td>
                  </tr>
                <?php  }  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>
</body>
</html>
