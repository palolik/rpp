-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2024 at 09:41 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'o', 'o');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
CREATE TABLE IF NOT EXISTS `devices` (
  `si` int NOT NULL AUTO_INCREMENT,
  `employeeid` int NOT NULL,
  `pcname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pclap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `processor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `motherboard` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `hdd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ssd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cdrom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `os` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pcip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pdate` date DEFAULT NULL,
  `warrenty` date DEFAULT NULL,
  PRIMARY KEY (`si`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`si`, `employeeid`, `pcname`, `pclap`, `processor`, `motherboard`, `ram`, `hdd`, `ssd`, `cdrom`, `os`, `pcip`, `pdate`, `warrenty`) VALUES
(2, 0, '', 'Dell Optiplex 4590 AIO', 'Intel Core i5 11500@1.50', '', '8 GB DDR4 3200', '1 TB WD', '256 GB Dahua', 'No', 'Win 10 64 Pro', '', '2008-02-20', '0000-00-00'),
(3, 0, 'EDEngg-PC', 'Dell Optiplex 4590 AIO', 'Intel Core i5 11500@1.50', '', '8 GB DDR4 3200', '1 TB WD', '256 GB Dahua', 'No', 'Win 10 64 Pro', '192.168.1.36', '2008-02-20', '0000-00-00'),
(4, 0, 'ED_Finance', 'HP Prodesk 400 G7', 'Intel Core i5 10500', '', '8 GB DDR4 3200', '1TB', '512 GB', 'Yes', 'Win 10 64', '192.168.1.122', '2012-08-20', '0000-00-00'),
(5, 0, 'Praloy-PC', '', 'Intel Core i5 6400', 'Unkown', '8 GB DDR4 2133', '1 TB Toshiba', 'No', 'ASUS DRW', 'Win 7 64 Ultimate', '192.168.1.53', '0000-00-00', '0000-00-00'),
(6, 0, 'GMHR-PC', '', 'Intel Core 2 Quad 8200@2.33', 'Intel ECG3510M', '2 GB DDR2 800', '256 GB Samsung', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.19', '0000-00-00', '0000-00-00'),
(7, 0, 'CEOnM-PC', '', 'Intel Core i5 4590', 'MSI 7817', '4 GB DDR3 1600', '500 GB WD', 'No', 'Yes', 'Win 7 32', '', '0000-00-00', '0000-00-00'),
(8, 0, 'CEPnD-PC', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB', '512 GB', 'Yes', 'Win 10 64 Pro', 'dhcp with NAT from Wifi Router', '2021-12-20', '0000-00-00'),
(9, 0, 'GMFA-PC', 'HP ProDesk 400 G7 Microtower PC', 'Intel Core i5 10500', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.51', '2013-09-20', '0000-00-00'),
(10, 0, 'MANAGERHR', '', 'Intel Core i5 4590@3.30', 'MSI 7817', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.55', '0000-00-00', '0000-00-00'),
(11, 0, 'CS-PC', '', 'Intel Core i3 4130', 'MSI 7817', '2 GB DDR3 1333', '500 GB WD', 'No', 'Yes', 'Win 7 32', '192.168.1.58', '0000-00-00', '0000-00-00'),
(12, 0, '	ManagerAudit-PC', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', 'dhcp with NAT from Wifi Router', '2021-12-20', '0000-00-00'),
(13, 0, '	\nWIN-BI6I2E42R06', '', 'Intel Core i5 4590@3.30', 'MSI 7817', '4 GB DDR3 1600', '500 GB WD', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.59', '0000-00-00', '0000-00-00'),
(14, 0, 'Asad-EXEN', '', 'Intel Core i5 9400@2.90', 'AsRock H310M', '8 GB DDR4 2400', '1 TB Toshiba', '120 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.64', '0000-00-00', '0000-00-00'),
(15, 0, 'MirzaShofiq-PC', '', 'Intel Core i5 6402', 'MSI 7996', '4 GB DDR4 2133', '1 TB WD', 'No', 'Yes', 'Win 7 64', '192.168.1.73', '0000-00-00', '0000-00-00'),
(16, 0, 'Humayon-PC', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.24', '0000-00-00', '0000-00-00'),
(17, 0, 'rpcl-Sharif', '', 'Intel Core i3 4150@3.5', '', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 7 32 Ultimate', '', '0000-00-00', '0000-00-00'),
(18, 0, 'Mahmud-PC', '', 'Intel Core i3 4130@3.40', 'MSI 7817', '4 GB DDR3 1333', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.62', '0000-00-00', '0000-00-00'),
(19, 0, 'ASHIKUR-TRAININ', '', 'Intel Core  i5 7400@3.0', 'Gigabyte H110M-S2PH', '4 GB DDR4 2400', '1 TB', 'No', 'Yes', 'Win 10 64', '192.168.1.56', '0000-00-00', '0000-00-00'),
(20, 0, 'DESKTOP-ST5KGIP', '', 'Intel Core  i5 7400@3.0', 'Gigabyte H110M-S2PH', '8 GB DDR4 2400', '1 TB WD', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.18', '0000-00-00', '0000-00-00'),
(21, 0, 'Shahid-PC', '', 'Intel Core i5 2400@3.10', 'Intel BEH6110H', '6 GB DDR3 1333', '500 GB WD', '240 GB Transcend', 'Yes', 'Win 10 64 Pro', '', '0000-00-00', '0000-00-00'),
(22, 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(23, 0, 'Saleh-PC', '', 'Intel Core i5 7400@3.00', 'Asus', '8 GB DDR4 2400', '1 TB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.76', '0000-00-00', '0000-00-00'),
(24, 0, 'Raihan-PC', '', 'Intel Dual Core 5400@2.70', 'Gigabyte G41 Combo', '3 GB DDR2 800', '320 GB Samsung', 'No', 'No', 'Win 7 32 Ultimate', '192.168.1.42', '0000-00-00', '0000-00-00'),
(25, 0, 'Accounts1-PC', '', 'Intel Core i3 2130@3.40', 'Intel DH61', '2 GB DDR3 1333', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.14', '0000-00-00', '0000-00-00'),
(26, 0, 'Natasha-PC', 'HP ProDesk 400 G7 Microtower PC', 'Intel Core i5 10500', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.12', '2013-09-20', '0000-00-00'),
(27, 0, 'Nahil-Admin', '', 'Intel Dual Core 5400@2.70', 'Gigabyte G31 M', '3 GB DDR2 800', '256 GB Hitachi', 'No', 'No', 'Win 7 32 Ultimate', '192.168.1.80', '0000-00-00', '0000-00-00'),
(28, 0, 'Zoynal-PC', '', 'Intel Core i5 4460', 'MSI 7817', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 7 32', '', '0000-00-00', '0000-00-00'),
(29, 0, 'Subroto-PC', '', 'Intel Core i5 6400@2.70', 'MSI 7A15', '4 GB DDR4 2133', '1 TB Toshiba', '240 GB Transcend', 'ASUS DRW', 'Win 10 64 Pro', '192.168.1.44', '0000-00-00', '0000-00-00'),
(30, 0, 'KAMAL-HR', '', 'Intel Core i3 4150@3.5', 'Gigabyte H110M-S2PH', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.23', '0000-00-00', '0000-00-00'),
(31, 0, 'Rumana-PC', '', 'Intel Core i5 7400@3.0', 'MSI 7A15', '12 GB DDR4 2400', '1 TB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', '', '0000-00-00', '0000-00-00'),
(32, 0, 'Shafiq-PC', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.20', '2021-12-20', '0000-00-00'),
(33, 0, 'BATEN-ICT', '', 'Intel Core i3 4150@3.5', '	Gigabyte H81M-DS2V', '12 GB DDR3 1600', '500 GB', '240 GB', 'No', 'Win 10 64', '192.168.1.11', '0000-00-00', '0000-00-00'),
(34, 0, 'Shamir-PC', '', 'Intel Core i3 4150@3.5', '	Gigabyte H81M-DS2V', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'CD Rom', 'Win 7 32 Ultimate', '192.168.1.31', '0000-00-00', '0000-00-00'),
(35, 0, 'Moazzam-PC', '', 'Intel Core i5 6400@2.70', 'MSI 7996', '4 GB DDR4 2133', '320 GB Hitachi', 'No', 'ASUS DRW', 'Win 10 64 Pro', '192.168.1.75', '0000-00-00', '0000-00-00'),
(36, 0, 'Kimiya-PC', '', 'Intel Core i3 4150', '	Gigabyte H81M-DS2V', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.43', '0000-00-00', '0000-00-00'),
(37, 0, 'Prasanta-PC', '', 'Intel Core i3 4130@3.40', 'MSI 7817', '4 GB DDR3 1333', '500 GB WD', '240 Transcend', 'Yes', 'Win 10 64 Pro', '192.168.1.64', '0000-00-00', '0000-00-00'),
(38, 0, 'DESKTOP-M46S788', '', 'Intel Core i5 4590@3.30', 'MSI 7817', '4 GB DDR3 1600', '500 GB WD', 'No', 'Yes', 'Win 10 64 Enterprise', '192.168.1.3', '0000-00-00', '0000-00-00'),
(39, 0, 'Sarowar-pc', '', 'Intel Core i5 6400@2.70', 'Asus', '8 GB DDR4 2133', '1 TB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.82', '0000-00-00', '0000-00-00'),
(40, 0, 'Nazrul-PC', '', 'Intel Core i5 6400@2.70', 'MSI 7996', '8 GB DDR4 2133', '1 TB Toshiba', 'No', 'ASUS DRW', 'Win 10 64 Pro', '192.168.1.123', '0000-00-00', '0000-00-00'),
(41, 0, 'Mamun-PC', 'HP ProDesk 600 G6', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', 'No', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.38', '2015-09-20', '0000-00-00'),
(42, 0, 'Sharafi-PC', '', 'Intel Core i5 7400', 'MSI 7A15', '4 GB DDR4 2133', '500 GB WD', 'No', 'ASUS DRW', 'Win 7 64', '192.168.1.83', '0000-00-00', '0000-00-00'),
(43, 0, 'Mehedi-PC', '', 'Intel Core 2 Duo@3.0', '', '2 GB DDR2 800', '256GB  ', '', 'No', 'Win 7 32 Ultimate', '192.168.1.60', '0000-00-00', '0000-00-00'),
(44, 0, 'DESKTOP-06NLRIB', '', 'Intel Core i5 4590@3.30', 'MSI 7817', '4 GB DDR3 1600', '500 GB WD', 'No', 'Yes', 'Win 10 64 Enterprise', '192.168.1.29', '0000-00-00', '0000-00-00'),
(45, 0, 'Salma-PC', '', 'Intel Dual Core E5400@2.70', 'Gigabyte G41 Combo', '3 GB DDR2 800', '500 GB', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.34', '0000-00-00', '0000-00-00'),
(46, 0, 'ARUP-PC', '', 'Intel Dual Core E5700@3.0', 'Gigabyte G41 Combo', '2 GB DDR3 1333', '500 GB Samsung', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.229', '0000-00-00', '0000-00-00'),
(47, 0, 'fazlu-pc', 'HP ProDesk 400 G7 Microtower PC', 'Intel Core i5 10500', '', '8 GB DDR4 3200', '1 TB WD', '512 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.12', '2013-09-20', '0000-00-00'),
(48, 0, 'SUMAYA1-PC', '', 'Intel Core  i5 6400', '	MSI 7996', '4 GB DDR4 2133', '500 GB', 'No', 'Yes', 'Win 10 64', '192.168.1.22', '0000-00-00', '0000-00-00'),
(49, 0, 'Bazlu-PC', '', 'Intel Core i3 4130', 'Gigabyte H81M-S2PV', '2 GB DDR3 1333', '1 TB WD', 'No', 'Yes', 'Win 7 32', '192.168.1.50', '0000-00-00', '0000-00-00'),
(50, 0, 'Saddam-PC', '', 'Intel Core i5 7400@3.00', 'Gigabyte H110M-S2PH', '8 GB DDR4 2400', '1 TB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.30', '0000-00-00', '0000-00-00'),
(51, 0, 'Shakil', '', 'Intel Core i5 4590@3.30', 'MSI 7817', '4 GB DDR3 1600', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.48', '0000-00-00', '0000-00-00'),
(52, 0, 'Sharmin_Sultana-PC', '', 'Intel Dual Core E5700@3.0', 'Gigabyte G41 Combo', '2 GB DDR3 1333', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.66', '0000-00-00', '0000-00-00'),
(53, 0, 'Tareq-PC', '', 'Intel Core i5 6400@2.70', 'Asus H110M-K', '4 GB DDR4 2133', '1 TB Toshiba', '240 GB', 'Yes', 'Win 10 64 Pro', '192.168.1.74', '0000-00-00', '0000-00-00'),
(54, 0, 'Borhan-PC', '', 'Intel Core i3 4130', 'MSI 7817', '2 GB DDR3 1333\n4 GB DDR3 1600', '500 GB', 'No', 'Yes', 'Win 10 64', '192.168.1.69', '0000-00-00', '0000-00-00'),
(55, 0, 'EVA-PC', '', 'Intel Core i5 7400', 'Gigabyte H110M-DS2', '8 GB DDR4 2400', '1 TB WD', 'No', 'Yes', 'Win 10 64', '192.168.1.40', '0000-00-00', '0000-00-00'),
(56, 0, 'Lighthouse', '', 'Intel Core i5 6400', 'Asus', '4 GB DDR4 2133', '1 TB', 'No', 'Yes', 'Win Server 2012', '192.168.1.4', '0000-00-00', '0000-00-00'),
(57, 0, 'Tania-PC', '', 'Intel Core i5 6400@2.70', 'MSI 7A15', '8 GB DDR4 2133', '1 TB WD', 'No', 'ASUS DRW', 'Win 10 64 Enterprize', '192.168.1.156', '0000-00-00', '0000-00-00'),
(58, 0, 'Ehsan-PC', '', 'Intel Core i3@2120', 'Unknown', '2 GB DDR3 1333', '1 TB WD', 'No', 'CD Rom', 'Win 7 32 Ultimate', '192.168.1.63', '0000-00-00', '0000-00-00'),
(59, 0, 'Mukta-PC', '', 'Intel Core i5 6400@2.70', 'MSI 7996', '4 GB DDR4 2133', '500 GB WD', 'No', 'ASUS DRW', 'Win 10 64 Pro', '192.168.1.121', '0000-00-00', '0000-00-00'),
(60, 0, 'Moushumi-PC', '', 'Intel Core i5 7400@3.0', 'Gigabyte H110M-S2PH', '8 GB DDR4 2400', '1 TB WD', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.26', '0000-00-00', '0000-00-00'),
(61, 0, 'Mostakim-PC', '', 'Intel Core i7 2600@3.40', 'Intel BLH6710H', '2 GB DDR3 1333', '1 TB WD', 'No', 'Yes', 'Win 7 64 Ultimate', '192.168.1.197', '0000-00-00', '0000-00-00'),
(62, 0, 'Marufa-PC', '', 'Intel Core i3 4150@3.50', 'Gigabyte H81M-S2PV', '4 GB DDR3 1600', '1 TB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.54', '0000-00-00', '0000-00-00'),
(63, 0, 'Mamun-PC', '', 'Intel Core2Duo 7500@2.93', 'Intel G4110H', '4 GB DDR2 800', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', '192.168.1.118', '0000-00-00', '0000-00-00'),
(64, 0, 'Mahbub-PC', '', 'Intel Core i5 7400@3.0', 'Gigabyte H110M-S2PH', '8 GB DDR4 2400', '1 TB WD', 'No', 'Yes', 'Win 10 64 Enterprise', '192.168.1.49', '0000-00-00', '0000-00-00'),
(65, 0, 'AMRAN-PC', '', 'Intel Core i3 4150@3.50', 'Gigabyte H81M-S2PV', '4 GB DDR3 1600', '500 GB Toshiba', 'No', 'No', 'Win 7 32 Ultimate', '192.168.1.81', '0000-00-00', '0000-00-00'),
(66, 0, 'saddam_acct-pc', '', 'Intel Core i3 4130@3.40', 'MSI 7817', '8 GB DDR3 1600', '500 GB Toshiba', 'No', 'Yes', 'Win 10 64 Pro', 'Dhcp', '0000-00-00', '0000-00-00'),
(67, 0, '', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB WD', 'No', 'Yes', 'Win 10 64 Pro', '', '2021-12-20', '0000-00-00'),
(68, 0, 'finance_common-pc', '', 'Intel Core2Duo 7500@2.93', 'Intel G4110H', '4 GB DDR2 800', '500 GB WD', 'No', 'Yes', 'Win 10 64 Pro', 'Dhcp', '0000-00-00', '0000-00-00'),
(69, 0, 'Razzak-PC', '', 'Intel Core i3 2130@3.40', 'Unknown', '2 GB DDR3 1333', '500 GB WD', 'No', 'Yes', 'Win 7 32 Ultimate', 'Dhcp', '0000-00-00', '0000-00-00'),
(70, 0, 'CS-JAM', '', 'Intel Core i5 8400@2.80', 'Gigabyte H310M', '8 GB DDR4 2400', '1 TB WD', 'No', 'Yes', 'Win 10 64 Pro', '192.168.1.117', '0000-00-00', '0000-00-00'),
(71, 0, '', 'Dell Optiplex 3080', 'Intel Core i5 10500@3.10', '', '8 GB DDR4 3200', '1 TB WD', 'No', 'Yes', 'Win 10 64 Pro', '', '2021-12-20', '0000-00-00'),
(72, 180011265, 'dell', 'laptop', 'core i 5', 'rizon', '16gb', '2TB', '1TB', 'no', 'no', 'no', '0000-00-00', '0000-00-00'),
(73, 180011263, 'asd', 'PC', 'asd', 'ads', 'sad', 'sad', 'ads', 'sad', 'we', 'sda', '2024-01-05', '2024-01-05'),
(74, 180011010, 'asd', 'PC', 'asd', 'ads', 'sad', 'sad', 'ads', 'sad', '', 'sda', '2024-01-05', '2024-01-05'),
(75, 180011016, 'asd', 'PC', 'asd', 'ads', 'sad', 'sad', 'ads', 'sad', 'we', 'sda', '2024-01-05', '2024-01-05'),
(76, 180011008, 'yy', 'PC', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', '2024-01-05', '2024-01-05'),
(77, 180018001, 'nn', 'PC', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', '2024-01-05', '2024-01-05'),
(78, 180011058, 'tt', 'PC', 'tt', 'tt', 'tt', 'tt', 'tt', 'tt', 'tt', 'tt', '2024-01-05', '2024-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employeeid` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `employeecode` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `employeename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `officename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `designation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `contactno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=352 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeid`, `employeecode`, `employeename`, `officename`, `designation`, `contactno`, `email`, `password`, `status`) VALUES
(2, '180011001s', '0001s', 'Md. Abdus Saburs', 'Corporate Offices', 'Managing Directors', '01741330172s', 'md@rpcl.gov.bda', '12', 'Workinga'),
(13, '180011265', '0288', 'Md. Amirul Islam', 'Corporate Office', 'Superintending Engineer (O &M)', '01726321445', 'smirty.amin@gmail.com', '12', 'Working'),
(14, '180011010', '0267', 'Kamal Hossain', 'Corporate Office', 'Deputy General Manager (HR & Admin)', '01711-944767', 'kamaltradecom@gmail.com', '12', 'Working'),
(15, '180011263', '0298', 'Md. Iqbal  Karim', 'Corporate Office', 'Superintending Engineer (O &M)', '01788111333', 'qblkarim@yahoo.com', '12', 'Working'),
(16, '185011056', '0413', 'Prantush Chandra Shaha', 'Corporate Office', 'Company Secretary', '01717349526', 'shahaprantush@yahoo.com', '', 'Working'),
(17, '180011008', '0017', 'A. K. M.  Mahmudul Alam', 'Corporate Office', 'Manager (Audit)', '01914753405', 'mahmud65@gmail.com', '', 'Working'),
(18, '180011015', '0036', 'Khandokar Shariful Islam', 'Corporate Office', 'Manager (Admin)', '01715622641', 'sharifulislam75@ymail.com', '', 'Working'),
(19, '180011016', '0037', 'Mahmud  Hossain', 'Corporate Office', 'Manager (HR)', '01673640240', 'kmahmud13@yahoo.com', '', 'Working'),
(20, '180011059', '0038', 'Mohammad Ashikur Rahman', 'Corporate Office', 'Manager (Training)', '01716-767391', 'ashikur_112@yahoo.com', '', 'Working'),
(21, '181011018', '0305', 'Sad Md.  Saber', 'Mymensingh Power Station', 'Executive Engineer (Electrical,I&C)', '01716-359626', 'saber0024@gmail.com', '', 'Working'),
(351, '180018001', '8001', 'nafis tanjom', 'two', 'CEO', '01658256921', 'azizulalamprottoy@gmail.com', '', 'On Leave'),
(23, '181011027', '0297', 'Mohammad  Asaduzzaman', 'Corporate Office', 'Executive Engineer(P&C)', '01726788645', 'shohag.buet@gmail.com', '', 'Working'),
(24, '185011017', '0285', 'Md. Ferdaws Rahman', 'Corporate Office', 'Executive Engineer(D&D)', '01714261586', 'ferdaws00131@gmail.com', '', 'Working'),
(25, '180011058', '0023', 'Mirza  Safiqul Islam', 'Corporate Office', 'Executive Engineer(O&M)', '01827580078', 'imirzasafiqul@yahoo.com', '', 'Working'),
(26, '180011096', '0039', 'Muhammad Zaved Hossain', 'Mymensingh Power Station', 'Manager (Admin)', '01720521497', 'zaved.rpcmps@yahoo.com', '', 'Working'),
(27, '180011274', '0368', 'Md. Asadusjaman', 'Gazipur 100MW HFO Fired Power Plant', 'Executive Engineer (Operation)', '01722821437', 'asad_031074@yahoo.com', '', 'Working'),
(28, '180011031', '0026', 'Md. Humayoun Aktar', 'Corporate Office', 'Executive Engineer (P&P&EHS)', ' 01778772255', 'humayoun.aktar@gmail.com', '', 'Working'),
(29, '180011013', '0234', 'Prasanta Kumar Sutradhar', 'Corporate Office', 'Executive Engineer (P&P&EHS)', '01711027571', 'prasanta.sutradhar@rpcl.gov.bd', '', 'Working'),
(30, '180011060', '0033', 'Khan Mohammad Abdur Razzak', 'Raozan Power Plant', 'Executive Engineer (P&P&EHS)', '01819035845', 'raz_032014@yahoo.com', '', 'Working'),
(31, '180011094', '0024', 'Muhammad Aminul Islam', 'Mymensingh Power Station', 'Executive Engineer (Operation)', '01770-053131', 'amibdesh@yahoo.com', '', 'Working'),
(32, '180011092', '0027', 'Md. Abdullah Sayeed', 'Mymensingh Power Station', 'Executive Engineer (Operation)', '01781-187988', 'bdsayeed_buet@yahoo.com', '', 'Working'),
(33, '181011028', '0311', 'Mohiuddin  Sarkar', 'Corporate Office', 'Manager (A/F)', '01911625877', 'mohiais@yahoo.com', '', 'Working'),
(34, '180011086', '0029', 'Md.  Saiful Islam', 'Mymensingh Power Station', 'Executive Engineer (Operation)', '01721925901', 'saiful.bindu@gmail.com', '', 'Working'),
(35, '180011014', '0031', 'Shahidul Islam', 'Corporate Office', 'Sub-Divisional Engineer(O&M)', '01711578328', 'engr.shahidul33@gmail.com', '', 'Working'),
(36, '180011019', '0052', 'Mohammad Rizvi Shahriar', 'Corporate Office', 'Sub-Divisional Engineer(P&D)', '01617647031', 'rizvi_rpcl@yahoo.com', '', 'Working'),
(37, '180011020', '0096', 'Natasha  Zaman', 'Corporate Office', 'Deputy Manager (Company Secretariat)', '01711961537', 'natasha.zaman@rpcl.gov.bd', '', 'Working'),
(38, '180011029', '0138', 'Rumana  Afroz', 'Corporate Office', 'Deputy Manager (HR)', '01732227172', 'rumanadina_25@yahoo.com', '', 'Working'),
(39, '180011043', '0053', 'Rayhan Sharif', 'Corporate Office', 'Sub-Divisional Engineer(P&D)', '01712832412', 'rayhan_sharif@yahoo.com', '', 'Working'),
(40, '180011062', '0064', 'Subrota  Debnath', 'Corporate Office', 'Staff Officer to MD (Sub-Divisional Engineer)', '01722544697', 'subrotaeee@gmail.com', '', 'Working'),
(41, '180011090', '0030', 'Md.  Anwar Morshed', 'Mymensingh Power Station', 'Sub-Divisional Engineer (Store & Inventory)', '01771553140', 'morshed_709@yahoo.com', '', 'Working'),
(42, '180011093', '0041', 'Md. Bashir Uddin', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Electrical, I&C)', '01712504301', 'bashirrpcl@yahoo.com', '', 'Working'),
(43, '180011112', '0054', 'Md. Saleh Ashfaqul Karim', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Maintenance)', '01712-270625', 'salehashfaq@hotmail.com', '', 'Working'),
(44, '180011117', '0051', 'Biplob Kumar Mondal', 'Mymensingh Power Station', 'Deputy Manager (Chemical)', '01734-340737', 'biplob153@gmail.com', '', 'Working'),
(45, '181011004', '0286', 'Md. Abdul Baten', 'Corporate Office', 'Deputy Manager (ICT)', '01714926144', 'abdulbaten7@gmail.com', '', 'Working'),
(46, '181011017', '0111', 'Md Shafiqul Islam', 'Corporate Office', 'Deputy Manager (Audit)', '01711666369', 'msip79@gmail.com', '', 'Working'),
(47, '180011018', '0042', 'Md. Mostafizur Rahman', 'Corporate Office', 'Deputy Manager (A/F)', '01718472540', 'mostafiz1973@yahoo.com', '', 'Working'),
(48, '180011021', '0097', 'Nahil  Ahmed', 'Corporate Office', 'Deputy Manager (HR/Admin)', '01710292395', 'nahil.ahmed@rpcl.gov.bd', '', 'Working'),
(49, '180011114', '0062', 'A. S. M.  Jabir', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Electrical, I&C)', '01671-608882', 'jbrrzv@gmail.com', '', 'Working'),
(50, '180011108', '0049', 'Md. Shamsul Haque Khan', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Maintenance)', '01711-287794', 'shamsul1057@gmail.com', '', 'Working'),
(51, '181011021', '0095', 'Mirza Abdullah Al Mamun', 'Gazipur Power Plant', 'Deputy Manager (HR/Admin)', '01762722477', 'mirzamamunrpcl@gmail.com', '', 'Working'),
(52, '183011079', '0294', 'Md. Abdul Alim', 'Gazipur Power Plant', 'Sub-Divisional Engineer(Electrical, I&C)', '01767-822017', 'alim_himel@yahoo.com', '', 'Working'),
(53, '180011037', '0048', 'Quazi A.F.M Mohiuddin', 'Gazipur Power Plant', 'Sub-Divisional Engineer(Maintenance)', '01817094393', 'mohi_me_123@yahoo.com', '', 'Working'),
(54, '180011095', '0044', 'Md. Fazlul Haque', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01911-262843', 'fazluleee@gmail.com', '', 'Working'),
(55, '181011023', '0115', 'Zoynal  Abedin  Bhuiya', 'Corporate Office', 'Deputy Manager (HR/Admin)', '01714-261491', 'joy_rizon@yahoo.com', '', 'Working'),
(56, '180011027', '0108', 'Mohammad Kamal Hossain', 'Corporate Office', 'Deputy Manager (HR/Admin)', '01714988609', 'kfar_000@yahoo.com', '', 'Working'),
(57, '180011042', '0056', 'Md. Mahbub  Alam', 'Gazipur Power Plant', 'Sub-Divisional Engineer(Operation)', '01714864802', 'mahbub_me31@yahoo.com', '', 'Working'),
(58, '181011049', '0359', 'Md.  Ruhul Amin', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Divisional Engineer(Maintenance)', '01728-110410', 'sujon_kuet@yahoo.com', '', 'Working'),
(59, '180011068', '0047', 'Arifuzzaman  Tipu', 'Raozan Power Plant', 'Sub-Divisional Engineer(Operation)', '01813024966', 'engr.ariftipu@yahoo.com', '', 'Working'),
(60, '181011014', '0110', 'Mohammad Mamun Ur Rashid', 'Corporate Office', 'Deputy Manager (Training)', '01817529227', 'mamunurrashid127@yahoo.com', '', 'Working'),
(61, '180011115', '0043', 'Md. Abdur Rouf', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01711-072573', 'maroufrokon@gmail.com', '', 'Working'),
(62, '180011103', '0061', 'Md. Nurul Islam', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01914-443253', 'nurul_eeeruet@yahoo.com', '', 'Working'),
(63, '180011035', '0063', 'Md. Nazrul Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Divisional Engineer(Operation)', '01719535717', 'nazrul_041029@yahoo.com', '', 'Working'),
(64, '180011044', '0065', 'Md.  Amjad Hossain', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Divisional Engineer(Operation)', '01710578698', 'amjad_dueteee05@yahoo.com', '', 'Working'),
(65, '180011032', '0034', 'Sarker  Mohammed Kamruzzaman', 'Gazipur Power Plant', 'Sub-Divisional Engineer(Operation)', '01717768825', 'zaman061@gmail.com', '', 'Working'),
(66, '185011027', '0358', 'Md. Nazrul Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Divisional Engineer(Operation)', '01719535717', 'nazrul_ee@yahoo.com', '', 'Working'),
(67, '180011102', '0057', 'Fahid Bin Feroz', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01737-221786', 'fahid.feroz@yahoo>com', '', 'Working'),
(68, '180011106', '0058', 'Md. Faruqul Islam', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01712343868 ', 'faruq077@yahoo.com', '', 'Working'),
(69, '180011065', '0069', 'A.K.M Abdur Rahim', 'Raozan Power Plant', 'Sub-Divisional Engineer(Operation)', '01813279624', 'rahim.meduet@gmail.com', '', 'Working'),
(70, '180011107', '0067', 'Md.  Golam Robbany', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', ' 01918787693', 'md.golam_robbany@yahoo.com', '', 'Working'),
(71, '180011063', '0068', 'Mohammad  Hashem', 'Raozan Power Plant', 'Sub-Divisional Engineer(Operation)', '+8801818086508', 'engr.hashem61@gmail.com', '', 'Working'),
(72, '180011099', '0066', 'Bany Madab Barman', 'Mymensingh Power Station', 'Sub-Divisional Engineer(Operation)', '01741407110', 'banymadab@yahoo.com', '', 'Working'),
(73, '180011067', '0055', 'Mahbubul  Hasan', 'Raozan Power Plant', 'Sub-Divisional Engineer(Operation)', '01912367566', 'mahabubrpcl@yahoo.com', '', 'Working'),
(74, '185011128', '0441', 'Sadmanur Rahman', 'Corporate Office', 'Assistant Engineer', '01521306561', 'Sadmanur1.50@gmail.com', '', 'Working'),
(75, '185011129', '0442', 'Mamun Bepari', 'Corporate Office', 'Assistant Engineer', '01917133543', 'mamunsp33@gmail.com', '', 'Working'),
(76, '185011130', '0443', 'Sajal Roy', 'Corporate Office', 'Assistant Engineer', '01736989351', 'sajalroy6107@gmail.com', '', 'Working'),
(77, '185011131', '0444', 'Md. Emam Hossen', 'Raozan Power Plant', 'Assistant Engineer (Electrical, I&C)', '01621305189', 'emam.eee.ruet@gmail.com', '', 'Working'),
(78, '185011133', '0446', 'Md.  Shirajul Islam', 'Mymensingh Power Station', 'Assistant Engineer (Mechanical Maintenance)', '01581266239', 'Shasif1995@gmail.com', '', 'Working'),
(79, '180011022', '0072', 'Kimiya  Reza', 'Corporate Office', 'Assistant Engineer(O&M)', '01670165228', 'kimiyareza@hotmail.com', '', 'Working'),
(80, '180011038', '0070', 'Md. Rafejul Islam', 'Corporate Office', 'Assistant Engineer(O&M)', '01914724634', 'rafii_duet@yahoo.com', '', 'Working'),
(81, '180011049', '0118', 'Md.  Ead Ali', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01717706922', 'ead.rpc@gmail.com', '', 'Working'),
(82, '180011100', '0078', 'Md. Moazzam  Hossain', 'Corporate Office', 'Assistant Engineer (P&D)', '01779702172', 'hmd.moazzam@yahoo.com', '', 'Working'),
(83, '180011104', '0040', 'Amrita Kumar Ghose', 'Mymensingh Power Station', 'Assistant Manager (Admin), SG', '01711232008', 'amrito.kumar@yahoo.com', '', 'Working'),
(84, '180011119', '0100', 'Muhammad  Azaharul  Islam', 'Mymensingh Power Station', 'Assistant Engineer (Mechanical Maintenance)', ' 01718817663', 'azahar.shanto@gmail.com', '', 'Working'),
(85, '180011128', '0114', 'Md.  Ahsan Habib', 'Mymensingh Power Station', 'Assistant Engineer', '01727-988583', 'rakib021288@yahoo.com', '', 'Working'),
(86, '180011271', '0351', 'Muhammad  Rahman Sobhan', 'Mymensingh Power Station', 'Assistant Manager (Chemical)', '01914-672221', 'rahmansobhan33@yahoo.com', '', 'Working'),
(87, '180011273', '0360', 'Fairooz  Nawar Sarafi', 'Corporate Office', 'Assistant Engineer(O&M)', '01683688660', 'fairooz.sarafi@gmail.com', '', 'Working'),
(88, '181011031', '0312', 'Md. Mamunur Rashid', 'Corporate Office', 'Assistant Manager (A/F)', '01771599530', 'mamunrana606@gmail.com', '', 'Working'),
(89, '185011049', '0409', 'Sagar Ahmed', 'Gazipur Power Plant', 'Assistant Engineer (Electrical, I&C)', '01521477450', 'sagarahmed.ruet@gmail.com', '', 'Working'),
(90, '180011023', '0098', 'Wahiduzzaman', 'Corporate Office', 'Assistant Engineer(P&C)', '01711180282', 'wahiud_78@yahoo.com', '', 'Working'),
(91, '180011033', '0090', 'Nowshin   Zahan', 'Corporate Office', 'Assistant Engineer', '01675201803', 'tanzina.nowshin@gmail.com', '', 'Working'),
(92, '180011048', '0106', 'Md. Sayful Islam', 'Gazipur Power Plant', 'Assistant Manager (Chemical)', '01715613806', 'sayfulrpc@gmail.com', '', 'Working'),
(93, '180011050', '0119', 'Md. Hamidul Islam Hamdu', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01712376712', 'hamdu.82@gmail.com', '', 'Working'),
(94, '180011066', '0127', 'Dipankar Sarkar', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer', '01813171469', 'dipanker.sarkar@rpcl.gov.bd', '', 'Working'),
(95, '180011111', '0075', 'Md. Ruhul Amin', 'Mymensingh Power Station', 'Assistant Engineer (Electrical, I&C)', ' 01711331991', 'faridrpcl@yahoo.com', '', 'Working'),
(96, '180011123', '0101', 'Md.  Kamruzzaman', 'Mymensingh Power Station', 'Assistant Engineer (Mechanical Maintenance)', '01715943508', 'kamruzzaman.mps@gmail.com', '', 'Working'),
(97, '180011133', '0131', 'SHARMIN SULTANA', 'Corporate Office', 'Assistant Engineer (P&D)', '01737983552', 'sultanasharmin91@yahoo.com', '', 'Working'),
(98, '181011029', '0314', 'Md.  Sarowar  Zahan', 'Corporate Office', 'Assistant Manager (ICT)', '+8801735420332', 'sarowariu@gmail.com', '', 'Working'),
(99, '181011030', '0313', 'Md. Nazrul  Islam', 'Corporate Office', 'Assistant Manager (A/F)', '01738670046', 'nazrulislam.ais@gmail.com', '', 'Working'),
(100, '180011028', '0137', 'Salma  Ahmed', 'Corporate Office', 'Assistant Manager (HR/Admin)', '01912078652', 'salmazahid1977@yahoo.com', '', 'Working'),
(101, '180011053', '0120', 'Md. Ariful Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer (Operation)', '01717680220', 'ariful.bogra@yahoo.com', '', 'Working'),
(102, '180011120', '0105', 'Biprojeet   Biswas', 'Mymensingh Power Station', 'Assistant Engineer (Mechanical Maintenance)', '01718-768468', 'biprojeet_shoma@yahoo.com', '', 'Working'),
(103, '180011125', '0102', 'S. M. Munjurul Murshed', 'Mymensingh Power Station', 'Assistant Manager (A/F)', '01775-675830', 'm.murshed1974@yahoo.com', '', 'Working'),
(104, '180011131', '0113', 'Md. Rafiqul Islam', 'Mymensingh Power Station', 'Assistant Engineer (Electrical, I&C)', '01712351138             ', 'rafiqul351138@gmail.com', '', 'Working'),
(105, '180011268', '0310', 'Md.  Ajgur  Ali', 'Raozan Power Plant', 'Assistant Engineer', '01777413878', 'ajgur_wartsila14@yahoo.com.sg', '', 'Working'),
(106, '180011051', '0236', 'Ibnul  Hassan', 'Gazipur Power Plant', 'Assistant Manager (HR/Admin)', '01716321252', 'ibnulhassanmyn@gmail.com', '', 'Working'),
(107, '180011052', '0121', 'Shepon Kumer Halder', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01722207152', 'shepon.kh81@gmail.com', '', 'Working'),
(108, '180011122', '0104', 'Mustaba  Alamgir', 'Mymensingh Power Station', 'Assistant Engineer (Mechanical Maintenance)', '01913050034', 'mustaba.alomgir@gmail.com', '', 'Working'),
(109, '180011127', '0117', 'Litan Kumar Das', 'Mymensingh Power Station', 'Assistant Engineer (Electrical, I&C)', '01720534800', 'litandas43@gmail.com', '', 'Working'),
(110, '181011010', '0147', 'A. K. M. Fazlul Huq', 'Corporate Office', 'Assistant Manager (A/F)', '01723982828', 'akhuqritu@gmail.com', '', 'Working'),
(111, '180011047', '0107', 'Md. Iqbal Kobir', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01712606509', 'iqbal.kobir@rpcl.gov.bd', '', 'Working'),
(112, '180011061', '0093', 'Md. Kalam Ullah', 'Raozan Power Plant', 'Assistant Engineer (Electrical, I&C)', '01712282642', 'saboctg@yahoo.com', '', 'Working'),
(113, '180011077', '0141', 'Muhammad Sawkat Ali', 'Corporate Office', 'Assistant Manager (A/F)', '01816521816', 'sawkatali577@yahoo.com', '', 'Working'),
(114, '185011039', '0394', 'Tareq Hassan Mahmud', 'Gazipur Power Plant', 'Assistant Engineer', '01722073174', 'tareq.asif.768@gmail.com', '', 'Working'),
(115, '180011070', '0109', 'Md. Kaiser Meah', 'Raozan Power Plant', 'Assistant Engineer', '01816802364 ', 'kaiser41986@yahoo.com', '', 'Working'),
(116, '180011045', '0073', 'Md. Suzaur Rahman', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01912851410', 'ems.rahman@yahoo.com', '', 'Working'),
(117, '180011039', '0081', 'Chowdhury Arifur Habibur', 'Raozan Power Plant', 'Assistant Engineer (Operation)', '+8801717740104', 'arifur_habibur@yahoo.com', '', 'Working'),
(118, '180011054', '0122', 'Md. Akhtarul Alam', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01717589755', '', '', 'Working'),
(119, '180011116', '0076', 'Palash  Mondol', 'Mymensingh Power Station', 'Assistant Engineer (Operation)', '  01722465294', 'palashrpcl@gmail.com000000000', '', 'Working'),
(120, '180011098', '0079', 'C. M. Mostafizur Rahman', 'Mymensingh Power Station', 'Assistant Engineer (Operation)', '01916-271660', 'mostafiz.me09@yahoo.com', '', 'Working'),
(121, '180011109', '0077', 'Md.  Rabiul Islam', 'Mymensingh Power Station', 'Assistant Engineer (Operation)', '   01721545944 ', 'engrabiul28@gmail.com', '', 'Working'),
(122, '180011105', '0080', 'Mohammed Showkat Ali Chowdhury', 'Raozan Power Plant', 'Assistant Engineer (Operation)', ' 01814358842', 'showkatme@yahoo.com', '', 'Working'),
(123, '180011074', '0128', 'Md. Shahidul   Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer (Operation)', '01728650350', 'shahidul.shohel.sherpur@gmail.', '', 'Working'),
(124, '180011034', '0084', 'Md. Wahidur  Rahman', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01726810805', '', '', 'Working'),
(125, '180011041', '0091', 'Md. Riad Al Ferdous                              ', 'Mymensingh Power Station', 'Assistant Engineer (Operation)', '01920746684', 'riad.ferdous@rpcl.gov.bd', '', 'Working'),
(126, '180011073', '0130', 'Md. Golam Robbani', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer', '01722413621', 'mdrehan37@yahoo.com', '', 'Working'),
(127, '180011046', '0088', 'Md. Ashraful  Alam', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01675341919', 'amarsymphony@gmail.com', '', 'Working'),
(128, '180011118', '0086', 'Shahidur  Rhaman', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer (Operation)', '01960574437', 'shahid.duet44@gmail.com', '', 'Working'),
(129, '185011036', '0399', 'Md. Nazim Kabir   ', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer (Operation)', '01622577149', 'nazimkabir553.bd@gmail.com', '', 'Working'),
(130, '185011043', '0398', 'Md. Saiful Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Assistant Engineer (Operation)', '01611310164', 'tsaiful426038@gmail.com', '', 'Working'),
(131, '185011046', '0407', 'Md. Mashiur Rahman', 'Gazipur Power Plant', 'Assistant Engineer (Operation)', '01722204097', 'mashiur.rahman115@gmail.com', '', 'Working'),
(132, '185011048', '0408', 'Nurunnabi Sanjid', 'Mymensingh Power Station', 'Assistant Engineer (Operation)', '01712-120184', 'khan.sanjid@yahoo.com', '', 'Working'),
(133, '185011064', '1006', 'Md. Al- Amin', 'Gazipur Power Plant', 'Sub_Assistant Engineer(Store & Inventroy)', '01716-639701', 'alamin.mallick@gmail.com', '', 'Working'),
(134, '185011066', '1005', 'Md. Asaduzzaman', 'Gazipur Power Plant', 'Sub-Assistant Engineer(Electrical, I&C)', '01717940625', '', '', 'Working'),
(135, '185011090', '1030', 'Muhammad Mainul Haque', 'Mymensingh Power Station', 'Junior Assistant Manager (Admin)', '01789575531', 'mainulhuq5531@gmail.com', '', 'Working'),
(136, '185011101', '0417', 'Shamim Osman ', 'Mymensingh Power Station', 'Sub-Assistant Engineer(Electrical, I&C)', '01759072138', 'Shamim448138@gmail.com', '', 'Working'),
(137, '185011102', '0418', 'Md. Saddam Hosen ', 'Mymensingh Power Station', 'Sub-Assistant Engineer (Operation)', '01799632463', 'saddamipe3@gmail.com', '', 'Working'),
(138, '185011103', '0419', 'Md. Emrul Hasan Mamun ', 'Raozan Power Plant', 'Sub-Assistant Engineer (Operation)', '01815047464', 'mamuncxb97@gmail.com', '', 'Working'),
(139, '185011106', '0422', 'Md. Rahul Kabir ', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01722782105', 'rahulkabirork@gmail.com', '', 'Working'),
(140, '185011108', '0424', 'Md. Mostafijur Rahman', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01307397011', 'mostafijur69625@gmail.com', '', 'Working'),
(141, '185011112', '0428', 'Md. Motiur Rahman ', 'Corporate Office', 'Sub-Assistant Engineer', '01919-870873', 'motiurrahman.kus19@gmail.com', '', 'Working'),
(142, '185011113', '0429', 'Pranta Saha ', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01820308705', 'animikh466@gmail.com', '', 'Working'),
(143, '185011114', '0430', 'Md. Methun Sarker ', 'Gazipur Power Plant', 'Sub-Assistant Engineer(Electrical, I&C)', '01739854483', 'methunsarker00@gmail.com', '', 'Working'),
(144, '185011117', '0433', 'Md. Mostakim Hossen', 'Corporate Office', 'Sub-Assistant Engineer', '01637671357', 'mostakahmed2210@gmail.com', '', 'Working'),
(145, '185011122', '0436', 'Alamgir Hossain', 'Mymensingh Power Station', 'Sub-Assistant Engineer(Electrical, I&C)', '01744498841', 'alamgirjibono@gmail.com', '', 'Working'),
(146, '185011123', '0437', 'Saidur Rahman', 'Raozan Power Plant', 'Sub-Assistant Engineer(Electrical, I&C)', '01776496661', 'eee.sayeed@gmail.com', '', 'Working'),
(147, '185011124', '0438', 'Md. Belal Hosen', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01717911009', 'belalhosenn@gmail.com', '', 'Working'),
(148, '185011125', '0439', 'Azad Hossin ', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01737116573', 'azadhossino17371@gmail.com', '', 'Working'),
(149, '185011126', '0440', 'Md. Rubel Hossain', 'Gazipur Power Plant', 'Sub-Assistant Engineer(Electrical, I&C)', '01760572986', 'rubel325653@gmail.com', '', 'Working'),
(150, '185011135', '0448', 'Md. Hasan Mia', 'Corporate Office', 'Junior Assistant Manager (HR/Admin)', '01853002488', 'hasandu150@gmail.com', '', 'Working'),
(151, '185011136', '0449', 'Hafsa Faria Haque Monty', 'Corporate Office', 'Junior Assistant Manager (Training)', '01837224412', 'hafsafaria22@gmail.com', '', 'Working'),
(152, '180011055', '0140', 'Md. Arif Ahmed Belal', 'Gazipur Power Plant', 'Junior Assistant Manager (A/F)', '01778268760', 'arifahmedbelal@gmail.com', '', 'Working'),
(153, '180011132', '0135', 'Md.  Abdul Mukit', 'Mymensingh Power Station', 'Sub-Assistant Engineer (Operation)', '01729350604', '', '', 'Working'),
(154, '180011211', '0144', 'Rasheda  Parvin', 'Mymensingh Power Station', 'Junior Assistant Manager (Admin)', '01725604455', 'rasheda_7parvin@yahoo.com', '', 'Working'),
(155, '181011026', '0307', 'Shougata  Paul', 'Mymensingh Power Station', 'Junior Assistant Manager (Chemical)', '01718850821', 'spaulbd47@yahoo.com', '', 'Working'),
(156, '181011033', '0323', 'Md. Ripon Ali', 'Mymensingh Power Station', 'Sub-Assistant Engineer(Electrical, I&C)', '01760998591', 'riponali8591@gmail.com', '', 'Working'),
(157, '181011034', '0324', 'Habibur Rahaman', 'Raozan Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01916864937', 'marinerhabiburrahaman@gmail.co', '', 'Working'),
(158, '181011039', '0319', 'Rajib  Datta', 'Raozan Power Plant', 'Sub-Assistant Engineer (Fuel Bunkering)', '01817711882', 'rajibdatta2856@gmail.com', '', 'Working'),
(159, '183011266', '0301', 'Md. Abdur  Razzak', 'Corporate Office', 'Sub-Assistant Engineer', '01734387193', 'razzak.rpcl@gmail.com', '', 'Working'),
(160, '185011035', '0400', 'Ronjon Roy', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01750-551718', 'kuashaduet1718@gmail.com', '', 'Working'),
(161, '180011026', '0129', 'Sumaya  Afrin', 'Corporate Office', 'Sub-Assistant Engineer', '01760377421', 'afrins88@yahoo.com', '', 'Working'),
(162, '180011071', '0123', 'Md. Shafiullah Bhuyan', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01830405210', 'shafiullah_eee@yahoo.com', '', 'Working'),
(163, '180011130', '0134', 'Md. Fahim Hossain', 'Mymensingh Power Station', 'Junior Assistant Manager (Admin)', '01927684838', 'fahim71mps@gmail.com', '', 'Working'),
(164, '180011154', '0139', 'Bazlur Rahman', 'Corporate Office', 'Junior Assistant Manager (A/F)', '01716713433', 'bazlu_rpc@yahoo.com', '', 'Working'),
(165, '180011162', '0146', 'Md Agior Rahman', 'Gazipur Power Plant', 'Junior Assistant Manager (HR/Admin)', '01724027586', 'agiorrahman@gmail.com', '', 'Working'),
(166, '181011001', '0291', 'Mohasin   Mia', 'Raozan Power Plant', 'Junior Assistant Manager (Chemical)', '01815728445', 'mohasin0101@gmail.com', '', 'Working'),
(167, '181011036', '0320', 'Subrat Kumar Ghosh', 'Raozan Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01713280626', 'subratkg@gmail.com', '', 'Working'),
(168, '185011007', '0379', 'Md. Sahadat Hossain', 'Raozan Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01857210789', 'mdsahadathossain.078@gmail.com', '', 'Working'),
(169, '185011014', '0378', 'Md. Moslem  Ahmed', 'Gazipur Power Plant', 'Sub-Assistant Engineer(Electrical, I&C)', '01773717597', 'tahsin6044@gmail.com', '', 'Working'),
(170, '180011069', '0125', 'Md Fokrul Islam', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01911813183', 'rajupertex@yahoo.com', '', 'Working'),
(171, '181011007', '0304', 'Md. Shakil  Jaman', 'Corporate Office', 'Junior Assistant Manager (A/F)', '01674547966', 'khurshedju@yahoo.com', '', 'Working'),
(172, '181011044', '0327', 'Md. Kamrul  Islam', 'Corporate Office', 'Junior Assistant Manager (Admin)', '01771599744', 'kamrulaiscu@gmail.com', '', 'Working'),
(173, '185011109', '0425', 'Khandoker Tarik Bin Taher', 'Mymensingh Power Station', 'Junior Assistant Manager (Chemical)', '07123-884015', 'tarikleshan737646.du@gmail.com', '', 'Working'),
(174, '180011072', '0124', 'Md.  Eakub Ali', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01917736085', 'eakubrpp@gmail.com', '', 'Working'),
(175, '180011275', '0369', 'Md. Saddam Hussain', 'Corporate Office', 'Junior Assistant Manager (Admin)', '01677785985', 'saddam.rpcl@gmail.com', '', 'Working'),
(176, '185011025', '0381', 'Mitun Barua', 'Raozan Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01838007056', 'mitunmeduet@gmail.com', '', 'Working'),
(177, '185011110', '0426', 'Mohammed Mamumur Rashid', 'Gazipur 100MW HFO Fired Power Plant', 'Junior Assistant Manager (Chemical)', '01714877655', 'mamunurrashid2725@gmail.com', '', 'Working'),
(178, '180011076', '0126', 'Md. Abdul Mannan Talukder', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01739772080', 'sumon24g@gmail.com', '', 'Working'),
(179, '185011012', '0376', 'Abdur  Rahaman', 'Raozan Power Plant', 'Junior Assistant Manager (Admin)', '01823592868', 'armarketing45@gmail.com', '', 'Working'),
(180, '185011024', '0382', 'Zia Uddin Chowdhury', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01723361131 ', 'chowdhuryziauddin00@gmail.com', '', 'Working'),
(181, '180011075', '0237', 'Mohammad Robel Sikder', 'Raozan Power Plant', 'Sub-Assistant Engineer (Operation)', '01838666661', 'sikder.rubel66666@gmail.com', '', 'Working'),
(182, '185011031', '0389', 'Suchayan Dey', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01302733187', 'suchayancpi0@gmail.com', '', 'Working'),
(183, '181011032', '0317', 'Ziaul  Haque', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01739367360', 'ziamariner31@gmail.com', '', 'Working'),
(184, '185011034', '0401', 'Md. Aynur Rahman', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Maintenance)', '01750442447', 'aynur012@gmail.com', '', 'Working'),
(185, '181011037', '0315', 'Md.  Mainuddin', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01911021581', 'md.mainuddin.me@gmail.com', '', 'Working'),
(186, '181011038', '0316', 'Md.  Rasel  Mondol', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01710213585', 'raselmondolce37@gmail.com', '', 'Working'),
(187, '181011040', '0318', 'Salim  Ahmmed', 'Mymensingh Power Station', 'Sub-Assistant Engineer (Operation)', '01750202186', 'salim_ahmmed94@yahoo.com', '', 'Working'),
(188, '181011035', '0322', 'Mohammad   Rasel', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01823985400', 'rasel143080@gmail.com', '', 'Working'),
(189, '183011080', '0361', 'Md.  Anwarul Azim Siddique', 'Raozan Power Plant', 'Sub-Assistant Engineer (Operation)', '01819326449', 'siddique_azim@yahoo.com', '', 'Working'),
(190, '185011030', '0371', 'Md. Nazrul Islam', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01638295156', 'nazrul_islam744@yahoo.com', '', 'Working'),
(191, '185011009', '0373', 'Md. Sumon Mia', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01768827788', 'araphatsumon89@gmail.com', '', 'Working'),
(192, '185011010', '0374', 'Md. Iftakhayrul Haque Emon', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01748727236 ', 'emonit71@gmail.com', '', 'Working'),
(193, '185011020', '0383', 'Md. Al -Emran', 'Mymensingh Power Station', 'Sub-Assistant Engineer (Operation)', '01706663649', 'alemranshamrateee@gmail.com', '', 'Working'),
(194, '185011021', '0384', 'Md. Jia Uddin Emon', 'Raozan Power Plant', 'Sub-Assistant Engineer (Operation)', '01829390427', 'jiauddinemon@gmail.com', '', 'Working'),
(195, '185011032', '0388', 'Minhaj Uddin', 'Raozan Power Plant', 'Sub-Assistant Engineer (Operation)', '01830220728 ', 'minhajuddin619@gmail.com', '', 'Working'),
(196, '185011028', '0403', 'Md. Sayem Uddin', 'Gazipur Power Plant', 'Sub-Assistant Engineer (Operation)', '01746-724513', 'sayem.me1988@gmail.com', '', 'Working'),
(197, '185011029', '0402', 'Ripon Mia', 'Gazipur 100MW HFO Fired Power Plant', 'Sub-Assistant Engineer (Operation)', '01728-612215', 'ripon.me28@gmail.com', '', 'Working'),
(198, '185011062', '0415', 'Md. Shamim Mia ', 'Corporate Office', 'Accountant', '01962-156463', 'sha19mim19@gmail.com', '', 'Working'),
(199, '185011100', '0416', 'Borhan Uddin', 'Corporate Office', 'Auditor', '01932177514', 'buddin269@gmail.com', '', 'Working'),
(200, '185011116', '0432', 'Md. Saddam Hossain', 'Corporate Office', 'Accountant', '01516129491', 'saddam.fin.n@gmail.com', '', 'Working'),
(201, '180011155', '0145', 'Tania  Parveen', 'Corporate Office', 'Office Secretary', '01918-310395', 'tparveen60@gmail.com', '', 'Working'),
(202, '180011156', '0240', 'Md. Mahbub Alam Khan', 'Corporate Office', 'Store Keeper', '01626-845333', 'mahbubkhanabir@gmail.com', '', 'Working'),
(203, '180011212', '0270', 'Md. Sorowardi Khan', 'Mymensingh Power Station', 'Store Keeper', '01717367243', '', '', 'Working'),
(204, '180011213', '0143', 'AL  Mahmud', 'Mymensingh Power Station', 'Office Secretary', '01714876948', 'almahmudmps@gmail.com', '', 'Working'),
(205, '180011214', '0153', 'Mohammed Akteruzzaman Khadem', 'Mymensingh Power Station', 'Fitter Gr.-1', '01714259547', '', '', 'Working'),
(206, '180011219', '0154', 'Mohammad Zakir Hossain', 'Gazipur 100MW HFO Fired Power Plant', 'Store Keeper', '01712470883', '', '', 'Working'),
(207, '180011222', '0151', 'Mohammad Saiful Islam  Miah', 'Mymensingh Power Station', 'Fitter Gr.-1', '01720144489', '', '', 'Working'),
(208, '180011215', '0150', 'Md. Mostafizur Rohman', 'Mymensingh Power Station', 'Electrician Gr.-1', '01714897495', 'mostafizurmps@gmail.com', '', 'Working'),
(209, '180011223', '0152', 'Md. Anamul Hoque', 'Mymensingh Power Station', 'Fitter Gr.-1', '01722653240', '', '', 'Working'),
(210, '180011191', '0239', 'Md. Abdun Nasser  Talukder', 'Raozan Power Plant', 'Store Keeper', '01818857708', 'nasser_786@yahoo.com', '', 'Working'),
(211, '185011068', '0453', 'Md. Emran', 'Raozan Power Plant', 'Assistant Accountant', '01813-285407', 'amran658@gmail.com', '', 'Working'),
(212, '185011070', '1028', 'Ahad Md. Shawkat Haider', 'Mymensingh Power Station', 'Store Assistant', '01711-908414', 'shoaib500779@gmail.com', '', 'Working'),
(213, '185011084', '0451', 'Md. Zahir Rayhan', 'Corporate Office', 'Office Assistant', '01792-788139', 'juweladd@gmail.com', '', 'Working'),
(214, '180011143', '0246', 'Nazmul  Hossain', 'Corporate Office', 'Office Assistant', '01813-688605', 'raihan.nazmul2014@gmail.com', '', 'Working'),
(215, '180011157', '0148', 'Most Marufa Khatun', 'Corporate Office', 'Receptionist Cum Telephone Operator', ' 01778-004330', 'marufasajjad1987@gmail.com', '', 'Working'),
(216, '183011269', '0363', 'Arifa   Moushumi', 'Corporate Office', 'Assistant Accountant', ' 01749-118296', 'arifamoushumi@gmail.com', '', 'Working'),
(217, '180011192', '0241', 'Md. Nazrul Islam', 'Raozan Power Plant', 'Office Assistant', ' 01825-722017', 'nazrul868483@gmail.com', '', 'Working'),
(218, '180011232', '0173', 'Sardar Mohammed Rezaul Karim', 'Mymensingh Power Station', 'Painter Gr.-2', ' 01733-705592', '', '', 'Working'),
(219, '185011011', '0375', 'Md. Salman Amin', 'Gazipur Power Plant', 'Store Assistant', '01521462408', 'salmanamindu@gmail.com', '', 'Working'),
(220, '180011138', '0166', 'Mirza Shahidul Islam', 'Corporate Office', 'Electrician Gr.-2', ' 01829-958686', '', '', 'Working'),
(221, '183011268', '0302', 'Md. Wahid Tareq', 'Corporate Office', 'Office Assistant', '01836639209', 'w.tareq88@gmail.com', '', 'Working'),
(222, '180011216', '0167', 'Delower Hossain Sharif', 'Mymensingh Power Station', 'Fitter Gr.-2', '01717715545', '', '', 'Working'),
(223, '185011067', '0452', 'Asadul Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Junior Office Assistant', '01855454433', '', '', 'Working'),
(224, '185011071', '1001', 'Sarmin Sultana', 'Corporate Office', 'Junior Office Assistant', '01714666678', '', '', 'Working'),
(225, '180011136', '0161', 'Md. Solaiman', 'Corporate Office', 'Driver (Heavy)', ' 01717-939108', '', '', 'Working'),
(226, '180011139', '0164', 'Md. Murtuj Ali', 'Corporate Office', 'Driver (Heavy)', ' 01712-086330', '', '', 'Working'),
(227, '180011167', '0245', 'Syed Nayam Uddin', 'Gazipur Power Plant', 'Junior Office Assistant', '01850-173404', '', '', 'Working'),
(228, '180011220', '0156', 'Sarwar  Morshed', 'Gazipur Power Plant', 'Security Supervisor', '01715038207', '', '', 'Working'),
(229, '185011019', '0169', 'Md. Nurul Islam', 'Raozan Power Plant', 'Senior Driver', '01710-391685', '', '', 'Working'),
(230, '185011044', '0405', 'Md. Sirazul Islam', 'Gazipur 100MW HFO Fired Power Plant', 'Welder Gr.-3', ' 01680849039', 'sirazulislam61@gnail.com', '', 'Working'),
(231, '185011045', '0404', 'Arifur Rahman ', 'Gazipur 100MW HFO Fired Power Plant', 'Electrician Gr.-3', ' 01912-376878', 'arifpowertracbd@gmail.com', '', 'Working'),
(232, '180011135', '0168', 'Md. Amirul Islam', 'Corporate Office', 'Work Assistant Gr.-1', '01911-233829', '', '', 'Working'),
(233, '180011159', '0162', 'Md. Motiar Rahman', 'Corporate Office', 'Driver (Heavy)', ' 01714-723823', '', '', 'Working'),
(234, '180011163', '0158', 'Md. Lutfor Rahman', 'Mymensingh Power Station', 'Security Supervisor', '01916757951', '', '', 'Working'),
(235, '180011137', '0163', 'Md. Kamal Hossain', 'Corporate Office', 'Driver (Heavy)', '01717-939107', '', '', 'Working'),
(236, '180011168', '0174', 'Md. Anowarul Islam', 'Gazipur Power Plant', 'Work Assistant Gr.-1', '01930434670', '', '', 'Working'),
(237, '180011221', '0159', 'Bodiruzzaman', 'Gazipur Power Plant', 'Security Supervisor', '01732-364947', '', '', 'Working'),
(238, '183011271', '0332', 'Md. Rifat Rayhan', 'Mymensingh Power Station', 'Junior Office Assistant', '01700635854', 'rifatrayhan.mps@gmail.com', '', 'Working'),
(239, '180011193', '0160', 'Md. Ebadat Hossain Molla', 'Gazipur Power Plant', 'Security Supervisor', '01712391193', '', '', 'Working'),
(240, '180011228', '0170', 'Md. Abdul Mannan', 'Mymensingh Power Station', 'Driver (Heavy)', '01728379617', '', '', 'Working'),
(241, '180011134', '0165', 'Md.Shamim Ali Shah', 'Corporate Office', 'Driver (Heavy)', '01717-939100', '', '', 'Working'),
(242, '180011266', '0308', 'Md. Billal Hossain', 'Mymensingh Power Station', 'Security Supervisor', '01727362261', '', '', 'Working'),
(243, '180011141', '0171', 'Md. Hossain Khan', 'Corporate Office', 'Driver (Heavy)', ' 01717939088', '', '', 'Working'),
(244, '180011267', '0309', 'Md. Abul Kalam Azad', 'Mymensingh Power Station', 'Security Supervisor', '01915173257', '', '', 'Working'),
(245, '180011226', '0172', 'Mohammad  Zahir', 'Mymensingh Power Station', 'Driver (Heavy)', ' 01717-939089', '', '', 'Working'),
(246, '180011270', '0354', 'Kazi Abdur  Rahim', 'Gazipur Power Plant', 'Security Supervisor', '01913661378', '', '', 'Working'),
(247, '181011048', '0355', 'Md. Habibur  Rahman', 'Raozan Power Plant', 'Security Supervisor', '01716170677', '', '', 'Working'),
(248, '180011269', '0356', 'M A Ehsan', 'Mymensingh Power Station', 'Security Supervisor', '01915614798', 'aehsan2010@gmail.com', '', 'Working'),
(249, '185011050', '0412', 'Md. Sarfaraz Khan', 'Raozan Power Plant', 'Security Supervisor', '01818698344', 'mdsarfarazfchan1972@gmail.com', '', 'Working'),
(250, '185011054', '0410', 'Munshi Abu Taleb', 'Raozan Power Plant', 'Security Supervisor', '01794436248', 'Mataleb.bd@gmail.com', '', 'Working'),
(251, '185011055', '0411', 'M Anwar Hossain', 'Raozan Power Plant', 'Security Supervisor', '01678061574', 'anwar46108@gmail.com', '', 'Working'),
(252, '180011197', '0190', 'Md. Abdul Halim', 'Gazipur Power Plant', 'Work Assistant Gr.-1', '01925164998', '', '', 'Working'),
(253, '180011196', '0192', 'Mohammad Liton Khadem', 'Raozan Power Plant', 'Work Assistant Gr.-1', ' 01923-427330', '', '', 'Working'),
(254, '180011246', '0198', 'Md. Sohel Rana', 'Mymensingh Power Station', 'Work Assistant Gr.-1', '01717-840434', '', '', 'Working'),
(255, '180011225', '0197', 'Md. Mizanur Rahaman Howlader', 'Mymensingh Power Station', 'Work Assistant Gr.-1', '01918256840', 'hmmizan75@gmail.com', '', 'Working'),
(256, '180011240', '0199', 'Kazi  Afzalur Rahman', 'Mymensingh Power Station', 'Work Assistant Gr.-1', '01733-259970', '', '', 'Working'),
(257, '180011241', '0194', 'Md. Zubair  Alam', 'Mymensingh Power Station', 'Work Assistant Gr.-1', '01916-471247', '', '', 'Working'),
(258, '180011234', '0180', 'Md. Hafizur Rahman(s)', 'Gazipur Power Plant', 'Work Assistant Gr.-1', ' 01939-062906', '', '', 'Working'),
(259, '180011233', '0179', 'Md. Mukul Hossain', 'Mymensingh Power Station', 'Work Assistant Gr.-1', ' 01735-079599', '', '', 'Working'),
(260, '180011231', '0175', 'Md. Salim Reza', 'Mymensingh Power Station', 'Work Assistant Gr.-1', '01729-923748', '', '', 'Working'),
(261, '180011229', '0176', 'Md. Abdul Aziz', 'Mymensingh Power Station', 'Work Assistant Gr.-1', ' 01718-927471', '', '', 'Working'),
(262, '185011081', '0450', 'Md. Osman Faruk', 'Corporate Office', 'Driver (Light)', '01924845284', '', '', 'Working'),
(263, '180011165', '0181', 'Md.  Belal', 'Gazipur Power Plant', 'Driver (Light)', '01735268132', '', '', 'Working'),
(264, '180011218', '0187', 'Ashif  Hossen', 'Mymensingh Power Station', 'Messenger', '01719634941', 'rimpuashif1990@gmail.com', '', 'Working'),
(265, '180011144', '0184', 'Md. Abul Hosain', 'Corporate Office', 'Driver (Light)', ' 01747-817624', '', '', 'Working'),
(266, '180011195', '0183', 'Saifullah  Khaled', 'Raozan Power Plant', 'Messenger', '01845-472030', '', '', 'Working'),
(267, '180011230', '0177', 'Mohammad Gias Uddin', 'Mymensingh Power Station', 'Work Assistant Gr.-2', '  01714-680731', '', '', 'Working'),
(268, '180011142', '0242', 'Md. Obaidur Rahman', 'Corporate Office', 'Driver (Light)', ' 01917-277449', '', '', 'Working'),
(269, '180011227', '0244', 'Md Shah Newaz', 'Mymensingh Power Station', 'Driver (Light)', '01725218130', 'shahnewaz8130@gmail.com', '', 'Working'),
(270, '183011189', '0185', 'Md. Monirul Islam', 'Corporate Office', 'Driver (Light)', '01850260784', '', '', 'Working'),
(271, '180011238', '0189', 'Md. Sohid Hossain Khan', 'Gazipur Power Plant', 'Work Assistant Gr.-2', '  01734-272781', '', '', 'Working'),
(272, '180011245', '0209', 'Ripon   Sarker', 'Mymensingh Power Station', 'Messenger', ' 01798-019110', '', '', 'Working'),
(273, '183011161', '0331', 'Md. Nazmul  Hossain', 'Corporate Office', 'Driver (Light)', '01913-955057', '', '', 'Working'),
(274, '180011146', '0203', 'Md. Mostafizur  Rahman', 'Corporate Office', 'Messenger', ' 01722-657843', '', '', 'Working'),
(275, '180011145', '0204', 'Md. Joynal Abeden', 'Corporate Office', 'Messenger', '01717-879104', '', '', 'Working'),
(276, '180011235', '0188', 'Md. Saiful Islam Khan', 'Mymensingh Power Station', 'Work Assistant Gr.-2', '01916621608', '', '', 'Working'),
(277, '180011172', '0200', 'Md. Ziaul Haque Bakshi', 'Gazipur Power Plant', 'Work Assistant Gr.-2', '01714358120', '', '', 'Working'),
(278, '180011236', '0201', 'Md. Hafizur  Rahman', 'Mymensingh Power Station', 'Work Assistant Gr.-2', '  01772529771  ', '', '', 'Working'),
(279, '180011244', '0191', 'Mohammad Zahirul Islam', 'Mymensingh Power Station', 'Work Assistant Gr.-2', 'NA', '', '', 'Working'),
(280, '183011170', '0296', 'Md. Hasan Murad Chowdhury', 'Raozan Power Plant', 'Work Assistant Gr.-2', ' 01790-733520', '', '', 'Working'),
(281, '180011239', '0249', 'Md Lutfor Rahman', 'Mymensingh Power Station', 'Work Assistant Gr.-2', ' 01745-000041', '', '', 'Working'),
(282, '180011169', '0202', 'Md. Hafizar Rahman', 'Gazipur Power Plant', 'Work Assistant Gr.-2', '01718908075', '', '', 'Working'),
(283, '180011242', '0195', 'Md.  Mosaref Hossain', 'Mymensingh Power Station', 'Work Assistant Gr.-2', ' 01721-528710', '', '', 'Working'),
(284, '180011243', '0196', 'Md. Sadiqul Islam', 'Mymensingh Power Station', 'Work Assistant Gr.-2', '01723-306386', '', '', 'Working'),
(285, '180011147', '0213', 'Md. Jashim Uddin', 'Corporate Office', 'Caretaker', '', '', '', 'Working'),
(286, '180011247', '0207', 'Md.Abu Taleb  Mia', 'Mymensingh Power Station', 'Senior Office Attendant', ' 01718-424657', '', '', 'Working'),
(287, '180011249', '0206', 'Md. Monjurul Haque', 'Gazipur Power Plant', 'Head Cook', '01714880123', '', '', 'Working'),
(288, '183011198', '0252', 'Mohammad  Idris', 'Corporate Office', 'Caretaker', '01830-088083', '', '', 'Working'),
(289, '180011171', '0253', 'Muhammad Sirajul Islam', 'Gazipur Power Plant', 'Work Assistant Gr.-3', '01717-111774', '', '', 'Working'),
(290, '180011199', '0214', 'Md. Mojahar Hossain', 'Raozan Power Plant', 'Senior Office Attendant', ' 01717-371464', '', '', 'Working'),
(291, '180011150', '0223', 'S. M. Sahed  Alam', 'Raozan Power Plant', 'Senior Office Attendant', '01732-586634', '', '', 'Working'),
(292, '180011148', '0216', 'Md. Shafiqul Alam Khandakar', 'Corporate Office', 'Senior Office Attendant', '01712024570', '', '', 'Working'),
(293, '180011177', '0254', 'Md. Iran Bhuiyan', 'Gazipur Power Plant', 'Work Assistant Gr.-3', '01766-956105', '', '', 'Working'),
(294, '180011253', '0210', 'Md. Shohel Hossain', 'Mymensingh Power Station', 'Senior Office Attendant', '', '', '', 'Working'),
(295, '180011248', '0215', 'Md. Masud Rana', 'Mymensingh Power Station', 'Work Assistant Gr.-3', '-01724902171', '', '', 'Working'),
(296, '185011074', '0455', 'Md. Saddam Hossain', 'Gazipur 100MW HFO Fired Power Plant', 'Work Assistant Gr.-4', '01752-984779', 'saddam920599@gmail.com', '', 'Working'),
(297, '185011082', '0458', 'Mirza Zahidul', 'Gazipur 100MW HFO Fired Power Plant', 'Work Assistant Gr.-4', '01742261552', '', '', 'Working'),
(298, '185011086', '0456', 'Muzzammal Haque Sumon', 'Gazipur 100MW HFO Fired Power Plant', 'Work Assistant Gr.-4', '01735555852', '', '', 'Working'),
(299, '185011092', '0460', 'Md. Salman', 'Raozan Power Plant', 'Work Assistant Gr.-4', '01741338563', '', '', 'Working'),
(300, '185011094', '1013', 'Md. Mizanur Rahman', 'Gazipur 100MW HFO Fired Power Plant', 'Work Assistant Gr.-4', '01970358011', 'rahmanmizan@gmail.com', '', 'Working'),
(301, '185011095', '0454', 'Md. Mahbubul Alam', 'Gazipur 100MW HFO Fired Power Plant', 'Work Assistant Gr.-4', '01713503200', 'mahbubulsg@gmail.com', '', 'Working'),
(302, '185011097', '1007', 'Md. Sirajul Islam', 'Gazipur Power Plant', 'Work Assistant Gr.-4', '01717625056', '', '', 'Working'),
(303, '185011138', '0457', 'Ejaj Ahmed Safa', 'Mymensingh Power Station', 'Work Assistant Gr.-4', '01740-204064', '', '', 'Working'),
(304, '185011139', '0459', 'Shahariour Jahan Bhuiyan', 'Mymensingh Power Station', 'Work Assistant Gr.-4', '01738-740114', 'shahariarjahan00@gmail.com', '', 'Working'),
(305, '185011018', '0218', 'Md. Kamal Hossain', 'Corporate Office', 'Cook', '01734-930353', '', '', 'Working'),
(306, '180011175', '0250', 'Mohammad Sharaf Uddin', 'Mymensingh Power Station', 'Work Assistant Gr.-4', '', '', '', 'Working'),
(307, '180011200', '0255', 'Md. Jainal Abedin', 'Raozan Power Plant', 'Cook', '01814-342495', '', '', 'Working'),
(308, '180011259', '0225', 'Ratan Chandra Das', 'Mymensingh Power Station', 'Head Cleaner', '', '', '', 'Working'),
(309, '180011149', '0224', 'Md. Billal Hossain', 'Corporate Office', 'Office Attendant', '01628-698710', '', '', 'Working'),
(310, '180011178', '0256', 'Bhuiyan  Zohir Uddin', 'Gazipur Power Plant', 'Office Attendant', '01713-821018', '', '', 'Working'),
(311, '185011075', '1002', 'Md. Anowar Hossain', 'Corporate Office', 'Senior Gardener', '01924016247', '', '', 'Working'),
(312, '180011152', '0229', 'Anonda Kumar Yaggada', 'Corporate Office', 'Senior Cleaner', '01683-807254', '', '', 'Working'),
(313, '180011153', '0231', 'Dipok Chandra Das', 'Corporate Office', 'Senior Cleaner', '01948-773010', '', '', 'Working'),
(314, '180011255', '0219', 'Md. Abdul Monaf', 'Mymensingh Power Station', 'Senior Gardener', '', '', '', 'Working'),
(315, '180011258', '0226', 'Sumon  Gour', 'Mymensingh Power Station', 'Senior Gardener', '', '', '', 'Working'),
(316, '180011256', '0222', 'Shasti   Horizon', 'Mymensingh Power Station', 'Senior Cleaner', '', '', '', 'Working'),
(317, '180011260', '0227', 'Sree  Mukul Chouhan', 'Mymensingh Power Station', 'Senior Gardener', '', '', '', 'Working'),
(318, '183011263', '0293', 'Md. Manik', 'Mymensingh Power Station', 'Assistant Cook', '', '', '', 'Working'),
(319, '180011257', '0221', 'Roton  Horejon', 'Mymensingh Power Station', 'Senior Cleaner', '', '', '', 'Working'),
(320, '180011261', '0228', 'Mintu  Goala', 'Mymensingh Power Station', 'Senior Cleaner', '', '', '', 'Working'),
(321, '183011267', '0303', 'Debashis Saha', 'Corporate Office', 'Junior Office Attendant', '01986-561562', '', '', 'Working'),
(322, '183011270', '0330', 'Md.  Monjil  Hossain', 'Corporate Office', 'Junior Office Attendant', '01924-770833', '', '', 'Working'),
(323, '180011276', '0364', 'Md.  Shafiul Kader Chowdhury', 'Corporate Office', 'Junior Office Attendant', '01811-857570', '', '', 'Working'),
(324, '183011184', '0257', 'Md. Salim Mollah', 'Gazipur Power Plant', 'Senior Gardener', '01724-451075', '', '', 'Working'),
(325, '180011201', '0258', 'Md. Raju Ahmed', 'Raozan Power Plant', 'Senior Cleaner', '01670-837763', '', '', 'Working'),
(326, '180011278', '0362', 'Mubarak   Ali', 'Gazipur 100MW HFO Fired Power Plant', 'Junior Office Attendant', '01770-287199', '', '', 'Working'),
(327, '180011277', '0370', 'Md. Aktaruzzaman Raju', 'Mymensingh Power Station', 'Junior Office Attendant', '', '', '', 'Working'),
(328, '185011065', '0463', 'Md. Juwel', 'Gazipur 100MW HFO Fired Power Plant', 'Helper', '01928870986', '', '', 'Working'),
(329, '185011069', '1022', 'Mohammad Ibrahim', 'Raozan Power Plant', 'Helper', 'NA', '', '', 'Working'),
(330, '185011072', '1003', 'Md. Sohel Rana', 'Mymensingh Power Station', 'Helper', '01949  925490', '', '', 'Working'),
(331, '185011073', '1008', 'Md. Anowar Hossen', 'Gazipur Power Plant', 'Helper', '01783806348', '', '', 'Working'),
(332, '185011078', '1010', 'Jatan Basfor', 'Gazipur Power Plant', 'Cleaner', '01933988162', '', '', 'Working'),
(333, '185011079', '1009', 'Kajol', 'Gazipur Power Plant', 'Cleaner', '01759-645446', '', '', 'Working'),
(334, '185011080', '0464', 'Md. Nayem Ali', 'Gazipur 100MW HFO Fired Power Plant', 'Helper', '01767645929', '', '', 'Working'),
(335, '185011083', '1019', 'Md. Rasel Shekh', 'Raozan Power Plant', 'Helper', '01991-215650', '', '', 'Working'),
(336, '185011088', '1020', 'Md. Nur Mia', 'Raozan Power Plant', 'Helper', '01818465359', '', '', 'Working'),
(337, '185011089', '0461', 'Md. Ruman Khandokar', 'Gazipur 100MW HFO Fired Power Plant', 'Helper', '01738960495', '', '', 'Working'),
(338, '185011093', '0462', 'Md. Kamrul Hasan', 'Gazipur 100MW HFO Fired Power Plant', 'Helper', '01851-881776', '', '', 'Working'),
(339, '185011099', '1021', 'Paritosh Biswas', 'Raozan Power Plant', 'Helper', '01882827001', '', '', 'Working'),
(340, '183011188', '0275', 'Md. Amin', 'Gazipur Power Plant', 'Helper', '01716-639701', '', '', 'Working'),
(341, '180011182', '0260', 'Md. Samsul   Haque', 'Gazipur Power Plant', 'Junior Gardener', '01843-799171', '', '', 'Working'),
(342, '183011190', '0273', 'Rafiqul Islam', 'Gazipur Power Plant', 'Helper', '01723-322112', '', '', 'Working'),
(343, '183011202', '0263', 'Md Tazul Islam', 'Raozan Power Plant', 'Helper', '01626-738353', '', '', 'Working'),
(344, '183011205', '0336', 'Abul  Kasem', 'Gazipur 100MW HFO Fired Power Plant', 'Helper', '01721-694735', '', '', 'Working'),
(345, '183011206', '0334', 'Md. Borhan  ', 'Raozan Power Plant', 'Helper', '01920-981088', '', '', 'Working'),
(346, '183011208', '0335', 'Shaikhul Islam', 'Raozan Power Plant', 'Helper', '01915-901476', '', '', 'Working'),
(347, '180011176', '0217', 'Md. Ashik Sarker Suruj', 'Gazipur Power Plant', 'Rest House Caretaker', '01714641122', '', '', 'Working');
INSERT INTO `employees` (`id`, `employeeid`, `employeecode`, `employeename`, `officename`, `designation`, `contactno`, `email`, `password`, `status`) VALUES
(348, '180011210', '0136', 'Md.  Anowar  Hossain', 'Mymensingh Power Station', 'Welder Gr.-1 (Selection Grade)', '01718192780', '', '', 'Working'),
(349, '180011126', '0116', 'Malek  Masud Ul  Hasan', 'Mymensingh Power Station', 'Junior Assistant Manager (Mecha-Paint)', '01717346823', 'hshuvro@yahoo.com', '', 'Working'),
(350, '5454', '5445', 'fhdg dfg', 'saab', 'volvo', '54546872123', 'shahabuddin00180@gmail.com', '', 'mercedes');

-- --------------------------------------------------------

--
-- Table structure for table `extradevices`
--

DROP TABLE IF EXISTS `extradevices`;
CREATE TABLE IF NOT EXISTS `extradevices` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `employeeid` int NOT NULL,
  `device` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `itemcode` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `q` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `modspec` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pdate` date NOT NULL,
  `warranty` date NOT NULL,
  `comments` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `extradevices`
--

INSERT INTO `extradevices` (`sid`, `employeeid`, `device`, `itemcode`, `q`, `price`, `modspec`, `pdate`, `warranty`, `comments`) VALUES
(1, 180011265, 'monitor', 's451', '', '', 'Dell 14inch', '2010-12-20', '2010-12-22', 'no problems found'),
(2, 180011265, 'scanner', '', '', '', 'coral', '0000-00-00', '0000-00-00', ''),
(3, 0, 'one', '', '3', '3', '3', '2024-01-05', '2024-01-05', '3'),
(4, 0, 'two', 'k', '3', '3', '3', '2024-01-05', '2024-01-05', 'k'),
(5, 180011058, 'two', 'tt', '3', 't', '3', '2024-01-05', '2024-01-05', 'tt'),
(6, 180011059, 'one', 'e', 'e', 'e', 'e', '2024-01-19', '2026-06-26', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `itemlist`
--

DROP TABLE IF EXISTS `itemlist`;
CREATE TABLE IF NOT EXISTS `itemlist` (
  `serial` int NOT NULL AUTO_INCREMENT,
  `items` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `itemlist`
--

INSERT INTO `itemlist` (`serial`, `items`) VALUES
(7, 'adsbb'),
(8, 'sss'),
(10, 'test1nnn'),
(11, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `did` int NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `mainteinence` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cost` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `feedback` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `did`, `date`, `mainteinence`, `cost`, `feedback`) VALUES
(1, 2, '0000-00-00', 'retert retert', '10', 'sad erww wt dsf sfd'),
(2, 2, '0000-00-00', 'sadtyu', '40', 'fgdfgdffdgg'),
(3, 6, 'Thursday, January 4th, 2024, 09:39 PM', 'sdfds', '50', 'dfsfds'),
(4, 6, 'Thursday, January 4th, 2024, 09:39 PM', 'sdfds', '50', 'dfsfds');

-- --------------------------------------------------------

--
-- Table structure for table `mreq`
--

DROP TABLE IF EXISTS `mreq`;
CREATE TABLE IF NOT EXISTS `mreq` (
  `si` int NOT NULL AUTO_INCREMENT,
  `request` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `employeeid` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`si`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `mreq`
--

INSERT INTO `mreq` (`si`, `request`, `employeeid`, `email`, `date`) VALUES
(2, '2nd test', '180011265', 'samia@gmail.com', '180011265'),
(4, 'i need my scanner to be fixed', '180011265', 'riyad@gmail.com', '180011265');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `si` int NOT NULL AUTO_INCREMENT,
  `notice` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `getters` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`si`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`si`, `notice`, `date`, `getters`) VALUES
(3, 'the office will be closed on 7th Jan for national election ceremony', '4th Jan,2024', 'ALL'),
(4, 'adser', 're', 'ds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
