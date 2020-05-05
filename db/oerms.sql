-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 11:12 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oerms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `a_id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `a_type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `ui_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`a_id`, `user`, `pass`, `status`, `a_type`, `date`, `ui_id`) VALUES
(1, 'admin', 'admin', 'Active', 'Staff', '2018-11-08', 1),
(2, 'rose', 'rose', 'Active', 'Staff', '2018-11-08', 2),
(3, 'balane', 'balane', 'Active', 'Instructor', '2018-11-08', 3),
(4, 'jam', 'jam', 'Active', 'Trainee', '2018-11-08', 4),
(5, 'superuser', 'Adminadmin1', 'Active', 'Trainee', '2018-11-08', 5),
(6, 'Sayosayo', 'Sayosayo1', 'Active', 'Volunteer', '2018-11-09', 6),
(8, 'flor', 'flor', 'Active', 'Staff', '2018-11-09', 8),
(9, 'gap', 'gap', 'Active', 'Staff', '2018-11-10', 9),
(10, 'jow', 'jow', 'Active', 'Instructor', '2018-11-14', 10),
(11, 'lorie', 'lorie', 'Active', 'Staff', '2018-11-16', 11),
(12, 'nathan', 'nathan', 'Active', 'Staff', '2018-11-17', 12),
(13, 'geniu', 'geniu', 'Active', 'Staff', '2018-11-28', 14),
(14, 'Jh0n1821', 'Jh0n1821', 'Active', 'Non-Volunteer', '2018-11-30', 15),
(15, 'M1racle00', 'M1racle00', 'Active', 'Volunteer', '2018-11-30', 16),
(16, 'Sususu123', 'Sususu123', 'Pending', 'Non-Volunteer', '2018-11-30', 17),
(17, 'Jocelle02', 'Password02', 'Active', 'Non-Volunteer', '2018-12-01', 18),
(18, 'JPotter89', 'JPotter89', 'Active', 'Volunteer', '2018-12-05', 19),
(19, 'Kuku12345', 'Kuku12345', 'Pending', 'Non-Volunteer', '2018-12-06', 20),
(20, 'Samhidalgo123', 'Samh1234', 'Active', 'Non-Volunteer', '2018-12-06', 21),
(21, 'Jayboyluz', 'Jayboyluz26', 'Active', 'Volunteer', '2018-12-11', 22),
(22, 'jbjb1826', 'Jbjb1826', 'Disapproved', 'Volunteer', '2018-12-11', 23),
(23, 'Jonnajane02', 'P@55word', 'Pending', 'Non-Volunteer', '2018-12-22', 24),
(24, 'wyne', 'wyne', 'Active', 'Staff', '2019-01-23', 25),
(25, 'RyanMonreal', 'Monreal143', 'Pending', 'Non-Volunteer', '2019-01-24', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tblassignment`
--

