-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 04:48 PM
-- Server version: 10.4.17-MariaDB
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`, `added_on`, `updated_on`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2020-11-19 19:51:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `isdel` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `isdel`, `created_at`) VALUES
(1, 4, 'test', 0, '2121-02-11 08:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `earning_details`
--

CREATE TABLE `earning_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `amount` int(9) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0= withdraw,1 not able to withdraw',
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `isdel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earning_details`
--

INSERT INTO `earning_details` (`id`, `user_id`, `order_id`, `task_id`, `amount`, `status`, `added_on`, `isdel`) VALUES
(1, 8, 1, 1, 1, 0, '2021-02-21 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` text NOT NULL,
  `post_link` text NOT NULL,
  `order_price` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=accepted,2=rejected',
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `isdel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `package_id`, `user_email`, `user_phone`, `post_link`, `order_price`, `status`, `added_on`, `isdel`) VALUES
(1, 5, 1, 'ammar@gmail.com', '03041705101', 'https://stackoverflow.com/questions/18271251/typeerror-ajax-is-not-a-function', '11', 0, '2021-02-14 03:09:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `isdel` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `price`, `description`, `image`, `isdel`, `created_at`) VALUES
(1, 'Facebook Package', '10', '<p><strong>Get 100 likes,comments and share\'s on your facebook post...</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1613288028_shutterstock_186292982a.jpg', 0, '2021-02-14 08:33:00'),
(2, 'Instagram Package', '15', '<p><strong>Get 100 likes,comments and share\'s on your instagram post...</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1613288173_Instagram-1.jpg', 0, '2021-02-14 08:36:00'),
(3, 'Tiktok Package', '17', '<p><strong>Get 100 likes,comments and share\'s on your tiktok post...</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1613288280_tiktok.jpg', 0, '2021-02-14 08:38:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `isdel` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `title`, `image`, `added_on`, `isdel`) VALUES
(1, 'slider image 1', '16096882328300.jpg', '0000-00-00 00:00:00', 1),
(2, 'slider image 2', '160968895326165.jpeg', '2021-01-03 04:49:00', 1),
(3, 'Get Likes,Comments and Followers on your product', '161322619113755.jpg', '2021-02-13 03:23:00', 0),
(4, 'Become a member earn by using your social accounts', '161322628822331.jpg', '2021-02-13 03:24:00', 0),
(5, 'From any region of the world.Feel free to Contact Us', '16132263422776.jpg', '2021-02-13 03:25:00', 0),
(6, 'Become a part of this amazing community and earn as much as you can', '16132272187729.jpg', '2021-02-13 03:40:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `task_link` text NOT NULL,
  `task description` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=completed',
  `completed_on` datetime NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `isdel` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `order_id`, `package_id`, `task_link`, `task description`, `status`, `completed_on`, `added_on`, `isdel`) VALUES
(1, 8, 1, 1, 'https://stackoverflow.com/questions/18271251/typeerror-ajax-is-not-a-function', 'Provide 1 like,comment and share on this post thankyou', 0, '0000-00-00 00:00:00', '2021-02-21 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '0=seller,1=buyer,2=company',
  `isdel` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `profile_image`, `services`, `country`, `password`, `address`, `user_type`, `isdel`, `created_at`) VALUES
(1, 'ammar', '12345', 'ammar@gmail.com', '', 'likes,comments,reviews', '', 'cc03e747a6afbbcbf8be7668acfebee5', 'Plot CB 29/1, Khayaban-e-Sadiq Khayaban E Sadiq, Sargodha, Punjab, Pakistan', 0, 0, '2020-12-14 04:49:05'),
(5, 'ammar01', '03041705101', 'ammar01@gmail.com', '', 'likes,comments,reviews', '', 'cc03e747a6afbbcbf8be7668acfebee5', 'Sargodha,Punjab', 1, 0, '2121-02-13 02:35:21'),
(7, 'test', '12344', 'test1@test.com', '1613228618_images.jpg', 'likes,comments,reviews', '', 'cc03e747a6afbbcbf8be7668acfebee5', 'Sargodha,Punjab', 0, 0, '2121-02-13 04:03:38'),
(8, 'ammar_seller', '03041705101', 'ammar_seller@gmail.com', '1613917705_images.jpg', '', 'Pakistan', '', 'Sargodha,Punjab', 0, 0, '2121-02-21 02:52:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earning_details`
--
ALTER TABLE `earning_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `earning_details`
--
ALTER TABLE `earning_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
