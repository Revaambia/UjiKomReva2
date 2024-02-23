-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 09:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cashier`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `harga_produk` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(11) DEFAULT '0',
  `kode_unik` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `harga_produk`, `created_at`, `updated_at`, `jumlah`, `kode_unik`) VALUES
(6, 'Baso Cincang', 7000, '2024-02-16 05:12:02', '2024-02-16 05:12:02', 10, '6c36bb23de'),
(7, 'Nasi Goreng', 9000, '2024-02-16 05:38:11', '2024-02-16 05:38:11', 4, '39ed489baa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nama` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'ewewew', 'wewewe', 'wewewewe', '2024-01-25 04:55:21', '2024-01-25 04:55:21'),
(2, '23232', '323223', '23223323', '2024-01-25 04:56:31', '2024-01-25 04:56:31'),
(3, '232323', '32323', '23232', '2024-01-26 01:16:33', '2024-01-26 01:16:33'),
(4, '13131', '311', '1311', '2024-01-26 01:56:28', '2024-01-26 01:56:28'),
(5, 'reva', '12344', 'rere', '2024-01-26 02:00:57', '2024-01-26 02:00:57'),
(6, 'reva', '12344', 'rere', '2024-01-26 02:01:46', '2024-01-26 02:01:46'),
(7, 'reva', '12344', 'rere', '2024-01-26 02:03:36', '2024-01-26 02:03:36'),
(8, '4342', '322', '22', '2024-01-26 02:10:32', '2024-01-26 02:10:32'),
(9, 'Reva7', '123', 'Reva', '2024-01-26 02:34:01', '2024-01-26 02:34:01'),
(10, 'Reva7', '123', 'Reva', '2024-01-26 02:34:36', '2024-01-26 02:34:36'),
(11, 'Reva7', '123', 'Reva', '2024-01-26 02:34:52', '2024-01-26 02:34:52'),
(12, 'Reva17', '123', 'Reva', '2024-01-26 02:36:08', '2024-01-26 02:36:08'),
(13, 'Reva7', '123', 'Reva', '2024-01-26 02:37:34', '2024-01-26 02:37:34'),
(14, 'Reva7', '112', 'Reva', '2024-01-26 02:42:20', '2024-01-26 02:42:20'),
(15, 'Reva7', '123', 'Reva', '2024-02-16 04:16:45', '2024-02-16 04:16:45'),
(16, 'Reva7', '123', 'Reva', '2024-02-16 04:32:13', '2024-02-16 04:32:13'),
(17, 'Reva7', '123', 'Reva', '2024-02-16 04:50:50', '2024-02-16 04:50:50'),
(18, 'Reva7', '123', 'Reva', '2024-02-16 05:03:58', '2024-02-16 05:03:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
