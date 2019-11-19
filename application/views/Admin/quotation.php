<!DOCTYPE html>
<html>
<?php
$page = "quotation";
include('head.php');
?>
<style>
  .tbl_add td{
    padding:2px 10px !important;
  }
  .tbl_add th, .tbl_add td { min-width:200px; }
  .sr_no, .td_btn{
    min-width:50px !important;
  }
  .tbl_add .td_w{
    min-width:100px !important;
  }
  html, body{
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
          <div class="col-sm-12 mt-1 text-center">
            <h4>QUOTATION</h4>
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
            <!-- /.card-header -->
            <div class="card-body" >
              <form role="form">
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="quotation_no" id="quotation_no" value="<?php if(isset($quotation_no)){ echo $quotation_no;} ?>" placeholder="Quotation No." readonly required>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="quotation_date" id="date1" value="<?php if(isset($quotation_date)){ echo $quotation_date;} ?>" data-target="#date1" data-toggle="datetimepicker" placeholder="Quotation Date" required>
                  </div>
                  <div class="form-group col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="quotation_party" id="quotation_party" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($quotation_party)){ if($party_list1->party_id == $quotation_party){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <a href="<?php echo base_url(); ?>Admin/party_information" class="btn btn-sm btn-block btn-primary">Add New Party</a>
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="quotation_person" id="quotation_person" value="<?php if(isset($quotation_no)){ echo $quotation_no;} ?>" placeholder="Name of Person">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="quotation_contact" id="quotation_contact" value="<?php if(isset($quotation_no)){ echo $quotation_no;} ?>" placeholder="Contact No.">
                  </div>
                </div>
              </form>
              <div class=" w-100 text-right">
                <button id="add_row" class="btn btn-sm btn-primary mb-3 mr-1" width="150px">Add Row</button>
              </div>

              <div class="" style="overflow-x:auto;">

                <table id="myTable" class="table table-bordered table-striped tbl_add" style="">
                  <thead>
                  <tr>
                    <th class="sr_no">Sr. No.</th>
                    <th>Make</th>
                    <th>Model No.</th>
                    <th>Machine Serial no.</th>
                    <th>Capacity</th>
                    <th>Accuracy</th>
                    <th>Class</th>
                    <th>Platter Size</th>
                    <th>Accessories</th>
                    <th class="td_w">GST</th>
                    <th class="td_w">Qty</th>
                    <th class="td_w">Rate</th>
                    <th class="td_w">Amount</th>
                    <th class="td_btn"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td class="sr_no">1</td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                    </td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control form-control-sm" name="name" id="" rows="3"></textarea>
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="" id="" placeholder="GST">
                      <input type="text" class="form-control form-control-sm mt-1" name="" id="" placeholder="Acc GST">
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Qty">
                      <input type="text" class="form-control form-control-sm mt-1" name="" id="" placeholder="Acc Qty">
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Rate">
                      <input type="text" class="form-control form-control-sm mt-1" name="" id="" placeholder="Acc Rate">
                    </td>
                    <td class="td_w">
                      <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Amount">
                      <input type="text" class="form-control form-control-sm mt-1" name="" id="" placeholder="Acc Amount">
                    </td>
                    <td class="td_btn"></td>
                  </tr>
                </table>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5 class="my-4">Terms And Conditions</h5>
                  <div class="form-group" >
                    <textarea id="txt_terms" class="form-control form-control-sm" name="quotation_terms" id="quotation_terms" rows="8" cols="80"><?php if(isset($quotation_terms)){ echo $quotation_terms;} ?></textarea>
                  </div>
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary  mr-3">Save</button>
                    <button type="submit" class="btn btn-default ">Cancel</button>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-group row pt-4 float-right">
                    <label for="inputEmail3" class="col-form-label mr-3">Total Amount</label>
                    <div class="">
                      <input type="text" class="form-control" name="quotation_total" id="quotation_total" value="<?php if(isset($quotation_total)){ echo $quotation_total;} ?>">
                    </div>
                  </div>
                  </div>
              </div>

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
              '<td><input type="text" class="form-control form-control-sm" name="" id="" placeholder="">'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td><select class="form-control select2 form-control-sm" style="width: 100%;"><option selected="selected">Alabama</option></select></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_w"><input type="text" class="form-control form-control-sm" name="" id="" placeholder=""></td>'+
              '<td class="td_btn"><a> <i class="fa fa-trash text-danger"></i> </a></td>'+
              '</tr>'+
              '<tr>'+
                '<td class="sr_no"></td>'+
                '<td colspan="10">'+
                  '<textarea class="form-control form-control-sm w-100" name="name" rows="3" cols=""></textarea>'+
                '</td>'+
                '<td class="td_w">'+
                  '<input type="text" class="form-control form-control-sm" name="" id="" placeholder="">'+
                '</td>'+
                '<td class="td_btn"></td>'+
              '</tr>'
              ;
    $('#myTable').append(row);
  });

  $('#myTable').on('click', 'a', function () {
    $(this).closest('tr').next('tr').remove();
    $(this).closest('tr').remove();
  });
</script>
</body>
</html>