CREATE TABLE `tblassignment` (
  `assignment_id` int(11) NOT NULL,
  `te_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblassignment`
--

INSERT INTO `tblassignment` (`assignment_id`, `te_id`, `a_id`, `remarks`) VALUES
(1, 50, 3, ''),
(3, 6, 3, ''),
(4, 52, 10, ''),
(5, 54, 3, ''),
(6, 57, 3, ''),
(7, 73, 3, ''),
(8, 73, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonation`
--

CREATE TABLE `tblblooddonation` (
  `bd_id` int(11) NOT NULL,
  `date_donated` varchar(30) NOT NULL,
  `remarks` varchar(5000) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonation`
--

INSERT INTO `tblblooddonation` (`bd_id`, `date_donated`, `remarks`, `ui_id`) VALUES
(1, '2018-11-07', ' ', 2),
(2, '2018-10-31', ' ', 3),
(3, '2018-10-31', '', 4),
(4, '2018-11-08', '', 5),
(5, '2020-01-11', '', 1),
(6, '2018-01-31', 'Hepa A & B Negative ', 9),
(7, '2018-01-31', ' ', 10),
(8, '2018-01-31', ' ', 11),
(9, '2018-12-01', '', 12),
(10, '2018-11-20', ' ', 14),
(11, '2018-11-03', '', 16),
(12, '', '', 18),
(13, '', ' ', 19),
(14, '', '', 21),
(15, '', '', 23),
(16, '2018-12-03', '', 24),
(17, '2019-01-16', '', 25),
(18, '', '', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`cat_id`, `cat_name`, `color`) VALUES
(1, 'Safety Services', '#000000'),
(2, 'Disaster Management Services', '#ff0004');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `c_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`c_id`, `company_name`, `status`) VALUES
(1, 'Liberty Commercial Center', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactperson`
--

CREATE TABLE `tblcontactperson` (
  `cp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactperson`
--

INSERT INTO `tblcontactperson` (`cp_id`, `name`, `contactnumber`, `relationship`, `ui_id`) VALUES
(1, 'Maria', '09672483039', 'Mother', 1),
(2, 'sample', '09823012038', 'sample', 2),
(3, 'balane sample', '09820394802', 'balane sample', 3),
(4, 'Sarah Mae Mendina', '09823094823', 'Sister', 4),
(5, 'asd', '09123456789', 'sample', 5),
(6, 'Memviluz', '09234234123', 'WIfe', 9),
(7, 'shame', '09892312312', 'sampley', 10),
(8, 'handyong', '09788882763', 'epic', 11),
(9, 'natnat', '09812423423', 'Son', 12),
(10, 'rodrigueza', '09123123312', 'same', 14),
(11, 'Ryan Monreal', '09123123312', 'Husband', 18),
(12, 'asd asd asd ', '09997752484', 'aaaa', 19),
(13, 'JOHN ANTHONY B Mendina', '9957752484', 'Son', 21),
(14, 'Jenelita Luz', '09065975342', 'mother', 23),
(15, 'JOHN ANTHONY B Mendina', '9957752484', 'Son', 24),
(16, 'josefa', '09231231231', 'sample', 25),
(17, 'Jocelle Monreal', '09999999999', 'Wife', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbleventres`
--

CREATE TABLE `tbleventres` (
  `ter_id` int(11) NOT NULL,
  `te_id` int(11) NOT NULL,
  `ui_id` int(11) NOT NULL,
  `written` varchar(255) NOT NULL,
  `practical` varchar(255) NOT NULL,
  `average` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `officialreceipt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleventres`
--

INSERT INTO `tbleventres` (`ter_id`, `te_id`, `ui_id`, `written`, `practical`, `average`, `remarks`, `payment`, `officialreceipt`) VALUES
(1, 50, 4, '85', '90', '88', 'Passed', '', ''),
(2, 6, 15, '78', '80', '79', 'Passed', '', ''),
(3, 50, 15, '91', '80', '86', 'Passed', '', ''),
(4, 6, 16, '90', '66', '78', 'Passed', '', ''),
(5, 50, 16, '65', '65', '65', 'Failed', '', ''),
(6, 54, 4, '78', '65', '72', 'Failed', '', ''),
(7, 56, 4, '', '', '', '', '', ''),
(9, 60, 4, '', '', '', '', '', ''),
(13, 57, 4, '85', '90', '88', 'Passed', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `te_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `venue` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `event_start_time` time NOT NULL,
  `end` varchar(255) DEFAULT NULL,
  `event_end_time` time NOT NULL,
  `color` varchar(255) NOT NULL,
  `e_min` varchar(255) NOT NULL,
  `e_max` varchar(255) NOT NULL,
  `e_hours` varchar(255) NOT NULL,
  `e_days` varchar(255) NOT NULL,
  `e_fee` varchar(255) NOT NULL,
  `e_type` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `stat_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`te_id`, `title`, `venue`, `description`, `start`, `event_start_time`, `end`, `event_end_time`, `color`, `e_min`, `e_max`, `e_hours`, `e_days`, `e_fee`, `e_type`, `c_id`, `s_id`, `stat_id`, `services_id`) VALUES
(1, 'asd', 'asd', NULL, '2018-11-06', '00:00:00', '2018-11-07', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(2, 'asd', 'asd', NULL, '2018-12-07', '00:00:00', '2018-12-08', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(3, 'SAMPLE TITLE', 'SAMPLE VENUE', ' hahaha          ', '2019-01-08', '00:00:00', '2019-01-09', '00:00:00', '0', '2', '7', '8', '1', '900', 'First Aid Training Course', 1, 4, 1, 5),
(4, 'nov 14', 'nov 14', NULL, '2018-11-14', '00:00:00', '2018-11-15', '00:00:00', '0', '', '10', '', '', '', '', 0, 0, 0, 0),
(5, 'asd', 'aaa', NULL, '2018-11-30', '00:00:00', '2018-12-01', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(6, 'SAMPLE', 'secret', NULL, '2018-11-29', '00:00:00', '2018-11-30', '00:00:00', '0', '2', '8', '', '', '', '', 0, 0, 1, 0),
(7, 'Medical Mission', 'Sto. Domingo Albay', NULL, '2018-11-30', '00:00:00', '2018-12-01', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(49, 'sample baka mag dagdag', 'venue dagdag', NULL, '2018-11-30', '00:00:00', '2018-12-01', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(50, 'siyam', 'pito', NULL, '2018-11-30', '00:00:00', '2018-12-01', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 1, 0),
(51, 'sample test 1', 'saample venue test 1', ' a', '2018-12-04', '00:00:00', '2018-12-05', '00:00:00', '0', '2', '4', '2', '1', '100', '', 0, 0, 1, 0),
(52, 'MPB', 'Sto. Domingo', ' 1   ', '2018-12-06', '00:00:00', '2018-12-07', '00:00:00', '0', '1', '1', '1', '1', '1', '', 0, 0, 1, 0),
(53, 'DECEMBER 1', 'DECEMBER 1 SAMPLE', NULL, '2018-12-01', '00:00:00', '2018-12-02', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 1, 0),
(54, 'asdssssss', 'ssssss', ' asdasdasda sd asd as d  ', '2018-12-20', '00:00:00', '2018-12-21', '00:00:00', '0', '2', '7', '8', '1', '900', '', 0, 0, 1, 0),
(55, 'sample title 2', 'sample venues', NULL, '2019-01-10', '00:00:00', '2019-01-11', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 3, 0),
(56, 'Team Alfuente Defense', 'Forbes College Main Campus', ' Rescheduled due to some unexpected situation', '2019-01-24', '00:00:00', '2019-01-25', '00:00:00', '0', '1', '5', '4', '1', '0', '', 0, 1, 1, 0),
(57, 'Team United Defense', 'Forbes College - Animation Lab', ' Final Defense(HOPING)       ', '2019-01-31', '00:00:00', '2019-01-31', '00:00:00', '0', '4', '5', '2', '1', '1', '', 0, 1, 1, 0),
(58, 'LDP', 'forbes college gound', ' a  ', '2019-01-25', '00:00:00', '2019-01-25', '00:00:00', '0', '1', '4', '4', '1', '100', '', 0, 1, 3, 0),
(59, 'aas', 'asddas', 'aaaasd ', '2019-01-20', '00:00:00', '2019-01-21', '00:00:00', '0', '1', '2', '1', '1', '0', '', 0, 1, 1, 0),
(60, 'adsdsa', 'asdasdasdasd', ' asdasd ', '2019-01-27', '00:00:00', '2019-02-01', '00:00:00', '0', '1', '3', '1', '1', '1', '', 0, 1, 3, 0),
(61, 'mamon', 'forbes', NULL, '2019-02-01', '00:00:00', '2019-02-02', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(62, 'mon', 'ma', NULL, '2019-02-03', '00:00:00', '2019-02-10', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 0, 0),
(67, 'asdasd', '[object HTMLInputElement]', NULL, '2019-01-23', '00:00:00', '2019-01-24', '00:00:00', '0', '', '', '', '', '', '', 0, 0, 2, 0),
(69, 'System Update Cheking', 'Forbes College - Kings Building', ' Follow up Checking', '2019-01-26', '13:00:00', '2019-01-26', '14:00:00', '#d2d6de', '4', '5', '2', '1', '1', '', 0, 1, 1, 0),
(70, 'asdasd', 'asdasd', 'asdasdasd', '2019-01-31', '01:00:00', '2019-02-01', '00:00:00', '#3c8dbc', '', '', '', '', '', '', 0, 0, 5, 0),
(71, 'asdasdasd', 'asd asd as ', 'asdasdasd', '2019-01-31', '00:00:00', '2019-02-01', '01:00:00', '#f56954', '', '', '', '', '', '', 0, 0, 5, 0),
(72, 'd asd as das d', 'as da sdas', 'a sdasd asdasd ad', '2019-02-01', '00:00:00', '2019-02-03', '12:00:00', '#f39c12', '', '', '', '', '', '', 0, 0, 5, 0),
(73, 'Sample Disaster Management ', 'Daraga Municipal Hall', 'Fire Drill ', '2020-03-19 08:00:00', '00:00:00', '2020-03-20 17:00:00', '00:00:00', '#ff0004', '5', '10', '', '1', '0', '', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblgroup`
--

CREATE TABLE `tblgroup` (
  `group_id` int(11) NOT NULL,
  `group_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgroup`
--

INSERT INTO `tblgroup` (`group_id`, `group_role`) VALUES
(1, 'Instructor'),
(2, 'Volunteer'),
(3, 'Non-Volunteer'),
(4, 'Focal Person'),
(5, 'System Administrator'),
(6, 'Chapter Administrator'),
(7, 'Safety Services'),
(8, 'Disaster Management Services'),
(9, 'Welfare Services'),
(10, 'Health Services'),
(11, 'Blood Services'),
(12, 'International Humanitarian Law'),
(13, 'Chapter Service Representative'),
(14, 'Emergency Response Unit'),
(15, 'Red Cross Youth'),
(16, 'Volunteer Services'),
(17, 'Cashier'),
(18, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaab`
--

CREATE TABLE `tblmaab` (
  `maab_id` int(11) NOT NULL,
  `maabtype_id` int(11) NOT NULL,
  `effectivity` varchar(30) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `officialreceipt` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmaab`
--

INSERT INTO `tblmaab` (`maab_id`, `maabtype_id`, `effectivity`, `remarks`, `officialreceipt`, `ui_id`) VALUES
(134, 1, '2019-01-24', 'Unpaid', '', 26),
(333, 1, '2018-11-26', 'Unpaid', '', 18),
(957, 1, '2018-12-04', 'Unpaid', '', 24),
(8000, 2, '2018-12-05', 'Unpaid', '', 21),
(12312, 1, '2018-11-16', 'Unpaid', '', 15),
(29374, 1, '2018-01-01', 'Unpaid', '', 4),
(29384, 1, '2017-09-08', 'Paid', '', 5),
(121212, 1, '2018-08-28', 'Unpaid', '', 23),
(123231, 2, '2018-01-01', 'Unpaid', '', 9),
(124865, 1, '2019-01-22', 'Unpaid', '', 25),
(212312, 1, '2018-11-08', 'Unpaid', '', 14),
(567787, 1, '2020-11-07', 'Unpaid', '', 2),
(826734, 1, '2018-01-02', 'Unpaid', '', 12),
(878273, 2, '2017-01-01', 'Unpaid', '', 10),
(982734, 1, '2018-02-01', 'Unpaid', '', 3),
(1111123, 1, '2018-11-02', 'Unpaid', '', 16),
(9798723, 3, '2018-02-01', 'Unpaid', '', 11),
(90908989, 2, '2018-12-04', 'Unpaid', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tblmaabtype`
--

CREATE TABLE `tblmaabtype` (
  `maabtype_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmaabtype`
--

INSERT INTO `tblmaabtype` (`maabtype_id`, `type`) VALUES
(1, 'Classic'),
(2, 'Bronze'),
(3, 'Platinum'),
(4, 'Gold'),
(5, 'Senior-Plus');

-- --------------------------------------------------------

--
-- Table structure for table `tblmembership`
--

CREATE TABLE `tblmembership` (
  `mem_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmembership`
--

INSERT INTO `tblmembership` (`mem_id`, `a_id`, `group_id`) VALUES
(1, 2, 6),
(2, 12, 16),
(3, 12, 15),
(4, 12, 17),
(5, 1, 2),
(6, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tblpermission`
--

CREATE TABLE `tblpermission` (
  `perm_id` int(11) NOT NULL,
  `perm_action` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermission`
--

INSERT INTO `tblpermission` (`perm_id`, `perm_action`, `group_id`) VALUES
(1, 'update', 1),
(2, 'write', 1),
(3, 'read', 1),
(4, 'update', 2),
(5, 'delete', 2),
(6, 'read', 2),
(7, 'write', 2),
(8, 'update', 3),
(9, 'delete', 3),
(10, 'read', 3),
(11, 'write', 3),
(12, 'update', 4),
(13, 'delete', 4),
(14, 'write', 4),
(15, 'read', 4),
(16, 'read', 5),
(17, 'write', 5),
(18, 'update', 5),
(19, 'delete', 5),
(20, 'read', 6),
(21, 'write', 6),
(22, 'update', 6),
(23, 'delete', 6),
(24, 'read', 7),
(25, 'write', 7),
(26, 'update', 7),
(27, 'delete', 7),
(28, 'read', 8),
(29, 'write', 8),
(30, 'update', 8),
(31, 'delete', 8),
(32, 'read', 9),
(33, 'write', 9),
(34, 'update', 9),
(35, 'delete', 9),
(36, 'read', 10),
(37, 'write', 10),
(38, 'update', 10),
(39, 'delete', 10),
(40, 'read', 11),
(41, 'write', 11),
(42, 'update', 11),
(43, 'delete', 11),
(44, 'read', 12),
(45, 'write', 12),
(46, 'update', 12),
(47, 'delete', 12),
(48, 'read', 13),
(49, 'write', 13),
(50, 'update', 13),
(51, 'delete', 13),
(52, 'read', 14),
(53, 'write', 14),
(54, 'update', 14),
(55, 'delete', 14),
(56, 'read', 15),
(57, 'write', 15),
(58, 'update', 15),
(59, 'delete', 15),
(60, 'read', 16),
(61, 'write', 16),
(62, 'update', 16),
(63, 'delete', 16),
(64, 'read', 17),
(65, 'write', 17),
(66, 'update', 17),
(67, 'delete', 17),
(68, 'read', 18),
(69, 'write', 18),
(70, 'update', 18),
(71, 'delete', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tblposition`
--

CREATE TABLE `tblposition` (
  `pos_id` int(11) NOT NULL,
  `position` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposition`
--

INSERT INTO `tblposition` (`pos_id`, `position`) VALUES
(3, 'Chapter Administrator'),
(14, 'Chapter Service Representative'),
(16, 'Focal Person'),
(15, 'Staff Aide/Driver'),
(12, 'System Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblschool`
--

CREATE TABLE `tblschool` (
  `s_id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschool`
--

INSERT INTO `tblschool` (`s_id`, `school_name`, `status`) VALUES
(1, 'Forbes College Legazpi City', 0),
(2, 'STI College', 0),
(3, 'Bicol College', 0),
(4, 'Bicol University', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `services_id` int(11) NOT NULL,
  `services_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`services_id`, `services_title`) VALUES
(1, 'International Humanitarian Law'),
(2, 'Safety Services'),
(3, 'Disaster Management Services'),
(4, 'Red Cross Youth'),
(5, 'Health Services'),
(6, 'Blood Services'),
(7, 'N/A'),
(8, 'Volunteer Services'),
(9, 'Information Technology'),
(10, 'Welfare Services');

-- --------------------------------------------------------

--
-- Table structure for table `tblspecialization`
--

CREATE TABLE `tblspecialization` (
  `spec_id` int(11) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblspecialization`
--

INSERT INTO `tblspecialization` (`spec_id`, `specialization`) VALUES
(2, 'First Aid'),
(5, 'CPP'),
(6, 'Water Safety'),
(7, 'Water Survival'),
(8, 'Water Sanitation and Hygiene'),
(9, 'Disaster Management Services'),
(10, 'Emergency Response Unit'),
(11, 'IHL Disseminator');

-- --------------------------------------------------------

--
-- Table structure for table `tblstat`
--

CREATE TABLE `tblstat` (
  `stat_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstat`
--

INSERT INTO `tblstat` (`stat_id`, `status`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Cancelled'),
(4, 'Disapproved'),
(5, 'Standby');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainingattended`
--

CREATE TABLE `tbltrainingattended` (
  `ta_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltrainingattended`
--

INSERT INTO `tbltrainingattended` (`ta_id`, `title`, `chapter`, `date`, `venue`, `start`, `end`, `description`, `remarks`, `ui_id`) VALUES
(4, 's', 'asdasd', '2019-01-31', 'as', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbluposition`
--

CREATE TABLE `tbluposition` (
  `upos_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluposition`
--

INSERT INTO `tbluposition` (`upos_id`, `position`, `ui_id`) VALUES
(1, 'Chapter Administrator', 2),
(2, 'System Administrator', 1),
(3, 'Chapter Service Representative', 8),
(4, 'Chapter Service Representative', 9),
(5, 'Chapter Service Representative', 11),
(6, 'Chapter Service Representative', 12),
(7, 'Focal Person', 14),
(8, 'Chapter Service Representative', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserinfo`
--

CREATE TABLE `tbluserinfo` (
  `ui_id` int(11) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `mn` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `sn` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cp_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `sex` varchar(20) NOT NULL,
  `civilstat` varchar(50) NOT NULL,
  `bloodtype` varchar(50) NOT NULL,
  `company` varchar(500) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `educ_att` varchar(255) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL,
  `u_class` varchar(255) NOT NULL,
  `stat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserinfo`
--

INSERT INTO `tbluserinfo` (`ui_id`, `fn`, `mn`, `ln`, `sn`, `address`, `cp_no`, `email`, `bdate`, `sex`, `civilstat`, `bloodtype`, `company`, `occupation`, `educ_att`, `img_name`, `img_path`, `img_type`, `u_class`, `stat_id`) VALUES
(1, 'John Anthony', 'Berdin', 'Mendina', '', 'Kalye Pogi Purok 1 Barangay Capantawan', '09672483039', 'jamendina@gmail.com', '1997-08-29', 'Male', 'Single', 'O+', 'Kalye Pogi Purok 1 Barangay Capantawan', 'IT Personnel', 'BSIT Graduate', 'id.jpg', 'uploads/id.jpg', 'image/jpeg', 'Staff', 0),
(2, 'Rosiedel', '', 'Rivero', '', 'third street', '09111111111', '', '0000-00-00', '', '', 'AB+', '', '', '', 'rivero2.jpg', 'uploads/rivero2.jpg', 'image/jpeg', 'Staff', 1),
(3, 'balane', 'balane', 'balane', '', 'balane', '09180239810', '', '0000-00-00', '', '', 'O-', '', '', '', '', 'uploads/pic.png', '', 'Instructor', 1),
(4, 'jam', '', 'mendina', '', 'mendina street', '09823942342', '', '2005-11-09', 'Male', 'Single', 'O+', '', '', '', '', 'uploads/pic.png', '', 'Non-Volunteer', 1),
(5, 'admin', '', 'admin', '', 'sitio batum', '09957752484', 'jamendina@gmail.com', '2018-07-07', 'Male', 'Single', 'O+', 'Forbes College', '4th Year', 'BSIT', '', 'uploads/pic.png', '', 'Volunteer', 0),
(6, 'John Anthony', 'Arao', 'Balinsayo', '', 'third street', '09222222222', 'balinsayo@gmail.com', '2003-01-01', 'Male', 'Single', 'Unidentified', 'Forbes College', '4th year', 'BS in Information Technology', '', 'uploads/pic.png', '', 'Volunteer', 0),
(8, 'florinda', '', 'see', '', 'Daraga Albay', '09183123123', '', '0000-00-00', '', '', 'Unidentified', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(9, 'Gerald', 'G', 'Gapayao', '', 'Bitano Legazpi City', '09423423423', '', '0000-00-00', '', '', 'A-', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(10, 'jow', 'jow', 'jow', '', 'jow', '09123123123', '', '0000-00-00', '', '', 'O-', '', '', '', '', 'uploads/pic.png', '', 'Instructor', 1),
(11, 'lorie', '', 'losito', '', 'camalig', '09123123343', '', '1992-07-18', '', '', 'AB-', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(12, 'jonathan', '', 'regondola', '', 'legazpi city', '09812312312', '', '0000-00-00', '', '', 'O+', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(13, 'jonathan', '', 'regondola', '', 'legazpi city', '09812312312', '', '0000-00-00', '', '', 'O+', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(14, 'geniu', '', 'rodrigueza', '', 'daraga', '09812312312', '', '0000-00-00', '', '', 'B-', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(15, 'jhon aragorn', '', 'mendina', '', 'legazpi city', '09205204123', 'jhonaragorn@gmail.com', '2006-02-04', 'Male', 'Single', 'O+', 'Cabangan High School', 'Grade 8', 'Junior High School', '', 'uploads/pic.png', '', 'Trainee', 0),
(16, 'clark', '', 'amor', '', 'legazpi city', '09812312312', 'jhonaragorn@gmail.com', '2018-11-15', 'Male', 'Single', 'A+', 'Forbes College Legazpi', 'IT Instructor', 'Master in Information Technology', '', 'uploads/pic.png', '', 'Trainee', 1),
(17, 'sususu', 'sususu', 'sususu', '', 'legazpi city', '09123123123', 'jhonaragorn@gmail.com', '2018-09-24', 'Male', 'Single', 'O-', 'Forbes College Legazpi', 'IT Instructor', 'Junior High School', '', 'uploads/pic.png', '', 'Trainee', 0),
(18, 'jocelle', 'banta', 'Monreal', '', 'Sto. Domingo Albay', '09173618261', 'bantajocellemintar@gmail.com', '2000-12-19', 'Female', 'Married', 'A+', 'Forbes College Legazpi', 'IT Instructor', 'Master in Information Technology', '', 'uploads/pic.png', '', 'Trainee', 0),
(19, 'james', '', 'potter', '', 'legazpi city', '09957752484', 'jamespotter@hogwarts.com', '1983-01-31', 'Male', 'Single', 'A-', 'hogwarts', 'pro wizard', 'wizard', '', 'uploads/pic.png', '', 'Trainee', 0),
(20, 'kuku', 'carolo', 'palad', 'Mendina', 'P1, Capantawan', '9957752484', 'aaaasdasd@gmail.com', '1998-12-19', 'Male', 'Single', 'O-', 'Forbes College Legazpi', 'Grade 8', 'Junior High School', '', '', '', 'Non-Volunteer', 0),
(21, 'samh', 'samh', 'hidalgo', 'Mendina', 'P1, Capantawan', '09123123123', 'jhonaragorn@gmail.com', '1998-12-19', 'Male', 'Single', 'O-', 'Forbes College Legazpi', 'IT Instructor', 'Master in Information Technology', '', '', '', 'Non-Volunteer', 0),
(22, 'jayboy', 'bausa', 'luz', '', 'Pandan daraga albay', '09065975344', 'jayboyluz123@gmail.com', '1998-02-26', 'Male', 'Single', 'A+', 'Forbes Colllege', '4', 'BSIT', '', '', '', 'Volunteer', 0),
(23, 'jayboy', 'bausa', 'luz', '', 'Pandan daraga albay', '09065975344', 'jayboyluz123@gmail.com', '2018-02-26', 'Male', 'Single', 'A+', 'Forbes Colllege', '4', 'BSIT', '', '', '', 'Volunteer', 0),
(24, 'jonna jane', 'B', 'nidua', '', 'legazpi city', '9957752484', 'jonnajane123@gmail.com', '2018-12-14', 'Male', 'Single', 'O+', 'Forbes Colllege', 'IT', 'BSIT', '', 'uploads/pic.png', '', 'Non-Volunteer', 0),
(25, 'joseph wyne', '', 'manjares', '', 'daraga', '09812093801', '', '0000-00-00', '', '', 'A+', '', '', '', '', 'uploads/pic.png', '', 'Staff', 1),
(26, 'ryan', 'nicoleta', 'monreal', '', 'Daraga', '09152349995', 'monrealryan@gmail.com', '1992-04-25', 'Male', 'Married', 'Unidentified', 'SEDP', 'Senior Developer', 'Bachelor of Science in CS', '', 'uploads/pic.png', '', 'Non-Volunteer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluservices`
--

CREATE TABLE `tbluservices` (
  `uservices_id` int(11) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluservices`
--

INSERT INTO `tbluservices` (`uservices_id`, `services_title`, `ui_id`) VALUES
(1, 'N/A', 1),
(2, 'N/A', 2),
(3, 'Welfare Services', 8),
(4, 'Disaster Management Services', 9),
(5, 'Blood Services', 11),
(6, 'Volunteer Services', 12),
(7, 'International Humanitarian Law', 14),
(8, 'Safety Services', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbluspecialization`
--

CREATE TABLE `tbluspecialization` (
  `uspec_id` int(11) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `ui_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluspecialization`
--

INSERT INTO `tbluspecialization` (`uspec_id`, `specialization`, `ui_id`) VALUES
(1, 'First Aid', 3),
(2, 'Disaster Management Services', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cp_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`id`, `name`, `cp_no`) VALUES
(1, 'jamendina', '09205204123'),
(2, 'sharina', '09565772543'),
(3, 'luz', '09065975344'),
(4, 'marbella', '09553746597'),
(5, 'clark', '09666525731'),
(6, 'Jocelle Monreal', '09296537416');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD KEY `FK_AccountInfo` (`ui_id`);

--
-- Indexes for table `tblassignment`
--
ALTER TABLE `tblassignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `te_id` (`te_id`) USING BTREE,
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `tblblooddonation`
--
ALTER TABLE `tblblooddonation`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `ui_id` (`ui_id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tblcontactperson`
--
ALTER TABLE `tblcontactperson`
  ADD PRIMARY KEY (`cp_id`),
  ADD UNIQUE KEY `ui_id` (`ui_id`);

--
-- Indexes for table `tbleventres`
--
ALTER TABLE `tbleventres`
  ADD PRIMARY KEY (`ter_id`),
  ADD KEY `ui_id` (`ui_id`),
  ADD KEY `te_id` (`te_id`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`te_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `services_id` (`services_id`),
  ADD KEY `stat_id` (`stat_id`),
  ADD KEY `s_id_2` (`s_id`),
  ADD KEY `c_id_2` (`c_id`),
  ADD KEY `services_id_2` (`services_id`);

--
-- Indexes for table `tblgroup`
--
ALTER TABLE `tblgroup`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tblmaab`
--
ALTER TABLE `tblmaab`
  ADD PRIMARY KEY (`maab_id`),
  ADD KEY `ui_id` (`ui_id`),
  ADD KEY `maabtype_id` (`maabtype_id`);

--
-- Indexes for table `tblmaabtype`
--
ALTER TABLE `tblmaabtype`
  ADD PRIMARY KEY (`maabtype_id`);

--
-- Indexes for table `tblmembership`
--
ALTER TABLE `tblmembership`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `tblpermission`
--
ALTER TABLE `tblpermission`
  ADD PRIMARY KEY (`perm_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `tblposition`
--
ALTER TABLE `tblposition`
  ADD PRIMARY KEY (`pos_id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `tblschool`
--
ALTER TABLE `tblschool`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `tblspecialization`
--
ALTER TABLE `tblspecialization`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `tblstat`
--
ALTER TABLE `tblstat`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `tbltrainingattended`
--
ALTER TABLE `tbltrainingattended`
  ADD PRIMARY KEY (`ta_id`),
  ADD KEY `ui_id` (`ui_id`);

--
-- Indexes for table `tbluposition`
--
ALTER TABLE `tbluposition`
  ADD PRIMARY KEY (`upos_id`),
  ADD KEY `ui_id` (`ui_id`) USING BTREE;

--
-- Indexes for table `tbluserinfo`
--
ALTER TABLE `tbluserinfo`
  ADD PRIMARY KEY (`ui_id`);

--
-- Indexes for table `tbluservices`
--
ALTER TABLE `tbluservices`
  ADD PRIMARY KEY (`uservices_id`),
  ADD KEY `ui_id` (`ui_id`) USING BTREE;

--
-- Indexes for table `tbluspecialization`
--
ALTER TABLE `tbluspecialization`
  ADD PRIMARY KEY (`uspec_id`),
  ADD KEY `ui_id` (`ui_id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblassignment`
--
ALTER TABLE `tblassignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblblooddonation`
--
ALTER TABLE `tblblooddonation`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactperson`
--
ALTER TABLE `tblcontactperson`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbleventres`
--
ALTER TABLE `tbleventres`
  MODIFY `ter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `te_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblgroup`
--
ALTER TABLE `tblgroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblmaabtype`
--
ALTER TABLE `tblmaabtype`
  MODIFY `maabtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblmembership`
--
ALTER TABLE `tblmembership`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpermission`
--
ALTER TABLE `tblpermission`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblschool`
--
ALTER TABLE `tblschool`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblspecialization`
--
ALTER TABLE `tblspecialization`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstat`
--
ALTER TABLE `tblstat`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbltrainingattended`
--
ALTER TABLE `tbltrainingattended`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluposition`
--
ALTER TABLE `tbluposition`
  MODIFY `upos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluserinfo`
--
ALTER TABLE `tbluserinfo`
  MODIFY `ui_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbluservices`
--
ALTER TABLE `tbluservices`
  MODIFY `uservices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluspecialization`
--
ALTER TABLE `tbluspecialization`
  MODIFY `uspec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD CONSTRAINT `tblaccount_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tblassignment`
--
ALTER TABLE `tblassignment`
  ADD CONSTRAINT `tblassignment_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `tblaccount` (`a_id`),
  ADD CONSTRAINT `tblassignment_ibfk_2` FOREIGN KEY (`te_id`) REFERENCES `tblevents` (`te_id`);

--
-- Constraints for table `tblblooddonation`
--
ALTER TABLE `tblblooddonation`
  ADD CONSTRAINT `tblblooddonation_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD CONSTRAINT `tblcompany_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tblevents` (`c_id`);

--
-- Constraints for table `tblcontactperson`
--
ALTER TABLE `tblcontactperson`
  ADD CONSTRAINT `tblcontactperson_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tbleventres`
--
ALTER TABLE `tbleventres`
  ADD CONSTRAINT `tbleventres_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`),
  ADD CONSTRAINT `tbleventres_ibfk_2` FOREIGN KEY (`te_id`) REFERENCES `tblevents` (`te_id`);

--
-- Constraints for table `tblmaab`
--
ALTER TABLE `tblmaab`
  ADD CONSTRAINT `tblmaab_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`),
  ADD CONSTRAINT `tblmaab_ibfk_2` FOREIGN KEY (`maabtype_id`) REFERENCES `tblmaabtype` (`maabtype_id`);

--
-- Constraints for table `tblmembership`
--
ALTER TABLE `tblmembership`
  ADD CONSTRAINT `tblmembership_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tblgroup` (`group_id`),
  ADD CONSTRAINT `tblmembership_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `tblaccount` (`a_id`);

--
-- Constraints for table `tblpermission`
--
ALTER TABLE `tblpermission`
  ADD CONSTRAINT `tblpermission_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tblgroup` (`group_id`);

--
-- Constraints for table `tbltrainingattended`
--
ALTER TABLE `tbltrainingattended`
  ADD CONSTRAINT `tbltrainingattended_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tbluposition`
--
ALTER TABLE `tbluposition`
  ADD CONSTRAINT `tbluposition_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tbluservices`
--
ALTER TABLE `tbluservices`
  ADD CONSTRAINT `tbluservices_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);

--
-- Constraints for table `tbluspecialization`
--
ALTER TABLE `tbluspecialization`
  ADD CONSTRAINT `tbluspecialization_ibfk_1` FOREIGN KEY (`ui_id`) REFERENCES `tbluserinfo` (`ui_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
