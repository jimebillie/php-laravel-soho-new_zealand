-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soho`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CountMenuAllDay_Sub_id` (IN `main_topic_id` INT)   SELECT COUNT(id) as count_rows from menu_allday_sub WHERE id_main_topic = main_topic_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Delete_menuallday` (IN `get_id` INT)   DELETE FROM menu_allday WHERE id = get_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Delete_menuallday_sub_id` (IN `id_sub` INT)   DELETE FROM menu_allday_sub WHERE id = id_sub$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Delete_menuallday_sub_main_id` (IN `main_topic_id` INT)   DELETE FROM menu_allday_sub WHERE menu_allday_sub.id_main_topic = main_topic_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Edit_MenuAllday_id` (IN `main_topic_id` INT, IN `main_topic_name` TEXT)   UPDATE menu_allday SET menu_allday.name_topic = main_topic_name WHERE menu_allday.id = main_topic_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MenuAllDay_ALL` ()   SELECT * FROM menu_allday ORDER BY id DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MenuAllDay_Sub_id` (IN `main_topic_id` INT)   SELECT * from menu_allday_sub WHERE id_main_topic = main_topic_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Select_MenuAllday_id` (IN `main_id` INT)   SELECT * FROM menu_allday WHERE menu_allday.id = main_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_allday`
--

CREATE TABLE `menu_allday` (
  `id` int(11) NOT NULL,
  `name_topic` text NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_allday`
--

INSERT INTO `menu_allday` (`id`, `name_topic`, `date_add`) VALUES
(10, 'test 1', '2023-03-20 17:11:54'),
(11, 'test 2', '2023-03-20 17:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `menu_allday_sub`
--

CREATE TABLE `menu_allday_sub` (
  `id` int(11) NOT NULL,
  `id_main_topic` text NOT NULL,
  `name_sub` text NOT NULL,
  `detail_sub` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_allday_sub`
--

INSERT INTO `menu_allday_sub` (`id`, `id_main_topic`, `name_sub`, `detail_sub`, `date_time`) VALUES
(9, '10', 'Test sub 1', 'xxx / xxx / xxx', '2023-03-20 16:33:35'),
(10, '10', 'Test sub 2', 'xxx / xxx / xxx', '2023-03-20 16:33:43'),
(11, '11', 'Test sub 1', 'xxx / xxx / xxx', '2023-03-20 16:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `__username` varchar(255) NOT NULL,
  `__password` varchar(255) NOT NULL,
  `__branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `__username`, `__password`, `__branch`) VALUES
(1, 'admin', '@dmin1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_allday`
--
ALTER TABLE `menu_allday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_allday_sub`
--
ALTER TABLE `menu_allday_sub`
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
-- AUTO_INCREMENT for table `menu_allday`
--
ALTER TABLE `menu_allday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu_allday_sub`
--
ALTER TABLE `menu_allday_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
