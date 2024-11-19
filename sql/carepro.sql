-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 10:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(200) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `aphone` int(15) NOT NULL,
  `aaddress` varchar(200) NOT NULL,
  `adminRegisterDate` date NOT NULL DEFAULT current_timestamp(),
  `role` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `firstName`, `lastName`, `aphone`, `aaddress`, `adminRegisterDate`, `role`, `email`, `password`) VALUES
(1, 'kirulu', 'chamika', 712030450, 'matara', '2024-09-25', 'Super Admin', 'admin@gmail.com', '123'),
(3, 'Gamindu', 'Kalmadu', 71452454, 'Matara,sri lanka.', '2024-09-27', 'Supervisor', 'gamidu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `annualfee`
--

CREATE TABLE `annualfee` (
  `feeID` int(200) NOT NULL,
  `UID` int(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `transactionID` varchar(11) NOT NULL,
  `paytdate` date NOT NULL DEFAULT current_timestamp(),
  `paytime` time NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annualfee`
--

INSERT INTO `annualfee` (`feeID`, `UID`, `amount`, `transactionID`, `paytdate`, `paytime`, `Status`) VALUES
(1, 7, 4000, 'QW5000', '2024-10-04', '03:27:58', 'Declined'),
(6, 7, 30000, 'QW5003', '2024-10-05', '16:25:41', 'Pending'),
(7, 7, 5000, 'RE3493', '2024-10-05', '16:26:03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `claimID` int(200) NOT NULL,
  `UID` int(200) NOT NULL,
  `filereferance` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `claimdate` date NOT NULL DEFAULT current_timestamp(),
  `claimtime` time NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`claimID`, `UID`, `filereferance`, `note`, `claimdate`, `claimtime`, `Status`) VALUES
(1, 7, 'QB5003', 'need to claim, for pay a hospital bill', '2024-09-25', '14:45:59', 'Approved'),
(8, 7, 'YU9543', 'Accident Claim', '2024-10-05', '16:28:24', 'Pending'),
(9, 7, 'UE35223', 'Need to pay bill', '2024-10-05', '16:29:00', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaintID` int(200) NOT NULL,
  `UID` int(200) NOT NULL,
  `comdate` date NOT NULL DEFAULT current_timestamp(),
  `comtime` time NOT NULL DEFAULT current_timestamp(),
  `type` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaintID`, `UID`, `comdate`, `comtime`, `type`, `description`) VALUES
(4, 7, '2024-10-05', '16:30:10', 'Complaint', 'Can i pay annual Payment online ?'),
(5, 7, '2024-10-05', '16:31:04', 'Other', 'Good Looking interface !'),
(6, 7, '2024-10-11', '10:57:20', 'Information', 'nice interface');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `inquiryType` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `name`, `number`, `email`, `inquiryType`, `message`, `date`, `time`) VALUES
(1, 'Kirulu', 713857204, 'info@gmail.com', 'Information', 'I need to know about new plans .', '2024-10-03', '01:48:18'),
(2, 'Saman Kumara', 717408323, 'New@gmail.com', 'Complaint', 'Please send me new plan details !', '2024-10-05', '17:45:09'),
(3, 'hiruna', 711278899, 'vmnk@gmail.com', 'Complaint', 'jmgk', '2024-10-11', '11:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(200) NOT NULL,
  `employeeName` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `employeeName`, `dob`, `contact`, `role`) VALUES
(1, 'D.Saman Kumara', '1977-06-15', '0714325265', 'Doctor'),
(3, 'L.Stefan Sanjeewa', '1994-02-15', '0714567325', 'Agent'),
(6, 'W.Shakya Samadi', '1985-10-22', '0414857809', 'Doctor'),
(7, 'K.Suneera De Silva', '1983-06-14', '076508275', 'Agent'),
(8, 'K.wishmi Samanmalee', '1967-06-13', '074504837', 'Agent');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(30) NOT NULL,
  `adminID` int(30) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `adminID`, `notification`, `date`, `time`) VALUES
(7, 1, 'Check New Features !', '2024-09-27', '00:00:00'),
(12, 1, 'Notification Button Added !', '2024-10-03', '15:31:02'),
(13, 1, 'Update available !', '2024-10-04', '07:38:59'),
(15, 1, 'Fix SomeBugs !', '2024-10-07', '10:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `planID` varchar(30) NOT NULL,
  `planName` varchar(200) NOT NULL,
  `planFee` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`planID`, `planName`, `planFee`, `duration`) VALUES
('p1', 'Individual & Family Plans', 'Rs.300000.00', '2 Year'),
('p2', 'Group Health Insurance Plans', 'Rs.500000.00', '1 Year'),
('p3', 'Medicare & Medicaid Plans', 'Rs.10000.00', '1 Year'),
('p4', 'Short-Term Health Insurance', 'Rs.75000.00', '6 Months'),
('p5', 'Emergency Services', 'Rs.200000.00', '1 Year'),
('p6', 'Elder Citizen Coverage', 'Rs.125000.00', '1 Year');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_No` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `planID` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `first_name`, `last_name`, `gender`, `phone_No`, `email`, `address`, `dob`, `planID`, `password`) VALUES
(7, 'Kirulu', 'Chamika', 'male', 712098450, 'info@gmail.com', 'Matara,Srilanka', '2002-02-12', 'p5', '123'),
(8, 'Gamindu', 'Kalmadu', 'male', 713982708, 'Gamindu@gmail.com', 'Godauda, Sri Lanka', '2002-07-17', 'p2', 'gamindu'),
(9, 'Chamudi', 'Amaya', 'female', 764349634, 'amaya@gmail.com', 'Godagama, Sri Lankaa', '2002-10-31', 'p3', 'amaya'),
(10, 'Diani', 'Kaumadi', 'female', 725079275, 'diani@gmail.com', 'Beliatta, Sri Lanka', '2002-11-13', 'p1', 'diani'),
(11, 'Kodni', 'Diyana', 'female', 705875757, 'diyana@gmail.com', 'Walgama, Sri Lanka', '2001-08-04', 'p2', 'diyana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `annualfee`
--
ALTER TABLE `annualfee`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`claimID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`planID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `planID` (`planID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `annualfee`
--
ALTER TABLE `annualfee`
  MODIFY `feeID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `claim`
--
ALTER TABLE `claim`
  MODIFY `claimID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annualfee`
--
ALTER TABLE `annualfee`
  ADD CONSTRAINT `annualfee_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`planID`) REFERENCES `plan` (`planID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
