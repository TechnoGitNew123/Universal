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
                        <option value="<?php echo $party_list1->party_id; ?>"
                          <?php
                            if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }
                            elseif ($quotation_party) { if($party_list1->party_id == $quotation_party){ echo "selected"; } }
                          ?>>
                          <?php echo $party_list1->party_firm; ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                  <!-- <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div> -->
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
                          <option value="">Select Model</option>
                            <option selected value="<?php echo $trans_data->product_id ?>" ><?php echo $trans_data->product_model_no ?></option>
                            <?php foreach ($model_list as $model_list1) { ?>
                              <option value="<?php echo $model_list1->product_id; ?>"><?php echo $model_list1->product_model_no ?></option>
                            <?php } ?>
                          </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm " name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" placeholder="Machine Serial no.">
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                          <option selected value="<?php echo $trans_data->capacity_id ?>" ><?php echo $trans_data->capacity_name ?></option>
                          <?php foreach ($capacity_list as $capacity_list1) { ?>
                            <option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                          <option selected value="<?php echo $trans_data->accuracy_id ?>" ><?php echo $trans_data->accuracy_name ?></option>
                          <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                            <option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                          <option selected value="<?php echo $trans_data->class_id ?>" ><?php echo $trans_data->class_name ?></option>
                          <?php foreach ($class_list as $class_list1) { ?>
                            <option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm platter" name="input[<?php echo $i; ?>][platter_id]">
                          <option selected value="<?php echo $trans_data->platter_id ?>" ><?php echo $trans_data->platter_size ?></option>
                          <?php foreach ($platter_list as $platter_list1) { ?>
                            <option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][display_color_id]"  style="width: 100%;">
                          <?php foreach ($display_color_list as $display_color_list1) { ?>
                            <option value="<?php echo $display_color_list1->display_color_id; ?>" <?php if(isset($display_color_id)){ if($display_color_list1->display_color_id == $display_color_id){ echo "selected"; } }  ?>><?php echo $display_color_list1->display_color_name; ?></option>

                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][cabinate_color_id]"  style="width: 100%;">
                          <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
                            <option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>" <?php if(isset($cabinate_color_id)){ if($cabinate_color_list1->cabinet_color_id == $cabinate_color_id){ echo "selected"; } }  ?>><?php echo $cabinate_color_list1->cabinet_color_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <textarea class="form-control form-control-sm" name="input[<?php echo $i; ?>][accessories]" rows="3"><?php echo $trans_data->accessories ?></textarea>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm gst1" name="input[<?php echo $i; ?>][purchase_trans_gst]" value="<?php echo $trans_data->purchase_trans_gst ?>" placeholder="GST" required>
                        <input type="number" class="form-control form-control-sm mt-1 gst2" name="input[<?php echo $i; ?>][purchase_descr_gst]" value="<?php echo $trans_data->purchase_descr_gst ?>" placeholder="Acc GST">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm qty1" name="input[<?php echo $i; ?>][purchase_trans_qty]" value="<?php echo $trans_data->purchase_trans_qty ?>" placeholder="Qty" required>
                        <input type="number" class="form-control form-control-sm mt-1 qty2" name="input[<?php echo $i; ?>][purchase_descr_qty]" value="<?php echo $trans_data->purchase_descr_qty ?>" placeholder="Acc Qty">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm rate1" name="input[<?php echo $i; ?>][purchase_trans_rate]" value="<?php echo $trans_data->purchase_trans_rate ?>" placeholder="Rate" required>
                        <input type="number" class="form-control form-control-sm mt-1 rate2" name="input[<?php echo $i; ?>][purchase_descr_rate]" value="<?php echo $trans_data->purchase_descr_rate ?>" placeholder="Acc Rate">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm amount1 amount" name="input[<?php echo $i; ?>][purchase_trans_amount]" value="<?php echo $trans_data->purchase_trans_amount ?>" placeholder="Amount" readonly>
                        <input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input[<?php echo $i; ?>][purchase_descr_amount]" value="<?php echo $trans_data->purchase_descr_amount ?>" placeholder="Acc Amount" readonly>
                      </td>
                      <input type="hidden" name="input[<?php echo $i; ?>][purchase_trans_gst_amount]" class="gst_amount1 gst_amount" value="<?php echo $trans_data->purchase_trans_gst_amount ?>">
                      <input type="hidden" name="input[<?php echo $i; ?>][trans_acc_gst_amount]" class="gst_amount2 gst_amount" value="<?php echo $trans_data->trans_acc_gst_amount ?>">
                      <td class="td_btn"><?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger rem_row"></i></a> <?php } ?></td>
                    </tr>

                  <?php $i++; } }

                  else if($quotation_trans_data){
                    $i = 0;
                    $j = 0;
                    foreach ($quotation_trans_data as $trans_data) {
                    $j++;

                    ?>
                    <tr>
                      <td class="sr_no"><?php echo $j; ?></td>
                      <td>
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][make_id]" required>
                          <option value="">Select Make</option>
                          <!-- <option selected value="<?php echo $trans_data->make_id ?>" ><?php echo $trans_data->make_name ?></option> -->
                          <?php foreach ($make_list as $make_list1) { ?>
                            <option value="<?php echo $make_list1->make_id; ?>" <?php if(isset($trans_data->model_no_id) && $make_list1->make_id==$trans_data->make_id){ echo 'selected';} ?>><?php echo $make_list1->make_name ?></option>
                          <?php } ?>

                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm model_no" name="input[<?php echo $i; ?>][model_no_id]" required>
                          <option value="">Select Model No.</option>
                          <!-- <option selected value="<?php echo $trans_data->model_no_id ?>" ><?php echo $trans_data->product_model_no ?></option> -->
                          <?php foreach ($model_list as $model_list1) { ?>
                            <option value="<?php echo $model_list1->product_id; ?>" <?php if(isset($trans_data->model_no_id) && $model_list1->product_id==$trans_data->model_no_id){ echo 'selected';} ?>><?php echo $model_list1->product_model_no ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm " name="input[<?php echo $i; ?>][machine_serial_no]" value="<?php echo $trans_data->machine_serial_no ?>" placeholder="Machine Serial no.">
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm capacity" name="input[<?php echo $i; ?>][capacity_id]">
                            <option value="">Select Capacity</option>
                          <option selected value="<?php echo $trans_data->capacity_id ?>" ><?php echo $trans_data->capacity_name ?></option>
                          <?php foreach ($capacity_list as $capacity_list1) { ?>
                            <option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm accuracy" name="input[<?php echo $i; ?>][accuracy_id]">
                            <option value="">Select Accuracy</option>
                          <option selected value="<?php echo $trans_data->accuracy_id ?>" ><?php echo $trans_data->accuracy_name ?></option>
                          <?php foreach ($accuracy_list as $accuracy_list1) { ?>
                            <option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm class" name="input[<?php echo $i; ?>][class_id]">
                            <option>Select Class</option>
                          <option selected value="<?php echo $trans_data->class_id ?>" ><?php echo $trans_data->class_id ?></option>
                          <?php foreach ($class_list as $class_list1) { ?>
                            <option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select class="form-control select2 form-control-sm platter" name="input[<?php echo $i; ?>][platter_id]">
                          <option value="">Select Platter</option>
                          <option selected value="<?php echo $trans_data->platter_id ?>" ><?php echo $trans_data->platter_size ?></option>
                          <?php foreach ($platter_list as $platter_list1) { ?>
                            <option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][display_color_id]"  style="width: 100%;">
                          <?php foreach ($display_color_list as $display_color_list1) { ?>
                            <option value="<?php echo $display_color_list1->display_color_id; ?>" <?php if(isset($display_color_id)){ if($display_color_list1->display_color_id == $display_color_id){ echo "selected"; } }  ?>><?php echo $display_color_list1->display_color_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td class="td_w">
                        <select class="form-control select2 form-control-sm make_id" name="input[<?php echo $i; ?>][cabinate_color_id]"  style="width: 100%;">
                          <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
                            <option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>" <?php if(isset($cabinate_color_id)){ if($cabinate_color_list1->cabinet_color_id == $cabinate_color_id){ echo "selected"; } }  ?>><?php echo $cabinate_color_list1->cabinet_color_name; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <textarea class="form-control form-control-sm" name="input[<?php echo $i; ?>][accessories]" rows="3"><?php echo $trans_data->quotation_trans_acc ?></textarea>
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm gst1" name="input[<?php echo $i; ?>][purchase_trans_gst]" value="<?php echo $trans_data->quotation_trans_gst ?>" placeholder="GST" required>
                        <input type="number" class="form-control form-control-sm mt-1 gst2" name="input[<?php echo $i; ?>][purchase_descr_gst]" value="<?php echo $trans_data->trans_acc_gst ?>" placeholder="Acc GST">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm qty1" name="input[<?php echo $i; ?>][purchase_trans_qty]" value="<?php echo $trans_data->quotation_trans_qty ?>" placeholder="Qty" required>
                        <input type="number" class="form-control form-control-sm mt-1 qty2" name="input[<?php echo $i; ?>][purchase_descr_qty]" value="<?php echo $trans_data->trans_acc_qty ?>" placeholder="Acc Qty">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm rate1" name="input[<?php echo $i; ?>][purchase_trans_rate]" value="<?php echo $trans_data->quotation_trans_rate ?>" placeholder="Rate" required>
                        <input type="number" class="form-control form-control-sm mt-1 rate2" name="input[<?php echo $i; ?>][purchase_descr_rate]" value="<?php echo $trans_data->trans_acc_rate ?>" placeholder="Acc Rate">
                      </td>
                      <td class="td_w">
                        <input type="text" class="form-control form-control-sm amount1 amount" name="input[<?php echo $i; ?>][purchase_trans_amount]" value="<?php echo $trans_data->quotation_trans_amount ?>" placeholder="Amount" readonly>
                        <input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input[<?php echo $i; ?>][purchase_descr_amount]" value="<?php echo $trans_data->trans_acc_amount ?>" placeholder="Acc Amount" readonly>
                      </td>
                      <input type="hidden" name="input[<?php echo $i; ?>][purchase_trans_gst_amount]" class="gst_amount1 gst_amount" value="<?php echo $trans_data->quotation_trans_gst_amount ?>">
                      <input type="hidden" name="input[<?php echo $i; ?>][trans_acc_gst_amount]" class="gst_amount2 gst_amount" value="<?php echo $trans_data->trans_acc_gst_amount ?>">
                      <td class="td_btn"><?php if($j > 1){ ?> <a><i class="fa fa-trash text-danger rem_row"></i></a> <?php } ?></td>
                    </tr>
                  <?php  $i++; } } ?>
                </table>
              </div>
              <?php if(isset($purchase_accss)){
                $val = explode('_',$purchase_accss);
              } ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mt-3 mb-2" >
                    <input type="checkbox" name="extra_display" id="extra_display" value="Extra Display" <?php if(isset($purchase_accss) && $val[0] == 'Extra Display'){ echo 'checked'; } ?>>
                    <span> Extra Display : Stand / On Machine / Detachable</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="battery" id="battery" value="Battery" <?php if(isset($purchase_accss) && $val[1] == 'Battery'){ echo 'checked'; } ?>>
                    <span> Battery</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="charger" id="charger" value="Charger" <?php if(isset($purchase_accss) && $val[2] == 'Charger'){ echo 'checked'; } ?>>
                    <span> Charger</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="wind" id="wind" value="Wind" <?php if(isset($purchase_accss) && $val[3] == 'Wind'){ echo 'checked'; } ?>>
                    <span> Wind Shield</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="interface" id="interface" value="INTERFACE" <?php if(isset($purchase_accss) && $val[4] == 'INTERFACE'){ echo 'checked'; } ?>>
                    <span> Rs-232-C COMPUTER INTERFACE</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="bowl" id="bowl" value="Bowl" <?php if(isset($purchase_accss) && $val[5] == 'Bowl'){ echo 'checked'; } ?>>
                    <span> BOWL : FLAT/ ROUND</span>
                  </div>
                  <div class="form-group mb-2" >
                    <input type="checkbox" name="others" id="others" value="Others" <?php if(isset($purchase_accss) && $val[6] == 'Others'){ echo 'checked'; } ?>>
                    <span> Others</span>
                  </div>
                  <h5 class="my-4">Terms And Conditions</h5>
                  <div class="form-group" >
                    <textarea id="txt_terms" class="form-control form-control-sm" name="purchase_terms" rows="8"><?php if(isset($sale_terms)){ echo $sale_terms; }
                      elseif ($terms_list){
                        foreach ($terms_list as $terms) {
                          echo $terms->terms_name.', ';
                        }
                      }
                    ?></textarea>
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
                      <td><input type="number" class="form-control form-control-sm" name="purchase_basic_price" id="purchase_basic_price" value="<?php if(isset($purchase_basic_price)){ echo $purchase_basic_price; }elseif (isset($quotation_basic)) { echo $quotation_basic; } ?>" readonly></td>
                    </tr>
                    <tr>
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">GST</label></th>
                      <td><input type="number" class="form-control form-control-sm" name="purchase_gst" id="purchase_gst" value="<?php if(isset($purchase_gst)){ echo $purchase_gst; }elseif (isset($quotation_gst)) { echo $quotation_gst; } ?>"  readonly></td>
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
                      <td><input type="number" class="form-control form-control-sm" name="purchase_total" id="purchase_total" value="<?php if(isset($purchase_total)){ echo $purchase_total; }elseif (isset($quotation_total)) { echo $quotation_total; } ?>" readonly></td>
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
                      <th style="width:50%;" >  <label for="" class=" text-right col-form-label mr-3 mb-1">Delivery Period</label></th>
                      <td ><input type="text" class="form-control form-control-sm" name="purchase_del_period" id="purchase_del_period" value="<?php if(isset($purchase_del_period)){ echo $purchase_del_period; } ?>"></td>
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
    var row = '<tr>'+
      '<td class="sr_no">'+i+'</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm make_id" name="input['+i+'][make_id]" id="" required>'+
          '<option value="">Select Make</option>'+
          <?php foreach ($make_list as $make_list1) { ?>
            '<option value="<?php echo $make_list1->make_id; ?>"><?php echo $make_list1->make_name ?></option>'+
          <?php } ?>
        '</select>'+
      '</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm model_no" name="input['+i+'][model_no_id]" id="" required>'+
        '<option value="">Select Model</option>'+
      <?php foreach ($model_list as $model_list1) { ?>
        '<option value="<?php echo $model_list1->product_id; ?>"><?php echo $model_list1->product_model_no ?></option>'+
      <?php } ?>
      '</select>'+
      '</td>'+
      '<td class="td_w">'+
        '<input type="text" class="form-control form-control-sm " name="input['+i+'][machine_serial_no]" id="" placeholder="Machine Serial no.">'+
      '</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm capacity" name="input['+i+'][capacity_id]">'+
        '<option value="">Select Capacity</option>'+
        <?php foreach ($capacity_list as $capacity_list1) { ?>
          '<option value="<?php echo $capacity_list1->capacity_id; ?>"><?php echo $capacity_list1->capacity_name ?></option>'+
        <?php } ?>
        '</select>'+
      '</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm accuracy" name="input['+i+'][accuracy_id]">'+
        '<option value="">Select Accuracy</option>'+
        <?php foreach ($accuracy_list as $accuracy_list1) { ?>
          '<option value="<?php echo $accuracy_list1->accuracy_id; ?>"><?php echo $accuracy_list1->accuracy_name ?></option>'+
        <?php } ?>
        '</select>'+
      '</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm class" name="input['+i+'][class_id]">'+
        '<option value="">Select Class</option>'+
        <?php foreach ($class_list as $class_list1) { ?>
          '<option value="<?php echo $class_list1->class_id; ?>"><?php echo $class_list1->class_name ?></option>'+
        <?php } ?>
        '</select>'+
      '</td>'+
      '<td>'+
        '<select class="form-control select2 form-control-sm platter" name="input['+i+'][platter_id]">'+
        '<option value="">Select Platter</option>'+
        <?php foreach ($platter_list as $platter_list1) { ?>
          '<option value="<?php echo $platter_list1->platter_id; ?>"><?php echo $platter_list1->platter_size ?></option>'+
        <?php } ?>
        '</select>'+
      '</td>'+
      '<td class="td_w">'+
        '<select class="form-control select2 form-control-sm make_id" name="input['+i+'][display_color_id]" id="">'+
          <?php foreach ($display_color_list as $display_color_list1) { ?>
            '<option value="<?php echo $display_color_list1->display_color_id; ?>"><?php echo $display_color_list1->display_color_name ?></option>'+
          <?php } ?>
        '</select>'+
      '</td>'+
      '<td class="td_w">'+
        '<select class="form-control select2 form-control-sm make_id" name="input['+i+'][cabinate_color_id]" id="">'+
          <?php foreach ($cabinate_color_list as $cabinate_color_list1) { ?>
            '<option value="<?php echo $cabinate_color_list1->cabinet_color_id; ?>"><?php echo $cabinate_color_list1->cabinet_color_name ?></option>'+
          <?php } ?>
        '</select>'+
      '</td>'+
      '<td>'+
        '<textarea class="form-control form-control-sm" name="input['+i+'][accessories]" rows="3"></textarea>'+
      '</td>'+
      '<td class="td_w">'+
        '<input type="text" class="form-control form-control-sm gst1" name="input['+i+'][purchase_trans_gst]" value="" placeholder="GST" required>'+
        '<input type="number" class="form-control form-control-sm mt-1 gst2" name="input['+i+'][purchase_descr_gst]" value="" placeholder="Acc GST">'+
      '</td>'+
      '<td class="td_w">'+
        '<input type="text" class="form-control form-control-sm qty1" name="input['+i+'][purchase_trans_qty]" value="" placeholder="Qty" required>'+
        '<input type="number" class="form-control form-control-sm mt-1 qty2" name="input['+i+'][purchase_descr_qty]" value="" placeholder="Acc Qty">'+
      '</td>'+
      '<td class="td_w">'+
        '<input type="text" class="form-control form-control-sm rate1" name="input['+i+'][purchase_trans_rate]" value="" placeholder="Rate" required>'+
        '<input type="number" class="form-control form-control-sm mt-1 rate2" name="input['+i+'][purchase_descr_rate]" value="" placeholder="Acc Rate">'+
      '</td>'+
      '<td class="td_w">'+
        '<input type="text" class="form-control form-control-sm amount1 amount" name="input['+i+'][purchase_trans_amount]" value="" placeholder="Amount" readonly>'+
        '<input type="number" class="form-control form-control-sm mt-1 amount2 amount" name="input['+i+'][purchase_descr_amount]" value="" placeholder="Acc Amount" readonly>'+
      '</td>'+
      '<input type="hidden" name="input['+i+'][purchase_trans_gst_amount]" class="gst_amount1 gst_amount" value="">'+
      '<input type="hidden" name="input['+i+'][trans_acc_gst_amount]" class="gst_amount2 gst_amount" value="">'+
      '<td class="td_btn"></td>'+
    '</tr>';

    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
    $(this).closest('tr').next('tr').remove();
    $(this).closest('tr').remove();
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
  //       $(this).closest('tr').find('.rate1').val(data['sale_price']);
  //       $(this).closest('tr').find('.gst1').val('');
  //       $(this).closest('tr').find('.qty1').val('');
  //     }
  // 	});
  // });

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
    $('#purchase_basic_price').val(basic_amount);

    var gst_val = 0;
    $(".gst_amount").each(function() {
        var gst_amount = $(this).val();
        if(!isNaN(gst_amount) && gst_amount.length != 0) {
            gst_val += parseFloat(gst_amount);
        }
    });
    $('#purchase_gst').val(gst_val);

    var total_amount = basic_amount + gst_val;
    $('#purchase_total').val(total_amount);
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
    $('#purchase_basic_price').val(basic_amount);

    var gst_val = 0;
    $(".gst_amount").each(function() {
        var gst_amount = $(this).val();
        if(!isNaN(gst_amount) && gst_amount.length != 0) {
            gst_val += parseFloat(gst_amount);
        }
    });
    $('#purchase_gst').val(gst_val);

    var total_amount = basic_amount + gst_val;
    $('#purchase_total').val(total_amount);
  });

  $('.gst-table').on('keyup', 'input#purchase_stamping, input#purchase_other', function () {
    var purchase_basic_price = $('#purchase_basic_price').val();
    var purchase_gst = $('#purchase_gst').val();
    var purchase_stamping = $('#purchase_stamping').val();
    var purchase_other = $('#purchase_other').val();
    var purchase_advance = $('#purchase_advance').val();
    if(purchase_basic_price == ''){
      purchase_basic_price = 0;
    }
    if(purchase_gst == ''){
      purchase_gst = 0;
    }
    if(purchase_stamping == ''){
      purchase_stamping = 0;
    }
    if(purchase_other == ''){
      purchase_other = 0;
    }
    if(purchase_advance == ''){
      purchase_advance = 0;
    }
    var purchase_basic_price = parseFloat(purchase_basic_price);
    var purchase_gst = parseFloat(purchase_gst);
    var purchase_stamping = parseFloat(purchase_stamping);
    var purchase_other = parseFloat(purchase_other);
    var purchase_advance = parseFloat(purchase_advance);
    var purchase_total = purchase_basic_price + purchase_gst + purchase_stamping + purchase_other;
    var purchase_due = purchase_total - purchase_advance;
    $('#purchase_total').val(purchase_total);
    $('#purchase_due').val(purchase_total);

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
