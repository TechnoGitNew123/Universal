<!DOCTYPE html>
<html>
<?php
$page = "quotation";
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
            <h4>QUOTATION</h4>
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
                <form role="form" action="<?php echo base_url(); ?>Transaction/update_quotation" method="post">
                  <input type="hidden" name="quotation_id" value="<?php echo $quotation_id; ?>">
              <?php } else{ ?>
                <form role="form" action="<?php echo base_url(); ?>Transaction/save_quotation" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="quotation_no" id="quotation_no" value="<?php if(isset($quotation_no)){ echo $quotation_no;} ?>" placeholder="Quotation No." readonly required>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="quotation_date" id="date1" value="<?php if(isset($quotation_date)){ echo $quotation_date;} ?>" data-target="#date1" data-toggle="datetimepicker" placeholder="Quotation Date" required>
                  </div>
                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="quotation_party" id="quotation_party" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($quotation_party)){ if($party_list1->party_id == $quotation_party){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="quotation_person" id="quotation_person" value="<?php if(isset($quotation_person)){ echo $quotation_person;} ?>" placeholder="Name of Person">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="quotation_contact" id="quotation_contact" value="<?php if(isset($quotation_contact)){ echo $quotation_contact;} ?>" placeholder="Contact No.">
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
                    <th>Platter Size</th>
                    <th>Accessories</th>
                    <th class="td_w">GST (%)</th>
                    <th class="td_w">Qty</th>
                    <th class="td_w">Rate</th>
                    <th class="td_w">Amount</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(isset($quotation_trans_data)){
                  $i = 0;
                  $j = 0;
                  foreach ($quotation_trans_data as $trans_data) {
                  $j++;  ?>
                  <input type="hidden" name="input[<?php echo $i; ?>][quotation_trans_id]" value="<?php echo $trans_data->quotation_trans_id ?>">
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
                        <option selected value="<?php echo $trans_data->model_no_id ?>" ><?php echo $trans_data->product_model_no ?></option>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm " name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" id="" placeholder="Machine Serial no.">
                    </td>
                    <td>
                      <select class="form-control form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                        <option selected value="<?php echo $trans_data->capacity_id ?>" ><?php echo $trans_data->capacity_name ?></option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                        <option selected value="<?php echo $trans_data->accuracy_id ?>" ><?php echo $trans_data->accuracy_name ?></option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                        <option selected value="<?php echo $trans_data->class_id ?>" ><?php echo $trans_data->class_id ?></option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm platter" name="input[<?php echo $i; ?>][platter_id]">
                        <option selected value="<?php echo $trans_data->platter_id ?>" ><?php echo $trans_data->platter_size ?></option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control form-control-sm" name="input[<?php echo $i; ?>][quotation_trans_acc]" rows="3"><?php echo $trans_data->quotation_trans_acc ?></textarea>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm gst1" name="input[<?php echo $i; ?>][quotation_trans_gst]" value="<?php echo $trans_data->quotation_trans_gst ?>" placeholder="GST">
                      <input type="number" class="form-control form-control-sm mt-1 gst2" name="input[<?php echo $i; ?>][trans_acc_gst]" value="<?php echo $trans_data->trans_acc_gst ?>" placeholder="Acc GST">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm qty1" name="input[<?php echo $i; ?>][quotation_trans_qty]" value="<?php echo $trans_data->quotation_trans_qty ?>" placeholder="Qty">
                      <input type="number" class="form-control form-control-sm mt-1 qty2" name="input[<?php echo $i; ?>][trans_acc_qty]" value="<?php echo $trans_data->trans_acc_qty ?>" placeholder="Acc Qty">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm rate1" name="input[<?php echo $i; ?>][quotation_trans_rate]" value="<?php echo $trans_data->quotation_trans_rate ?>" placeholder="Rate">
                      <input type="number" class="form-control form-control-sm mt-1 rate2" name="input[<?php echo $i; ?>][trans_acc_rate]" value="<?php echo $trans_data->trans_acc_rate ?>" placeholder="Acc Rate">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm amount1 amount" name="input[<?php echo $i; ?>][quotation_trans_amount]" value="<?php echo $trans_data->quotation_trans_amount ?>" placeholder="Amount" readonly>
                      <input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input[<?php echo $i; ?>][trans_acc_amount]" value="<?php echo $trans_data->trans_acc_amount ?>" placeholder="Acc Amount" readonly>
                    </td>
                    <td class="td_btn">
                      <?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger"></i></a> <?php } ?>
                      <input type="hidden" name="input[<?php echo $i; ?>][quotation_trans_gst_amount]" class="gst_amount1 gst_amount" value="<?php echo $trans_data->quotation_trans_gst_amount ?>">
                      <input type="hidden" name="input[<?php echo $i; ?>][trans_acc_gst_amount]" class="gst_amount2 gst_amount" value="<?php echo $trans_data->trans_acc_gst_amount ?>">
                    </td>
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
                      <select class="form-control form-control-sm model_no" name="input[0][model_no_id]" >
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm " name="input[0][machine_serial_no]" id="" placeholder="Machine Serial no.">
                    </td>
                    <td>
                      <select class="form-control form-control-sm capacity" name="input[0][capacity_id]">
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm accuracy" name="input[0][accuracy_id]">
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm class" name="input[0][class_id]">
                      </select>
                    </td>
                    <td>
                      <select class="form-control form-control-sm platter" name="input[0][platter_id]">
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control form-control-sm" name="input[0][quotation_trans_acc]" rows="3"></textarea>
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm gst1" name="input[0][quotation_trans_gst]" placeholder="GST">
                      <input type="number" class="form-control form-control-sm mt-1 gst2" name="input[0][trans_acc_gst]" placeholder="Acc GST">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm qty1" name="input[0][quotation_trans_qty]" placeholder="Qty">
                      <input type="number" class="form-control form-control-sm mt-1 qty2" name="input[0][trans_acc_qty]" placeholder="Acc Qty">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm rate1" name="input[0][quotation_trans_rate]" placeholder="Rate">
                      <input type="number" class="form-control form-control-sm mt-1 rate2" name="input[0][trans_acc_rate]" placeholder="Acc Rate">
                    </td>
                    <td class="td_w">
                      <input type="number" class="form-control form-control-sm amount1 amount" name="input[0][quotation_trans_amount]" placeholder="Amount" readonly>
                      <input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input[0][trans_acc_amount]" placeholder="Acc Amount" readonly>
                    </td>
                    <td class="td_btn">
                      <input type="hidden" name="input[0][quotation_trans_gst_amount]" class="gst_amount1 gst_amount" value="">
                      <input type="hidden" name="input[0][trans_acc_gst_amount]" class="gst_amount2 gst_amount" value="">
                    </td>
                  </tr>
                  <?php  } ?>

                </table>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5 class="my-4">Terms And Conditions</h5>
                  <div class="form-group" >
                    <textarea id="txt_terms" class="form-control form-control-sm" name="quotation_terms" id="quotation_terms" rows="8" cols="80"><?php if(isset($sale_terms)){ echo $sale_terms; }
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
                      <input type="text" class="form-control" name="quotation_basic" id="basic_amount" value="<?php if(isset($quotation_basic)){ echo $quotation_basic;} ?>">
                    </div>
                  </div>
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class="col-form-label mr-3">GST</label>
                    <div class="">
                      <input type="text" class="form-control" name="quotation_gst" id="gst_val" value="<?php if(isset($quotation_gst)){ echo $quotation_gst;} ?>">
                    </div>
                  </div>
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class="col-form-label mr-3">Total Amount</label>
                    <div class="">
                      <input type="text" class="form-control" name="quotation_total" id="quotation_total" value="<?php if(isset($quotation_total)){ echo $quotation_total;} ?>">
                    </div>
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
var i = 0;
<?php } ?>

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
                  '<input type="text" class="form-control form-control-sm " name="input['+i+'][machine_serial_no]" id="" placeholder="Machine Serial no.">'+
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
                '<td>'+
                  '<select class="form-control form-control-sm platter" name="input['+i+'][platter_id]">'+
                  '</select>'+
                '</td>'+
                '<td>'+
                  '<textarea class="form-control form-control-sm" name="input['+i+'][quotation_trans_acc]" rows="3"></textarea>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="number" class="form-control form-control-sm gst1" name="input['+i+'][quotation_trans_gst]" placeholder="GST">'+
                  '<input type="number" class="form-control form-control-sm mt-1 gst2" name="input['+i+'][trans_acc_gst]" placeholder="Acc GST">'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="number" class="form-control form-control-sm qty1" name="input['+i+'][quotation_trans_qty]" placeholder="Qty">'+
                  '<input type="number" class="form-control form-control-sm mt-1 qty2" name="input['+i+'][trans_acc_qty]" placeholder="Acc Qty">'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="number" class="form-control form-control-sm rate1" name="input['+i+'][quotation_trans_rate]" placeholder="Rate">'+
                  '<input type="number" class="form-control form-control-sm mt-1 rate2" name="input['+i+'][trans_acc_rate]" placeholder="Acc Rate">'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="number" class="form-control form-control-sm amount1 amount" name="input['+i+'][quotation_trans_amount]" placeholder="Amount" readonly>'+
                  '<input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input['+i+'][trans_acc_amount]" placeholder="Acc Amount" readonly>'+
                '</td>'+
                '<td class="td_btn">'+
                '<a><i class="fa fa-trash text-danger"></i></a>'+
                '<input type="hidden" name="input['+i+'][quotation_trans_gst_amount]" class="gst_amount1 gst_amount">'+
                '<input type="hidden" name="input['+i+'][trans_acc_gst_amount]" class="gst_amount2 gst_amount">'+
                '</td>'+
              '</tr>';
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
    $('#quotation_total').val(total_amount);
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
        $(this).closest('tr').find('.platter').html('<option value="'+data['platter_id']+'">'+data['platter_size']+'</option>');

        $(this).closest('tr').find('.rate1').val(data['sale_price']);
        $(this).closest('tr').find('.gst1').val('');
        $(this).closest('tr').find('.qty1').val('');
        $(this).closest('tr').find('.gst2').val('');
        $(this).closest('tr').find('.qty2').val('');
        $(this).closest('tr').find('.rate2').val('');
      }
  	});
  });

  $('#myTable').on('keyup', 'input.gst1, input.qty1, input.rate1', function () {
    var gst1 =   $(this).closest('tr').find('.gst1').val();
    var qty1 =   $(this).closest('tr').find('.qty1').val();
    var rate1 =   $(this).closest('tr').find('.rate1').val();
    if(gst1 == ''){
      gst1 = 0;
    }
    if(qty1 == ''){
      qty1 = 0;
    }
    if(rate1 == ''){
      rate1 = 0;
    }
    var gst1 = parseInt(gst1);
    var qty1 = parseInt(qty1);
    var rate1 = parseInt(rate1);
    var amount_without_gst = qty1 * rate1;
    var gst_amount1 = (gst1/100) * amount_without_gst;
    var amount_with_gst = amount_without_gst + gst_amount1;
    $(this).closest('tr').find('.amount1').val(amount_without_gst);
    $(this).closest('tr').find('.gst_amount1').val(gst_amount1);

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
    $('#quotation_total').val(total_amount);
  });

  $('#myTable').on('keyup', 'input.gst2, input.qty2, input.rate2', function () {
    var gst2 =   $(this).closest('tr').find('.gst2').val();
    var qty2 =   $(this).closest('tr').find('.qty2').val();
    var rate2 =   $(this).closest('tr').find('.rate2').val();
    if(gst2 == ''){
      gst2 = 0;
    }
    if(qty2 == ''){
      qty2 = 0;
    }
    if(rate2 == ''){
      rate2 = 0;
    }
    var gst2 = parseInt(gst2);
    var qty2 = parseInt(qty2);
    var rate2 = parseInt(rate2);
    var amount_without_gst = qty2 * rate2;
    var gst_amount2 = (gst2/100) * amount_without_gst;
    var amount_with_gst = amount_without_gst + gst_amount2;
    $(this).closest('tr').find('.amount2').val(amount_without_gst);
    $(this).closest('tr').find('.gst_amount2').val(gst_amount2);

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
        // add only if the value is number
        if(!isNaN(gst_amount) && gst_amount.length != 0) {
            gst_val += parseFloat(gst_amount);
        }
    });
    $('#gst_val').val(gst_val);

    var total_amount = basic_amount + gst_val;
    $('#quotation_total').val(total_amount);
  });


</script>
</body>
</html>
