-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:80
-- Generation Time: Jul 04, 2021 at 05:13 PM
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
  `password` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminDetails`
--

INSERT INTO `adminDetails` (`UID`, `user_id`, `username`, `password`, `email`, `role`) VALUES
(1, 14, 'Afraj', '687722e7aad7a33f386c9f402ab0d4dd', 'aj@gmail.com', 'Admin'),
(2, 4, 'Amas', '202cb962ac59075b964b07152d234b70', 'ams@yahoo.com', 'Admin'),
(3, 17, 'Farhath', '202cb962ac59075b964b07152d234b70', 'farhath@gmail.com', 'Admin'),
(5, 9, 'Nawrin', '202cb962ac59075b964b07152d234b70', 'Nwrn@gmail.com', 'Editor'),
(26, 19, 'Siyaj', '202cb962ac59075b964b07152d234b70', 'sj@gm.com', 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BID` int(11) NOT NULL,
  `BTITLE` varchar(100) NOT NULL,
  `BBODY` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `password`) VALUES
(2, 'aj@gmail.com', '$2y$10$Y.kx55wrm7Ssd3LWzy7qtOR0fIIfuCrYTdWo3J04mYvQoGgAVSbVa'),
(3, 'nawrin@gmail.com', '$2y$10$ThnDLqY9Q/Usdw6/W/HnxeDiwlXNjZOl2Nx29xG.iM/MDOvMRB9Ei'),
(5, 'afraj@gmail.com', '$2y$10$tcNFyYHQfEA.sM8JxcvETemaVjHlZUmXzAbxnUlbTY0gxLJ6IuNrW'),
(6, 'amas@gmail.com', '$2y$10$DB6F2nUT0nq3rev.4zJm2unIRkppRBVAbFLaks5IPAmpxE1aGE/f6');

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `address1` varchar(2000) NOT NULL,
  `address2` varchar(2000) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`id`, `userid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `zip`, `mobile`) VALUES
(1, 2, 'Afraj', 'M.A.M ', 'aaa', 'ANS', 'FD', 'ASD', '12', '4323221'),
(3, 6, 'M.J.A', 'Amas', 'aa', 'aa', 'aa', 'aa', '111', '121221'),
(4, 5, 'M.A.M ', 'Afraj', 'AJCOMPANY', 'Nangalla,', 'Thulhiriya', 'Warakapola', '123', '35953'),
(5, 3, 'nawrin', 'mani', 'aaa', 'akp', 'Akkaraipatru', 'Akp', '12', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `orderDetails`
--

CREATE TABLE `orderDetails` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `customerID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderItems`
--

CREATE TABLE `orderItems` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `productprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderItems`
--

INSERT INTO `orderItems` (`orderid`, `productid`, `quantity`, `productprice`) VALUES
(0, 1, 1, 67000),
(2, 0, 3, 67000),
(3, 0, 2, 67000),
(4, 0, 2, 199999),
(6, 0, 3, 67000),
(7, 0, 1, 67000),
(8, 0, 2, 67000),
(9, 0, 2, 67000),
(10, 0, 3, 67000),
(27, 0, 2, 67000),
(28, 0, 2, 67000),
(29, 0, 2, 67000),
(30, 0, 2, 67000),
(31, 0, 2, 67000),
(32, 0, 2, 67000),
(33, 0, 2, 67000),
(34, 0, 3, 85000),
(35, 0, 3, 67000),
(36, 0, 1, 67000),
(37, 0, 2, 67000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `paymentmode` varchar(100) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(1, 2, 736000, 'Order Placed', 'COD', '2021-07-04'),
(2, 2, 736000, 'Order Placed', 'COD', '2021-07-04'),
(29, 6, 134000, 'Order Placed', 'COD', '2021-07-04'),
(35, 5, 201000, 'Cancelled', 'COD', '2021-07-04'),
(36, 5, 67000, 'Cancelled', 'COD', '2021-07-04'),
(37, 5, 134000, 'Cancelled', 'Paypal', '2021-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `ordersTracking`
--

CREATE TABLE `ordersTracking` (
  `id` int(11) NOT NULL,
  `orderid` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `reason` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersTracking`
--

INSERT INTO `ordersTracking` (`id`, `orderid`, `status`, `reason`) VALUES
(1, '30', 'cancelled', 'aa'),
(2, '32', 'cancelled', ''),
(7, '37', 'cancelled', 'I Dont Like it anymore\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `PNAME` varchar(250) NOT NULL,
  `BNAME` varchar(250) NOT NULL,
  `CATEGORY` varchar(11) DEFAULT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `STORAGE` varchar(100) DEFAULT NULL,
  `CAMERA` int(11) DEFAULT NULL,
  `DISPLAY` varchar(100) DEFAULT NULL,
  `BATTERY` int(11) DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL,
  `PIC` varchar(250) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `PRODESC` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `PNAME`, `BNAME`, `CATEGORY`, `PRICE`, `STORAGE`, `CAMERA`, `DISPLAY`, `BATTERY`, `RAM`, `PIC`, `STOCK`, `PRODESC`) VALUES
