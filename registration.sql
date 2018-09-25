-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 02:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zalogodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `passcode` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `username`, `password`, `avatar`, `passcode`) VALUES
(1, 'nessy', 'nessy', 'nessy', '07dcd371560bc43c48f56a2f55739ac66741d59d', 'e4.png', 68686),
(2, 'Nessy', 'Mutua', 'Nelson Mutua', '97638efbcf86513cae9767c9d3107a48b83d67ec', 'f5.jpg', 36106),
(3, 'Nessy', 'Nelson', 'Nesslays', 'da646d13e4fcf0b6ad77d8ac50e72feebe8225a9', 'f5.jpg', 40253);
