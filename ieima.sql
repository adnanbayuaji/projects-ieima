-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2018 pada 10.06
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`data_id` int(11) NOT NULL,
  `data_suhu` decimal(10,5) DEFAULT NULL,
  `data_kelembaban` decimal(10,5) DEFAULT NULL,
  `data_CO` decimal(10,5) DEFAULT NULL,
  `data_kebisingan` decimal(10,5) DEFAULT NULL,
  `data_intensitas` decimal(10,5) DEFAULT NULL,
  `data_waktu` datetime DEFAULT NULL,
  `sensor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`data_id`, `data_suhu`, `data_kelembaban`, `data_CO`, `data_kebisingan`, `data_intensitas`, `data_waktu`, `sensor`) VALUES
(1, '23.00000', '61.00000', '0.00742', '78.50000', '386.00000', '2018-12-05 15:09:07', '1'),
(2, '19.00000', '51.00000', '0.00000', '60.00000', '500.00000', '2018-12-05 15:15:13', '2'),
(3, '19.00000', '51.00000', '0.00800', '60.00000', '500.00000', '2018-12-05 15:17:25', '2'),
(4, '19.00000', '51.00000', '0.00800', '60.00000', '500.00000', '2018-12-05 15:17:44', '3'),
(5, '19.00000', '51.00000', '0.00800', '60.00000', '500.00000', '2018-12-05 15:17:54', '1'),
(6, '24.00000', '76.00000', '0.00795', '78.40000', '424.00000', '2018-12-05 15:21:32', '1'),
(7, '24.00000', '79.00000', '0.00767', '78.10000', '977.00000', '2018-12-05 15:22:29', '1'),
(8, '24.00000', '75.00000', '0.00757', '78.40000', '417.00000', '2018-12-05 15:23:29', '1'),
(9, '24.00000', '76.00000', '0.00764', '78.20000', '421.00000', '2018-12-05 15:24:29', '1'),
(10, '24.00000', '77.00000', '0.00755', '78.10000', '392.00000', '2018-12-05 15:25:29', '1'),
(11, '24.00000', '78.00000', '0.00787', '78.10000', '372.00000', '2018-12-05 15:26:29', '1'),
(12, '24.00000', '77.00000', '0.00766', '78.50000', '413.00000', '2018-12-05 15:27:32', '1'),
(13, '24.00000', '81.00000', '0.00784', '78.20000', '390.00000', '2018-12-05 15:28:29', '1'),
(14, '24.00000', '77.00000', '0.00797', '78.40000', '950.00000', '2018-12-05 15:29:29', '1'),
(15, '24.00000', '76.00000', '0.00771', '78.20000', '402.00000', '2018-12-05 15:30:29', '1'),
(16, '24.00000', '75.00000', '0.00774', '78.50000', '404.00000', '2018-12-05 15:31:29', '1'),
(17, '24.00000', '75.00000', '0.00777', '78.20000', '404.00000', '2018-12-05 15:32:32', '1'),
(18, '24.00000', '77.00000', '0.00744', '78.20000', '396.00000', '2018-12-05 15:33:29', '1'),
(19, '24.00000', '77.00000', '0.00757', '78.40000', '367.00000', '2018-12-05 15:34:32', '1'),
(20, '24.00000', '76.00000', '0.00784', '78.10000', '396.00000', '2018-12-05 15:35:32', '1'),
(21, '24.00000', '80.00000', '0.00794', '78.40000', '410.00000', '2018-12-05 15:36:29', '1'),
(22, '24.00000', '77.00000', '0.00774', '78.20000', '390.00000', '2018-12-05 15:37:29', '1'),
(23, '24.00000', '76.00000', '0.00787', '78.20000', '398.00000', '2018-12-05 15:38:29', '1'),
(24, '24.00000', '74.00000', '0.00775', '78.40000', '403.00000', '2018-12-05 15:39:32', '1'),
(25, '24.00000', '78.00000', '0.00774', '78.40000', '423.00000', '2018-12-05 15:40:29', '1'),
(26, '24.00000', '75.00000', '0.00774', '78.20000', '401.00000', '2018-12-05 15:41:29', '1'),
(27, '24.00000', '76.00000', '0.00772', '78.60000', '407.00000', '2018-12-05 15:42:29', '1'),
(28, '24.00000', '76.00000', '0.00783', '78.50000', '402.00000', '2018-12-05 15:43:29', '1'),
(29, '24.00000', '76.00000', '0.00778', '78.20000', '399.00000', '2018-12-05 15:44:29', '1'),
(30, '24.00000', '76.00000', '0.00777', '78.40000', '402.00000', '2018-12-05 15:45:29', '1'),
(31, '24.00000', '75.00000', '0.00778', '78.40000', '404.00000', '2018-12-05 15:58:19', '1'),
(32, '24.00000', '76.00000', '0.00774', '78.40000', '393.00000', '2018-12-05 15:59:21', '1'),
(33, '24.00000', '75.00000', '0.00768', '78.20000', '406.00000', '2018-12-05 16:00:21', '1'),
(34, '24.00000', '78.00000', '0.00769', '78.40000', '391.00000', '2018-12-05 16:01:19', '1'),
(35, '24.00000', '76.00000', '0.00748', '78.20000', '386.00000', '2018-12-05 16:02:22', '1'),
(36, '24.00000', '80.00000', '0.00828', '78.20000', '851.00000', '2018-12-05 16:03:24', '1'),
(37, '24.00000', '80.00000', '0.00691', '78.20000', '395.00000', '2018-12-05 16:04:19', '1'),
(38, '24.00000', '77.00000', '0.00769', '78.10000', '402.00000', '2018-12-05 16:05:22', '1'),
(39, '24.00000', '80.00000', '0.00878', '78.20000', '395.00000', '2018-12-05 16:06:19', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_data`
--

