-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 jan. 2023 à 02:38
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hubert`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `pseudo`, `message`, `date_enregistrement`) VALUES
(1, '', '', '2022-05-04 04:42:27'),
(2, 'josa', 'bonjour tu va bien', '2022-05-04 04:46:45'),
(3, 'josa', 'bonjour tu va bien', '2022-05-04 04:47:10'),
(4, 'kabadi josaphat', 'salut je suis josaphat Ã§a va toit', '2022-05-04 04:48:41'),
(5, 'blaise', 'salut comment c\'est moi blaise', '2022-05-08 00:00:00'),
(6, 'blaise', 'salut comment c\'est moi blaise', '2022-05-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `pk` int(10) NOT NULL,
  `id` text NOT NULL,
  `md5` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`pk`, `id`, `md5`) VALUES
(11, 'mk', 'a5be02943d09f3a445c8b845b3252417'),
(10, 'Josaphat Kiamvu', '97e0716641826c22399f0f9fc863ac58'),
(12, 'hubert', '1fbf4e7475bffad10a92c08b1235ba56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
