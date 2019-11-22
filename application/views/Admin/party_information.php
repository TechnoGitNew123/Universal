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
            <h1>PARTY INFORMATION</h1>
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
                <h3 class="card-title">Party Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form id="form_action" role="form" action="../update_party" method="post">
                  <input type="hidden" name="party_id" value="<?php echo $party_id; ?>">
              <?php } else{ ?>
                <form id="form_action" role="form" action="save_party" method="post">
              <?php } ?>

                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="party_firm" id="party_firm" value="<?php if(isset($party_firm)){ echo $party_firm;} ?>" placeholder="Enter Name of Firm" required>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control required" rows="3" name="party_address" id="party_address" placeholder="Enter Address" required><?php if(isset($party_address)){ echo $party_address;} ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required" name="party_area" id="party_area" value="<?php if(isset($party_area)){ echo $party_area;} ?>" placeholder="Enter Area/Village/Town" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_taluka" id="party_taluka" value="<?php if(isset($party_taluka)){ echo $party_taluka;} ?>" placeholder="Enter Taluka">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="party_district" id="party_district" value="<?php if(isset($party_district)){ echo $party_district;} ?>" placeholder="Enter District">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="number" class="form-control required pin-code" name="party_pin" id="party_pin" value="<?php if(isset($party_pin)){ echo $party_pin;} ?>" placeholder="Enter Pincode" required>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="number" class="form-control" name="party_state" id="party_state" value="<?php if(isset($party_state)){ echo $party_state;} ?>" placeholder="Enter State Code" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control required mobile" name="party_mob1" id="party_mob1" value="<?php if(isset($party_mob1)){ echo $party_mob1;} ?>" placeholder="Mobile No. 1" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control mobile" name="party_mob2" id="party_mob2" value="<?php if(isset($party_mob2)){ echo $party_mob2;} ?>" placeholder="Mobile No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control email" name="party_email" id="party_email" value="<?php if(isset($party_email)){ echo $party_email;} ?>" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_website" id="party_website" value="<?php if(isset($party_website)){ echo $party_website;} ?>" placeholder="Website">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_gst_no" id="party_gst_no" value="<?php if(isset($party_gst_no)){ echo $party_gst_no;} ?>" placeholder="GST No.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_pan_no" id="party_pan_no" value="<?php if(isset($party_pan_no)){ echo $party_pan_no;} ?>" placeholder="Pan No.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="party_proriter" id="party_proriter" value="<?php if(isset($party_proriter)){ echo $party_proriter;} ?>" placeholder="Name Of Propriter">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required" name="party_business" id="party_business" value="<?php if(isset($party_business)){ echo $party_business;} ?>" placeholder="Nature Of Business">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="button" class="btn btn-primary">Update Party</button>
                  <?php } else{ ?>
                    <button id="btn_save" type="button" class="btn btn-success">Create Party</button>
                  <?php } ?>

                  <button type="submit" class="btn btn-default ml-4">Cancel</button>
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
<script type="text/javascript">
<?php if($this->session->flashdata('check_mobile')){ ?>
  $(document).ready(function(){
    toastr.error('Mobile Number Exist.');
  });
<?php } ?>

  // Update Click...
  $('#btn_update, #btn_save').on('click',function(){
    $('.required').each(function(){
       var val = $(this).val();
       if(val == '' || val == '0'){
         $(this).addClass('required-input');
       }
       else{
         $(this).removeClass('required-input');
       }
    });
    if ($(".required-input")[0] || $(".invalide-input")[0]){
      // Dont Submit...
    } else {
        $('#form_action').submit();
    }
  });
</script>
</body>
</html>
