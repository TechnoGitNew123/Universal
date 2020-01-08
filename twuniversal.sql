-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2020 at 10:29 PM
-- Server version: 5.6.46-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twuniversal`
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
  `accessories_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `accuracy_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_accuracy`
--

INSERT INTO `uni_accuracy` (`accuracy_id`, `company_id`, `accuracy_name`, `accuracy_status`, `accuracy_addedby`, `accuracy_date`) VALUES
(1, 1, '5000g', 'active', '', '2019-12-09 14:51:58'),
(2, 1, '2000g', 'active', '', '2019-12-09 14:52:07'),
(3, 1, '5kg', 'active', '', '2019-12-09 14:52:27'),
(4, 1, '2kg', 'active', '', '2019-12-09 14:52:34'),
(5, 1, '1000g', 'active', '', '2019-12-09 14:52:58'),
(6, 1, '1kg', 'active', '', '2019-12-09 14:53:09'),
(7, 1, '500g', 'active', '', '2019-12-09 14:53:17'),
(8, 1, '200g', 'active', '', '2019-12-09 14:53:24'),
(9, 1, '100g', 'active', '', '2019-12-09 14:53:35'),
(10, 1, '50g', 'active', '', '2019-12-09 14:53:42'),
(11, 1, '20g', 'active', '', '2019-12-09 14:53:49'),
(12, 1, '10g', 'active', '', '2019-12-09 14:53:57'),
(13, 1, '100/200g', 'active', '', '2019-12-09 14:54:25'),
(14, 1, '50/100g', 'active', '', '2019-12-09 14:54:41'),
(15, 1, '20/50g', 'active', '', '2019-12-09 14:54:50'),
(16, 1, '10/20g', 'active', '', '2019-12-09 14:55:00'),
(17, 1, '5/10g', 'active', '', '2019-12-09 14:55:15'),
(18, 1, '5g', 'active', '', '2019-12-09 14:55:42'),
(19, 1, '2g', 'active', '', '2019-12-09 14:55:50'),
(20, 1, '1g', 'active', '', '2019-12-09 14:55:58'),
(21, 1, '2/5/10g', 'active', '', '2019-12-09 14:56:27'),
(22, 1, '1/2/5g', 'active', '', '2019-12-09 14:57:01'),
(23, 1, '2/5g', 'active', '', '2019-12-09 14:57:17'),
(24, 1, '1/2g', 'active', '', '2019-12-09 14:57:28'),
(25, 1, '0.5/1/2g', 'active', '', '2019-12-09 14:57:47'),
(26, 1, '0.5/1g', 'active', '', '2019-12-09 14:58:01'),
(27, 1, '0.5g', 'active', '', '2019-12-09 14:59:04'),
(28, 1, '0.2g', 'active', '', '2019-12-09 14:59:13'),
(29, 1, '0.1g', 'active', '', '2019-12-09 14:59:20'),
(30, 1, '0.50g', 'active', '', '2019-12-09 14:59:27'),
(31, 1, '0.001g', 'active', '', '2019-12-09 14:59:43'),
(32, 1, '0.01g', 'active', '', '2019-12-09 14:59:52'),
(33, 1, '0.02g', 'active', '', '2019-12-09 15:00:01'),
(34, 1, '0.0001g', 'active', '', '2019-12-09 15:00:28'),
(35, 1, '0.01mg', 'active', '', '2019-12-09 15:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `uni_ac_info`
--

CREATE TABLE `uni_ac_info` (
  `ac_info_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `ac_info_name` varchar(250) NOT NULL,
  `ac_info_status` varchar(20) NOT NULL DEFAULT 'active',
  `ac_info_addedby` varchar(150) NOT NULL,
  `ac_info_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_ac_info`
--

INSERT INTO `uni_ac_info` (`ac_info_id`, `company_id`, `ac_info_name`, `ac_info_status`, `ac_info_addedby`, `ac_info_date`) VALUES
(1, 1, 'Petrol allowens', 'active', '', '2019-12-16 10:10:39'),
(2, 1, 'Dinner allowens', 'active', '', '2019-12-16 10:11:00'),
(3, 1, 'Traveling allownse', 'active', '', '2019-12-16 10:12:17'),
(4, 1, 'Salary account', 'active', '', '2019-12-16 10:12:37'),
(5, 1, 'Salary advance', 'active', '', '2019-12-16 10:12:54'),
(6, 1, 'Sale commission', 'active', '', '2019-12-16 10:13:11'),
(7, 1, 'Statement account', 'active', '', '2019-12-16 10:14:48'),
(8, 1, 'Courier & postage transport charges', 'active', '', '2019-12-16 10:15:25'),
(9, 1, 'Spair part purchase account', 'active', '', '2019-12-16 10:16:47'),
(10, 1, 'MAINTAINANCE  CHARGES', 'active', '', '2020-01-01 12:45:47'),
(11, 1, 'VEHICAL REPAIR CHARGES', 'active', '', '2020-01-01 12:46:07'),
(12, 1, 'Tea & Breakfast Charges', 'active', '', '2020-01-01 12:46:39'),
(13, 1, 'godawoon Rent', 'active', '', '2020-01-01 12:47:01'),
(14, 1, 'Repairing Tools purchase', 'active', '', '2020-01-01 12:54:31'),
(15, 1, 'SALES RETURNS', 'active', '', '2020-01-02 13:38:35'),
(16, 1, 'SALES ADVANCE ACCOUNT', 'active', '', '2020-01-02 13:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE `uni_admin` (
  `id` int(11) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT '1'
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
  `cabinet_color_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_cabinet_color`
--

INSERT INTO `uni_cabinet_color` (`cabinet_color_id`, `company_id`, `cabinet_color_name`, `cabinet_color_status`, `cabinet_color_addedby`, `cabinet_color_date`) VALUES
(1, 1, 'STD', 'active', '', '2019-12-09 15:30:00');

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
  `capacity_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_capacity`
--

INSERT INTO `uni_capacity` (`capacity_id`, `company_id`, `capacity_name`, `capacity_status`, `capacity_addedby`, `capacity_date`) VALUES
(1, 1, '30 TON', 'active', '', '2019-12-08 08:42:20'),
(2, 1, '20 TON', 'active', '', '2019-12-08 08:42:41'),
(3, 1, '15 TON', 'active', '', '2019-12-08 08:42:53'),
(4, 1, '10 TON', 'active', '', '2019-12-08 08:43:03'),
(5, 1, '5 TON', 'active', '', '2019-12-08 08:43:14'),
(6, 1, '3 TON', 'active', '', '2019-12-08 08:43:31'),
(7, 1, '2 TON', 'active', '', '2019-12-08 08:43:46'),
(8, 1, '1 /2 TON', 'active', '', '2019-12-08 08:44:19'),
(10, 1, '1 TON', 'active', '', '2019-12-08 08:44:54'),
(11, 1, '600Kg', 'active', '', '2019-12-08 08:45:35'),
(12, 1, '300/600Kg', 'active', '', '2019-12-08 08:45:59'),
(13, 1, '500Kg', 'active', '', '2019-12-08 08:46:41'),
(14, 1, '200/500Kg', 'active', '', '2019-12-08 08:47:13'),
(15, 1, '300kg', 'active', '', '2019-12-08 09:00:31'),
(16, 1, '150/300kg', 'active', '', '2019-12-08 09:03:05'),
(17, 1, '250kg', 'active', '', '2019-12-08 09:03:33'),
(18, 1, '200kg', 'active', '', '2019-12-08 09:03:55'),
(19, 1, '100/200kg', 'active', '', '2019-12-08 09:04:15'),
(20, 1, '150kg', 'active', '', '2019-12-08 09:04:39'),
(21, 1, '60/150kg', 'active', '', '2019-12-08 09:05:00'),
(22, 1, '120kg', 'active', '', '2019-12-08 09:05:23'),
(23, 1, '100kg', 'active', '', '2019-12-08 09:05:38'),
(24, 1, '20/40/100kg', 'active', '', '2019-12-08 09:06:16'),
(25, 1, '50/100kg', 'active', '', '2019-12-08 09:06:34'),
(26, 1, '75kg', 'active', '', '2019-12-08 09:06:52'),
(27, 1, '60kg', 'active', '', '2019-12-08 09:07:11'),
(28, 1, '30/60kg', 'active', '', '2019-12-08 09:07:34'),
(29, 1, '50kg', 'active', '', '2019-12-08 09:07:52'),
(30, 1, '20/50kg', 'active', '', '2019-12-08 09:08:34'),
(31, 1, '35kg', 'active', '', '2019-12-08 09:14:26'),
(34, 1, '30kg', 'active', '', '2019-12-09 14:36:33'),
(35, 1, '15/30kg', 'active', '', '2019-12-09 14:36:48'),
(36, 1, '10/20/30kg', 'active', '', '2019-12-09 14:37:02'),
(37, 1, '8/20/30kg', 'active', '', '2019-12-09 14:37:11'),
(38, 1, '10/30kg', 'active', '', '2019-12-09 14:37:27'),
(39, 1, '25kg', 'active', '', '2019-12-09 14:37:55'),
(40, 1, '20kg', 'active', '', '2019-12-09 14:38:04'),
(41, 1, '10/20kg', 'active', '', '2019-12-09 14:38:14'),
(42, 1, '8/20kg', 'active', '', '2019-12-09 14:38:22'),
(43, 1, '3/8/20kg', 'active', '', '2019-12-09 14:38:46'),
(44, 1, '15kg', 'active', '', '2019-12-09 14:39:02'),
(45, 1, '7.5/15kg', 'active', '', '2019-12-09 14:43:50'),
(46, 1, '10kg', 'active', '', '2019-12-09 14:44:02'),
(47, 1, '12kg', 'active', '', '2019-12-09 14:44:24'),
(48, 1, '6kg', 'active', '', '2019-12-09 14:45:01'),
(49, 1, '5kg', 'active', '', '2019-12-09 14:45:20'),
(50, 1, '3200g', 'active', '', '2019-12-09 14:47:09'),
(51, 1, '3kg', 'active', '', '2019-12-09 14:46:16'),
(52, 1, '2kg', 'active', '', '2019-12-09 14:46:44'),
(53, 1, '1500g', 'active', '', '2019-12-09 14:47:27'),
(54, 1, '1000g', 'active', '', '2019-12-09 14:47:49'),
(55, 1, '600g', 'active', '', '2019-12-09 14:47:58'),
(56, 1, '500g', 'active', '', '2019-12-09 14:48:07'),
(57, 1, '400g', 'active', '', '2019-12-09 14:48:19'),
(58, 1, '300g', 'active', '', '2019-12-09 14:48:35'),
(59, 1, '220g', 'active', '', '2019-12-09 14:48:49'),
(60, 1, '200g', 'active', '', '2019-12-09 14:49:00'),
(61, 1, '350g', 'active', '', '2019-12-09 14:49:09'),
(62, 1, '100g', 'active', '', '2019-12-09 14:49:57'),
(63, 1, '80g', 'active', '', '2019-12-09 14:50:12'),
(64, 1, '84g', 'active', '', '2019-12-09 14:50:20'),
(65, 1, '60g', 'active', '', '2019-12-09 14:50:29'),
(66, 1, '64g', 'active', '', '2019-12-09 14:50:39'),
(67, 1, '44g', 'active', '', '2019-12-09 14:50:49'),
(68, 1, '40g', 'active', '', '2019-12-09 14:50:58'),
(69, 1, '20g', 'active', '', '2019-12-09 14:51:07'),
(70, 1, '320g', 'active', '', '2019-12-09 14:51:23');

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
  `class_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_class`
--

INSERT INTO `uni_class` (`class_id`, `company_id`, `class_name`, `class_status`, `class_addedby`, `class_date`) VALUES
(1, 1, 'III', 'active', '', '2019-12-09 15:01:19'),
(2, 1, 'II', 'active', '', '2019-12-09 15:01:35'),
(3, 1, 'I', 'active', '', '2019-12-09 15:01:42'),
(4, 1, 'DORMAND', 'active', '', '2019-12-09 15:02:04'),
(5, 1, 'IV', 'active', '', '2019-12-09 15:02:18');

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
  `admin_roll_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_company`
--

INSERT INTO `uni_company` (`company_id`, `company_name`, `company_address`, `company_city`, `company_state`, `company_district`, `company_pincode`, `company_statecode`, `company_mob1`, `company_mob2`, `company_email`, `company_website`, `company_pan_no`, `company_gst_no`, `company_lic1`, `company_lic2`, `company_start_date`, `company_end_date`, `company_logo`, `admin_email`, `admin_password`, `admin_roll_id`) VALUES
(1, 'Universal Digital  System', 'Shop No.15,126, Bhupal Tower, Ford Corner, Laxmipuri', 'Kolhapur', 'Maharashtra', 'Kolhapur', 416002, '27', '9423044173', '02312646189', 'rajnish.uni@gmail.com', 'www.universaldigital.net', 'AJVPK9447P', '27AJVPK9447P1ZX', 'W & MD/Pune Div/Repair/Kop 76', '', '01-4-2019', '31-3-2020', '', 'rajnish.uni@gmail.com', '123456', 1);

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
  `make_id` int(11) DEFAULT NULL,
  `model_no` int(11) DEFAULT NULL,
  `service_sr_no` int(11) DEFAULT NULL,
  `service_range` varchar(250) DEFAULT NULL,
  `service_stamping` varchar(250) DEFAULT NULL,
  `service_observation` text,
  `service_recommend` text,
  `service_component` text,
  `service_call_completion` varchar(250) DEFAULT NULL,
  `service_charges_fee` double DEFAULT NULL,
  `service_date` varchar(20) DEFAULT NULL,
  `service_time_in` varchar(20) DEFAULT NULL,
  `service_time_out` varchar(20) DEFAULT NULL,
  `complaint_status` varchar(250) NOT NULL DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_complaint`
--

INSERT INTO `uni_complaint` (`complaint_id`, `company_id`, `complaint_no`, `complaint_date`, `party_id`, `complaint_service`, `complaint_reporting`, `complaint_person`, `complaint_contact_no`, `complaint_engeeneer`, `make_id`, `model_no`, `service_sr_no`, `service_range`, `service_stamping`, `service_observation`, `service_recommend`, `service_component`, `service_call_completion`, `service_charges_fee`, `service_date`, `service_time_in`, `service_time_out`, `complaint_status`) VALUES
(1, 1, '000001', '31-12-2019', 1, '0_Weighting Scale Rep. Call_0_0_0_0_0_0', 'Call', 'BANTY SETH ', 9422413073, '1', 1, 67, 0, '', 'D QURTAER', 'DISPLAY ', '', '', 'Open', 0, '31-12-2019', '', '', 'Open'),
(2, 1, '000002', '02-1-2020', 10, '0_0_0_Indoor Call_0_0_0_0', 'Direct', 'Rajnikant ', 9422413073, '5', 8, 0, 0, '30kg', 'no', 'Dead ', '', '', 'Open', 0, '02-1-2020', '', '', 'Open'),
(3, 1, '000003', '02-1-2020', 12, '0_Weighting Scale Rep. Call_0_0_Outdoor Call_0_0_Charged Call', 'Call', 'WHATKAR', 0, '5', 1, 40, 0, '30KG', '', 'POWER SUPPLY', '', '', 'Completed', 200, '02-1-2020', '3:09 PM', '3:56 PM', 'Open'),
(4, 1, '000004', '02-1-2020', 13, '0_Weighting Scale Rep. Call_0_0_Outdoor Call_0_0_Charged Call', 'Call', 'ANANT SANGAVKAR', 9422046066, '3', 1, 2, 0, '300KG', 'YES ', 'DISPLAY', 'NEW DISPLAY INSTALL', '', 'Completed', 450, '02-1-2020', '3:17 PM', '4:19 PM', 'Open'),
(5, 1, '000005', '07-1-2020', 1, '0_0_0_0_0_0_0_0', 'Call', '', 0, '1', 1, 0, 0, '', '', '', '', '', 'Open', 0, '07-1-2020', '', '', 'Open');

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
  `purchase_no` varchar(20) DEFAULT NULL,
  `delivery_user` bigint(20) DEFAULT NULL,
  `delivery_terms` text NOT NULL,
  `delivery_total` double NOT NULL,
  `delivery_bill_status` varchar(20) NOT NULL DEFAULT 'no' COMMENT 'Converted to Sale',
  `delivery_basic` double NOT NULL,
  `delivery_gst` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_delivery_master`
--

INSERT INTO `uni_delivery_master` (`delivery_id`, `company_id`, `delivery_no`, `delivery_date`, `delivery_party`, `delivery_transport`, `delivery_docket_no`, `purchase_no`, `delivery_user`, `delivery_terms`, `delivery_total`, `delivery_bill_status`, `delivery_basic`, `delivery_gst`) VALUES
(1, 1, '000001', '28-12-2019', 4, 'BY HAND ', '', NULL, 1, '', 5499.98, 'yes', 4661, 838.98),
(3, 1, '000003', '31-12-2019', 8, 'BY HAND ', '', NULL, 2, '', 6420, 'yes', 5441, 979.38),
(4, 1, '000004', '01-1-2020', 3, 'BY HAND ', '65656', NULL, 1, '', 12390, 'no', 10500, 1890),
(5, 1, '000005', '02-1-2020', 11, 'BY HAND ', '65656', NULL, 2, '', 4199.62, 'yes', 3559, 640.62),
(6, 1, '000006', '05-1-2020', 15, 'Door Dili', '00000', NULL, 4, '', 10900, 'yes', 10900, 0),
(7, 1, '000007', '06-1-2020', 16, 'Door Dili', '', NULL, 1, '', 4850, 'yes', 4850, 0),
(8, 1, '000008', '07-1-2020', 21, 'BY HAND ', '00000', NULL, 5, '', 4849.8, 'yes', 4110, 739.8),
(9, 1, '000009', '07-1-2020', 22, 'BY HAND ', '0000', NULL, 3, '', 10502, 'no', 8900, 1602),
(10, 1, '000010', '07-1-2020', 23, 'BY HAND ', '000', NULL, 1, '', 11446, 'no', 9700, 1746);

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

--
-- Dumping data for table `uni_delivery_trans`
--

INSERT INTO `uni_delivery_trans` (`delivery_trans_id`, `delivery_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `delivery_trans_gst`, `delivery_trans_gst_amount`, `delivery_trans_qty`, `delivery_trans_rate`, `delivery_trans_amount`) VALUES
(1, 1, 1, 0, '', 37, 22, 1, 15, 18, 838.98, 1, 4661, 4661),
(3, 3, 4, 0, '', 0, 0, 0, 0, 18, 979.38, 1, 5441, 5441),
(4, 4, 1, 29, '', 13, 9, 1, 6, 18, 1890, 1, 10500, 10500),
(5, 5, 1, 6, 'R-431002', 42, 24, 1, 17, 18, 640.62, 1, 3559, 3559),
(6, 6, 1, 28, 'R-385779', 16, 15, 1, 7, 0, 0, 1, 10900, 10900),
(7, 7, 1, 6, 'R-430740', 42, 24, 1, 17, 0, 0, 1, 4850, 4850),
(8, 8, 1, 6, 'R-431012', 42, 24, 1, 17, 18, 739.8, 1, 4110, 4110),
(9, 9, 1, 96, 'R-383754', 0, 0, 0, 0, 18, 1602, 1, 8900, 8900),
(10, 10, 1, 2, '', 15, 15, 1, 7, 18, 1746, 1, 9700, 9700);

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
  `display_color_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_display_color`
--

INSERT INTO `uni_display_color` (`display_color_id`, `company_id`, `display_color_name`, `display_color_status`, `display_color_addedby`, `display_color_date`) VALUES
(1, 1, 'RED LED', 'active', '', '2019-12-09 15:27:01'),
(2, 1, 'GREEN LED', 'active', '', '2019-12-09 15:27:18'),
(3, 1, 'LCD ', 'active', '', '2019-12-09 15:28:33'),
(4, 1, 'VFD GREEN', 'active', '', '2019-12-09 15:28:53'),
(5, 1, 'VFD BLUE', 'active', '', '2019-12-09 15:29:05');

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
  `division_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_division`
--

INSERT INTO `uni_division` (`division_id`, `company_id`, `division_name`, `division_head`, `division_status`, `division_addedby`, `division_date`) VALUES
(1, 1, 'Rajarampuri', 'KOP I', 'active', '', '2019-12-10 10:37:37'),
(2, 1, 'Gujari', 'KOP II', 'active', '', '2019-12-10 10:38:04'),
(3, 1, 'Radhanagar', 'KOP III', 'active', '', '2019-12-10 10:48:22'),
(4, 1, 'Chandagad', 'GADAHINGALAJ', 'active', '', '2019-12-10 10:50:35'),
(5, 1, 'Gargoti', 'KAGAL', 'active', '', '2019-12-10 10:49:08'),
(6, 1, 'Jaysingpur', 'SHIROL', 'active', '', '2019-12-10 10:50:52'),
(7, 1, 'Panhala', 'KODOLI', 'active', '', '2019-12-10 10:51:04'),
(8, 1, '', 'INCH I', 'active', '', '2019-12-09 15:25:37'),
(9, 1, 'Siroli MIDC', 'INCH II', 'active', '', '2019-12-10 10:51:27'),
(10, 1, 'Gokul shiragaon', 'KOP I', 'active', '', '2019-12-10 10:37:23'),
(11, 1, 'Shahupuri', 'KOP I', 'active', '', '2019-12-10 10:44:24'),
(12, 1, 'Rashivde', 'KOP III', 'active', '', '2019-12-10 10:50:21');

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
  `ac_info_id` bigint(20) DEFAULT NULL,
  `payee_name` varchar(250) DEFAULT NULL,
  `expense_date` varchar(20) NOT NULL,
  `expense_amount` bigint(20) NOT NULL,
  `expense_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_expense`
--

INSERT INTO `uni_expense` (`expense_id`, `company_id`, `expense_no`, `ac_info_id`, `payee_name`, `expense_date`, `expense_amount`, `expense_narration`) VALUES
(1, 1, '000001', NULL, NULL, '11-12-2019', 1000, 'rk EXPENSES '),
(2, 1, '000002', 13, 'Abdul kachhi', '01-1-2020', 3000, 'Advance Rent for month of January '),
(3, 1, '000003', 1, 'sambhaji Gurav ', '01-1-2020', 100, 'Petrol for sambhaji Byke '),
(4, 1, '000004', 11, 'sambhaji Gurav ', '01-1-2020', 50, 'Old byke dlx puncture '),
(5, 1, '000005', 14, 'Chandu Anna ', '01-1-2020', 80, 'Nose Player Purchase for office '),
(6, 1, '000006', 11, 'sambhaji Gurav ', '01-1-2020', 570, 'Total  Rs. 970 repair charge sambhaji paid Rs. 400/-'),
(7, 1, '000007', 9, 'joytiraj poojari', '01-1-2020', 850, 'Payment of Packing Machine by google pay account '),
(8, 1, '000008', 9, 'Chandu Anna ', '01-1-2020', 170, ''),
(9, 1, '000009', 11, 'sambhaji Gurav ', '02-1-2020', 450, 'REPAIRING CHARGES FOR OFFICE BYKE 737 NEW DLX'),
(10, 1, '000010', 9, 'PRATIK SANKPAL ', '02-1-2020', 170, 'BATTERY PURCHASE FOR  SMART NEW '),
(11, 1, '000011', 15, 'RAJ  CHIKAN SHOP ', '02-1-2020', 4000, 'SALE RETURN  SRP SANSUI RS.7200-4000   BAL 3200');

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
  `quarter_id` int(11) DEFAULT NULL,
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

--
-- Dumping data for table `uni_govt_stamp_master`
--

INSERT INTO `uni_govt_stamp_master` (`govt_stamp_id`, `company_id`, `govt_stamp_no`, `govt_stamp_date`, `govt_stamp_party`, `govt_stamp_division`, `govt_stamp_trade`, `quarter_id`, `govt_stamp_vc_no`, `govt_stamp_vc_date`, `govt_stamp_grn_no`, `govt_stamp_grn_date`, `govt_stamp_objection`, `govt_stamp_condition`, `govt_stamp_late_fee`, `govt_stamp_hctada`, `govt_stamp_ser_charge`, `govt_stamp_gov_fees`, `govt_stamp_total`) VALUES
(1, 1, '000001', '31-12-2019', 20, 1, '8', 1, '', '', 'GRNMH0912123235', '29-12-2019', 'yes', 'yes', 200, 100, 0, 1500, 1800);

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

--
-- Dumping data for table `uni_govt_stamp_trans`
--

INSERT INTO `uni_govt_stamp_trans` (`govt_stamp_trans_id`, `govt_stamp_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `min_id`, `accuracy_id`, `class_id`, `lcr_no`, `lcr_date`, `govt_fees`, `ser_charge`) VALUES
(1, 1, 1, 2, 'R 35255', 15, 10, 10, 1, 'CLM20052407', '2018-12-18', 400, 0),
(2, 1, 1, 0, '', 0, 8, 0, 0, 'C', '2019-12-28', 400, 0),
(3, 1, 1, 0, '', 0, 9, 0, 0, 'C', '2018-12-28', 400, 0),
(4, 1, 2, 0, '', 0, 9, 0, 0, 'C', '2018-12-25', 200, 0),
(5, 1, 3, 0, '', 0, 8, 0, 0, 'C', '2018-12-12', 100, 0);

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
  `make_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_make`
--

INSERT INTO `uni_make` (`make_id`, `company_id`, `make_name`, `make_status`, `make_addedby`, `make_date`) VALUES
(1, 1, 'PHOENIX', 'active', '', '2019-12-08 08:17:35'),
(2, 1, 'CONTECH', 'active', '', '2019-12-08 08:18:00'),
(3, 1, 'SANSUI', 'active', '', '2019-12-08 08:18:31'),
(4, 1, 'GODREJ', 'active', '', '2019-12-08 08:19:00'),
(5, 1, 'RUDRA', 'active', '', '2019-12-08 08:19:40'),
(6, 1, 'SEICO', 'active', '', '2019-12-08 08:19:54'),
(7, 1, 'ESSAE TERAOKA', 'active', '', '2019-12-08 08:20:34'),
(8, 1, 'ELECTRO INDIA', 'active', '', '2019-12-08 08:20:50'),
(9, 1, 'TANISHQ', 'active', '', '2019-12-08 08:21:09'),
(10, 1, 'ONIDA', 'active', '', '2019-12-08 08:21:24'),
(11, 1, 'AND', 'active', '', '2019-12-08 08:21:54'),
(12, 1, 'METTELER TOLEDO', 'active', '', '2019-12-08 08:22:14'),
(13, 1, 'SARTORIOS', 'active', '', '2019-12-08 08:22:28'),
(14, 1, 'SEMSUNG', 'active', '', '2019-12-08 08:22:53'),
(15, 1, 'SAMSUNG', 'active', '', '2019-12-08 08:23:22'),
(16, 1, 'DILIGENT', 'active', '', '2019-12-08 08:23:39'),
(17, 1, 'GINIOUS', 'active', '', '2019-12-08 08:24:02'),
(18, 1, 'CASIO', 'active', '', '2019-12-08 08:24:20'),
(19, 1, 'PADAMINI', 'active', '', '2019-12-08 08:24:42'),
(20, 1, 'WENSOR', 'active', '', '2019-12-08 08:26:18'),
(21, 1, 'CLASIC INDIA', 'active', '', '2019-12-08 08:27:01'),
(22, 1, 'SATWIK', 'active', '', '2019-12-08 08:27:34'),
(23, 1, 'EGALE', 'active', '', '2019-12-08 08:28:42'),
(24, 1, 'SONATA', 'active', '', '2019-12-08 08:29:03'),
(25, 1, 'ELITE', 'active', '', '2019-12-08 08:29:40'),
(26, 1, 'CAS', 'active', '', '2019-12-08 08:29:53'),
(27, 1, 'SONY', 'active', '', '2019-12-08 08:34:07'),
(28, 1, 'SCALETECH', 'active', '', '2019-12-08 08:34:29'),
(29, 1, 'UNICORN', 'active', '', '2019-12-08 08:34:43'),
(30, 1, 'VICTORY', 'active', '', '2019-12-08 08:35:08'),
(31, 1, 'RELIANCE WEIGHMASTER', 'active', '', '2019-12-08 08:36:10'),
(32, 1, 'MASTER', 'active', '', '2019-12-08 08:36:21'),
(33, 1, 'ARROW', 'active', '', '2019-12-08 08:36:50'),
(34, 1, 'NOKIA', 'active', '', '2019-12-08 08:37:05'),
(35, 1, 'OMEGA', 'active', '', '2019-12-08 08:37:17'),
(36, 1, 'ARUCOM', 'active', '', '2019-12-08 08:37:40'),
(37, 1, 'BSW', 'active', '', '2019-12-08 08:38:35'),
(38, 1, 'ACZET', 'active', '', '2019-12-08 08:39:40'),
(39, 1, 'CITIZEN', 'active', '', '2019-12-08 08:39:58'),
(40, 1, 'VIDEOCON', 'active', '', '2019-12-08 08:41:30'),
(41, 1, 'BPL', 'active', '', '2019-12-08 08:41:42');

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
  `min_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_min`
--

INSERT INTO `uni_min` (`min_id`, `company_id`, `min_name`, `min_status`, `min_addedby`, `min_date`) VALUES
(2, 1, '0.2g', 'active', '', '2020-01-02 06:30:08'),
(3, 1, '0.1g', 'active', '', '2020-01-02 06:30:25'),
(4, 1, '10g', 'active', '', '2020-01-02 06:30:31'),
(5, 1, '2g', 'active', '', '2020-01-02 06:30:40'),
(6, 1, '20g', 'active', '', '2020-01-02 06:30:51'),
(7, 1, '40g', 'active', '', '2020-01-02 06:31:04'),
(8, 1, '100g', 'active', '', '2020-01-02 06:31:11'),
(9, 1, '200g', 'active', '', '2020-01-02 06:31:19'),
(10, 1, '400g', 'active', '', '2020-01-02 06:31:35'),
(11, 1, '500g', 'active', '', '2020-01-02 06:31:44'),
(12, 1, '0.5g', 'active', '', '2020-01-02 06:31:52'),
(13, 1, '1kg', 'active', '', '2020-01-02 06:32:04'),
(14, 1, '2kg', 'active', '', '2020-01-02 06:32:11'),
(15, 1, '5kg', 'active', '', '2020-01-02 06:32:20');

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
  `division_id` int(11) DEFAULT NULL,
  `party_requirment` text,
  `party_type` varchar(20) NOT NULL,
  `party_status` varchar(20) NOT NULL DEFAULT 'active',
  `party_addedby` varchar(150) NOT NULL,
  `party_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_party`
--

INSERT INTO `uni_party` (`party_id`, `company_id`, `party_firm`, `party_address`, `party_area`, `party_taluka`, `party_district`, `party_pin`, `party_state`, `party_mob1`, `party_mob2`, `party_email`, `party_website`, `party_gst_no`, `party_pan_no`, `party_proriter`, `party_business`, `division_id`, `party_requirment`, `party_type`, `party_status`, `party_addedby`, `party_date`) VALUES
(1, 1, 'Bramhanant Provigen ', 'Rajarampuri  12 th Lane ,', 'Rajaramuri ', 'Karveer ', 'kolhapur', 416001, '27', '9423983708', '', '', '', '', '', 'Banti Utture ', 'Kirana ', NULL, NULL, 'party', 'active', '', '2019-12-04 11:14:12'),
(2, 1, 'YamaieDevi Dududh Sanstha ', 'Padawalwadi  ', 'Panhala Road ', 'Karveer', 'kolhapur ', 416229, '27', '7028735225', '', '', '', '', '', 'mahesh atigre ', 'Dudha Dairy ', NULL, NULL, 'party', 'active', '', '2019-12-10 06:55:33'),
(3, 1, 'GIRISH STEEL CENTERE', 'LAXMIPURI KONDA LINE KOLHAPUR\r\n', 'KOLHAPUR', 'KOL', 'KOP ', 416002, '', '9423815802', '02312640802', '', '', '', '', 'KIRAN OSTWAL', 'STEEL TRADERS', NULL, NULL, 'party', 'active', '', '2019-12-16 06:21:10'),
(4, 1, 'Samarth Trading Co ', '115 A/p  Khupire At Shindewadi  Tal Karveer Dist kolhapur ', 'Khupire', 'karveer ', 'kolhapur ', 416005, '', '9823412231', '', '', '', '27CEPS1844E1ZW', '', 'Krishnath Shine', 'Mfg', NULL, NULL, 'party', 'active', '', '2019-12-28 07:50:52'),
(5, 1, 'VINOD KALGONDA KHOT ', 'A/P MANOCHI WADI ', 'MANOCHIWADI', 'CHIKODI ', 'BELGAVI', 416005, '29', '9901544482', '', '', '', '', '', 'VINOD ', 'PASHUKHADYA ', NULL, NULL, 'party', 'active', '', '2019-12-31 07:49:00'),
(6, 1, 'V K SEA FOODS ', 'RADHAKRUSHNA COMPLEX  , OPP SANSKRITIK BHAVAN ', 'JAMSANDE ', 'DEVGAD ', 'SINDHUDURGA', 416612, '27', '9890877070', '9890877070', 'vkseafoods@outlook.com', '', '', '', 'ASHIS PATEL ', 'TRADING', NULL, NULL, 'party', 'active', '', '2020-01-01 08:26:37'),
(7, 1, 'PRASAD DRYFRUTS ', 'SHAHUPURI 3 RD LANE', 'SHAHUPURI', 'KOLHAPUR', 'KOLHAPUR', 416001, '27', '9823161889', '9823161889', '', '', '', '', 'PRASAD GAVAS', 'TRADING', NULL, NULL, 'party', 'active', '', '2020-01-01 10:51:22'),
(8, 1, 'CHAITANYA  FIN CREDIT INDIA LTD ', 'TASAGAON  ', 'TASAGAON', 'SANGALI ', 'SANGALI', 416005, '', '9146198721', '9146198721', '', '', '', '', 'ANAND ', 'FAINANCE COM', NULL, NULL, 'party', 'active', '', '2020-01-01 11:35:14'),
(9, 1, 'AKASH DAIMAND ENTERPRISE ', 'MAHADEV GALLI', 'KOLHAPUR', 'KOLHAPUR', '', 416003, '', '9890205757', '9890205757', '', '', '', '', 'BIJAL SHAHA', 'JEWELLERS', NULL, NULL, 'party', 'active', '', '2020-01-01 12:38:16'),
(10, 1, 'Rahul Koli', 'Indrajeet Colony', 'Jadhavwadi', 'kop', 'KOLHAPUR', 416005, '27', '9881052299', '9881052299', '', '', '', '', 'rahul koli', 'hotel', NULL, NULL, 'party', 'active', '', '2020-01-02 06:01:44'),
(11, 1, 'MADHUKAR TUKARAM KUMBHAR ', 'a/P WARANA \r\n\r\n', 'WARANA NAGAR ', 'PANHALA', 'KOLHAPUR', 416010, '27', '8390303024', '8390303024', '', '', '', '', 'MADHUKAR KUMBHAR', 'TRADING', NULL, NULL, 'party', 'active', '', '2020-01-02 12:59:16'),
(12, 1, 'GAJANAN BEKARY', 'RAJARAM ROAD UMA TALKIES ', 'KOLHAPUR ', 'KOP', 'KOP', 416002, '27', '9420934405', '9420934405', '', '', '', '', 'KOLEKAR', 'BEKARY', NULL, NULL, 'party', 'active', '', '2020-01-02 14:32:24'),
(13, 1, ' SANGAVKAR  TRADERS ', 'BAZAR GATE ', 'BAZAR GATE ', 'KOP', 'KOP', 416002, '27', '9422046066', '9422046066', '', '', '', '', 'ANANT SANGAVKAR', 'MIRACHI TRADING ', NULL, NULL, 'party', 'active', '', '2020-01-02 14:48:36'),
(14, 1, 'RAJ CHIKAN CENTER', 'MUKTA SAINIK ', 'KOLHAPUR', 'MARKET YARD ', 'KOLHAPUR', 416005, '27', '9764235678', '9764235678', '', '', '', '', 'RAJU NAIKWADI', 'CHIKKAN SHOP ', NULL, NULL, 'party', 'active', '', '2020-01-02 14:55:01'),
(15, 1, 'Shubham Sangaonkar', 'A/p Timber Market ', 'Kolhapur ', 'Kop', 'Kop', 416008, '27', '9834906140', '9834906140', '', '', '', '', 'Shubham Sangaonkar', 'Aluminium Trading ', NULL, NULL, 'party', 'active', '', '2020-01-05 06:39:46'),
(16, 1, 'NATIONAL BEKARY', 'CHANDAGAD ', 'CHANDAGAD ', 'GADAHINGALAJ', 'KOLHAPUR ', 416011, '27', '9405039526', '9405039526', '', '', '', '', 'SHETTY', 'BAKERY ', NULL, NULL, 'party', 'active', '', '2020-01-06 06:13:18'),
(17, 1, 'MUTHOOT  FINCORP ', 'NEW SHAHUPURI', 'SHAHUPURI', 'KOLHAPUR', 'KOLHAPUR', 416005, '27', '9923246261', '02312668453', '', '', '27CEPS1844E1ZW', '', 'AFREEN ', 'BANKING', NULL, NULL, 'party', 'active', '', '2020-01-06 07:42:01'),
(18, 1, 'SAMRUDDHI INDUSTRIES  LTD ', 'SANGALI ', 'SANGALI', 'SANGALI', 'SANGALI', 416000, '27', '7276780908', '7276780908', 'quality@samruddhi.com', '', '', '', 'Abhijeet Ashok Kale ', 'Industries ', NULL, NULL, 'party', 'active', '', '2020-01-06 11:26:24'),
(19, 1, 'SURYKANT TAPKIRE', 'MARKET YARD , KOLHAPUR', 'KOLHAPUR', 'Karveer ', 'kolhapur', 416005, '0', '9422572000', '', '', '', '', '', 'SURYKANT TAPKIRE', 'CHILLI POWDER', NULL, NULL, 'party', 'active', '', '2020-01-06 12:16:22'),
(20, 1, 'Shridhar Gas Agency', 'Market Kanakvali', 'kankavli', 'Sindhudurga', 'SIDHUDURGA', 416005, '27', '9423884215', '9423884215', '', '', '', '', 'Sanket Naik', 'Gas Agencis ', NULL, NULL, 'party', 'active', '', '2020-01-06 12:41:39'),
(21, 1, 'Imran Iqabal Bagawan', 'Bhaji Market Laxmipuri', 'Laxmipuri', 'KOLHAPUR', 'kop', 416002, '27', '9850964728', '9850964728', '', '', '', '', 'Imran Bagwan', 'MIRACHI TRADING ', NULL, NULL, 'party', 'active', '', '2020-01-07 05:48:44'),
(22, 1, 'Chirajg Sanditext Pvt Ltd ', 'Kolhapur', 'kolhapur', 'kop', '', 416005, '27', '9922703355', '9766769393', '', '', '27AABCC1100H1ZE', '', 'SHIVAJI MOHITE', 'Industries ', NULL, NULL, 'party', 'active', '', '2020-01-07 06:10:06'),
(23, 1, 'SOFIYA TRADERS ', 'C WARD  1422 SHANIVAR PETH ', 'LAXMIPURI ', 'KOLHAPUR', 'KOLHAPUR', 416002, '27', '8956527416', '8956527416', 'sofiyatrade16975@gmail.com', '', '27CAXPM2953D1ZA', '', 'RASHID MALIK ', 'SCRAP', NULL, NULL, 'party', 'active', '', '2020-01-07 07:00:33');

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
  `platter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_platter_size`
--

INSERT INTO `uni_platter_size` (`platter_id`, `company_id`, `platter_size`, `platter_status`, `platter_addedby`, `platter_date`) VALUES
(1, 1, '1500X1500MM', 'active', '', '2019-12-09 15:02:55'),
(2, 1, '1200X1200MM', 'active', '', '2019-12-09 15:03:10'),
(3, 1, '1250X1250MM', 'active', '', '2019-12-09 15:03:20'),
(4, 1, '1000X1000MM', 'active', '', '2019-12-09 15:03:32'),
(5, 1, '900X900MM', 'active', '', '2019-12-09 15:03:43'),
(6, 1, '750X750MM', 'active', '', '2019-12-09 15:03:52'),
(7, 1, '600X600MM', 'active', '', '2019-12-09 15:04:00'),
(8, 1, '500X500MM', 'active', '', '2019-12-09 15:04:11'),
(9, 1, '400X400MM', 'active', '', '2019-12-09 15:04:24'),
(10, 1, '320X320MM', 'active', '', '2019-12-09 15:04:55'),
(11, 1, '450X450MM', 'active', '', '2019-12-09 15:05:51'),
(12, 1, '600X550MM', 'active', '', '2019-12-09 15:06:52'),
(13, 1, '550X550MM', 'active', '', '2019-12-09 15:07:08'),
(14, 1, '600X450MM', 'active', '', '2019-12-09 15:07:19'),
(15, 1, '270X220MM', 'active', '', '2019-12-09 15:08:24'),
(16, 1, '350X246MM', 'active', '', '2019-12-09 15:09:30'),
(17, 1, '215X185MM', 'active', '', '2019-12-09 15:09:44'),
(18, 1, '300X260MM', 'active', '', '2019-12-09 15:10:09'),
(19, 1, '330X315MM', 'active', '', '2019-12-09 15:12:47'),
(20, 1, '550X300MM', 'active', '', '2019-12-09 15:13:07'),
(21, 1, '225X300MM', 'active', '', '2019-12-09 15:13:48'),
(22, 1, '190X250MM', 'active', '', '2019-12-09 15:14:20'),
(23, 1, '150MM', 'active', '', '2019-12-09 15:14:54'),
(24, 1, '125MM', 'active', '', '2019-12-09 15:15:04'),
(25, 1, '115MM', 'active', '', '2019-12-09 15:15:11'),
(26, 1, '45MM', 'active', '', '2019-12-09 15:15:19'),
(27, 1, '180X200MM', 'active', '', '2019-12-09 15:15:42'),
(28, 1, '100MM', 'active', '', '2019-12-09 15:15:54'),
(29, 1, '80MM', 'active', '', '2019-12-09 15:16:10'),
(30, 1, '240X290MM', 'active', '', '2019-12-09 15:16:47'),
(31, 1, '250X340MM', 'active', '', '2019-12-09 15:17:02'),
(32, 1, '250X200MM', 'active', '', '2019-12-09 15:17:54'),
(33, 1, '290X230MM', 'active', '', '2019-12-09 15:18:18'),
(34, 1, '230X290MM', 'active', '', '2019-12-09 15:18:41'),
(35, 1, '230X250MM', 'active', '', '2019-12-09 15:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `uni_product`
--

CREATE TABLE `uni_product` (
  `product_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `product_model_no` varchar(250) NOT NULL,
  `product_status` varchar(20) NOT NULL DEFAULT 'active',
  `product_addedby` varchar(150) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_product`
--

INSERT INTO `uni_product` (`product_id`, `company_id`, `product_model_no`, `product_status`, `product_addedby`, `product_date`) VALUES
(2, 1, 'NEP 300', 'active', '', '2019-12-11 12:40:13'),
(3, 1, 'NEP 1000 A', 'active', '', '2019-12-16 06:26:28'),
(4, 1, 'NEP 2300', 'active', '', '2019-12-20 04:50:11'),
(5, 1, 'NPW 8/20/30', 'active', '', '2019-12-31 06:47:01'),
(6, 1, 'SMART8/20', 'active', '', '2019-12-31 06:47:11'),
(7, 1, 'SMART 6A', 'active', '', '2019-12-31 06:47:34'),
(8, 1, 'SMART 10', 'active', '', '2019-12-31 06:47:51'),
(9, 1, 'SMART 5Q', 'active', '', '2019-12-31 06:48:04'),
(10, 1, 'SMART 3A', 'active', '', '2019-12-31 06:48:17'),
(11, 1, 'NPW 3/8/20', 'active', '', '2019-12-31 06:48:41'),
(12, 1, 'NPW 15/30', 'active', '', '2019-12-31 06:48:51'),
(13, 1, 'NPW 30A', 'active', '', '2019-12-31 06:49:03'),
(14, 1, 'NPW 15A', 'active', '', '2019-12-31 06:49:19'),
(15, 1, 'NPW 6A', 'active', '', '2019-12-31 06:49:43'),
(16, 1, 'NPW 10', 'active', '', '2019-12-31 06:50:00'),
(17, 1, 'NPW 5Q', 'active', '', '2019-12-31 06:51:30'),
(18, 1, 'NEP 30/60', 'active', '', '2019-12-31 06:55:12'),
(19, 1, 'NEP 50A', 'active', '', '2019-12-31 06:55:28'),
(20, 1, 'NEP 30', 'active', '', '2019-12-31 06:55:40'),
(21, 1, 'NEP 15/30', 'active', '', '2019-12-31 06:55:53'),
(22, 1, 'NEP 40/100', 'active', '', '2019-12-31 06:56:08'),
(23, 1, 'NEP 20/40/100', 'active', '', '2019-12-31 06:56:20'),
(24, 1, 'NEP 120A', 'active', '', '2019-12-31 06:56:45'),
(25, 1, 'NEP 150A', 'active', '', '2019-12-31 06:57:12'),
(26, 1, 'NEP 60/150', 'active', '', '2019-12-31 06:57:32'),
(27, 1, 'NEP200', 'active', '', '2019-12-31 06:57:49'),
(28, 1, 'NEP 150/300', 'active', '', '2019-12-31 06:58:00'),
(29, 1, 'NEP 500', 'active', '', '2019-12-31 07:00:01'),
(30, 1, 'NEP 300/600', 'active', '', '2019-12-31 07:01:13'),
(31, 1, 'NEP 600A', 'active', '', '2019-12-31 07:01:21'),
(32, 1, 'NEP 2000A', 'active', '', '2019-12-31 07:01:37'),
(33, 1, 'NEP 3000', 'active', '', '2019-12-31 07:01:50'),
(34, 1, 'NPC 6A', 'active', '', '2019-12-31 07:02:04'),
(35, 1, 'NEP 15A', 'active', '', '2019-12-31 07:02:15'),
(36, 1, 'NPC 15A', 'active', '', '2019-12-31 07:02:28'),
(37, 1, 'NEP 20', 'active', '', '2019-12-31 07:02:41'),
(38, 1, 'NPC 20A', 'active', '', '2019-12-31 07:02:53'),
(39, 1, 'NPC 15/30', 'active', '', '2019-12-31 07:03:03'),
(40, 1, 'NPC 30A', 'active', '', '2019-12-31 07:03:12'),
(41, 1, 'NPC 50A', 'active', '', '2019-12-31 07:03:24'),
(42, 1, 'NPC 100A ', 'active', '', '2019-12-31 07:03:38'),
(43, 1, 'NEC 3A', 'active', '', '2019-12-31 07:03:46'),
(44, 1, 'NEC 6A', 'active', '', '2019-12-31 07:03:53'),
(45, 1, 'NEC 5Q', 'active', '', '2019-12-31 07:04:02'),
(46, 1, 'NEC   15A', 'active', '', '2019-12-31 07:04:15'),
(47, 1, 'NEC 10A', 'active', '', '2019-12-31 07:04:24'),
(48, 1, 'NEC 20', 'active', '', '2019-12-31 07:04:36'),
(49, 1, 'NEC 30', 'active', '', '2019-12-31 07:04:44'),
(50, 1, 'GOLD 300', 'active', '', '2019-12-31 07:06:08'),
(51, 1, 'GOLD 600', 'active', '', '2019-12-31 07:06:20'),
(52, 1, 'GOLD 1000', 'active', '', '2019-12-31 07:06:28'),
(53, 1, 'GOLD 300Q', 'active', '', '2019-12-31 07:06:36'),
(54, 1, 'GOLD 1000P', 'active', '', '2019-12-31 07:06:49'),
(55, 1, 'NES 3', 'active', '', '2019-12-31 07:06:57'),
(56, 1, 'NES 6', 'active', '', '2019-12-31 07:07:07'),
(57, 1, 'NES 12', 'active', '', '2019-12-31 07:07:14'),
(58, 1, 'NES 15', 'active', '', '2019-12-31 07:07:21'),
(59, 1, 'NEW 6/15', 'active', '', '2019-12-31 07:07:40'),
(60, 1, 'NEW 15/30', 'active', '', '2019-12-31 07:08:07'),
(61, 1, 'NEW 10', 'active', '', '2019-12-31 07:08:21'),
(62, 1, 'NE 10', 'active', '', '2019-12-31 07:08:30'),
(63, 1, 'NE 15A', 'active', '', '2019-12-31 07:08:42'),
(64, 1, 'NE 20 ', 'active', '', '2019-12-31 07:08:50'),
(65, 1, 'NE 3/8/20', 'active', '', '2019-12-31 07:09:10'),
(66, 1, 'NE8/20/30', 'active', '', '2019-12-31 07:10:23'),
(67, 1, 'NE 30A', 'active', '', '2019-12-31 07:10:35'),
(68, 1, 'NE 15P', 'active', '', '2019-12-31 07:10:43'),
(69, 1, 'NPW 15P', 'active', '', '2019-12-31 07:10:56'),
(70, 1, 'SSP BL', 'active', '', '2019-12-31 07:15:28'),
(71, 1, 'SSP GRAY', 'active', '', '2019-12-31 07:15:49'),
(72, 1, 'SSP LC', 'active', '', '2019-12-31 07:16:00'),
(73, 1, 'SSP DLX', 'active', '', '2019-12-31 07:16:10'),
(74, 1, 'SSP SRP', 'active', '', '2019-12-31 07:18:04'),
(75, 1, 'SSP ABS ', 'active', '', '2019-12-31 07:21:04'),
(76, 1, 'SSP BENCH', 'active', '', '2019-12-31 07:21:20'),
(77, 1, 'CTL 300', 'active', '', '2019-12-31 07:21:33'),
(78, 1, 'CTL 600', 'active', '', '2019-12-31 07:21:43'),
(79, 1, 'CA 123', 'active', '', '2019-12-31 07:22:58'),
(80, 1, 'CA 223', 'active', '', '2019-12-31 07:23:09'),
(81, 1, 'CA 323', 'active', '', '2019-12-31 07:23:18'),
(82, 1, 'CA 423', 'active', '', '2019-12-31 07:23:27'),
(83, 1, 'CA 523', 'active', '', '2019-12-31 07:23:35'),
(84, 1, 'CB 300', 'active', '', '2019-12-31 07:23:49'),
(85, 1, 'CB 600', 'active', '', '2019-12-31 07:24:00'),
(86, 1, 'CB 300/600', 'active', '', '2019-12-31 07:24:09'),
(87, 1, 'CB 1000', 'active', '', '2019-12-31 07:24:44'),
(88, 1, 'CB 1200', 'active', '', '2019-12-31 07:24:53'),
(89, 1, 'CB 1502', 'active', '', '2019-12-31 07:25:56'),
(90, 1, 'CB  3502', 'active', '', '2019-12-31 07:25:45'),
(91, 1, 'CA 44', 'active', '', '2019-12-31 07:30:47'),
(92, 1, 'CA 64', 'active', '', '2019-12-31 07:30:56'),
(93, 1, 'CA 84', 'active', '', '2019-12-31 07:31:16'),
(94, 1, 'PLNC 1', 'active', '', '2020-01-07 06:20:14'),
(95, 1, 'PLNC 2', 'active', '', '2020-01-07 06:20:29'),
(96, 1, 'PLNC 3', 'active', '', '2020-01-07 06:20:38'),
(97, 1, 'PVC 1', 'active', '', '2020-01-07 06:20:49');

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

--
-- Dumping data for table `uni_purchase_master`
--

INSERT INTO `uni_purchase_master` (`purchase_id`, `company_id`, `purchase_order_no`, `purchase_date`, `purchase_party`, `invoice_no`, `invoice_date`, `purchase_terms`, `purchase_basic_price`, `purchase_gst`, `purchase_stamping`, `purchase_other`, `purchase_total`, `purchase_advance`, `purchase_due`, `purchase_del_period`, `purchase_pay_terms`, `purchase_accss`) VALUES
(1, 1, '000001', '12-12-2019', 3, '', '12-1-2020', '', 10500, 1890, 0, 0, 12390, 5390, 7000, '5', 'CHEQUE', 'Extra Display_Battery_Charger_0_0_0_0'),
(2, 1, '000002', '', 23, '', '', '', 9700, 1746, 0, 0, 11446, 0, 0, '', '', '0_0_0_0_0_0_0');

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
  `accessories` text,
  `purchase_trans_descr` text,
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

--
-- Dumping data for table `uni_purchase_trans`
--

INSERT INTO `uni_purchase_trans` (`purchase_trans_id`, `purchase_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `display_color_id`, `cabinate_color_id`, `accessories`, `purchase_trans_descr`, `purchase_trans_gst`, `purchase_trans_qty`, `purchase_trans_rate`, `purchase_trans_amount`, `purchase_descr_gst`, `purchase_descr_qty`, `purchase_descr_rate`, `purchase_descr_amount`, `purchase_trans_gst_amount`, `trans_acc_gst_amount`) VALUES
(1, 1, 1, 29, '', 13, 9, 1, 6, 1, 1, 'CONVERGEN KIT', NULL, 18, 1, 10500, 10500, 0, 0, 0, 0, 1890, 0),
(2, 2, 1, 2, '', 15, 15, 1, 7, 1, 1, 'TELIPHONIC DISPLAY', NULL, 18, 1, 9700, 9700, 0, 0, 0, 0, 1746, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uni_quarter`
--

CREATE TABLE `uni_quarter` (
  `quarter_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `from_month` varchar(25) DEFAULT NULL,
  `to_month` varchar(25) DEFAULT NULL,
  `quarter_name` varchar(250) DEFAULT NULL,
  `quarter_status` varchar(20) NOT NULL DEFAULT 'active',
  `quarter_addedby` varchar(150) DEFAULT NULL,
  `quarter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_quarter`
--

INSERT INTO `uni_quarter` (`quarter_id`, `company_id`, `from_month`, `to_month`, `quarter_name`, `quarter_status`, `quarter_addedby`, `quarter_date`) VALUES
(1, 1, NULL, NULL, '2019 D', 'active', NULL, '2019-12-31 08:59:57'),
(2, 1, NULL, NULL, '2019 C', 'active', NULL, '2019-12-31 09:00:07'),
(3, 1, NULL, NULL, '2019 B', 'active', NULL, '2019-12-31 09:00:21'),
(4, 1, NULL, NULL, '2019 A', 'active', NULL, '2019-12-31 09:00:30'),
(5, 1, NULL, NULL, '2018 D', 'active', NULL, '2019-12-31 09:00:42'),
(6, 1, NULL, NULL, '2018 C', 'active', NULL, '2019-12-31 09:01:10'),
(7, 1, NULL, NULL, '2018 B', 'active', NULL, '2019-12-31 09:01:18'),
(8, 1, NULL, NULL, '2018 A', 'active', NULL, '2019-12-31 09:01:31'),
(9, 1, NULL, NULL, '2017 D', 'active', NULL, '2019-12-31 09:01:42'),
(10, 1, NULL, NULL, '2017 C', 'active', NULL, '2019-12-31 09:01:52'),
(11, 1, NULL, NULL, '2017 B', 'active', NULL, '2019-12-31 09:02:02'),
(12, 1, NULL, NULL, '2017 A', 'active', NULL, '2019-12-31 09:02:13'),
(13, 1, NULL, NULL, '2016 D', 'active', NULL, '2019-12-31 09:02:28'),
(14, 1, NULL, NULL, '2016 C', 'active', NULL, '2019-12-31 09:02:41'),
(15, 1, NULL, NULL, '2016 B', 'active', NULL, '2019-12-31 09:03:29'),
(16, 1, NULL, NULL, '2016 A', 'active', NULL, '2019-12-31 09:04:14'),
(17, 1, NULL, NULL, '2015 A', 'active', NULL, '2019-12-31 09:19:48'),
(18, 1, NULL, NULL, '2015 B', 'active', NULL, '2019-12-31 09:19:56'),
(19, 1, NULL, NULL, '2015 C', 'active', NULL, '2019-12-31 09:20:08'),
(20, 1, NULL, NULL, '2015 D', 'active', NULL, '2019-12-31 09:20:30'),
(21, 1, NULL, NULL, '2014 A', 'active', NULL, '2019-12-31 09:21:31'),
(22, 1, NULL, NULL, '2014 B', 'active', NULL, '2019-12-31 09:21:50'),
(23, 1, NULL, NULL, '2014 C', 'active', NULL, '2019-12-31 09:22:06'),
(24, 1, NULL, NULL, '2014 D', 'active', NULL, '2019-12-31 09:22:17');

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

--
-- Dumping data for table `uni_quotation_master`
--

INSERT INTO `uni_quotation_master` (`quotation_id`, `company_id`, `quotation_no`, `quotation_date`, `quotation_party`, `quotation_person`, `quotation_contact`, `quotation_terms`, `quotation_basic`, `quotation_gst`, `quotation_total`) VALUES
(2, 1, '000001', '20-12-2019', 3, 'demo', 9876543210, '', 10500, 1890, 12390),
(3, 1, '000002', '31-12-2019', 5, 'VINOD ', 9901544482, '', 11900, 2142, 14042),
(4, 1, '000003', '01-1-2020', 6, 'Ashish  Patel', 9890877070, '', 4150, 747, 4897),
(5, 1, '000004', '06-1-2020', 18, 'Abhijeet Ashok Kale ', 7276780908, '', 9000, 1620, 10620),
(6, 1, '000005', '06-1-2020', 18, 'Abhijeet Kale ', 7276780908, '', 20500, 3690, 24190),
(7, 1, '000006', '07-1-2020', 23, 'RASHID MALIK', 8956527416, '', 9700, 1746, 11446);

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

--
-- Dumping data for table `uni_quotation_trans`
--

INSERT INTO `uni_quotation_trans` (`quotation_trans_id`, `quotation_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `quotation_trans_gst`, `quotation_trans_gst_amount`, `quotation_trans_qty`, `quotation_trans_rate`, `quotation_trans_acc`, `trans_acc_gst`, `trans_acc_gst_amount`, `trans_acc_qty`, `trans_acc_rate`, `trans_acc_amount`, `quotation_trans_amount`) VALUES
(2, 2, 1, 29, '', 13, 9, 1, 6, 18, 1890, 1, 10500, 'CONVERGEN KIT', 0, 0, 0, 0, 0, 10500),
(3, 3, 1, 2, '', 15, 10, 1, 7, 18, 2142, 1, 11900, '', 0, 0, 0, 0, 0, 11900),
(4, 4, 1, 6, '', 42, 24, 1, 17, 18, 747, 1, 4150, 'on machine ', 0, 0, 0, 0, 0, 4150),
(5, 5, 1, 7, '', 48, 27, 2, 17, 18, 810, 1, 4500, '', 0, 0, 0, 0, 0, 4500),
(6, 5, 1, 6, '', 42, 24, 1, 17, 18, 810, 1, 4500, '', 0, 0, 0, 0, 0, 4500),
(7, 6, 1, 50, '', 58, 32, 2, 25, 18, 1755, 1, 9750, '', 0, 0, 0, 0, 0, 9750),
(8, 6, 2, 77, '', 58, 32, 2, 25, 18, 1935, 1, 10750, '', 0, 0, 0, 0, 0, 10750),
(9, 7, 1, 2, '', 15, 15, 1, 7, 18, 1746, 1, 9700, 'TELIPHONIC DISPLAY', 0, 0, 0, 0, 0, 9700);

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
  `receipt_narration` text NOT NULL,
  `receipt_discount` double DEFAULT NULL,
  `receipt_refference` varchar(250) DEFAULT NULL,
  `pay_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_receipt`
--

INSERT INTO `uni_receipt` (`receipt_id`, `company_id`, `receipt_no`, `receipt_date`, `receipt_party`, `receipt_outstanding`, `receipt_amount`, `receipt_narration`, `receipt_discount`, `receipt_refference`, `pay_type`) VALUES
(2, 1, '000001', '01-1-2020', 8, 0, 6420, 'BEING CHANGE LOCK SET IN GODREJ PRISIDO SAFE ', NULL, NULL, NULL),
(3, 1, '000002', '01-1-2020', 9, 150, 150, 'REPAIRING CHARGES ', NULL, NULL, NULL),
(4, 1, '000003', '01-1-2020', 7, 650, 650, 'BATTRY CHANGE /REPLACE CHARGES ', NULL, NULL, NULL),
(5, 1, '000004', '02-1-2020', 11, 4199.62, 4200, 'sale SMART 8/20', NULL, NULL, NULL),
(6, 1, '000005', '02-1-2020', 12, 0, 200, 'REPAIRING CHARGES NPC', NULL, NULL, NULL),
(7, 1, '000006', '02-1-2020', 13, 0, 450, 'NEW DISPLAY BOX ', NULL, NULL, NULL),
(8, 1, '000007', '05-1-2020', 15, 10900, 10900, 'Sale of NEP 150/300 Platter Size 600x600mm  Cash', NULL, NULL, NULL),
(9, 1, '000008', '06-1-2020', 16, 4850, 2000, 'ADVANCE ', NULL, NULL, NULL),
(10, 1, '000009', '06-1-2020', 20, 1000, 900, 'Repairing Charges', NULL, NULL, NULL),
(11, 1, '000010', '07-1-2020', 21, 4849.8, 0, '', 0, '', NULL),
(12, 1, '000011', '08-1-2020', 3, 0, 500, 'asfertrdff hgtfrtty', 150, '120', 'Cash');

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
  `repairy_engg` varchar(250) DEFAULT NULL,
  `repairy_accss` text,
  `repairy_basic_charge` double NOT NULL DEFAULT '0',
  `repairy_min_charge` double NOT NULL DEFAULT '0',
  `repairy_total` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_repairy_master`
--

INSERT INTO `uni_repairy_master` (`repairy_id`, `company_id`, `repairy_no`, `repairy_date`, `repairy_party`, `repairy_person`, `repairy_contact`, `repairy_user`, `repairy_engg`, `repairy_accss`, `repairy_basic_charge`, `repairy_min_charge`, `repairy_total`) VALUES
(1, 1, '000001', '01-1-2020', 7, 'PRASAD', 9823161889, 3, 'KIRAN KHONDRE', 'PAN_0_0_Battery_0', 650, 0, 650),
(2, 1, '000002', '01-1-2020', 9, 'BIJAL SHAHA', 9890205757, 1, 'CHANDU ANNA ', '0_0_Adapter_0_0', 150, 0, 150),
(3, 1, '000003', '02-1-2020', 10, 'Rahul Koli', 9881052299, 5, 'KIRAN KHONDRE', 'PAN_0_0_0_0', 350, 0, 350),
(4, 1, '000004', '06-1-2020', 20, 'Sanket Naik', 9423884215, 3, 'Rajnikant', 'PAN_0_Adapter_Battery_Stamping', 750, 250, 1000);

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
  `material_used` text,
  `repairy_trans_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_repairy_trans`
--

INSERT INTO `uni_repairy_trans` (`repairy_trans_id`, `repairy_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `repairy_details`, `material_used`, `repairy_trans_amount`) VALUES
(1, 1, 2, '89', '', 45, 24, 2, 'BATTARY', 'BATTARY', 650),
(2, 2, 2, '79', '', 59, 31, 2, 'POWER SUPPLY', '', 150),
(3, 3, 8, '', '', 38, 23, 1, 'Dead', 'no', 350),
(4, 4, 1, '2', 'R-431002', 15, 11, 1, 'Dead ', 'BATTARY', 650),
(5, 4, 1, '', '', 0, 0, 0, '', 'power Cord ', 75),
(6, 4, 1, '', '', 0, 0, 0, '', 'switch', 25);

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
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_sale_master`
--

INSERT INTO `uni_sale_master` (`sale_id`, `company_id`, `sale_bill_no`, `sale_date`, `sale_party`, `sale_challan_no`, `sale_employee`, `sale_terms`, `total_gst`, `total_base_amount`, `sale_total`, `date_time`) VALUES
(1, 1, '000001', '28-12-2019', 4, 1, '4', '', 838.98, 4661, 5499.98, '2020-01-01 11:45:06'),
(2, 1, '000002', '31-1-2020', 8, 3, '2', '', 979.38, 5441, 6420, '2020-01-01 12:15:59'),
(3, 1, '000003', '02-1-2020', 11, 5, '2', '', 640.62, 3559, 4199.62, '2020-01-02 13:03:59'),
(4, 1, '000004', '05-1-2020', 15, 6, '4', '', 0, 10900, 10900, '2020-01-05 06:43:50'),
(5, 1, '000005', '06-1-2020', 16, 7, '1', '', 0, 4850, 4850, '2020-01-06 07:21:05'),
(6, 1, '000006', '07-1-2020', 21, 8, '5', '', 739.8, 4110, 4849.8, '2020-01-07 05:58:08');

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

--
-- Dumping data for table `uni_sale_trans`
--

INSERT INTO `uni_sale_trans` (`sale_trans_id`, `sale_id`, `make_id`, `model_no_id`, `machine_serial_no`, `capacity_id`, `accuracy_id`, `class_id`, `platter_id`, `sale_trans_gst`, `sale_trans_gst_amount`, `sale_trans_qty`, `sale_trans_rate`, `sale_trans_amount`) VALUES
(1, 1, 1, 5, '', 37, 22, 1, 15, 18, 838.98, 1, 4661, 4661),
(2, 2, 4, 0, '', 0, 0, 0, 0, 18, 979.38, 1, 5441, 5441),
(3, 3, 1, 6, 'R-431002', 42, 24, 1, 17, 18, 640.62, 1, 3559, 3559),
(4, 4, 1, 28, 'R-385779', 16, 15, 1, 7, 0, 0, 1, 10900, 10900),
(5, 5, 1, 6, 'R-430740', 42, 24, 1, 17, 0, 0, 1, 4850, 4850),
(6, 6, 1, 6, 'R-431012', 42, 24, 1, 17, 18, 739.8, 1, 4110, 4110);

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
  `std_narration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `terms_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_trade`
--

CREATE TABLE `uni_trade` (
  `trade_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `trade_name` varchar(250) NOT NULL,
  `trade_status` varchar(20) NOT NULL DEFAULT 'active',
  `trade_addedby` varchar(150) NOT NULL,
  `trade_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_trade`
--

INSERT INTO `uni_trade` (`trade_id`, `company_id`, `trade_name`, `trade_status`, `trade_addedby`, `trade_date`) VALUES
(1, 1, 'Grocery store', 'active', '', '2019-12-16 09:56:26'),
(2, 1, 'Mitrana shop', 'active', '', '2019-12-16 09:56:43'),
(3, 1, 'Jewellery shop', 'active', '', '2019-12-16 09:57:04'),
(4, 1, 'Traders', 'active', '', '2019-12-16 09:57:16'),
(5, 1, 'Steel traders', 'active', '', '2019-12-16 09:57:48'),
(6, 1, 'Industries', 'active', '', '2019-12-16 09:58:13'),
(7, 1, 'Bhandi shop', 'active', '', '2019-12-16 10:03:46'),
(8, 1, 'Milk collecation dairy', 'active', '', '2019-12-16 10:05:12'),
(9, 1, 'Scrap Traders', 'active', '', '2019-12-16 10:05:54'),
(10, 1, 'Gyim', 'active', '', '2019-12-16 10:06:26'),
(11, 1, 'Docter', 'active', '', '2019-12-16 10:08:53'),
(12, 1, 'Post office', 'active', '', '2019-12-16 10:09:12');

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
  `unit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_user`
--

CREATE TABLE `uni_user` (
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT '2',
  `user_name` varchar(250) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active',
  `user_addedby` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_user`
--

INSERT INTO `uni_user` (`user_id`, `company_id`, `roll_id`, `user_name`, `user_city`, `user_mobile`, `user_password`, `user_status`, `user_addedby`, `user_date`) VALUES
(1, 1, 2, 'Chandrakant Negarale ', 'Kolhapur ', '9421222723', '01051974', 'active', '', '2019-12-17 10:37:06'),
(2, 1, 2, 'Pratik S Sankpal', 'Kolhapur ', '9423107323', 'pratik1996', 'active', '', '2019-12-17 10:37:14'),
(3, 1, 2, 'Sambhaji Gurav', 'Kolhapur ', '9545841513', 'pavanvarun', 'active', '', '2019-12-17 10:37:22'),
(4, 1, 2, 'Jaara Patel', 'Kolhapur', '9423044173', 'Universal', 'active', '', '2019-12-07 14:08:01'),
(5, 1, 2, 'Kiran Khondre', 'kolhapur', '9975342519', '9975342519', 'active', '', '2020-01-02 05:56:08'),
(6, 1, 2, 'Rajnish.uni@gmail.com', 'KOLHAPUR', '9422413073', '2634', 'active', '', '2020-01-07 14:43:18');

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
-- Indexes for table `uni_ac_info`
--
ALTER TABLE `uni_ac_info`
  ADD PRIMARY KEY (`ac_info_id`);

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
-- Indexes for table `uni_quarter`
--
ALTER TABLE `uni_quarter`
  ADD PRIMARY KEY (`quarter_id`);

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
-- Indexes for table `uni_trade`
--
ALTER TABLE `uni_trade`
  ADD PRIMARY KEY (`trade_id`);

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
  MODIFY `accuracy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `uni_ac_info`
--
ALTER TABLE `uni_ac_info`
  MODIFY `ac_info_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uni_admin`
--
ALTER TABLE `uni_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_cabinet_color`
--
ALTER TABLE `uni_cabinet_color`
  MODIFY `cabinet_color_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_capacity`
--
ALTER TABLE `uni_capacity`
  MODIFY `capacity_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `uni_class`
--
ALTER TABLE `uni_class`
  MODIFY `class_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_company`
--
ALTER TABLE `uni_company`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_complaint`
--
ALTER TABLE `uni_complaint`
  MODIFY `complaint_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_delivery_master`
--
ALTER TABLE `uni_delivery_master`
  MODIFY `delivery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uni_delivery_trans`
--
ALTER TABLE `uni_delivery_trans`
  MODIFY `delivery_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uni_display_color`
--
ALTER TABLE `uni_display_color`
  MODIFY `display_color_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_division`
--
ALTER TABLE `uni_division`
  MODIFY `division_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uni_enquiry`
--
ALTER TABLE `uni_enquiry`
  MODIFY `enquiry_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_expense`
--
ALTER TABLE `uni_expense`
  MODIFY `expense_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_master`
--
ALTER TABLE `uni_govt_stamp_master`
  MODIFY `govt_stamp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_govt_stamp_trans`
--
ALTER TABLE `uni_govt_stamp_trans`
  MODIFY `govt_stamp_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_make`
--
ALTER TABLE `uni_make`
  MODIFY `make_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `uni_min`
--
ALTER TABLE `uni_min`
  MODIFY `min_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uni_party`
--
ALTER TABLE `uni_party`
  MODIFY `party_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `uni_platter_size`
--
ALTER TABLE `uni_platter_size`
  MODIFY `platter_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `uni_product`
--
ALTER TABLE `uni_product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `uni_purchase_master`
--
ALTER TABLE `uni_purchase_master`
  MODIFY `purchase_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_purchase_trans`
--
ALTER TABLE `uni_purchase_trans`
  MODIFY `purchase_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_quarter`
--
ALTER TABLE `uni_quarter`
  MODIFY `quarter_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `uni_quotation_master`
--
ALTER TABLE `uni_quotation_master`
  MODIFY `quotation_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uni_quotation_trans`
--
ALTER TABLE `uni_quotation_trans`
  MODIFY `quotation_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uni_receipt`
--
ALTER TABLE `uni_receipt`
  MODIFY `receipt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uni_repairy_master`
--
ALTER TABLE `uni_repairy_master`
  MODIFY `repairy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_repairy_trans`
--
ALTER TABLE `uni_repairy_trans`
  MODIFY `repairy_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uni_roll`
--
ALTER TABLE `uni_roll`
  MODIFY `roll_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_sale_master`
--
ALTER TABLE `uni_sale_master`
  MODIFY `sale_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uni_sale_trans`
--
ALTER TABLE `uni_sale_trans`
  MODIFY `sale_trans_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `uni_trade`
--
ALTER TABLE `uni_trade`
  MODIFY `trade_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uni_unit`
--
ALTER TABLE `uni_unit`
  MODIFY `unit_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_user`
--
ALTER TABLE `uni_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
