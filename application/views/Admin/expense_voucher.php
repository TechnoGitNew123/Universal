<!DOCTYPE html>
<html>
<?php
$page = "expense_voucher";
include('head.php');
?>
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
          <div class="col-sm-12 mt-1 text-center">
            <h4>EXPENSE VOUCHER</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card  card-default">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title">Add Expense Information</h3>
            </div>

            <?php if(isset($update)){ ?>
              <form role="form" method="post">
            <?php } else{ ?>
              <form role="form" action="<?php echo base_url(); ?>Transaction/save_expense" method="post">
            <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="expense_no" id="expense_no" placeholder="Exp. Voucher No." value="<?php if(isset($expense_no)){ echo $expense_no; } ?>" readonly required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="expense_date" id="date1" value="<?php if(isset($expense_date)){ echo $expense_date; } ?>" data-target="#date1" data-toggle="datetimepicker" placeholder="Exp. Voucher Date" required>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="ac_info_id" id="ac_info_id">
                      <option value="">Account of Name</option>
                      <?php foreach ($ac_info_list as $ac_info_list1) { ?>
                        <option value="<?php echo $ac_info_list1->ac_info_id; ?>" <?php if(isset($ac_info_id)){ if($ac_info_list1->ac_info_id == $ac_info_id){ echo "selected"; } }  ?>><?php echo $ac_info_list1->ac_info_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="payee_name" id="payee_name" value="<?php if(isset($payee_name)){ echo $payee_name; } ?>" placeholder="Payee Person Name">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="expense_amount" id="expense_amount" value="<?php if(isset($expense_amount)){ echo $expense_amount; } ?>" placeholder="Amount" required>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control form-control-sm" placeholder="Narration" rows="5" cols="100" name="expense_narration" id="expense_narration" ><?php if(isset($expense_narration)){ echo $expense_narration; } ?></textarea>
                  </div>
                  </div>
                  <div class="card-footer">
                    <?php if(isset($update)){ ?>
                      <button type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button type="submit" class="btn btn-success px-4">Add</button>
                    <?php } ?>
                    <a href="../dashboard" class="btn btn-default ml-4">Cancel</a>
                  </div>
              </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
<script type="text/javascript">
  $('#add_terms').click(function(){
    var terms = $('.select2-selection__choice').val();
    // var res = terms.replace("×", ",");
    // $('#txt_terms').val(res);
    alert(terms);
  });

  $('#add_row').click(function(){
    var row = '<tr><td class="sr_no">1</td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_btn"><a> <i class="fa fa-trash text-danger"></i> </a></td>'+
              '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', 'a', function () {
    $(this).closest('tr').remove();
  });
</script>
</body>
</html>
