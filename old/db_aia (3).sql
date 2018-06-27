-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 03:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aia_details`
--

CREATE TABLE `tbl_aia_details` (
  `id` int(11) NOT NULL,
  `name` text,
  `dob` date NOT NULL,
  `nricnew` text,
  `nricold` text,
  `gender` text,
  `bank_name` text,
  `bank_address` text,
  `occupation` text,
  `house_address` text,
  `house_no` text,
  `office_pno` text,
  `house_pno` text,
  `hemailid` text,
  `bank_acc_no` text,
  `hbank_name` text,
  `spouse_name` text,
  `spouse_nricno` text,
  `spouse_dob` date NOT NULL,
  `children_name` text,
  `children_nricno` text,
  `children_dob` date DEFAULT NULL,
  `declaration_name` text,
  `lt_dn` text,
  `dateof_treatment_decision` text,
  `created_date` datetime NOT NULL,
  `status` varchar(50) DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aia_details`
--

INSERT INTO `tbl_aia_details` (`id`, `name`, `dob`, `nricnew`, `nricold`, `gender`, `bank_name`, `bank_address`, `occupation`, `house_address`, `house_no`, `office_pno`, `house_pno`, `hemailid`, `bank_acc_no`, `hbank_name`, `spouse_name`, `spouse_nricno`, `spouse_dob`, `children_name`, `children_nricno`, `children_dob`, `declaration_name`, `lt_dn`, `dateof_treatment_decision`, `created_date`, `status`) VALUES
(1, 'Rajkumar', '1990-12-06', '789654321', '123456781', 'Male', 'Test', 'Test', 'Test', 'Test', '987654', '123592', '1855656', 'test@gmail.com', '7896540', 'Test', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-29 07:29:48', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aia_reg_form`
--

CREATE TABLE `tbl_aia_reg_form` (
  `id` int(15) NOT NULL,
  `policyno` int(50) DEFAULT NULL,
  `mbrno` text,
  `dpntno` text,
  `member` text,
  `membername` text,
  `ic` text,
  `rel` text,
  `sex` text,
  `companycode` text,
  `companyname` text,
  `branch` text,
  `costcenter` text,
  `internetaddress` text,
  `bankcode` text,
  `accountnumber` text,
  `dob` date NOT NULL,
  `age` int(3) DEFAULT NULL,
  `staffid` text,
  `employdate` date NOT NULL,
  `mastermember` text,
  `mastername` text,
  `masteric` text,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `coverage` text,
  `plan` text,
  `plandesc` text,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_children_details`
--

CREATE TABLE `tbl_children_details` (
  `id` int(11) NOT NULL,
  `name` text,
  `dob` date NOT NULL,
  `nricnew` text,
  `nricold` text,
  `gender` text,
  `bank_name` text,
  `bank_address` text,
  `occupation` text,
  `house_address` text,
  `house_no` text,
  `office_pno` text,
  `house_pno` text,
  `hemailid` text,
  `bank_acc_no` text,
  `hbank_name` text,
  `spouse_name` text,
  `spouse_nricno` text,
  `spouse_dob` date NOT NULL,
  `children_name` text,
  `children_nricno` text,
  `children_dob` date DEFAULT NULL,
  `declaration_name` text,
  `lt_dn` text,
  `dateof_treatment_decision` text,
  `created_date` datetime NOT NULL,
  `aia_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_children_details`
--

INSERT INTO `tbl_children_details` (`id`, `name`, `dob`, `nricnew`, `nricold`, `gender`, `bank_name`, `bank_address`, `occupation`, `house_address`, `house_no`, `office_pno`, `house_pno`, `hemailid`, `bank_acc_no`, `hbank_name`, `spouse_name`, `spouse_nricno`, `spouse_dob`, `children_name`, `children_nricno`, `children_dob`, `declaration_name`, `lt_dn`, `dateof_treatment_decision`, `created_date`, `aia_id`) VALUES
(1, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'C1', '7895326', '2000-12-12', NULL, NULL, NULL, '0000-00-00 00:00:00', 1),
(2, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'C2', '9856656', '2001-11-11', NULL, NULL, NULL, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_declaration_details`
--

CREATE TABLE `tbl_declaration_details` (
  `id` int(11) NOT NULL,
  `name` text,
  `localtreatment_doctorname` text,
  `dateoftreatment_decision` text,
  `aia_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_declaration_details`
--

INSERT INTO `tbl_declaration_details` (`id`, `name`, `localtreatment_doctorname`, `dateoftreatment_decision`, `aia_id`) VALUES
(1, 'D1', 'Test', '2010-12-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spouse_details`
--

CREATE TABLE `tbl_spouse_details` (
  `id` int(11) NOT NULL,
  `name` text,
  `dob` date NOT NULL,
  `nricnew` text,
  `nricold` text,
  `gender` text,
  `bank_name` text,
  `bank_address` text,
  `occupation` text,
  `house_address` text,
  `house_no` text,
  `office_pno` text,
  `house_pno` text,
  `hemailid` text,
  `bank_acc_no` text,
  `hbank_name` text,
  `spouse_name` text,
  `spouse_nricno` text,
  `spouse_dob` date NOT NULL,
  `children_name` text,
  `children_nricno` text,
  `children_dob` date DEFAULT NULL,
  `declaration_name` text,
  `lt_dn` text,
  `dateof_treatment_decision` text,
  `created_date` datetime NOT NULL,
  `aia_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_spouse_details`
--

INSERT INTO `tbl_spouse_details` (`id`, `name`, `dob`, `nricnew`, `nricold`, `gender`, `bank_name`, `bank_address`, `occupation`, `house_address`, `house_no`, `office_pno`, `house_pno`, `hemailid`, `bank_acc_no`, `hbank_name`, `spouse_name`, `spouse_nricno`, `spouse_dob`, `children_name`, `children_nricno`, `children_dob`, `declaration_name`, `lt_dn`, `dateof_treatment_decision`, `created_date`, `aia_id`) VALUES
(1, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S1', '8794944', '1994-12-15', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logged_in` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `aia_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `aia_id`, `created`, `modified`) VALUES
(1, '123', 'ADMIN', 'admin', 'TRUE', '2018-05-29 06:26:05', 'AIA', '', '', 0, '2018-03-22 20:48:33', '0000-00-00 00:00:00'),
(2, '06/12/1990', 'MEMBER', '789654321', 'FALSE', '2018-05-29 07:38:44', 'Rajkumar', '', '', 1, '2018-05-29 05:36:59', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aia_details`
--
ALTER TABLE `tbl_aia_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aia_reg_form`
--
ALTER TABLE `tbl_aia_reg_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_children_details`
--
ALTER TABLE `tbl_children_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_declaration_details`
--
ALTER TABLE `tbl_declaration_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_spouse_details`
--
ALTER TABLE `tbl_spouse_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aia_details`
--
ALTER TABLE `tbl_aia_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_aia_reg_form`
--
ALTER TABLE `tbl_aia_reg_form`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_children_details`
--
ALTER TABLE `tbl_children_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_declaration_details`
--
ALTER TABLE `tbl_declaration_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_spouse_details`
--
ALTER TABLE `tbl_spouse_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
