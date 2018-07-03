-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 11:38 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esteshari`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `page` text NOT NULL,
  `image1` text NOT NULL,
  `order_1` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `autoid`, `page`, `image1`, `order_1`, `status`) VALUES
(3, 'BN-3', 'banner', 'product/banner/52240582slide-b-bg.jpg', 1, 1),
(4, 'BN-4', 'banner', 'product/banner/276737385bg6b.jpg', 2, 1),
(5, 'BN-5', 'banner', 'product/banner/930002857slide-b-1.jpg', 3, 1),
(6, 'OF-6', 'offer', 'product/banner/129353534slide1.jpg', 1, 1),
(7, 'OF-7', 'offer', 'product/banner/221656705slide2.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `title` text NOT NULL,
  `title1` text NOT NULL,
  `descrip` text NOT NULL,
  `descrip1` text NOT NULL,
  `order_1` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `autoid`, `title`, `title1`, `descrip`, `descrip1`, `order_1`, `status`) VALUES
(1, 'BG-1', 'Our blogs', 'Our blogs', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', 1, 1),
(2, 'BG-2', 'Our blogs', 'Our blogs', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', 2, 1),
(3, 'BG-3', 'Our blogs', 'Our blogs', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', '<p>Doctors is a 2016 South Korean medical drama television series starring Kim Rae-won and Park Shin-hye.</p>\r\n', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `date` text NOT NULL,
  `services` text NOT NULL,
  `services1` text NOT NULL,
  `services2` text NOT NULL,
  `services3` text NOT NULL,
  `services4` text NOT NULL,
  `services5` text NOT NULL,
  `services6` text NOT NULL,
  `services7` text NOT NULL,
  `social` text NOT NULL,
  `page` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `phone`, `date`, `services`, `services1`, `services2`, `services3`, `services4`, `services5`, `services6`, `services7`, `social`, `page`, `desc`) VALUES
(5, 'mathivanan', 'jackmathi2016@gmail.com', '7894561230', '09/07/2016', 'Ø¹Ù„Ø§Ø¬ Ø§Ù„Ø¹ØµØ¨', 'ØªÙ‚ÙˆÙŠÙ… Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'ØªÙ†Ø¸ÙŠÙ Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'Ø¬Ø±Ø§Ø­Ù‡ Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'Ø­Ø´ÙˆØ§Øª Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'ØªØ¹ÙˆÙŠØ¶Ø§Øª Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'Ø§Ø³Ù†Ø§Ù† Ø§Ù„Ø§Ø·ÙØ§Ù„', 'Ø²Ø±Ø§Ø¹Ø© Ø§Ù„Ø£Ø³Ù†Ø§Ù†', 'Facebook', 'doctor', 'sfafaafdtest deemo'),
(6, 'jackmathi', 'ravi@gmail.com', '920008117', '09/29/2016', 'Ø§Ø³Ù†Ø§Ù† Ø§Ù„Ø§Ø·ÙØ§Ù„', '', '', '', '', '', '', '', '', 'appoiment', 'sample'),
(7, 'jack', 'vanan@gmail.com', '85968552585', '09/20/2016', '', 'ØªÙ‚ÙˆÙŠÙ… Ø§Ù„Ø§Ø³Ù†Ø§Ù†', 'ØªÙ†Ø¸ÙŠÙ Ø§Ù„Ø§Ø³Ù†Ø§Ù†', '', '', 'ØªØ¹ÙˆÙŠØ¶Ø§Øª Ø§Ù„Ø§Ø³Ù†Ø§Ù†', '', '', '', 'career', 'mathivanan m'),
(8, 'jack', 'arun@gmail.com', '+ 966 11 125689745', '', '', '', '', '', '', '', '', '', 'Facebook', 'Contact', 'sample demo'),
(9, 'jack', 'arun@gmail.com', '+ 966 11 125689745', '', '', '', '', '', '', '', '', '', 'Facebook', 'Contact', 'sample demo'),
(10, 'jack', 'arun@gmail.com', '+ 966 11 125689745', '', '', '', '', '', '', '', '', '', 'Facebook', 'Contact', 'sample demo'),
(14, 'jackmathi', 'sa@gmail.com', '7894561230', '09/14/2016', 'Endo dentistry', 'Ortho dentistry', '', '', '', '', 'Ø§Ø³Ù†Ø§Ù† Ø§Ù„Ø§Ø·ÙØ§Ù„', '', 'Facebook', 'Home', 'tsta'),
(15, 'jack', 'sa@gmail.com', '920008117', '09/15/2016', 'Ø¹Ù„Ø§Ø¬ Ø§Ù„Ø¹ØµØ¨	', 'ØªÙ‚ÙˆÙŠÙ… Ø§Ù„Ø§Ø³Ù†Ø§Ù†', '', '', '', '', '', '', 'ÙÙŠØ³Ø¨ÙˆÙƒ', 'appoiment', 'afdsafsfa'),
(16, 'jack', 'sa@gmail.com', '920008117', '09/15/2016', 'Ø¹Ù„Ø§Ø¬ Ø§Ù„Ø¹ØµØ¨	', 'ØªÙ‚ÙˆÙŠÙ… Ø§Ù„Ø§Ø³Ù†Ø§Ù†', '', '', '', '', '', '', 'ÙÙŠØ³Ø¨ÙˆÙƒ', 'appoiment', 'afdsafsfa');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `image1` text NOT NULL,
  `mail1` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `address1` text NOT NULL,
  `title` text NOT NULL,
  `title1` text NOT NULL,
  `title11` text NOT NULL,
  `title2` text NOT NULL,
  `url` text NOT NULL,
  `t_descrip` text NOT NULL,
  `t_descrip1` text NOT NULL,
  `d_descrip` text NOT NULL,
  `d_descrip1` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `autoid`, `image1`, `mail1`, `phone`, `address`, `address1`, `title`, `title1`, `title11`, `title2`, `url`, `t_descrip`, `t_descrip1`, `d_descrip`, `d_descrip1`) VALUES
(1, 'H-1', 'product/banner/1040164217logo-en.png', 'info@esteshari.com.sa', '920008117', '', '', '', '', '', '', '', '0', '0', '0', '0'),
(2, 'H-2', '', 'info@esteshari.com', '', '<p>Olaya-King fahad road<br />\r\nP o box : 7166 Riyadh : 12311&nbsp;<br />\r\nTel :011 4643512 - 011 4644030</p>\r\n', '<p>Olaya-King fahad road<br />\r\nP o box : 7166 Riyadh : 12311&nbsp;<br />\r\nTel :011 4643512 - 011 4644030</p>\r\n', '', '', '', '', '', '0', '0', '0', '0'),
(3, 'H-3', 'product/banner/705161799call.jpg', '', '', '', '', '09:00 am to 06:00 pm', ' 09:00 am to 12:00 pm   ', ' 04:00 pm to09:00 pm', '04:00 pm to 08:00 pm', '', '0', '0', '0', '0'),
(4, 'H-4', '', '', '', '', '', '', '', '', '', 'google.com', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation, where quality is the foundation standard for all services provided and not an optional extra. You have our full promise to make your visit a unique and very in comfort and luxury. Your visit begins decent outstanding reception and then you move then to answer all your questions and your concerns at the hands of one of the members of our team medical Compatible elite of prominent consultants in all dental disciplines and give you an accurate description, inclusive of the situation with your definition of all therapeutic and cosmetic options available to you and provide the necessary medical advice to give you the smile that As long dreamed out</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation, where quality is the foundation standard for all services provided and not an optional extra. You have our full promise to make your visit a unique and very in comfort and luxury. Your visit begins decent outstanding reception and then you move then to answer all your questions and your concerns at the hands of one of the members of our team medical Compatible elite of prominent consultants in all dental disciplines and give you an accurate description, inclusive of the situation with your definition of all therapeutic and cosmetic options available to you and provide the necessary medical advice to give you the smile that As long dreamed out</p>\r\n', '<p>We seek in our center to apply the highest standards of quality and harness the latest technology to provide the best preventive and therapeutic levels of service in the field of dentistry. We aim to raise the knowledge and skills of all workers in the field of medical care in the field of dentistry in the region and enhance the level of public awareness in the community for oral and dental health and activate the principle of prevention is better than cure.</p>\r\n', '<p>We seek in our center to apply the highest standards of quality and harness the latest technology to provide the best preventive and therapeutic levels of service in the field of dentistry. We aim to raise the knowledge and skills of all workers in the field of medical care in the field of dentistry in the region and enhance the level of public awareness in the community for oral and dental health and activate the principle of prevention is better than cure.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `in_banner`
--

CREATE TABLE IF NOT EXISTS `in_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `image1` text NOT NULL,
  `title` text NOT NULL,
  `title1` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `in_banner`
