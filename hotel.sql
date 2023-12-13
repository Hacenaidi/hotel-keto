-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 déc. 2023 à 20:53
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `mod2passe` varchar(30) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mod2passe`, `nom`, `prenom`) VALUES
(1, 'hacenaidi4455@gamil.com', 'hacen', 'azerty', 'aidi');

-- --------------------------------------------------------

--
-- Structure de la table `chamber`
--

CREATE TABLE `chamber` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prix` decimal(9,3) NOT NULL,
  `nb_place` int(11) NOT NULL,
  `url_image` varchar(80) NOT NULL,
  `disponibilite` int(1) NOT NULL,
  `numero_chamber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chamber`
--

INSERT INTO `chamber` (`id`, `nom`, `prix`, `nb_place`, `url_image`, `disponibilite`, `numero_chamber`) VALUES
(1, 'Premium King Room', 200.000, 5, 'images/blog2.jpg', 0, 101),
(6, 'Double Economique', 180.000, 2, 'images/room4.jpg', 1, 106),
(7, 'Double Confort', 60.000, 3, 'images/room2.jpg', 1, 107),
(8, 'lits Jumeaux Classiq', 80.000, 1, 'images/gallery5.jpg', 0, 108),
(9, 'Quadruple Familiale', 170.000, 3, 'images/gallery2.jpg', 1, 109),
(10, 'Quadruple Familiale', 250.000, 4, 'images/gallery7.jpg', 1, 110),
(11, 'Double Confort', 100.000, 2, 'images/', 1, 111),
(12, 'Double Economique', 100.000, 1, 'images/blog3.jpg', 1, 112),
(13, 'Quadruple Familiale', 300.000, 5, 'images/room5.jpg', 1, 113),
(14, 'Premium King', 110.000, 4, 'images/gallery7.jpg', 1, 115),
(15, 'Premium King', 150.000, 4, 'images/gallery2.jpg', 1, 150),
(16, 'Double Economique', 130.000, 2, 'images/gallery4.jpg', 1, 140),
(17, 'Double Confort', 105.000, 3, 'images/gallery6.jpg', 1, 60),
(18, 'Triple Economique', 210.000, 3, 'images/room-b4.jpg', 1, 170),
(19, 'Premium King', 100.000, 2, 'images/gallery3.jpg', 1, 190);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `num` int(11) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `tel` varchar(8) NOT NULL,
  `mod2passe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num`, `cin`, `nom`, `prenom`, `email`, `city`, `tel`, `mod2passe`) VALUES
(1, '14712870', 'hacen', 'aidi', 'hacenaidi4455@gamil.com', 'gafsa', '28389204', '1234'),
(5, '14725836', 'aboura', 'saidi', 'saidiabir@gami.com', 'nabeul', '24237635', 'aaaa'),
(6, '12345678', 'iyed', 'benchikeh', 'iyed123@gmail.com', 'nabeul', '1234567', '1452'),
(7, '1234578', 'is', 'hawa', 'isaa@gmail.com', 'tunis', '12345678', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(8) NOT NULL,
  `message` varchar(500) NOT NULL,
  `reading` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `tel`, `message`, `reading`) VALUES
(1, 'hacen', 'houcein22@gmail.com', '28389204', 'hello world', 1),
(3, 'nourdien', 'hacenaidi4455@gamil.com', '14725836', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam perferendis veritatis mollitia explicabo incidunt ad quod maiores? Numquam eligendi inventore quaerat beatae nesciunt? Consequuntur rem quisquam voluptate ut quibusdam.\r\n', 1),
(4, 'hacen', 'hacenaidi4455@gamil.com', '12345678', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 1),
(5, 'abir saidi', 'saidiabir@gami.com', '23352635', 'in7eb inkaml projet php', 1),
(6, 'abir saidi', 'saidiabir@gami.com', '23352635', 'hello ', 0),
(7, 'issa', 'isaa@gmail.com', '12345678', 'nice page', 0),
(8, 'hacen', 'iyed123@gmail.com', '28389204', 'aaaaa', 0),
(9, 'hacen', 'isaa@gmail.com', '12345678', 'hello', 0);

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(11) NOT NULL,
  `validite` int(11) NOT NULL,
  `id_chamber` int(11) NOT NULL,
  `pourcentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`id_offer`, `validite`, `id_chamber`, `pourcentage`) VALUES
(10, 8, 1, 40),
(11, 14, 13, 10),
(12, 4, 6, 15),
(13, 32, 8, 5),
(14, 2, 9, 70),
(15, 14, 8, 30),
(16, 16, 17, 30),
(17, 13, 14, 12),
(19, 13, 14, 10);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `numero` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix_total` decimal(9,3) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_chamber` int(11) NOT NULL,
  `confirmation` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`numero`, `date_debut`, `date_fin`, `prix_total`, `id_client`, `id_chamber`, `confirmation`) VALUES
(18, '2023-12-15', '2023-12-16', 100.000, 1, 12, 2),
(19, '2023-12-15', '2023-12-31', 4800.000, 1, 13, 2),
(20, '2023-12-12', '2023-12-21', 900.000, 5, 12, 2),
(21, '2023-12-13', '2023-12-27', 4200.000, 5, 13, 1),
(22, '2023-12-12', '2023-12-21', 504.000, 6, 8, 2),
(23, '2023-12-12', '2023-12-18', 378.000, 6, 17, 1),
(24, '2023-12-15', '2023-12-22', 1750.000, 6, 10, 2),
(25, '2023-12-13', '2023-12-14', 100.000, 6, 12, 1),
(26, '2023-12-21', '2023-12-23', 112.000, 7, 8, 2),
(27, '2023-12-13', '2023-12-23', 800.000, 7, 8, 1),
(29, '2023-12-14', '2023-12-20', 336.000, 7, 8, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chamber`
--
ALTER TABLE `chamber`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`),
  ADD KEY `id_chamber` (`id_chamber`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `id_chamber` (`id_chamber`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chamber`
--
ALTER TABLE `chamber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_chamber`) REFERENCES `chamber` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_chamber`) REFERENCES `chamber` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`num`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
