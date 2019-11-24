<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
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
            <!-- <h1>Dashboard</h1> -->
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12 ">
                <!-- general form elements -->
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Welcome To Party Information</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="card-body row">
                    <div class="form-group col-md-8">
                      <select class="form-control select2 form-control-sm" title="Select Party" style="width: 100%;">
                        <option selected="selected" value="" >Select Party Name</option>
                        <?php foreach ($party_list as $party_list1) { ?>
                          <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                        <?php } ?>
                  </select>
                    </div>
                      <div class="form-group col-md-2 ">
                          <button type="submit" class="btn btn-info pl-4 float-right  pr-4">Go </button>
                      </div>
                      <div class="form-group col-md-2 ">
                          <button type="submit" class="btn btn-info ml-4">Add Party </button>
                      </div>
                  </div>
                    <!-- /.card-body -->
                  </form>
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
                    .lab{
                      margin-bottom: 3px;
                    }
                  </style>

                  <tr>
                    <td colspan="3"> <p class="lab"> <b> Firm Name</b> :</p> </td>
                    <td colspan="3">  <p class="lab"> <b>  Name Of Propritor</b> :</p> </td>
                  </tr>
                  <tr>
                    <td colspan="3"> <p class="lab"> <b> Address</b> :</p> </td>
                    <td colspan="3">  <p class="lab"> <b> Nature Of Business </b> :</p> </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <p class="lab"> <b> Area</b> :</p> </td>
                    <td colspan="2">  <p class="lab"> <b> Dist. </b> :</p> </td>
                      <td colspan="2">  <p class="lab"> <b>Taluka </b> :</p> </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <p class="lab"> <b> Mobile No. 1</b> :</p> </td>
                    <td colspan="2">  <p class="lab"> <b> Mobile No. 2 </b> :</p> </td>
                      <td colspan="2">  <p style="color:red;" class="lab"> <b>Total Outstanding </b> : <span >5000</span> </p> </td>
                  </tr>
                  <tr>
                    <td colspan="3"> <p class="lab"> <b>  GST No.</b> :</p> </td>
                    <td colspan="3">  <p class="lab"> <b> PAN No. </b> :</p> </td>
                  </tr>
                  <tr>
                    <td colspan="3"> <p class="lab"> <b>Email</b> :</p> </td>
                    <td colspan="3">  <p class="lab"> <b> Website</b> :</p> </td>
                  </tr>


          </table>
          <br>
          <div class="row">
            <div class="form-group col-md-2 ">
                <button type="submit" class="btn btn-info pl-4 float-right  pr-4">Edit </button>
            </div>
          </div>


                </div>
              </div>
              <!--/.col (left) -->
              <!-- right column -->
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>

    <section class="content">
      <div class="container-fluid">
        <hr>
        <!-- <h4 class="mb-3">Master Summary</h4> -->
        <div class="row">
          <!-- left column -->

          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>15</h3>
                <p>Enquiry </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>20</h3>
                <p> Quotation  </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>
                <p>Purchase Agreement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="product_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>200</h3>
                <p>Delivery Challan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>200</h3>
                <p>Sale Bill </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- left column -->

          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>
                <p>Repairy Receipt</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="product_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>
                <p>Repairy Bill</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="product_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>20</h3>
                <p>Govt Stamping Cash Memo</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>15</h3>
                <p>Govt Stamping</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>200</h3>
                <p>Receipt</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>200</h3>
                <p>Total Outstanding</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
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
