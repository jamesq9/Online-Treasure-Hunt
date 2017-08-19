-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2015 at 06:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oth`
--
CREATE DATABASE IF NOT EXISTS `oth` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oth`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`sno`, `question`, `answer`) VALUES
(1, '11', 'matrix'),
(2, '12', 'hunterr'),
(3, '13', 'evolve'),
(4, '21', 'eighty 20'),
(5, '21', 'eighty20'),
(6, '22', 'hero'),
(7, '23', 'firebird sql'),
(8, '23', 'firebird'),
(9, '31', '675'),
(10, '41', 'freeway fury'),
(11, '42', 'doctor driving'),
(12, '42', 'dr. driving'),
(13, '42', 'dr.driving'),
(14, '43', 'watchdog'),
(15, '43', 'watch dog'),
(16, '51', 'one plus one'),
(17, '52', 'sony walkman'),
(18, '61', 'folded earth'),
(19, '62', 'the alchemist'),
(20, '71', 'eclipse'),
(21, '72', 'full house'),
(22, '81', 'y2k'),
(23, '91', 'proteas'),
(24, '92', 'windshield'),
(25, '92', 'wind shield'),
(26, '101', 'edward newgate'),
(27, '102', 'material design'),
(28, '111', 'honorificabilitudinitatibus'),
(29, '21', 'eighty 20'),
(30, '21', 'eighty20'),
(31, '22', 'hero'),
(32, '23', 'firebird sql'),
(33, '23', 'firebird'),
(34, '31', '675'),
(35, '41', 'freeway fury'),
(36, '42', 'doctor driving'),
(37, '42', 'dr. driving'),
(38, '42', 'dr.driving'),
(39, '43', 'watchdog'),
(40, '43', 'watch dog'),
(41, '51', 'one plus one'),
(42, '52', 'sony walkman'),
(43, '61', 'folded earth'),
(44, '62', 'the alchemist'),
(45, '71', 'eclipse'),
(46, '72', 'full house'),
(47, '81', 'y2k'),
(48, '91', 'proteas'),
(49, '92', 'windshield'),
(50, '92', 'wind shield'),
(51, '101', 'edward newgate'),
(52, '102', 'material design'),
(53, '111', 'honorificabilitudinitatibus');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `tn` varchar(100) NOT NULL,
  `qp` int(100) NOT NULL,
  `cq` int(5) NOT NULL,
  `li` datetime NOT NULL,
  `lo` datetime NOT NULL,
  `pt` datetime NOT NULL,
  PRIMARY KEY (`tn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`tn`, `qp`, `cq`, `li`, `lo`, `pt`) VALUES
('Mad', 3, 1, '2015-03-06 21:06:56', '2015-03-06 22:36:56', '2015-03-06 21:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `q` varchar(100) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `hint` varchar(500) NOT NULL,
  PRIMARY KEY (`imagename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q`, `imagename`, `hint`) VALUES
('51', '1vvj02wu7e9m3fi', 'Gadget'),
('13', '3q6mcv7mb126thg', 'I''m busy watching movie shu!!!...'),
('91', '4bibwhtfc6xpz4b', 'People Call Us With A Sweet Name'),
('102', '4wg5wgbswcjtksn', 'Looks Cooool '),
('11', '60rkzlyh2xicwoj', 'I''m busy watching the movie shu!!!..'),
('111', '7tgb8dh5p65sn0y', 'no Shakespeare Know Long Binary'),
('41', 'a7fcxnbir52xvoh', 'I''m Busy Playing Games Don''t Disturb me shu!!!'),
('12', 'd8vd1x6f1ak0mll', 'Errr!!!!'),
('42', 'd9rqabl9zt5pqsr', 'I''m Busy Playing Games Don''t Disturb me shu!!!'),
('81', 'df3ifm0wxz0169k', 'Big Problem!!!'),
('62', 'e51z8xmbkgzs0ao', 'I''m Busy Reading'),
('31', 'h7p33zc9hnij9nw', 'You Know MATH!!'),
('92', 'h88vcpm8qezsb5n', 'No Hint For This..'),
('61', 'lg1q9s6bzb8vd84', 'I''m Busy Reading'),
('72', 'mh2h5nbkjyaxw3t', 'Call My Bluff'),
('21', 'pdza5s5mbl05ufz', 'Looks Binary'),
('101', 'rpc990nra2joq7o', 'Name Him??'),
('71', 's5d16y35f766cav', 'Connect'),
('22', 't147t3lwrdl1tci', 'hum mein hai...'),
('23', 'tzr53cgmsoaudql', 'Select Birds From Sky where fire is NULL'),
('52', 'whp8iz33tfv4nhe', 'Gadget'),
('43', 'xdizbymq5r60gdz', 'I''m Busy SQL INJECTING,Phisisng...');

-- --------------------------------------------------------

--
-- Table structure for table `teamprofile`
--

DROP TABLE IF EXISTS `teamprofile`;
CREATE TABLE IF NOT EXISTS `teamprofile` (
  `tn` varchar(100) NOT NULL,
  `tp` varchar(100) NOT NULL,
  `p1` varchar(100) NOT NULL,
  `p1n` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p2n` varchar(100) NOT NULL,
  PRIMARY KEY (`tn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamprofile`
--

INSERT INTO `teamprofile` (`tn`, `tp`, `p1`, `p1n`, `p2`, `p2n`) VALUES
('Mad', 'idiot', 'Sneha', '7207635337', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
