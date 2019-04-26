-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 26, 2019 at 02:33 PM
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
-- Database: `projet_squeeze`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `numero_question` text DEFAULT NULL,
  `bonne_reponse` text DEFAULT NULL,
  `reponse1` text DEFAULT NULL,
  `reponse2` text DEFAULT NULL,
  `reponse3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `numero_question`, `bonne_reponse`, `reponse1`, `reponse2`, `reponse3`) VALUES
(1, 'Lequel de ces dinosaures n\'a jamais existé?', '1', 'Germinator', 'L\'Iguanodon', 'Le Tyrannosaure', 'Le Vélociraptor'),
(2, 'Lequel de ces dinosaures était le plus grand?', '2', 'Le Diplodocus', 'Le Compsognatus', 'Le Diplodocus', 'Le Vélociraptor'),
(3, 'Que signifie Tyrannosaurs-rex?', '3', 'Lézard Tyran', 'Lézard méchant', 'Gros lézard', 'Lézard de Tyrannie'),
(4, 'Lequel de ces dinosaures avait le plus grand cou?', '4', 'Le Brachiosaure', 'Le Tyrannosaure', 'Le Vélociraptor', 'Le Galliminus'),
(5, 'Lequel de ces dinosaures existait?', '5', 'Le Ptérosaure', 'Le Cacanosaure', 'Le Pipinosaure', 'Le Paproprenosaure'),
(6, 'Le Tyrannosaure était?', '6', 'Carnivore', 'Herbivore', 'Omnivore', 'Autre'),
(7, 'A quelle allure pouvais aller le Vélociraptor?', '7', '100 kmh', '50 kmh', '150 kmh', '200 kmh'),
(8, 'Quel dinosaure avec une queue finissant par trois grosses boules qui le protégeaient?', '8', 'L\'Ankilosaure', 'Le Tyrannosaure', 'Le Deynosichus', 'Le Platéosaure'),
(9, 'Quel était le plus petit de ces dinosaures?', '9', 'Le Compsognatus', 'Le Vélociraptor', 'Le Deynosichus', 'Le Platéosaure'),
(10, 'Quel est le surnom du Tyrannosaurus-rex', '10', 'Le T-rex', 'Le Tyran', 'Le Tyranno', 'Le Tyty');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `score`) VALUES
(89, 'Kylian', 10),
(90, 'Kylian', 10),
(91, 'Kylian', 10),
(92, 'Kylian', 10),
(93, 'Kylian', 10),
(94, 'Kylian', 10),
(95, 'Kylian', 10),
(96, 'Kylian', 10),
(97, 'Kylian', 10),
(98, 'Kylian', 10),
(99, 'Kylian', 10),
(100, 'Kylian', 10),
(101, 'Kylian', 10),
(102, 'Kylian', 10),
(103, 'Kylian', 10),
(104, 'Kylian', 10),
(105, 'Kylian', 10),
(106, 'Kylian', 10),
(107, 'Kylian', 10),
(108, 'Kylian', 10),
(109, 'Kylian', 10),
(110, 'Kylian', 10),
(111, 'Kylian', 10),
(112, 'Kylian', 10),
(113, 'Kylian', 10),
(114, 'Kylian', 10),
(115, 'Kylian', 10),
(116, 'Kylian', 8),
(117, 'Kylian', 0),
(118, 'Kylian', 0),
(119, 'Kylian', 10),
(120, 'Kylian', 10),
(121, 'Kylian', 10),
(122, 'Kylian', 1),
(123, 'Kylian', 1),
(124, 'Kylian', 1),
(125, 'Kylian', 1),
(126, 'Kylian', 1),
(127, 'Kylian', 1),
(128, 'Kylian', 1),
(129, 'Kylian', 1),
(130, 'Kylian', 1),
(131, 'Kylian', 1),
(132, 'Kylian', 1),
(133, 'Kylian', 1),
(134, 'Kylian', 1),
(135, 'Kylian', 1),
(136, 'Kylian', 1),
(137, 'Kylian', 1),
(138, 'Kylian', 1),
(139, 'Kylian', 1),
(140, 'Kylian', 1),
(141, 'Kylian', 1),
(142, 'Kylian', 1),
(143, 'Kylian', 1),
(144, 'Kylian', 1),
(145, 'Kylian', 1),
(146, 'Kylian', 1),
(147, 'Kylian', 1),
(148, 'Kylian', 1),
(149, 'Kylian', 1),
(150, 'Kylian', 1),
(151, 'Kylian', 2),
(152, 'Kylian', 2),
(153, 'Kylian', 2),
(154, 'Kylian', 2),
(155, 'Kylian', 2),
(156, 'Kylian', 2),
(157, 'Kylian', 2),
(158, 'Kylian', 2),
(159, 'Kylian', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
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
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
