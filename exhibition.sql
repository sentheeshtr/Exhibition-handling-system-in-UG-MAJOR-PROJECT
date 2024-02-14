-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2021 at 07:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exhibition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(50) NOT NULL,
  `vid` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `sno` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `vid`, `sid`, `no`, `sno`, `amnt`, `sname`, `status`) VALUES
(1, '2', '1', '2', '1,2', '4000', 'organic', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `location`, `address`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', 'trichy', 'admin', '111'),
(2, 'sam', 'male', '21', 'san@mail.com', '7689045323', 'try', 'try', 'sam', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stall`
--

CREATE TABLE `stall` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `sno` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stall`
--

INSERT INTO `stall` (`id`, `name`, `total`, `sno`, `place`, `address`, `type`, `img`, `amnt`, `from`, `to`) VALUES
(1, 'Agriculture Expo', '20', '1', 'tennur', 'tennur,trichy', 'Agriculture', 0x6c617267655f7468756d626e61696c2e6a7067, '2000', '2021-12-25', '2021-12-30');
