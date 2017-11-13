-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 05:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcqtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbanswer`
--

CREATE TABLE `tbanswer` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `uanswer` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `tdate` varchar(300) NOT NULL,
  `scode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbanswer`
--

INSERT INTO `tbanswer` (`id`, `qid`, `uanswer`, `name`, `tdate`, `scode`) VALUES
(5, 3, 1, 'manik chhabra', '25/04/2017', 1),
(6, 5, 4, 'manik chhabra', '25/04/2017', 1),
(7, 10, 1, 'manik chhabra', '26/04/2017', 3),
(8, 9, 3, 'manik chhabra', '26/04/2017', 3),
(9, 8, 3, 'manik chhabra', '26/04/2017', 3),
(10, 11, 0, 'manik chhabra', '26/04/2017', 3),
(11, 7, 1, 'manik chhabra', '26/04/2017', 3),
(12, 9, 1, 'neha', '26/04/2017', 3),
(13, 8, 3, 'neha', '26/04/2017', 3),
(14, 7, 1, 'neha', '26/04/2017', 3),
(15, 6, 2, 'neha', '26/04/2017', 3),
(16, 3, 1, 'neha', '26/04/2017', 1),
(17, 5, 1, 'neha', '26/04/2017', 1),
(18, 12, 2, 'manik chhabra', '26/04/2017', 2),
(19, 13, 4, 'manik chhabra', '26/04/2017', 2),
(20, 13, 3, 'neha', '26/04/2017', 2),
(21, 14, 3, 'neha', '26/04/2017', 2),
(22, 23, 3, 'manik chhabra', '28/04/2017', 4),
(23, 22, 3, 'manik chhabra', '28/04/2017', 4),
(24, 21, 3, 'manik chhabra', '28/04/2017', 4),
(25, 24, 3, 'manik chhabra', '28/04/2017', 4),
(26, 17, 2, 'manik chhabra', '28/04/2017', 4),
(27, 15, 1, 'neha', '28/04/2017', 4),
(28, 23, 2, 'neha', '28/04/2017', 4),
(29, 18, 3, 'neha', '28/04/2017', 4),
(30, 16, 2, 'neha', '28/04/2017', 4),
(31, 24, 2, 'neha', '28/04/2017', 4),
(32, 28, 2, 'nidhi', '28/04/2017', 2),
(33, 26, 2, 'nidhi', '28/04/2017', 2),
(34, 14, 1, 'nidhi', '28/04/2017', 2),
(35, 30, 2, 'nidhi', '28/04/2017', 2),
(36, 12, 2, 'nidhi', '28/04/2017', 2),
(37, 31, 2, 'nidhi', '28/04/2017', 2),
(38, 29, 3, 'nidhi', '28/04/2017', 2),
(39, 13, 4, 'nidhi', '28/04/2017', 2),
(40, 32, 4, 'nidhi', '28/04/2017', 2),
(41, 27, 3, 'nidhi', '28/04/2017', 2),
(42, 28, 2, '', '28/04/2017', 2),
(43, 26, 2, '', '28/04/2017', 2),
(45, 30, 2, '', '28/04/2017', 2),
(46, 12, 2, '', '28/04/2017', 2),
(47, 31, 2, '', '28/04/2017', 2),
(48, 29, 3, '', '28/04/2017', 2),
(50, 32, 4, '', '28/04/2017', 2),
(51, 27, 3, '', '28/04/2017', 2),
(55, 42, 2, '', '28/04/2017', 1),
(57, 48, 2, '', '28/04/2017', 1),
(58, 46, 2, '', '28/04/2017', 1),
(59, 43, 3, '', '28/04/2017', 1),
(60, 39, 2, '', '28/04/2017', 1),
(61, 45, 2, '', '28/04/2017', 1),
(62, 47, 3, '', '28/04/2017', 1),
(63, 38, 2, '', '28/04/2017', 1),
(64, 11, 1, 'nidhi', '28/04/2017', 3),
(65, 10, 2, 'nidhi', '28/04/2017', 3),
(66, 7, 2, 'nidhi', '28/04/2017', 3),
(67, 8, 2, 'nidhi', '28/04/2017', 3),
(68, 36, 2, 'nidhi', '28/04/2017', 3),
(69, 37, 2, 'nidhi', '28/04/2017', 3),
(70, 34, 2, 'nidhi', '28/04/2017', 3),
(71, 35, 1, 'nidhi', '28/04/2017', 3),
(72, 6, 3, 'nidhi', '28/04/2017', 3),
(73, 9, 3, 'nidhi', '28/04/2017', 3),
(74, 33, 3, 'nidhi', '28/04/2017', 3),
(75, 22, 1, 'nidhi', '28/04/2017', 4),
(76, 15, 2, 'nidhi', '28/04/2017', 4),
(77, 20, 3, 'nidhi', '28/04/2017', 4),
(78, 23, 3, 'nidhi', '28/04/2017', 4),
(79, 17, 3, 'nidhi', '28/04/2017', 4),
(80, 21, 3, 'nidhi', '28/04/2017', 4),
(81, 19, 3, 'nidhi', '28/04/2017', 4),
(82, 24, 2, 'nidhi', '28/04/2017', 4),
(83, 18, 2, 'nidhi', '28/04/2017', 4),
(84, 16, 4, 'nidhi', '28/04/2017', 4),
(85, 28, 1, 'mehak', '28/04/2017', 2),
(86, 31, 3, 'mehak', '28/04/2017', 2),
(87, 26, 4, 'mehak', '28/04/2017', 2),
(88, 13, 3, 'mehak', '28/04/2017', 2),
(89, 29, 2, 'mehak', '28/04/2017', 2),
(90, 30, 2, 'mehak', '28/04/2017', 2),
(91, 27, 2, 'mehak', '28/04/2017', 2),
(92, 32, 2, 'mehak', '28/04/2017', 2),
(93, 14, 3, 'mehak', '28/04/2017', 2),
(94, 12, 2, 'mehak', '28/04/2017', 2),
(95, 44, 1, 'mehak', '28/04/2017', 1),
(96, 38, 3, 'mehak', '28/04/2017', 1),
(97, 47, 3, 'mehak', '28/04/2017', 1),
(98, 3, 2, 'mehak', '28/04/2017', 1),
(99, 48, 2, 'mehak', '28/04/2017', 1),
(100, 42, 4, 'mehak', '28/04/2017', 1),
(101, 45, 3, 'mehak', '28/04/2017', 1),
(102, 39, 3, 'mehak', '28/04/2017', 1),
(103, 40, 2, 'mehak', '28/04/2017', 1),
(104, 41, 3, 'mehak', '28/04/2017', 1),
(105, 46, 4, 'mehak', '28/04/2017', 1),
(106, 43, 4, 'mehak', '28/04/2017', 1),
(107, 37, 1, 'mehak', '28/04/2017', 3),
(108, 34, 3, 'mehak', '28/04/2017', 3),
(109, 11, 3, 'mehak', '28/04/2017', 3),
(110, 36, 3, 'mehak', '28/04/2017', 3),
(111, 9, 2, 'mehak', '28/04/2017', 3),
(112, 6, 2, 'mehak', '28/04/2017', 3),
(113, 10, 2, 'mehak', '28/04/2017', 3),
(114, 8, 4, 'mehak', '28/04/2017', 3),
(115, 33, 3, 'mehak', '28/04/2017', 3),
(116, 35, 2, 'mehak', '28/04/2017', 3),
(117, 7, 2, 'mehak', '28/04/2017', 3),
(118, 21, 1, 'mehak', '28/04/2017', 4),
(119, 24, 4, 'mehak', '28/04/2017', 4),
(120, 19, 3, 'mehak', '28/04/2017', 4),
(121, 22, 3, 'mehak', '28/04/2017', 4),
(122, 20, 2, 'mehak', '28/04/2017', 4),
(123, 18, 3, 'mehak', '28/04/2017', 4),
(124, 16, 2, 'mehak', '28/04/2017', 4),
(125, 15, 2, 'mehak', '28/04/2017', 4),
(126, 23, 2, 'mehak', '28/04/2017', 4),
(127, 17, 2, 'mehak', '28/04/2017', 4),
(128, 29, 2, 'nikhil', '28/04/2017', 2),
(129, 14, 3, 'nikhil', '28/04/2017', 2),
(130, 28, 3, 'nikhil', '28/04/2017', 2),
(131, 13, 3, 'nikhil', '28/04/2017', 2),
(132, 26, 2, 'nikhil', '28/04/2017', 2),
(133, 12, 2, 'nikhil', '28/04/2017', 2),
(134, 30, 2, 'nikhil', '28/04/2017', 2),
(135, 27, 2, 'nikhil', '28/04/2017', 2),
(136, 31, 2, 'nikhil', '28/04/2017', 2),
(137, 32, 3, 'nikhil', '28/04/2017', 2),
(138, 42, 1, 'nikhil', '28/04/2017', 1),
(139, 48, 3, 'nikhil', '28/04/2017', 1),
(140, 46, 1, 'nikhil', '28/04/2017', 1),
(141, 45, 1, 'nikhil', '28/04/2017', 1),
(142, 3, 3, 'nikhil', '28/04/2017', 1),
(143, 43, 4, 'nikhil', '28/04/2017', 1),
(144, 39, 2, 'nikhil', '28/04/2017', 1),
(145, 47, 3, 'nikhil', '28/04/2017', 1),
(146, 40, 3, 'nikhil', '28/04/2017', 1),
(147, 38, 3, 'nikhil', '28/04/2017', 1),
(148, 44, 3, 'nikhil', '28/04/2017', 1),
(149, 41, 4, 'nikhil', '28/04/2017', 1),
(150, 9, 1, 'nikhil', '28/04/2017', 3),
(151, 11, 2, 'nikhil', '28/04/2017', 3),
(152, 35, 2, 'nikhil', '28/04/2017', 3),
(153, 34, 2, 'nikhil', '28/04/2017', 3),
(154, 6, 1, 'nikhil', '28/04/2017', 3),
(155, 33, 2, 'nikhil', '28/04/2017', 3),
(156, 8, 1, 'nikhil', '28/04/2017', 3),
(157, 10, 1, 'nikhil', '28/04/2017', 3),
(158, 36, 2, 'nikhil', '28/04/2017', 3),
(159, 37, 2, 'nikhil', '28/04/2017', 3),
(160, 7, 1, 'nikhil', '28/04/2017', 3),
(161, 48, 1, 'nidhi', '28/04/2017', 1),
(162, 47, 4, 'nidhi', '28/04/2017', 1),
(163, 44, 3, 'nidhi', '28/04/2017', 1),
(164, 46, 4, 'nidhi', '28/04/2017', 1),
(165, 43, 2, 'nidhi', '28/04/2017', 1),
(166, 41, 2, 'nidhi', '28/04/2017', 1),
(167, 3, 1, 'nidhi', '28/04/2017', 1),
(168, 45, 3, 'nidhi', '28/04/2017', 1),
(169, 40, 1, 'nidhi', '28/04/2017', 1),
(170, 42, 3, 'nidhi', '28/04/2017', 1),
(171, 38, 2, 'nidhi', '28/04/2017', 1),
(172, 39, 3, 'nidhi', '28/04/2017', 1),
(173, 20, 2, 'abc', '28/04/2017', 4),
(174, 16, 2, 'abc', '28/04/2017', 4),
(175, 18, 1, 'abc', '28/04/2017', 4),
(176, 23, 2, 'abc', '28/04/2017', 4),
(177, 21, 1, 'abc', '28/04/2017', 4),
(178, 22, 2, 'abc', '28/04/2017', 4),
(179, 19, 1, 'abc', '28/04/2017', 4),
(180, 24, 2, 'abc', '28/04/2017', 4),
(181, 17, 1, 'abc', '28/04/2017', 4),
(182, 15, 2, 'abc', '28/04/2017', 4),
(183, 17, 1, 'nikhil', '06/05/2017', 4),
(184, 23, 1, 'nikhil', '06/05/2017', 4),
(185, 19, 1, 'nikhil', '06/05/2017', 4),
(186, 22, 2, 'nikhil', '06/05/2017', 4),
(187, 20, 3, 'nikhil', '06/05/2017', 4),
(188, 16, 2, 'nikhil', '06/05/2017', 4),
(189, 15, 2, 'nikhil', '06/05/2017', 4),
(190, 18, 2, 'nikhil', '06/05/2017', 4),
(191, 24, 1, 'nikhil', '06/05/2017', 4),
(192, 21, 1, 'nikhil', '06/05/2017', 4),
(193, 31, 1, 'priya', '06/05/2017', 2),
(194, 12, 2, 'priya', '06/05/2017', 2),
(195, 27, 1, 'priya', '06/05/2017', 2),
(196, 14, 1, 'priya', '06/05/2017', 2),
(197, 26, 1, 'priya', '06/05/2017', 2),
(198, 29, 1, 'priya', '06/05/2017', 2),
(199, 32, 1, 'priya', '06/05/2017', 2),
(200, 13, 1, 'priya', '06/05/2017', 2),
(201, 30, 1, 'priya', '06/05/2017', 2),
(202, 28, 1, 'priya', '06/05/2017', 2),
(203, 41, 2, 'priya', '06/05/2017', 1),
(204, 3, 1, 'priya', '06/05/2017', 1),
(205, 42, 3, 'priya', '06/05/2017', 1),
(206, 38, 3, 'priya', '06/05/2017', 1),
(207, 44, 3, 'priya', '06/05/2017', 1),
(208, 40, 3, 'priya', '06/05/2017', 1),
(209, 46, 2, 'priya', '06/05/2017', 1),
(210, 43, 2, 'priya', '06/05/2017', 1),
(211, 39, 3, 'priya', '06/05/2017', 1),
(212, 45, 3, 'priya', '06/05/2017', 1),
(215, 41, 1, 'namn', '06/05/2017', 1),
(217, 46, 4, 'namn', '06/05/2017', 1),
(218, 43, 2, 'namn', '06/05/2017', 1),
(219, 44, 3, 'namn', '06/05/2017', 1),
(220, 38, 3, 'namn', '06/05/2017', 1),
(221, 40, 1, 'namn', '06/05/2017', 1),
(222, 48, 1, 'namn', '06/05/2017', 1),
(223, 39, 3, 'namn', '06/05/2017', 1),
(224, 45, 3, 'namn', '06/05/2017', 1),
(225, 42, 3, 'namn', '06/05/2017', 1),
(227, 32, 2, 'akshita', '10/05/2017', 2),
(228, 31, 2, 'akshita', '10/05/2017', 2),
(229, 30, 3, 'akshita', '10/05/2017', 2),
(230, 29, 3, 'akshita', '10/05/2017', 2),
(231, 26, 2, 'akshita', '10/05/2017', 2),
(232, 12, 3, 'akshita', '10/05/2017', 2),
(233, 13, 3, 'akshita', '10/05/2017', 2),
(234, 27, 3, 'akshita', '10/05/2017', 2),
(235, 14, 4, 'akshita', '10/05/2017', 2),
(236, 28, 2, 'akshita', '10/05/2017', 2),
(237, 41, 2, 'akshita', '10/05/2017', 1),
(238, 44, 3, 'akshita', '10/05/2017', 1),
(239, 43, 2, 'akshita', '10/05/2017', 1),
(240, 3, 1, 'akshita', '10/05/2017', 1),
(241, 42, 3, 'akshita', '10/05/2017', 1),
(242, 40, 1, 'akshita', '10/05/2017', 1),
(243, 38, 2, 'akshita', '10/05/2017', 1),
(244, 39, 3, 'akshita', '10/05/2017', 1),
(245, 47, 4, 'akshita', '10/05/2017', 1),
(246, 45, 3, 'akshita', '10/05/2017', 1),
(247, 46, 4, 'akshita', '10/05/2017', 1),
(248, 48, 4, 'akshita', '10/05/2017', 1),
(249, 10, 1, 'akshita', '10/05/2017', 3),
(250, 35, 2, 'akshita', '10/05/2017', 3),
(251, 8, 3, 'akshita', '10/05/2017', 3),
(252, 7, 1, 'akshita', '10/05/2017', 3),
(253, 11, 2, 'akshita', '10/05/2017', 3),
(254, 6, 1, 'akshita', '10/05/2017', 3),
(255, 33, 2, 'akshita', '10/05/2017', 3),
(256, 36, 1, 'akshita', '10/05/2017', 3),
(257, 37, 2, 'akshita', '10/05/2017', 3),
(258, 9, 1, 'akshita', '10/05/2017', 3),
(259, 34, 1, 'akshita', '10/05/2017', 3),
(260, 32, 2, 'rishab', '12/05/2017', 2),
(261, 30, 3, 'rishab', '12/05/2017', 2),
(262, 29, 3, 'rishab', '12/05/2017', 2),
(263, 26, 2, 'rishab', '12/05/2017', 2),
(264, 31, 2, 'rishab', '12/05/2017', 2),
(265, 14, 4, 'rishab', '12/05/2017', 2),
(266, 28, 2, 'rishab', '12/05/2017', 2),
(267, 13, 3, 'rishab', '12/05/2017', 2),
(268, 27, 3, 'rishab', '12/05/2017', 2),
(269, 12, 3, 'rishab', '12/05/2017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblogin2`
--

