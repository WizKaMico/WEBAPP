-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2024 at 03:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_data`
--

CREATE TABLE `location_data` (
  `lid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_data`
--

INSERT INTO `location_data` (`lid`, `code`, `latitude`, `longitude`, `address`) VALUES
(1, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(2, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(3, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(4, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(5, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(6, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(7, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(8, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(9, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(10, 7313, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(11, 7313, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(12, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(13, 7211, '14.6466', '121.0947', 'Bernardo Circle, Malanday, District I, Marikina, Eastern Manila District, Metro Manila, 1805, Philippines'),
(14, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(15, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(16, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(17, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(18, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(19, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(20, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(21, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(22, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(23, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(24, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(25, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(26, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(27, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(28, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(29, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(30, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(31, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(32, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(33, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(34, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(35, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(36, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(37, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(38, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(39, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(40, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(41, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(42, 7676, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(43, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(44, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(45, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(46, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(47, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(48, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(49, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(50, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(51, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(52, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(53, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(54, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(55, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(56, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(57, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(58, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(59, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(60, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(61, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(62, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(63, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(64, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(65, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(66, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(67, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(68, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(69, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(70, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(71, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(72, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(73, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(74, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(75, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(76, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(77, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(78, 8990, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(79, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(80, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(81, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(82, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(83, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(84, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(85, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(86, 9603, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines'),
(87, 7364, '14.9193', '120.7644', 'Sapang Bayan, Balungao, Calumpit, Bulacan, Central Luzon, 3003, Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `remember_me_tokens`
--

CREATE TABLE `remember_me_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assigned_employee`
--

CREATE TABLE `tbl_assigned_employee` (
  `apid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `estimated_minutes` int(50) NOT NULL,
  `date_confirmed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assigned_employee`
--

