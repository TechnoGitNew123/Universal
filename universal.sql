-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universal`
--

-- --------------------------------------------------------

--
-- Table structure for table `uni_accessories`
--

CREATE TABLE `uni_accessories` (
  `accessories_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `accessories_name` varchar(250) NOT NULL,
  `accessories_status` varchar(20) NOT NULL DEFAULT 'active',
  `accessories_addedby` varchar(150) NOT NULL,
  `accessories_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_accuracy`
--

CREATE TABLE `uni_accuracy` (
  `accuracy_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `accuracy_name` varchar(250) NOT NULL,
  `accuracy_status` varchar(20) NOT NULL DEFAULT 'active',
  `accuracy_addedby` varchar(150) NOT NULL,
  `accuracy_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE `uni_admin` (
  `id` int(11) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_cabinet_color`
--

CREATE TABLE `uni_cabinet_color` (
  `cabinet_color_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `cabinet_color_name` varchar(250) NOT NULL,
  `cabinet_color_status` varchar(20) NOT NULL DEFAULT 'active',
  `cabinet_color_addedby` varchar(150) NOT NULL,
  `cabinet_color_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_capacity`
--

CREATE TABLE `uni_capacity` (
  `capacity_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `capacity_name` varchar(250) NOT NULL,
  `capacity_status` varchar(20) NOT NULL DEFAULT 'active',
  `capacity_addedby` varchar(150) NOT NULL,
  `capacity_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_class`
--

CREATE TABLE `uni_class` (
  `class_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `class_status` varchar(20) NOT NULL DEFAULT 'active',
  `class_addedby` varchar(150) NOT NULL,
  `class_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_company`
--

CREATE TABLE `uni_company` (
  `company_id` bigint(20) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `company_address` varchar(350) NOT NULL,
  `company_city` varchar(150) NOT NULL,
  `company_state` varchar(150) NOT NULL,
  `company_district` varchar(150) NOT NULL,
  `company_pincode` bigint(20) NOT NULL,
  `company_statecode` varchar(100) DEFAULT NULL,
  `company_mob1` varchar(12) NOT NULL,
  `company_mob2` varchar(12) NOT NULL,
  `company_email` varchar(150) NOT NULL,
  `company_website` varchar(150) NOT NULL,
  `company_pan_no` varchar(12) NOT NULL,
  `company_gst_no` varchar(100) NOT NULL,
  `company_lic1` varchar(150) NOT NULL,
  `company_lic2` varchar(150) NOT NULL,
  `company_start_date` varchar(15) NOT NULL,
  `company_end_date` varchar(15) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(150) NOT NULL,
  `admin_roll_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_company`
--

INSERT INTO `uni_company` (`company_id`, `company_name`, `company_address`, `company_city`, `company_state`, `company_district`, `company_pincode`, `company_statecode`, `company_mob1`, `company_mob2`, `company_email`, `company_website`, `company_pan_no`, `company_gst_no`, `company_lic1`, `company_lic2`, `company_start_date`, `company_end_date`, `company_logo`, `admin_email`, `admin_password`, `admin_roll_id`) VALUES
(1, 'Universal Digital  System', '126, Bhupal Tower, Ford Corner, Laxmipuri', 'Kolhapur', 'Maharashtra', 'Kolhapur', 416005, '27', '9422413073', '9423044173', 'rajnish.uni@rediffmail.com', 'www.universaldigital.net', '', '', '', '', '01-4-2019', '31-3-2020', '', 'demo@mail.com', '123456', 1),
(2, 'Universal Digital Systems', '126, Bhupal Tower, Ford Corner, Lamipuri', 'Kolhapur', 'Maharashtra', 'Kolhapur', 416002, NULL, '9422413073', '9423044173', 'rajnish.uni@gmail.com', 'www.universaldigital.net', '', '', '', '', '01-4-2019', '31-3-2020', '', 'rajnish.uni@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uni_complaint`
--

CREATE TABLE `uni_complaint` (
  `complaint_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `complaint_no` varchar(20) NOT NULL,
  `complaint_date` varchar(20) NOT NULL,
  `party_id` int(11) NOT NULL,
  `complaint_service` varchar(250) NOT NULL,
  `complaint_reporting` varchar(250) NOT NULL,
  `complaint_person` varchar(250) NOT NULL,
  `complaint_contact_no` bigint(20) NOT NULL,
  `complaint_engeeneer` varchar(250) NOT NULL,
  `complaint_status` varchar(250) NOT NULL DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_delivery_master`
--

CREATE TABLE `uni_delivery_master` (
  `delivery_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `delivery_no` varchar(20) NOT NULL,
  `delivery_date` varchar(20) NOT NULL,
  `delivery_party` bigint(20) NOT NULL,
  `delivery_transport` varchar(250) NOT NULL,
  `delivery_docket_no` varchar(250) NOT NULL,
  `delivery_user` bigint(20) DEFAULT NULL,
  `delivery_terms` text NOT NULL,
  `delivery_total` double NOT NULL,
  `delivery_bill_status` varchar(20) NOT NULL DEFAULT 'no' COMMENT 'Converted to Sale',
  `delivery_basic` double NOT NULL,
  `delivery_gst` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_delivery_trans`
--

CREATE TABLE `uni_delivery_trans` (
  `delivery_trans_id` bigint(20) NOT NULL,
  `delivery_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` bigint(20) NOT NULL,
  `machine_serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `platter_id` bigint(20) NOT NULL,
  `delivery_trans_gst` double NOT NULL,
  `delivery_trans_gst_amount` double DEFAULT NULL,
  `delivery_trans_qty` double NOT NULL,
  `delivery_trans_rate` double NOT NULL,
  `delivery_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_display_color`
--

CREATE TABLE `uni_display_color` (
  `display_color_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `display_color_name` varchar(250) NOT NULL,
  `display_color_status` varchar(20) NOT NULL DEFAULT 'active',
  `display_color_addedby` varchar(150) NOT NULL,
  `display_color_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_division`
--

CREATE TABLE `uni_division` (
  `division_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `division_name` varchar(250) NOT NULL COMMENT 'Division Area Name',
  `division_head` varchar(250) NOT NULL COMMENT 'Division Name',
  `division_status` varchar(20) NOT NULL DEFAULT 'active',
  `division_addedby` varchar(150) NOT NULL,
  `division_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_enquiry`
--

CREATE TABLE `uni_enquiry` (
  `enquiry_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `party_id` bigint(20) NOT NULL,
  `requirment` text NOT NULL,
  `enquiry_status` varchar(20) NOT NULL DEFAULT 'active',
  `enquiry_addedby` varchar(150) NOT NULL,
  `enquiry_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_expense`
--

CREATE TABLE `uni_expense` (
  `expense_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `expense_no` varchar(20) NOT NULL,
  `expense_date` varchar(20) NOT NULL,
  `expense_amount` bigint(20) NOT NULL,
  `expense_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_govt_stamp_master`
--

CREATE TABLE `uni_govt_stamp_master` (
  `govt_stamp_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `govt_stamp_no` varchar(20) NOT NULL,
  `govt_stamp_date` varchar(20) NOT NULL,
  `govt_stamp_party` bigint(20) NOT NULL,
  `govt_stamp_division` bigint(20) NOT NULL COMMENT 'Division Id',
  `govt_stamp_trade` varchar(250) DEFAULT NULL,
  `govt_stamp_vc_no` varchar(20) NOT NULL,
  `govt_stamp_vc_date` varchar(20) NOT NULL,
  `govt_stamp_grn_no` varchar(20) NOT NULL,
  `govt_stamp_grn_date` varchar(20) NOT NULL,
  `govt_stamp_objection` varchar(20) NOT NULL,
  `govt_stamp_condition` varchar(20) NOT NULL,
  `govt_stamp_late_fee` double NOT NULL,
  `govt_stamp_hctada` double NOT NULL,
  `govt_stamp_ser_charge` double DEFAULT NULL COMMENT 'Total Service Charges',
  `govt_stamp_gov_fees` double DEFAULT NULL COMMENT 'Total Govt Fees',
  `govt_stamp_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_govt_stamp_trans`
--

CREATE TABLE `uni_govt_stamp_trans` (
  `govt_stamp_trans_id` bigint(20) NOT NULL,
  `govt_stamp_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` bigint(20) NOT NULL,
  `machine_serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `min_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `lcr_no` varchar(250) NOT NULL,
  `lcr_date` varchar(20) NOT NULL,
  `govt_fees` double NOT NULL,
  `ser_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_make`
--

CREATE TABLE `uni_make` (
  `make_id` bigint(20) NOT NULL,
  `company_id` int(11) NOT NULL,
  `make_name` varchar(250) NOT NULL,
  `make_status` varchar(20) NOT NULL DEFAULT 'active',
  `make_addedby` varchar(150) NOT NULL,
  `make_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_min`
--

CREATE TABLE `uni_min` (
  `min_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `min_name` varchar(250) NOT NULL,
  `min_status` varchar(20) NOT NULL DEFAULT 'active',
  `min_addedby` varchar(150) NOT NULL,
  `min_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_party`
--

CREATE TABLE `uni_party` (
  `party_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `party_firm` varchar(300) NOT NULL,
  `party_address` text NOT NULL,
  `party_area` varchar(150) NOT NULL,
  `party_taluka` varchar(100) NOT NULL,
  `party_district` varchar(100) NOT NULL,
  `party_pin` bigint(20) NOT NULL,
  `party_state` varchar(100) DEFAULT NULL,
  `party_mob1` varchar(12) NOT NULL,
  `party_mob2` varchar(12) NOT NULL,
  `party_email` varchar(150) NOT NULL,
  `party_website` varchar(150) NOT NULL,
  `party_gst_no` varchar(100) NOT NULL,
  `party_pan_no` varchar(20) NOT NULL,
  `party_proriter` varchar(250) NOT NULL,
  `party_business` varchar(250) NOT NULL,
  `party_requirment` text DEFAULT NULL,
  `party_type` varchar(20) NOT NULL,
  `party_status` varchar(20) NOT NULL DEFAULT 'active',
  `party_addedby` varchar(150) NOT NULL,
  `party_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_platter_size`
--

CREATE TABLE `uni_platter_size` (
  `platter_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `platter_size` varchar(250) NOT NULL,
  `platter_status` varchar(20) NOT NULL DEFAULT 'active',
  `platter_addedby` varchar(150) NOT NULL,
  `platter_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_product`
--

CREATE TABLE `uni_product` (
  `product_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `product_model_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `platter_id` bigint(20) NOT NULL,
  `stamping_days` varchar(100) NOT NULL,
  `sale_price` varchar(100) NOT NULL,
  `product_status` varchar(20) NOT NULL DEFAULT 'active',
  `product_addedby` varchar(150) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_purchase_master`
--

CREATE TABLE `uni_purchase_master` (
  `purchase_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `purchase_order_no` varchar(25) NOT NULL,
  `purchase_date` varchar(20) NOT NULL,
  `purchase_party` bigint(20) NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `invoice_date` varchar(20) NOT NULL,
  `purchase_terms` text NOT NULL,
  `purchase_basic_price` double NOT NULL,
  `purchase_gst` double NOT NULL,
  `purchase_stamping` double NOT NULL,
  `purchase_other` double NOT NULL,
  `purchase_total` double NOT NULL,
  `purchase_advance` double NOT NULL,
  `purchase_due` double NOT NULL,
  `purchase_del_period` varchar(250) NOT NULL,
  `purchase_pay_terms` varchar(250) NOT NULL,
  `purchase_accss` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_purchase_trans`
--

CREATE TABLE `uni_purchase_trans` (
  `purchase_trans_id` bigint(20) NOT NULL,
  `purchase_id` bigint(20) NOT NULL,
  `make_id` bigint(20) DEFAULT NULL,
  `model_no_id` bigint(20) DEFAULT NULL,
  `machine_serial_no` varchar(250) DEFAULT NULL,
  `capacity_id` bigint(20) DEFAULT NULL,
  `accuracy_id` bigint(20) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `platter_id` int(11) DEFAULT NULL,
  `display_color_id` int(11) DEFAULT NULL,
  `cabinate_color_id` int(11) DEFAULT NULL,
  `accessories` text DEFAULT NULL,
  `purchase_trans_descr` text DEFAULT NULL,
  `purchase_trans_gst` double DEFAULT NULL,
  `purchase_trans_qty` double DEFAULT NULL,
  `purchase_trans_rate` double DEFAULT NULL,
  `purchase_trans_amount` double DEFAULT NULL,
  `purchase_descr_gst` double DEFAULT NULL,
  `purchase_descr_qty` double DEFAULT NULL,
  `purchase_descr_rate` double DEFAULT NULL,
  `purchase_descr_amount` double DEFAULT NULL,
  `purchase_trans_gst_amount` double DEFAULT NULL,
  `trans_acc_gst_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_quotation_master`
--

CREATE TABLE `uni_quotation_master` (
  `quotation_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `quotation_no` varchar(20) NOT NULL,
  `quotation_date` varchar(20) NOT NULL,
  `quotation_party` bigint(20) NOT NULL,
  `quotation_person` varchar(250) NOT NULL,
  `quotation_contact` bigint(20) NOT NULL,
  `quotation_terms` text NOT NULL,
  `quotation_basic` double DEFAULT NULL,
  `quotation_gst` double DEFAULT NULL,
  `quotation_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_quotation_trans`
--

CREATE TABLE `uni_quotation_trans` (
  `quotation_trans_id` bigint(20) NOT NULL,
  `quotation_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` bigint(20) NOT NULL,
  `machine_serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `platter_id` int(11) NOT NULL,
  `quotation_trans_gst` double NOT NULL,
  `quotation_trans_gst_amount` double NOT NULL,
  `quotation_trans_qty` double NOT NULL,
  `quotation_trans_rate` double NOT NULL,
  `quotation_trans_acc` text NOT NULL,
  `trans_acc_gst` double NOT NULL,
  `trans_acc_gst_amount` double NOT NULL,
  `trans_acc_qty` double NOT NULL,
  `trans_acc_rate` double NOT NULL,
  `trans_acc_amount` double NOT NULL,
  `quotation_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_receipt`
--

CREATE TABLE `uni_receipt` (
  `receipt_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `receipt_date` varchar(20) NOT NULL,
  `receipt_party` bigint(20) NOT NULL,
  `receipt_outstanding` double NOT NULL,
  `receipt_amount` double NOT NULL,
  `receipt_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_repairy_master`
--

CREATE TABLE `uni_repairy_master` (
  `repairy_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `repairy_no` varchar(20) NOT NULL,
  `repairy_date` varchar(20) NOT NULL,
  `repairy_party` bigint(20) NOT NULL,
  `repairy_person` varchar(200) NOT NULL,
  `repairy_contact` bigint(20) NOT NULL,
  `repairy_user` bigint(20) DEFAULT NULL,
  `repairy_accss` text DEFAULT NULL,
  `repairy_basic_charge` double NOT NULL DEFAULT 0,
  `repairy_min_charge` double NOT NULL DEFAULT 0,
  `repairy_total` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_repairy_trans`
--

CREATE TABLE `uni_repairy_trans` (
  `repairy_trans_id` bigint(20) NOT NULL,
  `repairy_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` varchar(250) NOT NULL COMMENT 'Model No',
  `machine_serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `repairy_details` varchar(250) DEFAULT NULL,
  `material_used` text DEFAULT NULL,
  `repairy_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_roll`
--

CREATE TABLE `uni_roll` (
  `roll_id` bigint(20) NOT NULL,
  `roll_name` varchar(150) NOT NULL,
  `roll_status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_sale_master`
--

CREATE TABLE `uni_sale_master` (
  `sale_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `sale_bill_no` varchar(20) NOT NULL,
  `sale_date` varchar(20) NOT NULL,
  `sale_party` bigint(20) NOT NULL COMMENT 'Party Id',
  `sale_challan_no` bigint(20) NOT NULL COMMENT 'this is id of Delivery Challan',
  `sale_employee` varchar(250) NOT NULL COMMENT 'user id from uni_user table',
  `sale_terms` text NOT NULL,
  `total_gst` double NOT NULL,
  `total_base_amount` double NOT NULL,
  `sale_total` double NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_sale_trans`
--

CREATE TABLE `uni_sale_trans` (
  `sale_trans_id` bigint(20) NOT NULL,
  `sale_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` bigint(20) NOT NULL,
  `machine_serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `platter_id` int(11) NOT NULL,
  `sale_trans_gst` double NOT NULL,
  `sale_trans_gst_amount` double DEFAULT NULL,
  `sale_trans_qty` double NOT NULL,
  `sale_trans_rate` double NOT NULL,
  `sale_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_service`
--

CREATE TABLE `uni_service` (
  `service_id` int(11) NOT NULL,
  `service_no` varchar(20) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_no` int(11) NOT NULL,
  `service_sr_no` int(11) DEFAULT NULL,
  `service_range` varchar(250) NOT NULL,
  `service_stamping` varchar(250) NOT NULL,
  `service_observation` text NOT NULL,
  `service_recommend` text NOT NULL,
  `service_component` text NOT NULL,
  `service_call_completion` varchar(250) NOT NULL,
  `service_charges_fee` double NOT NULL,
  `service_date` varchar(20) NOT NULL,
  `service_time_in` varchar(20) NOT NULL,
  `service_time_out` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_std_narration`
--

CREATE TABLE `uni_std_narration` (
  `std_narration_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `std_narration_name` varchar(250) NOT NULL,
  `std_narration_status` varchar(20) NOT NULL DEFAULT 'active',
  `std_narration_addedby` varchar(150) NOT NULL,
  `std_narration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_terms`
--

CREATE TABLE `uni_terms` (
  `terms_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `terms_name` varchar(250) NOT NULL,
  `terms_status` varchar(20) NOT NULL DEFAULT 'active',
  `terms_addedby` varchar(150) NOT NULL,
  `terms_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_unit`
--

CREATE TABLE `uni_unit` (
  `unit_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `unit_name` varchar(250) NOT NULL,
  `unit_status` varchar(20) NOT NULL DEFAULT 'active',
  `unit_addedby` varchar(150) NOT NULL,
  `unit_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_user`
--

CREATE TABLE `uni_user` (
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 2,
  `user_name` varchar(250) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active',
  `user_addedby` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uni_accessories`
--
ALTER TABLE `uni_accessories`
  ADD PRIMARY KEY (`accessories_id`);

--
-- Indexes for table `uni_accuracy`
--
ALTER TABLE `uni_accuracy`
  ADD PRIMARY KEY (`accuracy_id`);

--
-- Indexes for table `uni_admin`
--
ALTER TABLE `uni_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `uni_cabinet_color`
--
ALTER TABLE `uni_cabinet_color`
  ADD PRIMARY KEY (`cabinet_color_id`);

--
-- Indexes for table `uni_capacity`
--
ALTER TABLE `uni_capacity`
  ADD PRIMARY KEY (`capacity_id`);

--
-- Indexes for table `uni_class`
--
ALTER TABLE `uni_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `uni_company`
--
ALTER TABLE `uni_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `uni_complaint`
--
ALTER TABLE `uni_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `uni_delivery_master`
--
ALTER TABLE `uni_delivery_master`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `delivery_party` (`delivery_party`);

--
-- Indexes for table `uni_delivery_trans`
--
ALTER TABLE `uni_delivery_trans`
  ADD PRIMARY KEY (`delivery_trans_id`);

--
-- Indexes for table `uni_display_color`
--
ALTER TABLE `uni_display_color`
  ADD PRIMARY KEY (`display_color_id`);

--
-- Indexes for table `uni_division`
--
ALTER TABLE `uni_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `uni_enquiry`
--
ALTER TABLE `uni_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `uni_expense`
--
ALTER TABLE `uni_expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `uni_govt_stamp_master`
--
ALTER TABLE `uni_govt_stamp_master`
  ADD PRIMARY KEY (`govt_stamp_id`);

--
-- Indexes for table `uni_govt_stamp_trans`
--
ALTER TABLE `uni_govt_stamp_trans`
  ADD PRIMARY KEY (`govt_stamp_trans_id`);

--
-- Indexes for table `uni_make`
--
ALTER TABLE `uni_make`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `uni_min`
--
ALTER TABLE `uni_min`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `uni_party`
--
ALTER TABLE `uni_party`
  ADD PRIMARY KEY (`party_id`);

--
-- Indexes for table `uni_platter_size`
--
ALTER TABLE `uni_platter_size`
  ADD PRIMARY KEY (`platter_id`);

--
-- Indexes for table `uni_product`
--
ALTER TABLE `uni_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `uni_purchase_master`
--
ALTER TABLE `uni_purchase_master`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `uni_purchase_trans`
--
ALTER TABLE `uni_purchase_trans`
  ADD PRIMARY KEY (`purchase_trans_id`);

--
-- Indexes for table `uni_quotation_master`
--
ALTER TABLE `uni_quotation_master`
  ADD PRIMARY KEY (`quotation_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `uni_quotation_trans`
--
ALTER TABLE `uni_quotation_trans`
  ADD PRIMARY KEY (`quotation_trans_id`);

--
-- Indexes for table `uni_receipt`
--
ALTER TABLE `uni_receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `uni_repairy_master`
--
ALTER TABLE `uni_repairy_master`
  ADD PRIMARY KEY (`repairy_id`);

--
-- Indexes for table `uni_repairy_trans`
--
ALTER TABLE `uni_repairy_trans`
  ADD PRIMARY KEY (`repairy_trans_id`);

--
-- Indexes for table `uni_roll`
--
ALTER TABLE `uni_roll`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indexes for table `uni_sale_master`
--
ALTER TABLE `uni_sale_master`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `uni_sale_trans`
--
ALTER TABLE `uni_sale_trans`
  ADD PRIMARY KEY (`sale_trans_id`);

--
-- Indexes for table `uni_service`
--
ALTER TABLE `uni_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `uni_std_narration`
--
ALTER TABLE `uni_std_narration`
  ADD PRIMARY KEY (`std_narration_id`);

--
-- Indexes for table `uni_terms`
--
ALTER TABLE `uni_terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `uni_unit`
--
ALTER TABLE `uni_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `uni_user`
--
ALTER TABLE `uni_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uni_accessories`
--
ALTER TABLE `uni_accessories`
  MODIFY `accessories_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_accuracy`
--
ALTER TABLE `uni_accuracy`
  MODIFY `accuracy_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_admin`
--
ALTER TABLE `uni_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_cabinet_color`
--
ALTER TABLE `uni_cabinet_color`
  MODIFY `cabinet_color_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_capacity`
--
ALTER TABLE `uni_capacity`
  MODIFY `capacity_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_class`
--
ALTER TABLE `uni_class`
  MODIFY `class_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_company`
--
ALTER TABLE `uni_company`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_complaint`
--
ALTER TABLE `uni_complaint`
  MODIFY `complaint_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_delivery_master`
--
ALTER TABLE `uni_delivery_master`
  MODIFY `delivery_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_delivery_trans`
--
ALTER TABLE `uni_delivery_trans`
  MODIFY `delivery_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_display_color`
--
ALTER TABLE `uni_display_color`
  MODIFY `display_color_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_division`
--
ALTER TABLE `uni_division`
  MODIFY `division_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_enquiry`
--
ALTER TABLE `uni_enquiry`
  MODIFY `enquiry_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_expense`
--
ALTER TABLE `uni_expense`
  MODIFY `expense_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_master`
--
ALTER TABLE `uni_govt_stamp_master`
  MODIFY `govt_stamp_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_trans`
--
ALTER TABLE `uni_govt_stamp_trans`
  MODIFY `govt_stamp_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_make`
--
ALTER TABLE `uni_make`
  MODIFY `make_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_min`
--
ALTER TABLE `uni_min`
  MODIFY `min_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_party`
--
ALTER TABLE `uni_party`
  MODIFY `party_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_platter_size`
--
ALTER TABLE `uni_platter_size`
  MODIFY `platter_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_product`
--
ALTER TABLE `uni_product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_purchase_master`
--
ALTER TABLE `uni_purchase_master`
  MODIFY `purchase_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_purchase_trans`
--
ALTER TABLE `uni_purchase_trans`
  MODIFY `purchase_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_quotation_master`
--
ALTER TABLE `uni_quotation_master`
  MODIFY `quotation_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_quotation_trans`
--
ALTER TABLE `uni_quotation_trans`
  MODIFY `quotation_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_receipt`
--
ALTER TABLE `uni_receipt`
  MODIFY `receipt_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_repairy_master`
--
ALTER TABLE `uni_repairy_master`
  MODIFY `repairy_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_repairy_trans`
--
ALTER TABLE `uni_repairy_trans`
  MODIFY `repairy_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_roll`
--
ALTER TABLE `uni_roll`
  MODIFY `roll_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_sale_master`
--
ALTER TABLE `uni_sale_master`
  MODIFY `sale_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_sale_trans`
--
ALTER TABLE `uni_sale_trans`
  MODIFY `sale_trans_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_service`
--
ALTER TABLE `uni_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_std_narration`
--
ALTER TABLE `uni_std_narration`
  MODIFY `std_narration_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_terms`
--
ALTER TABLE `uni_terms`
  MODIFY `terms_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_unit`
--
ALTER TABLE `uni_unit`
  MODIFY `unit_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_user`
--
ALTER TABLE `uni_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uni_admin`
--
ALTER TABLE `uni_admin`
  ADD CONSTRAINT `uni_admin_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `uni_company` (`company_id`);

--
-- Constraints for table `uni_delivery_master`
--
ALTER TABLE `uni_delivery_master`
  ADD CONSTRAINT `uni_delivery_master_ibfk_1` FOREIGN KEY (`delivery_party`) REFERENCES `uni_party` (`party_id`) ON UPDATE CASCADE;

--
-- Constraints for table `uni_quotation_master`
--
ALTER TABLE `uni_quotation_master`
  ADD CONSTRAINT `uni_quotation_master_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `uni_company` (`company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
