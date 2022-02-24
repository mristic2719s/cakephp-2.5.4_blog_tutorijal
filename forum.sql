-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 03:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic_id`, `user_id`, `body`, `created`, `modified`) VALUES
(9, 19, 5, 'Neki topic', '2022-02-24 15:40:01', '2022-02-24 15:40:01'),
(10, 14, 3, 'Ovo je moj novi post - korisnik', '2022-02-24 15:42:09', '2022-02-24 15:42:09'),
(11, 14, 3, 'Moj novi post dva', '2022-02-24 15:43:24', '2022-02-24 15:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `visible` int(8) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `title`, `visible`, `created`, `modified`) VALUES
(12, 0, 'Tema jedan', 1, '2022-02-24 14:32:37', '2022-02-24 14:32:37'),
(13, 0, 'Tema vidljiva adminima samo', 2, '2022-02-24 14:37:16', '2022-02-24 14:37:16'),
(14, 0, 'Tema vidljiva samo obicnim korisnicima i posetiocima', 1, '2022-02-24 14:37:24', '2022-02-24 14:37:24'),
(15, 0, 'Tema od admina', 2, '2022-02-24 15:10:14', '2022-02-24 15:10:14'),
(17, 0, 'Sakrivena tema published by admin', 2, '2022-02-24 15:18:07', '2022-02-24 15:18:07'),
(18, 0, 'Objavljena tema za obicne korisnike published by admin', 1, '2022-02-24 15:18:26', '2022-02-24 15:18:26'),
(19, 3, 'Objavljena tema od strane korisnika sa id-om korisnika', 2, '2022-02-24 15:28:42', '2022-02-24 15:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `role` int(8) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `role`, `created`, `modified`) VALUES
(3, 'korisnik', 'f5049a37697023e9b910cccf2d4dce740209e0fe', 'Obican korisnik', 1, '2022-02-24 14:08:24', '2022-02-24 14:08:24'),
(4, 'test', 'f8b320adff23506ff6ebb41314edfc3c952c44b2', 'test', 1, '2022-02-24 14:50:23', '2022-02-24 14:50:23'),
(5, 'admin', '8f8ef22a31e6e679a82f7d09e98400c0f3bf57f7', 'admin', 2, '2022-02-24 14:51:27', '2022-02-24 14:52:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
