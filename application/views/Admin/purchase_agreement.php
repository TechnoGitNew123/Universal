<!DOCTYPE html>
<html>
<?php
$page = "party_list";
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
            <h4> PURCHASE AGREEMENT</h4>
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
                  <form role="form" action="<?php echo base_url(); ?>Transaction/update_purchase_agreement" method="post">
                    <input type="hidden" name="purchase_id" value="<?php echo $purchase_id; ?>">
                <?php } else{ ?>
                  <form role="form" action="<?php echo base_url(); ?>Transaction/save_purchase_agreement" method="post">
                <?php } ?>

                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="purchase_order_no" id="purchase_order_no" placeholder="Purchase Order No." value="<?php if (isset($purchase_order_no)) { echo $purchase_order_no; } ?>" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="purchase_date" id="date1" data-target="#date1" data-toggle="datetimepicker" value="<?php if (isset($purchase_date)) { echo $purchase_date; } ?>" placeholder="Purchase Order Date">
                  </div>
                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="purchase_party" placeholder="Select Party Name/ proprietor Name" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="invoice_no" id="invoice_no" value="<?php if (isset($invoice_no)) { echo $invoice_no; } ?>" placeholder="Invoice No.">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="invoice_date" id="date2" value="<?php if (isset($invoice_date)) { echo $invoice_date; } ?>" data-target="#date2" data-toggle="datetimepicker" placeholder="Invoice Date">
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
                    <th>Display color</th>
                    <th>Cabinate Color</th>
                    <th>Accessories</th>
                    <th class="td_w">GST (%)</th>
                    <th class="td_w">Qty</th>
                    <th class="td_w">Rate</th>
                    <th class="td_w">Amount</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($purchase_trans_data)){
                      $i = 0;
                      $j = 0;
                      foreach($purchase_trans_data as $trans_data){
                        $j++;
                    ?>
                    <input type="hidden" name="input[<?php echo $i; ?>][purchase_trans_id]" value="<?php echo $trans_data->purchase_trans_id ?>">
                    <tr>
                      <td class="sr_no"><?php echo $j; ?></td>
                      <td>
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][make_id]" required>
                          <option value="">Select Make</option>
                          <option selected value="<?php echo $trans_data->make_id ?>" ><?php echo $trans_data->make_name ?></option>
                          <?php foreach ($make_list as $make_list1) { ?>
                            <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm model_no" name="input[<?php echo $i; ?>][model_no_id]" required>
                          <option value="">Select Model No.</option>
                          <option selected value="<?php echo $trans_data->model_no_id ?>" ><?php echo $trans_data->product_model_no ?></option>
                        </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm " name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" placeholder="Machine Serial no.">
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                          <option selected value="<?php echo $trans_data->capacity_id ?>" ><?php echo $trans_data->capacity_name ?></option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                          <option selected value="<?php echo $trans_data->accuracy_id ?>" ><?php echo $trans_data->accuracy_name ?></option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                          <option selected value="<?php echo $trans_data->class_id ?>" ><?php echo $trans_data->class_id ?></option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm platter" name="input[<?php echo $i; ?>][platter_id]">
                          <option selected value="<?php echo $trans_data->platter_id ?>" ><?php echo $trans_data->platter_size ?></option>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][display_color_id]" id="" style="width: 100%;">
                          <?php foreach ($display_color_list as $display_color_list1) { ?>
                            <option value="<?php echo $display_color_list1->display_color_id; ?>" <?php if(isset($display_color_id)){ if($display_color_list1->display_color_id == $display_color_id){ echo "selected"; } }  ?>><?php echo $display_color_list1->display_color_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][cabinate_color_id]" id="" style="width: 100%;">
                          <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
                            <option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>" <?php if(isset($cabinate_color_id)){ if($cabinate_color_list1->cabinet_color_id == $cabinate_color_id){ echo "selected"; } }  ?>><?php echo $cabinate_color_list1->cabinet_color_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <textarea class="form-control form-control-sm" name="input[<?php echo $i; ?>][accessories]" rows="3"><?php echo $trans_data->accessories ?></textarea>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm gst" name="input[<?php echo $i; ?>][purchase_trans_gst]" value="<?php echo $trans_data->purchase_trans_gst ?>" placeholder="GST" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm qty" name="input[<?php echo $i; ?>][purchase_trans_qty]" value="<?php echo $trans_data->purchase_trans_qty ?>" placeholder="Qty" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm rate" name="input[<?php echo $i; ?>][purchase_trans_rate]" value="<?php echo $trans_data->purchase_trans_rate ?>" placeholder="Rate" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm amount" name="input[<?php echo $i; ?>][purchase_trans_amount]" value="<?php echo $trans_data->purchase_trans_amount ?>" placeholder="Amount" readonly>
                      </td>
                      <input type="hidden" class="gst_amount" value="">
                      <input type="hidden" class="amount_with_gst" value="">
                      <td class="td_btn"><?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger rem_row"></i></a> <?php } ?></td>
                    </tr>
                    <tr>
                      <td class="sr_no"></td>
                      <td colspan="10">
                        <textarea class="form-control form-control-sm w-100" name="input[<?php echo $i; ?>][purchase_trans_descr]" rows="3" cols=""><?php echo $trans_data->purchase_trans_descr ?></textarea>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm gst" name="input[<?php echo $i; ?>][purchase_descr_gst]" value="<?php echo $trans_data->purchase_descr_gst ?>" placeholder="GST" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm qty" name="input[<?php echo $i; ?>][purchase_descr_qty]" value="<?php echo $trans_data->purchase_descr_qty ?>" placeholder="Qty" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm rate" name="input[<?php echo $i; ?>][purchase_descr_rate]" value="<?php echo $trans_data->purchase_descr_rate ?>" placeholder="Rate" required>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm amount" name="input[<?php echo $i; ?>][purchase_descr_amount]" value="<?php echo $trans_data->purchase_descr_amount ?>" placeholder="Amount" readonly>
                      </td>
                      <input type="hidden" class="gst_amount" value="">
                      <input type="hidden" class="amount_with_gst" value="">
                      <td class="td_btn"></td>
                    </tr>

                  <?php $i++; } } else { ?>
                      <tr>
                        <td class="sr_no">1</td>
                        <td>
                          <select class="form-control select2 form-control-sm make_id" name="input[0][make_id]" id="" style="width: 100%;" required>
                            <option value="">Select Make</option>
                            <?php foreach ($make_list as $make_list1) { ?>
                              <option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-control select2 form-control-sm model_no" name="input[0][model_no_id]" id="" style="width: 100%;" required>
                            <option value="">Select Model No.</option>
                          </select>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm " name="input[0][machine_serial_no]" id="" placeholder="Machine Serial no.">
                        </td>
                        <td>
                          <select class="form-control select2 form-control-sm capacity" name="input[0][capacity_id]">
                          </select>
                        </td>
                        <td>
                          <select class="form-control select2 form-control-sm accuracy" name="input[0][accuracy_id]">
                          </select>
                        </td>
                        <td>
                          <select class="form-control select2 form-control-sm class" name="input[0][class_id]">
                          </select>
                        </td>
                        <td>
                          <select class="form-control select2 form-control-sm platter" name="input[0][platter_id]">
                          </select>
                        </td>
                        <td class="td_w">
                          <select class="form-control select2 form-control-sm make_id" name="input[0][display_color_id]" id="" style="width: 100%;">
                            <?php foreach ($display_color_list as $display_color_list1) { ?>
                              <option value="<?php echo $display_color_list1->display_color_id; ?>"><?php echo $display_color_list1->display_color_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td class="td_w">
                          <select class="form-control select2 form-control-sm make_id" name="input[0][cabinate_color_id]" id="" style="width: 100%;">
                            <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
                              <option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>"><?php echo $cabinate_color_list1->cabinet_color_name ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <textarea class="form-control form-control-sm" name="input[0][accessories]" rows="3"></textarea>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm gst" name="input[0][purchase_trans_gst]" id="" placeholder="GST" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm qty" name="input[0][purchase_trans_qty]" id="" placeholder="Qty" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm rate" name="input[0][purchase_trans_rate]" id="" placeholder="Rate" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm amount" name="input[0][purchase_trans_amount]" id="" placeholder="Amount" readonly>
                        </td>
                        <input type="hidden" class="gst_amount" value="">
                        <input type="hidden" class="amount_with_gst" value="">
                        <td class="td_btn"></td>
                      </tr>
                      <tr>
                        <td class="sr_no"></td>
                        <td colspan="10">
                          <textarea class="form-control form-control-sm w-100" name="input[0][purchase_trans_descr]" rows="3" cols=""></textarea>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm gst" name="input[0][purchase_descr_gst]" id="" placeholder="GST" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm qty" name="input[0][purchase_descr_qty]" id="" placeholder="Qty" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm rate" name="input[0][purchase_descr_rate]" id="" placeholder="Rate" required>
                        </td>
                        <td class="td_w">
                          <input type="text" class="form-control form-control-sm amount" name="input[0][purchase_descr_amount]" id="" placeholder="Amount" readonly>
                        </td>
                        <input type="hidden" class="gst_amount" value="">
                        <input type="hidden" class="amount_with_gst" value="">
                        <td class="td_btn"></td>
                      </tr>
                    <?php } ?>

                </table>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5 class="my-4">Terms And Conditions</h5>
                  <div class="form-group" >
                    <textarea id="txt_terms" class="form-control form-control-sm" name="purchase_terms" rows="8"><?php if(isset($purchase_terms)){ echo $purchase_terms; } ?></textarea>
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
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Basic Price</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_basic_price" id="purchase_basic_price" value="<?php if(isset($purchase_basic_price)){ echo $purchase_basic_price; } ?>" readonly></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">GST</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_gst" id="purchase_gst" value="<?php if(isset($purchase_gst)){ echo $purchase_gst; } ?>"  readonly></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Govt. Stamping</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_stamping" id="purchase_stamping" value="<?php if(isset($purchase_stamping)){ echo $purchase_stamping; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Other</label></th>
                      <td  ><input type="number" class="form-control form-control-sm" name="purchase_other" id="purchase_other" value="<?php if(isset($purchase_other)){ echo $purchase_other; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Total</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_total" id="purchase_total" value="<?php if(isset($purchase_total)){ echo $purchase_total; } ?>" readonly></td>
                      <input type="hidden" id="purchase_total_prev">
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Advance Received</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_advance" id="purchase_advance" value="<?php if(isset($purchase_advance)){ echo $purchase_advance; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Balance Due</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_due" id="purchase_due" value="<?php if(isset($purchase_due)){ echo $purchase_due; } ?>" readonly></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">delivery Period</label></th>
                      <td ><input type="number" class="form-control form-control-sm" name="purchase_del_period" id="purchase_del_period" value="<?php if(isset($purchase_del_period)){ echo $purchase_del_period; } ?>"></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Payment Terms </label></th>
                      <td ><input type="text" class="form-control form-control-sm" name="purchase_pay_terms" id="purchase_pay_terms" value="<?php if(isset($purchase_pay_terms)){ echo $purchase_pay_terms; } ?>"></td>
                    </tr>
                  </table>
                </div>
                </div>
                <div class="w-100 text-center">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary mr-3">Update</button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success mr-3">Save</button>
                  <?php }?>
                  <button type="submit" class="btn btn-default ">Cancel</button>
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

  // var i = 0;
  $('#add_row').click(function(){
    i++;
    var row = '<tr><td class="sr_no">'+i+'</td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm make_id" name="input['+i+'][make_id]" style="width: 100%;">'+
              <?php foreach ($make_list as $make_list1) { ?>
                '<option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>'+
              <?php } ?>
              '</select></td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm model_no" name="input['+i+'][model_no_id]" style="width: 100%;">'+
              '<option selected="selected"></option>'+
              '</select></td>'+
              '<td><input type="text" class="form-control form-control-sm " name="input['+i+'][machine_serial_no]" id="" placeholder="Machine Serial no."></td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm capacity" name="input['+i+'][capacity_id]">'+
              '</select>'+
              '</td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm accuracy" name="input['+i+'][accuracy_id]">'+
              '</select>'+
              '</td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm class" name="input['+i+'][class_id]">'+
              '</select>'+
              '</td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm platter" name="input['+i+'][platter_id]">'+
              '</select>'+
              '</td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm" name="input['+i+'][display_color_id]" style="width: 100%;">'+
              <?php foreach ($display_color_list as $display_color_list1) { ?>
                '<option value="<?php echo $display_color_list1->display_color_id; ?>"><?php echo $display_color_list1->display_color_name ?></option>'+
              <?php } ?>
              '</select></td>'+
              '<td>'+
              '<select class="form-control select2 form-control-sm" name="input['+i+'][cabinate_color_id]" style="width: 100%;">'+
              <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
                '<option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>"><?php echo $cabinate_color_list1->cabinet_color_name ?></option>'+
              <?php } ?>
              '</select></td>'+

              '<td><textarea class="form-control form-control-sm" name="input['+i+'][accessories]" rows="3"></textarea></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm gst" name="input['+i+'][purchase_trans_gst]" placeholder="" required></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm qty" name="input['+i+'][purchase_trans_qty]" placeholder="" required></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm rate" name="input['+i+'][purchase_trans_rate]" placeholder="" required></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm amount" name="input['+i+'][purchase_trans_amount]" placeholder="" readonly></td>'+
              '<td class="td_btn"><a> <i class="fa fa-trash text-danger"></i> </a></td>'+
              '<input type="hidden" class="gst_amount" value="">'+
              '<input type="hidden" class="amount_with_gst" value="">'+
              '</tr>'+
              '<tr>'+
                '<td class="sr_no"></td>'+
                '<td colspan="10">'+
                  '<textarea class="form-control form-control-sm w-100" name="input['+i+'][purchase_trans_descr]" rows="3" cols=""></textarea>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm gst" name="input['+i+'][purchase_descr_gst]" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm qty" name="input['+i+'][purchase_descr_qty]" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm rate" name="input['+i+'][purchase_descr_rate]" placeholder="" required>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm amount" name="input['+i+'][purchase_descr_amount]" placeholder="" readonly>'+
                '</td>'+
                '<input type="hidden" class="gst_amount" value="">'+
                '<input type="hidden" class="amount_with_gst" value="">'+
                '<td class="td_btn"></td>'+
              '</tr>'
              ;
    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
    $(this).closest('tr').next('tr').remove();
    $(this).closest('tr').remove();
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
        $(this).closest('tr').find('.rate').val(data['sale_price']);
        $(this).closest('tr').find('.gst').val('');
        $(this).closest('tr').find('.qty').val('');
      }
  	});
  });

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
    var amount_no_gst = qty * rate;
    var gst_rs = (gst/100) * amount_no_gst;
    var amount_with_gst = amount_no_gst + gst_rs;

    $(this).closest('tr').find('.amount').val(amount_no_gst);
    $(this).closest('tr').find('.amount_with_gst').val(amount_with_gst);
    $(this).closest('tr').find('.gst_amount').val(gst_rs);
    // <input type="hidden" class="gst_amount" value="">
    // <input type="hidden" class="amount_with_gst" value="">
    var basic_amount = 0;
    var gst_amount = 0;
    var amount_w_gst = 0;