INSERT INTO `tbl_assigned_employee` (`apid`, `bid`, `emp_id`, `estimated_minutes`, `date_confirmed`) VALUES
(1, 8, '20231014-6825', 30, '2023-10-14'),
(2, 7, '20231014-7042', 60, '2023-10-14'),
(3, 9, '20231014-7849', 20, '2023-10-14'),
(4, 1, '20231027-8606', 10, '2023-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_history`
--

CREATE TABLE `tbl_booking_history` (
  `hid` int(11) NOT NULL,
  `tracking` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking_history`
--

INSERT INTO `tbl_booking_history` (`hid`, `tracking`, `status`, `date_updated`) VALUES
(1, '9961-20231027', 'PENDING', '2023-10-27'),
(2, '9961-20231027', 'CONFIRM', '2023-10-27'),
(3, '9961-20231027', 'IN-PROGRESS', '2023-10-27'),
(4, '9961-20231027', 'COMPLETED', '2023-10-27'),
(5, '8030-20231027', 'PENDING', '2023-10-27'),
(6, '8030-20231027', 'CONFIRM', '2023-10-27'),
(7, '9961-20231027', 'IN-PROGRESS', '2023-11-27'),
(8, '7335-20231127', 'PENDING', '2023-11-27'),
(9, '7335-20231127', 'DECLINE', '2023-11-27'),
(10, '7509-20231128', 'PENDING', '2023-11-28'),
(11, '9481-20231128', 'PENDING', '2023-11-28'),
(12, '9795-20231128', 'PENDING', '2023-11-28'),
(13, '7986-20231128', 'PENDING', '2023-11-28'),
(14, '7374-20231128', 'PENDING', '2023-11-28'),
(15, '6679-20231128', 'PENDING', '2023-11-28'),
(16, '7584-20231128', 'PENDING', '2023-11-28'),
(17, '9961-20231027', 'COMPLETED', '2023-12-20'),
(18, '7584-20231128', 'CONFIRM', '2023-12-20'),
(19, '9961-20231027', 'IN-PROGRESS', '2024-03-15'),
(20, '9961-20231027', 'COMPLETED', '2024-03-15'),
(21, '9961-20231027', 'IN-PROGRESS', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_employee`
--

CREATE TABLE `tbl_company_employee` (
  `eid` int(11) NOT NULL,
  `company_code` int(50) NOT NULL,
  `emp_id` varchar(250) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `emp_designation` varchar(250) NOT NULL,
  `date_created` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_employee`
--

INSERT INTO `tbl_company_employee` (`eid`, `company_code`, `emp_id`, `emp_name`, `emp_designation`, `date_created`, `status`) VALUES
(1, 9777, '20231014-6825', 'Gerald', 'Mechanic IIII', '2023-10-14', 'AVAIL'),
(2, 9777, '20231014-7726', 'Gerald Mico', 'Mechanic II', '2023-10-14', 'AVAIL'),
(3, 9777, '20231014-7042', 'Gerald Mico', 'Chief Mechanic', '2023-10-14', 'AVAIL'),
(4, 9777, '20231014-7849', 'John Paul', 'Chief Mechanic', '2023-10-14', 'AVAIL'),
(5, 9777, '20231014-6793', 'Zyke Zyke', 'Chief Mechanic IV', '2023-10-14', 'AVAIL'),
(6, 9603, '20231027-8606', 'Pablo Escobar', 'Chief Mechanic IIII', '2023-10-27', 'OCCUPIED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_registration_credentials`
--

CREATE TABLE `tbl_company_registration_credentials` (
  `tcpid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `business_number` varchar(255) NOT NULL,
  `image_credentials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_registration_credentials`
--

INSERT INTO `tbl_company_registration_credentials` (`tcpid`, `code`, `business_type`, `business_number`, `image_credentials`) VALUES
(1, 7609, 'DTI', '12121212121212121', 'CompanyCredentialImage//HOOP__3_-removebg-preview.png'),
(2, 7313, 'DTI', '12121212121212121', 'CompanyCredentialImage//arm.png'),
(3, 9603, 'DTI', '101213132323232', 'CompanyCredentialImage//Image_created_with_a_mobile_phone.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_rental_setting`
--

CREATE TABLE `tbl_company_rental_setting` (
  `raid` int(11) NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_rental_setting`
--

INSERT INTO `tbl_company_rental_setting` (`raid`, `amount`, `status`, `date_created`) VALUES
(1, 1000, 'ACTIVE', '2023-12-09'),
(2, 700, 'DEACTIVE', '2023-12-10'),
(3, 900, 'DEACTIVE', '2023-12-10'),
(4, 1000, 'DEACTIVE', '2023-12-10'),
(5, 800, 'DEACTIVE', '2023-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information_image`
--

CREATE TABLE `tbl_information_image` (
  `iid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `image_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_information_image`
--

INSERT INTO `tbl_information_image` (`iid`, `code`, `image_data`) VALUES
(1, 9777, 'uploads/1696900213_9777.jpg'),
(2, 7364, 'uploads/1696917527_7364.jpg'),
(3, 9603, 'uploads/415-4152206_kyrie-irving-vector-illustration-kyrie-irving-celtics-png-removebg-preview.png'),
(4, 7676, 'uploads/1696942425_7676.jpg'),
(5, 8589, 'uploads/1697037563_8589.jpg'),
(6, 6973, 'uploads/1697037818_6973.jpg'),
(7, 7406, 'uploads/1697125459_7406.jpg'),
(8, 8677, 'uploads/1697126297_8677.jpg'),
(9, 7267, 'uploads/1700581789_7267.jpg'),
(10, 7873, 'uploads/1700582047_7873.jpg'),
(23, 7609, 'uploads/1704622513_7609.jpg'),
(24, 7211, 'uploads/1704627697_7211.jpg'),
(25, 7313, 'uploads/1704633948_7313.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'SERVICE OWNER'),
(3, 'CLIENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_rating`
--

CREATE TABLE `tbl_service_rating` (
  `rid` int(11) NOT NULL,
  `tracking` varchar(250) NOT NULL,
  `sid` int(50) NOT NULL,
  `rate_by` int(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_rating`
--

INSERT INTO `tbl_service_rating` (`rid`, `tracking`, `sid`, `rate_by`, `rate`, `comment`, `date`) VALUES
(1, '9961-20231027', 6, 7364, 1, 'TEST', '2023-11-22'),
(2, '9961-20231027', 6, 7364, 5, 'Nice', '2023-11-22'),
(3, '9961-20231027', 6, 7364, 5, 'Basic', '2023-11-22'),
(4, '9961-20231027', 6, 7364, 5, 'Fuck this you are amazing', '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store_service_pricing`
--

CREATE TABLE `tbl_store_service_pricing` (
  `spid` int(11) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `service_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_store_service_pricing`
--

INSERT INTO `tbl_store_service_pricing` (`spid`, `vehicle_type`, `price`, `service_id`) VALUES
(1, 'SEDAN', 250, 5),
(2, 'COUPE', 300, 5),
(3, 'SPORTS CAR', 500, 5),
(4, 'SEDAN', 500, 6),
(5, 'COUPE', 100, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` int(50) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `service_approval` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `email`, `phone`, `password`, `designation`, `code`, `status`, `service_approval`, `date_created`) VALUES
(1, 'tricore012@gmail.com', '9531599179', '21232f297a57a5a743894a0e4a801fc3', 2, 9777, 'VERIFIED', 'APPROVED', '2023-10-10'),
(2, 'revcoreitsolution@gmail.com', '9983032537', '21232f297a57a5a743894a0e4a801fc3', 3, 7364, 'VERIFIED', '', '2023-10-10'),
(3, 'GMFACISTOL@OUTLOOK.COM', '09166513189', '21232f297a57a5a743894a0e4a801fc3', 2, 9603, 'VERIFIED', 'APPROVED', '2023-10-10'),
(4, 'mico101213@gmail.com', '9903391823', '21232f297a57a5a743894a0e4a801fc3', 3, 7676, 'VERIFIED', '', '2023-10-10'),
(5, 'admin@gmail.com', '0999228238', '21232f297a57a5a743894a0e4a801fc3', 1, 8990, 'VERIFIED', '', '2023-09-28'),
(6, 'thenextlevelplay@gmail.com', '09775647711', '21232f297a57a5a743894a0e4a801fc3', 2, 8589, 'VERIFIED', 'APPROVED', '2023-10-11'),
(7, 'testclient@gmail.com', '09998823232', '21232f297a57a5a743894a0e4a801fc3', 3, 6973, 'VERIFIED', '', '2023-10-11'),
(8, 'helloblob@gmail.com', '0942652626262', '21232f297a57a5a743894a0e4a801fc3', 2, 7406, 'VERIFIED', 'APPROVED', '2023-10-12'),
(9, 'Zykecastro8@gmail.com', '953159918922', '21232f297a57a5a743894a0e4a801fc3', 3, 8677, 'VERIFIED', '', '2023-10-12'),
(10, 'highlordapo@gmail.com', '9531599178', '21232f297a57a5a743894a0e4a801fc3', 3, 7267, 'VERIFIED', '', '2023-11-21'),
(11, 'helloowner@gmail.com', '95315991881', '21232f297a57a5a743894a0e4a801fc3', 2, 7873, 'VERIFIED', 'APPROVED', '2023-11-21'),
(12, 'hyperdunks@gmail.com', '09531599179', '4eeda563b4805b3eb4b02254c0b18ec7', 2, 7609, 'VERIFIED', '', '2024-01-07'),
(13, 'haypermico@gmail.com', '09531599189', '4eeda563b4805b3eb4b02254c0b18ec7', 3, 7211, 'VERIFIED', '', '2024-01-07'),
(14, 'micowillmadeit@gmail.com', '09989535199', '4eeda563b4805b3eb4b02254c0b18ec7', 2, 7313, 'VERIFIED', '', '2024-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_booking`
--

CREATE TABLE `tbl_user_booking` (
  `bid` int(11) NOT NULL,
  `sid` int(50) NOT NULL,
  `tracking` varchar(200) NOT NULL,
  `booked_by` int(50) NOT NULL,
  `car_model` varchar(250) NOT NULL,
  `car_brand` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date_appointment` date NOT NULL,
  `time_appointment` varchar(250) NOT NULL,
  `photo` text NOT NULL,
  `promo_code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_booking`
--

INSERT INTO `tbl_user_booking` (`bid`, `sid`, `tracking`, `booked_by`, `car_model`, `car_brand`, `price`, `date_appointment`, `time_appointment`, `photo`, `promo_code`, `status`, `booking_date`) VALUES
(1, 6, '9961-20231027', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-10-27', '12:15', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'IN-PROGRESS', '2023-10-27'),
(2, 9, '8030-20231027', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-10-28', '12:49', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'CONFIRM', '2023-10-27'),
(3, 5, '7335-20231127', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-11-28', '21:29', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'DECLINE', '2023-11-27'),
(4, 5, '9795-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-11-30', '13:38', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-11-28'),
(5, 5, '7986-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-11-30', '13:39', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-11-28'),
(6, 5, '7374-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-11-30', '13:41', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-11-28'),
(7, 5, '6679-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '250', '2023-11-29', '11:44', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-11-28'),
(8, 5, '7584-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '500', '2023-11-30', '13:55', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'CONFIRM', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_company_deposit`
--

CREATE TABLE `tbl_user_company_deposit` (
  `dpid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `amount` int(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_company_deposit`
--

INSERT INTO `tbl_user_company_deposit` (`dpid`, `code`, `status`, `transaction_id`, `amount`, `date_created`) VALUES
(1, 7609, 'true', '8AW84735WD296730E', 1000, '2024-01-07'),
(2, 7313, 'true', '43Y7950257381460T', 1000, '2024-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_information`
--

CREATE TABLE `tbl_user_information` (
  `id` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_information`
--

INSERT INTO `tbl_user_information` (`id`, `code`, `fname`, `mname`, `lname`, `region`, `province`, `city`, `barangay`, `address`) VALUES
(1, 9777, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION'),
(2, 7364, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION'),
(3, 9603, 'GERALD MICO', 'SALVADOR', 'FACISTOL', 'NATIONAL CAPITAL REGION (NCR)', 'NCR, SECOND DISTRICT', 'QUEZON CITY', 'SANTA LUCIA', '10 U206 TARRAVILLE SUBDIVISION'),
(4, 7676, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bahay Toro', '10 U206 TARRAVILLE SUBDIVISION'),
(5, 8990, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bahay Toro', '10 U206 TARRAVILLE SUBDIVISION'),
(6, 8589, 'Test', 'Test', 'Test', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bagumbuhay', '10 U206 TARRAVILLE SUBDIVISION'),
(7, 6973, 'Client', 'Client', 'Test', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Bacarra', 'Nambaran', '10 U206 TARRAVILLE SUBDIVISION'),
(8, 7406, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Pasay City', 'Barangay 106', '10 U206 TARRAVILLE SUBDIVISION'),
(9, 8677, 'Zyke', 'Castro', 'Catro', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'Western Bicutan', '10 U206 TARRAVILLE SUBDIVISION'),
(10, 7267, 'Gerald', 'Mico', 'Facistol', 'Region II (Cagayan Valley)', 'Batanes', 'Itbayat', 'San Rafael (Idiang)', '10 U206 TARRAVILLE SUBDIVISION'),
(11, 7873, 'Gerald', 'Mico', 'Facistol', 'Region II (Cagayan Valley)', 'Batanes', 'Itbayat', 'Raele', '10 U206 TARRAVILLE SUBDIVISION'),
(12, 7609, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION'),
(13, 7211, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION'),
(14, 7313, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_information_identification`
--

CREATE TABLE `tbl_user_information_identification` (
  `pid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `identification` varchar(50) NOT NULL,
  `identification_number` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_information_identification`
--

INSERT INTO `tbl_user_information_identification` (`pid`, `code`, `identification`, `identification_number`, `image`) VALUES
(1, 9777, 'Passport', '101213', 'UserDetails//september14.jpg'),
(2, 7364, 'PhilHealth', '1022223333', 'UserDetails//382262736_998525598123666_731944089390867480_n.jpg'),
(3, 9603, 'PhilHealth', '1000029993', 'UserDetails//New Project.png'),
(4, 7676, 'PhilHealth', '111000222', 'UserDetails//suzuki-s-presso-2021-main-1647945552.jpg'),
(5, 8589, 'PhilSys', '1222323232343', 'UserDetails//suzuki-s-presso-2021-main-1647945552.jpg'),
(6, 6973, 'PhilHealth', '19929392332', 'UserDetails//suzuki-s-presso-2021-main-1647945552.jpg'),
(7, 7406, 'PhilHealth', '12782781721871871872', 'UserDetails//service1.png'),
(8, 8677, 'SSS', '237287382783287832', 'UserDetails//New Project (2).png'),
(9, 7267, 'PhilHealth', '12782781721871871872', 'UserDetails//chart.png'),
(10, 7873, 'PhilHealth', '12782781721871871872', 'UserDetails//chart.png'),
(11, 7609, 'Passport', '121212132323232', 'UserDetails//HOOP (6).png'),
(14, 7211, 'SSS', '12782781721871871872', 'UserDetails//New Project (33).png'),
(15, 7313, 'Passport', '121212121212', 'UserDetails//arm.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_information_store`
--

CREATE TABLE `tbl_user_information_store` (
  `eid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `region_text` varchar(50) NOT NULL,
  `province_text` varchar(50) NOT NULL,
  `city_text` varchar(50) NOT NULL,
  `barangay_text` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_information_store`
--

INSERT INTO `tbl_user_information_store` (`eid`, `code`, `company`, `region_text`, `province_text`, `city_text`, `barangay_text`, `address`, `image`) VALUES
(2, 9777, 'CARWASH HOOD', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION', ''),
(3, 9603, 'CARWASH MOOD', 'NATIONAL CAPITAL REGION (NCR)', 'NCR, SECOND DISTRICT', 'QUEZON CITY', 'SANTA LUCIA', '10 U206 TARRAVILLE SUBDIVISION', 'companyDetails/png-transparent-grand-theft-auto-san-andreas-grand-theft-auto-v-grand-theft-auto-liberty-city-stories-playstation-2-san-andreas-multiplayer-woman-face-hand-people-removebg-preview.png'),
(4, 8589, 'TESTWASH CARS', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'City Of Muntinlupa', 'Bayanan', '10 U206 TARRAVILLE SUBDIVISION', ''),
(5, 7406, 'Gameplan EME', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'South Signal Village', '10 U206 TARRAVILLE SUBDIVISION', ''),
(6, 7873, 'Gameplan Marketing Solutions, Inc.', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Adams', 'Adams (Pob.)', '10 U206 TARRAVILLE SUBDIVISION', ''),
(7, 7609, 'HYPERKICKS', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION', ''),
(8, 7313, 'GIBRALTAR', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_message`
--

CREATE TABLE `tbl_user_message` (
  `meid` int(11) NOT NULL,
  `sid` int(50) NOT NULL,
  `tracking` varchar(300) NOT NULL,
  `message_by` int(50) NOT NULL,
  `role` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_send` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_message`
--

INSERT INTO `tbl_user_message` (`meid`, `sid`, `tracking`, `message_by`, `role`, `message`, `date_send`) VALUES
(1, 6, '9961-20231027', 9603, 2, 'How are you ? ', '2024-03-14'),
(2, 6, '9961-20231027', 7364, 3, 'Not doing well', '2024-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_monthly_payment_history`
--

CREATE TABLE `tbl_user_monthly_payment_history` (
  `rpid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `amount` int(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_monthly_payment_history`
--

INSERT INTO `tbl_user_monthly_payment_history` (`rpid`, `code`, `status`, `transaction_id`, `amount`, `date_created`) VALUES
(1, 8990, 'true', '97S48705TM388221P', 300, '2023-12-09'),
(2, 9603, 'true', '3HH5366539204520W', 500, '2023-12-10'),
(3, 9777, 'true', '0U222986LG8478719', 1000, '2023-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_promo`
--

CREATE TABLE `tbl_user_promo` (
  `pid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `servicepromo` int(50) NOT NULL,
  `promo_name` varchar(250) NOT NULL,
  `percentage` int(50) NOT NULL,
  `available_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `date_created` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_promo`
--

INSERT INTO `tbl_user_promo` (`pid`, `code`, `servicepromo`, `promo_name`, `percentage`, `available_date`, `expiration_date`, `date_created`, `status`) VALUES
(1, 9777, 1, 'PROMO21', 21, '2023-10-12', '2023-11-01', '2023-10-10', 'SOON'),
(2, 9777, 2, 'PROMO10', 10, '2023-10-10', '2023-10-31', '2023-10-10', 'AVAILABLE'),
(3, 9777, 3, 'PROMO10', 10, '2023-10-12', '2023-10-31', '2023-10-10', 'SOON'),
(4, 9603, 5, 'PROMOALLDAY10', 10, '2023-10-11', '2023-10-14', '2023-10-10', 'SOON'),
(5, 9603, 6, 'BENTEN10', 10, '2023-10-11', '2023-10-14', '2023-10-10', 'SOON'),
(6, 8589, 7, 'CARPALOVA10', 10, '2023-10-10', '2023-03-10', '2023-10-11', 'END'),
(7, 8589, 8, 'CHANGE10', 10, '2023-10-12', '2023-11-13', '2023-10-11', 'SOON'),
(8, 7406, 9, 'WALANGTULUGAN21', 21, '2023-10-11', '2023-10-31', '2023-10-12', 'END');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_security`
--

CREATE TABLE `tbl_user_security` (
  `sid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_security`
--

INSERT INTO `tbl_user_security` (`sid`, `email`, `code`, `status`, `date_created`) VALUES
(1, 'tricore012@gmail.com', 7321, 'USED', '2023-10-10'),
(2, 'tricore012@gmail.com', 6766, 'USED', '2023-10-10'),
(3, 'tricore012@gmail.com', 7142, 'USED', '2023-10-10'),
(4, 'tricore012@gmail.com', 7061, 'UNUSED', '2023-10-10'),
(5, 'revcoreitsolution@gmail.com', 9408, 'USED', '2023-10-10'),
(6, 'revcoreitsolution@gmail.com', 9502, 'USED', '2023-10-10'),
(7, 'revcoreitsolution@gmail.com', 9195, 'USED', '2023-10-10'),
(8, 'gmfacistol@outlook.com', 9682, 'USED', '2023-10-10'),
(9, 'mico101213@gmail.com', 9187, 'USED', '2023-10-10'),
(10, 'tricore012@gmail.com', 8939, 'USED', '2023-10-11'),
(11, 'gmfacistol@outlook.com', 9551, 'USED', '2023-10-11'),
(12, 'mico101213@gmail.com', 7999, 'USED', '2023-10-11'),
(13, 'tricore012@gmail.com', 8395, 'USED', '2023-10-11'),
(14, 'revcoreitsolution@gmail.com', 8409, 'USED', '2023-10-11'),
(15, 'revcoreitsolution@gmail.com', 6863, 'USED', '2023-10-11'),
(16, 'tricore012@gmail.com', 7264, 'USED', '2023-10-11'),
(17, 'revcoreitsolution@gmail.com', 7668, 'USED', '2023-10-11'),
(18, 'thenextlevelplay@gmail.com', 8551, 'USED', '2023-10-11'),
(19, 'testclient@gmail.com', 7061, 'USED', '2023-10-11'),
(20, 'thenextlevelplay@gmail.com', 6820, 'USED', '2023-10-11'),
(21, 'helloblob@gmail.com', 7229, 'USED', '2023-10-12'),
(22, 'Zykecastro8@gmail.com', 9203, 'USED', '2023-10-12'),
(23, 'helloblob@gmail.com', 6764, 'USED', '2023-10-13'),
(24, 'tricore012@gmail.com', 6718, 'USED', '2023-10-13'),
(25, 'revcoreitsolution@gmail.com', 6779, 'USED', '2023-10-13'),
(26, 'tricore012@gmail.com', 7710, 'USED', '2023-10-13'),
(27, 'revcoreitsolution@gmail.com', 8110, 'USED', '2023-10-14'),
(28, 'revcoreitsolution@gmail.com', 8782, 'UNUSED', '2023-10-14'),
(29, 'tricore012@gmail.com', 8600, 'USED', '2023-10-14'),
(30, 'revcoreitsolution@gmail.com', 8444, 'USED', '2023-10-14'),
(31, 'revcoreitsolution@gmail.com', 6967, 'USED', '2023-10-14'),
(32, 'tricore012@gmail.com', 8105, 'USED', '2023-10-14'),
(33, 'revcoreitsolution@gmail.com', 8795, 'USED', '2023-10-27'),
(34, 'gmfacistol@outlook.com', 7120, 'USED', '2023-10-27'),
(35, 'revcoreitsolution@gmail.com', 7942, 'USED', '2023-10-27'),
(36, 'helloblob@gmail.com', 9937, 'USED', '2023-10-27'),
(37, 'revcoreitsolution@gmail.com', 9053, 'USED', '2023-10-27'),
(38, 'highlordapo@gmail.com', 8755, 'USED', '2023-11-21'),
(39, 'helloowner@gmail.com', 8432, 'USED', '2023-11-21'),
(40, 'revcoreitsolution@gmail.com', 8803, 'USED', '2023-11-21'),
(41, 'revcoreitsolution@gmail.com', 7116, 'USED', '2023-11-22'),
(42, 'gmfacistol@outlook.com', 7203, 'USED', '2023-11-22'),
(43, 'revcoreitsolution@gmail.com', 9055, 'USED', '2023-11-22'),
(44, 'gmfacistol@outlook.com', 6670, 'USED', '2023-11-22'),
(45, 'revcoreitsolution@gmail.com', 9622, 'USED', '2023-11-22'),
(46, 'gmfacistol@outlook.com', 9259, 'USED', '2023-11-22'),
(47, 'revcoreitsolution@gmail.com', 7962, 'USED', '2023-11-22'),
(48, 'revcoreitsolution@gmail.com', 7021, 'USED', '2023-11-27'),
(49, 'gmfacistol@outlook.com', 9227, 'USED', '2023-11-27'),
(50, 'revcoreitsolution@gmail.com', 8442, 'USED', '2023-11-27'),
(51, 'gmfacistol@outlook.com', 9659, 'USED', '2023-11-27'),
(52, 'revcoreitsolution@gmail.com', 7372, 'USED', '2023-11-27'),
(53, 'gmfacistol@outlook.com', 7797, 'USED', '2023-11-27'),
(54, 'revcoreitsolution@gmail.com', 7072, 'USED', '2023-11-27'),
(55, 'gmfacistol@outlook.com', 8333, 'USED', '2023-11-28'),
(56, 'gmfacistol@outlook.com', 8628, 'USED', '2023-11-28'),
(57, 'revcoreitsolution@gmail.com', 6919, 'USED', '2023-11-28'),
(58, 'revcoreitsolution@gmail.com', 7609, 'USED', '2023-11-28'),
(59, 'gmfacistol@outlook.com', 7331, 'USED', '2023-11-28'),
(60, 'revcoreitsolution@gmail.com', 8137, 'USED', '2023-11-28'),
(61, 'gmfacistol@outlook.com', 7524, 'USED', '2023-11-28'),
(62, 'gmfacistol@outlook.com', 9325, 'USED', '2023-12-09'),
(63, 'revcoreitsolution@gmail.com', 8288, 'UNUSED', '2023-12-10'),
(64, 'revcoreitsolution@gmail.com', 8912, 'UNUSED', '2023-12-10'),
(65, 'revcoreitsolution@gmail.com', 7910, 'USED', '2023-12-10'),
(66, 'gmfacistol@outlook.com', 7347, 'USED', '2023-12-10'),
(67, 'gmfacistol@outlook.com', 7928, 'USED', '2023-12-10'),
(68, 'tricore012@gmail.com', 9592, 'USED', '2023-12-10'),
(69, 'tricore012@gmail.com', 9046, 'UNUSED', '2023-12-10'),
(70, 'tricore012@gmail.com', 7982, 'USED', '2023-12-10'),
(71, 'revcoreitsolution@gmail.com', 8988, 'USED', '2023-12-10'),
(72, 'revcoreitsolution@gmail.com', 9875, 'USED', '2023-12-10'),
(73, 'revcoreitsolution@gmail.com', 7491, 'USED', '2023-12-10'),
(74, 'gmfacistol@outlook.com', 6816, 'UNUSED', '2023-12-18'),
(75, 'gmfacistol@outlook.com', 9079, 'USED', '2023-12-19'),
(76, 'gmfacistol@outlook.com', 9059, 'UNUSED', '2023-12-19'),
(77, 'gmfacistol@outlook.com', 7797, 'UNUSED', '2023-12-19'),
(78, 'gmfacistol@outlook.com', 8181, 'UNUSED', '2023-12-19'),
(79, 'gmfacistol@outlook.com', 9256, 'USED', '2023-12-20'),
(80, 'gmfacistol@outlook.com', 6985, 'USED', '2023-12-20'),
(81, 'gmfacistol@outlook.com', 7480, 'UNUSED', '2023-12-20'),
(82, 'gmfacistol@outlook.com', 9632, 'USED', '2023-12-20'),
(83, 'revcoreitsolution@gmail.com', 7820, 'UNUSED', '2023-12-21'),
(84, 'hyperdunks@gmail.com', 9085, 'UNUSED', '2024-01-07'),
(85, 'hyperdunks@gmail.com', 7055, 'USED', '2024-01-07'),
(86, 'haypermico@gmail.com', 6745, 'USED', '2024-01-07'),
(87, 'micowillmadeit@gmail.com', 8555, 'USED', '2024-01-07'),
(88, 'haypermico@gmail.com', 8512, 'USED', '2024-01-07'),
(89, 'mico101213@gmail.com', 7959, 'USED', '2024-03-13'),
(90, 'mico101213@gmail.com', 7935, 'USED', '2024-03-13'),
(91, 'revcoreitsolution@gmail.com', 8663, 'USED', '2024-03-13'),
(92, 'revcoreitsolution@gmail.com', 7301, 'USED', '2024-03-13'),
(93, 'gmfacistol@outlook.com', 9713, 'USED', '2024-03-13'),
(94, 'gmfacistol@outlook.com', 7594, 'USED', '2024-03-14'),
(95, 'revcoreitsolution@gmail.com', 7076, 'USED', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_store_services`
--

CREATE TABLE `tbl_user_store_services` (
  `sid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `category` varchar(250) NOT NULL,
  `servicename` varchar(250) NOT NULL,
  `service_availability` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_store_services`
--

INSERT INTO `tbl_user_store_services` (`sid`, `code`, `category`, `servicename`, `service_availability`, `image`) VALUES
(1, 9777, 'CAR SERVICES', 'CAR MECHANICS', 'AVAILABLE', 'UserCompanyDetails/9777/New Project (2).png'),
(2, 9777, 'CAR SERVICES', 'CHANGE ENGINE', 'AVAILABLE', 'UserCompanyDetails/9777/service1.png'),
(3, 9777, 'CAR SERVICES', 'CHANGE OIL', 'AVAILABLE', 'UserCompanyDetails/9777/New Project (1).png'),
(4, 9777, 'CAR SERVICES', 'CHANGE BATTERY', 'AVAILABLE', 'UserCompanyDetails/9777/New Project (2).png'),
(5, 9603, 'CAR SERVICES', 'CAR WASH', 'AVAILABLE', 'UserCompanyDetails/9603/services.png'),
(6, 9603, 'CAR SERVICES', 'CAR CHANGE', 'AVAILABLE', 'UserCompanyDetails/9603/service1.png'),
(7, 8589, 'CAR SERVICES', 'CAR WASH', 'AVAILABLE', 'UserCompanyDetails/8589/New Project (1).png'),
(8, 8589, 'CAR SERVICES', 'CAR ENGINE', 'AVAILABLE', 'UserCompanyDetails/8589/New Project (2).png'),
(9, 7406, 'CAR ZYKE', 'ZYKE WASH', 'AVAILABLE', 'UserCompanyDetails/7406/New Project (1).png'),
(10, 7406, 'JP WASH', 'JP ENGINES', 'AVAILABLE', 'UserCompanyDetails/7406/New Project (2).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_data`
--
ALTER TABLE `location_data`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `remember_me_tokens`
--
ALTER TABLE `remember_me_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_assigned_employee`
--
ALTER TABLE `tbl_assigned_employee`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `tbl_booking_history`
--
ALTER TABLE `tbl_booking_history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `tbl_company_employee`
--
ALTER TABLE `tbl_company_employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_company_registration_credentials`
--
ALTER TABLE `tbl_company_registration_credentials`
  ADD PRIMARY KEY (`tcpid`);

--
-- Indexes for table `tbl_company_rental_setting`
--
ALTER TABLE `tbl_company_rental_setting`
  ADD PRIMARY KEY (`raid`);

--
-- Indexes for table `tbl_information_image`
--
ALTER TABLE `tbl_information_image`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_service_rating`
--
ALTER TABLE `tbl_service_rating`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_store_service_pricing`
--
ALTER TABLE `tbl_store_service_pricing`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_booking`
--
ALTER TABLE `tbl_user_booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_user_company_deposit`
--
ALTER TABLE `tbl_user_company_deposit`
  ADD PRIMARY KEY (`dpid`);

--
-- Indexes for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_information_identification`
--
ALTER TABLE `tbl_user_information_identification`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_user_information_store`
--
ALTER TABLE `tbl_user_information_store`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_user_message`
--
ALTER TABLE `tbl_user_message`
  ADD PRIMARY KEY (`meid`);

--
-- Indexes for table `tbl_user_monthly_payment_history`
--
ALTER TABLE `tbl_user_monthly_payment_history`
  ADD PRIMARY KEY (`rpid`);

--
-- Indexes for table `tbl_user_promo`
--
ALTER TABLE `tbl_user_promo`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_user_store_services`
--
ALTER TABLE `tbl_user_store_services`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location_data`
--
ALTER TABLE `location_data`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `remember_me_tokens`
--
ALTER TABLE `remember_me_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_assigned_employee`
--
ALTER TABLE `tbl_assigned_employee`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_booking_history`
--
ALTER TABLE `tbl_booking_history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_company_employee`
--
ALTER TABLE `tbl_company_employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_company_registration_credentials`
--
ALTER TABLE `tbl_company_registration_credentials`
  MODIFY `tcpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_company_rental_setting`
--
ALTER TABLE `tbl_company_rental_setting`
  MODIFY `raid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_information_image`
--
ALTER TABLE `tbl_information_image`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service_rating`
--
ALTER TABLE `tbl_service_rating`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_store_service_pricing`
--
ALTER TABLE `tbl_store_service_pricing`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user_booking`
--
ALTER TABLE `tbl_user_booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_company_deposit`
--
ALTER TABLE `tbl_user_company_deposit`
  MODIFY `dpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user_information_identification`
--
ALTER TABLE `tbl_user_information_identification`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user_information_store`
--
ALTER TABLE `tbl_user_information_store`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_message`
--
ALTER TABLE `tbl_user_message`
  MODIFY `meid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_monthly_payment_history`
--
ALTER TABLE `tbl_user_monthly_payment_history`
  MODIFY `rpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_promo`
--
ALTER TABLE `tbl_user_promo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_user_store_services`
--
ALTER TABLE `tbl_user_store_services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;