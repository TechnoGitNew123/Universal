<!DOCTYPE html>
<html>
<?php
  $page = "service_report";
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
            <h1>SERVICE REPORT</h1>
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
                <h3 class="card-title">Add Service Report Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form role="form" action="<?php echo base_url(); ?>/Transaction/update_service" method="post">
                  <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>/Transaction/save_service" method="post">
              <?php } ?>
                <input type="hidden" name="complaint_id" value="<?php echo $complaint_id; ?>">
                <div class="card-body row"><div class="form-group col-md-6">
                  <input type="text" class="form-control form-control-sm" name="service_no" id="service_no" placeholder="Service Report No." readonly value="<?php if(isset($service_no)){ echo $service_no; } ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control form-control-sm" name="service_date" id="date2" data-target="#date2" data-toggle="datetimepicker" value="<?php if(isset($service_date)){ echo $service_date; } else{ echo date('d-m-Y'); }  ?>" placeholder="Service Report Date" required>
                </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_no" id="complaint_no" value="<?php if(isset($complaint_no)){ echo $complaint_no; } ?>" placeholder="Complaint No." readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_date" id="complaint_date" value="<?php if(isset($complaint_date)){ echo $complaint_date; } ?>" placeholder="Complaint Date" readonly>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control form-control-sm" name="party_id" id="party_id" value="<?php if(isset($party_id)){ echo $party_firm; } ?>" placeholder="Party Name" readonly>
                  </div>

                <?php
                if(isset($complaint_service)){
                    $val = explode('_',$complaint_service);
                    //$val[0]
                    $service = '';
                    foreach ($val as $val) {
                      if($val != '0'){
                        $service = $service.''.$val.', ';
                      }
                    }
                }
                ?>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_service" id="complaint_service" value="<?php if(isset($complaint_service)){ echo $service; } ?>" placeholder="Type of Service" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_reporting" id="complaint_reporting" value="<?php if(isset($complaint_reporting)){ echo $complaint_reporting; } ?>" placeholder="Reporting Type" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_person" id="complaint_person" value="<?php if(isset($complaint_person)){ echo $complaint_person; } ?>" placeholder="Contact Person Name" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="complaint_contact_no" id="complaint_contact_no" value="<?php if(isset($complaint_contact_no)){ echo $complaint_contact_no; } ?>" placeholder="Contact No." readonly>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control select2 form-control-sm" name="make_id" id="make_id">
                      <option selected="selected">Select Make</option>
                      <?php foreach ($make_list as $make_list1) { ?>
                        <option value="<?php echo $make_list1->make_id; ?>" <?php if(isset($make_id)){ if($make_list1->make_id == $make_id){ echo "selected"; } }  ?>><?php echo $make_list1->make_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control select2 form-control-sm" name="model_no" id="model_no">
                      <option selected="selected">Select Model No.</option>
                      <?php if(isset($model_no)){ ?>
                        <option selected value="<?php echo $model_no ?>" ><?php echo $product_model_no ?></option>
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
                      <option selected="selected">Open</option>
                      <option >Completed</option>
                      <?php if(isset($service_call_completion)){ ?>
                        <option selected="selected"><?php echo $service_call_completion; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="service_charges_fee" id="service_charges_fee" value="<?php if(isset($service_charges_fee)){ echo $service_charges_fee; } ?>" placeholder="charges Fee">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="" id="" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Service Engineer Name" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="" id="" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Service Engineer Contact" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="service_date" id="date1" value="<?php if(isset($service_date)){ echo $service_date; } else{ echo date('d-m-Y'); } ?>" data-target="#date1" data-toggle="datetimepicker" placeholder="Date">
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
                    <button type="submit" class="btn btn-primary">Update Service Report</button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success px-4">Add Service Report</button>
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
<script type="text/javascript">
  $('#make_id').change(function(){
    var make_id = $('#make_id').val();
    $.ajax({
	        url: '<?php echo base_url(); ?>Transaction/GetProduct',
	        type: "POST",
	        data: {"make_id":make_id},
	        success: function (result) {
	          $("#model_no").html(result);
	        }
      	});
  });
</script>
</body>
</html>
