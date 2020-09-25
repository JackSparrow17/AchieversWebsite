-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 02:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ignis_blog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `ID` int(11) NOT NULL,
  `Story_Title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comments` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment_author` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_table`
--

CREATE TABLE `email_table` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_story`
--

CREATE TABLE `featured_story` (
  `Post_ID` int(11) NOT NULL,
  `Image_Name` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Story_Title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Post_One` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Post_Two` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Post_Date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IGNIS',
  `Post_location` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_story`
--

INSERT INTO `featured_story` (`Post_ID`, `Image_Name`, `Story_Title`, `Post_One`, `Post_Two`, `Post_Date`, `Author`, `Post_location`) VALUES
(149, '5eb73c31aee7a0.53242860.jpeg', 'HELLO AGAIN', ' ', ' ', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb73c31af2d33.27462711.php'),
(150, '5eb73c6a830269.40077743.jpeg', 'HELLO AGAIN', 'Hello', ' ', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb73c6a833323.31736162.php'),
(151, '5eb73c847a0e44.42577142.jpeg', 'HELLO AGAIN', 'Hello fsv', ' ', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb73c847a4581.70071301.php'),
(152, '5eb73cdfeae087.46948037.jpeg', 'DFVG', 'Lorem Ipsum is simply dummy text', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/dfvg_5eb73cdfeb1c54.60745171.php'),
(153, '5eb73ceb24b397.15881624.jpeg', 'DFVG', 'Lorem Ipsum is simply dummy textLorem Ipsum is simply dummy text of the printing and typesetting industry.', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/dfvg_5eb73ceb24e366.80200588.php'),
(154, '5eb73cf29cc276.27761876.jpeg', 'DFVG', 'Lorem Ipsum is simply dummy textLorem Ipsum is simply dummy text of the printing and typesetting industry. bvvvvvvvvvv', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/dfvg_5eb73cf29cee22.62692419.php'),
(155, '5eb73d38cc09b1.52266522.jpeg', 'DFVG', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf  sdkllllllll      dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddddddd dddddddddd dddddddddddd dddddddddddddd ddddddddddddddddddd ddddddddddddddddd ddddddddddddd ddddddddddddddddddddd ddddddddddddddddd dddddddddddddddddddd dddddddddddddddddddd ddddddddddddddddd', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/dfvg_5eb73d38cc36b6.64094163.php'),
(156, '5eb7439454dd77.54038332.jpeg', 'DFVG', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf  sdkllllllll      dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddddddd dddddddddd dddddddddddd dddddddddddddd ddddddddddddddddddd ddddddddddddddddd ddddddddddddd ddddddddddddddddddddd ddddddddddddddddd dddddddddddddddddddd dddddddddddddddddddd ddddddddddddddddd', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/dfvg_5eb7439454fe21.40602114.php'),
(157, '5eb743f8bbd139.09781962.jpeg', 'HELLO AGAIN', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', '', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb743f8bbf193.21290596.php'),
(158, '5eb744191edbe2.74170168.jpeg', 'HELLO AGAIN', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb744191f0e83.18989302.php'),
(159, '5eb74a102af917.75668688.jpeg', 'HELLO AGAIN', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb74a102b2477.35492528.php'),
(160, '5eb74adf835999.40573864.jpeg', 'HELLO AGAIN', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb74adf837b68.46165148.php'),
(161, '5eb750ca534333.11389988.jpeg', 'HELLO AGAIN', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'dfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddddfkldfkdfklfdkjdfjkfklfdlkfdkf sdkllllllll dddddddddddddddd ddddddddddddd ddddddddddddd ddddddddddd dddddddddd dddddddddddddd ddddddddddddddd ddddddddddddddd ddddddddddddd ddddddddddddddd dddddd', 'Sat May 09 2020', 'IGNIS', '../generatedHTML/helloagain_5eb750ca535eb0.55484167.php');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `Password`) VALUES
(1, 'admin@ignisblog', 'helloAdmin@ignisblog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email_table`
--
ALTER TABLE `email_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `featured_story`
--
ALTER TABLE `featured_story`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `email_table`
--
ALTER TABLE `email_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `featured_story`
--
ALTER TABLE `featured_story`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
