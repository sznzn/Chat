-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 07 juil. 2022 à 14:49
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tpphilippe`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(25) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `ville`, `age`, `sex`) VALUES
(1, 'Victoria', 'Avignon', 30, 1),
(2, 'Mac', 'Lyon', 10, 0),
(3, 'Axelle', 'Lille', 20, 1),
(4, 'Louis', 'Paris', 16, 0),
(16, 'Lucie', 'Rouen', 35, 1),
(17, 'Nathan', '', 0, 0),
(30, 'Rosie', 'Avignon', 16, 1),
(31, 'Jonathan', 'Nice', 56, 0),
(39, 'Veronica', 'Paris', 46, 1),
(48, 'Louis', 'Avignon', 30, 0);

-- --------------------------------------------------------

--
-- Structure de la table `mymessage`
--

CREATE TABLE `mymessage` (
  `id_message` int(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `msg` varchar(256) NOT NULL,
  `time_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mymessage`
--

INSERT INTO `mymessage` (`id_message`, `nom`, `msg`, `time_message`) VALUES
(1, 'Lou', 'Hello world!', '2022-07-07 12:00:35'),
(2, 'Lou', 'Je suis Lou, enchantÃ©e!', '2022-07-07 12:01:00'),
(14, 'Lou', 'c\'est marche, je suis contente!', '2022-07-07 13:40:15'),
(15, 'Lou', 'c\'est marche, je suis contente!', '2022-07-07 13:40:24'),
(16, 'Lou', 'cette fois je le refais.', '2022-07-07 13:41:35'),
(17, 'Lou', 'j\'ajoute des choses diffÃ©rentes.', '2022-07-07 13:41:51'),
(18, 'Lou', 'Bonjour', '2022-07-07 13:44:04'),
(19, 'Louis', 'Je m\'appelle Louis.', '2022-07-07 13:44:35'),
(20, 'Louis', 'Bonjour tout le monde', '2022-07-07 13:44:49'),
(21, 'Louis', 'å¯ä»¥è¯´ä¸­æ–‡å—ï¼Ÿ', '2022-07-07 13:46:31'),
(22, 'Louis', 'j\'espÃ¨re que Ã§a va marcher', '2022-07-07 13:51:14'),
(23, 'Louis', 'hello', '2022-07-07 13:51:43'),
(26, 'Louis', 'espÃ¨re', '2022-07-07 14:04:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mymessage`
--
ALTER TABLE `mymessage`
  ADD PRIMARY KEY (`id_message`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `mymessage`
--
ALTER TABLE `mymessage`
  MODIFY `id_message` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
