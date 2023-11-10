-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 mai 2023 à 23:01
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

CREATE TABLE `covoiturage` (
  `depart` varchar(20) NOT NULL,
  `arrivee` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `covoiturage`
--

INSERT INTO `covoiturage` (`depart`, `arrivee`, `date`, `heure`, `places`) VALUES
('0', '0', '2023-04-18', '01:18:00', 4),
('Brest', 'Meaux', '2023-04-19', '02:34:00', 5),
('lille', 'disney', '2023-04-27', '04:54:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`id`, `titre`, `libelle`, `date_creation`, `ordre`) VALUES
(1, 'PHP', 'php', '2023-04-06 20:40:24', 3),
(2, 'HTML', 'html', '2023-04-06 21:40:24', 1),
(3, 'CSS', 'css', '2023-04-06 22:40:24', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'dio', 'diobrando@gmail.com', '$2y$12$QitldIsz1cmEWiIYeo4B3eoU0.4j7M5L7SpMvdcY14LZ0q2B3m9N6', '::1', 'da9126d5be44cffa509d8586def4147a81e710451e954c796f27442bc9097ac7480cd05e995694a31364c0c1529437174e737e067e0fd2f7fa3f08a85a839a53', '2023-03-30 22:16:23'),
(2, 'kilua', 'kilua@gmail.com', '$2y$12$FGRCDWwLsW/PSwc3ZbAbSuPKPUlRwnmiNFxWDY0wPHe8djoATvcIS', '::1', 'a997a383222e8792b0da35d3cdb03310bf4973fa9e6b67263260ca6aa731f4078f4dc7a32793f3b41f8df523b63de0e22d08f9456490379bfee38ce9dad07dad', '2023-03-30 22:46:46'),
(3, 'yann', 'yann@gmail.com', '$2y$12$m4sb/IS6D9imIrLDWqS6GOhT3V54CU3vRAhvcXL7OD6jPpHnYNWo6', '::1', 'a236d31f19ac29b706ea2dc85199a9bb0045e4893b8663c65831d0feb1186d07baca66b9468e54614d809ac39bcd88a07103089e7564772f02051e3e0cf97726', '2023-03-30 22:55:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
