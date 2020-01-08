<!DOCTYPE html>
<html>
<?php
$page = "party_list";
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
            <h4>PARTY INFORMATION</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> List Party Information</h3>
              <div class="card-tools">
                <a href="party_information" class="btn btn-sm btn-block btn-primary">Add Party</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Party No.</th>
                  <th>Nature of Business</th>
                  <th>Name of Firm</th>
                  <th>Name of Proprietor</th>
                  <th>Mobile No.</th>
                  <th>Area</th>
                  <th>District</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 0;
                    foreach ($party_list as $party_list1) {
                      $i++;
                      $trade_id = $party_list1->party_business;
                      $trade_details = $this->Admin_Model->get_info_array('trade_id', $trade_id, 'uni_trade');
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $party_list1->party_id; ?></td>
                    <td>
                      <?php echo $trade_details[0]['trade_name']; ?>
                    </td>
                    <td><?php echo $party_list1->party_firm; ?></td>
                    <td><?php echo $party_list1->party_proriter; ?></td>
                    <td><?php echo $party_list1->party_mob1; ?></td>
                    <td><?php echo $party_list1->party_area; ?></td>
                    <td><?php echo $party_list1->party_district; ?></td>
                    <td>
                      <a href="edit_party/<?php echo $party_list1->party_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a class="ml-4" href="delete_party/<?php echo $party_list1->party_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                <?php  } ?>
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
