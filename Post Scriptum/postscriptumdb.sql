-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 10:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postscriptumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `sub_heading` text COLLATE utf8_slovenian_ci,
  `text` text COLLATE utf8_slovenian_ci NOT NULL,
  `category` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `sub_category` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `heading`, `sub_heading`, `text`, `category`, `sub_category`, `author_id`, `creation_date`, `views`) VALUES
(1, 'Jesmo l\' sami: NASA otkrila sedam "zemljolikih" planeta u jednom solarnom sistemu', 'Naučnici Američke svemirske agencije objavili su otkriće sedam planeta koje se veličinom, masom i sastavom mogu uporediti sa planetom Zemljom.', 'NASA je na današnjoj vanrednoj konferenciji za medije objavila da je oko jedne zvijezde otkrila čak sedam zemljolikih planeta. Naime, riječ je o sedam planeta koje kruže oko zvijezde TRAPPIST-1, a čak tri se nalaze u tzv. nastanjivoj zoni.\r\n\r\nNastanjiva zona je optimalna udaljenost planete i njene orbite u odnosu na zvijezdu kada je riječ o razvijanju života. Kada je riječ o sistemu TRAPPIS-1, najmanje jedna planeta pokazale je znakove obilnog posjedovanja tekuće vode.\r\n\r\nSolarni sistem TRAPPIST-1 nalazi se na oko 40 svjetlosnih godina od Zemlje, a u njenom centru je smješten istoimeni hladni crveni patuljak. Ova zvijezda je u poređenju sa našim suncem znatno manja, a na njenoj površini je zastupljena "niska" temperatura od oko 2.500 stepeni Celzija.\r\n\r\nPrema riječima NASA-inih naučnika, svih sedam planeta nalazi se u zaključanoj orbiti, slično kao što je Mjesec zaključan sa Zemljom. Drugim riječima, jedna strana planete je kontantno okrenuta prema svojoj zvijezdi tako da je jedna strana u vječnom danu, a druga u vječnom mraku.\r\n\r\nTrajanje jedne godine za svih sedam planeta je izuzetno kratko - od jednog dana do najviše 20 dana.\r\n\r\nImena planeta su TRAPPIST-1b, TRAPPIST-1c, TRAPPIST-1d, nastanjive TRAPPIST-1e, TRAPPIST-1g i TRAPPIST-1g i posljednja i najudaljenija TRAPPIST-1h.\r\n\r\nPrve tri planete otkrivene su u maju 2016. godine uz pomoć teleskopa TRAPPIST, a teleskop Spitzer i pet drugih teleskopa je korišteno u detektovanju ostatka sistema.\r\n\r\nEgzoplanete su postale vjerovatno najuzbudljiviji sektor astronomije u posljednjih 10 godina s obzirom da se nove planete van našeg sistema otkrivaju gotovo svakodnevno.\r\n\r\nOno što posljednje otkriće ističe iznad ostalih jeste brojčanost otkrivenih nastanjivih i zemljolikih planeta oko samo jedne jedine matične zvijezde što naučnicima daje izuzetan potisak i nadu u daljnjoj potrazi za "plodnim" egzoplanetama odnosno vanzemaljskim životom.', 'vijesti', 'vijesti', 1, '2017-02-22 21:18:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_edit_log`
--

CREATE TABLE `article_edit_log` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `edit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `text` tinytext COLLATE utf8_slovenian_ci NOT NULL,
  `date` datetime NOT NULL,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `article_id`, `author_id`, `text`, `date`, `upvotes`, `downvotes`) VALUES
(1, 1, 2, 'Cool story bro!', '2017-02-22 22:34:26', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_tag` varchar(10) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_tag`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_slovenian_ci NOT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `avatar_id`, `role_id`, `registration_date`) VALUES
(1, 'john', 'doe', 'jdoe1', '$2y$10$fHsmZfwNxspAxTx7TC2z4OMZhY5RPgAdenFxQyVTVU8QUoujOU3ai', 'email@example.com', NULL, 1, '2017-02-22'),
(2, 'jessica', 'doe', 'jessdoe', '$2y$10$hcHRJMil3KHWCe8FuVyd5OIEQT9DGUGrccT7wgm2hpsEcpKC3qzT6', 'jessdoe@example.com', NULL, 2, '2017-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`author_id`) USING BTREE;

--
-- Indexes for table `article_edit_log`
--
ALTER TABLE `article_edit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article_edit_log`
--
ALTER TABLE `article_edit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `article_edit_log`
--
ALTER TABLE `article_edit_log`
  ADD CONSTRAINT `article_edit_log_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_edit_log_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
