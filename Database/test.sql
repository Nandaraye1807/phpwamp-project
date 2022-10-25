-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2022 at 04:18 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `b_id` int(100) NOT NULL AUTO_INCREMENT,
  `b_title` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`b_id`, `b_title`) VALUES
(1, 'Burgers'),
(2, 'Snacks'),
(3, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
  `p_id` int(255) NOT NULL AUTO_INCREMENT,
  `p_brands` varchar(20) NOT NULL,
  `p_model` varchar(20) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_desc` varchar(4000) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`p_id`, `p_brands`, `p_model`, `p_price`, `p_image`, `p_desc`) VALUES
(1, '', 'normal', '$15.00', 'b1.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(2, '', 'Double size', '$14.89', 'b2.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(3, '', 'Mini Burger', '$9.00', 'b3.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(4, '', 'Bacon Chees', '$14.89', 'b4.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(5, '', 'special burger', '$15.00', 'b5.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(6, '', 'hi', '$9.55', 'menu-1.jpg', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `model` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `payment` mediumtext NOT NULL,
  `Address` varchar(200) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`p_id`, `model`, `price`, `phone`, `delivery`, `payment`, `Address`, `order_no`) VALUES
(1, '', '', '0912345999', '5 days', 'Paypal (info@example.com)', 'ji', 'no78'),
(2, '', '', '0912345999', '3 days', 'Cash on delivery', 'bb', 'no85');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE IF NOT EXISTS `dinner` (
  `p_id` int(255) NOT NULL AUTO_INCREMENT,
  `p_brands` varchar(20) NOT NULL,
  `p_model` varchar(20) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_desc` varchar(40000) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`p_id`, `p_brands`, `p_model`, `p_price`, `p_image`, `p_desc`) VALUES
(1, '', 'normal', '$22.00', 's1.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(2, '', 'Fruit Snacks', '$14.89', 's2.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(3, '', 'Banana snack', '$15.00', 's2.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(4, '', 'Salty fruit', '$14.89', 's3.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(5, '', 'Slice fruit', '$13.00', 's5.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `msg` varchar(400) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`p_id`, `email`, `phone`, `msg`) VALUES
(1, 'ja@gmail.com', '0987878787', 'we'),
(2, 'ja@gmail.com', '0987878787', 'uu');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE IF NOT EXISTS `lunch` (
  `p_id` int(255) NOT NULL AUTO_INCREMENT,
  `p_brands` varchar(20) NOT NULL,
  `p_model` varchar(20) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` varchar(11) NOT NULL,
  `p_desc` varchar(40000) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`p_id`, `p_brands`, `p_model`, `p_price`, `p_image`, `p_desc`) VALUES
(1, '', 'Coffee', '$13.00', 'j1.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(2, '', 'Blue_Stawberry ', '$14.89', 'j2.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(3, '', 'Violet Juice', '$13.00', 'j3.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(4, '', 'Pineapple Juice', '$14.89', 'j4.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil'),
(5, '', 'WaterMelon Juice', '$22.00', 'j5.jpg', 'Lorem ipsum dolor sit amet elit. Phasel nec preti facil');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `township` int(11) NOT NULL,
  `email_noti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`first_name`, `last_name`, `email`, `password`, `phone_no`, `gender`, `birthday`, `country`, `city`, `township`, `email_noti`) VALUES
('Moe', 'Moe', 'mm@email.com', '123456', '0912345999', 'male', '1/1/1900', 'Myanmar', 'Yangon', 0, 'yes'),
('Jay', 'Nam', 'ja@gmail.com', '111111', '0912345999', 'female', '6/7/2010', 'Myanmar', 'Yangon', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
