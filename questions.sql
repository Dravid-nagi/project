-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2019 at 04:30 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `q_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `ansid`) VALUES
(1, 'Include PHP code in posts is ________?', 2),
(2, 'A CSS file (or files) replacing the default CSS of a theme or engine. Appears in the theme selection list with the same precedence as themes and templates.', 3),
(3, 'Which is publishing syndicated content?', 4),
(4, 'Which is a way to organize your content?', 2),
(5, 'Which is Notifications about new versions of Drupal and contributions?', 2),
(6, ' ------ is a multi-language support?', 1),
(7, 'Which is extending user account information?', 4),
(8, 'Which is the name of the whole system and the name of the module that implements it. This used to be the name of the menu item in the admin menu.?', 2),
(9, 'Which is a blog for every user?', 4),
(10, '_______ is Capture system events in log?', 1),
(11, 'Which is remapping of old-style URLs?', 4),
(12, 'Which is congestion control?', 2),
(13, 'Which refers to the Drupal files and modules included with the Drupal project download?', 1),
(14, 'Which is Drupal sites directory server?', 2),
(15, 'Which is collaborate with files?`', 2),
(16, '------  is create threaded discussions?', 2),
(17, 'Which is used for handling filtering of content?', 3),
(18, 'What is Input formats for user content?', 1),
(19, 'Which is used to notify services of changes?', 1),
(20, 'Which is controlling content in the sidebars?', 4);
