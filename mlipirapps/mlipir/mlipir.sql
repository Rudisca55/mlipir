-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 03:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlipir`
--

-- --------------------------------------------------------

--
-- Table structure for table `in_out_log_payment_balance`
--

CREATE TABLE `in_out_log_payment_balance` (
  `log_payment_balance_id` int(10) NOT NULL,
  `payment_balance_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `vendor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_out_log_payment_balance`
--

INSERT INTO `in_out_log_payment_balance` (`log_payment_balance_id`, `payment_balance_id`, `user_id`, `amount`, `create_datetime`, `status`, `vendor_id`) VALUES
(1, 1, 1, 50000, '2018-04-23 20:23:36', 'OUT', 1),
(2, 1, 3, 50000, '2018-04-23 20:28:18', 'OUT', 1),
(3, 1, 3, 50000, '2018-04-23 20:28:42', 'OUT', 1),
(4, 1, 3, 50000, '2018-04-23 20:29:59', 'OUT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `in_payment_balance`
--

CREATE TABLE `in_payment_balance` (
  `payment_balance_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `balance_amount` int(20) NOT NULL,
  `version` int(10) NOT NULL,
  `status` enum('v','x') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_payment_balance`
--

INSERT INTO `in_payment_balance` (`payment_balance_id`, `user_id`, `balance_amount`, `version`, `status`) VALUES
(1, 1, 900000, 2, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `temp_saldo`
--

CREATE TABLE `temp_saldo` (
  `id_temp` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `saldo` int(20) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `status` enum('V','X') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_saldo`
--

INSERT INTO `temp_saldo` (`id_temp`, `user_id`, `saldo`, `bukti`, `status`) VALUES
(1, 1, 1000000, 'asd', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `trx_vendor`
--

CREATE TABLE `trx_vendor` (
  `trx_vendor_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `total_tiket` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `sub_total_amount` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_vendor`
--

INSERT INTO `trx_vendor` (`trx_vendor_id`, `vendor_id`, `total_tiket`, `amount`, `sub_total_amount`, `user_id`) VALUES
(1, 1, 2, 50000, 100000, 1),
(2, 1, 2, 50000, 100000, 3),
(3, 1, 2, 50000, 100000, 3),
(4, 1, 2, 50000, 100000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`user_id`, `username`, `password`, `email`, `role_id`, `vendor_id`) VALUES
(1, 'sep', '314e9e118b3026ce64b768b84a22d816', 'septyancandra27@gmail.com', 2, 0),
(2, 'yuhu', 'b7f68bb19bde0d7787e67053b4acd3b9', 'yuhu@gg.com', 3, 0),
(3, 'nan', 'a3d2de7675556553a5f08e4c88d2c228', 'nan@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_vendor`
--

CREATE TABLE `t_vendor` (
  `vendor_id` int(10) NOT NULL,
  `vendor_code` varchar(50) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `balance_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_vendor`
--

INSERT INTO `t_vendor` (`vendor_id`, `vendor_code`, `vendor_name`, `price`, `balance_amount`) VALUES
(1, 'B1', 'Yhu', 50000, 400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `in_out_log_payment_balance`
--
ALTER TABLE `in_out_log_payment_balance`
  ADD PRIMARY KEY (`log_payment_balance_id`);

--
-- Indexes for table `in_payment_balance`
--
ALTER TABLE `in_payment_balance`
  ADD PRIMARY KEY (`payment_balance_id`);

--
-- Indexes for table `temp_saldo`
--
ALTER TABLE `temp_saldo`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `trx_vendor`
--
ALTER TABLE `trx_vendor`
  ADD PRIMARY KEY (`trx_vendor_id`);

--
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `t_vendor`
--
ALTER TABLE `t_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `in_out_log_payment_balance`
--
ALTER TABLE `in_out_log_payment_balance`
  MODIFY `log_payment_balance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `in_payment_balance`
--
ALTER TABLE `in_payment_balance`
  MODIFY `payment_balance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_saldo`
--
ALTER TABLE `temp_saldo`
  MODIFY `id_temp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_vendor`
--
ALTER TABLE `trx_vendor`
  MODIFY `trx_vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_vendor`
--
ALTER TABLE `t_vendor`
  MODIFY `vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
