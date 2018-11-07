-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 08:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nrirg`
--

-- --------------------------------------------------------

--
-- Table structure for table `acomp`
--

CREATE TABLE IF NOT EXISTS `acomp` (
  `rollno` varchar(15) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `whoom` varchar(30) NOT NULL,
  `complaint` text NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `datecomp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `acomp`
--

INSERT INTO `acomp` (`rollno`, `branch`, `year`, `whoom`, `complaint`, `id`, `datecomp`) VALUES
('15kn1a1238', 'it', '4', 'principal', 'complaint to the principal sir', 69, 'March 8, 2018  11:03 am '),
('15kn1a1238', 'it', '2', 'principal', 'lk', 70, 'March 8, 2018  11:56 am '),
('15kn1a1238', 'it', '3', 'principal', 'something', 71, 'March 8, 2018  8:37 pm '),
('15kn1a1238', 'it', '3', 'hod', 'heeeelo', 72, 'March 8, 2018  9:48 pm '),
('15kn1a1238', 'it', '3', 'hod', 'heeeelo', 73, 'March 8, 2018  9:48 pm '),
('15kn1a1238', 'it', '3', 'hod', 'helllo', 74, 'March 9, 2018  1:30 pm '),
('15kn1a1022', 'cse', '3', 'principal', 'noooofd', 75, 'March 9, 2018  1:34 pm '),
('15kn1a1238', 'it', '3', 'principal', 'gik', 76, 'March 18, 2018  12:13 pm ');

-- --------------------------------------------------------

--
-- Table structure for table `branchchat`
--

