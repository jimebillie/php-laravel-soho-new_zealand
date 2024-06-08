-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 02:12 PM
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
CREATE  PROCEDURE `CountMenuAllDay_Sub_id` (IN `main_topic_id` INT)   SELECT COUNT(id) as count_rows from menu_allday_sub WHERE id_main_topic = main_topic_id$$

CREATE  PROCEDURE `Delete_Gallery_By_id` (IN `__id` INT)   DELETE FROM gallery WHERE gallery.id = __id$$

CREATE  PROCEDURE `Delete_menuallday` (IN `get_id` INT)   DELETE FROM menu_allday WHERE id = get_id$$

CREATE  PROCEDURE `Delete_menuallday_sub_id` (IN `id_sub` INT)   DELETE FROM menu_allday_sub WHERE id = id_sub$$

CREATE  PROCEDURE `Delete_menuallday_sub_main_id` (IN `main_topic_id` INT)   DELETE FROM menu_allday_sub WHERE menu_allday_sub.id_main_topic = main_topic_id$$

CREATE  PROCEDURE `Delete_Menu_Cocktail_By_id` (IN `__id` INT)   DELETE FROM menu_cocktail WHERE menu_cocktail.id=__id$$

CREATE  PROCEDURE `Edit_MenuAllday_id` (IN `main_topic_id` INT, IN `main_topic_name` TEXT)   UPDATE menu_allday SET menu_allday.name_topic = main_topic_name WHERE menu_allday.id = main_topic_id$$

CREATE  PROCEDURE `Edit_MenuAllday_Sub_id_sub` (IN `id_sub` INT, IN `id_main` INT, IN `nameSub` TEXT, IN `detailSub` TEXT)   UPDATE menu_allday_sub SET menu_allday_sub.id_main_topic = id_main,menu_allday_sub.name_sub = NameSub ,
menu_allday_sub.detail_sub = detailSub WHERE menu_allday_sub.id = id_sub$$

CREATE  PROCEDURE `Edit_Menu_Cocktail_By_id` (IN `__id` INT, IN `__name` TEXT, IN `__detail` TEXT)   UPDATE menu_cocktail SET menu_cocktail.name_cocktail = __name,
menu_cocktail.detail_cocktail = __detail WHERE menu_cocktail.id = __id$$

CREATE  PROCEDURE `Insert_Gallery` (IN `__pic` TEXT)   INSERT INTO gallery (gallery.pic) VALUES (__pic)$$

CREATE  PROCEDURE `Insert_Menu_Cocktail` (IN `__name` TEXT, IN `__detali` TEXT)   INSERT INTO menu_cocktail (menu_cocktail.name_cocktail,
                          menu_cocktail.detail_cocktail)
                          VALUES
                          (__name,
                           __detali
                          )$$

CREATE  PROCEDURE `MenuAllDay_ALL` ()   SELECT * FROM menu_allday ORDER BY id DESC$$

CREATE  PROCEDURE `MenuAllDay_Sub_id` (IN `main_topic_id` INT)   SELECT * from menu_allday_sub WHERE id_main_topic = main_topic_id$$

CREATE  PROCEDURE `Select_Gallery_All` ()   SELECT * FROM gallery ORDER BY id DESC$$

CREATE  PROCEDURE `Select_MenuAllday_id` (IN `main_id` INT)   SELECT * FROM menu_allday WHERE menu_allday.id = main_id$$

CREATE  PROCEDURE `Select_MenuAllday_Sub_by_id_sub` (IN `id_sub` INT)   SELECT * FROM menu_allday_sub WHERE menu_allday_sub.id = id_sub$$

CREATE  PROCEDURE `Select_Menu_Cocktail_All` ()   SELECT * FROM menu_cocktail ORDER BY id DESC$$

CREATE  PROCEDURE `Select_Menu_Cocktail_By_id` (IN `__id` INT)   SELECT * FROM menu_cocktail WHERE menu_cocktail.id = __id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `pic` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pic`, `date_time`) VALUES
(9, '230321151953.avif', '2023-03-21 14:19:53'),
(10, '230321152003.avif', '2023-03-21 14:20:03'),
(11, '230321152014.avif', '2023-03-21 14:20:14'),
(13, '230321152038.avif', '2023-03-21 14:20:38'),
(14, '230321152045.avif', '2023-03-21 14:20:45');

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
(10, 'เมนูแนะนำ', '2023-03-21 07:00:51'),
(11, 'อาหารทานเล่น', '2023-03-21 06:59:54'),
(13, 'อาหารหวาน', '2023-03-21 14:53:20');

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
(9, '10', 'ตำยำกุ้ง', 'xxx / xxx / xxx / $60', '2023-03-21 07:45:39'),
(10, '10', 'แกงส้ม', 'xxx / xxx / xxx / $45', '2023-03-21 07:46:04'),
(11, '11', 'หนังไก่ทอด', 'xxx / xxx / xxx / $20', '2023-03-21 07:44:30'),
(13, '13', 'บัวลอย', 'xxx / xxx /xxx / $30', '2023-03-21 07:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `menu_cocktail`
--

CREATE TABLE `menu_cocktail` (
  `id` int(11) NOT NULL,
  `name_cocktail` text NOT NULL,
  `detail_cocktail` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_cocktail`
--

INSERT INTO `menu_cocktail` (`id`, `name_cocktail`, `detail_cocktail`, `date_time`) VALUES
(2, 'Cocktail  3', 'xxx / xxx / xxx / $23', '2023-03-21 09:02:08'),
(3, 'Cocktail  2', 'xxx / xxx / xxx / $22', '2023-03-21 09:01:57'),
(4, 'Cocktail  1', 'xxx / xxx / xxx / $21', '2023-03-21 09:01:47');

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `menu_cocktail`
--
ALTER TABLE `menu_cocktail`
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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu_allday`
--
ALTER TABLE `menu_allday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_allday_sub`
--
ALTER TABLE `menu_allday_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_cocktail`
--
ALTER TABLE `menu_cocktail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
