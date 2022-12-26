-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 09:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news1`
--

-- --------------------------------------------------------

--
-- Table structure for table `caty`
--

CREATE TABLE `caty` (
  `id` int(11) NOT NULL,
  `namecat` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caty`
--

INSERT INTO `caty` (`id`, `namecat`) VALUES
(5, 'International'),
(7, 'Technology'),
(8, 'Sport'),
(9, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `deaths` int(10) NOT NULL,
  `Recovered` int(10) NOT NULL,
  `infecteds` int(10) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`deaths`, `Recovered`, `infecteds`, `id`) VALUES
(10000, 60000, 40000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(555) NOT NULL,
  `Subject` text NOT NULL,
  `email` text NOT NULL,
  `content` varchar(444) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `Subject`, `email`, `content`) VALUES
(20, 'abed', 'about sport new ', 'kareemsalah10@gmail.com', 'hi admin this is a message by me'),
(21, 'ameer', 'asking about tech', 'ameeryaish33@gmail.com', 'contact with admin page');

-- --------------------------------------------------------

--
-- Table structure for table `nnews`
--

CREATE TABLE `nnews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `view` int(20) NOT NULL,
  `catid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nnews`
--

INSERT INTO `nnews` (`id`, `title`, `content`, `photo`, `time`, `view`, `catid`) VALUES
(55, 'Anthony Watson and Rhys Priestland', 'Anthony Watson and Rhys Priestland put Bath two tries up after 13 minutes des', '8331452.jpg', '2021-05-09', 0, 8),
(56, 'County Championship', '<h4>Gloucestershire beat Middlesex by seven wickets</h4>', '2940735.jpg', '2021-05-09', 0, 8),
(57, 'Olivia Mehaffey', 'Northern Ireland woman to turn professional later this month after NCAA Championship', '9645417.jpg', '2021-05-09', 0, 8),
(58, 'Madrid Open', 'Sabalenka shocks Ashleigh Barty to take title', '7524506.jpg', '2021-05-09', 0, 8),
(59, 'The beloved comfort food', 'The beloved comfort food poutine is a combination of French fries, cheese curds and a rich meaty gravy', '2279907.jpg', '2021-05-09', 0, 5),
(60, 'Kabul attack', 'Blast near school leaves at least 30 dead', '9856080.jpg', '2021-05-09', 0, 5),
(61, 'Covid', 'Macron calls on US to drop vaccine export bans', '9846467.jpg', '2021-05-09', 0, 5),
(64, 'Palestinians, Israel police clash at Al-Aqsa mosque', '<span style=\"color: rgb(101, 101, 101); font-family: TiemposHeadline, Georgia, &quot;Times New Roman&quot;, Times, serif; font-size: 18px; font-style: italic;\">Palestinian worshippers have clashed with Israeli police at the Al-Aqsa mosque compound, a major holy site sacred to Muslims and Jews</span>', '5763947.jpg', '2021-05-09', 0, 5),
(65, 'risk of old routers', 'Millions of people could be using outdated routers that put them at risk of being hacked, Which? has warned.', '7145203.jpg', '2021-05-09', 0, 7),
(66, 'VR future', '<span style=\"box-sizing: border-box; outline: 0px; color: rgb(38, 38, 38); font-family: ProximaNova, sans-serif; font-size: 20px;\">VR</span><span style=\"color: rgb(38, 38, 38); font-family: ProximaNova, sans-serif; font-size: 20px;\">&nbsp;has been getting a closer look in a world where remote work has become standard and&nbsp;</span><span style=\"box-sizing: border-box; outline: 0px; color: rgb(38, 38, 38); font-family: ProximaNova, sans-serif; font-size: 20px;\"><a href=\"https://www.cnet.com/news/were-all-on-the-holodeck-now-vr-headset-or-not/\" rel=\"follow\" class=\"c-shortcodeLink c-shortcodeLink-active\" style=\"box-sizing: border-box; outline: 0px; color: rgb(0, 0, 0); box-shadow: rgb(220, 12, 3) 0px 2px 0px -1px;\"><span style=\"box-sizing: border-box; outline: 0px;\">virtual life has become normal</span></a></span><span style=\"color: rgb(38, 38, 38); font-family: ProximaNova, sans-serif; font-size: 20px;\">&nbsp;even without headsets.</span>', '8889832.jpg', '2021-05-09', 0, 7),
(67, 'Twitter tells users to be nice and think twice before replying', 'Twitter will now prompt users to review and revise \"potentially harmful or offensive\" replies.', '6726349.jpg', '2021-05-09', 0, 7),
(68, 'Google\'s new Heads Up', 'Google is releasing a new feature called Heads Up, which has started rolling out to its Digital Wellbeing Android app.', '7349823.jpg', '2021-05-09', 0, 7),
(69, 'Singapore Airlines to Resume Flights Between Japan and US', 'Singapore Airlines has been steadily regrowing its US route network back to full strength', '1532287.jpg', '2021-05-09', 0, 9),
(70, 'Greece well-placed to lead European travel recovery', 'Two destinations, Greece, and Iceland, which have announced that they will welcome vaccinated visitors this summer', '6297058.jpg', '2021-05-09', 0, 9),
(71, 'England reveals â€˜green listâ€™ of safe travel destinations', 'Holidaymakers from England will be able to travel to Portugal and Israel from later this month under new guidelines issued by the government.', '8538544.jpg', '2021-05-09', 0, 9),
(72, 'Sanmar Delivers the First of a Pair of Unique Ice-breaking Tugboat!', '<h2 style=\"padding-bottom: 15px; border: 0px; box-sizing: border-box; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-weight: normal; outline: 0px; vertical-align: top; color: rgb(0, 0, 0); font-size: 22px; letter-spacing: -1px; line-height: 31px; font-family: &quot;Fira Sans Condensed&quot;, sans-serif;\">Sanmar has delivered the first of two unique high-performance ice-breaking tugboats to Finland-based operator Alfons HÃ¥kans specifically designed to operate all-year round in the harsh conditions of the northern Baltic Sea.</h2>', '9426239.jpg', '2021-05-09', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `type`) VALUES
(1, 'abood', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(12, 'ameer', '4a7d1ed414474e4033ac29ccb8653d9b', 'admin'),
(15, 'test', '0000', 'noadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caty`
--
ALTER TABLE `caty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nnews`
--
ALTER TABLE `nnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caty`
--
ALTER TABLE `caty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nnews`
--
ALTER TABLE `nnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
