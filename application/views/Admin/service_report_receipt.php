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
            <h1>Service Report</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
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

          <td colspan="8">
            <div class="row">

              <div class="col-md-12 text-center pt-2 pb-2">
                <div class="img-left ">
                  <img class="float-left" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="150" alt="">
                </div>
                <h2 style="text-align:center; font-weight:bold; padding-bottom:0px; margin-bottom:0px;" ><?php echo $company_name; ?></h2>
                <h3 style="text-decoration: underline; text-align: center;">Sales & Service</h3>
                <p   style="font-size:16px; margin-bottom:20px;"><?php echo $company_address; ?> Mob No. <?php echo $company_mob1; ?></p>

                <h3 > <span style="border: 2px Solid #000; margin-bottom: 0px;padding:8px; border-radius:15px; font-style:italic; font-weight:bold;">  Service Report</span></h3>
              </div>

            </div>
          </td>

        </tr>
        <tr>
          <td colspan="2" style="border-right:0px!important; padding-left: 20px; padding-top:25px;" >
             <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Customer Name &  Address</b>   </p>
             <p style="font-size:16px; margin-bottom:5px; padding-top:5px;">  <?php echo $party_firm; ?>  </p>
             <p style="font-size:16px; margin-bottom:5px; padding-top:5px;">  <?php echo $party_address; ?>  </p>
          </td>

          <td colspan="2" style="border-left:0px!important; padding-left: 20px; padding-top:25px;" >
            <p style="font-size:16px; margin-bottom:5px; padding-top:5px; margin-left: 50px;"> <b>Cell No.</b>  : <?php echo $party_mob1; ?></p>
            <p style="font-size:16px; margin-bottom:5px; padding-top:5px; margin-left: 50px;"> <b>Date </b>  : <?php echo $service_date; ?></p>

        </td>

        <td colspan="2" style="border-right:0px!important; padding-left: 20px; padding-top:25px;" >
           <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>New Installation</b> &nbsp;&nbsp;     <input type="checkbox" > </p>
           <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Warranty</b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;    <input type="checkbox" > </p>
           <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>AMC</b> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" > </p>
               <p  style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left;"> <b>Service Charges Rs. <?php echo $service_charges_fee; ?></b>  </p>
        </td>

        <td colspan="2" style="border-left:0px!important; padding-left: 20px; padding-top:25px; " >
          <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>R/S</b> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" > </p>
            <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Call </b> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" > </p>
          <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Charged Call</b> &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <input type="checkbox" > </p>

      </td>
      </tr>
      <tr>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Contact Person
                 <br> संपर्क व्यक्ती </b> : <?php echo $complaint_person; ?>  </p>
        </td>
        <td colspan="4">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:center; line-height:20px;"> <b>Phone No. <br> फोन नं  </b> :   </p>
        </td>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Mobile No. <br> मोबाइल नं  </b> : <?php echo $complaint_contact_no; ?> </p>
        </td>
      </tr>

      <tr>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Model No
                 <br> मॉडेल नं.  </b> : <?php echo $product_model_no; ?>  </p>
        </td>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:center; line-height:20px;"> <b>Sr No. <br>अ. नं.   </b> : <?php echo $service_sr_no; ?>  </p>
        </td>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:center; line-height:20px;"> <b>Cap / Range <br> कॅप / रेंज   </b> : <?php echo $service_range; ?>  </p>
        </td>
        <td colspan="2">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Stamping / Other Details  <br> स्टॅम्पिंग / इतर माहिती  </b> : <?php echo $service_stamping; ?>   <br><br> </p>
        </td>
      </tr>

      <tr>
        <td colspan="4">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Actual Obsevation
                 <br> प्रत्यक्ष तपासणी  </b> : <?php echo $service_observation; ?>  </p>
        </td>
        <td colspan="4">
               <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left; line-height:20px;"> <b>Details of Action Taken & Recommandation  <br> प्रत्यक्ष केलेल्या कामाची माहिती व सूचना   </b> : <?php echo $service_recommend; ?>  </p>
        </td>
        <tr>
          <tr>
            <td colspan="8">
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Component Replaced
                     <br> वापरलेल्या पार्टचा परतावा  </b> : <?php echo $service_component; ?>  </p>
            </td>
          </tr>
          <tr>
            <td colspan="8">
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Status Of Completion
                     <br> केलेल्या कामाची सद्यस्थिती  </b> : <?php echo $service_call_completion; ?>  </p>
            </td>
          </tr>
          <tr>
            <td colspan="8">
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Charges Rs.
                     <br> फी रक्कम रुपये   </b> : <?php echo $service_charges_fee; ?>  </p>
            </td>
          </tr>

          <tr style="border-bottom:0px;">
            <td colspan="8" style="border-bottom:0px!important;">  <p style="font-size:14px; margin-bottom:5px; padding-top:5px; line-height:20px;"> This is to certify that your service engineer has attend the above Instrument (S) & it is working to our complete satisfaction.    </p></td>
          </tr>
          <tr style="border-top:0px;">
            <td colspan="4" style="border-top:0px!important;">
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Customer Name </b> : <?php echo $party_firm; ?> </p>
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Signature </b> :  </p>
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Date </b> :  </p>
                   <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Stamp </b> :  </p>
            </td>
            <td colspan="4" style="border-top:0px!important;">
              <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Service Engineer </b> : <?php echo $user_name; ?> </p>
              <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Signature </b> :  </p>
              <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px; display:inline;"> <b>Time In  </b> : <?php echo $service_time_in; ?> </p>
              <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px; display:inline; float:right!important;"> <b>Time Out </b> : <?php echo $service_time_out; ?> </p>
            </td>
          </tr>
      </table>
  <br><br>




              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Receipt/service_report_print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>/ -->
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