(1, 'I Phone 7 Plus', 'Apple', 'Mobile ', 67000, '128', 12, '5.2 Inch', 3000, 4, 'IP7P.png', 30, 'Apple iPhone 7 Plus smartphone was launched in September 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080x1920 pixels at a pixel density of 401 pixels per inch (ppi). Apple iPhone 7 Plus is powered by a quad-core Apple A10 Fusion processor. It comes with 3GB of RAM. The Apple iPhone 7 Plus runs iOS 10 and is powered by a 2900mAh non-removable battery.\r\n\r\n'),
(2, 'I Phone 8 Plus', 'Apple', 'Mobile ', 85000, '128/256', 12, '4.5 Inch', 5000, 4, 'IP8.png', 5, 'The iPhone 8 Plus is a larger version of the iPhone 8, with a larger screen and battery, more RAM, and a secondary telephoto camera on the rear. It\'s powered by the same A11 Bionic processor as the iPhone X, which has been shown to be exceptionally powerful, especially in tests that can utilise all six cores at the same time. The display now supports True Tone which adjusts its colour temperature to match ambient lighting. You get 64GB of storage on the base variant but can choose a 256GB option which costs more. Your only choices of colours this time around are Space Grey, Silver, and Gold. The iPhone 8 models also feature new glass backs to support wireless charging, while maintaining the IP67 rating for water and dust resistance. Fast wired charging is supported but you only get a basic charger in the box. You can get through a full day of use with a little power to spare thanks to the large battery. '),
(3, 'Galaxy S10', 'Samsung', 'Mobile ', 70000, '64/128', 14, '4.2 Inch', 2000, 3, 'SGS10.png', 3, 'Galaxy S10 by Samsung is amongst the new smartphones that was launched alongside the Samsung Galaxy S10+ and the Samsung Galaxy S10E. ... Samsung Galaxy S10 comes with a 6.1-inch Quad HD+ Dynamic AMOLED Infinity-O Display that has a resolution of 1440 x 3040 pixels and an aspect ratio of 19:9.'),
(6, 'I Phone 12', 'Apple', 'Mobile ', 199999, '256', 12, '6.1Inch', 2815, 4, 'IP12.png', 2, 'The iPhone 12 and iPhone 12 mini are Apple\'s mainstream flagship iPhones for 2020. The phones come in 6.1-inch and 5.4-inch sizes with identical features, including support for faster 5G cellular networks, OLED displays, improved cameras, and Apple\'s latest A14 chip, all in a completely refreshed design.'),
(7, 'I Phone 11 Pro Max', 'Apple', 'Mobile ', 178999, '256', 12, '6.1Inch', 3110, 4, 'IP11PM.png', 3, 'The iPhone 11 Pro has a 5.85 inch (marketed as 5.8 inch) OLED display with a resolution of 2436 × 1125 pixels (2.7 megapixels at 458 ppi), while the iPhone 11 Pro Max has a 6.46 inch (marketed as 6.5 inch) OLED display with a resolution of 2688 × 1242 pixels (3.3 megapixels at 458 ppi).'),
(8, 'Note 9 Pro', 'Redmi', 'Mobile ', 33500, '32/64', 8, '6.67 Inch', 5300, 6, 'RedmiNote9.png', 25, 'The Redmi Note 9 Pro has just been launched in India, and its starting price of Rs. 12,999 is surprisingly low because Xiaomi has made a few very interesting decisions in terms of positioning and features. It isn\'t easy to stay ahead of the game, and the Redmi Note 9 Pro goes up against the formidable Realme 6 and Samsung M30s. Longtime fans of the series might be surprised at how Xiaomi has actually held back a little with this model, since expectations are always when a new generation of Redmi Note smartphones is announced.'),
(10, 'Note 10 Pro', 'Redmi', 'Mobile ', 46999, '64/128', 8, '6.67 Inch', 5020, 8, 'RedmiNote10Pro.png', 13, 'Redmi Note 10 Pro mobile was launched on 4th March 2021. The phone comes with a 6.67-inch touchscreen display. Redmi Note 10 Pro is powered by an octa-core Qualcomm Snapdragon 732G processor. It comes with 6GB of RAM. The Redmi Note 10 Pro runs Android 11 and is powered by a 5050mAh battery. The Redmi Note 10 Pro supports proprietary fast charging.'),
(11, 'P30 Pro', 'Huawei', 'Mobile ', 59000, '64/128', 12, '6.47 Inch', 4200, 8, 'HuaweiP30Pro.png', 25, 'Huawei P30 Pro is the latest flagship from the Chinese telecommunications giant. Huawei\'s P-series is all about photography. For the third year in a row now, the Chinese giant is aiming to outdo Apple, Samsung, and other players in the high-end smartphone space specifically in terms of camera quality and features. After experimenting with unique sensors, lenses and software features with the Huawei P10 and P20 families, we now have with us the brand new Huawei P30 Pro, the flagship of the new P30 lineup. The defining feature of this phone is its 5X optical zoom capability, which beats everything else on the market by a huge margin, and shows that Huawei\'s R&D and manufacturing capabilities are among the best in the world.'),
(52, 'Power Bank', 'Redmi', 'Charger', 4300, NULL, NULL, NULL, NULL, NULL, 'samsung-power-bank.jpg', 2, 'sad'),
(54, 'Galaxy S6', 'Samsung', 'Mobile', 19500, '64', 8, '5.2 Inch', 3000, 2, 'samsungGalaxyS6.jpg', 2, 'Good Quality Mobile'),
(56, 'EarPhone', 'OnePlus', 'HandFree', 1200, NULL, NULL, NULL, NULL, NULL, 'EarPhone.jpg', 2, 'Good Qaulity'),
(57, 'Wire Less Charger', 'Xiomi', 'Charger', 12000, NULL, NULL, NULL, NULL, NULL, 'WireLessCharger.jpg', 2, 'Good Quality'),
(58, 'AirPods', 'Apple', 'HandFree', 43000, NULL, NULL, NULL, NULL, NULL, 'MWP22.jpeg', 2, 'aa'),
(59, 'Tempred Glasses', ' - ', 'Tempered', 450, NULL, NULL, NULL, NULL, NULL, '5D-9d-10d-11d-21d-22D-Full-Glue-Full-Cover-Tempered-Glass-Screen-Protector-for-Tecno-F3-F3-PRO-Pop-1.jpg', 100, 'Available for all types of mobile phones'),
(61, 'Galaxy S9', 'Samsung', 'Mobile', 58000, '64', 8, '5.67 Inch', 2300, 3, 'galaxy-s9-plus-render.jpg', 43, 'Good quality Mobile'),
(62, 'Galaxy S20', 'Samsung', 'Mobile', 120500, '256', 64, '6.2 Inch', 4000, 8, 'samsung-galaxy-s20-8-gb-128-gb-cosmic-grey.jpg', 20, '   abcd'),
(63, 'Nova 7i', 'Huawei', 'Mobile', 45000, '64', 48, '5.2 Inch', 4000, 8, 'Huawei-Nova-7i-8GB-RAM-128GB-01.jpg', 3, 'cvcc'),
(64, 'P30 Lite', 'Huawei', 'Mobile', 32000, '64', 24, '5.1 Inch', 3300, 4, 'huawei-p30-lite-4g-128gb-dual-sim-azul.jpg', 4, 'Good Quality Mobile'),
(65, '9T', 'Redmi', 'Mobile', 35999, '64', 8, '5.67 Inch', 2300, 3, 'f42ad8e6e172594ddb9b8e49cb5bcc90.jpg', 8, 'aa'),
(66, 'Note 8 Pro', 'Redmi', 'Mobile', 43500, '128', 8, '5.56 Inch', 5000, 8, 'Xiaomi-Redmi-Note-8-Pro-with-64GB-6GB-RAM-4500mAh-white-color.jpg', 3, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `wishList`
--

CREATE TABLE `wishList` (
  `WishID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `PNAME` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishList`
--

INSERT INTO `wishList` (`WishID`, `C_ID`, `ProductID`, `PNAME`) VALUES
(1, 0, 2, 'Apple');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderDetails`
--
ALTER TABLE `orderDetails`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `orderItems`
--
ALTER TABLE `orderItems`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersTracking`
--
ALTER TABLE `ordersTracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishList`
--
ALTER TABLE `wishList`
  ADD PRIMARY KEY (`WishID`),
  ADD KEY `fk_C_ID` (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminDetails`
--
ALTER TABLE `adminDetails`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_data`
--
ALTER TABLE `customer_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderDetails`
--
ALTER TABLE `orderDetails`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ordersTracking`
--
ALTER TABLE `ordersTracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `wishList`
--
ALTER TABLE `wishList`
  MODIFY `WishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
