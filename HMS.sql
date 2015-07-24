-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 10:00 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('9c744d784e0e1bf8afed3d45ce1a9403', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:33.0) Gecko/20100101 Firefox/33.0', 1416268011, 'a:4:{s:9:"user_data";s:0:"";s:9:"user_name";s:19:"netcat.av@gmail.com";s:9:"is_member";b:1;s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_addres` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `pass_word` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_addres`, `user_name`, `pass_word`) VALUES
(1, 'a', 'a', 'netcat.av@gmail.com', 'admin', 'ae72b1c489f5ee5afe76bc4ece3ab74c');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_charges`
--

CREATE TABLE IF NOT EXISTS `tbl_charges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Checkin`
--

CREATE TABLE IF NOT EXISTS `tbl_Checkin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reserv_id` int(11) DEFAULT '0',
  `customer_id` int(11) DEFAULT NULL,
  `date_in` varchar(45) DEFAULT NULL,
  `date_out` varchar(45) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `staying` int(11) DEFAULT NULL,
  `extra_charges` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `checkouted` int(11) NOT NULL DEFAULT '0',
  `time` varchar(50) NOT NULL,
  `user` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_Checkin`
--

INSERT INTO `tbl_Checkin` (`id`, `reserv_id`, `customer_id`, `date_in`, `date_out`, `room_no`, `staying`, `extra_charges`, `discount`, `checkouted`, `time`, `user`) VALUES
(7, 0, 2, '10/29/2014', '10/30/2014', 2, 1, 0, 0, 0, '', ''),
(8, 0, 1, '10/29/2014', '10/33/2014', 1, 4, 10, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_CheckoutCharg`
--

CREATE TABLE IF NOT EXISTS `tbl_CheckoutCharg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checkout_id` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Family` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Adress` text,
  `Country` varchar(45) DEFAULT NULL,
  `Nationality` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Age` varchar(45) DEFAULT NULL,
  `Passport` varchar(45) DEFAULT NULL,
  `credit_card` varchar(50) DEFAULT NULL,
  `Mobile` varchar(45) DEFAULT NULL,
  `Company` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Note` text,
  `verifyed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `Name`, `Family`, `Gender`, `Adress`, `Country`, `Nationality`, `City`, `Age`, `Passport`, `credit_card`, `Mobile`, `Company`, `email`, `password`, `Note`, `verifyed`) VALUES
(1, 'Ali', 'Khalat', 'Male', 'iran,tehran', 'iran', 'iranaian', 'tehran', '22', '00145545788', NULL, '0912555546', 'vfx', '', '', '', 1),
(2, 'reza', 'tohidi', '', '', 'Iran', 'Iranian', 'Kerman', '35', '44659559', NULL, '9165126165', 'Takdasht Co', '', '', '', 1),
(3, 'mohammad', 'javadi', '', 'iran,tehran', 'iran', 'iranian', 'tehran', '34', '98965524', NULL, '0945665646', 'ndkklkk', '', '', '', 0),
(5, 'Tom', 'Stone', NULL, '', '', '', '', '22', '255888-58', '4454-9852-6988-2254', '', '', 'netcat.av@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_addres` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `pass_word` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `first_name`, `last_name`, `email_addres`, `user_name`, `pass_word`) VALUES
(1, 'a', 'a', 'netcat.av@gmail.com', 'admin', 'ae72b1c489f5ee5afe76bc4ece3ab74c');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Fund`
--

CREATE TABLE IF NOT EXISTS `tbl_Fund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Hotelprofile`
--

CREATE TABLE IF NOT EXISTS `tbl_Hotelprofile` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `Address` text,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Login_history`
--

CREATE TABLE IF NOT EXISTS `tbl_Login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `time_in` varchar(45) DEFAULT NULL,
  `time_out` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_OtherCharges`
--

CREATE TABLE IF NOT EXISTS `tbl_OtherCharges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Payment`
--

CREATE TABLE IF NOT EXISTS `tbl_Payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checkout_id` int(11) DEFAULT NULL,
  `pay_made` varchar(45) DEFAULT NULL,
  `pay_date` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Payment_Card`
--

CREATE TABLE IF NOT EXISTS `tbl_Payment_Card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_id` int(11) DEFAULT NULL,
  `card_no` varchar(45) DEFAULT NULL,
  `receipt_no` varchar(45) DEFAULT NULL,
  `pay_date` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Payment_Cash`
--

CREATE TABLE IF NOT EXISTS `tbl_Payment_Cash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_id` int(11) DEFAULT NULL,
  `pay_date` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Payment_Cheque`
--

CREATE TABLE IF NOT EXISTS `tbl_Payment_Cheque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_id` int(11) DEFAULT NULL,
  `cheque_No` varchar(45) DEFAULT NULL,
  `Acc_No` varchar(45) DEFAULT NULL,
  `pay_date` varchar(45) DEFAULT NULL,
  `tbl_Payment_Chequecol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_Permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `UserEntry` int(11) DEFAULT NULL,
  `CustomerSet` int(11) DEFAULT NULL,
  `Serviceset` int(11) DEFAULT NULL,
  `prreport` int(11) DEFAULT NULL,
  `config` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Reservation`
--

CREATE TABLE IF NOT EXISTS `tbl_Reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `reservation_date` varchar(45) DEFAULT NULL,
  `checkin_data` varchar(45) DEFAULT NULL,
  `checkout_data` varchar(45) DEFAULT NULL,
  `confirmed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_Reservation`
--

INSERT INTO `tbl_Reservation` (`id`, `Customer_id`, `room_id`, `reservation_date`, `checkin_data`, `checkout_data`, `confirmed`) VALUES
(2, 5, 1, '11/17/2014', '11/17/2014', '11/17/2014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE IF NOT EXISTS `tbl_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(45) DEFAULT NULL,
  `type_id` int(45) DEFAULT NULL,
  `floor` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id`, `room_no`, `type_id`, `floor`, `status`) VALUES
(1, '001', 1, 'Ground Floor', 1),
(2, '002', 1, 'Ground Floor', 1),
(3, '003', 1, 'Ground Floor', 0),
(4, '005', 2, 'Second Floor', 0),
(5, '006', 2, 'Second Floor', 0),
(6, '007', 2, 'Second Floor', 0),
(7, '020', 2, 'Second Floor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_RoomType`
--

CREATE TABLE IF NOT EXISTS `tbl_RoomType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_RoomType`
--

INSERT INTO `tbl_RoomType` (`id`, `type`, `price`, `adult`, `child`, `note`) VALUES
(1, 'Single Room', 20, 1, 0, ''),
(2, 'Double Room', 40, 2, 0, ''),
(3, 'Deluxe Room ', 80, 2, 1, ''),
(5, 'Famliy Room', 20, 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_history`
--

CREATE TABLE IF NOT EXISTS `tbl_room_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `checkout_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `datein` varchar(45) DEFAULT NULL,
  `dateout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
