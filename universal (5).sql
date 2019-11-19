-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 05:52 AM
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

--
-- Dumping data for table `uni_accessories`
--

INSERT INTO `uni_accessories` (`accessories_id`, `company_id`, `accessories_name`, `accessories_status`, `accessories_addedby`, `accessories_date`) VALUES
(2, 1, 'demo access', 'active', '', '2019-11-07 07:30:52');

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

--
-- Dumping data for table `uni_accuracy`
--

INSERT INTO `uni_accuracy` (`accuracy_id`, `company_id`, `accuracy_name`, `accuracy_status`, `accuracy_addedby`, `accuracy_date`) VALUES
(2, 1, 'Demo Accuracy', 'active', '', '2019-11-07 05:15:09'),
(3, 2, 'Cabinet', 'active', '', '2019-11-08 08:16:45');

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

--
-- Dumping data for table `uni_cabinet_color`
--

INSERT INTO `uni_cabinet_color` (`cabinet_color_id`, `company_id`, `cabinet_color_name`, `cabinet_color_status`, `cabinet_color_addedby`, `cabinet_color_date`) VALUES
(2, 1, 'green', 'active', '', '2019-11-07 07:11:53');

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

--
-- Dumping data for table `uni_capacity`
--

INSERT INTO `uni_capacity` (`capacity_id`, `company_id`, `capacity_name`, `capacity_status`, `capacity_addedby`, `capacity_date`) VALUES
(2, 1, 'Demo Capacity', 'active', '', '2019-11-07 04:27:10'),
(3, 2, '1TB', 'active', '', '2019-11-08 08:16:28'),
(4, 1, '1TB', 'active', '', '2019-11-12 10:41:49');

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

--
-- Dumping data for table `uni_class`
--

INSERT INTO `uni_class` (`class_id`, `company_id`, `class_name`, `class_status`, `class_addedby`, `class_date`) VALUES
(2, 1, 'Demo Class 1', 'active', '', '2019-11-07 05:47:43'),
(3, 2, 'cls1', 'active', '', '2019-11-08 08:17:23');

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
  `admin_roll_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_company`
--

INSERT INTO `uni_company` (`company_id`, `company_name`, `company_address`, `company_city`, `company_state`, `company_district`, `company_pincode`, `company_mob1`, `company_mob2`, `company_email`, `company_website`, `company_pan_no`, `company_gst_no`, `company_lic1`, `company_lic2`, `company_start_date`, `company_end_date`, `company_logo`, `admin_email`, `admin_password`, `admin_roll_id`) VALUES
(1, 'Demo Company 1', 'kolhapur 1', 'Kolhapur', 'Maharashtra', 'Kolhapur', 444555, '9876543211', '', 'demo1@mail.com', 'demo.com', '111', '111', '111', '111', '01-11-2019', '30-11-2019', '', 'demo@mail.com', '123456', 1),
(2, 'Universal Digital Systems', '126, Bhupal Tower, Ford Corner, Lamipuri', 'Kolhapur', 'Maharashtra', 'Kolhapur', 416002, '9422413073', '9423044173', 'rajnish.uni@gmail.com', 'www.universaldigital.net', '', '', '', '', '01-4-2019', '31-3-2020', '', 'rajnish.uni@gmail.com', '12345', 2);

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

--
-- Dumping data for table `uni_complaint`
--