CREATE TABLE `tblogin2` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `securityQuestion` text NOT NULL,
  `securityAnswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblogin2`
--

INSERT INTO `tblogin2` (`id`, `name`, `password`, `securityQuestion`, `securityAnswer`) VALUES
(1, 'shina', 'shina', 'what is your pet name?', 'romeo'),
(2, 'neha', 'neha', 'what is your favourite color?', 'black'),
(3, 'manik chhabra', '1234', 'what is your favourite sport?', 'cricket'),
(4, 'nidhi', 'nidhi', 'what is your favourite color?', 'blue'),
(5, 'mehak', 'mehak', 'what is your favourite color?', 'green'),
(6, 'nikhil', 'nikhil', 'what is your favourite color?', 'black'),
(10, 'neha', 'neha', 'what is your favourite color?', 'black'),
(11, 'ravneet', 'ravneet', 'what is your favourite sport?', 'badminton'),
(12, 'gurjyot', 'gurjyot', 'what is your favourite sport?', 'badminton'),
(13, 'akshita', 'akshita', 'what is your pet name?', 'yoyo'),
(14, 'rishab', 'rishab', 'what is your favourite sport?', 'cricket');

-- --------------------------------------------------------

--
-- Table structure for table `tbmcq`
--

CREATE TABLE `tbmcq` (
  `qid` int(11) NOT NULL,
  `subcode` int(11) NOT NULL,
  `qname` text NOT NULL,
  `o1` text NOT NULL,
  `o2` text NOT NULL,
  `o3` text NOT NULL,
  `o4` text NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmcq`
--

INSERT INTO `tbmcq` (`qid`, `subcode`, `qname`, `o1`, `o2`, `o3`, `o4`, `ans`) VALUES
(3, 1, 'what is full form of html ?', 'hypertext markup language', 'hypertext marking logic', 'highlight markup language', 'highlighted marking logic', 1),
(6, 3, '	 The DBMS acts as an interface between what two components of an enterprise-class database system?', 'Database application and the database', 'Data and the database', 'The user and the database application', 'Database application and SQL', 1),
(7, 3, 'SQL stands for ________ .', 'Structured Query Language', 'Sequential Query Language', 'Structured Question Language', 'Sequential Question Language', 1),
(8, 3, '	 Because it contains a description of its own structure, a database is considered to be ________ .', 'described', 'metadata compatible', 'self-describing', 'an application program', 3),
(9, 3, 'The following are functions of a DBMS except ________ .', 'creating and processing forms', 'creating databases', 'processing data', 'administrating databases', 1),
(10, 3, 'In a one-to-many relationship, the entity that is on the one side of the relationship is called a(n) ________ entity.', 'parent', 'child', 'instance', 'subtype', 1),
(11, 3, 'In which of the following is a single-entity instance of one type related to many entity instances of another type?', 'One-to-One Relationship', 'One-to-Many Relationship', 'Many-to-Many Relationship', 'Composite Relationship', 2),
(12, 2, 'Which of the function call is correct?', 'a', 'int a', 'a()', 'none of these', 3),
(13, 2, 'Which of the following is not a file function?', 'read()', 'write()', 'strlen()', 'get()', 3),
(14, 2, 'which of the following is not a unary operator?', '++a', '--a', '-a', 'a+b', 4),
(15, 4, 'The part of machine level instruction, which tells the central processor what has to be done, is', 'operation code', 'address', 'locator', 'none of these', 1),
(16, 4, 'Which of the following refers to the associative memory?', 'the address of the data is generated by the CPU', 'the address of the data is supplied by the users', 'there is no need for an address i.e. the data is used as an address', 'the data are accessed sequentially', 3),
(17, 4, 'To avoid the race condition, the number of processes that may be simultaneously inside their critical section is', '8', '1', '16', '0', 2),
(18, 4, 'A system program that combines the separately compiled modules of a program into a form suitable for execution', 'assembler', 'linking loader', 'cross compiler', 'load and go', 2),
(19, 4, 'Process is', 'program in High level language kept on disk', 'contents of main memory', 'a program in execution', 'a job in secondary memory', 3),
(20, 4, 'The strategy of allowing processes that are logically runnable to be temporarily suspended is called', 'preemptive scheduling', 'non preemptive scheduling', 'shortest job first', 'first come first served', 1),
(21, 4, 'The LRU algorithm', 'pages out pages that have been used recently', 'pages out pages that have not been used recently', 'pages out pages that have been least used recently', 'pages out the first page in a given area', 3),
(22, 4, 'Fork is', 'the dispatching of a task', 'the creation of a new job', 'the creation of a new process', 'increasing the priority of a task', 3),
(23, 4, 'Thrashing', 'is a natural consequence of virtual memory systems', 'can always be avoided by swapping', 'always occurs on large computers', 'can be caused by poor paging algorithms', 4),
(24, 4, 'Interprocess communication', 'is required for all processes', 'is usually done via disk drives', 'is never necessary', 'allows processes to synchronize activity', 4),
(26, 2, 'What does the following declaration mean?  int (*ptr)[10];', 'ptr is array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', 'ptr is an array of 10 integers', 'ptr is an pointer to array', 2),
(27, 2, 'In C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array', 'Base address of the array', 'Address of the last element of array', 3),
(28, 2, 'Which of the following function sets first n characters of a string to a given character?', 'strinit()', 'strnset()', 'strset()', 'strcset()', 2),
(29, 2, 'If the two strings are identical, then strcmp() function returns', '-1', '1', '0', 'Yes', 3),
(30, 2, 'The library function used to find the last occurrence of a character in a string is', 'strnstr()', 'laststr()', 'strrchr()', 'strstr()', 3),
(31, 2, 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', 4),
(32, 2, 'What is the similarity between a structure, union and enumeration?', 'All of them let you define new values', 'All of them let you define new data types', 'All of them let you define new pointers', 'All of them let you define new structures', 2),
(33, 3, 'Needing to using more complicated SQL in database applications is a(n) ________ of normalization.', 'advantage', 'disadvantage', 'either an advantage or disadvantage', 'neither an advantage nor disadvantage', 2),
(34, 3, 'Multivalued dependencies should ________ be eliminated.', 'always', 'commonly', 'seldom', 'never', 1),
(35, 3, 'In a 1:N relationship, the foreign key is placed in:', 'either table without specifying parent and child tables.', 'the parent table.', 'the child table.', 'either the parent table or the child table.', 3),
(36, 3, 'Which of the following column properties specifies whether or not cells in a column must contain a data value?', 'Null status', 'Data type', 'Default value', 'Data constraints', 1),
(37, 3, 'A primary key should be defined as:', 'NULL.', 'NOT NULL.', 'Either of the above can be used.', 'None of the above are correct.', 2),
(38, 1, 'HTML tags are used to describe document ___________.', 'content', 'definition', 'language', 'none pf these', 1),
(39, 1, 'HTML uses ', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 3),
(40, 1, 'The year in which HTML was first proposed _______. ', '1990', '1980', '2000', '1995', 1),
(41, 1, 'Apart from bold tag, what other tag makes text bold ? ', 'fat', 'strong', 'black', 'emp', 2),
(42, 1, 'What should be the first tag in any HTML document? ', 'head', 'title', 'html', 'document', 3),
(43, 1, 'How can you make a bulleted list with numbers?', 'dl', 'ol', 'list', 'ul', 2),
(44, 1, 'What tag is used to display a picture in a HTML page? ', 'picture', 'image', 'img', 'src', 3),
(45, 1, 'HTML web pages can be read and rendered by _________. ', 'Compiler', 'Server', 'Web Browser', 'Interpreter', 3),
(46, 1, 'Which HTML tag produces the biggest heading? ', 'h7', 'h9', 'h4', 'h1', 4),
(47, 1, 'HTML tags are surrounded by which type of brackets.', 'Curly', 'Round', 'Squart', 'Angle', 4),
(48, 1, 'Tags and test that are not directly displayed on the page are written in _____ section. ', 'head', 'title', 'body', 'html', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbresult`
--

CREATE TABLE `tbresult` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `subcode` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbresult`
--

INSERT INTO `tbresult` (`id`, `name`, `subcode`, `score`) VALUES
(1, 'manik chhabra', 1, 2),
(2, 'manik chhabra', 3, 4),
(3, 'neha', 3, 4),
(4, 'neha', 1, 0),
(6, 'manik chhabra', 2, 0),
(7, 'neha', 2, 2),
(8, 'manik chhabra', 4, 3),
(9, 'neha', 4, 1),
(10, 'nidhi', 2, 4),
(13, 'nidhi', 3, 1),
(14, 'nidhi', 4, 3),
(15, 'mehak', 2, 2),
(16, 'mehak', 1, 3),
(17, 'mehak', 3, 0),
(18, 'mehak', 4, 4),
(19, 'nikhil', 2, 2),
(20, 'nikhil', 1, 1),
(21, 'nikhil', 3, 7),
(22, 'nidhi', 1, 11),
(24, 'nikhil', 4, 1),
(28, 'akshita', 2, 9),
(29, 'akshita', 1, 10),
(30, 'akshita', 3, 10),
(31, 'rishab', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `name` varchar(500) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `university` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`name`, `roll`, `dept`, `phone`, `email`, `fname`, `mname`, `image`, `password`, `university`) VALUES
('akshita', 1, 'cse', 9988871275, 'sunilchhabra1275@gmail.com', 'sunil', 'seema', 'B612_20170219_173802.jpg', 'akshita', 'blue bird'),
('rishab', 2, 'cse', 9888021276, 'sunilchhabra1275@gmail.com', 'gulshan', 'kavita', 'B612_20170219_165506.jpg', 'rishab', 'blue bird'),
('manik chhabra', 1510991358, 'cse', 9988871278, 'manikchhabra1275@gmail.com', 'sunil chhabra', 'seema chhabra', 'B612_20170219_170543.jpg', '1234', 'chitkara university'),
('mehak', 1510991378, 'cse', 9988871236, 'mehakgarg@gmail.com', 'abcde', 'xyz', '12239868_1343813242341707_2623505698044164731_n.png', 'mehak', 'chitkara university'),
('neha ', 1510991404, 'cse', 9041112278, 'neh382852@gmail.com', 'pawan anand', 'santosh anand', 'neha.jpg', 'neha', 'chitkara university'),
('nidhi', 1510991406, 'cse', 7307071275, 'nidhikapoor1840@gmail.com', 'abcd', 'xyz', '15442105_1010726612364567_5320719683430255201_n.jpg', 'nidhi', 'chitkara university'),
('nikhil', 1510991410, 'cse', 9530670302, 'abcd@gmail.com', 'abcd', 'xyz', '15589713_1010726582364570_75857483430792324_n.jpg', 'nikhil', 'chitkara university');

-- --------------------------------------------------------

--
-- Table structure for table `tbsubject`
--

CREATE TABLE `tbsubject` (
  `id` int(11) NOT NULL,
  `subjname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsubject`
--

INSERT INTO `tbsubject` (`id`, `subjname`) VALUES
(2, 'C'),
(1, 'cst'),
(3, 'dbms'),
(4, 'os');

-- --------------------------------------------------------

--
-- Table structure for table `tbteacher`
--

CREATE TABLE `tbteacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subcode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbteacher`
--

INSERT INTO `tbteacher` (`id`, `name`, `subcode`, `email`, `phone`, `password`, `dept`) VALUES
(1, 'shina', '1', 'shinapahuja@chitkara.edu.in', 9888061277, 'shina', 'cse'),
(2, 'neha', '2', 'nehagupta@chitkara.edu.in', 9569021275, 'neha', 'cse'),
(10, 'ravneet', '3', 'ravneetkaur@chitkara.edu.in', 9888021275, 'ravneet', 'cse'),
(11, 'gurjyot', '4', 'gurjyotkaur@chitkara.edu.in', 9988871275, 'gurjyot', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbanswer`
--
ALTER TABLE `tbanswer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblogin2`
--
ALTER TABLE `tblogin2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmcq`
--
ALTER TABLE `tbmcq`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbresult`
--
ALTER TABLE `tbresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `tbsubject`
--
ALTER TABLE `tbsubject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjname` (`subjname`);

--
-- Indexes for table `tbteacher`
--
ALTER TABLE `tbteacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `sub` (`subcode`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `subcode` (`subcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbanswer`
--
ALTER TABLE `tbanswer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT for table `tblogin2`
--
ALTER TABLE `tblogin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbmcq`
--
ALTER TABLE `tbmcq`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tbresult`
--
ALTER TABLE `tbresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbsubject`
--
ALTER TABLE `tbsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbteacher`
--
ALTER TABLE `tbteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
