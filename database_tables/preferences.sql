-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 05:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `name`, `value`) VALUES
(1, 'site_name', 'Desired Reviews'),
(2, 'copyright_text', '© 2020 Desired Reviews. All rights reserved | Designed by Students'),
(3, 'site_facebook', 'https://www.facebook.com/'),
(4, 'site_instagram', 'https://www.instagram.com/'),
(5, 'site_twitter', 'https://twitter.com/'),
(6, 'link_1_title', 'Our People'),
(7, 'link_1_url', ''),
(8, 'link_2_title', 'Latest Media'),
(9, 'link_2_url', ''),
(10, 'link_3_title', 'Our Branches'),
(11, 'link_3_url', ''),
(12, 'link_4_title', 'Organisations'),
(13, 'link_4_url', ''),
(14, 'link_5_title', 'Help'),
(15, 'link_5_url', ''),
(16, 'newsletter_title', 'Get in your inbox the latest News and'),
(17, 'newsletter_description', 'Subscribe and get our weekly newsletter  We\'ll never share your email address'),
(18, 'quick_link_1_title', 'Home'),
(19, 'quick_link_1_url', ''),
(20, 'quick_link_2_title', 'About'),
(21, 'quick_link_2_url', ''),
(22, 'quick_link_3_title', 'Services'),
(23, 'quick_link_3_url', ''),
(24, 'quick_link_4_title', 'Blog'),
(25, 'quick_link_4_url', ''),
(26, 'quick_link_5_title', 'Contact'),
(27, 'quick_link_5_url', ''),
(28, 'site_email', 'http://gmail.com/'),
(29, 'site_contact', '+923041705101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
