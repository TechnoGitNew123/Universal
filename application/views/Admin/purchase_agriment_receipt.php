<!DOCTYPE html>
<html>
<?php
$page = "party_list";
include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
  table{
    /* overflow: hidden; */
  }
  th, td { min-width:200px; }
  .sr_no, .td_btn{
    min-width:50px !important;
  }
  .td_w{
    min-width:100px !important;
  }
  html, body, .row{
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
          <div class="col-sm-6">
            <h1>Purchase Agreement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase Agreement</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php
            foreach ($purchase_agreement_data as $purchase_agreement_data) {
              $purchase_id = $purchase_agreement_data->purchase_id;
            }
            ?>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <table class="table table-bordered mb-0 invoice-table">
              <style media="screen">
                .invoice-table td{
                  Width:33% !important;
                    border: 1px solid #555!important;
                }
                .invoice-table{
                  margin-bottom:0px;
                  border: 1px solid #555!important;
                }
                .invoice-table p{
                  line-height: 15px;
                }
              </style>
        <tr>
          <td colspan="3">
            <div class="row">
              <div class="col-md-4">
                  <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt="">
              </div>
              <div class="col-md-4 text-center pt-2 pb-2">
                <h3><?php echo $company_name; ?></h3>
                <p   style="font-size:16px; margin-bottom:8px;">
                  <?php echo $company_address;
                  if($company_city != ''){ echo ', '.$company_city; }
                  if($company_district != ''){ echo ', '.$company_district; }
                  if($company_state != ''){ echo ', '.$company_state; }
                  ?>
                </p>
                <!-- <p  style="font-size:16px; margin-bottom:8px;" >Ph No. 0231-2646189</p> -->
                <p  style="font-size:16px; margin-bottom:8px;"> Mob No. <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?></p>
                <p  style="font-size:16px; margin-bottom:8px;">Email: <?php if($company_email != ''){ echo $company_email; } ?></p>
                <p  style="font-size:16px; margin-bottom:8px;">Website: <?php if($company_website != ''){ echo $company_website; } ?></p>
              </div>
              <div class="col-md-4 ">
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td style="border-right:0px!important; padding-left: 20px; padding-top:25px;" >
            <address>
              <br>
              <p style="font-size:16px; margin-bottom:5px;"><strong>Party Name and Address</strong></p>
             <p style="font-size:16px; margin-bottom:5px;"><?php echo $purchase_agreement_data->party_firm; ?></p>
             <p style="font-size:16px; margin-bottom:5px;">
               <?php echo $purchase_agreement_data->party_address.' '; ?>
               <!-- <?php echo $purchase_agreement_data->party_area.' '; ?>
               <?php echo $purchase_agreement_data->party_taluka.' '; ?>
               <?php echo $purchase_agreement_data->party_district.' '; ?> -->
              </p>
             <p style="font-size:16px; margin-bottom:5px;"> Contact No. <?php echo $purchase_agreement_data->party_mob1; ?></p>
            </address>
            </td>
          <td style="border-left:0px!important; border-right:0px!important;">
          </td>
          <td style="padding:0px!important;">
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b>PO No.  <?php echo $purchase_agreement_data->purchase_order_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"> <b>Date : </b>&nbsp;  <strong><?php echo $purchase_agreement_data->purchase_date; ?></strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
          <!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"><b>vehicle No.  MH-09 AK 1218</b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
         <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"> <b>Transport  </b>&nbsp;  </p> -->
        </td>
      </tr>
      </table>

      <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-botttom">
          <style media="screen">
          .table-bottom {
            border-collapse: collapse;
          }
          .table-bottom, tr, td{
            border: 1px solid #000;
            margin-left: auto;
            margin-right: auto;
          }
          </style>
          <thead>
          <tr>
            <th >Sr. No.</th>
            <th>Make</th>
            <th>Model No.</th>
            <th>Machine Serial no.</th>
            <th>Capacity</th>
            <th>Accuracy</th>
            <th>Class</th>
            <th>Platter Size</th>
            <th>GST</th>
            <th>Qty</th>
            <th>Rate</th>
            <th>Amount</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($purchase_trans_data as $trans_data) {
              $i++;
            ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $trans_data->make_name; ?></td>
            <td><?php echo $trans_data->product_model_no; ?></td>
            <td><?php echo $trans_data->machine_serial_no; ?></td>
            <td><?php echo $trans_data->capacity_name; ?></td>
            <td><?php echo $trans_data->accuracy_name; ?></td>
            <td><?php echo $trans_data->class_name; ?></td>
            <td><?php echo $trans_data->platter_size; ?></td>
            <td><?php echo $trans_data->purchase_trans_gst; ?></td>
            <td><?php echo $trans_data->purchase_trans_qty; ?></td>
            <td><?php echo $trans_data->purchase_trans_rate; ?></td>
            <td><?php echo $trans_data->purchase_trans_amount; ?></td>
          </tr>

          <?php if($trans_data->accessories != ''){ ?>
          <tr>
            <td><?php echo ++$i; ?></td>
            <td colspan="7"><?php echo $trans_data->accessories; ?></td>
            <td><?php echo $trans_data->purchase_descr_gst; ?></td>
            <td><?php echo $trans_data->purchase_descr_qty; ?></td>
            <td><?php echo $trans_data->purchase_descr_rate; ?></td>
            <td><?php echo $trans_data->purchase_descr_amount; ?></td>
          </tr>

        <?php } } ?>
        <?php
        $purchase_accss = $purchase_agreement_data->purchase_accss;
        if(isset($purchase_accss)){
          $val = explode('_',$purchase_accss);
        } ?>
          <tr>
            <td colspan="6">
              <p>Basic Price : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_basic_price, 2, '.', ''); ?></b> </p>
              <p>Govt Stamping :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_stamping, 2, '.', ''); ?></p>
              <p>Total : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_total, 2, '.', ''); ?></p>
              <p>Advance Received :  &nbsp;&nbsp;
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_advance, 2, '.', ''); ?></p>
              <p>Balance Due : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_due, 2, '.', ''); ?></p>
              <p>Delivery Period : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_del_period, 2, '.', ''); ?></p>
            </td>
            <td colspan="6"> <p>  <b>Accessories Guide :</b> </p>
                            <p> <input type="checkbox" <?php if(isset($purchase_accss) && $val[0] == 'Extra Display'){ echo 'checked'; } ?>> 1) Extra Display : Stand / On Machine / Detachable</p>
                            <p> <input type="checkbox" <?php if(isset($purchase_accss) && $val[1] == 'Battery'){ echo 'checked'; } ?>> 2) Battery </p>
                            <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[2] == 'Charger'){ echo 'checked'; } ?>> 3) Charger</p>
                            <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[3] == 'Wind'){ echo 'checked'; } ?>> 4) Wind Shield </p>
                            <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[4] == 'INTERFACE'){ echo 'checked'; } ?>> 5) Rs-232-C COMPUTER INTERFACE</p>
                            <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[5] == 'Bowl'){ echo 'checked'; } ?>> 6) BOWL : FLAT/ ROUND </p>
                            <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[6] == 'Others'){ echo 'checked'; } ?>> 7) Others</p>
             </td>
          </tr>

          <tr>
            <td colspan="12"> <p style="float:right;"> <b> For <?php echo $company_name; ?></b> </p>
            </td>
          </tr>

          <tr>
            <td colspan="4"> Receiver's Signature </td>
            <td colspan="4"> Carrier's Signature </td>
            <td colspan="4"> Auth. Signatory </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>



<br><br>



              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Receipt/purchase_agrement_print/<?php echo $purchase_id; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
