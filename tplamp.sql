-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 21 fév. 2020 à 23:11
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tplamp`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `author` text NOT NULL,
  `title` text NOT NULL,
  `year` int(11) NOT NULL,
  `publisher` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `author`, `title`, `year`, `publisher`) VALUES
(53, 'Marty', 'ZoubiBadou', 1861, 'Google'),
(57, 'Sacha', 'Juste un IF', 2020, 'BroCorp'),
(48, 'Romain', 'L\'homme face à la machine', 2015, 'BroCorp'),
(47, 'Justin', 'Coder, pour les PRO', 2019, 'BroCorp'),
(46, 'Julien', 'Manger avec les pieds', 1983, 'BroCorp'),
(45, 'Polz', 'L\'art du troll', 2020, 'BroCorp'),
(58, 'Titou', 'Le Velo c\'est bien', 2018, 'Disney'),
(59, 'Pierre', 'IdÃ©e de merde', 2001, 'Disney'),
(42, 'Sacha', 'La MASSE', 2020, 'BroCorp'),
(55, 'Wakfu', 'L\'odyssÃ© de HUGO', 2016, 'Amakna'),
(56, 'Julien', 'Le farm', 555, 'Disney'),
(60, 'ValÃ©rie', 'Titre', 0, 'Google');

-- --------------------------------------------------------

--
-- Structure de la table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publisher`
--

INSERT INTO `publisher` (`id`, `name`) VALUES
(1, 'Google'),
(2, 'Amakna'),
(3, 'Disney'),
(4, 'BroCorp');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
