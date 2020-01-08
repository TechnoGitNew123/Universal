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
            <h1>Quotation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quotation</li>
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
            foreach ($quotation_data as $quotation_data) {
              $quotation_id = $quotation_data->quotation_id;
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
                <h3 ><?php echo $company_name; ?> </h3>
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
        <tr style="border-bottom: 0px!important; ">
          <td colspan="2" style="border-right:0px!important; padding-left: 20px; padding-top:25px; border-bottom: 0px!important;" >
            <br>
            <p style="font-size:16px; margin-bottom:5px;"><strong>Party Name and Address</strong></p>
           <p style="font-size:16px; margin-bottom:5px;"><?php echo $quotation_data->party_firm; ?></p>
           <p style="font-size:16px; margin-bottom:5px;">
             <?php echo $quotation_data->party_address.' '; ?>
             <?php echo $quotation_data->party_area.' '; ?>
             <?php echo $quotation_data->party_taluka.' '; ?>
             <?php echo $quotation_data->party_district.' '; ?>
            </p>
           <p style="font-size:16px; margin-bottom:5px;">Sate : <?php echo $quotation_data->party_state.' '; ?></p>
           <p style="font-size:16px; margin-bottom:5px;"> Contact No. <?php echo $quotation_data->party_mob1.' '; ?></p>
            </td>

          <td style="padding:0px!important; border-left:0px!important; border-bottom: 0px!important; ">
          <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important;"><b>Quotation No.  <?php echo $quotation_data->quotation_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
          <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important;"><b>Date : </b>&nbsp;  <strong><?php echo $quotation_data->quotation_date; ?></strong></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
          <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important;"> <b>Person Name : </b>&nbsp;&nbsp;&nbsp; <?php echo $quotation_data->quotation_person; ?>  </p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
          </td>
      </tr>

      <tr style="border-top:0px!important; ">
        <td colspan="3" style="border-top:0px!important; ">
          <p style="padding-left:15px;"> <br><br> Dear Sir,</p>
          <p style="padding-left:15px;">We are Pleased to introduce ourselves as state Govt. lienses & authorised Stockiest of
            one of the leading manufacturers of electronic weighing scale & system in India having 54
            branch offices as well as well as more than 150 dealers all over country An ISO 9001:2008
            company having 2 manufacturing at Mumbai (Maharashtra) Please find below our best competitive
             price for the machines required by your reputed oranization. </p>
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
            <th>Accuracy</th>
            <th>Class</th>
            <th>Platter Size</th>
            <th>GST</th>
            <!-- <th>Qty</th> -->
            <th>Rate</th>
            <!-- <th>Amount</th> -->

          </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($quotation_trans_data as $trans_data) {
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
            <td><?php echo $trans_data->quotation_trans_gst; ?></td>
            <td><?php echo $trans_data->quotation_trans_rate; ?></td>
          </tr>

          <?php if($trans_data->quotation_trans_acc != ''){ ?>
          <tr>
            <td><?php echo ++$i; ?></td>
            <td colspan="7"><?php echo $trans_data->quotation_trans_acc; ?></td>
            <td><?php echo $trans_data->trans_acc_gst; ?></td>
            <td><?php echo $trans_data->trans_acc_rate; ?></td>
          </tr>

        <?php } } ?>
          <tr style="border-top:0px!important; border-bottom: 0px!important;">
            <td colspan="6" style="border-top:0px!important;border-bottom: 0px!important; ">
              <p style="padding-left:15px;"> <br> <b> Terms & Condition </b> </p>
              <p style="padding-left:15px;">i)GST @ 18% on the the purches of Good's(Extra) </p>
              <p style="padding-left:15px;">ii)Warranty : We stand warranty for electronic equipment against any manufacturing defects for the period of 12 months form installation. </p>
              <p style="padding-left:15px;">iii)Payment Terms: 100% advance by D.D. or cheque along with purchase order.  </p>
              <p style="padding-left:15px;">iv)Delivery : Same day against receipt receipt of confirmed order with payment.  </p>
              <p style="padding-left:15px;">v)Validity of this quotation : 10 days. </p>
              <p style="padding-left:15px;">vi)Stamping : First year Stamping and Verification will be done by the us. </p>
              <p style="padding-left:15px;"> </p>
            </td>

              <td colspan="4" valigh="top">
                   <p style="padding-left:15px!important;"> <b> Basic Amount:  </b> <?php echo $quotation_data->quotation_basic; ?> </p> <hr style="border-bottom:1px solid #000;" >
                   <p style="padding-left:15px!important;"> <b> GST Amount:  </b> <?php echo $quotation_data->quotation_gst; ?></p> <hr style="border-bottom:1px solid #000;" >
                   <p style="padding-left:15px!important;"> <b> Total Amount:  </b> <?php echo $quotation_data->quotation_total; ?> </p>
              </td>

        </tr>
          <tr style="border-bottom:0px;">
            <td colspan="6"  style="border-right:0px!important; border-bottom:0px;">  <p style="float:left; border-right:0px!important;"> Any variations or applications of the statutory levies at the time of supply. <br> will be charged to your account </p>
            </td>
            <td colspan="6" style="border-left:0px!important; border-bottom:0px;">  <p style="float:right; border-left:0px!important;"> <b> For Universal Digital System </b> </p>
            </td>
          </tr>

          <tr style="border-top:0px;">
            <td colspan="6"  style="border-right:0px!important; border-top:0px;">  <p style="float:left; border-right:0px!important;">Waiting for your valuable order. </p>
            </td>
            <td colspan="6" style="border-left:0px!important; border-top:0px;">  <p style="float:right; border-left:0px!important;"> Auth Signatory </p>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <br><br>              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Receipt/quotation_receipt_print/<?php echo $quotation_id; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
