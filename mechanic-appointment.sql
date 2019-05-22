-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2018 at 11:44 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanic-appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `customer_name` varchar(100) NOT NULL,
  `phone_num` varchar(13) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `car_license` varchar(15) NOT NULL,
  `car_engine_num` varchar(10) NOT NULL,
  `mechanic_name` varchar(100) NOT NULL,
  `apointment_date` varchar(60) DEFAULT NULL,
  `appontment_time` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`car_engine_num`),
  KEY `mechanic_name` (`mechanic_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`customer_name`, `phone_num`, `address`, `car_license`, `car_engine_num`, `mechanic_name`, `apointment_date`, `appontment_time`) VALUES
('sggsdg', 'sdgsdg', 'sdgsdgsd', 'dsgsdgsg', 'dsgsdgsdg', 'Abdullah Fahim', 'null', 'null'),
('werfsefg', 'sdgsgs', 'sdgsdgsd', 'sdgsdgsd', 'dsgsdgs', 'mecha02', 'Sat Jun 16 2018', 'slot1'),
('dvfgdf', 'fhfhfh', 'fhfhfh', 'hfhfhfh', 'fhfhfh', 'mecha01', 'Sat Jun 16 2018', 'slot1'),
('uiuiyu', '7ui67iky', 'uyiyuiy', 'yuiyui', 'uyiuyi', 'mecha01', 'Sat Jun 16 2018', 'slot1'),
('uiuiyu3', '7ui67iky', 'uyiyuiy', 'yu3iyui', 'uyiu3yi', 'mecha01', 'Sat Jun 16 2018', 'slot1'),
('23423', '34324234', '3242342', '3424', '34234', 'mecha01', 'Sat Jun 16 2018', 'slot1');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

DROP TABLE IF EXISTS `mechanic`;
CREATE TABLE IF NOT EXISTS `mechanic` (
  `mechanic_name` varchar(100) NOT NULL,
  PRIMARY KEY (`mechanic_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
