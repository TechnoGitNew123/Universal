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
            <h1>Frist Report</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    foreach ($repairy_bill_data as $repairy_bill_data) {
      $repairy_id = $repairy_bill_data->repairy_id;
    }
    ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
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
          <td colspan="6">
            <div class="row">
              <div class="col-md-4">
                <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt="">
              </div>
              <div class="col-md-4 text-center pt-2 pb-2">
                <h3 ><?php echo $company_name; ?></h3>
                <p   style="font-size:16px; margin-bottom:8px;"><?php echo $company_address; ?></p>
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
          <td colspan="3">ग्राहक क्र : <?php echo $repairy_bill_data->party_id; ?></td>
          <td colspan="3">दिनांक : <?php echo $repairy_bill_data->repairy_date; ?></td>
      </tr>
        <tr>
          <td colspan="3">ग्राहकाचे नाव : <?php echo $repairy_bill_data->party_firm; ?></td>
          <td colspan="3">कॉन्टॅक्ट पर्सन :  <?php echo $repairy_bill_data->repairy_person; ?></td>
      </tr>
        <tr>
          <td colspan="3">पत्ता : <?php echo $repairy_bill_data->party_address; ?></td>
          <td colspan="3">फोन  / मोबाईल नं : <?php echo $repairy_bill_data->repairy_contact; ?></td>
      </tr>

      <?php if(isset($repairy_bill_data->repairy_accss)){
        $val = explode('_',$repairy_bill_data->repairy_accss);
      } ?>
    <tr>
      <td colspan="2" style="border-right:0px!important;">
          PAN  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" class="form-check-input" id="" <?php if(isset($repairy_bill_data->repairy_accss) && $val[0] == 'PAN'){ echo 'checked'; } ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Bowl: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="form-check-input" id="" <?php if(isset($repairy_bill_data->repairy_accss) && $val[1] == 'Bowl'){ echo 'checked'; } ?>>
      </td>
      <td colspan="2" style="border-left:0px!important; border-right:0px!important;">
          Adapter/ Charger : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" class="form-check-input" id="" <?php if(isset($repairy_bill_data->repairy_accss) && $val[2] == 'Adapter'){ echo 'checked'; } ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Battery :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="form-check-input" id="" <?php if(isset($repairy_bill_data->repairy_accss) && $val[3] == 'Battery'){ echo 'checked'; } ?>>
      </td>
      <td colspan="2" style="border-left:0px!important;">
        Stamping : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" class="form-check-input" id="" <?php if(isset($repairy_bill_data->repairy_accss) && $val[4] == 'Stamping'){ echo 'checked'; } ?>>
      </td>
  </tr>
  <tr>
    <td colspan="1">Make </td>
    <td colspan="1">Model </td>
    <td colspan="1">Capacity </td>
    <td colspan="1">Repairing Details </td>
    <td colspan="1">Material Used </td>
    <td colspan="1">Amount </td>
</tr>

<?php
  $i = 0;
  foreach ($repairy_bill_trans_data as $trans_data) {
    $i++;
  ?>
  <tr>
    <td><?php echo $trans_data->make_name; ?></td>
    <td><?php echo $trans_data->machine_serial_no; ?></td>
    <td><?php echo $trans_data->capacity_name; ?></td>
    <td><?php echo $trans_data->repairy_details; ?></td>
    <td><?php echo $trans_data->material_used; ?></td>
    <td><?php echo $trans_data->repairy_trans_amount; ?></td>
  </tr>
<?php } ?>
<tr>
  <td colspan="4" style="text-align:left;"><b>Amount In Words : Rupees <?php echo $this->numbertowords->convert_number($repairy_bill_data->repairy_basic_charge); ?> Only</b></td>
  <td colspan="1" style="text-align:right;">Total</td>
  <td colspan="1">&#8377; <?php echo number_format((float)$repairy_bill_data->repairy_basic_charge, 2, '.', ''); ?></td>
</tr>

<tr>
  <td colspan="6">
    <p style="text-align:justify; line-height:22px;"> ग्राहकांना सूचना :  &#9733; ग्राहकांनी वजनकाटा दुरुस्तीसाठी दिल्यानंतर ५ दिवसांमध्ये घेऊन जाणे. आमच्याकडे वजनकाटा ५  दिवसापर्यंतच  राहील.  &#9733;  त्यानंतर आपला वजनकाटा हरवल्यास त्याची जबाबदारी आमच्याकडे राहणार नाही.
 &#9733; प्लॅटफॉर्म काटा असलेस ५ दिवसानंतर परत न नेल्यास प्रत्येक दिवसाला रु १०/- प्रमाणे डॅमरेज चार्जेस राहतील . &#9733; पार्ट्सची गॅरंटी आमची नाही . &#9733;  वजनकाटा दुरुस्त केल्यांनतर ग्राहकाने पूर्ण तपासून घ्यावे . &#9733;  वर्कशॉपमधुन वजनकाटा नेल्यानंतर कोणत्याही प्रकारची तक्रार ग्राह्य धरली जाणार नाही.
 &#9733; वजनकाटा दुरुस्ती केल्यानंतर पासिंग करणेची जबाबदारी सर्वस्वी उपयोग करणाऱ्याची राहील. (सरकारी नियमानुसार वजनकाटा दुरुस्तीनंतर पडताळणी व  मुद्रांकन करणे बंधनकारक आहे )

 &#9733; आमच्याकडील सर्व व्यवहार रोखीनेच केले जातील. &#9733; उधारीसाठी कृपया विनंती करू नये.

&#9733; वजनकाटा हाताळणी किंवा तपासणी करीता रु. ७५/- व  दुरुस्ती आकार कमीत कमी रु. १७५/- ( स्पेअर पार्ट शिवाय ) आकारला जाईल.
 &#9733; पावती शिवाय काटा मिळणार नाही
 &#9733; सदर पोहोच काटा घेताना सोबत आणणे अत्यावश्यक आहे
</p>

<p>
 <b>ऑफिस वेळ सकाळी ९:३० ते संध्या. ६ पर्यंत वर्कशॉप दर रविवारी बंद राहील.</b>   </p>
<p>काटा घेणाऱ्याचे नाव : <?php echo $repairy_bill_data->user_name; ?></p>

  </td>
</tr>

<tr>
  <td colspan="3"> <b> वरील सर्व सूचना मला मान्य आहेत </b>  <br><br> <b>ग्राहकाचे नाव : <?php echo $repairy_bill_data->party_firm; ?></b> </td>
  <td colspan="3"> <b> माझा वजनकाटा मला सुस्थितीत दुरुस्त करून मिळाला</b> <br> <br>  <b>ग्राहकाचे नाव : <?php echo $repairy_bill_data->party_firm; ?></b></td>
</tr>
      </table>






<br><br>



              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Receipt/repairy_first_print/<?php echo $repairy_id; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>


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
