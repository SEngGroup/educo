-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 03:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'fed', ''),
(2, 'Java', 'Java and related subroutines'),
(3, 'PHP', 'Php and related sub routines\r\n\r\n'),
(4, 'Laravel', 'Php framework'),
(5, 'Django', 'Python famework'),
(6, 'Python', 'Python and related subroutines'),
(7, 'C++', 'C++ and related subroutines'),
(8, 'Windows', 'Windows OS and related subroutines and troubleshooting tips');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_message` text NOT NULL,
  `comment_topic` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_message`, `comment_topic`, `comment_by`, `comment_date`) VALUES
(1, '<p>Sample Equation with latex using educo forums&nbsp;</p>\n\n<div style=\"width:80%\">\n<h3>1.Integral Calculus</h3>\n\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"float:right; width:150px\">\n	<caption>\n	<p style=\"text-align:left\"><strong>What are the values of x,y,z?</strong></p>\n	</caption>\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\">a11</td>\n			<td style=\"text-align:center\">a12</td>\n			<td style=\"text-align:center\">a13</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">a21</td>\n			<td style=\"text-align:center\">a22</td>\n			<td style=\"text-align:center\">a23</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:center\">x</td>\n			<td style=\"text-align:center\">y</td>\n			<td style=\"text-align:center\">z</td>\n		</tr>\n	</tbody>\n</table>\n\n<p><strong><img alt=\"large int_{a=0}^{infty }x^{^{e}-1}dx = ?\" src=\"http://latex.codecogs.com/gif.latex?%5Clarge%20%5Cint_%7Ba%3D0%7D%5E%7B%5Cinfty%20%7Dx%5E%7B%5E%7Be%7D-1%7Ddx%20%3D%20%3F\" /></strong></p>\n\n<p>Matrices</p>\n</div>\n\n<p>&nbsp;</p>\n', 4, 17, '2020-11-08 18:06:18'),
(2, '<p>Test 1</p>\n', 5, 17, '2020-11-08 18:37:28'),
(3, '<p>test2</p>\n', 5, 17, '2020-11-08 18:37:41'),
(4, '<p>ds</p>\n', 5, 17, '2020-11-08 19:53:53'),
(5, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td style=\"width:50%\">\n			<h3>Title 1</h3>\n			</td>\n			<td>&nbsp;</td>\n			<td style=\"width:50%\">\n			<h3>Title 2</h3>\n			</td>\n		</tr>\n		<tr>\n			<td>Text 1</td>\n			<td>&nbsp;</td>\n			<td>Text 2</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>More text goes here.</p>\n', 5, 17, '2020-11-08 19:56:58'),
(10, '<p>Hello</p>\n', 5, 17, '2020-11-08 22:04:54'),
(11, '<p><iframe align=\"middle\" frameborder=\"0\" height=\"400\" scrolling=\"no\" src=\"https://youtu.be/teHTMILVPzg\" title=\"Rees TV\" width=\"600\"></iframe></p>\n', 4, 17, '2020-11-08 22:06:38'),
(12, '<p>use the tag <code>&lt;?php</code> for opening and <code>?&gt;</code> for closing</p>\n', 11, 17, '2020-11-09 13:10:03'),
(13, '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td style=\"width:50%\">\n			<h3>Title 1</h3>\n			</td>\n			<td>&nbsp;</td>\n			<td style=\"width:50%\">\n			<h3>Title 2</h3>\n			</td>\n		</tr>\n		<tr>\n			<td>Text 1</td>\n			<td>&nbsp;</td>\n			<td>Text 2</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>More text goes here.</p>\n', 11, 17, '2020-11-09 13:14:11'),
(14, '<p><object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\"><param name=\"allowFullScreen\" value=\"true\" /><param name=\"quality\" value=\"high\" /><param name=\"movie\" value=\"/ckfinder/userfiles/images/Kimo2.PNG\" /><embed allowfullscreen=\"true\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" quality=\"high\" src=\"/ckfinder/userfiles/images/Kimo2.PNG\" type=\"application/x-shockwave-flash\"></embed></object></p>\n', 11, 17, '2020-11-09 13:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_to` int(11) NOT NULL,
  `reply_by` int(11) NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply_content`, `reply_to`, `reply_by`, `reply_date`) VALUES
(1, '<p><img alt=\"yes\" src=\"http://localhost/seproject/lab-exercise-1/ckeditor/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>\n', 5, 17, '2020-11-08 19:58:28'),
(2, '<p>Cool</p>\n', 5, 17, '2020-11-08 20:00:19'),
(3, '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Kimo.PNG\" style=\"height:170px; width:300px\" /></p>\n', 1, 17, '2020-11-08 20:21:37'),
(7, '<p>Hello</p>\n', 5, 17, '2020-11-08 22:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_subject` text NOT NULL,
  `topic_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `topic_category` int(11) NOT NULL,
  `topic_by` int(11) NOT NULL,
  `topic_description` text NOT NULL,
  `topic_status` text NOT NULL DEFAULT 'ok'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_category`, `topic_by`, `topic_description`, `topic_status`) VALUES
(4, 'ede', '2020-10-25 21:46:01', 1, 7, 'ede', 'ok'),
(5, 'ds', '2020-11-07 16:59:37', 1, 6, 'dsd', 'ok'),
(6, 'How to change windows password CMD\r\n', '2020-11-09 10:10:32', 8, 3, '<p>Hello,</p>\n\n<p>How can I change my admin account password via the command prompt on windows 10?</p>\n\n<p><img src=\"/ckfinder/userfiles/files/image-20201109125438-1.jpeg\" style=\"height:183px; width:275px\" /></p>\n', 'ok'),
(10, 'Implementing integral function in php', '2020-11-09 10:55:50', 3, 17, '<h3>How can I Implement the folowing function in php?&nbsp;</h3>\r\n\r\n<p><img alt=\"int_{-infty }^{infty}lnfrac{x}{x^{2}}dx\" src=\"http://latex.codecogs.com/gif.latex?%5Cint_%7B-%5Cinfty%20%7D%5E%7B%5Cinfty%7D%5Cln%5Cfrac%7Bx%7D%7Bx%5E%7B2%7D%7Ddx\" /></p>\r\n', 'ok'),
(11, 'How to start a php file', '2020-11-09 13:08:43', 3, 17, '<p>How to start a php file</p>\n', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `date_created`) VALUES
(1, '', '', 'name@gmail.com', '1234', '2020-09-30 21:00:00'),
(2, '', '', 'cypkyalo17@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-09-30 21:00:00'),
(3, 'Brian James', '', 'name1@gmail.com', 'd3d9446802a44259755d38e6d163e820', '2020-11-09 10:28:58'),
(4, '', '', 'job@gmail.com', 'd3d9446802a44259755d38e6d163e820', '2020-10-01 17:59:48'),
(5, 'Mark', 'Biran', 'name@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e', '2020-10-01 18:10:41'),
(6, 'John', 'Job', 'john@gmail.com', '$2y$10$FitD0vBSYo3GqZ6mhS1jeeyl1kKF2F3yO/nMQfhMXrNC.WJKur5PK', '2020-10-02 11:46:22'),
(7, 'John', 'Cage', 'cage@strathmore.edu', '$2y$10$Qg3ZwpEc/4589M0wVWyer.dnLW3CTfJuDBnxFEqTw2HXCb1dcxz4a', '2020-10-02 11:54:03'),
(9, 'Mark', 'Job', 'mark@gmail.com', '$2y$10$y2J1bPkBG2GNqYrsGw9v1ObEQF5hhSCyE0K9QUggrFlJUzTjCMEpS', '2020-10-12 13:23:20'),
(10, 'Cyprian', 'Kyalo', 'cypkyalo17@gmail.com', '$2y$10$zD/HW5973IcV2WxBF8KsU.jaKKCrHV7ZbLTwbMpzWPUWQflrz.oum', '2020-10-12 13:50:23'),
(16, 'Nollega Opollo', 'Bulemi', 'victorijaika@gmailcom', '$2y$10$U4Q2awYG0V83lff2OmGWI.4VprpIMzGaFOBj09w8Y2KDQEGW5fMKC', '2020-10-26 12:12:04'),
(17, 'Rees', 'Alumasa', 'reesalumasa@gmail.com', '$2y$10$kn8cuR4xK.pdC8Ff.ZSLuuQ/o8f8AO/v9P3cGZggv6NRxUwLPsefO', '2020-10-26 13:21:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_topic` (`comment_topic`,`comment_by`),
  ADD KEY `comment_by` (`comment_by`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `reply_to` (`reply_to`,`reply_by`),
  ADD KEY `reply_by` (`reply_by`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_category` (`topic_category`,`topic_by`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`comment_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`comment_topic`) REFERENCES `topics` (`topic_id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`reply_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`reply_to`) REFERENCES `comments` (`comment_id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_category`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
