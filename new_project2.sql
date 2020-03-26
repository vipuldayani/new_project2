-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 07:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(200) NOT NULL DEFAULT '',
  `main_title` varchar(200) NOT NULL DEFAULT '',
  `sub_title` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about_title`, `main_title`, `sub_title`, `title`, `switch`, `created_date`) VALUES
(1, 'About Us', 'Aradigm shifts in the performance of functional materials have been demonstrated in recent years\r\n                            Performance of functional materials have been demonstrated in recent', 'This sentence outlines the main idea that will be presented in the paragraph. ', '  This is the part of the paragraph that presents details, facts, examples, quotes and arguments that support the main idea. This paragraph tries to convince the reader of something. This type of para', 'on', '2018-10-03 22:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_image`
--

CREATE TABLE IF NOT EXISTS `tbl_about_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about_image`
--

INSERT INTO `tbl_about_image` (`id`, `image`) VALUES
(1, 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `name`, `email`, `subject`, `message`, `created_date`) VALUES
(5, 'Vipul Dayani', 'bladephp@gmail.com', 'Computer Work', 'Ok  send message', '2018-10-04 08:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featuress`
--

CREATE TABLE IF NOT EXISTS `tbl_featuress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(200) NOT NULL DEFAULT '',
  `switch` varchar(200) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_featuress`
--

INSERT INTO `tbl_featuress` (`id`, `main_title`, `switch`, `created_date`) VALUES
(1, 'Product Featuress', 'on', '2018-10-04 03:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featuress_icon`
--

CREATE TABLE IF NOT EXISTS `tbl_featuress_icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon1` varchar(255) NOT NULL DEFAULT '',
  `sub_title1` varchar(255) NOT NULL DEFAULT '',
  `last_title1` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_featuress_icon`
--

INSERT INTO `tbl_featuress_icon` (`id`, `icon1`, `sub_title1`, `last_title1`) VALUES
(8, 'fa fa-film font', 'Jones Bailey', 'The support section may include sentences  may include sentences that that start with, "One reason is...," or "For example.'),
(9, 'fa fa-globe font', 'Wood Thompson', 'This paragraph tries to convince the reader of something. This type of paragraph may start with a phrase like: "I think that..'),
(10, ' fa fa-mortar-board font', 'Wright Greens', 'This paragraph explains an idea; it is also called an information paragraph. For example, you can write as expository paragraph explaining.'),
(11, 'fa fa-diamond font ', 'Parker Dean ', 'Convince the reader of something. This type of paragraph may startconvince the reader of something.'),
(12, 'fa fa-film font ', 'Jones Bailey ', 'The support section may include sentences may include sentences that that start with, "One reason is...," or "For example.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featuress_image`
--

CREATE TABLE IF NOT EXISTS `tbl_featuress_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_featuress_image`
--

INSERT INTO `tbl_featuress_image` (`id`, `image`) VALUES
(1, 'iphon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE IF NOT EXISTS `tbl_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(100) NOT NULL DEFAULT '',
  `sub_title` varchar(255) NOT NULL DEFAULT '',
  `address_title` varchar(255) NOT NULL DEFAULT '',
  `sub_address` varchar(255) NOT NULL DEFAULT '',
  `designed` varchar(255) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `main_title`, `sub_title`, `address_title`, `sub_address`, `designed`, `switch`) VALUES
(1, 'Contact Us', 'what she wants for her birthday accounts and her favorite develop ment in production', 'BLADEPHP', 'Price is influenced by the type of distribution channel used, the type of promotions used, and the quality of the product. Where manufacturing is expensive, distribution is exclusive.', 'Copyright Bladephp.  All Rights Reserved Designed by Bladephp', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE IF NOT EXISTS `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(200) NOT NULL DEFAULT '',
  `sub_title` varchar(200) NOT NULL DEFAULT '',
  `click_title` varchar(2000) NOT NULL DEFAULT '',
  `switch` varchar(100) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `main_title`, `sub_title`, `click_title`, `switch`, `created_date`) VALUES
(1, 'Welcome to Bladephp', 'We are team of talanted designers making websites with Bootstrap', 'Get Started', 'on', '2018-10-03 21:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `active` varchar(100) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `active`, `created_date`) VALUES
(1, 'admin@gmail.com', '12345', '0', '0000-00-00 00:00:00'),
(2, 'admin@gmail.com', '12345', '0', '0000-00-00 00:00:00'),
(3, 'admin@bladephp.co', '123456', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `image`) VALUES
(1, 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `one_title` varchar(255) NOT NULL DEFAULT '',
  `two_title` varchar(255) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `one_title`, `two_title`, `switch`) VALUES
(1, 'Gallery', 'She lives, what she wants for her birthday accounts and her favorite production ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_image`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_portfolio_image`
--

INSERT INTO `tbl_portfolio_image` (`id`, `name`, `image`) VALUES
(4, 'Work name', 'll.JPG'),
(5, 'Action Lily', 'ff.jpg'),
(6, 'Adley Olivia', 'gg.jpg'),
(7, 'Alby Charlie', 'hh.jpg'),
(8, 'Alby Charlie', 'jj.jpg'),
(9, 'Work name', 'kk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shareicon`
--

CREATE TABLE IF NOT EXISTS `tbl_shareicon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `target` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_shareicon`
--

INSERT INTO `tbl_shareicon` (`id`, `icon`, `link`, `target`) VALUES
(6, 'fa fa-twitter', 'https://www.twitter.com', 'on'),
(7, 'fa fa-facebook', 'https://www.facebook.com', 'on'),
(8, 'fa fa-instagram', 'https://www.instagram.com', 'on'),
(9, 'fa fa-google-plus', 'https://www.googleplus.com', 'on'),
(10, 'fa fa-linkedin', 'https://www.linkedin.com', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switch` varchar(255) NOT NULL DEFAULT '0',
  `main_title` varchar(200) NOT NULL DEFAULT '',
  `latest_title` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `switch`, `main_title`, `latest_title`) VALUES
(1, 'on', 'Our Team', 'Where she lives, what she wants for her birthday, and her favorite food. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_image`
--

CREATE TABLE IF NOT EXISTS `tbl_team_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_team_image`
--

INSERT INTO `tbl_team_image` (`id`, `name`, `image`) VALUES
(4, 'Walter White', 'qq.jpg'),
(5, 'Sarah Jhinson', 'ww.png'),
(6, 'William Anderson', 'ee.png'),
(7, 'Amanda Jepson', 'rr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_title`
--

CREATE TABLE IF NOT EXISTS `tbl_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_main_title` varchar(255) NOT NULL DEFAULT '',
  `title_sub_title` varchar(255) NOT NULL DEFAULT '',
  `title_text1` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_title`
--

INSERT INTO `tbl_title` (`id`, `title_main_title`, `title_sub_title`, `title_text1`) VALUES
(1, 'Bladephp Bootstrap PHP Template', 'keywords', 'description');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