CREATE TABLE IF NOT EXISTS `branchchat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `branch` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `branchchat`
--

INSERT INTO `branchchat` (`id`, `name`, `message`, `branch`) VALUES
(1, '15kn1a1236', 'hiii', 'it'),
(2, '15kn1a1238', 'hiii\nbranch\npepole', 'it'),
(3, '15kn1a1015', 'hiii i am\nmaruthi', 'cse'),
(4, '15kn1a1022', 'hiiiii i\nam gopi', 'cse'),
(5, '15kn1a1238', 'kk', 'it'),
(6, '15kn1a1241', 'hiii\nfriends.', 'it'),
(8, '15kn1a1238', 'hii', 'it'),
(9, '15kn1a0324', 'hiiii\nfriends', 'mech'),
(10, '15kn1a0324', 'hii', 'mech'),
(11, '15kn1a1237', 'hiiii i am\nrahul', 'it'),
(12, '16kn1a1219', 'hiiii\r\n', 'it'),
(13, '16kn1a1219', 'hiiii\r\n', 'it'),
(14, '16kn1a1219', 'hello', 'it'),
(15, '16kn1a1219', 'hello', 'it'),
(16, '15kn1a1238', 'hiii', 'it'),
(17, '15kn1a1238', 'hii', 'it'),
(18, '15kn1a0233', 'hello cse\nguys', 'cse'),
(19, '15kn1a1238', 'hiii', 'it'),
(20, '15kn1a1238', 'hiii', 'it'),
(21, '15kn1a1238', 'huu\r\n', 'it');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`) VALUES
(39, '15kn1a1238', 'hii \nfriends'),
(40, '15kn1a1236', 'hiiiii\nramakrishna'),
(41, '15kn1a1238', 'tomorrow\nis\nholiday?'),
(42, '15kn1a1236', 'i dont\nknow.but\nsome are\ndiscussing\naboyt\nthat.they\nsaid there\nis no\nchance to\nconduct\ncollege on\nmonday.'),
(43, '15kn1a1238', 'kk.'),
(44, '15kn1a1022', 'hello i am\ngopi from\ncse'),
(45, '15kn1a1203', 'hello i am\nramya from\nit'),
(47, '15kn1a1238', 'hiii guys'),
(48, '15kn1a1241', 'hiii'),
(51, '15kn1a1237', 'hiii'),
(54, '16kn1a1219', 'hii i am\nprasath\nfrom it'),
(55, '15kn1a1238', 'hello'),
(56, '15kn1a1238', 'hello'),
(57, '15kn1a1238', 'kk'),
(58, '15kn1a0233', 'hi i am\nfrom cse'),
(59, '15kn1a1238', 'i am rk\nfrom it'),
(60, '15kn1a1022', 'hiiii i am\nfrom cse'),
(61, '15kn1a1238', 'yyyy'),
(62, '15kn1a1238', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `facultyreg`
--

CREATE TABLE IF NOT EXISTS `facultyreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `facname` varchar(40) NOT NULL,
  `facpassword` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `facultyreg`
--

INSERT INTO `facultyreg` (`id`, `facname`, `facpassword`) VALUES
(1, 'rk', 'rk'),
(7, 'rk', 'rk');

-- --------------------------------------------------------

--
-- Table structure for table `insertstudent`
--

CREATE TABLE IF NOT EXISTS `insertstudent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `insertstudent`
--

INSERT INTO `insertstudent` (`id`, `rollno`, `name`, `gender`, `email`, `phone`, `branch`) VALUES
(1, '15kn1a1238', 'ramakrishna', 'male', 'ramakrishna122.rp@gmail.com', '9666733835', 'it'),
(13, '15kn1a1236', 'venkey', 'male', 'venkateswarao@gmail.com', '9542489596', 'it'),
(14, '15kn1a1260', 'mahesh', 'male', 'maheshkatti@gmail.com', '98468467897', 'it'),
(15, '15kn1a1237', 'rahul', 'male', 'rahul123@gmail.com', '967676767', 'it'),
(16, '15kn1a1233', 'heamanth', 'male', 'heamanth3@gmail.com', '987585785', 'it'),
(17, '15kn1a1241', 'sriram', 'male', 'sriram41@gmail.com', '9876876878', 'it'),
(18, '15kn1a1211', 'rama', 'male', 'rsfnsfnsfs', '656658688', 'it'),
(19, '15kn1a1204', 'Pavankumar', 'male', 'paavankingmaker649@gmail.com', '959459495', 'it'),
(20, '15kn1a1015', 'maruthi', 'male', 'maruthi12@gmail.com', '956565656', 'cse'),
(21, '15kn1a1022', 'gopi', 'male', 'gopin@gmail.com', '954987894', 'cse'),
(22, '15kn1a0111', 'Srujan', 'male', 'sanjusrujan@gmail.com', '978787783', 'civil'),
(23, '15kn1a1203', 'Ramya', 'female', 'ramyaalluri@gmail.com', '975656565', 'it'),
(25, '15kn1a0324', 'Bhanu prakash reddy', 'male', 'bhanumessi64@gmail.com', '8501945573', 'mech'),
(26, '16kn1a1219', 'athma venkata siva prasanth', 'male', 'prasanth@gmail.com', '987654886', 'it'),
(27, '15kn1a1201', 'madhuri', 'female', 'madhuri@gmail.com', '3456789033', 'it'),
(28, '15kn1a1202', 'vaibhav', 'male', 'vaibhav@gmail.com', '9876543456', 'it'),
(29, '15kn1a0233', 'HariKrishna', 'male', 'hari@gmail.com', '9876543345', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `likeslog`
--

CREATE TABLE IF NOT EXISTS `likeslog` (
  `likedby` varchar(30) NOT NULL,
  `like` int(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `notify` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `notify`) VALUES
(1, 'no college'),
(21, 'this is the announcement'),
(22, 'welcome to NRi'),
(23, 'tomorrow college'),
(24, 'repu college ledu'),
(25, 'tomorrow have no classs working  to all branches ');

-- --------------------------------------------------------

--
-- Table structure for table `nristudent`
--

CREATE TABLE IF NOT EXISTS `nristudent` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `rollno` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `nristudent`
--

INSERT INTO `nristudent` (`id`, `rollno`, `name`, `password`, `profilepic`) VALUES
(9, '15kn1a1236', 'venkey', 'venkey', 'photo/abstract_treasure-2560x1440.jpg'),
(10, '15kn1a1238', 'Ram Krishna', 'rk', 'photo/mass_effect_andromeda_4k-2560x1440.jpg'),
(11, '15kn1a1260', 'mahesh yanaganti', 'mahesh', 'photo/IMG_20161208_144534.jpg'),
(12, '15kn1a1233', 'heamanth', 'heamanth', 'photo/B612_20170218_115935.jpg'),
(13, '15kn1a1237', 'rahul', 'rahul', 'photo/nobody_m.original.jpg'),
(14, '15kn1a1241', 'sriram', 'sriram', 'photo/armored_warfare_game_5k-2560x1600.jpg'),
(15, '15kn1a1204', 'PavanKumar', 'pavan', 'photo/luke_skywalker_darth_vader_return_of_the_jedi-2560x1600.jpg'),
(16, '15kn1a1015', 'maruthi', 'maruthi', 'photo/IMG_2288.JPG'),
(17, '15kn1a1022', 'Gopi', 'gopi', 'photo/mass_effect_andromeda_2017_4k-3840x2160.jpg'),
(18, '15kn1a1203', 'Ramya', 'ramya', 'photo/jennifer_aniston_4k_2016-2560x1440.jpg'),
(19, '16kn1a1219', 'athma prasanth jalapati ', 'prasanth', 'photo/nobody_m.original.jpg'),
(20, '15kn1a1201', 'madhuri', 'madhuri', 'photo/pier_1080.jpg'),
(21, '15kn1a1202', 'vaibhav', 'vaibhav', 'photo/nobody_m.original.jpg'),
(22, '15kn1a0111', 'srujan', 'srujan', 'photo/nobody_m.original.jpg'),
(23, '15kn1a0324', 'Bhanu Prakash', 'bhanu', 'photo/nobody_m.original.jpg'),
(24, '15kn1a0233', 'Harikrishna', 'hari', 'photo/p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimg`
--

CREATE TABLE IF NOT EXISTS `uploadimg` (
  `rollno` varchar(20) NOT NULL,
  `path` varchar(500) DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uploaddate` varchar(30) NOT NULL,
  `enterpost` longtext NOT NULL,
  `name` varchar(50) NOT NULL,
  `like` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `uploadimg`
--

INSERT INTO `uploadimg` (`rollno`, `path`, `id`, `uploaddate`, `enterpost`, `name`, `like`) VALUES
('15kn1a1238', NULL, 1, ' March 4, 2018  10:26 am ', 'hello guys', 'Ramakrishna', 0),
('15kn1a1238', 'photo/5a9b7c6f6fd740.03007179.jpg', 2, ' March 4, 2018  10:26 am ', '', 'Ramakrishna', 0),
('15kn1a0324', 'photo/5a9ba04f3c4a13.81241910.jpg', 3, ' March 4, 2018  12:59 pm ', '', 'Bhanu Prakash Reddy', 0),
('15kn1a1236', 'photo/5a9c3a4f1bc586.12449937.jpg', 4, ' March 4, 2018  11:56 pm ', '', 'venkey', 0),
('15kn1a1203', 'photo/5a9c3ea45a8fe0.96148065.jpg', 5, ' March 5, 2018  12:14 am ', '', 'Ramya', 0),
('15kn1a1237', 'photo/5a9c3f3fc95d71.85350935.jpg', 6, ' March 5, 2018  12:17 am ', '', 'rahul', 0),
('15kn1a1238', NULL, 7, ' March 5, 2018  12:48 pm ', 'hii friends', 'Ramakrishna', 0),
('15kn1a1238', NULL, 8, ' March 5, 2018  12:53 pm ', 'this is the status ', 'Ramakrishna', 0),
('16kn1a1219', 'photo/5a9e26ddeffea5.11901249.jpg', 9, ' March 6, 2018  10:57 am ', '', 'athma prasanth jalapati ', 0),
('15kn1a1201', 'photo/5a9f765da039d1.49800477.jpg', 10, ' March 7, 2018  10:49 am ', '', 'madhuri', 0),
('15kn1a1202', NULL, 11, ' March 7, 2018  10:52 am ', 'hello', 'vaibhav', 0),
('15kn1a0111', 'photo/5a9f7782a3a2f5.37913742.jpg', 12, ' March 7, 2018  10:54 am ', '', 'srujan', 0),
('15kn1a0324', 'photo/5a9f77c627c9d3.99878170.jpg', 13, ' March 7, 2018  10:55 am ', '', 'Bhanu Prakash', 0),
('15kn1a1238', 'photo/5aa143ad20d932.23016397.jpg', 18, ' March 8, 2018  7:37 pm ', 'hello\r\nhow \r\nr \r\nu', 'Ramakrishna', 0),
('15kn1a1238', NULL, 22, ' March 8, 2018  8:31 pm ', 'happy bday Rahul', 'Ramakrishna', 0),
('15kn1a1238', 'photo/5aa1519225c632.63746221.jpeg', 23, ' March 8, 2018  8:36 pm ', '', 'Ramakrishna', 0),
('15kn1a0233', NULL, 27, ' March 8, 2018  9:59 pm ', 'hello guys this is\r\nmy first post', 'Harikrishna', 0),
('15kn1a1238', NULL, 28, ' March 9, 2018  1:29 pm ', 'hello', 'Ramakrishna', 0),
('15kn1a1238', 'photo/5aa23eec80eff6.62500696.jpg', 29, ' March 9, 2018  1:29 pm ', '', 'Ramakrishna', 0),
('15kn1a1238', NULL, 30, ' March 18, 2018  12:20 pm ', 'rohith anna', 'Ram Krishna', 0),
('15kn1a1238', 'photo/5aae0c452474a3.85346502.jpg', 31, ' March 18, 2018  12:20 pm ', '', 'Ram Krishna', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `date`) VALUES
(2, '15kn1a1237', ' January 25, 2018  2:08 am '),
(3, '15kn1a1238', ' January 25, 2018  2:10 am '),
(4, '15kn1a1236', ' January 25, 2018  2:10 am '),
(5, '15kn1a1238', ' January 25, 2018  7:08 pm '),
(6, '15kn1a1233', ' January 25, 2018  7:09 pm '),
(7, '15kn1a1238', ' January 26, 2018  12:47 pm '),
(8, '15kn1a1236', ' January 26, 2018  12:48 pm '),
(9, '15kn1a1241', ' January 26, 2018  12:49 pm '),
(10, '15kn1a1260', ' January 26, 2018  12:50 pm '),
(11, '15kn1a1238', ' January 26, 2018  6:08 pm '),
(12, '15kn1a1260', ' January 26, 2018  6:09 pm '),
(13, '15kn1a1238', ' January 26, 2018  11:54 pm '),
(14, '15kn1a1238', ' January 31, 2018  12:51 am '),
(15, '15kn1a1238', ' February 6, 2018  8:57 pm '),
(16, '15kn1a1238', ' February 7, 2018  12:00 am '),
(17, '15kn1a1238', ' February 8, 2018  10:45 am '),
(18, '15kn1a1238', ' February 8, 2018  1:58 pm '),
(19, '15kn1a1238', ' February 9, 2018  10:53 am '),
(20, '15kn1a1238', ' February 26, 2018  10:18 pm '),
(21, '15kn1a1238', ' February 27, 2018  1:10 pm '),
(22, '15kn1a1238', ' February 27, 2018  1:18 pm '),
(23, '15KN1A1204', ' February 27, 2018  1:33 pm '),
(24, '15kn1a1238', ' February 27, 2018  1:44 pm '),
(25, '15kn1a1238', ' February 27, 2018  1:50 pm '),
(26, '15kn1a1204', ' February 27, 2018  1:53 pm '),
(27, '15kn1a1238', ' February 27, 2018  2:30 pm '),
(28, '15kn1a1238', ' February 27, 2018  3:44 pm '),
(29, '15kn1a1238', ' February 28, 2018  1:14 pm '),
(30, '15kn1a1238', ' February 28, 2018  1:32 pm '),
(31, '15kn1a1238', ' February 28, 2018  1:34 pm '),
(32, '15kn1a1238', ' March 1, 2018  8:46 am '),
(33, '15kn1a1204', ' March 1, 2018  9:24 am '),
(34, '15kn1a1238', ' March 2, 2018  12:18 am '),
(35, '15kn1a1238', ' March 2, 2018  11:19 pm '),
(36, '15kn1a1238', ' March 2, 2018  11:24 pm '),
(37, '15kn1a1238', ' March 3, 2018  11:30 am '),
(38, '15kn1a1204', ' March 3, 2018  11:31 am '),
(39, '15kn1a1238', ' March 3, 2018  11:32 am '),
(40, '15kn1a1236', ' March 3, 2018  8:17 pm '),
(41, '15kn1a1238', ' March 4, 2018  2:12 am '),
(42, '15kn1a1238', ' March 4, 2018  9:21 am '),
(43, '15kn1a1241', ' March 4, 2018  9:26 am '),
(44, '15kn1a1238', ' March 4, 2018  10:23 am '),
(45, '15kn1a0222', ' March 4, 2018  11:13 am '),
(46, 'ramakrishna', ' March 4, 2018  11:18 am '),
(47, '15kn1a1238', ' March 4, 2018  11:38 am '),
(48, '15kn1a1238', ' March 4, 2018  11:58 am '),
(49, '15kn1a1238', ' March 4, 2018  12:02 pm '),
(50, '15kn1a1238', ' March 4, 2018  12:09 pm '),
(51, '15kn1a1238', ' March 4, 2018  12:10 pm '),
(52, '15kn1a1238', ' March 4, 2018  12:13 pm '),
(53, '15kn1a1238', ' March 4, 2018  12:43 pm '),
(54, '15kn1a1238', ' March 4, 2018  12:47 pm '),
(55, '15kn1ao324', ' March 4, 2018  12:58 pm '),
(56, '15kn1a0324', ' March 4, 2018  12:58 pm '),
(57, '15kn1a1238', ' March 4, 2018  9:30 pm '),
(58, '15kn1a1236', ' March 4, 2018  11:36 pm '),
(59, '15kn1a1203', ' March 5, 2018  12:14 am '),
(60, '15kn1a1201', ' March 5, 2018  12:15 am '),
(61, '15kn1a1201', ' March 5, 2018  12:15 am '),
(62, '15kn1a1237', ' March 5, 2018  12:16 am '),
(63, '15kn1a1238', ' March 5, 2018  12:57 am '),
(64, '15kn1a1238', ' March 5, 2018  12:47 pm '),
(65, '15kn1a1238', ' March 5, 2018  12:49 pm '),
(66, 'ramakrishna', ' March 5, 2018  12:50 pm '),
(67, '15kn1a1238', ' March 5, 2018  12:50 pm '),
(68, '15kn1a1238', ' March 5, 2018  9:06 pm '),
(69, '15kn1a1238', ' March 6, 2018  8:42 am '),
(70, '15kn1a1238', ' March 6, 2018  10:14 am '),
(71, '15kn1a1238', ' March 7, 2018  10:07 am '),
(72, '15kn1a1238', ' March 8, 2018  10:16 am '),
(73, '15kn1a1238', ' March 8, 2018  10:59 am '),
(74, '15kn1a1238', ' March 8, 2018  10:59 am '),
(75, '15kn1a1238', ' March 8, 2018  12:24 pm '),
(76, '15kn1a1238', ' March 8, 2018  12:30 pm '),
(77, '15kn1a1238', ' March 8, 2018  12:30 pm '),
(78, '15kn1a1238', ' March 8, 2018  12:38 pm '),
(79, '15kn1a1238', ' March 8, 2018  12:41 pm '),
(80, '15kn1a1238', ' March 8, 2018  12:57 pm '),
(81, '15kn1a1238', ' March 8, 2018  1:25 pm '),
(82, '15kn1a1238', ' March 8, 2018  1:26 pm '),
(83, '15kn1a1238', ' March 8, 2018  2:05 pm '),
(84, '15kn1a1238', ' March 8, 2018  2:42 pm '),
(85, '16kn1a1219', ' March 8, 2018  4:25 pm '),
(86, '16kn1a1219', ' March 8, 2018  4:25 pm '),
(87, '15kn1a1238', ' March 8, 2018  4:26 pm '),
(88, '15kn1a1238', ' March 8, 2018  6:42 pm '),
(89, '15kn1a1236', ' March 8, 2018  6:44 pm '),
(90, '15kn1a1238', ' March 8, 2018  8:24 pm '),
(91, '15kn1a1236', ' March 8, 2018  8:35 pm '),
(92, '15kn1a1238', ' March 8, 2018  9:48 pm '),
(93, '15kn1a1238', ' March 9, 2018  1:28 pm '),
(94, '15kn1a1022', ' March 9, 2018  1:32 pm '),
(95, '15kn1a1238', ' March 9, 2018  1:35 pm '),
(96, '15kn1a1238', ' March 10, 2018  9:57 am '),
(97, '15kn1a1238', ' March 10, 2018  9:57 am '),
(98, '15kn1a1238', ' March 10, 2018  9:58 am '),
(99, '15kn1a1238', ' March 10, 2018  11:57 am '),
(100, '15kn1a1241', ' March 10, 2018  11:59 am '),
(101, '15kn1a1238', ' March 10, 2018  12:13 pm '),
(102, '15kn1a1238', ' March 18, 2018  11:51 am '),
(103, '15kn1a1238', ' March 18, 2018  12:10 pm '),
(104, '15kn1a1236', ' March 18, 2018  12:23 pm ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
