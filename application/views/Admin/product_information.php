<!DOCTYPE html>
<html>
<?php
$page = "product_information";
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
            <h1>PRODUCT INFORMATION</h1>
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
                <h3 class="card-title">Product Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($update)){ ?>
                <form role="form" action="../update_product" method="post">
                  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
              <?php } else{ ?>
                <form role="form" action="save_product" method="post">
              <?php } ?>
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <select class="form-control select2" name="make_id" id="make_id" required>
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$make_id.'">'.$make_name.'</option>';
                      } else{
                        echo '<option selected="selected" value=" ">Select Make</option>';
                      }?>
                      <?php foreach ($make_list as $make_list1) {
                        echo '<option value="'.$make_list1->make_id.'">'.$make_list1->make_name.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-12" required>
                    <input type="text" class="form-control form-control-sm" name="product_model_no" id="product_model_no" value="<?php if(isset($product_model_no)){ echo $product_model_no; } ?>" placeholder="Enter Model No." required>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control form-control-sm select2" name="capacity_id" id="capacity_id">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$capacity_id.'">'.$capacity_name.'</option>';
                      } else{
                        echo '<option selected="selected">Select Capacity</option>';
                      }?>
                      <?php foreach ($capacity_list as $capacity_list1) {
                        echo '<option value="'.$capacity_list1->capacity_id.'">'.$capacity_list1->capacity_name.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="accuracy_id" id="accuracy_id">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$accuracy_id.'">'.$accuracy_name.'</option>';
                      } else{
                        echo '<option selected="selected">Select Accuracy</option>';
                      }?>
                      <?php foreach ($accuracy_list as $accuracy_list1) {
                        echo '<option value="'.$accuracy_list1->accuracy_id.'">'.$accuracy_list1->accuracy_name.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="class_id" id="class_id">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$class_id.'">'.$class_name.'</option>';
                      } else{
                        echo '<option selected="selected">Select Class</option>';
                      }?>
                      <?php foreach ($class_list as $class_list1) {
                        echo '<option value="'.$class_list1->class_id.'">'.$class_list1->class_name.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="platter_id" id="platter_id">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$platter_id.'">'.$platter_size.'</option>';
                      } else{
                        echo '<option selected="selected">Select Platter Size</option>';
                      }?>
                      <?php foreach ($platter_list as $platter_list1) {
                        echo '<option value="'.$platter_list1->platter_id.'">'.$platter_list1->platter_size.'</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="stamping_days" id="stamping_days">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$stamping_days.'">'.$stamping_days.'</option>';
                      } else{
                        echo '<option selected="selected">Select Stamping Period Days</option>';
                      }?>
                      <option>360</option>
                    </select>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <select class="form-control select2" name="stamping_days" id="stamping_days">
                      <?php if(isset($make_id)){
                        echo '<option selected="selected" value="'.$stamping_days.'">'.$stamping_days.'</option>';
                      } else{
                        echo '<option selected="selected">Select Stamping Period Days</option>';
                      }?>
                      <option>360</option>
                    </select>
                  </div>

                  <!-- <div class="form-group col-md-6">
                    <input type="number" class="form-control form-control-sm" name="sale_price" id="sale_price"  value="<?php if(isset($sale_price)){ echo $sale_price; } ?>" placeholder="Sale Price" required>
                  </div> -->


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="../dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
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
</body>
</html>
