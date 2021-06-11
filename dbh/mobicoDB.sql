-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:80
-- Generation Time: Jun 11, 2021 at 04:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobicoDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminDetails`
--

CREATE TABLE `adminDetails` (
  `UID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminDetails`
--

INSERT INTO `adminDetails` (`UID`, `user_id`, `username`, `password`) VALUES
(9, 14, 'Afraj', '687722e7aad7a33f386c9f402ab0d4dd'),
(11, 4, 'Amas', '202cb962ac59075b964b07152d234b70'),
(12, 17, 'Farhath', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerName` varchar(200) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tell_No` int(11) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `PNAME` varchar(250) NOT NULL,
  `BNAME` varchar(250) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `DISPLAY` varchar(100) NOT NULL,
  `BATTERY` int(11) NOT NULL,
  `RAM` int(11) NOT NULL,
  `PIC` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `PNAME`, `BNAME`, `PRICE`, `DISPLAY`, `BATTERY`, `RAM`, `PIC`) VALUES
(1, 'I Phone 7 Plus', 'Apple', 999, '5.2Inch', 3000, 4, 'IP7P.png'),
(2, 'I Phone 8', 'Apple', 1222, '4.5Inch', 5000, 4, 'IP8.jpg'),
(3, 'Galaxy S10', 'Samsung', 799, '4.2Inch', 2000, 3, 'SGS10.jpg'),
(6, 'I Phone 12', 'Apple', 2999, '6.1Inch', 2815, 4, 'IP12.jpg'),
(7, 'I Phone 11 Pro Max', 'Apple', 2499, '6.1Inch', 3110, 4, 'IP11PM.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminDetails`
--
ALTER TABLE `adminDetails`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminDetails`
--
ALTER TABLE `adminDetails`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
