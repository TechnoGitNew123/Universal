<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sale Bill</title>
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
    foreach ($sale_bill_data as $sale_bill_data) {
      $sale_id = $sale_bill_data->sale_id;
    }
  ?>
  <section class="invoice">
    <!-- title row -->
    <div class="row">
  <p style="text-align:center; margin-bottom: 10px; font-size:17px;"> <b>Sale Bill</b>  </p>
</div>

    <table class="table table-bordered mb-0 invoice-table"  width="100%">
<style media="print">
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
table{
  border-collapse: collapse;
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
        <h3 style="font-size:18px; text-align:center; margin:5px; " ><?php echo $company_name; ?></h3>
        <p   style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; "><?php echo $company_address; ?> </p>
        <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; " >Mob No. <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?></p>
        <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:left;"> </p> -->
        <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">Email: <?php if($company_email != ''){ echo $company_email; } ?>   Website: <?php if($company_website != ''){ echo $company_website; } ?></p>
      </div>
      <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center;">Website: www.universaldigital.net</p>  -->
     </td>

</tr>
<tr>
<td style="border-right:0px!important; padding-left: 20px; padding-top:5px;" >
 <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><strong>Party Name and Address</strong></p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"> <?php echo $sale_bill_data->party_firm; ?></p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"> <?php echo $sale_bill_data->party_address.' '; ?></p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;">Sate : Maharashtra</p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"> Contact No. <?php echo $sale_bill_data->party_mob1; ?></p> <br>
  </td>
<td style="border-left:0px!important; border-right:0px!important;">

</td>
<td style="padding:0px!important;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b> Sale Bill No. :  <?php echo $sale_bill_data->sale_bill_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Date : </b>&nbsp;  <strong><?php echo $sale_bill_data->sale_date; ?></strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"><b>DC No. : <?php echo $sale_bill_data->sale_challan_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Employee : <?php echo $sale_bill_data->user_name; ?>  </b>&nbsp;  </p>
<!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;" ><b>Terms : &nbsp; Credit </b></p> -->
</td>
</tr>
</table>


<div class="row">
<div class="col-12 table-responsive">
<table class="table table-botttom"  width="100%">
<style media="print">
.table-bottom {
border-collapse: collapse!important;
  Width:100%!important;
}

.table-bottom, tr, td, th{

border: 1px solid #000;

margin-left: auto;
margin-right: auto;
}

</style>
<style media="screen">
.table-bottom {
border-collapse: collapse!important;
  Width:100%!important;
}

.table-bottom, tr, td, th{

border: 1px solid #000;

margin-left: auto;
margin-right: auto;
}

</style>
<thead>





  <tr>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;"> Sr. No.</p> </th>
    <th Width="18%"> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Make</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Model No.</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">M/C Sr. no.</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Capacity</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Accuracy</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Class</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Platter Size</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Qty</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Rate</p> </th>
    <th> <p style="font-size:12px; text-align:center; margin-bottom:3px; margin-top:3px;">Amount</p> </th>
  </tr>
</thead>
<tbody>
  <?php
    $i = 0;
    foreach ($sale_trans_data as $trans_data) {
      $i++;
  ?>
    <tr>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $i; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->make_name; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->model_no_id; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->machine_serial_no; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->capacity_name; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->accuracy_name; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->class_name; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->platter_size; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->sale_trans_qty; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->sale_trans_rate; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->sale_trans_amount; ?></p> </td>
    </tr>
  <?php } ?>
<tr>
  <td colspan="6"></td>
    <td colspan="3" style="border-right:0px; padding-left:10px;"><p style="font-size:14px; margin:5px;">BASIC AMOUNT : </p> </td>
    <td colspan="3" style="border-left:0px;"><p style="font-size:14px; margin:5px;"> <b><?php echo $sale_bill_data->total_base_amount; ?></b> </p></td>
</tr>

<tr>
  <td colspan="6"> <p style="margin:5px;">Bill Amount In Words : <b>Rupees <?php echo $this->numbertowords->convert_number($sale_bill_data->sale_total); ?> Only</b> </p> </td>
  <td colspan="3"><p style=" padding-left:10px; margin:5px;">GRAND TOTAL : </p> </td>
  <td colspan="3"><p style=" padding-left:10px; margin:5px;"> <b><?php echo $sale_bill_data->sale_total; ?></b> </p></td>
</tr>

<tr style="border-bottom:0px!important;">
  <td colspan="12" style="border-bottom:0px!important;"> <p style="float:right; margin:5px;"> <b> For <?php echo $company_name; ?> <br> </b> </p>
  </td>
</tr>

<tr style="border-top:0px!important;">
  <td colspan="4" style=" padding-left:10px; border-right:0px!important; border-top:0px!important; padding-bottom: 5px;"> <br><br> Receiver's Signature </td>
  <td colspan="4" style=" padding-left:10px; border-left:0px!important; border-right:0px!important; padding-bottom: 5px; border-top:0px!important;"> <br><br> Carrier's Signature </td>
  <td colspan="4" style=" padding-left:10px; border-left:0px!important; border-top:0px!important; padding-bottom: 5px;"> <br><br>  Auth. Signatory </td>
</tr>
</tbody>
</table>
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
