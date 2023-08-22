-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weatherdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'Ansh', 'sharmaharry6862@gmail.com', 'This app is good!'),
(2, 'Ansh', 'sharmaharry6862@gmail.com', 'This app is good!'),
(3, 'Dushyant', 'dknov2000@gmail.com', 'This Weather website is almost fine....'),
(4, 'jass', 'Jassi12@gmail.com', 'this is best!');

-- --------------------------------------------------------

--
-- Table structure for table `save_news`
--

CREATE TABLE `save_news` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `urltoimg` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_news`
--

INSERT INTO `save_news` (`id`, `userid`, `title`, `urltoimg`, `description`, `url`) VALUES
(8, 4, 'Canada wildfires: At least 30,000 households told to evacuate as fires approach', 'https://ichef.bbci.co.uk/news/1024/branded_news/0645/production/_130850610_7ea1d8fc39180d5af2027c2368c0e53b03cf3f381397_1486_5323_29941000x563.jpg', 'Officials have restricted travel to Kelowna, a waterside city of 132,000 people.', 'http://www.bbc.co.uk/news/world-us-canada-66562610'),
(9, 4, 'Ecuador chooses president amid spike in violence', 'https://ichef.bbci.co.uk/news/1024/branded_news/DE5D/production/_130852965_mediaitem130852964.jpg', 'The campaign was overshadowed by a wave of shootings, including the assassination of a candidate.', 'http://www.bbc.co.uk/news/world-latin-america-66564320'),
(10, 2, 'California braces for imminent storm Hilary arrival', 'https://m.files.bbci.co.uk/modules/bbc-morph-news-waf-page-meta/5.3.0/bbc_news_logo.png', 'Storm Hilary makes landfall in Mexico', 'http://www.bbc.co.uk/news/live/world-us-canada-66566483'),
(14, 5, 'Lucy Letby to be sentenced for murders but may not appear in court', 'https://m.files.bbci.co.uk/modules/bbc-morph-news-waf-page-meta/5.3.0/bbc_news_logo.png', 'The UK', 'http://www.bbc.co.uk/news/live/uk-66551231'),
(15, 5, 'Israeli woman shot dead in attack on car in southern West Bank', 'https://ichef.bbci.co.uk/news/1024/branded_news/ECB3/production/_130859506_mediaitem130859500.jpg', 'A man was also injured when their car was targeted by gunfire on a highway south of Hebron.', 'http://www.bbc.co.uk/news/world-middle-east-66570478'),
(16, 6, 'Lucy Letby to be sentenced for murders but may not appear in court', 'https://m.files.bbci.co.uk/modules/bbc-morph-news-waf-page-meta/5.3.0/bbc_news_logo.png', 'The UK', 'http://www.bbc.co.uk/news/live/uk-66551231');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `otp`) VALUES
(1, 'Ansh', 'sharmaharry6862@gmail.com', '123', '93804'),
(2, 'Preet', 'h@gmail.com', '123', ''),
(3, 'Deep', 'deep@gmail.com', '456', ''),
(4, 'Dushyant', 'dknov2000@gmail.com', '123', ''),
(5, 'Harshit', 'hj252214@gmail.com', '123', ''),
(6, 'Jass', 'Jassi12@gmail.com', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_news`
--
ALTER TABLE `save_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `save_news`
--
ALTER TABLE `save_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
