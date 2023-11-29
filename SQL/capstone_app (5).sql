-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 04:51 AM
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
(16, '7584-20231128', 'PENDING', '2023-11-28');

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
(3, 9603, 'uploads/1696942038_9603.jpg'),
(4, 7676, 'uploads/1696942425_7676.jpg'),
(5, 8589, 'uploads/1697037563_8589.jpg'),
(6, 6973, 'uploads/1697037818_6973.jpg'),
(7, 7406, 'uploads/1697125459_7406.jpg'),
(8, 8677, 'uploads/1697126297_8677.jpg'),
(9, 7267, 'uploads/1700581789_7267.jpg'),
(10, 7873, 'uploads/1700582047_7873.jpg');

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
(3, 'SPORTS CAR', 500, 5);

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
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `email`, `phone`, `password`, `designation`, `code`, `status`, `date_created`) VALUES
(1, 'tricore012@gmail.com', '9531599179', '21232f297a57a5a743894a0e4a801fc3', 2, 9777, 'VERIFIED', '2023-10-10'),
(2, 'revcoreitsolution@gmail.com', '9983032537', '21232f297a57a5a743894a0e4a801fc3', 3, 7364, 'VERIFIED', '2023-10-10'),
(3, 'gmfacistol@outlook.com', '09166513189', '21232f297a57a5a743894a0e4a801fc3', 2, 9603, 'VERIFIED', '2023-10-10'),
(4, 'mico101213@gmail.com', '9903391823', '21232f297a57a5a743894a0e4a801fc3', 3, 7676, 'VERIFIED', '2023-10-10'),
(5, 'admin@gmail.com', '0999228238', '21232f297a57a5a743894a0e4a801fc3', 1, 8990, 'VERIFIED', '2023-09-28'),
(6, 'thenextlevelplay@gmail.com', '09775647711', '21232f297a57a5a743894a0e4a801fc3', 2, 8589, 'VERIFIED', '2023-10-11'),
(7, 'testclient@gmail.com', '09998823232', '21232f297a57a5a743894a0e4a801fc3', 3, 6973, 'VERIFIED', '2023-10-11'),
(8, 'helloblob@gmail.com', '0942652626262', '21232f297a57a5a743894a0e4a801fc3', 2, 7406, 'VERIFIED', '2023-10-12'),
(9, 'Zykecastro8@gmail.com', '953159918922', '21232f297a57a5a743894a0e4a801fc3', 3, 8677, 'VERIFIED', '2023-10-12'),
(10, 'highlordapo@gmail.com', '9531599178', '21232f297a57a5a743894a0e4a801fc3', 3, 7267, 'VERIFIED', '2023-11-21'),
(11, 'helloowner@gmail.com', '95315991881', '21232f297a57a5a743894a0e4a801fc3', 2, 7873, 'VERIFIED', '2023-11-21');

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
(8, 5, '7584-20231128', 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '500', '2023-11-30', '13:55', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-11-28');

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
(3, 9603, 'Gerald Mico', 'Salvador', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION'),
(4, 7676, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bahay Toro', '10 U206 TARRAVILLE SUBDIVISION'),
(5, 8990, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bahay Toro', '10 U206 TARRAVILLE SUBDIVISION'),
(6, 8589, 'Test', 'Test', 'Test', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Bagumbuhay', '10 U206 TARRAVILLE SUBDIVISION'),
(7, 6973, 'Client', 'Client', 'Test', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Bacarra', 'Nambaran', '10 U206 TARRAVILLE SUBDIVISION'),
(8, 7406, 'Gerald', 'Mico', 'Facistol', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Pasay City', 'Barangay 106', '10 U206 TARRAVILLE SUBDIVISION'),
(9, 8677, 'Zyke', 'Castro', 'Catro', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'Western Bicutan', '10 U206 TARRAVILLE SUBDIVISION'),
(10, 7267, 'Gerald', 'Mico', 'Facistol', 'Region II (Cagayan Valley)', 'Batanes', 'Itbayat', 'San Rafael (Idiang)', '10 U206 TARRAVILLE SUBDIVISION'),
(11, 7873, 'Gerald', 'Mico', 'Facistol', 'Region II (Cagayan Valley)', 'Batanes', 'Itbayat', 'Raele', '10 U206 TARRAVILLE SUBDIVISION');

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
(10, 7873, 'PhilHealth', '12782781721871871872', 'UserDetails//chart.png');

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
(3, 9603, 'CARWASH MOOD', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION', 'companyDetails/png-transparent-grand-theft-auto-san-andreas-grand-theft-auto-v-grand-theft-auto-liberty-city-stories-playstation-2-san-andreas-multiplayer-woman-face-hand-people-removebg-preview.png'),
(4, 8589, 'TESTWASH CARS', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'City Of Muntinlupa', 'Bayanan', '10 U206 TARRAVILLE SUBDIVISION', ''),
(5, 7406, 'Gameplan EME', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'South Signal Village', '10 U206 TARRAVILLE SUBDIVISION', ''),
(6, 7873, 'Gameplan Marketing Solutions, Inc.', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Adams', 'Adams (Pob.)', '10 U206 TARRAVILLE SUBDIVISION', '');

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
(1, 6, '9961-20231027', 7364, 3, 'Hello can you help me ? please', '2023-11-22'),
(2, 6, '9961-20231027', 9603, 2, 'What can i help you with ? ', '2023-11-22'),
(3, 6, '9961-20231027', 7364, 3, 'Hello', '2023-11-27'),
(4, 6, '9961-20231027', 7364, 3, 'This is a new chat i wanted to new the facts about my car', '2023-11-27'),
(5, 6, '9961-20231027', 9603, 2, 'Fuck you', '2023-11-27'),
(6, 5, '7335-20231127', 9603, 2, 'wala nang available pree', '2023-11-27'),
(7, 5, '7335-20231127', 7364, 3, 'eh gago kayo', '2023-11-27');

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
(61, 'gmfacistol@outlook.com', 7524, 'USED', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_store_services`
--

CREATE TABLE `tbl_user_store_services` (
  `sid` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `category` varchar(250) NOT NULL,
  `servicename` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_store_services`
--

INSERT INTO `tbl_user_store_services` (`sid`, `code`, `category`, `servicename`, `image`) VALUES
(1, 9777, 'CAR SERVICES', 'CAR MECHANICS', 'UserCompanyDetails/9777/New Project (2).png'),
(2, 9777, 'CAR SERVICES', 'CHANGE ENGINE', 'UserCompanyDetails/9777/service1.png'),
(3, 9777, 'CAR SERVICES', 'CHANGE OIL', 'UserCompanyDetails/9777/New Project (1).png'),
(4, 9777, 'CAR SERVICES', 'CHANGE BATTERY', 'UserCompanyDetails/9777/New Project (2).png'),
(5, 9603, 'CAR SERVICES', 'CAR WASH', 'UserCompanyDetails/9603/services.png'),
(6, 9603, 'CAR SERVICES', 'CAR CHANGE', 'UserCompanyDetails/9603/service1.png'),
(7, 8589, 'CAR SERVICES', 'CAR WASH', 'UserCompanyDetails/8589/New Project (1).png'),
(8, 8589, 'CAR SERVICES', 'CAR ENGINE', 'UserCompanyDetails/8589/New Project (2).png'),
(9, 7406, 'CAR ZYKE', 'ZYKE WASH', 'UserCompanyDetails/7406/New Project (1).png'),
(10, 7406, 'JP WASH', 'JP ENGINES', 'UserCompanyDetails/7406/New Project (2).png');

--
-- Indexes for dumped tables
--

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
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_company_employee`
--
ALTER TABLE `tbl_company_employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_information_image`
--
ALTER TABLE `tbl_information_image`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user_booking`
--
ALTER TABLE `tbl_user_booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user_information_identification`
--
ALTER TABLE `tbl_user_information_identification`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_information_store`
--
ALTER TABLE `tbl_user_information_store`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_message`
--
ALTER TABLE `tbl_user_message`
  MODIFY `meid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user_promo`
--
ALTER TABLE `tbl_user_promo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_user_store_services`
--
ALTER TABLE `tbl_user_store_services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
