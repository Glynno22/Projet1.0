-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 17 avr. 2024 à 20:49
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `GIMMOBILIER`
--

-- --------------------------------------------------------

--
-- Structure de la table `apartement`
--

CREATE TABLE `apartement` (
  `id_apartement` int(11) NOT NULL COMMENT 'identifiant de la table',
  `name_apart` varchar(50) NOT NULL COMMENT 'nom de l''appartement',
  `location` int(1) NOT NULL DEFAULT 1 COMMENT 'cet atribut peut avoir deux valeurs \r\n(1) si l''appartement peut etre loue et\r\n(0) si non',
  `prix_Par_Nuit` int(11) NOT NULL DEFAULT 0 COMMENT 'prix ...',
  `prix_par_heur` int(11) NOT NULL,
  `ville` varchar(100) NOT NULL COMMENT 'ville dans la quelle se trouve l''appart',
  `localisation` varchar(200) NOT NULL COMMENT 'quatier ou se trouve l''appart',
  `description` text NOT NULL COMMENT 'texte qui decrit l''appartement',
  `douche` int(11) NOT NULL COMMENT 'nombre de douche de l''appart',
  `chambre` int(11) NOT NULL COMMENT 'nombre de chambre de l''appart',
  `cuisine` int(11) NOT NULL COMMENT 'nombre de cuisine de l''appart',
  `parking` varchar(3) NOT NULL,
  `photo` varchar(50) NOT NULL COMMENT 'url de la photo de l''appartement',
  `create_at_apart` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'date a laquelle l''apartement a ete inserer',
  `update_at_apart` datetime DEFAULT '0000-00-00 00:00:00' COMMENT 'date de la dernierre modification',
  `rmva` int(1) NOT NULL DEFAULT 1 COMMENT 'attribut qui dis si un appartement a ete modifier ou pas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apartement`
--

INSERT INTO `apartement` (`id_apartement`, `name_apart`, `location`, `prix_Par_Nuit`, `prix_par_heur`, `ville`, `localisation`, `description`, `douche`, `chambre`, `cuisine`, `parking`, `photo`, `create_at_apart`, `update_at_apart`, `rmva`) VALUES
(1, 'hhhhhhhhhhhh', 0, 888800, 0, '', '', 'hjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 0, 0, 0, '0', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2024-03-12 16:59:29', '0000-00-00 00:00:00', 1),
(2, 'fabien', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-12 17:23:50', '0000-00-00 00:00:00', 0),
(3, 'fabien lorent ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-12 18:00:46', '0000-00-00 00:00:00', 0),
(4, 'amanda', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-12 18:05:06', '2024-03-12 21:22:01', 1),
(5, 'werty', 0, 0, 0, '', '', 'bonjour jogo', 0, 0, 0, '0', 'jogo.png', '2024-03-12 18:05:06', '2024-03-12 23:25:46', 1),
(6, 'fabien lorent JU\'ju ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-12 18:05:06', '0000-00-00 00:00:00', 1),
(7, 'fortune', 0, 1, 0, '', '', 'bonsoir fortune', 0, 0, 0, '0', 'fortune.png', '2024-03-12 18:05:21', '2024-03-13 09:22:16', 1),
(9, 'amanda lorent JU\'ju ', 0, 66200, 0, '', '', 'br', 0, 0, 0, '0', 'mae png', '2024-03-12 18:08:27', '2024-03-15 16:04:39', 1),
(10, 'amanda lorent JU\'ju ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-12 19:30:00', '0000-00-00 00:00:00', 1),
(11, 'amanda lorent J\'ju ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-03-15 16:03:22', '0000-00-00 00:00:00', 1),
(12, 'amanda lorent J\'ju ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-04-05 08:31:05', '0000-00-00 00:00:00', 1),
(13, 'amanda lorent iiiiiiiiiiiooooooo J\'ju ', 1, 30000, 0, '', '', 'asdfcgvhbjnkmjhgfdcwesdfcgvb', 0, 0, 0, '0', 'dftyuihgfgh', '2024-04-05 08:31:18', '0000-00-00 00:00:00', 0),
(14, 'amanda', 1, 1000, 100, 'DOUALA', 'Ndogbon', 'bla bla bla', 2, 5, 1, 'oui', 'photo.png', '2024-04-17 19:34:24', '0000-00-00 00:00:00', 1),
(15, 'amanda', 1, 1000, 100, 'DOUALA', 'Ndogbon', 'bla bla bla', 2, 5, 1, 'oui', 'photo.png', '2024-04-17 19:34:25', '0000-00-00 00:00:00', 1),
(16, 'amanda', 1, 1000, 100, 'DOUALA', 'Ndogbon', 'bla bla bla', 2, 5, 1, 'oui', 'photo.png', '2024-04-17 19:35:02', '0000-00-00 00:00:00', 1),
(17, 'amanda', 1, 1000, 100, 'DOUALA', 'Ndogbon', 'bla bla bla', 2, 5, 1, 'oui', 'photo.png', '2024-04-17 19:35:03', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_appart`
--

CREATE TABLE `reservation_appart` (
  `id_reservation_appart` int(11) NOT NULL COMMENT 'identifiant de la table reservatio',
  `date_debut_a` datetime NOT NULL COMMENT ' date de debut de la reservation',
  `date_fin_a` datetime NOT NULL COMMENT 'date de fin de la reservation',
  `create_at_reserv` datetime NOT NULL COMMENT 'date de l''insertion de l''enregistrement dans la base de donnee',
  `update_at_reserv` datetime DEFAULT '0000-00-00 00:00:00' COMMENT 'date de la derniere modification sur un enregistrement precis',
  `fk_apartement` int(11) NOT NULL COMMENT 'cet atrribut represente la cle primaire de la table apartement',
  `fk_utili` int(11) NOT NULL COMMENT 'cet attribut represente la cle primaire de la table utilisateur',
  `rmv_reservation_a` int(11) NOT NULL DEFAULT 1 COMMENT 'cet attribut permet de dire si un enregistrement a ete suprimer(0) ou non(1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation_appart`
--

INSERT INTO `reservation_appart` (`id_reservation_appart`, `date_debut_a`, `date_fin_a`, `create_at_reserv`, `update_at_reserv`, `fk_apartement`, `fk_utili`, `rmv_reservation_a`) VALUES
(1, '2024-03-06 00:00:00', '2024-03-08 00:00:00', '2024-03-02 00:00:00', '2024-03-13 12:37:57', 5, 12, 1),
(2, '2024-03-13 11:08:40', '2024-03-13 11:08:40', '2024-03-13 11:08:40', NULL, 10, 12, 1),
(3, '2024-03-13 11:10:28', '2024-03-13 11:10:28', '2024-03-13 11:10:28', '0000-00-00 00:00:00', 2, 12, 0),
(4, '2024-03-13 11:27:41', '2024-03-13 11:27:41', '2024-03-13 11:27:41', '0000-00-00 00:00:00', 4, 12, 0),
(5, '2022-07-03 10:23:34', '2021-07-07 10:23:34', '2024-03-13 11:43:39', '0000-00-00 00:00:00', 3, 12, 1),
(6, '2022-07-03 10:23:34', '2021-07-07 10:23:34', '2024-03-13 19:18:12', '0000-00-00 00:00:00', 3, 13, 1),
(7, '2022-07-03 10:23:34', '2021-07-07 10:23:34', '2024-03-14 15:22:32', '0000-00-00 00:00:00', 3, 13, 1),
(8, '2022-07-03 10:23:34', '2021-07-07 10:23:34', '2024-04-05 07:54:15', '0000-00-00 00:00:00', 3, 13, 1),
(9, '2222-07-30 10:23:34', '2021-07-07 10:23:34', '2024-04-05 07:55:42', '0000-00-00 00:00:00', 3, 13, 0);

-- --------------------------------------------------------

--
-- Structure de la table `resevation_vehicule`
--

CREATE TABLE `resevation_vehicule` (
  `id_reservation_vehicule` int(11) NOT NULL COMMENT 'identifiant de la table',
  `date_debut_vehicule` datetime NOT NULL COMMENT 'date de debut de la reservation du vehicule',
  `date_fin_vehicule` datetime NOT NULL COMMENT 'date de fin de la reservation du vehicule',
  `create_at_rv` datetime NOT NULL COMMENT 'date a laquelle la reservation a ete faite',
  `update_at_rv` datetime DEFAULT '0000-00-00 00:00:00' COMMENT 'date a laquelle la reservation a ete modifier',
  `fk_utilisateur` int(11) NOT NULL COMMENT 'cle primaire de la table utilisateur',
  `fk_vehicule` int(11) NOT NULL COMMENT 'cle primaire de la table vehicule',
  `rmv_rv` int(11) NOT NULL DEFAULT 1 COMMENT 'attribut qui permet de dire si un attribut a ete suprimer(0) ou pas(1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `resevation_vehicule`
--

INSERT INTO `resevation_vehicule` (`id_reservation_vehicule`, `date_debut_vehicule`, `date_fin_vehicule`, `create_at_rv`, `update_at_rv`, `fk_utilisateur`, `fk_vehicule`, `rmv_rv`) VALUES
(8, '2024-03-13 20:58:14', '2024-03-13 20:58:14', '2024-03-13 20:58:14', '0000-00-00 00:00:00', 12, 1, 1),
(9, '2024-04-14 20:58:14', '2024-05-13 20:58:14', '2024-03-13 21:09:40', '2024-03-14 07:48:17', 12, 3, 0),
(10, '2024-03-13 20:58:14', '2024-04-14 20:58:14', '2024-03-13 21:09:40', '0000-00-00 00:00:00', 13, 3, 1),
(11, '2224-03-13 20:58:14', '2024-04-14 20:58:14', '2024-04-04 22:39:49', '0000-00-00 00:00:00', 13, 3, 1),
(12, '2224-03-13 20:58:14', '2024-04-14 20:58:14', '2024-04-04 22:39:55', '2024-04-04 22:41:25', 13, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL COMMENT 'identifiant de la table',
  `nam` varchar(50) NOT NULL COMMENT 'nom de l''utilisateur',
  `email` varchar(50) NOT NULL COMMENT 'email de l''utilisateur',
  `passwd` varchar(3000) NOT NULL COMMENT 'mot de passe de l''utilsateur',
  `create_at` datetime NOT NULL COMMENT 'date d''insertion des informations',
  `update_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT 'date de modification des informations',
  `rmv` int(11) NOT NULL DEFAULT 1 COMMENT 'attribut qui permet de dire si un attribut a ete suorimer(0) ou \r\npas(1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nam`, `email`, `passwd`, `create_at`, `update_at`, `rmv`) VALUES
(12, 'amana', 'clra', '12345jk', '2024-03-12 14:18:15', '2024-03-14 07:50:35', 0),
(13, 'amanda', 'jogo', '1234r', '2024-03-13 16:55:52', '0000-00-00 00:00:00', 0),
(14, 'Juioro', 'Nzoui@mail.com', '12345jk', '2024-03-15 16:00:04', '0000-00-00 00:00:00', 1),
(17, 'Jor', 'Nzoui@mail.com', '12345jk', '2024-03-15 16:05:34', '0000-00-00 00:00:00', 0),
(18, 'Jorjo', 'Nzoui@mail.com', '12345jk', '2024-04-04 22:00:09', '0000-00-00 00:00:00', 0),
(19, 'biiooojo', 'Nzoui@mail.com', '12345jk', '2024-04-04 22:00:39', '0000-00-00 00:00:00', 0),
(20, 'jogo bibiche amanda', 'Nzoui@mail.com', 'amanda', '2024-04-04 22:13:30', '0000-00-00 00:00:00', 1),
(21, 'echo bn', 'ech@qwe', 'asd', '2024-04-08 20:19:13', '0000-00-00 00:00:00', 0),
(27, 'echdfghjkl bn', 'ec@qwe', 'asd', '2024-04-08 20:21:12', '0000-00-00 00:00:00', 1),
(28, 'echdfgkl bn', 'ec@qwhjke', 'asd', '2024-04-08 20:23:28', '0000-00-00 00:00:00', 1),
(47, 'amcvbanda', 'jogoo', 'abbnc', '2024-04-08 22:24:57', '0000-00-00 00:00:00', 1),
(49, 'anda', 'oo', '1fc2c85be667c2ad0061a9fa04df66dd15c09827', '2024-04-08 22:26:19', '0000-00-00 00:00:00', 1),
(50, 'jogo', 'kk', '1fc2c85be667c2ad0061a9fa04df66dd15c09827', '2024-04-08 22:30:01', '0000-00-00 00:00:00', 1),
(81, 'jogssso', 'ossk', 'nn', '2024-04-08 22:43:15', '0000-00-00 00:00:00', 1),
(82, 'jogsso', 'ssk', 'nnn', '2024-04-08 22:43:31', '0000-00-00 00:00:00', 0),
(87, 'jogssssso', 'sssk', 'nnn', '2024-04-08 22:43:47', '0000-00-00 00:00:00', 1),
(88, 'jsso', 'ppk', '$2y$10$5kM6Zy2bWdwpjTOJdw0I6uIgW.T68.ZhGrHbi6yquwKB4c/NWCSSW', '2024-04-08 22:44:15', '0000-00-00 00:00:00', 1),
(91, 'jo0g0o', 'amanda', '$2y$10$Uc4HN3oz5xpCOu/2hiur5eT6UDaeVuZLjQhjBAKEU.uCwlaAv1vuS', '2024-04-08 22:56:00', '0000-00-00 00:00:00', 1),
(93, 'claraa', 'claraa', 'dc6e7d9281d2166aa4993c27c07b27ea6d08e628', '2024-04-08 23:13:47', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL COMMENT 'identifiane de la table',
  `model` varchar(50) NOT NULL COMMENT 'model du vehicule',
  `brand` varchar(50) NOT NULL COMMENT 'marque du vehicule',
  `type` varchar(50) NOT NULL COMMENT 'type du vehicule',
  `capacite` varchar(50) NOT NULL COMMENT 'capacite du vehicule',
  `create_at_vehicule` datetime NOT NULL COMMENT 'date d''enregistrement du vehicule',
  `update_at_vehicule` datetime DEFAULT '0000-00-00 00:00:00' COMMENT 'derniere date de modification dea parametres du vehicule',
  `rmvv` int(1) NOT NULL DEFAULT 1 COMMENT 'attribut qui permet de dire si le vehicule est suprimer(0) ou pas(1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `model`, `brand`, `type`, `capacite`, `create_at_vehicule`, `update_at_vehicule`, `rmvv`) VALUES
(1, 'toyota', 'pego', 'v8', '200c', '2024-03-13 00:00:00', NULL, 1),
(2, 'toyota', 'pego', 'v8', '200c', '2024-03-13 10:26:35', '0000-00-00 00:00:00', 1),
(3, 'mercedes', 'nike', 'v9', '300p', '2024-03-13 10:26:58', '2024-03-13 11:38:04', 0),
(4, 'mercedes', 'nike', 'v9', '300p', '2024-03-15 16:01:59', '2024-03-15 16:02:32', 1),
(5, 'rang hover 0t', 'peg', 'v', '200c7', '2024-04-04 22:33:04', '0000-00-00 00:00:00', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apartement`
--
ALTER TABLE `apartement`
  ADD PRIMARY KEY (`id_apartement`);

--
-- Index pour la table `reservation_appart`
--
ALTER TABLE `reservation_appart`
  ADD PRIMARY KEY (`id_reservation_appart`),
  ADD KEY `util` (`fk_utili`),
  ADD KEY `apart` (`fk_apartement`);

--
-- Index pour la table `resevation_vehicule`
--
ALTER TABLE `resevation_vehicule`
  ADD PRIMARY KEY (`id_reservation_vehicule`),
  ADD KEY `pk_uti` (`fk_utilisateur`),
  ADD KEY `pk_vehicule` (`fk_vehicule`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `nam` (`nam`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apartement`
--
ALTER TABLE `apartement`
  MODIFY `id_apartement` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la table', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservation_appart`
--
ALTER TABLE `reservation_appart`
  MODIFY `id_reservation_appart` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la table reservatio', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `resevation_vehicule`
--
ALTER TABLE `resevation_vehicule`
  MODIFY `id_reservation_vehicule` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la table', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la table', AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiane de la table', AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation_appart`
--
ALTER TABLE `reservation_appart`
  ADD CONSTRAINT `reservation_appart_ibfk_2` FOREIGN KEY (`fk_utili`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `reservation_appart_ibfk_3` FOREIGN KEY (`fk_apartement`) REFERENCES `apartement` (`id_apartement`);

--
-- Contraintes pour la table `resevation_vehicule`
--
ALTER TABLE `resevation_vehicule`
  ADD CONSTRAINT `resevation_vehicule_ibfk_1` FOREIGN KEY (`fk_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `resevation_vehicule_ibfk_2` FOREIGN KEY (`fk_vehicule`) REFERENCES `vehicule` (`id_vehicule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