--

INSERT INTO `in_banner` (`id`, `autoid`, `image1`, `title`, `title1`) VALUES
(1, 'IN-Contact', 'product/banner/786965216es.png', 'Contact us', 'Contact us'),
(2, 'IN-Join ', 'product/banner/415299721jobchair.jpg', 'Join our Team', 'Join our Team'),
(3, 'IN-Appoiments', 'product/banner/556013645appoi.jpg', 'Book Appoiments', 'Book Appoiments1'),
(4, 'IN-news', 'product/banner/400238597latestnewsbgpig.jpg', 'Latest news', 'Latest news'),
(5, 'IN-doctors', 'product/banner/551667436appoi.jpg', 'Our doctors', 'Our doctors'),
(6, 'IN-Service', 'product/banner/388318794ser.jpg', 'Our doctors', 'Our doctors'),
(7, 'IN-Dental ', 'product/banner/959866913ser.jpg', 'All Dental Services', 'All Dental Services'),
(8, 'IN-About', 'product/banner/671166692opperatesads.jpg', 'About us', 'About us');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `descrip` text NOT NULL,
  `title1` text NOT NULL,
  `descrip1` text NOT NULL,
  `image1` text NOT NULL,
  `order_1` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `autoid`, `title`, `slug`, `descrip`, `title1`, `descrip1`, `image1`, `order_1`, `status`) VALUES
