-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 06:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wonder_tiffin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `uid` (`uid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(15) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'punjabi'),
(2, 'Gujarati'),
(3, 'Jain'),
(4, 'Diet'),
(5, 'Junk');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `msg` varchar(10000) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email_id`, `msg`, `status`, `cid`) VALUES
(1, 'hhh', 'harshil98shah@gmail.', 'hhhh', 'Active', 55),
(3, 'cc', 'mehul@gmail.com', 'ccc', 'Active', 55),
(4, 'ccc', 'harshil98shah@gmail.', 'qwertyuioplkjhgfd', 'Active', 55),
(6, 'gg', 'hgffh@gmail.com', 'asdfgh', 'Active', 55);

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE IF NOT EXISTS `member_info` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `fname1` varchar(15) DEFAULT NULL,
  `lname1` varchar(10) DEFAULT NULL,
  `image1` varchar(300) NOT NULL,
  `gender1` varchar(1) DEFAULT NULL,
  `city1` varchar(15) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `pincode1` int(6) DEFAULT NULL,
  `mobno1` varchar(10) DEFAULT NULL,
  `emailid1` varchar(40) DEFAULT NULL,
  `password1` varchar(20) DEFAULT NULL,
  `type1` varchar(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`cid`, `fname1`, `lname1`, `image1`, `gender1`, `city1`, `address1`, `pincode1`, `mobno1`, `emailid1`, `password1`, `type1`, `status`) VALUES
(54, 'Harshil', 'Shah', 'images/20170209_122818.jpg', 'm', 'kalol', '47 shreeji Nivas Vardhman nagar (N.G)', 382721, '9586095789', 'harshilshah4546@yahoo.com', '123', 'chef', 'Active'),
(55, 'Deepika', 'Patel', '', 'f', 'Baroda', 'Baroda', 400059, '1234567891', 'djp@gmail.com', '123', 'cust', 'Active'),
(57, 'Aayush', 'Shah', 'images/20171211_175214.jpg', 'm', 'kalol', '47 Shreeji Nivas Vardhman Nagar', 382721, '8980898141', 'aayushshah8980@gmail.com', 'aayush', 'chef', 'Active'),
(61, 'mona', 'shah', '', 'f', 'kalol', '47 shreeji nivas vardhman nagar', 382721, '9879271020', 'mona@gmail.com', '456', 'cust', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE IF NOT EXISTS `order_info` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `order_no` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `billing_address` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `cid` (`cid`),
  KEY `cid_2` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `order_no`, `cid`, `cart_id`, `title`, `qty`, `price`, `fname`, `billing_address`, `pincode`, `mobno`, `city`, `area`, `emailid`, `status`) VALUES
