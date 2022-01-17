-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2017 at 07:28 PM
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
-- Table structure for table `aliquottype`
--

CREATE TABLE IF NOT EXISTS `aliquottype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alldatadownload_table`
--

CREATE TABLE IF NOT EXISTS `alldatadownload_table` (
  `labno` int(200) DEFAULT NULL,
  `studycode` varchar(10) DEFAULT NULL,
  `pid_auto` int(10) DEFAULT '0',
  `pid` varchar(255),
  `pid_other` varchar(255),
  `pinitials` varchar(255),
  `name` varchar(255),
  `dob` date,
  `gender` varchar(255),
  `telephone` varchar(255),
  `village` varchar(255),
  `subcounty` varchar(255),
  `district` varchar(255),
  `sample_id` varchar(255) NOT NULL,
  `ageyears` int(10) NOT NULL,
  `agemonths` int(10) NOT NULL,
  `visitinterval` varchar(255) NOT NULL,
  `samplehierachy` varchar(255) NOT NULL,
  `requestreason` varchar(255) NOT NULL,
  `spectype` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` float(10,1) DEFAULT NULL,
  `consistency` varchar(255) NOT NULL,
  `peripheralres` varchar(255) NOT NULL,
  `hivstatus` varchar(255) NOT NULL,
  `collector` varchar(255) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colldate` date NOT NULL,
  `colltime` time NOT NULL,
  `rcttech` varchar(255) NOT NULL,
  `rctdate` date NOT NULL,
  `rcttime` time NOT NULL,
  `requester` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `examination` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `storage` int(5) NOT NULL,
  `specstorage` varchar(255) NOT NULL,
  `processdate` date NOT NULL,
  `processtime` time NOT NULL,
  `processtech` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `transportdate` date NOT NULL,
  `transporttime` time NOT NULL,
  `comment` varchar(255) NOT NULL,
  `accessiontime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `accessiontech` varchar(255) NOT NULL,
  `lasteditby` varchar(255) NOT NULL,
  `lastedittime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastreviewer` varchar(255) NOT NULL,
  `lastreviewtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `inoculationdate` date NOT NULL,
  `inoculationtime` time NOT NULL,
  `fm_res` varchar(255),
  `fm_interpretation` varchar(255),
  `fm_comment` varchar(255),
  `fm_tech` varchar(255),
  `fm_date` date,
  `zn_res` varchar(255),
  `zn_interpretation` varchar(255),
  `zn_comment` varchar(255),
  `zn_tech` varchar(255),
  `zn_date` date,
  `gx_res` varchar(255),
  `gx_comment` varchar(255),
  `gx_tech` varchar(255),
  `gx_date` date,
  `culture_interpretation` varchar(255),
  `CL_media` bigint(21) DEFAULT '0',
  `CL_MGIT_dtp` varchar(255) DEFAULT NULL,
  `CL_MGIT_znc` varchar(255) DEFAULT NULL,
  `CL_MGIT_bap` varchar(255) DEFAULT NULL,
  `CL_MGIT_date` varchar(10) DEFAULT NULL,
  `CL_MGIT_tech` varchar(255) DEFAULT NULL,
  `CS_media` bigint(21) DEFAULT '0',
  `CS_LJ_ql` varchar(255) DEFAULT NULL,
  `CS_LJ_sqt` varchar(255) DEFAULT NULL,
  `CS_LJ_qt` varchar(255) DEFAULT NULL,
  `CS_LJ_date` varchar(10) DEFAULT NULL,
  `CS_LJ_tech` varchar(255) DEFAULT NULL,
  `CS_LJ_contdate` varchar(10) DEFAULT NULL,
  `CS_7H11S_ql` varchar(255) DEFAULT NULL,
  `CS_7H11S_sqt` varchar(255) DEFAULT NULL,
  `CS_7H11S_qt` varchar(255) DEFAULT NULL,
  `CS_7H11S_date` varchar(10) DEFAULT NULL,
  `CS_7H11S_tech` varchar(255) DEFAULT NULL,
  `CS_7H11S_contdate` varchar(10) DEFAULT NULL,
  `CB_labno` int(10),
  `CB_media` bigint(21) DEFAULT '0',
  `ID_count` bigint(21) DEFAULT '0',
  `dst1_count` bigint(21) DEFAULT '0',
  `dst2_count` bigint(21) DEFAULT '0',
  `othertest_count` bigint(21) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldatadownload_table`
--

INSERT INTO `alldatadownload_table` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`, `fm_res`, `fm_interpretation`, `fm_comment`, `fm_tech`, `fm_date`, `zn_res`, `zn_interpretation`, `zn_comment`, `zn_tech`, `zn_date`, `gx_res`, `gx_comment`, `gx_tech`, `gx_date`, `culture_interpretation`, `CL_media`, `CL_MGIT_dtp`, `CL_MGIT_znc`, `CL_MGIT_bap`, `CL_MGIT_date`, `CL_MGIT_tech`, `CS_media`, `CS_LJ_ql`, `CS_LJ_sqt`, `CS_LJ_qt`, `CS_LJ_date`, `CS_LJ_tech`, `CS_LJ_contdate`, `CS_7H11S_ql`, `CS_7H11S_sqt`, `CS_7H11S_qt`, `CS_7H11S_date`, `CS_7H11S_tech`, `CS_7H11S_contdate`, `CB_labno`, `CB_media`, `ID_count`, `dst1_count`, `dst2_count`, `othertest_count`) VALUES
(78638, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:47:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:47:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78639, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-14', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:51:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:51:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78640, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Salivary', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:52:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:52:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78641, 'IOM', 166, 'D1700291', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:54:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:54:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78642, '31', 175, '95856', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:55:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:55:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78643, '31', 175, '95856', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '15:00:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:57:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:57:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78644, '31', 176, '96399', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:58:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:58:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78645, '31', 177, '95964', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:00:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:00:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78646, '31', 177, '95964', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:01:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:01:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78647, '31', 178, '95956', 'Not Provided', 'MB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:03:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:03:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78648, '31', 178, '95956', 'Not Provided', 'MB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Mucosalivary', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:05:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:05:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78649, '31', 179, '96172', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:07:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:07:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78650, '31', 179, '96172', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:09:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:09:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78651, '31', 180, '96164', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:11:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:11:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78652, '31', 180, '96164', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:12:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:12:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78653, '31', 181, '96340', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:14:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:14:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78654, '31', 181, '96340', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:16:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:16:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78655, '31', 182, '96335', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:16:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:17:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:17:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78656, '31', 182, '96335', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:18:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:18:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:18:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78657, '31', 183, '96400', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:00:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:20:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:20:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78661, 'B', 186, '443', 'Not Provided', 'LL', 'Lukwago Lubowa', '0000-00-00', 'Male', 'Not Provided', 'Kyengera', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 12.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '12:05:00', '10', '2017-12-18', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-19 11:39:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:39:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78662, 'B', 187, '444', 'Not Provided', 'KR', 'Kirumira Robert', '0000-00-00', 'Male', 'Not Provided', 'Najjanankumbi', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:16:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:16:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78663, 'B', 188, '445', 'Not Provided', 'HN', 'Hadijja Nanyonjo', '0000-00-00', 'Female', 'Not Provided', 'Lumuli Kajjansi', 'Not Provided', 'Not Provided', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:19:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:19:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78664, 'B', 189, '446', 'Not Provided', 'KJ', 'KJ', '0000-00-00', 'Not Provided', 'Not Provided', 'NDIKUTAMADA', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', 'Spot', '2017-12-19', '12:45:00', 'NMJ', '2017-12-20', '09:50:00', '', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:21:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:21:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78665, 'B', 190, '447', 'Not Provided', 'LL', 'Linda Lucy', '0000-00-00', 'Female', 'Not Provided', 'Namugongo', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:45:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:45:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78666, 'B', 191, '448', 'Not Provided', 'AH', 'Achon Hellen', '0000-00-00', 'Female', 'Not Provided', 'Bweygogerere', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:47:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:47:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78667, '31', 192, '96434', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:18:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:49:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:49:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'Scanty', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78668, '31', 193, '96368', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:51:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:51:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78669, '31', 193, '96368', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:52:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:52:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78670, '31', 194, '96344', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:54:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:54:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78671, '31', 194, '96344', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:56:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:56:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78672, '31', 195, '96339', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:58:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:58:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78673, '31', 195, '96339', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:59:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:59:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78674, '31', 196, '95958', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:00:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:00:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78675, '31', 196, '95958', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '11:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:02:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:02:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78676, '31', 197, '96272', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month05', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'FF', '2017-12-20', '11:15:00', '', '2017-12-20 11:05:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:05:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78677, '31', 198, '95851', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:06:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:06:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78678, '31', 198, '95851', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:08:13', '', '', '2017-12-20 11:08:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78679, 'BR', 199, '84290', '1-04', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'Watery', 5.0, '', '', 'Not Provided', 'IS', '', '2017-12-19', '07:52:00', 'AK', '2017-12-19', '15:53:00', '1', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-19', '08:45:00', '', '2017-12-20 11:23:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:23:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78680, 'IOM', 166, 'D1700291', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '10:00:00', '', '2017-12-20 12:38:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:38:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78681, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-20 12:39:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:39:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78682, '31', 201, '95848', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:41:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:41:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78683, '31', 201, '95848', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:44:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:44:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78684, '31', 62, '95959', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:45:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:45:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78685, '31', 62, '95959', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:47:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:47:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 'No AFB seen', '', '', 'MC', '2017-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78686, 'B', 202, '449', 'Not Provided', 'AA', 'AISHA ALI', '0000-00-00', 'Female', 'Not Provided', 'MUYENGA', 'Not Provided', 'Wakiso', '', 19, 0, 'Unknown', '', '', 'Sputum', 'Ms', 2.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-20', '13:00:00', 'MC', '2017-12-20', '15:35:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-21 06:53:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 06:53:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78687, 'BR', 203, '90561', '1-06', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'CLEAR', 5.0, '', '', 'Not Provided', 'IS', 'Spot', '2017-12-21', '07:59:00', 'HS', '2017-12-21', '10:40:00', '', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '08:30:00', '', '2017-12-21 10:42:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:42:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78688, '31', 204, '96436', 'Not Provided', 'DL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:20:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:44:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:44:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78689, '31', 205, '96432', 'Not Provided', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:45:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:45:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:45:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78690, '31', 206, '96337', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:49:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:49:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78691, '31', 206, '96337', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:50:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:50:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78692, '31', 207, '96336', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:53:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:53:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78693, '31', 207, '96336', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:55:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:55:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78694, '31', 106, '95934', 'NOT PROVIDED', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '05:07:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:57:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:57:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78695, '31', 208, '96169', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:58:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:58:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78696, '31', 208, '96169', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:00:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:00:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78697, '31', 209, '95965', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:02:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:02:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `alldatadownload_table` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`, `fm_res`, `fm_interpretation`, `fm_comment`, `fm_tech`, `fm_date`, `zn_res`, `zn_interpretation`, `zn_comment`, `zn_tech`, `zn_date`, `gx_res`, `gx_comment`, `gx_tech`, `gx_date`, `culture_interpretation`, `CL_media`, `CL_MGIT_dtp`, `CL_MGIT_znc`, `CL_MGIT_bap`, `CL_MGIT_date`, `CL_MGIT_tech`, `CS_media`, `CS_LJ_ql`, `CS_LJ_sqt`, `CS_LJ_qt`, `CS_LJ_date`, `CS_LJ_tech`, `CS_LJ_contdate`, `CS_7H11S_ql`, `CS_7H11S_sqt`, `CS_7H11S_qt`, `CS_7H11S_date`, `CS_7H11S_tech`, `CS_7H11S_contdate`, `CB_labno`, `CB_media`, `ID_count`, `dst1_count`, `dst2_count`, `othertest_count`) VALUES
(78698, '31', 209, '95965', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:03:27', '', '', '2017-12-21 11:03:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78699, '31', 210, '95858', 'Not Provided', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '15:09:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:05:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:05:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78700, '31', 210, '95858', 'Not Provided', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '15:09:00', 'MC', '2017-12-21', '11:11:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '15:09:00', '', '2017-12-21 11:09:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:09:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78701, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '10:00:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-21 11:12:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:12:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78702, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:15:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:15:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78703, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:17:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:17:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78704, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:21:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:21:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78705, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:22:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:22:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78706, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:23:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:23:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78707, '31', 61, '96479', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'Sa', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:40:00', 'MC', '2017-12-21', '15:00:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:30:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:30:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78708, '31', 65, '96468', 'Not Provided', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'Ms', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '13:42:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:31:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:31:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78709, '31', 213, '95960', 'Not Provided', 'MT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:33:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:33:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78710, '31', 213, '95960', 'Not Provided', 'MT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:34:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:34:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78711, '31', 103, '96470', 'Not Provided', 'DB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '09:35:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:07:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:07:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78712, '31', 214, '96407', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:10:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:09:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:09:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78713, '31', 215, '96406', 'Not Provided', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MU', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-22', '09:39:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:10:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:10:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78714, '31', 216, '96408', 'Not Provided', 'WK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:00:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:12:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:12:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78715, '31', 217, '96345', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:14:27', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:14:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78716, '31', 217, '96345', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:19:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:19:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78717, '31', 218, '96342', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:20:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:20:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78718, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 09:57:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:57:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78719, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 09:59:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:59:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78720, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:03:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:03:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78721, 'IOM', 219, 'F17001034', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month04', '', '', 'Sputum', 'MS', 10.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '00:00:00', '', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:04:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:08:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78722, 'IOM', 219, 'F17001034', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month01', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:06:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:06:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78723, 'IOM', 220, 'F17001553', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:09:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:09:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78724, 'IOM', 220, 'F17001553', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:12:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:12:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78725, 'IOM', 221, 'F17001622', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:13:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:13:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78726, 'IOM', 221, 'F17001622', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:15:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:15:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78727, '31', 218, '96342', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:16:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:16:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78728, '31', 222, '96343', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:18:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:18:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78729, '31', 222, '96343', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:20:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:20:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78730, '31', 223, '96297', 'Not Provided', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:21:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:21:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78731, '31', 223, '96297', 'Not Provided', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:22:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:22:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alldatadownload_view`
--
-- in use(#1356 - View 'tblis_jcrc.alldatadownload_view' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)
-- in use (#1356 - View 'tblis_jcrc.alldatadownload_view' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `collectors`
--

CREATE TABLE IF NOT EXISTS `collectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `contact` varchar(70) NOT NULL,
  `status` varchar(15) NOT NULL,
  `initials` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `collectors`
--

INSERT INTO `collectors` (`id`, `name`, `contact`, `status`, `initials`) VALUES
(15, 'EDWARD', 'IOM', 'Active', 'EH'),
(16, 'SELF', '', 'Active', ''),
(25, 'VK', 'Case-Mulago', 'Active', 'VK'),
(26, 'Sarah IOM', '', 'Active', 'SI'),
(27, 'RN', 'Case-Mulago', 'Active', 'RN'),
(28, 'SM', 'Case-Mulago', 'Active', 'SM'),
(29, 'TM', 'Case-Mulago', 'Active', 'TM'),
(30, 'GN', 'Case-Mulago', 'Active', 'GN'),
(31, 'Moses', 'IOM', 'Active', 'MM'),
(32, 'IS', 'Case-Mulago', 'Active', 'IS');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `description`, `status`) VALUES
(1, 'MICROSCOPY RESULTS REPORTED AFTER REPEAT', 'MICROSCOPY RESULTS REPORTED AFTER REPEAT', ''),
(2, 'PLEASE EXPECT 2ND LINE DST RESULTS', 'PLEASE EXPECT 2ND LINE DST RESULTS', ''),
(3, 'LPA TO BE REPEATED FOLLOWING POSITIVE CULTURE', 'LPA TO BE REPEATED FOLLOWING POSITIVE CULTURE', 'Active'),
(4, 'MTB DETECTED VERY LOW', 'MTB DETECTED VERY LOW', 'Active'),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_samples`
--

CREATE TABLE IF NOT EXISTS `deleted_samples` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL COMMENT 'Unique Lab number',
  `studycode` varchar(10) NOT NULL COMMENT 'studycode',
  `patient` int(10) NOT NULL COMMENT 'patients table key',
  `rejectionreason` varchar(255) NOT NULL,
  `spectype` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` int(10) NOT NULL,
  `collector` varchar(255) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colldate` date NOT NULL,
  `rcttech` varchar(255) NOT NULL,
  `rctdate` date NOT NULL,
  `requester` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `examination` varchar(255) NOT NULL,
  `specstorage` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `transportdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `accessiontech` varchar(255) NOT NULL,
  `deletiondate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`) VALUES
(1, 'Abim'),
(2, 'Adjumani'),
(3, 'Agago'),
(4, 'Alebtong'),
(5, 'Amolatar'),
(6, 'Amudat'),
(7, 'Amuria'),
(8, 'Amuru'),
(9, 'Apac'),
(10, 'Arua'),
(11, 'Budaka'),
(12, 'Bududa'),
(13, 'Bugiri'),
(14, 'Buikwe'),
(15, 'Bukedea'),
(16, 'Bukomansimbi'),
(17, 'Bukwo'),
(18, 'Bulambuli'),
(19, 'Buliisa'),
(20, 'Bundibugyo'),
(21, 'Bushenyi'),
(22, 'Busia'),
(23, 'Butaleja'),
(24, 'Butambala'),
(25, 'Buvuma'),
(26, 'Buyende'),
(27, 'Dokolo'),
(30, 'Gomba'),
(31, 'Gulu'),
(32, 'Hoima'),
(33, 'Ibanda'),
(34, 'Iganga'),
(35, 'Isingiro'),
(36, 'Jinja'),
(37, 'Kaabong'),
(38, 'Kabale'),
(39, 'Kabarole'),
(40, 'Kaberamaido'),
(41, 'Kalangala'),
(42, 'Kaliro'),
(43, 'Kalungu'),
(44, 'Kampala'),
(45, 'Kamuli'),
(46, 'Kamwenge'),
(47, 'Kanungu'),
(48, 'Kapchorwa'),
(49, 'Kasese'),
(50, 'Katakwi'),
(51, 'Kayunga'),
(53, 'Kibaale'),
(54, 'Kiboga'),
(55, 'Kibuku'),
(56, 'Kiruhura'),
(57, 'Kiryandongo'),
(58, 'Kisoro'),
(59, 'Kitgum'),
(61, 'Koboko'),
(62, 'Kole'),
(63, 'Kotido'),
(64, 'Kumi'),
(65, 'Kween'),
(66, 'Kyankwanzi'),
(67, 'Kyegegwa'),
(68, 'Kyenjojo'),
(69, 'Lamwo'),
(70, 'Lira'),
(71, 'Luuka'),
(72, 'Luweero'),
(73, 'Lwengo'),
(74, 'Lyantonde'),
(75, 'Manafwa'),
(76, 'Maracha'),
(77, 'Masaka'),
(78, 'Masindi'),
(79, 'Mayuge'),
(80, 'Mbale'),
(81, 'Mbarara'),
(82, 'Mitooma'),
(83, 'Mityana'),
(84, 'Moroto'),
(85, 'Moyo'),
(86, 'Mpigi'),
(87, 'Mubende'),
(88, 'Mukono'),
(89, 'Nakapiripirit'),
(90, 'Nakaseke'),
(91, 'Nakasongola'),
(92, 'Namayingo'),
(93, 'Namutumba'),
(94, 'Napak'),
(95, 'Nebbi'),
(96, 'Ngora'),
(98, 'Ntoroko'),
(99, 'Ntungamo'),
(100, 'Nwoya'),
(101, 'Otuke'),
(102, 'Oyam'),
(103, 'Pader'),
(104, 'Pallisa'),
(105, 'Rakai'),
(106, 'Rubirizi'),
(107, 'Rukungiri'),
(109, 'Ssembabule'),
(110, 'Serere'),
(111, 'Sheema'),
(112, 'Sironko'),
(114, 'Soroti'),
(116, 'Tororo'),
(117, 'Wakiso'),
(118, 'Yumbe'),
(119, 'Zombo'),
(120, 'Buhweju'),
(121, 'Wakiso');

-- --------------------------------------------------------

--
-- Table structure for table `footersettings`
--

CREATE TABLE IF NOT EXISTS `footersettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `align` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `footersettings`
--

INSERT INTO `footersettings` (`id`, `content`, `type`, `align`) VALUES
(1, 'No AFB Observed      =   No AFB in one length', 'line1', 'left'),
(2, 'Confirmation required=1-2 AFB in one length', 'line2', 'left'),
(3, 'Scanty=3-24 AFB in one length', 'line3', 'left'),
(4, '1+=1-6 AFB in one field', 'line4', 'left'),
(5, '2+ = 7-60 AFB in one field', 'line5', 'left'),
(6, '3+ = > 60 AFB in one field', 'line6', 'left'),
(7, '', 'line7', 'left'),
(8, 'Ziehl Neelsen Ziehl Neelsen stain at 100 X', 'line8', 'left'),
(9, 'AFB Present or No AFB Seen', 'line9', 'left'),
(10, 'Quantitative AFB smearAuramine-Rhodamine stain at 400 X log AFB/mL sputum', 'line10', 'left'),
(11, 'Cultures', 'line11', 'left'),
(12, 'LJ/ 7H10/7H11 selective and non-selective media Semi-quantitative: (WHO / GLI Grading Scale)', 'line12', 'left'),
(13, 'No growth = None ', 'line13', 'left'),
(14, 'Actual number = 1', 'line14', 'left'),
(15, '2+ = >100-200 colonies', 'line15', 'left'),
(16, '3+ = > 200 colonies (too numerous to count or confluent)', 'line16', 'left'),
(17, 'Positive for other mycobacteria = Other mycobacterial growth', 'line17', 'left'),
(18, 'Contaminated = Contaminated', 'line18', 'left'),
(19, 'MGIT 960, or BACTEC 9120: ', 'line19', 'left'),
(20, 'Days to detection of growth or No growth after six weeks', 'line20', 'left'),
(21, 'Genexpert', 'line21', 'left'),
(22, 'MTB DETECTED (VERY LOW/LOW/MEDIUM/HIGH) = M. tuberculosis Complex', 'line22', 'left'),
(23, 'MTB NOT DETECTED= M. tuberculosis Complex, Negative', 'line23', 'left'),
(24, 'Rif Resistance DETECTED= Resistance to Rifampicin', 'line24', 'left'),
(25, 'Rif Resistance NOT DETECTED= No Resistance to Rifampicin', 'line25', 'left'),
(26, 'Rif Resistance INDETERMINATE=No Result', 'line26', 'left'),
(27, '', 'line27', 'left'),
(28, '', 'line28', 'left'),
(29, '', 'line29', 'left'),
(30, '', 'line30', 'left'),
(31, '', 'line31', 'left'),
(32, '', 'line32', 'left'),
(33, '', 'line33', 'left');

-- --------------------------------------------------------

--
-- Table structure for table `globals`
--

CREATE TABLE IF NOT EXISTS `globals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labname` varchar(255) NOT NULL,
  `installstatus` varchar(255) NOT NULL,
  `installdate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `identification_method`
--

CREATE TABLE IF NOT EXISTS `identification_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL,
  `code` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `identification_method`
--

INSERT INTO `identification_method` (`id`, `name`, `status`, `code`) VALUES
(1, 'Hain Genotype Assay', 'Active', 'HAIN'),
(2, 'Polymerase Chain Reaction', 'Active', 'PCR'),
(3, 'Capilia/MPB64', 'Active', 'MPB64'),
(4, '16s rRNA', 'Active', '16s rRNA'),
(5, 'SD TB Ag MPT 64', 'Active', 'SD TB Ag MPT');

-- --------------------------------------------------------

--
-- Table structure for table `option_appearance`
--

CREATE TABLE IF NOT EXISTS `option_appearance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueCode` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `option_appearance`
--

INSERT INTO `option_appearance` (`id`, `code`, `name`, `status`) VALUES
(2, 'Bly', 'Bloody', 'Active'),
(3, 'BR', 'Brown', 'Active'),
(4, 'MU', 'Mucoid', 'Active'),
(5, 'MP', 'Mucopurulent', 'Active'),
(6, 'MS', 'Mucosalivary', 'Active'),
(7, 'UN', 'Not indicated', 'Active'),
(8, 'PU', 'Purulent', 'Active'),
(9, 'SA', 'Salivary', 'Active'),
(10, 'CO', 'See Comment', 'Active'),
(11, 'PB', 'Mucopurulent / Bloody', 'Active'),
(12, 'BL', 'Blood', 'Active'),
(13, 'CC', 'Clear and colourless', 'Active'),
(14, 'TD', 'Turbid', 'Active'),
(15, 'YE', 'Yellow', 'Active'),
(16, 'ST', 'Straw', 'Active'),
(17, 'PK', 'Pink', 'Active'),
(18, 'AM', 'Amber', 'Active'),
(19, 'YT', 'Yellow and Turbid', 'Active'),
(20, 'CL', 'Cloudy', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `option_collmethod`
--

CREATE TABLE IF NOT EXISTS `option_collmethod` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `option_collmethod`
--

INSERT INTO `option_collmethod` (`id`, `code`, `name`, `status`) VALUES
(1, 'SP', 'Spot', 'Active'),
(3, 'EM', 'Early Morning', 'Active'),
(4, 'PL', 'Overnight/Pooled', 'Active'),
(5, 'OT', 'Other', 'Active'),
(6, 'UN', 'Not Indicated', 'Active'),
(7, 'IN', 'Induced Sputum', 'Active'),
(8, 'CS', 'CASS', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `option_consistency`
--

CREATE TABLE IF NOT EXISTS `option_consistency` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `option_consistency`
--

INSERT INTO `option_consistency` (`id`, `name`, `status`) VALUES
(3, 'Mucosalivary', 'Active'),
(4, 'Mucopurulent', 'Active'),
(5, 'Mucoid', 'Active'),
(6, 'Salivary', 'Active'),
(7, 'Purulent', 'Active'),
(8, 'Not Indicated', 'Active'),
(9, 'Formed', 'Active'),
(10, 'Semi Formed', 'Active'),
(11, 'Loose', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `option_dstdrugs1`
--

CREATE TABLE IF NOT EXISTS `option_dstdrugs1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `option_dstdrugs1`
--

INSERT INTO `option_dstdrugs1` (`id`, `code`, `name`) VALUES
(5, 'streptomycin', 'Streptomycin'),
(6, 'isoniazid', 'Isoniazid'),
(7, 'rifampicin', 'Rifampicin'),
(8, 'ethambutol', 'Ethambutol'),
(9, 'pyrazinamide', 'Pyrazinamide');

-- --------------------------------------------------------

--
-- Table structure for table `option_dstdrugs2`
--

CREATE TABLE IF NOT EXISTS `option_dstdrugs2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `option_dstdrugs2`
--

INSERT INTO `option_dstdrugs2` (`id`, `code`, `name`) VALUES
(4, 'kanamycin', 'Kanamycin'),
(5, 'ofloxacin', 'Ofloxacin'),
(6, 'capreomycin', 'Capreomycin'),
(7, 'psa', 'PSA'),
(8, 'ethionamide', 'Ethionamide'),
(9, 'amikacin', 'Amikacin');

-- --------------------------------------------------------

--
-- Table structure for table `option_dstmethods`
--

CREATE TABLE IF NOT EXISTS `option_dstmethods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`,`category`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `option_dstmethods`
--

INSERT INTO `option_dstmethods` (`id`, `code`, `name`, `category`, `type`, `status`) VALUES
(1, 'LJ', 'LJ', 'dst1', 'Phenotypic', 'CLOSED'),
(2, 'MGIT', 'MGIT', 'dst1', 'Genotypic', 'Active'),
(3, 'LJ', 'LJ', 'dst2', 'Phenotypic', 'Active'),
(4, 'MGIT', 'MGIT', 'dst2', 'Genotypic', 'CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `option_examination`
--

CREATE TABLE IF NOT EXISTS `option_examination` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `option_examination`
--

INSERT INTO `option_examination` (`id`, `code`, `name`, `status`, `tat`) VALUES
(1, 'fm', 'Microscopy FM', 'Active', 2),
(2, 'zn', 'Microscopy ZN', 'Active', 1),
(3, 'genexpert', 'Genexpert', 'Active', 0),
(4, 'identification', 'Identification', 'Active', 8),
(5, 'solidculture', 'Solid Culture', 'Active', 0),
(6, 'liquidculture', 'Liquid Culture', 'Active', 0),
(7, 'bloodculture', 'Blood Culture', 'Active', 49),
(8, 'dst1', 'DST - 1st Line', 'Active', 0),
(9, 'dst2', 'DST - 2nd line', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `option_examination_others`
--

CREATE TABLE IF NOT EXISTS `option_examination_others` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tat` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `option_identification`
--

CREATE TABLE IF NOT EXISTS `option_identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `option_identification_methods`
--

CREATE TABLE IF NOT EXISTS `option_identification_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(12) NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `option_identification_methods`
--

INSERT INTO `option_identification_methods` (`id`, `name`, `status`, `code`) VALUES
(5, 'BD', 'Active', 'BD'),
(6, 'SD', 'Active', 'SD'),
(7, 'Polymerase Chain Reaction', 'Active', 'PCR'),
(8, 'ZN Smear', 'Active', 'ZN'),
(9, 'Capilia', 'Active', 'Capilia'),
(10, 'HAIN', 'Active', 'HAIN'),
(11, 'Real Time Polymerase Chain Reaction', 'Active', 'QQT-PCR'),
(12, 'Polymerase Chain Reaction (RD Analysis)', 'Active', 'PCR (RD Analysi'),
(13, 'Genexpert', 'Active', 'Genexpert'),
(14, 'Standard Diagonostic Kit', 'Active', 'SD TBAgMPT64');

-- --------------------------------------------------------

--
-- Table structure for table `option_media`
--

CREATE TABLE IF NOT EXISTS `option_media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `option_media`
--

INSERT INTO `option_media` (`id`, `code`, `name`, `category`, `status`) VALUES
(1, 'LJ', 'LJ', 'Solid Culture', 'Active'),
(2, 'LJS', 'LJS', 'Solid Culture', 'Active'),
(3, '7H10', '7H10', 'Solid Culture', 'Active'),
(4, '7H10S', '7H10S', 'Solid Culture', 'Active'),
(5, '7H11', '7H11', 'Solid Culture', 'Active'),
(6, '7H11S', '7H11S', 'Solid Culture', 'Active'),
(7, 'MGIT', 'MGIT', 'Liquid Culture', 'Active'),
(8, '12B', '12B', 'Liquid Culture', 'Active'),
(9, '7H9', '7H9', 'Solid Culture', 'Active'),
(10, '7H9S', '7H9S', 'Solid Culture', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `option_spectype`
--

CREATE TABLE IF NOT EXISTS `option_spectype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `option_spectype`
--

INSERT INTO `option_spectype` (`id`, `code`, `name`, `status`) VALUES
(66, 'BL', 'Blood', 'Active'),
(67, 'BW', 'Bronchial washing', 'Active'),
(68, 'CA', 'Cough aerosol', 'Active'),
(69, 'CO', 'See comments', 'Active'),
(70, 'GA', 'Gastric aspirate', 'Active'),
(71, 'GL', 'Gastric lavage', 'Active'),
(72, 'IS', 'Isolate', 'Active'),
(73, 'PB', 'Pleural biopsy', 'Active'),
(74, 'PF', 'Pleural fluid', 'Active'),
(75, 'PS', 'Pus', 'Active'),
(76, 'SP', 'Sputum', 'Active'),
(77, 'CSF', 'Cerebral Spinal Fluid', 'Active'),
(78, 'LN', 'Lymph Node Aspirate', 'Active'),
(79, 'UN', 'Unknown/Not indicated', 'Active'),
(80, 'PEF', 'Peritoneal Fluid', 'Active'),
(81, 'BAA', 'BCG Abscess Aspirate', 'Active'),
(82, 'BAL', 'Bronchoalveolar Lavage', 'Active'),
(83, 'BMA', 'Born Marrow Aspirate', 'Active'),
(84, 'TW', 'Tracheal Wash', 'Active'),
(85, 'AA', 'Ascitic Aspirate', 'Active'),
(86, 'SA', 'Saliva', 'Active'),
(87, 'BA', 'Bronchial Aspirate', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` varchar(255) NOT NULL,
  `pid_other` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `pinitials` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `subcounty` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `pid`, `pid_other`, `study`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`) VALUES
(1, '96282', 'Not Provided', '31', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(2, '96413', 'Not Provided', '31', 'JO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(3, '96409', 'Not Provided', '31', 'KA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(4, '96379', 'Not Provided', '31', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(5, '96377', 'Not Provided', '31', 'YK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(6, '96267', 'Not Provided', '31', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(7, '96285', 'Not Provided', '31', 'PW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(8, '96305', 'Not Provided', '31', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(9, '96271', 'Not Provided', '31', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(10, '96035', 'Not Provided', '31', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(11, '95941', 'Not Provided', '31', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(12, '422', 'Not Provided', 'B', 'NH', 'Najjingo Hadija', '0000-00-00', 'Female', 'Not Provided', 'Bunamwaya', 'Not Provided', 'Wakiso'),
(13, '423', 'Not Provided', 'B', 'BB', 'BIRUNGI BEN', '0000-00-00', 'Male', 'Not Provided', 'NANA', 'Not Provided', 'Wakiso'),
(14, '96329', 'Not Provided', '31', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(15, '96128', 'Not Provided', '31', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(16, '96474', 'Not Provided', '31', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(17, '95938', 'Not Provided', '31', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(18, 'D1700276', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(19, 'D1700275', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(20, '424', 'Not Provided', 'B', 'MB', 'Mwebe Badru', '0000-00-00', 'Male', 'Not Provided', 'Ndejje', 'Not Provided', 'Wakiso'),
(21, '425', 'Not Provided', 'B', 'KA', 'Kafuma Anold', '0000-00-00', 'Male', 'Not Provided', 'Mutundwe', 'Not Provided', 'Wakiso'),
(22, '96446', 'Not Provided', '31', 'WN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(23, '96040', 'Not Provided', '31', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(24, '96356', 'Not Provided', '31', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(25, '96131', 'Not Provided', '31', 'PK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(26, '96042', 'Not Provided', '31', 'PA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(27, '95933', 'Not Provided', '31', 'TN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(28, 'D1700277', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(29, 'F17001531', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(30, '96449', 'Not Provided', '31', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(31, '96381', 'Not Provided', '31', 'JJ', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(32, '96382', 'Not Provided', '31', 'RK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(33, '96142', 'Not Provided', '31', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(34, '96043', 'Not Provided', '31', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(35, '96029', 'Not Provided', '31', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(36, '96429', 'Not Provided', 'SC', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(37, '96140', 'Not Provided', '31', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(38, '96451', 'Not Provided', '31', 'JA', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(39, '96415', 'Not Provided', '31', 'JL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(40, '96414', 'Not Provided', '31', 'WM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(41, '96383', 'Not Provided', '31', 'FM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(42, '96384', 'Not Provided', '31', 'LG', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(43, '96041', 'Not Provided', '31', 'CW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(44, '426', 'Not Provided', 'B', 'AB', 'ARINDA BERYL', '0000-00-00', 'Female', 'Not Provided', 'NALUMUNYE', 'Not Provided', 'Wakiso'),
(45, 'D1700278', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(46, '96154', 'Not Provided', '31', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(47, '96144', 'Not Provided', '31', 'GN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(48, '96278', 'Not Provided', '31', 'PO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(49, '96455', 'Not Provided', '31', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(50, '96385', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(51, '96311', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(52, '96314', 'Not Provided', '31', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(53, '96306', 'Not Provided', '31', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(54, '96276', 'Not Provided', '31', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(55, '96279', 'Not Provided', '31', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(56, 'D1700279', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(57, '427', 'Not Provided', 'B', 'IN', 'Irene Nakacwa', '0000-00-00', 'Female', 'Not Provided', 'Luwafu Salaama', 'Makindye', 'Wakiso'),
(58, '428', 'Not Provided', 'B', 'TA', 'TUGABIRWE ANNET', '0000-00-00', 'Female', 'Not Provided', 'Nankyinga Zana', 'Not Provided', 'Wakiso'),
(59, '429', 'Not Provided', 'B', 'SK', 'SSALONGO KATALIKABBE', '0000-00-00', 'Male', 'Not Provided', 'Not Provided', 'Not Provided', 'Wakiso'),
(60, '430', 'Not Provided', 'B', 'SJ', 'Sentenza James', '0000-00-00', 'Not Provided', 'Not Provided', 'Bweyogerere', 'Not Provided', 'Wakiso'),
(61, '96479', 'Not Provided', '31', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(62, '95959', 'Not Provided', '31', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(63, '96454', 'Not Provided', '31', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(64, 'D1700280', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(65, '96468', 'Not Provided', '31', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(66, '96453', 'Not Provided', '31', 'BK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(67, '96387', 'Not Provided', '31', 'GM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(68, '96389', 'Not Provided', '31', 'AB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(69, '96388', 'Not Provided', '31', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(70, '96310', 'Not Provided', '31', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(71, '96312', 'Not Provided', '31', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(72, '96145', 'Not Provided', '31', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(73, '96146', 'Not Provided', '31', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(74, '96047', 'Not Provided', '31', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(75, '96048', 'Not Provided', '31', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(76, '96045', 'Not Provided', '31', 'HN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(77, '96050', 'Not Provided', '31', 'LN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(78, '95943', 'Not Provided', '31', 'VM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(79, '95839', 'Not Provided', '31', 'CA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(80, '96149', 'Not Provided', '31', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(81, '96148', 'Not Provided', '31', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(82, '96046', 'Not Provided', '31', 'AU', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(83, '95947', 'Not Provided', '31', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(84, '95836', 'Not Provided', '31', 'SZ', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(85, '95924', 'Not Provided', '31', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(86, '95834', 'Not Provided', '31', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(87, '431', 'Not Provided', 'B', 'KC', 'Kasibante Charles', '0000-00-00', 'Male', 'Not Provided', 'Mukaga', 'Not Provided', 'Wakiso'),
(88, '432', 'Not Provided', 'B', 'SM', 'SHALOM MUTABAZI', '0000-00-00', 'Male', 'Not Provided', 'KITENDA', 'Not Provided', 'Wakiso'),
(89, '433', 'Not Provided', 'B', 'NF', 'NABUKENYA FATUMA', '0000-00-00', 'Female', 'Not Provided', 'Kalisizo', 'Not Provided', 'Wakiso'),
(90, 'D1700281', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(91, 'D1700282', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(92, 'D1700283', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(93, 'D1700284', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(94, 'F17000497', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(95, 'F17000744', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(96, '96457', 'Not Provided', '31', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(97, '96420', 'Not Provided', '31', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(98, '96284', 'Not Provided', '31', 'PM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(99, '96152', 'Not Provided', '31', 'KK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(100, '96141', 'Not Provided', '31', 'ET', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(101, '96156', 'Not Provided', '31', 'DS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(102, '96155', 'Not Provided', '31', 'WN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(103, '96470', 'Not Provided', '31', 'DB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(104, '96150', 'Not Provided', '31', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(105, '95949', 'Not Provided', '31', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(106, '95934', 'NOT PROVIDED', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(107, '96460', 'Not Provided', '31', 'ZN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(108, '96459', 'Not Provided', '31', 'KM', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(109, '96458', 'Not Provided', '31', 'CA', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(110, '96316', 'Not Provided', '31', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(111, '434', 'Not Provided', 'B', 'NH', 'Nuwagaba Henry', '0000-00-00', 'Male', 'Not Provided', 'Zana', 'Not Provided', 'Wakiso'),
(112, '435', 'Not Provided', 'B', 'CT', 'Charity Tumusiime', '0000-00-00', 'Female', 'Not Provided', 'Kabale', 'Not Provided', 'Kabale'),
(113, '96462', 'Not Provided', '31', 'BD', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(114, '96392', 'Not Provided', '31', 'GA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(115, '96318', 'Not Provided', '31', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(116, '96320', 'Not Provided', '31', 'AA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(117, '95844', 'Not Provided', '31', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(118, '95842', 'Not Provided', '31', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(119, '96124', 'Not Provided', '31', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(120, 'D1700285', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(121, 'D1700286', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(122, '96283', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(123, '96017', 'Not Provided', '31', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(124, '96421', 'Not Provided', '31', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(125, '436', 'Not Provided', 'B', 'JS', 'Joakim Ssekibala', '0000-00-00', 'Male', 'Not Provided', 'Sseguku', 'Not Provided', 'Wakiso'),
(126, 'D1700287', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(127, 'D1700288', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(128, 'D1700289', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(129, '84218', '1-05', 'BR', 'YN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(130, '96461', 'Not Provided', '31', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(131, '96423', 'Not Provided', '31', 'JL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(132, '96425', 'Not Provided', '31', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(133, '96422', 'Not Provided', '31', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(134, '96424', 'Not Provided', '31', 'BT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(135, '96393', 'Not Provided', '31', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(136, '96398', 'Not Provided', '31', 'CE', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(137, '96323', 'Not Provided', '31', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(138, '96289', 'Not Provided', '31', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(139, '96287', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(140, '95952', 'Not Provided', '31', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(141, '437', 'Not Provided', 'B', 'EK', 'Epharance Kekirabo', '0000-00-00', 'Female', 'Not Provided', 'Bweygogrere', 'Not Provided', 'Wakiso'),
(142, '438', 'Not Provided', 'B', 'SG', 'Seguya George Matthew', '0000-00-00', 'Male', 'Not Provided', 'Mumpejje JJungo', 'Not Provided', 'Wakiso'),
(143, '96322', 'Not Provided', '31', 'BN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(144, '739', 'Not Provided', 'B', 'TS', 'Taaka Sylivia', '0000-00-00', 'Female', 'Not Provided', 'Kajjansi', 'Not Provided', 'Wakiso'),
(145, '96290', 'Not Provided', '31', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(146, '95962', 'Not Provided', '31', 'DH', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(147, '95950', 'Not Provided', '31', 'EN', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(148, '95954', 'Not Provided', '31', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(149, '95951', 'Not Provided', '31', 'FM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(150, '95953', 'Not Provided', '31', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(151, 'UGKLA0106005597', 'Not Provided', 'IOM', 'MK', 'Muhamed Mukisa', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(152, '440', 'Not Provided', 'B', 'NJ', 'Namugwanya Janat', '0000-00-00', 'Not Provided', 'Not Provided', 'Nabingo', 'Not Provided', 'Wakiso'),
(153, '441', 'Not Provided', 'B', 'NP', 'Nampijja Prossy', '0000-00-00', 'Female', 'Not Provided', 'Sseguku', 'Not Provided', 'Wakiso'),
(154, '96426', 'Not Provided', '31', 'VN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(155, '96286', 'Not Provided', '31', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(156, '95845', 'Not Provided', '31', 'SL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(157, '95925', 'Not Provided', '31', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(158, '95846', 'Not Provided', '31', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(159, '95473', 'Not Provided', '31', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(160, '96325', 'Not Provided', '31', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(161, '95847', 'Not Provided', '31', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(162, '96292', 'Not Provided', '31', 'PW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(163, '96328', 'Not Provided', '31', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(164, '96163', 'Not Provided', '31', 'AO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(165, 'D1700290', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(166, 'D1700291', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(167, '96430', 'Not Provided', '31', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(168, '96428', 'Not Provided', '31', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(169, '96431', 'Not Provided', '31', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(170, '96165', 'Not Provided', '31', 'PS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(171, '95955', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(172, '95860', 'Not Provided', '31', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(173, '442', 'Not Provided', 'B', 'NJ', 'Nabulya Jane', '0000-00-00', 'Female', 'Not Provided', 'Bulebga', 'Not Provided', 'Wakiso'),
(174, 'D1700292', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(175, '95856', 'Not Provided', '31', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(176, '96399', 'Not Provided', '31', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(177, '95964', 'Not Provided', '31', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(178, '95956', 'Not Provided', '31', 'MB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(179, '96172', 'Not Provided', '31', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(180, '96164', 'Not Provided', '31', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(181, '96340', 'Not Provided', '31', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(182, '96335', 'Not Provided', '31', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(183, '96400', 'Not Provided', '31', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(184, '96090', 'Not Provided', '31', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(185, '95852', 'Not Provided', '31', 'VS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(186, '443', 'Not Provided', 'B', 'LL', 'Lukwago Lubowa', '0000-00-00', 'Male', 'Not Provided', 'Kyengera', 'Not Provided', 'Wakiso'),
(187, '444', 'Not Provided', 'B', 'KR', 'Kirumira Robert', '0000-00-00', 'Male', 'Not Provided', 'Najjanankumbi', 'Not Provided', 'Wakiso'),
(188, '445', 'Not Provided', 'B', 'HN', 'Hadijja Nanyonjo', '0000-00-00', 'Female', 'Not Provided', 'Lumuli Kajjansi', 'Not Provided', 'Not Provided'),
(189, '446', 'Not Provided', 'B', 'KJ', 'KJ', '0000-00-00', 'Not Provided', 'Not Provided', 'NDIKUTAMADA', 'Not Provided', 'Wakiso'),
(190, '447', 'Not Provided', 'B', 'LL', 'Linda Lucy', '0000-00-00', 'Female', 'Not Provided', 'Namugongo', 'Not Provided', 'Wakiso'),
(191, '448', 'Not Provided', 'B', 'AH', 'Achon Hellen', '0000-00-00', 'Female', 'Not Provided', 'Bweygogerere', 'Not Provided', 'Wakiso'),
(192, '96434', 'Not Provided', '31', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(193, '96368', 'Not Provided', '31', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(194, '96344', 'Not Provided', '31', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(195, '96339', 'Not Provided', '31', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(196, '95958', 'Not Provided', '31', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(197, '96272', 'Not Provided', '31', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(198, '95851', 'Not Provided', '31', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(199, '84290', '1-04', 'BR', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(200, 'D1700293', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(201, '95848', 'Not Provided', '31', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(202, '449', 'Not Provided', 'B', 'AA', 'AISHA ALI', '0000-00-00', 'Female', 'Not Provided', 'MUYENGA', 'Not Provided', 'Wakiso'),
(203, '90561', '1-06', 'BR', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(204, '96436', 'Not Provided', '31', 'DL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(205, '96432', 'Not Provided', '31', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(206, '96337', 'Not Provided', '31', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(207, '96336', 'Not Provided', '31', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(208, '96169', 'Not Provided', '31', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(209, '95965', 'Not Provided', '31', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(210, '95858', 'Not Provided', '31', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(211, 'D1700294', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(212, 'D1700295', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(213, '95960', 'Not Provided', '31', 'MT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(214, '96407', 'Not Provided', '31', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(215, '96406', 'Not Provided', '31', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(216, '96408', 'Not Provided', '31', 'WK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(217, '96345', 'Not Provided', '31', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(218, '96342', 'Not Provided', '31', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(219, 'F17001034', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided'),
(220, 'F17001553', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(221, 'F17001622', 'Not Provided', 'IOM', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(222, '96343', 'Not Provided', '31', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(223, '96297', 'Not Provided', '31', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided'),
(224, '', 'Not Provided', '', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided');

-- --------------------------------------------------------

--
-- Table structure for table `physical_count`
--

CREATE TABLE IF NOT EXISTS `physical_count` (
  `count_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(120) NOT NULL,
  `initial_qty` bigint(30) NOT NULL,
  `physical_qty` bigint(30) NOT NULL,
  `date_count` date NOT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`count_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `physical_count`
--

INSERT INTO `physical_count` (`count_id`, `product_id`, `initial_qty`, `physical_qty`, `date_count`, `reason`) VALUES
(7, 1, 21, 20, '2017-03-09', 'physical quantity');

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE IF NOT EXISTS `products_list` (
  `item_id` int(255) NOT NULL AUTO_INCREMENT,
  `product` varchar(200) NOT NULL,
  `minimum` int(20) NOT NULL,
  `maximum` int(20) NOT NULL,
  `measures` varchar(90) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`item_id`, `product`, `minimum`, `maximum`, `measures`) VALUES
(1, 'Paper', 40, 89, 'Rims'),
(2, 'Stump Ink', 30, 50, ''),
(3, 'Fingure towels', 12, 20, 'Pieces');

-- --------------------------------------------------------

--
-- Table structure for table `qc_phosphatebuffer`
--

CREATE TABLE IF NOT EXISTS `qc_phosphatebuffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lotno` varchar(20) NOT NULL,
  `performedby` varchar(50) NOT NULL,
  `reviewedby` varchar(50) NOT NULL,
  `expdate` date NOT NULL,
  `qcpassfail` varchar(100) NOT NULL,
  `reviewdate` date NOT NULL,
  `performeddate` date NOT NULL,
  `comment` text NOT NULL,
  `prepdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qc_sodiumhydro_nitrate`
--

CREATE TABLE IF NOT EXISTS `qc_sodiumhydro_nitrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lotno` varchar(20) NOT NULL,
  `performedby` varchar(50) NOT NULL,
  `reviewedby` varchar(50) NOT NULL,
  `expdate` date NOT NULL,
  `qcpassfail` varchar(100) NOT NULL,
  `reviewdate` date NOT NULL,
  `performeddate` date NOT NULL,
  `comment` text NOT NULL,
  `prepdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rejected_samples`
--

CREATE TABLE IF NOT EXISTS `rejected_samples` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Unique Lab number',
  `studycode` varchar(10) NOT NULL COMMENT 'studycode',
  `patient` int(10) NOT NULL COMMENT 'patients table key',
  `requestreason` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` int(10) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colltime` time NOT NULL,
  `colldate` date NOT NULL,
  `rctdate` date NOT NULL,
  `rcttime` time NOT NULL,
  `requester` varchar(255) NOT NULL,
  `reject_reason` varchar(255) NOT NULL,
  `rejected_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rejected_samples`
--

INSERT INTO `rejected_samples` (`id`, `studycode`, `patient`, `requestreason`, `appearance`, `volume`, `collmethod`, `colltime`, `colldate`, `rctdate`, `rcttime`, `requester`, `reject_reason`, `rejected_by`, `status`) VALUES
(1, '31', 382, '', '', 0, '', '00:00:00', '0000-00-00', '0000-00-00', '00:00:00', '', '', 'Deborah Banturaki', ''),
(2, '', 181, '', '', 0, '', '00:00:00', '0000-00-00', '0000-00-00', '00:00:00', '', '', 'Deborah Banturaki', '');

-- --------------------------------------------------------

--
-- Table structure for table `rejection_reason`
--

CREATE TABLE IF NOT EXISTS `rejection_reason` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reason` varchar(255) NOT NULL,
  `status` varchar(150) NOT NULL,
  `rejreason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reportcontacts`
--

CREATE TABLE IF NOT EXISTS `reportcontacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contact` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reportcontacts`
--

INSERT INTO `reportcontacts` (`id`, `contact`) VALUES
(1, '+256 (0) 392-176979 or +256 (0)414 201148/201147 ext. 3130. Fax +256-414-342632 email: TB-Lab@jcrc.org.ug');

-- --------------------------------------------------------

--
-- Table structure for table `reportsetting`
--

CREATE TABLE IF NOT EXISTS `reportsetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `showid` text NOT NULL,
  `liquiddetails` text NOT NULL,
  `soliddetails` text NOT NULL,
  `study` text NOT NULL,
  `techdetails` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reportsetting`
--

INSERT INTO `reportsetting` (`id`, `showid`, `liquiddetails`, `soliddetails`, `study`, `techdetails`) VALUES
(1, 'Hidden', 'Show', 'Show', 'STR', 'Show'),
(2, 'Hidden', 'Show', 'Show', 'CHN', 'Show'),
(3, 'Hidden', 'Show', 'Show', 'RFP', 'Show'),
(4, 'Hidden', 'Show', 'Show', 'EQA', 'Show'),
(5, 'Hidden', 'Show', 'Show', 'SHN', 'Show'),
(6, 'Hidden', 'Show', 'Show', 'MTI', 'Show'),
(7, 'Hidden', 'Show', 'Show', 'CGD', 'Show'),
(8, 'Hidden', 'Show', 'Show', 'MND', 'Show'),
(9, 'Show', 'Show', 'Show', 'BDM', 'Show'),
(10, 'Show', 'Show', 'Show', 'QX', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `reporttitle`
--

CREATE TABLE IF NOT EXISTS `reporttitle` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title1` varchar(150) NOT NULL,
  `title2` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reporttitle`
--

INSERT INTO `reporttitle` (`id`, `title1`, `title2`) VALUES
(1, 'UGANDA â€“CWRU RESRARCH COLLABORATION MYCOBACTERIOLOGY LABORATORY ', 'Plot 101 Lubowa Estates, Off Entebbe Road, Wakiso District ');

-- --------------------------------------------------------

--
-- Table structure for table `requestors`
--

CREATE TABLE IF NOT EXISTS `requestors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `requestors`
--

INSERT INTO `requestors` (`id`, `title`, `name`, `gender`, `organisation`, `district`, `telephone`, `email`) VALUES
(1, 'Dr', 'YO', '', 'CASE WESTERN ', '', '', ''),
(2, 'Dr', 'NL', '', 'CASE WESTERN', '', '', ''),
(3, 'Dr', 'CATHY', '', 'JCRC', '', '', ''),
(4, 'Dr', 'CATHY', '', 'JCRC', '', '', ''),
(5, 'Dr', 'KAWALYA', '', 'JCRC', '', '', ''),
(6, 'Dr', 'OBELLA IRENE', '', 'JCRC', '', '', ''),
(7, 'Dr', 'PN', '', 'CASE WESTERN', '', '', ''),
(8, 'Dr', 'TESTING REQ', '', 'TR', '', '', ''),
(9, 'Dr', 'KABASWAGA', '', 'JCRC', '', '', ''),
(10, 'Dr', 'KIBIRIGE', '', 'JCRC', '', '', ''),
(11, 'Dr', 'MUSANA', '', 'JCRC', '', '', ''),
(12, 'Dr', 'JACOB', '', 'IOM', '', '', ''),
(13, 'Dr', 'SSALI', '', 'JCRC', '', '', ''),
(14, 'Dr', 'Angilya', '', 'IOM', '', '', ''),
(15, 'Dr', 'PHILLIPA', '', 'IOM', '', '', ''),
(16, 'Dr', 'Nsereko', '', 'Case- Mulago', '', '', ''),
(17, 'Dr', 'Natukunda', '', 'JCRC - Lubowa', '', '', ''),
(18, 'Dr', 'Gladys', '', 'IOM', '', '', ''),
(19, 'Dr', 'Nansimbe', '', 'JCRC', '', '', ''),
(20, 'Dr', 'Grace Muzanye', '', 'Case-Mulago', '', '', ''),
(21, 'Dr', 'Tamale', '', 'Jcrc', '', '', ''),
(22, 'Dr', 'KY', '', 'Case-Mulago', '', '', ''),
(23, 'Dr', 'Penny', '', 'IOM', '', '', ''),
(24, 'Dr', 'RASHIDA', '', 'JCRC', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `req_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `dor` date NOT NULL,
  `qty_req` bigint(20) NOT NULL,
  `is_qty` bigint(20) NOT NULL,
  `units` varchar(50) NOT NULL,
  `requester` varchar(80) NOT NULL,
  `sections` varchar(78) NOT NULL,
  `giver` varchar(67) NOT NULL,
  `approved` varchar(67) NOT NULL,
  `particular` varchar(123) NOT NULL,
  `bal_hand` bigint(255) NOT NULL,
  `voucher` varchar(22) NOT NULL,
  `batchno` varchar(90) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `product_id`, `dor`, `qty_req`, `is_qty`, `units`, `requester`, `sections`, `giver`, `approved`, `particular`, `bal_hand`, `voucher`, `batchno`, `status`) VALUES
(1, 0, '2016-09-03', 4, 4, 'pieces', 'juliu', 'Data', 'Zahara', 'Inno', 'Finger towel', 16, '56', '565', ''),
(2, 0, '2016-09-06', 1, 1, 'pieces', 'juliu', 'Data', 'Zahara', 'am', 'Cups', 37, '54', '', ''),
(3, 0, '2016-09-03', 4, 4, 'pieces', 'juliu', 'Data', 'Zahara', 'them', 'Pen', -4, '234', '', ''),
(4, 0, '2016-09-03', 4, 1, 'pieces', 'juliu', 'Data', 'Zahara', 'Mick', 'Finger towel', 15, '12', '565', ''),
(5, 0, '2016-09-08', 4, 2, 'Rim', 'james', 'Data', 'Zahara', 'KO', 'Papper', 2, '4560', '4324', ''),
(6, 0, '2016-09-26', 2, 3, 'pc', 'james', 'data', 'Zahara', 'mat', 'Finger towels', 15, '12345', '56509', ''),
(7, 0, '2016-09-20', 1, 1, 'pc', 'james', 'data', 'joh', '', 'Finger towels', 14, '', '56509', ''),
(8, 0, '2016-11-07', 4, 2, 'pc', 'julius', 'data', 'julius', '', 'Pens', 10, '488', '56509', ''),
(9, 0, '2017-01-29', 0, 0, 'nnnn', 'Angella', 'nnn', 'nnnn', '', 'mom', 0, 'iii', '', ''),
(10, 0, '0000-00-00', 3, 3, 'Gram', 'KO', 'Data', 'KO', '', 'Finger Towels', 15, '', '56509', ''),
(11, 0, '2016-09-03', 4, 1, 'pieces', 'juliu', 'Data', 'Zahara', 'Mick', 'Finger towel', 15, '', '565', ''),
(12, 0, '2016-09-08', 4, 2, 'Rim', 'james', 'Data', 'Zahara', 'admin', 'Papper', -2, '', '', ''),
(13, 0, '2016-09-08', 5, 3, 'Grams', 'KO', 'Data', 'KO', 'KO', 'Papper', -3, '', '', ''),
(14, 0, '2016-09-06', 1, 1, 'Gram', 'juliu', 'Data', '', '', 'Cups', -1, '23', '', ''),
(15, 0, '2017-03-08', 3, 0, '', 'KO', 'Data section', '', '', 'Paper', 0, '', '', 'approved'),
(16, 0, '2017-03-08', 3, 0, '', 'mat', 'Microscopy section', '', '', 'Stump Ink', 24, '', '675', 'approved'),
(17, 0, '2017-03-09', 4, 3, 'Grams', 'KO', 'Microscopy section', 'KO', 'KO', 'Stump Ink', -3, '434', '1111111020', 'approved'),
(18, 0, '2017-03-10', 3, 3, 'pieces', 'mat', 'Genexpert section', '', 'KO', 'Stump Ink', 21, '76767', '6665544', 'pending'),
(19, 1, '2017-03-09', 1, 1, 'Rims', 'admin', 'Genexpert section', 'KO', 'admin', 'Paper', 41, '2342', '', 'approved'),
(20, 2, '2017-03-09', 1, 0, '', 'KO', 'Genexpert section', '', '', '', 0, '', '', 'approved'),
(21, 1, '2017-03-09', 1, 1, ' ', 'mat', 'Data section', 'admin', 'KO', '', -1, '435', '999888888888877', 'approved'),
(22, 1, '2017-03-10', 12, 12, 'Rims', 'admin', 'Genexpert section', 'admin', 'KO', '', 9, '22', '', 'approved'),
(23, 1, '2017-09-09', 11, 23, 'Rims', 'data', 'Genexpert section', 'super', 'admin', '', 8, '34', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_bap`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_bap` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultsoptions_bap`
--

INSERT INTO `resultsoptions_bap` (`id`, `code`, `options`) VALUES
(1, 'C', 'Contaminated'),
(2, 'MOTT', 'MOTT'),
(5, 'NG', 'No Growth'),
(6, 'ND', 'Not Done'),
(7, 'NA', 'Not Applicable'),
(8, 'SC', 'See comment'),
(9, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_bloodculture`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_bloodculture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `resultsoptions_bloodculture`
--

INSERT INTO `resultsoptions_bloodculture` (`id`, `code`, `options`) VALUES
(14, 'NG', 'No Growth'),
(15, 'ND', 'Not Done'),
(16, 'SC', 'See Comment'),
(17, 'NA', 'Not Applicable'),
(18, 'NTM', 'Positive for other Mycobacteria'),
(19, 'CG', 'Confuent growth'),
(20, 'G', 'Growth'),
(23, 'MOTT', 'MOTT');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_culture_interpretation`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_culture_interpretation` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultsoptions_culture_interpretation`
--

INSERT INTO `resultsoptions_culture_interpretation` (`id`, `code`, `options`) VALUES
(1, 'N', 'Negative for M. tuberculosis'),
(3, 'P', 'Positive for M. tuberculosis'),
(4, 'NTM', 'Positive for non-tuberculos mycobacteria (NTM)'),
(5, 'PNTM', 'Positive for M. tuberculosis and NTM'),
(6, 'C', 'Contaminated'),
(1, 'N', 'Negative for M. tuberculosis'),
(3, 'P', 'Positive for M. tuberculosis'),
(4, 'NTM', 'Positive for non-tuberculos mycobacteria (NTM)'),
(5, 'PNTM', 'Positive for M. tuberculosis and NTM'),
(6, 'C', 'Contaminated');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_dst1`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_dst1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resultsoptions_dst1`
--

INSERT INTO `resultsoptions_dst1` (`id`, `code`, `options`) VALUES
(1, 'S', 'Susceptible'),
(2, 'R', 'Resistant'),
(3, 'NA', 'Not Applicable'),
(4, 'ND', 'Not Done'),
(5, 'I', 'Indeterminate'),
(6, 'Contaminated', 'Contaminated');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_dst2`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_dst2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resultsoptions_dst2`
--

INSERT INTO `resultsoptions_dst2` (`id`, `code`, `options`) VALUES
(1, 'S', 'Susceptible'),
(2, 'R', 'Resistant'),
(3, 'NA', 'Not Applicable'),
(4, 'ND', 'Not Done'),
(5, 'I', 'Indeterminate'),
(6, 'Contaminated', 'Contaminated');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_fm`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_fm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `resultsoptions_fm`
--

INSERT INTO `resultsoptions_fm` (`id`, `code`, `options`) VALUES
(1, '1+', '1+ AFB'),
(2, '2+', '2+ AFB'),
(3, '3+', '3+ AFB'),
(5, 'CR', '1-2 (Confirmation required)'),
(6, 'Scanty', 'Scanty'),
(7, 'NS', 'No AFB seen'),
(8, 'ND', 'Not Done'),
(9, 'NA', 'Not Applicable'),
(10, 'SC', 'See comment');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_genexpert`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_genexpert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `resultsoptions_genexpert`
--

INSERT INTO `resultsoptions_genexpert` (`id`, `code`, `options`) VALUES
(1, 'N', 'MTB Not Detected'),
(2, 'E', 'Error'),
(3, 'I', 'Invalid'),
(4, 'ND', 'Not Done'),
(5, 'NA', 'Not Applicable'),
(6, 'SC', 'See comment'),
(7, 'HP-rif S', 'MTB Detected High - Rif Resistance Not Detected'),
(8, 'HP-rif R', 'MTB Detected High - Rif Resistance Detected'),
(9, 'HP-rif I', 'MTB Detected High - Rif Resistance Indeterminate'),
(10, 'MP-rif S', 'MTB Detected Medium - Rif Resistance Not Detected'),
(11, 'MP-rif R', 'MTB Detected Medium - Rif Resistance Detected'),
(12, 'MP-rif I', 'MTB Detected Medium - Rif Resistance Indeterminate'),
(13, 'LP-rif S', 'MTB Detected Low - Rif Resistance Not Detected'),
(14, 'LP-rif R', 'MTB Detected Low - Rif Resistance Detected'),
(15, 'LP-rif I', 'MTB Detected Low - Rif Resistance Indeterminate'),
(16, 'VLP-rif S', 'MTB Detected Very Low - Rif Resistance Not Detected'),
(17, 'VLP-rif R', 'MTB Detected Very Low - Rif Resistance Detected'),
(18, 'VLP-rif I', 'MTB Detected Very Low - Rif Resistance Indeterminate');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_identification`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resultsoptions_identification`
--

INSERT INTO `resultsoptions_identification` (`id`, `code`, `options`) VALUES
(1, 'MTBc', 'M.tuberculosis Complex'),
(2, 'NTM', 'Mycobacteria, not M. tuberculosis complex'),
(3, 'Not Done', 'Not done'),
(4, 'POS', 'Positive'),
(5, 'NEG', 'Negative'),
(6, 'NS', 'Not Seen');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_liquidculture`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_liquidculture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `resultsoptions_liquidculture`
--

INSERT INTO `resultsoptions_liquidculture` (`id`, `code`, `options`) VALUES
(1, '1', '1 colony'),
(2, '2', '2 colonies'),
(3, '3', '3 colonies'),
(4, '4', '4 colonies'),
(5, '5', '5 colonies'),
(6, '6', '6 colonies'),
(7, '7', '7 colonies'),
(8, '8', '8 colonies'),
(10, '10-100', '1+'),
(11, '>100-200', '2+'),
(12, '>200', '3+'),
(13, 'C', 'Contaminated'),
(14, 'NG', 'No Growth'),
(15, 'ND', 'Not Done'),
(16, 'SC', 'See Comment'),
(17, 'NA', 'Not Applicable'),
(18, 'NTM', 'Positive for other Mycobacteria'),
(19, 'CG', 'Confuent growth'),
(20, 'G', 'Growth'),
(21, '<10', '<10 colonies'),
(22, '=>10', '=>10 colonies'),
(23, 'MOTT', 'MOTT');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_others`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_others` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `test` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueCodes` (`code`,`test`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_solidculture`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_solidculture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `resultsoptions_solidculture`
--

INSERT INTO `resultsoptions_solidculture` (`id`, `code`, `options`) VALUES
(1, '1', '1 colony'),
(2, '2', '2 colonies'),
(3, '3', '3 colonies'),
(4, '4', '4 colonies'),
(5, '5', '5 colonies'),
(6, '6', '6 colonies'),
(7, '7', '7 colonies'),
(8, '8', '8 colonies'),
(9, '9', '9 colonies'),
(10, '1+', '10-100'),
(11, '2+', '>100-200'),
(12, '3+', '>200'),
(13, 'C', 'Contaminated'),
(14, 'NG', 'No Growth'),
(15, 'ND', 'Not Done'),
(16, 'SC', 'See Comment'),
(17, 'NA', 'Not Applicable'),
(18, 'NTM', 'Positive for other Mycobacteria'),
(19, 'CG', 'Confuent growth'),
(21, '<10', '<10 colonies'),
(22, '=>10', '=>10 colonies'),
(23, 'MOTT', 'MOTT');

-- --------------------------------------------------------

--
-- Table structure for table `resultsoptions_zn`
--

CREATE TABLE IF NOT EXISTS `resultsoptions_zn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `resultsoptions_zn`
--

INSERT INTO `resultsoptions_zn` (`id`, `code`, `options`) VALUES
(5, 'NS', 'No AFB seen'),
(6, 'P', 'Acid Fast Bacilli present'),
(7, 'NA', 'Not Applicable'),
(8, 'ND', 'Not Done'),
(9, 'SC', 'See comment'),
(19, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_bloodculture`
--

CREATE TABLE IF NOT EXISTS `results_bloodculture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_ql` varchar(255) NOT NULL,
  `result_sqt` varchar(255) NOT NULL,
  `result_qt` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUEKEY` (`labno`,`media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_bloodculture_hist`
--

CREATE TABLE IF NOT EXISTS `results_bloodculture_hist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_ql` varchar(255) NOT NULL,
  `result_sqt` varchar(255) NOT NULL,
  `result_qt` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_bloodculture_view`
--
CREATE TABLE IF NOT EXISTS `results_bloodculture_view` (
`CB_labno` int(10)
,`CB_media` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_culture_interpretation`
--

CREATE TABLE IF NOT EXISTS `results_culture_interpretation` (
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_culture_interpretation`
--

INSERT INTO `results_culture_interpretation` (`labno`, `result`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`) VALUES
(78341, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-12 17:10:48', '', '0000-00-00', ''),
(78418, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-15 15:53:49', '', '0000-00-00', ''),
(78478, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:18:14', '', '0000-00-00', ''),
(78586, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:18:45', '', '0000-00-00', ''),
(78486, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:19:13', '', '0000-00-00', ''),
(78439, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:19:43', '', '0000-00-00', ''),
(78440, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:20:16', '', '0000-00-00', ''),
(78629, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-23 12:48:18', '', '0000-00-00', ''),
(78580, '', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-23 12:48:43', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_dst1`
--

CREATE TABLE IF NOT EXISTS `results_dst1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `method` varchar(255) NOT NULL,
  `pyrazinamide` varchar(255) DEFAULT NULL,
  `ethambutol` varchar(255) DEFAULT NULL,
  `rifampicin` varchar(255) DEFAULT NULL,
  `isoniazid` varchar(255) DEFAULT NULL,
  `streptomycin` varchar(255) DEFAULT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `modified_time` int(20) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueKey` (`labno`,`method`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_dst1_hist`
--

CREATE TABLE IF NOT EXISTS `results_dst1_hist` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `labno` int(10) NOT NULL,
  `method` varchar(255) NOT NULL,
  `pyrazinamide` varchar(255) DEFAULT NULL,
  `ethambutol` varchar(255) DEFAULT NULL,
  `rifampin` varchar(255) DEFAULT NULL,
  `isoniazid` varchar(255) DEFAULT NULL,
  `streptomycin` varchar(255) DEFAULT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(12) NOT NULL,
  `modified_time` int(12) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`auto_id`),
  KEY `labno` (`labno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_dst1_view`
--
CREATE TABLE IF NOT EXISTS `results_dst1_view` (
`dst1_labno` int(10)
,`dst1_count` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_dst2`
--

CREATE TABLE IF NOT EXISTS `results_dst2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `method` varchar(255) NOT NULL,
  `amikacin` varchar(255) DEFAULT NULL,
  `ethionamide` varchar(255) DEFAULT NULL,
  `psa` varchar(255) DEFAULT NULL,
  `capreomycin` varchar(255) DEFAULT NULL,
  `ofloxacin` varchar(255) DEFAULT NULL,
  `kanamycin` varchar(255) DEFAULT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(22) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueKey` (`labno`,`method`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_dst2_hist`
--

CREATE TABLE IF NOT EXISTS `results_dst2_hist` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `labno` int(10) NOT NULL,
  `method` varchar(255) NOT NULL,
  `amikacin` varchar(255) DEFAULT NULL,
  `ethionamide` varchar(255) DEFAULT NULL,
  `psa` varchar(255) DEFAULT NULL,
  `capreomycin` varchar(255) DEFAULT NULL,
  `ofloxacin` varchar(255) DEFAULT NULL,
  `kanamycin` varchar(255) DEFAULT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(22) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_dst2_view`
--
CREATE TABLE IF NOT EXISTS `results_dst2_view` (
`dst2_labno` int(10)
,`dst2_count` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_fm`
--

CREATE TABLE IF NOT EXISTS `results_fm` (
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`labno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_fm`
--

INSERT INTO `results_fm` (`labno`, `result`, `interpretation`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`) VALUES
(78341, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:21:48', '', '0000-00-00', '', ''),
(78342, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:22:02', '', '0000-00-00', '', ''),
(78343, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:22:27', '', '0000-00-00', '', ''),
(78344, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:23:14', '', '0000-00-00', '', ''),
(78345, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:23:55', '', '0000-00-00', '', ''),
(78346, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:24:20', '', '0000-00-00', '', ''),
(78347, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:29:25', '', '0000-00-00', '', ''),
(78348, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:29:34', '', '0000-00-00', '', ''),
(78349, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:29:43', '', '0000-00-00', '', ''),
(78350, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:29:53', '', '0000-00-00', '', ''),
(78351, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:30:06', '', '0000-00-00', '', ''),
(78352, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:30:13', '', '0000-00-00', '', ''),
(78353, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:30:20', '', '0000-00-00', '', ''),
(78354, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:30:27', '', '0000-00-00', '', ''),
(78355, 'No AFB seen', '', '', '2017-12-02', 'HS', 'Deborah Banturaki', '2017-12-04 09:30:34', '', '0000-00-00', '', ''),
(78358, 'No AFB seen', '', '', '2017-12-04', 'NI', 'Deborah Banturaki', '2017-12-05 10:44:03', '', '0000-00-00', '', ''),
(78359, 'No AFB seen', '', '', '2017-12-04', 'NI', 'Deborah Banturaki', '2017-12-05 10:44:12', '', '0000-00-00', '', ''),
(78360, 'No AFB seen', '', '', '2017-12-04', 'NI', 'Deborah Banturaki', '2017-12-05 10:44:23', '', '0000-00-00', '', ''),
(78361, '3+ AFB', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:42:21', '', '0000-00-00', '', ''),
(78362, '1+ AFB', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:42:29', '', '0000-00-00', '', ''),
(78363, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:42:37', '', '0000-00-00', '', ''),
(78364, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:42:45', '', '0000-00-00', '', ''),
(78365, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:42:53', '', '0000-00-00', '', ''),
(78366, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:49:22', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78367, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:49:36', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78370, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:12', '', '0000-00-00', '', ''),
(78371, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:20', '', '0000-00-00', '', ''),
(78372, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:27', '', '0000-00-00', '', ''),
(78373, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:34', '', '0000-00-00', '', ''),
(78374, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:43', '', '0000-00-00', '', ''),
(78375, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:49', '', '0000-00-00', '', ''),
(78376, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:43:56', '', '0000-00-00', '', ''),
(78377, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:44:03', '', '0000-00-00', '', ''),
(78378, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:44:11', '', '0000-00-00', '', ''),
(78379, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:44:30', '', '0000-00-00', '', ''),
(78380, 'No AFB seen', '', '', '2017-12-05', 'MC', 'Deborah Banturaki', '2017-12-06 11:44:38', '', '0000-00-00', '', ''),
(78381, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:22:36', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78382, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:22:43', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78383, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:22:53', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78384, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:22:59', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78385, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:52:19', '', '0000-00-00', '', ''),
(78386, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:52:29', '', '0000-00-00', '', ''),
(78387, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:52:37', '', '0000-00-00', '', ''),
(78388, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:52:46', '', '0000-00-00', '', ''),
(78389, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:52:57', '', '0000-00-00', '', ''),
(78390, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:05', '', '0000-00-00', '', ''),
(78391, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:13', '', '0000-00-00', '', ''),
(78392, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:22', '', '0000-00-00', '', ''),
(78393, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:34', '', '0000-00-00', '', ''),
(78394, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:23:09', '', '0000-00-00', '', ''),
(78395, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 15:23:18', '', '0000-00-00', '', ''),
(78396, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:51', '', '0000-00-00', '', ''),
(78397, 'No AFB seen', '', '', '2017-12-06', 'MC', 'Deborah Banturaki', '2017-12-06 11:53:59', '', '0000-00-00', '', ''),
(78398, 'Scanty', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:41:51', '', '0000-00-00', '', ''),
(78399, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:42:08', '', '0000-00-00', '', ''),
(78400, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:42:41', '', '0000-00-00', '', ''),
(78401, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:42:55', '', '0000-00-00', '', ''),
(78402, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:43:08', '', '0000-00-00', '', ''),
(78403, 'No AFB seen', '', '', '2017-12-07', '', 'Deborah Banturaki', '2017-12-07 17:43:25', '', '0000-00-00', '', ''),
(78405, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:02', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78406, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:44:06', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78407, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:44:36', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78408, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:44:44', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78409, 'No AFB seen', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:44:52', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78410, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:23', '', '0000-00-00', '', ''),
(78411, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:32', '', '0000-00-00', '', ''),
(78412, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:42', '', '0000-00-00', '', ''),
(78413, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:51', '', '0000-00-00', '', ''),
(78414, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:57:59', '', '0000-00-00', '', ''),
(78415, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:13', '', '0000-00-00', '', ''),
(78416, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:22', '', '0000-00-00', '', ''),
(78417, 'Scanty', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:31', '', '0000-00-00', '', ''),
(78418, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:38', '', '0000-00-00', '', ''),
(78419, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:46', '', '0000-00-00', '', ''),
(78420, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:58:56', '', '0000-00-00', '', ''),
(78421, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:05', '', '0000-00-00', '', ''),
(78422, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:12', '', '0000-00-00', '', ''),
(78423, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:20', '', '0000-00-00', '', ''),
(78424, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:28', '', '0000-00-00', '', ''),
(78425, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:35', '', '0000-00-00', '', ''),
(78426, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:44', '', '0000-00-00', '', ''),
(78427, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:51', '', '0000-00-00', '', ''),
(78428, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 11:59:58', '', '0000-00-00', '', ''),
(78429, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:07', '', '0000-00-00', '', ''),
(78430, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:24', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78431, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:32', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78432, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:39', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78433, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:46', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78434, 'No AFB seen', '', '', '2017-12-08', 'MC', 'Deborah Banturaki', '2017-12-09 12:00:53', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78439, '2+ AFB', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:07:13', '', '0000-00-00', '', ''),
(78440, '2+ AFB', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:07:24', '', '0000-00-00', '', ''),
(78441, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:07:36', '', '0000-00-00', '', ''),
(78442, 'Scanty', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:07:46', '', '0000-00-00', '', ''),
(78443, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:02', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78444, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:10', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78445, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:19', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78446, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:26', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78447, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:34', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78448, '1+ AFB', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:45', '', '0000-00-00', '', ''),
(78449, '2+ AFB', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 17:08:24', '', '0000-00-00', '', ''),
(78450, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:00', '', '0000-00-00', '', ''),
(78451, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:07', '', '0000-00-00', '', ''),
(78452, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:14', '', '0000-00-00', '', ''),
(78453, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:23', '', '0000-00-00', '', ''),
(78454, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:30', '', '0000-00-00', '', ''),
(78455, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:37', '', '0000-00-00', '', ''),
(78456, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:46', '', '0000-00-00', '', ''),
(78457, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:09:54', '', '0000-00-00', '', ''),
(78458, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:01', '', '0000-00-00', '', ''),
(78459, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:08', '', '0000-00-00', '', ''),
(78460, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:16', '', '0000-00-00', '', ''),
(78461, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:23', '', '0000-00-00', '', ''),
(78462, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:30', '', '0000-00-00', '', ''),
(78463, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:38', '', '0000-00-00', '', ''),
(78464, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:49', '', '0000-00-00', '', ''),
(78465, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:10:57', '', '0000-00-00', '', ''),
(78466, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:04', '', '0000-00-00', '', ''),
(78467, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:11', '', '0000-00-00', '', ''),
(78468, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:17', '', '0000-00-00', '', ''),
(78469, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:25', '', '0000-00-00', '', ''),
(78470, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:33', '', '0000-00-00', '', ''),
(78471, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:44', '', '0000-00-00', '', ''),
(78472, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:51', '', '0000-00-00', '', ''),
(78473, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:11:58', '', '0000-00-00', '', ''),
(78474, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:19', '', '0000-00-00', '', ''),
(78475, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:27', '', '0000-00-00', '', ''),
(78476, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:34', '', '0000-00-00', '', ''),
(78477, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:41', '', '0000-00-00', '', ''),
(78478, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:49', '', '0000-00-00', '', ''),
(78479, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:12:57', '', '0000-00-00', '', ''),
(78480, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:04', '', '0000-00-00', '', ''),
(78481, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:12', '', '0000-00-00', '', ''),
(78482, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:21', '', '0000-00-00', '', ''),
(78483, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:29', '', '0000-00-00', '', ''),
(78484, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:36', '', '0000-00-00', '', ''),
(78485, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:42', '', '0000-00-00', '', ''),
(78486, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:13:49', '', '0000-00-00', '', ''),
(78490, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:13:27', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78491, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:13:36', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78492, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:13:43', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78493, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:13:51', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78494, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:13:58', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78495, 'No AFB seen', '', '', '2017-12-12', 'MC', 'Deborah Banturaki', '2017-12-12 17:14:06', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78496, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:31:14', '', '0000-00-00', '', ''),
(78497, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:31:21', '', '0000-00-00', '', ''),
(78498, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:31:31', '', '0000-00-00', '', ''),
(78499, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:31:52', '', '0000-00-00', '', ''),
(78500, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:05', '', '0000-00-00', '', ''),
(78501, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:13', '', '0000-00-00', '', ''),
(78502, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:21', '', '0000-00-00', '', ''),
(78503, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:29', '', '0000-00-00', '', ''),
(78504, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:36', '', '0000-00-00', '', ''),
(78505, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:43', '', '0000-00-00', '', ''),
(78506, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:51', '', '0000-00-00', '', ''),
(78507, '2+ AFB', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:34:28', '', '0000-00-00', '', ''),
(78508, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:06', '', '0000-00-00', '', ''),
(78509, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:13', '', '0000-00-00', '', ''),
(78510, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:24', '', '0000-00-00', '', ''),
(78511, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:36', '', '0000-00-00', '', ''),
(78512, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:46', '', '0000-00-00', '', ''),
(78513, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:33:55', '', '0000-00-00', '', ''),
(78514, 'Scanty', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:53:27', '', '0000-00-00', '', ''),
(78515, '2+ AFB', '', '', '2017-12-13', 'MC', '', '2017-12-13 11:53:38', '', '0000-00-00', '', ''),
(78516, 'Scanty', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:54:19', '', '0000-00-00', '', ''),
(78517, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:54:28', '', '0000-00-00', '', ''),
(78518, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:54:37', '', '0000-00-00', '', ''),
(78519, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:54:50', '', '0000-00-00', '', ''),
(78520, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:54:58', '', '0000-00-00', '', ''),
(78521, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:51:52', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78522, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:52:01', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78523, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:52:12', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78524, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:52:26', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78525, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:52:37', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78526, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:52:48', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78527, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:55:07', '', '0000-00-00', '', ''),
(78530, 'Scanty', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:12', '', '0000-00-00', '', ''),
(78531, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:20', '', '0000-00-00', '', ''),
(78532, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:28', '', '0000-00-00', '', ''),
(78533, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:34', '', '0000-00-00', '', ''),
(78534, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:48', '', '0000-00-00', '', ''),
(78535, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:18:56', '', '0000-00-00', '', ''),
(78536, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:05', '', '0000-00-00', '', ''),
(78537, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:14', '', '0000-00-00', '', ''),
(78538, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:21', '', '0000-00-00', '', ''),
(78539, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:30', '', '0000-00-00', '', ''),
(78540, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:37', '', '0000-00-00', '', ''),
(78541, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:13:12', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78542, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:13:21', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78543, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:13:43', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78544, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:13:53', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78545, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:14:07', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78546, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:14:14', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78547, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:14:24', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78548, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:44', '', '0000-00-00', '', ''),
(78549, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:19:52', '', '0000-00-00', '', ''),
(78550, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:09', '', '0000-00-00', '', ''),
(78551, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:16', '', '0000-00-00', '', ''),
(78553, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:15:06', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78554, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:15:14', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78555, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:15:24', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78556, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:16:24', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78557, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:16:33', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78558, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:16:48', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78559, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:16:56', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78560, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:17:05', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78561, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:17:25', '', '0000-00-00', '', ''),
(78562, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:29', '', '0000-00-00', '', ''),
(78563, 'Scanty', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:36', '', '0000-00-00', '', ''),
(78564, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:44', '', '0000-00-00', '', ''),
(78565, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:20:54', '', '0000-00-00', '', ''),
(78566, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:22:05', '', '0000-00-00', '', ''),
(78567, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:22:13', '', '0000-00-00', '', ''),
(78568, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:09', '', '0000-00-00', '', ''),
(78569, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:19', '', '0000-00-00', '', ''),
(78570, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:28', '', '0000-00-00', '', ''),
(78571, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:38', '', '0000-00-00', '', ''),
(78572, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:46', '', '0000-00-00', '', ''),
(78573, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:23:58', '', '0000-00-00', '', ''),
(78574, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:24:05', '', '0000-00-00', '', ''),
(78575, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:24:15', '', '0000-00-00', '', ''),
(78576, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:24:24', '', '0000-00-00', '', ''),
(78577, 'No AFB seen', '', '', '2017-12-15', 'AK', 'Deborah Banturaki', '2017-12-15 17:27:59', '', '0000-00-00', '', ''),
(78580, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:08:42', '', '0000-00-00', '', ''),
(78581, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:10', '', '0000-00-00', '', ''),
(78583, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:21', '', '0000-00-00', '', ''),
(78584, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:30', '', '0000-00-00', '', ''),
(78585, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:41', '', '0000-00-00', '', ''),
(78586, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:51', '', '0000-00-00', '', ''),
(78587, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:09:59', '', '0000-00-00', '', ''),
(78588, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:06', '', '0000-00-00', '', ''),
(78589, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:13', '', '0000-00-00', '', ''),
(78590, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:20', '', '0000-00-00', '', ''),
(78591, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:27', '', '0000-00-00', '', ''),
(78592, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:41', '', '0000-00-00', '', ''),
(78593, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:10:48', '', '0000-00-00', '', ''),
(78594, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:07', '', '0000-00-00', '', ''),
(78595, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:13', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78596, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:20', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78597, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:26', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78598, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:32', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78599, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:39', 'Deborah Banturaki', '2017-12-18', 'Accepted', ''),
(78604, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:11:59', '', '0000-00-00', '', ''),
(78605, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:12:07', '', '0000-00-00', '', ''),
(78606, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:12:31', '', '0000-00-00', '', ''),
(78607, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:12:38', '', '0000-00-00', '', ''),
(78608, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:12:46', '', '0000-00-00', '', ''),
(78609, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:12:57', '', '0000-00-00', '', ''),
(78610, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:05', '', '0000-00-00', '', ''),
(78611, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:16', '', '0000-00-00', '', ''),
(78612, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:23', '', '0000-00-00', '', ''),
(78613, '3+ AFB', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:34', '', '0000-00-00', '', ''),
(78614, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:41', '', '0000-00-00', '', ''),
(78615, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:13:54', '', '0000-00-00', '', ''),
(78616, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:14:01', '', '0000-00-00', '', ''),
(78617, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:14:08', '', '0000-00-00', '', ''),
(78618, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:14:17', '', '0000-00-00', '', ''),
(78619, 'No AFB seen', '', '', '2017-12-16', 'NMJ', 'Deborah Banturaki', '2017-12-18 11:14:25', '', '0000-00-00', '', ''),
(78621, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:48:24', '', '0000-00-00', '', ''),
(78622, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:45:36', '', '0000-00-00', '', ''),
(78623, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:45:43', '', '0000-00-00', '', ''),
(78624, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:45:53', '', '0000-00-00', '', ''),
(78625, '1+ AFB', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:02', '', '0000-00-00', '', ''),
(78626, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:18', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78627, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:25', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78628, 'Scanty', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:35', '', '0000-00-00', '', ''),
(78629, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:43', '', '0000-00-00', '', ''),
(78630, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:46:52', '', '0000-00-00', '', ''),
(78631, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:47:01', '', '0000-00-00', '', ''),
(78632, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:47:09', '', '0000-00-00', '', ''),
(78633, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:47:18', '', '0000-00-00', '', ''),
(78634, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:47:26', '', '0000-00-00', '', ''),
(78635, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:47:35', '', '0000-00-00', '', ''),
(78636, 'No AFB seen', '', '', '2017-12-19', 'MC', 'Deborah Banturaki', '2017-12-20 11:48:55', '', '0000-00-00', '', ''),
(78638, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:18:16', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78639, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:18:27', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78640, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:18:39', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78641, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:18:49', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78642, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:19:03', '', '0000-00-00', '', ''),
(78643, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:19:12', '', '0000-00-00', '', ''),
(78644, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:19:22', '', '0000-00-00', '', ''),
(78645, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:20:07', '', '0000-00-00', '', ''),
(78646, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:38:22', '', '0000-00-00', '', ''),
(78647, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:38:54', '', '0000-00-00', '', ''),
(78648, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:39:05', '', '0000-00-00', '', ''),
(78649, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:39:21', '', '0000-00-00', '', ''),
(78650, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:39:30', '', '0000-00-00', '', ''),
(78651, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:39:39', '', '0000-00-00', '', ''),
(78652, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:39:53', '', '0000-00-00', '', ''),
(78653, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:00', '', '0000-00-00', '', ''),
(78654, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:12', '', '0000-00-00', '', ''),
(78655, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:27', '', '0000-00-00', '', ''),
(78656, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:34', '', '0000-00-00', '', ''),
(78657, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:43', '', '0000-00-00', '', ''),
(78658, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:51', '', '0000-00-00', '', ''),
(78659, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:40:58', '', '0000-00-00', '', ''),
(78660, 'No AFB seen', '', '', '2017-12-20', 'MC', 'Deborah Banturaki', '2017-12-20 14:41:07', '', '0000-00-00', '', ''),
(78667, 'Scanty', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:36:24', '', '0000-00-00', '', ''),
(78668, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:36:32', '', '0000-00-00', '', ''),
(78669, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:36:43', '', '0000-00-00', '', ''),
(78670, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:36:52', '', '0000-00-00', '', ''),
(78671, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:00', '', '0000-00-00', '', ''),
(78672, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:09', '', '0000-00-00', '', ''),
(78673, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:17', '', '0000-00-00', '', ''),
(78674, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:27', '', '0000-00-00', '', ''),
(78675, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:35', '', '0000-00-00', '', ''),
(78676, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:43', '', '0000-00-00', '', ''),
(78677, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:51', '', '0000-00-00', '', ''),
(78678, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:37:59', '', '0000-00-00', '', ''),
(78679, '', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', ''),
(78680, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:38:32', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78681, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:38:39', 'Deborah Banturaki', '2017-12-22', 'Accepted', ''),
(78682, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:38:49', '', '0000-00-00', '', ''),
(78683, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:39:01', '', '0000-00-00', '', ''),
(78684, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:39:10', '', '0000-00-00', '', ''),
(78685, 'No AFB seen', '', '', '2017-12-21', 'MC', 'Deborah Banturaki', '2017-12-21 17:39:17', '', '0000-00-00', '', ''),
(78687, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:36:45', '', '0000-00-00', '', ''),
(78688, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:36:58', '', '0000-00-00', '', ''),
(78689, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:37:05', '', '0000-00-00', '', ''),
(78690, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:37:13', '', '0000-00-00', '', ''),
(78691, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:55:42', '', '0000-00-00', '', ''),
(78692, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:55:50', '', '0000-00-00', '', ''),
(78693, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:56:01', '', '0000-00-00', '', ''),
(78694, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:56:08', '', '0000-00-00', '', ''),
(78695, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:56:46', '', '0000-00-00', '', ''),
(78696, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:56:55', '', '0000-00-00', '', ''),
(78697, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:57:03', '', '0000-00-00', '', ''),
(78698, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:57:12', '', '0000-00-00', '', ''),
(78699, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:57:19', '', '0000-00-00', '', ''),
(78700, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 14:57:28', '', '0000-00-00', '', ''),
(78701, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:05:34', '', '0000-00-00', '', ''),
(78702, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:05:42', '', '0000-00-00', '', ''),
(78703, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:05:50', '', '0000-00-00', '', ''),
(78704, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:05:58', '', '0000-00-00', '', ''),
(78705, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:06:07', '', '0000-00-00', '', ''),
(78706, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:06:15', '', '0000-00-00', '', ''),
(78707, '1+ AFB', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:10:10', '', '0000-00-00', '', ''),
(78708, 'Scanty', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:10:19', '', '0000-00-00', '', ''),
(78709, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:10:27', '', '0000-00-00', '', ''),
(78710, 'No AFB seen', '', '', '2017-12-22', 'AK', 'Deborah Banturaki', '2017-12-22 15:10:35', '', '0000-00-00', '', ''),
(78711, '2+ AFB', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:21', '', '0000-00-00', '', ''),
(78712, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:31', '', '0000-00-00', '', ''),
(78713, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:40', '', '0000-00-00', '', ''),
(78714, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:47', '', '0000-00-00', '', ''),
(78715, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:55', '', '0000-00-00', '', ''),
(78716, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:25:02', '', '0000-00-00', '', ''),
(78717, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:26:55', '', '0000-00-00', '', ''),
(78719, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:27:09', '', '0000-00-00', '', ''),
(78720, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:27:18', '', '0000-00-00', '', ''),
(78721, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:27:50', '', '0000-00-00', '', ''),
(78722, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:27:57', '', '0000-00-00', '', ''),
(78723, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:28:06', '', '0000-00-00', '', ''),
(78724, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:28:14', '', '0000-00-00', '', ''),
(78725, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:28:23', '', '0000-00-00', '', ''),
(78726, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:28:32', '', '0000-00-00', '', ''),
(78727, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:29:42', '', '0000-00-00', '', ''),
(78728, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:29:52', '', '0000-00-00', '', ''),
(78729, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:29:59', '', '0000-00-00', '', ''),
(78730, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:30:10', '', '0000-00-00', '', ''),
(78731, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:30:17', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_fm_hist`
--

CREATE TABLE IF NOT EXISTS `results_fm_hist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `results_fm_hist`
--

INSERT INTO `results_fm_hist` (`id`, `labno`, `result`, `interpretation`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `modified_time`, `status`, `rejreason`) VALUES
(1, 78405, '', '', '', '2017-12-07', 'MC', 'Deborah Banturaki', '2017-12-07 17:43:36', '', '0000-00-00', '2017-12-09 08:57:02', '', ''),
(2, 78449, 'No AFB seen', '', '', '2017-12-09', 'MC', 'Deborah Banturaki', '2017-12-12 10:08:52', '', '0000-00-00', '2017-12-12 14:08:24', '', ''),
(3, 78507, 'No AFB seen', '', '', '2017-12-13', 'MC', 'Deborah Banturaki', '2017-12-13 11:32:58', '', '0000-00-00', '2017-12-13 08:34:28', '', ''),
(4, 78711, 'No AFB seen', '', '', '2017-12-23', 'HS', 'Deborah Banturaki', '2017-12-23 12:24:07', '', '0000-00-00', '2017-12-23 09:24:21', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_genexpert`
--

CREATE TABLE IF NOT EXISTS `results_genexpert` (
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `probea` varchar(25) NOT NULL,
  `probeb` varchar(25) NOT NULL,
  `probec` varchar(255) NOT NULL,
  `probed` varchar(25) NOT NULL,
  `probee` varchar(25) NOT NULL,
  `spc` varchar(25) NOT NULL,
  `qc1` varchar(25) NOT NULL,
  `qc2` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`labno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_genexpert`
--

INSERT INTO `results_genexpert` (`labno`, `result`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `probea`, `probeb`, `probec`, `probed`, `probee`, `spc`, `qc1`, `qc2`, `status`, `rejreason`) VALUES
(78356, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78357, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78368, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78369, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78404, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78435, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78436, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78438, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78487, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78488, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78489, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78528, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78529, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78552, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78578, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78579, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78582, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78600, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78601, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78602, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78603, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78620, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78637, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78661, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78662, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78663, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78664, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78665, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78666, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(78686, '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_genexpert_hist`
--

CREATE TABLE IF NOT EXISTS `results_genexpert_hist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `probea` varchar(25) NOT NULL,
  `probeb` varchar(25) NOT NULL,
  `probec` varchar(255) NOT NULL,
  `probed` varchar(25) NOT NULL,
  `probee` varchar(25) NOT NULL,
  `spc` varchar(25) NOT NULL,
  `qc1` varchar(25) NOT NULL,
  `qc2` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_identification`
--

CREATE TABLE IF NOT EXISTS `results_identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `test` varchar(200) NOT NULL,
  `media` varchar(200) NOT NULL,
  `method` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_identification_hist`
--

CREATE TABLE IF NOT EXISTS `results_identification_hist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(200) NOT NULL,
  `method` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test` varchar(20) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_identification_view`
--
CREATE TABLE IF NOT EXISTS `results_identification_view` (
`ID_labno` int(10)
,`ID_count` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_liquidculture`
--

CREATE TABLE IF NOT EXISTS `results_liquidculture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_dtp` varchar(255) NOT NULL,
  `result_znc` varchar(255) NOT NULL,
  `result_bap` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `rejreason` text NOT NULL,
  `znc_date` date NOT NULL,
  `znc_tech` varchar(255) NOT NULL,
  `bap_date` date NOT NULL,
  `bap_tech` varchar(255) NOT NULL,
  `dtp_date` date NOT NULL,
  `dtp_tech` varchar(255) NOT NULL,
  `innoc_date` date NOT NULL,
  `innoc_time` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`labno`,`media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=333 ;

--
-- Dumping data for table `results_liquidculture`
--

INSERT INTO `results_liquidculture` (`id`, `labno`, `media`, `result_dtp`, `result_znc`, `result_bap`, `interpretation`, `contdate`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`, `znc_date`, `znc_tech`, `bap_date`, `bap_tech`, `dtp_date`, `dtp_tech`, `innoc_date`, `innoc_time`) VALUES
(2, 78341, 'MGIT', '7:11', '', 'Contaminated', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-12 17:10:48', '', '0000-00-00', '', '', '0000-00-00', '', '2017-12-12', 'NI', '2017-12-09', 'MC', '0000-00-00', '00:00:00'),
(3, 78342, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(4, 78343, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(5, 78344, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(6, 78345, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(7, 78346, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(8, 78347, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(9, 78348, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(10, 78349, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(11, 78350, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(12, 78351, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(13, 78352, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(14, 78353, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(15, 78354, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(16, 78355, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(17, 78358, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(18, 78359, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(19, 78360, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(20, 78361, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(21, 78362, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(22, 78363, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(23, 78364, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(24, 78365, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(25, 78366, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(26, 78367, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(27, 78370, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(28, 78371, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(29, 78372, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(30, 78373, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(31, 78374, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(32, 78375, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(33, 78376, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(34, 78377, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(35, 78378, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(36, 78379, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(37, 78380, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(38, 78381, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(39, 78382, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(40, 78383, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(41, 78384, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(42, 78385, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(43, 78386, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(44, 78387, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(45, 78388, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(46, 78389, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(47, 78390, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(48, 78391, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(49, 78392, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(50, 78393, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(51, 78394, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(52, 78395, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(53, 78396, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(54, 78397, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(55, 78398, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(56, 78399, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(57, 78400, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(58, 78401, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(59, 78402, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(60, 78403, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(61, 78405, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(62, 78407, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(63, 78408, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(64, 78409, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(65, 78410, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(66, 78411, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(67, 78412, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(68, 78413, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(69, 78414, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(70, 78415, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(71, 78416, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(72, 78417, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(73, 78418, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(74, 78419, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(75, 78420, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(76, 78421, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(77, 78422, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(78, 78423, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(79, 78424, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(80, 78425, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(81, 78426, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(82, 78427, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(83, 78428, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(84, 78429, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(85, 78430, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(86, 78431, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(87, 78432, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(88, 78433, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(89, 78434, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(90, 78439, 'MGIT', '', 'Acid Fast Bacilli present', 'No Growth', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:19:43', '', '0000-00-00', '', '', '2017-12-18', 'NMJ', '2017-12-20', 'NMJ', '0000-00-00', '', '0000-00-00', '00:00:00'),
(91, 78440, 'MGIT', '', 'Acid Fast Bacilli present', 'No Growth', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:20:16', '', '0000-00-00', '', '', '2017-12-19', 'HS', '2017-12-21', 'NI', '0000-00-00', '', '0000-00-00', '00:00:00'),
(92, 78441, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(93, 78442, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(94, 78443, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(95, 78444, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(96, 78445, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(97, 78446, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(98, 78447, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(99, 78448, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(100, 78449, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(101, 78450, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(102, 78451, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(103, 78452, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(104, 78453, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(105, 78454, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(106, 78455, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(107, 78456, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(108, 78457, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(109, 78458, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(110, 78459, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(111, 78460, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(112, 78461, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(113, 78462, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(114, 78463, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(115, 78464, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(116, 78465, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(117, 78466, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(118, 78467, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(119, 78468, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(120, 78469, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(121, 78470, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(122, 78471, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(123, 78472, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(124, 78473, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(125, 78474, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(126, 78476, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(127, 78477, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(128, 78478, 'MGIT', '', 'No AFB seen', 'Contaminated', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:18:14', '', '0000-00-00', '', '', '2017-12-18', 'NMJ', '2017-12-20', 'NMJ', '0000-00-00', '', '0000-00-00', '00:00:00'),
(129, 78479, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(130, 78480, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(131, 78481, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(132, 78482, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(133, 78483, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(134, 78484, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(135, 78485, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(136, 78486, 'MGIT', '', 'No AFB seen', 'Contaminated', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:19:13', '', '0000-00-00', '', '', '2017-12-18', 'NMJ', '2017-12-20', 'NMJ', '0000-00-00', '', '0000-00-00', '00:00:00'),
(138, 78491, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(139, 78492, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(140, 78494, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(141, 78495, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(142, 78496, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(143, 78497, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(144, 78498, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(145, 78499, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(146, 78500, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(147, 78501, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(148, 78502, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(149, 78503, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(150, 78504, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(151, 78505, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(152, 78506, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(153, 78507, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(154, 78508, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(155, 78509, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(156, 78510, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(157, 78511, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(158, 78512, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(159, 78513, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(160, 78514, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(161, 78515, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(162, 78516, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(163, 78517, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(164, 78518, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(165, 78519, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(166, 78520, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(167, 78522, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(168, 78523, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(170, 78525, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(171, 78526, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(172, 78527, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(173, 78530, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(174, 78531, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(175, 78532, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(176, 78533, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(177, 78534, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(178, 78535, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(179, 78536, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(180, 78537, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(181, 78539, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(182, 78540, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(183, 78542, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(184, 78543, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(186, 78545, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(187, 78546, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(188, 78547, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(189, 78548, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(190, 78549, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(191, 78550, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(192, 78551, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(193, 78554, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(194, 78559, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(195, 78560, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(196, 78562, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(197, 78563, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(198, 78564, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(199, 78565, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(200, 78566, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(201, 78567, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(202, 78568, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(203, 78569, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(204, 78570, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(205, 78571, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(206, 78572, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(207, 78573, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(208, 78575, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(209, 78576, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(210, 78577, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(211, 78580, 'MGIT', '', 'No AFB seen', 'No Growth', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-23 12:48:43', '', '0000-00-00', '', '', '2017-12-22', 'NI', '2017-12-22', 'NI', '0000-00-00', '', '0000-00-00', '00:00:00'),
(212, 78583, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(213, 78584, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(214, 78585, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(215, 78586, 'MGIT', '', 'No AFB seen', 'Contaminated', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-21 16:18:45', '', '0000-00-00', '', '', '2017-12-18', 'NMJ', '2017-12-20', 'NMJ', '0000-00-00', '', '0000-00-00', '00:00:00'),
(216, 78587, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(217, 78588, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(218, 78589, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(219, 78590, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(220, 78591, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(221, 78592, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(222, 78593, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(223, 78594, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(225, 78596, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(226, 78604, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(227, 78605, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(228, 78606, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(229, 78607, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(230, 78608, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(231, 78609, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(232, 78610, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(233, 78611, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(234, 78612, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(235, 78613, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(236, 78615, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(237, 78616, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(238, 78617, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(239, 78618, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(240, 78619, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(241, 78622, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(242, 78623, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(243, 78624, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(244, 78625, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(245, 78626, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(246, 78627, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00');
INSERT INTO `results_liquidculture` (`id`, `labno`, `media`, `result_dtp`, `result_znc`, `result_bap`, `interpretation`, `contdate`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`, `znc_date`, `znc_tech`, `bap_date`, `bap_tech`, `dtp_date`, `dtp_tech`, `innoc_date`, `innoc_time`) VALUES
(247, 78628, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(248, 78629, 'MGIT', '', 'No AFB seen', 'Contaminated', '', '0000-00-00', '', '0000-00-00', '', 'Deborah Banturaki', '2017-12-23 12:48:18', '', '0000-00-00', '', '', '2017-12-22', 'NI', '2017-12-22', 'NI', '0000-00-00', '', '0000-00-00', '00:00:00'),
(249, 78630, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(250, 78631, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(251, 78632, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(252, 78634, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(253, 78635, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(254, 78636, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(255, 78638, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(256, 78639, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(257, 78640, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(258, 78641, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(259, 78642, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(260, 78643, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(261, 78644, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(262, 78645, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(263, 78646, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(264, 78647, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(265, 78648, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(266, 78649, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(267, 78650, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(268, 78652, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(269, 78653, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(270, 78654, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(271, 78656, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(272, 78657, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(273, 78658, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(274, 78659, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(275, 78660, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(276, 78668, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(277, 78669, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(278, 78671, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(279, 78672, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(280, 78673, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(281, 78674, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(282, 78675, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(283, 78676, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(284, 78677, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(285, 78678, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(286, 78681, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(287, 78682, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(288, 78683, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(289, 78684, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(290, 78685, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(291, 78688, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(292, 78689, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(293, 78690, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(294, 78691, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(295, 78693, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(296, 78694, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(297, 78695, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(298, 78696, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(299, 78697, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(300, 78698, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(301, 78699, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(302, 78700, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(303, 78701, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(304, 78702, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(305, 78703, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(306, 78704, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(307, 78705, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(308, 78706, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(309, 78707, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(310, 78708, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(311, 78709, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(312, 78710, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(313, 78711, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(314, 78712, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(315, 78713, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(316, 78714, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(317, 78715, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(318, 78716, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(319, 78717, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(321, 78719, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(322, 78720, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(323, 78721, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(324, 78722, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(325, 78723, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(326, 78724, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(327, 78725, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(328, 78726, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(329, 78727, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(330, 78728, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(331, 78729, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00'),
(332, 78730, 'MGIT', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `results_liquidculture_hist`
--

CREATE TABLE IF NOT EXISTS `results_liquidculture_hist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_dtp` varchar(255) NOT NULL,
  `result_znc` varchar(255) NOT NULL,
  `result_bap` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_liquidculture_view`
--
CREATE TABLE IF NOT EXISTS `results_liquidculture_view` (
`CL_labno` int(10)
,`CL_media` bigint(21)
,`CL_MGIT_dtp` varchar(255)
,`CL_MGIT_znc` varchar(255)
,`CL_MGIT_bap` varchar(255)
,`CL_MGIT_date` varchar(10)
,`CL_MGIT_tech` varchar(255)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_others`
--

CREATE TABLE IF NOT EXISTS `results_others` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `test` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueKey` (`labno`,`test`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_others_hist`
--

CREATE TABLE IF NOT EXISTS `results_others_hist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `test` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_others_view`
--
CREATE TABLE IF NOT EXISTS `results_others_view` (
`othertest_labno` int(10)
,`othertest_count` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_rejections`
--

CREATE TABLE IF NOT EXISTS `results_rejections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labno` int(50) NOT NULL,
  `test` varchar(200) NOT NULL,
  `entrant` varchar(100) NOT NULL,
  `reviewer` varchar(150) NOT NULL,
  `rejected_date` date NOT NULL,
  `media` varchar(200) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results_solidculture`
--

CREATE TABLE IF NOT EXISTS `results_solidculture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_ql` varchar(255) NOT NULL,
  `result_sqt` varchar(255) NOT NULL,
  `result_qt` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `rejreason` text NOT NULL,
  `innoc_date` date NOT NULL,
  `innoc_time` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueKey` (`labno`,`media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=602 ;

--
-- Dumping data for table `results_solidculture`
--

INSERT INTO `results_solidculture` (`id`, `labno`, `media`, `result_ql`, `result_sqt`, `result_qt`, `interpretation`, `contdate`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`, `innoc_date`, `innoc_time`) VALUES
(3, 78341, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(4, 78341, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(5, 78342, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(6, 78342, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(7, 78343, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(8, 78343, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(9, 78344, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(10, 78344, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(11, 78345, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(12, 78345, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(13, 78346, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(14, 78346, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(15, 78347, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(16, 78347, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(17, 78348, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(18, 78348, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(19, 78349, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(20, 78349, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(21, 78350, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(22, 78350, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(23, 78351, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(24, 78351, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(25, 78352, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(26, 78352, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(27, 78353, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(28, 78353, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(29, 78354, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(30, 78354, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(31, 78355, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(32, 78355, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(33, 78358, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(34, 78358, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(35, 78359, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(36, 78359, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(37, 78360, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(38, 78360, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(39, 78361, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(40, 78361, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(41, 78362, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(42, 78362, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(43, 78363, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(44, 78363, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(45, 78364, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(46, 78364, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(47, 78365, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(48, 78365, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(49, 78366, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(50, 78367, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(51, 78370, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(52, 78370, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(53, 78371, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(54, 78371, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(55, 78372, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(56, 78372, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(57, 78373, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(58, 78373, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(59, 78374, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(60, 78374, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(61, 78375, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(62, 78375, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(63, 78376, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(64, 78376, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(65, 78377, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(66, 78377, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(67, 78378, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(68, 78378, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(69, 78379, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(70, 78379, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(71, 78380, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(72, 78380, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(73, 78381, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(74, 78382, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(75, 78383, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(76, 78384, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(77, 78385, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(78, 78385, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(79, 78386, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(80, 78386, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(81, 78387, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(82, 78387, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(83, 78388, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(84, 78388, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(85, 78389, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(86, 78389, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(87, 78390, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(88, 78390, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(89, 78391, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(90, 78391, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(91, 78392, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(92, 78392, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(93, 78393, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(94, 78393, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(95, 78394, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(96, 78395, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(97, 78396, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(98, 78397, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(99, 78398, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(100, 78398, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(101, 78399, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(102, 78399, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(103, 78400, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(104, 78401, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(105, 78401, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(106, 78402, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(107, 78402, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(108, 78403, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(109, 78403, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(110, 78405, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(111, 78407, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(112, 78408, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(113, 78409, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(114, 78410, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(115, 78410, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(116, 78411, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(117, 78411, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(118, 78412, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(119, 78412, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(120, 78413, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(121, 78413, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(122, 78414, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(123, 78414, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(124, 78415, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(125, 78415, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(126, 78416, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(127, 78416, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(128, 78417, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(129, 78417, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(130, 78418, 'LJ', '', 'C', '', '', '0000-00-00', '', '2017-12-14', 'HS', 'Deborah Banturaki', '2017-12-15 15:53:49', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(131, 78418, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(132, 78419, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(133, 78419, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(134, 78420, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(135, 78420, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(136, 78421, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(137, 78421, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(138, 78422, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(139, 78422, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(140, 78423, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(141, 78423, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(142, 78424, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(143, 78424, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(144, 78425, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(145, 78425, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(146, 78426, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(147, 78426, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(148, 78427, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(149, 78427, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(150, 78428, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(151, 78428, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(152, 78429, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(153, 78429, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(154, 78430, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(155, 78431, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(156, 78431, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(157, 78432, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(158, 78433, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(159, 78434, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(160, 78439, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(161, 78439, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(162, 78440, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(163, 78440, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(164, 78441, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(165, 78442, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(166, 78442, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(167, 78443, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(168, 78444, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(169, 78445, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(170, 78446, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(171, 78447, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(172, 78448, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(173, 78448, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(174, 78449, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(175, 78449, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(176, 78450, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(177, 78450, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(178, 78451, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(179, 78451, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(180, 78452, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(181, 78452, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(182, 78453, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(183, 78453, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(184, 78454, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(185, 78454, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(186, 78455, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(187, 78455, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(188, 78456, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(189, 78456, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(190, 78457, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(191, 78457, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(192, 78458, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(193, 78458, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(194, 78459, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(195, 78460, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(196, 78460, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(197, 78461, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(198, 78461, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(199, 78462, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(200, 78462, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(201, 78463, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(202, 78463, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(203, 78464, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(204, 78464, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(205, 78465, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(206, 78465, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(207, 78466, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(208, 78466, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(209, 78467, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(210, 78467, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(211, 78468, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(212, 78468, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(213, 78469, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(214, 78469, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(215, 78470, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(216, 78470, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(217, 78471, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(218, 78471, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(219, 78472, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(220, 78472, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(221, 78473, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(222, 78473, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(223, 78474, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(224, 78474, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(225, 78476, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(226, 78476, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(227, 78477, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(228, 78477, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(229, 78478, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(230, 78478, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(231, 78479, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(232, 78479, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(233, 78480, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(234, 78480, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(235, 78481, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(236, 78481, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(237, 78482, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(238, 78482, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(239, 78483, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(240, 78483, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(241, 78484, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(242, 78484, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(243, 78485, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(244, 78485, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(245, 78486, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(246, 78486, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(248, 78491, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(249, 78492, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(250, 78494, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(251, 78495, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(252, 78496, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(253, 78496, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(254, 78497, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(255, 78497, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(256, 78498, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(257, 78498, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(258, 78499, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(259, 78499, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(260, 78500, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(261, 78500, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(262, 78501, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(263, 78501, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(264, 78502, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(265, 78502, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(266, 78503, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(267, 78503, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(268, 78504, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(269, 78504, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(270, 78505, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(271, 78505, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(272, 78506, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(273, 78506, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(274, 78507, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(275, 78507, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(276, 78508, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(277, 78508, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(278, 78509, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(279, 78509, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(280, 78510, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(281, 78510, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(282, 78511, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(283, 78511, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(284, 78512, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(285, 78512, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(286, 78513, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(287, 78513, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(288, 78514, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(289, 78514, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(290, 78515, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(291, 78515, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(292, 78516, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(293, 78516, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(294, 78517, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(295, 78517, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(296, 78518, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(297, 78518, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(298, 78519, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(299, 78519, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(300, 78520, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(301, 78520, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(302, 78522, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(303, 78523, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(306, 78525, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(307, 78526, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(308, 78527, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(309, 78527, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(310, 78530, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(311, 78530, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(312, 78531, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(313, 78531, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(314, 78532, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(315, 78532, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(316, 78533, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(317, 78533, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(318, 78534, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(319, 78534, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(320, 78535, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(321, 78535, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(322, 78536, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(323, 78536, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(324, 78537, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(325, 78537, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(326, 78539, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(327, 78539, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(328, 78540, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(329, 78540, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(330, 78542, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(331, 78543, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(333, 78545, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(334, 78546, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(335, 78547, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(336, 78548, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00');
INSERT INTO `results_solidculture` (`id`, `labno`, `media`, `result_ql`, `result_sqt`, `result_qt`, `interpretation`, `contdate`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`, `innoc_date`, `innoc_time`) VALUES
(337, 78548, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(338, 78549, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(339, 78550, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(340, 78550, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(341, 78551, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(342, 78551, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(343, 78554, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(344, 78559, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(345, 78560, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(346, 78562, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(347, 78562, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(348, 78563, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(349, 78563, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(350, 78564, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(351, 78564, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(352, 78565, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(353, 78565, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(354, 78566, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(355, 78566, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(356, 78567, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(357, 78567, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(358, 78568, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(359, 78568, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(360, 78569, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(361, 78569, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(362, 78570, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(363, 78570, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(364, 78571, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(365, 78571, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(366, 78572, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(367, 78572, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(368, 78573, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(369, 78573, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(370, 78575, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(371, 78575, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(372, 78576, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(373, 78576, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(374, 78577, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(375, 78577, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(376, 78580, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(377, 78580, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(378, 78583, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(379, 78583, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(380, 78584, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(381, 78584, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(382, 78585, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(383, 78585, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(384, 78586, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(385, 78586, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(386, 78587, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(387, 78587, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(388, 78588, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(389, 78588, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(390, 78589, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(391, 78589, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(392, 78590, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(393, 78590, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(394, 78591, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(395, 78591, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(396, 78592, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(397, 78592, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(398, 78593, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(399, 78593, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(400, 78594, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(401, 78594, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(403, 78596, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(404, 78604, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(405, 78604, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(406, 78605, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(407, 78605, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(408, 78606, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(409, 78606, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(410, 78607, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(411, 78607, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(412, 78608, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(413, 78608, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(414, 78609, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(415, 78609, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(416, 78610, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(417, 78610, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(418, 78611, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(419, 78611, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(420, 78612, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(421, 78612, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(422, 78613, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(423, 78613, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(424, 78615, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(425, 78615, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(426, 78616, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(427, 78616, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(428, 78617, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(429, 78617, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(430, 78618, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(431, 78618, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(432, 78619, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(433, 78619, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(434, 78622, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(435, 78622, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(436, 78623, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(437, 78623, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(438, 78624, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(439, 78624, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(440, 78625, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(441, 78625, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(442, 78626, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(443, 78627, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(444, 78628, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(445, 78628, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(446, 78629, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(447, 78629, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(448, 78630, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(449, 78630, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(450, 78631, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(451, 78631, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(452, 78632, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(453, 78632, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(454, 78634, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(455, 78634, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(456, 78635, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(457, 78635, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(458, 78636, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(459, 78636, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(460, 78638, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(461, 78638, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(462, 78639, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(463, 78639, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(464, 78640, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(465, 78640, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(466, 78641, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(467, 78642, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(468, 78642, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(469, 78643, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(470, 78643, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(471, 78644, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(472, 78644, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(473, 78645, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(474, 78645, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(475, 78646, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(476, 78646, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(477, 78647, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(478, 78647, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(479, 78648, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(480, 78648, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(481, 78649, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(482, 78649, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(483, 78650, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(484, 78650, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(485, 78652, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(486, 78652, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(487, 78653, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(488, 78653, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(489, 78654, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(490, 78654, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(491, 78656, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(492, 78656, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(493, 78657, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(494, 78657, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(495, 78658, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(496, 78658, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(497, 78659, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(498, 78659, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(499, 78660, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(500, 78660, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(501, 78668, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(502, 78668, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(503, 78669, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(504, 78669, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(505, 78671, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(506, 78671, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(507, 78672, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(508, 78672, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(509, 78673, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(510, 78673, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(511, 78674, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(512, 78674, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(513, 78675, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(514, 78675, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(515, 78676, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(516, 78676, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(517, 78677, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(518, 78677, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(519, 78678, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(520, 78678, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(521, 78681, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(522, 78682, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(523, 78682, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(524, 78683, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(525, 78683, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(526, 78684, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(527, 78684, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(528, 78685, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(529, 78685, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(530, 78688, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(531, 78688, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(532, 78689, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(533, 78689, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(534, 78690, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(535, 78690, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(536, 78691, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(537, 78691, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(538, 78693, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(539, 78693, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(540, 78694, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(541, 78694, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(542, 78695, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(543, 78695, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(544, 78696, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(545, 78696, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(546, 78697, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(547, 78697, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(548, 78698, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(549, 78698, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(550, 78699, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(551, 78699, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(552, 78700, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(553, 78700, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(554, 78701, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(555, 78701, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(556, 78702, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(557, 78702, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(558, 78703, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(559, 78703, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(560, 78704, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(561, 78705, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(562, 78706, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(563, 78707, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(564, 78707, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(565, 78708, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(566, 78708, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(567, 78709, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(568, 78709, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(569, 78710, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(570, 78710, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(571, 78711, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(572, 78711, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(573, 78712, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(574, 78712, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(575, 78713, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(576, 78713, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(577, 78714, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(578, 78714, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(579, 78715, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(580, 78715, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(581, 78716, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(582, 78716, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(583, 78717, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(584, 78717, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(586, 78719, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(587, 78720, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(588, 78721, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(589, 78722, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(590, 78723, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(591, 78724, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(592, 78725, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(593, 78726, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(594, 78727, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(595, 78727, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(596, 78728, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(597, 78728, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(598, 78729, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(599, 78729, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(600, 78730, 'LJ', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00'),
(601, 78730, '7H11S', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `results_solidculture_hist`
--

CREATE TABLE IF NOT EXISTS `results_solidculture_hist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `media` varchar(255) NOT NULL,
  `result_ql` varchar(255) NOT NULL,
  `result_sqt` varchar(255) NOT NULL,
  `result_qt` varchar(255) NOT NULL,
  `contdate` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_solidculture_view`
--
CREATE TABLE IF NOT EXISTS `results_solidculture_view` (
`CS_labno` int(10)
,`CS_media` bigint(21)
,`CS_LJ_ql` varchar(255)
,`CS_LJ_sqt` varchar(255)
,`CS_LJ_qt` varchar(255)
,`CS_LJ_date` varchar(10)
,`CS_LJ_tech` varchar(255)
,`CS_LJ_contdate` varchar(10)
,`CS_7H11S_ql` varchar(255)
,`CS_7H11S_sqt` varchar(255)
,`CS_7H11S_qt` varchar(255)
,`CS_7H11S_date` varchar(10)
,`CS_7H11S_tech` varchar(255)
,`CS_7H11S_contdate` varchar(10)
);
-- --------------------------------------------------------

--
-- Table structure for table `results_zn`
--

CREATE TABLE IF NOT EXISTS `results_zn` (
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `reviewdate` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`labno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_zn`
--

INSERT INTO `results_zn` (`labno`, `result`, `interpretation`, `comment`, `resdate`, `restech`, `entrant`, `entrytime`, `reviewer`, `reviewdate`, `status`, `rejreason`) VALUES
(78437, '', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `results_zn_hist`
--

CREATE TABLE IF NOT EXISTS `results_zn_hist` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `labno` int(10) NOT NULL,
  `result` varchar(255) NOT NULL,
  `interpretation` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `resdate` date NOT NULL,
  `restech` varchar(255) NOT NULL,
  `entrant` varchar(255) NOT NULL,
  `entrytime` datetime NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reviewdate` date NOT NULL,
  `rejreason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE IF NOT EXISTS `samples` (
  `labno` int(200) NOT NULL AUTO_INCREMENT COMMENT 'Unique Lab number',
  `sample_id` varchar(255) NOT NULL,
  `studycode` varchar(10) NOT NULL COMMENT 'studycode',
  `patient` int(10) NOT NULL COMMENT 'patients table key',
  `ageyears` int(10) NOT NULL,
  `agemonths` int(10) NOT NULL,
  `visitinterval` varchar(255) NOT NULL,
  `samplehierachy` varchar(255) NOT NULL,
  `requestreason` varchar(255) NOT NULL,
  `spectype` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` float(10,1) DEFAULT NULL,
  `consistency` varchar(255) NOT NULL,
  `peripheralres` varchar(255) NOT NULL,
  `hivstatus` varchar(255) NOT NULL,
  `collector` varchar(255) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colldate` date NOT NULL,
  `colltime` time NOT NULL,
  `rcttech` varchar(255) NOT NULL,
  `rctdate` date NOT NULL,
  `rcttime` time NOT NULL,
  `requester` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `examination` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `storage` int(5) NOT NULL,
  `specstorage` varchar(255) NOT NULL,
  `processdate` date NOT NULL,
  `processtime` time NOT NULL,
  `processtech` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `transportdate` date NOT NULL,
  `transporttime` time NOT NULL,
  `comment` varchar(255) NOT NULL,
  `accessiontime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accessiontech` varchar(255) NOT NULL,
  `lasteditby` varchar(255) NOT NULL,
  `lastedittime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastreviewer` varchar(255) NOT NULL,
  `lastreviewtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `inoculationdate` date NOT NULL,
  `inoculationtime` time NOT NULL,
  UNIQUE KEY `uniquelabno` (`labno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78732 ;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`labno`, `sample_id`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78341, '', '31', 1, 0, 0, '1 PPTR', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:20:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:50:00', '', '2017-12-01 11:16:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:16:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78342, '', '31', 2, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:30:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:50:00', '', '2017-12-01 11:18:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:18:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78343, '', '31', 3, 0, 0, 'Week08', '', '', 'Sputum', 'Mucoid', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-11-30', '16:08:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-11-30', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:20:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:20:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78344, '', '31', 4, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '11:05:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:21:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:21:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78345, '', '31', 5, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '09:35:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:22:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:22:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78346, '', '31', 6, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:50:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:24:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:24:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78347, '', '31', 7, 0, 0, 'Month03', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '09:39:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:25:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:25:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78348, '', '31', 8, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:10:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:26:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:26:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78349, '', '31', 8, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:10:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:28:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:28:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78350, '', '31', 9, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', 'G', 'Not Provided', 'VK', 'Spot', '2017-12-01', '18:28:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:29:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:29:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78351, '', '31', 9, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '19:18:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:30:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:30:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78352, '', '31', 10, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:14:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:31:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:31:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78353, '', '31', 10, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:14:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:33:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:33:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78354, '', '31', 11, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '08:32:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:34:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:34:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78355, '', '31', 11, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '08:32:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:35:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:35:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78356, '', 'B', 12, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-01', '14:35:00', '19', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-01 11:54:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78357, '', 'B', 13, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-01', '12:50:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-01 11:56:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:56:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78358, '', '31', 14, 0, 0, 'Month02', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '12:20:00', 'NMJ', '2017-12-01', '16:46:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:04:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:04:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78359, '', '31', 15, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '12:29:00', 'NMJ', '2017-12-01', '16:46:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:06:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:06:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78360, '', '31', 15, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '12:29:00', 'NMJ', '2017-12-01', '16:46:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:07:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:07:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78361, '', '31', 16, 0, 0, 'Day0', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '15:24:00', 'NI', '2017-12-04', '11:08:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:47:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:47:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78362, '', '31', 16, 0, 0, 'Day0', '', '', 'Sputum', 'Ms', 2.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '15:24:00', 'NI', '2017-12-04', '11:08:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:48:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:48:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78363, '', '31', 17, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:00:00', 'NI', '2017-12-04', '11:08:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:40:00', '', '2017-12-04 10:50:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:50:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78364, '', '31', 17, 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:00:00', 'NI', '2017-12-04', '11:08:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:51:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:51:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78365, '', '31', 1, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:15:00', 'NI', '2017-12-04', '11:08:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:53:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:53:07', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78366, '', 'IOM', 18, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SI', 'Early Morning', '2017-12-04', '08:00:00', 'NI', '2017-12-04', '11:44:00', '23', '2017-12-04', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-04', '10:00:00', '', '2017-12-04 10:54:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78367, '', 'IOM', 19, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-04', '08:00:00', 'NI', '2017-12-04', '11:44:00', '23', '2017-12-04', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-04', '10:00:00', '', '2017-12-04 10:56:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:56:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78368, '', 'B', 20, 0, 0, 'Unknown', '', '', 'Sputum', 'Mucosalivary', 1.5, '', '', 'Not Provided', 'Not Provided', '', '2017-11-27', '03:00:00', 'MC', '2017-12-04', '14:27:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-04 11:58:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 11:58:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78369, '', 'B', 21, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 0.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-04', '11:14:00', 'MC', '2017-12-04', '14:27:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-04 12:02:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:02:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78370, '', '31', 22, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:55:00', 'MC', '2017-12-04', '15:26:00', '1', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:35:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:35:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78371, '', '31', 23, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:51:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:36:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:36:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78372, '', '31', 23, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:51:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:38:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:38:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78373, '', '31', 24, 0, 0, 'Week17', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:00:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:39:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:39:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78374, '', '31', 24, 0, 0, 'Week17', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:00:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:40:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:40:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78375, '', '31', 25, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:46:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:42:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:42:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78376, '', '31', 25, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:46:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:43:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:43:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78377, '', '31', 26, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:32:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:45:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:45:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78378, '', '31', 26, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:32:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:46:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:46:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78379, '', '31', 27, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-04', '12:04:00', 'MC', '2017-12-04', '15:26:00', '', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:47:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:47:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78380, '', '31', 27, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-04', '12:04:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:49:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:49:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78381, '', 'IOM', 19, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'Sa', 6.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:40:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:40:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78382, '', 'IOM', 18, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 11.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:41:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:41:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78383, '', 'IOM', 28, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:43:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:43:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78384, '', 'IOM', 29, 0, 0, 'Month01', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:44:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:44:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78385, '', '31', 30, 0, 0, 'Week04', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '10:30:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:46:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:46:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78386, '', '31', 31, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '10:41:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:48:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:48:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78387, '', '31', 32, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '09:20:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:49:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:49:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78388, '', '31', 33, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'TM', '', '0000-00-00', '08:15:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:50:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:50:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78389, '', '31', 33, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-05', '08:15:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:51:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:51:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78390, '', '31', 34, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '10:42:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:53:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:53:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78391, '', '31', 34, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '10:42:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:54:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:54:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78392, '', '31', 35, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '11:26:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:55:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:55:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78393, '', '31', 35, 0, 0, 'Month12', '', '', 'Sputum', 'Salivary', 2.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '11:26:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:57:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:57:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78394, '', 'SC', 36, 0, 0, 'Recall', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '12:21:00', 'MC', '2017-12-05', '15:28:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:00:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:00:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78395, '', 'SC', 36, 0, 0, 'Recall', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', '', '2017-12-05', '12:21:00', 'MC', '2017-12-05', '15:28:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:02:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:02:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78396, '', '31', 37, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '13:48:00', 'MC', '2017-12-05', '15:38:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:04:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:04:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78397, '', '31', 37, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '13:48:00', 'MC', '2017-12-05', '15:28:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:05:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:05:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78398, '', '31', 38, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Early Morning', '2017-12-06', '10:00:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '00:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:01:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:11:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78399, '', '31', 39, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '0000-00-00', '03:00:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:03:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:03:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78400, '', '31', 40, 0, 0, 'Week08', '', '', 'Sputum', 'PU', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '10:41:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:04:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:04:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78401, '', '31', 41, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', '', '2017-12-06', '10:09:00', 'MC', '2017-12-06', '12:18:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:11:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:11:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78402, '', '31', 42, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '10:43:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:13:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:13:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78403, '', '31', 43, 0, 0, 'Month12', '', '', 'Sputum', 'Salivary', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '17:09:00', 'MC', '2017-12-06', '12:01:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:15:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:15:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78404, '', 'B', 44, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', 'Spot', '2017-12-06', '03:00:00', 'MC', '2017-12-06', '14:58:00', '5', '2017-12-06', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-06 12:05:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:05:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78405, '', 'IOM', 19, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:49:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:49:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78406, '', 'IOM', 18, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:50:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:50:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78407, '', 'IOM', 28, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-06', '08:00:00', 'MC', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:53:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:53:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78408, '', 'IOM', 45, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:54:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78409, '', 'IOM', 29, 0, 0, 'Month01', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:58:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:58:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78410, '', '31', 46, 0, 0, 'Month19', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:07:00', 'MC', '2017-12-06', '16:01:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:09:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:09:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78411, '', '31', 46, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:07:00', 'MC', '2017-12-06', '16:01:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:10:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:10:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78412, '', '31', 47, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:10:00', 'MC', '2017-12-06', '16:01:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:12:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:12:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78413, '', '31', 47, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:10:00', 'MC', '2017-12-06', '16:01:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:13:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:13:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78414, '', '31', 48, 0, 0, 'Week26', '', '', 'SputumW', 'SA', 10.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-06', '11:00:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:15:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:15:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78415, '', '31', 48, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-06', '11:00:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:16:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:16:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78416, '', '31', 43, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '17:09:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '14:30:00', '', '2017-12-06 13:22:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:22:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78417, '', '31', 49, 0, 0, 'Week04', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '11:11:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:39:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:39:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78418, '', '31', 1, 0, 0, 'PPTR 7', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '10:45:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:57:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:57:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78419, '', '31', 50, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '10:25:00', 'MC', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:59:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:59:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78420, '', '31', 51, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:00:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:00:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78421, '', '31', 51, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '12:56:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:01:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:01:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78422, '', '31', 52, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-07', '08:56:00', 'MC', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:07:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:07:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78423, '', '31', 52, 0, 0, 'Week22', '', '', 'Sputum', 'Salivary', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-07', '08:56:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:09:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:09:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78424, '', '31', 53, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-07', '09:39:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:10:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:10:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78425, '', '31', 53, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', '', '2017-12-07', '09:39:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:11:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:11:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78426, '', '31', 54, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '07:57:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:13:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:13:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78427, '', '31', 54, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '07:57:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:14:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:14:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78428, '', '31', 55, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '10:07:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:15:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:15:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78429, '', '31', 55, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', '', '2017-12-07', '10:07:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:16:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:16:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78430, '', 'IOM', 28, 0, 0, 'Baseline Third Sample', 's', '', 'Sputum', 'MU', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:39:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:39:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78431, '', 'IOM', 45, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:40:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:40:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78432, '', 'IOM', 56, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:42:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:42:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78433, '', 'IOM', 56, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:43:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:43:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78434, '', 'IOM', 29, 0, 0, 'Month01', '', '', 'Sputum', 'SA', 3.0, '', 'R', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:44:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:44:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78435, '', 'B', 57, 0, 0, 'Unknown', '', '', 'Sputum', 'MU', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-07', '12:35:00', '5', '2017-12-06', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:46:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:46:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78436, '', 'B', 58, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-07', '12:35:00', '5', '2017-12-07', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:48:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:48:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78437, '', 'B', 59, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-07', '14:20:00', '', '0000-00-00', 'zn,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:50:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:50:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78438, '', 'B', 60, 0, 0, 'Unknown', '', '', 'Sputum', 'Ms', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-08', '11:15:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-08 09:01:27', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 09:01:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78439, '', '31', 61, 0, 0, 'Day0', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '11:44:00', 'NI', '2017-12-07', '15:03:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:38:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:38:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78440, '', '31', 61, 0, 0, 'Day0', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '11:45:00', 'NI', '2017-12-07', '15:55:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '00:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:40:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-09 10:23:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78441, '', '31', 62, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '12:22:00', 'NI', '2017-12-07', '15:55:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:42:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:42:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78442, '', '31', 63, 0, 0, 'Week04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '13:45:00', 'NI', '2017-12-07', '15:55:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:43:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:43:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78443, '', 'IOM', 45, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-08', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:45:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:45:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78444, '', 'IOM', 56, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'RN', 'Early Morning', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-08', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:46:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:46:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78445, '', 'IOM', 64, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 15.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-08', '10:00:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:48:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:48:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78446, '', 'IOM', 64, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:49:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:49:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples` (`labno`, `sample_id`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78447, '', 'IOM', 64, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:51:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:51:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78448, '', '31', 65, 0, 0, 'Week02', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:55:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:52:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:52:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78449, '', '31', 66, 0, 0, 'Week04', '', '', 'Sputum', 'MP', 7.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:53:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:53:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78450, '', '31', 67, 0, 0, 'Week12', '', '', 'Sputum', 'MP', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '07:55:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:55:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:55:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78451, '', '31', 68, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '10:45:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:56:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:56:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78452, '', '31', 69, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '10:50:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:57:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:57:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78453, '', '31', 70, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:00:00', 'MC', '2017-12-08', '11:10:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:59:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:59:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78454, '', '31', 70, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:00:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:00:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:00:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78455, '', '31', 71, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '11:10:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:02:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:02:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78456, '', '31', 71, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:03:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:03:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78457, '', '31', 72, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '07:50:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:05:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:05:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78458, '', '31', 72, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '07:50:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', '', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:06:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:06:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78459, '', '31', 73, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:11:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:11:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78460, '', '31', 73, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:12:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:12:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78461, '', '31', 74, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:50:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:13:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:13:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78462, '', '31', 74, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:50:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:14:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:14:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78463, '', '31', 75, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.5, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:18:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:18:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78464, '', '31', 75, 0, 0, 'Month12', '', '', 'Sputum', 'Sa', 4.5, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:19:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:19:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78465, '', '31', 76, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:22:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:22:23', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78466, '', '31', 76, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', '', '2017-12-08', '10:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:23:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:23:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78467, '', '31', 77, 0, 0, 'Month12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:44:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:24:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:24:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78468, '', '31', 77, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:44:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:25:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:25:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78469, '', '31', 78, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:07:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:27:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:27:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78470, '', '31', 78, 0, 0, 'Month17', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:07:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:28:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:28:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78471, '', '31', 79, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:03:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'HK', '2017-12-08', '11:10:00', '', '2017-12-08 12:29:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:29:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78472, '', '31', 79, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:03:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-09', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:30:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:30:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78473, '', '31', 80, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:54:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:01:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:01:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78474, '', '31', 80, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:54:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:08:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:08:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78475, '', '31', 81, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:09:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:09:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78476, '', '31', 81, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:10:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:10:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78477, '', '31', 82, 0, 0, 'Month14', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:55:00', 'MC', '2017-12-08', '15:52:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:12:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:12:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78478, '', '31', 82, 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:13:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:13:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78479, '', '31', 83, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:16:00', 'MC', '2017-12-08', '15:52:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:15:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:15:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78480, '', '31', 83, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:16:00', 'MC', '2017-12-08', '15:52:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:16:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:16:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78481, '', '31', 84, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:17:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:17:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78482, '', '31', 84, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:19:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:19:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78483, '', '31', 85, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:21:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:21:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78484, '', '31', 85, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:23:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:23:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78485, '', '31', 86, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:22:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:24:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:24:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78486, '', '31', 86, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:22:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:27:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:27:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78487, '', 'B', 87, 0, 0, 'Unknown', '', '', 'Sputum', 'MP', 1.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-08', '03:00:00', 'MC', '2017-12-08', '14:45:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:48:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:48:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78488, '', 'B', 88, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-08', '14:45:00', '', '2017-12-08', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:51:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:51:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78489, '', 'B', 89, 0, 0, 'Unknown', '', '', 'Sputum', 'MP', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-08', '15:58:00', '5', '2017-12-08', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:53:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:53:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78490, '', 'IOM', 90, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-11', '00:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:12:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:13:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78491, '', 'IOM', 91, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:14:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:14:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78492, '', 'IOM', 92, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:15:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:15:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78493, '', 'IOM', 93, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-04', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:16:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:16:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78494, '', 'IOM', 94, 0, 0, 'Month07', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:17:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:17:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78495, '', 'IOM', 95, 0, 0, 'Month04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:20:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:20:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78496, '', '31', 96, 0, 0, 'Week04', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:26:00', 'NMJ', '2017-12-11', '12:40:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:21:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:21:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78497, '', '31', 97, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:03:00', 'NMJ', '2017-12-11', '12:40:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:23:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:23:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78498, '', '31', 98, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:37:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:28:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:28:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78499, '', '31', 98, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:37:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:34:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:34:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78500, '', '31', 99, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:20:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:36:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:36:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78501, '', '31', 100, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', '', '2017-12-11', '10:15:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:54:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:54:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78502, '', '31', 100, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:15:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:56:01', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:56:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78503, '', '31', 101, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:10:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:57:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:57:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78504, '', '31', 101, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:10:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:58:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:58:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78505, '', '31', 102, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:43:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 13:00:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:00:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78506, '', '31', 102, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:43:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 13:02:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:02:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78507, '', '31', 103, 0, 0, 'Week02', '', '', 'Sputum', 'MP', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:57:00', 'MC', '2017-12-11', '15:52:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:05:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:05:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78508, '', '31', 104, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 13.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:56:00', 'MC', '2017-12-11', '15:32:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:06:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:06:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78509, '', '31', 104, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:56:00', 'MC', '2017-12-11', '15:32:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:07:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:07:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78510, '', '31', 105, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '11:29:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:08:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:08:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78511, '', '31', 105, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '11:29:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:09:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:09:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78512, '', '31', 106, 0, 0, 'US', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '12:32:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:11:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:11:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78513, '', '31', 106, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '13:01:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:12:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:12:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78514, '', '31', 107, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '09:29:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:37:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:37:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78515, '', '31', 108, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:20:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:41:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:07:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78516, '', '31', 109, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:33:00', 'NI', '2017-12-12', '12:15:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:42:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:08:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78517, '', '31', 110, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '10:23:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', '', '2017-12-12', '11:05:00', '', '2017-12-12 10:44:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:44:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78518, '', '31', 110, 0, 0, 'Week22', '', '', 'Sputum', 'S', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '10:23:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:46:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:46:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78519, '', '31', 1, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:37:00', 'NI', '2017-12-12', '12:15:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '12:15:00', '', '2017-12-12 10:47:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:47:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78520, '', '31', 1, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:37:00', 'NI', '2017-12-12', '12:15:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:49:45', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:49:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78521, '', 'IOM', 90, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '10:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'R ', '2017-12-12', '10:00:00', '', '2017-12-12 10:52:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:52:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78522, '', 'IOM', 91, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:53:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:53:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78523, '', 'IOM', 92, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:54:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:54:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78524, '', 'IOM', 93, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-05', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:55:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:59:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78525, '', 'IOM', 95, 0, 0, 'Month04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:57:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:57:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78526, '', 'IOM', 94, 0, 0, 'Month07', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:58:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:58:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78527, '', '31', 99, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:20:00', 'NI', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-12 11:26:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:26:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78528, '', 'B', 111, 33, 0, 'Unknown', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-12', '14:55:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-13 06:09:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 06:09:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78529, '', 'B', 112, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-12', '14:55:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-13 06:11:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 06:11:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78530, '', '31', 113, 0, 0, 'Week04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '08:30:00', 'MC', '2017-12-13', '11:55:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:19:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:19:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78531, '', '31', 114, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '09:15:00', 'MC', '2017-12-13', '11:55:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:20:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:20:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78532, '', '31', 115, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '09:25:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:22:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:22:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78533, '', '31', 115, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '09:25:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:23:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:23:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78534, '', '31', 116, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:10:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '12:15:00', '', '2017-12-13 11:25:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:25:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78535, '', '31', 116, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:10:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:29:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:29:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78536, '', '31', 117, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:23:00', 'MC', '2017-12-13', '13:00:00', '1', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:31:15', '', '', '2017-12-13 11:31:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78537, '', '31', 117, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:23:00', 'MC', '2017-12-13', '13:00:00', '1', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:33:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:33:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78538, '', '31', 118, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '07:51:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:35:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:35:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78539, '', '31', 118, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '07:51:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:36:45', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:36:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78540, '', '31', 119, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '11:52:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:38:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:38:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78541, '', 'IOM', 90, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 4.0, '', '00', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:40:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:40:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78542, '', 'IOM', 91, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:41:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:41:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78543, '', 'IOM', 92, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:43:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:43:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78544, '', 'IOM', 93, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-13', '00:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:48:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:48:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78545, '', 'IOM', 120, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:49:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:49:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78546, '', 'IOM', 121, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:51:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:51:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78547, '', 'IOM', 95, 0, 0, 'Month04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:52:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:52:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78548, '', '31', 122, 0, 0, 'Week26', '', '', 'Sputum', 'Mucosalivary', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '11:53:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:28:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:28:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78549, '', '31', 122, 0, 0, 'Week26', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '11:53:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:30:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:30:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78550, '', '31', 123, 0, 0, 'Month05', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-12', '13:40:00', 'HS', '2017-12-12', '15:55:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:32:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:32:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78551, '', '31', 124, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '14:14:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-12', '14:44:00', '', '2017-12-13 12:34:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:34:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78552, '', 'B', 125, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-13', '10:25:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-14 07:57:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 07:57:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples` (`labno`, `sample_id`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78553, '', 'IOM', 120, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:20:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:20:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78554, '', 'IOM', 121, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '00:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:22:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:22:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78555, '', 'IOM', 126, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '09:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:25:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:25:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78556, '', 'IOM', 126, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:26:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:26:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78557, '', 'IOM', 127, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 12.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:28:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:28:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78558, '', 'IOM', 127, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 13.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:29:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:29:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78559, '', 'IOM', 128, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'Salivary', 7.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:31:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:31:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78560, '', 'IOM', 128, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:33:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:33:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78561, '', 'BR', 129, 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'Salivary', 0.0, '', '', 'Not Provided', 'IS', 'Spot', '2017-12-07', '08:08:00', 'AK', '2017-12-14', '12:40:00', '22', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '09:25:00', '', '2017-12-14 11:38:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:38:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78562, '', '31', 130, 0, 0, 'Week04', '', '', 'Sputum', 'MP', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:25:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:44:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:44:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78563, '', '31', 131, 0, 0, 'Week08', '', '', 'Sputum', 'Bloody', 0.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:35:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '13:16:00', '', '2017-12-14 11:46:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:46:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78564, '', '31', 132, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '10:00:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:47:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:47:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78565, '', '31', 133, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '13:16:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:49:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:49:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78566, '', '31', 134, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:30:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:50:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:50:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78567, '', '31', 135, 0, 0, 'Week12', '', '', 'Sputum', 'BL', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:51:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:51:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78568, '', '31', 136, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:00:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:53:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:53:07', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78569, '', '31', 137, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:35:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:54:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:54:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78570, '', '31', 137, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:35:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:55:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:55:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78571, '', '31', 138, 0, 0, 'Week26', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:12:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:57:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:57:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78572, '', '31', 138, 0, 0, 'Week26', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:12:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:58:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:58:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78573, '', '31', 139, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:00:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:01:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:01:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78574, '', '31', 139, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:00:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:04:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:04:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78575, '', '31', 140, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 11.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '07:40:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:06:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:06:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78576, '', '31', 140, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '07:40:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:08:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:08:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78577, '', '31', 123, 0, 0, 'Month05', '', '', 'Sputum', 'MS', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-12', '13:40:00', 'HS', '2017-12-12', '15:55:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-12', '14:40:00', 'Sample was not Indicated on the requisition form but lab received and processed it 14-dec-17 MC', '2017-12-14 12:33:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:33:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78578, '', 'B', 141, 58, 0, 'Unknown', '', '', 'Sputum', 'Purulent', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-14', '04:40:00', '5', '2017-12-14', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 07:10:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:10:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78579, '', 'B', 142, 52, 0, 'Unknown', '', '', 'Sputum', 'Mucopurulent', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-14', '14:40:00', '11', '2017-12-14', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 07:12:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:12:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78580, '', '31', 143, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:05:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 07:51:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:51:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78581, '', '31', 143, 0, 0, 'Week22', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:05:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:08:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:08:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78582, '', 'B', 144, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '10:22:00', '11', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-15 08:14:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:14:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78583, '', '31', 145, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:53:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:19:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:19:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78584, '', '31', 145, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:53:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:21:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:21:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78585, '', '31', 146, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:40:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:22:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:22:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78586, '', '31', 146, 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:40:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:24:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:24:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78587, '', '31', 147, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '00:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:26:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:10:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78588, '', '31', 147, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:29:01', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:29:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78589, '', '31', 148, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '12:45:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:31:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:31:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78590, '', '31', 148, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '12:45:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:33:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:33:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78591, '', '31', 149, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:11:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:35:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:35:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78592, '', '31', 149, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:11:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:37:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:37:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78593, '', '31', 150, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:44:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:39:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:39:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78594, '', '31', 150, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:44:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:40:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:40:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78595, '', 'IOM', 120, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '01:20:00', '12', '2017-12-15', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-15', '00:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:49:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:52:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78596, '', 'IOM', 121, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:51:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:51:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78597, '', 'IOM', 126, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:53:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:53:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78598, '', 'IOM', 127, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 12.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:54:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:54:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78599, '', 'IOM', 128, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Salivary', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:56:07', '', '', '2017-12-15 08:56:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78600, '', 'IOM', 151, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'EDWARD', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '11:20:00', '18', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 09:00:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:00:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78601, '', 'IOM', 151, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '11:20:00', '18', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 09:01:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:01:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78602, '', 'B', 152, 0, 0, 'Unknown', '', '', 'Sputum', '', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'HS', '2017-12-15', '13:40:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-15 11:31:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:31:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78603, '', 'B', 153, 0, 0, 'Unknown', '', '', 'Sputum', '', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'HS', '2017-12-15', '13:40:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'HS', '', '0000-00-00', '03:00:00', '', '2017-12-15 11:32:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:32:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78604, '', '31', 154, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '08:40:00', 'NMJ', '2017-12-15', '13:15:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:35:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:35:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78605, '', '31', 155, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '15:00:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:39:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:39:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78606, '', '31', 155, 0, 0, 'Week26', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '15:00:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:41:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:41:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78607, '', '31', 156, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '10:27:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:43:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:43:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78608, '', '31', 156, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '10:27:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:48:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:48:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78609, '', '31', 157, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:03:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:52:23', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:52:23', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78610, '', '31', 157, 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:03:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:54:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:54:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78611, '', '31', 158, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '08:27:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:56:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:56:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78612, '', '31', 158, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '08:27:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:57:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:57:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78613, '', '31', 159, 0, 0, 'Week02', '', '', 'Sputum', 'MU', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '12:00:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 11:59:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:59:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78614, '', '31', 160, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:40:00', 'HS', '2017-12-15', '13:40:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:00:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:00:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78615, '', '31', 160, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:40:00', 'HS', '2017-12-15', '13:40:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:02:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:02:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78616, '', '31', 161, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '11:17:00', 'HS', '2017-12-15', '13:40:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:03:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:03:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78617, '', '31', 161, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '11:17:00', 'HS', '2017-12-15', '13:40:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:04:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:04:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78618, '', '31', 162, 0, 0, 'Week26', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '12:33:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:06:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:06:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78619, '', '31', 162, 0, 0, 'Week26', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '12:33:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:16:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:16:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78620, '', 'IOM', 151, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-16', '08:00:00', 'NMJ', '2017-12-16', '06:30:00', '12', '2017-12-16', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-16', '03:00:00', 'NMJ', '', '0000-00-00', '03:00:00', '', '2017-12-18 06:31:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 06:31:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78621, '', '31', 163, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '14:10:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:34:00', '', '2017-12-18 09:16:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:16:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78622, '', '31', 163, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '14:10:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:17:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:17:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78623, '', '31', 164, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:09:00', 'NMJ', '2017-12-15', '17:00:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:19:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:19:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78624, '', '31', 164, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:09:00', 'NMJ', '2017-12-15', '17:00:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:20:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:20:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78625, '', '31', 16, 0, 0, 'Week02', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '13:15:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:21:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:21:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78626, '', 'IOM', 165, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'NI', '2017-12-18', '10:50:00', '12', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'IOM', '2017-12-18', '10:00:00', '', '2017-12-18 09:24:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:24:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78627, '', 'IOM', 166, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'NI', '2017-12-18', '10:50:00', '12', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'IOM', '2017-12-18', '10:00:00', '', '2017-12-18 09:25:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:25:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78628, '', '31', 167, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-18', '10:21:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:27:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:27:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78629, '', '31', 168, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:35:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:28:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:28:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78630, '', '31', 169, 0, 0, 'Week08', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-18', '09:35:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:30:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:30:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78631, '', '31', 170, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:15:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:32:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:32:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78632, '', '31', 170, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:15:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:33:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:33:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78633, '', '31', 171, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:06:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:34:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:34:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78634, '', '31', 171, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:06:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:35:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:35:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78635, '', '31', 172, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:50:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:38:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:38:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78636, '', '31', 172, 0, 0, 'Month08', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:50:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:39:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:39:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78637, '', 'B', 173, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-18', '15:15:00', '5', '2017-12-18', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-18 13:01:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 13:01:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78638, '', 'IOM', 174, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:47:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:47:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78639, '', 'IOM', 174, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-14', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:51:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:51:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78640, '', 'IOM', 174, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Salivary', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:52:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:52:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78641, '', 'IOM', 166, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:54:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:54:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78642, '', '31', 175, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:55:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:55:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78643, '', '31', 175, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '15:00:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:57:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:57:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78644, '', '31', 176, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:58:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:58:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78645, '', '31', 177, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:00:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:00:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78646, '', '31', 177, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:01:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:01:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78647, '', '31', 178, 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:03:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:03:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78648, '', '31', 178, 0, 0, 'Month15', '', '', 'Sputum', 'Mucosalivary', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:05:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:05:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78649, '', '31', 179, 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:07:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:07:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78650, '', '31', 179, 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:09:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:09:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78651, '', '31', 180, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:11:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:11:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78652, '', '31', 180, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:12:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:12:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78653, '', '31', 181, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:14:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:14:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78654, '', '31', 181, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:16:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:16:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78655, '', '31', 182, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:16:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:17:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:17:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78656, '', '31', 182, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:18:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:18:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:18:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78657, '', '31', 183, 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:00:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:20:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:20:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78658, '', '31', 184, 0, 0, 'Month03', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-18', '12:25:00', 'MC', '2017-12-18', '15:16:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:27:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:27:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples` (`labno`, `sample_id`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78659, '', '31', 185, 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-18', '11:12:00', 'MC', '2017-12-18', '15:46:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:30:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:30:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78660, '', '31', 185, 0, 0, 'Month09', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-18', '11:12:00', 'MC', '2017-12-18', '15:46:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:31:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:31:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78661, '', 'B', 186, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 12.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '12:05:00', '10', '2017-12-18', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-19 11:39:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:39:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78662, '', 'B', 187, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:16:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:16:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78663, '', 'B', 188, 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:19:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:19:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78664, '', 'B', 189, 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', 'Spot', '2017-12-19', '12:45:00', 'NMJ', '2017-12-20', '09:50:00', '', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:21:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:21:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78665, '', 'B', 190, 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:45:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:45:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78666, '', 'B', 191, 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:47:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:47:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78667, '', '31', 192, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:18:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:49:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:49:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78668, '', '31', 193, 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:51:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:51:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78669, '', '31', 193, 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:52:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:52:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78670, '', '31', 194, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:54:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:54:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78671, '', '31', 194, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:56:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:56:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78672, '', '31', 195, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:58:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:58:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78673, '', '31', 195, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:59:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:59:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78674, '', '31', 196, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:00:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:00:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78675, '', '31', 196, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '11:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:02:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:02:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78676, '', '31', 197, 0, 0, 'Month05', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'FF', '2017-12-20', '11:15:00', '', '2017-12-20 11:05:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:05:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78677, '', '31', 198, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:06:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:06:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78678, '', '31', 198, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:08:13', '', '', '2017-12-20 11:08:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78679, '', 'BR', 199, 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'Watery', 5.0, '', '', 'Not Provided', 'IS', '', '2017-12-19', '07:52:00', 'AK', '2017-12-19', '15:53:00', '1', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-19', '08:45:00', '', '2017-12-20 11:23:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:23:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78680, '', 'IOM', 166, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '10:00:00', '', '2017-12-20 12:38:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:38:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78681, '', 'IOM', 200, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-20 12:39:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:39:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78682, '', '31', 201, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:41:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:41:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78683, '', '31', 201, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:44:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:44:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78684, '', '31', 62, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:45:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:45:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78685, '', '31', 62, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:47:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:47:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78686, '', 'B', 202, 19, 0, 'Unknown', '', '', 'Sputum', 'Ms', 2.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-20', '13:00:00', 'MC', '2017-12-20', '15:35:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-21 06:53:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 06:53:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78687, '', 'BR', 203, 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'CLEAR', 5.0, '', '', 'Not Provided', 'IS', 'Spot', '2017-12-21', '07:59:00', 'HS', '2017-12-21', '10:40:00', '', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '08:30:00', '', '2017-12-21 10:42:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:42:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78688, '', '31', 204, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:20:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:44:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:44:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78689, '', '31', 205, 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:45:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:45:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:45:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78690, '', '31', 206, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:49:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:49:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78691, '', '31', 206, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:50:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:50:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78692, '', '31', 207, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:53:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:53:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78693, '', '31', 207, 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:55:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:55:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78694, '', '31', 106, 0, 0, 'Month09', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '05:07:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:57:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:57:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78695, '', '31', 208, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:58:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:58:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78696, '', '31', 208, 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:00:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:00:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78697, '', '31', 209, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:02:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:02:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78698, '', '31', 209, 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:03:27', '', '', '2017-12-21 11:03:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78699, '', '31', 210, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '15:09:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:05:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:05:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78700, '', '31', 210, 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '15:09:00', 'MC', '2017-12-21', '11:11:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '15:09:00', '', '2017-12-21 11:09:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:09:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78701, '', 'IOM', 211, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '10:00:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-21 11:12:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:12:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78702, '', 'IOM', 211, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:15:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:15:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78703, '', 'IOM', 200, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:17:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:17:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78704, '', 'IOM', 212, 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:21:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:21:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78705, '', 'IOM', 212, 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:22:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:22:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78706, '', 'IOM', 212, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:23:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:23:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78707, '', '31', 61, 0, 0, 'Week02', '', '', 'Sputum', 'Sa', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:40:00', 'MC', '2017-12-21', '15:00:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:30:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:30:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78708, '', '31', 65, 0, 0, 'Week04', '', '', 'Sputum', 'Ms', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '13:42:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:31:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:31:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78709, '', '31', 213, 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:33:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:33:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78710, '', '31', 213, 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:34:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:34:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78711, '', '31', 103, 0, 0, 'Week04', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '09:35:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:07:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:07:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78712, '', '31', 214, 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:10:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:09:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:09:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78713, '', '31', 215, 0, 0, 'Week12', '', '', 'Sputum', 'MU', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-22', '09:39:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:10:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:10:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78714, '', '31', 216, 0, 0, 'Week12', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:00:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:12:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:12:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78715, '', '31', 217, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:14:27', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:14:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78716, '', '31', 217, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:19:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:19:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78717, '', '31', 218, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:20:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:20:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78718, '', '31', 224, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '0000-00-00', '08:00:00', 'HS', '0000-00-00', '12:30:00', '12', '0000-00-00', ',', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', 'NI', 'IOM', '0000-00-00', '10:00:00', '', '2017-12-22 09:57:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 12:56:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78719, '', 'IOM', 200, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 09:59:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:59:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78720, '', 'IOM', 211, 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:03:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:03:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78721, '', 'IOM', 219, 0, 0, 'Month04', '', '', 'Sputum', 'MS', 10.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '00:00:00', '', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:04:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:08:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78722, '', 'IOM', 219, 0, 0, 'Month01', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:06:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:06:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78723, '', 'IOM', 220, 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:09:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:09:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78724, '', 'IOM', 220, 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:12:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:12:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78725, '', 'IOM', 221, 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:13:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:13:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78726, '', 'IOM', 221, 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:15:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:15:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78727, '', '31', 218, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:16:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:16:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78728, '', '31', 222, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:18:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:18:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78729, '', '31', 222, 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:20:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:20:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78730, '', '31', 223, 0, 0, 'Week26', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:21:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:21:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78731, '', '31', 223, 0, 0, 'Week26', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:22:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:22:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `samples_hist`
--

CREATE TABLE IF NOT EXISTS `samples_hist` (
  `labno` int(10) NOT NULL COMMENT 'Unique Lab number',
  `studycode` varchar(10) NOT NULL COMMENT 'studycode',
  `patient` int(10) NOT NULL COMMENT 'patients table key',
  `ageyears` int(10) NOT NULL,
  `agemonths` int(10) NOT NULL,
  `visitinterval` varchar(255) NOT NULL,
  `sample_id` varchar(255) NOT NULL,
  `samplehierachy` varchar(255) NOT NULL,
  `requestreason` varchar(255) NOT NULL,
  `spectype` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` int(10) NOT NULL,
  `consistency` varchar(255) NOT NULL,
  `collector` varchar(255) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colldate` date NOT NULL,
  `colltime` time NOT NULL,
  `rcttech` varchar(255) NOT NULL,
  `rctdate` date NOT NULL,
  `rcttime` time NOT NULL,
  `requester` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `examination` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `specstorage` varchar(255) NOT NULL,
  `processdate` date NOT NULL,
  `inoculationdate` int(11) NOT NULL,
  `inoculationtime` int(11) NOT NULL,
  `processtime` time NOT NULL,
  `processtech` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `transportdate` date NOT NULL,
  `transporttime` time NOT NULL,
  `accessiontime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accessiontech` varchar(255) NOT NULL,
  `lasteditby` varchar(255) NOT NULL,
  `lastedittime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastreviewer` varchar(255) NOT NULL,
  `lastreviewtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `innocdate` date NOT NULL,
  `innoctime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `samples_hist`
--

INSERT INTO `samples_hist` (`labno`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `sample_id`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `id`, `examination`, `media`, `specstorage`, `processdate`, `inoculationdate`, `inoculationtime`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `innocdate`, `innoctime`) VALUES
(76763, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 2, '', '', 'Spot', '2017-09-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 1, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 13:05:17', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76759, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 2, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 12:56:55', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76758, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 3, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 12:55:00', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76777, 'B', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 4, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-06 11:52:31', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76783, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 15, '', '', 'Early Morning', '2017-09-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 5, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-06 12:13:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76816, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 2, '', '', 'Spot', '2017-09-08', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 6, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-08 11:57:43', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76750, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 7, ',storage,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 12:35:22', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76783, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 15, '', '', 'Early Morning', '2017-09-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 8, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-06 12:13:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76742, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', 'Spot', '2017-09-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 9, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-04 12:44:57', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76858, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 10, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 05:20:25', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76864, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-09-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 11, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 05:35:00', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76874, '31', 0, 0, 0, '', '', '', '', 'Sputum', '', 5, '', '', 'Spot', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 12, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 05:58:04', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76883, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 13, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 06:36:53', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76883, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 14, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 06:36:53', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76888, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 15, ',storage,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 06:58:03', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76894, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Early Morning', '2017-09-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 16, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 07:19:56', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76914, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-09-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 17, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 08:29:51', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76924, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 2, '', '', 'Early Morning', '2017-09-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 18, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 12:47:03', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76925, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-09-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 19, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 12:51:19', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77025, '31', 0, 0, 0, '', '', '', '', 'Sputum', '', 5, '', '', 'Spot', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 20, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-28 07:51:58', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77036, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 21, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 12:54:42', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77037, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 2, '', '', 'Spot', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 22, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 12:57:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77038, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 23, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 13:00:55', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77058, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', 'Spot', '2017-09-22', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 24, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 13:57:27', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77058, '', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucoid', 0, '', '', 'Spot', '2017-09-22', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 25, 'genexpert,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 13:57:27', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77076, 'B', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucoid', 1, '', '', '', '2017-09-26', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 26, 'genexpert,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-12 12:46:06', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77153, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-09-28', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 27, ',storage,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 09:36:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77162, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 6, '', '', 'Spot', '2017-09-29', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 28, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 10:25:23', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77174, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-29', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 29, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 10:59:15', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77234, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 14, '', '', 'Early Morning', '2017-10-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 30, 'fm,identification,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 06:01:47', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77233, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Early Morning', '2017-10-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 31, 'fm,identification,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 06:00:43', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77232, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Early Morning', '2017-10-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 32, 'fm,identification,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 05:59:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77231, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 10, '', '', 'Early Morning', '2017-10-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 33, 'fm,identification,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 05:58:31', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77269, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 8, '', '', 'Spot', '2017-10-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 34, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 09:03:38', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77270, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 8, '', '', 'Spot', '2017-10-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 35, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 09:05:01', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77273, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 7, '', '', 'Early Morning', '2017-10-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 36, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 09:19:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77271, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 13, '', '', 'Early Morning', '2017-10-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 37, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 09:16:36', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77315, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 38, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 06:40:31', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77314, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 6, '', '', 'Spot', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 39, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 06:37:53', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77313, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 40, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 06:35:50', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77325, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Blood', 11, '', '', 'Early Morning', '2017-10-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 41, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 10:52:54', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77324, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 12, '', '', 'Early Morning', '2017-10-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 42, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 10:51:40', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77353, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-10-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 43, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 12:52:31', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77360, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', 'Spot', '2017-10-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 44, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 13:05:35', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77370, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 45, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 13:35:42', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77395, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 46, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:15:46', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77396, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 47, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:17:01', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77397, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 48, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:18:28', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77398, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 49, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:19:35', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77399, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 50, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:21:15', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77400, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 51, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:22:39', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77413, 'B', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 52, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 06:36:03', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77419, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 10, '', '', 'Early Morning', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 53, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 07:09:42', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77418, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucopurulent', 5, '', '', 'Early Morning', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 54, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 07:08:37', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77417, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 10, '', '', 'Early Morning', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 55, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 07:07:27', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77426, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 2, '', '', 'Early Morning', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 56, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 07:27:34', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77429, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-10-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 57, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-25 07:41:44', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77474, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 3, '', '', 'Spot', '2017-10-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 58, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-27 07:24:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77474, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 3, '', '', 'Spot', '2017-10-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 59, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-27 07:24:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77502, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-10-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 60, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 06:38:12', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77501, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-10-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 61, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 06:36:15', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77506, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 10, '', '', 'Early Morning', '2017-10-18', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 62, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 06:57:49', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77525, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-18', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 63, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 08:57:30', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77526, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-10-18', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 64, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 09:01:22', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77533, 'SC', 0, 0, 0, '', '', '', '', 'Saliva', '', 0, '', '', 'Spot', '2017-10-18', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 65, ',storage,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-30 09:54:04', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77560, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', '', '2017-10-19', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 66, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-01 13:09:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77561, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-10-19', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 67, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-01 13:10:31', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77648, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 8, '', '', '', '2017-10-25', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 68, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-02 13:05:27', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77700, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 2, '', '', 'Spot', '2017-10-26', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 69, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-06 12:21:36', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77798, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 5, '', '', 'Spot', '2017-11-01', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 70, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-10 12:49:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76742, '', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 0, '', '', 'Spot', '2017-09-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 71, 'solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-04 12:44:57', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76905, 'B', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-09-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 72, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 07:57:36', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77010, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 73, 'fm,identification,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-28 07:12:32', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77851, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Ms', 10, '', '', 'Early Morning', '2017-11-02', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 74, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 07:34:29', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77852, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'S', 10, '', '', 'Early Morning', '2017-11-02', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 75, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 07:35:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77853, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Ms', 5, '', '', 'Spot', '2017-11-02', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 76, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 08:04:52', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77854, '31', 0, 0, 0, '', '', '', '', 'Sputum', '3', 3, '', '', 'Spot', '2017-11-02', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 77, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 08:06:06', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77876, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 8, '', '', 'Spot', '2017-11-03', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 78, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 09:03:05', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77897, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 26, '', '', 'Early Morning', '2017-11-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 79, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-18 09:53:30', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77925, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 7, '', '', 'Spot', '2017-11-07', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 80, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-20 11:18:00', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77967, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 3, '', '', 'Spot', '2017-11-08', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 81, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-20 14:27:47', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77712, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-27', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 82, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-07 13:51:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76751, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 8, '', '', 'Spot', '2017-09-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 83, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 12:37:39', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76788, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', 'Spot', '2017-09-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 84, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-08 09:19:25', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76886, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 85, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 06:43:30', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77005, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 8, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 86, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-27 09:01:41', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77142, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-28', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 87, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 09:00:21', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77993, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 6, '', '', 'Spot', '2017-11-09', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 88, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 11:16:09', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78006, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 3, '', '', 'Spot', '2017-11-09', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 89, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 12:47:56', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78013, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 10, '', '', 'Spot', '2017-11-10', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 90, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 12:57:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78060, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 3, '', '', 'Early Morning', '2017-11-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 91, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 14:20:26', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78066, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 3, '', '', 'Spot', '2017-11-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 92, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 14:32:10', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78065, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 5, '', '', 'Spot', '2017-11-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 93, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-22 14:31:11', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76762, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 94, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-05 13:03:03', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76781, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 4, '', '', 'Spot', '2017-09-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 95, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-06 12:05:21', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76942, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 3, '', '', 'Spot', '2017-09-15', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 96, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-26 11:33:19', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76997, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 97, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-27 08:28:17', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77004, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 98, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-27 08:59:21', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78093, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 4, '', '', 'Spot', '2017-11-15', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 99, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-25 07:19:50', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78112, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 5, '', '', 'Spot', '2017-11-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 100, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-25 08:01:52', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78129, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 4, '', '', 'Spot', '2017-11-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 101, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 06:42:43', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78143, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 6, '', '', 'Spot', '2017-11-16', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 102, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 07:06:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78199, 'B', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 3, '', '', '', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 103, 'genexpert,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 13:53:39', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78218, '36', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 4, '', '', 'Spot', '2017-11-22', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 104, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 14:28:41', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78225, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 9, '', '', 'Early Morning', '2017-11-23', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 105, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 14:39:29', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78256, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 3, '', '', 'Spot', '2017-11-24', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 106, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-11-27 15:19:46', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76887, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 7, '', '', 'Spot', '2017-09-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 107, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 06:56:02', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76937, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Early Morning', '2017-09-15', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 108, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-26 10:54:26', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76988, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', '', 2, '', '', 'Early Morning', '2017-09-19', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 109, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-27 08:04:11', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77125, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 10, '', '', 'Early Morning', '2017-09-27', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 110, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 08:09:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77287, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 8, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 111, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:24:46', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 112, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 113, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 114, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 115, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77289, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Spot', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 116, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:27:35', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 117, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77288, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 5, '', '', 'Early Morning', '2017-10-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 118, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 13:26:18', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77394, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Early Morning', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 119, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:14:15', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76783, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 15, '', '', 'Early Morning', '2017-09-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 120, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-06 12:13:20', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76829, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 2, '', '', 'Spot', '2017-09-08', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 121, 'solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-13 07:05:36', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77017, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucoid', 3, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 122, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-28 07:32:28', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77018, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 6, '', '', 'Spot', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 123, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-28 07:34:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76890, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucopurulent', 5, '', '', 'Spot', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 124, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 07:03:26', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76891, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Early Morning', '2017-09-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 125, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 07:06:42', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76922, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 3, '', '', 'Spot', '2017-09-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 126, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 12:42:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76894, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 4, '', '', 'Early Morning', '2017-09-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 127, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 07:19:56', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76924, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 2, '', '', 'Early Morning', '2017-09-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 128, 'fm,solidculture,liquidculture,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-15 12:47:03', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(76977, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 2, '', '', 'Early Morning', '2017-09-19', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 129, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-27 07:34:09', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77013, 'SC', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 3, '', '', 'Spot', '2017-09-20', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 130, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-09-28 07:19:08', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77031, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 7, '', '', 'Early Morning', '2017-09-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 131, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-11 12:37:45', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77071, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Salivary', 12, '', '', 'Early Morning', '2017-09-25', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 132, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-12 12:31:23', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples_hist` (`labno`, `studycode`, `patient`, `ageyears`, `agemonths`, `visitinterval`, `sample_id`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `id`, `examination`, `media`, `specstorage`, `processdate`, `inoculationdate`, `inoculationtime`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `innocdate`, `innoctime`) VALUES
(77092, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 2, '', '', 'Early Morning', '2017-09-26', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 133, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-13 08:16:34', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77117, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Early Morning', '2017-09-27', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 134, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 07:23:56', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77118, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Early Morning', '2017-09-27', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 135, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-18 07:30:02', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77222, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 10, '', '', 'Early Morning', '2017-10-04', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 136, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-20 08:29:11', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77261, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Early Morning', '2017-10-05', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 137, ',,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-23 08:25:09', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(77389, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'Mucosalivary', 5, '', '', 'Early Morning', '2017-10-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 138, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-10-24 14:08:00', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78398, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 5, '', '', 'Early Morning', '2017-12-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 139, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-06 11:01:33', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78440, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 7, '', '', 'Spot', '2017-12-07', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 140, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-08 10:40:53', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78490, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 4, '', '', 'Early Morning', '2017-12-11', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 141, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-11 11:12:32', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78524, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 6, '', '', 'Early Morning', '2017-12-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 142, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-12 10:55:59', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78515, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 8, '', '', 'Spot', '2017-12-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 143, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-12 10:41:24', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78516, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 7, '', '', 'Spot', '2017-12-12', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 144, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-12 10:42:43', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78544, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 6, '', '', 'Early Morning', '2017-12-13', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 145, 'fm,zn,solidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-13 11:48:00', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78554, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 6, '', '', 'Early Morning', '2017-12-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 146, 'fm,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-14 11:22:15', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78595, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 5, '', '', 'Early Morning', '2017-12-15', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 147, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-15 08:49:56', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78587, '31', 0, 0, 0, '', '', '', '', 'Sputum', 'SA', 7, '', '', 'Spot', '2017-12-14', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 148, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-15 08:26:12', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78721, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 10, '', '', 'Early Morning', '2017-12-21', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 149, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-22 10:04:40', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78718, 'IOM', 0, 0, 0, '', '', '', '', 'Sputum', 'MS', 3, '', '', 'Early Morning', '2017-12-22', '00:00:00', '', '0000-00-00', '00:00:00', '', '0000-00-00', 150, 'fm,solidculture,liquidculture,,', '', '', '0000-00-00', 0, 0, '00:00:00', '', '', '0000-00-00', '00:00:00', '2017-12-22 09:57:05', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `samples_patients`
--

CREATE TABLE IF NOT EXISTS `samples_patients` (
  `labno` int(200) DEFAULT NULL,
  `studycode` varchar(10) DEFAULT NULL,
  `pid_auto` int(10) DEFAULT '0',
  `pid` varchar(255),
  `pid_other` varchar(255),
  `pinitials` varchar(255),
  `name` varchar(255),
  `dob` date,
  `gender` varchar(255),
  `telephone` varchar(255),
  `village` varchar(255),
  `subcounty` varchar(255),
  `district` varchar(255),
  `sample_id` varchar(255) NOT NULL,
  `ageyears` int(10) NOT NULL,
  `agemonths` int(10) NOT NULL,
  `visitinterval` varchar(255) NOT NULL,
  `samplehierachy` varchar(255) NOT NULL,
  `requestreason` varchar(255) NOT NULL,
  `spectype` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `volume` float(10,1) DEFAULT NULL,
  `consistency` varchar(255) NOT NULL,
  `peripheralres` varchar(255) NOT NULL,
  `hivstatus` varchar(255) NOT NULL,
  `collector` varchar(255) NOT NULL,
  `collmethod` varchar(255) NOT NULL,
  `colldate` date NOT NULL,
  `colltime` time NOT NULL,
  `rcttech` varchar(255) NOT NULL,
  `rctdate` date NOT NULL,
  `rcttime` time NOT NULL,
  `requester` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `examination` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `storage` int(5) NOT NULL,
  `specstorage` varchar(255) NOT NULL,
  `processdate` date NOT NULL,
  `processtime` time NOT NULL,
  `processtech` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `transportdate` date NOT NULL,
  `transporttime` time NOT NULL,
  `comment` varchar(255) NOT NULL,
  `accessiontime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `accessiontech` varchar(255) NOT NULL,
  `lasteditby` varchar(255) NOT NULL,
  `lastedittime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastreviewer` varchar(255) NOT NULL,
  `lastreviewtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `inoculationdate` date NOT NULL,
  `inoculationtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samples_patients`
--

INSERT INTO `samples_patients` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78341, '31', 1, '96282', 'Not Provided', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, '1 PPTR', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:20:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:50:00', '', '2017-12-01 11:16:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:16:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78342, '31', 2, '96413', 'Not Provided', 'JO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:30:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:50:00', '', '2017-12-01 11:18:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:18:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78343, '31', 3, '96409', 'Not Provided', 'KA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'Mucoid', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-11-30', '16:08:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-11-30', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:20:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:20:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78344, '31', 4, '96379', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '11:05:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:21:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:21:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78345, '31', 5, '96377', 'Not Provided', 'YK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '09:35:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:22:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:22:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78346, '31', 6, '96267', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:50:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:24:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:24:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78347, '31', 7, '96285', 'Not Provided', 'PW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '09:39:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:25:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:25:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78348, '31', 8, '96305', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:10:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:26:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:26:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78349, '31', 8, '96305', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '10:10:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:28:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:28:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78350, '31', 9, '96271', 'Not Provided', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', 'G', 'Not Provided', 'VK', 'Spot', '2017-12-01', '18:28:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:29:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:29:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78351, '31', 9, '96271', 'Not Provided', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-01', '19:18:00', 'MC', '2017-12-01', '12:50:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:30:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:30:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78352, '31', 10, '96035', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:14:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:31:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:31:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78353, '31', 10, '96035', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '11:14:00', 'MC', '2017-12-01', '12:50:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:33:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:33:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78354, '31', 11, '95941', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '08:32:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:34:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:34:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78355, '31', 11, '95941', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '08:32:00', 'MC', '2017-12-01', '12:50:00', '7', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '11:20:00', '', '2017-12-01 11:35:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:35:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78356, 'B', 12, '422', 'Not Provided', 'NH', 'Najjingo Hadija', '0000-00-00', 'Female', 'Not Provided', 'Bunamwaya', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-01', '14:35:00', '19', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-01 11:54:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78357, 'B', 13, '423', 'Not Provided', 'BB', 'BIRUNGI BEN', '0000-00-00', 'Male', 'Not Provided', 'NANA', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-01', '12:50:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-01 11:56:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 11:56:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78358, '31', 14, '96329', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month02', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '12:20:00', 'NMJ', '2017-12-01', '16:46:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:04:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:04:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78359, '31', 15, '96128', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '12:29:00', 'NMJ', '2017-12-01', '16:46:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:06:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:06:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78360, '31', 15, '96128', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-01', '12:29:00', 'NMJ', '2017-12-01', '16:46:00', '2', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-01', '14:45:00', '', '2017-12-01 14:07:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-01 14:07:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78361, '31', 16, '96474', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Day0', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '15:24:00', 'NI', '2017-12-04', '11:08:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:47:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:47:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78362, '31', 16, '96474', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Day0', '', '', 'Sputum', 'Ms', 2.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-01', '15:24:00', 'NI', '2017-12-04', '11:08:00', '1', '2017-12-01', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:48:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:48:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78363, '31', 17, '95938', 'Not Provided', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:00:00', 'NI', '2017-12-04', '11:08:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:40:00', '', '2017-12-04 10:50:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:50:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78364, '31', 17, '95938', 'Not Provided', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:00:00', 'NI', '2017-12-04', '11:08:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:51:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:51:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78365, '31', 1, '96282', 'Not Provided', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:15:00', 'NI', '2017-12-04', '11:08:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '09:45:00', '', '2017-12-04 10:53:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:53:07', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78366, 'IOM', 18, 'D1700276', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SI', 'Early Morning', '2017-12-04', '08:00:00', 'NI', '2017-12-04', '11:44:00', '23', '2017-12-04', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-04', '10:00:00', '', '2017-12-04 10:54:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78367, 'IOM', 19, 'D1700275', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-04', '08:00:00', 'NI', '2017-12-04', '11:44:00', '23', '2017-12-04', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-04', '10:00:00', '', '2017-12-04 10:56:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 10:56:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78368, 'B', 20, '424', 'Not Provided', 'MB', 'Mwebe Badru', '0000-00-00', 'Male', 'Not Provided', 'Ndejje', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Mucosalivary', 1.5, '', '', 'Not Provided', 'Not Provided', '', '2017-11-27', '03:00:00', 'MC', '2017-12-04', '14:27:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-04 11:58:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 11:58:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78369, 'B', 21, '425', 'Not Provided', 'KA', 'Kafuma Anold', '0000-00-00', 'Male', 'Not Provided', 'Mutundwe', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 0.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-04', '11:14:00', 'MC', '2017-12-04', '14:27:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-04 12:02:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:02:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78370, '31', 22, '96446', 'Not Provided', 'WN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:55:00', 'MC', '2017-12-04', '15:26:00', '1', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:35:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:35:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78371, '31', 23, '96040', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:51:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:36:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:36:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78372, '31', 23, '96040', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:51:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:38:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:38:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78373, '31', 24, '96356', 'Not Provided', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:00:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:39:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:39:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78374, '31', 24, '96356', 'Not Provided', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:00:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:40:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:40:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78375, '31', 25, '96131', 'Not Provided', 'PK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:46:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:42:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:42:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78376, '31', 25, '96131', 'Not Provided', 'PK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-04', '09:46:00', 'MC', '2017-12-04', '15:26:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:43:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:43:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78377, '31', 26, '96042', 'Not Provided', 'PA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:32:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:45:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:45:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78378, '31', 26, '96042', 'Not Provided', 'PA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:32:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:46:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:46:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78379, '31', 27, '95933', 'Not Provided', 'TN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-04', '12:04:00', 'MC', '2017-12-04', '15:26:00', '', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:47:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:47:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78380, '31', 27, '95933', 'Not Provided', 'TN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-04', '12:04:00', 'MC', '2017-12-04', '15:26:00', '2', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-04', '14:30:00', '', '2017-12-04 12:49:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-04 12:49:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78381, 'IOM', 19, 'D1700275', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'Sa', 6.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:40:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:40:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78382, 'IOM', 18, 'D1700276', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 11.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:41:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:41:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78383, 'IOM', 28, 'D1700277', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:43:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:43:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78384, 'IOM', 29, 'F17001531', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month01', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-05', '11:02:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'IOM', '2017-12-05', '10:00:00', '', '2017-12-05 11:44:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:44:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78385, '31', 30, '96449', 'Not Provided', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '10:30:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:46:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:46:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78386, '31', 31, '96381', 'Not Provided', 'JJ', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '10:41:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:48:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:48:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78387, '31', 32, '96382', 'Not Provided', 'RK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '09:20:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:49:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:49:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78388, '31', 33, '96142', 'Not Provided', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'TM', '', '0000-00-00', '08:15:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:50:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:50:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78389, '31', 33, '96142', 'Not Provided', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-05', '08:15:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:51:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:51:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78390, '31', 34, '96043', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '10:42:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:53:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:53:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78391, '31', 34, '96043', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '10:42:00', 'NI', '2017-12-05', '12:40:00', '2', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:54:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:54:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78392, '31', 35, '96029', 'Not Provided', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '11:26:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:55:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:55:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78393, '31', 35, '96029', 'Not Provided', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'Salivary', 2.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-05', '11:26:00', 'NI', '2017-12-05', '12:40:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'AS', '2017-12-05', '11:50:00', '', '2017-12-05 11:57:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 11:57:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78394, 'SC', 36, '96429', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Recall', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '12:21:00', 'MC', '2017-12-05', '15:28:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:00:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:00:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78395, 'SC', 36, '96429', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Recall', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', '', '2017-12-05', '12:21:00', 'MC', '2017-12-05', '15:28:00', '7', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:02:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:02:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78396, '31', 37, '96140', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '13:48:00', 'MC', '2017-12-05', '15:38:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:04:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:04:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78397, '31', 37, '96140', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-05', '13:48:00', 'MC', '2017-12-05', '15:28:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '0000-00-00', '00:00:00', '', 'GP', '2017-12-05', '14:30:00', '', '2017-12-05 13:05:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-05 13:05:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78398, '31', 38, '96451', 'Not Provided', 'JA', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Early Morning', '2017-12-06', '10:00:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '00:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:01:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:11:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78399, '31', 39, '96415', 'Not Provided', 'JL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '0000-00-00', '03:00:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:03:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:03:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78400, '31', 40, '96414', 'Not Provided', 'WM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'PU', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '10:41:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:04:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:04:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78401, '31', 41, '96383', 'Not Provided', 'FM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', '', '2017-12-06', '10:09:00', 'MC', '2017-12-06', '12:18:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:11:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:11:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78402, '31', 42, '96384', 'Not Provided', 'LG', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '10:43:00', 'MC', '2017-12-06', '12:18:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:13:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:13:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78403, '31', 43, '96041', 'Not Provided', 'CW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'Salivary', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '17:09:00', 'MC', '2017-12-06', '12:01:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '11:10:00', '', '2017-12-06 11:15:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 11:15:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78404, 'B', 44, '426', 'Not Provided', 'AB', 'ARINDA BERYL', '0000-00-00', 'Female', 'Not Provided', 'NALUMUNYE', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', 'Spot', '2017-12-06', '03:00:00', 'MC', '2017-12-06', '14:58:00', '5', '2017-12-06', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-06 12:05:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:05:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78405, 'IOM', 19, 'D1700275', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:49:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:49:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78406, 'IOM', 18, 'D1700276', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:50:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:50:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78407, 'IOM', 28, 'D1700277', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-06', '08:00:00', 'MC', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:53:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:53:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78408, 'IOM', 45, 'D1700278', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:54:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:54:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78409, 'IOM', 29, 'F17001531', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month01', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'NI', '2017-12-06', '15:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'R ', '2017-12-06', '10:00:00', '', '2017-12-06 12:58:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 12:58:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78410, '31', 46, '96154', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month19', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:07:00', 'MC', '2017-12-06', '16:01:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:09:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:09:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78411, '31', 46, '96154', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:07:00', 'MC', '2017-12-06', '16:01:00', '7', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:10:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:10:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78412, '31', 47, '96144', 'Not Provided', 'GN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:10:00', 'MC', '2017-12-06', '16:01:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:12:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:12:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78413, '31', 47, '96144', 'Not Provided', 'GN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-06', '11:10:00', 'MC', '2017-12-06', '16:01:00', '2', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:13:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:13:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78414, '31', 48, '96278', 'Not Provided', 'PO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'SputumW', 'SA', 10.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-06', '11:00:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:15:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:15:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78415, '31', 48, '96278', 'Not Provided', 'PO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-06', '11:00:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-06', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', '', 'GP', '2017-12-06', '14:30:00', '', '2017-12-06 13:16:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:16:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78416, '31', 43, '96041', 'Not Provided', 'CW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-05', '17:09:00', 'MC', '2017-12-06', '16:01:00', '1', '2017-12-05', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-06', '03:00:00', 'MC', 'PK', '2017-12-06', '14:30:00', '', '2017-12-06 13:22:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-06 13:22:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78417, '31', 49, '96455', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '11:11:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:39:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:39:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78418, '31', 1, '96282', 'Not Provided', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'PPTR 7', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '10:45:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:57:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:57:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78419, '31', 50, '96385', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '10:25:00', 'MC', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 10:59:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 10:59:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78420, '31', 51, '96311', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:00:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:00:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78421, '31', 51, '96311', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '12:56:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:01:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:01:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples_patients` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78422, '31', 52, '96314', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-07', '08:56:00', 'MC', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:07:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:07:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78423, '31', 52, '96314', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'Salivary', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-07', '08:56:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:09:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:09:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78424, '31', 53, '96306', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-07', '09:39:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:10:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:10:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78425, '31', 53, '96306', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', '', '2017-12-07', '09:39:00', 'NI', '2017-12-07', '12:35:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:11:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:11:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78426, '31', 54, '96276', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '07:57:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:13:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:13:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78427, '31', 54, '96276', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '07:57:00', 'NI', '2017-12-07', '12:35:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:14:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:14:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78428, '31', 55, '96279', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '10:07:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:15:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:15:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78429, '31', 55, '96279', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', '', '2017-12-07', '10:07:00', 'NI', '2017-12-07', '12:35:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'GP', '2017-12-07', '11:30:00', '', '2017-12-07 11:16:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:16:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78430, 'IOM', 28, 'D1700277', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', 's', '', 'Sputum', 'MU', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:39:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:39:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78431, 'IOM', 45, 'D1700278', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:40:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:40:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78432, 'IOM', 56, 'D1700279', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:42:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:42:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78433, 'IOM', 56, 'D1700279', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:43:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:43:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78434, 'IOM', 29, 'F17001531', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month01', '', '', 'Sputum', 'SA', 3.0, '', 'R', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-07', '13:10:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'MC', 'R ', '2017-12-07', '10:00:00', '', '2017-12-07 11:44:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 11:44:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78435, 'B', 57, '427', 'Not Provided', 'IN', 'Irene Nakacwa', '0000-00-00', 'Female', 'Not Provided', 'Luwafu Salaama', 'Makindye', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MU', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-07', '12:35:00', '5', '2017-12-06', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:46:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:46:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78436, 'B', 58, '428', 'Not Provided', 'TA', 'TUGABIRWE ANNET', '0000-00-00', 'Female', 'Not Provided', 'Nankyinga Zana', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-07', '12:35:00', '5', '2017-12-07', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:48:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:48:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78437, 'B', 59, '429', 'Not Provided', 'SK', 'SSALONGO KATALIKABBE', '0000-00-00', 'Male', 'Not Provided', 'Not Provided', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-07', '14:20:00', '', '0000-00-00', 'zn,,', ',,', 0, '2-8 deg. C', '2017-12-07', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-07 12:50:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-07 12:50:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78438, 'B', 60, '430', 'Not Provided', 'SJ', 'Sentenza James', '0000-00-00', 'Not Provided', 'Not Provided', 'Bweyogerere', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Ms', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-08', '11:15:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-08 09:01:27', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 09:01:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78439, '31', 61, '96479', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Day0', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '11:44:00', 'NI', '2017-12-07', '15:03:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:38:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:38:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78440, '31', 61, '96479', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Day0', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '11:45:00', 'NI', '2017-12-07', '15:55:00', '1', '2017-12-07', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '00:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:40:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-09 10:23:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78441, '31', 62, '95959', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '12:22:00', 'NI', '2017-12-07', '15:55:00', '2', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:42:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:42:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78442, '31', 63, '96454', 'Not Provided', 'DK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-07', '13:45:00', 'NI', '2017-12-07', '15:55:00', '7', '2017-12-07', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-07', '14:45:00', '', '2017-12-08 10:43:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:43:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78443, 'IOM', 45, 'D1700278', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-08', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:45:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:45:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78444, 'IOM', 56, 'D1700279', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'RN', 'Early Morning', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-08', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:46:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:46:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78445, 'IOM', 64, 'D1700280', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 15.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-05', '08:00:00', 'MC', '2017-12-08', '10:00:00', '12', '2017-12-05', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:48:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:48:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78446, 'IOM', 64, 'D1700280', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-06', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-06', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:49:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:49:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78447, 'IOM', 64, 'D1700280', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-07', '08:00:00', 'MC', '2017-12-08', '12:30:00', '12', '2017-12-07', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'IOM', '2017-12-08', '10:00:00', '', '2017-12-08 10:51:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:51:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78448, '31', 65, '96468', 'Not Provided', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:55:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:52:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:52:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78449, '31', 66, '96453', 'Not Provided', 'BK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MP', 7.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:53:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:53:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78450, '31', 67, '96387', 'Not Provided', 'GM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MP', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '07:55:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:55:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:55:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78451, '31', 68, '96389', 'Not Provided', 'AB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '10:45:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:56:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:56:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78452, '31', 69, '96388', 'Not Provided', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '10:50:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:57:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:57:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78453, '31', 70, '96310', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:00:00', 'MC', '2017-12-08', '11:10:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 10:59:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 10:59:12', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78454, '31', 70, '96310', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:00:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:00:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:00:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78455, '31', 71, '96312', 'Not Provided', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '11:10:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:02:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:02:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78456, '31', 71, '96312', 'Not Provided', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-08', '08:00:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:03:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:03:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78457, '31', 72, '96145', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '07:50:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:05:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:05:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78458, '31', 72, '96145', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '07:50:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', '', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 11:06:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 11:06:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78459, '31', 73, '96146', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:11:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:11:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78460, '31', 73, '96146', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:15:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:12:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:12:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78461, '31', 74, '96047', 'Not Provided', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:50:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:13:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:13:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78462, '31', 74, '96047', 'Not Provided', 'HM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '09:50:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:14:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:14:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78463, '31', 75, '96048', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 4.5, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:18:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:18:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78464, '31', 75, '96048', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'Sa', 4.5, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:19:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:19:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78465, '31', 76, '96045', 'Not Provided', 'HN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:22:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:22:23', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78466, '31', 76, '96045', 'Not Provided', 'HN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', '', '2017-12-08', '10:10:00', 'MC', '2017-12-08', '12:30:00', '1', '2017-12-08', 'fm,solidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:23:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:23:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78467, '31', 77, '96050', 'Not Provided', 'LN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:44:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:24:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:24:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78468, '31', 77, '96050', 'Not Provided', 'LN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'GN', 'Spot', '2017-12-08', '09:44:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:25:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:25:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78469, '31', 78, '95943', 'Not Provided', 'VM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:07:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:27:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:27:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78470, '31', 78, '95943', 'Not Provided', 'VM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month17', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-08', '10:07:00', 'MC', '2017-12-08', '12:30:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:28:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:28:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78471, '31', 79, '95839', 'Not Provided', 'CA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:03:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'HK', '2017-12-08', '11:10:00', '', '2017-12-08 12:29:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:29:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78472, '31', 79, '95839', 'Not Provided', 'CA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '10:03:00', 'MC', '2017-12-08', '12:30:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-09', '03:00:00', 'MC', 'GP', '2017-12-08', '11:10:00', '', '2017-12-08 12:30:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 12:30:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78473, '31', 80, '96149', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:54:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:01:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:01:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78474, '31', 80, '96149', 'Not Provided', 'AN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:54:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:08:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:08:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78475, '31', 81, '96148', 'Not Provided', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:09:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:09:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78476, '31', 81, '96148', 'Not Provided', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:10:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:10:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78477, '31', 82, '96046', 'Not Provided', 'AU', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month14', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:55:00', 'MC', '2017-12-08', '15:52:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:12:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:12:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78478, '31', 82, '96046', 'Not Provided', 'AU', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month12', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '7', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:13:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:13:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78479, '31', 83, '95947', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:16:00', 'MC', '2017-12-08', '15:52:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:15:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:15:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78480, '31', 83, '95947', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '13:16:00', 'MC', '2017-12-08', '15:52:00', '1', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:16:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:16:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78481, '31', 84, '95836', 'Not Provided', 'SZ', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:17:57', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:17:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78482, '31', 84, '95836', 'Not Provided', 'SZ', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:45:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:19:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:19:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78483, '31', 85, '95924', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:21:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:21:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78484, '31', 85, '95924', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-08', '11:56:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:23:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:23:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78485, '31', 86, '95834', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:22:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:24:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:24:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78486, '31', 86, '95834', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-08', '12:22:00', 'MC', '2017-12-08', '15:52:00', '2', '2017-12-08', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', 'GP', '2017-12-08', '14:30:00', '', '2017-12-08 13:27:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:27:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78487, 'B', 87, '431', 'Not Provided', 'KC', 'Kasibante Charles', '0000-00-00', 'Male', 'Not Provided', 'Mukaga', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MP', 1.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-08', '03:00:00', 'MC', '2017-12-08', '14:45:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:48:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:48:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78488, 'B', 88, '432', 'Not Provided', 'SM', 'SHALOM MUTABAZI', '0000-00-00', 'Male', 'Not Provided', 'KITENDA', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-08', '14:45:00', '', '2017-12-08', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'MC', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:51:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:51:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78489, 'B', 89, '433', 'Not Provided', 'NF', 'NABUKENYA FATUMA', '0000-00-00', 'Female', 'Not Provided', 'Kalisizo', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MP', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-08', '15:58:00', '5', '2017-12-08', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-08', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-08 13:53:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-08 13:53:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78490, 'IOM', 90, 'D1700281', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-11', '00:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:12:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:13:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78491, 'IOM', 91, 'D1700282', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:14:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:14:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78492, 'IOM', 92, 'D1700283', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:15:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:15:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78493, 'IOM', 93, 'D1700284', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-04', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:16:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:16:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78494, 'IOM', 94, 'F17000497', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month07', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:17:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:17:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78495, 'IOM', 95, 'F17000744', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-11', '08:00:00', 'HS', '2017-12-11', '12:00:00', '12', '2017-12-11', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'R ', '2017-12-11', '10:00:00', '', '2017-12-11 11:20:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:20:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78496, '31', 96, '96457', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:26:00', 'NMJ', '2017-12-11', '12:40:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:21:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:21:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78497, '31', 97, '96420', 'Not Provided', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:03:00', 'NMJ', '2017-12-11', '12:40:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:23:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:23:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78498, '31', 98, '96284', 'Not Provided', 'PM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:37:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:28:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:28:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78499, '31', 98, '96284', 'Not Provided', 'PM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:37:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:34:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:34:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78500, '31', 99, '96152', 'Not Provided', 'KK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-04', '10:20:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 11:36:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 11:36:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78501, '31', 100, '96141', 'Not Provided', 'ET', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', '', '2017-12-11', '10:15:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:54:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:54:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78502, '31', 100, '96141', 'Not Provided', 'ET', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:15:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:56:01', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:56:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples_patients` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78503, '31', 101, '96156', 'Not Provided', 'DS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:10:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:57:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:57:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78504, '31', 101, '96156', 'Not Provided', 'DS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '09:10:00', 'NMJ', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 12:58:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 12:58:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78505, '31', 102, '96155', 'Not Provided', 'WN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:43:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 13:00:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:00:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78506, '31', 102, '96155', 'Not Provided', 'WN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:43:00', 'NMJ', '2017-12-11', '12:40:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-11 13:02:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:02:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78507, '31', 103, '96470', 'Not Provided', 'DB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'MP', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:57:00', 'MC', '2017-12-11', '15:52:00', '1', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:05:06', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:05:06', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78508, '31', 104, '96150', 'Not Provided', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 13.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:56:00', 'MC', '2017-12-11', '15:32:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:06:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:06:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78509, '31', 104, '96150', 'Not Provided', 'RT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '11:56:00', 'MC', '2017-12-11', '15:32:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:07:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:07:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78510, '31', 105, '95949', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '11:29:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:08:55', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:08:55', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78511, '31', 105, '95949', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '11:29:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-04', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:09:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:09:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78512, '31', 106, '95934', 'NOT PROVIDED', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'US', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '12:32:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:11:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:11:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78513, '31', 106, '95934', 'NOT PROVIDED', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-11', '13:01:00', 'MC', '2017-12-11', '15:32:00', '7', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-11', '14:37:00', '', '2017-12-11 13:12:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-11 13:12:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78514, '31', 107, '96460', 'Not Provided', 'ZN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '09:29:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:37:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:37:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78515, '31', 108, '96459', 'Not Provided', 'KM', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:20:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:41:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:07:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78516, '31', 109, '96458', 'Not Provided', 'CA', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:33:00', 'NI', '2017-12-12', '12:15:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:42:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:08:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78517, '31', 110, '96316', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '10:23:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', '', '2017-12-12', '11:05:00', '', '2017-12-12 10:44:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:44:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78518, '31', 110, '96316', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'S', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '10:23:00', 'NI', '2017-12-12', '12:15:00', '2', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:46:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:46:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78519, '31', 1, '96282', 'Not Provided', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:37:00', 'NI', '2017-12-12', '12:15:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '12:15:00', '', '2017-12-12 10:47:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:47:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78520, '31', 1, '96282', 'Not Provided', 'IW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-12', '10:37:00', 'NI', '2017-12-12', '12:15:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'GP', '2017-12-12', '11:05:00', '', '2017-12-12 10:49:45', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:49:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78521, 'IOM', 90, 'D1700281', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '10:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'R ', '2017-12-12', '10:00:00', '', '2017-12-12 10:52:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:52:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78522, 'IOM', 91, 'D1700282', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:53:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:53:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78523, 'IOM', 92, 'D1700283', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Spot', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:54:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:54:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78524, 'IOM', 93, 'D1700284', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-05', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-12', '00:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:55:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:59:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78525, 'IOM', 95, 'F17000744', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month04', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:57:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:57:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78526, 'IOM', 94, 'F17000497', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month07', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-12', '08:00:00', 'HS', '2017-12-12', '13:40:00', '12', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'MC', 'FF', '2017-12-12', '10:00:00', '', '2017-12-12 10:58:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 10:58:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78527, '31', 99, '96152', 'Not Provided', 'KK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-11', '10:20:00', 'NI', '2017-12-11', '12:40:00', '2', '2017-12-11', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-11', '03:00:00', 'MC', 'GP', '2017-12-11', '11:10:00', '', '2017-12-12 11:26:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-12 11:26:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78528, 'B', 111, '434', 'Not Provided', 'NH', 'Nuwagaba Henry', '0000-00-00', 'Male', 'Not Provided', 'Zana', 'Not Provided', 'Wakiso', '', 33, 0, 'Unknown', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-12', '14:55:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-13 06:09:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 06:09:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78529, 'B', 112, '435', 'Not Provided', 'CT', 'Charity Tumusiime', '0000-00-00', 'Female', 'Not Provided', 'Kabale', 'Not Provided', 'Kabale', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-12', '14:55:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-13 06:11:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 06:11:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78530, '31', 113, '96462', 'Not Provided', 'BD', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '08:30:00', 'MC', '2017-12-13', '11:55:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:19:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:19:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78531, '31', 114, '96392', 'Not Provided', 'GA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '09:15:00', 'MC', '2017-12-13', '11:55:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:20:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:20:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78532, '31', 115, '96318', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '09:25:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:22:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:22:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78533, '31', 115, '96318', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '09:25:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:23:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:23:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78534, '31', 116, '96320', 'Not Provided', 'AA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:10:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '12:15:00', '', '2017-12-13 11:25:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:25:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78535, '31', 116, '96320', 'Not Provided', 'AA', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:10:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:29:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:29:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78536, '31', 117, '95844', 'Not Provided', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:23:00', 'MC', '2017-12-13', '13:00:00', '1', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:31:15', '', '', '2017-12-13 11:31:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78537, '31', 117, '95844', 'Not Provided', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '10:23:00', 'MC', '2017-12-13', '13:00:00', '1', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:33:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:33:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78538, '31', 118, '95842', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '07:51:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:35:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:35:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78539, '31', 118, '95842', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-13', '07:51:00', 'MC', '2017-12-13', '11:35:00', '2', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-13', '10:00:00', '', '2017-12-13 11:36:45', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:36:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78540, '31', 119, '96124', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-13', '11:52:00', 'MC', '2017-12-13', '13:00:00', '7', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'AS', '2017-12-13', '12:15:00', '', '2017-12-13 11:38:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:38:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78541, 'IOM', 90, 'D1700281', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 4.0, '', '00', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:40:32', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:40:32', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78542, 'IOM', 91, 'D1700282', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:41:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:41:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78543, 'IOM', 92, 'D1700283', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:43:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:43:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78544, 'IOM', 93, 'D1700284', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-13', '00:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:48:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:48:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78545, 'IOM', 120, 'D1700285', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:49:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:49:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78546, 'IOM', 121, 'D1700286', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:51:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:51:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78547, 'IOM', 95, 'F17000744', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month04', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-13', '10:44:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'R ', '2017-12-13', '10:00:00', '', '2017-12-13 11:52:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 11:52:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78548, '31', 122, '96283', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'Mucosalivary', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-13', '11:53:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:28:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:28:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78549, '31', 122, '96283', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '11:53:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-12', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:30:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:30:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78550, '31', 123, '96017', 'Not Provided', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month05', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-12', '13:40:00', 'HS', '2017-12-12', '15:55:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'HS', 'GP', '2017-12-12', '14:40:00', '', '2017-12-13 12:32:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:32:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78551, '31', 124, '96421', 'Not Provided', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-12', '14:14:00', 'HS', '2017-12-12', '15:55:00', '7', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'MC', 'GP', '2017-12-12', '14:44:00', '', '2017-12-13 12:34:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-13 12:34:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78552, 'B', 125, '436', 'Not Provided', 'JS', 'Joakim Ssekibala', '0000-00-00', 'Male', 'Not Provided', 'Sseguku', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-13', '10:25:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-13', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-14 07:57:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 07:57:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78553, 'IOM', 120, 'D1700285', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:20:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:20:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78554, 'IOM', 121, 'D1700286', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '00:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:22:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:22:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78555, 'IOM', 126, 'D1700287', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '09:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:25:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:25:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78556, 'IOM', 126, 'D1700287', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:26:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:26:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78557, 'IOM', 127, 'D1700288', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 12.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:28:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:28:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78558, 'IOM', 127, 'D1700288', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 13.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:29:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:29:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78559, 'IOM', 128, 'D1700289', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'Salivary', 7.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-13', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:31:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:31:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78560, 'IOM', 128, 'D1700289', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-14', '08:00:00', 'NMJ', '2017-12-14', '12:40:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '10:00:00', '', '2017-12-14 11:33:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:33:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78561, 'BR', 129, '84218', '1-05', 'YN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'Salivary', 0.0, '', '', 'Not Provided', 'IS', 'Spot', '2017-12-07', '08:08:00', 'AK', '2017-12-14', '12:40:00', '22', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '09:25:00', '', '2017-12-14 11:38:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:38:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78562, '31', 130, '96461', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MP', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:25:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:44:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:44:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78563, '31', 131, '96423', 'Not Provided', 'JL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'Bloody', 0.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:35:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'IOM', '2017-12-14', '13:16:00', '', '2017-12-14 11:46:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:46:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78564, '31', 132, '96425', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '10:00:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:47:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:47:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78565, '31', 133, '96422', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '13:16:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:49:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:49:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78566, '31', 134, '96424', 'Not Provided', 'BT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:30:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:50:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:50:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78567, '31', 135, '96393', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'BL', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:51:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:51:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78568, '31', 136, '96398', 'Not Provided', 'CE', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:00:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:53:07', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:53:07', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78569, '31', 137, '96323', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:35:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:54:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:54:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78570, '31', 137, '96323', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:35:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:55:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:55:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78571, '31', 138, '96289', 'Not Provided', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:12:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:57:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:57:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78572, '31', 138, '96289', 'Not Provided', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'Salivary', 0.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '08:12:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 11:58:25', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 11:58:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78573, '31', 139, '96287', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:00:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:01:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:01:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78574, '31', 139, '96287', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '09:00:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:04:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:04:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78575, '31', 140, '95952', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 11.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '07:40:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:06:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:06:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78576, '31', 140, '95952', 'Not Provided', 'SN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '07:40:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-14', '13:16:00', '', '2017-12-14 12:08:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:08:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78577, '31', 123, '96017', 'Not Provided', 'BM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month05', '', '', 'Sputum', 'MS', 4.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-12', '13:40:00', 'HS', '2017-12-12', '15:55:00', '1', '2017-12-12', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', 'MC', 'GP', '2017-12-12', '14:40:00', 'Sample was not Indicated on the requisition form but lab received and processed it 14-dec-17 MC', '2017-12-14 12:33:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-14 12:33:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78578, 'B', 141, '437', 'Not Provided', 'EK', 'Epharance Kekirabo', '0000-00-00', 'Female', 'Not Provided', 'Bweygogrere', 'Not Provided', 'Wakiso', '', 58, 0, 'Unknown', '', '', 'Sputum', 'Purulent', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-14', '04:40:00', '5', '2017-12-14', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 07:10:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:10:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78579, 'B', 142, '438', 'Not Provided', 'SG', 'Seguya George Matthew', '0000-00-00', 'Male', 'Not Provided', 'Mumpejje JJungo', 'Not Provided', 'Wakiso', '', 52, 0, 'Unknown', '', '', 'Sputum', 'Mucopurulent', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-14', '14:40:00', '11', '2017-12-14', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 07:12:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:12:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78580, '31', 143, '96322', 'Not Provided', 'BN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:05:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 07:51:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 07:51:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78581, '31', 143, '96322', 'Not Provided', 'BN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:05:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:08:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:08:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78582, 'B', 144, '739', 'Not Provided', 'TS', 'Taaka Sylivia', '0000-00-00', 'Female', 'Not Provided', 'Kajjansi', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '10:22:00', '11', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-15 08:14:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:14:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78583, '31', 145, '96290', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:53:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:19:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:19:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples_patients` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78584, '31', 145, '96290', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '11:53:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:21:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:21:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78585, '31', 146, '95962', 'Not Provided', 'DH', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:40:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:22:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:22:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78586, '31', 146, '95962', 'Not Provided', 'DH', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '10:40:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:24:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:24:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78587, '31', 147, '95950', 'Not Provided', 'EN', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '00:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:26:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:10:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78588, '31', 147, '95950', 'Not Provided', 'EN', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:05:00', 'MC', '2017-12-14', '14:22:00', '7', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:29:01', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:29:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78589, '31', 148, '95954', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '12:45:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:31:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:31:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78590, '31', 148, '95954', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '12:45:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:33:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:33:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78591, '31', 149, '95951', 'Not Provided', 'FM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:11:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:35:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:35:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78592, '31', 149, '95951', 'Not Provided', 'FM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '11:11:00', 'MC', '2017-12-14', '14:22:00', '1', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:37:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:37:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78593, '31', 150, '95953', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:44:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:39:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:39:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78594, '31', 150, '95953', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-14', '09:44:00', 'MC', '2017-12-14', '14:22:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-14', '13:16:00', '', '2017-12-15 08:40:37', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:40:37', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78595, 'IOM', 120, 'D1700285', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '01:20:00', '12', '2017-12-15', 'fm,', ',,', 0, '2-8 deg. C', '2017-12-15', '00:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:49:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:52:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78596, 'IOM', 121, 'D1700286', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:51:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:51:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78597, 'IOM', 126, 'D1700287', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:53:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:53:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78598, 'IOM', 127, 'D1700288', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 12.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:54:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 08:54:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78599, 'IOM', 128, 'D1700289', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Salivary', 6.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'NI', '2017-12-15', '11:20:00', '12', '2017-12-15', 'fm,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'R ', '2017-12-15', '10:00:00', '', '2017-12-15 08:56:07', '', '', '2017-12-15 08:56:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78600, 'IOM', 151, 'UGKLA0106005597', 'Not Provided', 'MK', 'Muhamed Mukisa', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'EDWARD', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '11:20:00', '18', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 09:00:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:00:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78601, 'IOM', 151, 'UGKLA0106005597', 'Not Provided', 'MK', 'Muhamed Mukisa', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', '', '0000-00-00', '03:00:00', 'NI', '2017-12-15', '11:20:00', '18', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-15 09:01:12', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 09:01:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78602, 'B', 152, '440', 'Not Provided', 'NJ', 'Namugwanya Janat', '0000-00-00', 'Not Provided', 'Not Provided', 'Nabingo', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', '', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'HS', '2017-12-15', '13:40:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-14', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-15 11:31:09', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:31:09', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78603, 'B', 153, '441', 'Not Provided', 'NP', 'Nampijja Prossy', '0000-00-00', 'Female', 'Not Provided', 'Sseguku', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', '', 0.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'HS', '2017-12-15', '13:40:00', '5', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'HS', '', '0000-00-00', '03:00:00', '', '2017-12-15 11:32:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:32:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78604, '31', 154, '96426', 'Not Provided', 'VN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '08:40:00', 'NMJ', '2017-12-15', '13:15:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:35:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:35:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78605, '31', 155, '96286', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '15:00:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:39:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:39:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78606, '31', 155, '96286', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-14', '15:00:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:41:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:41:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78607, '31', 156, '95845', 'Not Provided', 'SL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '10:27:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:43:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:43:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78608, '31', 156, '95845', 'Not Provided', 'SL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '10:27:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:48:47', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:48:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78609, '31', 157, '95925', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:03:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:52:23', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:52:23', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78610, '31', 157, '95925', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Unscheduled Visit', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:03:00', 'NMJ', '2017-12-15', '13:15:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:54:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:54:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78611, '31', 158, '95846', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '08:27:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:56:13', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:56:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78612, '31', 158, '95846', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '08:27:00', 'NMJ', '2017-12-15', '13:15:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'GP', '2017-12-15', '11:10:00', '', '2017-12-15 11:57:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:57:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78613, '31', 159, '95473', 'Not Provided', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'MU', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '12:00:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 11:59:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 11:59:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78614, '31', 160, '96325', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '11:40:00', 'HS', '2017-12-15', '13:40:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:00:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:00:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78615, '31', 160, '96325', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:40:00', 'HS', '2017-12-15', '13:40:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:02:00', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:02:01', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78616, '31', 161, '95847', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '11:17:00', 'HS', '2017-12-15', '13:40:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:03:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:03:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78617, '31', 161, '95847', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '11:17:00', 'HS', '2017-12-15', '13:40:00', '1', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:04:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:04:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78618, '31', 162, '96292', 'Not Provided', 'PW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '12:33:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:06:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:06:39', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78619, '31', 162, '96292', 'Not Provided', 'PW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '12:33:00', 'HS', '2017-12-15', '13:40:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-15', '03:00:00', 'NMJ', 'AS', '2017-12-15', '12:50:00', '', '2017-12-15 12:16:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-15 12:16:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78620, 'IOM', 151, 'UGKLA0106005597', 'Not Provided', 'MK', 'Muhamed Mukisa', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-16', '08:00:00', 'NMJ', '2017-12-16', '06:30:00', '12', '2017-12-16', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-16', '03:00:00', 'NMJ', '', '0000-00-00', '03:00:00', '', '2017-12-18 06:31:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 06:31:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78621, '31', 163, '96328', 'Not Provided', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '14:10:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:34:00', '', '2017-12-18 09:16:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:16:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78622, '31', 163, '96328', 'Not Provided', 'CN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '14:10:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:17:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:17:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78623, '31', 164, '96163', 'Not Provided', 'AO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:09:00', 'NMJ', '2017-12-15', '17:00:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:19:22', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:19:22', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78624, '31', 164, '96163', 'Not Provided', 'AO', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-15', '13:09:00', 'NMJ', '2017-12-15', '17:00:00', '2', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:20:38', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:20:38', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78625, '31', 16, '96474', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-15', '13:15:00', 'NMJ', '2017-12-15', '17:00:00', '7', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-15', '15:39:00', '', '2017-12-18 09:21:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:21:56', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78626, 'IOM', 165, 'D1700290', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'NI', '2017-12-18', '10:50:00', '12', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'IOM', '2017-12-18', '10:00:00', '', '2017-12-18 09:24:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:24:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78627, 'IOM', 166, 'D1700291', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'NI', '2017-12-18', '10:50:00', '12', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'IOM', '2017-12-18', '10:00:00', '', '2017-12-18 09:25:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:25:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78628, '31', 167, '96430', 'Not Provided', 'MM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-18', '10:21:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:27:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:27:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78629, '31', 168, '96428', 'Not Provided', 'MN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:35:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:28:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:28:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78630, '31', 169, '96431', 'Not Provided', 'MK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-18', '09:35:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:30:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:30:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78631, '31', 170, '96165', 'Not Provided', 'PS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:15:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:32:04', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:32:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78632, '31', 170, '96165', 'Not Provided', 'PS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:15:00', 'NI', '2017-12-18', '12:10:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:33:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:33:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78633, '31', 171, '95955', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:06:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:34:33', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:34:33', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78634, '31', 171, '95955', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:06:00', 'NI', '2017-12-18', '12:10:00', '1', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:35:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:35:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78635, '31', 172, '95860', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:50:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:38:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:38:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78636, '31', 172, '95860', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month08', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-18', '10:50:00', 'NI', '2017-12-18', '12:10:00', '7', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', 'MC', 'GP', '2017-12-18', '11:05:00', '', '2017-12-18 09:39:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 09:39:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78637, 'B', 173, '442', 'Not Provided', 'NJ', 'Nabulya Jane', '0000-00-00', 'Female', 'Not Provided', 'Bulebga', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-18', '15:15:00', '5', '2017-12-18', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-18', '03:00:00', '', '', '0000-00-00', '03:00:00', '', '2017-12-18 13:01:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-18 13:01:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78638, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-13', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-13', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:47:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:47:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78639, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-14', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-14', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:51:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:51:10', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78640, 'IOM', 174, 'D1700292', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'Salivary', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-15', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-15', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:52:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:52:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78641, 'IOM', 166, 'D1700291', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-19', '12:15:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'IOM', '2017-12-19', '10:00:00', '', '2017-12-19 10:54:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:54:25', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78642, '31', 175, '95856', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:55:54', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:55:54', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78643, '31', 175, '95856', 'Not Provided', 'JK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-19', '15:00:00', 'NI', '2017-12-19', '11:30:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:57:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:57:14', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78644, '31', 176, '96399', 'Not Provided', 'SM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:40:00', 'NI', '2017-12-19', '11:30:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'AS', '2017-12-19', '10:40:00', '', '2017-12-19 10:58:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 10:58:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78645, '31', 177, '95964', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:00:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:00:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78646, '31', 177, '95964', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:14:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:01:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:01:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78647, '31', 178, '95956', 'Not Provided', 'MB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:03:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:03:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78648, '31', 178, '95956', 'Not Provided', 'MB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Mucosalivary', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:45:00', 'MC', '2017-12-19', '12:50:00', '2', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:05:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:05:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78649, '31', 179, '96172', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:07:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:07:42', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78650, '31', 179, '96172', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'Purulent', 4.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:51:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:09:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:09:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78651, '31', 180, '96164', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 12.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:11:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:11:29', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78652, '31', 180, '96164', 'Not Provided', 'KS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 10.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '10:47:00', 'MC', '2017-12-19', '12:50:00', '1', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:12:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:12:45', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78653, '31', 181, '96340', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:14:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:14:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78654, '31', 181, '96340', 'Not Provided', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '10:50:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:16:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:16:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78655, '31', 182, '96335', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:16:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:17:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:17:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78656, '31', 182, '96335', 'Not Provided', 'JS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-19', '11:18:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:18:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:18:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78657, '31', 183, '96400', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-19', '11:00:00', 'MC', '2017-12-19', '12:50:00', '7', '2017-12-19', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-19', '11:55:00', '', '2017-12-19 11:20:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:20:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78658, '31', 184, '96090', 'Not Provided', 'AM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'SA', 9.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-18', '12:25:00', 'MC', '2017-12-18', '15:16:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:27:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:27:46', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78659, '31', 185, '95852', 'Not Provided', 'VS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-18', '11:12:00', 'MC', '2017-12-18', '15:46:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:30:02', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:30:02', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78660, '31', 185, '95852', 'Not Provided', 'VS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'Sa', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-18', '11:12:00', 'MC', '2017-12-18', '15:46:00', '2', '2017-12-18', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'MC', 'GP', '2017-12-18', '15:00:00', '', '2017-12-19 11:31:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:31:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78661, 'B', 186, '443', 'Not Provided', 'LL', 'Lukwago Lubowa', '0000-00-00', 'Male', 'Not Provided', 'Kyengera', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 12.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '12:05:00', '10', '2017-12-18', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-19', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-19 11:39:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-19 11:39:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78662, 'B', 187, '444', 'Not Provided', 'KR', 'Kirumira Robert', '0000-00-00', 'Male', 'Not Provided', 'Najjanankumbi', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:16:08', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:16:08', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78663, 'B', 188, '445', 'Not Provided', 'HN', 'Hadijja Nanyonjo', '0000-00-00', 'Female', 'Not Provided', 'Lumuli Kajjansi', 'Not Provided', 'Not Provided', '', 0, 0, 'Unknown', '', '', 'Sputum', 'SA', 1.5, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'MC', '2017-12-19', '15:20:00', '5', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:19:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:19:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78664, 'B', 189, '446', 'Not Provided', 'KJ', 'KJ', '0000-00-00', 'Not Provided', 'Not Provided', 'NDIKUTAMADA', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'MS', 1.0, '', '', 'Not Provided', 'Not Provided', 'Spot', '2017-12-19', '12:45:00', 'NMJ', '2017-12-20', '09:50:00', '', '2017-12-19', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 09:21:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 09:21:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78665, 'B', 190, '447', 'Not Provided', 'LL', 'Linda Lucy', '0000-00-00', 'Female', 'Not Provided', 'Namugongo', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:45:41', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:45:41', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');
INSERT INTO `samples_patients` (`labno`, `studycode`, `pid_auto`, `pid`, `pid_other`, `pinitials`, `name`, `dob`, `gender`, `telephone`, `village`, `subcounty`, `district`, `sample_id`, `ageyears`, `agemonths`, `visitinterval`, `samplehierachy`, `requestreason`, `spectype`, `appearance`, `volume`, `consistency`, `peripheralres`, `hivstatus`, `collector`, `collmethod`, `colldate`, `colltime`, `rcttech`, `rctdate`, `rcttime`, `requester`, `requestdate`, `examination`, `media`, `storage`, `specstorage`, `processdate`, `processtime`, `processtech`, `transporter`, `transportdate`, `transporttime`, `comment`, `accessiontime`, `accessiontech`, `lasteditby`, `lastedittime`, `lastreviewer`, `lastreviewtime`, `inoculationdate`, `inoculationtime`) VALUES
(78666, 'B', 191, '448', 'Not Provided', 'AH', 'Achon Hellen', '0000-00-00', 'Female', 'Not Provided', 'Bweygogerere', 'Not Provided', 'Wakiso', '', 0, 0, 'Unknown', '', '', 'Sputum', 'Sa', 1.0, '', '', 'Not Provided', 'Not Provided', '', '0000-00-00', '03:00:00', 'NMJ', '2017-12-20', '12:30:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-20 10:47:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:47:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78667, '31', 192, '96434', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:18:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:49:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:49:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78668, '31', 193, '96368', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:51:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:51:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78669, '31', 193, '96368', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week17', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:20:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:52:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:52:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78670, '31', 194, '96344', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:54:34', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:54:34', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78671, '31', 194, '96344', 'Not Provided', 'EM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '09:00:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:56:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:56:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78672, '31', 195, '96339', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:58:16', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:58:16', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78673, '31', 195, '96339', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:55:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 10:59:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 10:59:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78674, '31', 196, '95958', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:00:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:00:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78675, '31', 196, '95958', 'Not Provided', 'FN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 7.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '11:15:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:02:56', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:02:57', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78676, '31', 197, '96272', 'Not Provided', 'JB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month05', '', '', 'Sputum', 'MS', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-20', '09:19:00', 'MC', '2017-12-20', '12:15:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'FF', '2017-12-20', '11:15:00', '', '2017-12-20 11:05:14', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:05:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78677, '31', 198, '95851', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:06:39', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:06:40', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78678, '31', 198, '95851', 'Not Provided', 'DN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 5.5, '', '', 'Not Provided', 'VK', 'Spot', '2017-12-20', '09:10:00', 'MC', '2017-12-20', '12:15:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '11:15:00', '', '2017-12-20 11:08:13', '', '', '2017-12-20 11:08:13', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78679, 'BR', 199, '84290', '1-04', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'Watery', 5.0, '', '', 'Not Provided', 'IS', '', '2017-12-19', '07:52:00', 'AK', '2017-12-19', '15:53:00', '1', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-19', '08:45:00', '', '2017-12-20 11:23:21', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 11:23:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78680, 'IOM', 166, 'D1700291', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '10:00:00', '', '2017-12-20 12:38:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:38:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78681, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'Sarah IOM', 'Early Morning', '2017-12-20', '08:00:00', 'NI', '2017-12-20', '15:17:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-20 12:39:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:39:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78682, '31', 201, '95848', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 3.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:41:43', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:41:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78683, '31', 201, '95848', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:48:00', 'NI', '2017-12-20', '15:17:00', '7', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:44:28', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:44:28', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78684, '31', 62, '95959', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:45:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:45:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78685, '31', 62, '95959', 'Not Provided', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '11:22:00', 'NI', '2017-12-20', '15:17:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-20', '03:00:00', 'MC', 'GP', '2017-12-20', '14:30:00', '', '2017-12-20 12:47:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-20 12:47:21', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78686, 'B', 202, '449', 'Not Provided', 'AA', 'AISHA ALI', '0000-00-00', 'Female', 'Not Provided', 'MUYENGA', 'Not Provided', 'Wakiso', '', 19, 0, 'Unknown', '', '', 'Sputum', 'Ms', 2.0, '', '', 'Not Provided', 'Not Provided', '', '2017-12-20', '13:00:00', 'MC', '2017-12-20', '15:35:00', '', '0000-00-00', 'genexpert,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'NI', '', '0000-00-00', '03:00:00', '', '2017-12-21 06:53:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 06:53:03', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78687, 'BR', 203, '90561', '1-06', 'SS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Screen', '', '', 'Bronchoalveolar Lavage', 'CLEAR', 5.0, '', '', 'Not Provided', 'IS', 'Spot', '2017-12-21', '07:59:00', 'HS', '2017-12-21', '10:40:00', '', '0000-00-00', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '08:30:00', '', '2017-12-21 10:42:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:42:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78688, '31', 204, '96436', 'Not Provided', 'DL', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:20:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:44:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:44:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78689, '31', 205, '96432', 'Not Provided', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week08', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:45:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:45:46', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:45:47', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78690, '31', 206, '96337', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:49:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:49:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78691, '31', 206, '96337', 'Not Provided', 'AS', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:30:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:50:42', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:50:43', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78692, '31', 207, '96336', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 6.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:53:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:53:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78693, '31', 207, '96336', 'Not Provided', 'NM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:30:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:55:29', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:55:30', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78694, '31', 106, '95934', 'NOT PROVIDED', 'AK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'SA', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '05:07:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:57:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:57:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78695, '31', 208, '96169', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 10:58:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 10:58:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78696, '31', 208, '96169', 'Not Provided', 'JW', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month09', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '09:09:00', 'MC', '2017-12-21', '12:18:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:00:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:00:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78697, '31', 209, '95965', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:02:03', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:02:04', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78698, '31', 209, '95965', 'Not Provided', 'CM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '10:31:00', 'MC', '2017-12-21', '12:18:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:03:27', '', '', '2017-12-21 11:03:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78699, '31', 210, '95858', 'Not Provided', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '15:09:00', 'MC', '2017-12-21', '12:18:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '11:11:00', '', '2017-12-21 11:05:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:05:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78700, '31', 210, '95858', 'Not Provided', 'FK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month18', '', '', 'Sputum', 'SA', 6.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-20', '15:09:00', 'MC', '2017-12-21', '11:11:00', '2', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '15:09:00', '', '2017-12-21 11:09:48', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:09:48', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78701, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'SA', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '10:00:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-20', '10:00:00', '', '2017-12-21 11:12:31', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:12:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78702, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:15:30', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:15:31', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78703, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:17:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:17:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78704, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline First Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-18', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-18', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:21:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:21:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78705, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Second Sample', '', '', 'Sputum', 'SA', 3.5, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-19', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:22:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:22:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78706, 'IOM', 212, 'D1700295', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'MC', '2017-12-21', '12:40:00', '18', '2017-12-20', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'IOM', '2017-12-21', '10:00:00', '', '2017-12-21 11:23:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 11:23:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78707, '31', 61, '96479', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week02', '', '', 'Sputum', 'Sa', 7.5, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:40:00', 'MC', '2017-12-21', '15:00:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:30:44', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:30:44', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78708, '31', 65, '96468', 'Not Provided', 'IK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'Ms', 5.5, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '13:42:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:31:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:31:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78709, '31', 213, '95960', 'Not Provided', 'MT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:33:15', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:33:15', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78710, '31', 213, '95960', 'Not Provided', 'MT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month15', '', '', 'Sputum', 'Sa', 5.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-21', '12:15:00', 'MC', '2017-12-21', '15:00:00', '2', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-21', '03:00:00', 'MC', 'GP', '2017-12-21', '14:05:00', '', '2017-12-21 12:34:35', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-21 12:34:35', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78711, '31', 103, '96470', 'Not Provided', 'DB', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week04', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '09:35:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:07:20', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:07:20', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78712, '31', 214, '96407', 'Not Provided', 'JN', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:10:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:09:26', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:09:26', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78713, '31', 215, '96406', 'Not Provided', 'RM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'MU', 7.0, '', '', 'Not Provided', 'SM', 'Spot', '2017-12-22', '09:39:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:10:51', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:10:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78714, '31', 216, '96408', 'Not Provided', 'WK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week12', '', '', 'Sputum', 'Mucosalivary', 0.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:00:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:12:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:12:51', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78715, '31', 217, '96345', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 2.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:14:27', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:14:27', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78716, '31', 217, '96345', 'Not Provided', 'GK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '10:21:00', 'HS', '2017-12-22', '11:50:00', '2', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:19:24', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:19:24', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78717, '31', 218, '96342', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 09:20:53', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:20:53', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78718, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 09:57:05', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:57:05', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78719, 'IOM', 200, 'D1700293', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 09:59:36', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 09:59:36', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78720, 'IOM', 211, 'D1700294', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Baseline Third Sample', '', '', 'Sputum', 'MS', 5.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-22', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:03:18', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:03:18', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78721, 'IOM', 219, 'F17001034', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month04', '', '', 'Sputum', 'MS', 10.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '00:00:00', '', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:04:40', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:08:00', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78722, 'IOM', 219, 'F17001034', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', '', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month01', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:06:19', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:06:19', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78723, 'IOM', 220, 'F17001553', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:09:52', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:09:52', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78724, 'IOM', 220, 'F17001553', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month03', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-22', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:12:10', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:12:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78725, 'IOM', 221, 'F17001622', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-20', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:13:49', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:13:49', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78726, 'IOM', 221, 'F17001622', 'Not Provided', '', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Month02', '', '', 'Sputum', 'MS', 4.0, '', '', 'Not Provided', 'EDWARD', 'Early Morning', '2017-12-21', '08:00:00', 'HS', '2017-12-22', '12:30:00', '12', '2017-12-19', 'fm,solidculture,liquidculture,,', '7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'NI', 'IOM', '2017-12-22', '10:00:00', '', '2017-12-22 10:15:11', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:15:11', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78727, '31', 218, '96342', 'Not Provided', 'EK', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-22', '08:48:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-22', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:16:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:16:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78728, '31', 222, '96343', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:18:58', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:18:58', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78729, '31', 222, '96343', 'Not Provided', 'AT', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week22', '', '', 'Sputum', 'MS', 3.0, '', '', 'Not Provided', 'TM', 'Spot', '2017-12-21', '14:05:00', 'HS', '2017-12-22', '11:50:00', '7', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:20:17', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:20:17', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78730, '31', 223, '96297', 'Not Provided', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 7.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', 'LJ,7H11S,MGIT,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:21:50', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:21:50', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00'),
(78731, '31', 223, '96297', 'Not Provided', 'JM', 'Not Provided', '0000-00-00', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', 'Not Provided', '', 0, 0, 'Week26', '', '', 'Sputum', 'MS', 8.0, '', '', 'Not Provided', 'RN', 'Spot', '2017-12-21', '14:31:00', 'HS', '2017-12-22', '11:50:00', '1', '2017-12-21', 'fm,solidculture,liquidculture,,', ',,', 0, '2-8 deg. C', '2017-12-22', '03:00:00', 'HS', 'GP', '2017-12-22', '11:00:00', '', '2017-12-22 10:22:59', 'Deborah Banturaki', 'Deborah Banturaki', '2017-12-22 10:22:59', '', '0000-00-00 00:00:00', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int(12) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(210) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`) VALUES
(3, 'Genexpert section'),
(4, 'Data section'),
(5, 'Microscopy section');

-- --------------------------------------------------------

--
-- Table structure for table `specimen_storage`
--

CREATE TABLE IF NOT EXISTS `specimen_storage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specimenstorage` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `specimen_storage`
--

INSERT INTO `specimen_storage` (`id`, `specimenstorage`, `status`) VALUES
(1, 'Room Temp', 'Active'),
(2, '2-8 deg. C', 'Active'),
(3, 'Frozen', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `part_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `particular` varchar(225) NOT NULL,
  `exp_date` varchar(34) NOT NULL,
  `lot` varchar(100) NOT NULL,
  `vnum` varchar(32) NOT NULL,
  `rdate` varchar(34) NOT NULL,
  `procured` varchar(90) NOT NULL,
  `verified` varchar(90) NOT NULL,
  `received` varchar(90) NOT NULL,
  `invoice_no` varchar(30) NOT NULL,
  `del_note_no` varchar(30) NOT NULL,
  `date_of_rec` date NOT NULL,
  `urate` varchar(255) NOT NULL,
  `supplier` varchar(120) NOT NULL,
  `ver_date` varchar(60) NOT NULL,
  `rec_date` varchar(34) NOT NULL,
  `ver_des` varchar(90) NOT NULL,
  `rec_des` varchar(90) NOT NULL,
  `qty` bigint(40) NOT NULL,
  `cost_unit` varchar(233) NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`part_id`, `product_id`, `particular`, `exp_date`, `lot`, `vnum`, `rdate`, `procured`, `verified`, `received`, `invoice_no`, `del_note_no`, `date_of_rec`, `urate`, `supplier`, `ver_date`, `rec_date`, `ver_des`, `rec_des`, `qty`, `cost_unit`) VALUES
(1, 0, 'lkdul', '2016-08-16', 'kkaks', '', '2016-08-16', 'kajks', 'kjkjke', 'k', 'kajkal', 'kljkka', '2016-08-16', '', 'klakak', '2016-08-16', '2016-08-16', '', '', 0, '80000'),
(2, 0, 'Catridges', '2016-08-26', '45691', '', '2016-08-16', 'Shara', 'Marvin', 'Zahara', '7988', '4809', '2016-08-16', '', 'ilight computer ltd', '2016-08-16', '2016-08-16', 'Data', 'Ass Hr', 50, '500'),
(3, 0, 'Pen', '2016-08-17', '4522', 'Ua00W', '2016-08-17', 'Hajara', 'Julius', 'Marvin', '43', '89202', '2016-08-17', 'packets', 'ILIGHT COMPUTER LTD', '2016-08-17', '2016-08-17', 'Data', 'Data', 40, '56000'),
(4, 0, 'Pen', '2016-08-20', '45', '', '2016-08-17', 'Shara', 'Kyomu', 'Sha', '849840', '840048', '2016-08-18', 'packets', 'Cool stuff ltd', '2016-08-17', '2016-08-17', 'Cool', 'Col', 45, '6700'),
(5, 0, 'Pen', '2016-08-17', '7989', '', '2016-08-17', 'Tumusiime', 'Testing', 'Exams', '7989', '98479', '2016-08-17', 'pens', 'Credit Like ltd', '2016-08-17', '2016-08-17', 'Test', 'Tech', 34, '7800'),
(6, 0, 'Computer', '2016-08-18', '4523', 'U23Z', '2016-08-18', 'Christinah', 'Marvin', 'Johnshon', '789', '5708', '2016-08-18', 'Computers', 'Chance computer ltd', '2016-08-18', '2016-08-18', 'Data Manager', 'Creative Director', 43, '45000000'),
(7, 0, 'Cups', '2016-08-20', '589', '434', '2016-08-19', 'James', 'Marvin', 'Tom', '422', 'hdka', '2016-08-19', 'pieces', 'International computer ltd', '2016-08-19', '2016-08-19', 'Ass HR', 'Data', 40, '23000'),
(8, 0, 'Finger towel', '2016-08-31', '565', '334', '2016-08-19', 'Zahara', 'Pius', 'Betrice', '453', '789', '2016-08-19', 'Pieces', 'Ntrl computer ltd', '2016-08-19', '2016-08-19', 'Mentor', 'Quality team', 54, '56000'),
(9, 0, 'Catridges', '2017-03-04', '432', 'UT64S', '2017-03-04', 'Catridges', 'Pen', 'Cups', '23', '5467', '0000-00-00', 'Finger towel', 'Computer', '2017-03-04', '2017-03-04', 'Pen', 'Pen', 20, '12000'),
(10, 0, 'Catridges', '2017-03-04', 'UT3422', '', '2017-03-04', 'Pen', 'Pen', 'Pen', '23222', '88789', '2017-03-04', 'Pen', 'Finger towel', '2017-03-04', '2017-03-04', 'Pen', 'Pen', 43, '40000'),
(11, 0, 'Pen', '03-03-2017', 'UTH003', '', '03-03-2017', 'Pen', 'Catridges', 'Computer', '32', '782978', '0000-00-00', 'Computer', 'Pen', '03-03-2017', '03-03-2017', 'Cups', 'Computer', 32, '230200'),
(12, 0, 'Pens', '03-04-2017', '675', '', '03-04-2017', 'Computer', 'Computer', 'Computer', '3400', '43', '0000-00-00', 'Pen', 'Finger towel', '03-04-2017', '03-04-2017', 'Lkdul', 'Lkdul', 12, '435000'),
(13, 1, '', '2017-03-31', '111112233', '', '2017-03-08', 'James', 'KOL', 'Matsiko', '8900', '6789', '2017-03-08', 'Rims', 'ilight computers ltd', '2017-03-08', '2017-03-08', 'Administrator', 'Administrator', 21, '3400000'),
(14, 2, '', '2017-03-17', '', '', '2017-03-17', '', 'Mukwaya Ambrose', '', '', '', '2017-03-17', '', 'ilight computers ltd', '2017-03-17', '2017-03-17', 'Administrator', 'Administrator', 11, ''),
(15, 1, '', '', '', '', '', '', 'Matsiko', '', '1233', '', '2017-03-17', '', '', '', '', '', '', 22, '670000');

-- --------------------------------------------------------

--
-- Table structure for table `stock_sum`
--

CREATE TABLE IF NOT EXISTS `stock_sum` (
  `stock_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `particular` varchar(120) NOT NULL,
  `qty` bigint(255) NOT NULL,
  `Units` varchar(30) NOT NULL,
  `qty_bal` bigint(255) NOT NULL,
  `batchno` varchar(233) NOT NULL,
  `exp_date` varchar(34) NOT NULL,
  `stock_date` varchar(34) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `stock_sum`
--

INSERT INTO `stock_sum` (`stock_id`, `product_id`, `particular`, `qty`, `Units`, `qty_bal`, `batchno`, `exp_date`, `stock_date`) VALUES
(15, 1, '', 8, 'Rims', 8, '', '', ''),
(16, 2, '', 11, '', 11, '', '2017-03-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `storage_freezers`
--

CREATE TABLE IF NOT EXISTS `storage_freezers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `storage_records`
--

CREATE TABLE IF NOT EXISTS `storage_records` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `freezer` int(10) NOT NULL,
  `chest` varchar(255) NOT NULL,
  `drawer` varchar(255) NOT NULL,
  `rack` varchar(255) NOT NULL,
  `boxposition` int(10) NOT NULL,
  `boxlabel` varchar(255) NOT NULL,
  `freezerposition` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `labno` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `storagesection` varchar(255) NOT NULL,
  `storagedate` date NOT NULL,
  `storagetech` varchar(255) NOT NULL,
  `entryby` varchar(255) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7593 ;

-- --------------------------------------------------------

--
-- Table structure for table `studycodes`
--

CREATE TABLE IF NOT EXISTS `studycodes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `projtitle` varchar(255) NOT NULL,
  `contactperson1` varchar(255) NOT NULL,
  `organisation1` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `contactperson2` varchar(50) NOT NULL,
  `organisation2` varchar(100) NOT NULL,
  `projsummary` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique studycode` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `studycodes`
--

INSERT INTO `studycodes` (`id`, `code`, `projtitle`, `contactperson1`, `organisation1`, `email1`, `phone2`, `phone1`, `email2`, `status`, `contactperson2`, `organisation2`, `projsummary`) VALUES
(2, 'PV', 'PRIVATE CUSTOMER', '', '', '', '', '', '', 'ACTIVE', '', '', ''),
(16, 'IOM', 'IOM', 'Dr. Natalia Gitu', 'International Organisation for Migration', '', '', '', '', 'ACTIVE', '', '', ''),
(17, '36', 'Study 36', 'Dr. Grace Muzanye', 'Tuberculosis Trials Consortium', '', '', '256702342340', '', 'ACTIVE', 'Dr. Phineas Gitta', '', ''),
(18, '31', 'TBTC 31', 'Dr. Grace Muzanye', 'Tuberculosis Trials Consortium', '', '', '', '', 'ACTIVE', 'Dr. Phineas Gitta', '', ''),
(19, 'B', 'PRIVATE CUSTOMER', '', '', '', '', '', '', 'ACTIVE', '', '', ''),
(21, 'SC', 'Screen TB', 'Dr.Nsereko', 'Case Western Reserve University', 'MNsereko@mucwru.or.ug', '', '', '', 'ACTIVE', '', '', ''),
(22, 'BR', 'Brochoscopy', 'Dr. Brenda', 'Case Western Reserve Univeristy', '', '', '0757524983', '', 'ACTIVE', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `sup_id` int(255) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(120) NOT NULL,
  `locatn` text NOT NULL,
  `contacts` text NOT NULL,
  `product` text NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_id`, `supplier`, `locatn`, `contacts`, `product`) VALUES
(2, 'ilight computers ltd', 'kampala-uganda', '0781572567', 'Catridges');

-- --------------------------------------------------------

--
-- Table structure for table `techinitials`
--

CREATE TABLE IF NOT EXISTS `techinitials` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `initial` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique initial` (`initial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `techinitials`
--

INSERT INTO `techinitials` (`id`, `initial`, `name`, `status`) VALUES
(1, 'AK', 'Akol Joseph', 'Active'),
(12, 'HS', 'Henry Senyungule', 'Active'),
(13, 'BK', 'Kasifa Bukosela', 'Active'),
(14, 'NMJ', ' Maria Nakyaja', 'Active'),
(15, 'NI', 'Nahereza Immaculate', 'Active'),
(16, 'MC', ' Christopher Muchwa', 'Active'),
(17, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE IF NOT EXISTS `transporters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `contact` varchar(70) NOT NULL,
  `status` varchar(15) NOT NULL,
  `initials` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`id`, `name`, `contact`, `status`, `initials`) VALUES
(3, 'JUMA', '', 'Active', 'IOM'),
(5, 'Edward', 'Case-Mulago', 'Active', 'EK'),
(6, 'Henry Kawooya', 'Case-Mulago', 'Active', 'HK'),
(7, 'Patrick', '', 'Active', 'PK'),
(10, 'Abdul', 'Case- Mulago', 'Active', 'AS'),
(11, 'Francis', 'IOM', 'Active', 'FF'),
(12, 'George ', 'Case-Mulago', 'Active', 'GP'),
(13, 'Richard', 'IOM', 'Active', 'R ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `status`, `username`, `password`) VALUES
(23, 'Landsat (Technical Support)', 'Administrator', 'Active', 'admin', '*6EB3BF3F0358B486B0C9637214DAA2534FAFFE76'),
(31, 'Deborah Banturaki', 'Administrator', 'Active', 'dbanturaki', '*B19014C5476B6A052FB2099FA2046C681E488E1B'),
(32, 'Kasifa Bukosela', 'Lab Technologist', 'Active', 'kbukosela', '*B9B9D395289EC1B00D6C0EB1AD2371098DA87B71'),
(33, 'Akol Joseph', 'Administrator', 'Active', 'jakol', '*C559B8CDC154926902733EA15B3859E4962CD22C'),
(34, 'Data Mulago', 'Administrator', 'Active', 'DataMlg', '*42434304F38173D0FC396F60C077C662FE6EE7DD'),
(35, 'Oluk Margaret', 'Administrator', 'Active', 'Margy', '*EB25BDD8734B0B8931A13565DAF8F1C67265CA1F');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) NOT NULL,
  `action` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1055 ;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `username`, `action`, `time`, `name`) VALUES
(1, 'dbanturaki', 'Successfully loggedin', '2017-04-03 12:37:52', 'Deborah Banturaki'),
(2, 'dbanturaki', 'Successfully Logged out', '2017-04-03 12:43:42', 'Deborah Banturaki'),
(3, 'admin', 'Successfully loggedin', '2017-04-04 06:26:47', 'Landsat (Technical Support)'),
(4, 'admin', 'Successfully Logged out', '2017-04-04 06:34:04', 'Landsat (Technical Support)'),
(5, 'dbanturaki', 'Successfully loggedin', '2017-04-04 06:36:18', 'Deborah Banturaki'),
(6, 'admin', 'Successfully loggedin', '2017-04-04 06:39:49', 'Landsat (Technical Support)'),
(7, 'admin', 'Successfully Logged out', '2017-04-04 07:01:21', 'Landsat (Technical Support)'),
(8, 'admin', 'Failed login', '2017-04-04 07:44:44', 'N/A'),
(9, 'admin', 'Successfully loggedin', '2017-04-04 07:44:54', 'Landsat (Technical Support)'),
(10, 'admin', 'Successfully Logged out', '2017-04-04 07:50:15', 'Landsat (Technical Support)'),
(11, 'dbanturaki', 'Successfully loggedin', '2017-04-04 07:58:04', 'Deborah Banturaki'),
(12, 'dbanturaki', 'Successfully Logged out', '2017-04-04 07:59:41', 'Deborah Banturaki'),
(13, 'admin', 'Successfully loggedin', '2017-04-04 08:04:05', 'Landsat (Technical Support)'),
(14, 'dbanturaki', 'Failed login', '2017-04-04 13:01:24', 'N/A'),
(15, 'dbanturaki', 'Successfully loggedin', '2017-04-04 13:01:33', 'Deborah Banturaki'),
(16, 'admin', 'Successfully loggedin', '2017-04-04 12:51:15', 'Landsat (Technical Support)'),
(17, 'admin', 'Successfully loggedin', '2017-04-04 12:58:46', 'Landsat (Technical Support)'),
(18, 'dbanturaki', 'Successfully Logged out', '2017-04-04 13:04:01', 'Deborah Banturaki'),
(19, 'ADMIN', 'Failed login', '2017-04-04 13:07:16', 'N/A'),
(20, 'admin', 'Successfully loggedin', '2017-04-04 13:07:28', 'Landsat (Technical Support)'),
(21, 'admin', 'Successfully Logged out', '2017-04-04 13:09:34', 'Landsat (Technical Support)'),
(22, 'dbanturaki', 'Successfully loggedin', '2017-04-05 06:54:17', 'Deborah Banturaki'),
(23, 'dbanturaki', 'Successfully Logged out', '2017-04-05 06:56:32', 'Deborah Banturaki'),
(24, 'admin', 'Failed login', '2017-04-05 09:44:00', 'N/A'),
(25, 'admin', 'Failed login', '2017-04-05 09:44:07', 'N/A'),
(26, 'admin', 'Successfully loggedin', '2017-04-05 10:11:24', 'Landsat (Technical Support)'),
(27, 'admin', 'Successfully Logged out', '2017-04-05 10:13:37', 'Landsat (Technical Support)'),
(28, 'BUKOSELA', 'Failed login', '2017-04-05 11:17:59', 'N/A'),
(29, 'admin', 'Successfully loggedin', '2017-04-05 11:18:25', 'Landsat (Technical Support)'),
(30, 'admin', 'Successfully Logged out', '2017-04-05 11:20:55', 'Landsat (Technical Support)'),
(31, 'kbukosela', 'Logged in to first user page , Account Dormant', '2017-04-05 11:21:09', 'Kasifa Bukosela'),
(32, 'kbukosela', 'Successfully Logged out', '2017-04-05 11:22:14', 'Kasifa Bukosela'),
(33, 'kbukosela', 'Successfully loggedin', '2017-04-05 11:22:27', 'Kasifa Bukosela'),
(34, 'kbukosela', 'Successfully Logged out', '2017-04-05 11:23:01', 'Kasifa Bukosela'),
(35, 'kbukosela', 'Successfully loggedin', '2017-04-05 11:24:14', 'Kasifa Bukosela'),
(36, 'kbukosela', 'Successfully Logged out', '2017-04-05 11:25:37', 'Kasifa Bukosela'),
(37, 'admin', 'Successfully loggedin', '2017-04-05 11:27:44', 'Landsat (Technical Support)'),
(38, 'KBUKOSELA', 'Failed login', '2017-04-05 11:27:54', 'N/A'),
(39, 'kbukosela', 'Successfully loggedin', '2017-04-05 11:28:14', 'Kasifa Bukosela'),
(40, 'admin', 'Successfully Logged out', '2017-04-05 11:28:29', 'Landsat (Technical Support)'),
(41, 'kbukosela', 'Successfully loggedin', '2017-04-05 11:29:53', 'Kasifa Bukosela'),
(42, 'kbukosela', 'Successfully Logged out', '2017-04-05 11:33:08', 'Kasifa Bukosela'),
(43, 'admin', 'Failed login', '2017-04-05 11:37:46', 'N/A'),
(44, 'admin', 'Successfully loggedin', '2017-04-05 11:37:55', 'Landsat (Technical Support)'),
(45, 'admin', 'Successfully Logged out', '2017-04-05 11:40:26', 'Landsat (Technical Support)'),
(46, 'jakol', 'Logged in to first user page , Account Dormant', '2017-04-05 11:40:35', 'Akol Joseph'),
(47, 'jakol', 'Successfully Logged out', '2017-04-05 11:40:47', 'Akol Joseph'),
(48, 'dbanturaki', 'Successfully loggedin', '2017-04-05 11:41:03', 'Deborah Banturaki'),
(49, 'jakol', 'Successfully loggedin', '2017-04-05 11:41:05', 'Akol Joseph'),
(50, 'dbanturaki', 'Successfully Logged out', '2017-04-05 12:29:24', 'Deborah Banturaki'),
(51, 'dbanturaki', 'Successfully loggedin', '2017-04-06 08:19:58', 'Deborah Banturaki'),
(52, 'dbanturaki', 'Successfully Logged out', '2017-04-06 08:20:05', 'Deborah Banturaki'),
(53, 'dbanturaki', 'Successfully loggedin', '2017-04-06 08:21:17', 'Deborah Banturaki'),
(54, 'dbanturaki', 'Successfully Logged out', '2017-04-06 08:25:18', 'Deborah Banturaki'),
(55, 'dbanturaki', 'Failed login', '2017-04-06 09:19:44', 'N/A'),
(56, 'dbanturaki', 'Failed login', '2017-04-06 09:19:53', 'N/A'),
(57, 'dbanturaki', 'Successfully loggedin', '2017-04-06 09:20:07', 'Deborah Banturaki'),
(58, 'dbanturaki', 'Successfully Logged out', '2017-04-06 10:14:30', 'Deborah Banturaki'),
(59, 'dbanturaki', 'Successfully loggedin', '2017-04-07 06:19:27', 'Deborah Banturaki'),
(60, 'dbanturaki', 'Successfully Logged out', '2017-04-07 06:31:59', 'Deborah Banturaki'),
(61, 'dbanturaki', 'Failed login', '2017-04-07 11:24:21', 'N/A'),
(62, 'dbanturaki', 'Successfully loggedin', '2017-04-07 11:24:32', 'Deborah Banturaki'),
(63, 'dbanturaki', 'Successfully Logged out', '2017-04-07 11:25:37', 'Deborah Banturaki'),
(64, 'dbanturaki', 'Successfully loggedin', '2017-04-12 08:48:10', 'Deborah Banturaki'),
(65, 'dbanturaki', 'Successfully Logged out', '2017-04-12 09:08:57', 'Deborah Banturaki'),
(66, 'dbanturaki', 'Successfully loggedin', '2017-04-12 10:07:03', 'Deborah Banturaki'),
(67, 'dbanturaki', 'Successfully Logged out', '2017-04-12 10:26:23', 'Deborah Banturaki'),
(68, 'dbanturaki', 'Failed login', '2017-04-12 10:31:22', 'N/A'),
(69, 'dbanturaki', 'Successfully loggedin', '2017-04-12 10:31:29', 'Deborah Banturaki'),
(70, 'dbanturaki', 'Successfully Logged out', '2017-04-12 10:46:56', 'Deborah Banturaki'),
(71, 'dbanturaki', 'Failed login', '2017-04-14 06:57:09', 'N/A'),
(72, 'dbanturaki', 'Successfully loggedin', '2017-04-14 06:57:17', 'Deborah Banturaki'),
(73, 'dbanturaki', 'Successfully Logged out', '2017-04-14 10:59:52', 'Deborah Banturaki'),
(74, 'dbanturaki', 'Failed login', '2017-04-20 09:48:13', 'N/A'),
(75, 'dbanturaki', 'Successfully loggedin', '2017-04-20 09:48:20', 'Deborah Banturaki'),
(76, 'dbanturaki', 'Successfully Logged out', '2017-04-20 09:50:57', 'Deborah Banturaki'),
(77, 'DataMlg', 'Logged in to first user page , Account Dormant', '2017-04-20 09:54:44', 'Data Mulago'),
(78, 'DataMlg', 'Logged in to first user page , Account Dormant', '2017-04-20 09:55:17', 'Data Mulago'),
(79, 'DataMlg', 'Successfully Logged out', '2017-04-20 09:55:45', 'Data Mulago'),
(80, 'DataMlg', 'Successfully loggedin', '2017-04-20 09:55:57', 'Data Mulago'),
(81, 'DataMlg', 'Successfully loggedin', '2017-04-20 09:57:33', 'Data Mulago'),
(82, 'dbanturaki', 'Successfully loggedin', '2017-04-20 10:00:31', 'Deborah Banturaki'),
(83, 'Margy', 'Logged in to first user page , Account Dormant', '2017-04-20 10:02:49', 'Oluk Margaret'),
(84, 'Margy', 'Failed login', '2017-04-20 10:04:03', 'N/A'),
(85, 'Margy', 'Successfully loggedin', '2017-04-20 10:04:19', 'Oluk Margaret'),
(86, 'Margy', 'Successfully loggedin', '2017-04-20 10:06:16', 'Oluk Margaret'),
(87, 'dbanturaki', 'Successfully Logged out', '2017-04-20 10:06:51', 'Deborah Banturaki'),
(88, 'Margy', 'Successfully loggedin', '2017-04-20 10:07:09', 'Oluk Margaret'),
(89, 'Margy', 'Successfully Logged out', '2017-04-20 10:07:47', 'Oluk Margaret'),
(90, 'Margy', 'Successfully loggedin', '2017-04-20 10:08:07', 'Oluk Margaret'),
(91, 'Margy', 'Successfully Logged out', '2017-04-20 10:08:49', 'Oluk Margaret'),
(92, 'Margy', 'Successfully loggedin', '2017-04-20 10:08:51', 'Oluk Margaret'),
(93, 'Margy', 'Successfully loggedin', '2017-04-20 10:12:29', 'Oluk Margaret'),
(94, 'DMng', 'Failed login', '2017-04-20 11:29:37', 'N/A'),
(95, 'DataMlg', 'Successfully loggedin', '2017-04-20 11:30:48', 'Data Mulago'),
(96, 'Margy', 'Successfully loggedin', '2017-04-21 06:14:53', 'Oluk Margaret'),
(97, 'Margy', 'Successfully loggedin', '2017-04-21 06:16:57', 'Oluk Margaret'),
(98, 'Margy', 'Successfully loggedin', '2017-04-21 06:17:48', 'Oluk Margaret'),
(99, 'admin', 'Successfully loggedin', '2017-04-21 06:28:23', 'Landsat (Technical Support)'),
(100, 'admin', 'Successfully loggedin', '2017-04-21 06:36:20', 'Landsat (Technical Support)'),
(101, 'Margy', 'Failed login', '2017-04-21 06:44:27', 'N/A'),
(102, 'Margy', 'Successfully loggedin', '2017-04-21 06:44:44', 'Oluk Margaret'),
(103, 'admin', 'Successfully loggedin', '2017-04-21 06:53:55', 'Landsat (Technical Support)'),
(104, 'admin', 'Successfully Logged out', '2017-04-21 06:56:30', 'Landsat (Technical Support)'),
(105, 'admin', 'Successfully loggedin', '2017-04-21 06:57:56', 'Landsat (Technical Support)'),
(106, 'admin', 'Successfully Logged out', '2017-04-21 06:59:06', 'Landsat (Technical Support)'),
(107, 'Margy', 'Successfully loggedin', '2017-04-21 07:14:09', 'Oluk Margaret'),
(108, 'admin', 'Successfully loggedin', '2017-04-21 12:46:25', 'Landsat (Technical Support)'),
(109, 'Margy', 'Successfully loggedin', '2017-04-21 12:59:25', 'Oluk Margaret'),
(110, 'Margy', 'Successfully Logged out', '2017-04-21 13:05:40', 'Oluk Margaret'),
(111, 'dbanturaki', 'Successfully loggedin', '2017-04-22 10:51:36', 'Deborah Banturaki'),
(112, 'dbanturaki', 'Successfully Logged out', '2017-04-22 14:07:33', 'Deborah Banturaki'),
(113, 'dbanturaki', 'Failed login', '2017-04-23 07:19:20', 'N/A'),
(114, 'dbanturaki', 'Successfully loggedin', '2017-04-23 07:19:28', 'Deborah Banturaki'),
(115, 'admin', 'Successfully loggedin', '2017-04-23 09:47:37', 'Landsat (Technical Support)'),
(116, 'admin', 'Successfully Logged out', '2017-04-23 09:50:58', 'Landsat (Technical Support)'),
(117, 'dbanturaki', 'Successfully Logged out', '2017-04-23 10:04:59', 'Deborah Banturaki'),
(118, 'dbanturaki', 'Successfully loggedin', '2017-04-24 09:12:39', 'Deborah Banturaki'),
(119, 'Margy', 'Successfully loggedin', '2017-04-24 09:22:19', 'Oluk Margaret'),
(120, 'dbanturaki', 'Successfully Logged out', '2017-04-24 09:47:53', 'Deborah Banturaki'),
(121, 'dbanturaki', 'Successfully loggedin', '2017-04-24 12:02:34', 'Deborah Banturaki'),
(122, 'dbanturaki', 'Successfully loggedin', '2017-04-24 12:09:26', 'Deborah Banturaki'),
(123, 'Margy', 'Successfully Logged out', '2017-04-24 14:38:51', 'Oluk Margaret'),
(124, '', 'Successfully Logged out', '2017-04-24 14:38:59', ''),
(125, 'Margy', 'Successfully loggedin', '2017-04-26 05:04:41', 'Oluk Margaret'),
(126, 'dbanturaki', 'Successfully loggedin', '2017-04-26 11:16:28', 'Deborah Banturaki'),
(127, 'dbanturaki', 'Successfully loggedin', '2017-04-26 11:20:16', 'Deborah Banturaki'),
(128, 'dbanturaki', 'Successfully Logged out', '2017-04-26 11:32:33', 'Deborah Banturaki'),
(129, 'dbanturaki', 'Successfully loggedin', '2017-04-26 13:02:08', 'Deborah Banturaki'),
(130, 'dbanturaki', 'Successfully Logged out', '2017-04-26 13:04:12', 'Deborah Banturaki'),
(131, 'Margy', 'Successfully loggedin', '2017-04-27 05:44:12', 'Oluk Margaret'),
(132, 'Margy', 'Successfully Logged out', '2017-04-27 12:08:26', 'Oluk Margaret'),
(133, 'Margy', 'Successfully loggedin', '2017-04-28 05:31:25', 'Oluk Margaret'),
(134, 'dbanturaki', 'Successfully loggedin', '2017-04-28 06:31:03', 'Deborah Banturaki'),
(135, 'dbanturaki', 'Successfully Logged out', '2017-04-28 08:21:13', 'Deborah Banturaki'),
(136, 'Margy', 'Successfully loggedin', '2017-04-28 12:42:26', 'Oluk Margaret'),
(137, 'Margy', 'Successfully loggedin', '2017-05-02 05:23:25', 'Oluk Margaret'),
(138, 'Margy', 'Successfully Logged out', '2017-05-02 12:37:43', 'Oluk Margaret'),
(139, 'Margy', 'Successfully loggedin', '2017-05-03 07:00:27', 'Oluk Margaret'),
(140, 'dbanturaki', 'Successfully loggedin', '2017-05-03 07:29:02', 'Deborah Banturaki'),
(141, 'dbanturaki', 'Successfully Logged out', '2017-05-03 07:46:35', 'Deborah Banturaki'),
(142, 'dbanturaki', 'Successfully loggedin', '2017-05-03 07:46:42', 'Deborah Banturaki'),
(143, 'dbanturaki', 'Successfully Logged out', '2017-05-03 07:50:57', 'Deborah Banturaki'),
(144, 'Margy', 'Successfully loggedin', '2017-05-03 07:53:22', 'Oluk Margaret'),
(145, 'dbanturaki', 'Successfully loggedin', '2017-05-03 07:57:45', 'Deborah Banturaki'),
(146, 'dbanturaki', 'Successfully Logged out', '2017-05-03 07:58:05', 'Deborah Banturaki'),
(147, 'dbanturaki', 'Successfully loggedin', '2017-05-04 04:29:45', 'Deborah Banturaki'),
(148, 'dbanturaki', 'Successfully Logged out', '2017-05-04 05:21:34', 'Deborah Banturaki'),
(149, 'Margy', 'Successfully Logged out', '2017-05-04 13:44:46', 'Oluk Margaret'),
(150, '', 'Successfully Logged out', '2017-05-04 13:44:49', ''),
(151, 'dbanturaki', 'Successfully loggedin', '2017-05-05 05:03:35', 'Deborah Banturaki'),
(152, 'dbanturaki', 'Successfully Logged out', '2017-05-05 06:00:07', 'Deborah Banturaki'),
(153, 'Margy', 'Successfully loggedin', '2017-05-08 06:32:55', 'Oluk Margaret'),
(154, 'dbanturaki', 'Successfully loggedin', '2017-05-08 10:35:36', 'Deborah Banturaki'),
(155, 'dbanturaki', 'Successfully Logged out', '2017-05-08 10:48:51', 'Deborah Banturaki'),
(156, 'Margy', 'Successfully loggedin', '2017-05-08 10:56:06', 'Oluk Margaret'),
(157, 'margy', 'Failed login', '2017-05-09 06:02:06', 'N/A'),
(158, 'Margy', 'Successfully loggedin', '2017-05-09 06:02:18', 'Oluk Margaret'),
(159, 'dbanturaki', 'Successfully loggedin', '2017-05-10 10:25:13', 'Deborah Banturaki'),
(160, 'dbanturaki', 'Successfully Logged out', '2017-05-10 11:10:37', 'Deborah Banturaki'),
(161, 'Margy', 'Successfully loggedin', '2017-05-10 11:13:12', 'Oluk Margaret'),
(162, 'dbanturaki', 'Successfully loggedin', '2017-05-10 12:51:56', 'Deborah Banturaki'),
(163, 'Margy', 'Successfully loggedin', '2017-05-10 13:52:22', 'Oluk Margaret'),
(164, 'Margy', 'Successfully Logged out', '2017-05-10 14:12:09', 'Oluk Margaret'),
(165, 'Margy', 'Successfully loggedin', '2017-05-11 05:55:44', 'Oluk Margaret'),
(166, 'Margy', 'Successfully Logged out', '2017-05-11 12:58:56', 'Oluk Margaret'),
(167, 'Margy', 'Successfully loggedin', '2017-05-15 07:06:48', 'Oluk Margaret'),
(168, 'Margy', 'Successfully Logged out', '2017-05-15 14:19:24', 'Oluk Margaret'),
(169, 'Margy', 'Successfully loggedin', '2017-05-16 06:20:15', 'Oluk Margaret'),
(170, 'dbanturaki', 'Failed login', '2017-05-16 07:57:56', 'N/A'),
(171, 'dbanturaki', 'Successfully loggedin', '2017-05-16 07:58:10', 'Deborah Banturaki'),
(172, 'dbanturaki', 'Successfully Logged out', '2017-05-16 08:12:25', 'Deborah Banturaki'),
(173, 'Margy', 'Successfully loggedin', '2017-05-16 12:30:20', 'Oluk Margaret'),
(174, 'Margy', 'Successfully Logged out', '2017-05-16 13:52:55', 'Oluk Margaret'),
(175, 'Margy', 'Successfully loggedin', '2017-05-17 05:59:46', 'Oluk Margaret'),
(176, 'admin', 'Successfully loggedin', '2017-05-17 08:54:40', 'Landsat (Technical Support)'),
(177, 'admin', 'Successfully Logged out', '2017-05-17 09:00:30', 'Landsat (Technical Support)'),
(178, 'Margy', 'Successfully Logged out', '2017-05-17 14:09:23', 'Oluk Margaret'),
(179, 'Margy', 'Successfully loggedin', '2017-05-18 06:30:49', 'Oluk Margaret'),
(180, 'Margy', 'Successfully Logged out', '2017-05-18 09:18:41', 'Oluk Margaret'),
(181, 'margy', 'Failed login', '2017-05-18 09:44:33', 'N/A'),
(182, 'Margy', 'Successfully loggedin', '2017-05-18 09:44:45', 'Oluk Margaret'),
(183, 'dbanturaki', 'Successfully loggedin', '2017-05-18 11:10:27', 'Deborah Banturaki'),
(184, 'Margy', 'Successfully Logged out', '2017-05-18 13:35:59', 'Oluk Margaret'),
(185, 'dbanturaki', 'Failed login', '2017-05-22 08:09:31', 'N/A'),
(186, 'dbanturaki', 'Successfully loggedin', '2017-05-22 08:09:42', 'Deborah Banturaki'),
(187, 'dbanturaki', 'Successfully Logged out', '2017-05-22 08:23:31', 'Deborah Banturaki'),
(188, 'dbanturaki', 'Failed login', '2017-05-22 08:34:19', 'N/A'),
(189, 'dbanturaki', 'Successfully loggedin', '2017-05-22 08:34:32', 'Deborah Banturaki'),
(190, 'dbanturaki', 'Successfully Logged out', '2017-05-22 08:38:18', 'Deborah Banturaki'),
(191, 'dbanturaki', 'Successfully loggedin', '2017-05-22 08:58:39', 'Deborah Banturaki'),
(192, 'admin', 'Successfully loggedin', '2017-05-23 05:34:56', 'Landsat (Technical Support)'),
(193, 'admin', 'Successfully Logged out', '2017-05-23 05:47:27', 'Landsat (Technical Support)'),
(194, 'dbanturaki', 'Failed login', '2017-05-23 07:25:43', 'N/A'),
(195, 'dbanturaki', 'Failed login', '2017-05-23 07:25:53', 'N/A'),
(196, 'dbanturaki', 'Successfully loggedin', '2017-05-23 07:26:06', 'Deborah Banturaki'),
(197, 'dbanturaki', 'Successfully Logged out', '2017-05-23 08:19:37', 'Deborah Banturaki'),
(198, '', 'Successfully Logged out', '2017-05-23 08:19:42', ''),
(199, 'dbanturaki', 'Successfully loggedin', '2017-05-23 08:40:40', 'Deborah Banturaki'),
(200, 'margy', 'Failed login', '2017-05-23 09:00:59', 'N/A'),
(201, 'Margy', 'Successfully loggedin', '2017-05-23 09:01:25', 'Oluk Margaret'),
(202, 'dbanturaki', 'Successfully Logged out', '2017-05-23 09:04:26', 'Deborah Banturaki'),
(203, 'Margy', 'Successfully loggedin', '2017-05-24 05:25:02', 'Oluk Margaret'),
(204, 'Margy', 'Successfully Logged out', '2017-05-24 14:41:30', 'Oluk Margaret'),
(205, 'Margy', 'Successfully loggedin', '2017-05-25 06:31:18', 'Oluk Margaret'),
(206, 'Margy', 'Successfully Logged out', '2017-05-25 10:16:01', 'Oluk Margaret'),
(207, 'Margy', 'Successfully loggedin', '2017-05-26 07:16:25', 'Oluk Margaret'),
(208, 'Margy', 'Successfully loggedin', '2017-05-26 08:47:33', 'Oluk Margaret'),
(209, 'Margy', 'Successfully loggedin', '2017-05-29 07:14:41', 'Oluk Margaret'),
(210, 'Margy', 'Successfully Logged out', '2017-05-29 13:53:56', 'Oluk Margaret'),
(211, 'Margy', 'Successfully loggedin', '2017-05-30 07:01:12', 'Oluk Margaret'),
(212, 'admin', 'Successfully loggedin', '2017-05-31 20:01:22', 'Landsat (Technical Support)'),
(213, 'admin', 'Successfully Logged out', '2017-05-31 20:05:23', 'Landsat (Technical Support)'),
(214, 'Margy', 'Successfully Logged out', '2017-06-02 13:28:59', 'Oluk Margaret'),
(215, 'Margy', 'Successfully loggedin', '2017-06-03 08:57:38', 'Oluk Margaret'),
(216, 'Margy', 'Successfully Logged out', '2017-06-07 05:42:01', 'Oluk Margaret'),
(217, 'Margy', 'Successfully loggedin', '2017-06-10 09:19:27', 'Oluk Margaret'),
(218, 'Margy', 'Successfully Logged out', '2017-06-10 12:14:23', 'Oluk Margaret'),
(219, 'Margy', 'Successfully loggedin', '2017-06-12 05:46:50', 'Oluk Margaret'),
(220, 'Margy', 'Successfully Logged out', '2017-06-12 13:31:26', 'Oluk Margaret'),
(221, 'Margy', 'Successfully loggedin', '2017-06-13 05:38:07', 'Oluk Margaret'),
(222, 'admin', 'Successfully loggedin', '2017-06-14 01:18:17', 'Landsat (Technical Support)'),
(223, 'admin', 'Successfully Logged out', '2017-06-14 01:23:30', 'Landsat (Technical Support)'),
(224, 'MARGY', 'Failed login', '2017-06-14 05:12:44', 'N/A'),
(225, 'Margy', 'Successfully loggedin', '2017-06-14 05:12:59', 'Oluk Margaret'),
(226, 'Margy', 'Successfully Logged out', '2017-06-14 08:36:16', 'Oluk Margaret'),
(227, 'Margy', 'Successfully loggedin', '2017-06-14 11:36:54', 'Oluk Margaret'),
(228, 'Margy', 'Successfully Logged out', '2017-06-14 13:53:06', 'Oluk Margaret'),
(229, 'Margy', 'Successfully loggedin', '2017-06-15 08:53:41', 'Oluk Margaret'),
(230, 'dbanturaki', 'Successfully loggedin', '2017-06-15 09:46:52', 'Deborah Banturaki'),
(231, 'hkisingo@mucwru.or.ug', 'Failed login', '2017-06-15 12:46:43', 'N/A'),
(232, 'Margy', 'Successfully Logged out', '2017-06-15 12:58:44', 'Oluk Margaret'),
(233, 'admin', 'Successfully loggedin', '2017-06-15 14:18:32', 'Landsat (Technical Support)'),
(234, 'admin', 'Successfully Logged out', '2017-06-15 14:20:29', 'Landsat (Technical Support)'),
(235, 'Margy', 'Successfully loggedin', '2017-06-16 08:46:09', 'Oluk Margaret'),
(236, 'Margy', 'Successfully loggedin', '2017-06-19 05:58:49', 'Oluk Margaret'),
(237, 'Margy', 'Successfully loggedin', '2017-06-20 05:38:50', 'Oluk Margaret'),
(238, 'Margy', 'Successfully Logged out', '2017-06-20 13:05:11', 'Oluk Margaret'),
(239, 'Margy', 'Successfully loggedin', '2017-06-21 05:34:02', 'Oluk Margaret'),
(240, 'dbanturaki', 'Failed login', '2017-06-21 09:31:15', 'N/A'),
(241, 'dbanturaki', 'Successfully loggedin', '2017-06-21 09:31:24', 'Deborah Banturaki'),
(242, 'dbanturaki', 'Successfully Logged out', '2017-06-21 09:32:09', 'Deborah Banturaki'),
(243, 'Margy', 'Successfully Logged out', '2017-06-21 12:44:31', 'Oluk Margaret'),
(244, 'Margy', 'Successfully loggedin', '2017-06-22 05:48:41', 'Oluk Margaret'),
(245, 'admin', 'Successfully loggedin', '2017-06-23 02:41:22', 'Landsat (Technical Support)'),
(246, 'admin', 'Successfully Logged out', '2017-06-23 02:57:07', 'Landsat (Technical Support)'),
(247, 'dbanturaki', 'Successfully loggedin', '2017-06-23 07:25:45', 'Deborah Banturaki'),
(248, 'dbanturaki', 'Successfully Logged out', '2017-06-23 07:44:34', 'Deborah Banturaki'),
(249, 'Margy', 'Successfully loggedin', '2017-06-23 08:53:36', 'Oluk Margaret'),
(250, 'Margy', 'Successfully Logged out', '2017-06-23 08:58:58', 'Oluk Margaret'),
(251, 'Margy', 'Successfully Logged out', '2017-06-23 12:29:55', 'Oluk Margaret'),
(252, 'Margy', 'Successfully loggedin', '2017-06-26 04:30:26', 'Oluk Margaret'),
(253, 'Margy', 'Successfully loggedin', '2017-06-26 07:20:49', 'Oluk Margaret'),
(254, 'Margy', 'Successfully Logged out', '2017-06-26 07:24:50', 'Oluk Margaret'),
(255, 'Margy', 'Successfully Logged out', '2017-06-26 13:08:07', 'Oluk Margaret'),
(256, 'Margy', 'Successfully loggedin', '2017-06-27 05:12:40', 'Oluk Margaret'),
(257, 'Margy', 'Successfully Logged out', '2017-06-27 12:45:40', 'Oluk Margaret'),
(258, 'jashaba', 'Failed login', '2017-06-27 13:10:24', 'N/A'),
(259, 'admin', 'Successfully loggedin', '2017-06-27 13:10:35', 'Landsat (Technical Support)'),
(260, 'admin', 'Successfully Logged out', '2017-06-27 13:11:26', 'Landsat (Technical Support)'),
(261, 'admin', 'Successfully loggedin', '2017-06-27 14:04:58', 'Landsat (Technical Support)'),
(262, 'admin', 'Successfully Logged out', '2017-06-27 14:31:53', 'Landsat (Technical Support)'),
(263, 'dbanturaki', 'Successfully loggedin', '2017-06-27 14:32:47', 'Deborah Banturaki'),
(264, 'Margy', 'Successfully loggedin', '2017-06-29 09:04:29', 'Oluk Margaret'),
(265, 'dbanturaki', 'Failed login', '2017-06-29 12:00:50', 'N/A'),
(266, 'dbanturaki', 'Successfully loggedin', '2017-06-29 12:01:02', 'Deborah Banturaki'),
(267, 'dbanturaki', 'Successfully Logged out', '2017-06-29 12:02:52', 'Deborah Banturaki'),
(268, 'margy', 'Failed login', '2017-06-29 12:44:43', 'N/A'),
(269, 'Margy', 'Successfully loggedin', '2017-06-29 12:44:52', 'Oluk Margaret'),
(270, 'Margy', 'Successfully Logged out', '2017-06-29 12:47:00', 'Oluk Margaret'),
(271, 'Margy', 'Successfully Logged out', '2017-06-29 13:46:26', 'Oluk Margaret'),
(272, 'Margy', 'Successfully loggedin', '2017-06-30 05:58:33', 'Oluk Margaret'),
(273, 'dbanturaki', 'Failed login', '2017-07-05 11:39:03', 'N/A'),
(274, 'dbanturaki', 'Successfully loggedin', '2017-07-05 11:39:15', 'Deborah Banturaki'),
(275, 'dbanturaki', 'Successfully Logged out', '2017-07-05 11:54:10', 'Deborah Banturaki'),
(276, 'dbanturaki', 'Successfully loggedin', '2017-07-06 05:20:13', 'Deborah Banturaki'),
(277, 'dbanturaki', 'Successfully loggedin', '2017-07-06 07:16:13', 'Deborah Banturaki'),
(278, 'dbanturaki', 'Successfully loggedin', '2017-07-06 09:07:02', 'Deborah Banturaki'),
(279, 'dbanturaki', 'Successfully Logged out', '2017-07-06 09:10:33', 'Deborah Banturaki'),
(280, 'dbanturaki', 'Successfully Logged out', '2017-07-06 11:43:09', 'Deborah Banturaki'),
(281, 'dbanturaki', 'Successfully loggedin', '2017-07-06 12:01:34', 'Deborah Banturaki'),
(282, 'dbanturaki', 'Successfully Logged out', '2017-07-06 12:29:17', 'Deborah Banturaki'),
(283, 'dbanturaki', 'Successfully loggedin', '2017-07-06 12:49:25', 'Deborah Banturaki'),
(284, 'dbanturaki', 'Successfully loggedin', '2017-07-06 13:13:36', 'Deborah Banturaki'),
(285, 'dbanturaki', 'Successfully Logged out', '2017-07-06 13:24:06', 'Deborah Banturaki'),
(286, 'dbanturaki', 'Successfully loggedin', '2017-07-07 06:36:37', 'Deborah Banturaki'),
(287, 'dbanturaki', 'Successfully Logged out', '2017-07-07 08:05:40', 'Deborah Banturaki'),
(288, 'dbanturaki', 'Successfully loggedin', '2017-07-07 08:13:35', 'Deborah Banturaki'),
(289, 'Margy', 'Successfully loggedin', '2017-07-10 05:30:02', 'Oluk Margaret'),
(290, 'Margy', 'Successfully Logged out', '2017-07-10 13:06:45', 'Oluk Margaret'),
(291, 'Margy', 'Successfully loggedin', '2017-07-11 08:06:16', 'Oluk Margaret'),
(292, 'Margy', 'Successfully Logged out', '2017-07-11 14:02:50', 'Oluk Margaret'),
(293, 'admin', 'Successfully loggedin', '2017-07-12 06:03:44', 'Landsat (Technical Support)'),
(294, 'admin', 'Successfully Logged out', '2017-07-12 06:14:52', 'Landsat (Technical Support)'),
(295, 'admin', 'Successfully loggedin', '2017-07-13 00:48:22', 'Landsat (Technical Support)'),
(296, 'admin', 'Successfully Logged out', '2017-07-13 01:03:57', 'Landsat (Technical Support)'),
(297, 'Margy', 'Successfully loggedin', '2017-07-13 07:55:27', 'Oluk Margaret'),
(298, 'Margy', 'Successfully Logged out', '2017-07-13 12:53:30', 'Oluk Margaret'),
(299, 'Margy', 'Successfully loggedin', '2017-07-15 08:54:30', 'Oluk Margaret'),
(300, 'Margy', 'Successfully loggedin', '2017-07-15 09:05:13', 'Oluk Margaret'),
(301, 'Margy', 'Successfully Logged out', '2017-07-15 14:19:27', 'Oluk Margaret'),
(302, 'admin', 'Successfully loggedin', '2017-07-16 02:37:37', 'Landsat (Technical Support)'),
(303, 'admin', 'Successfully Logged out', '2017-07-16 02:38:48', 'Landsat (Technical Support)'),
(304, 'Margy', 'Successfully loggedin', '2017-07-18 05:33:25', 'Oluk Margaret'),
(305, 'Margy', 'Successfully loggedin', '2017-07-19 05:42:09', 'Oluk Margaret'),
(306, 'Margy', 'Successfully Logged out', '2017-07-19 06:39:11', 'Oluk Margaret'),
(307, 'Margy', 'Successfully loggedin', '2017-07-19 08:51:49', 'Oluk Margaret'),
(308, 'Margy', 'Successfully loggedin', '2017-07-20 05:40:30', 'Oluk Margaret'),
(309, 'Margy', 'Successfully loggedin', '2017-07-21 09:14:35', 'Oluk Margaret'),
(310, 'admin', 'Successfully loggedin', '2017-07-21 17:25:09', 'Landsat (Technical Support)'),
(311, 'admin', 'Successfully Logged out', '2017-07-21 17:27:53', 'Landsat (Technical Support)'),
(312, 'admin', 'Successfully loggedin', '2017-07-23 10:04:30', 'Landsat (Technical Support)'),
(313, 'admin', 'Successfully loggedin', '2017-07-23 10:06:20', 'Landsat (Technical Support)'),
(314, 'admin', 'Successfully loggedin', '2017-07-24 07:11:53', 'Landsat (Technical Support)'),
(315, 'admin', 'Successfully Logged out', '2017-07-24 07:14:33', 'Landsat (Technical Support)'),
(316, 'Margy', 'Successfully loggedin', '2017-07-24 08:23:43', 'Oluk Margaret'),
(317, 'Margy', 'Successfully Logged out', '2017-07-24 08:29:54', 'Oluk Margaret'),
(318, 'admin', 'Successfully loggedin', '2017-07-24 08:30:11', 'Landsat (Technical Support)'),
(319, 'admin', 'Successfully Logged out', '2017-07-24 08:30:39', 'Landsat (Technical Support)'),
(320, 'margy', 'Failed login', '2017-07-24 08:30:49', 'N/A'),
(321, 'Margy', 'Successfully loggedin', '2017-07-24 08:31:01', 'Oluk Margaret'),
(322, 'Margy', 'Successfully loggedin', '2017-07-24 10:07:02', 'Oluk Margaret'),
(323, 'licts', 'Failed login', '2017-07-24 10:41:03', 'N/A'),
(324, 'admin', 'Successfully loggedin', '2017-07-24 10:41:16', 'Landsat (Technical Support)'),
(325, 'admin', 'Successfully Logged out', '2017-07-24 10:43:11', 'Landsat (Technical Support)'),
(326, 'Margy', 'Successfully Logged out', '2017-07-24 15:52:10', 'Oluk Margaret'),
(327, 'MARGY', 'Failed login', '2017-07-27 08:11:59', 'N/A'),
(328, 'Margy', 'Successfully loggedin', '2017-07-27 08:12:11', 'Oluk Margaret'),
(329, 'Margy', 'Successfully Logged out', '2017-07-27 12:05:13', 'Oluk Margaret'),
(330, 'licts', 'Failed login', '2017-07-28 12:28:01', 'N/A'),
(331, 'admin', 'Successfully loggedin', '2017-07-28 12:28:14', 'Landsat (Technical Support)'),
(332, 'admin', 'Successfully Logged out', '2017-07-28 12:35:43', 'Landsat (Technical Support)'),
(333, 'Margy', 'Successfully loggedin', '2017-08-01 07:34:39', 'Oluk Margaret'),
(334, 'jashaba', 'Failed login', '2017-08-01 10:22:59', 'N/A'),
(335, 'admin', 'Successfully loggedin', '2017-08-01 10:23:07', 'Landsat (Technical Support)'),
(336, 'admin', 'Successfully Logged out', '2017-08-01 10:45:48', 'Landsat (Technical Support)'),
(337, '', 'Successfully Logged out', '2017-08-01 10:46:01', ''),
(338, 'admin', 'Successfully loggedin', '2017-08-01 10:51:29', 'Landsat (Technical Support)'),
(339, 'Margy', 'Successfully loggedin', '2017-08-01 13:35:48', 'Oluk Margaret'),
(340, 'Margy', 'Successfully Logged out', '2017-08-01 13:35:57', 'Oluk Margaret'),
(341, 'margy', 'Failed login', '2017-08-02 05:25:04', 'N/A'),
(342, 'margy', 'Failed login', '2017-08-02 05:25:21', 'N/A'),
(343, 'Margy', 'Successfully loggedin', '2017-08-02 05:25:37', 'Oluk Margaret'),
(344, 'admin', 'Successfully loggedin', '2017-08-02 06:09:30', 'Landsat (Technical Support)'),
(345, 'admin', 'Successfully Logged out', '2017-08-02 06:27:54', 'Landsat (Technical Support)'),
(346, 'Margy', 'Successfully Logged out', '2017-08-02 06:36:49', 'Oluk Margaret'),
(347, 'margy', 'Failed login', '2017-08-02 07:42:56', 'N/A'),
(348, 'Margy', 'Successfully loggedin', '2017-08-02 07:44:29', 'Oluk Margaret'),
(349, 'Margy', 'Successfully Logged out', '2017-08-02 08:08:20', 'Oluk Margaret'),
(350, 'Margy', 'Successfully loggedin', '2017-08-02 08:09:15', 'Oluk Margaret'),
(351, 'admin', 'Failed login', '2017-08-02 08:39:12', 'N/A'),
(352, 'admin', 'Successfully loggedin', '2017-08-02 08:39:21', 'Landsat (Technical Support)'),
(353, 'Margy', 'Successfully Logged out', '2017-08-02 08:49:02', 'Oluk Margaret'),
(354, 'Margy', 'Successfully loggedin', '2017-08-02 08:49:23', 'Oluk Margaret'),
(355, 'Margy', 'Successfully Logged out', '2017-08-02 09:26:25', 'Oluk Margaret'),
(356, 'Margy', 'Successfully loggedin', '2017-08-02 10:08:24', 'Oluk Margaret'),
(357, 'Margy', 'Successfully Logged out', '2017-08-02 11:39:31', 'Oluk Margaret'),
(358, 'MARGY', 'Failed login', '2017-08-02 11:42:02', 'N/A'),
(359, 'Margy', 'Successfully loggedin', '2017-08-02 11:42:18', 'Oluk Margaret'),
(360, 'Margy', 'Successfully Logged out', '2017-08-02 13:45:59', 'Oluk Margaret'),
(361, 'Margy', 'Successfully loggedin', '2017-08-03 05:51:11', 'Oluk Margaret'),
(362, 'Margy', 'Successfully loggedin', '2017-08-03 08:38:23', 'Oluk Margaret'),
(363, 'Margy', 'Successfully Logged out', '2017-08-03 09:06:12', 'Oluk Margaret'),
(364, '', 'Successfully Logged out', '2017-08-03 09:19:29', ''),
(365, 'admin', 'Successfully loggedin', '2017-08-03 11:29:50', 'Landsat (Technical Support)'),
(366, 'admin', 'Successfully loggedin', '2017-08-03 11:30:48', 'Landsat (Technical Support)'),
(367, 'admin', 'Successfully Logged out', '2017-08-03 11:31:47', 'Landsat (Technical Support)'),
(368, 'admin', 'Successfully Logged out', '2017-08-03 11:57:55', 'Landsat (Technical Support)'),
(369, 'Margy', 'Successfully loggedin', '2017-08-03 11:59:25', 'Oluk Margaret'),
(370, 'Margy', 'Successfully Logged out', '2017-08-03 12:28:47', 'Oluk Margaret'),
(371, '', 'Successfully Logged out', '2017-08-03 12:32:12', ''),
(372, 'Margy', 'Successfully loggedin', '2017-08-03 12:56:19', 'Oluk Margaret'),
(373, 'Margy', 'Successfully Logged out', '2017-08-03 13:15:20', 'Oluk Margaret'),
(374, 'admin', 'Successfully loggedin', '2017-08-03 13:44:10', 'Landsat (Technical Support)'),
(375, 'Margy', 'Successfully loggedin', '2017-08-03 14:15:10', 'Oluk Margaret'),
(376, 'admin', 'Failed login', '2017-08-03 14:28:45', 'N/A'),
(377, 'admin', 'Successfully loggedin', '2017-08-03 14:28:51', 'Landsat (Technical Support)'),
(378, 'admin', 'Successfully loggedin', '2017-08-04 07:21:15', 'Landsat (Technical Support)'),
(379, 'Margy', 'Successfully loggedin', '2017-08-04 11:27:17', 'Oluk Margaret'),
(380, 'admin', 'Successfully Logged out', '2017-08-04 12:01:55', 'Landsat (Technical Support)'),
(381, 'admin', 'Successfully loggedin', '2017-08-04 12:02:07', 'Landsat (Technical Support)'),
(382, 'Margy', 'Successfully Logged out', '2017-08-04 12:19:01', 'Oluk Margaret'),
(383, 'admin', 'Successfully Logged out', '2017-08-04 12:34:38', 'Landsat (Technical Support)'),
(384, 'Margy', 'Successfully loggedin', '2017-08-04 12:43:17', 'Oluk Margaret'),
(385, 'Margy', 'Successfully Logged out', '2017-08-04 13:01:37', 'Oluk Margaret'),
(386, 'Margy', 'Successfully loggedin', '2017-08-04 13:02:54', 'Oluk Margaret'),
(387, 'Margy', 'Successfully Logged out', '2017-08-04 13:21:14', 'Oluk Margaret'),
(388, 'Margy', 'Successfully loggedin', '2017-08-04 13:56:12', 'Oluk Margaret'),
(389, 'admin', 'Successfully loggedin', '2017-08-04 14:38:27', 'Landsat (Technical Support)'),
(390, 'cmuchwa', 'Failed login', '2017-08-10 08:22:00', 'N/A'),
(391, 'cmuchwa', 'Failed login', '2017-08-10 08:22:28', 'N/A'),
(392, 'admin', 'Successfully loggedin', '2017-08-18 02:10:12', 'Landsat (Technical Support)'),
(393, 'admin', 'Successfully loggedin', '2017-08-19 01:05:40', 'Landsat (Technical Support)'),
(394, 'admin', 'Successfully Logged out', '2017-08-19 01:16:46', 'Landsat (Technical Support)'),
(395, 'admin', 'Successfully loggedin', '2017-08-21 03:25:26', 'Landsat (Technical Support)'),
(396, 'admin', 'Successfully Logged out', '2017-08-21 03:26:34', 'Landsat (Technical Support)'),
(397, 'admin', 'Successfully loggedin', '2017-08-21 03:50:21', 'Landsat (Technical Support)'),
(398, 'admin', 'Successfully Logged out', '2017-08-21 03:51:49', 'Landsat (Technical Support)'),
(399, 'dbanturaki', 'Successfully loggedin', '2017-08-22 06:28:59', 'Deborah Banturaki'),
(400, 'Margy', 'Successfully loggedin', '2017-08-24 10:05:13', 'Oluk Margaret'),
(401, 'Margy', 'Successfully Logged out', '2017-08-24 10:44:38', 'Oluk Margaret'),
(402, 'Margy', 'Successfully loggedin', '2017-08-24 10:45:10', 'Oluk Margaret'),
(403, 'Margy', 'Successfully Logged out', '2017-08-24 10:54:16', 'Oluk Margaret'),
(404, 'admin', 'Successfully loggedin', '2017-08-24 11:04:48', 'Landsat (Technical Support)'),
(405, 'admin', 'Successfully Logged out', '2017-08-24 11:06:46', 'Landsat (Technical Support)'),
(406, 'admin', 'Successfully loggedin', '2017-08-24 11:06:55', 'Landsat (Technical Support)'),
(407, 'admin', 'Successfully Logged out', '2017-08-24 11:39:05', 'Landsat (Technical Support)'),
(408, 'admin', 'Successfully loggedin', '2017-08-24 11:51:57', 'Landsat (Technical Support)'),
(409, 'admin', 'Successfully Logged out', '2017-08-24 12:34:46', 'Landsat (Technical Support)'),
(410, 'admin', 'Successfully loggedin', '2017-08-24 12:59:48', 'Landsat (Technical Support)'),
(411, 'admin', 'Successfully Logged out', '2017-08-24 13:00:26', 'Landsat (Technical Support)'),
(412, 'admin', 'Successfully loggedin', '2017-08-24 13:02:52', 'Landsat (Technical Support)'),
(413, 'admin', 'Successfully Logged out', '2017-08-24 13:16:07', 'Landsat (Technical Support)'),
(414, 'admin', 'Successfully loggedin', '2017-09-04 03:57:15', 'Landsat (Technical Support)'),
(415, 'admin', 'Successfully Logged out', '2017-09-04 03:57:39', 'Landsat (Technical Support)'),
(416, 'Margy', 'Successfully loggedin', '2017-09-04 07:47:21', 'Oluk Margaret'),
(417, 'dbanturaki', 'Failed login', '2017-09-04 07:48:25', 'N/A'),
(418, 'dbanturaki', 'Successfully loggedin', '2017-09-04 07:48:35', 'Deborah Banturaki'),
(419, 'dbanturaki', 'Successfully Logged out', '2017-09-04 07:49:13', 'Deborah Banturaki'),
(420, 'admin', 'Successfully loggedin', '2017-09-04 08:03:16', 'Landsat (Technical Support)'),
(421, 'admin', 'Successfully Logged out', '2017-09-04 08:04:02', 'Landsat (Technical Support)'),
(422, 'Margy', 'Successfully loggedin', '2017-09-04 08:16:59', 'Oluk Margaret'),
(423, 'Margy', 'Successfully Logged out', '2017-09-04 08:35:19', 'Oluk Margaret'),
(424, 'Margy', 'Successfully loggedin', '2017-09-04 11:26:34', 'Oluk Margaret'),
(425, 'Margy', 'Successfully Logged out', '2017-09-04 12:10:12', 'Oluk Margaret'),
(426, 'Margy', 'Successfully loggedin', '2017-09-04 12:37:51', 'Oluk Margaret'),
(427, 'Margy', 'Successfully Logged out', '2017-09-04 13:03:17', 'Oluk Margaret'),
(428, 'admin', 'Successfully loggedin', '2017-09-04 16:41:35', 'Landsat (Technical Support)'),
(429, 'admin', 'Successfully Logged out', '2017-09-04 16:45:14', 'Landsat (Technical Support)'),
(430, 'Margy', 'Successfully loggedin', '2017-09-05 10:56:34', 'Oluk Margaret'),
(431, 'Margy', 'Successfully Logged out', '2017-09-05 11:35:21', 'Oluk Margaret'),
(432, 'Margy', 'Successfully loggedin', '2017-09-05 12:23:36', 'Oluk Margaret'),
(433, 'Margy', 'Successfully Logged out', '2017-09-05 13:56:59', 'Oluk Margaret'),
(434, 'admin', 'Successfully loggedin', '2017-09-05 16:10:20', 'Landsat (Technical Support)'),
(435, 'admin', 'Successfully Logged out', '2017-09-05 16:12:57', 'Landsat (Technical Support)'),
(436, 'admin', 'Successfully loggedin', '2017-09-06 02:17:18', 'Landsat (Technical Support)'),
(437, 'admin', 'Successfully Logged out', '2017-09-06 02:22:21', 'Landsat (Technical Support)'),
(438, 'Margy', 'Successfully loggedin', '2017-09-06 10:54:04', 'Oluk Margaret'),
(439, 'margy', 'Failed login', '2017-09-06 10:55:59', 'N/A'),
(440, 'Margy', 'Successfully loggedin', '2017-09-06 11:00:14', 'Oluk Margaret'),
(441, 'Margy', 'Successfully Logged out', '2017-09-06 11:12:29', 'Oluk Margaret'),
(442, '', 'Successfully Logged out', '2017-09-06 11:19:25', ''),
(443, 'Margy', 'Successfully loggedin', '2017-09-06 11:23:22', 'Oluk Margaret'),
(444, 'Margy', 'Successfully loggedin', '2017-09-06 11:52:50', 'Oluk Margaret'),
(445, 'Margy', 'Successfully Logged out', '2017-09-06 12:11:40', 'Oluk Margaret'),
(446, 'Margy', 'Successfully loggedin', '2017-09-06 12:13:36', 'Oluk Margaret'),
(447, 'Margy', 'Successfully Logged out', '2017-09-06 12:28:56', 'Oluk Margaret'),
(448, '', 'Successfully Logged out', '2017-09-06 12:47:12', ''),
(449, 'Margy', 'Successfully loggedin', '2017-09-07 06:12:35', 'Oluk Margaret'),
(450, 'Margy', 'Successfully Logged out', '2017-09-07 06:43:51', 'Oluk Margaret'),
(451, 'admin', 'Successfully loggedin', '2017-09-07 18:44:15', 'Landsat (Technical Support)'),
(452, 'admin', 'Successfully Logged out', '2017-09-07 18:49:16', 'Landsat (Technical Support)'),
(453, 'admin', 'Successfully loggedin', '2017-09-07 18:50:28', 'Landsat (Technical Support)'),
(454, 'admin', 'Successfully Logged out', '2017-09-07 18:54:46', 'Landsat (Technical Support)'),
(455, 'Margy', 'Successfully loggedin', '2017-09-08 08:59:29', 'Oluk Margaret'),
(456, 'Margy', 'Successfully Logged out', '2017-09-08 09:21:32', 'Oluk Margaret'),
(457, 'Margy', 'Successfully loggedin', '2017-09-08 09:23:23', 'Oluk Margaret'),
(458, 'Margy', 'Successfully loggedin', '2017-09-08 09:32:33', 'Oluk Margaret'),
(459, 'Margy', 'Successfully Logged out', '2017-09-08 09:55:24', 'Oluk Margaret'),
(460, 'Margy', 'Successfully loggedin', '2017-09-08 09:55:53', 'Oluk Margaret'),
(461, 'admin', 'Successfully loggedin', '2017-09-08 10:58:09', 'Landsat (Technical Support)'),
(462, 'admin', 'Successfully Logged out', '2017-09-08 10:58:42', 'Landsat (Technical Support)'),
(463, 'Margy', 'Successfully loggedin', '2017-09-08 12:01:09', 'Oluk Margaret'),
(464, 'Margy', 'Successfully Logged out', '2017-09-08 12:20:38', 'Oluk Margaret'),
(465, 'Margy', 'Successfully loggedin', '2017-09-08 12:23:32', 'Oluk Margaret'),
(466, 'Margy', 'Successfully Logged out', '2017-09-08 12:52:37', 'Oluk Margaret'),
(467, 'admin', 'Successfully loggedin', '2017-09-12 07:18:15', 'Landsat (Technical Support)'),
(468, 'admin', 'Successfully Logged out', '2017-09-12 07:20:03', 'Landsat (Technical Support)'),
(469, 'dbanturaki', 'Successfully loggedin', '2017-09-12 09:38:33', 'Deborah Banturaki'),
(470, 'dbanturaki', 'Successfully Logged out', '2017-09-12 09:39:51', 'Deborah Banturaki'),
(471, 'DataMlg', 'Logged in to first user page , Account Dormant', '2017-09-12 09:40:11', 'Data Mulago'),
(472, 'DataMlg', 'Successfully Logged out', '2017-09-12 09:40:40', 'Data Mulago'),
(473, 'DataMlg', 'Successfully loggedin', '2017-09-12 09:40:53', 'Data Mulago'),
(474, 'DataMlg', 'Successfully loggedin', '2017-09-12 09:57:10', 'Data Mulago'),
(475, 'DataMlg', 'Successfully loggedin', '2017-09-12 10:20:12', 'Data Mulago'),
(476, 'DataMlg', 'Failed login', '2017-09-12 10:27:03', 'N/A'),
(477, 'DataMlg', 'Successfully loggedin', '2017-09-12 10:27:20', 'Data Mulago'),
(478, 'admin', 'Successfully loggedin', '2017-09-12 12:07:36', 'Landsat (Technical Support)'),
(479, 'DataMlg', 'Successfully loggedin', '2017-09-12 12:19:01', 'Data Mulago'),
(480, 'DataMlg', 'Successfully Logged out', '2017-09-12 12:26:51', 'Data Mulago'),
(481, 'Margy', 'Successfully loggedin', '2017-09-13 06:01:01', 'Oluk Margaret'),
(482, 'Margy', 'Successfully Logged out', '2017-09-13 06:19:25', 'Oluk Margaret'),
(483, 'Margy', 'Successfully loggedin', '2017-09-13 06:58:36', 'Oluk Margaret'),
(484, 'Margy', 'Successfully Logged out', '2017-09-13 07:49:56', 'Oluk Margaret'),
(485, 'Margy', 'Successfully loggedin', '2017-09-13 11:30:40', 'Oluk Margaret'),
(486, 'Margy', 'Successfully Logged out', '2017-09-13 12:57:31', 'Oluk Margaret'),
(487, 'dbanturaki', 'Successfully loggedin', '2017-09-14 06:10:13', 'Deborah Banturaki'),
(488, 'Margy', 'Successfully loggedin', '2017-09-14 06:12:45', 'Oluk Margaret'),
(489, 'dbanturaki', 'Successfully Logged out', '2017-09-14 06:24:36', 'Deborah Banturaki'),
(490, 'Margy', 'Successfully Logged out', '2017-09-14 06:37:52', 'Oluk Margaret'),
(491, 'dbanturaki', 'Failed login', '2017-09-14 06:43:29', 'N/A'),
(492, 'dbanturaki', 'Successfully loggedin', '2017-09-14 06:43:40', 'Deborah Banturaki'),
(493, 'dbanturaki', 'Successfully Logged out', '2017-09-14 06:50:24', 'Deborah Banturaki'),
(494, 'Margy', 'Successfully loggedin', '2017-09-15 04:55:50', 'Oluk Margaret'),
(495, 'Margy', 'Successfully Logged out', '2017-09-15 05:55:49', 'Oluk Margaret'),
(496, 'Margy', 'Successfully loggedin', '2017-09-15 05:56:08', 'Oluk Margaret'),
(497, 'Margy', 'Successfully loggedin', '2017-09-15 06:37:05', 'Oluk Margaret'),
(498, 'Margy', 'Successfully Logged out', '2017-09-15 06:56:52', 'Oluk Margaret'),
(499, 'Margy', 'Successfully loggedin', '2017-09-15 06:58:16', 'Oluk Margaret'),
(500, 'Margy', 'Successfully loggedin', '2017-09-15 06:58:31', 'Oluk Margaret'),
(501, 'Margy', 'Successfully Logged out', '2017-09-15 07:17:42', 'Oluk Margaret'),
(502, 'Margy', 'Successfully loggedin', '2017-09-15 07:20:10', 'Oluk Margaret'),
(503, 'Margy', 'Successfully Logged out', '2017-09-15 07:56:07', 'Oluk Margaret'),
(504, 'Margy', 'Successfully loggedin', '2017-09-15 07:57:48', 'Oluk Margaret'),
(505, 'Margy', 'Successfully Logged out', '2017-09-15 08:24:35', 'Oluk Margaret'),
(506, 'MARGY', 'Failed login', '2017-09-15 08:26:50', 'N/A'),
(507, 'Margy', 'Successfully loggedin', '2017-09-15 08:27:06', 'Oluk Margaret'),
(508, 'Margy', 'Successfully Logged out', '2017-09-15 08:29:35', 'Oluk Margaret'),
(509, 'Margy', 'Successfully loggedin', '2017-09-15 08:30:02', 'Oluk Margaret'),
(510, 'Margy', 'Successfully Logged out', '2017-09-15 08:59:48', 'Oluk Margaret'),
(511, 'Margy', 'Successfully loggedin', '2017-09-15 11:38:23', 'Oluk Margaret'),
(512, 'Margy', 'Successfully Logged out', '2017-09-15 11:56:52', 'Oluk Margaret'),
(513, 'Margy', 'Successfully loggedin', '2017-09-15 12:19:33', 'Oluk Margaret'),
(514, 'Margy', 'Successfully Logged out', '2017-09-15 13:10:10', 'Oluk Margaret'),
(515, 'DataMlg', 'Successfully loggedin', '2017-09-18 09:11:59', 'Data Mulago'),
(516, 'dbanturaki', 'Failed login', '2017-09-19 08:23:03', 'N/A'),
(517, 'dbanturaki', 'Successfully loggedin', '2017-09-19 08:23:14', 'Deborah Banturaki'),
(518, 'dbanturaki', 'Successfully Logged out', '2017-09-19 08:23:33', 'Deborah Banturaki'),
(519, 'DataMlg', 'Successfully loggedin', '2017-09-20 09:44:44', 'Data Mulago'),
(520, 'DataMlg', 'Successfully loggedin', '2017-09-20 09:58:04', 'Data Mulago'),
(521, 'DataMlg', 'Successfully loggedin', '2017-09-20 09:59:55', 'Data Mulago'),
(522, 'DataMlg', 'Failed login', '2017-09-20 10:03:06', 'N/A'),
(523, 'DataMlg', 'Successfully loggedin', '2017-09-20 10:03:14', 'Data Mulago'),
(524, 'DataMlg', 'Successfully loggedin', '2017-09-20 10:03:39', 'Data Mulago'),
(525, 'dbanturaki', 'Failed login', '2017-09-21 12:24:35', 'N/A'),
(526, 'dbanturaki', 'Successfully loggedin', '2017-09-21 12:24:47', 'Deborah Banturaki'),
(527, 'dbanturaki', 'Successfully Logged out', '2017-09-21 12:24:51', 'Deborah Banturaki'),
(528, 'admin', 'Successfully loggedin', '2017-09-22 04:52:39', 'Landsat (Technical Support)'),
(529, 'admin', 'Successfully Logged out', '2017-09-22 04:55:23', 'Landsat (Technical Support)'),
(530, 'dbanturaki', 'Successfully loggedin', '2017-09-26 09:54:39', 'Deborah Banturaki'),
(531, 'dbanturaki', 'Successfully Logged out', '2017-09-26 09:54:59', 'Deborah Banturaki'),
(532, 'dbanturaki', 'Successfully loggedin', '2017-09-26 09:58:05', 'Deborah Banturaki'),
(533, 'dbanturaki', 'Successfully Logged out', '2017-09-26 10:01:32', 'Deborah Banturaki'),
(534, 'dbanturaki', 'Successfully loggedin', '2017-09-26 10:35:46', 'Deborah Banturaki'),
(535, 'dbanturaki', 'Successfully Logged out', '2017-09-26 11:05:07', 'Deborah Banturaki'),
(536, 'dbanturaki', 'Successfully loggedin', '2017-09-26 11:29:24', 'Deborah Banturaki'),
(537, 'dbanturaki', 'Successfully Logged out', '2017-09-26 12:02:46', 'Deborah Banturaki'),
(538, 'dbanturaki', 'Failed login', '2017-09-26 12:10:58', 'N/A'),
(539, 'dbanturaki', 'Successfully loggedin', '2017-09-26 12:11:07', 'Deborah Banturaki'),
(540, 'dbanturaki', 'Successfully Logged out', '2017-09-26 13:23:41', 'Deborah Banturaki'),
(541, 'dbanturaki', 'Successfully loggedin', '2017-09-27 07:08:47', 'Deborah Banturaki'),
(542, 'dbanturaki', 'Successfully Logged out', '2017-09-27 07:09:13', 'Deborah Banturaki'),
(543, 'dbanturaki', 'Successfully loggedin', '2017-09-27 07:14:58', 'Deborah Banturaki'),
(544, 'dbanturaki', 'Successfully Logged out', '2017-09-27 07:22:47', 'Deborah Banturaki'),
(545, 'dbanturaki', 'Successfully loggedin', '2017-09-27 07:32:14', 'Deborah Banturaki'),
(546, 'dbanturaki', 'Successfully Logged out', '2017-09-27 09:06:14', 'Deborah Banturaki'),
(547, 'dbanturaki', 'Successfully loggedin', '2017-09-28 07:04:23', 'Deborah Banturaki'),
(548, 'dbanturaki', 'Successfully Logged out', '2017-09-28 07:05:29', 'Deborah Banturaki'),
(549, 'dbanturaki', 'Successfully loggedin', '2017-09-28 07:07:57', 'Deborah Banturaki'),
(550, 'dbanturaki', 'Successfully Logged out', '2017-09-28 07:54:31', 'Deborah Banturaki'),
(551, '', 'Successfully Logged out', '2017-09-28 08:10:19', ''),
(552, 'dbanturaki', 'Successfully loggedin', '2017-10-10 08:49:07', 'Deborah Banturaki'),
(553, 'dbanturaki', 'Successfully Logged out', '2017-10-10 08:49:13', 'Deborah Banturaki'),
(554, 'DataMlg', 'Failed login', '2017-10-11 09:39:24', 'N/A'),
(555, 'jpakol', 'Failed login', '2017-10-11 09:41:20', 'N/A'),
(556, 'jpakol', 'Failed login', '2017-10-11 09:41:32', 'N/A'),
(557, 'jpakol', 'Failed login', '2017-10-11 09:41:59', 'N/A'),
(558, 'jpakol', 'Failed login', '2017-10-11 09:42:08', 'N/A'),
(559, 'jpakol', 'Failed login', '2017-10-11 09:42:16', 'N/A'),
(560, 'jpakol', 'Failed login', '2017-10-11 09:43:58', 'N/A'),
(561, 'admin', 'Failed login', '2017-10-11 09:44:18', 'N/A'),
(562, 'admin', 'Failed login', '2017-10-11 09:44:54', 'N/A'),
(563, 'admin', 'Successfully loggedin', '2017-10-11 09:49:03', 'Landsat (Technical Support)'),
(564, 'admin', 'Successfully Logged out', '2017-10-11 10:19:52', 'Landsat (Technical Support)'),
(565, 'admin', 'Successfully loggedin', '2017-10-11 10:59:18', 'Landsat (Technical Support)'),
(566, 'jpakol', 'Failed login', '2017-10-11 11:41:22', 'N/A'),
(567, 'jpakol', 'Failed login', '2017-10-11 11:41:31', 'N/A'),
(568, 'jpakol', 'Failed login', '2017-10-11 11:41:58', 'N/A'),
(569, 'jpakol', 'Failed login', '2017-10-11 11:42:11', 'N/A'),
(570, 'dbanturaki', 'Successfully loggedin', '2017-10-11 12:07:31', 'Deborah Banturaki'),
(571, 'jakol', 'Failed login', '2017-10-11 12:44:19', 'N/A'),
(572, 'jakol', 'Failed login', '2017-10-11 12:45:35', 'N/A'),
(573, 'J-akol', 'Failed login', '2017-10-11 12:45:51', 'N/A'),
(574, 'akol_j', 'Failed login', '2017-10-11 12:46:27', 'N/A'),
(575, 'jakol', 'Failed login', '2017-10-11 12:48:49', 'N/A'),
(576, 'jakol', 'Failed login', '2017-10-11 12:48:59', 'N/A'),
(577, 'jakol', 'Failed login', '2017-10-11 12:49:08', 'N/A'),
(578, 'jakol', 'Failed login', '2017-10-11 12:49:18', 'N/A'),
(579, 'jakol', 'Successfully loggedin', '2017-10-11 12:49:29', 'Akol Joseph'),
(580, 'jakol', 'Successfully loggedin', '2017-10-11 12:52:16', 'Akol Joseph'),
(581, 'jakol', 'Successfully Logged out', '2017-10-11 12:52:20', 'Akol Joseph'),
(582, 'jakol', 'Successfully loggedin', '2017-10-11 12:55:26', 'Akol Joseph'),
(583, 'jakol', 'Successfully Logged out', '2017-10-11 12:58:34', 'Akol Joseph'),
(584, 'dbanturaki', 'Successfully Logged out', '2017-10-11 13:05:48', 'Deborah Banturaki'),
(585, 'dbanturaki', 'Failed login', '2017-10-11 13:06:05', 'N/A'),
(586, 'dbanturaki', 'Successfully loggedin', '2017-10-11 13:06:14', 'Deborah Banturaki'),
(587, 'dbanturaki', 'Successfully Logged out', '2017-10-11 14:10:05', 'Deborah Banturaki'),
(588, 'dbanturaki', 'Successfully loggedin', '2017-10-12 10:45:47', 'Deborah Banturaki'),
(589, 'dbanturaki', 'Successfully Logged out', '2017-10-12 11:56:13', 'Deborah Banturaki'),
(590, 'dbanturaki', 'Failed login', '2017-10-12 12:24:27', 'N/A'),
(591, 'dbanturaki', 'Successfully loggedin', '2017-10-12 12:24:34', 'Deborah Banturaki'),
(592, 'dbanturaki', 'Successfully Logged out', '2017-10-12 13:30:04', 'Deborah Banturaki'),
(593, 'dbanturaki', 'Successfully loggedin', '2017-10-13 06:43:39', 'Deborah Banturaki'),
(594, 'dbanturaki', 'Successfully Logged out', '2017-10-13 07:02:36', 'Deborah Banturaki'),
(595, 'dbanturaki', 'Successfully loggedin', '2017-10-13 08:01:26', 'Deborah Banturaki'),
(596, 'dbanturaki', 'Successfully Logged out', '2017-10-13 08:38:01', 'Deborah Banturaki'),
(597, 'dbanturaki', 'Successfully loggedin', '2017-10-13 09:32:46', 'Deborah Banturaki'),
(598, 'dbanturaki', 'Successfully Logged out', '2017-10-13 09:53:50', 'Deborah Banturaki'),
(599, 'dbanturaki', 'Failed login', '2017-10-16 09:14:05', 'N/A'),
(600, 'dbanturaki', 'Successfully loggedin', '2017-10-16 09:14:14', 'Deborah Banturaki'),
(601, 'dbanturaki', 'Successfully Logged out', '2017-10-16 09:36:41', 'Deborah Banturaki'),
(602, 'dbanturaki', 'Successfully loggedin', '2017-10-16 09:48:14', 'Deborah Banturaki'),
(603, 'dbanturaki', 'Successfully Logged out', '2017-10-16 09:59:59', 'Deborah Banturaki'),
(604, 'dbanturaki', 'Failed login', '2017-10-17 09:30:31', 'N/A'),
(605, 'dbanturaki', 'Successfully loggedin', '2017-10-17 09:30:43', 'Deborah Banturaki');
INSERT INTO `user_logs` (`id`, `username`, `action`, `time`, `name`) VALUES
(606, 'dbanturaki', 'Successfully Logged out', '2017-10-17 09:37:33', 'Deborah Banturaki'),
(607, 'dbanturaki', 'Successfully loggedin', '2017-10-18 07:19:46', 'Deborah Banturaki'),
(608, 'dbanturaki', 'Successfully Logged out', '2017-10-18 07:54:06', 'Deborah Banturaki'),
(609, 'dbantuaki', 'Failed login', '2017-10-18 07:56:04', 'N/A'),
(610, 'dbanturaki', 'Successfully loggedin', '2017-10-18 07:56:12', 'Deborah Banturaki'),
(611, 'dbanturaki', 'Successfully Logged out', '2017-10-18 10:51:22', 'Deborah Banturaki'),
(612, 'dbanturaki', 'Successfully loggedin', '2017-10-18 10:51:32', 'Deborah Banturaki'),
(613, 'dbanturaki', 'Successfully loggedin', '2017-10-18 11:01:34', 'Deborah Banturaki'),
(614, 'dbanturaki', 'Successfully Logged out', '2017-10-18 11:01:40', 'Deborah Banturaki'),
(615, 'dbanturaki', 'Failed login', '2017-10-19 06:30:18', 'N/A'),
(616, 'dbanturaki', 'Successfully loggedin', '2017-10-19 06:30:25', 'Deborah Banturaki'),
(617, 'dbanturaki', 'Successfully Logged out', '2017-10-19 06:48:57', 'Deborah Banturaki'),
(618, 'dbanturaki', 'Successfully loggedin', '2017-10-19 07:58:09', 'Deborah Banturaki'),
(619, 'dbanturaki', 'Successfully Logged out', '2017-10-19 09:33:21', 'Deborah Banturaki'),
(620, 'dbanturaki', 'Successfully loggedin', '2017-10-19 09:35:19', 'Deborah Banturaki'),
(621, 'dbanturaki', 'Successfully loggedin', '2017-10-19 09:37:50', 'Deborah Banturaki'),
(622, 'dbanturaki', 'Successfully Logged out', '2017-10-19 09:47:50', 'Deborah Banturaki'),
(623, 'dbanturaki', 'Successfully loggedin', '2017-10-19 10:38:47', 'Deborah Banturaki'),
(624, 'dbanturaki', 'Successfully Logged out', '2017-10-19 10:47:13', 'Deborah Banturaki'),
(625, 'dbanturaki', 'Successfully loggedin', '2017-10-20 06:07:14', 'Deborah Banturaki'),
(626, 'dbanturaki', 'Successfully Logged out', '2017-10-20 06:48:34', 'Deborah Banturaki'),
(627, 'dbanturaki', 'Successfully loggedin', '2017-10-20 07:07:39', 'Deborah Banturaki'),
(628, 'dbanturaki', 'Successfully Logged out', '2017-10-20 08:19:51', 'Deborah Banturaki'),
(629, 'dbanturaki', 'Successfully loggedin', '2017-10-20 08:20:01', 'Deborah Banturaki'),
(630, 'dbanturaki', 'Successfully Logged out', '2017-10-20 08:51:30', 'Deborah Banturaki'),
(631, 'dbanturaki', 'Successfully loggedin', '2017-10-23 05:54:35', 'Deborah Banturaki'),
(632, 'dbanturaki', 'Successfully Logged out', '2017-10-23 06:58:16', 'Deborah Banturaki'),
(633, 'dbanturaki', 'Successfully loggedin', '2017-10-23 07:35:56', 'Deborah Banturaki'),
(634, 'dbanturaki', 'Successfully Logged out', '2017-10-23 08:12:35', 'Deborah Banturaki'),
(635, 'dbanturaki', 'Failed login', '2017-10-23 08:17:41', 'N/A'),
(636, 'dbanturaki', 'Successfully loggedin', '2017-10-23 08:17:49', 'Deborah Banturaki'),
(637, 'dbanturaki', 'Successfully Logged out', '2017-10-23 08:45:38', 'Deborah Banturaki'),
(638, 'dbanturaki', 'Successfully loggedin', '2017-10-23 08:47:34', 'Deborah Banturaki'),
(639, 'dbanturaki', 'Successfully Logged out', '2017-10-23 08:58:43', 'Deborah Banturaki'),
(640, 'dbanturaki', 'Successfully loggedin', '2017-10-23 08:59:21', 'Deborah Banturaki'),
(641, 'dbanturaki', 'Successfully Logged out', '2017-10-23 09:48:19', 'Deborah Banturaki'),
(642, 'dbanturaki', 'Successfully loggedin', '2017-10-23 13:16:46', 'Deborah Banturaki'),
(643, 'dbanturaki', 'Successfully Logged out', '2017-10-23 14:00:48', 'Deborah Banturaki'),
(644, 'dbanturaki', 'Successfully loggedin', '2017-10-24 05:38:01', 'Deborah Banturaki'),
(645, 'dbanturaki', 'Successfully Logged out', '2017-10-24 05:56:21', 'Deborah Banturaki'),
(646, 'dbanturaki', 'Successfully loggedin', '2017-10-24 06:08:57', 'Deborah Banturaki'),
(647, 'dbanturaki', 'Successfully Logged out', '2017-10-24 07:04:59', 'Deborah Banturaki'),
(648, 'dbanturaki', 'Successfully loggedin', '2017-10-24 07:41:50', 'Deborah Banturaki'),
(649, 'dbanturaki', 'Successfully Logged out', '2017-10-24 07:42:04', 'Deborah Banturaki'),
(650, 'dbanturaki', 'Successfully loggedin', '2017-10-24 07:50:08', 'Deborah Banturaki'),
(651, 'dbanturaki', 'Successfully Logged out', '2017-10-24 07:50:18', 'Deborah Banturaki'),
(652, 'dbanturaki', 'Successfully loggedin', '2017-10-24 10:33:29', 'Deborah Banturaki'),
(653, 'dbanturaki', 'Successfully Logged out', '2017-10-24 11:08:04', 'Deborah Banturaki'),
(654, 'dbanturaki', 'Failed login', '2017-10-24 11:45:31', 'N/A'),
(655, 'dbanturaki', 'Successfully loggedin', '2017-10-24 11:45:38', 'Deborah Banturaki'),
(656, 'dbanturaki', 'Successfully Logged out', '2017-10-24 12:19:18', 'Deborah Banturaki'),
(657, 'dbanturaki', 'Successfully loggedin', '2017-10-24 12:22:16', 'Deborah Banturaki'),
(658, 'dbanturaki', 'Successfully Logged out', '2017-10-24 14:26:49', 'Deborah Banturaki'),
(659, 'dbanturaki', 'Successfully loggedin', '2017-10-24 14:28:13', 'Deborah Banturaki'),
(660, 'dbanturaki', 'Successfully Logged out', '2017-10-24 14:29:59', 'Deborah Banturaki'),
(661, 'dbanturaki', 'Successfully loggedin', '2017-10-25 05:58:33', 'Deborah Banturaki'),
(662, 'dbanturaki', 'Successfully Logged out', '2017-10-25 06:39:01', 'Deborah Banturaki'),
(663, 'dbanturaki', 'Successfully loggedin', '2017-10-25 07:00:07', 'Deborah Banturaki'),
(664, 'dbanturaki', 'Successfully Logged out', '2017-10-25 08:15:11', 'Deborah Banturaki'),
(665, 'dbanturaki', 'Successfully loggedin', '2017-10-25 12:26:34', 'Deborah Banturaki'),
(666, 'dbanturaki', 'Successfully Logged out', '2017-10-25 12:28:41', 'Deborah Banturaki'),
(667, 'dbanturaki', 'Successfully loggedin', '2017-10-25 13:52:51', 'Deborah Banturaki'),
(668, 'dbanturaki', 'Successfully Logged out', '2017-10-25 14:12:02', 'Deborah Banturaki'),
(669, 'dbanturaki', 'Successfully loggedin', '2017-10-25 14:13:09', 'Deborah Banturaki'),
(670, 'dbanturaki', 'Successfully Logged out', '2017-10-25 14:14:24', 'Deborah Banturaki'),
(671, 'dbanturaki', 'Successfully loggedin', '2017-10-27 05:53:49', 'Deborah Banturaki'),
(672, 'dbanturaki', 'Successfully Logged out', '2017-10-27 06:12:15', 'Deborah Banturaki'),
(673, 'dbanturaki', 'Successfully loggedin', '2017-10-27 06:21:19', 'Deborah Banturaki'),
(674, 'dbanturaki', 'Successfully Logged out', '2017-10-27 08:42:32', 'Deborah Banturaki'),
(675, 'dbanturaki', 'Successfully loggedin', '2017-10-27 08:43:43', 'Deborah Banturaki'),
(676, 'dbanturaki', 'Successfully Logged out', '2017-10-27 08:56:07', 'Deborah Banturaki'),
(677, 'dbanturaki', 'Successfully loggedin', '2017-10-30 06:22:12', 'Deborah Banturaki'),
(678, 'dbanturaki', 'Successfully Logged out', '2017-10-30 07:29:40', 'Deborah Banturaki'),
(679, 'dbanturaki', 'Successfully loggedin', '2017-10-30 08:39:08', 'Deborah Banturaki'),
(680, 'dbanturaki', 'Successfully Logged out', '2017-10-30 10:25:03', 'Deborah Banturaki'),
(681, 'dbanturaki', 'Failed login', '2017-11-01 08:41:16', 'N/A'),
(682, 'dbanturaki', 'Successfully loggedin', '2017-11-01 08:41:34', 'Deborah Banturaki'),
(683, 'dbanturaki', 'Successfully Logged out', '2017-11-01 09:06:00', 'Deborah Banturaki'),
(684, 'dbanturaki', 'Successfully loggedin', '2017-11-01 09:25:15', 'Deborah Banturaki'),
(685, 'dbanturaki', 'Successfully Logged out', '2017-11-01 09:58:32', 'Deborah Banturaki'),
(686, 'dbanturaki', 'Successfully loggedin', '2017-11-01 10:14:16', 'Deborah Banturaki'),
(687, 'dbanturaki', 'Successfully Logged out', '2017-11-01 10:32:20', 'Deborah Banturaki'),
(688, 'dbanturaki', 'Successfully loggedin', '2017-11-01 12:47:05', 'Deborah Banturaki'),
(689, 'dbanturaki', 'Successfully Logged out', '2017-11-01 13:31:02', 'Deborah Banturaki'),
(690, 'dbanturaki', 'Successfully loggedin', '2017-11-02 05:49:33', 'Deborah Banturaki'),
(691, 'dbanturaki', 'Successfully Logged out', '2017-11-02 07:45:20', 'Deborah Banturaki'),
(692, 'dbanturaki', 'Successfully loggedin', '2017-11-02 07:57:10', 'Deborah Banturaki'),
(693, 'dbanturaki', 'Successfully Logged out', '2017-11-02 08:19:05', 'Deborah Banturaki'),
(694, 'dbanturaki', 'Successfully loggedin', '2017-11-02 08:52:52', 'Deborah Banturaki'),
(695, 'dbanturaki', 'Successfully Logged out', '2017-11-02 09:31:34', 'Deborah Banturaki'),
(696, 'dbanturaki', 'Successfully loggedin', '2017-11-02 12:37:21', 'Deborah Banturaki'),
(697, 'dbanturaki', 'Successfully Logged out', '2017-11-02 13:36:36', 'Deborah Banturaki'),
(698, 'dbanturaki', 'Successfully loggedin', '2017-11-06 07:25:02', 'Deborah Banturaki'),
(699, 'dbanturaki', 'Successfully Logged out', '2017-11-06 08:09:18', 'Deborah Banturaki'),
(700, 'dbanturaki', 'Successfully loggedin', '2017-11-06 08:42:04', 'Deborah Banturaki'),
(701, 'dbanturaki', 'Successfully Logged out', '2017-11-06 10:15:25', 'Deborah Banturaki'),
(702, 'dbanturaki', 'Failed login', '2017-11-06 10:18:28', 'N/A'),
(703, 'dbanturaki', 'Successfully loggedin', '2017-11-06 10:18:38', 'Deborah Banturaki'),
(704, 'dbanturaki', 'Successfully Logged out', '2017-11-06 10:54:53', 'Deborah Banturaki'),
(705, 'dbanturaki', 'Successfully loggedin', '2017-11-06 12:19:58', 'Deborah Banturaki'),
(706, 'dbanturaki', 'Successfully Logged out', '2017-11-06 13:07:20', 'Deborah Banturaki'),
(707, 'dbanturaki', 'Successfully loggedin', '2017-11-06 13:15:19', 'Deborah Banturaki'),
(708, 'dbanturaki', 'Successfully Logged out', '2017-11-06 13:19:29', 'Deborah Banturaki'),
(709, 'dbanturaki', 'Successfully loggedin', '2017-11-07 13:37:09', 'Deborah Banturaki'),
(710, 'dbanturaki', 'Successfully Logged out', '2017-11-07 13:39:33', 'Deborah Banturaki'),
(711, 'dbanturaki', 'Successfully loggedin', '2017-11-07 13:47:35', 'Deborah Banturaki'),
(712, 'dbanturaki', 'Successfully loggedin', '2017-11-07 14:16:19', 'Deborah Banturaki'),
(713, 'admin', 'Successfully loggedin', '2017-11-08 02:30:20', 'Landsat (Technical Support)'),
(714, 'admin', 'Successfully Logged out', '2017-11-08 03:10:14', 'Landsat (Technical Support)'),
(715, '', 'Successfully Logged out', '2017-11-08 03:19:08', ''),
(716, 'dbanturaki', 'Failed login', '2017-11-08 07:47:50', 'N/A'),
(717, 'dbanturaki', 'Successfully loggedin', '2017-11-08 07:48:01', 'Deborah Banturaki'),
(718, 'dbanturaki', 'Successfully Logged out', '2017-11-08 08:28:15', 'Deborah Banturaki'),
(719, 'dbanturaki', 'Successfully loggedin', '2017-11-08 10:53:25', 'Deborah Banturaki'),
(720, 'dbanturaki', 'Successfully Logged out', '2017-11-08 10:53:49', 'Deborah Banturaki'),
(721, 'dbanturaki', 'Successfully loggedin', '2017-11-09 10:02:54', 'Deborah Banturaki'),
(722, 'dbanturaki', 'Successfully Logged out', '2017-11-09 10:03:03', 'Deborah Banturaki'),
(723, 'dbanturaki', 'Successfully loggedin', '2017-11-09 11:30:03', 'Deborah Banturaki'),
(724, 'admin', 'Successfully loggedin', '2017-11-09 12:06:03', 'Landsat (Technical Support)'),
(725, 'admin', 'Successfully loggedin', '2017-11-09 12:07:26', 'Landsat (Technical Support)'),
(726, 'dbanturaki', 'Successfully Logged out', '2017-11-09 12:09:22', 'Deborah Banturaki'),
(727, 'admin', 'Successfully Logged out', '2017-11-09 12:09:35', 'Landsat (Technical Support)'),
(728, 'admin', 'Successfully Logged out', '2017-11-09 12:09:40', 'Landsat (Technical Support)'),
(729, 'dbanturaki', 'Successfully loggedin', '2017-11-09 14:10:22', 'Deborah Banturaki'),
(730, 'dbanturaki', 'Successfully Logged out', '2017-11-09 14:30:02', 'Deborah Banturaki'),
(731, 'dbanturaki', 'Successfully loggedin', '2017-11-10 07:37:49', 'Deborah Banturaki'),
(732, 'dbanturaki', 'Successfully loggedin', '2017-11-10 09:26:20', 'Deborah Banturaki'),
(733, 'dbanturaki', 'Successfully Logged out', '2017-11-10 09:26:47', 'Deborah Banturaki'),
(734, 'dbanturaki', 'Successfully Logged out', '2017-11-10 09:33:27', 'Deborah Banturaki'),
(735, 'dbanturaki', 'Successfully loggedin', '2017-11-10 12:31:02', 'Deborah Banturaki'),
(736, 'dbanturaki', 'Successfully Logged out', '2017-11-10 12:52:34', 'Deborah Banturaki'),
(737, 'dbanturaki', 'Failed login', '2017-11-13 13:45:12', 'N/A'),
(738, 'dbanturaki', 'Successfully loggedin', '2017-11-13 13:45:19', 'Deborah Banturaki'),
(739, 'dbanturaki', 'Successfully Logged out', '2017-11-13 14:50:19', 'Deborah Banturaki'),
(740, 'ruhemba', 'Failed login', '2017-11-14 05:13:03', 'N/A'),
(741, 'dbanturaki', 'Successfully loggedin', '2017-11-14 05:13:13', 'Deborah Banturaki'),
(742, 'dbanturaki', 'Successfully Logged out', '2017-11-14 05:31:39', 'Deborah Banturaki'),
(743, 'dbanturaki', 'Successfully loggedin', '2017-11-14 05:44:47', 'Deborah Banturaki'),
(744, 'dbanturaki', 'Successfully Logged out', '2017-11-14 06:07:48', 'Deborah Banturaki'),
(745, 'dbanturaki', 'Successfully loggedin', '2017-11-14 08:25:40', 'Deborah Banturaki'),
(746, 'dbanturaki', 'Successfully Logged out', '2017-11-14 09:38:41', 'Deborah Banturaki'),
(747, 'dbanturaki', 'Successfully loggedin', '2017-11-15 06:11:31', 'Deborah Banturaki'),
(748, 'dbanturaki', 'Successfully Logged out', '2017-11-15 06:39:02', 'Deborah Banturaki'),
(749, 'dbanturaki', 'Successfully loggedin', '2017-11-15 06:39:11', 'Deborah Banturaki'),
(750, 'senyungule', 'Failed login', '2017-11-15 07:34:41', 'N/A'),
(751, 'dbanturaki', 'Successfully Logged out', '2017-11-15 07:49:58', 'Deborah Banturaki'),
(752, 'dbanturaki', 'Successfully loggedin', '2017-11-15 13:39:46', 'Deborah Banturaki'),
(753, 'dbanturaki', 'Successfully Logged out', '2017-11-15 14:35:21', 'Deborah Banturaki'),
(754, 'admin', 'Successfully loggedin', '2017-11-17 04:26:19', 'Landsat (Technical Support)'),
(755, 'admin', 'Successfully Logged out', '2017-11-17 04:44:50', 'Landsat (Technical Support)'),
(756, 'admin', 'Successfully loggedin', '2017-11-17 04:45:05', 'Landsat (Technical Support)'),
(757, 'admin', 'Successfully Logged out', '2017-11-17 04:45:54', 'Landsat (Technical Support)'),
(758, 'admin', 'Successfully loggedin', '2017-11-17 06:42:33', 'Landsat (Technical Support)'),
(759, 'admin', 'Successfully Logged out', '2017-11-17 06:42:58', 'Landsat (Technical Support)'),
(760, 'dbanturaki', 'Successfully loggedin', '2017-11-17 07:23:30', 'Deborah Banturaki'),
(761, 'dbanturaki', 'Successfully Logged out', '2017-11-17 07:23:56', 'Deborah Banturaki'),
(762, '', 'Successfully Logged out', '2017-11-17 07:42:35', ''),
(763, 'dbanturaki', 'Successfully loggedin', '2017-11-17 07:58:34', 'Deborah Banturaki'),
(764, 'dbanturaki', 'Successfully Logged out', '2017-11-17 08:16:55', 'Deborah Banturaki'),
(765, 'dbanturaki', 'Successfully loggedin', '2017-11-18 06:12:59', 'Deborah Banturaki'),
(766, 'dbanturaki', 'Successfully Logged out', '2017-11-18 06:31:20', 'Deborah Banturaki'),
(767, 'dbanturaki', 'Successfully loggedin', '2017-11-18 06:51:05', 'Deborah Banturaki'),
(768, 'dbanturaki', 'Successfully Logged out', '2017-11-18 08:03:08', 'Deborah Banturaki'),
(769, 'dbanturaki', 'Successfully loggedin', '2017-11-18 08:03:14', 'Deborah Banturaki'),
(770, 'admin', 'Successfully loggedin', '2017-11-18 08:22:04', 'Landsat (Technical Support)'),
(771, 'admin', 'Successfully Logged out', '2017-11-18 08:29:22', 'Landsat (Technical Support)'),
(772, 'dbanturaki', 'Successfully Logged out', '2017-11-18 10:33:35', 'Deborah Banturaki'),
(773, 'dbanturaki', 'Successfully loggedin', '2017-11-18 10:52:09', 'Deborah Banturaki'),
(774, 'dbanturaki', 'Successfully Logged out', '2017-11-18 10:52:41', 'Deborah Banturaki'),
(775, 'dbanturaki', 'Successfully loggedin', '2017-11-20 09:32:47', 'Deborah Banturaki'),
(776, 'dbanturaki', 'Successfully Logged out', '2017-11-20 09:34:38', 'Deborah Banturaki'),
(777, 'dbanturaki', 'Successfully loggedin', '2017-11-20 10:54:26', 'Deborah Banturaki'),
(778, 'dbanturaki', 'Successfully Logged out', '2017-11-20 11:32:51', 'Deborah Banturaki'),
(779, 'dbanturaki', 'Successfully loggedin', '2017-11-20 13:17:17', 'Deborah Banturaki'),
(780, 'dbanturaki', 'Successfully Logged out', '2017-11-20 14:55:02', 'Deborah Banturaki'),
(781, 'dbanturaki', 'Successfully loggedin', '2017-11-21 06:19:45', 'Deborah Banturaki'),
(782, 'dbanturaki', 'Successfully Logged out', '2017-11-21 07:45:07', 'Deborah Banturaki'),
(783, 'dbanturaki', 'Successfully loggedin', '2017-11-21 07:47:51', 'Deborah Banturaki'),
(784, 'dbanturaki', 'Successfully Logged out', '2017-11-21 08:43:59', 'Deborah Banturaki'),
(785, 'dbanturaki', 'Successfully loggedin', '2017-11-21 11:35:47', 'Deborah Banturaki'),
(786, 'dbanturaki', 'Successfully Logged out', '2017-11-21 12:44:49', 'Deborah Banturaki'),
(787, 'dbanturaki', 'Failed login', '2017-11-21 12:45:12', 'N/A'),
(788, 'dbanturaki', 'Successfully loggedin', '2017-11-21 12:45:21', 'Deborah Banturaki'),
(789, 'dbanturaki', 'Successfully loggedin', '2017-11-21 13:18:51', 'Deborah Banturaki'),
(790, 'dbanturaki', 'Successfully Logged out', '2017-11-21 13:46:42', 'Deborah Banturaki'),
(791, 'dbanturaki', 'Successfully loggedin', '2017-11-21 13:51:35', 'Deborah Banturaki'),
(792, 'dbanturaki', 'Successfully Logged out', '2017-11-21 14:33:42', 'Deborah Banturaki'),
(793, 'dbanturaki', 'Successfully loggedin', '2017-11-22 05:52:47', 'Deborah Banturaki'),
(794, 'dbanturaki', 'Successfully Logged out', '2017-11-22 06:48:03', 'Deborah Banturaki'),
(795, 'dbanturaki', 'Failed login', '2017-11-22 11:04:04', 'N/A'),
(796, 'dbanturaki', 'Successfully loggedin', '2017-11-22 11:04:12', 'Deborah Banturaki'),
(797, 'dbanturaki', 'Successfully Logged out', '2017-11-22 12:36:15', 'Deborah Banturaki'),
(798, 'dbanturaki', 'Successfully loggedin', '2017-11-22 12:46:14', 'Deborah Banturaki'),
(799, 'dbanturaki', 'Successfully Logged out', '2017-11-22 15:02:14', 'Deborah Banturaki'),
(800, 'dbanturaki', 'Successfully loggedin', '2017-11-23 05:35:09', 'Deborah Banturaki'),
(801, 'dbanturaki', 'Successfully Logged out', '2017-11-23 09:03:18', 'Deborah Banturaki'),
(802, 'dbanturaki', 'Successfully loggedin', '2017-11-23 09:31:13', 'Deborah Banturaki'),
(803, 'dbanturaki', 'Successfully Logged out', '2017-11-23 10:12:27', 'Deborah Banturaki'),
(804, 'dbanturaki', 'Successfully loggedin', '2017-11-23 12:49:11', 'Deborah Banturaki'),
(805, 'dbanturaki', 'Successfully Logged out', '2017-11-23 12:52:12', 'Deborah Banturaki'),
(806, 'dbanturaki', 'Successfully loggedin', '2017-11-23 13:05:15', 'Deborah Banturaki'),
(807, 'dbanturaki', 'Successfully Logged out', '2017-11-23 13:33:04', 'Deborah Banturaki'),
(808, 'dbanturaki', 'Successfully loggedin', '2017-11-24 09:26:31', 'Deborah Banturaki'),
(809, 'dbanturaki', 'Successfully Logged out', '2017-11-24 10:33:26', 'Deborah Banturaki'),
(810, 'dbanturaki', 'Successfully loggedin', '2017-11-25 06:40:03', 'Deborah Banturaki'),
(811, 'dbanturaki', 'Successfully Logged out', '2017-11-25 08:20:13', 'Deborah Banturaki'),
(812, 'dbanturaki', 'Successfully loggedin', '2017-11-25 08:24:55', 'Deborah Banturaki'),
(813, 'dbanturaki', 'Successfully Logged out', '2017-11-25 08:27:24', 'Deborah Banturaki'),
(814, 'dbanturaki', 'Successfully loggedin', '2017-11-27 06:14:11', 'Deborah Banturaki'),
(815, 'dbanturaki', 'Successfully Logged out', '2017-11-27 08:52:49', 'Deborah Banturaki'),
(816, 'dbanturaki', 'Successfully loggedin', '2017-11-27 09:26:52', 'Deborah Banturaki'),
(817, 'dbanturaki', 'Successfully Logged out', '2017-11-27 09:48:13', 'Deborah Banturaki'),
(818, 'dbanturaki', 'Successfully loggedin', '2017-11-27 13:51:46', 'Deborah Banturaki'),
(819, 'dbanturaki', 'Successfully Logged out', '2017-11-27 15:22:44', 'Deborah Banturaki'),
(820, 'dbanturaki', 'Successfully loggedin', '2017-11-28 09:00:23', 'Deborah Banturaki'),
(821, 'dbanturaki', 'Successfully Logged out', '2017-11-28 09:55:52', 'Deborah Banturaki'),
(822, 'dbanturaki', 'Successfully loggedin', '2017-11-28 13:45:05', 'Deborah Banturaki'),
(823, 'dbanturaki', 'Successfully Logged out', '2017-11-28 14:58:06', 'Deborah Banturaki'),
(824, 'dbanturaki', 'Successfully loggedin', '2017-11-29 06:26:39', 'Deborah Banturaki'),
(825, 'dbanturaki', 'Successfully Logged out', '2017-11-29 07:24:45', 'Deborah Banturaki'),
(826, 'dbanturaki', 'Successfully loggedin', '2017-11-29 09:33:15', 'Deborah Banturaki'),
(827, 'dbanturaki', 'Successfully Logged out', '2017-11-29 10:00:30', 'Deborah Banturaki'),
(828, 'dbanturaki', 'Successfully loggedin', '2017-11-29 13:23:37', 'Deborah Banturaki'),
(829, 'dbanturaki', 'Successfully Logged out', '2017-11-29 14:54:32', 'Deborah Banturaki'),
(830, 'dbanturaki', 'Successfully loggedin', '2017-11-30 06:10:49', 'Deborah Banturaki'),
(831, 'dbanturaki', 'Successfully Logged out', '2017-11-30 06:29:10', 'Deborah Banturaki'),
(832, 'dbanturaki', 'Successfully loggedin', '2017-11-30 06:37:58', 'Deborah Banturaki'),
(833, 'dbanturaki', 'Successfully Logged out', '2017-11-30 06:56:18', 'Deborah Banturaki'),
(834, 'dbanturaki', 'Successfully loggedin', '2017-11-30 12:33:24', 'Deborah Banturaki'),
(835, 'dbanturaki', 'Successfully Logged out', '2017-11-30 13:15:57', 'Deborah Banturaki'),
(836, 'dbanturaki', 'Successfully loggedin', '2017-11-30 13:24:07', 'Deborah Banturaki'),
(837, 'dbanturaki', 'Successfully loggedin', '2017-12-01 05:10:45', 'Deborah Banturaki'),
(838, 'admin', 'Successfully loggedin', '2017-12-01 05:14:20', 'Landsat (Technical Support)'),
(839, 'admin', 'Successfully Logged out', '2017-12-01 05:24:23', 'Landsat (Technical Support)'),
(840, 'admin', 'Failed login', '2017-12-01 05:25:23', 'N/A'),
(841, 'admin', 'Successfully loggedin', '2017-12-01 05:25:30', 'Landsat (Technical Support)'),
(842, 'dbanturaki', 'Successfully Logged out', '2017-12-01 05:29:13', 'Deborah Banturaki'),
(843, 'admin', 'Successfully Logged out', '2017-12-01 05:44:49', 'Landsat (Technical Support)'),
(844, 'dbanturaki', 'Successfully loggedin', '2017-12-01 11:10:15', 'Deborah Banturaki'),
(845, 'dbanturaki', 'Successfully Logged out', '2017-12-01 11:47:25', 'Deborah Banturaki'),
(846, 'dbanturaki', 'Successfully loggedin', '2017-12-01 11:52:47', 'Deborah Banturaki'),
(847, 'admin', 'Successfully loggedin', '2017-12-01 11:53:47', 'Landsat (Technical Support)'),
(848, 'dbanturaki', 'Successfully Logged out', '2017-12-01 11:56:15', 'Deborah Banturaki'),
(849, 'admin', 'Successfully Logged out', '2017-12-01 12:12:49', 'Landsat (Technical Support)'),
(850, '', 'Successfully Logged out', '2017-12-01 12:14:55', ''),
(851, 'admin', 'Successfully loggedin', '2017-12-01 12:44:11', 'Landsat (Technical Support)'),
(852, 'admin', 'Successfully Logged out', '2017-12-01 12:46:13', 'Landsat (Technical Support)'),
(853, 'dbanturaki', 'Successfully loggedin', '2017-12-01 14:03:21', 'Deborah Banturaki'),
(854, 'dbanturaki', 'Successfully loggedin', '2017-12-04 06:18:37', 'Deborah Banturaki'),
(855, 'dbanturaki', 'Successfully Logged out', '2017-12-04 06:33:18', 'Deborah Banturaki'),
(856, 'admin', 'Successfully loggedin', '2017-12-04 07:33:27', 'Landsat (Technical Support)'),
(857, 'admin', 'Successfully Logged out', '2017-12-04 07:43:55', 'Landsat (Technical Support)'),
(858, 'dbanturaki', 'Successfully loggedin', '2017-12-04 10:39:46', 'Deborah Banturaki'),
(859, 'dbanturaki', 'Successfully Logged out', '2017-12-04 11:55:03', 'Deborah Banturaki'),
(860, 'dbanturaki', 'Failed login', '2017-12-04 11:56:02', 'N/A'),
(861, 'dbanturaki', 'Successfully loggedin', '2017-12-04 11:56:09', 'Deborah Banturaki'),
(862, 'dbanturaki', 'Successfully Logged out', '2017-12-04 12:03:19', 'Deborah Banturaki'),
(863, 'dbanturaki', 'Successfully loggedin', '2017-12-04 12:33:51', 'Deborah Banturaki'),
(864, 'dbanturaki', 'Successfully loggedin', '2017-12-04 12:51:14', 'Deborah Banturaki'),
(865, 'dbanturaki', 'Successfully Logged out', '2017-12-04 12:57:36', 'Deborah Banturaki'),
(866, 'dbanturaki', 'Successfully loggedin', '2017-12-05 06:21:27', 'Deborah Banturaki'),
(867, 'dbanturaki', 'Successfully Logged out', '2017-12-05 06:41:26', 'Deborah Banturaki'),
(868, 'dbanturaki', 'Failed login', '2017-12-05 07:35:21', 'N/A'),
(869, 'dbanturaki', 'Successfully loggedin', '2017-12-05 07:35:30', 'Deborah Banturaki'),
(870, 'dbanturaki', 'Successfully Logged out', '2017-12-05 07:47:51', 'Deborah Banturaki'),
(871, 'dbanturaki', 'Successfully loggedin', '2017-12-05 07:54:47', 'Deborah Banturaki'),
(872, 'dbanturaki', 'Successfully Logged out', '2017-12-05 07:57:59', 'Deborah Banturaki'),
(873, 'dbanturaki', 'Successfully loggedin', '2017-12-05 11:39:08', 'Deborah Banturaki'),
(874, 'dbanturaki', 'Successfully Logged out', '2017-12-05 12:05:19', 'Deborah Banturaki'),
(875, 'dbanturaki', 'Successfully loggedin', '2017-12-05 12:58:34', 'Deborah Banturaki'),
(876, 'dbanturaki', 'Successfully Logged out', '2017-12-05 14:02:02', 'Deborah Banturaki'),
(877, 'admin', 'Successfully loggedin', '2017-12-05 14:21:55', 'Landsat (Technical Support)'),
(878, 'admin', 'Successfully Logged out', '2017-12-05 14:24:42', 'Landsat (Technical Support)'),
(879, 'dbanturaki', 'Failed login', '2017-12-05 14:38:46', 'N/A'),
(880, 'dbanturaki', 'Successfully loggedin', '2017-12-05 14:39:01', 'Deborah Banturaki'),
(881, 'dbanturaki', 'Successfully Logged out', '2017-12-05 14:45:30', 'Deborah Banturaki'),
(882, 'dbanturaki', 'Successfully loggedin', '2017-12-06 08:07:44', 'Deborah Banturaki'),
(883, 'dbanturaki', 'Successfully Logged out', '2017-12-06 08:12:39', 'Deborah Banturaki'),
(884, 'dbanturaki', 'Successfully loggedin', '2017-12-06 08:41:59', 'Deborah Banturaki'),
(885, 'dbanturaki', 'Successfully Logged out', '2017-12-06 08:57:00', 'Deborah Banturaki'),
(886, 'dbanturaki', 'Successfully loggedin', '2017-12-06 10:59:37', 'Deborah Banturaki'),
(887, 'dbanturaki', 'Successfully Logged out', '2017-12-06 11:15:30', 'Deborah Banturaki'),
(888, 'dbanturaki', 'Successfully loggedin', '2017-12-06 11:18:19', 'Deborah Banturaki'),
(889, 'dbanturaki', 'Successfully Logged out', '2017-12-06 11:22:45', 'Deborah Banturaki'),
(890, 'dbanturaki', 'Successfully loggedin', '2017-12-06 12:02:37', 'Deborah Banturaki'),
(891, 'dbanturaki', 'Successfully Logged out', '2017-12-06 12:05:45', 'Deborah Banturaki'),
(892, 'dbanturaki', 'Failed login', '2017-12-06 12:08:11', 'N/A'),
(893, 'dbanturaki', 'Successfully loggedin', '2017-12-06 12:08:20', 'Deborah Banturaki'),
(894, 'dbanturaki', 'Successfully Logged out', '2017-12-06 12:41:39', 'Deborah Banturaki'),
(895, 'dbanturaki', 'Successfully loggedin', '2017-12-06 12:47:25', 'Deborah Banturaki'),
(896, 'dbanturaki', 'Successfully Logged out', '2017-12-06 14:35:58', 'Deborah Banturaki'),
(897, 'dbanturaki', 'Successfully loggedin', '2017-12-07 08:54:35', 'Deborah Banturaki'),
(898, 'dbanturaki', 'Successfully Logged out', '2017-12-07 09:16:18', 'Deborah Banturaki'),
(899, 'dbanturaki', 'Successfully loggedin', '2017-12-07 10:38:04', 'Deborah Banturaki'),
(900, 'dbanturaki', 'Successfully Logged out', '2017-12-07 11:17:07', 'Deborah Banturaki'),
(901, 'dbanturaki', 'Successfully loggedin', '2017-12-07 11:37:57', 'Deborah Banturaki'),
(902, 'dbanturaki', 'Successfully Logged out', '2017-12-07 12:13:58', 'Deborah Banturaki'),
(903, 'dbanturaki', 'Successfully loggedin', '2017-12-07 12:45:01', 'Deborah Banturaki'),
(904, 'dbanturaki', 'Successfully Logged out', '2017-12-07 12:51:13', 'Deborah Banturaki'),
(905, 'dbanturaki', 'Successfully loggedin', '2017-12-07 14:41:03', 'Deborah Banturaki'),
(906, 'dbanturaki', 'Successfully Logged out', '2017-12-07 14:45:22', 'Deborah Banturaki'),
(907, 'dbanturaki', 'Successfully loggedin', '2017-12-08 07:24:31', 'Deborah Banturaki'),
(908, 'dbanturaki', 'Successfully Logged out', '2017-12-08 07:30:28', 'Deborah Banturaki'),
(909, 'dbanturaki', 'Successfully loggedin', '2017-12-08 08:42:20', 'Deborah Banturaki'),
(910, 'dbanturaki', 'Successfully Logged out', '2017-12-08 08:45:17', 'Deborah Banturaki'),
(911, 'dbanturaki', 'Successfully loggedin', '2017-12-08 08:59:54', 'Deborah Banturaki'),
(912, 'dbanturaki', 'Successfully Logged out', '2017-12-08 09:01:41', 'Deborah Banturaki'),
(913, 'dbanturaki', 'Successfully loggedin', '2017-12-08 10:36:27', 'Deborah Banturaki'),
(914, 'dbanturaki', 'Successfully Logged out', '2017-12-08 11:24:38', 'Deborah Banturaki'),
(915, 'dbanturaki', 'Successfully loggedin', '2017-12-08 12:10:23', 'Deborah Banturaki'),
(916, 'dbanturaki', 'Successfully loggedin', '2017-12-08 13:45:28', 'Deborah Banturaki'),
(917, 'dbanturaki', 'Successfully Logged out', '2017-12-08 13:53:42', 'Deborah Banturaki'),
(918, '', 'Successfully Logged out', '2017-12-08 14:12:18', ''),
(919, 'dbanturaki', 'Successfully loggedin', '2017-12-09 08:56:40', 'Deborah Banturaki'),
(920, 'dbanturaki', 'Successfully Logged out', '2017-12-09 09:02:34', 'Deborah Banturaki'),
(921, 'dbanturaki', 'Successfully loggedin', '2017-12-09 10:20:16', 'Deborah Banturaki'),
(922, 'dbanturaki', 'Successfully Logged out', '2017-12-09 10:24:29', 'Deborah Banturaki'),
(923, 'dbanturaki', 'Successfully loggedin', '2017-12-11 11:10:02', 'Deborah Banturaki'),
(924, 'dbanturaki', 'Successfully loggedin', '2017-12-11 12:53:14', 'Deborah Banturaki'),
(925, 'dbanturaki', 'Successfully Logged out', '2017-12-11 13:22:25', 'Deborah Banturaki'),
(926, 'dbanturaki', 'Successfully loggedin', '2017-12-12 07:06:29', 'Deborah Banturaki'),
(927, 'dbanturaki', 'Successfully Logged out', '2017-12-12 07:14:56', 'Deborah Banturaki'),
(928, 'dbanturaki', 'Successfully loggedin', '2017-12-12 10:29:47', 'Deborah Banturaki'),
(929, 'dbanturaki', 'Successfully Logged out', '2017-12-12 11:42:08', 'Deborah Banturaki'),
(930, 'dbanturaki', 'Successfully loggedin', '2017-12-12 11:47:09', 'Deborah Banturaki'),
(931, 'dbanturaki', 'Successfully Logged out', '2017-12-12 12:05:29', 'Deborah Banturaki'),
(932, 'dbanturaki', 'Successfully loggedin', '2017-12-12 14:07:59', 'Deborah Banturaki'),
(933, 'dbanturaki', 'Successfully Logged out', '2017-12-12 14:15:12', 'Deborah Banturaki'),
(934, 'dbanturaki', 'Successfully loggedin', '2017-12-13 05:45:47', 'Deborah Banturaki'),
(935, 'dbanturaki', 'Successfully Logged out', '2017-12-13 06:12:19', 'Deborah Banturaki'),
(936, 'dbanturaki', 'Successfully loggedin', '2017-12-13 07:29:28', 'Deborah Banturaki'),
(937, 'dbanturaki', 'Successfully Logged out', '2017-12-13 07:48:01', 'Deborah Banturaki'),
(938, 'dbanturaki', 'Successfully loggedin', '2017-12-13 08:30:36', 'Deborah Banturaki'),
(939, 'dbanturaki', 'Successfully Logged out', '2017-12-13 08:53:32', 'Deborah Banturaki'),
(940, 'dbanturaki', 'Successfully loggedin', '2017-12-13 08:53:59', 'Deborah Banturaki'),
(941, 'dbanturaki', 'Successfully Logged out', '2017-12-13 08:55:35', 'Deborah Banturaki'),
(942, 'dbanturaki', 'Successfully loggedin', '2017-12-13 09:01:48', 'Deborah Banturaki'),
(943, 'dbanturaki', 'Successfully Logged out', '2017-12-13 09:08:50', 'Deborah Banturaki'),
(944, 'dbanturaki', 'Failed login', '2017-12-13 11:12:31', 'N/A'),
(945, 'dbanturaki', 'Successfully loggedin', '2017-12-13 11:12:40', 'Deborah Banturaki'),
(946, 'dbanturaki', 'Successfully Logged out', '2017-12-13 11:31:00', 'Deborah Banturaki'),
(947, 'dbanturaki', 'Successfully loggedin', '2017-12-13 11:31:35', 'Deborah Banturaki'),
(948, 'dbanturaki', 'Successfully Logged out', '2017-12-13 12:25:14', 'Deborah Banturaki'),
(949, 'dbanturaki', 'Successfully loggedin', '2017-12-13 12:26:22', 'Deborah Banturaki'),
(950, 'dbanturaki', 'Successfully loggedin', '2017-12-14 07:55:28', 'Deborah Banturaki'),
(951, 'dbanturaki', 'Successfully Logged out', '2017-12-14 07:58:30', 'Deborah Banturaki'),
(952, 'dbanturaki', 'Successfully loggedin', '2017-12-14 08:22:05', 'Deborah Banturaki'),
(953, 'dbanturaki', 'Successfully Logged out', '2017-12-14 08:43:31', 'Deborah Banturaki'),
(954, 'dbanturaki', 'Successfully loggedin', '2017-12-14 09:58:45', 'Deborah Banturaki'),
(955, 'dbanturaki', 'Successfully Logged out', '2017-12-14 10:17:12', 'Deborah Banturaki'),
(956, 'dbanturaki', 'Successfully loggedin', '2017-12-14 10:50:33', 'Deborah Banturaki'),
(957, 'admin', 'Successfully loggedin', '2017-12-14 10:56:22', 'Landsat (Technical Support)'),
(958, 'dbanturaki', 'Successfully Logged out', '2017-12-14 10:57:27', 'Deborah Banturaki'),
(959, 'admin', 'Successfully loggedin', '2017-12-14 10:58:22', 'Landsat (Technical Support)'),
(960, 'dbanturaki', 'Successfully loggedin', '2017-12-14 10:59:29', 'Deborah Banturaki'),
(961, 'admin', 'Successfully loggedin', '2017-12-14 11:08:43', 'Landsat (Technical Support)'),
(962, 'admin', 'Successfully Logged out', '2017-12-14 11:17:09', 'Landsat (Technical Support)'),
(963, 'dbanturaki', 'Successfully Logged out', '2017-12-14 12:16:45', 'Deborah Banturaki'),
(964, 'dbanturaki', 'Successfully loggedin', '2017-12-14 12:18:33', 'Deborah Banturaki'),
(965, 'dbanturaki', 'Successfully loggedin', '2017-12-14 12:31:11', 'Deborah Banturaki'),
(966, 'dbanturaki', 'Successfully Logged out', '2017-12-14 12:51:47', 'Deborah Banturaki'),
(967, '', 'Successfully Logged out', '2017-12-14 12:54:27', ''),
(968, 'dbanturaki', 'Successfully loggedin', '2017-12-15 07:07:54', 'Deborah Banturaki'),
(969, 'dbanturaki', 'Successfully Logged out', '2017-12-15 07:13:00', 'Deborah Banturaki'),
(970, 'dbanturaki', 'Successfully loggedin', '2017-12-15 07:40:06', 'Deborah Banturaki'),
(971, 'dbanturaki', 'Successfully Logged out', '2017-12-15 08:09:43', 'Deborah Banturaki'),
(972, 'dbanturaki', 'Successfully loggedin', '2017-12-15 08:12:34', 'Deborah Banturaki'),
(973, 'dbanturaki', 'Successfully loggedin', '2017-12-15 08:26:43', 'Deborah Banturaki'),
(974, 'dbanturaki', 'Successfully Logged out', '2017-12-15 08:55:30', 'Deborah Banturaki'),
(975, 'dbanturaki', 'Successfully loggedin', '2017-12-15 08:56:32', 'Deborah Banturaki'),
(976, 'dbanturaki', 'Successfully Logged out', '2017-12-15 09:16:10', 'Deborah Banturaki'),
(977, 'dbanturaki', 'Successfully loggedin', '2017-12-15 09:20:34', 'Deborah Banturaki'),
(978, 'dbanturaki', 'Successfully Logged out', '2017-12-15 09:39:24', 'Deborah Banturaki'),
(979, 'dbanturaki', 'Successfully loggedin', '2017-12-15 11:29:21', 'Deborah Banturaki'),
(980, 'dbanturaki', 'Successfully Logged out', '2017-12-15 13:12:10', 'Deborah Banturaki'),
(981, 'dbanturaki', 'Successfully loggedin', '2017-12-15 13:35:29', 'Deborah Banturaki'),
(982, 'dbanturaki', 'Successfully Logged out', '2017-12-15 13:54:09', 'Deborah Banturaki'),
(983, 'dbanturaki', 'Successfully loggedin', '2017-12-15 14:11:16', 'Deborah Banturaki'),
(984, 'dbanturaki', 'Successfully Logged out', '2017-12-15 14:31:10', 'Deborah Banturaki'),
(985, 'dbanturaki', 'Successfully loggedin', '2017-12-18 06:29:10', 'Deborah Banturaki'),
(986, 'dbanturaki', 'Successfully Logged out', '2017-12-18 06:32:34', 'Deborah Banturaki'),
(987, 'dbanturaki', 'Successfully loggedin', '2017-12-18 07:57:53', 'Deborah Banturaki'),
(988, 'dbanturaki', 'Successfully loggedin', '2017-12-18 08:07:55', 'Deborah Banturaki'),
(989, 'dbanturaki', 'Successfully loggedin', '2017-12-18 09:14:23', 'Deborah Banturaki'),
(990, 'dbanturaki', 'Successfully loggedin', '2017-12-18 11:04:39', 'Deborah Banturaki'),
(991, 'dbanturaki', 'Successfully Logged out', '2017-12-18 11:35:29', 'Deborah Banturaki'),
(992, 'dbanturaki', 'Successfully loggedin', '2017-12-18 12:26:58', 'Deborah Banturaki'),
(993, 'dbanturaki', 'Successfully Logged out', '2017-12-18 13:03:48', 'Deborah Banturaki'),
(994, 'dbanturaki', 'Successfully loggedin', '2017-12-19 06:32:37', 'Deborah Banturaki'),
(995, 'dbanturaki', 'Successfully Logged out', '2017-12-19 06:42:53', 'Deborah Banturaki'),
(996, 'dbanturaki', 'Successfully loggedin', '2017-12-19 07:42:02', 'Deborah Banturaki'),
(997, 'dbanturaki', 'Successfully Logged out', '2017-12-19 07:44:11', 'Deborah Banturaki'),
(998, 'dbanturaki', 'Successfully loggedin', '2017-12-19 07:59:51', 'Deborah Banturaki'),
(999, 'dbanturaki', 'Successfully Logged out', '2017-12-19 08:04:25', 'Deborah Banturaki'),
(1000, 'dbanturaki', 'Successfully loggedin', '2017-12-19 08:05:52', 'Deborah Banturaki'),
(1001, 'dbanturaki', 'Successfully Logged out', '2017-12-19 08:07:15', 'Deborah Banturaki'),
(1002, 'dbanturaki', 'Successfully loggedin', '2017-12-19 08:41:24', 'Deborah Banturaki'),
(1003, 'dbanturaki', 'Successfully Logged out', '2017-12-19 08:59:54', 'Deborah Banturaki'),
(1004, 'dbanturaki', 'Successfully loggedin', '2017-12-19 09:15:35', 'Deborah Banturaki'),
(1005, 'dbanturaki', 'Successfully Logged out', '2017-12-19 09:40:21', 'Deborah Banturaki'),
(1006, 'dbanturaki', 'Successfully loggedin', '2017-12-19 10:32:24', 'Deborah Banturaki'),
(1007, 'dbanturaki', 'Successfully Logged out', '2017-12-19 11:36:20', 'Deborah Banturaki'),
(1008, 'dbanturaki', 'Successfully loggedin', '2017-12-19 11:37:40', 'Deborah Banturaki'),
(1009, 'dbanturaki', 'Successfully Logged out', '2017-12-19 11:40:41', 'Deborah Banturaki'),
(1010, 'admin', 'Successfully loggedin', '2017-12-19 20:17:35', 'Landsat (Technical Support)'),
(1011, 'admin', 'Successfully Logged out', '2017-12-19 20:38:42', 'Landsat (Technical Support)'),
(1012, 'admin', 'Successfully loggedin', '2017-12-20 03:18:28', 'Landsat (Technical Support)'),
(1013, 'admin', 'Successfully Logged out', '2017-12-20 03:21:05', 'Landsat (Technical Support)'),
(1014, 'admin', 'Successfully loggedin', '2017-12-20 03:59:15', 'Landsat (Technical Support)'),
(1015, 'admin', 'Successfully Logged out', '2017-12-20 04:01:11', 'Landsat (Technical Support)'),
(1016, 'dbanturaki', 'Successfully loggedin', '2017-12-20 08:40:05', 'Deborah Banturaki'),
(1017, 'dbanturaki', 'Successfully Logged out', '2017-12-20 08:50:03', 'Deborah Banturaki'),
(1018, 'dbanturaki', 'Successfully loggedin', '2017-12-20 08:54:44', 'Deborah Banturaki'),
(1019, 'dbanturaki', 'Successfully Logged out', '2017-12-20 09:41:33', 'Deborah Banturaki'),
(1020, 'dbanturaki', 'Successfully loggedin', '2017-12-20 10:44:31', 'Deborah Banturaki'),
(1021, 'dbanturaki', 'Successfully Logged out', '2017-12-20 11:08:10', 'Deborah Banturaki'),
(1022, 'dbanturaki', 'Successfully loggedin', '2017-12-20 11:08:29', 'Deborah Banturaki'),
(1023, 'dbanturaki', 'Successfully Logged out', '2017-12-20 11:43:05', 'Deborah Banturaki'),
(1024, 'dbanturaki', 'Successfully loggedin', '2017-12-20 12:37:03', 'Deborah Banturaki'),
(1025, 'dbanturaki', 'Successfully Logged out', '2017-12-20 12:56:38', 'Deborah Banturaki'),
(1026, '', 'Successfully Logged out', '2017-12-20 15:13:34', ''),
(1027, '', 'Successfully Logged out', '2017-12-21 04:57:29', ''),
(1028, 'dbanturaki', 'Successfully loggedin', '2017-12-21 06:42:49', 'Deborah Banturaki'),
(1029, 'dbanturaki', 'Successfully Logged out', '2017-12-21 07:00:42', 'Deborah Banturaki'),
(1030, 'dbanturaki', 'Successfully loggedin', '2017-12-21 09:12:53', 'Deborah Banturaki'),
(1031, 'dbanturaki', 'Successfully Logged out', '2017-12-21 09:15:46', 'Deborah Banturaki'),
(1032, 'dbanturaki', 'Successfully loggedin', '2017-12-21 10:41:16', 'Deborah Banturaki'),
(1033, 'dbanturaki', 'Successfully Logged out', '2017-12-21 11:02:32', 'Deborah Banturaki'),
(1034, 'dbanturaki', 'Successfully loggedin', '2017-12-21 11:03:44', 'Deborah Banturaki'),
(1035, 'dbanturaki', 'Successfully Logged out', '2017-12-21 13:22:14', 'Deborah Banturaki'),
(1036, 'dbanturaki', 'Successfully loggedin', '2017-12-21 13:26:01', 'Deborah Banturaki'),
(1037, 'dbanturaki', 'Successfully Logged out', '2017-12-21 13:36:19', 'Deborah Banturaki'),
(1038, 'dbanturaki', 'Successfully loggedin', '2017-12-21 14:36:02', 'Deborah Banturaki'),
(1039, 'dbanturaki', 'Successfully Logged out', '2017-12-21 14:40:10', 'Deborah Banturaki'),
(1040, 'dbanturaki', 'Successfully loggedin', '2017-12-22 08:14:35', 'Deborah Banturaki'),
(1041, 'dbanturaki', 'Successfully Logged out', '2017-12-22 08:34:18', 'Deborah Banturaki'),
(1042, 'dbanturaki', 'Successfully loggedin', '2017-12-22 09:05:46', 'Deborah Banturaki'),
(1043, 'dbanturaki', 'Successfully Logged out', '2017-12-22 09:25:41', 'Deborah Banturaki'),
(1044, 'dbanturaki', 'Successfully loggedin', '2017-12-22 09:36:23', 'Deborah Banturaki'),
(1045, 'dbanturaki', 'Successfully Logged out', '2017-12-22 11:25:07', 'Deborah Banturaki'),
(1046, 'dbanturaki', 'Successfully loggedin', '2017-12-22 11:35:57', 'Deborah Banturaki'),
(1047, 'dbanturaki', 'Successfully Logged out', '2017-12-22 12:19:42', 'Deborah Banturaki'),
(1048, 'dbanturaki', 'Successfully loggedin', '2017-12-22 12:54:46', 'Deborah Banturaki'),
(1049, 'dbanturaki', 'Successfully Logged out', '2017-12-22 13:15:33', 'Deborah Banturaki'),
(1050, 'dbanturaki', 'Failed login', '2017-12-23 09:23:23', 'N/A'),
(1051, 'dbanturaki', 'Successfully loggedin', '2017-12-23 09:23:30', 'Deborah Banturaki'),
(1052, 'dbanturaki', 'Successfully Logged out', '2017-12-23 09:31:29', 'Deborah Banturaki'),
(1053, 'dbanturaki', 'Successfully loggedin', '2017-12-23 09:47:46', 'Deborah Banturaki'),
(1054, 'dbanturaki', 'Successfully Logged out', '2017-12-23 10:07:04', 'Deborah Banturaki');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE IF NOT EXISTS `user_request` (
  `req_id` int(255) NOT NULL AUTO_INCREMENT,
  `requester` varchar(54) NOT NULL,
  `user_id` int(10) NOT NULL,
  `qty_req` varchar(10) NOT NULL,
  `particular` varchar(190) NOT NULL,
  `dor` varchar(30) NOT NULL,
  `sections` varchar(45) NOT NULL,
  `part_id` int(34) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`req_id`, `requester`, `user_id`, `qty_req`, `particular`, `dor`, `sections`, `part_id`, `status`) VALUES
(1, 'juliu', 1, '4', 'Finger towel', '2016-09-03', 'Data', 5, 1),
(2, 'juliu', 0, '4', 'Pen', '2016-09-03', 'Data', 1, 1),
(3, 'juliu', 0, '1', 'Cups', '2016-09-06', 'Data', 4, 1),
(4, 'james', 2, '10', 'Finger towel', '2016-09-07', 'Data admin', 5, 0),
(5, 'james', 2, '3', 'pens', '2017-01-30', 'Data admin', 5, 0);

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
(3, 'D01', 'Day 1', 'Active'),
(4, 'D02', 'Day 2', 'Active'),
(5, 'D03', 'Day 3', 'Active'),
(6, 'D04', 'Day 4', 'Active'),
(7, 'D05', 'Day 5', 'Active'),
(8, 'D06', 'Day 6', 'Active'),
(9, 'W01', 'Week 1', 'Active'),
(10, 'W02', 'Week 2', 'Active'),
(11, 'W03', 'Week 3', 'Active'),
(12, 'M01', 'Month 1', 'Active'),
(13, 'M02', 'Month 2', 'Active'),
(14, 'M03', 'Month 3', 'Active'),
(15, 'M04', 'Month 4', 'Active'),
(16, 'M05', 'Month 5', 'Active'),
(17, 'M06', 'Month 6', 'Active'),
(18, 'M07', 'Month 7', 'Active'),
(19, 'M08', 'Month 8', 'Active'),
(20, 'M09', 'Month 9', 'Active'),
(21, 'M10', 'Month 10', 'Active'),
(22, 'M11', 'Month 11', 'Active'),
(23, 'M12', 'Month 12', 'Active'),
(24, 'M13', 'Month 13', 'Active'),
(25, 'M14', 'Month 14', 'Active'),
(26, 'M15', 'Month 15', 'Active'),
(27, 'M16', 'Month 16', 'Active'),
(28, 'M17', 'Month 17', 'Active'),
(29, 'M18', 'Month 18', 'Active'),
(30, 'M19', 'Month 19', 'Active'),
(31, 'M20', 'Month 20', 'Active'),
(32, 'M21', 'Month 21', 'Active'),
(33, 'M22', 'Month 22', 'Active'),
(34, 'M23', 'Month 23', 'Active'),
(35, 'M24', 'Month 24', 'Active'),
(36, 'M25', 'Month 25', 'Active'),
(37, 'M26', 'Month 26', 'Active'),
(38, 'M27', 'Month 27', 'Active'),
(39, 'M28', 'Month 28', 'Active'),
(40, 'M29', 'Month 29', 'Active'),
(41, 'M30', 'Month 30', 'Active'),
(42, 'WU', 'Work-up', 'Active'),
(43, 'SR', 'Suspected Relapse', 'Active'),
(44, 'SK', 'Sick Visit', 'Active'),
(45, 'OT', 'Other', 'Active'),
(46, 'UNK', 'Unknown', 'Active'),
(47, 'NA', 'Not Applicable', 'Active'),
(48, 'W06', 'Week 6', 'Active'),
(49, 'W12', 'Week 12', 'Active'),
(50, 'W16', 'Week 16', 'Active'),
(51, 'W20', 'Week 20', 'Active'),
(52, 'W24', 'Week 24', 'Active'),
(53, 'W36', 'Week 36', 'Active'),
(54, 'W04', 'Week 4', 'Active'),
(55, 'W52', 'Week 52', 'Active'),
(56, 'W08', 'Week 8', 'Active'),
(57, 'D07', 'Day 7', 'Active'),
(58, 'D14', 'Day 14', 'Active'),
(59, 'D21', 'Day 21', 'Active'),
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
(76, 'D16', 'Day 16', 'Active'),
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
(151, 'D20', 'Day 20', 'Active'),
(153, 'S2-W0', 'Step2 Week0', 'Active'),
(155, 'FU 3', 'Follow-up Month 3', 'Active'),
(156, 'FU 6', 'Follow-up Month 6', 'Active'),
(157, 'M36', 'Month 36', 'Active'),
(158, 'IV', 'Interim Visit', 'Active'),
(159, 'FU 1', 'Follow-up 1st specimen', 'Active'),
(160, 'FU 2', 'Follow-up 2nd specimen', 'Active'),
(162, 'END', 'End of Treatment', 'Active'),
(163, 'RA', 'Random', 'Active'),
(164, 'FU W6', 'Follow up Week 6', 'Active'),
(165, 'M6 RT', 'Month 6 Retreatment', 'Active'),
(168, 'M42', 'Month 42', 'Active'),
(169, 'US', 'Unscheduled Visit', 'Active'),
(173, 'M9/?RL', 'Month 9 ? Relapse', 'Active'),
(174, 'SK/RL', 'Sick Visit Relapse', 'Active'),
(178, 'D13', 'day 13', 'Active'),
(180, 'M2', 'DISCAHRGE', 'Active'),
(181, 'M2D', 'Month Two Discharge', 'Active'),
(182, 'M48', 'Month 48', 'Active'),
(183, 'Ex1', 'Extra1', 'Active'),
(184, 'D10', 'Day 10', 'Active'),
(185, 'D08', 'Day 8', 'Active'),
(186, 'S3-W0', 'Step 3 Week 0', 'Active'),
(187, 'IO', 'Baseline of Incident', 'Active'),
(195, 'D-2', 'Day - 2', 'Active'),
(196, 'D -1', 'Day -1', 'Active'),
(197, 'D12', 'Day 12', 'Active'),
(198, 'D11', 'Day 11', 'Active'),
(200, 'W13', 'Week 13', 'Active'),
(201, 'W17', 'Week 17', 'Active'),
(202, 'W22', 'Week 22', 'Active'),
(203, 'W26', 'Week 26', 'Active'),
(204, '', 'PPTR', 'Active'),
(205, '', '1 PPTR', 'Active'),
(206, '', 'PPTR 7', 'Active'),
(207, '', 'Day 0', 'Active'),
(208, '', 'PPTR 14', 'Active'),
(209, '', 'BS', 'Active');

-- --------------------------------------------------------

--
-- Structure for view `results_bloodculture_view`
--
DROP TABLE IF EXISTS `results_bloodculture_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_bloodculture_view` AS select `results_bloodculture`.`labno` AS `CB_labno`,count(0) AS `CB_media` from `results_bloodculture` where (`results_bloodculture`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_bloodculture`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_dst1_view`
--
DROP TABLE IF EXISTS `results_dst1_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_dst1_view` AS select `results_dst1`.`labno` AS `dst1_labno`,count(0) AS `dst1_count` from `results_dst1` where (`results_dst1`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_dst1`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_dst2_view`
--
DROP TABLE IF EXISTS `results_dst2_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_dst2_view` AS select `results_dst2`.`labno` AS `dst2_labno`,count(0) AS `dst2_count` from `results_dst2` where (`results_dst2`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_dst2`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_identification_view`
--
DROP TABLE IF EXISTS `results_identification_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_identification_view` AS select `results_identification`.`labno` AS `ID_labno`,count(0) AS `ID_count` from `results_identification` where (`results_identification`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_identification`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_liquidculture_view`
--
DROP TABLE IF EXISTS `results_liquidculture_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_liquidculture_view` AS select `results_liquidculture`.`labno` AS `CL_labno`,count(0) AS `CL_media`,max(if((`results_liquidculture`.`media` = 'MGIT'),`results_liquidculture`.`result_dtp`,'')) AS `CL_MGIT_dtp`,max(if((`results_liquidculture`.`media` = 'MGIT'),`results_liquidculture`.`result_znc`,'')) AS `CL_MGIT_znc`,max(if((`results_liquidculture`.`media` = 'MGIT'),`results_liquidculture`.`result_bap`,'')) AS `CL_MGIT_bap`,max(if((`results_liquidculture`.`media` = 'MGIT'),`results_liquidculture`.`resdate`,'')) AS `CL_MGIT_date`,max(if((`results_liquidculture`.`media` = 'MGIT'),`results_liquidculture`.`restech`,'')) AS `CL_MGIT_tech` from `results_liquidculture` where (`results_liquidculture`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_liquidculture`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_others_view`
--
DROP TABLE IF EXISTS `results_others_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_others_view` AS select `results_others`.`labno` AS `othertest_labno`,count(0) AS `othertest_count` from `results_others` where (`results_others`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_others`.`labno`;

-- --------------------------------------------------------

--
-- Structure for view `results_solidculture_view`
--
DROP TABLE IF EXISTS `results_solidculture_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_solidculture_view` AS select `results_solidculture`.`labno` AS `CS_labno`,count(0) AS `CS_media`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`result_ql`,'')) AS `CS_LJ_ql`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`result_sqt`,'')) AS `CS_LJ_sqt`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`result_qt`,'')) AS `CS_LJ_qt`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`resdate`,'')) AS `CS_LJ_date`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`restech`,'')) AS `CS_LJ_tech`,max(if((`results_solidculture`.`media` = 'LJ'),`results_solidculture`.`contdate`,'')) AS `CS_LJ_contdate`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`result_ql`,'')) AS `CS_7H11S_ql`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`result_sqt`,'')) AS `CS_7H11S_sqt`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`result_qt`,'')) AS `CS_7H11S_qt`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`resdate`,'')) AS `CS_7H11S_date`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`restech`,'')) AS `CS_7H11S_tech`,max(if((`results_solidculture`.`media` = '7H11S'),`results_solidculture`.`contdate`,'')) AS `CS_7H11S_contdate` from `results_solidculture` where (`results_solidculture`.`resdate` between '2017-12-19' and '2017-12-22') group by `results_solidculture`.`labno`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
