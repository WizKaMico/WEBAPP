-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 05:03 AM
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
(8, 8677, 'uploads/1697126297_8677.jpg');

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
(9, 'Zykecastro8@gmail.com', '953159918922', '21232f297a57a5a743894a0e4a801fc3', 3, 8677, 'VERIFIED', '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_booking`
--

CREATE TABLE `tbl_user_booking` (
  `bid` int(11) NOT NULL,
  `sid` int(50) NOT NULL,
  `booked_by` int(50) NOT NULL,
  `car_model` varchar(250) NOT NULL,
  `car_brand` varchar(250) NOT NULL,
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

INSERT INTO `tbl_user_booking` (`bid`, `sid`, `booked_by`, `car_model`, `car_brand`, `date_appointment`, `time_appointment`, `photo`, `promo_code`, `status`, `booking_date`) VALUES
(1, 2, 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '2023-10-11', '20:18', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'PROMO10', 'PENDING', '2023-10-10'),
(2, 6, 7676, 'SUZUKI ESPRESSO', 'SUZUKI', '2023-10-11', '20:54', 'UserClientCarDetails/7676/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-10-10'),
(3, 3, 7676, 'Suzuki Espresso', 'Suzuki', '2023-10-12', '15:51', 'UserClientCarDetails/7676/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-10-11'),
(4, 6, 7364, 'SUZUKI ESPRESSO', 'SUZUKI', '2023-10-13', '22:13', 'UserClientCarDetails/7364/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-10-11'),
(5, 8, 6973, 'SUZUKI MARUTI', 'MARUTI ESPRESSO', '2023-10-12', '23:24', 'UserClientCarDetails/6973/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-10-11'),
(6, 9, 8677, 'SUZUKI ESPRESSO', 'SUZUKI', '2023-10-13', '12:00', 'UserClientCarDetails/8677/suzuki-s-presso-2021-main-1647945552.jpg', 'NOT AVAILABLE', 'PENDING', '2023-10-12');

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
(9, 8677, 'Zyke', 'Castro', 'Catro', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'Western Bicutan', '10 U206 TARRAVILLE SUBDIVISION');

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
(8, 8677, 'SSS', '237287382783287832', 'UserDetails//New Project (2).png');

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
(3, 9603, 'CARWASH MOOD', 'National Capital Region (NCR)', 'Ncr, Second District', 'Quezon City', 'Santa Lucia', '10 U206 TARRAVILLE SUBDIVISION', ''),
(4, 8589, 'TESTWASH CARS', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'City Of Muntinlupa', 'Bayanan', '10 U206 TARRAVILLE SUBDIVISION', ''),
(5, 7406, 'Gameplan EME', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'Taguig City', 'South Signal Village', '10 U206 TARRAVILLE SUBDIVISION', '');

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
(23, 'helloblob@gmail.com', 6764, 'USED', '2023-10-13');

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
-- AUTO_INCREMENT for table `tbl_information_image`
--
ALTER TABLE `tbl_information_image`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_booking`
--
ALTER TABLE `tbl_user_booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_information_identification`
--
ALTER TABLE `tbl_user_information_identification`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_information_store`
--
ALTER TABLE `tbl_user_information_store`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_promo`
--
ALTER TABLE `tbl_user_promo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user_store_services`
--
ALTER TABLE `tbl_user_store_services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
