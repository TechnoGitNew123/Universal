<?php defined('BASEPATH') OR exit('No direct script access allowed'); error_reporting(0);?>

<div class="content-wrapper">
    <section class="content-header">
      	<h1><i class="fa fa-fw fa-users"></i> <?php echo $this->session->userdata('topmenu'); ?></h1>
      	<ol class="breadcrumb">
        	<li><i class="fa fa-fw fa-users"></i> <?php echo $this->session->userdata('topmenu'); ?></li>
      	</ol>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="pad margin no-print">
		      <div class="callout callout-info" style="margin-bottom: 0!important;">
		        <h4><i class="fa fa-info"></i> Note:</h4>
		        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
		      </div>
		    </div>
    		<div class="col-md-12">
          		<div class="box box-info">
            		<div class="box-header with-border">
              			<h3 class="box-title"><i class="fa fa-print"></i> Receipt Report </h3>
            		</div>
			        <div class="box-body table-responsive" id="printPDF">
			        	<section class="invoice" id="printableArea">
							<table class="table table-bordered mb-0 invoice-table">
						        <style media="screen">
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


						        </style>
						        <tr>

						          <td colspan="3">
						            <div class="row">
						              <div class="col-md-4">
						                  <img class="" src="<?php echo base_url('files/images/logo/').$GetCmpInfo['logo']; ?>" width='150' alt="">
						              </div>
						              <div class="col-md-4  text-center">
						               	<h3> <?php echo $GetCmpInfo['name']; ?></h3>
						                <p> Address: <?php echo $GetCmpInfo['address']; ?></p>
						                <p> Mobile No: <?php echo $GetCmpInfo['mobile_no_1']; ?> </p>
						                <p> Gst No: <?php echo $GetCmpInfo['gst_no']; ?>  </p>
						              </div>
						              <div class="col-md-4 ml-5 text-right">
						              <br><br><br><br><br><br><br>
						                <p>Receipt No. <span> &nbsp;&nbsp;&nbsp; <?php echo $datas[0]['receipt_no']; ?></span> </p>
						                <p>Date : <span> &nbsp;&nbsp;&nbsp; <?php echo $datas[0]['date']; ?> </span> </p>
						              </div>
						            </div>
						          </td>

						        </tr>
						        <tr>
						          <td class="small no-right-border">  Party : </td>
						          <td class="large no-left-border">
						             <?php echo $CheckParty[0]['name']; ?> <br> <?php echo $CheckParty[0]['address']; ?>
						          </td>
						        </tr>
						        <tr class="no-bottom-border">
						          <td class="small no-right-border no-bottom-border">  Rupees :
						            </td>

						            <td class="large no-left-border no-bottom-border">
						            <?php echo $receipt_amt_words; ?>
						              </td>

						        </tr>
						        <tr class="no-top-border">
						          <td class="no-top-border" colspan="3"> As per details given below  </td>
						        </tr>

						        <tr>
						          <td class="small no-right-border">  Payment against :
						            <br><br>
						            </td>
						            <td class="large no-left-border">
						            	<?php foreach ($SelectBills as $k) {
						            		echo $k ?>
						            		<br>
						            	<?php } ?>
						              </td>

						        </tr>
						        <tr>
						          <td class="small no-right-border"> <h4 class="pl-3"><b ><?php echo $datas[0]['receipt_amt']; ?> </b></h4>
						            </td>
						            <td class="large no-left-border text-right">
					                <br><br>
					                <p>For <?php echo $GetCmpInfo['name']; ?></p>
					                <p> <small>Auth. Signatory</small> </p>
					              </td>
						        </tr>
						      </table>
						      <br><br>
						      <!-- title row -->
						      <!-- this row will not appear when printing -->
						      <div class="row no-print">
						        <div class="col-xs-12">
						          <a href="<?php echo site_url('Admin/Report/ReceiptReportPrint1/').$id; ?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print
						          </a>
						          <a href="<?php echo site_url('Admin/Report/ReceiptReportPrintPDF/').$id; ?>">
						          	<button id="cmd" type="button"  class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="javascript:demoFromHTML();">
						            	<i class="fa fa-download"></i> Generate PDF
						          	</button>
						          </a>
						        </div>
						      </div>
						    </section>
					</div>
			    </div>
			</div>
     	</div>
    </section>
</div>
