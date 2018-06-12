-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2018 at 10:06 AM
-- Server version: 10.2.14-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fortuno`
--

-- --------------------------------------------------------

--
-- Table structure for table `fortu_banner`
--

CREATE TABLE `fortu_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_type` enum('banner','slide') NOT NULL DEFAULT 'slide',
  `banner_link` varchar(255) NOT NULL,
  `banner_alt` varchar(255) NOT NULL,
  `banner_pub` enum('88','99') NOT NULL DEFAULT '88'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_banner`
--

INSERT INTO `fortu_banner` (`banner_id`, `banner_type`, `banner_link`, `banner_alt`, `banner_pub`) VALUES
(1, 'slide', '#', '#', '99'),
(2, 'slide', '#', '#', '99');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_contact`
--

CREATE TABLE `fortu_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_maps` text NOT NULL,
  `contact_fb` varchar(255) NOT NULL,
  `contact_yt` varchar(255) NOT NULL,
  `contact_tw` varchar(255) NOT NULL,
  `contact_gplus` varchar(255) NOT NULL,
  `contact_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_contact`
--

INSERT INTO `fortu_contact` (`contact_id`, `contact_phone`, `contact_fax`, `contact_email`, `contact_address`, `contact_maps`, `contact_fb`, `contact_yt`, `contact_tw`, `contact_gplus`, `contact_in`) VALUES
(1, '021 - 54381328', '021 - 54394828', 'info@your-web.com', 'Jl. Jembatan Batu No. 82 - 83\r\nPinangsia Jakarta 11110', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.4297126470617!2d106.70244424152723!3d-6.149574103835754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f812814e7aa7%3A0xf9b7032a017de8d3!2sMitra+Asia+Synergy.+PT!5e0!3m2!1sen!2sid!4v1524547293072\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'https://www.facebook.com/', 'http://youtube.com', 'https://www.twitter.com/', 'www.google.com', 'http://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_image`
--

CREATE TABLE `fortu_image` (
  `image_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image_parent_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_seq` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_image`
--

INSERT INTO `fortu_image` (`image_id`, `parent_id`, `image_parent_name`, `image_name`, `image_seq`) VALUES
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
-- Table structure for table `fortu_seo`
--

CREATE TABLE `fortu_seo` (
  `seo_id` int(11) NOT NULL,
  `seo_page` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_seo`
--

INSERT INTO `fortu_seo` (`seo_id`, `seo_page`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES
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
-- Table structure for table `fortu_services`
--

CREATE TABLE `fortu_services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_name_en` varchar(255) NOT NULL,
  `services_desc` text NOT NULL,
  `services_desc_en` text NOT NULL,
  `services_alt` varchar(255) NOT NULL COMMENT 'alt untuk gambar',
  `services_pub` enum('88','99') NOT NULL COMMENT '99 = publish',
  `services_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_services`
--

INSERT INTO `fortu_services` (`services_id`, `services_name`, `services_name_en`, `services_desc`, `services_desc_en`, `services_alt`, `services_pub`, `services_link`) VALUES
(4, 'Business establishments and structures', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'business-establishments-and-structures'),
(5, 'Due diligence engagements', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'due-diligence-engagements'),
(6, 'Legal and banking contracts', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'legal-and-banking-contracts'),
(7, 'Management consultancy', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'management-consultancy'),
(8, 'Local taxation', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'local-taxation'),
(9, 'Accounting and audit compliance', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', '', '99', 'accounting-and-audit-compliance');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_site`
--

CREATE TABLE `fortu_site` (
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
-- Dumping data for table `fortu_site`
--

INSERT INTO `fortu_site` (`site_id`, `site_name`, `site_title`, `site_desc`, `site_keyword`, `site_favicon`, `site_logo`, `site_email`) VALUES
(1, 'Abubakar Usman', 'Abubakar Usman', 'Abubakar Usman', 'Abubakar Usman', '', '', 'aditlawave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_subservices`
--

CREATE TABLE `fortu_subservices` (
  `subservices_id` int(11) NOT NULL,
  `services_id` int(8) NOT NULL,
  `subservices_name` varchar(255) NOT NULL,
  `subservices_name_en` varchar(255) NOT NULL,
  `subservices_desc` text NOT NULL,
  `subservices_desc_en` text NOT NULL,
  `subservices_pub` enum('88','99') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fortu_text`
--

CREATE TABLE `fortu_text` (
  `text_id` int(8) NOT NULL,
  `text_footer` text NOT NULL,
  `text_footer_en` text NOT NULL,
  `text_slide` text NOT NULL,
  `text_slide_en` text NOT NULL,
  `text_quote` text NOT NULL,
  `text_quote_en` text NOT NULL,
  `text_service` text NOT NULL,
  `text_service_en` text NOT NULL,
  `text_portofolio` text NOT NULL,
  `text_portofolio_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_text`
--

INSERT INTO `fortu_text` (`text_id`, `text_footer`, `text_footer_en`, `text_slide`, `text_slide_en`, `text_quote`, `text_quote_en`, `text_service`, `text_service_en`, `text_portofolio`, `text_portofolio_en`) VALUES
(1, 'wwqwqwqLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'eqiwjeiqw', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 'adsqowe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ', 'ejiqwjei', 'adasdasd', 'ejqiwjeiqwe', 'qqqqwqeqwe', 'eqwiejiqw');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_user`
--

CREATE TABLE `fortu_user` (
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
-- Dumping data for table `fortu_user`
--

INSERT INTO `fortu_user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_email`, `user_level`, `user_status`, `user_image`, `user_session`) VALUES
(1, 'admin', '074c0845506eb57dfbc3ef6dfdf3a3d48251871c', 'admin', 'admin@email.com', 'admin', 'active', '', '272da34fc7021a904cb93a58bdc1c1f666c1e5af'),
(2, 'mainlwd', 'a82d82f5133af2c987010c8e446c35230164a0fe', 'Maintenance LWD', 'lwd@lawavedesign.com', 'admin', 'active', '', 'b6bc5de8c9694006f7c96f34e37c0551c8b13525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fortu_banner`
--
ALTER TABLE `fortu_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `fortu_contact`
--
ALTER TABLE `fortu_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `fortu_image`
--
ALTER TABLE `fortu_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `fortu_seo`
--
ALTER TABLE `fortu_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `fortu_services`
--
ALTER TABLE `fortu_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `fortu_site`
--
ALTER TABLE `fortu_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `fortu_text`
--
ALTER TABLE `fortu_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `fortu_user`
--
ALTER TABLE `fortu_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fortu_banner`
--
ALTER TABLE `fortu_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fortu_contact`
--
ALTER TABLE `fortu_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fortu_image`
--
ALTER TABLE `fortu_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `fortu_seo`
--
ALTER TABLE `fortu_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fortu_services`
--
ALTER TABLE `fortu_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fortu_text`
--
ALTER TABLE `fortu_text`
  MODIFY `text_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fortu_user`
--
ALTER TABLE `fortu_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
