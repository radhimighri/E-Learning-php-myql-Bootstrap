-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 10 mars 2019 à 20:20
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ismaik1`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `comm` varchar(500) CHARACTER SET utf8 NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `cours_id_cours` int(11) NOT NULL,
  `date_c` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `comm`, `user_id_user`, `cours_id_cours`, `date_c`) VALUES
(3, 'et merci', 31, 1, '2014-04-29 20:56:39'),
(8, 'bien', 26, 1, '2014-04-29 21:38:07'),
(18, 'salem', 26, 1, '2014-04-29 22:25:50'),
(22, 'Bonjour monsieur quel sont les chapitres inclus dans l\'examen ?', 28, 1, '2014-05-19 12:32:49'),
(24, 'ok monsieur', 31, 1, '2014-05-27 12:29:31'),
(32, 'bonjour', 34, 9, '2014-05-30 15:20:29'),
(35, 'ok', 26, 1, '2014-05-30 15:22:21'),
(36, 'ok', 29, 10, '2014-05-30 15:28:55'),
(37, 'ok', 26, 10, '2014-05-30 15:29:11'),
(38, 'bonjour', 30, 11, '2014-05-30 15:36:59'),
(39, 'bonjour', 29, 11, '2014-05-30 15:37:55'),
(40, 'bonjour', 34, 11, '2014-05-30 15:38:24'),
(41, 'ok', 28, 11, '2019-03-10 17:27:29'),
(42, 'hello', 28, 1, '2019-03-10 17:31:03'),
(43, 'bonjour cher etudiant', 6, 12, '2019-03-10 18:08:37'),
(44, 'okok', 6, 12, '2019-03-10 18:08:49');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nom_cours` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `Type_cour` varchar(5) CHARACTER SET utf8 NOT NULL,
  `date_cours` date NOT NULL,
  `file_cour` varchar(50) CHARACTER SET utf8 NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nom_cours`, `description`, `Type_cour`, `date_cours`, `file_cour`, `utilisateur_id_utilisateur`) VALUES
(1, 'Systeme d\'exploitation', 'Bonjour ces les chapitres 1 et 2 de cours systeme d\'exploitation            ', 'cours', '2014-04-29', 'docprof/demande_conge.doc', 26),
(9, 'Lunix', 'Cours Lunix            ', 'cours', '2014-05-30', '', 34),
(10, 'Cours', 'kkjdfkhdskj            ', 'TD', '2014-05-30', 'docprof/langues.txt', 26),
(11, 'cours C2I', 'Bonjour             ', 'cours', '2014-05-30', 'docprof/BD.docx', 34),
(12, 'cours ccna2', '            hi ccna2', 'TP', '2019-03-10', '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `cours_groupe`
--

CREATE TABLE `cours_groupe` (
  `cours_id_cours` int(11) NOT NULL,
  `groupe_id_groupes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours_groupe`
--

INSERT INTO `cours_groupe` (`cours_id_cours`, `groupe_id_groupes`) VALUES
(1, 3),
(11, 3);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id_demande` int(11) NOT NULL,
  `sujet` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contenu` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_d` varchar(50) CHARACTER SET utf8 NOT NULL,
  `utilisateurs_id_utilisateurs` int(11) NOT NULL,
  `vue` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_demande`, `sujet`, `contenu`, `date_d`, `utilisateurs_id_utilisateurs`, `vue`) VALUES
(2, 'Demande de Conge', 'Bonjour ...', '2014-04-16 22:19:35', 6, 1),
(3, 'Rattrapage', '            demande de rattrapage', '2014-04-25 20:28:21', 13, 1),
(4, 'Certificat', '            demande de certificat', '2014-04-25 20:30:02', 4, 1),
(5, 'Rattrapage', '            bonjour', '2014-04-26 21:20:02', 26, 1),
(6, 'Certificat', '            bonjour', '2014-04-26 21:21:53', 31, 1),
(7, 'Certificat', '            bonjour', '2014-04-30 03:58:19', 6, 1),
(8, 'Certificat', '            ;,f;d,sf', '2014-05-03 23:15:24', 4, 1),
(9, 'Certificat', 'ok', '2014-05-03 23:25:49', 31, 1),
(10, 'Rattrapage', 'bonjour', '2014-05-03 23:26:25', 26, 1),
(11, 'Certificat', '            bonjour', '2014-05-03 23:27:12', 4, 1),
(12, 'Certificat', '            kl,lk,l', '2014-05-08 05:00:05', 28, 1),
(13, 'Certificat de presence', 'Bonjour ,\r\nje veux obtenir un certificat de prÃ©se', '2014-05-19 11:34:23', 28, 1),
(14, 'RelevÃ© de note', 'Esma333333333333333            ', '2019-03-10 17:37:10', 28, 1),
(15, 'RelevÃ© de note2', 'E3333333            ', '2019-03-10 17:37:38', 28, 1),
(16, 'RelevÃ© de note2', 'E3333333            ', '2019-03-10 17:38:34', 28, 1),
(17, 'dqsdq', '            qsdqsdq', '2019-03-10 17:38:39', 28, 0),
(18, 'Ali', 'ija ija            ', '2019-03-10 17:43:29', 28, 0),
(19, 'Ali', 'ija ija            ', '2019-03-10 17:44:36', 28, 1),
(20, 'RelevÃ© de note2222', '            ok ok', '2019-03-10 17:44:49', 28, 1),
(21, 'dddddd', '            dddddddddddd', '2019-03-10 17:45:28', 28, 1),
(22, 'dddddd', '            dddddddddddd', '2019-03-10 17:46:21', 28, 1),
(23, 'dddddd', '            dddddddddddd', '2019-03-10 17:46:31', 28, 1),
(24, 'hi', 'okokokok            ', '2019-03-10 17:52:49', 6, 1),
(25, 'conge', 'bonjour je vais partir en vacances,merci de me fou', '2019-03-10 18:43:28', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nom_departement` varchar(255) CHARACTER SET utf8 NOT NULL,
  `chef_departement` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id_departement`, `nom_departement`, `chef_departement`) VALUES
(1, 'Informatique', 'Anis ben Aicha'),
(5, 'Mathematique', 'Med Salah Barrek'),
(8, 'Physique', 'Ayechi Med Ali'),
(9, 'INFO', 'boudriga imed');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id_groupe` int(11) NOT NULL,
  `nom_groupe` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id_groupe`, `nom_groupe`) VALUES
(3, '4emeInfo'),
(16, '3emeTelecom'),
(18, '3emeInfo');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `nom_livre` varchar(150) CHARACTER SET utf8 NOT NULL,
  `emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `nom_livre`, `emprunter`) VALUES
