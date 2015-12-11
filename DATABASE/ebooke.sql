-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 11:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebooke`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'hack2', 'Hackers Heroes of the computers', 'Hacking skills all are here.', 20000, 2, 40000, '2015-12-11 22:43:47', 'mike@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(19) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'Hack1', 'Big Book of Windows Hacks', 'For Those who are interested in knowing the secrets of windows hacking.', 'hac1.jpg', 26, 10000),
(2, 'hack2', 'Hackers Heroes of the computers', 'Hacking skills all are here.', 'hac4.jpg', 772, 20000),
(3, 'hack3', 'Hacking The Kinect', 'hacking......', 'hac7.jpg', 33, 150000),
(4, 'Animation1', 'Pro css3 animation', 'For all animation skills', 'a3.jpg', 72, 100000),
(5, 'HTML1', 'Beginning Html', 'For all Html website skills', 'h2.jpg', 52, 10000),
(6, 'HTML2', 'Building your website the right way', 'Web design  skills', 'h6.jpg', 26, 30000),
(7, 'HTML3', 'Android apps', 'For mobile phone apps', 'h7.jpg', 152, 200000),
(8, 'Javascript', 'Javascript and CSS development with jquery', 'Javascript Language', 'j2.jpg', 62, 120000),
(9, 'Php', 'Php6 apache and mysql', 'For all php language skills', 'p3.jpg', 82, 180000),
(10, 'Software development', 'Software development', 'For all Software development skills', 'sd2.jpg', 152, 400000),
(11, 'Software development2', 'Software Engineers', 'For all Software Engineering skills', 'sd3.jpg', 52, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(5, 'mike', 'michael', 'kitemu', 'kampala', 8920, 'mugishamichael65@yahoo.com', 'hh', 'user'),
(6, 'Mugisha', 'mike', 'kitemu', 'Kampala', 5014, 'mike@admin.com', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
