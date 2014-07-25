-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2014 at 07:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gvpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf842'),
(2, '', 'd41d8cd98f00b204e9800998ecf842'),
(3, 'sss', '9f6e6800cfae7749eb6c486619254b'),
(4, '', 'd41d8cd98f00b204e9800998ecf842');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `birthday` date NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no_1` varchar(50) NOT NULL,
  `contact_no_2` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fname`, `lname`, `gender`, `birthday`, `address1`, `address2`, `city`, `province`, `email`, `contact_no_1`, `contact_no_2`) VALUES
('45', 'vvv', 'kkk', 'Male', '2014-07-07', '55', 'gg', 'kk', 'll', 'sunil45@abc.com', '', ''),
('ann123', 'ann', 'moore', 'Female', '1959-03-24', 'No85', 'Uda peradeniya street', 'Peradeniya', 'central', 'chathurika@localhost.com', '012', '456'),
('billy789', 'billy', 'ray', 'Male', '1962-12-18', '45', 'digana road', 'colombo', '', 'billt.tj@hotmail.com', '4568521594', '7893571598'),
('chathurika', 'chathurika', 'medagoda', 'Female', '1989-07-07', 'no 77', 'Doranegama Road', 'Medawala(H:P)', '', 'chathurika@localhost.com', '0711511916', '0812490738'),
('gamini', 'gamini', 'medagoda', 'Male', '2014-06-17', '45', 'kk', 'jj', 'oo', 'chathurika@localhost.com', '', ''),
('george', 'george', 'bush', 'Male', '1964-01-15', '001', 'beeta', 'hambantota', '', 'chathurika@localhost.com', '1236448', '7899123'),
('gg', 'dddd', 'gggggggg', 'Male', '2014-07-22', 'ff', 'ee', 'dd', 'ddddssssssssss', 'sunil45@abc.com', '', ''),
('qqq', 'qqqq', '', 'Male', '0000-00-00', '', '', '', '', 'chathurika@localhost.com', '', ''),
('saman21', 'saman', 'wijetunga', 'Male', '1951-07-09', '221/2A', 'colombo', '', '', 'chathurika@localhost.com', '123456789', ''),
('samantha', 'samantha', 'weerasooriya', 'Female', '1951-06-11', '12/2A', 'mahaweli road', 'mathale', '', 'chathu@localhost', '123', '456'),
('sanath', 'Sanath', 'Gunathilake', 'Male', '1951-06-11', '12/2A', 'YMBC road', 'Kurunegala', 'Central', 'chathu@localhost.com', '4568521594', '7893571598'),
('sunil', 'Sunil', 'Rathnayake', 'Male', '1958-05-20', 'No:45', 'Mulgampala Road', 'Peradeniya', 'Central', 'sunil45@abc.com', '789', '');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `inquiry_id` int(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`inquiry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `title`, `name`, `email`, `telephone`, `subject`, `message`) VALUES
(1, 'Mr', 'G.P.B medagoda', 'workerskjh.hj@gmail.com', 777, 'Regarding the plan copy', 'Need plan copy'),
(2, 'Mrs', 'W.A Gunawardhana', 'home789@yahoo.com', 456123, 'Signing deed', 'Appointment to sign deeds'),
(3, 'Mr', 'G.J Balasooriya', 'jagath784@msn.com', 14526389, 'issue on payments', 'want to know about payments');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `extent` varchar(255) NOT NULL,
  `unit_price` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `username`, `name`, `address1`, `address2`, `city`, `province`, `extent`, `unit_price`, `facilities`) VALUES
(1, 'chathurika', 'chathurika', 'no77', 'doranegama road', 'Medawala(H:P)', 'kandy', '1000', '50000/=', ''),
(2, 'Ann123', 'ann', 'no 43', 'peradeniya', 'kandy', 'kandy', '14562', '58000', '');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `reminder_id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `property_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `completed` tinyint(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`reminder_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`reminder_id`, `username`, `property_id`, `date`, `note`, `completed`) VALUES
(1, '', 0, '2014-06-04', 'ttt', 1),
(8, 'ann123', 0, '0000-00-00', '', 1),
(9, 'ann123', 0, '0000-00-00', '', 1),
(10, 'ann123', 0, '0000-00-00', '', 1),
(11, 'ann123', 0, '0000-00-00', '', 1),
(12, 'ann123', 0, '0000-00-00', '', 1),
(13, 'ann123', 0, '0000-00-00', '', 1),
(14, 'ann123', 0, '0000-00-00', '', 1),
(15, 'ann123', 0, '0000-00-00', '', 1),
(16, 'ann123', 0, '0000-00-00', '', 1),
(17, 'ann123', 0, '0000-00-00', '', 1),
(18, 'ann123', 0, '0000-00-00', '', 1),
(19, 'ann123', 0, '0000-00-00', '', 1),
(20, 'ann123', 0, '0000-00-00', '', 1),
(21, 'ann123', 0, '0000-00-00', '', 1),
(22, 'ann123', 0, '0000-00-00', '', 1),
(23, 'ann123', 0, '0000-00-00', '', 1),
(24, 'ann123', 0, '0000-00-00', '', 1),
(25, 'ann123', 0, '0000-00-00', '', 1),
(26, 'ann123', 0, '0000-00-00', '', 1),
(27, 'ann123', 0, '0000-00-00', '', 1),
(28, 'ann123', 0, '0000-00-00', '', 1),
(29, 'ann123', 0, '0000-00-00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(6) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `username`, `property_id`, `description`, `rating`) VALUES
(1, '', 0, 'bad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `type` enum('Admin','Super','Readonly') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email_code`, `active`, `type`) VALUES
('45', '6c8349cc7260ae62e3b1396831a8398f', 'c297645882db399db5b10eefd5ad5ef3', 0, 'Readonly'),
('ann123', '202cb962ac59075b964b07152d234b70', '7d63c38dfae180ec0317d9658dfd7445', 0, 'Readonly'),
('billy789', '68053af2923e00204c3ca7c6a3150cf7', '', 0, 'Readonly'),
('chathurika', '202cb962ac59075b964b07152d234b70', '', 0, 'Readonly'),
('ffff', '202cb962ac59075b964b07152d234b70', '7feaef3fce18895c05911b2641320fb0', 0, 'Readonly'),
('gamini', '202cb962ac59075b964b07152d234b70', '', 0, 'Readonly'),
('george', '202cb962ac59075b964b07152d234b70', '', 0, 'Readonly'),
('gg', '73c18c59a39b18382081ec00bb456d43', '6471229bf51be6c03cce972ffd810c9e', 0, 'Readonly'),
('hhh', '202cb962ac59075b964b07152d234b70', '6238b7c61cd77d5c57a0833d5c6e7f10', 0, 'Readonly'),
('qqq', 'd41d8cd98f00b204e9800998ecf8427e', '204f4d2a803e68bdcd10220985f6eb6e', 0, 'Readonly'),
('ranjani', '202cb962ac59075b964b07152d234b70', '9d366c71d06a704e836f88dd5225741a', 0, 'Readonly'),
('saman21', '202cb962ac59075b964b07152d234b70', 'fbfa0b2ee1e5cec4233d6502f0cb62de', 1, 'Readonly'),
('samantha', '202cb962ac59075b964b07152d234b70', '', 0, 'Readonly'),
('sanath', '173f8c9e191df4966a18b3c13df6d284', '', 0, 'Readonly'),
('sunil', '6c8349cc7260ae62e3b1396831a8398f', '5a7ef4b3a11c97d1a9aea60c6c0f9679', 0, 'Readonly'),
('uuu', '202cb962ac59075b964b07152d234b70', '802db0793b97f3df8eb487eba8f27826', 0, 'Readonly'),
('www', 'd41d8cd98f00b204e9800998ecf8427e', '28de8f0ed79ef181751b84e19854542f', 0, 'Readonly');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `user_frKey` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
