-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 26, 2019 at 02:24 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pikitia`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `com` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `com`, `user_id`, `image_id`) VALUES
(44, 'Woaw comment je suis beau !', 22, 110),
(45, 'Chut !', 22, 108),
(46, 'c\'est pas ouf ouf ', 16, 117);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_name` text DEFAULT NULL,
  `compteur_like` int(1) DEFAULT NULL,
  `image_lien` text DEFAULT NULL,
  `image_file_size` int(11) DEFAULT NULL,
  `image_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` text NOT NULL,
  `avatar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `compteur_like`, `image_lien`, `image_file_size`, `image_date`, `user_id`, `user_name`, `avatar`) VALUES
(106, NULL, NULL, '../img/user-img/16_food.gif', NULL, '2019-04-26 14:03:09', 16, 'root', NULL),
(107, NULL, NULL, '../img/user-img/16_food.gif', NULL, '2019-04-26 14:03:16', 16, 'root', 1),
(108, NULL, NULL, '../img/user-img/22_[scontent-mrs2-1.cdninstagram.com][940]463419812761094499166074826589046967967341n.jpg', NULL, '2019-04-26 14:04:29', 22, 'Baptook', 1),
(109, NULL, NULL, '../img/user-img/22_[scontent-mrs2-1.cdninstagram.com][971]366151454612106543236402207161179195834368n.jpg', NULL, '2019-04-26 14:04:36', 22, 'Baptook', NULL),
(110, NULL, NULL, '../img/user-img/22_[scontent-mrs2-1.cdninstagram.com][435]3059248920513492318001528408284834320875520n.jpg', NULL, '2019-04-26 14:04:40', 22, 'Baptook', NULL),
(111, NULL, NULL, '../img/user-img/18_reflexion-paysage-01-beaurecueil-jardin-sainte-victoire-morvant-et-moingeon.jpg', NULL, '2019-04-26 14:05:23', 18, 'roger', 1),
(112, NULL, NULL, '../img/user-img/18_philippines_volcantaal_10.jpg', NULL, '2019-04-26 14:05:28', 18, 'roger', NULL),
(113, NULL, NULL, '../img/user-img/18_moderne.jpg', NULL, '2019-04-26 14:05:33', 18, 'roger', NULL),
(114, NULL, NULL, '../img/user-img/18_110961260882448p.jpeg', NULL, '2019-04-26 14:06:00', 18, 'roger', NULL),
(115, NULL, NULL, '../img/user-img/23_19030453_10216168986960312_8705915398778069080_n.jpg', NULL, '2019-04-26 14:12:53', 23, 'Emi-lie', 1),
(116, NULL, NULL, '../img/user-img/23_on-top-of-earth.jpg', NULL, '2019-04-26 14:13:16', 23, 'Emi-lie', NULL),
(117, NULL, NULL, '../img/user-img/23_303400_4266051692442_155468797_n.jpg', NULL, '2019-04-26 14:13:33', 23, 'Emi-lie', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`) VALUES
(16, 'root', 'root', 'root', 'root@root.com', 'root'),
(18, 'roger', 'roger', 'roger', 'roger@saussice.com', 'roger'),
(21, 'InhumanRampage', 'Inhuman', 'Rampage', 'inhuman@truc.mail.com', 'azerty'),
(22, 'Baptook', 'Couavoux', 'Baptiste', 'bccoauvoux@gmail.com', '123soleil'),
(23, 'Emi-lie', 'Emilie', 'Chabry', 'chabry.emilie@gmail.com', 'azerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
