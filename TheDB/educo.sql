-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql305.epizy.com
-- Generation Time: Nov 17, 2020 at 05:11 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27212497_educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `is_type` text NOT NULL,
  `st` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`, `is_type`, `st`) VALUES
(1, 17, 4, 'Kim', '2020-11-14 15:30:33', 0, '', 'on'),
(2, 4, 17, 'Yes', '2020-11-14 15:30:56', 1, '', 'off'),
(8, 4, 17, '', '2020-11-14 16:17:28', 1, '', 'off'),
(9, 4, 17, 'Fine', '2020-11-14 17:52:02', 1, '', 'off'),
(10, 17, 4, 'Ok', '2020-11-14 17:52:13', 0, '', 'on'),
(11, 4, 17, 'hjki', '2020-11-14 17:52:51', 1, '', 'off'),
(12, 18, 17, 'Hello Sir', '2020-11-14 20:38:35', 0, '', 'off'),
(13, 18, 17, 'Vipi', '2020-11-14 21:02:33', 0, '', 'off'),
(14, 17, 18, 'Poa sana bro vipi', '2020-11-14 21:06:56', 0, '', 'off'),
(15, 17, 18, 'Uko fiti', '2020-11-14 21:10:59', 0, '', 'off'),
(16, 3, 17, 'Hey', '2020-11-15 10:00:45', 1, '', 'on'),
(17, 18, 17, 'hello', '2020-11-17 08:57:32', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_message` text NOT NULL,
  `comment_topic` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(14, '<p><object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\"><param name=\"allowFullScreen\" value=\"true\" /><param name=\"quality\" value=\"high\" /><param name=\"movie\" value=\"/ckfinder/userfiles/images/Kimo2.PNG\" /><embed allowfullscreen=\"true\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" quality=\"high\" src=\"/ckfinder/userfiles/images/Kimo2.PNG\" type=\"application/x-shockwave-flash\"></embed></object></p>\n', 11, 17, '2020-11-09 13:24:10'),
