<!DOCTYPE html>
<html>
<?php
$page = "stamping_quarter";
include('head.php');
?>
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
          <div class="col-sm-12 text-center mt-2">
            <h1>Stamping Quarter</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Stamping Quarter Information</h3>
              </div>
              <form role="form" method="post">
                <div class="card-body row">
                  <!-- <div class="form-group col-md-6">
                    <select class="form-control select2" name="from_month" id="from_month" data-placeholder="Select From Month" required>
                      <option value="">Select From Month</option>
                      <option <?php if(isset($from_month) && $from_month == 'January'){ echo 'selected'; } ?>>January</option>
                      <option <?php if(isset($from_month) && $from_month == 'February'){ echo 'selected'; } ?>>February</option>
                      <option <?php if(isset($from_month) && $from_month == 'March'){ echo 'selected'; } ?>>March</option>
                      <option <?php if(isset($from_month) && $from_month == 'April'){ echo 'selected'; } ?>>April</option>
                      <option <?php if(isset($from_month) && $from_month == 'May'){ echo 'selected'; } ?>>May</option>
                      <option <?php if(isset($from_month) && $from_month == 'June'){ echo 'selected'; } ?>>June</option>
                      <option <?php if(isset($from_month) && $from_month == 'July'){ echo 'selected'; } ?>>July</option>
                      <option <?php if(isset($from_month) && $from_month == 'August'){ echo 'selected'; } ?>>August</option>
                      <option <?php if(isset($from_month) && $from_month == 'September'){ echo 'selected'; } ?>>September</option>
                      <option <?php if(isset($from_month) && $from_month == 'October'){ echo 'selected'; } ?>>October</option>
                      <option <?php if(isset($from_month) && $from_month == 'November'){ echo 'selected'; } ?>>November</option>
                      <option <?php if(isset($from_month) && $from_month == 'December'){ echo 'selected'; } ?>>December</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="to_month" id="to_month" data-placeholder="Select To Month" required>
                      <option value="">Select To Month</option>
                      <option <?php if(isset($to_month) && $to_month == 'January'){ echo 'selected'; } ?>>January</option>
                      <option <?php if(isset($to_month) && $to_month == 'February'){ echo 'selected'; } ?>>February</option>
                      <option <?php if(isset($to_month) && $to_month == 'March'){ echo 'selected'; } ?>>March</option>
                      <option <?php if(isset($to_month) && $to_month == 'April'){ echo 'selected'; } ?>>April</option>
                      <option <?php if(isset($to_month) && $to_month == 'May'){ echo 'selected'; } ?>>May</option>
                      <option <?php if(isset($to_month) && $to_month == 'June'){ echo 'selected'; } ?>>June</option>
                      <option <?php if(isset($to_month) && $to_month == 'July'){ echo 'selected'; } ?>>July</option>
                      <option <?php if(isset($to_month) && $to_month == 'August'){ echo 'selected'; } ?>>August</option>
                      <option <?php if(isset($to_month) && $to_month == 'September'){ echo 'selected'; } ?>>September</option>
                      <option <?php if(isset($to_month) && $to_month == 'October'){ echo 'selected'; } ?>>October</option>
                      <option <?php if(isset($to_month) && $to_month == 'November'){ echo 'selected'; } ?>>November</option>
                      <option <?php if(isset($to_month) && $to_month == 'December'){ echo 'selected'; } ?>>December</option>
                    </select>
                  </div> -->
                  <div class="form-group col-md-12" required>
                    <input type="text" class="form-control form-control-sm" name="quarter_name" id="quarter_name" value="<?php if(isset($quarter_name)){ echo $quarter_name; } ?>" placeholder="Quarter Name" required>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="../Admin/dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
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