(1, 'C2I', 1),
(3, 'Physique', 0);

-- --------------------------------------------------------

--
-- Structure de la table `motdepasse`
--

CREATE TABLE `motdepasse` (
  `id_motdepasse` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vue` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `motdepasse`
--

INSERT INTO `motdepasse` (`id_motdepasse`, `email`, `vue`) VALUES
(1, 'ramzi_mgi@gmail.com', 1),
(3, 'anis@gmail.fr', 1),
(9, 'bob@yahoo.fr', 1),
(10, 'mgii.radhi@gmail.com', 1),
(11, 'kamel@hotmail.fr', 1),
(12, 'mgii.radhi@gmail.com', 1),
(13, 'mgii.radhi@gmail.com', 1),
(14, 'mgii.radhi@gmail.com', 1),
(15, 'mgii.radhi@gmail.com', 0),
(16, 'mgii.radhi@gmail.com', 0),
(17, 'mgii.radhi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id_publication` int(11) NOT NULL,
  `sujet` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_p` date NOT NULL,
  `texte` text CHARACTER SET utf8 NOT NULL,
  `docpulication` varchar(70) CHARACTER SET utf8 NOT NULL,
  `profil` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id_publication`, `sujet`, `date_p`, `texte`, `docpulication`, `profil`) VALUES
(3, 'Avis de Rattrapage', '2014-04-25', '            Enseignant : Flen ben flen\r\nseance de rattrapage 12/10/2014', '', 'etu'),
(5, 'ActivitÃ© et clubs', '2014-04-25', 'l\'institut SupÃ©rieur de MathÃ©matiques AppliquÃ©es et d\'Informatique de Kairouan organise un voyage vers Douze', '', 'etu'),
(11, 'Plan d\'etude', '2014-05-19', 'RT', 'doc/paln detude.docx', 'etu'),
(12, 'ok', '2014-05-20', 'ok            ', '', 'ens'),
(13, 'Evenement ', '2014-05-21', 'Evenement culturel Evenement culturel Evenement culturel                        ', 'doc/10376286_942933352403023_8175698068638151982_n.jpg', 'tout_monde'),
(14, 'rattrapage', '2014-05-21', '            avis de rattrapage', '', 'etu'),
(15, 'OOO', '2019-03-10', '            FDFDFDFDF', 'doc/bienvenue.gif', 'tout_monde'),
(16, '', '2019-03-10', '            ', '', 'ens');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `id_resultat` int(11) NOT NULL,
  `resultat` varchar(10) CHARACTER SET utf8 NOT NULL,
  `moy` float NOT NULL,
  `relever` varchar(50) CHARACTER SET utf8 NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`id_resultat`, `resultat`, `moy`, `relever`, `utilisateur_id_utilisateur`) VALUES
(3, 'Admis', 12, 'resultat/07777777.jpg', 30),
(4, 'Control', 9.99, 'resultat/08888888.jpg', 31),
(5, 'Refusé', 7.22, 'resultat/09999999.jpg', 29),
(8, 'Admis', 16.66, 'resultat/cc.jpg', 28),
(9, 'Control', 13, '', 29),
(10, 'Admis', 18, 'resultat/Fiche Evaluation.doc', 31),
(11, 'Admis', 18, '', 28),
(12, 'Control', 12, 'resultat/ismaik1.jpg', 29);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `cin` int(10) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sexe` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(200) CHARACTER SET utf8 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(15) CHARACTER SET utf8 NOT NULL,
  `profil` varchar(50) CHARACTER SET utf8 NOT NULL,
  `departement_id_departement` int(11) DEFAULT NULL,
  `groupe_id_groupe` int(11) DEFAULT NULL,
  `confirmer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `cin`, `nom`, `prenom`, `sexe`, `date_naissance`, `mail`, `password`, `tel`, `profil`, `departement_id_departement`, `groupe_id_groupe`, `confirmer`) VALUES
