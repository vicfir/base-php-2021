-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 08 sep. 2021 à 09:45
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livredor`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--


--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `email`, `msg`, `date_msg`) VALUES(1, 'Pierre', 'pierre.sandron@cf2m.be', 'Bonjour les amis ! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi eligendi quibusdam omnis voluptates, natus molestiae totam eius ratione, fugiat voluptatum esse voluptatibus nostrum. Quisquam odio culpa, voluptates velit id soluta.', '2021-09-08 11:06:45');
INSERT INTO `messages` (`id`, `pseudo`, `email`, `msg`, `date_msg`) VALUES(2, 'Michaël', 'michael.pitz@cf2m.be', 'Salut lulu ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit optio, non veritatis praesentium accusamus dolor tempora, ea reprehenderit nobis incidunt, impedit dolores. Eius, atque corrupti labore possimus sed quidem sequi.', '2021-09-08 11:15:25');
INSERT INTO `messages` (`id`, `pseudo`, `email`, `msg`, `date_msg`) VALUES(3, 'André', 'andre.palmisano@cf2m.be', 'Hello les gars !', '2021-09-08 11:32:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
