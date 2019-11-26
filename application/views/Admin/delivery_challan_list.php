<!DOCTYPE html>
<html>
<?php
$page = "delivery_challan_list";
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
            <h4>DELIVERY CHALLAN</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> List Delivery Challan</h3>
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>Transaction/delivery_challan" class="btn btn-sm btn-block btn-primary">Add Delivery Challan</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Challan No.</th>
                  <th>Date</th>
                  <th>Party Name</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i=0;
                    foreach ($delivery_challan_list as $list) {
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->delivery_no; ?></td>
                    <td><?php echo $list->delivery_date; ?></td>
                    <td><?php echo $list->party_firm; ?></td>
                    <td><?php echo $list->delivery_total; ?></td>
                    <td style="width:200px;">
                      <a href="<?php echo base_url(); ?>Transaction/edit_delivery_challan/<?php echo $list->delivery_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a class="ml-2" href="<?php echo base_url(); ?>Transaction/delete_delivery_challan/<?php echo $list->delivery_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                      <a class="ml-2" href="<?php echo base_url(); ?>Receipt/delivery_challan_print/<?php echo $list->delivery_id; ?>"> <i class="fa fa-print"></i> </a>
                      <?php if($list->delivery_bill_status == 'no'){ ?>
                      <a class="btn btn-primary btn-sm ml-2" href="<?php echo base_url(); ?>Transaction/sale_bill/<?php echo $list->delivery_id; ?>">Convert To Sale </a>
                    <?php } ?>
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
