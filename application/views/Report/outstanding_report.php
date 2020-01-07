<!DOCTYPE html>
<html>
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
            <h4>PARTY INFORMATION</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> List Party Information</h3>
              <div class="card-tools">
                <a href="party_information" class="btn btn-sm btn-block btn-primary">Add Party</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <!-- <th>Nature of Business</th> -->
                  <th>Name of Firm</th>
                  <th>Name of Propriter</th>
                  <th>Mobile No.</th>
                  <th>Area</th>
                  <th>Outstanding Amount</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 0;
                    foreach ($party_list as $party_list1) {
                      $i++;
                      $trade_id = $party_list1->party_business;
                      $trade_details = $this->Admin_Model->get_info_array('trade_id', $trade_id, 'uni_trade');
                      $party_id = $party_list1->party_id;
                      $total_sale_amount = $this->Transaction_Model->total_sale_amount($party_id);
                      $total_stamping_amount = $this->Transaction_Model->total_stamping_amount($party_id);
                      $total_repairy_amount = $this->Transaction_Model->total_repairy_amount($party_id);
                      $total_service_amount = $this->Transaction_Model->total_service_amount($party_id);
                      if(!$total_sale_amount){ $total_sale_amount = 0; }
                      if(!$total_stamping_amount){ $total_stamping_amount = 0; }
                      if(!$total_repairy_amount){ $total_repairy_amount = 0; }
                      if(!$total_service_amount){ $total_service_amount = 0; }

                      $total_bill = $total_sale_amount + $total_stamping_amount + $total_repairy_amount + $total_service_amount;
                      $total_reciept_amount = $this->Transaction_Model->total_reciept_amount($party_id);
                      $outstanding_amount = $total_bill - $total_reciept_amount;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <!-- <td>
                      <?php echo $trade_details[0]['trade_name']; ?>
                    </td> -->
                    <td><?php echo $party_list1->party_firm; ?></td>
                    <td><?php echo $party_list1->party_proriter; ?></td>
                    <td><?php echo $party_list1->party_mob1; ?></td>
                    <td><?php echo $party_list1->party_area; ?></td>
                    <td>&#8377; <?php echo round($outstanding_amount); ?></td>
                  </tr>
                <?php  } ?>
              </table>
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
</body>
</html>
