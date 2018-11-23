-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 03:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telecost_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampu`
--

CREATE TABLE `lampu` (
  `id` int(200) NOT NULL,
  `nama_lampu` varchar(200) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `daya` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `update_time` time NOT NULL,
  `biaya` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id`, `nama_lampu`, `kode`, `token`, `daya`, `status`, `update_time`, `biaya`) VALUES
(1, 'Lampu Dapur', 'ld', 'sdnasdhi154', '15', '0', '21:36:27', '9.4150466666666'),
(2, 'Lampu KT 1', 'lkt1', 'sdnasdhi154', '10', '0', '21:36:28', '8.5346786666666'),
(3, 'Lampu KT 2', 'lkt2', 'sdnasdhi154', '40', '0', '21:36:20', '19.152079777778'),
(4, 'Lampu RM', 'lrm', 'sdnasdhi154', '13', '0', '21:36:29', '9.2723944444443'),
(5, 'Lampu KM 1', 'lkm1', 'sdnasdhi154', '8', '0', '21:36:22', '6.498420088889'),
(6, 'Lampu RK', 'lrk', 'sdnasdhi154', '15', '0', '21:36:23', '11.181896333333'),
(7, 'Lampu RT', 'lrt', 'sdnasdhi154', '15', '0', '21:36:25', '12.312924666667');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `batas_daya` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `level` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `batas_daya`, `token`, `level`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Hafizh Abdurrachman', '1300', 'sdnasdhi154', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampu`
--
ALTER TABLE `lampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lampu`
--
ALTER TABLE `lampu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
