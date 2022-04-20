-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 04:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(50) NOT NULL,
  `bank_name` text NOT NULL,
  `branch` text NOT NULL,
  `account_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(50) NOT NULL,
  `buyer_address` varchar(100) NOT NULL,
  `buyer_phone_no` int(50) NOT NULL,
  `contract_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(50) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_contact` int(50) NOT NULL,
  `contract_no` int(50) NOT NULL,
  `client_address` varchar(256) NOT NULL,
  `rep_name` varchar(100) NOT NULL,
  `rep_desig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `container_no` int(50) NOT NULL,
  `diameter` varchar(50) NOT NULL,
  `length` varchar(50) NOT NULL,
  `no_of_logs` int(50) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `client_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `vessel_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_no` int(50) NOT NULL,
  `contract_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `species_type` varchar(100) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `price` int(25) NOT NULL,
  `insurance` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `payment` int(100) NOT NULL,
  `shipment` varchar(100) NOT NULL,
  `ref_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(50) NOT NULL,
  `currency_type` varchar(50) NOT NULL,
  `currency_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fc_staff`
--

CREATE TABLE `fc_staff` (
  `staff_id` int(50) NOT NULL,
  `staff_title` text NOT NULL,
  `staff_name` text NOT NULL,
  `staff_gender` text NOT NULL,
  `staff_department` text NOT NULL,
  `staff_division` text NOT NULL,
  `staff_region` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `levy`
--

CREATE TABLE `levy` (
  `levy_id` int(50) NOT NULL,
  `levy_type` varchar(50) NOT NULL,
  `levy_rate` varchar(50) NOT NULL,
  `bank_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`role_name` varchar(100)
,`date_created` datetime
,`staff_id` varchar(50)
,`role_id` varchar(50)
,`password` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `staff_id`, `password`) VALUES
(1, '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_grade` varchar(50) NOT NULL,
  `product_thickness` varchar(50) NOT NULL,
  `product_length` varchar(50) NOT NULL,
  `product_width` varchar(50) NOT NULL,
  `product_pieces` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `date_created`) VALUES
(1, 'Admin', '2022-02-19 00:45:56'),
(2, 'Staff', '2022-02-19 00:45:56'),
(3, 'Accountant', '2022-02-19 00:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL COMMENT 'User Role',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `staff_id`, `role_id`, `password`) VALUES
(1, '12345', '3', '123@123');

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE `vessel` (
  `vessel_id` int(50) NOT NULL,
  `vessel_name` varchar(100) NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS SELECT `roles`.`role_name` AS `role_name`, `roles`.`date_created` AS `date_created`, `users`.`staff_id` AS `staff_id`, `users`.`role_id` AS `role_id`, `users`.`password` AS `password` FROM (`users` join `roles` on(`users`.`role_id` = `roles`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`),
  ADD KEY `contract_no` (`contract_no`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `contract_no` (`contract_no`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`container_no`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `vessel_id` (`vessel_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_no`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `fc_staff`
--
ALTER TABLE `fc_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `levy`
--
ALTER TABLE `levy`
  ADD PRIMARY KEY (`levy_id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel`
--
ALTER TABLE `vessel`
  ADD PRIMARY KEY (`vessel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `container_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fc_staff`
--
ALTER TABLE `fc_staff`
  MODIFY `staff_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levy`
--
ALTER TABLE `levy`
  MODIFY `levy_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `vessel_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
