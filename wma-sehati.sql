-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 03:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wma-sehati`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sembako'),
(2, 'Sabun');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_supplier` varchar(125) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `keterangan` varchar(125) NOT NULL,
  `gambar` text NOT NULL,
  `harga` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_user`, `nama_supplier`, `nama_produk`, `keterangan`, `gambar`, `harga`) VALUES
(1, 1, 1, 'PT. Indomie', 'Mie Indomie Goreng', 'pcs', 'download1.jpeg', '3100'),
(2, 1, 1, 'PT. Indomie', 'Mie Indomie Soto', 'pcs', 'download_(2)1.jpeg', '3200'),
(3, 1, 1, 'PT. Indomie', 'Mie Indomie Ayam Bawang', 'pcs', '10000652_1.jpg', '3000'),
(4, 1, 1, 'PT. Indomie', 'Mie Indomie Cabe Rawit', 'pcs', 'download.jpg', '3400'),
(5, 1, 1, 'PT. Indomie', 'Mie Selera Pedas', 'pcs', 'download_(1).jpg', '3400'),
(6, 1, 1, 'PT. Minyak Bimoli', 'Minyak Bimoli', 'botol', 'download_(2).jpg', '120000'),
(7, 1, 1, 'PT. Terigu Segitiga', 'Terigu Segitiga', 'kg', 'download_(3).jpg', '10000'),
(8, 1, 1, 'PT. Minyak Kita', 'Minyak Kita', 'botol', 'download_(4).jpg', '13000'),
(9, 1, 1, 'PT. Tepung Tapioka', 'Tepung Tapioka', 'kg', 'download_(5).jpg', '10000'),
(10, 1, 1, 'PT. Gulaku', 'Gulaku', 'kg', 'download_(6).jpg', '11000');

-- --------------------------------------------------------

--
-- Table structure for table `produk_keluar`
--

CREATE TABLE `produk_keluar` (
  `id_produk_keluar` int(11) NOT NULL,
  `id_produk_masuk` int(11) NOT NULL,
  `tgl_keluar` varchar(20) NOT NULL,
  `qty_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_keluar`
--

INSERT INTO `produk_keluar` (`id_produk_keluar`, `id_produk_masuk`, `tgl_keluar`, `qty_keluar`) VALUES
(1, 8, '2024-01-01', 64),
(2, 9, '2024-01-02', 70),
(3, 8, '2024-01-03', 87),
(4, 2, '2024-01-04', 59),
(5, 6, '2024-01-05', 96),
(6, 1, '2024-01-06', 68),
(7, 9, '2024-01-07', 89),
(8, 6, '2024-01-08', 92),
(9, 5, '2024-01-09', 75),
(10, 10, '2024-01-10', 95),
(11, 6, '2024-01-11', 54),
(12, 2, '2024-01-12', 63),
(13, 8, '2024-01-13', 78),
(14, 3, '2024-01-14', 74),
(15, 9, '2024-01-15', 65),
(16, 7, '2024-01-16', 59),
(17, 8, '2024-01-17', 82),
(18, 1, '2024-01-18', 64),
(19, 8, '2024-01-19', 75),
(20, 3, '2024-01-20', 93),
(21, 9, '2024-01-21', 52),
(22, 7, '2024-01-22', 77),
(23, 9, '2024-01-23', 60),
(24, 2, '2024-01-24', 100),
(25, 4, '2024-01-25', 92),
(26, 7, '2024-01-26', 55),
(27, 3, '2024-01-27', 94),
(28, 4, '2024-01-28', 93),
(29, 7, '2024-01-29', 75),
(30, 9, '2024-01-30', 87),
(31, 7, '2024-01-31', 71),
(32, 8, '2024-02-01', 62),
(33, 8, '2024-02-02', 53),
(34, 7, '2024-02-03', 86),
(35, 10, '2024-02-04', 53),
(36, 2, '2024-02-05', 65),
(37, 2, '2024-02-06', 68),
(38, 7, '2024-02-07', 51),
(39, 6, '2024-02-08', 94),
(40, 2, '2024-02-09', 95),
(41, 6, '2024-02-10', 88),
(42, 1, '2024-02-11', 58),
(43, 10, '2024-02-12', 91),
(44, 9, '2024-02-13', 82),
(45, 7, '2024-02-14', 61),
(46, 6, '2024-02-15', 89),
(47, 6, '2024-02-16', 87),
(48, 1, '2024-02-17', 54),
(49, 9, '2024-02-18', 98),
(50, 10, '2024-02-19', 75),
(51, 2, '2024-02-20', 73),
(52, 9, '2024-02-21', 62),
(53, 4, '2024-02-22', 89),
(54, 4, '2024-02-23', 77),
(55, 2, '2024-02-24', 75),
(56, 5, '2024-02-25', 93),
(57, 4, '2024-02-26', 82),
(58, 10, '2024-02-27', 86),
(59, 10, '2024-02-28', 89),
(60, 10, '2024-02-29', 71),
(61, 8, '2024-03-01', 69),
(62, 6, '2024-03-02', 68),
(63, 9, '2024-03-03', 63),
(64, 7, '2024-03-04', 61),
(65, 10, '2024-03-05', 87),
(66, 10, '2024-03-06', 91),
(67, 5, '2024-03-07', 83),
(68, 10, '2024-03-08', 67),
(69, 5, '2024-03-09', 67),
(70, 5, '2024-03-10', 93),
(71, 5, '2024-03-11', 79),
(72, 7, '2024-03-12', 69),
(73, 10, '2024-03-13', 57),
(74, 9, '2024-03-14', 86),
(75, 5, '2024-03-15', 97),
(76, 2, '2024-03-16', 55),
(77, 8, '2024-03-17', 71),
(78, 7, '2024-03-18', 91),
(79, 3, '2024-03-19', 60),
(80, 4, '2024-03-20', 53),
(81, 3, '2024-03-21', 53),
(82, 3, '2024-03-22', 76),
(83, 4, '2024-03-23', 73),
(84, 8, '2024-03-24', 97),
(85, 2, '2024-03-25', 79),
(86, 5, '2024-03-26', 92),
(87, 3, '2024-03-27', 58),
(88, 8, '2024-03-28', 85),
(89, 4, '2024-03-29', 92),
(90, 5, '2024-03-30', 91),
(91, 10, '2024-03-31', 94),
(92, 9, '2024-04-01', 86),
(93, 7, '2024-04-02', 70),
(94, 10, '2024-04-03', 79),
(95, 9, '2024-04-04', 86),
(96, 10, '2024-04-05', 79),
(97, 7, '2024-04-06', 76),
(98, 1, '2024-04-07', 67),
(99, 8, '2024-04-08', 60),
(100, 7, '2024-04-09', 62),
(101, 5, '2024-04-10', 81),
(102, 2, '2024-04-11', 82),
(103, 2, '2024-04-12', 66),
(104, 5, '2024-04-13', 64),
(105, 8, '2024-04-14', 59),
(106, 7, '2024-04-15', 81),
(107, 6, '2024-04-16', 93),
(108, 1, '2024-04-17', 72),
(109, 4, '2024-04-18', 52),
(110, 2, '2024-04-19', 57),
(111, 6, '2024-04-20', 83),
(112, 8, '2024-04-21', 68),
(113, 7, '2024-04-22', 78),
(114, 1, '2024-04-23', 57),
(115, 5, '2024-04-24', 96),
(116, 7, '2024-04-25', 62),
(117, 4, '2024-04-26', 52),
(118, 2, '2024-04-27', 64),
(119, 5, '2024-04-28', 100),
(120, 5, '2024-04-29', 81),
(121, 5, '2024-04-30', 60),
(122, 8, '2024-05-01', 72),
(123, 5, '2024-05-02', 70),
(124, 8, '2024-05-03', 58),
(125, 10, '2024-05-04', 70),
(126, 6, '2024-05-05', 91),
(127, 3, '2024-05-06', 88),
(128, 6, '2024-05-07', 63),
(129, 2, '2024-05-08', 71),
(130, 2, '2024-05-09', 74),
(131, 10, '2024-05-10', 62),
(132, 7, '2024-05-11', 76),
(133, 1, '2024-05-12', 58),
(134, 3, '2024-05-13', 72),
(135, 9, '2024-05-14', 58),
(136, 8, '2024-05-15', 90),
(137, 5, '2024-05-16', 86),
(138, 9, '2024-05-17', 92),
(139, 3, '2024-05-18', 54),
(140, 5, '2024-05-19', 62),
(141, 10, '2024-05-20', 51),
(142, 8, '2024-05-21', 92),
(143, 3, '2024-05-22', 77),
(144, 4, '2024-05-23', 93),
(145, 1, '2024-05-24', 87),
(146, 6, '2024-05-25', 96),
(147, 5, '2024-05-26', 60),
(148, 3, '2024-05-27', 97),
(149, 8, '2024-05-28', 76),
(150, 9, '2024-05-29', 66),
(151, 6, '2024-05-30', 78),
(152, 8, '2024-05-31', 81),
(153, 4, '2024-01-01', 71),
(154, 9, '2024-01-02', 62),
(155, 10, '2024-01-03', 66),
(156, 9, '2024-01-04', 52),
(157, 3, '2024-01-05', 93),
(158, 2, '2024-01-06', 68),
(159, 10, '2024-01-07', 78),
(160, 8, '2024-01-08', 70),
(161, 4, '2024-01-09', 64),
(162, 9, '2024-01-10', 93),
(163, 7, '2024-01-11', 66),
(164, 1, '2024-01-12', 50),
(165, 2, '2024-01-13', 89),
(166, 3, '2024-01-14', 63),
(167, 9, '2024-01-15', 63),
(168, 3, '2024-01-16', 84),
(169, 7, '2024-01-17', 79),
(170, 10, '2024-01-18', 91),
(171, 9, '2024-01-19', 62),
(172, 2, '2024-01-20', 97),
(173, 9, '2024-01-21', 88),
(174, 9, '2024-01-22', 69),
(175, 9, '2024-01-23', 57),
(176, 4, '2024-01-24', 96),
(177, 1, '2024-01-25', 60),
(178, 1, '2024-01-26', 50),
(179, 5, '2024-01-27', 94),
(180, 2, '2024-01-28', 94),
(181, 10, '2024-01-29', 81),
(182, 1, '2024-01-30', 51),
(183, 9, '2024-01-31', 62),
(184, 9, '2024-02-01', 91),
(185, 6, '2024-02-02', 67),
(186, 6, '2024-02-03', 56),
(187, 6, '2024-02-04', 80),
(188, 4, '2024-02-05', 59),
(189, 8, '2024-02-06', 72),
(190, 6, '2024-02-07', 83),
(191, 4, '2024-02-08', 53),
(192, 6, '2024-02-09', 84),
(193, 3, '2024-02-10', 72),
(194, 10, '2024-02-11', 100),
(195, 5, '2024-02-12', 100),
(196, 1, '2024-02-13', 69),
(197, 7, '2024-02-14', 57),
(198, 8, '2024-02-15', 84),
(199, 2, '2024-02-16', 84),
(200, 9, '2024-02-17', 73),
(201, 3, '2024-02-18', 61),
(202, 5, '2024-02-19', 66),
(203, 7, '2024-02-20', 81),
(204, 1, '2024-02-21', 79),
(205, 1, '2024-02-22', 79),
(206, 6, '2024-02-23', 76),
(207, 7, '2024-02-24', 87),
(208, 7, '2024-02-25', 73),
(209, 3, '2024-02-26', 99),
(210, 4, '2024-02-27', 71),
(211, 5, '2024-02-28', 80),
(212, 2, '2024-02-29', 80),
(213, 6, '2024-03-01', 57),
(214, 5, '2024-03-02', 59),
(215, 7, '2024-03-03', 86),
(216, 7, '2024-03-04', 94),
(217, 8, '2024-03-05', 80),
(218, 9, '2024-03-06', 87),
(219, 8, '2024-03-07', 68),
(220, 5, '2024-03-08', 70),
(221, 9, '2024-03-09', 51),
(222, 4, '2024-03-10', 65),
(223, 6, '2024-03-11', 94),
(224, 1, '2024-03-12', 80),
(225, 7, '2024-03-13', 91),
(226, 5, '2024-03-14', 92),
(227, 7, '2024-03-15', 93),
(228, 3, '2024-03-16', 91),
(229, 5, '2024-03-17', 89),
(230, 5, '2024-03-18', 57),
(231, 10, '2024-03-19', 78),
(232, 10, '2024-03-20', 53),
(233, 4, '2024-03-21', 93),
(234, 2, '2024-03-22', 64),
(235, 10, '2024-03-23', 62),
(236, 1, '2024-03-24', 88),
(237, 6, '2024-03-25', 61),
(238, 1, '2024-03-26', 77),
(239, 2, '2024-03-27', 83),
(240, 7, '2024-03-28', 88),
(241, 6, '2024-03-29', 61),
(242, 3, '2024-03-30', 75),
(243, 7, '2024-03-31', 73),
(244, 8, '2024-04-01', 75),
(245, 8, '2024-04-02', 83),
(246, 3, '2024-04-03', 81),
(247, 2, '2024-04-04', 95),
(248, 2, '2024-04-05', 94),
(249, 7, '2024-04-06', 96),
(250, 1, '2024-04-07', 84),
(251, 8, '2024-04-08', 62),
(252, 10, '2024-04-09', 69),
(253, 6, '2024-04-10', 94),
(254, 2, '2024-04-11', 57),
(255, 6, '2024-04-12', 53),
(256, 7, '2024-04-13', 65),
(257, 10, '2024-04-14', 61),
(258, 9, '2024-04-15', 69),
(259, 2, '2024-04-16', 66),
(260, 8, '2024-04-17', 75),
(261, 9, '2024-04-18', 67),
(262, 3, '2024-04-19', 96),
(263, 3, '2024-04-20', 95),
(264, 2, '2024-04-21', 78),
(265, 7, '2024-04-22', 59),
(266, 5, '2024-04-23', 93),
(267, 5, '2024-04-24', 50),
(268, 3, '2024-04-25', 92),
(269, 5, '2024-04-26', 80),
(270, 7, '2024-04-27', 95),
(271, 5, '2024-04-28', 76),
(272, 4, '2024-04-29', 66),
(273, 7, '2024-04-30', 98),
(274, 10, '2024-05-01', 61),
(275, 5, '2024-05-02', 74),
(276, 10, '2024-05-03', 59),
(277, 6, '2024-05-04', 86),
(278, 8, '2024-05-05', 66),
(279, 3, '2024-05-06', 63),
(280, 4, '2024-05-07', 65),
(281, 2, '2024-05-08', 64),
(282, 2, '2024-05-09', 86),
(283, 5, '2024-05-10', 100),
(284, 6, '2024-05-11', 76),
(285, 3, '2024-05-12', 76),
(286, 2, '2024-05-13', 55),
(287, 5, '2024-05-14', 68),
(288, 3, '2024-05-15', 74),
(289, 3, '2024-05-16', 90),
(290, 2, '2024-05-17', 76),
(291, 7, '2024-05-18', 84),
(292, 1, '2024-05-19', 90),
(293, 1, '2024-05-20', 58),
(294, 6, '2024-05-21', 79),
(295, 9, '2024-05-22', 82),
(296, 4, '2024-05-23', 59),
(297, 10, '2024-05-24', 52),
(298, 3, '2024-05-25', 64),
(299, 6, '2024-05-26', 58),
(300, 9, '2024-05-27', 80),
(301, 5, '2024-05-28', 59),
(302, 9, '2024-05-29', 57),
(303, 4, '2024-05-30', 66),
(304, 4, '2024-05-31', 68);

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuk`
--

CREATE TABLE `produk_masuk` (
  `id_produk_masuk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_masuk`
--

INSERT INTO `produk_masuk` (`id_produk_masuk`, `id_produk`, `tgl_masuk`, `quantity`) VALUES
(2, 1, '2024-05-30', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(2, 'Gudang', 'gudang', 'gudang', 2),
(3, 'Admin', 'admin', 'admin', 1),
(4, 'Pemilik', 'pemilik', 'pemilik', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_keluar`
--
ALTER TABLE `produk_keluar`
  ADD PRIMARY KEY (`id_produk_keluar`);

--
-- Indexes for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  ADD PRIMARY KEY (`id_produk_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk_keluar`
--
ALTER TABLE `produk_keluar`
  MODIFY `id_produk_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id_produk_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
