-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 24, 2019 at 04:09 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aztrek`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` bigint(20) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `sejour_id` bigint(20) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` bigint(20) NOT NULL,
  `depart` date NOT NULL,
  `prix` int(11) NOT NULL,
  `sejour_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `depart`, `prix`, `sejour_id`) VALUES
(1, '2019-02-10', 3500, 1),
(2, '2019-04-15', 3200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `depart_has_user`
--

CREATE TABLE `depart_has_user` (
  `id` bigint(20) NOT NULL,
  `depart_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nbr_personne` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depart_has_user`
--

INSERT INTO `depart_has_user` (`id`, `depart_id`, `user_id`, `nbr_personne`) VALUES
(1, 1, 1, 2),
(2, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `difficulte`
--

CREATE TABLE `difficulte` (
  `id` bigint(20) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `difficulte`
--

INSERT INTO `difficulte` (`id`, `libelle`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `biographie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `nom`, `biographie`, `image`) VALUES
(1, 'Jean', 'qsdg fsdg ', 'sdfg sdfg ');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` bigint(20) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `sejour_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_courte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `description`, `sous_titre`, `image`, `description_courte`) VALUES
(1, 'france', 'Le Mexique, et en particulier le Yucatán, est une terre de rêve. Elle y mêle quelques-uns des plus beaux sites mayas, riche patrimoine culturel, et des trésors naturels, comme la mer des Caraïbes ou les cenotes, ces puits souterrains ou à ciel ouvert, trous d’eau qui parsèment le plateau calcaire du Yucatán.\n\nL’âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur grande époque bien sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et coutumes.', 'blablbalable', 'eee', 'L’âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur grande époque bien sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et coutumes.');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `id` bigint(20) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `etapes` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sejour_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `jour`, `etapes`, `description`, `sejour_id`) VALUES
(1, '1', 'vol pour Cancun', '<p>&nbsp;</p>\r\n<p>Accueil &agrave; l&rsquo;a&eacute;roport par notre guide et route jusqu&rsquo;&agrave; Coba, agr&eacute;able site maya dont les ruines sont dispers&eacute;es dans la for&ecirc;t. Nous enfourchons nos v&eacute;los et partons sur de larges &laquo; sacbe &raquo;, les anciennes routes mayas, pour une d&eacute;couverte dynamique et divertissante de l&rsquo;ancienne cit&eacute; (2h de v&eacute;lo avec pauses). De nombreux arr&ecirc;ts viennent ponctuer la balade, notamment la &laquo; Grande Pyramide &raquo; au sommet de laquelle on b&eacute;n&eacute;ficie d&rsquo;une vue imprenable sur la for&ecirc;t environnante et les cinq lacs. Transfert &agrave; Valladolid en fin d&rsquo;apr&egrave;s-midi et installation dans un charmant h&ocirc;tel colonial donnant sur le parc central. Promenade en ville et temps libre avant le d&icirc;ner.</p>', 1),
(2, '2', 'Cancún - Coba - Valladolid', '<p>&nbsp;</p>\r\n<p>Accueil &agrave; l&rsquo;a&eacute;roport par notre guide et route jusqu&rsquo;&agrave; Coba, agr&eacute;able site maya dont les ruines sont dispers&eacute;es dans la for&ecirc;t. Nous enfourchons nos v&eacute;los et partons sur de larges &laquo; sacbe &raquo;, les anciennes routes mayas, pour une d&eacute;couverte dynamique et divertissante de l&rsquo;ancienne cit&eacute; (2h de v&eacute;lo avec pauses). De nombreux arr&ecirc;ts viennent ponctuer la balade, notamment la &laquo; Grande Pyramide &raquo; au sommet de laquelle on b&eacute;n&eacute;ficie d&rsquo;une vue imprenable sur la for&ecirc;t environnante et les cinq lacs. Transfert &agrave; Valladolid en fin d&rsquo;apr&egrave;s-midi et installation dans un charmant h&ocirc;tel colonial donnant sur le parc central. Promenade en ville et temps libre avant le d&icirc;ner.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sejour`
--

CREATE TABLE `sejour` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `places` int(11) NOT NULL,
  `a_la_une` tinyint(4) NOT NULL DEFAULT '0',
  `duree` tinyint(4) NOT NULL,
  `publie` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `difficulte_id` bigint(20) NOT NULL,
  `pays_id` bigint(20) NOT NULL,
  `guide_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sejour`
--

INSERT INTO `sejour` (`id`, `nom`, `description`, `places`, `a_la_une`, `duree`, `publie`, `image`, `difficulte_id`, `pays_id`, `guide_id`) VALUES
(1, 'yucantan', 'qsigf azf', 10, 1, 8, 1, 'insta-2.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `usercol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `adresse`, `mdp`, `avatar`, `admin`, `usercol`) VALUES
(1, 'moulin', 'romain', 'moulin.r1@gmail.com', '2', 'ae2132453a0608e59bfe0a2a52808c62bafa7435', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaire_user1_idx` (`user_id`),
  ADD KEY `fk_commentaire_sejour1_idx` (`sejour_id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depart_sejour_idx` (`sejour_id`);

--
-- Indexes for table `depart_has_user`
--
ALTER TABLE `depart_has_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depart_has_user_user1_idx` (`user_id`),
  ADD KEY `fk_depart_has_user_depart1_idx` (`depart_id`);

--
-- Indexes for table `difficulte`
--
ALTER TABLE `difficulte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_sejour1_idx` (`sejour_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_programme_sejour1_idx` (`sejour_id`);

--
-- Indexes for table `sejour`
--
ALTER TABLE `sejour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sejour_difficulte1_idx` (`difficulte_id`),
  ADD KEY `fk_sejour_pays1_idx` (`pays_id`),
  ADD KEY `fk_sejour_guide_trekk1_idx` (`guide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `depart_has_user`
--
ALTER TABLE `depart_has_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `difficulte`
--
ALTER TABLE `difficulte`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejour`
--
ALTER TABLE `sejour`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_commentaire_sejour1` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaire_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `depart`
--
ALTER TABLE `depart`
  ADD CONSTRAINT `fk_depart_sejour` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `depart_has_user`
--
ALTER TABLE `depart_has_user`
  ADD CONSTRAINT `fk_depart_has_user_depart1` FOREIGN KEY (`depart_id`) REFERENCES `depart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_depart_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_sejour1` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `fk_programme_sejour1` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `fk_sejour_difficulte1` FOREIGN KEY (`difficulte_id`) REFERENCES `difficulte` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sejour_guide_trekk1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sejour_pays1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
