<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quotation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <?php
  foreach ($quotation_data as $quotation_data) {
    $quotation_id = $quotation_data->quotation_id;
  }
  ?>
  <section class="invoice">
    <!-- title row -->
    <div class="row">
  <p style="text-align:center; font-size:17px;"> <b>Quotation</b>  </p>
</div>

    <table class="table table-bordered mb-0 invoice-table"  width="750">
<style media="print">
p{
  margin:3px;
  font-size: 14px;
}
table{
  border-collapse: collapse;
}
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
.mx-auto{
  margin-left: auto;
  margin-right: auto;
}
</style>

<style media="screen">
p{
  margin:3px;
}
table{
  border-collapse: collapse;
  text-align: center;
}
.invoice-table td{
  /* Width:33% !important; */
    border: 1px solid #555!important;
}
.invoice-table{
  margin-bottom:0px;
  border: 1px solid #555!important;
}
.invoice-table p{
  line-height: 15px;
}
.mx-auto{
  margin-left: auto;
  margin-right: auto;
}
</style>

<tr>
  <td colspan="3" width="80%" style="border-right:0px!important; border-left:0px!important;">
    <div style="float:left;">
      <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt="">
    </div>
    <div style="">
      <h3 style="font-size:18px; text-align:center; margin:5px; " ><?php echo $company_name; ?> </h3>
      <p   style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">
        <?php echo $company_address;
        if($company_city != ''){ echo ', '.$company_city; }
        if($company_district != ''){ echo ', '.$company_district; }
        if($company_state != ''){ echo ', '.$company_state; }
        ?>
      </p>
      <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; " >Mob No. <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?></p>
      <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:left;"> </p> -->
      <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">Email: <?php if($company_email != ''){ echo $company_email; } ?> Website: <?php if($company_website != ''){ echo $company_website; } ?></p>

    </div>
    <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center;">Website: www.universaldigital.net</p>  -->
   </td>
</tr>
<tr>
  <tr style="border-bottom: 0px!important; ">
    <td colspan="2" style="border-right:0px!important; text-align: left; padding-left: 20px; padding-top:25px; border-bottom: 0px!important;" >
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

    <td valign="top" style="padding:0px!important; border-left:0px!important; border-bottom: 0px!important; ">
    <p style="font-size:14px; margin-bottom:0px; margin-top:0px; margin-left:0px; padding: 3px; border-left:1px solid #000!important;"><b>Quotation No. &nbsp;&nbsp;&nbsp;  <?php echo $quotation_data->quotation_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
    <p style="font-size:14px; margin-bottom:0px; margin-top:0px; margin-left:0px; padding: 3px; border-left:1px solid #000!important;"><b>Date : </b>&nbsp;&nbsp;&nbsp;  <strong><?php echo $quotation_data->quotation_date; ?></strong></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
    <p style="font-size:14px; margin-bottom:0px; margin-top:0px; margin-left:0px; padding: 3px; border-left:1px solid #000!important;"> <b>Person Name : </b>&nbsp;&nbsp;&nbsp; Vaibhav Patil </p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
    </td>
</tr>
<tr style="border-top:0px!important; ">
  <td colspan="3" style="border-top:0px!important; text-align:justify;">
    <p style="padding-left:15px;"> <br><br> Dear Sir,</p>
    <p style="padding-left:15px;text-align:justify; padding-right:20px;">We are Pleased to introduce ourselves as state Govt. lienses & authorised Stockiest of
      one of the leading manufacturers of electronic weighing scale & system in India having 54
      branch offices as well as well as more than 150 dealers all over country An ISO 9001:2008
      company having 2 manufacturing at Mumbai (Maharashtra) Please find below our best competitive
       price for the machines required by your reputed oranization. <br> <br> </p>
  </td>
</tr>
</table>


