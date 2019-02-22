-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 22 Février 2019 à 16:30
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinefa`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTORS`
--

CREATE TABLE `ACTORS` (
  `id_actor` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `age` int(11) NOT NULL,
  `liens_act` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ACTORS`
--

INSERT INTO `ACTORS` (`id_actor`, `name`, `gender`, `age`, `liens_act`) VALUES
(1, 'Jake Gyllenhaal', 'H', 38, 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/15/05/18/10/03/374503.jpg'),
(2, 'Tom Cruise', 'H', 43, 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/18/07/13/09/57/3777492.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `CATEGORIES`
--

CREATE TABLE `CATEGORIES` (
  `id_category` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `creation_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CATEGORY_CONTENT`
--

CREATE TABLE `CATEGORY_CONTENT` (
  `id_movie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DIRECTORS`
--

CREATE TABLE `DIRECTORS` (
  `id_director` int(11) NOT NULL,
  `name_dir` varchar(200) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `age` int(11) NOT NULL,
  `liens_dir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DIRECTORS`
--

INSERT INTO `DIRECTORS` (`id_director`, `name_dir`, `gender`, `age`, `liens_dir`) VALUES
(1, 'Alejandro González Iñárritu É ', 'H', 45, 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/16/01/19/12/52/369643.jpg'),
(2, 'Damien Chazelle', 'H', 50, 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/17/01/10/11/57/402621.jpg'),
(3, 'Joe Dante', 'H', 30, 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/14/08/14/17/53/195008.jpg'),
(4, 'Steven Spielberg', 'H', 60, 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/15/12/02/12/12/537392.jpg'),
(5, 'Garth Davis', 'H', 44, 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/16/12/06/16/04/229553.jpg'),
(6, 'Richard Kelly', 'H', 40, 'http://fr.web.img5.acsta.net/r_1920_1080/medias/nmedia/18/68/52/35/19195138.jpg'),
(7, 'Tobe Hooper', 'H', 40, 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/14/12/10/14/36/580277.jpg'),
(8, 'Dan Gilroy', 'H', 34, 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/210/589/21058926_20131119113919906.jpg'),
(9, 'Ang Lee', 'H', 56, 'http://fr.web.img2.acsta.net/r_1920_1080/medias/nmedia/18/35/43/09/20365245.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `MOVIES`
--

CREATE TABLE `MOVIES` (
  `id_movie` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `release_date` int(11) NOT NULL,
  `id_director` int(11) NOT NULL,
  `liens_mov` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `MOVIES`
--

INSERT INTO `MOVIES` (`id_movie`, `title`, `release_date`, `id_director`, `liens_mov`) VALUES
(1, 'Donnie Darko', 2001, 6, 'http://fr.web.img4.acsta.net/r_1920_1080/medias/nmedia/00/02/38/60/darko.jpg'),
(2, 'La guerre des mondes', 2005, 4, 'http://fr.web.img6.acsta.net/r_1920_1080/medias/nmedia/18/35/50/73/18430317.jpg'),
(3, 'Gremlins', 1984, 3, 'http://fr.web.img3.acsta.net/r_1920_1080/medias/nmedia/18/36/21/08/18462089.jpg'),
(4, 'la la land ', 2016, 2, 'http://fr.web.img4.acsta.net/r_1920_1080/pictures/16/11/10/13/52/169386.jpg'),
(5, 'Poltergeist', 1982, 3, 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/15/11/12/14/38/323812.jpg'),
(6, 'Lion', 2016, 5, 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/17/01/25/09/36/363964.jpg'),
(7, 'bidrman', 2014, 1, 'http://fr.web.img4.acsta.net/r_1920_1080/pictures/14/12/30/10/14/511837.jpg'),
(8, 'Ready player one', 2018, 4, 'http://fr.web.img4.acsta.net/r_1920_1080/pictures/18/02/14/09/15/3437390.jpg'),
(9, 'Le Secret de Brokeback Mountain', 2005, 9, 'http://fr.web.img5.acsta.net/r_1920_1080/medias/nmedia/18/35/87/12/18463378.jpg'),
(10, 'Night Call\r\n', 2014, 8, 'http://fr.web.img4.acsta.net/r_1920_1080/pictures/14/10/20/18/02/332744.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `MOVIE_NOTES`
--

CREATE TABLE `MOVIE_NOTES` (
  `id_movie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PLAYS_IN`
--

CREATE TABLE `PLAYS_IN` (
  `id_movie` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PLAYS_IN`
--

INSERT INTO `PLAYS_IN` (`id_movie`, `id_actor`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `USERS`
--

CREATE TABLE `USERS` (
  `ref_user` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `phone` int(16) NOT NULL,
  `address` text NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `USERS`
--

INSERT INTO `USERS` (`ref_user`, `pseudo`, `mail`, `phone`, `address`, `mdp`) VALUES
(3, 'seb', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', '\'\''),
(4, 'seb', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', '\'\''),
(5, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(6, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(7, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(8, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(9, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(10, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(11, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(12, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(13, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(14, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(15, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root'),
(16, 'jj', 'sebastien.thuillier@hotmail.com', 626018626, '159 avenue de strasbourg, batiment A2 porte nÂ°95', 'root');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ACTORS`
--
ALTER TABLE `ACTORS`
  ADD PRIMARY KEY (`id_actor`);

--
-- Index pour la table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `liaison` (`id_user`);

--
-- Index pour la table `CATEGORY_CONTENT`
--
ALTER TABLE `CATEGORY_CONTENT`
  ADD KEY `liaison1` (`id_user`),
  ADD KEY `liaison2` (`id_movie`);

--
-- Index pour la table `DIRECTORS`
--
ALTER TABLE `DIRECTORS`
  ADD PRIMARY KEY (`id_director`);

--
-- Index pour la table `MOVIES`
--
ALTER TABLE `MOVIES`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `fk_client_numero` (`id_director`);

--
-- Index pour la table `MOVIE_NOTES`
--
ALTER TABLE `MOVIE_NOTES`
  ADD KEY `l` (`id_movie`),
  ADD KEY `o` (`id_user`);

--
-- Index pour la table `PLAYS_IN`
--
ALTER TABLE `PLAYS_IN`
  ADD KEY `fk` (`id_movie`),
  ADD KEY `act1` (`id_actor`);

--
-- Index pour la table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`ref_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ACTORS`
--
ALTER TABLE `ACTORS`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `DIRECTORS`
--
ALTER TABLE `DIRECTORS`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `MOVIES`
--
ALTER TABLE `MOVIES`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `ref_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  ADD CONSTRAINT `liaison` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`ref_user`);

--
-- Contraintes pour la table `CATEGORY_CONTENT`
--
ALTER TABLE `CATEGORY_CONTENT`
  ADD CONSTRAINT `liaison1` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`ref_user`),
  ADD CONSTRAINT `liaison2` FOREIGN KEY (`id_movie`) REFERENCES `MOVIES` (`id_movie`);

--
-- Contraintes pour la table `MOVIES`
--
ALTER TABLE `MOVIES`
  ADD CONSTRAINT `fk_client_numero` FOREIGN KEY (`id_director`) REFERENCES `DIRECTORS` (`id_director`);

--
-- Contraintes pour la table `MOVIE_NOTES`
--
ALTER TABLE `MOVIE_NOTES`
  ADD CONSTRAINT `l` FOREIGN KEY (`id_movie`) REFERENCES `MOVIES` (`id_movie`),
  ADD CONSTRAINT `o` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`ref_user`);

--
-- Contraintes pour la table `PLAYS_IN`
--
ALTER TABLE `PLAYS_IN`
  ADD CONSTRAINT `act1` FOREIGN KEY (`id_actor`) REFERENCES `ACTORS` (`id_actor`),
  ADD CONSTRAINT `fk` FOREIGN KEY (`id_movie`) REFERENCES `MOVIES` (`id_movie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
