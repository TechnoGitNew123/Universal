<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
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
    <!-- title row -->
    <?php
    foreach ($delivery_challan_data as $delivery_challan_data) {   }
    ?>
    <div class="row">
  <p style="text-align:center; margin-bottom: 10px; font-size:17px;"> <b>Delivery Challan</b>  </p>
</div>
    <table class="table table-bordered mb-0 invoice-table"  width="700">
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
  <!-- <td width="20%" style="border-right:0px!important;">  <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt=""></td> -->
  <td colspan="3" width="80%" style="border-right:0px!important; border-left:0px!important;">
    <div style="float:left;">
      <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt="">
    </div>
    <div style="">
      <h3 style="font-size:18px; text-align:center; margin:5px; " ><?php echo $company_name; ?> </h3>
      <p   style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">
        <?php echo $company_address;
        if($company_city != ''){ echo ', '.$company_city; }
        // if($company_district != ''){ echo ', '.$company_district; }
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
<td style="border-right:0px!important; padding-left: 20px; padding-top:5px;" >
   <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><strong>Party Name and Address</strong></p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><?php echo $delivery_challan_data->party_firm; ?></p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;">
    <?php echo $delivery_challan_data->party_address.' '; ?>
    <!-- <?php echo $delivery_challan_data->party_area.' '; ?>
    <?php echo $delivery_challan_data->party_taluka.' '; ?>
    <?php echo $delivery_challan_data->party_district.' '; ?> -->
  </p>
  <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"> Contact No. <?php echo $delivery_challan_data->party_mob1.' '; ?>
  <br> GST No. : <?php echo $delivery_challan_data->party_gst_no.' '; ?>
  </p>

  </td>
<td style="border-left:0px!important; border-right:0px!important;">

</td>
<td style="padding:0px!important;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b>DC No.  <?php echo $delivery_challan_data->delivery_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Date : </b>&nbsp;  <strong><?php echo $delivery_challan_data->delivery_date; ?></strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"><b>Vehicle No. : <?php echo $delivery_challan_data->delivery_docket_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Transport : <?php echo $delivery_challan_data->delivery_transport; ?></b>&nbsp;  </p>
<!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;" ><b>Terms : &nbsp; Credit </b></p> -->
</td>
</tr>
</table>


<div class="row">
<div class="col-12 table-responsive">
<table class="table table-botttom"  width="700">
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
  <th> <p >S.N</p> </th>
  <th Width="18%" > <p >Make</p> </th>
  <th  Width="18%"> <p >Model No.</p> </th>
  <th> <p >M/C Sr No.</p> </th>
  <th> <p >Capacity</p></th>
  <th> <p >Accuracy</p> </th>
  <th> <p >Class</p> </th>
  <th> <p >Platter Size</p> </th>
  <!-- <th> <p >GST</p> </th> -->
  <th> <p >Qty</p> </th>
  <!-- <th> <p >Rate</p> </th> -->
  <!-- <th> <p >Amount</p> </th> -->
</tr>
</thead>
<tbody>
<?php
  $i = 0;
  foreach ($challan_trans_data as $trans_data) {
    $i++;
  ?>
<tr>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $i; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->make_name; ?></p></td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->product_model_no; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->machine_serial_no; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->capacity_name; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->accuracy_name; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->class_name; ?></p> </td>
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->platter_size; ?></p> </td>
  <!-- <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->delivery_trans_gst; ?></p> </td> -->
  <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->delivery_trans_qty; ?></p> </td>
  <!-- <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->delivery_trans_rate; ?></p> </td> -->
  <!-- <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->delivery_trans_amount; ?></p> </td> -->
</tr>
<?php } ?>
<!-- <tr>
  <td colspan="5"></td>
    <td colspan="2" style="border-right:0px; padding-left:10px;"><p style="font-size:12px; margin:5px;">Basic Amount : </p> </td>
    <td colspan="2" style="border-left:0px;"><p style="font-size:14px; margin:5px;"> <b><?php echo $delivery_challan_data->delivery_basic; ?></b> </p></td>
</tr> -->
<!-- <tr>
  <td colspan="5"></td>
    <td colspan="2" style="border-right:0px; padding-left:10px;"><p style="font-size:12px; margin:5px;">GST Amount : </p> </td>
    <?php  $basic_value=$delivery_challan_data->delivery_basic;
           $total_value=$delivery_challan_data->delivery_total;
           $gst_value=$total_value-$basic_value;
     ?>
    <td colspan="2" style="border-left:0px;"><p style="font-size:14px; margin:5px;"> <b><?php echo $gst_value; ?></b> </p></td>
</tr> -->

<tr>
  <td colspan="5">
     <!-- <p style="margin:5px;">Bill Amount In Words : <b>Rupees One Lakh Only</b> </p>  -->
   </td>
  <td colspan="2"><p style="padding-left:10px; margin:5px; font-size:12px;">Grand total : </p> </td>
  <td colspan="2"><p style="padding-left:10px; margin:5px;"> <b>&#8377; <?php echo number_format((float)$delivery_challan_data->delivery_total, 2, '.', ''); ?></b> </p></td>
</tr>

<tr style="border-bottom:0px!important;">
  <td colspan="9" style="border-bottom:0px!important;"> <p style="float:right; margin:5px;"> <b> For <?php echo $company_name; ?> </b> </p>
  </td>
</tr>

<tr style="border-top:0px!important;">
  <td colspan="3" style=" padding-left:10px; border-right:0px!important; border-top:0px!important; padding-bottom: 5px;"> Receiver's Signature </td>
  <td colspan="3" style=" padding-left:10px; border-left:0px!important; border-right:0px!important; padding-bottom: 5px; border-top:0px!important;"> Carrier's Signature </td>
  <td colspan="3" style=" padding-left:10px; border-left:0px!important; border-top:0px!important; padding-bottom: 5px;"> Auth. Signatory </td>
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
