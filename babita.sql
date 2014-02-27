-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2014 at 10:13 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babita`
--

-- --------------------------------------------------------

--
-- Table structure for table `namevalue`
--

CREATE TABLE IF NOT EXISTS `namevalue` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `value` varchar(50) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `namevalue`
--

INSERT INTO `namevalue` (`id`, `name`, `value`, `modified`) VALUES
(1, 'title', 'Advocate Babita | Official Website', '2014-01-15 19:54:44'),
(2, 'owner', 'Babita Jha', '2014-02-21 20:11:52'),
(3, 'navLinks', 'About, Work, Resources, Contact, FAQs', '2014-02-21 20:16:57'),
(4, 'copyright', 'Unreal Designs 2014', '2014-02-21 20:19:42'),
(5, 'heading', 'Advocate Babita Jha', '2014-02-21 21:52:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
