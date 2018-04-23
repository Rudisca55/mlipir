-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2018 pada 15.33
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlipirapps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_vendor`
--

CREATE TABLE `t_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_code` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` text NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_vendor`
--

INSERT INTO `t_vendor` (`vendor_id`, `vendor_code`, `vendor_name`, `phone`, `email`, `price`, `address`, `longitude`, `latitude`, `description`) VALUES
(2, 1, 'voew', '230390', 'rudisca@gmail.com', 55555, 'sdsdsd', 110.478645, -7.048032, 'lalallalaa'),
(3, 43434, '343434', '343434', '34343', 0, '34343', 107.606155, -6.917573, '3434'),
(4, 23213, '21323', '21321321', '321321', 3213213, '21321321', 10000.000000, 10000.000000, '321313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_vendor`
--
ALTER TABLE `t_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_vendor`
--
ALTER TABLE `t_vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