(1, 1, 61, 1, 'Punjabi  Thali', 1, 120, 'aa', 'aa', 123456, '1234567890', 'Kalol', 'panchvati Area', 'aayush@gmail.com', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `upload_menu`
--

CREATE TABLE IF NOT EXISTS `upload_menu` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `price` double(7,2) DEFAULT NULL,
  `category` int(5) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `category` (`category`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `upload_menu`
--

INSERT INTO `upload_menu` (`uid`, `cid`, `title`, `price`, `category`, `image`, `desc`, `type`, `quantity`, `status`) VALUES
(79, 57, 'Punjabi  Thali', 120.00, 1, 'images/punjabi fix thali.jpg ', '3- Roti, 2- Shaak, Jira Rice, Dal Fry,Salad,Papad,Sweet ', 'chef', 0, 'Active'),
(80, 57, 'Paneer Butter Masala', 120.00, 1, 'images/paneer butter masala.jpg ', '1- Paneer Butter Masala Shaak', 'chef', 0, 'Active'),
(81, 57, 'Gujarati Thali', 50.00, 2, 'images/Gujarati Thali.jpg ', '5-Roti, 3-Shaak, Chass, 1-Sweet, Rice\r\nDal, Salad', 'chef', 0, 'Active'),
(82, 57, 'Vatana Batata shaak', 30.00, 2, 'images/vatana batata.jpg ', 'Vatana Batata Shaak', 'chef', 0, 'Active'),
(83, 57, 'Jain Paneer Samosa', 20.00, 3, 'images/jain paneer samosa.jpg ', 'Jain Paneer Samosa (5 piece) ', 'chef', 0, 'Active'),
(84, 57, 'Oats Dhokla', 30.00, 3, 'images/oats dhokla.png ', 'Oats Dhokla(10 piece)', 'chef', 0, 'Active'),
(85, 57, 'khakhra', 60.00, 4, 'images/khakhra.jpeg ', 'khakhra (1 Kg)', 'chef', 0, 'Active'),
(88, 57, 'Bread Pakoda', 30.00, 5, 'images/bread pakoda.jpg ', 'Bread Pakoda', 'chef', 0, 'Active'),
(92, 57, 'Paneer Bhurji', 100.00, 1, 'images/paneerhurji.jpg ', 'Paneer Hurji', 'chef', 0, 'Active'),
(110, 54, 'Sev Tameta Shaak', 50.00, 2, 'images/Tameta.jpg ', ' Sev Tameta Shaak', 'chef', 0, 'Active'),
(113, 54, 'Kadai Paneer', 125.00, 1, 'images/kadai-paneer.jpg ', ' Punjabi kadai-paneer Shaak ', 'chef', 0, 'Active'),
(114, 54, 'kadai-mushroom', 130.00, 1, 'images/kadai-mushroom.jpg ', ' Punjabi kadai-mushroom Shaak', 'chef', 0, 'Active'),
(115, 54, 'Khandvi', 280.00, 2, 'images/khandvi.jpg ', '1 Kg Khandvi ', 'chef', 0, 'Active'),
(116, 57, 'Undhiyu', 150.00, 2, 'images/Undhiyu.jpg ', '1 Kg Undhiyu', 'chef', 0, 'Active'),
(117, 57, 'Dal-Bhaati', 200.00, 3, 'images/Dal-Bhaati.JPG ', 'Dal-Bhaati', 'chef', 0, 'Active'),
(118, 57, 'Jain Rabdi', 280.00, 3, 'images/Rabdi.jpg ', 'Rabdi 1kg', 'chef', 0, 'Active'),
(119, 57, 'coconut-curd-chutney', 30.00, 3, 'images/coconut-curd-chutney.jpg ', 'coconut-curd-chutney', 'chef', 0, 'Active'),
(120, 57, 'Biscuit', 120.00, 4, 'images/biscuit.jpg ', 'Diet Biscuit', 'chef', 0, 'Active'),
(121, 57, 'oats', 50.00, 4, 'images/oats.jpg ', ' Diet Oats', 'chef', 0, 'Active'),
(122, 57, ' Chevdo', 60.00, 4, 'images/chevdo.jpg ', '1 kg  Diet Chevdo', 'chef', 0, 'Active'),
(123, 57, 'khichdi', 60.00, 4, 'images/khichdi.jpg ', 'Diet Khichdi', 'chef', 0, 'Active'),
(124, 57, 'Burgers', 25.00, 5, 'images/Burgers-Veg.jpg ', 'Burgers-Veg', 'chef', 0, 'Active'),
(125, 57, 'Dabeli', 20.00, 5, 'images/Dabeli.jpg ', 'Dabeli', 'chef', 0, 'Active'),
(126, 57, 'Freench Fries', 30.00, 5, 'images/freench fries.jpg ', 'Freench Fries', 'chef', 0, 'Active'),
(127, 57, 'Pizza', 70.00, 5, 'images/pizza.png ', 'Pizza', 'chef', 0, 'Active'),
(132, 55, 'Fafada ', NULL, 5, NULL, '2 Kg Fafada', 'cust', 2, 'Active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD CONSTRAINT `cart_info_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `upload_menu` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_info_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `member_info` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `member_info` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `member_info` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload_menu`
--
ALTER TABLE `upload_menu`
  ADD CONSTRAINT `upload_menu_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_menu_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `member_info` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
