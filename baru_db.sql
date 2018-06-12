-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 05:21 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abubakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `lwd_banner`
--

CREATE TABLE `lwd_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_type` enum('banner','slide') NOT NULL DEFAULT 'slide',
  `banner_link` varchar(255) NOT NULL,
  `banner_alt` varchar(255) NOT NULL,
  `banner_pub` enum('88','99') NOT NULL DEFAULT '88',
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_banner`
--

INSERT INTO `lwd_banner` (`banner_id`, `banner_type`, `banner_link`, `banner_alt`, `banner_pub`, `banner_image`) VALUES
(1, 'slide', '#', '#', '99', ''),
(2, 'slide', '#', '#', '99', '');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_careers`
--

CREATE TABLE `lwd_careers` (
  `careers_id` int(8) NOT NULL,
  `careers_name` varchar(255) NOT NULL,
  `careers_desc` text NOT NULL,
  `careers_post` date NOT NULL,
  `careers_close` date NOT NULL,
  `careers_pub` enum('88','99') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_careers`
--

INSERT INTO `lwd_careers` (`careers_id`, `careers_name`, `careers_desc`, `careers_post`, `careers_close`, `careers_pub`) VALUES
(2, 'Web Developer', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-22', '99'),
(3, 'Front-end Developer', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-22', '99'),
(4, 'Backend Developer', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-28', '99'),
(5, 'Senior Auditor', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-30', '99'),
(6, 'Junior Auditor', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-22', '99'),
(7, 'Administrator Website', '<h3>Responsibilities</h3>\r\n\r\n<ul>\r\n <li>Obtain a working knowledge of the clients business.</li>\r\n <li>Lead client audit engagements, which include planning, executing, directing and completing financial audits</li>\r\n <li>Supervise, train, develop auditing staff to develop their knowledge by monitor and control auditing staff</li>\r\n <li>Handle more than 5 clients</li>\r\n <li>Handle more than 5 staffs</li>\r\n <li>Perform other job related duties as necessary</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h3>Requirements:</h3>\r\n\r\n<ul>\r\n <li>Minimum of Age 23 to 28 years old.</li>\r\n <li>Bachelor degree in Accounting with minimum GPA 3.00 or better.</li>\r\n <li>Minimum 2 years at Senior level from Registered Public Accountant only.</li>\r\n <li>Strong accounting knowledges and jouals.</li>\r\n <li>Fully understand cash flow and consolidation.</li>\r\n <li>Fluent in English (Both oral and writing).</li>\r\n <li>Able to work as a team as well as independently.</li>\r\n <li>Able to work under pressure, fast and quick response.</li>\r\n <li>Good personality, self-motivation, loyal, honest and easy going.</li>\r\n</ul>\r\n', '2018-06-08', '2018-06-21', '99');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_category`
--

CREATE TABLE `lwd_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_seq` int(11) NOT NULL COMMENT 'sequence / urutan',
  `category_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publis',
  `category_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_catinfo`
--

CREATE TABLE `lwd_catinfo` (
  `catinfo_id` int(11) NOT NULL,
  `catinfo_name` varchar(255) NOT NULL,
  `catinfo_link` varchar(255) NOT NULL,
  `catinfo_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publis'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_catinfo`
--

INSERT INTO `lwd_catinfo` (`catinfo_id`, `catinfo_name`, `catinfo_link`, `catinfo_pub`) VALUES
(1, 'Our Firm', 'our-firm', '99'),
(2, 'Our Partners', 'our-partners', '99'),
(3, 'Our Clients', 'our-clients', '99'),
(4, 'Benefits for Our Client', 'benefits-for-our-client', '99'),
(5, 'International Association', 'international-association', '99'),
(6, 'Links', 'professional-links', '99');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_catnews`
--

CREATE TABLE `lwd_catnews` (
  `catnews_id` int(8) NOT NULL,
  `catnews_name` varchar(255) NOT NULL,
  `catnews_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_catnews`
--

INSERT INTO `lwd_catnews` (`catnews_id`, `catnews_name`, `catnews_link`) VALUES
(1, 'news', 'news'),
(2, 'event', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_contact`
--

CREATE TABLE `lwd_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_maps` text NOT NULL,
  `contact_fb` varchar(255) NOT NULL,
  `contact_yt` varchar(255) NOT NULL,
  `contact_tw` varchar(255) NOT NULL,
  `contact_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_contact`
--

INSERT INTO `lwd_contact` (`contact_id`, `contact_phone`, `contact_fax`, `contact_email`, `contact_address`, `contact_maps`, `contact_fb`, `contact_yt`, `contact_tw`, `contact_in`) VALUES
(1, '021 - 54381328', '021 - 54394828', 'info@your-web.com', 'Jl. Jembatan Batu No. 82 - 83\r\nPinangsia Jakarta 11110', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.4297126470617!2d106.70244424152723!3d-6.149574103835754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f812814e7aa7%3A0xf9b7032a017de8d3!2sMitra+Asia+Synergy.+PT!5e0!3m2!1sen!2sid!4v1524547293072\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'https://www.facebook.com/', 'http://youtube.com', 'https://www.twitter.com/', 'http://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_image`
--

CREATE TABLE `lwd_image` (
  `image_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image_parent_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_seq` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_image`
--

INSERT INTO `lwd_image` (`image_id`, `parent_id`, `image_parent_name`, `image_name`, `image_seq`) VALUES
(18, 6, 'firm', '-880.jpg', 0),
(24, 3, 'news', 'if-i-were-a--5120.jpg', 0),
(25, 4, 'news', 'i-listen-to-heart-7900.jpg', 0),
(29, 14, 'partners', '-4869.png', 0),
(30, 15, 'partners', '-4438.png', 0),
(31, 16, 'partners', '-5641.png', 0),
(32, 17, 'partners', '-2658.png', 0),
(33, 18, 'clients', '-4091.png', 0),
(34, 19, 'clients', '-6406.png', 0),
(35, 20, 'clients', '-9904.png', 0),
(36, 21, 'clients', '-7971.png', 0),
(37, 22, 'clients', '-8734.png', 0),
(38, 23, 'clients', '-9158.png', 0),
(45, 4, 'services', 'business-establishments-and-structures-3670.jpg', 0),
(46, 4, 'services', 'business-establishments-and-structures-3671.png', 1),
(47, 5, 'services', 'due-diligence-engagements-5762.jpg', 0),
(48, 5, 'services', 'due-diligence-engagements-5763.png', 1),
(49, 6, 'services', 'legal-and-banking-contracts-630.jpg', 0),
(50, 6, 'services', 'legal-and-banking-contracts-631.png', 1),
(51, 7, 'services', 'management-consultancy-2856.jpg', 0),
(52, 7, 'services', 'management-consultancy-2857.png', 1),
(53, 8, 'services', 'local-taxation-7281.jpg', 0),
(54, 8, 'services', 'local-taxation-7282.png', 1),
(55, 9, 'services', 'accounting-and-audit-compliance-3526.jpg', 0),
(56, 9, 'services', 'accounting-and-audit-compliance-3527.png', 1),
(57, 1, 'slide', '-7892.jpg', 0),
(58, 2, 'slide', '-8011.jpg', 0),
(62, 9, 'event', 'test-lagi-9427.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lwd_info`
--

CREATE TABLE `lwd_info` (
  `info_id` int(11) NOT NULL,
  `catinfo_id` int(11) NOT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `info_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publish',
  `info_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_info`
--

INSERT INTO `lwd_info` (`info_id`, `catinfo_id`, `info_name`, `info_desc`, `info_pub`, `info_image`) VALUES
(6, 1, 'Our Firm', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '99', ''),
(11, 4, 'Benefits for Our Client', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n', '99', ''),
(12, 5, 'international', '<p>test</p>\r\n', '99', ''),
(14, 2, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(15, 2, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(16, 2, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(17, 2, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(18, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(19, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(20, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(21, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(22, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(23, 3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '99', ''),
(24, 6, 'Test', 'http://www.test.com', '99', ''),
(25, 6, 'Test lagi', 'http://www.test-lagi.com', '99', '');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_news`
--

CREATE TABLE `lwd_news` (
  `news_id` int(11) NOT NULL,
  `catnews_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` text NOT NULL,
  `news_video` varchar(255) NOT NULL,
  `news_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_pub` enum('88','99') NOT NULL DEFAULT '88',
  `news_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_news`
--

INSERT INTO `lwd_news` (`news_id`, `catnews_id`, `user_id`, `news_title`, `news_desc`, `news_video`, `news_date`, `news_pub`, `news_link`) VALUES
(3, 1, 1, 'USA: Here Come The New Lease Rules!', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '', '2018-05-24 05:42:29', '99', 'usa-here-come-the-new-lease-rules'),
(4, 1, 1, 'Cyprus: Tax Treaties Signed With Saudi Arabia', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', 'https://www.youtube.com/embed/2cM_VCEcSUA', '2018-05-24 05:42:51', '99', 'cyprus-tax-treaties-signed-with-saudi-arabia'),
(9, 2, 2, 'Kenya: Latest Updates From The Tax Desk', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '', '2018-06-07 07:23:24', '99', 'kenya-latest-updates-from-the-tax-desk');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_seo`
--

CREATE TABLE `lwd_seo` (
  `seo_id` int(11) NOT NULL,
  `seo_page` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_seo`
--

INSERT INTO `lwd_seo` (`seo_id`, `seo_page`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES
(1, 'company', 'Company', 'company keyword', 'company desc'),
(2, 'product', 'Product', 'product keyword', 'product desc'),
(3, 'news', 'News', 'berita, news, mitra asia', 'description'),
(4, 'contact-us', 'Contact Us', 'contact us keyword', 'contact us desc'),
(5, 'our-distribution', 'Our Distribution', 'Distribution Mitra Asia', 'description'),
(6, 'brand-history', 'Brand History', 'Brand, mitra asia, history', 'description'),
(7, 'manufacture', 'Manufacture', 'manufaktur, manufacure, mitra asia', 'description'),
(8, 'services', 'Services', 'layanan, service, mitra asia', 'description'),
(9, 'event', 'Event', 'event, acara, mitra asia', 'description'),
(10, 'video', 'Video', 'video mitra asia', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_services`
--

CREATE TABLE `lwd_services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_desc` text NOT NULL,
  `services_alt` varchar(255) NOT NULL COMMENT 'alt untuk gambar',
  `services_pub` enum('88','99') NOT NULL COMMENT '99 = publish',
  `services_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_services`
--

INSERT INTO `lwd_services` (`services_id`, `services_name`, `services_desc`, `services_alt`, `services_pub`, `services_link`) VALUES
(4, 'Business establishments and structures', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'business-establishments-and-structures'),
(5, 'Due diligence engagements', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'due-diligence-engagements'),
(6, 'Legal and banking contracts', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'legal-and-banking-contracts'),
(7, 'Management consultancy', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'management-consultancy'),
(8, 'Local taxation', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'local-taxation'),
(9, 'Accounting and audit compliance', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '99', 'accounting-and-audit-compliance');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_site`
--

CREATE TABLE `lwd_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_desc` text NOT NULL,
  `site_keyword` text NOT NULL,
  `site_favicon` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_site`
--

INSERT INTO `lwd_site` (`site_id`, `site_name`, `site_title`, `site_desc`, `site_keyword`, `site_favicon`, `site_logo`, `site_email`) VALUES
(1, 'Abubakar Usman', 'Abubakar Usman', 'Abubakar Usman', 'Abubakar Usman', '', '', 'aditlawave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_text`
--

CREATE TABLE `lwd_text` (
  `text_id` int(8) NOT NULL,
  `text_footer` text NOT NULL,
  `text_service` text NOT NULL,
  `text_home` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_text`
--

INSERT INTO `lwd_text` (`text_id`, `text_footer`, `text_service`, `text_home`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_user`
--

CREATE TABLE `lwd_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_level` enum('owner','admin','user') NOT NULL DEFAULT 'owner',
  `user_status` enum('active','block') NOT NULL DEFAULT 'active',
  `user_image` varchar(255) NOT NULL,
  `user_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_user`
--

INSERT INTO `lwd_user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_email`, `user_level`, `user_status`, `user_image`, `user_session`) VALUES
(1, 'admin', '074c0845506eb57dfbc3ef6dfdf3a3d48251871c', 'admin', 'admin@email.com', 'admin', 'active', '', 'bdc5de51169b3ef68f3d0dce102ca2eca2864bc1'),
(2, 'mainlwd', 'a82d82f5133af2c987010c8e446c35230164a0fe', 'Maintenance LWD', 'lwd@lawavedesign.com', 'admin', 'active', '', 'b6bc5de8c9694006f7c96f34e37c0551c8b13525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lwd_banner`
--
ALTER TABLE `lwd_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `lwd_careers`
--
ALTER TABLE `lwd_careers`
  ADD PRIMARY KEY (`careers_id`);

--
-- Indexes for table `lwd_category`
--
ALTER TABLE `lwd_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `lwd_catinfo`
--
ALTER TABLE `lwd_catinfo`
  ADD PRIMARY KEY (`catinfo_id`);

--
-- Indexes for table `lwd_catnews`
--
ALTER TABLE `lwd_catnews`
  ADD PRIMARY KEY (`catnews_id`);

--
-- Indexes for table `lwd_contact`
--
ALTER TABLE `lwd_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `lwd_image`
--
ALTER TABLE `lwd_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `lwd_info`
--
ALTER TABLE `lwd_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `lwd_news`
--
ALTER TABLE `lwd_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `article_id` (`news_id`),
  ADD KEY `article_id_2` (`news_id`);

--
-- Indexes for table `lwd_seo`
--
ALTER TABLE `lwd_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `lwd_services`
--
ALTER TABLE `lwd_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `lwd_site`
--
ALTER TABLE `lwd_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `lwd_text`
--
ALTER TABLE `lwd_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `lwd_user`
--
ALTER TABLE `lwd_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lwd_banner`
--
ALTER TABLE `lwd_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lwd_careers`
--
ALTER TABLE `lwd_careers`
  MODIFY `careers_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lwd_category`
--
ALTER TABLE `lwd_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lwd_catinfo`
--
ALTER TABLE `lwd_catinfo`
  MODIFY `catinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lwd_catnews`
--
ALTER TABLE `lwd_catnews`
  MODIFY `catnews_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lwd_contact`
--
ALTER TABLE `lwd_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lwd_image`
--
ALTER TABLE `lwd_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `lwd_info`
--
ALTER TABLE `lwd_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lwd_news`
--
ALTER TABLE `lwd_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lwd_seo`
--
ALTER TABLE `lwd_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lwd_services`
--
ALTER TABLE `lwd_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lwd_text`
--
ALTER TABLE `lwd_text`
  MODIFY `text_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lwd_user`
--
ALTER TABLE `lwd_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
