-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Août 2016 à 12:46
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myforum`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `nom` text,
  `prenom` text,
  `age` int(11) DEFAULT NULL,
  `ville` text,
  `niveau` text,
  `filiere` text,
  `staff` text,
  `passion` text,
  `telephone` text,
  `email` text,
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`nom`, `prenom`, `age`, `ville`, `niveau`, `filiere`, `staff`, `passion`, `telephone`, `email`, `id`, `login`, `pass_md5`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Ady', '0d1161a18f797a8e51682748151f512e'),
('yassine', 'Amri', 23, 'Nabeul', '2 annÃ©e', 'GL', 'test', 'musique', '2784158', 'haroun3amri@hotmail.fr', 2, 'haroun', '0d1161a18f797a8e51682748151f512e'),
('yassine', 'Amri', 19, 'Nabeul', '2 annÃ©e', 'GL', 'test', 'musique', '2784158', 'haroun3amri@hotmail.fr', 3, 'mounir', '0d1161a18f797a8e51682748151f512e'),
('nafaa', 'Amri', 15, 'Nabeul', '2 annÃ©e', 'GL', 'test', 'musique', '2784158', 'haroun3amri@hotmail.fr', 4, 'sami', '0d1161a18f797a8e51682748151f512e'),
('mounir', 'saidi', 24, 'kairouan', '2 annÃ©e', 'GL', 'test', 'musique', '2784158', 'haroun3amri@hotmail.fr', 5, 'test', '0d1161a18f797a8e51682748151f512e');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
