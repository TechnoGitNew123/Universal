<!DOCTYPE html>
<html>
<?php
$page = "complaint_list";
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
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>COMPLAINT INFORMATION</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> List Complaint Information</h3>
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>Transaction/complaint_information" class="btn btn-sm btn-block btn-primary">Add Complaint</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Complaint Date</th>
                  <th>Complaint No.</th>
                  <th>Party Name</th>
                  <th>Service Type</th>
                  <th>Reporting Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i=0;
                  foreach ($complaint_list as $complaint_list1) {
                  $i++;
                  $complaint_service = $complaint_list1->complaint_service;
                  $val = explode('_',$complaint_service);
                  //$val[0]
                  $service = '';
                  foreach ($val as $val) {
                    if($val != '0'){
                      $service = $service.''.$val.', ';
                    }
                  }
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $complaint_list1->complaint_date; ?></td>
                  <td><?php echo $complaint_list1->complaint_no; ?></td>
                  <td><?php echo $complaint_list1->party_firm; ?></td>
                  <td><?php echo $service; ?></td>
                  <td><?php echo $complaint_list1->complaint_reporting; ?></td>
                  <td style="width:100px;">
                    <?php if($admin_roll_id == 1){ ?>
                    <a href="edit_complaint/<?php echo $complaint_list1->complaint_id; ?>"> <i class="fa fa-edit"></i> </a>
                    <a class="ml-2" href="delete_complaint/<?php echo $complaint_list1->complaint_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                    <?php } ?>
                    <!-- <a class="ml-2" href="service_report/<?php echo $complaint_list1->complaint_id; ?>"> <i class="fa fa-plus"></i> </a> -->
                    <a class="ml-2" target="_blank" href="<?php echo base_url(); ?>Receipt/service_report_blank/<?php echo $complaint_list1->complaint_id; ?>" title="Blank Print"> <i class="fa fa-print"></i> </a>
                    <a class="ml-2" target="_blank" href="<?php echo base_url(); ?>Receipt/service_report/<?php echo $complaint_list1->complaint_id; ?>" title="Service Report Print"> <i class="fa fa-print"></i> </a>
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