<div class="row">
<div class="col-12 table-responsive">
  <table class="table table-botttom" width="750">
    <style media="print">
      .table-bottom {
        border-collapse: collapse;
      }
      .table-bottom, tr, td, th{
        border: 1px solid #000;
        margin-left: auto;
        margin-right: auto;
      }
      .ctr{
        text-align: center;
        padding: 2px;
      }
      .table-bottom th{
        font-size: 12px!important;
      }
    </style>

    <style media="screen">
      .table-bottom {
        border-collapse: collapse;
        text-align: center;
      }
      .table-bottom, tr, td, th{
        border: 1px solid #000;

        margin-left: auto;
        margin-right: auto;
      }
        .table-bottom th{
          font-size: 12px!important;
        }
    </style>
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th width="18%">Make</th>
        <th width="18%">Model No.</th>
        <th>M/C Sr. No. </th>
        <th>Capacity</th>
        <th>Accuracy</th>
        <th>Class</th>
        <th>Platter Size</th>
        <!-- <th>GST(%)</th> -->
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
      <td class="ctr"><?php echo $i; ?></td>
      <td class="ctr"><?php echo $trans_data->make_name; ?></td>
      <td class="ctr"><?php echo $trans_data->product_model_no; ?></td>
      <td class="ctr"><?php echo $trans_data->machine_serial_no; ?></td>
      <td class="ctr"><?php echo $trans_data->capacity_name; ?></td>
      <td class="ctr"><?php echo $trans_data->accuracy_name; ?></td>
      <td class="ctr"><?php echo $trans_data->class_name; ?></td>
      <td class="ctr"><?php echo $trans_data->platter_size; ?></td>
      <!-- <td class="ctr"><?php echo $trans_data->quotation_trans_gst; ?></td> -->
      <!-- <td class="ctr"><?php echo $trans_data->quotation_trans_qty; ?></td> -->
      <td class="ctr"><?php echo $trans_data->quotation_trans_rate; ?></td>
      <!-- <td class="ctr"><?php echo $trans_data->quotation_trans_amount; ?></td> -->
    </tr>
    <?php if($trans_data->quotation_trans_acc != ''){ ?>
    <tr>
      <td class="ctr"><?php echo ++$i; ?></td>
      <td colspan="7" class="ctr"><?php echo $trans_data->quotation_trans_acc; ?></td>
      <!-- <td class="ctr"><?php echo $trans_data->trans_acc_gst; ?></td> -->
      <!-- <td class="ctr"><?php echo $trans_data->trans_acc_qty; ?></td> -->
      <td class="ctr"><?php echo $trans_data->trans_acc_rate; ?></td>
      <!-- <td class="ctr"><?php echo $trans_data->trans_acc_amount; ?></td> -->
    </tr>

  <?php } } ?>
      <tr style="border-top:0px!important; border-bottom: 0px!important;">
        <td colspan="12" style="border-top:0px!important;border-bottom: 0px!important; ">
          <p style="padding-left:15px;"> <br> <b> Terms & Condition </b> </p>
          <p style="padding-left:15px;">i)GST @ 18% on the the purches of Good's(Extra) </p>
          <p style="padding-left:15px;">ii)Warranty : We stand warranty for electronic equipment against <br> any manufacturing defects for the period of 12 months form installation. </p>
          <p style="padding-left:15px;">iii)Payment Terms: 100% advance by D.D. or cheque along with purchase order.  </p>
          <p style="padding-left:15px;">iv)Delivery : Same day against receipt receipt of confirmed order with payment.  </p>
          <p style="padding-left:15px;">v)Validity of this quotation : 10 days. </p>
          <p style="padding-left:15px;">vi)Stamping : First year Stamping and Verification will be done by the us. </p>
          <p style="padding-left:15px;"> </p>
        </td>
    </tr>
      <tr style="border-bottom:0px; border-top:0px;">
        <td colspan="6"  style="border-right:0px!important; border-bottom:0px; border-top:0px;">  <p style="float:left; border-right:0px!important;padding-left:15px;"> Any variations or applications of the statutory levies at the time of supply. <br> will be charged to your account </p>
        </td>
        <td colspan="6" style="border-left:0px!important; border-bottom:0px; border-top:0px;">  <p style="float:right; border-left:0px!important;"> <b> For Universal Digital System </b> </p>
        </td>
      </tr>

      <tr style="border-top:0px;">
        <td colspan="6"  style="border-right:0px!important; border-top:0px;">  <p style="float:left; border-right:0px!important;padding-left:15px;">Waiting for your valuable order. </p>
        </td>
        <td colspan="6" style="border-left:0px!important; border-top:0px;">  <p style="float:right; border-left:0px!important;"> Auth Signatory </p>
        </td>
      </tr>
    </tbody>
  </table>

</div>
<!-- /.col -->
</div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  window.addEventListener("load", window.print());

</script>


</body>
</html>
