<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cash Memo </title>
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
  <section class="invoice">
    <?php
    foreach ($govt_stamp_data as $govt_stamp_data) {
      $govt_stamp_id = $govt_stamp_data->govt_stamp_id;
    }
    ?>
    <!-- title row -->
    <div class="row">
  <p style="text-align:center; font-size:22px;"> <b>Stamping Cash Memo</b>  </p>
</div>
    <table class="table table-bordered mb-0 invoice-table"  width="100%">
<style media="print">
p{
  margin:3px;
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
<td colspan="3">
    <p style="font-size:16px; margin-bottom:5px; font-weight:bold;">Legal Metrology Department, Pune. Repairs Licence No. : W & MD/Pune Division/Repair/Kop. 76      </p>
</td>
<tr>
  <td style="border-right:0px!important; padding-left: 20px; padding-top:0px;" >


    <p style="font-size:16px; margin-bottom:5px;">To</p>
    <p style="font-size:16px; margin-bottom:5px;">The Inspector Legal Metrology </p>
   <p style="font-size:16px; margin-bottom:5px;">DIVISION / CAMP : <?php echo $govt_stamp_data->division_head.' '; ?></p>
   <p style="font-size:16px; margin-bottom:5px;"><?php echo $govt_stamp_data->division_name.' '; ?></p>
   <!-- <p style="font-size:16px; margin-bottom:5px;">DIST</p> -->


    </td>
    <td style="border-right:0px!important; padding-left: 20px; padding-top:0px;" >



       <p style="font-size:16px; margin-bottom:5px;"><strong>Party Name and Address</strong></p>
      <p style="font-size:16px; margin-bottom:5px;"> <?php echo $govt_stamp_data->party_firm; ?></p>
      <p style="font-size:16px; margin-bottom:5px;">
         <?php echo $govt_stamp_data->party_address.' '; ?>
         <!-- <?php echo $govt_stamp_data->party_area.' '; ?>
         <?php echo $govt_stamp_data->party_taluka.' '; ?>
         <?php echo $govt_stamp_data->party_district.' '; ?> -->
       </p>
      <!-- <p style="font-size:16px; margin-bottom:5px;">Sate : <?php echo $govt_stamp_data->party_state.' '; ?></p> -->
      <p style="font-size:16px; margin-bottom:5px;"> Contact No. <?php echo $govt_stamp_data->party_mob1.' '; ?></p>


      </td>
  <td valign="top" style="padding:0px!important; border-left:0px!important;">
  <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important; margin-left:0px;"><b>cash Memo No.  <?php echo $govt_stamp_data->govt_stamp_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
  <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important; margin-left:0px;">Date : </b>&nbsp;  <strong><?php echo $govt_stamp_data->govt_stamp_date; ?></strong></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
  <p style="font-size:14px; margin-bottom:0px; margin-top:0px; padding: 3px; border-left:1px solid #000!important; margin-left:0px;">Trade : <b> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
  </td>
</tr>
<tr>
  <td colspan="3" style="border-bottom: 0px;">   <p style="font-size:16px; margin-bottom:5px;"> Please arrange To Reverify & Stamp the Following Party's Machine</p> </td>
</tr>
</table>


<div class="row">
<div class="col-12 table-responsive">
  <table class="table table-botttom" width="100%">
    <style media="print">
    .table-bottom {
border-collapse: collapse;
}

.table-bottom, tr, td, th{

    border: 1px solid #000;
    font-size: 14px;
    margin-left: auto;
    margin-right: auto;
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
      <th>Govt. Fees</th>
      <th>Service Fees</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $total = 0;
      foreach ($govt_stamp_trans_data as $trans_data) {
        $i++;
        $ser_charge = $trans_data->ser_charge;
        $total = $total + $ser_charge;
      ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $trans_data->make_name; ?></td>
        <td><?php echo $trans_data->product_model_no; ?></td>
        <td><?php echo $trans_data->machine_serial_no; ?></td>
        <td><?php echo $trans_data->capacity_name; ?></td>
        <td><?php echo $trans_data->min_name; ?></td>
        <td><?php echo $trans_data->accuracy_name; ?></td>
        <td><?php echo $trans_data->class_name; ?></td>
        <td><?php echo $trans_data->lcr_no; ?></td>
        <td><?php echo $trans_data->lcr_date; ?></td>
        <td><?php echo $trans_data->govt_fees; ?></td>
        <td><?php echo $trans_data->ser_charge; ?></td>
      </tr>
    <?php } ?>

    <tr style="border-bottom:0px!important;">
      <td colspan="7" style="border-bottom:0px!important;">  <p>Bill Amount In Words : <b>Rupees <?php echo $this->numbertowords->convert_number($total); ?> Only</b> </p> </td>
        <td colspan="2"  style="border-right:0px!important;"></td>
        <td colspan="3" style="border-left:0px!important;"></td>
    </tr>

    <tr style="border-bottom:0px!important;">
      <td colspan="4" style="border-bottom:0px!important; border-right:0px!important; border-bottom:0px!important;"><p style="font-size:12px;">V.C. No. <?php echo $govt_stamp_data->govt_stamp_vc_no; ?> </p></td>
      <td colspan="3" style="border-bottom:0px!important; border-left:0px!important;  border-bottom:0px!important;"><p style="font-size:12px;"> DATE : <?php echo $govt_stamp_data->govt_stamp_vc_date; ?></p> </td>
      <td colspan="3"><p style="text-align:right;"><b>Govt. Fees : </b></p> </td>
      <td colspan="2"><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_gov_fees, 2, '.', ''); ?></b> </p></td>
    </tr>
    <tr style="border-bottom:0px!important;border-top:0px!important;">
      <td colspan="7" style="border:0px!important; "></td>
      <td colspan="3"><p style="text-align:right;"><b>Service Charge : </b></p> </td>
      <td colspan="2"><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_ser_charge, 2, '.', ''); ?></b> </p></td>
    </tr>
    <tr style="border-bottom:0px!important;border-top:0px!important;">
      <td colspan="7" style="border:0px!important;"></td>
      <td colspan="3"><p style="text-align:right;"><b>Late Fee : </b></p> </td>
      <td colspan="2"><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_late_fee, 2, '.', ''); ?></b> </p></td>
    </tr>
    <tr style="border-bottom:0px!important;border-top:0px!important;">
      <td colspan="7" style="border:0px!important;"></td>
      <td colspan="3"><p style="text-align:right;"><b>H.C.T.A.D.A : </b></p> </td>
      <td colspan="2"><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_hctada, 2, '.', ''); ?></b> </p></td>
    </tr>
    <tr style="border-bottom:0px!important;border-top:0px!important;">
      <td colspan="7" style="border:0px!important;"></td>
      <td colspan="3"><p style="text-align:right;"><b>Grand Total : </b></p> </td>
      <td colspan="2"><p> <b>&#8377; <?php echo number_format((float)$govt_stamp_data->govt_stamp_total, 2, '.', ''); ?></b> </p></td>
    </tr>

    <tr style="border-top:0px!important; border-bottom:0px!important;">
      <td colspan="12" style="border-bottom:0px!important; border-top:0px!important; border-right:0px!important;">
        <p style="font-size:12px;"><input type="checkbox" disabled <?php if($govt_stamp_data->govt_stamp_objection != ''){ echo 'checked'; } ?>>  Received Above Machines/System For stamping & Verification, no any Objection <br>
          <input type="checkbox" disabled <?php if($govt_stamp_data->govt_stamp_condition != ''){ echo 'checked'; } ?>> Received our Machine in Good Condition. </p>
      </td>
    </tr>



    <tr  style="border-top:0px!important; border-bottom:0px!important;">
      <td colspan="6"  style="border-right:0px!important;border-top:0px!important; border-bottom:0px!important;">  <p style="float:left; border-right:0px!important;"> Customer Signature </p>
      </td>
      <td colspan="6" style="border-left:0px!important; border-top:0px!important; border-bottom:0px!important;">  <p style="float:right; border-left:0px!important;"> <b> For <?php echo $company_name; ?> </b> </p>
      </td>
    </tr>

    <tr style="border-top:0px!important;">

      <td  colspan="12" style="border-top:0px!important;"> <p style="float:right;">  Auth. Signatory</p> </td>
    </tr>
    </tbody>
  </table>
  <div class="row">
     <p style="text-align:center;"> Subject to Kolhapur Jurisidiction</p>
  </div>
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
