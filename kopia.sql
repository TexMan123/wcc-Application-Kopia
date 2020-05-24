-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 24 mai 2020 à 22:32
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kopia`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_region` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id`, `nom`, `id_region`) VALUES
(1, 'Ambatondrazaka', 1),
(2, 'Amparafaravola', 1),
(3, 'Ambohimangakely', 2),
(4, 'Anjozorobe', 2),
(5, 'Antanifotsy', 3),
(6, 'Alakamisy', 3);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(255) NOT NULL,
  `nombres` int(255) NOT NULL,
  `createdAt` date NOT NULL,
  `reponse` tinyint(1) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `nombres`, `createdAt`, `reponse`, `id_user`) VALUES
(6, 2, '2020-05-24', 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `fonctionnaire`
--

CREATE TABLE `fonctionnaire` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_commune` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fonctionnaire`
--

INSERT INTO `fonctionnaire` (`id`, `nom`, `pass`, `id_commune`) VALUES
(35, 'Vero', '$2y$10$tgClyEtcMsvrXnZWAafwCeQKgulkd2lXE.LIKGmIu1sRItlzxY5cO', 3);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom`) VALUES
(1, 'Alaotra-mangoro'),
(2, 'Analamanga'),
(3, 'Vakinakaratra');

-- --------------------------------------------------------

--
-- Structure de la table `signatures`
--

CREATE TABLE `signatures` (
  `id` int(255) NOT NULL,
  `signe` varchar(255) NOT NULL,
  `demande` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `signatures`
--

INSERT INTO `signatures` (`id`, `signe`, `demande`, `id_user`) VALUES
(6, 'SignVero', 6, 12);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `pere` varchar(255) NOT NULL,
  `lieuNaisP` varchar(255) NOT NULL,
  `dateNP` date NOT NULL,
  `mere` varchar(255) NOT NULL,
  `lieuNaisM` varchar(255) NOT NULL,
  `dateNM` date NOT NULL,
  `DateN` date NOT NULL,
  `lieuNais` varchar(255) NOT NULL,
  `heure` time(5) NOT NULL,
  `id_commune` int(255) NOT NULL,
  `createdAt` date NOT NULL,
  `createdTime` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `sexe`, `pere`, `lieuNaisP`, `dateNP`, `mere`, `lieuNaisM`, `dateNM`, `DateN`, `lieuNais`, `heure`, `id_commune`, `createdAt`, `createdTime`) VALUES
(12, 'Jean', 'Luc', 'Lehilahy', 'Eric tahiana', 'Majunga', '1960-06-14', 'RAVALISOA sariaka', 'Befelatanana', '1967-03-13', '1992-05-12', 'Befelatanana', '10:54:00.00000', 3, '2020-05-22', '22:03:00.00000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `fonctionnaire`
--
ALTER TABLE `fonctionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_commune` (`id_commune`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_commune` (`id_commune`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `fonctionnaire`
--
ALTER TABLE `fonctionnaire`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `fonctionnaire`
--
ALTER TABLE `fonctionnaire`
  ADD CONSTRAINT `fonctionnaire_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id`);

--
-- Contraintes pour la table `signatures`
--
ALTER TABLE `signatures`
  ADD CONSTRAINT `signatures_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
