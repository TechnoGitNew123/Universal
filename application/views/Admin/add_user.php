<!DOCTYPE html>
<html>
<?php
$page = "add_user";
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
          <div class="col-sm-12 text-center mt-2">
            <h1>USER INFORMATION</h1>
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
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">User Information</h3>
              </div>

              <?php
              // $a = array(
              //     "one" => 1,
              //     "two" => 2,
              //     "three" => 3,
              //     "seventeen" => 17
              // );
              //
              // foreach ($a as $k => $v) {
              //     echo $k;
              // }
               ?>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form id="form_action" role="form" action="../update_user" method="post">
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
              <?php } else{ ?>
                <form id="form_action" role="form" action="save_user" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Name of User" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="user_city" id="user_city" value="<?php if(isset($user_city)){ echo $user_city; } ?>" placeholder="Enter City" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="number" class="form-control required mobile" name="user_mobile" id="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Enter Mobile No." required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="password" class="form-control required" name="user_password" id="user_password" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="../dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
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
<?php if($this->session->flashdata('check_mobile')){
  $form_data = $this->session->flashdata('form_data');
?>
<script type="text/javascript">
  $(document).ready(function(){
    <?php foreach ($form_data as $key => $value) { ?>
      $('#<?php echo $key; ?>').val('<?php echo $value; ?>');
    <?php  } ?>
    toastr.error('Mobile Number Exist.');
  });
</script>
<?php } ?>

<script type="text/javascript">
// Update Click...
$('#btn_update, #btn_save').on('click',function(){
  $('.required').each(function(){
     var val = $(this).val();
     if(val == '' || val == '0'){
       $(this).addClass('required-input');
     }
     else{
       $(this).removeClass('required-input');
     }
  });
  if ($(".required-input")[0] || $(".invalide-input")[0]){
    // Dont Submit...
  } else {
      $('#form_action').submit();
  }
});
</script>


</body>
</html>
