-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4');

-- --------------------------------------------------------

--
-- Table structure for table `signupinsert`
--

CREATE TABLE `signupinsert` (
  `userid` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Userlastname` varchar(50) NOT NULL,
  `Mobileno` varchar(50) NOT NULL,
  `Emailaddress` varchar(50) NOT NULL,
  `Cmsusername` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Day` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Male` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupinsert`
--

INSERT INTO `signupinsert` (`userid`, `Username`, `Userlastname`, `Mobileno`, `Emailaddress`, `Cmsusername`, `Password`, `Day`, `Month`, `Year`, `Male`) VALUES
(1, 'anikit', 'sharma', '9638527412', 'anikit@gmail.com', 'facebook/anikit', 'anikit', '05', '11', '1997', 'male'),
(2, 'ankit', 'yadav', '4124675451', 'ankit@gmail.com', 'facebook/ankit', '123', '22', '11', '1995', 'male'),
(3, 'ajay', 'sharma', '9638527412', 'ajay@gmail.com', 'facebook/ajay', 'ajay123', '11', '05', '1997', 'male'),
(4, 'jatin', 'sharma', '1234567894', 'jatin@gmail.com', 'facebook/jatin', 'Jatin123', '11', '05', '1997', 'male'),
(5, 'saurabh', 'dev', '4567891234', 'saurabh@gmail.com', 'facebook/saurabh', '@Saurabh', '11', '05', '1995', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `pname` varchar(10) NOT NULL,
  `puname` varchar(50) NOT NULL,
  `ppassword` varchar(10) NOT NULL,
  `plink` varchar(255) NOT NULL,
  `pname2` varchar(50) NOT NULL,
  `puname2` varchar(50) NOT NULL,
  `ppassword2` varchar(50) NOT NULL,
  `plink2` varchar(255) NOT NULL,
  `pname3` varchar(50) NOT NULL,
  `puname3` varchar(50) NOT NULL,
  `ppassword3` varchar(50) NOT NULL,
  `plink3` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `pname`, `puname`, `ppassword`, `plink`, `pname2`, `puname2`, `ppassword2`, `plink2`, `pname3`, `puname3`, `ppassword3`, `plink3`, `email`, `mail`, `password`, `contactno`, `posting_date`) VALUES
(13, 'Anuj', 'Kumar', '', '', '', '', '', '', '', '', '', '', '', '', 'phpgurukulteam@gmail.com', '', 'Test@123', '1234567890', '2021-08-09 18:30:00'),
(15, 'cds cds', 'dev', 'facebook', 'csd csd', '123csd', 'https://en.wikipedia.org/wiki/Chief_of_Defence_Staff_(India)', '', '', '', '', '', '', '', '', 'aa@gmail.com', 'ac@gmail', '@cds12', '1234567896', '2022-11-28 07:04:58'),
(16, 'sss', 'sss', '', '', '', '', '', '', '', '', '', '', '', '', 'sss@gmail', '', '@Ssss1', '7894561237', '2022-11-28 07:20:17'),
(17, 'aaaa', 'dfvsd', 'facebook', '', '', '', '', '', '', '', '', '', '', '', 'po@gmail', 'ac@gmail', '@Aaaa1', '7894561237', '2022-11-28 08:25:22'),
(18, 'ajay', 'sharma', 'youtube', 'ajay', '123', 'https://www.youtube.com/watch?v=A2R-CMMyp64', 'youtube', 'anikit', '123', 'https://www.youtube.com/watch?v=A2R-CMMyp64', 'INSTA', 'ANIKIT', '123', 'https://www.youtube.com/watch?v=A2R-CMMyp64ssssss', 'ajay@gmail.com', 'ajay@gmail.com', '@Ajay1', '7894561237', '2022-11-30 06:43:34'),
(19, 'jatin', 'sharma', 'facebook', 'jatin', '1234', 'jatin', 'youtube', 'jatin', '1234', 'https://www.youtube.com/watch?v=A2R-CMMyp64', 'INSTA', 'jatin', '1234', 'https://www.youtube.com/watch?v=A2R-CMMyp64ssssss', 'jatin@gmail.com', 'jatin@gmail.com', 'Jatin@123', '1234567896', '2022-11-30 07:06:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupinsert`
--
ALTER TABLE `signupinsert`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signupinsert`
--
ALTER TABLE `signupinsert`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
