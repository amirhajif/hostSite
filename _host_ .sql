-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2021 at 09:44 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostsite`
--
CREATE DATABASE IF NOT EXISTS `hostsite` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `hostsite`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `username`, `password`) VALUES
('amirhh@gmail.com', 'amir.h.h', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `linuxhost`
--

DROP TABLE IF EXISTS `linuxhost`;
CREATE TABLE IF NOT EXISTS `linuxhost` (
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `version` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `ram` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `cpu` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `rom` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `linuxhost`
--

INSERT INTO `linuxhost` (`code`, `version`, `title`, `price`, `ram`, `cpu`, `rom`) VALUES
('hl-1', 'اوبونتو', 'اشتراک یک ماهه به همراه 10 روز هدیه', '15,00', '8GB', 'Intel Core i5', '1TB'),
('hl-2', 'اوبونتو', 'اشتراک دو ماهه به همراه 20 روز هدیه', '25,000', '8GB', 'Intel Core i5', '1TB'),
('hl-3', 'اوبونتو', 'اشتراک سه ماهه به همراه 30 روز هدیه', '45,000', '8GB', 'Intel Core i5', '1TB'),
('hl-4', 'کالی', 'اشتراک یک ماهه به همراه 10 روز هدیه', '15,000', '8GB', 'Intel Core i5', '1TB'),
('hl-5', 'کالی', 'اشتراک دو ماهه به همراه 20 روز هدیه ', '25,000', '8GB', 'Intel Core i5', '1TB'),
('hl-6', 'کالی', 'اشتراک سه ماهه به همراه 30 روز هدیه', '45,000', '8GB', 'Intel Core i5', '1TB');

-- --------------------------------------------------------

--
-- Table structure for table `machost`
--

DROP TABLE IF EXISTS `machost`;
CREATE TABLE IF NOT EXISTS `machost` (
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `version` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `ram` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `cpu` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `rom` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `machost`
--

INSERT INTO `machost` (`code`, `version`, `title`, `price`, `ram`, `cpu`, `rom`) VALUES
('hm-1', '12(montry)', 'اشتراک یک ماهه به همراه 10 روز هدیه ', '35,000', '8GB', 'M1', '256SSD'),
('hm-2', '12(montry)', 'اشتراک دو ماهه به همراه 20 روز هدیه', '65,000', '8GB', 'M1', '256SSD'),
('hm-3', '12(montry)', 'اشتراک سه ماهه به همراه 30 روز هدیه', '105,000', '8GB', 'M1', '256SSD'),
('hm-4', '12(montry)', 'اشتراک یک ماهه به همراه 10 روز هدیه', '30,000', '8GB', 'Intel Core i5', '256SSD'),
('hm-5', '12(montry)', 'اشتراک دو ماهه به همراه 20 روز هدیه', '55,000', '8GB', 'Intel Core i5', '256SSD'),
('hm-6', '12(montry)', 'اشتراک سه ماهه به همراه 30 روز هدیه', '90,000', '8GB', 'Intel Core i5', '256SSD');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`message`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message`) VALUES
(''),
('asdasdsad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `registerDate` date NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `phoneNumber`, `password`, `registerDate`) VALUES
('amirhajitabar2@gmail.com', '09116612648', '12345678', '2021-08-21'),
('hajitabaramir4@gmail.com', '09116612648', '12345678', '2021-08-25'),
('amir@gmail.com', '09116612648', '12345678', '2021-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `date` date NOT NULL,
  `ip` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`date`, `ip`) VALUES
('2021-08-25', '::1'),
('2021-08-28', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `windowshost`
--

DROP TABLE IF EXISTS `windowshost`;
CREATE TABLE IF NOT EXISTS `windowshost` (
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `version` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `ram` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `cpu` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `rom` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `windowshost`
--

INSERT INTO `windowshost` (`code`, `version`, `title`, `price`, `ram`, `cpu`, `rom`) VALUES
('hw-1', 'windows 10', ' اشتراک یک ماهه به همراه 10 روز هدیه ', '20,000', '8GB', 'Intel Core i7', '1TB'),
('hw-2', 'windows 10', ' اشتراک دو ماهه به همراه 20 روز هدیه ', '35,000', '8GB ', 'Intel Core i7', '1TB'),
('hw-3', 'windows 10', ' اشتراک سه ماهه به همراه 30 روز هدیه ', ' 60,000', '8GB ', 'Intel Core i7', '1TB'),
('hw-4', 'windows 10', ' اشتراک یک ماهه به همراه 10 روز هدیه ', '30,000', '12GB ', 'Intel Core i7', '1TB + 128 SSD'),
('hw-5', 'windows 10', 'اشتراک دو ماهه به همراه 20 روز هدیه', '55,000', '12GB', 'Intel Core i7', '1TB + 128 SSD'),
('hw-6', 'windows 10', 'اشتراک سه ماهه به همراه 30 روز هدیه', '90,000', '12GB', 'Intel Core i7', '1TB + 128 SSD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
