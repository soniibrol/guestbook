-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2014 at 07:24 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time_posted` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `email`, `message`, `time_posted`) VALUES
(1, 'tes', 'test@lagi.com', 'test', '2014-12-16 05:04:39'),
(2, 'soni', 'soni@gmail.com', 'Hallo', '2014-12-16 05:05:19'),
(3, 'Sondang', 'sondang@gmail.com', 'Sondang gitu lho!', '2014-12-16 05:10:16'),
(4, 'Jery', 'jerry@gmai.com', 'Hello posted message via via', '2014-12-16 05:40:39'),
(5, 'Siapa lagi', 'saya@saya.com', 'saya', '2014-12-16 05:43:05'),
(6, 'ngete', 'nge@tes.com', 'hahaha', '2014-12-16 05:44:11'),
(7, 'yeyen', 'yeeyn@gmail.com', 'yeye', '2014-12-16 05:45:36'),
(8, 'yu', 'yu@d.com', 'yuyu', '2014-12-16 05:48:01'),
(9, 'hola', 'ola@g.com', 'ola ola ola', '2014-12-16 05:48:48'),
(10, 'firman', 'firman@gmail.com', 'Firman', '2014-12-16 06:24:21'),
(11, 'nisarafah', 'nisarafah@gmail.com', 'Test', '2014-12-16 06:25:48'),
(12, 'again', 'again@gmail.com', 'again', '2014-12-16 06:26:08'),
(13, 'kirana', 'kirana@gmail.com', 'Kirana gmail', '2014-12-16 06:26:57'),
(14, 'kembali', 'kembali@gmail.com', 'kembali', '2014-12-16 06:27:40'),
(15, 'jinjin', 'jinjin@gmail.com', 'JinJin', '2014-12-16 06:28:02'),
(16, 'komplete', 'komplete@gmail.com', 'Komplete control coy', '2014-12-16 06:28:53'),
(17, 'test real', 'test@lagi.com', 'Test real message, append append append', '2014-12-16 06:29:30'),
(18, 'Sonii', 'sonii@gmail.com', 'Soni test', '2014-12-16 06:44:22'),
(19, 'Onte', 'onte@gmail.com', 'Onte onte', '2014-12-16 06:50:31'),
(20, 'Kinkin Budiaman', 'kinkinbudiaman@gmail.com', 'Hey, saya coba guesbooknya ya... kayaknya keren nih..', '2014-12-16 06:57:24'),
(21, 'Rina Indriani', 'rina@yahoo.com', 'Rina Indriani mencoba ngirim message nih..', '2014-12-16 06:59:32'),
(22, 'Nani Sumarni', 'nanisumarni@gmail.com', 'Tes message test message test message test message test message lagi', '2014-12-16 07:01:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
