<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Purchase Agreement</title>
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
    foreach ($purchase_agreement_data as $purchase_agreement_data) {
      $purchase_id = $purchase_agreement_data->purchase_id;
    }
    ?>

    <div class="row">
  <p style="text-align:center; font-size:17px;"> <b>Purchase Agreement</b>  </p>
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
<td style="border-right:0px!important; padding-left: 20px; padding-top:5px;" >
   <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><strong>Purchaser's Name and Address</strong></p>
   <p style="font-size:16px; margin-bottom:5px;"><?php echo $purchase_agreement_data->party_firm; ?></p>
   <p style="font-size:16px; margin-bottom:5px;">
     <?php echo $purchase_agreement_data->party_address.' '; ?>
     <!-- <?php echo $purchase_agreement_data->party_area.' '; ?>
     <?php echo $purchase_agreement_data->party_taluka.' '; ?>
     <?php echo $purchase_agreement_data->party_district.' '; ?> -->
    </p>
   <p style="font-size:16px; margin-bottom:5px;"> Contact No. <?php echo $purchase_agreement_data->party_mob1.' '; ?></p>
  </td>
<td style="border-left:0px!important; border-right:0px!important;">

</td>
<td style="padding:0px!important;" valigh="top">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b>PO No.  <?php echo $purchase_agreement_data->purchase_order_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b>Date : </b>&nbsp;  <strong><?php echo $purchase_agreement_data->purchase_date; ?></strong></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;">Sales & Ref. Person:  </p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
<br><br><br>

<!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"><b>vehicle No.  MH-09 AK 1218</b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" > -->
<!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Transport  </b>&nbsp;  </p> -->
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

    .ctr{
      font-size: 10px;
      text-align: center;
    }
  </style>
<style media="screen">
.table-bottom {
border-collapse: collapse!important;
  Width:100%!important;
}

.table-bottom, tr, td, th{
border: 1px solid #000;
font-size: 14px;
margin-left: auto;
margin-right: auto;
}
</style>
<thead>





<tr>
  <th> <p style="font-size:12px;">S.N</p> </th>
  <th Width="18%"> <p style="font-size:12px;">Make</p> </th>
  <th Width="18%"> <p style="font-size:12px;">Model No.</p> </th>
  <th> <p style="font-size:12px;">M/C Sr. No.</p> </th>
  <th> <p style="font-size:12px;">Capacity</p></th>
  <th> <p style="font-size:12px;">Accuracy</p> </th>
  <th> <p style="font-size:12px;">Class</p> </th>
  <th> <p style="font-size:12px;">Platter Size</p> </th>
  <th> <p style="font-size:12px;">GST</p> </th>
  <th> <p style="font-size:12px;">Qty</p> </th>
  <th> <p style="font-size:12px;">Rate</p> </th>
  <th> <p style="font-size:12px;">Amount</p> </th>
</tr>
</thead>
<tbody>
  <?php
  $i = 0;
  foreach ($purchase_trans_data as $trans_data) {
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
  <td class="ctr"><?php echo $trans_data->purchase_trans_gst; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_trans_qty; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_trans_rate; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_trans_amount; ?></td>
  </tr>

  <?php if($trans_data->accessories != ''){ ?>
  <tr>
  <td class="ctr"><?php echo ++$i; ?></td>
  <td colspan="7" class="ctr"><?php echo $trans_data->accessories; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_descr_gst; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_descr_qty; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_descr_rate; ?></td>
  <td class="ctr"><?php echo $trans_data->purchase_descr_amount; ?></td>
  </tr>

  <?php } } ?>


<tr>
  <td colspan="4"  valign="top">
    <p>Basic Price : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>
      &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_basic_price, 2, '.', ''); ?></b> </p>
    <p>Govt Stamping :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_stamping, 2, '.', ''); ?></p>
    <p>Total : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
      &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_total, 2, '.', ''); ?></p>
    <p>Advance Received :  &nbsp;&nbsp;
      &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_advance, 2, '.', ''); ?></p>
    <p>Balance Due : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &#8377; <?php echo number_format((float)$purchase_agreement_data->purchase_due, 2, '.', ''); ?></p>
    <p>Delivery Period : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo $purchase_agreement_data->purchase_del_period.' Days'; ?></p>
      <p>Payment Terms : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $purchase_agreement_data->purchase_pay_terms; ?></p>
   </td>
   <?php
   $purchase_accss = $purchase_agreement_data->purchase_accss;
   if(isset($purchase_accss)){
     $val = explode('_',$purchase_accss);
   } ?>
  <td colspan="8">
    <p>  <b>Accessories Guide :</b> </p>
    <p> <input type="checkbox" <?php if(isset($purchase_accss) && $val[0] == 'Extra Display'){ echo 'checked'; } ?>> 1) Extra Display : Stand / On Machine / Detachable</p>
    <p> <input type="checkbox" <?php if(isset($purchase_accss) && $val[1] == 'Battery'){ echo 'checked'; } ?>> 2) Battery </p>
    <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[2] == 'Charger'){ echo 'checked'; } ?>> 3) Charger</p>
    <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[3] == 'Wind'){ echo 'checked'; } ?>> 4) Wind Shield </p>
    <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[4] == 'INTERFACE'){ echo 'checked'; } ?>> 5) Rs-232-C COMPUTER INTERFACE</p>
    <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[5] == 'Bowl'){ echo 'checked'; } ?>> 6) BOWL : FLAT/ ROUND </p>
    <p><input type="checkbox" <?php if(isset($purchase_accss) && $val[6] == 'Others'){ echo 'checked'; } ?>> 7) Others</p>
   </td>
</tr>

<tr style="">
  <td colspan="12" style="border-bottom:0px!important; border-left:0px;"> <p style="margin:5px;"> <b> Terms & Condition </b> </p>
    <p style="text-align:justify;">1) Goods shall remain the properties of the company until FULL purchase price has been realised. </p>
    <p style="text-align:justify;">2) Once order placed cannot be cancelled & advance paid is not refundable / transferable</p>
    <p style="text-align:justify;">3) Local levies like Octroi, Entry Tax, etc. has to be paid by the consignee, as applicable. We will not be responsible for the Local Levies at consignee's end.</p>
    <p style="text-align:justify;">4) If Payment is not made as per the payment terms mentioned above then interest will be charge @ 25% Per month till the realisation of the full amount. </p>
    <p style="text-align:justify;">5) If cheque is bounced then Rs. 200/- will be debited to customer account. Customer will have to pay this addtional amount also. </p>
    <p style="text-align:justify;">6) If any reason related to delay in delivery Nitraj is not responsible.</p>
  </td>
</tr>
<tr style="border-bottom:0px!important;">
  <td colspan="12" style="border-bottom:0px!important; border-left:0px;"> <p style="float:right; margin:5px;"> <b> For <?php echo $company_name; ?> </b> </p>
  </td>
</tr>

<tr style="border-top:0px!important;">
  <td colspan="4" style=" padding-left:10px; border-right:0px!important; border-top:0px!important; padding-bottom: 5px; font-size: 12px;"> <br> Name Of the Service Engineer </td>
  <td colspan="4" style=" padding-left:10px; border-left:0px!important; border-right:0px!important; padding-bottom: 5px; border-top:0px!important; font-size: 12px;"> <br> Receiver's Signature</td>
  <td colspan="4" style=" padding-left:10px; border-left:0px!important; border-top:0px!important; padding-bottom: 5px; font-size: 12px;"> <br> Auth. Signatory </td>
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
