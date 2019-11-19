<!DOCTYPE html>
<html>
<?php
$page = "govt_stamping_bill";
include('head.php');
?>
<style>
  .tbl_add td{
    padding:2px 10px !important;
  }
  .tbl_add th, .tbl_add td { min-width:200px; }
  .sr_no, .td_btn{
    min-width:50px !important;
  }
  .tbl_add .td_w{
    min-width:100px !important;
  }
  html, body{
    overflow-x: hidden;
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
          <div class="col-sm-12 mt-1 text-center">
            <h4>GOVT STAMPING CHALLAN</h4>
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
            <!-- /.card-header -->
            <div class="card-body" >
              <?php if(isset($update)){ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_govt_stamp" method="post">
                  <input type="hidden" name="govt_stamp_id" value="<?php echo $govt_stamp_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_govt_stamp" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="govt_stamp_no" id="govt_stamp_no" value="<?php if(isset($govt_stamp_no)){ echo $govt_stamp_no; } ?>" placeholder="Stamping Challan No." readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="govt_stamp_date" value="<?php if(isset($govt_stamp_date)){ echo $govt_stamp_date; } ?>" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Stamping Challan Date" required>
                  </div>
                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="govt_stamp_party" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                      <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($govt_stamp_party)){ if($party_list1->party_id == $govt_stamp_party){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <a href="accessories_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div>

                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="govt_stamp_division" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Division / Camp</option>
                      <?php foreach ($division_list as $division_list1) { ?>
                      <option value="<?php echo $division_list1->division_id; ?>" <?php if(isset($govt_stamp_division)){ if($division_list1->division_id == $govt_stamp_division){ echo "selected"; } }  ?>><?php echo $division_list1->division_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <!-- <div class="form-group col-md-2">
                  </div> -->
                </div>
              <div class=" w-100 text-right">
                <button type="button" id="add_row" class="btn btn-sm btn-primary mb-3 mr-1" width="150px">Add Row</button>
              </div>

              <div class="" style="overflow-x:auto;">
                <table id="myTable" class="table table-bordered table-striped tbl_add" style="">
                  <thead>
                  <tr>
                    <th class="sr_no">Sr. No.</th>
                    <th>Make</th>
                    <th>Model No.</th>
                    <th>Machine Serial no.</th>
                    <th>Capacity</th>
                    <th>Min</th>
                    <th>Accuracy</th>
                    <th>Class</th>
                    <th>LCR No.</th>
                    <th>LCR Date</th>
                    <th class="td_w">Govt Fees</th>
                    <th class="td_w">Service Charges</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(isset($govt_stamp_trans_data)){
                    $i = 0;
                    $j = 0;
                    foreach ($govt_stamp_trans_data as $trans_data) {
                    $j++;  ?>
                    <input type="hidden" name="input[<?php echo $i; ?>][govt_stamp_trans_id]" value="<?php echo $trans_data->govt_stamp_trans_id ?>">
                    <tr>
                      <td class="sr_no"><?php echo $j; ?></td>
                      <td>
                        <select class="form-control form-control-sm make_id" name="input[<?php echo $i; ?>][make_id]" required>
                          <option value="">Select Make</option>
                          <?php foreach ($make_list as $make_list1) { ?>
                          <option value="<?php echo $make_list1->make_id; ?>" <?php if(isset($trans_data->make_id)){ if($make_list1->make_id == $trans_data->make_id){ echo "selected"; } }  ?>><?php echo $make_list1->make_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][model_no_id]" value="<?php echo $trans_data->model_no_id ?>" placeholder="" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" placeholder="">
                      </td>
                      <td>
                        <select class="form-control form-control-sm"  name="input[<?php echo $i; ?>][capacity_id]" required>
                          <option value="">Select Capacity</option>
                          <?php foreach ($capacity_list as $capacity_list1) { ?>
                          <option value="<?php echo $capacity_list1->capacity_id; ?>" <?php if(isset($trans_data->capacity_id)){ if($capacity_list1->capacity_id == $trans_data->capacity_id){ echo "selected"; } }  ?>><?php echo $capacity_list1->capacity_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control form-control-sm"  name="input[<?php echo $i; ?>][min_id]" required>
                          <option value="">Select Min</option>
                          <?php foreach ($min_list as $min_list1) { ?>
                            <option value="<?php echo $min_list1->min_id; ?>" <?php if(isset($trans_data->min_id)){ if($min_list1->min_id == $trans_data->min_id){ echo "selected"; } }  ?>><?php echo $min_list1->min_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control form-control-sm"  name="input[<?php echo $i; ?>][accuracy_id]" required>
                          <option value="">Select Accuracy</option>
                          <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                            <option value="<?php echo $accuracy_list1->accuracy_id; ?>" <?php if(isset($trans_data->accuracy_id)){ if($accuracy_list1->accuracy_id == $trans_data->accuracy_id){ echo "selected"; } }  ?>><?php echo $accuracy_list1->accuracy_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control form-control-sm" name="input[<?php echo $i; ?>][class_id]" required>
                          <option value="">Select Class</option>
                          <?php foreach ($class_list as $class_list1) { ?>
                            <option value="<?php echo $class_list1->class_id; ?>" <?php if(isset($trans_data->class_id)){ if($class_list1->class_id == $trans_data->class_id){ echo "selected"; } }  ?>><?php echo $class_list1->class_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][lcr_no]" value="<?php echo $trans_data->lcr_no ?>" placeholder="" required>
                      </td>
                      <td class="td_w">
                        <input type="date" class="form-control form-control-sm" name="input[<?php echo $i; ?>][lcr_date]" value="<?php echo $trans_data->lcr_date ?>" placeholder="dd/mm/yy" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][govt_fees]" value="<?php echo $trans_data->govt_fees ?>" placeholder="" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][ser_charge]" value="<?php echo $trans_data->ser_charge ?>" placeholder="" required>
                      </td>
                      <td class="td_btn"><?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger"></i></a> <?php } ?></td>
                    </tr>

                  <?php $i++;  }  } else{ ?>
                  <tr>
                    <td class="sr_no">1</td>
                    <td>
                      <select class="form-control form-control-sm" name="input[0][make_id]" required>
                        <option value="">Select Make</option>
                        <?php foreach ($make_list as $make_list1) { ?>
                          <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <input type="text" class="form-control form-control-sm" name="input[0][model_no_id]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][machine_serial_no]" id="" placeholder="">
                    </td>
                    <td>
                      <select class="form-control form-control-sm"  name="input[0][capacity_id]" required>
                        <option value="">Select Capacity</option>
                        <?php foreach ($capacity_list as $capacity_list1) { ?>
                          <option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm"  name="input[0][min_id]" required>
                        <option value="">Select Min</option>
                        <?php foreach ($min_list as $min_list1) { ?>
                          <option value="<?php echo $min_list1->min_id; ?>"><?php echo $min_list1->min_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm"  name="input[0][accuracy_id]" required>
                        <option value="">Select Accuracy</option>
                        <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                          <option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm" name="input[0][class_id]" required>
                        <option value="">Select Class</option>
                        <?php foreach ($class_list as $class_list1) { ?>
                          <option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][lcr_no]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="date" class="form-control form-control-sm" name="input[0][lcr_date]" id="" placeholder="dd/mm/yy" required>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][govt_fees]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][ser_charge]" id="" placeholder="" required>
                    </td>
                    <td class="td_btn"></td>
                  </tr>
                  <?php  } ?>

                </table>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <br>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="govt_stamp_vc_no" id="govt_stamp_vc_no" value="<?php if(isset($govt_stamp_vc_no)){ echo $govt_stamp_vc_no; } ?>" placeholder="VC No.">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="govt_stamp_vc_date" id="date2" value="<?php if(isset($govt_stamp_vc_date)){ echo $govt_stamp_vc_date; } ?>" data-target="#date2" data-toggle="datetimepicker" placeholder="VC Date">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control form-control-sm" name="govt_stamp_grn_no" id="govt_stamp_grn_no" value="<?php if(isset($govt_stamp_grn_no)){ echo $govt_stamp_grn_no; } ?>" placeholder="GRN No.">
                    </div>
                    <div class="form-group col-md-6">
                      <input class="form-control form-control-sm" name="govt_stamp_grn_date" id="date3" value="<?php if(isset($govt_stamp_grn_date)){ echo $govt_stamp_grn_date; } ?>" data-target="#date3" data-toggle="datetimepicker" placeholder="GRN Date">
                    </div>
                  </div>
                  <div class="row">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="govt_stamp_objection" id="govt_stamp_objection" value="yes" <?php if(isset($govt_stamp_objection)){ if($govt_stamp_objection == 'yes') echo 'checked'; } ?>> Received above machine/System for Stamping & Varification, no any objection
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="govt_stamp_condition" id="govt_stamp_condition" value="yes" <?php if(isset($govt_stamp_condition)){ if($govt_stamp_condition == 'yes') echo 'checked'; } ?>> Received our machine in Good Condition
                      </label>
                    </div>
                  </div>
                  <br><br><br>
                  <div class="float-right">
                    <?php if(isset($update)){ ?>
                      <button type="submit" class="btn btn-primary mr-3">Update</button>
                    <?php } else{ ?>
                      <button type="submit" class="btn btn-success mr-3">Save</button>
                    <?php }?>
                    <a href="<?php echo base_url(); ?>Dashboard" class="btn btn-default ">Cancel</a>
                  </div>
                </div>

                <div class="col-md-6 " >
                  <br><br>
                  <div class="table-responsive ">
                  <table class="table float-right gst-table" >
                    <style media="screen">
                      .gst-table th, td{
                        border-top:0px!important;

                      }
                      .gst-table th{
                      text-align: right;
                      vertical-align: middle!important;
                      padding: 0px!important;
                      }
                    </style>
                    <tr class="mt-4">
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Late Fees</label></th>
                      <td  ><input type="text" class="form-control" name="govt_stamp_late_fee" id="govt_stamp_late_fee" value="<?php if(isset($govt_stamp_late_fee)){ echo $govt_stamp_late_fee; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">H.C.T.A.D.A.</label></th>
                      <td  ><input type="text" class="form-control" name="govt_stamp_hctada" id="govt_stamp_hctada" value="<?php if(isset($govt_stamp_hctada)){ echo $govt_stamp_hctada; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Service Charges</label></th>
                      <td  ><input type="text" class="form-control" name="govt_stamp_ser_charge" id="govt_stamp_ser_charge" value="<?php if(isset($govt_stamp_ser_charge)){ echo $govt_stamp_ser_charge; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Total</label></th>
                      <td  ><input type="text" class="form-control" name="govt_stamp_total" id="govt_stamp_total" value="<?php if(isset($govt_stamp_total)){ echo $govt_stamp_total; } ?>"></td>
                    </tr>
                  </table>
                </div>
                </div>
                </div>
              </form>
              </div>
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
<script type="text/javascript">
<?php if(isset($update)){ ?>
  var i = <?php echo $i; ?>
<?php } else { ?>
var i = 1;
<?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = '<tr>'+
                '<td class="sr_no">'+i+'</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm" name="input['+i+'][make_id]" required>'+
                    '<option value="">Select Make</option>'+
                    <?php foreach ($make_list as $make_list1) { ?>
                      '<option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][model_no_id]" id="" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][machine_serial_no]" id="" placeholder="">'+
                '</td>'+
                '<td>'+
                  '<select class="form-control select2 form-control-sm"  name="input['+i+'][capacity_id]" required>'+
                    '<option value="">Select Capacity</option>'+
                    <?php foreach ($capacity_list as $capacity_list1) { ?>
                      '<option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control select2 form-control-sm"  name="input['+i+'][min_id]" required>'+
                    '<option value="">Select Min</option>'+
                    <?php foreach ($min_list as $min_list1) { ?>
                      '<option value="<?php echo $min_list1->min_id; ?>"><?php echo $min_list1->min_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control select2 form-control-sm"  name="input['+i+'][accuracy_id]" required>'+
                    '<option value="">Select Accuracy</option>'+
                    <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                      '<option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control select2 form-control-sm" name="input['+i+'][class_id]" required>'+
                    '<option value="">Select Class</option>'+
                    <?php foreach ($class_list as $class_list1) { ?>
                      '<option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][lcr_no]" id="" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="date" class="form-control form-control-sm" name="input['+i+'][lcr_date]" id="" placeholder="dd/mm/yy" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][govt_fees]" id="" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][ser_charge]" id="" placeholder="" required>'+
                '</td>'+
                '<td class="td_btn"><a> <i class="fa fa-trash text-danger rem_row"></i> </a></td>'+
              '</tr>';




    $('#myTable').append(row);
  });

  $('#myTable').on('click', 'a', function () {
    $(this).closest('tr').remove();
  });
</script>
</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