CREATE TABLE IF NOT EXISTS `detail_data` (
`detail_id` int(11) NOT NULL,
  `detail_idsetting` int(11) NOT NULL,
  `detail_iddata` int(11) NOT NULL,
  `detail_keterangan` varchar(75) NOT NULL,
  `detail_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Dumping data untuk tabel `detail_data`
--

INSERT INTO `detail_data` (`detail_id`, `detail_idsetting`, `detail_iddata`, `detail_keterangan`, `detail_status`) VALUES
(1, 1, 1, 'Temperature is normal', 0),
(2, 2, 1, 'Humidity more than standard limit of 55% RH', 1),
(3, 3, 1, 'CO levels is normal', 0),
(4, 4, 1, 'Noise is normal', 0),
(5, 5, 1, 'Luminance is normal', 0),
(6, 1, 2, 'Temperature is normal', 0),
(7, 2, 2, 'Humidity is normal', 0),
(8, 3, 2, 'CO levels less than standard limit of 0 ppm', 1),
(9, 4, 2, 'Noise is normal', 0),
(10, 5, 2, 'Luminance is normal', 0),
(11, 1, 3, 'Temperature is normal', 0),
(12, 2, 3, 'Humidity is normal', 0),
(13, 3, 3, 'CO levels is normal', 0),
(14, 4, 3, 'Noise is normal', 0),
(15, 5, 3, 'Luminance is normal', 0),
(16, 1, 4, 'Temperature is normal', 0),
(17, 2, 4, 'Humidity is normal', 0),
(18, 3, 4, 'CO levels is normal', 0),
(19, 4, 4, 'Noise is normal', 0),
(20, 5, 4, 'Luminance is normal', 0),
(21, 1, 5, 'Temperature is normal', 0),
(22, 2, 5, 'Humidity is normal', 0),
(23, 3, 5, 'CO levels is normal', 0),
(24, 4, 5, 'Noise is normal', 0),
(25, 5, 5, 'Luminance is normal', 0),
(26, 1, 6, 'Temperature is normal', 0),
(27, 2, 6, 'Humidity more than standard limit of 55% RH', 1),
(28, 3, 6, 'CO levels is normal', 0),
(29, 4, 6, 'Noise is normal', 0),
(30, 5, 6, 'Luminance is normal', 0),
(31, 1, 7, 'Temperature is normal', 0),
(32, 2, 7, 'Humidity more than standard limit of 55% RH', 1),
(33, 3, 7, 'CO levels is normal', 0),
(34, 4, 7, 'Noise is normal', 0),
(35, 5, 7, 'Luminance is normal', 0),
(36, 1, 8, 'Temperature is normal', 0),
(37, 2, 8, 'Humidity more than standard limit of 55% RH', 1),
(38, 3, 8, 'CO levels is normal', 0),
(39, 4, 8, 'Noise is normal', 0),
(40, 5, 8, 'Luminance is normal', 0),
(41, 1, 9, 'Temperature is normal', 0),
(42, 2, 9, 'Humidity more than standard limit of 55% RH', 1),
(43, 3, 9, 'CO levels is normal', 0),
(44, 4, 9, 'Noise is normal', 0),
(45, 5, 9, 'Luminance is normal', 0),
(46, 1, 10, 'Temperature is normal', 0),
(47, 2, 10, 'Humidity more than standard limit of 55% RH', 1),
(48, 3, 10, 'CO levels is normal', 0),
(49, 4, 10, 'Noise is normal', 0),
(50, 5, 10, 'Luminance is normal', 0),
(51, 1, 11, 'Temperature is normal', 0),
(52, 2, 11, 'Humidity more than standard limit of 55% RH', 1),
(53, 3, 11, 'CO levels is normal', 0),
(54, 4, 11, 'Noise is normal', 0),
(55, 5, 11, 'Luminance is normal', 0),
(56, 1, 12, 'Temperature is normal', 0),
(57, 2, 12, 'Humidity more than standard limit of 55% RH', 1),
(58, 3, 12, 'CO levels is normal', 0),
(59, 4, 12, 'Noise is normal', 0),
(60, 5, 12, 'Luminance is normal', 0),
(61, 1, 13, 'Temperature is normal', 0),
(62, 2, 13, 'Humidity more than standard limit of 55% RH', 1),
(63, 3, 13, 'CO levels is normal', 0),
(64, 4, 13, 'Noise is normal', 0),
(65, 5, 13, 'Luminance is normal', 0),
(66, 1, 14, 'Temperature is normal', 0),
(67, 2, 14, 'Humidity more than standard limit of 55% RH', 1),
(68, 3, 14, 'CO levels is normal', 0),
(69, 4, 14, 'Noise is normal', 0),
(70, 5, 14, 'Luminance is normal', 0),
(71, 1, 15, 'Temperature is normal', 0),
(72, 2, 15, 'Humidity more than standard limit of 55% RH', 1),
(73, 3, 15, 'CO levels is normal', 0),
(74, 4, 15, 'Noise is normal', 0),
(75, 5, 15, 'Luminance is normal', 0),
(76, 1, 16, 'Temperature is normal', 0),
(77, 2, 16, 'Humidity more than standard limit of 55% RH', 1),
(78, 3, 16, 'CO levels is normal', 0),
(79, 4, 16, 'Noise is normal', 0),
(80, 5, 16, 'Luminance is normal', 0),
(81, 1, 17, 'Temperature is normal', 0),
(82, 2, 17, 'Humidity more than standard limit of 55% RH', 1),
(83, 3, 17, 'CO levels is normal', 0),
(84, 4, 17, 'Noise is normal', 0),
(85, 5, 17, 'Luminance is normal', 0),
(86, 1, 18, 'Temperature is normal', 0),
(87, 2, 18, 'Humidity more than standard limit of 55% RH', 1),
(88, 3, 18, 'CO levels is normal', 0),
(89, 4, 18, 'Noise is normal', 0),
(90, 5, 18, 'Luminance is normal', 0),
(91, 1, 19, 'Temperature is normal', 0),
(92, 2, 19, 'Humidity more than standard limit of 55% RH', 1),
(93, 3, 19, 'CO levels is normal', 0),
(94, 4, 19, 'Noise is normal', 0),
(95, 5, 19, 'Luminance is normal', 0),
(96, 1, 20, 'Temperature is normal', 0),
(97, 2, 20, 'Humidity more than standard limit of 55% RH', 1),
(98, 3, 20, 'CO levels is normal', 0),
(99, 4, 20, 'Noise is normal', 0),
(100, 5, 20, 'Luminance is normal', 0),
(101, 1, 21, 'Temperature is normal', 0),
(102, 2, 21, 'Humidity more than standard limit of 55% RH', 1),
(103, 3, 21, 'CO levels is normal', 0),
(104, 4, 21, 'Noise is normal', 0),
(105, 5, 21, 'Luminance is normal', 0),
(106, 1, 22, 'Temperature is normal', 0),
(107, 2, 22, 'Humidity more than standard limit of 55% RH', 1),
(108, 3, 22, 'CO levels is normal', 0),
(109, 4, 22, 'Noise is normal', 0),
(110, 5, 22, 'Luminance is normal', 0),
(111, 1, 23, 'Temperature is normal', 0),
(112, 2, 23, 'Humidity more than standard limit of 55% RH', 1),
(113, 3, 23, 'CO levels is normal', 0),
(114, 4, 23, 'Noise is normal', 0),
(115, 5, 23, 'Luminance is normal', 0),
(116, 1, 24, 'Temperature is normal', 0),
(117, 2, 24, 'Humidity more than standard limit of 55% RH', 1),
(118, 3, 24, 'CO levels is normal', 0),
(119, 4, 24, 'Noise is normal', 0),
(120, 5, 24, 'Luminance is normal', 0),
(121, 1, 25, 'Temperature is normal', 0),
(122, 2, 25, 'Humidity more than standard limit of 55% RH', 1),
(123, 3, 25, 'CO levels is normal', 0),
(124, 4, 25, 'Noise is normal', 0),
(125, 5, 25, 'Luminance is normal', 0),
(126, 1, 26, 'Temperature is normal', 0),
(127, 2, 26, 'Humidity more than standard limit of 55% RH', 1),
(128, 3, 26, 'CO levels is normal', 0),
(129, 4, 26, 'Noise is normal', 0),
(130, 5, 26, 'Luminance is normal', 0),
(131, 1, 27, 'Temperature is normal', 0),
(132, 2, 27, 'Humidity more than standard limit of 55% RH', 1),
(133, 3, 27, 'CO levels is normal', 0),
(134, 4, 27, 'Noise is normal', 0),
(135, 5, 27, 'Luminance is normal', 0),
(136, 1, 28, 'Temperature is normal', 0),
(137, 2, 28, 'Humidity more than standard limit of 55% RH', 1),
(138, 3, 28, 'CO levels is normal', 0),
(139, 4, 28, 'Noise is normal', 0),
(140, 5, 28, 'Luminance is normal', 0),
(141, 1, 29, 'Temperature is normal', 0),
(142, 2, 29, 'Humidity more than standard limit of 55% RH', 1),
(143, 3, 29, 'CO levels is normal', 0),
(144, 4, 29, 'Noise is normal', 0),
(145, 5, 29, 'Luminance is normal', 0),
(146, 1, 30, 'Temperature is normal', 0),
(147, 2, 30, 'Humidity more than standard limit of 55% RH', 1),
(148, 3, 30, 'CO levels is normal', 0),
(149, 4, 30, 'Noise is normal', 0),
(150, 5, 30, 'Luminance is normal', 0),
(151, 1, 31, 'Temperature is normal', 0),
(152, 2, 31, 'Humidity more than standard limit of 55% RH', 1),
(153, 3, 31, 'CO levels is normal', 0),
(154, 4, 31, 'Noise is normal', 0),
(155, 5, 31, 'Luminance is normal', 0),
(156, 1, 32, 'Temperature is normal', 0),
(157, 2, 32, 'Humidity more than standard limit of 55% RH', 1),
(158, 3, 32, 'CO levels is normal', 0),
(159, 4, 32, 'Noise is normal', 0),
(160, 5, 32, 'Luminance is normal', 0),
(161, 1, 33, 'Temperature is normal', 0),
(162, 2, 33, 'Humidity more than standard limit of 55% RH', 1),
(163, 3, 33, 'CO levels is normal', 0),
(164, 4, 33, 'Noise is normal', 0),
(165, 5, 33, 'Luminance is normal', 0),
(166, 1, 34, 'Temperature is normal', 0),
(167, 2, 34, 'Humidity more than standard limit of 55% RH', 1),
(168, 3, 34, 'CO levels is normal', 0),
(169, 4, 34, 'Noise is normal', 0),
(170, 5, 34, 'Luminance is normal', 0),
(171, 1, 35, 'Temperature is normal', 0),
(172, 2, 35, 'Humidity more than standard limit of 55% RH', 1),
(173, 3, 35, 'CO levels is normal', 0),
(174, 4, 35, 'Noise is normal', 0),
(175, 5, 35, 'Luminance is normal', 0),
(176, 1, 36, 'Temperature is normal', 0),
(177, 2, 36, 'Humidity more than standard limit of 55% RH', 1),
(178, 3, 36, 'CO levels is normal', 0),
(179, 4, 36, 'Noise is normal', 0),
(180, 5, 36, 'Luminance is normal', 0),
(181, 1, 37, 'Temperature is normal', 0),
(182, 2, 37, 'Humidity more than standard limit of 55% RH', 1),
(183, 3, 37, 'CO levels is normal', 0),
(184, 4, 37, 'Noise is normal', 0),
(185, 5, 37, 'Luminance is normal', 0),
(186, 1, 38, 'Temperature is normal', 0),
(187, 2, 38, 'Humidity more than standard limit of 55% RH', 1),
(188, 3, 38, 'CO levels is normal', 0),
(189, 4, 38, 'Noise is normal', 0),
(190, 5, 38, 'Luminance is normal', 0),
(191, 1, 39, 'Temperature is normal', 0),
(192, 2, 39, 'Humidity more than standard limit of 55% RH', 1),
(193, 3, 39, 'CO levels is normal', 0),
(194, 4, 39, 'Noise is normal', 0),
(195, 5, 39, 'Luminance is normal', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
`setting_id` int(11) NOT NULL,
  `setting_desc` varchar(50) NOT NULL,
  `setting_minimal` decimal(10,0) DEFAULT NULL,
  `setting_maksimal` decimal(10,0) DEFAULT NULL,
  `minimal1` int(11) DEFAULT NULL,
  `minimal2` int(11) DEFAULT NULL,
  `maksimal1` int(11) DEFAULT NULL,
  `maksimal2` int(11) DEFAULT NULL,
  `setting_ruangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_desc`, `setting_minimal`, `setting_maksimal`, `minimal1`, `minimal2`, `maksimal1`, `maksimal2`, `setting_ruangan`) VALUES
(1, 'suhu', '10', '40', -5, 5, 60, 100, 'B301'),
(2, 'kelembaban', '30', '55', 0, 20, 90, 100, 'B301'),
(3, 'CO', '0', '5', -1, -2, 15, 200, 'B301'),
(4, 'kebisingan', '20', '80', 0, 10, 120, 140, 'B301'),
(5, 'intensitas', '60', '1000', 0, 40, 4000, 5000, 'B301');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_username` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_desc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_username`, `user_password`, `user_desc`) VALUES
('didi', 'didi123', 'admin'),
('lutfy', '12345', 'admin'),
('nita', '123nit', 'admin'),
('wulan', '123', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `detail_data`
--
ALTER TABLE `detail_data`
 ADD PRIMARY KEY (`detail_id`), ADD KEY `detail_idsetting` (`detail_idsetting`), ADD KEY `detail_iddata` (`detail_iddata`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `detail_data`
--
ALTER TABLE `detail_data`
MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
