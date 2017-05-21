-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Mai 2017 à 21:13
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meteogroland`
--

-- --------------------------------------------------------

--
-- Structure de la table `releves`
--

CREATE TABLE `releves` (
  `id` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `cate_crea` datetime NOT NULL,
  `date_maj` datetime NOT NULL,
  `ville` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `releves`
--

INSERT INTO `releves` (`id`, `valeur`, `cate_crea`, `date_maj`, `ville`, `user_id`) VALUES
(1, 65, '2017-05-03 00:00:00', '2017-05-18 00:00:00', 'muflin', 1),
(2, 15, '2017-05-04 00:00:00', '2017-05-29 00:00:00', 'groville', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `date_crea` datetime NOT NULL,
  `date_maj` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `date_crea`, `date_maj`) VALUES
(1, 'gerard', 'mentor', 'sacavin@gromail.grd', '2017-05-01 08:13:00', '2017-05-17 14:25:28'),
(2, 'jean mouloud', 'delatourette', 'jecepatrop@caramail.fr', '2017-05-15 13:34:40', '0000-00-00 00:00:00'),
(3, 'gerard', 'mentor', 'sacavin@gromail.grd', '2017-05-01 08:13:00', '2017-05-17 14:25:28'),
(4, 'jean mouloud', 'delatourette', 'jecepatrop@caramail.fr', '2017-05-15 13:34:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `date_crea` datetime NOT NULL,
  `date_maj` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `code_postal`, `date_crea`, `date_maj`) VALUES
(1, 'muflin', 54320, '2017-05-11 06:18:15', '2017-05-26 11:34:36'),
(2, 'groville', 67890, '2017-05-18 10:00:00', '2017-05-23 13:40:22');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `releves`
--
ALTER TABLE `releves`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `releves`
--
ALTER TABLE `releves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
