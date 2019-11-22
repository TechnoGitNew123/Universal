<!DOCTYPE html>
<html>
<?php
  $page = "party_information";
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
            <h1>ENQUIRY INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Enquiry Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_enquiry" method="post">
                  <input type="hidden" name="party_id" value="<?php echo $party_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_enquiry" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="party_firm" id="party_firm" value="<?php if(isset($party_firm)){ echo $party_firm; } ?>" placeholder="Enter Name of Firm">
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" rows="3" name="party_address" id="party_address" placeholder="Enter Address"><?php if(isset($party_address)){ echo $party_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_area" id="party_area" value="<?php if(isset($party_area)){ echo $party_area; } ?>" placeholder="Enter Area/Village/Town">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_taluka" id="party_taluka" value="<?php if(isset($party_taluka)){ echo $party_taluka; } ?>" placeholder="Enter Taluka">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_district" id="party_district" value="<?php if(isset($party_district)){ echo $party_district; } ?>" placeholder="Enter District">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="party_pin" id="party_pin" value="<?php if(isset($party_pin)){ echo $party_pin; } ?>" placeholder="Enter Pincode">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="party_mob1" id="party_mob1" value="<?php if(isset($party_mob1)){ echo $party_mob1; } ?>" placeholder="Mobile No. 1">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="party_mob2" id="party_mob2" value="<?php if(isset($party_mob2)){ echo $party_mob2; } ?>" placeholder="Mobile No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="party_email" id="party_email" value="<?php if(isset($party_email)){ echo $party_email; } ?>" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_website" id="party_website" value="<?php if(isset($party_website)){ echo $party_website; } ?>" placeholder="Website">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_gst_no" id="party_gst_no" value="<?php if(isset($party_gst_no)){ echo $party_gst_no; } ?>" placeholder="GST No.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_pan_no" id="party_pan_no" value="<?php if(isset($party_pan_no)){ echo $party_pan_no; } ?>" placeholder="Pan No.">
                  </div>
                  <div class="form-group col-md-6">
                    <!-- <input type="text" class="form-control" name="" id="" > -->
                    <textarea class="form-control" name="party_requirment" id="party_requirment" rows="4" cols="55" placeholder="Requirment details"><?php if(isset($party_requirment)){ echo $party_requirment; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_business" id="party_business" value="<?php if(isset($party_business)){ echo $party_business; } ?>" placeholder="Nature Of Business">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="../dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
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