INSERT INTO `uni_complaint` (`complaint_id`, `company_id`, `complaint_no`, `complaint_date`, `party_id`, `complaint_service`, `complaint_reporting`, `complaint_person`, `complaint_contact_no`, `complaint_engeeneer`, `complaint_status`) VALUES
(2, 1, '000001', '11-11-2019', 4, '0', '0', '0', 9966332200, '2', 'Open'),
(3, 2, '000001', '13-11-2019', 3, '0', '0', '', 0, '0', 'Open');

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
  `delivery_terms` text NOT NULL,
  `delivery_total` double NOT NULL,
  `delivery_bill_status` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_delivery_master`
--

INSERT INTO `uni_delivery_master` (`delivery_id`, `company_id`, `delivery_no`, `delivery_date`, `delivery_party`, `delivery_transport`, `delivery_docket_no`, `delivery_terms`, `delivery_total`, `delivery_bill_status`) VALUES
(1, 1, '000001', '15-11-2019', 5, 'qqqqq', '111', 'dfgdfg', 36500, 'no'),
(2, 1, '000002', '12-11-2019', 4, 'qqqqq', '111', 'jhbi', 2000, 'no');

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
  `delivery_trans_qty` double NOT NULL,
  `delivery_trans_rate` double NOT NULL,
  `delivery_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_delivery_trans`
--

INSERT INTO `uni_delivery_trans` (`delivery_trans_id`, `delivery_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `delivery_trans_gst`, `delivery_trans_qty`, `delivery_trans_rate`, `delivery_trans_amount`) VALUES
(1, 1, 4, 5, '999', 2, 2, 2, 1, 1, 1, 1500, 1500),
(3, 1, 6, 4, '111', 2, 2, 2, 1, 5, 2, 10000, 20000),
(4, 2, 6, 4, '', 2, 2, 2, 1, 0, 0, 10000, 0),
(5, 1, 4, 5, '555', 2, 2, 2, 1, 6, 10, 1500, 15000);

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

--
-- Dumping data for table `uni_display_color`
--

