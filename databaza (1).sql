-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 04:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(350) NOT NULL,
  `price` int(11) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `photo`, `isbn`, `name`, `description`, `price`, `link`) VALUES
(21, '', 218631484, 'rsghjyyyhcsr', 'aeghtdjytdb', 101, 'https://www.amazon.com/Harry-Potter-Sorcerers-Stone-Rowling/dp/0590353403/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1649696152&sr=8-1'),
(23, 'download.png', 211851864, 'afrgstheafrgth', 'artshyrgsrht', 56, '	https://www.amazon.com/Harry-Potter-Sorcerers-Stone-Rowling/dp/0590353403/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1649696152&sr=8-1'),
(24, 'astudyinscarlet.jpg', 5345687453, 'gsgadgadfgrsh', 'rsshtdfrgshtdsg', 26, ''),
(25, 'crackignthecodinginterview.jpg', 5384345384, 'afrgknralefiarg', 'aprgnbuaofmaef', 21, ''),
(27, 'lordoftheflies.jpg', 291784523, 'aegsrgnaeuulfe', 'aefrmniuaobfm', 74, ''),
(28, 'cleancode.jpg', 592514452, 'agbkjaminauurluh', 'aegbanfarbaepf', 15, ''),
(29, 'atomichabits.jpg', 25812626, 'rshtdjhshsrh', 'thdykyfhdgsr', 23, ''),
(30, 'divinecomedy.jpg', 291548415, 'eifnaeigueiafmoe', 'aegrgoiaefmirgoa', 20, ''),
(31, '', 5261568462, 'harry potter and the phylosopher stone', 'aeraahgoaemfrg', 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `role`) VALUES
(1, 'Arlind', 'Feta', 'arlind feta', 'arlindfeta@gmail.com', 'Arlindi!1', 'admin'),
(24, 'Arlind', 'Feta', 'DarkJocker', 'arlindfeta8@gmail.com', 'Arlind!1', 'user'),
(25, 'Arlind', 'Feta', 'arlindfeta85', 'arlindfeta85@gmail.com', 'Arlindfeta!1', 'user'),
(33, 'Arlind', 'Feta', 'arlindfeta100', 'arlindfeta100@gmail.com', 'arlind', 'user'),
(34, 'Arlind', 'Feta', 'roeli1', 'arlindfeta998@gmail.com', 'Arlind1!', 'user'),
(35, 'Arlind', 'Feta', 'roeli4', 'arlindfeta95@gmail.com', 'Arlind1!', 'user'),
(36, 'Arlind', 'Feta', 'arlindfeta858', 'arlindfeta858@gmail.com', 'Arlind1!', 'user'),
(37, 'Arlind', 'Feta', 'arlindfeta85521', 'arlindfeta85521@gmail.com', 'Arlind1!', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