(2, 'NW-2', 'Drugs & vaccines243323', 'Drugs-vaccines243323', '<p>test32432432</p>\r\n', 'stssarabi4342443242432', '<p>demo324324</p>\r\n', 'product/in/242613182Desert.jpg', '2', 1),
(3, 'NW-3', 'World Halal Center', 'World-Halal-Center', '<p>demo</p>\r\n', 'consectetur ', '<p>test</p>\r\n', 'product/in/979102119Hydrangeas.jpg', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `title` text NOT NULL,
  `title1` text NOT NULL,
  `descrip` text NOT NULL,
  `descrip1` text NOT NULL,
  `image1` text NOT NULL,
  `heading` text NOT NULL,
  `heading1` text NOT NULL,
  `slug` text NOT NULL,
  `slug1` text NOT NULL,
  `order_1` text NOT NULL,
  `page` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `autoid`, `title`, `title1`, `descrip`, `descrip1`, `image1`, `heading`, `heading1`, `slug`, `slug1`, `order_1`, `page`, `status`) VALUES
(1, 'SR-1', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/648962293blog_listing_4_colums_01.jpg', 'Service head', 'Service head', 'Service-head', '', '1', 'service', 1),
(2, 'SR-2', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/742814608blog_listing_4_colums_02.jpg', 'Service head1', 'Service head1', 'Service-head1', '', '2', 'service', 1),
(3, 'SR-3', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/390470383blog_listing_4_colums_03.jpg', 'Service head2', 'Service head2', 'Service-head2', '', '3', 'service', 1),
(4, 'SR-4', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/41439605blog_listing_4_colums_04.jpg', 'Service head3', 'Service head3', 'Service-head3', '', '4', 'service', 1),
(5, 'SR-5', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/575593106blog_listing_4_colums_05.jpg', 'Service head4', 'Service head4', 'Service-head4', '', '5', 'service', 1),
(6, 'SR-6', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/158787272blog_listing_4_colums_06.jpg', 'Service head6', 'Service head6', 'Service-head6', '', '6', 'service', 1),
(7, 'SR-7', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/294552542blog_listing_4_colums_07.jpg', 'Service head5', 'Service head5', 'Service-head5', '', '7', 'service', 1),
(8, 'SR-8', '', '', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', '<p>Is the title which will meet for the first time superior dental care with a fun sense of comfort and relaxation,&nbsp;</p>\r\n', 'product/in/448305097blog_listing_4_colums_08.jpg', 'Service head7', 'Service head7', 'Service-head7', '', '8', 'service', 1),
(9, 'SR-9', 'test', 'demo', '<p>test</p>\r\n', '<p>test</p>\r\n', 'product/in/1168355893blog_listing_4_colums_01.jpg', 'Service head', 'Service head', 'Service-head', 'test', '9', 'service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE IF NOT EXISTS `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autoid` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `heading` text NOT NULL,
  `heading1` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `autoid`, `title`, `slug`, `heading`, `heading1`, `page`) VALUES
(1, 'TT-1', '', 'Service-head', 'Service head', 'Service head', 'Service'),
(2, 'TT-2', '', 'Service-head1', 'Service head1', 'Service head1', 'Service'),
(3, 'TT-3', '', 'Service-head2', 'Service head2', 'Service head2', 'Service'),
(4, 'TT-4', '', 'Service-head3', 'Service head3', 'Service head3', 'Service'),
(5, 'TT-5', '', 'Service-head4', 'Service head4', 'Service head4', 'Service'),
(6, 'TT-6', '', 'Service-head5', 'Service head5', 'Service head5', 'Service'),
(7, 'TT-7', '', 'Service-head6', 'Service head6', 'Service head6', 'Service'),
(8, 'TT-8', '', 'Service-head7', 'Service head7', 'Service head7', 'Service'),
(9, 'TT-9', '', 'Service-head8', 'Service head8', 'Service head8', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `autoid` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` tinytext COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT '1',
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `users_ip` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `approved` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `activation_code` int(10) NOT NULL DEFAULT '0',
  `banned` int(1) NOT NULL DEFAULT '0',
  `ckey` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `alter_email` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `my_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpwd` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`user_email`,`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=88 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `autoid`, `md5_id`, `full_name`, `user_name`, `user_email`, `user_level`, `pwd`, `date`, `users_ip`, `approved`, `activation_code`, `banned`, `ckey`, `ctime`, `alter_email`, `my_id`, `cpwd`) VALUES
(63, '', '', 'admin', 'admin', 'admin@gmail.com', 5, 'e0a4fc58687284ad996c8814a894a6af17f29cfa70896d0cc', '2014-02-24', '', '1', 0, 0, 'uxnsm4z', '1475179440', '', 'USER-37', ''),
(72, '', '', 'systemadmin', 'system', 'deepana@ragadesigners.com', 2, 'f054291ad1c5b6110cddea968962142d238a44df3c4ad0e05', '2014-03-26', '', '1', 0, 0, '', '', '', 'USER-46', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
