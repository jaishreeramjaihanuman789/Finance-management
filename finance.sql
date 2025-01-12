-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 11:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_request`
--

CREATE TABLE `account_request` (
  `ac_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `qualifiction` varchar(100) NOT NULL,
  `accupation` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin_code` int(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `adharcard` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_request`
--

INSERT INTO `account_request` (`ac_id`, `fname`, `mname`, `lname`, `dob`, `age`, `qualifiction`, `accupation`, `address`, `city`, `pin_code`, `contact_no`, `email_id`, `adharcard`, `status`) VALUES
(5, 'Santosh', 's', 'K', '1988-08-04', 25, 'BCA', 'abcd', 'Dharwad', 'Dharwad', 580006, '9886631818', 'san@gmail.com', '0', 'Rejected'),
(6, 'raghu', 'g', 'kulkarni', '2007-06-06', 26, 'mca', 'eng', 'bgm', 'bgm', 591352, '9632208463', 'raghu@gmail.com', '0', 'Approved'),
(9, 'ranjita', 'g', 'h', '201994-01-01', 25, 'MCA', 'be', 'bgm', 'bgm', 789456, '9632208463', 'r@gmail.com', '2147483647', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(10) NOT NULL,
  `customer_full_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `email_id` varchar(15) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `customer_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_full_name`, `gender`, `occupation`, `address`, `city`, `email_id`, `contact_no`, `customer_code`) VALUES
(1, 'Santosh K', 'male', 'abc', 'Dharwad', 'Dharwad', 'san@gmai.com', 9886631818, 'CUST1'),
(2, 'Ranjith', 'male', 'Student', 'Daneshwari nagar ', 'Dharwad', 'ranjithpatil143', 6362313052, 'CUST2'),
(3, 'Arun', 'male', 'Politician', 'Sattur', 'Dharwad', 'arunarakeri24@g', 8892915924, 'CUST3'),
(4, 'Sachin', 'male', 'Student', 'Vanasiri nagar', 'Dharwad', 'sachinshetter27', 8123796301, 'CUST4'),
(5, 'Prathvish', 'male', 'Student', 'kundapur', 'kundapur', 'prathvishdevadi', 9535263386, 'CUST5'),
(6, 'PRASANNA', 'male', 'Student', 'SATTUR', 'Dharwad', 'prasanna@gmail.', 9988745846, 'CUST6');

-- --------------------------------------------------------

--
-- Table structure for table `loan_allot`
--

CREATE TABLE `loan_allot` (
  `loan_allot_id` int(10) NOT NULL,
  `loan_id` varchar(20) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `allot_date` date NOT NULL,
  `allot_amt` int(10) NOT NULL,
  `duration(month)` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_allot`
--

INSERT INTO `loan_allot` (`loan_allot_id`, `loan_id`, `customer_id`, `allot_date`, `allot_amt`, `duration(month)`) VALUES
(24, '14', '2', '2021-07-27', 100000, 12),
(25, '12', '3', '2021-07-27', 70000, 10),
(26, '14', '4', '2021-07-15', 600000, 36),
(27, '14', '5', '2021-06-27', 150000, 12),
(28, '13', '1', '2021-07-19', 900000, 48),
(29, '13', '1', '2021-07-28', 10000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `loan_id` int(20) NOT NULL,
  `loan_name` varchar(50) NOT NULL,
  `loan_desc` varchar(50) NOT NULL,
  `loan_duration` int(11) NOT NULL,
  `loan_ins` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`loan_id`, `loan_name`, `loan_desc`, `loan_duration`, `loan_ins`, `status`) VALUES
(12, 'Gold', 'For the purpose of Gold', 12, '7.7', 'Active'),
(13, 'Home ', 'For the purpose of Home', 12, '1.0', 'Active'),
(14, 'Vehicle', 'Dream Vehicle', 9, '5.6', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `loan_request`
--

CREATE TABLE `loan_request` (
  `loan_request_id` int(20) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `loan_id` int(10) NOT NULL,
  `request_discription` varchar(60) NOT NULL,
  `request_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_request`
--

INSERT INTO `loan_request` (`loan_request_id`, `customer_id`, `loan_id`, `request_discription`, `request_date`) VALUES
(1, 20, 1, 'aa', '2020-02-02'),
(2, 1, 12, 'aa', '31-07-21'),
(3, 2, 12, 'aaaaaaaa', '31-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hintq` varchar(100) NOT NULL,
  `hinta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hintq`, `hinta`) VALUES
('admin', '123456', 'admin', 'who i am', 'admin'),
('CUST1', 'CUST1', 'customer', 'Enter Ur Contact No', '9886631818'),
('ACODE10', 'ACODE10', 'agent', 'Enter contact no', '9886631818'),
('CUST2', 'CUST2', 'customer', 'Enter Ur Contact No', '6362313052'),
('CUST3', 'CUST3', 'customer', 'Enter Ur Contact No', '8892915924'),
('CUST4', 'CUST4', 'customer', 'Enter Ur Contact No', '8123796301'),
('CUST5', 'CUST5', 'customer', 'Enter Ur Contact No', '9535263386'),
('ACODE1', 'ACODE1', 'agent', 'Enter contact no', '9740758517'),
('ACODE12', 'ACODE12', 'agent', 'Enter contact no', '9967853490'),
('CUST6', 'CUST6', 'customer', 'Enter Ur Contact No', '9988745846');

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_agent`
--

CREATE TABLE `pigmy_agent` (
  `pigmy_agent_id` int(11) NOT NULL,
  `pigmy_agent_name` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(15) NOT NULL,
  `email_id` varchar(15) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `agent_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigmy_agent`
--

INSERT INTO `pigmy_agent` (`pigmy_agent_id`, `pigmy_agent_name`, `gender`, `address`, `email_id`, `contact_no`, `agent_code`) VALUES
(11, 'Mithun', 'male', 'dharwad', 'mithun@gmail.co', 9740758517, 'ACODE1'),
(12, 'Abhimanyu', 'male', 'Hubli', 'abhimanyu@gmail', 9967853490, 'ACODE12');

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_collect`
--

CREATE TABLE `pigmy_collect` (
  `pigmy_collect_id` int(25) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `pigmy_agent_id` int(11) NOT NULL,
  `collect_amt` bigint(10) NOT NULL,
  `collect_date` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `references_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigmy_collect`
--

INSERT INTO `pigmy_collect` (`pigmy_collect_id`, `customer_id`, `pigmy_agent_id`, `collect_amt`, `collect_date`, `time`, `references_no`) VALUES
(2, '1', 11, 100, '2021-07-28', '15:31:', 1),
(3, '3', 11, 100, '2021-07-28', '15:34:', 2),
(4, '1', 11, 100, '2021-07-30', '20:00:', 3),
(5, '1', 11, 500, '2021-07-30', '20:02:', 4),
(6, '1', 12, 200, '2021-07-31', '08:06:', 5),
(7, '2', 12, 7800, '2021-07-31', '08:08:', 6),
(8, '2', 0, 100, '2021-07-31', '08:09:', 7),
(9, '5', 11, 6500, '2021-07-31', '15:35:', 8),
(10, '5', 12, 2700, '2021-07-31', '15:52:', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_ins_rates`
--

CREATE TABLE `pigmy_ins_rates` (
  `pigmy_ins_rates_id` int(11) NOT NULL,
  `pigmy_ins_name` varchar(50) NOT NULL,
  `interest_rate` int(11) NOT NULL,
  `duration(month)` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigmy_ins_rates`
--

INSERT INTO `pigmy_ins_rates` (`pigmy_ins_rates_id`, `pigmy_ins_name`, `interest_rate`, `duration(month)`) VALUES
(20, 'Deposit', 6, '12'),
(21, 'Home', 5, '24'),
(22, 'Car', 7, '18'),
(23, 'gold', 9, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_request`
--
ALTER TABLE `account_request`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `loan_allot`
--
ALTER TABLE `loan_allot`
  ADD PRIMARY KEY (`loan_allot_id`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_request`
--
ALTER TABLE `loan_request`
  ADD PRIMARY KEY (`loan_request_id`);

--
-- Indexes for table `pigmy_agent`
--
ALTER TABLE `pigmy_agent`
  ADD PRIMARY KEY (`pigmy_agent_id`);

--
-- Indexes for table `pigmy_collect`
--
ALTER TABLE `pigmy_collect`
  ADD PRIMARY KEY (`pigmy_collect_id`);

--
-- Indexes for table `pigmy_ins_rates`
--
ALTER TABLE `pigmy_ins_rates`
  ADD PRIMARY KEY (`pigmy_ins_rates_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_request`
--
ALTER TABLE `account_request`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loan_allot`
--
ALTER TABLE `loan_allot`
  MODIFY `loan_allot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
  MODIFY `loan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loan_request`
--
ALTER TABLE `loan_request`
  MODIFY `loan_request_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pigmy_agent`
--
ALTER TABLE `pigmy_agent`
  MODIFY `pigmy_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pigmy_collect`
--
ALTER TABLE `pigmy_collect`
  MODIFY `pigmy_collect_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pigmy_ins_rates`
--
ALTER TABLE `pigmy_ins_rates`
  MODIFY `pigmy_ins_rates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
