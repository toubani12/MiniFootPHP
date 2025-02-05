
CREATE database minifoot ;
use minifoot;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int DEFAULT NULL,
  `id_reservation` int DEFAULT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_reservation` (`id_reservation`)
) ;

-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int DEFAULT NULL,
  `prenom` char(20) NOT NULL,
  `date` date NOT NULL,
  `heur_debut` time NOT NULL,
  `heur_fin` time NOT NULL,
  `etat` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_reservation`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ;




CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` char(20) NOT NULL,
  `prenom` char(20) NOT NULL,
  `date_naiss` date NOT NULL,
  `email` char(32) NOT NULL,
  `password` char(32) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `cin` varchar(20) NOT NULL,
  `tel` char(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ;

