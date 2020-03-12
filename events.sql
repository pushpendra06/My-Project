-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 01:34 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `otp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pwd`, `otp`) VALUES
(1, 'Admin', 'info@events.com', '123', 'TUCSGH');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(255) NOT NULL,
  `btime` varchar(20) NOT NULL,
  `msg` varchar(3000) NOT NULL,
  `date1` varchar(25) NOT NULL,
  `date2` varchar(25) NOT NULL,
  `cat` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `mob`, `address`, `city`, `btime`, `msg`, `date1`, `date2`, `cat`, `adkey`) VALUES
(1, 'intjar', 'k@gmail.com', '2147483647', 'indore', '', '', 'gdfdgfdf', '10/11/2017', '10/10/2017', '3', 1),
(2, 'aka', 'aa@sdsd.com', '23423432423', 'mata chowck jaswadi raod', 'khandwa', '02:00 PM', 'test msg', '12/12/2019', '15/12/2019', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(150) NOT NULL,
  `name` varchar(105) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date1` varchar(25) NOT NULL,
  `msg` varchar(3000) NOT NULL,
  `img1` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `cat`, `name`, `place`, `date1`, `msg`, `img1`, `adkey`) VALUES
(6, 'Festival', 'Festival Events', 'Indore', '2017-10-04', '<p style="text-align: justify;">A festival is an event ordinarily celebrated by a community and centering on some characteristic aspect of that community and its religion or traditions. It is often marked as a local or national holiday, mela, or eid. Next to religion and folklore, a significant origin is agricultural.</p>\r\n', 'indian-festivals.jpg', 1),
(7, 'Marriage Party ', 'Marriage Party ', 'Gwalior', '2017-10-12', '<p style="text-align: justify;">A wedding reception is a party usually held after the completion of a marriage ceremony as hospitality for those who have attended the wedding, hence the name reception: the couple receives society, in the form of family and friends, for the first time as a married couple.</p>\r\n', '8.jpg', 1),
(8, 'New Year Party', 'New Year Party', 'Gwalior', '2017-12-31', '<p style="text-align: justify;">In the Gregorian calendar, New Year&#39;s Eve (also known as Old Year&#39;s Day or Saint Sylvester&#39;s Day in many countries), the last day of the year, is on December 31 which is the seventh day of Christmastide. In many countries, New Year&#39;s Eve is celebrated at evening social gatherings, where many people dance, eat, drink alcoholic beverages, and watch or light fireworks to mark the new year. Some Christians attend a watchnight service. The celebrations generally go on past midnight into New Year&#39;s Day, January 1.</p>\r\n', '5.jpg', 1),
(9, 'Live Concert', 'Live Concert', 'Morena', '2017-10-19', '<p style="text-align: justify;">A concert is a live music performance in front of an audience. The performance may be by a single musician, sometimes then called a recital, or by a musical ensemble, such as an orchestra, choir, or band. Concerts are held in a wide variety and size of settings, from private houses and small nightclubs, dedicated concert halls, arenas and parks to large multipurpose buildings, and even sports stadiums. Indoor concerts held in the largest venues are sometimes called arena concerts or amphitheatre concerts.</p>\r\n', 'photos-2017-5-8-9-11-3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventscat`
--

CREATE TABLE IF NOT EXISTS `eventscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `eventscat`
--

INSERT INTO `eventscat` (`id`, `cat`, `adkey`) VALUES
(1, 'Wedding', 1),
(2, 'Live Concert', 1),
(3, 'Business Events', 1),
(4, 'festival', 1),
(5, 'Auditions', 1),
(7, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE IF NOT EXISTS `imagegallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(123) NOT NULL,
  `img1` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `cat`, `img1`, `adkey`) VALUES
(8, '1', '6.jpg', 1),
(9, '2', 'e4.jpg', 1),
(10, '3', 'e3.jpg', 1),
(11, '4', 'indian-festivals.jpg', 1),
(12, '5', 'g2.jpg', 1),
(13, '5', 'e6.jpg', 1),
(14, '7', 'testi-image-3.jpg', 1),
(15, '7', 'testi-image-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_details`
--

CREATE TABLE IF NOT EXISTS `services_details` (
  `service_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) NOT NULL,
  `service_content` longtext NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `service_status` int(10) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `services_details`
--

INSERT INTO `services_details` (`service_id`, `service_name`, `service_content`, `service_img`, `service_status`) VALUES
(1, 'Live Auditions', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520593329_ser4.jpg', 0),
(3, 'Wedding Events', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520595304_e5.jpg', 0),
(4, 'Live Consert', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520593732_ser3.jpg', 0),
(5, 'Social Events', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520593768_ser6.jpg', 0),
(6, 'Festivals Events', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520593803_ser7.jpg', 0),
(7, 'Business Events', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.</p>\r\n', 'img/events/services1520593910_ser8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img1`, `adkey`) VALUES
(5, '22.jpg', 1),
(6, '16.jpg', 1),
(7, '17.jpg', 1),
(8, '23.jpg', 1),
(9, '25.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(123) NOT NULL,
  `url` varchar(150) NOT NULL,
  `adkey` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `cat`, `url`, `adkey`) VALUES
(18, '', 'https://www.youtube.com/embed/fkVcuTE6I-s', 1),
(19, '', 'https://www.youtube.com/embed/jYIm1J6jmVU', 1),
(20, '', 'https://www.youtube.com/embed/3KmikvogFKU', 1);
