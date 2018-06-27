-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 01:40 PM
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
(1, 'dfgdfg', '0000-00-00', '44646', '', '0', '', '', '', 'test', '01234567890', '', '', 'raj@gmail.com', '', 'test test', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-28 01:23:02', 'PENDING'),
(2, 'dfgdfg', '0000-00-00', '44646', '', '0', '', '', '', 'test', '01234567890', '', '', 'raj@gmail.com', '', 'test test', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-28 01:23:25', 'PENDING'),
(3, 'dfgdfg', '0000-00-00', '44646', '', '0', '', '', '', 'test', '01234567890', '', '', 'raj@gmail.com', '', 'test test', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-28 01:26:41', 'PENDING');

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
(1, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test test', '789797', '2018-04-25', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 1),
(2, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ertert', NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 1);

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
  `emp_no` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `emp_no`, `created`, `modified`) VALUES
(1, '123', 'ADMIN', 'admin', 'FALSE', '2018-05-26 08:40:26', 'AIA', '', '', 0, '2018-03-22 20:48:33', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aia_reg_form`
--
ALTER TABLE `tbl_aia_reg_form`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_children_details`
--
ALTER TABLE `tbl_children_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_declaration_details`
--
ALTER TABLE `tbl_declaration_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_spouse_details`
--
ALTER TABLE `tbl_spouse_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
