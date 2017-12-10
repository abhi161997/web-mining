-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 03:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_mining`
--

-- --------------------------------------------------------

--
-- Table structure for table `soldproducts`
--

CREATE TABLE IF NOT EXISTS `soldproducts` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `p_company` varchar(200) NOT NULL,
  `p_area` varchar(200) NOT NULL,
  `p_sold` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `soldproducts`
--

INSERT INTO `soldproducts` (`sl_no`, `p_company`, `p_area`, `p_sold`, `pname`) VALUES
(1, 'flipkart', 'kolkata', 1020, 'Nokia 6s'),
(2, 'flipkart', 'kolkata', 1287, 'samsung s6'),
(3, 'flipkart', 'kolkata', 500, 'max3 razor'),
(4, 'flipkart', 'kolkata', 1000, 'Reebok shoe'),
(5, 'flipkart', 'chennai', 1200, 'Reebok shoe'),
(6, 'flipkart', 'kolkata', 3000, 'sony xperia z'),
(7, 'amazon', 'kolkata', 1000, 'samsung s6'),
(8, 'amazon', 'kolkata', 5000, 'Reebok shoe'),
(9, 'amazon', 'chennai', 2000, 'reebok shoe'),
(10, 'amazon', 'bangalore', 1500, 'Reebok shoe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
