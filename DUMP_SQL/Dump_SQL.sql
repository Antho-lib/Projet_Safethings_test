-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 avr. 2020 à 17:34
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1
CREATE DATABASE safethings;
USE safethings;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `safethings`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` INT(11) NOT NULL,
  `client_email` VARCHAR(255) NOT NULL,
  `client_password` VARCHAR(255) NOT NULL,
  `client_login` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--



-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` INT(11) NOT NULL,
  `id_c` INT(11) NOT NULL,
  `total` FLOAT NOT NULL,
  `date_commande` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--



-- --------------------------------------------------------

--
-- Structure de la table `commande_item`
--

CREATE TABLE `commande_item` (
  `id_commande_item` INT(11) NOT NULL,
  `id_client_item` INT(11) NOT NULL,
  `prix` FLOAT NOT NULL,
  `quantite` INT(11) NOT NULL,
  `ref` INT(11) NOT NULL,
  `nom_produit` VARCHAR(255) NOT NULL,
  `date_achat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande_item`
--



-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` INT(11) NOT NULL,
  `nom` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--



-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` INT(11) NOT NULL,
  `produit_name` VARCHAR(255) NOT NULL,
  `produit_price` FLOAT NOT NULL,
  `produit_description` VARCHAR(255) NOT NULL,
  `produit_image` VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `commande_item`
--
ALTER TABLE `commande_item`
  ADD PRIMARY KEY (`id_commande_item`),
  ADD KEY `id_client_item` (`id_client_item`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `commande_item`
--
ALTER TABLE `commande_item`
  MODIFY `id_commande_item` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande_item`
--
ALTER TABLE `commande_item`
  ADD CONSTRAINT `commande_item_ibfk_1` FOREIGN KEY (`id_client_item`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `produit` VALUES (1,'gants en cuir',15.00,'gants en cuir taille 10','gants_latex.jpg'),
(2,'gants en latex',0.50,'gants en latex taille 10','gants_cuir.jpg'),
(3,'gants impermeables',20.00,'gants impermeables taille 10','gants_impermeables.jpg'),
(4,'gants anti-coupures',25.00,'gants anti-coupures taille 10','gants_anticoupures.jpg'),
(5,'gants en textiles',15.00,'gants en textiles taille 10','gants_textiles.jpg'),
(6,'lunettes de protection',15.00,'lunettes de protections avec elastique de soutien','lunettes_elastique.jpg'),
(7,'lunettes de protection anti-projections',20.00,'lunettes de protection anti-projections','lunettes_antiprojections.jpg'),
(8,'ecran facial',30.00,'ecran facial','ecran_facial.jpg'),
(9,'casque de chantier',35.00,'casque de chantier','casque_chantier.jpg'),
(10,'tissues de nettoyage',5.00,'tissues de nettoyage pour lunettes et stations de protections','tissues_nettoyage.jpg'),
(11,'lunettes masques',15.00,'lunettes masques transparentes','lunettes_masques.jpg'),
(12,'bouchons oreilles',15.00,'bouchons oreilles  en polyuréthane boite de 150','bouchons_oreilles_simples.jpg'),
(13,'bouchons oreilles avec corde',3.00,'bouchons oreilles avec cordes et lavables','bouchons_oreilles_cordon.jpg'),
(14,'combinaison jetable',30.00,'combinaisons jetables taille S M L XL paquets de 50','combi_jetable.jpg'),
(15,'masques a barbes',10.00,'masques a barbes jetables','masque_barbe.jpg'),
(16,'charlottes jetables',2.00,'charlottes jetables','charlotte.jpg'),
(17,'masques respiratoires ffp2',50.00,'masques respiratoires ffp2 boite de 20','ffp2.jpg'),
(18,'masques respiratoires ffp3',55.00,'masques respiratoires ffp3 boite de 20','ffp3.jpg');
