-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 06:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

CREATE TABLE `cleaning` (
  `Idhousekeeper` int(11) NOT NULL,
  `Idroom` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cleaning_status`
--

CREATE TABLE `cleaning_status` (
  `status_update_clean` int(11) NOT NULL,
  `namecleaning` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cleaning_status`
--

INSERT INTO `cleaning_status` (`status_update_clean`, `namecleaning`) VALUES
(0, 'ห้องทำความสะอาดแล้ว'),
(1, 'ยังไมไ่ด้ทำความสะอาด');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcoment` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcoment`, `email`, `score`, `comment`) VALUES
(3, 'psomdul@gmail.com', 1, ' good service, good place ,good location'),
(4, 'isomdul@gmail.com', 4, ' bad place , expensive room , uncleaning room'),
(5, 'psomdul@gmail.com', 2, ' good service');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(0, '54514096_561690184333639_8221462673296982016_n.jpg', ''),
(0, '54514096_561690184333639_8221462673296982016_n.jpg', ''),
(0, '54514096_561690184333639_8221462673296982016_n.jpg', ''),
(0, 'aa55aa.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `User` varchar(15) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Priority` int(1) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `IDcard` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `User`, `Password`, `Priority`, `fname`, `lname`, `email`, `address`, `IDcard`, `tel`, `img`) VALUES
(3, 'admin', 'password', 2, 'thanabodee', 'kongket', 'jabjab@gmail.com', 'thamaga', '1987567898456', '', 'golf.jpg'),
(5, 'owner', '9999', 1, 'Chris', 'hamsworth', 'Owner1150@gmail.com', 'bangkapi', '1985632198561', '0896532148', 'jap.jpg'),
(73, 'housekeeper', '123456', 3, 'PATIPARN', 'SOMDULYAKANOK', 'housekeeper@gmail.com', '48 bangyirua thonburi, intrapitak3', '9999898989', '923327160', 'golf.jpg'),
(74, 'golf', 'gigog', 3, 'patiparn', 'sukkanakin', 'golfgiggog@gmail.com', 'prapathom hey', '192168111', '0987956321', 'mike.jpg'),
(75, 'thanabode', 'password', 3, 'thanabodee', 'kongrade', 'mezoo191@gmail.com', 'supanburi fight', '26671026498', '0235978951', 'person_3.jpg'),
(76, 'scott', 'rungnok', 3, 'scott ', 'rungnoktae', 'scott@gmail.com', 'england', '199123456789', '0265987999', 'person_1.jpg'),
(77, 'pond', 'password', 3, 'PATIPARN', 'SOMDULYAKANOK', '', '48 bangyirua thonburi, intrapitak3', '19895659897', '0923327160', 'aa55aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Userid` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Userid`, `id`, `password`, `Name`, `status`) VALUES
('1', 'aralee', 'slum', 'peerachai ', 1),
('2', 'goku', 'godeaw', 'sornlarm', 2),
('3', 'koke', 'santacos', 'thanabodee', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id_payment` int(11) NOT NULL,
  `name_payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id_payment`, `name_payment`) VALUES
(0, 'ยังไม่ได้ชำระเงิน'),
(1, 'ชำระเงินเรียบร้อยแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `IdPrio` int(11) NOT NULL,
  `NamePrio` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`IdPrio`, `NamePrio`) VALUES
(1, 'owners'),
(2, 'admin'),
(3, 'housekeeper');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `IdRe` int(11) NOT NULL,
  `Idroom` int(11) NOT NULL,
  `IdUser` int(255) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `ArriveDate` date DEFAULT NULL,
  `DepartDate` date DEFAULT NULL,
  `currenttime` datetime DEFAULT NULL,
  `Price` int(254) NOT NULL,
  `status_seen_noti` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status_confirmpayment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`IdRe`, `Idroom`, `IdUser`, `Status`, `ArriveDate`, `DepartDate`, `currenttime`, `Price`, `status_seen_noti`, `img`, `status_confirmpayment`) VALUES
(519, 1010, 11, 5, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(520, 1011, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(521, 1013, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(522, 1014, 11, 5, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(523, 1015, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(524, 1016, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(525, 1017, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(526, 1018, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(527, 1019, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(528, 1020, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(529, 1021, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(530, 1022, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(531, 1023, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(532, 1024, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(533, 1025, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(534, 1026, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(535, 1027, 11, 4, '2019-06-01', '2019-06-02', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(536, 1028, 11, 4, '2018-12-01', '2018-12-19', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(537, 1029, 11, 4, '2018-11-01', '2018-11-19', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(538, 1030, 11, 4, '2018-10-01', '2018-10-22', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(539, 1031, 11, 4, '2018-09-01', '2018-09-16', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(540, 1032, 11, 4, '2018-08-01', '2018-08-19', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(541, 1033, 11, 4, '2018-07-01', '2018-07-31', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(542, 1034, 11, 4, '2018-01-01', '2018-01-26', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(543, 1035, 11, 4, '2018-02-01', '2018-02-20', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(544, 1036, 11, 4, '2018-03-01', '2018-03-13', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(545, 1037, 11, 4, '2018-06-01', '2018-06-15', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(546, 1038, 11, 4, '2018-05-01', '2018-05-31', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(547, 1039, 11, 4, '2018-04-01', '2018-04-30', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(548, 1040, 11, 4, '2017-06-02', '2017-06-08', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(549, 1041, 11, 4, '2017-05-02', '2017-05-31', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(550, 1042, 11, 4, '2017-04-02', '2017-05-25', '2019-05-06 18:22:35', 3000, 1, NULL, 0),
(551, 1010, 11, 5, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(552, 1011, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(553, 1013, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(554, 1014, 11, 5, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(555, 1015, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(556, 1016, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(557, 1017, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(558, 1018, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(559, 1019, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(560, 1020, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(561, 1021, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(562, 1022, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(563, 1023, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(564, 1024, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(565, 1025, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(566, 1026, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(567, 1027, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(568, 1028, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(569, 1029, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(570, 1030, 11, 4, '2019-07-01', '2019-07-25', '2019-05-06 18:27:18', 3000, 1, NULL, 0),
(571, 1010, 11, 5, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(572, 1011, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(573, 1013, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(574, 1014, 11, 5, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(575, 1015, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(576, 1016, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(577, 1017, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(578, 1018, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(579, 1019, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(580, 1020, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(581, 1021, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(582, 1022, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(583, 1023, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(584, 1024, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(585, 1025, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(586, 1026, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(587, 1027, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(588, 1028, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(589, 1029, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(590, 1030, 11, 4, '2019-08-01', '2019-08-26', '2019-05-06 18:27:56', 3000, 1, NULL, 0),
(591, 1010, 11, 4, '2019-05-28', '2019-05-29', '2019-05-09 16:23:59', 3000, 1, NULL, 0),
(592, 1010, 23, 3, '2019-05-30', '2019-05-31', '2019-05-09 16:28:45', 3000, 1, NULL, 0),
(593, 1011, 39, 3, '2019-05-28', '2019-05-29', '2019-05-09 16:32:46', 3000, 1, NULL, 0),
(594, 1013, 39, 3, '2019-05-28', '2019-05-29', '2019-05-09 16:34:38', 3000, 1, NULL, 0),
(595, 1014, 40, 3, '2019-05-28', '2019-05-29', '2019-05-09 16:35:43', 3000, 1, NULL, 0),
(621, 1010, 11, 4, '2019-05-09', '2019-05-10', '2019-05-09 21:02:57', 3000, 1, NULL, 0),
(622, 1010, 11, 3, '2019-05-10', '2019-05-11', '2019-05-10 09:40:15', 3000, 1, NULL, 0),
(623, 1011, 11, 5, '2019-05-10', '2019-05-11', '2019-05-10 09:41:27', 3000, 1, NULL, 0),
(624, 3010, 11, 5, '2019-05-10', '2019-05-11', '2019-05-10 13:45:33', 10000, 1, NULL, 0),
(625, 3011, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 13:45:33', 10000, 1, NULL, 0),
(626, 2010, 11, 5, '2019-05-10', '2019-05-11', '2019-05-10 14:08:21', 5000, 1, 'payment1.jpg', 1),
(627, 1013, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(628, 1014, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(629, 1015, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(630, 1016, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(631, 1017, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(632, 1018, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(633, 1019, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(634, 1020, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(635, 1021, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(636, 1022, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(637, 1023, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(638, 1024, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(639, 1025, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(640, 1026, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(641, 1027, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(642, 1028, 11, 4, '2019-05-10', '2019-05-11', '2019-05-10 14:12:00', 3000, 1, NULL, 0),
(643, 1010, 11, 5, '2019-05-16', '2019-05-17', '2019-05-16 01:25:45', 3000, 1, 'payment1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Idroom` int(11) NOT NULL,
  `Type` int(11) DEFAULT NULL,
  `IdUser` int(255) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `picture` varchar(256) NOT NULL,
  `Detail` text NOT NULL,
  `Amountguest` int(255) NOT NULL,
  `Roomsize` int(255) NOT NULL,
  `guestnum` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `currenttime` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_update_clean` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Idroom`, `Type`, `IdUser`, `Status`, `picture`, `Detail`, `Amountguest`, `Roomsize`, `guestnum`, `text`, `currenttime`, `status_update_clean`) VALUES
(1010, 1, 11, 1, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 1),
(1011, 1, NULL, 1, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1013, 1, NULL, 1, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1014, 1, NULL, 1, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1015, 1, NULL, 1, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1016, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1017, 1, 11, 5, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1018, 1, 11, 5, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1019, 1, 11, 5, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1020, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1021, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1022, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1023, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1024, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1025, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1026, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1027, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1028, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1029, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1030, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1031, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1032, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1033, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1034, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1035, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1036, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1037, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1038, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1039, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1040, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 2, 22, NULL, '', NULL, 0),
(1041, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 5, 33, NULL, '', NULL, 0),
(1042, 1, NULL, 2, 'img_2.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 twin- bed and 1 sofa <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:24px\"></i> Shower <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:24px\'></i> refrigerator , mini-bar <br>', 5, 55, NULL, '', NULL, 0),
(2010, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2011, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2012, 2, 11, 5, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2013, 2, 11, 5, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2014, 2, 11, 5, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2015, 2, 11, 5, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2016, 2, 11, 5, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2017, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2018, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2019, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2020, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2021, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2022, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2023, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2024, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2025, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2026, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2027, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2028, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br><i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2029, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2030, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2031, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(2032, 2, NULL, 2, 'img_3.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-twin bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : City <br>', 3, 25, NULL, '', NULL, 0),
(3010, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3011, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3012, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3013, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3014, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3015, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3016, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3017, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3018, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3019, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(3020, 3, NULL, 2, 'img_4.jpg', '<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br> <i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel<br> <i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 large-single bed and 1 sofa <br> <i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br> <i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and bath <br> <i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , mini-bar <br> <i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : Nature <br>', 3, 30, NULL, '', NULL, 0),
(9001, 4, NULL, 2, 'img_1.jpg', '<i class=\'fas fa-home\' style=\'font-size:18px\'></i> 1 bedroom and 1 living room <br>\r\n<i class=\"fas fa-wifi\" style=\"color:red;\"></i> free-wifi<br>\r\n<i class=\"fas fa-hamburger\"></i> Free breakfast, lounge-vip , free dinner on loof-top hotel , <br>\r\n<i class=\"fas fa-bed\" style=\"color:purple\"></i> 1 super king bed  1 large twin bed and 1 large sofa  <br>\r\n<i class=\"fas fa-bed\" style=\"color:green\"></i> can request an extra bed <br>\r\n<i class=\"fa fa-bath\" style=\"font-size:18px\"></i> Shower and jaguzzi-pool and bath <br>\r\n<i class=\'fas fa-bread-slice\' style=\'font-size:18px\'></i> refrigerator , free mini-bar , snack , champagne <br>\r\n<i class=\"fa fa-eye\" style=\"font-size:18px; color:green\"></i> View : 180 degrees view <br>', 5, 50, NULL, '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scorecomment`
--

CREATE TABLE `scorecomment` (
  `idscore` int(11) NOT NULL,
  `namescore` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scorecomment`
--

INSERT INTO `scorecomment` (`idscore`, `namescore`) VALUES
(1, 'มากที่สุด'),
(2, 'มาก'),
(3, 'พอใจ'),
(4, 'น้อย'),
(5, 'น้อยที่สุด');

-- --------------------------------------------------------

--
-- Table structure for table `status_reserver`
--

CREATE TABLE `status_reserver` (
  `StatusId` int(11) NOT NULL,
  `StatusName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_reserver`
--

INSERT INTO `status_reserver` (`StatusId`, `StatusName`) VALUES
(1, 'Available-dirty'),
(2, 'Available-clean'),
(3, 'Reserved'),
(4, 'Confirmed'),
(5, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `type_room`
--

CREATE TABLE `type_room` (
  `IdType` int(11) NOT NULL,
  `NameType` varchar(15) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_room`
--

INSERT INTO `type_room` (`IdType`, `NameType`, `Price`) VALUES
(1, 'Standard', 3000),
(2, 'Superior', 5000),
(3, 'Deluxe', 10000),
(4, 'Suite', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(15) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `IdUser` int(13) NOT NULL,
  `Email` text NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Sname`, `phone`, `IdUser`, `Email`, `Detail`) VALUES
('thanabodee', 'Somdulyakanok', '0923327160', 11, 'psomdul@gmail.com', ''),
('Anthony', 'Russo ', '0923327160', 12, '5555@gmail.com', 'xxxxxx'),
('Joe', 'Russo ', '0998794959', 13, 'joeyra@gmail.com', ''),
(' Christopher', 'Markus ', '0925897998', 14, 'christo@gmail.com', '5555'),
('Stephen ', 'McFeely ', '0925897998', 15, 'stephen@gmail.com', ''),
('Nick ', 'Fury', '0925897998', 16, 'nicky9@gmail.com', ''),
('Jim ', 'Starlin ', '0925897998', 17, 'jimst@gmail.com', '999'),
('thanabodee', 'kongade', '0959895646', 18, 'meezoo@gmail.com', '6969696969'),
('peeratat ', 'mantaka', '0959895646', 19, 'peeratat@gmail.com', ''),
('akepol', 'somdulyakanok', '0923327160', 23, 'isomdul@gmail.com', ''),
('fgdfgd', 'gdfgd', '5433', 24, 'asdasd@gkosdo.com', ''),
('sfdsfsd', 'sdfsdf', '1191959595', 25, 'asdasd@gmail.com', ''),
('sfdsfsd', 'sdfsdf', '1191959595', 26, 'asdasd@gmail.com', ''),
('sfdsfsd', 'sdfsdf', '1191959595', 27, 'asdasd@gmail.com', ''),
('sfdsfsd', 'sdfsdf', '1191959595', 28, 'asdasd@gmail.com', ''),
('sfdsfsd', 'sdfsdf', '1191959595', 29, 'asdasd@gmail.com', ''),
('sdfsdfpsd', 'pkfpsdkfpksd', '0995952695', 30, 'asds@gmail.com', ''),
('gksdplfpsd', 'lplsdplpfd', 'skdpdsp', 31, 'asdsad@gmail.com', ''),
('sfsdf', 'sfdsdfsd', 'sdfsfd', 32, 'ssdfsfddsdf@gmsdf', ''),
('PATIPARN', 'SOMDULYAKANOK', '923327160', 33, 'thanabodee2661@gmail.com', ''),
('dssdfsd', 'sdfsdfs', '095894456', 34, 'fefds@gmail.com', ''),
('asdasd', 'asdasdasas', '0925648948', 35, 'asdasd@gmail.com', ''),
('adsdasd', 'asdasda', '0921654564', 36, 'asdasd@gmail.com', ''),
('PATIPARN', 'SOMDULYAKANOK', '923327160', 37, 'psomasdas321dul@gmail.com', ''),
('sdfsdfsd', '', '4544554545', 38, 'kfodo@gmail.com', ''),
('akeake', 'akeake', '0923327160', 39, 'pondnakab123@gmail.com', ''),
('aabasc', 'aabasd', '0923546894', 40, 'podlsa@gmail.com', ''),
('assin', 'sinass', '0923564977', 41, 'haha995599@gmail.com', '5555'),
('jjjjjj', 'kkkkkk', '0298796546', 42, 'ijiji@gmail.com', '5555'),
('ijijiji', 'ijijiji', '4465465465', 43, 'zamori26360@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`Idhousekeeper`,`Idroom`),
  ADD KEY `Idroom` (`Idroom`);

--
-- Indexes for table `cleaning_status`
--
ALTER TABLE `cleaning_status`
  ADD PRIMARY KEY (`status_update_clean`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcoment`),
  ADD KEY `score` (`score`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Priority` (`Priority`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Userid`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`IdPrio`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`IdRe`),
  ADD KEY `reservation_ibfk_1` (`Status`),
  ADD KEY `Idroom` (`Idroom`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `status_confirmpayment` (`status_confirmpayment`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Idroom`),
  ADD KEY `Type` (`Type`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `Status` (`Status`),
  ADD KEY `status_update_clean` (`status_update_clean`);

--
-- Indexes for table `scorecomment`
--
ALTER TABLE `scorecomment`
  ADD PRIMARY KEY (`idscore`);

--
-- Indexes for table `status_reserver`
--
ALTER TABLE `status_reserver`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`IdType`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcoment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `IdPrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `IdRe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;

--
-- AUTO_INCREMENT for table `status_reserver`
--
ALTER TABLE `status_reserver`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_room`
--
ALTER TABLE `type_room`
  MODIFY `IdType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD CONSTRAINT `cleaning_ibfk_2` FOREIGN KEY (`Idroom`) REFERENCES `room` (`Idroom`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`score`) REFERENCES `scorecomment` (`idscore`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Priority`) REFERENCES `priority` (`IdPrio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`status`) REFERENCES `priority` (`IdPrio`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Status`) REFERENCES `status_reserver` (`StatusId`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Idroom`) REFERENCES `room` (`Idroom`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`IdUser`) REFERENCES `user` (`IdUser`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`status_confirmpayment`) REFERENCES `payment_status` (`id_payment`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_4` FOREIGN KEY (`IdUser`) REFERENCES `user` (`IdUser`),
  ADD CONSTRAINT `room_ibfk_5` FOREIGN KEY (`Type`) REFERENCES `type_room` (`IdType`),
  ADD CONSTRAINT `room_ibfk_6` FOREIGN KEY (`Status`) REFERENCES `status_reserver` (`StatusId`),
  ADD CONSTRAINT `room_ibfk_7` FOREIGN KEY (`status_update_clean`) REFERENCES `cleaning_status` (`status_update_clean`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
