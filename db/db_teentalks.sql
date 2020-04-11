-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2020 at 12:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teentalks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `info_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`info_id`, `image`, `name`, `link`, `description`) VALUES
(1, '2cb777c0a22a55ad4b67c00bf768a949.jpg', 'LIVING WITH HIV/Aids', 'living_with_hiv', 'Telling someone you have HIV is your decision. You don’t have to disclose \r\nyour status to family, friends, or healthcare providers outside of your HIV \r\nhealthcare provider.'),
(2, '77939f26c080ac5be844fb77f9f04acc.jpg', 'PEOPLE LIVING WITH STIGMA', 'stigma', 'No matter who you are or where you are in your life, you deserve support, care, respect, information, and access to treatment. There may be services near your area; visit the link to connect with people for regional support. Joining groups for people who have HIV or connecting with others who have been diagnosed can also be helpful. Know that there is a community for you.'),
(3, '4d3305dbfd052da78ace44c96b58745d.jpg', 'GET A TEST', 'hiv_test', 'It’s important to know what you are comfortable with and conveying that to your partner(s); you deserve to be with people who respect your boundaries. E.g. “This would feel even better for me” or “Lemme show you how I like it” or “I need condoms to have sex”');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`) VALUES
(1, 'Lan', 'lanle', 'lanle', 'lekienlan@gmail.com'),
(2, 'Vira', 'vira', 'vira', 'vira@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
