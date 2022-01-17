-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2018 at 02:35 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tblis_jcrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitinterval`
--

CREATE TABLE IF NOT EXISTS `visitinterval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Dumping data for table `visitinterval`
--

INSERT INTO `visitinterval` (`id`, `code`, `name`, `status`) VALUES
(1, 'SCR', 'Screening', 'Active'),
(2, 'BS', 'Day 0/Baseline', 'Active'),
(42, 'WU', 'Work-up', 'Active'),
(43, 'SR', 'Suspected Relapse', 'Active'),
(44, 'SK', 'Sick Visit', 'Active'),
(45, 'OT', 'Other', 'Active'),
(46, 'UNK', 'Unknown', 'Active'),
(47, 'NA', 'Not Applicable', 'Active'),
(60, 'DC', 'Discharge', 'Active'),
(61, 'BS1', 'Baseline First Sample', 'Active'),
(62, 'BS2', 'Baseline Second Sample', 'Active'),
(63, 'BS3', 'Baseline Third Sample', 'Active'),
(64, 'M1DC', 'Month 1 Discharge', 'Active'),
(65, 'M2DC', 'Month 2 Discharge', 'Active'),
(66, 'ED', 'Early Discontinuation', 'Active'),
(67, 'RC', 'Recall', 'Active'),
(70, 'RL', 'Relapse', 'Active'),
(71, 'D0', 'Day0/Baseline', 'Active'),
(72, 'SK1', 'Sick Visit First Sample', 'Active'),
(74, 'SK2', 'Sick Visit Second Sample', 'Active'),
(75, 'SK3', 'Sick Visit Third Sample', 'Active'),
(78, 'IN', 'Initial', 'Active'),
(79, 'ENR', 'Enroll', 'Active'),
(80, 'S0-W0', 'Screen', 'Active'),
(81, 'S1-W4', 'Step 1 Week 4', 'Active'),
(82, 'S2-M12', 'Step 2 Month 12', 'Active'),
(83, 'S2-M18', 'Step 2 Month 18', 'Active'),
(85, 'S1-SV', 'Step 1 Sick Visit', 'Active'),
(86, 'S2-SV', 'Step 2 Sick Visit', 'Active'),
(87, 'S3-SV', 'Step 3 Sick Visit', 'Active'),
(88, 'S2-T1', 'Step 2 - TB Treatment 1', 'Active'),
(89, 'S1-W1', 'Step 1 Week 1', 'Active'),
(91, 'S2-M1', 'Step 2 Month 1', 'Active'),
(92, 'S1-W0', 'Step 1 Week 0', 'Active'),
(95, 'S1-W2', 'Step 1 Week 2', 'Active'),
(97, 'S2-W2', 'Step 2 Week 2', 'Active'),
(98, 'S2-M0', 'Step 2 Month 0', 'Active'),
(99, 'S2-M2', 'Step 2 Month 2', 'Active'),
(103, 'S2-T2', 'Step 2 TB Treatment', 'Active'),
(104, 'S2-M3', 'Step 2 Month 3', 'Active'),
(105, 'S2-M4', 'Step 2 Month 4', 'Active'),
(106, 'S2-T5', 'Step 2 TB Treatment 5', 'Active'),
(107, 'S2-M5', 'Step 2 Month 5', 'Active'),
(108, 'S2-T6', 'Step 2 TB Treatment 6', 'Active'),
(109, 'S2-M6', 'Step 2 Month 6', 'Active'),
(110, 'S2-M7', 'Step 2 Month 7', 'Active'),
(111, 'S2-M8', 'Step 2 Month 8', 'Active'),
(112, 'S2-M9', 'Step 2 Month 9', 'Active'),
(113, 'S2-M10', 'Step 2 Month 10', 'Active'),
(114, 'S2-M11', 'Step 2 Month 11', 'Active'),
(115, 'S2-T12', 'Step 2 TB Treatment 12', 'Active'),
(116, 'S2-M15', 'Step 2 Month 15', 'Active'),
(117, 'S2-M21', 'Step 2 Month 21', 'Active'),
(118, 'S2-M24', 'Step 2 Month 24', 'Active'),
(119, 'S2-M27', 'Step 2 Month 27', 'Active'),
(120, 'S2-M30', 'Step 2 Month 30', 'Active'),
(121, 'S2-M33', 'Step 2 Month 33', 'Active'),
(122, 'S2-M36', 'Step 2 Month 36', 'Active'),
(123, 'S2-M40', 'Step 2 Month 40', 'Active'),
(124, 'S2-M44', 'Step 2 Month 44', 'Active'),
(125, 'S2-M48', 'Step 2 Month 48', 'Active'),
(126, 'S2-M52', 'Step 2 Month 52', 'Active'),
(127, 'S2-M56', 'Step 2 Month 56', 'Active'),
(128, 'S2-M60', 'Step 2 Month 60', 'Active'),
(129, 'S3-M0', 'Step 3 Month 0', 'Active'),
(130, 'S3-M1', 'Step 3 Month 1', 'Active'),
(131, 'S3-M2', 'Step 3 Month 2', 'Active'),
(132, 'S3-M3', 'Step 3 Month 3', 'Active'),
(133, 'S3-M6', 'Step 3 Month 6', 'Active'),
(134, 'S3-M9', 'Step 3 Month 9', 'Active'),
(135, 'S3-M12', 'Step 3 Month 12', 'Active'),
(136, 'S3-M15', 'Step 3 Month 15', 'Active'),
(137, 'S3-M18', 'Step 3 Month 18', 'Active'),
(138, 'S3-M21', 'Step 3 Month 21', 'Active'),
(139, 'S3-M24', 'Step 3 Month 24', 'Active'),
(140, 'S3-M27', 'Step 3 Month 27', 'Active'),
(141, 'S3-M30', 'Step 3 Month 30', 'Active'),
(142, 'S3-M33', 'Step 3 Month 33', 'Active'),
(143, 'S3-M36', 'Step 3 Month 36', 'Active'),
(144, 'S3-M40', 'Step 3 Month 40', 'Active'),
(145, 'S3-M44', 'Step 3 Month 44', 'Active'),
(146, 'S3-M48', 'Step 3 Month 48', 'Active'),
(147, 'S3-M52', 'Step 3 Month 52', 'Active'),
(148, 'S3-M56', 'Step 3 Month 56', 'Active'),
(149, 'S3-M60', 'Step 3 Month 60', 'Active'),
(150, 'S2T1', 'Step 2 TB Treatment 1', 'Active'),
(153, 'S2-W0', 'Step2 Week0', 'Active'),
(155, 'FU 3', 'Follow-up Month 3', 'Active'),
(156, 'FU 6', 'Follow-up Month 6', 'Active'),
(158, 'IV', 'Interim Visit', 'Active'),
(159, 'FU 1', 'Follow-up 1st specimen', 'Active'),
(160, 'FU 2', 'Follow-up 2nd specimen', 'Active'),
(162, 'END', 'End of Treatment', 'Active'),
(163, 'RA', 'Random', 'Active'),
(164, 'FU W6', 'Follow up Week 6', 'Active'),
(165, 'M6 RT', 'Month 6 Retreatment', 'Active'),
(169, 'US', 'Unscheduled Visit', 'Active'),
(173, 'M9/?RL', 'Month 9 ? Relapse', 'Active'),
(174, 'SK/RL', 'Sick Visit Relapse', 'Active'),
(180, 'M2', 'DISCAHRGE', 'Active'),
(181, 'M2D', 'Month Two Discharge', 'Active'),
(183, 'Ex1', 'Extra1', 'Active'),
(186, 'S3-W0', 'Step 3 Week 0', 'Active'),
(187, 'IO', 'Baseline of Incident', 'Active'),
(204, '', 'PPTR', 'Active'),
(205, '', '1 PPTR', 'Active'),
(206, '', 'PPTR 7', 'Active'),
(208, '', 'PPTR 14', 'Active'),
(209, '', 'BS', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
