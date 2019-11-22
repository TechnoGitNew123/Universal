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
  <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <table class="table table-bordered mb-0 invoice-table">

<style media="print">
p{
  margin-top: 5px;
  padding-left: 8px;
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
</style>

<style media="screen">
p{
  margin-top: 5px;
    padding-left: 8px;
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
</style>
<tr>

<td colspan="8">
  <div class="row">

    <div class="col-md-12 text-center pt-2 pb-2">
      <div class="img-left  ">
        <img class="float-left" style="float:left;" src="<?php echo base_url(); ?>assets/images/universal.png" width="120" height="150" alt="">
      </div>
      <h2 style="text-align:center; font-weight:bold; padding-bottom:0px; margin-bottom:0px; margin-top:10px;" >Universal Digital System </h2>
      <h3 style="text-decoration: underline; text-align:center; line-height: 20px;margin-top:5px; margin-bottom:8px;">Sales & Service</h3>
      <p   style="font-size:16px;  text-align:center;  margin-top:8px; margin-bottom:8px;">1507, Shop no. 15, Bhupal Tower, Ford Corner Laxmipuri Kolhapur 416002 Ph No. 0231-2646189</p>

      <h3 style="text-align:center; font-weight:bold; font-size: 32px;padding-bottom:0px; margin-bottom:15px;"> <span style="border: 2px Solid #000; margin-bottom: 0px;padding:8px; border-radius:15px; font-style:italic; font-weight:bold; font-family: 'Leckerli One', cursive;">  Service Report </span></h3>
    </div>

  </div>
</td>

</tr>
<tr>
<td width="25%" valign="top" colspan="2" style="border-right:0px!important; padding-left: 5px; padding-top:5px;" >
   <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Customer Name &  Address</b>   </p>
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px;">  Rk Nagar Near Hanuman Temple Kolhapur  </p>
</td>

<td width="25%"  valign="top" colspan="2" style="border-left:0px!important; padding-left: 5px; padding-top:5px;" >
  <p style="font-size:16px; margin-bottom:5px; padding-top:5px; margin-left: 50px;"> <b>Cell No.</b>  : 9876543210</p>
  <p style="font-size:16px; margin-bottom:5px; padding-top:5px; margin-left: 50px;"> <b>Date </b>  : </p>
</td>

<td width="25%" colspan="2" style="border-right:0px!important; padding-left: 5px; padding-top:5px;" >
 <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>New Installation</b> &nbsp;&nbsp; <input type="checkbox" > </p>
 <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Warranty</b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type="checkbox" > </p>
 <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>AMC</b> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" > </p>
     <p  style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left;"> <b>Service Charges Rs.</b>  </p>
</td>

<td width="25%" colspan="2" style="border-left:0px!important; padding-left: 5px; padding-top:5px; " >
<p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>R/S</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" > </p>
  <p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Call </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" > </p>
<p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b>Charged Call</b> &nbsp; <input type="checkbox" > </p>
<p style="font-size:16px; margin-bottom:5px; padding-top:5px;"> <b></b> &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

</td>
</tr>
<tr>
<td colspan="2"   valign="top">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; margin-top: 5px; line-height:20px;"> <b>Customer Person
       <br> संपर्क व्यक्ती </b> :   <br> <br> </p>
</td>
<td colspan="4"  valign="top">
     <p style="font-size:16px; margin-bottom:5px; margin-top: 5px; padding-top:0px; text-align:left; line-height:20px;"> <b>Phone No. <br> फोन नं  </b> :   </p>
</td>
<td colspan="2"  valign="top">
     <p style="font-size:16px; margin-bottom:5px; margin-top: 5px; padding-top:0px; line-height:20px;"> <b>Mobile No. <br> मोबाइल नं  </b> :  </p>
</td>
</tr>

<tr>
<td colspan="2" valign="top">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Model No
       <br> मॉडेल नं.  </b> :   </p>
</td>
<td colspan="2" valign="top">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left; line-height:20px;"> <b>Sr No. <br>अ. नं.   </b> :   </p>
</td>
<td colspan="2" valign="top">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left; line-height:20px;"> <b>Cap / Range <br> कॅप / रेंज   </b> :   </p>
</td>
<td colspan="2" valign="top">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Stamping / Other Details  <br> स्टॅम्पिंग / इतर माहिती  </b> :    <br><br> </p>
</td>
</tr>

<tr>
<td colspan="4">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Actual Obsevation
       <br> प्रत्यक्ष तपासणी  </b> :   </p>
</td>
<td colspan="4">
     <p style="font-size:16px; margin-bottom:5px; padding-top:5px; text-align:left; line-height:20px;"> <b>Details of Action Taken & Recommandation  <br> <small>प्रत्यक्ष केलेल्या कामाची माहिती व सूचना </small>   </b> :   <br><br> </p>
</td>
<tr>
<tr>
  <td colspan="8">
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Component Replaced
           <br> वापरलेल्या पार्टचा परतावा  </b> :   <br> <br></p>
  </td>
</tr>
<tr>
  <td colspan="8">
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Status Of Completion
           <br> केलेल्या कामाची सद्यस्थिती  </b> :   </p>
  </td>
</tr>
<tr>
  <td colspan="8">
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Charges Rs.
           <br> फी रक्कम रुपये   </b> :   </p>
  </td>
</tr>

<tr style="border-bottom:0px;">
  <td colspan="8" style="border-bottom:0px!important;">  <p style="font-size:14px; margin-bottom:5px; padding-top:5px; line-height:20px;"> This is to certify that your service engineer has attend the above Instrument (S) & it is working to our complete satisfaction.    </p></td>
</tr>
<tr style="border-top:0px;">
  <td colspan="4" style="border-top:0px!important;">
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Customer Name </b> :  </p>
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Signature </b> :  </p>
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Date </b> :  </p>
         <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Stamp </b> :  </p>
  </td>
  <td colspan="4" style="border-top:0px!important;">
    <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Service Engineer </b> :  </p>
    <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px;"> <b>Signature </b> :  </p>
    <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px; display:inline;"> <b>Time In  </b> :  </p>
    <p style="font-size:16px; margin-bottom:5px; padding-top:5px; line-height:20px; display:inline; float:right!important;"> <b>Time Out </b> :  </p>
  </td>
</tr>
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
