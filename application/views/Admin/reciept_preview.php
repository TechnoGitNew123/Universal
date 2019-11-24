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
            <h1>Repairy Bill</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    foreach ($receipt_details as $receipt_details) {
      $receipt_id = $receipt_details->receipt_id;
    }
    ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">

              <table class="table table-bordered mb-0 invoice-table">
						        <!-- <style media="screen">
						          .invoice-table td{
						            Width:33% !important;
						              border: 2px solid #555!important;
						          }
						          .invoice-table .small{
						            Width:15% !important;
						              border: 2px solid #555!important;
						          }
						          .invoice-table .large{
						            Width:85% !important;
						              border: 2px solid #555!important;
						          }
						          .invoice-table{
						            margin-bottom:0px;
						            border: 2px solid #555!important;
						          }
						          .invoice-table p{
						            line-height: 15px;
						          }
						          .invoice-table .no-right-border{
						          border-right: 0px!important;
						          }
						          .invoice-table .no-left-border{
						          border-left: 0px!important;
						          }
						          .invoice-table .no-top-border{
						          border-top: 0px!important;
						          }
						          .invoice-table .no-bottom-border{
						          border-bottom: 0px!important;
						          }


						        </style> -->
						        <tr>

						          <td colspan="3">
						            <div class="row">
						              <div class="col-md-4">
						                 <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width='150' alt="">
						              </div>
						              <div class="col-md-4  text-center">
						               	<h3> <?php echo $company_name; ?></h3>
						                <p> Address: <?php echo $company_address; ?></p>
						                <p> Mobile No: <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?> </p>
						                <!-- <p> Gst No: <?php //echo $GetCmpInfo['gst_no']; ?>  </p> -->
						              </div>
						              <div class="col-md-4 text-right">
						              <br><br><br><br><br><br><br>
						                <p>Receipt No. <span> &nbsp;&nbsp;&nbsp; <?php echo $receipt_details->receipt_no; ?></span> </p>
						                <p>Date : <span> &nbsp;&nbsp;&nbsp; <?php echo $receipt_details->receipt_date; ?> </span> </p>
						              </div>
						            </div>
						          </td>

						        </tr>
						        <tr>
						          <td class="small no-right-border">  Party </td>
						          <td class="large no-left-border">
                        <?php echo $receipt_details->party_firm.', '; ?><?php echo $receipt_details->party_address; ?>
						             <?php //echo $CheckParty[0]['name']; ?> <br> <?php //echo $CheckParty[0]['address']; ?>
						          </td>
						        </tr>
						        <tr class="no-bottom-border">
						          <td class="small no-right-border no-bottom-border">  Rupees :
						            </td>

						            <td class="large no-left-border no-bottom-border">
						            <?php echo $this->numbertowords->convert_number($receipt_details->receipt_amount); ?> Only
						              </td>

						        </tr>
						        <tr class="no-top-border">
						          <td class="no-top-border" colspan="3"> As per details given below  </td>
						        </tr>

						        <tr>
						          <td class="small no-right-border">  Payment against
					               <br><br>
					            </td>
					            <td class="large no-left-border">
					            	<?php echo $receipt_details->receipt_narration; ?>
					              </td>
                      </tr>
						        <tr>
						          <td class="small no-right-border"> <h4 class="pl-3"><b ><?php //echo $datas[0]['receipt_amt']; ?> </b></h4>
						          </td>
					            <td class="large no-left-border text-right">
				                <br><br>
				                <p>For : <?php echo $company_name; ?></p>
				                <p> <small>Auth. Signatory</small> </p>
				              </td>
						        </tr>
						      </table>
            <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Receipt/receipt_print/<?php echo $receipt_id; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
