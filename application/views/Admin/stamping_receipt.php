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
            <h1>Govt. Stamping Bill</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php
            foreach ($govt_stamp_data as $govt_stamp_data) {
              $govt_stamp_id = $govt_stamp_data->govt_stamp_id;
            }
            ?>            <!-- Main content -->
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
                <h3 > <?php echo $company_name; ?> </h3>
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
             <p style="font-size:16px; margin-bottom:5px;">To</p>
            <p style="font-size:16px; margin-bottom:5px;"><?php echo $govt_stamp_data->division_head.' '; ?></p>
            <p style="font-size:16px; margin-bottom:5px;"><?php echo $govt_stamp_data->division_name.' '; ?></p>
            <!-- <p style="font-size:16px; margin-bottom:5px;">DIST</p> -->
            </address>
            </td>
        <td style="border-right:0px!important; padding-left: 20px; padding-top:25px;" >
          <address>
            <br>
           <p style="font-size:16px; margin-bottom:5px;"><strong>Party Name and Address</strong></p>
          <p style="font-size:16px; margin-bottom:5px;"> <?php echo $govt_stamp_data->party_firm; ?></p>
          <p style="font-size:16px; margin-bottom:5px;">
             <?php echo $govt_stamp_data->party_address.' '; ?>
             <?php echo $govt_stamp_data->party_area.' '; ?>
             <?php echo $govt_stamp_data->party_taluka.' '; ?>
             <?php echo $govt_stamp_data->party_district.' '; ?>
           </p>
          <p style="font-size:16px; margin-bottom:5px;">Sate : <?php echo $govt_stamp_data->party_state.' '; ?></p>
          <p style="font-size:16px; margin-bottom:5px;"> Contact No. <?php echo $govt_stamp_data->party_mob1.' '; ?></p>
          </address>
          </td>
          <td style="padding:0px!important; border-left:0px!important;">
            <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important;"><b>No.  <?php echo $govt_stamp_data->govt_stamp_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
            <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important;"> <b>Date : </b>&nbsp;  <strong><?php echo $govt_stamp_data->govt_stamp_date; ?></strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
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
            <th>Sr. No.</th>
            <th>Make</th>
            <th>Model No.</th>
            <th>Machine Serial no.</th>
            <th>Capacity</th>
            <th>Min</th>
            <th>Accuracy</th>
            <th>Class</th>
            <th>LCR No.</th>
            <th>LCR Date</th>
            <th>Govt Fees</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $i = 0;
          $total = 0;
          foreach ($govt_stamp_trans_data as $trans_data) {
            $i++;
            $gov_fees = $trans_data->govt_fees;
            $total = $total + $gov_fees;
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $trans_data->make_name; ?></td>
            <td><?php echo $trans_data->model_no_id; ?></td>
            <td><?php echo $trans_data->machine_serial_no; ?></td>
            <td><?php echo $trans_data->capacity_name; ?></td>
            <td><?php echo $trans_data->min_name; ?></td>
            <td><?php echo $trans_data->accuracy_name; ?></td>
            <td><?php echo $trans_data->class_name; ?></td>
            <td><?php echo $trans_data->lcr_no; ?></td>
            <td><?php echo $trans_data->lcr_date; ?></td>
            <td><?php echo $trans_data->govt_fees; ?></td>
          </tr>
        <?php } ?>
          <tr style="border-bottom:0px!important;">
            <td colspan="6" style="border-bottom:0px!important;">  <p>Bill Amount In Words : <b>Rupees <?php echo $this->numbertowords->convert_number($total); ?> Only</b> </p> </td>
            <td colspan="3"  style=""> </td>
            <td colspan="3" style=""></td>
          </tr>
          <tr>
            <td colspan="3" style="border-bottom:0px!important; border-right:0px!important;"><p>V.C. No. <?php echo $govt_stamp_data->govt_stamp_vc_no; ?><br> <br> </p></td>
            <td colspan="3" style="border-bottom:0px!important; border-left:0px!important;"><p> DATE : <?php echo $govt_stamp_data->govt_stamp_vc_date; ?></p> </td>
            <td colspan="3" ><p>Govt Fee : </p> </td>
            <td colspan="3"  ><p> <b>&#8377; <?php echo number_format((float)$total, 2, '.', ''); ?></b> </p></td>
          </tr>
          <tr>
            <td colspan="3" style="border-bottom:0px!important; border-right:0px!important;"></td>
            <td colspan="3" style="border-bottom:0px!important; border-left:0px!important;"> </td>
            <td colspan="3"  ><p>Late Fee : </p> </td>
            <td colspan="3" ><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_late_fee, 2, '.', ''); ?></b> </p></td>
          </tr>
          <tr>
            <td colspan="3" style="border-bottom:0px!important; border-right:0px!important;"></td>
            <td colspan="3" style="border-bottom:0px!important; border-left:0px!important;"> </td>
            <td colspan="3"  ><p>Grand Total : </p> </td>
            <td colspan="3" ><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_late_fee + $total, 2, '.', ''); ?></b> </p></td>
          </tr>

          <tr>
            <td colspan="12" style="border-bottom:0px!important; border-right:0px!important;">
              <p><input type="checkbox" disabled <?php if($govt_stamp_data->govt_stamp_objection != ''){ echo 'checked'; } ?> > Received Above Machines/System For stamping & Verification, no any ojection <br>
              <input type="checkbox" disabled <?php if($govt_stamp_data->govt_stamp_condition != ''){ echo 'checked'; } ?> > Received our Machine in Good Condition. </p>
            </td>
          </tr>
          <tr>
            <td colspan="6"  style="border-right:0px!important;">  <p style="float:left; border-right:0px!important;"> Customer Signature </p>
            </td>
            <td colspan="6" style="border-left:0px!important;">  <p style="float:right; border-left:0px!important;"> <b> For <?php echo $company_name; ?> </b> </p>
            </td>
          </tr>
          <tr>
            <td colspan="12"> <p style="float:right;">  Auth. Signatory</p> </td>
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
                  <a href="<?php echo base_url() ?>Receipt/print_stamping_receipt/<?php echo $govt_stamp_id; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
