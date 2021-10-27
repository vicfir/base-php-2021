-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  mer. 27 oct. 2021 à 10:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `crud01`
--
CREATE DATABASE IF NOT EXISTS `crud01` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud01`;

-- --------------------------------------------------------

--
-- Structure de la table `theuser`
--

DROP TABLE IF EXISTS `theuser`;
CREATE TABLE IF NOT EXISTS `theuser` (
  `idtheuser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theuserlogin` varchar(80) NOT NULL,
  `theuserpwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `theusermail` varchar(150) NOT NULL,
  PRIMARY KEY (`idtheuser`),
  UNIQUE KEY `theuserlogin_UNIQUE` (`theuserlogin`),
  UNIQUE KEY `theusermail_UNIQUE` (`theusermail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theuser`
--

INSERT INTO `theuser` (`idtheuser`, `theuserlogin`, `theuserpwd`, `theusermail`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com'),
(2, 'Lulu', 'Lulu', 'lulu@lulu.com'),
(3, 'Lala', 'Lala', 'lala@gmail.com');


--
-- Structure de la table `thearticle`
--

DROP TABLE IF EXISTS `thearticle`;
CREATE TABLE IF NOT EXISTS `thearticle` (
  `idthearticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thearticletitle` varchar(160) NOT NULL,
  `thearticletext` text NOT NULL,
  `thearticledate` datetime DEFAULT current_timestamp(),
  `theuser_idtheuser` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idthearticle`),
  KEY `fk_thearticle_theuser_idx` (`theuser_idtheuser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `thearticle`
--

INSERT INTO `thearticle` (`idthearticle`, `thearticletitle`, `thearticletext`, `thearticledate`, `theuser_idtheuser`) VALUES
(2, 'Première mondiale : un drone marin filme le cœur d\'un ouragan de catégorie 4', 'Le 30 septembre 2021, un drone marin a collecté des données et filmé l\'oeil du cyclone Sam de catégorie 4, une expérience inédite qui permettra de mieux comprendre les cyclones et renforcer la prévention pour les populations côtières.\r\n\r\nPour mieux comprendre les océans et leurs caractéristiques, les espèces qui y vivent et la météo marine, la NOAA (National Oceanic and Atmospheric Administration) s\'appuie notamment sur les drones marins élaborés par Saildrone Inc. depuis 2015.\r\nIl s\'agit de petits \"voiliers\" (6 m de long sur 5 m au-dessus de l\'eau pour 270 kg) complètement autonomes en énergie (grâce à leurs panneaux solaires et leur voile) capables d\'accomplir des missions scientifiques pendant des mois dans les conditions les plus extrêmes.\r\n\r\nBien moins coûteux que les imposants navires de recherche (où une journée en mer coûte près de 10 000 dollars), ces nouveaux drones marins pilotés à distance peuvent aller partout, sans limite de temps et quelque soient les conditions météorologiques comme en témoignent ces images inédites capturées au cœur du cyclone Sam, le 30 septembre 2021.\r\n\r\nLe drone marin Saildrone Explorer SD 1045 a été paramétré pour rencontrer l\'ouragan Sam qui traverse l\'océan Atlantique nord. Le SD 1045 a affronté des vagues de 15 mètres de haut et des vents de 200 km/h pour collecter des données scientifiques critiques et, nous fournit ainsi une toute nouvelle vision de l\'une des forces les plus destructrices de la Terre.\r\n« Saildrone va là où aucun navire de recherche ne s\'est jamais aventuré, naviguant droit dans l\'œil de l\'ouragan, recueillant des données qui transformeront notre compréhension de ces puissantes tempêtes », a déclaré Richard Jenkins, fondateur et PDG de Saildrone.\r\n\r\nÉquipé d\'une \"voile ouragan\" spécialement conçue pour affronter des conditions de vent extrêmes, le SD 1045 a collecté des données en temps réel pour les modèles numériques de prévision des ouragans, qui devraient fournir de nouvelles informations sur la taille et les cyclones tropicaux qui ont tendance à se multiplier et s\'intensifier, à cause du réchauffement des océans.\r\n', '2021-10-04 16:11:16', 2),
(3, 'Un nouveau skate park accessible bientôt le long du canal', 'C’est le premier véritable skate park à Bruxelles qui sera accessible gratuitement. Il est en cours d’aménagement le long du canal à Neder-Over-Hembeek. Le projet a été initié par le Port de Bruxelles qui espère l’inaugurer aux alentours du mois de mai. Les travaux de sécurisation doivent encore être terminés.\r\n\r\nPatrimoine industriel et espace récréatif\r\nSous une grande grue, juste au bord de l’eau, un skate park est en train de voir le jour le long du canal. Le gros du chantier est terminé, reste tous les travaux de sécurisation du site à réaliser. Mais pourquoi le port a-t-il décidé de développer une telle infrastructure à cet endroit ? \" En fait, il s’agissait d’une friche portuaire \" explique Philippe Matthis, le directeur du port. \"On avait là 625 mètres carrés qui étaient inutilisables pour les besoins du port. Et comme on a une logique d’intégration urbaine du port, on a imaginé un plan global. On a d’abord voulu mettre à cet endroit une grue industrielle, un témoin du passé que nous avons rénové. Et en dessous, comme la grue est quand même conséquente, on s’est dit qu’on allait utiliser l’espace pour une activité récréative. Et donc l’idée a germé d’en faire un skate park puisqu’il apparaissait qu’il y a peu d’espace pour ce genre de pratique. Et à cet endroit-là, c’est une pratique qui ne devrait gêner personne au contraire. Donc on a allié les deux : le témoin du passé avec une activité récréative qui s’inscrit dans une promenade le long de la berge\".\r\n\r\nBruxelles manque d’infrastructure pour les sports de glisse\r\nCe skate park de nouvelle génération (en béton) qui sera accessible gratuitement, est le premier du genre à Bruxelles. Les skaters considèrent davantage l’espace des Ursulines (Place de la Chapelle) comme une place \"skatable\". Alors certes, ceux que nous avons interrogés saluent l’initiative mais la juge insuffisante à l’échelle d’une ville comme Bruxelles. \"C’est bien sûr une bonne nouvelle d’avoir quand même quelque chose à disposition\" détaille Max Evrard, skater et organisateur d’événements de sports extrêmes. \"Maintenant voilà, ça reste quand même la capitale européenne. On s’attendrait plutôt à voir un grand grand skate park plutôt qu’un petit comme celui-ci. Mais comme je le dis, c’est déjà un bon début\".\r\n\r\nDamien Delsaux, skater et coordinateur de l\'asbl Skateboarders abonde dans le même sens : \"C’est que des infrastructures se développent, mais on manque vraiment d’un grand skate park digne de ce nom. Parce qu’aujourd’hui, tous les \" spots \" urbains (Mont des Arts, Trône, place Morichart…) sont saturés. Le skate revient à la mode avec le fait aussi qu’il sera aux prochains Jeux Olympiques. Il y a plein de monde partout\".\r\n\r\nManque d’espace, manque de volonté des autorités publiques\r\nComparées à la Flandre, la Wallonie et Bruxelles sont clairement à la traîne dans le développement de ce type d’infrastructure. \"Je pense que dans le cas de Bruxelles, c’est d’ailleurs un peu le problème des grandes villes, il y a un manque d’espace. Et on connaît aussi les difficultés institutionnelles de la capitale, entre les communes, la Région explique Pierre Jambé, ancien champion de Belgique de skate et concepteur de skate park. \"Je pense aussi que c’est l’histoire d’une rencontre qui n’a pas eu lieu. Entre des dirigeants qui ont des préoccupations et des jeunes qui ont des demandes qui ne sont pas rencontrées\".\r\n\r\nNouveaux projets\r\nL\'échevin des sports de la Ville de Bruxelles, Benoît Hellings, s’apprête justement a rencontré la semaine prochaine une série d’acteurs du monde du skate dans le cadre du développement de plusieurs skates park au Bois de la Cambre, à Laeken ou encore au centre-ville. Des skates parks modulaires et temporaires avant d’éventuels aménagements structurels. \"C’est vrai qu’il y a pas mal d’initiatives qui se mettent en place \", reconnaît Damien Delsaux. \"Mais de nouveaux ce sont de petits projets. Il n’y en a pas un seul qui répond réellement aux besoins des utilisateurs\".', '2021-10-04 16:15:13', 1),
(4, 'Intelligence artificielle', 'L\'intelligence artificielle (IA) est « l\'ensemble des théories et des techniques mises en œuvre en vue de réaliser des machines capables de simuler l\'intelligence humaine ».\r\n\r\nElle englobe donc un ensemble de concepts et de technologies, plus qu\'une discipline autonome constituée. Des instances, telle la CNIL, notant le peu de précision de la définition de l\'IA, l\'ont présentée comme « le grand mythe de notre temps ».\r\n\r\nSouvent classée dans le groupe de l\'informatique, Mathématique et sciences cognitives, elle fait appel à la neurobiologie computationnelle (particulièrement aux réseaux neuronaux), et à la logique mathématique (partie des mathématiques et de la philosophie). Elle utilise des méthodes de résolution de problèmes à forte complexité logique ou algorithmique. Par extension, elle comprend, dans le langage courant, les dispositifs imitant ou remplaçant l\'homme dans certaines mises en œuvre de ses fonctions cognitives.', '2021-10-22 09:42:35', NULL),
(5, 'PHP', 'PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d\'autres formats comme le WML, le SVG et le PDF.\r\n\r\nIl a été conçu pour permettre la création d\'applications dynamiques, le plus souvent développées pour le Web. PHP est le plus souvent couplé à un serveur Apache bien qu\'il puisse être installé sur la plupart des serveurs HTTP tels que IIS ou nginx. Ce couplage permet de récupérer des informations issues d\'une base de données, d\'un système de fichiers (contenu de fichiers et de l\'arborescence) ou plus simplement des données envoyées par le navigateur afin d\'être interprétées ou stockées pour une utilisation ultérieure.\r\n\r\nC\'est un langage peu typé et souple et donc facile à apprendre par un débutant mais, de ce fait, des failles de sécurité peuvent rapidement apparaître dans les applications. Pragmatique, PHP ne s\'encombre pas de théorie et a tendance à choisir le chemin le plus direct. Néanmoins, le nom des fonctions (ainsi que le passage des arguments) ne respecte pas toujours une logique uniforme, ce qui peut être préjudiciable à l\'apprentissage.', '2021-10-22 09:43:25', 1),
(6, 'JavaScript', 'JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l\'une des technologies cœur du World Wide Web3. Une grande majorité des sites web l\'utilisent4, et la majorité des navigateurs web disposent d\'un moteur JavaScript5 dédié pour l\'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant.\r\n\r\nC\'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets.\r\n\r\nCependant, à la différence d\'un langage orienté objets, les objets de base ne sont pas des instances de classes.', '2021-10-22 09:45:32', 1),
(7, 'La domotique, c’est quoi', 'La domotique s’invite aujourd’hui dans la plupart des habitations et séduit de plus en plus de consommateurs.\r\n\r\nCi-dessous tout ce qu’il y a à savoir sur cette technologie, son principe de fonctionnement, ses différents avantages et son prix.\r\nPour commencer, la domotique, c’est quoi ?\r\n\r\nLa domotique regroupe toutes les techniques permettant de contrôler, de programmer et d’automatiser une habitation. Pour ce faire, elle use des domaines de l’électronique, de la télécommunication ainsi que des automatismes.\r\n\r\nIl faut savoir que la domotique opère dans un très large champ technique et informatique et permet de procéder à la programmation de la plupart des appareils et dispositifs électriques utilisés dans une habitation. Cela peut être les appareils de chauffage, les différents éclairages, les appareils audiovisuels et électroménagers, les systèmes de contrôle d’ouverture/fermeture des portes et fenêtres…\r\n\r\nLa domotique permet de contrôler plus facilement l’habitation par le biais de la gestion des systèmes d’alarme ou de la température dans chaque pièce de la maison. \r\nQuel est le principe de la domotique ?\r\n\r\nLa principale fonction de la domotique est la programmation, le contrôle et l’automatisation à distance ou sur place de l’ensemble des appareils du domicile intégrés au sein du réseau.\r\n\r\nLe réseau en question peut fonctionner avec ou sans fil pour assurer la réception et la transmission des données entre les différents points de commandes et les appareils à contrôler. Chaque appareil peut à son tour se servir du réseau pour communiquer sur son état de fonctionnement aux points de commandes. \r\n\r\nAutrement dit, grâce au réseau (le wifi ou les ondes radio par exemple), les différents équipements électriques communiquent entre eux et sont commandés par un ordinateur central qui a bénéficié d’une programmation préalable. Le réseau électrique de la maison sert à véhiculer les informations. Il faut installer des logiciels sur un ordinateur disposant du système d’exploitation qui permet de gérer l’ensemble des équipements techniques de l’habitation.\r\n\r\nPlus le matériel utilisé est perfectionné et évolué, plus les séries de situations en chaîne aussi appelées scénarios possibles sont nombreuses (heure/fréquence d’allumage du système chauffage, ouverture des fenêtres, programmation de la cafetière, …). \r\nLes technologies de la domotique\r\n\r\nLorsqu’elle est utilisée à l’échelle d’un habitat, la domotique utilise principalement trois technologies :\r\n\r\n    la technologie par réseau câblé ;\r\n    la technologie par réseau sans fil ;\r\n    la technologie courant porteur en ligne ou CPD. \r\n\r\nLa technologie par réseau sans fil\r\n\r\nLa technologie par réseau sans fil permet de contrôler l’ensemble des équipements électriques dans un logement. Elle a l’avantage d’être fiable, rapidement opérationnelle et n’occasionne que peu de pollution électromagnétique. \r\nLa technologie par réseau câblé\r\n\r\nCôté fiabilité, la palme revient néanmoins à la technologie par réseau câblé car elle est insensible aux perturbations électromagnétiques. Ce type de réseau permet l’interconnexion de tous les appareils utilisés dans la maison plus aisément mais il faut plus de temps pour les travaux d’installation. Par conséquent, elle est plus adaptée aux constructions neuves. \r\nLa technologie courant porteur en ligne ou CPD\r\n\r\nEnfin, il y a la technologie CPL qui se sert des prises de courant du logement pour la transmission des informations entre les appareils et les unités de commande. De ce fait, chaque prise reçoit les données qui doivent lui revenir, ce qui permet de gérer plus simplement et réduire le coût d’installation.\r\n\r\nIl s’agit donc d’un dispositif à la mise en œuvre aisée à destination des locataires car l’installation peut être déplacée en fonction de leurs déménagements. Cependant, la technologie CPL présente l’inconvénient de générer plus de pollution électromagnétique par rapport aux autres. \r\nQuels sont les avantages d’un système domotique ? \r\n\r\nLa domotique présente de nombreux avantages dont les plus notables sont les suivants :\r\nLe confort \r\n\r\nLe premier avantage de la domotique est le confort de vie qu’elle apporte aux usagers en centralisant les accès et la commande des équipements domestiques. La technologie permet aussi de bénéficier d’un gain de temps conséquent au quotidien en programmant les tâches récurrentes de la vie courante. \r\n\r\nAinsi, la domotique permet ainsi de se faciliter la vie en donnant par exemple la possibilité de gérer l’ensemble du système d’éclairage de telle sorte à programmer l’allumage et l’extinction des lumières à des heures données en fonction des habitudes des utilisateurs et/ou en programmant des ambiances lumineuses.\r\n\r\nCette technologie permet aussi la gestion des ouvrants (fenêtres et portes), la programmation des équipements comme le lave-vaisselle ou la machine à laver. Ainsi, la domotique donne la possibilité de garder un contrôle permanent de l’habitation, sans être obligé d’y être physiquement. \r\nLa sécurité \r\n\r\nA part le confort offert par la domotique, cette technologie accompagne également les usagers dans leur vie quotidienne et leur offre un certain niveau de sécurité.\r\n\r\nEn effet, grâce à la domotique, il est possible de programmer le système d’ouverture de porte grâce à la reconnaissance vocale, les radars de détection, les alarmes et caméras, les notifications d’alerte en cas de cambriolage ou de sinistre… Tout cela sans avoir à être continuellement présent à la maison. En effet, les systèmes d’alarmes et de vidéosurveillance peuvent être contrôlés et commandés à distance grâce à un Smartphone ou une tablette.\r\nMaintien à domicile\r\n\r\nLa domotique est une véritable révolution pour les personnes à mobilité réduite (PMR), les personnes âgées ainsi que les enfants. En effet, cette technologie est une solution très efficace pour maintenir ces catégories d’usagers à domicile en sécurisant leurs déplacements, en prévenant les accidents domestiques dont ils pourraient être victimes grâce aux détecteurs de mouvements enclenchant la lumière, aux systèmes d’alertes, aux signaux lumineux et bien d’autres encore. \r\nSource d’économies d’énergie \r\n\r\nUne maison domotique permet aussi d’économiser l’énergie. En effet, à condition que l’installation soit bien réalisée, elle permet de faire des économies d’énergie qui peuvent se chiffrer jusqu’à 30% dans un logement.\r\n\r\nPour rappel, depuis 2013, ce dernier doit impérativement être basse consommation et d’ici l’année prochaine (en 2020), la réglementation thermique stipule que les bâtiments devront être à énergie positive (Bepos). Autrement dit, les bâtiments devront être entièrement autonomes d’un point de vue énergétique, c’est-à-dire produire plus d’énergie qu’ils n’en consomment. \r\n\r\nLes bâtiments doivent être plus intelligents et communicants pour parvenir à une réduction de leur consommation. Pour ce faire, on peut avoir recours à l’automatisation des volets roulants, du système de chauffage ou encore par la création de scénarios d’usage des différents équipements …\r\nQuels sont les points de vigilance pour le passage à la domotique ? \r\n\r\nLa domotique est très avantageuse et ce, à bien des niveaux. Néanmoins, elle ne peut être la même pour tous les logements et son déploiement comporte quelques points de vigilance à ne pas perdre de vue :\r\nLes données personnelles \r\n\r\nDans le même contexte que pour les objets connectés, il est légitime de se poser des questions sur les risques de perte de maitrise des données personnelles. D’ailleurs, comme on parle d’accès réseau, il ne faut pas négliger la vulnérabilité aux attaques. Il faut s’assurer de s’équiper d’une technologie qui puisse assurer une réelle protection contre le piratage. \r\nLe coût\r\n\r\nLe coût des installations domotique reste encore relativement élevé bien que l’on puisse trouver sur le marché des produits à bas prix qui permettent de surveiller un logement à distance ou d’automatiser certaines tâches. Cependant, ces produits ont des fonctionnalités très limitées, sans parler de leur coût d’installation.\r\n\r\nD’autre part, il serait intéressant de se pencher sur l’empreinte carbone de tous les appareils et essayer de déterminer si elle peut compenser l’économie d’énergie qu’ils sont censés apporter. Ainsi, il faut se demander si le bénéfice personnel que l’on tire de la domotique ne se solde pas par un bilan écologique global négatif. \r\nLa perte d’autonomie\r\n\r\nLa domotique facilite la vie des usagers et peut être la facilite-t-elle à outrance. En effet, de simples gestes comme ouvrir et fermer des volets, ou allumer et éteindre des lumières à des heures données sont automatisés alors qu’ils ne représentent pas un effort physique important.\r\n\r\nDe ce fait, il est légitime de se demander si la domotique, dans ce sens, ne présente pas un risque de dépendance au réseau internet et favorise le développement d’une certaine forme de paresse.\r\nL’interopérabilité \r\n\r\nLes systèmes utilisés pour l’installation de la domotique ne sont pas toujours compatibles entre eux. En effet, la plupart du temps, leur écosystème est exclusif ce qui rend impossible le fait s’équiper d’appareils de marque différentes.\r\nCombien coûte la domotique ?\r\n\r\nLe prix d’une installation domotique varie d’un projet à un autre en fonction des caractéristiques du système à installer ainsi que de la configuration de l’habitation. Le coût pratiqué par les prestataires va également dépendre des dimensions et de l’état du logement à équiper, des frais d’installation et de la marque choisie. \r\n\r\nAinsi, les tarifs sont plus élevés pour les maisons volumineuses ou en cours de rénovation. Pour avoir un prix précis, il faut demander un devis à plusieurs professionnels pour faire le meilleur choix.\r\n\r\nN’hésitez pas à consulter notre e-book sur la maison connectée et la domotique ! ', '2021-10-27 10:15:13', 2),
(8, 'Énergie éolienne', 'L\'énergie éolienne est l\'énergie du vent, dont la force motrice (énergie cinétique) est utilisée dans le déplacement de voiliers et autres véhicules ou transformée au moyen d\'un dispositif aérogénérateur, comme une éolienne ou un moulin à vent, en une énergie diversement utilisable. L\'énergie éolienne est une énergie renouvelable.\r\n\r\nL\'énergie éolienne est une source d\'énergie intermittente qui n\'est pas produite à la demande, mais selon les conditions météorologiques ; elle nécessite donc des installations de production ou de stockage en remplacement pendant ses périodes d\'indisponibilité. Celles-ci peuvent être prévues avec une assez bonne précision. La part de l\'éolien dans la production mondiale d\'électricité atteignait 4,8 % en 2018 et est estimée à 5,3 % en 2019. Les principaux pays producteurs sont la Chine (28,4 % du total mondial en 2019), les États-Unis (21,2 %) et l\'Allemagne (8,8 %).\r\n\r\nL\'énergie éolienne tire son nom d\'Éole (en grec ancien Αἴολος, Aiolos), le dieu des vents dans la mythologie grecque. ', '2021-10-27 10:16:45', 1);

-- --------------------------------------------------------



--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `thearticle`
--
ALTER TABLE `thearticle`
  ADD CONSTRAINT `fk_thearticle_theuser` FOREIGN KEY (`theuser_idtheuser`) REFERENCES `theuser` (`idtheuser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
