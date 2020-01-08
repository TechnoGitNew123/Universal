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
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_complaint" method="post" autocomplete="off">
                  <input type="hidden" name="complaint_id" value="<?php echo $complaint_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_complaint" method="post"  autocomplete="off">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_no" id="complaint_no" placeholder="Complaint No." readonly value="<?php if(isset($complaint_no)){ echo $complaint_no; } ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_date" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Complaint Date" required value="<?php if(isset($complaint_date)){ echo $complaint_date; } else{ echo date('d-m-Y'); } ?>">
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

                  <div class="form-group col-md-3">
                    <input type="checkbox" name="new_installation" id="new_installation" value="New Installation" <?php if(isset($complaint_service) && $val[0] == 'New Installation'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">New Installation</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="weighting" id="weighting" value="Weighting Scale Rep. Call" <?php if(isset($complaint_service) && $val[1] == 'Weighting Scale Rep. Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Weighting Scale Rep. Call</span>
                  </div>
                  <div class="form-group col-md-2">
                    <input type="checkbox" name="warranty" id="warranty" value="Warranty" <?php if(isset($complaint_service) && $val[2] == 'Warranty'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Warranty</span>
                  </div>
                  <div class="form-group col-md-3">
                    <input type="checkbox" name="indoor" id="indoor" value="Indoor Call" <?php if(isset($complaint_service) && $val[3] == 'Indoor Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Indoor Call</span>
                  </div>
                  <div class="form-group col-md-3">
                    <input type="checkbox" name="outdoor" id="outdoor" value="Outdoor Call" <?php if(isset($complaint_service) && $val[4] == 'Outdoor Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Outdoor Call</span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="checkbox" name="godrej" id="godrej" value="Godrej Repairy Call" <?php if(isset($complaint_service) && $val[5] == 'Godrej Repairy Call'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">Godrej Repairy Call</span>
                  </div>
                  <div class="form-group col-md-2">
                    <input type="checkbox" name="amc" id="amc" value="AMC" <?php if(isset($complaint_service) && $val[6] == 'AMC'){ echo 'checked'; } ?>>
                    <span class="chk-lbl">AMC</span>
                  </div>
                  <div class="form-group col-md-3">
                    <input type="checkbox" name="charged_call" id="charged_call" value="Charged Call" <?php if(isset($complaint_service) && $val[7] == 'Charged Call'){ echo 'checked'; } ?>>
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
                    </select>
                  </div>




                    <div class="form-group col-md-6">
                      <select class="form-control select2 form-control-sm" name="make_id" id="make_id">
                        <option selected="selected">Select Make</option>
                        <?php foreach ($make_list as $make_list1) { ?>
                          <option value="<?php echo $make_list1->make_id; ?>" <?php if(isset($make_id)){ if($make_list1->make_id == $make_id){ echo "selected"; } }  ?>><?php echo $make_list1->make_name; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <select class="form-control select2 form-control-sm" name="model_no" id="model_no">
                        <option selected="selected">Select Model No.</option>
                        <?php foreach ($product_list as $product_list1) { ?>
                          <option value="<?php echo $product_list1->product_id; ?>" <?php if(isset($model_no)){ if($product_list1->product_id == $model_no){ echo "selected"; } }  ?>><?php echo $product_list1->product_model_no; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <!-- <?php if(isset($service_sr_no)){ echo $service_sr_no; } ?> -->
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="service_sr_no" id="service_sr_no" value="<?php if(isset($service_sr_no)){ echo $service_sr_no; } ?>" placeholder="Sr. No.">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="service_range" id="service_range" value="<?php if(isset($service_range)){ echo $service_range; } ?>" placeholder="Cap / Range">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="service_stamping" id="service_stamping" value="<?php if(isset($service_stamping)){ echo $service_stamping; } ?>" placeholder="Stamping / Other Details">
                    </div>
                    <div class="form-group col-md-6">
                      <textarea class="form-control form-control-sm"  name="service_observation" id="service_observation" rows="3" cols="" placeholder="Actual Observation"><?php if(isset($service_observation)){ echo $service_observation; } ?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <textarea class="form-control form-control-sm"  name="service_recommend" id="service_recommend" rows="3" cols="" placeholder="Details of Action Taken & Recommendation"><?php if(isset($service_recommend)){ echo $service_recommend; } ?></textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <textarea class="form-control form-control-sm"  name="service_component" id="service_component" rows="3" cols="" placeholder="Component Replaced"><?php if(isset($service_component)){ echo $service_component; } ?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <select class="form-control select2 form-control-sm" name="service_call_completion" id="service_call_completion">
                        <option <?php if(isset($service_call_completion) && $service_call_completion == 'Open'){ echo 'selected'; }?>>Open</option>
                        <option <?php if(isset($service_call_completion) && $service_call_completion == 'Completed'){ echo 'selected'; }?>>Completed</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="service_charges_fee" id="service_charges_fee" value="<?php if(isset($service_charges_fee)){ echo $service_charges_fee; } ?>" placeholder="charges Fee">
                    </div>
                    <!-- <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="" id="" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Service Engineer Name" readonly>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="" id="" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Service Engineer Contact" readonly>
                    </div> -->
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="service_date" id="date2" value="<?php if(isset($service_date)){ echo $service_date; } else{ echo date('d-m-Y'); } ?>" data-target="#date2" data-toggle="datetimepicker" placeholder="Date">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="text" class="form-control form-control-sm" name="service_time_in" id="time1" data-target="#time1" data-toggle="datetimepicker" value="<?php if(isset($service_time_in)){ echo $service_time_in; } ?>" placeholder="Time In">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="text" class="form-control form-control-sm" name="service_time_out" id="time2" data-target="#time2" data-toggle="datetimepicker" value="<?php if(isset($service_time_out)){ echo $service_time_out; } ?>" placeholder="Time Out">
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