(15, '<p>mn,</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 6, 17, '2020-11-10 22:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE `flags` (
  `complain_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`complain_id`, `topic_id`, `description`, `status`) VALUES
(1, 11, 'Outdated content', 'flagged'),
(2, 12, 'Outdated content', ''),
(3, 12, 'vfd', '');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_to` int(11) NOT NULL,
  `reply_by` int(11) NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply_content`, `reply_to`, `reply_by`, `reply_date`) VALUES
(1, '<p><img alt=\"yes\" src=\"http://localhost/seproject/lab-exercise-1/ckeditor/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>\n', 5, 17, '2020-11-08 19:58:28'),
(2, '<p>Cool</p>\n', 5, 17, '2020-11-08 20:00:19'),
(3, '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Kimo.PNG\" style=\"height:170px; width:300px\" /></p>\n', 1, 17, '2020-11-08 20:21:37'),
(7, '<p>Hello</p>\n', 5, 17, '2020-11-08 22:04:37'),
(12, '<p>bh</p>\n', 12, 17, '2020-11-09 22:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_subject` text NOT NULL,
  `topic_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic_category` int(11) NOT NULL,
  `topic_by` int(11) NOT NULL,
  `topic_description` text NOT NULL,
  `topic_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_category`, `topic_by`, `topic_description`, `topic_status`) VALUES
(6, 'How to change windows password CMD\r\n', '2020-11-09 10:10:32', 8, 3, '<p>Hello,</p>\n\n<p>How can I change my admin account password via the command prompt on windows 10?</p>\n\n<p><img src=\"/ckfinder/userfiles/files/image-20201109125438-1.jpeg\" style=\"height:183px; width:275px\" /></p>\n', 'ok'),
(10, 'Implementing integral function in php', '2020-11-09 10:55:50', 3, 17, '<h3>How can I Implement the folowing function in php?&nbsp;</h3>\r\n\r\n<p><img alt=\"int_{-infty }^{infty}lnfrac{x}{x^{2}}dx\" src=\"http://latex.codecogs.com/gif.latex?%5Cint_%7B-%5Cinfty%20%7D%5E%7B%5Cinfty%7D%5Cln%5Cfrac%7Bx%7D%7Bx%5E%7B2%7D%7Ddx\" /></p>\r\n', 'ok'),
(11, 'How to start a php file', '2020-11-09 13:08:43', 3, 17, '<p>How to start a php file</p>\n', 'ok'),
(12, 'Resource interpreted as stylesheet but transferred with MIME type text/html', '2020-11-17 05:59:49', 3, 17, '<p>202</p>\n\n<p>&nbsp;</p>\n\n<p>26</p>\n\n<p>&nbsp;</p>\n\n<p>I have this problem. Chrome continues to return this error</p>\n\n<blockquote>\n<p>Resource interpreted as stylesheet but transferred with MIME type text/html</p>\n</blockquote>\n\n<p>The files affected by this error are just the Style, chosen and jquery-gentleselect (other CSS files that are imported in the index in the same way work well and without error). I&#39;ve already checked my MIME type and text/css is already on CSS.</p>\n\n<p>Honestly I&#39;d like to start by understanding the problem (a thing that seems I cannot do alone).</p>\n', '');

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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `date_created`, `status`) VALUES
(1, 'TX', '', 'name@gmail.com', '1234', '2020-11-14 17:39:23', 'on'),
(2, 'GH', '', 'cypkyalo17@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-11-14 17:39:29', 'on'),
(3, 'Brian James', '', 'name1@gmail.com', 'd3d9446802a44259755d38e6d163e820', '2020-11-09 10:28:58', 'on'),
(4, 'Warren', '', 'job@gmail.com', 'd3d9446802a44259755d38e6d163e820', '2020-11-14 15:33:43', 'on'),
(5, 'Mark', 'Biran', 'name@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e', '2020-10-01 18:10:41', 'on'),
(6, 'John', 'Job', 'john@gmail.com', '$2y$10$FitD0vBSYo3GqZ6mhS1jeeyl1kKF2F3yO/nMQfhMXrNC.WJKur5PK', '2020-10-02 11:46:22', 'on'),
(7, 'John', 'Cage', 'cage@strathmore.edu', '$2y$10$Qg3ZwpEc/4589M0wVWyer.dnLW3CTfJuDBnxFEqTw2HXCb1dcxz4a', '2020-10-02 11:54:03', 'on'),
(9, 'Mark', 'Job', 'mark@gmail.com', '$2y$10$y2J1bPkBG2GNqYrsGw9v1ObEQF5hhSCyE0K9QUggrFlJUzTjCMEpS', '2020-10-12 13:23:20', 'on'),
(10, 'Cyprian', 'Kyalo', 'cypkyalo17@gmail.com', '$2y$10$zD/HW5973IcV2WxBF8KsU.jaKKCrHV7ZbLTwbMpzWPUWQflrz.oum', '2020-10-12 13:50:23', 'on'),
(16, 'Nollega Opollo', 'Bulemi', 'victorijaika@gmailcom', '$2y$10$U4Q2awYG0V83lff2OmGWI.4VprpIMzGaFOBj09w8Y2KDQEGW5fMKC', '2020-10-26 12:12:04', 'on'),
(17, 'Rees', 'Alumasa', 'reesalumasa@gmail.com', '$2y$10$kn8cuR4xK.pdC8Ff.ZSLuuQ/o8f8AO/v9P3cGZggv6NRxUwLPsefO', '2020-10-26 13:21:29', 'on'),
(18, 'Victor', 'Bulemi', 'victorijaika@gmail.com', '$2y$10$7C.3nDwUixA6KHaIoM1Fse3kAB5FNmeK2Q81nUiB4MvJ04di59oA2', '2020-11-13 19:12:19', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_topic` (`comment_topic`,`comment_by`),
  ADD KEY `comment_by` (`comment_by`);

--
-- Indexes for table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`complain_id`);

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
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `flags`
--
ALTER TABLE `flags`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
