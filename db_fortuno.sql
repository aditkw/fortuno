-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 07:42 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32
=======
-- Host: localhost:3306
-- Generation Time: Jul 18, 2018 at 09:01 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4

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
-- Table structure for table `fortu_about`
--

CREATE TABLE `fortu_about` (
  `about_id` int(8) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_title_en` varchar(255) NOT NULL,
  `about_desc` text NOT NULL,
  `about_desc_en` text NOT NULL,
  `about_pub` enum('88','99') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_about`
--

INSERT INTO `fortu_about` (`about_id`, `about_title`, `about_title_en`, `about_desc`, `about_desc_en`, `about_pub`) VALUES
(4, 'haii', 'asdasd', '<p>Fortuno adalah perusahaan yang bergerak di bidang jasa kontraktor Mekanikal dan Elektrikal (ME) dengan pengalamann kerja di bidang ME sejak tahun 2010. Sebagai perusahaan jasa kontraktor ME yang telah memiliki sertifikasi AKLI sebagai persyaratan kontraktor Listrik dan Mekanikal Indonesia, Fortuno telah menangani berbagai macam proyek ME di Jakarta maupun kota besar lainnya.</p>\r\n', '<p>Fortuno is a company engaged in the field of Mechanical and Electrical contracting services (ME) with the experience of work in the field of ME since 2010. As a ME contracting service company that has been certified AKLI as a requirement of Electrical and Mechanical contractors Indonesia, Fortuno has handled various projects ME in Jakarta and other big cities.</p>\r\n', '99');

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
-- Table structure for table `fortu_catporto`
--

CREATE TABLE `fortu_catporto` (
  `catporto_id` int(11) NOT NULL,
  `catporto_name` varchar(255) NOT NULL,
  `catporto_name_en` varchar(255) NOT NULL,
  `catporto_desc` text NOT NULL,
  `catporto_desc_en` text NOT NULL,
  `catporto_pub` enum('88','99') NOT NULL,
  `catporto_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_catporto`
--

INSERT INTO `fortu_catporto` (`catporto_id`, `catporto_name`, `catporto_name_en`, `catporto_desc`, `catporto_desc_en`, `catporto_pub`, `catporto_link`) VALUES
(1, 'Rumah Sakit', 'Hospital', '<p>Lorem ipsum dolor sit amet</p>\r\n', '<p>Lorem ipsum dolor</p>\r\n', '99', 'hospital'),
(2, 'Restoran', 'Restaurant', '<p>Lorem ipsum dolor weh sit</p>\r\n', '<p>Lorem ipsum dolor sit amet</p>\r\n', '99', 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `fortu_catservices`
--

CREATE TABLE `fortu_catservices` (
  `catservices_id` int(11) NOT NULL,
  `catservices_name` varchar(255) NOT NULL,
  `catservices_name_en` varchar(255) NOT NULL,
  `catservices_desc` text NOT NULL,
  `catservices_desc_en` text NOT NULL,
  `catservices_pub` enum('88','99') NOT NULL,
  `catservices_link` varchar(255) NOT NULL,
  `catservices_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_catservices`
--

INSERT INTO `fortu_catservices` (`catservices_id`, `catservices_name`, `catservices_name_en`, `catservices_desc`, `catservices_desc_en`, `catservices_pub`, `catservices_link`, `catservices_icon`) VALUES
(4, 'Mechanical', 'Mechanical', '<p>Sistem mekanikal dapat mencakup elemen infrastruktur, mesin, alat dan komponen, pemanasan, ventilasi dan sebagainya.</p>\r\n', '<p>Mechanical systems may include elements of infrastructure, machinery, tools and components, heating, ventilation and so on.</p>\r\n', '99', 'mechanical', 'fa-cogs'),
(5, 'Electrical', 'Electrical', '<p>Sistem elektrikal merupakan suatu rangkaian peralatan penyediaan daya listrik untuk memenuhi kebutuhan daya listrik tegangan rendah.</p>\r\n', '<p>Electrical system is a series of power supply equipment to meet the needs of low voltage electrical power.</p>\r\n', '99', 'electrical', 'fa-lightbulb'),
(6, 'Gas Installation', 'Gas Installation', '<p>Sistem instalasi gas di mall biasanya untuk peruntukan restoran dan Food Court (pusat makanan)</p>\r\n', '<p>Gas installation system in mall usually for allotment of restaurant and Food Court (food center)</p>\r\n', '99', 'gas-installation', 'fa-fire');

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
(1, '021 - 54381328', '021 - 54394828', 'info@your-web.com', 'Jl. Jembatan Batu No. 82 - 83\r\nPinangsia Jakarta 11110', '', 'https://www.facebook.com/', 'http://youtube.com', 'https://www.twitter.com/', 'www.google.com', 'http://linkedin.com');

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
(57, 1, 'slide', '-7892.jpg', 0),
(58, 2, 'slide', '-8011.jpg', 0),
(62, 9, 'event', 'test-lagi-9427.jpg', 0),
(66, 4, 'about', '-1430.png', 0),
(75, 3, 'catservices', 'test-65.jpg', 0),
(76, 3, 'catservices', 'test-8152.jpg', 1),
(90, 15, 'services', 'plumbing-system-and-air-installation-4315.jpg', 0),
(91, 16, 'services', 'sprinkler-system-2896.jpg', 0),
(92, 17, 'services', 'air-conditioning-system-3020.jpg', 0),
(93, 18, 'services', 'electrical-system-power-flow-electric-6821.jpg', 0),
(94, 19, 'services', 'lightning-protection-system-6946.jpg', 0),
(95, 20, 'services', 'sistem-telepon-8387.jpg', 0),
(108, 5, 'portofolio', 'lorem-ipsum-dolor-9320.png', 0),
(109, 5, 'portofolio', 'lorem-ipsum-dolor-9321.jpg', 1),
(110, 5, 'portofolio', 'lorem-ipsum-dolor-9322.jpg', 2),
(111, 5, 'portofolio', 'lorem-ipsum-dolor-9323.jpg', 3),
(112, 6, 'portofolio', 'lorem-ipsum-dolor-4254.png', 0),
(113, 6, 'portofolio', 'lorem-ipsum-dolor-4255.jpg', 1),
(114, 6, 'portofolio', 'lorem-ipsum-dolor-4256.png', 2),
(115, 6, 'portofolio', 'lorem-ipsum-dolor-4257.jpg', 3),
(116, 21, 'services', 'sistem-tata-suara-sound-system-3763.jpeg', 0),
(117, 22, 'services', 'sistem-data-jaringan-komputer-9679.jpg', 0),
(118, 23, 'services', 'sistem-matv-master-television-3896.jpeg', 0),
(119, 24, 'services', 'sistem-cctv-close-circuit-television-9216.jpg', 0),
<<<<<<< HEAD
(120, 25, 'services', 'gas-installation-system-2740.jpeg', 0),
=======
(120, 25, 'services', 'gas-installation-system-8298.jpeg', 0),
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4
(124, 4, 'catservices', 'mechanical-4006.jpeg', 0),
(125, 5, 'catservices', 'electrical-6869.jpeg', 0),
(126, 6, 'catservices', 'gas-installation-9544.jpeg', 0),
(187, 12, 'portofolio', 'saigon-delight-8103.jpg', 0),
(188, 12, 'portofolio', 'saigon-delight-8104.jpg', 1),
(189, 12, 'portofolio', 'saigon-delight-8105.jpg', 2),
(190, 12, 'portofolio', 'saigon-delight-8106.jpg', 3),
(191, 1, 'catporto', 'hospital-9510.jpg', 0),
(192, 2, 'catporto', 'restaurant-271.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fortu_portofolio`
--

CREATE TABLE `fortu_portofolio` (
  `portofolio_id` int(8) NOT NULL,
  `catporto_id` int(11) NOT NULL,
  `portofolio_name` varchar(255) NOT NULL,
  `portofolio_name_en` varchar(255) NOT NULL,
  `portofolio_desc` text NOT NULL,
  `portofolio_desc_en` text NOT NULL,
  `portofolio_pub` enum('88','99') NOT NULL,
  `portofolio_link` varchar(255) NOT NULL,
  `portofolio_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_portofolio`
--

INSERT INTO `fortu_portofolio` (`portofolio_id`, `catporto_id`, `portofolio_name`, `portofolio_name_en`, `portofolio_desc`, `portofolio_desc_en`, `portofolio_pub`, `portofolio_link`, `portofolio_pdf`) VALUES
(5, 2, 'BonChon Chicken', 'BonChon Chicken', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '99', 'bonchon-chicken', ''),
(6, 2, 'PT Jerindo Sari Utama (F&B)', 'PT Jerindo Sari Utama (F&B)', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '99', 'pt-jerindo-sari-utama-fb', ''),
(12, 2, 'Saigon Delight', 'Saigon Delight', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '99', 'saigon-delight', '-1640.pdf');

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
<<<<<<< HEAD
(11, 'services', 'Services', 'services keyword', 'services desc'),
(12, 'portfolio', 'Portofolio', 'portofolio keyword', 'portofolio desc');
=======
(1, 'company', 'Company', 'company keyword', 'company desc'),
(2, 'product', 'Product', 'product keyword', 'product desc'),
(3, 'news', 'News', 'berita, news, fortuno', 'description'),
(4, 'contact-us', 'Contact Us', 'contact us keyword', 'contact us desc'),
(5, 'our-distribution', 'Our Distribution', 'Distribution fortuno', 'description'),
(6, 'brand-history', 'Brand History', 'Brand, fortuno, history', 'description'),
(7, 'manufacture', 'Manufacture', 'manufaktur, manufacure, fortuno', 'description'),
(8, 'services', 'Services', 'layanan, service, fortuno', 'description'),
(9, 'event', 'Event', 'event, acara, fortuno', 'description'),
(10, 'video', 'Video', 'video fortuno', 'description');
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4

-- --------------------------------------------------------

--
-- Table structure for table `fortu_services`
--

CREATE TABLE `fortu_services` (
  `services_id` int(11) NOT NULL,
  `catservices_id` int(8) NOT NULL,
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

INSERT INTO `fortu_services` (`services_id`, `catservices_id`, `services_name`, `services_name_en`, `services_desc`, `services_desc_en`, `services_alt`, `services_pub`, `services_link`) VALUES
(15, 4, 'Sistem plumbing dan instalasi air', 'Plumbing system and air installation', '<p>Sistem plumbing adalah suatu pekerjaan yang meliputi sistem pembuangan limbah / air buangan (air kotor dan air bekas) dan system penyediaan air bersih.</p>\r\n', '<p>The plumbing system is a work that includes waste / waste water disposal systems (dirty water and waste water) and water supply system.</p>\r\n', '', '99', 'plumbing-system-and-air-installation'),
(16, 4, 'Sistem Fire Fighting (System Pemadam kebakaran)', 'Sprinkler System', '<p>Sistem Fire Fighting atau sistem pemadam kebakaran disediakan di gedung sebagai preventif (pencegah) terjadinya kebakaran. Sistem ini terdiri dari sistem sprinkler,sistem hidran dan Fire Extinguisher. Dan pada tempat-tempat tertentu digunakanjuga sistem fire gas. Tetapi pada umumnya sistem yang digunakan terdiri dari system sprinkler, hidran  dan  fire  extinguisher</p>\r\n', '<p>Fire Fighting system or fire extinguishing system is provided in the building as preventive (preventing) the occurrence of fire. This system consists of sprinkler system, hydrant system and Fire Extinguisher. And in certain places used also fire gas system. But in general the system used consists of sprinkler system, hydrant and fire extinguisher</p>\r\n', '', '99', 'sprinkler-system'),
(17, 4, 'Sistem Tata Udara (AC / Air Conditioning)', 'Air Conditioning System', '<p>Secara umum sistem tata udara berfungsi mempertahankan kondisi udara ruanga baik suhu maupun kelembaban agar udara terasa lebih nyaman.     Kenyamanan dalam suatu ruangan diperkantoran  / fungsi gedung lainnya merupakan kebutuhan psikologis yang mulai banyak diperhatikan di zaman modern ini.</p>\r\n', '<p>In general, the system of air conditioning function to maintain the condition of air space both temperature and humidity to make the air feel more comfortable. Comfort in an office space / other building functions is a psychological need that began to be noticed in modern times.</p>\r\n', '', '99', 'air-conditioning-system'),
<<<<<<< HEAD
(18, 4, 'Sistem Elektrikal / Arus Kuat (listrik)', 'Electrical System / Power Flow (electric)', '<p>Sistem elektrikal merupakan suatu rangkaian peralatan penyediaan daya listrik untuk memenuhi kebutuhan daya listrik tegangan rendah. Dalam rangkaian peralatan yang disediakan meliputi sarana penyesuaian tegangan listrik (trafo/ transformator), sarana penyaluran utama (Kabel feeder)  dan panel hubung utama  atau LVMDP (Low Voltage Main Distribution  Panel) dan panel distribusi utama di tiap gedung (SDP / Sub Distribution Panel) dan terakhir panel-panel di tiap lantai (PP-LP untuk penerangan, Panel Stop Kontak, Panel Stop Kontak UPS, Panel UPS OK dan PVAC utuk power AC).</p>\r\n', '<p>Electrical system is a series of power supply equipment to meet the needs of low voltage electrical power. In the range of equipment provided include voltage adjustment devices (transformer), main feeding means (feeder cable) and main switch or LVMDP (Low Voltage Main Distribution Panel) and the main distribution panel in each building (SDP / Sub Distribution Panel) and last panel on each floor (PP-LP for lighting, Contact Stop Panel, UPS Contact Stop Panel, OK UPS Panel and PVAC for AC power).</p>\r\n', '', '99', 'electrical-system-power-flow-electric'),
(19, 4, 'Sistem penangkal petir', 'Lightning protection system', '<p>Secara umum sistem ini berfungsi untuk memproteksi gedung dan sekitarnya dari  petir. Pekerjaan penangkal petir menyangkut meliputi pemassangan dan penyediaan instalasi penagkal petir,  grounding dan pembuatan bak kontrol.</p>\r\n', '<p>In general, this system works to protect the building and its surroundings from lightning. Lightning protection work involves the discharge and provision of lightning, grounding and tub-control installations.</p>\r\n', '', '99', 'lightning-protection-system'),
(20, 4, 'Sistem telepon', 'Sistem telepon', '<p>Sistem telepon berfungsi ssebagai alat komunikasi antar instansi dalam gedung. Sistem ini  menggunakan PABX yang berfungsi sebagai sentral komunikasi telepon di dalam gedung (pelanggan) yang terhubung dengan telkom</p>\r\n', '<p>Telephone system serves as a communication tool between agencies in the building. This system uses PABX which serves as the telephone communications center within the building (customer) connected to the telkom</p>\r\n', '', '99', 'sistem-telepon'),
(21, 4, 'Sistem tata suara (Sound system)', 'Sistem tata suara (Sound system)', '<p>Sistem  ini berfungsi sebagai publik adress, paging dan pengumuman. Sistem ini  terdiri dari peralatan untuk memenuhi background music dan pengumuman darurat.</p>\r\n', '<p>This system functions as public adress, paging and announcement. This system consists of equipment to meet the background music and emergency announcements.</p>\r\n', '', '99', 'sistem-tata-suara-sound-system'),
(22, 4, 'Sistem Data / Jaringan Komputer', 'Sistem Data / Jaringan Komputer', '<p>Berfungsi sebagai jaringan komputer terintegrasi dalam gedung.      Sistem kabel data  atau  disebut juga Local Area Network (LAN) merupakan jaringan computer yang menghubungkan computer pc dari workstation untuk memakai bersama sumberdaya(resource, misalnya printer, internet, dan lain-lain) dan saling bertukar informasi.</p>\r\n', '<p>Serves as a computer network integrated in the building. Data cable system or also called Local Area Network (LAN) is a computer network that connects computer pc from workstation to use together resources (resource, for example printer, internet, etc.) and exchange information.</p>\r\n', '', '99', 'sistem-data-jaringan-komputer'),
(23, 4, 'Sistem MATV (master Television) ', 'Sistem MATV (master Television)', '<p>Kebutuhan pengelolaan televisi dalam suatu bangungan menjadi kebutuhan di perkantoran. Sistem ini dinamakan dengan sistem master antena TV (MATV). Sistem MATV terdiri dari beberapa perangkat penerima (receiver), mixer, dan penguat sinyal.</p>\r\n', '<p>The need of television management in a building becomes a necessity in the office. This system is called the master TV antenna system &#40;MATV&#41;. The MATV system consists of several receiver, mixer, and signal booster devices.</p>\r\n', '', '99', 'sistem-matv-master-television'),
(24, 4, 'Sistem CCTV (Close Circuit Television)', 'Sistem CCTV (Close Circuit Television)', '<p>Sistem CCTV  merupakan bagian dari upaya untuk mempermudah pekerjaan sekuriti sistem, yang terintegrasi untuk  memberikan kemudahan dalam proses pengontrolan dan pemantauan lebih akurat dan otomatis.</p>\r\n', '<p>The CCTV system is part of an effort to simplify integrated system security work to facilitate more accurate and automated control and monitoring processes.</p>\r\n', '', '99', 'sistem-cctv-close-circuit-television'),
(25, 4, 'Sistem Instalasi Gas', 'Gas Installation System', '<p>Sistem instalasi gas di mall biasanya untuk peruntukan restoran dan Food Court (pusat makanan). Sistem instalasi gas di Mall ini merupakan sentral instalasi  gas yang terkoneksi dengan peralatan masak di dalam unit restoran maupun foodcourt sebagai fungsi suply bahan bakar  yang berkaiatan dengan penggunaan alat masak  di restoran atau  food court tersebut.</p>\r\n', '<p>Gas installation system in the mall is usually for the allocation of restaurants and Food Court (food center). The gas installation system in Mall is a central gas installation connected with cooking utensils in the restaurant and foodcourt units as a fuel supply function that is related to the use of cooking utensils in the restaurant or food court.</p>\r\n', '', '99', 'gas-installation-system');
=======
(18, 5, 'Sistem Elektrikal / Arus Kuat (listrik)', 'Electrical System / Power Flow (electric)', '<p>Sistem elektrikal merupakan suatu rangkaian peralatan penyediaan daya listrik untuk memenuhi kebutuhan daya listrik tegangan rendah. Dalam rangkaian peralatan yang disediakan meliputi sarana penyesuaian tegangan listrik (trafo/ transformator), sarana penyaluran utama (Kabel feeder)  dan panel hubung utama  atau LVMDP (Low Voltage Main Distribution  Panel) dan panel distribusi utama di tiap gedung (SDP / Sub Distribution Panel) dan terakhir panel-panel di tiap lantai (PP-LP untuk penerangan, Panel Stop Kontak, Panel Stop Kontak UPS, Panel UPS OK dan PVAC utuk power AC).</p>\r\n', '<p>Electrical system is a series of power supply equipment to meet the needs of low voltage electrical power. In the range of equipment provided include voltage adjustment devices (transformer), main feeding means (feeder cable) and main switch or LVMDP (Low Voltage Main Distribution Panel) and the main distribution panel in each building (SDP / Sub Distribution Panel) and last panel on each floor (PP-LP for lighting, Contact Stop Panel, UPS Contact Stop Panel, OK UPS Panel and PVAC for AC power).</p>\r\n', '', '99', 'electrical-system-power-flow-electric'),
(19, 5, 'Sistem penangkal petir', 'Lightning protection system', '<p>Secara umum sistem ini berfungsi untuk memproteksi gedung dan sekitarnya dari  petir. Pekerjaan penangkal petir menyangkut meliputi pemassangan dan penyediaan instalasi penagkal petir,  grounding dan pembuatan bak kontrol.</p>\r\n', '<p>In general, this system works to protect the building and its surroundings from lightning. Lightning protection work involves the discharge and provision of lightning, grounding and tub-control installations.</p>\r\n', '', '99', 'lightning-protection-system'),
(20, 5, 'Sistem telepon', 'Sistem telepon', '<p>Sistem telepon berfungsi ssebagai alat komunikasi antar instansi dalam gedung. Sistem ini  menggunakan PABX yang berfungsi sebagai sentral komunikasi telepon di dalam gedung (pelanggan) yang terhubung dengan telkom</p>\r\n', '<p>Telephone system serves as a communication tool between agencies in the building. This system uses PABX which serves as the telephone communications center within the building (customer) connected to the telkom</p>\r\n', '', '99', 'sistem-telepon'),
(21, 5, 'Sistem tata suara (Sound system)', 'Sistem tata suara (Sound system)', '<p>Sistem  ini berfungsi sebagai publik adress, paging dan pengumuman. Sistem ini  terdiri dari peralatan untuk memenuhi background music dan pengumuman darurat.</p>\r\n', '<p>This system functions as public adress, paging and announcement. This system consists of equipment to meet the background music and emergency announcements.</p>\r\n', '', '99', 'sistem-tata-suara-sound-system'),
(22, 5, 'Sistem Data / Jaringan Komputer', 'Sistem Data / Jaringan Komputer', '<p>Berfungsi sebagai jaringan komputer terintegrasi dalam gedung.      Sistem kabel data  atau  disebut juga Local Area Network (LAN) merupakan jaringan computer yang menghubungkan computer pc dari workstation untuk memakai bersama sumberdaya(resource, misalnya printer, internet, dan lain-lain) dan saling bertukar informasi.</p>\r\n', '<p>Serves as a computer network integrated in the building. Data cable system or also called Local Area Network (LAN) is a computer network that connects computer pc from workstation to use together resources (resource, for example printer, internet, etc.) and exchange information.</p>\r\n', '', '99', 'sistem-data-jaringan-komputer'),
(23, 5, 'Sistem MATV (master Television)', 'Sistem MATV (master Television)', '<p>Kebutuhan pengelolaan televisi dalam suatu bangungan menjadi kebutuhan di perkantoran. Sistem ini dinamakan dengan sistem master antena TV (MATV). Sistem MATV terdiri dari beberapa perangkat penerima (receiver), mixer, dan penguat sinyal.</p>\r\n', '<p>The need of television management in a building becomes a necessity in the office. This system is called the master TV antenna system &#40;MATV&#41;. The MATV system consists of several receiver, mixer, and signal booster devices.</p>\r\n', '', '99', 'sistem-matv-master-television'),
(24, 5, 'Sistem CCTV (Close Circuit Television)', 'Sistem CCTV (Close Circuit Television)', '<p>Sistem CCTV  merupakan bagian dari upaya untuk mempermudah pekerjaan sekuriti sistem, yang terintegrasi untuk  memberikan kemudahan dalam proses pengontrolan dan pemantauan lebih akurat dan otomatis.</p>\r\n', '<p>The CCTV system is part of an effort to simplify integrated system security work to facilitate more accurate and automated control and monitoring processes.</p>\r\n', '', '99', 'sistem-cctv-close-circuit-television'),
(25, 6, 'Sistem Instalasi Gas', 'Gas Installation System', '<p>Sistem instalasi gas di mall biasanya untuk peruntukan restoran dan Food Court (pusat makanan). Sistem instalasi gas di Mall ini merupakan sentral instalasi  gas yang terkoneksi dengan peralatan masak di dalam unit restoran maupun foodcourt sebagai fungsi suply bahan bakar  yang berkaiatan dengan penggunaan alat masak  di restoran atau  food court tersebut.</p>\r\n', '<p>Gas installation system in the mall is usually for the allocation of restaurants and Food Court (food center). The gas installation system in Mall is a central gas installation connected with cooking utensils in the restaurant and foodcourt units as a fuel supply function that is related to the use of cooking utensils in the restaurant or food court.</p>\r\n', '', '99', 'gas-installation-system');
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4

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
<<<<<<< HEAD
(1, 'Fortuno', 'Fortuno', 'Fortuno', 'Fortno', '', '', 'aditlawave@gmail.com');
=======
(1, 'Fortuno', 'Fortuno', 'Fortuno', 'Fortuno', '', '', 'aditlawave@gmail.com');
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4

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
  `text_portofolio_en` text NOT NULL,
  `text_mecha` text NOT NULL,
  `text_mecha_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortu_text`
--

INSERT INTO `fortu_text` (`text_id`, `text_footer`, `text_footer_en`, `text_slide`, `text_slide_en`, `text_quote`, `text_quote_en`, `text_service`, `text_service_en`, `text_portofolio`, `text_portofolio_en`, `text_mecha`, `text_mecha_en`) VALUES
(1, 'Kami dengan senang hati menerima pesan dari anda, klik tombol di bawah ini untuk menghubungi kami', 'We are happy to receive your message, click the button below to contact us', 'Tahukah Kamu Pentingnya Sistem mekanikal dan elektrikal (ME) untuk suatu bangunan ?', 'Did You Know The Importance of Mechanical and Electrical Systems (ME) for buildings?', 'Sekuat apapun atau seindah apapun bangunan, jika tidak ditunjang dengan suatu sistem mekanikal dan elektrikal, maka bangunan tersebut tidak ada fungsinya.', 'As strong as anything or as not supported by a Mechanical & Electrical System, then the building is not functioning.', '<p>Proyek ME yang kami tanganin termasuk :</p>\r\n\r\n<ol>\r\n <li>Restauran/café/foodcourt</li>\r\n <li>Lounge/club/karoke</li>\r\n <li>Gedung Perkantoran/perumahan</li>\r\n <li>Pabrik/pergudangan</li>\r\n <li>Klinik/butik</li>\r\n <li>dll.</li>\r\n</ol>\r\n', '<p>The ME projects we include include:</p>\r\n\r\n<ol>\r\n <li>Restaurant / cafe / foodcourt</li>\r\n <li>Lounge / club / karoke</li>\r\n <li>Office / residential building</li>\r\n <li>Factory / warehousing</li>\r\n <li>Clinic / boutique</li>\r\n <li>etc.</li>\r\n</ol>\r\n', 'Sebagai perusahaan jasa kontraktor ME yang telah memiliki sertifikasi AKLI sebagai persyaratan kontraktor Listrik dan Mekanikal Indonesia, Fortuno telah menangani berbagai macam proyek ME di Jakarta maupun kota besar lainnya. Berikut beberapa proyek ME yang telah kami kerjakan.', 'As a ME contracting service company that has AKLI certification as a condition of Indonesian Electrical and Mechanical contractor, Fortuno has handled various ME projects in Jakarta and other big cities. Here are some of the ME projects.', 'Di dalam Suatu Bangunan gedung terdiri dari 3 komponen penting, yaitu struktur, arsitek dan utilitas (atau dikenal dengan istilah ME (mekanikal dan elektrikal gedung). Ketiganya satu sama lain saling terkait. Jika struktur mengedepankan kekuatan, arsitek lebih menekankan pada keindahan, maka ME (mekanikal &Elektrikal) lebih mengedepankan pada fungsi. Sistem mekanikal dan elektrikal (ME) suatu bangunan / gedung sangat tergantung maksud suatu gedung itu dibangun. ME suatu restoran mempunyai perbedaan dengan gedung perkantoran, atau bandara, rumah sakit atau pabik. Tetapi secara prinsip mempunyai berbagai persamaan Tujuan utama dari suatu gedung menjadi landasan dasar dalam menentukan kekhusususan sistem ME dalam suatu bangunan/ gedung. Fungsi system ME yang dipasang di gedung untuk membuatnya nyaman, fungsional, efisien dan aman', 'In Building A building consists of 3 important components, namely structure, architect and utility (or known as ME (mechanical and electrical building), all of which are related to each other.If the structure emphasizes the strength, the architect put more emphasis on beauty, then ME (mechanical & electrical) is more emphasis on function The mechanical and electrical system &#40;ME&#41; of a building depends very much on the purpose of the building being constructed ME a restaurant has a difference with an office building, or an airport, a hospital or a pabik But in principle it has various equations The main purpose of a building becomes the basic foundation in determining the specificity of the ME system in a building The function of the ME system installed in the building to make it comfortable, functional, efficient and safe');

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
<<<<<<< HEAD
(1, 'admin', '074c0845506eb57dfbc3ef6dfdf3a3d48251871c', 'admin', 'admin@email.com', 'admin', 'active', '', 'f072343c2a5c1ea34bd95b3a60017974c3892863'),
=======
(1, 'admin', '074c0845506eb57dfbc3ef6dfdf3a3d48251871c', 'admin', 'admin@email.com', 'admin', 'active', '', '43dea9d01ea6b1b7dd3c94b46b36fe4f45c473fe'),
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4
(2, 'mainlwd', 'a82d82f5133af2c987010c8e446c35230164a0fe', 'Maintenance LWD', 'lwd@lawavedesign.com', 'admin', 'active', '', 'b6bc5de8c9694006f7c96f34e37c0551c8b13525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fortu_about`
--
ALTER TABLE `fortu_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `fortu_banner`
--
ALTER TABLE `fortu_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `fortu_catporto`
--
ALTER TABLE `fortu_catporto`
  ADD PRIMARY KEY (`catporto_id`);

--
-- Indexes for table `fortu_catservices`
--
ALTER TABLE `fortu_catservices`
  ADD PRIMARY KEY (`catservices_id`);

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
-- Indexes for table `fortu_portofolio`
--
ALTER TABLE `fortu_portofolio`
  ADD PRIMARY KEY (`portofolio_id`);

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
-- AUTO_INCREMENT for table `fortu_about`
--
ALTER TABLE `fortu_about`
  MODIFY `about_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fortu_banner`
--
ALTER TABLE `fortu_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fortu_catporto`
--
ALTER TABLE `fortu_catporto`
  MODIFY `catporto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fortu_catservices`
--
ALTER TABLE `fortu_catservices`
  MODIFY `catservices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fortu_contact`
--
ALTER TABLE `fortu_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fortu_image`
--
ALTER TABLE `fortu_image`
<<<<<<< HEAD
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
=======
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
>>>>>>> 15f5cd5888b35b3219c50dd8139d670f00b0b4e4

--
-- AUTO_INCREMENT for table `fortu_portofolio`
--
ALTER TABLE `fortu_portofolio`
  MODIFY `portofolio_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fortu_seo`
--
ALTER TABLE `fortu_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fortu_services`
--
ALTER TABLE `fortu_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
