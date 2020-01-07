<!DOCTYPE html>
<html>
<?php
$page = "daybook_report";
//include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Daybook Report</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> Daybook Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form class="form-horizontal" method="post" autocomplete="off">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label text-right">From Date</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control from_date" name="from_date" id="date1" data-target="#date1" data-toggle="datetimepicker">
                    <label class="text-red"> <?php echo form_error('from_date'); ?> </label>
                  </div>
                  <label class="col-sm-2 col-form-label text-right">To Date</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control to_date" name="to_date" id="date2" data-target="#date2" data-toggle="datetimepicker">
                    <label class="text-red"> <?php echo form_error('to_date'); ?> </label>
                  </div>
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary" name="button">Load Report</button>
                  </div>
                </div>
              </form>
              <?php if(isset($daybook)){ ?>
                <div id="print_div">
                  <style media="print">
                    .tbl{
                      display: table-cell;
                      width:500px !important;
                    }
                    .table, tr, td, th{
                      width:500px !important;
                      border: 1px solid #888;
                      margin-right: 10px !important;
                      text-align: center;
                    }
                    table{
                      border-collapse: collapse;
                    }
                  </style>
                  <hr>
                  <p>From : <?php echo $from_date; ?> To : <?php echo $to_date; ?> </p>
                  <h5>Opening Balance : <?php echo $opening_balance; ?></h5>
                  <hr>
                  <div class="row" style="width:100% !important">
                    <div class="col-md-6 tbl">
                      <h5>Reciept Details</h5>
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No.</th>
                          <th>Party</th>
                          <th>Date</th>
                          <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          $i=0;
                          $tot_income = 0;
                          foreach ($receipt as $receipt) {
                          $i++;
                          $tot_income = $tot_income + $receipt->receipt_amount;
                          $party_id = $receipt->receipt_party;
                          $party_details = $this->Admin_Model->get_info_array('party_id', $party_id, 'uni_party');
                        ?>
                          <tr>
                            <td><?php echo $receipt->receipt_no; ?></td>
                            <td><?php echo $party_details[0]['party_firm']; ?></td>
                            <td><?php echo $receipt->receipt_date; ?></td>
                            <td><?php echo $receipt->receipt_amount; ?></td>
                          </tr>
                        <?php  }  ?>
                        <tr class="font-weight-bold">
                          <td colspan="2" class="text-right">Total Income </td>
                          <td><?php echo $tot_income; ?></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-6 tbl">
                      <h5>Expense Details</h5>
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No.</th>
                          <th>Account of Name</th>
                          <th>Date</th>
                          <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          $i=0;
                          $tot_exp = 0;
                          foreach ($expence as $expence) {
                          $i++;
                          $tot_exp = $tot_exp + $expence->expense_amount;
                          $ac_info_id = $expence->ac_info_id;
                          $ac_info = $this->Admin_Model->get_info_array('ac_info_id', $ac_info_id, 'uni_ac_info');
                        ?>
                          <tr>
                            <td><?php echo $expence->expense_no; ?></td>
                            <td><?php if($ac_info){ echo $ac_info[0]['ac_info_name']; } ?></td>
                            <td><?php echo $expence->expense_date; ?></td>
                            <td><?php echo $expence->expense_amount; ?></td>
                          </tr>
                        <?php  }  ?>
                        <tr class="font-weight-bold">
                          <td colspan="2" class="text-right">Total Expense : </td>
                          <td><?php echo $tot_exp; ?></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <hr>
                  <h5>Closing Balance : <?php echo ($opening_balance + $tot_income) - $tot_exp; ?></h5>
                </div>


              <?php  }  ?>
              <input type='button' id='btn' value='Print' onclick='printDiv();'>
            </div>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php //include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php //include('script.php') ?>


<script type="text/javascript">
function printDiv()
{
var divToPrint=document.getElementById('print_div');

var newWin=window.open('','Print-Window');

newWin.document.open();

newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

newWin.document.close();

setTimeout(function(){newWin.close();},10);


}
</script>
</body>
</html>
