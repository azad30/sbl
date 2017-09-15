-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 10:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branchinfos`
--

CREATE TABLE `branchinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `branch_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_mobile` int(10) UNSIGNED NOT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_telephone` int(10) UNSIGNED NOT NULL,
  `b_web` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_acc_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_sub_acc_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_license_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `update_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branchinfos`
--

INSERT INTO `branchinfos` (`id`, `branch_id`, `company_id`, `branch_name`, `branch_type`, `b_mobile`, `b_email`, `b_address`, `b_country`, `b_telephone`, `b_web`, `b_acc_no`, `bank_name`, `bank_branch_name`, `b_sub_acc_no`, `b_license_no`, `b_description`, `image`, `created_date`, `created_by`, `update_date`, `update_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, NULL, 4, 'uttara', 'pertrolPump', 33, 'ad@email.com', 'dfd', 'dfd', 33, 'dd', '33', 'dfdf', 'dd', '33', '33', 'dfdfd fdfdf dfdf', '2017_08_19_17_11_50_PM__petrol-price2-16-1494874319.jpg', NULL, NULL, NULL, NULL, NULL, '2017-08-19 11:11:50', '2017-08-19 11:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfos`
--

CREATE TABLE `companyinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(20) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(30) UNSIGNED DEFAULT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_company_ac_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_sub_ac_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_license_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyinfos`
--

