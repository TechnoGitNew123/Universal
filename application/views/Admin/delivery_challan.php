<!DOCTYPE html>
<html>
<?php
$page = "delivery_challan";
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
            <h4>DELIVERY CHALLAN</h4>
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
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_delivery_challan" method="post" autocomplete="off">
                  <input type="hidden" name="delivery_id" value="<?php echo $delivery_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_delivery_challan" method="post" autocomplete="off">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="delivery_no" id="delivery_no" value="<?php if(isset($delivery_no)){ echo $delivery_no; } ?>" readonly placeholder="Dellivery Challan No.">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="delivery_date" id="date1" data-target="#date1" data-toggle="datetimepicker" value="<?php if(isset($delivery_date)){ echo $delivery_date; } ?>" placeholder="Dellivery Challan Date" required>
                  </div>
                  <div class="form-group col-md-8 offset-md-2 select-sm">
                    <select class="form-control select2 form-control-sm" data-placeholder="Select Party Name" name="delivery_party" id="delivery_party" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <!-- <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div> -->
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="delivery_transport" id="delivery_transport" value="<?php if(isset($delivery_transport)){ echo $delivery_transport; } ?>" placeholder="Name of Transporter">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="delivery_docket_no" id="delivery_docket_no" value="<?php if(isset($delivery_docket_no)){ echo $delivery_docket_no; } ?>" placeholder="LR/Docket No.">
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <select class="form-control select2 form-control-sm" data-placeholder="Select Purchase No" name="purchase_no" id="purchase_no" required>
                      <option selected="selected" value="" >Select Purchase No.</option>
                      <?php if(isset($purchase_no)){ ?>
                        <option selected="selected" ><?php echo $purchase_no; ?></option>
                      <?php } ?>
                    </select>
                    <!-- <input type="text" class="form-control form-control-sm" name="delivery_docket_no" id="delivery_docket_no" value="<?php if(isset($delivery_docket_no)){ echo $delivery_docket_no; } ?>" placeholder="LR/Docket No."> -->
                  </div>
                  <div class="form-group col-md-4 select-sm">
                    <select class="form-control select2 form-control-sm" name="delivery_user" required>
                      <option selected="selected" value="" >Select Employee</option>
                      <?php foreach ($user_list as $user_list1) { ?>
                      <option value="<?php echo $user_list1->user_id; ?>" <?php if(isset($delivery_user)){ if($user_list1->user_id == $delivery_user){ echo "selected"; } }  ?>><?php echo $user_list1->user_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              <!-- </form> -->
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
                    <th>Platter Size</th>
                    <th class="td_w">GST (%)</th>
                    <th class="td_w">Qty</th>
                    <th class="td_w">Rate</th>
                    <th class="td_w">Amount</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($challan_trans_data)){
                      $i = 0;
                      $j = 0;
                      foreach ($challan_trans_data as $trans_data) {
                      $j++;  ?>
                      <input type="hidden" name="input[<?php echo $i; ?>][delivery_trans_id]" value="<?php echo $trans_data->delivery_trans_id ?>">
                      <tr>
                        <td class="sr_no"><?php echo $j; ?></td>
                        <td>
                          <select class="form-control form-control-sm make_id" name="input[<?php echo $i; ?>][make_id]" required>
                            <option value="">Select Make</option>
                            <option selected value="<?php echo $trans_data->make_id ?>" ><?php echo $trans_data->make_name ?></option>
                            <?php foreach ($make_list as $make_list1) { ?>
                              <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-control form-control-sm model_no" name="input[<?php echo $i; ?>][model_no_id]">
                              <option value="">Select Model</option>
                              <option selected value="<?php echo $trans_data->product_id ?>" ><?php echo $trans_data->product_model_no ?></option>
                              <?php foreach ($model_list as $model_list1) { ?>
                                <option value="<?php echo $model_list1->product_id; ?>"><?php echo $model_list1->product_model_no ?></option>
                              <?php } ?>
                            </select>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm " name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" id="" placeholder="Machine Serial no.">
                        </td>
                        <td>
                          <select class="form-control form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                            <option value="">Select Capacity</option>
                          <option selected value="<?php echo $trans_data->capacity_id ?>" ><?php echo $trans_data->capacity_name ?></option>
                          <?php foreach ($capacity_list as $capacity_list1) { ?>
                            <option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>
                          <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-control form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                            <option value="">Select Accuracy</option>
                            <option selected value="<?php echo $trans_data->accuracy_id ?>" ><?php echo $trans_data->accuracy_name ?></option>
                            <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                              <option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-control form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                            <option value="">Select Class</option>
                            <option selected value="<?php echo $trans_data->class_id ?>" ><?php echo $trans_data->class_name ?></option>
                            <?php foreach ($class_list as $class_list1) { ?>
                              <option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-control form-control-sm platter" name="input[<?php echo $i; ?>][platter_id]">
                            <option value="">Select Platter</option>
                          <option selected value="<?php echo $trans_data->platter_id ?>" ><?php echo $trans_data->platter_size ?></option>
                          <?php foreach ($platter_list as $platter_list1) { ?>
                            <option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>
                          <?php } ?>
                          </select>
                        </td>
                        <td class="td_w">
                          <input type="number" class="form-control form-control-sm gst" name="input[<?php echo $i; ?>][delivery_trans_gst]" value="<?php echo $trans_data->delivery_trans_gst ?>" id="" placeholder="" required>
                        </td>
                        <td class="td_w">
                          <input type="number" class="form-control form-control-sm qty" name="input[<?php echo $i; ?>][delivery_trans_qty]" value="<?php echo $trans_data->delivery_trans_qty ?>" id="" placeholder="" required>
                        </td>
                        <td class="td_w">
                          <input type="number" class="form-control form-control-sm rate" name="input[<?php echo $i; ?>][delivery_trans_rate]" value="<?php echo $trans_data->delivery_trans_rate ?>" id="" placeholder="" required>
                        </td>
                        <td class="td_w">
                          <input type="number" class="form-control form-control-sm amount" name="input[<?php echo $i; ?>][delivery_trans_amount]" value="<?php echo $trans_data->delivery_trans_amount ?>" id="" placeholder="" readonly >
                        </td>
                        <td class="td_btn">
                          <?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger"></i></a> <?php } ?>
                          <input type="hidden" name="input[<?php echo $i; ?>][delivery_trans_gst_amount]" class="gst_amount1 gst_amount" value="<?php echo $trans_data->delivery_trans_gst_amount ?>">
                        </td>
                      </tr>
                    <?php $i++;  }  } else{ ?>
                  <tr>
                    <td class="sr_no">1</td>
                    <td>
                      <select class="form-control form-control-sm make_id" name="input[0][make_id]" id="" style="width: 100%;" required>
                        <option value="">Select Make</option>
                        <?php foreach ($make_list as $make_list1) { ?>
                          <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm model_no" name="input[0][model_no_id]" id="" style="width: 100%;" >
                        <option value="">Select Model</option>
                        <?php foreach ($model_list as $model_list1) { ?>
                          <option value="<?php echo $model_list1->product_id; ?>"><?php echo $model_list1->product_model_no ?></option>
                        <?php } ?>
                      </select>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm " name="input[0][machine_serial_no]" id="" placeholder="Machine Serial no.">
                    </td>
                    <td>
                      <select class="form-control form-control-sm capacity" name="input[0][capacity_id]">
                        <option value="">Select Capacity</option>
                        <?php foreach ($capacity_list as $capacity_list1) { ?>
                          <option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm accuracy" name="input[0][accuracy_id]">
                        <option value="">Select Accuracy</option>
                        <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                          <option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm class" name="input[0][class_id]">
                        <option>Select Class</option>
                        <?php foreach ($class_list as $class_list1) { ?>
                          <option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm platter" name="input[0][platter_id]">
                        <option value="">Select Platter</option>
                        <?php foreach ($platter_list as $platter_list1) { ?>
                          <option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm gst" name="input[0][delivery_trans_gst]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm qty" name="input[0][delivery_trans_qty]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm rate" name="input[0][delivery_trans_rate]" id="" placeholder="" required>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm amount" name="input[0][delivery_trans_amount]" id="" placeholder="" readonly required>
                    </td>
                    <td class="td_btn">
                      <input type="hidden" name="input[0][delivery_trans_gst_amount]" class="gst_amount1 gst_amount" value="">
                    </td>
                  </tr>
                  <?php  } ?>
                </table>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5 class="my-4">Terms And Conditions</h5>
                  <div class="form-group" >
                    <textarea id="txt_terms" class="form-control form-control-sm" name="delivery_terms" id="delivery_terms" rows="8" ><?php if(isset($sale_terms)){ echo $sale_terms; }
                      elseif ($terms_list){
                        foreach ($terms_list as $terms) {
                          echo $terms->terms_name.', ';
                        }
                      }
                       ?></textarea>
                  </div>
                  <div class="float-right">
                    <?php if(isset($update)){ ?>
                      <button type="submit" class="btn btn-primary mr-3">Update</button>
                    <?php } else{ ?>
                      <button type="submit" class="btn btn-success mr-3">Save</button>
                    <?php }?>
                    <a href="<?php echo base_url(); ?>Dashboard" class="btn btn-default ">Cancel</a>
                  </div>
                </div>

                <div class="col-md-6 ">
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class="col-form-label mr-3">Basic Amount</label>
                    <div class="">
                      <input type="text" class="form-control" name="delivery_basic" id="basic_amount" value="<?php if(isset($delivery_basic)){ echo $delivery_basic;} ?>">
                    </div>
                  </div>
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class="col-form-label mr-3">GST</label>
                    <div class="">
                      <input type="text" class="form-control" name="delivery_gst" id="gst_val" value="<?php if(isset($delivery_gst)){ echo $delivery_gst;} ?>">
                    </div>
                  </div>
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class=" col-form-label mr-3">Total Amount</label>
                    <div class="">
                      <input type="text" class="form-control delivery_total" name="delivery_total" value="<?php if(isset($delivery_total)){ echo $delivery_total; } ?>" id="delivery_total" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
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
var i = 0;
<?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = '';
        row += '<tr ><td class="sr_no">'+i+'</td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm make_id" name="input['+i+'][make_id]"  style="width: 100%;">';
              row += '<option value="0">Select Make</option>';
              <?php foreach ($make_list as $make_list1) { ?>
                row += '<option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>';
              <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm model_no" name="input['+i+'][model_no_id]" style="width: 100%;">';
              row += '<option value="">Select Model</option>';
                <?php foreach ($model_list as $model_list1) { ?>
              row += '<option value="<?php echo $model_list1->product_id; ?>"><?php echo $model_list1->product_model_no ?></option>';
              <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td><input type="text" class="form-control form-control-sm" name="input['+i+'][machine_serial_no]" id="" placeholder="Machine Serial No."></td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm capacity" name="input['+i+'][capacity_id]">';
              row += '<option value="">Select Capacity</option>';
                <?php foreach ($capacity_list as $capacity_list1) { ?>
              row += '<option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>';
                <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm accuracy" name="input['+i+'][accuracy_id]">';
              row += '<option value="">Select Accuracy</option>';
              <?php foreach ($accuracy_list as $accuracy_list1) { ?>
              row += '<option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>';
              <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm class" name="input['+i+'][class_id]">';
              row +='<option value="">Select Class</option>';
              <?php foreach ($class_list as $class_list1) { ?>
              row +='<option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>';
              <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td>';
              row += '<select class="form-control form-control-sm platter" name="input['+i+'][platter_id]">';
              row += '<option value="">Select Platter</option>';
                <?php foreach ($platter_list as $platter_list1) { ?>
              row += '<option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>';
              <?php } ?>
              row += '</select>';
              row += '</td>';
              row += '<td class="td_w"><input type="text" class="form-control form-control-sm gst" name="input['+i+'][delivery_trans_gst]" id="" placeholder="" required></td>';
              row += '<td class="td_w"><input type="text" class="form-control form-control-sm qty" name="input['+i+'][delivery_trans_qty]" id="" placeholder="" required></td>';
              row += '<td class="td_w"><input type="text" class="form-control form-control-sm rate" name="input['+i+'][delivery_trans_rate]" id="" placeholder="" required></td>';
              row += '<td class="td_w"><input type="text" class="form-control form-control-sm amount" name="input['+i+'][delivery_trans_amount]" id="" placeholder="" required readonly></td>';
              row += '<td class="td_btn"><a> <i class="fa fa-trash text-danger"></i> </a>'
              row += '<input type="hidden" name="input['+i+'][delivery_trans_gst_amount]" class="gst_amount1 gst_amount" value=""></td>';
              row += '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', 'a', function () {
    $(this).closest('tr').remove();
    var basic_amount = 0;
    $(".amount").each(function() {
        var amount = $(this).val();
        // add only if the value is number
        if(!isNaN(amount) && amount.length != 0) {
            basic_amount += parseFloat(amount);
        }
    });
    $('#basic_amount').val(basic_amount);

    var gst_val = 0;
    $(".gst_amount").each(function() {
        var gst_amount = $(this).val();
        if(!isNaN(gst_amount) && gst_amount.length != 0) {
            gst_val += parseFloat(gst_amount);
        }
    });
    $('#gst_val').val(gst_val);

    var total_amount = basic_amount + gst_val;
    $('#delivery_total').val(total_amount);
  });

  $("#delivery_party").on("change", function(){
    var party_id =  $('#delivery_party').find("option:selected").val();
    $.ajax({
      url:'<?php echo base_url(); ?>Transaction/get_purchase_by_party',
      type: 'POST',
      data: {"party_id":party_id},
      context: this,
      success: function(result){
        $('#purchase_no').html(result);
      }
    });
  });

  // $("#myTable").on("change", "select.make_id", function(){
  //   var make_id = $(this).val();
  //   $.ajax({
  //     url: '<?php echo base_url(); ?>Transaction/GetProduct',
  //     type: "POST",
  //     data: {"make_id":make_id},
  //     context: this,
  //     success: function (result) {
  //       $(this).closest('tr').find('.model_no').html(result);
  //     }
  // 	});
  // });
  //
  // $("#myTable").on("change", "select.model_no", function(){
  //   var model_no = $(this).val();
  //   $.ajax({
  //     url: '<?php echo base_url(); ?>Transaction/GetProductDetails',
  //     type: "POST",
  //     data: {"model_no":model_no},
  //     context: this,
  //     success: function (result) {
  //       var data = JSON.parse(result);
  //       $(this).closest('tr').find('.capacity').html('<option value="'+data['capacity_id']+'">'+data['capacity_name']+'</option>');
  //       $(this).closest('tr').find('.accuracy').html('<option value="'+data['accuracy_id']+'">'+data['accuracy_name']+'</option>');
  //       $(this).closest('tr').find('.class').html('<option value="'+data['class_id']+'">'+data['class_name']+'</option>');
  //       $(this).closest('tr').find('.platter').html('<option value="'+data['platter_id']+'">'+data['platter_size']+'</option>');
  //
  //       $(this).closest('tr').find('.rate').val(data['sale_price']);
  //       $(this).closest('tr').find('.gst').val('');
  //       $(this).closest('tr').find('.qty').val('');
  //     }
  // 	});
  // });

  $('#myTable').on('keyup', 'input.gst, input.qty, input.rate', function () {
    var gst =   $(this).closest('tr').find('.gst').val();
    var qty =   $(this).closest('tr').find('.qty').val();
    var rate =   $(this).closest('tr').find('.rate').val();
    if(gst == ''){
      gst = 0;
    }
    if(qty == ''){
      qty = 0;
    }
    if(rate == ''){
      rate = 0;
    }
    var gst = parseInt(gst);
    var qty = parseInt(qty);
    var rate = parseInt(rate);

    var amount_without_gst = qty * rate;
    var gst_amount1 = (gst/100) * amount_without_gst;
    var amount_with_gst = amount_without_gst + gst_amount1;
    $(this).closest('tr').find('.amount').val(amount_without_gst);
    $(this).closest('tr').find('.gst_amount').val(gst_amount1);

    var basic_amount = 0;
    $(".amount").each(function() {
        var amount = $(this).val();
        // add only if the value is number
        if(!isNaN(amount) && amount.length != 0) {
            basic_amount += parseFloat(amount);
        }
    });
    $('#basic_amount').val(basic_amount);

    var gst_val = 0;
    $(".gst_amount").each(function() {
        var gst_amount = $(this).val();
        if(!isNaN(gst_amount) && gst_amount.length != 0) {
            gst_val += parseFloat(gst_amount);
        }
    });
    $('#gst_val').val(gst_val);

    var total_amount = basic_amount + gst_val;
    $('#delivery_total').val(total_amount);
  });
</script>
</body>
</html>
