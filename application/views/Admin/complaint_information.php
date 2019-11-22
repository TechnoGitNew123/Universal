<!DOCTYPE html>
<html>
<?php
  $page = "complaint_information";
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
            <h1>COMPLAINT INFORMATION</h1>
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
                <h3 class="card-title">Add Complaint Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_complaint" method="post">
                  <input type="hidden" name="complaint_id" value="<?php echo $complaint_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_complaint" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_no" id="complaint_no" placeholder="Complaint No." readonly value="<?php if(isset($complaint_no)){ echo $complaint_no; } ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_date" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Complaint Date" required value="<?php if(isset($complaint_date)){ echo $complaint_date; } ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" name="party_id" id="party_id">
                      <option selected="selected" value="0">Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" name="complaint_reporting" id="complaint_reporting">
                      <?php if(isset($complaint_reporting)){
                        echo '<option selected="selected">'.$complaint_reporting.'</option>';
                      } else{
                        echo '<option selected="selected" value="0">Select Reporting</option>';
                      } ?>
                      <option>Call</option>
                      <option>Direct</option>
                      <option>Email</option>
                    </select>
                  </div>
                  <?php if(isset($complaint_service)){
                    $val = explode('_',$complaint_service);
                  } ?>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="new_installation" id="new_installation" value="New Installation" <?php if(isset($complaint_service) && $val[0] == 'New Installation'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">New Installation</span>
                  </div>

                  <div class="form-group col-md-4">
                    <input type="checkbox" name="rs" id="rs" value="R/S" <?php if(isset($complaint_service) && $val[1] == 'R/S'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">R/S</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="warranty" id="warranty" value="Warranty" <?php if(isset($complaint_service) && $val[2] == 'Warranty'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Warranty</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="call" id="call" value="Call" <?php if(isset($complaint_service) && $val[3] == 'Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Call</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="amc" id="amc" value="AMC" <?php if(isset($complaint_service) && $val[4] == 'AMC'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">AMC</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="charged_call" id="charged_call" value="Charged Call" <?php if(isset($complaint_service) && $val[5] == 'Charged Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Charged Call</span>
                  </div>

                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_person" id="complaint_person" value="<?php if(isset($complaint_person)){ echo $complaint_person; } ?>" placeholder="Contact Person.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_contact_no" id="complaint_contact_no" value="<?php if(isset($complaint_contact_no)){ echo $complaint_contact_no; } ?>" placeholder="Contact No.">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" name="complaint_engeeneer" id="complaint_engeeneer">
                      <option selected="selected" value="0">Select Engineer</option>
                      <?php foreach ($user_list as $user_list1) { ?>
                        <option value="<?php echo $user_list1->user_id; ?>" <?php if(isset($complaint_engeeneer)){ if($user_list1->user_id == $complaint_engeeneer){ echo "selected"; } }  ?>><?php echo $user_list1->user_name; ?></option>
                      <?php } ?>

                      <!-- <?php if(isset($complaint_engeeneer)){
                        echo '<option selected="selected">'.$complaint_engeeneer.'</option>';
                      } else{
                        echo '<option selected="selected" value="0">Select Engineer</option>';
                      } ?> -->
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success px-4">Add Complaint</button>
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
