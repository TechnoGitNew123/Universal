<?php $roll_id = $this->session->userdata('admin_roll_id'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/images/universal.png" alt="Universal" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> <small> Universal Digital System</small></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <?php if ($roll_id == 1){?>
          <a href="" class="d-block">Admin <?php //echo $roll_id; ?></a>
        <?php } else{
          $user_id = $this->session->userdata('uni_user_id');

          $user_info = $this->Admin_Model->get_info('user_id', $user_id, 'uni_user');
          foreach ($user_info as $info) {
              $user_name = $info->user_name;
          }
        ?>
      <?php } ?>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item head">
          <a href="<?php echo base_url(); ?>Admin/dashboard" class="nav-link <?php if(isset($page) && $page == 'dashboard'){ echo 'active'; } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
      <!-- Master menu -->
    <?php if($roll_id == 1){ ?>
      <li class="nav-item has-treeview ">
        <a href="#" class="nav-link head">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Master
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/company_information" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Company Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/party_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Party Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/user_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                User Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/make_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Make Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/capacity_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Capacity Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/accuracy_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Accuracy Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/class_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Class Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/platter_size_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Platter Size Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/division_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Division Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/min_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Min Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/display_color_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Display Color Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/cabinet_color_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Cabinet Color Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/unit_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Unit Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/accessories_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Accessories Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/std_narration_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Std Narratiion Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/terms_conditions_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Terms Conditions Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/product_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Model Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/stamping_quarter_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Stamping Quarter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/trade_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Trade of Name</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/ac_info_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Account of Name</p>
            </a>
          </li>
        </ul>
      </li>
    <?php } ?>
<!-- Transaction Menu -->
      <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/enquiry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
              Enquiry Form
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/delivery_challan_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                Delivery Challan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_agreement_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
              Purchase Agreement
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/sale_bill_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
              Sale Bill
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/govt_stamp_bill_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Govt. Stamping Bill
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/repairy_bill_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Repairy Bill
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/quotation_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Quotation
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/expense_voucher_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Expense Voucher
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/complaint_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Complaint Information
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/service_report_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Service Report List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/receipt_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Receipt
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/party_all_info" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
            Party Information All
                </p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Report Menu -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/daybook" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daybook Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/enquiry_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enquiry Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/delivery_challan_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dellivery Challan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/purchase_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Agreement</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/sale_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/gov_stamping_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Govt. Stamping</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/repairy_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Repary Bill</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/quotation_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quotation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/expense_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Expense Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/complaint_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Complaint Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/service_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/receipt_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reciept Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Report/outstanding_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Outstanding Report</p>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
