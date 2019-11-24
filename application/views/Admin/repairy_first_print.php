<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Receipt</title>
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
      foreach ($repairy_bill_data as $repairy_bill_data) {
        $repairy_id = $repairy_bill_data->repairy_id;
      }
    ?>
<table class="table table-bordered mb-0 invoice-table" Width="100%">
  <style media="print">
  table{
    border-collapse: collapse;
  }
  .invoice-table td{
    /* Width:33% !important; */
      border: 1px solid #555!important;
      padding-left: 5px;
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
  p{
    margin:3px;
  }
  </style>

  <style media="screen">
  table{
    border-collapse: collapse;
  }
  .invoice-table td{
    /* Width:33% !important; */
      border: 1px solid #555!important;
      padding-left: 5px;
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
  p{
    margin:3px;
  }
  </style>
<tr>


  <td colspan="6" width="80%" style="border-right:0px!important; border-left:0px!important;">
      <!-- <div style="float:left; padding-left:30px;">
        <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="40" height="40" alt="">
      </div> -->
      <div style="">
        <h3 style="font-size:16px; text-align:center; margin:5px; " > <?php echo $company_name; ?>  </h3>
        <p   style="font-size:12px; margin-bottom:3px; margin-top:3px; text-align:center; ">
          <?php echo $company_address; ?> Mob No.  <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?>
        </p>
      </div>
      <!-- <p  style="font-size:12px; margin-bottom:3px; margin-top:3px; text-align:center;">Website: www.universaldigital.net</p>  -->
     </td>


</tr>
<tr>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">ग्राहक क्र  :<?php echo $repairy_bill_data->party_id; ?></p>  </td>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">दिनांक :<?php echo $repairy_bill_data->repairy_date; ?></p>  </td>
</tr>
<tr>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">ग्राहकाचे नाव :<?php echo $repairy_bill_data->party_firm; ?></p> </td>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">कॉन्टॅक्ट पर्सन :<?php echo $repairy_bill_data->repairy_person; ?></p>   </td>
</tr>
<tr>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">पत्ता :<?php echo $repairy_bill_data->party_address; ?></p>  </td>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;">फोन  / मोबाईल नं :<?php echo $repairy_bill_data->repairy_contact; ?></p>  </td>
</tr>

<!-- <tr>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;"> Make :</p> </td>
<td colspan="3"> <p style="font-size:12px; font-weight:bold;"> Capacity :</p>  </td>
</tr> -->
<?php if(isset($repairy_bill_data->repairy_accss)){
  $val = explode('_',$repairy_bill_data->repairy_accss);
} ?>
<tr>
<td colspan="6" style="border-right:0px!important;">
  <p style="font-size:14px; font-weight:bold;">
    PAN  : <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php if(isset($repairy_bill_data->repairy_accss) && $val[0] == 'PAN'){ echo 'checked'; } ?>>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bowl:  <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php if(isset($repairy_bill_data->repairy_accss) && $val[1] == 'Bowl'){ echo 'checked'; } ?>>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Adapter/ Charger : <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php if(isset($repairy_bill_data->repairy_accss) && $val[2] == 'Adapter'){ echo 'checked'; } ?>>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Battery :    <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php if(isset($repairy_bill_data->repairy_accss) && $val[3] == 'Battery'){ echo 'checked'; } ?>>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Stamping :  <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php if(isset($repairy_bill_data->repairy_accss) && $val[4] == 'Stamping'){ echo 'checked'; } ?>>
  </p>
</td>
</tr>

<tr>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Repairing Details</p>  </td>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Repairing Details</p>  </td>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Repairing Details</p>  </td>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Repairing Details</p>  </td>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Material Used</p>  </td>
  <td colspan="1"> <p style="font-style:12px; font-weight:bold;">Amount</p>  </td>
</tr>
<?php
  $i = 0;
  foreach ($repairy_bill_trans_data as $trans_data) {
    $i++;
  ?>
  <tr>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->make_name; ?></td>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->machine_serial_no; ?></td>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->capacity_name; ?></td>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->repairy_details; ?></td>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->material_used; ?></td>
    <td style="font-style:12px; font-weight:bold;"><?php echo $trans_data->repairy_trans_amount; ?></td>
  </tr>
<?php } ?>
<tr>
<!-- <td colspan="2"> </td> -->
<td colspan="4" style="text-align:left;"><b>Amount In Words : Rupees <?php echo $this->numbertowords->convert_number($repairy_bill_data->repairy_basic_charge); ?> Only</b></td>
<td colspan="1"><p style="font-style:12px; font-weight:bold; text-align:right; padding-right:30px;"> Total : </p></td>
<td colspan="1"><p style="font-style:12px; font-weight:bold;">&#8377; <?php echo number_format((float)$repairy_bill_data->repairy_basic_charge, 2, '.', ''); ?> </p></td>
</tr>

<tr>
<td colspan="6">
<p style="text-align:justify; line-height:18px; font-size:12px;"> ग्राहकांना सूचना :  &#9733; ग्राहकांनी वजनकाटा दुरुस्तीसाठी दिल्यानंतर ५ दिवसांमध्ये घेऊन जाणे. आमच्याकडे वजनकाटा ५  दिवसापर्यंतच  राहील.  <br>  &#9733;  त्यानंतर आपला वजनकाटा हरवल्यास त्याची जबाबदारी आमच्याकडे राहणार नाही.
&#9733; प्लॅटफॉर्म काटा असलेस ५ दिवसानंतर परत न नेल्यास प्रत्येक दिवसाला रु १०/- प्रमाणे डॅमरेज चार्जेस राहतील . &#9733; पार्ट्सची गॅरंटी आमची नाही . &#9733;  वजनकाटा दुरुस्त केल्यांनतर ग्राहकाने पूर्ण तपासून घ्यावे . <br> &#9733;  वर्कशॉपमधुन वजनकाटा नेल्यानंतर कोणत्याही प्रकारची तक्रार ग्राह्य धरली जाणार नाही.
&#9733; वजनकाटा दुरुस्ती केल्यानंतर पासिंग करणेची जबाबदारी सर्वस्वी उपयोग करणाऱ्याची राहील. (सरकारी नियमानुसार वजनकाटा दुरुस्तीनंतर पडताळणी व  मुद्रांकन करणे बंधनकारक आहे ) <br>

&#9733; आमच्याकडील सर्व व्यवहार रोखीनेच केले जातील. &#9733; उधारीसाठी कृपया विनंती करू नये.

&#9733; वजनकाटा हाताळणी किंवा तपासणी करीता रु. ७५/- व  दुरुस्ती आकार कमीत कमी रु. १७५/- ( स्पेअर पार्ट शिवाय ) आकारला जाईल.
&#9733; पावती शिवाय काटा मिळणार नाही
&#9733; सदर पोहोच काटा घेताना सोबत आणणे अत्यावश्यक आहे
</p>

<p style="font-size:12px;">
<b>ऑफिस वेळ सकाळी ९:३० ते संध्या. ६ पर्यंत वर्कशॉप दर रविवारी बंद राहील.</b>   </p>
<p style="font-size:12px;">काटा घेणाऱ्याचे नाव : <?php echo $repairy_bill_data->user_name; ?></p>

</td>
</tr>

<tr>
<td colspan="3"> <p style="font-size:12px;"> <b> वरील सर्व सूचना मला मान्य आहेत </b>  <br> <br> <b>ग्राहकाचे नाव : <?php echo $repairy_bill_data->party_firm; ?></b>   </p></td>
<td colspan="3"> <p style="font-size:12px;"> <b> माझा वजनकाटा मला सुस्थितीत दुरुस्त करून मिळाला</b> <br> <br>  <b>ग्राहकाचे नाव : <?php echo $repairy_bill_data->party_firm; ?></b> </p> </td>
</tr>
</table>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  window.addEventListener("load", window.print());

</script>


</body>
</html>
