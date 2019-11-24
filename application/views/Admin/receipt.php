<!DOCTYPE html>
<html>
<?php
$page = "receipt";
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
            <h4>RECEIPT ENTRY</h4>
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
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body" >
              <form role="form" action="<?php echo base_url(); ?>Transaction/save_reciept" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="receipt_no" id="receipt_no" placeholder="Receipt No." value="<?php if(isset($receipt_no)){ echo $receipt_no; } ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="receipt_date" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Receipt Date" required>
                  </div>
                  <div class="form-group col-md-12">
                    <select class="form-control select2 form-control-sm" name="receipt_party" id="receipt_party" style="width: 100%;">
                      <option selected="selected" value="0">Select Party name/ Propritor name</option>
                      <?php foreach ($party_list as $party_list1) {
                        echo '<option value="'.$party_list1->party_id.'">'.$party_list1->party_firm.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" readonly class="form-control form-control-sm" name="receipt_outstanding" id="receipt_outstanding" placeholder="Outstanding Amount">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control form-control-sm" name="receipt_amount" id="receipt_amount" placeholder="Receipt Amount">
                  </div>
                  <div class="form-group col-md-12">
                    <textarea name="receipt_narration" id="receipt_narration" class="form-control form-control-sm" placeholder="Narration" rows="5" cols="100"></textarea>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary  mr-3">Save</button>
                    <a href="<?php echo base_url(); ?>Admin/dashboard" class="btn btn-default ">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
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

  $("#receipt_party").on("change", function(){
    var party_id = $(this).val();
    // alert(receipt_party);

    $.ajax({
      url: '<?php echo base_url(); ?>Transaction/get_outstanding_amount',
      type: "POST",
      data: {"party_id":party_id},
      context: this,
      success: function (result) {
        $('#receipt_outstanding').val(result);
        // $(this).closest('tr').find('.model_no').html(result);
      }
  	});
  });
</script>
</body>
</html>
