-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 22 août 2017 à 16:02
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cedruyne`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `alt` varchar(120) NOT NULL,
  `description` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `portfolio_id`, `alt`, `description`, `src`) VALUES
(1, 1, 'Mon site personnel - cedruyne.fr', '', 'web/include/2017/08/thumbs/cedruyne.png'),
(2, 2, 'image du site fictif Travel Agency', '', 'web/include/2017/08/thumbs/travel-agency.png');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `record_date` date NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `description`, `record_date`, `url`) VALUES
(1, 'cdebruyne', 'Développement front-end et back-end de mon site personnel', '2017-08-19', 'http://www.cedruyne.fr'),
(2, 'Travel Agency', 'Site internet fictif - travaux pratique intégration d\'une maquette HTML/CSS - Udemy', '2017-03-21', 'https://cedruyne.github.io/travel-agency/');

-- --------------------------------------------------------

--
-- Structure de la table `portfolioTechnology`
--

CREATE TABLE `portfolioTechnology` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolioTechnology`
--

INSERT INTO `portfolioTechnology` (`id`, `portfolio_id`, `technology_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 1, 4),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `portfolioWorks`
--

CREATE TABLE `portfolioWorks` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `works_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolioWorks`
--

INSERT INTO `portfolioWorks` (`id`, `portfolio_id`, `works_id`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technology`
--

INSERT INTO `technology` (`id`, `name`) VALUES
(1, 'HTML5/CSS3'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'MySQL');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `name`) VALUES
(1, 'Développement front-end'),
(2, 'Développement back-end'),
(3, 'Responsive Design');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolioTechnology`
--
ALTER TABLE `portfolioTechnology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technology_id` (`technology_id`),
  ADD KEY `portfolio_id` (`portfolio_id`) USING BTREE;

--
-- Index pour la table `portfolioWorks`
--
ALTER TABLE `portfolioWorks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_id` (`portfolio_id`) USING BTREE,
  ADD KEY `works_id` (`works_id`) USING BTREE;

--
-- Index pour la table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `portfolioTechnology`
--
ALTER TABLE `portfolioTechnology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `portfolioWorks`
--
ALTER TABLE `portfolioWorks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `portfolioTechnology`
--
ALTER TABLE `portfolioTechnology`
  ADD CONSTRAINT `portfoliotechnology_ibfk_1` FOREIGN KEY (`technology_id`) REFERENCES `technology` (`id`),
  ADD CONSTRAINT `portfoliotechnology_ibfk_2` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`);

--
-- Contraintes pour la table `portfolioWorks`
--
ALTER TABLE `portfolioWorks`
  ADD CONSTRAINT `portfolioworks_ibfk_1` FOREIGN KEY (`works_id`) REFERENCES `worksDone` (`id`),
  ADD CONSTRAINT `portfolioworks_ibfk_2` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
