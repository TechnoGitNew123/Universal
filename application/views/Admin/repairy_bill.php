<!DOCTYPE html>
<html>
<?php
$page = "repairy_bill";
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
            <h4>REPAIRY BILL</h4>
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
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_repairy_bill" method="post">
                  <input type="hidden" name="repairy_id" value="<?php echo $repairy_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_repairy_bill" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="repairy_no" id="repairy_no"  value="<?php if(isset($repairy_no)){ echo $repairy_no; } ?>" placeholder="Repairy Receipt No." readonly required>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="repairy_date" id="date1" value="<?php if(isset($repairy_date)){ echo $repairy_date; } else{ echo date('d-m-Y'); } ?>" data-target="#date1" data-toggle="datetimepicker" placeholder="Repairy Receipt Date" required>
                  </div>
                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="repairy_party" required>
                      <option selected="selected" value="" >Select Party Name / Propritor name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                      <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($repairy_party)){ if($party_list1->party_id == $repairy_party){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div>

                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="repairy_person" id="repairy_person" value="<?php if(isset($repairy_person)){ echo $repairy_person; } ?>" placeholder="Contact Person name">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="repairy_contact" id="repairy_contact" value="<?php if(isset($repairy_contact)){ echo $repairy_contact; } ?>" placeholder="Contact No.">
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="repairy_engg" id="repairy_engg" value="<?php if(isset($repairy_engg)){ echo $repairy_engg; } ?>" placeholder="Received By">
                  </div>
                  <div class="form-group col-md-4">
                    <select class="form-control select2 form-control-sm" name="repairy_user" required>
                      <option selected="selected" value="" >Select Employee</option>
                      <?php foreach ($user_list as $user_list1) { ?>
                      <option value="<?php echo $user_list1->user_id; ?>" <?php if(isset($repairy_user)){ if($user_list1->user_id == $repairy_user){ echo "selected"; } }  ?>><?php echo $user_list1->user_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
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
                    <th>Accuracy</th>
                    <th>Class</th>
                    <th>Repairing Details</th>
                    <th>Material Used</th>
                    <th>Amount</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                  <?php if(isset($repairy_bill_trans_data)){
                    $i = 0;
                    $j = 0;
                    foreach ($repairy_bill_trans_data as $trans_data) {
                    $j++;  ?>
                    <input type="hidden" name="input[<?php echo $i; ?>][repairy_trans_id]" value="<?php echo $trans_data->repairy_trans_id ?>">
                      <td class="sr_no"><?php echo $j; ?></td>
                      <td>
                        <select class="form-control form-control-sm make_id" name="input[<?php echo $i; ?>][make_id]" required>
                          <option value="">Select Make</option>
                          <?php foreach ($make_list as $make_list1) { ?>
                            <option value="<?php echo $make_list1->make_id; ?>" <?php if($make_list1->make_id == $trans_data->make_id){ echo 'selected';}  ?>><?php echo $make_list1->make_name ?></option>
                          <?php } ?>
                        </select>
                      </td>

                      <td>
                        <select class="form-control form-control-sm model_no" name="input[<?php echo $i; ?>][model_no_id]">
                          <option value="">Select Model No.</option>
                          <?php foreach ($product_list as $list) { ?>
                            <option value="<?php echo $list->product_id; ?>" <?php if($trans_data->model_no_id == $list->product_id){ echo 'selected'; } ?>><?php echo $list->product_model_no ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" placeholder="">
                      </td>
                      <td>
                        <select class="form-control form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                          <option value="">Select Capacity</option>
                          <?php foreach ($capacity_list as $list) { ?>
                            <option value="<?php echo $list->capacity_id; ?>" <?php if($trans_data->capacity_id == $list->capacity_id){ echo 'selected'; } ?>><?php echo $list->capacity_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                          <option value="">Select Accuracy</option>
                          <?php foreach ($accuracy_list as $list) { ?>
                            <option value="<?php echo $list->accuracy_id; ?>" <?php if($trans_data->accuracy_id == $list->accuracy_id){ echo 'selected'; } ?>><?php echo $list->accuracy_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                          <option value="">Select Class</option>
                          <?php foreach ($class_list as $list) { ?>
                            <option value="<?php echo $list->class_id; ?>"<?php if($trans_data->class_id == $list->class_id){ echo 'selected'; } ?>><?php echo $list->class_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][repairy_details]"value="<?php echo $trans_data->repairy_details ?>" placeholder="">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm" name="input[<?php echo $i; ?>][material_used]"value="<?php echo $trans_data->material_used ?>" placeholder="">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm amount" name="input[<?php echo $i; ?>][repairy_trans_amount]"value="<?php echo $trans_data->repairy_trans_amount ?>" placeholder="">
                      </td>
                      <td class="td_btn"><?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger"></i></a> <?php } ?></td>
                    </tr>
                  <?php $i++;  }  } else{ ?>
                    <tr>
                    <td class="sr_no">1</td>
                    <td>
                      <select class="form-control form-control-sm make_id" name="input[0][make_id]" required>
                        <option value="">Select Make</option>
                        <?php foreach ($make_list as $make_list1) { ?>
                          <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm model_no"  name="input[0][model_no_id]" >
                        <option value="">Select Model No.</option>
                        <?php foreach ($product_list as $list) { ?>
                          <option value="<?php echo $list->product_id; ?>"><?php echo $list->product_model_no ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][machine_serial_no]" id="" placeholder="">
                    </td>
                    <td>
                      <select class="form-control form-control-sm capacity" name="input[0][capacity_id]">
                        <option value="">Select Capacity</option>
                        <?php foreach ($capacity_list as $list) { ?>
                          <option value="<?php echo $list->capacity_id; ?>"><?php echo $list->capacity_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm accuracy" name="input[0][accuracy_id]">
                        <option value="">Select Accuracy</option>
                        <?php foreach ($accuracy_list as $list) { ?>
                          <option value="<?php echo $list->accuracy_id; ?>"><?php echo $list->accuracy_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm class" name="input[0][class_id]">
                        <option value="">Select Class</option>
                        <?php foreach ($class_list as $list) { ?>
                          <option value="<?php echo $list->class_id; ?>"><?php echo $list->class_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][repairy_details]" placeholder="">
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="input[0][material_used]" placeholder="">
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm amount" name="input[0][repairy_trans_amount]" placeholder="">
                    </td>
                    <td class="td_btn"></td>
                  </tr>
                  <?php  } ?>
                </table>

              </div>
              <div class="row">
                <div class="col-md-6">
                  <?php if(isset($repairy_accss)){
                    $val = explode('_',$repairy_accss);
                  } ?>
                  <div class="form-group mt-3 mb-2">
                    <input type="checkbox" name="pan" id="pan" value="PAN" <?php if(isset($repairy_accss) && $val[0] == 'PAN'){ echo 'checked'; } ?>>
                    PAN
                  </div>
                  <div class="form-group mb-2">
                    <input type="checkbox" name="bowl" id="bowl" value="Bowl" <?php if(isset($repairy_accss) && $val[1] == 'Bowl'){ echo 'checked'; } ?>>
                    Bowl
                  </div>
                  <div class="form-group mb-2">
                    <input type="checkbox" name="adapter" id="adapter" value="Adapter" <?php if(isset($repairy_accss) && $val[2] == 'Adapter'){ echo 'checked'; } ?>>
                    Adapter / Charger
                  </div>
                  <div class="form-group mb-2">
                    <input type="checkbox" name="battery" id="battery" value="Battery" <?php if(isset($repairy_accss) && $val[3] == 'Battery'){ echo 'checked'; } ?>>
                    Battery
                  </div>
                  <div class="form-group mb-2">
                    <input type="checkbox" name="stamping" id="stamping" value="Stamping" <?php if(isset($repairy_accss) && $val[4] == 'Stamping'){ echo 'checked'; } ?>>
                    Stamping
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
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Basic Spare Charges</label></th>
                      <td  ><input type="text" class="form-control" name="repairy_basic_charge" id="repairy_basic_charge" value="<?php if(isset($repairy_basic_charge)){ echo $repairy_basic_charge; } ?>" readonly></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Min Service Charges</label></th>
                      <td  ><input type="text" class="form-control" name="repairy_min_charge" id="repairy_min_charge" value="<?php if(isset($repairy_min_charge)){ echo $repairy_min_charge; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="inputEmail3" class=" text-right col-form-label mr-3 mb-1">Grand Total</label></th>
                      <td  ><input type="text" class="form-control" name="repairy_total" id="repairy_total" value="<?php if(isset($repairy_total)){ echo $repairy_total; } ?>" readonly></td>
                    </tr>
                  </table>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                      <?php if(isset($update)){ ?>
                        <button type="submit" class="btn btn-primary mr-3">Update</button>
                      <?php } else{ ?>
                        <button type="submit" class="btn btn-success mr-3">Save</button>
                      <?php }?>
                      <a href="<?php echo base_url(); ?>Dashboard" class="btn btn-default ">Cancel</a>
                    </div>
                </div>
              </div>
            </form>
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

// var i = 1;
  $('#add_row').click(function(){
    i++;
    var row = '<tr>'+
                '<td class="sr_no">'+i+'</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm make_id" name="input['+i+'][make_id]" required>'+
                    '<option value="">Select Make</option>'+
                    <?php foreach ($make_list as $make_list1) { ?>
                      '<option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>'+
                    <?php } ?>
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm model_no" name="input['+i+'][model_no_id]" >'+
                  '</select>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][machine_serial_no]" id="" placeholder="">'+
                '</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm capacity" name="input['+i+'][capacity_id]">'+
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm accuracy" name="input['+i+'][accuracy_id]">'+
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<select class="form-control form-control-sm class" name="input['+i+'][class_id]">'+
                  '</select>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][repairy_details]" placeholder="">'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="input['+i+'][material_used]" placeholder="">'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm amount" name="input['+i+'][repairy_trans_amount]" placeholder="" required>'+
                '</td>'+
                '<td class="td_btn"><a> <i class="fa fa-trash text-danger"></i> </a></td>'+
              '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', 'a', function () {
    $(this).closest('tr').remove();

    var repairy_min_charge =   $('#repairy_min_charge').val();
    if(repairy_min_charge == ''){
      repairy_min_charge = 0;
    }
    var repairy_min_charge = parseInt(repairy_min_charge);
    var basic_amount = 0;
    $(".amount").each(function() {
        var amount = $(this).val();
        // add only if the value is number
        if(!isNaN(amount) && amount.length != 0) {
            basic_amount += parseFloat(amount);
        }
    });
    $('#repairy_basic_charge').val(basic_amount);

    var repairy_total = basic_amount + repairy_min_charge;
    $('#repairy_total').val(repairy_total);
  });

  $("#myTable").on("change", "select.make_id", function(){
    var make_id = $(this).val();
    $.ajax({
      url: '<?php echo base_url(); ?>Transaction/GetProduct',
      type: "POST",
      data: {"make_id":make_id},
      context: this,
      success: function (result) {
        $(this).closest('tr').find('.model_no').html(result);
      }
  	});
  });

  $("#myTable").on("change", "select.model_no", function(){
    var model_no = $(this).val();
    $.ajax({
      url: '<?php echo base_url(); ?>Transaction/GetProductDetails',
      type: "POST",
      data: {"model_no":model_no},
      context: this,
      success: function (result) {
        var data = JSON.parse(result);
        $(this).closest('tr').find('.capacity').html('<option value="'+data['capacity_id']+'">'+data['capacity_name']+'</option>');
        $(this).closest('tr').find('.accuracy').html('<option value="'+data['accuracy_id']+'">'+data['accuracy_name']+'</option>');
        $(this).closest('tr').find('.class').html('<option value="'+data['class_id']+'">'+data['class_name']+'</option>');
      }
  	});
  });



  $('#myTable').on('keyup', 'input.amount', function () {
    var amount =   $(this).closest('tr').find('.amount').val();
    var repairy_min_charge =   $('#repairy_min_charge').val();
    if(amount == ''){
      amount = 0;
    }
    if(repairy_min_charge == ''){
      repairy_min_charge = 0;
    }
    var amount = parseInt(amount);
    var repairy_min_charge = parseInt(repairy_min_charge);

    var basic_amount = 0;
    $(".amount").each(function() {
        var amount = $(this).val();
        // add only if the value is number
        if(!isNaN(amount) && amount.length != 0) {
            basic_amount += parseFloat(amount);
        }
    });
    $('#repairy_basic_charge').val(basic_amount);

    var repairy_total = basic_amount + repairy_min_charge;
    $('#repairy_total').val(repairy_total);
  });

  $('#repairy_min_charge').on('keyup',function () {
    var repairy_basic_charge =   $('#repairy_basic_charge').val();
    var repairy_min_charge =   $('#repairy_min_charge').val();
    if(repairy_basic_charge == ''){
      repairy_basic_charge = 0;
    }
    if(repairy_min_charge == ''){
      repairy_min_charge = 0;
    }
    var repairy_basic_charge = parseInt(repairy_basic_charge);
    var repairy_min_charge = parseInt(repairy_min_charge);

    var repairy_total = repairy_basic_charge + repairy_min_charge;
    $('#repairy_total').val(repairy_total);
  });
</script>
</body>
</html>
