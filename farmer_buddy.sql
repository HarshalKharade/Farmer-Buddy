-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 08:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `no` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`no`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Patilji', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crop`
--

CREATE TABLE `tbl_crop` (
  `cno` int(11) NOT NULL,
  `fcode` int(11) DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `variety` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_crop`
--

INSERT INTO `tbl_crop` (`cno`, `fcode`, `fname`, `Date`, `duration`, `variety`) VALUES
(1, 10, 'Raviraj Patil', '2020-12-18', '18 months(New)', 'Co 86032(Nira)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

CREATE TABLE `tbl_farmer` (
  `fcode` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `area` text DEFAULT NULL,
  `proof` text DEFAULT NULL,
  `bankname` text DEFAULT NULL,
  `accno` bigint(20) DEFAULT NULL,
  `ifsccode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_farmer`
--

INSERT INTO `tbl_farmer` (`fcode`, `fname`, `Date`, `mno`, `email`, `password`, `area`, `proof`, `bankname`, `accno`, `ifsccode`) VALUES
(1, 'Kharade Patil ', '2022-09-16', 9876543210, 'patil@gmail.com', 'Patilji', 'Karjat', 'Adhar Card', 'SBI', 456321987, 'SBI000345'),
(2, 'Mohsin Inamdar', '2022-09-18', 9638527410, 'inamdarmohsin@gmail.com', 'Pass@123', 'Supa', 'Adhar Card', 'CBI', 45632198321, 'CBI000345'),
(3, 'Dada Avchar', '2022-09-18', 9874563210, 'patilji.6581@gmail.com', 'abc@123', 'Pune', 'Adhar Card', 'CBI', 159456789, 'CBI000346'),
(10, 'Raviraj Patil', '2022-09-18', 9877419634, 'mr.patilji@gmail.com', '654321', 'Rahuri', 'Adhar Card', 'RBI', 45687120, 'RBI004563');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer_bill`
--

CREATE TABLE `tbl_farmer_bill` (
  `bno` int(11) NOT NULL,
  `fcode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `oname` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `ton` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `total_amt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_farmer_bill`
--

INSERT INTO `tbl_farmer_bill` (`bno`, `fcode`, `Date`, `oname`, `fname`, `ton`, `rate`, `total_amt`) VALUES
(5, 10, '2022-09-18', '', '', 150, 2800, 420000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer_sucal`
--

CREATE TABLE `tbl_farmer_sucal` (
  `fno` int(11) NOT NULL,
  `fcode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `ton` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_farmer_sucal`
--

INSERT INTO `tbl_farmer_sucal` (`fno`, `fcode`, `Date`, `fname`, `ton`) VALUES
(1, 1, '2022-09-18', 'Kharade Patil ', 100),
(2, 10, '2022-09-22', 'Raviraj Patil', 150);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel`
--

CREATE TABLE `tbl_fuel` (
  `fno` int(11) NOT NULL,
  `ocode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `fuel_lit` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner`
--

CREATE TABLE `tbl_owner` (
  `ocode` int(11) NOT NULL,
  `oname` text DEFAULT NULL,
  `vehicleno` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `area` text DEFAULT NULL,
  `advance` int(11) DEFAULT NULL,
  `proof` text DEFAULT NULL,
  `bankname` text DEFAULT NULL,
  `accno` bigint(20) DEFAULT NULL,
  `ifsccode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`ocode`, `oname`, `vehicleno`, `Date`, `mno`, `email`, `password`, `area`, `advance`, `proof`, `bankname`, `accno`, `ifsccode`) VALUES
(1, 'Ram Jadhav', 'MH14EU6106', '2022-09-18', 9871234560, 'mr.patilji@gmail.com', '123456', 'Pune', 10000, 'Adhar Card', 'RBI', 45687123, 'RBI004563');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner_bill`
--

CREATE TABLE `tbl_owner_bill` (
  `bno` int(11) NOT NULL,
  `ocode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `oname` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `ton` int(11) DEFAULT NULL,
  `trans_rate` int(11) DEFAULT NULL,
  `labour_rate` int(11) DEFAULT NULL,
  `t_total_amt` int(11) DEFAULT NULL,
  `l_total_amt` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner_sucal`
--

CREATE TABLE `tbl_owner_sucal` (
  `ono` int(11) NOT NULL,
  `ocode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `Vehi_no` text DEFAULT NULL,
  `ton` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD UNIQUE KEY `user` (`username`) USING HASH;

--
-- Indexes for table `tbl_crop`
--
ALTER TABLE `tbl_crop`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `tbl_farmer`
--
ALTER TABLE `tbl_farmer`
  ADD PRIMARY KEY (`fcode`);

--
-- Indexes for table `tbl_farmer_bill`
--
ALTER TABLE `tbl_farmer_bill`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `tbl_farmer_sucal`
--
ALTER TABLE `tbl_farmer_sucal`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD PRIMARY KEY (`ocode`);

--
-- Indexes for table `tbl_owner_bill`
--
ALTER TABLE `tbl_owner_bill`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `tbl_owner_sucal`
--
ALTER TABLE `tbl_owner_sucal`
  ADD PRIMARY KEY (`ono`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