(4, 11111110, 'Faidi', 'Ahmed', 'Male', '2014-04-26', 'ahmed@yahoo.fr', '111111', '1165165', 'admin', 0, 9, 1),
(6, 11111111, 'boudriga', 'imed', 'male', '2014-04-26', 'imed@hotmail.fr', '111111', '837322', 'ens', 0, 4, 1),
(13, 66666666, 'Faouzi', 'Abbassi', 'male', '2014-04-26', 'chef@gmail.com', '111111', '', 'root', 0, 0, 1),
(26, 77777770, 'Hmiden', 'Mohamed', 'Male', '2014-04-26', 'hmiden.med@gmail.com', '555555', '111111', 'ens', 1, 0, 1),
(28, 7747959, 'Mighri', 'Radhi', 'Male', '1990-04-04', 'mgii.radhi@gmail.com', '111111', '2213131', 'etud', 0, 3, 1),
(29, 11111117, 'Miraoui', 'Boubaker', 'Male', '1990-04-04', 'bob@yahoo.fr', '555555', '2515125', 'etud', 0, 1, 1),
(30, 11111116, 'Massoudi', 'Maher', 'Male', '1990-04-04', 'mass_maher@gmail.com', '555555', '1231312', 'etud', 0, 3, 1),
(31, 11111115, 'Methneni', 'Marwen', 'Male', '1990-04-04', 'methneni_marwen@gmail.com', '555555', '11111121', 'etud', 0, 3, 1),
(33, 11111112, 'Ben Aicha', 'Anis', 'Male', '1976-05-13', 'anis@gmail.fr', '123456', '123456', 'ens', 1, 0, 1),
(34, 77777777, 'Talbi', 'Mourad', 'Male', '1968-05-07', 'mourad@gmail.com', '123456', '1213213213', 'ens', 5, 0, 1),
(35, 88888888, 'Kharrat', 'Mohamed', 'Male', '1956-02-01', 'med_karrat@yahoo.fr', '123456', '1651351', 'ens', 5, 0, 1),
(37, 44444444, 'Abdi', 'Nidhal', 'Male', '1975-02-01', 'Nidhal_abdi@hotmail.fr', '123456', '15456132', 'ens', 1, 0, 1),
(38, 22222222, 'hammemi', 'moez', 'Masculin', '1975-12-31', 'hammem@live.fr', '111111', '22222211', 'ens', 1, 17, 0),
(39, 9090909, 'safwen', 'halta3lam', 'Masculin', '2013-12-31', 'QSDQ@FDF.FR', '111111', '33333333', 'etud', 9, 16, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `fk_commentaire_cours_idx` (`cours_id_cours`),
  ADD KEY `fk_commentaire_user_idx` (`user_id_user`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `fk_cours_utilisateur_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `cours_groupe`
--
ALTER TABLE `cours_groupe`
  ADD PRIMARY KEY (`cours_id_cours`,`groupe_id_groupes`),
  ADD KEY `fk_cours_groupe_cours_idx` (`cours_id_cours`),
  ADD KEY `fk_cours_groupe_groupe_idx` (`groupe_id_groupes`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `fk_demande_utilisateur_idx` (`utilisateurs_id_utilisateurs`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD UNIQUE KEY `nom_livre` (`nom_livre`);

--
-- Index pour la table `motdepasse`
--
ALTER TABLE `motdepasse`
  ADD PRIMARY KEY (`id_motdepasse`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publication`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id_resultat`),
  ADD KEY `fk_resultat_utilisateur_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`),
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `fk_enseignant_departement_idx` (`departement_id_departement`),
  ADD KEY `fk_etudiant_groupes_idx` (`groupe_id_groupe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id_demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `motdepasse`
--
ALTER TABLE `motdepasse`
  MODIFY `id_motdepasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_resultat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`cours_id_cours`) REFERENCES `cours` (`id_cours`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaire_use` FOREIGN KEY (`user_id_user`) REFERENCES `utilisateurs` (`id_utilisateurs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_cours_utilisateur` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateurs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `cours_groupe`
--
ALTER TABLE `cours_groupe`
  ADD CONSTRAINT `cours_groupe_ibfk_1` FOREIGN KEY (`cours_id_cours`) REFERENCES `cours` (`id_cours`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cours_groupe_ibfk_2` FOREIGN KEY (`groupe_id_groupes`) REFERENCES `groupes` (`id_groupe`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `fk_demande_utilisateur` FOREIGN KEY (`utilisateurs_id_utilisateurs`) REFERENCES `utilisateurs` (`id_utilisateurs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `fk_resultat_utilisateur` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateurs`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