INSERT INTO `companyinfos` (`id`, `company_id`, `company_name`, `company_type`, `mobile`, `email`, `address`, `country`, `telephone`, `website`, `primary_company_ac_no`, `bank_name`, `branch_name`, `company_sub_ac_no`, `company_license_no`, `company_description`, `image`, `created_date`, `created_by`, `update_date`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, NULL, 'SBL', 'group', 123, 'as@email.com', 'Uttara', 'BD', 344, 'sbl.com', '123', 'Uttara', 'Uttara', '554', '45', 'SBL petrol Pump', '2017_08_19_15_35_38_PM__petrol-price2-16-1494874319.jpg', NULL, 'azad', NULL, 'azad', NULL, '2017-08-19 09:35:38', '2017-08-19 09:35:38'),
(5, NULL, 'Bricks', 'group', 5565, 'bricks@email.com', 'Katta', 'BD', 54, 'dd.com', '33', 'Dhaka', 'Dhaka', '44', '44', 'Bricks Bricks', '2017_08_19_15_36_39_PM__Petrol.jpg', NULL, 'azad', NULL, 'azad', NULL, '2017-08-19 09:36:39', '2017-08-19 09:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfos`
--

CREATE TABLE `customerinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cu_id` int(10) UNSIGNED DEFAULT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `cu_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_mobile` int(10) UNSIGNED NOT NULL,
  `cu_telephone` int(10) UNSIGNED NOT NULL,
  `cu_credit_limit` decimal(10,2) NOT NULL,
  `cu_discount_rate_p` decimal(6,2) NOT NULL,
  `cu_discount_rate_d` decimal(6,2) NOT NULL,
  `cu_discount_rate_o` decimal(6,2) NOT NULL,
  `cu_discount_rate_g` decimal(6,2) NOT NULL,
  `cu_ac_no` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_bank_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_bank_branch_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cu_description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customerinfos`
--

INSERT INTO `customerinfos` (`id`, `cu_id`, `branch_id`, `cu_type`, `customer_code`, `cu_name`, `cu_email`, `cu_address`, `cu_country`, `cu_mobile`, `cu_telephone`, `cu_credit_limit`, `cu_discount_rate_p`, `cu_discount_rate_d`, `cu_discount_rate_o`, `cu_discount_rate_g`, `cu_ac_no`, `cu_bank_name`, `cu_bank_branch_name`, `cu_description`, `reference_name`, `image`, `status`, `created_date`, `created_by`, `update_date`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, NULL, 8, 'party', 'cs3', 'azad', 'ad@enauk.cin', 'dfdf', 'dfdf', 56, 545, '3.00', '4.00', '4.00', '4.00', '4.00', '44', 'dfdf', 'dfdf', 'dfdfd', 'dfdf', '2017_08_19_21_04_51_PM__F52361.jpg', 'active', NULL, 'azad', NULL, 'azad', NULL, '2017-08-19 15:04:51', '2017-08-19 15:04:51'),
(3, NULL, 8, 'local', 'cu-121', 'James', 'james@gmail.com', 'Dhaka, Bangladesh', 'Bangladesh', 1234, 123, '32.00', '1.00', '1.00', '1.00', '1.00', '111', 'DBBL', 'Khilkhet', 'Nice to meet you', 'azad', '2017_08_29_00_02_28_AM__1.png', 'active', NULL, 'azad', NULL, 'azad', NULL, '2017-08-28 18:02:28', '2017-08-28 18:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `debitvouchardetails`
--

CREATE TABLE `debitvouchardetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `vouchar_id` int(10) UNSIGNED NOT NULL,
  `expense_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debitvoucharmasters`
--

CREATE TABLE `debitvoucharmasters` (
  `id` int(10) UNSIGNED NOT NULL,
  `vouchar_id` int(10) UNSIGNED NOT NULL,
  `vouchar_date` date NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expensetypes`
--

CREATE TABLE `expensetypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensetypes`
--

INSERT INTO `expensetypes` (`id`, `expense_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nasta', 'description about nasta', NULL, NULL),
(2, 'Car', 'description about Car', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itemcategories`
--

CREATE TABLE `itemcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_category_id` int(10) UNSIGNED DEFAULT NULL,
  `item_category_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemcategories`
--

INSERT INTO `itemcategories` (`id`, `item_category_id`, `item_category_name`, `created_date`, `created_by`, `update_date`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'petrol', NULL, 'azad', NULL, 'azad', NULL, '2017-08-19 15:40:54', '2017-08-19 15:40:54'),
(2, NULL, 'Diesel', NULL, 'azad', NULL, 'azad', NULL, '2017-08-28 14:20:05', '2017-08-28 14:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `iteminfos`
--

CREATE TABLE `iteminfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `barcode` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_category_id` int(10) UNSIGNED NOT NULL,
  `item_unit` int(10) UNSIGNED NOT NULL,
  `item_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` double NOT NULL,
  `item_price` double NOT NULL,
  `discount_percent` double NOT NULL,
  `discount_tk` double NOT NULL,
  `vat` double NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iteminfos`
--

INSERT INTO `iteminfos` (`id`, `item_id`, `barcode`, `item_name`, `item_category_id`, `item_unit`, `item_type`, `item_qty`, `item_price`, `discount_percent`, `discount_tk`, `vat`, `created_date`, `created_by`, `update_date`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'it-121', 'newItem23', 1, 1, 'normal', 5, 333, 3, 3, 3, NULL, 'azad', NULL, NULL, NULL, '2017-08-19 16:38:34', '2017-08-19 16:56:21'),
(2, NULL, 'diesel-121', 'miniDisel', 2, 2, 'regular', 3, 12, 3, 3, 3, NULL, 'azad', NULL, NULL, NULL, '2017-08-28 14:21:00', '2017-08-28 14:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `itemunits`
--

CREATE TABLE `itemunits` (
  `id` int(10) UNSIGNED NOT NULL,
  `i_unit_id` int(10) UNSIGNED DEFAULT NULL,
  `unit_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemunits`
--

INSERT INTO `itemunits` (`id`, `i_unit_id`, `unit_name`, `created_date`, `created_by`, `update_date`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'KG', NULL, 'azad', NULL, 'azad', NULL, '2017-08-19 15:28:17', '2017-08-19 15:28:31'),
(2, NULL, 'GM', NULL, 'azad', NULL, 'azad', NULL, '2017-08-28 14:19:41', '2017-08-28 14:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_19_000202_create_students_table', 1),
(4, '2017_08_19_004226_create_companyinfos_table', 1),
(18, '2017_08_19_125644_create_branchinfos_table', 2),
(20, '2017_08_19_172414_create_customerinfos_table', 3),
(21, '2017_08_19_211532_create_itemunits_table', 4),
(22, '2017_08_19_213008_create_itemcategories_table', 5),
(23, '2017_08_19_214357_create_iteminfos_table', 6),
(24, '2017_08_28_203928_create_salesmasters_table', 7),
(25, '2017_08_28_210236_create_salesdetails_table', 8),
(26, '2017_08_29_192008_create_expensetypes_table', 9),
(27, '2017_08_29_192547_create_debitvoucharmasters_table', 10),
(28, '2017_08_29_193209_create_debitvouchardetails_table', 11),
(29, '2017_08_29_193641_create_paymentrecieves_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentrecieves`
--

CREATE TABLE `paymentrecieves` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `cu_id` int(10) UNSIGNED NOT NULL,
  `particulars` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_amount` double NOT NULL,
  `payment_date` datetime NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salesdetails`
--

CREATE TABLE `salesdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_details_id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `disc_percent` decimal(10,0) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `bonus_qty` double NOT NULL,
  `vat` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salesmasters`
--

CREATE TABLE `salesmasters` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(10) UNSIGNED NOT NULL,
  `cu_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `pay_method` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double NOT NULL,
  `discount` double NOT NULL,
  `net_pay` double NOT NULL,
  `due` double NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation_details` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_qualification` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `father_name`, `mother_name`, `dob`, `gender`, `marital_status`, `religion`, `occupation`, `occupation_details`, `educational_qualification`, `phone_number`, `nid`, `passport_number`, `tin_number`, `permanent_address`, `emergency_contact`, `active`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', 'email@email.com', '$2y$10$FgIawnZ74GWeb.EunY4VO.H97DW4.0KYyqWVjRyJxd34KcIQCElFS', 'Mr. Y', 'Mrs. X', '2017-08-19', 'Male', 'Single', 'Hinduism', 'Student', 'MSc in CSE; Daffodil International University', 'BSc in CSE', '+8801723000000', '12345678909876543', '123456789', '12345', 'Joypurhat, Bangladesh', 'Mr. T; Dhaka, Bangladesh', 1, NULL, 'lkTmYi9OFe1V4JEejEmnpWfizCK6uGjA9f2Xg9INJA4YMoTqeAeS2xhaPkYZ', '2017-08-18 19:25:56', '2017-08-18 19:25:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchinfos`
--
ALTER TABLE `branchinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branchinfos_branch_id_unique` (`branch_id`),
  ADD KEY `branchinfos_company_id_foreign` (`company_id`);

--
-- Indexes for table `companyinfos`
--
ALTER TABLE `companyinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companyinfos_company_id_unique` (`company_id`);

--
-- Indexes for table `customerinfos`
--
ALTER TABLE `customerinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customerinfos_cu_id_unique` (`cu_id`),
  ADD KEY `customerinfos_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `debitvouchardetails`
--
ALTER TABLE `debitvouchardetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debitvouchardetails_vouchar_id_foreign` (`vouchar_id`);

--
-- Indexes for table `debitvoucharmasters`
--
ALTER TABLE `debitvoucharmasters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `debitvoucharmasters_vouchar_id_unique` (`vouchar_id`),
  ADD KEY `debitvoucharmasters_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `expensetypes`
--
ALTER TABLE `expensetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemcategories`
--
ALTER TABLE `itemcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `itemcategories_item_category_id_unique` (`item_category_id`);

--
-- Indexes for table `iteminfos`
--
ALTER TABLE `iteminfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iteminfos_item_id_unique` (`item_id`),
  ADD KEY `iteminfos_item_category_id_foreign` (`item_category_id`),
  ADD KEY `iteminfos_item_unit_foreign` (`item_unit`);

--
-- Indexes for table `itemunits`
--
ALTER TABLE `itemunits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `itemunits_i_unit_id_unique` (`i_unit_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymentrecieves`
--
ALTER TABLE `paymentrecieves`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paymentrecieves_payment_id_unique` (`payment_id`),
  ADD KEY `paymentrecieves_cu_id_foreign` (`cu_id`);

--
-- Indexes for table `salesdetails`
--
ALTER TABLE `salesdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `salesdetails_sales_details_id_unique` (`sales_details_id`),
  ADD KEY `salesdetails_sales_id_foreign` (`sales_id`),
  ADD KEY `salesdetails_item_id_foreign` (`item_id`);

--
-- Indexes for table `salesmasters`
--
ALTER TABLE `salesmasters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `salesmasters_sales_id_unique` (`sales_id`),
  ADD KEY `salesmasters_cu_id_foreign` (`cu_id`),
  ADD KEY `salesmasters_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nid_unique` (`nid`),
  ADD KEY `users_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchinfos`
--
ALTER TABLE `branchinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `companyinfos`
--
ALTER TABLE `companyinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customerinfos`
--
ALTER TABLE `customerinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `debitvouchardetails`
--
ALTER TABLE `debitvouchardetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `debitvoucharmasters`
--
ALTER TABLE `debitvoucharmasters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expensetypes`
--
ALTER TABLE `expensetypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `itemcategories`
--
ALTER TABLE `itemcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `iteminfos`
--
ALTER TABLE `iteminfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `itemunits`
--
ALTER TABLE `itemunits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `paymentrecieves`
--
ALTER TABLE `paymentrecieves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salesdetails`
--
ALTER TABLE `salesdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salesmasters`
--
ALTER TABLE `salesmasters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `branchinfos`
--
ALTER TABLE `branchinfos`
  ADD CONSTRAINT `branchinfos_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companyinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customerinfos`
--
ALTER TABLE `customerinfos`
  ADD CONSTRAINT `customerinfos_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branchinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debitvouchardetails`
--
ALTER TABLE `debitvouchardetails`
  ADD CONSTRAINT `debitvouchardetails_vouchar_id_foreign` FOREIGN KEY (`vouchar_id`) REFERENCES `debitvoucharmasters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debitvoucharmasters`
--
ALTER TABLE `debitvoucharmasters`
  ADD CONSTRAINT `debitvoucharmasters_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branchinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iteminfos`
--
ALTER TABLE `iteminfos`
  ADD CONSTRAINT `iteminfos_item_category_id_foreign` FOREIGN KEY (`item_category_id`) REFERENCES `itemcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iteminfos_item_unit_foreign` FOREIGN KEY (`item_unit`) REFERENCES `itemunits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentrecieves`
--
ALTER TABLE `paymentrecieves`
  ADD CONSTRAINT `paymentrecieves_cu_id_foreign` FOREIGN KEY (`cu_id`) REFERENCES `customerinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salesdetails`
--
ALTER TABLE `salesdetails`
  ADD CONSTRAINT `salesdetails_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `iteminfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salesdetails_sales_id_foreign` FOREIGN KEY (`sales_id`) REFERENCES `salesmasters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salesmasters`
--
ALTER TABLE `salesmasters`
  ADD CONSTRAINT `salesmasters_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branchinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salesmasters_cu_id_foreign` FOREIGN KEY (`cu_id`) REFERENCES `customerinfos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