// iterate through each td based on class and add the values
    $(".amount").each(function() {
        var value = $(this).val();
        if(!isNaN(value) && value.length != 0) {
            basic_amount += parseFloat(value);
        }
    });
    $(".amount_with_gst").each(function() {
        var value = $(this).val();
        if(!isNaN(value) && value.length != 0) {
            amount_w_gst += parseFloat(value);
        }
    });
    $(".gst_amount").each(function() {
        var value = $(this).val();
        if(!isNaN(value) && value.length != 0) {
            gst_amount += parseFloat(value);
        }
    });
    $('#purchase_basic_price').val(basic_amount);
    $('#purchase_gst').val(gst_amount);
    $('#purchase_total_prev').val(amount_w_gst);

    var purchase_total_prev = $('#purchase_total_prev').val();
    var purchase_stamping = $('#purchase_stamping').val();
    var purchase_other = $('#purchase_other').val();
    if(purchase_total_prev == ''){
      purchase_total_prev = 0;
    }
    if(purchase_stamping == ''){
      purchase_stamping = 0;
    }
    if(purchase_other == ''){
      purchase_other = 0;
    }
    var purchase_total_prev = parseFloat(purchase_total_prev);
    var purchase_stamping = parseFloat(purchase_stamping);
    var purchase_other = parseFloat(purchase_other);
    var purchase_total = purchase_total_prev + purchase_stamping + purchase_other;
    $('#purchase_total').val(purchase_total);



    // var purchase_advance = $('#purchase_advance').val();
    // var purchase_total = $('#purchase_total').val();
    // if(purchase_advance == ''){
    //   purchase_advance = 0;
    // }
    // if(purchase_total == ''){
    //   purchase_total = 0;
    // }
    // var purchase_advance = parseFloat(purchase_advance);
    // var purchase_total = parseFloat(purchase_total);
    // var purchase_due = purchase_total - purchase_advance;
    // $('#purchase_due').val(purchase_due);
  });

  $('.gst-table').on('keyup', 'input#purchase_stamping, input#purchase_other', function () {
    var purchase_total_prev = $('#purchase_total_prev').val();
    var purchase_stamping = $('#purchase_stamping').val();
    var purchase_other = $('#purchase_other').val();
    if(purchase_total_prev == ''){
      purchase_total_prev = 0;
    }
    if(purchase_stamping == ''){
      purchase_stamping = 0;
    }
    if(purchase_other == ''){
      purchase_other = 0;
    }
    var purchase_total_prev = parseFloat(purchase_total_prev);
    var purchase_stamping = parseFloat(purchase_stamping);
    var purchase_other = parseFloat(purchase_other);
    var purchase_total = purchase_total_prev + purchase_stamping + purchase_other;
    $('#purchase_total').val(purchase_total);
  });

  $('.gst-table').on('keyup', 'input#purchase_advance', function () {
    var purchase_advance = $('#purchase_advance').val();
    var purchase_total = $('#purchase_total').val();
    if(purchase_advance == ''){
      purchase_advance = 0;
    }
    if(purchase_total == ''){
      purchase_total = 0;
    }
    var purchase_advance = parseFloat(purchase_advance);
    var purchase_total = parseFloat(purchase_total);
    var purchase_due = purchase_total - purchase_advance;
    $('#purchase_due').val(purchase_due);
  });
</script>
</body>
</html>