INSERT INTO `uni_display_color` (`display_color_id`, `company_id`, `display_color_name`, `display_color_status`, `display_color_addedby`, `display_color_date`) VALUES
(3, 1, 'Green', 'active', '', '2019-11-07 06:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `uni_division`
--

CREATE TABLE `uni_division` (
  `division_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `division_name` varchar(250) NOT NULL,
  `division_head` varchar(250) NOT NULL,
  `division_status` varchar(20) NOT NULL DEFAULT 'active',
  `division_addedby` varchar(150) NOT NULL,
  `division_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_division`
--

INSERT INTO `uni_division` (`division_id`, `company_id`, `division_name`, `division_head`, `division_status`, `division_addedby`, `division_date`) VALUES
(2, 2, 'dv', 'dvh', 'active', '', '2019-11-08 08:21:43'),
(3, 1, 'Division One', 'ddd 1', 'active', '', '2019-11-14 09:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `uni_expense`
--

CREATE TABLE `uni_expense` (
  `expense_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `expense_no` bigint(20) NOT NULL,
  `expense_date` varchar(20) NOT NULL,
  `expense_amount` bigint(20) NOT NULL,
  `expense_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_expense`
--

INSERT INTO `uni_expense` (`expense_id`, `company_id`, `expense_no`, `expense_date`, `expense_amount`, `expense_narration`) VALUES
(1, 1, 1, '09-11-2019', 2000, 'xdfghdfg sdfgsdfg');

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
  `govt_stamp_vc_no` varchar(20) NOT NULL,
  `govt_stamp_vc_date` varchar(20) NOT NULL,
  `govt_stamp_grn_no` varchar(20) NOT NULL,
  `govt_stamp_grn_date` varchar(20) NOT NULL,
  `govt_stamp_objection` varchar(20) NOT NULL,
  `govt_stamp_condition` varchar(20) NOT NULL,
  `govt_stamp_late_fee` double NOT NULL,
  `govt_stamp_hctada` double NOT NULL,
  `govt_stamp_ser_charge` double NOT NULL,
  `govt_stamp_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_govt_stamp_master`
--

INSERT INTO `uni_govt_stamp_master` (`govt_stamp_id`, `company_id`, `govt_stamp_no`, `govt_stamp_date`, `govt_stamp_party`, `govt_stamp_division`, `govt_stamp_vc_no`, `govt_stamp_vc_date`, `govt_stamp_grn_no`, `govt_stamp_grn_date`, `govt_stamp_objection`, `govt_stamp_condition`, `govt_stamp_late_fee`, `govt_stamp_hctada`, `govt_stamp_ser_charge`, `govt_stamp_total`) VALUES
(1, 1, '000001', '16-11-2019', 4, 3, '6', '14-11-2019', '7', '15-11-2019', '', '', 1, 2, 3, 4),
(2, 1, '000002', '15-11-2019', 5, 3, '1', '14-11-2019', '2', '15-11-2019', 'yes', 'no', 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `uni_govt_stamp_trans`
--

CREATE TABLE `uni_govt_stamp_trans` (
  `govt_stamp_trans_id` bigint(20) NOT NULL,
  `govt_stamp_id` bigint(20) NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `model_no_id` varchar(250) NOT NULL COMMENT 'Model Number',
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

--
-- Dumping data for table `uni_govt_stamp_trans`
--

INSERT INTO `uni_govt_stamp_trans` (`govt_stamp_trans_id`, `govt_stamp_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `min_id`, `accuracy_id`, `class_id`, `lcr_no`, `lcr_date`, `govt_fees`, `ser_charge`) VALUES
(1, 1, 6, '22', '999', 2, 2, 2, 2, '333', '2019-11-15', 33, 22),
(2, 2, 2, '11', '555', 4, 2, 2, 2, '222', '2019-11-14', 22, 11),
(3, 2, 4, '22', '333', 2, 2, 2, 2, '333', '2019-11-15', 33, 44),
(4, 1, 6, '33', '222', 4, 2, 2, 2, '444', '2019-11-16', 44, 33);

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

--
-- Dumping data for table `uni_make`
--

INSERT INTO `uni_make` (`make_id`, `company_id`, `make_name`, `make_status`, `make_addedby`, `make_date`) VALUES
(2, 1, 'Demo Make', 'active', '', '2019-11-07 04:11:40'),
(4, 1, 'Demo Make 2', 'active', '', '2019-11-07 10:03:19'),
(5, 1, 'Demo Make 3', 'active', '', '2019-11-07 10:03:25'),
(6, 1, 'Demo Make 4', 'active', '', '2019-11-07 10:03:31'),
(7, 2, 'Admin 2', 'active', '', '2019-11-08 08:16:04');

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

--
-- Dumping data for table `uni_min`
--

INSERT INTO `uni_min` (`min_id`, `company_id`, `min_name`, `min_status`, `min_addedby`, `min_date`) VALUES
(2, 1, 'Demo Min', 'active', '', '2019-11-07 06:31:15');

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

--
-- Dumping data for table `uni_party`
--

INSERT INTO `uni_party` (`party_id`, `company_id`, `party_firm`, `party_address`, `party_area`, `party_taluka`, `party_district`, `party_pin`, `party_mob1`, `party_mob2`, `party_email`, `party_website`, `party_gst_no`, `party_pan_no`, `party_proriter`, `party_business`, `party_requirment`, `party_type`, `party_status`, `party_addedby`, `party_date`) VALUES
(3, 2, 'Company 2 Party', 'demo 2', 'vil 2', 'tal 2', 'dis 2', 999666, '9988774455', '9966332258', 'asdf@www.bnn', 'demo.com', '999', '88855666', 'ghjgfjh fjhf', 'yyyy', NULL, 'party', 'active', '', '2019-11-09 04:37:51'),
(4, 1, 'Company Party', 'Kolhapur', 'dfghdfgh', 'dfgh', 'qwerty', 666333, '9966332255', '', 'asdf@www.bnn', 'demo.com', '9995654', '88855666', 'ghjgfjh fjhf', 'fgjh fgjhfgjh', NULL, 'party', 'active', '', '2019-11-09 09:33:42'),
(5, 1, 'aasdffg ghjkl 2', 'dfASdASd2', 'dfghdfgh2', 'tal 22', 'dis 22', 555222, '9966332255', '8855663322', 'asdf@www.bnn', 'demo.com', '9995654', '4563456', '', 'dfghdfgh2', 'fghdfghdfh', 'enquiry', 'active', '', '2019-11-09 10:59:31'),
(6, 2, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', NULL, 'enquiry', 'active', '', '2019-11-13 11:20:20');

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

--
-- Dumping data for table `uni_platter_size`
--

INSERT INTO `uni_platter_size` (`platter_id`, `company_id`, `platter_size`, `platter_status`, `platter_addedby`, `platter_date`) VALUES
(1, 1, '1001', 'active', '', '2019-11-07 05:47:35'),
(3, 2, '777', 'active', '', '2019-11-08 08:21:17');

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

--
-- Dumping data for table `uni_product`
--

INSERT INTO `uni_product` (`product_id`, `company_id`, `make_id`, `product_model_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `stamping_days`, `sale_price`, `product_status`, `product_addedby`, `product_date`) VALUES
(4, 1, 6, 'model1', 2, 2, 2, 1, '360', '10000', 'active', '', '2019-11-12 06:43:20'),
(5, 1, 4, 'model2', 4, 2, 2, 1, '360', '1500', 'active', '', '2019-11-12 10:42:14');

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
  `purchase_del_period` double NOT NULL,
  `purchase_pay_terms` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_purchase_master`
--

INSERT INTO `uni_purchase_master` (`purchase_id`, `company_id`, `purchase_order_no`, `purchase_date`, `purchase_party`, `invoice_no`, `invoice_date`, `purchase_terms`, `purchase_basic_price`, `purchase_gst`, `purchase_stamping`, `purchase_other`, `purchase_total`, `purchase_advance`, `purchase_due`, `purchase_del_period`, `purchase_pay_terms`) VALUES
(1, 1, '000001', '14-11-2019', 5, '2', '15-11-2019', 'up demo', 28012, 650, 1, 2, 8653, 4, -1, 5, 6),
(2, 1, '000002', '12-11-2019', 4, '1', '12-11-2019', '', 200, 15, 0, 0, 215, 0, 0, 0, 0);

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
  `purchase_descr_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_purchase_trans`
--

INSERT INTO `uni_purchase_trans` (`purchase_trans_id`, `purchase_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `display_color_id`, `cabinate_color_id`, `accessories`, `purchase_trans_descr`, `purchase_trans_gst`, `purchase_trans_qty`, `purchase_trans_rate`, `purchase_trans_amount`, `purchase_descr_gst`, `purchase_descr_qty`, `purchase_descr_rate`, `purchase_descr_amount`) VALUES
(1, 1, 6, 4, '111', 2, 2, 2, 1, 3, 2, 'fghdfgh', 'hgjkhgjkghjk', 1, 2, 3, 4, 5, 6, 7, 8),
(3, 2, 6, 4, '111', 2, 2, 2, 1, 3, 2, '', '', 10, 1, 100, 100, 5, 1, 100, 100),
(4, 1, 4, 5, '444', 4, 2, 2, 1, 3, 2, '333', 'demo add', 5, 2, 1500, 3000, 10, 1, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `uni_quotation_master`
--

CREATE TABLE `uni_quotation_master` (
  `quotation_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `quotation_no` bigint(20) NOT NULL,
  `quotation_date` varchar(20) NOT NULL,
  `quotation_party` bigint(20) NOT NULL,
  `quotation_person` varchar(250) NOT NULL,
  `quotation_contact` bigint(20) NOT NULL,
  `quotation_terms` text NOT NULL,
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
  `machine _serial_no` varchar(250) NOT NULL,
  `capacity_id` bigint(20) NOT NULL,
  `accuracy_id` bigint(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `platter_id` int(11) NOT NULL,
  `quotation_trans_gst` double NOT NULL,
  `quotation_trans_qty` double NOT NULL,
  `quotation_trans_rate` double NOT NULL,
  `quotation_trans_acc` text NOT NULL,
  `trans_acc_gst` double NOT NULL,
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

--
-- Dumping data for table `uni_receipt`
--

INSERT INTO `uni_receipt` (`receipt_id`, `company_id`, `receipt_no`, `receipt_date`, `receipt_party`, `receipt_outstanding`, `receipt_amount`, `receipt_narration`) VALUES
(1, 2, '000001', '13-11-2019', 3, 0, 1000, '');

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
  `repairy_basic_charge` double NOT NULL,
  `repairy_min_charge` double NOT NULL,
  `repairy_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_repairy_master`
--

INSERT INTO `uni_repairy_master` (`repairy_id`, `company_id`, `repairy_no`, `repairy_date`, `repairy_party`, `repairy_person`, `repairy_contact`, `repairy_basic_charge`, `repairy_min_charge`, `repairy_total`) VALUES
(2, 1, '000002', '15-11-2019', 4, 'qqq', 9876543210, 1, 2, 3),
(3, 1, '000003', '15-11-2019', 4, 'qqq', 9876543210, 1, 2, 3);

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
  `repairy_trans_under` varchar(250) NOT NULL,
  `repairy_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_repairy_trans`
--

INSERT INTO `uni_repairy_trans` (`repairy_trans_id`, `repairy_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `repairy_trans_under`, `repairy_trans_amount`) VALUES
(1, 2, 6, '11', '111', 4, 2, 2, '111', 222),
(2, 3, 5, '11', '111', 4, 2, 2, '111', 222);

-- --------------------------------------------------------

--
-- Table structure for table `uni_roll`
--

CREATE TABLE `uni_roll` (
  `roll_id` bigint(20) NOT NULL,
  `roll_name` varchar(150) NOT NULL,
  `roll_status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_roll`
--

INSERT INTO `uni_roll` (`roll_id`, `roll_name`, `roll_status`) VALUES
(2, 'Engineer', 'active');

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

--
-- Dumping data for table `uni_sale_master`
--

INSERT INTO `uni_sale_master` (`sale_id`, `company_id`, `sale_bill_no`, `sale_date`, `sale_party`, `sale_challan_no`, `sale_employee`, `sale_terms`, `total_gst`, `total_base_amount`, `sale_total`, `date_time`) VALUES
(1, 1, '000001', '14-11-2019', 4, 1, '3', 'dfgsdfg', 100, 1000, 0, '2019-11-14 06:50:19'),
(2, 1, '000002', '14-11-2019', 4, 1, '2', 'wqerwe', 100, 1000, 0, '2019-11-14 06:50:19'),
(3, 1, '000003', '15-11-2019', 5, 1, '3', 'demo up', 20, 100, 0, '2019-11-14 08:04:28');

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
  `sale_trans_qty` double NOT NULL,
  `sale_trans_rate` double NOT NULL,
  `sale_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_sale_trans`
--

INSERT INTO `uni_sale_trans` (`sale_trans_id`, `sale_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `sale_trans_gst`, `sale_trans_qty`, `sale_trans_rate`, `sale_trans_amount`) VALUES
(1, 2, 0, 4, '111', 2, 2, 2, 1, 1, 2, 10000, 0),
(2, 3, 4, 5, '888', 4, 2, 2, 1, 100, 200, 1500, 0),
(4, 3, 4, 5, '555', 4, 2, 2, 1, 55, 66, 1500, 100);

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
  `make_no` int(11) NOT NULL,
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

--
-- Dumping data for table `uni_service`
--

INSERT INTO `uni_service` (`service_id`, `service_no`, `complaint_id`, `company_id`, `make_id`, `make_no`, `service_sr_no`, `service_range`, `service_stamping`, `service_observation`, `service_recommend`, `service_component`, `service_call_completion`, `service_charges_fee`, `service_date`, `service_time_in`, `service_time_out`) VALUES
(2, '000001', 2, 1, 0, 0, 0, '', '', '', '', '', 'Open', 0, '', '', '');

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

--
-- Dumping data for table `uni_std_narration`
--

INSERT INTO `uni_std_narration` (`std_narration_id`, `company_id`, `std_narration_name`, `std_narration_status`, `std_narration_addedby`, `std_narration_date`) VALUES
(2, 1, 'Demo std', 'active', '', '2019-11-07 07:47:23');

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

--
-- Dumping data for table `uni_terms`
--

INSERT INTO `uni_terms` (`terms_id`, `company_id`, `terms_name`, `terms_status`, `terms_addedby`, `terms_date`) VALUES
(2, 1, 'Demo Terms', 'active', '', '2019-11-07 08:07:54');

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

--
-- Dumping data for table `uni_unit`
--

INSERT INTO `uni_unit` (`unit_id`, `company_id`, `unit_name`, `unit_status`, `unit_addedby`, `unit_date`) VALUES
(2, 1, 'Demo Unit', 'active', '', '2019-11-07 07:22:57');

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
-- Dumping data for table `uni_user`
--

INSERT INTO `uni_user` (`user_id`, `company_id`, `roll_id`, `user_name`, `user_city`, `user_mobile`, `user_password`, `user_status`, `user_addedby`, `user_date`) VALUES
(2, 1, 2, 'Demo User', 'Demo City', '9996663332', '123456', 'active', '', '2019-11-07 10:54:36'),
(3, 1, 2, 'Demo User 2', 'Demo City 2', '8855663322', '123456', 'active', '', '2019-11-07 10:55:14'),
(4, 2, 2, 'Admin User', 'Kop', '9988776655', '123456', 'active', '', '2019-11-08 08:15:08');

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
  MODIFY `accessories_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_accuracy`
--
ALTER TABLE `uni_accuracy`
  MODIFY `accuracy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_admin`
--
ALTER TABLE `uni_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_cabinet_color`
--
ALTER TABLE `uni_cabinet_color`
  MODIFY `cabinet_color_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_capacity`
--
ALTER TABLE `uni_capacity`
  MODIFY `capacity_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_class`
--
ALTER TABLE `uni_class`
  MODIFY `class_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_company`
--
ALTER TABLE `uni_company`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_complaint`
--
ALTER TABLE `uni_complaint`
  MODIFY `complaint_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_delivery_master`
--
ALTER TABLE `uni_delivery_master`
  MODIFY `delivery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_delivery_trans`
--
ALTER TABLE `uni_delivery_trans`
  MODIFY `delivery_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_display_color`
--
ALTER TABLE `uni_display_color`
  MODIFY `display_color_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_division`
--
ALTER TABLE `uni_division`
  MODIFY `division_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_expense`
--
ALTER TABLE `uni_expense`
  MODIFY `expense_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_master`
--
ALTER TABLE `uni_govt_stamp_master`
  MODIFY `govt_stamp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_trans`
--
ALTER TABLE `uni_govt_stamp_trans`
  MODIFY `govt_stamp_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_make`
--
ALTER TABLE `uni_make`
  MODIFY `make_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uni_min`
--
ALTER TABLE `uni_min`
  MODIFY `min_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_party`
--
ALTER TABLE `uni_party`
  MODIFY `party_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uni_platter_size`
--
ALTER TABLE `uni_platter_size`
  MODIFY `platter_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_product`
--
ALTER TABLE `uni_product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_purchase_master`
--
ALTER TABLE `uni_purchase_master`
  MODIFY `purchase_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_purchase_trans`
--
ALTER TABLE `uni_purchase_trans`
  MODIFY `purchase_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `receipt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_repairy_master`
--
ALTER TABLE `uni_repairy_master`
  MODIFY `repairy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_repairy_trans`
--
ALTER TABLE `uni_repairy_trans`
  MODIFY `repairy_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_roll`
--
ALTER TABLE `uni_roll`
  MODIFY `roll_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_sale_master`
--
ALTER TABLE `uni_sale_master`
  MODIFY `sale_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_sale_trans`
--
ALTER TABLE `uni_sale_trans`
  MODIFY `sale_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_service`
--
ALTER TABLE `uni_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_std_narration`
--
ALTER TABLE `uni_std_narration`
  MODIFY `std_narration_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_terms`
--
ALTER TABLE `uni_terms`
  MODIFY `terms_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_unit`
--
ALTER TABLE `uni_unit`
  MODIFY `unit_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_user`
--
ALTER TABLE `uni_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
