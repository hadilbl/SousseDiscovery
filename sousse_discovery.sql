-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 mars 2024 à 14:27
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sousse_discovery`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sujet` text COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `dateenvoi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `etat` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `dateenvoi`, `etat`) VALUES
(3, 'test', 'test@mail.fr', 'testing', 'message', '2024-02-24 à 11:03', 0);

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

DROP TABLE IF EXISTS `destination`;
CREATE TABLE IF NOT EXISTS `destination` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `localisation` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id`, `nom`, `localisation`, `type`, `prix`, `description`, `image`) VALUES
(2, 'Village de Hergla', 'Hergla', 'pres plage', 'gratuit', 'Village idéalement placé, Hergla allie authenticité, calme et micro climat.', 'hergla2.jpg'),
(3, 'Ecovillage', 'Sidi Bou Ali', 'pres montagne', '225', 'Ecovillage pour un moment magique en famille à notre espace Ecovillage : un paradis pour les enfants, un brunch délicieux et des plats tunisiens ...', 'ecovillage1.jpg'),
(4, 'Porte Kantaoui', 'Kantaoui', 'pres plage', 'gratuit', 'Port El-Kantaoui est une marina située au nord-ouest de la ville de Sousse, qui est devenue l\'une des plus importantes stations balnéaires de la Tunisie. ', 'kantaoui.webp'),
(5, 'Médina de Sousse', 'Sousse', 'pres montagne', '225', 'La médina de Sousse, son fort – le Ribat –, sa Grande Mosquée, sa Kasbah, ses remparts forment un ensemble exceptionnel de monuments à la beauté austère, puissamment évocateur du passé de cette place forte médiévale.   Elle est inscrite sur la Liste du Patrimoine Mondial de l\'Humanité de l\'Unesco.', 'mdina.jpg'),
(6, 'Mall of sousse ', 'Sidi Bou Ali', 'pres montagne', 'gratuit', 'Centre commercial élégant et moderne avec cinéma, aire de restauration, espace jeux pour enfants, supermarché et Wi-Fi gratuit.', 'mall.jpeg'),
(7, 'Musée archéologique de Sousse', 'Sousse', 'Prés plage', '25', 'Le musée archéologique de Sousse est un musée tunisien situé dans la ville de Sousse, l\'ancienne Hadrumète, depuis 1951. Il possède la plus grande collection de mosaïques de Tunisie après celle du musée national du Bardo.', 'musée.jpg'),
(8, 'Musée Dar Essid', 'sousse', 'pres plage', '20', 'Le Musée Dar Essid est un musée tunisien situé à l’intérieur de la médina, dans une maison de Sousse, datant du Xe siècle , ayant appartenu à une famille d’aristocrates. Il retrace la vie quotidienne citadine à Sousse au XVIIIe et XIXe siècles.', 'musédaresid.jpg'),
(9, 'Magiceye 3D Experince', 'sousse', 'pres plage', '30', 'Un super petit endroit pour passer une heure ou deux. Il y a tellement de scènes différentes sur lesquelles prendre vos photos. Laissez libre cours à votre imagination.', 'magic.jpeg'),
(10, 'Eglise Saint Felix', 'sousse', 'pres plage', '20', 'L\'église Saint-Félix de Sousse, située dans la ville de Sousse en Tunisie, est une église catholique construite à l\'époque du protectorat français. Elle fait partie des six lieux de culte catholique autorisés par le gouvernement tunisien après l\'indépendance. Elle assure toujours des offices de nos jours.', 'eglise.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Commentaire` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id`, `nom`, `prenom`, `avatar`, `Commentaire`, `date`) VALUES
(1, 'Benchikh', 'Ridha', 'person_1.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2024-03-14 à 13:27'),
(2, 'Bouhlel', 'Mohamed', 'person_2.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2024-03-14 à 13:33'),
(3, 'Bhk', 'wassim', 'person_3.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2024-03-12 à 19:48'),
(4, 'Bouneb', 'Karim', 'person_4.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2024-03-14 à 13:46'),
(14, 'Hadil', 'Bouhlel', 'person_2.jpg', 'fhfhghfghf', '2024-03-14 à 14:21');

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

DROP TABLE IF EXISTS `hebergement`;
CREATE TABLE IF NOT EXISTS `hebergement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `localisation` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` int NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hebergement`
--

INSERT INTO `hebergement` (`id`, `nom`, `localisation`, `prix`, `image`, `type`, `description`) VALUES
(1, 'Mövenpick', 'Bd du 14 Janvier, Sousse 4039', 398, 'movinpick.avif', 'Hôtel', 'Le Mövenpick Resort & Marine Spa Sousse est un complexe situé dans le centre-ville de Sousse. Il dispose d\'un accès à une plage privée, de piscines d\'eau salée extérieures, ainsi que d\'un centre de bien-être et de sport.  Chaque chambre est dotée de la climatisation, d\'une télévision par satellite à écran plat et d\'une salle de bains privative. Certaines comprennent des peignoirs et un plateau/bouilloire. Elles offrent toutes une vue panoramique sur la mer, le jardin ou la piscine.  Les restaurants et les snack-bars du Mövenpick Resort & Marine Spa servent une cuisine internationale, y compris des plats méditerranéens et japonais ainsi que des grillades. Vous pourrez boire une sélection de boissons aux différents bars et cafés, notamment le bar de la piscine et l\'Aga Café. Un petit-déjeuner buffet est préparé tous les jours.  Ouverte 24h/24, la réception du Mövenpick Resort & Marine Spa propose un service de concierge. Vous trouverez une boutique sur place. Vous pourrez aussi pratiquer de nombreuses activités, telles que les sports nautiques, le volley-ball et le tennis de table. La connexion Wi-Fi est gratuit'),
(2, 'Dar Badiaa', ' Sidi Bouraoui, 20 rue mosquée Hanafia, Sousse', 222, 'hote1.jpg', 'Maisond\'hôte', 'le Dar Badiaa propose un hébergement climatisé avec une terrasse et une connexion Wi-Fi gratuite. Pour votre confort, la maison d\'hôtes possède une entrée privée. Cette maison d\'hôtes propose des chambres familiales.  Tous les logements comprennent un coin salon, une télévision par satellite à écran plat ainsi qu\'une salle de bains privative pourvue de peignoirs, d\'une douche à l\'italienne, d\'un jacuzzi et d\'un bidet. Tous les logements disposent d\'un balcon avec coin repas extérieur et vue sur la cour intérieure. Le linge de lit et les serviettes de toilette sont fournis.  Vous séjournerez à proximité de Bou Jaafar, de la grande mosquée de Sousse et du musée archéologique de Sousse. '),
(3, 'Sousse Palace Hotel & Spa', 'Av. Habib Bourguiba, Sousse', 322, 'palace.avif', 'Hôtel', 'Le Sousse palace hôtel & spa est un 5 étoiles de luxe rénové entièrement est ouvert en 2016.  Situé en centre ville, avec sa plage privé il est idéalement placé pour tous type de tourisme.  Nos chambres sont équipées de tout le confort que ce doit d\'avoir un hôtel de ce standing, wifi, tv IP, sèche cheveux, 2 téléphones.  Pour ce qui est de la Gastronomie l\'hôtel compte 3 restaurants panoramique au 3ème vue mer, 4ème vue mer, et 12ème étages vue ville et mer, un restaurant buffet, un snack sur la plage ouvert durant la période estivale, un bar principale, et un salon de thé.  Le centre de bien être met a disposition un hammam, un sauna, une piscine couverte avec jet, jaccuzi, et contre courants, également une salle de sport avec coach, et un spa .  L\'hôtel compte également 16 salles de sous commissions et une salle de congrès de capacité de 900 personnes.'),
(4, 'JAZ Tour KHALEF', ' Boulevard du 14 Janvier, 4051, Sousse', 210, 'hotel1.webp', 'Hôtel', 'le JAZ Tour Khalef Thalasso & Spa, un hôtel familial qui vous apporte le meilleur de Sousse à votre portée. Vous profiterez de chambres relaxantes équipées d\'une télévision à écran plat, d\'un minibar et d\'une climatisation, et pourrez rester connecté pendant votre séjour car le Tour Khalef Marhaba Thalasso Hotel propose un wi-fi gratuit. L\'hôtel dispose d\'une conciergerie. De plus, le Tour Khalef Marhaba est doté d\'une piscine et d\'un salon, offrant un endroit plaisant pour se reposer après une journée bien remplie. Pour les clients avec véhicules, un parking gratuit est disponible. Grâce à son emplacement tout près des monuments populaires, comme Equestrian Statue of Habib Bourguiba (2,7 km) et Ribat (2,9 km), les clients du Tour Khalef Hotel pourront facilement profiter des attractions les plus célèbres de Sousse. Ponctuez votre séjour à Sousse d\'une dégustation de ribs local dans l\'un des restaurantes alentours, comme Farmers Steakhouse. Vous ne serez jamais à court de choses à faire dans les environs : explorez les sites historiques célèbres tels que Medina of Sousse. Nous sommes sûrs que vous apprécierez votre séjour au JAZ Tour Khalef Thalasso & Spa car vous pourrez découvrir tout ce que Sousse a à offrir.'),
(5, 'Domaine de l\'Olivier Rouge', 'sidi bou ali', 250, 'rouge.jpg', 'Hôtel', '\r\nHôtel Domaine de l\'Olivier rouge à Sousse est près de sebkha Halk El Menzel, à moins de 4.0 km.\r\nLa maison d\'hôtes est également à 10 minutes de route d\'amphithéâtre d\'Ulissipira à Sousse.\r\nCet hôtel se compose de 20 chambres où les clients peuvent profiter d\'un balcon, un espace de repas et une cafetière/théière. Quelque pièce est équipée d\'une salle de bain privée. Dotées d\'une toilette séparée et d\'une douche, les salles de bains sont également équipées d\'un sèche-cheveux et des serviettes.\r\n'),
(6, 'Dar zitoun', 'Sidi Bou Ali ', 150, 'zitoun.jpg', 'Maison d\'hôte', 'une maison d’hôte spacieux emplacement idéal, personnel amical et attentionné. Recommandé pour des vacances relaxantes.\r\nExcellent séjour le chalet est propre et bien entretenu. Chambres confortables. Restaurant délicieux avec un service attentif. Recommandé pour un séjour confortable et gastronomique');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `notification` int NOT NULL,
  `idreservation` int NOT NULL,
  `datenotif` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idfor` int NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `datereservation` date NOT NULL,
  `periode` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_agence` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom_transport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `prix` int NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`id`, `nom_agence`, `nom_transport`, `type`, `description`, `prix`, `image`) VALUES
(1, 'agence BSA', 'Bus', 'Transport Publique', 'test', 250, 'car.jpg'),
(2, 'Agence BSA', 'picanto KIA', 'Transport Privé', 'test', 120, 'car.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sexe` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `dateN` date NOT NULL,
  `cin` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pays` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `codePostale` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `etat` int NOT NULL,
  `type` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `username`, `password`, `telephone`, `image`, `sexe`, `dateN`, `cin`, `pays`, `ville`, `codePostale`, `adresse`, `etat`, `type`) VALUES
(1, 'ben hadj khalifa', 'wassim', 'benhadjkhalifawassim@gmail.com', 'wassimbhk', 'wassim123', '+21696454585', 'person_3.jpg', 'homme', '1998-09-24', '04455669', 'Tunisie', 'Sousse', '4070', 'msaken', 1, 0),
(2, 'bouhlel', 'hadil', 'bouhlelhadil1@gmail.com', 'hadilbl', 'hadil123', '+21696454585', 'person_4', 'femme', '1997-09-24', '12835656', 'tunisie', 'Sousse-msaken', '4070', 'rue asyout', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
