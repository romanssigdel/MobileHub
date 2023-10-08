-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 10:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `soldproduct`
--

CREATE TABLE `soldproduct` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `pquantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soldproduct`
--

INSERT INTO `soldproduct` (`id`, `username`, `pname`, `pprice`, `pquantity`) VALUES
(1, 'user1', 'IPhone 14 Pro Max', 191990, 1),
(2, 'user1', 'Iphone SE 2', 70000, 1),
(3, 'user1', 'IPhone 14 Pro Max', 191990, 1),
(4, 'user1', 'Samsung Galaxy Z Flip 5', 139999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `Pprice` int(100) NOT NULL,
  `Pimage` varchar(250) NOT NULL,
  `Ram` varchar(100) NOT NULL,
  `Cpu` varchar(100) NOT NULL,
  `Storage` varchar(100) NOT NULL,
  `Display` varchar(255) NOT NULL,
  `Battery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `Pname`, `Pprice`, `Pimage`, `Ram`, `Cpu`, `Storage`, `Display`, `Battery`) VALUES
(16, 'Iphone SE 2', 70000, 'uploadImage/iphone-se-front-price-in-nepal.png', '4GB', 'Apple GPU (4-core graphics)', '64GB', '750 x 1334 pixels, 16:9 ratio (~326 ppi density)', '1821 mAh'),
(17, 'Iphone 12', 106990, 'uploadImage/iphone-12-front-price-in-nepal.png', '4GB', 'Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm)', '256GB', '1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)', 'Li-Ion 2815 mAh'),
(18, 'IPhone 14 Pro Max', 191990, 'uploadImage/iphone-14-pro-max-price-nepal.png', '8GB', 'Hexa-core (2x3.46 GHz Everest + 4x2.02 GHz Sawtooth)', '512GB', '1290 x 2796 pixels, 19.5:9 ratio (~460 ppi density)', 'Li-Ion 4323 mAh, non-removable (16.68 Wh)'),
(19, 'iPhone 13 Pro', 174990, 'uploadImage/iphone_13_pro_silver_price_in_nepal_2.png', '8GB', 'Hexa-core (2x3.22 GHz Avalanche + 4xX.X GHz Blizzard)', '512GB', 'Super Retina XDR OLED, 120Hz, HDR10', ' Li-Ion 3095 mAh, non-removable (12.11 Wh)'),
(20, 'iPhone 15 Pro max', 189999, 'uploadImage/apple-iphone-15-pro-max-1.jpg', '8GB', 'Hexa-core (2x3.78 GHz + 4x2.11 GHz)', '512GB', 'LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 2000 nits (HBM)', 'Li-Ion 4441 mAh, non-removable'),
(21, 'Samsung Galaxy Z Fold 5', 226999, 'uploadImage/z_fold_5_icy_blue_1.jpg', '16GB', ' 	Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex', '256GB', '7.6 Inches Dynamic Amoled Display', 'Li-Po 4400 mAh, Non-removable'),
(22, 'Samsung Galaxy S23 ', 127999, 'uploadImage/samsung-galgaxy-s23-green-price-nepal_1.png', '16GB', 'Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A', '256GB', '1080 x 2340 pixels, 19.5:9 ratio', 'Li-Ion 3900 mAh'),
(23, 'Samsung Galaxy Z Flip 5', 139999, 'uploadImage/z_flip_5_graphite.jpg', '8GB', 'Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A', '256GB', '6.67 Inches Super Amoled Display', 'Li-Po 3700 mAh, non-removable'),
(24, 'Samsung Galaxy S23 Ultra 5G', 191999, 'uploadImage/samsung-galaxy-s23-ultra-black-price-nepal.png', '16GB', 'Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A', '512GB', '6.8 inches, 114.7 cm2 (~89.9% screen-to-body ratio)', 'Li-Ion 5000 mAh'),
(25, 'Xiaomi 12 Pro 5G ', 116999, 'uploadImage/xiaomi-12-pro-grey-price-nepal.jpg', '8GB', '1440 x 3200 pixels, 20:9 ratio (~521 ppi density)', '256GB', '1440 x 3200 pixels, 20:9 ratio (~521 ppi density)', 'Li-Po 4600 mAh, non-removable'),
(26, 'Xiaomi Redmi Note 11S', 30999, 'uploadImage/redmi-note-11-s-gray-price-nepal.jpg', '4GB', 'Octa-core (2x2.05 GHz Cortex-A76 & 6x2.0 GHz Cortex-A55)', '64GB', '1080 x 2400 pixels, 20:9 ratio (~409 ppi density)', 'Li-Po 5000 mAh'),
(27, 'OnePlus 11 5G ', 129999, 'uploadImage/one-plus-11-green-price-nepal.png', '8GB', 'Octa-core (1x3.2 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A5', '256GB', '1440 x 3216 pixels, 20:9 ratio (~525 ppi density)', 'Li-Po 5000 mAh'),
(28, 'Redmi A2 Plus', 11499, 'uploadImage/product_image_size_guide_1_14_.jpg', '4GB', 'Octa-core (4x2.2 GHz Cortex-A53 & 4x1.7 GHz Cortex-A53)', '64GB', '1440 x 3216 pixels, 20:9 ratio (~525 ppi density)', '5000mAh with 10W Charging'),
(29, 'iPad mini 6', 85000, 'uploadImage/ipad-mini-6-price-in-nepal_4.png', '8GB', 'Hexa-core (2x2.93 GHz + 4xX.X GHz)', '128GB', '8.3 inches, 203.9 cm2 (~77.4% screen-to-body ratio)', 'Li-Ion, non-removable (19.3 Wh)'),
(30, 'Realme Narzo 50i', 13499, 'uploadImage/narzo-5-i-price-in-nepal.jpg', '8GB', 'Unisoc SC9863A (octa-core CPU, 28nm)', '256GB', '6.5-inches “Mini-drop” IPS LCD panel, 400 nits peak brightness', ' 5,000mAh (reverse charging)'),
(31, 'VIVO Y01', 13999, 'uploadImage/vivo-y01-black-price-nepal_1_1.jpg', '4GB', 'Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)', '256GB', '720 x 1600 pixels, 20:9 ratio (~270 ppi density)', 'Li-Po 5000 mAh'),
(32, 'Oppo A77 4G', 25999, 'uploadImage/oppo-a77-4g-ocena-blue-price-nepal.png', '4GB', 'MediaTek Helio G35', '64GB', 'HD+ IPS LCD panel', '5000mAh '),
(33, 'Nothing 2', 80000, 'uploadImage/nothing2.jpeg', '8GB', 'Qualcomm Snapdragon 8+ Gen 1 Processor', '256GB', '17.02 cm (6.7 inch) Full HD+ Display', '4700 mAh Lithium ion Battery');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserName`, `Email`, `Number`, `Password`, `Id`) VALUES
('user1', 'user1@gmail.com', '9809358455', 'user12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `soldproduct`
--
ALTER TABLE `soldproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soldproduct`
--
ALTER TABLE `soldproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
