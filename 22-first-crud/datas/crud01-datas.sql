-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 04 oct. 2021 à 16:17
-- Version du serveur :  10.5.4-MariaDB
-- Version de PHP : 7.3.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `crud01`
--

--
-- Déchargement des données de la table `theuser`
--

INSERT INTO `theuser` (`idtheuser`, `theuserlogin`, `theuserpwd`, `theusermail`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com'),
(2, 'Lulu', 'Lulu', 'lulu@lulu.com');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

--
-- Déchargement des données de la table `thearticle`
--

INSERT INTO `thearticle` (`idthearticle`, `thearticletitle`, `thearticletext`, `thearticledate`, `theuser_idtheuser`) VALUES
(2, 'Première mondiale : un drone marin filme le cœur d\'un ouragan de catégorie 4', 'Le 30 septembre 2021, un drone marin a collecté des données et filmé l\'oeil du cyclone Sam de catégorie 4, une expérience inédite qui permettra de mieux comprendre les cyclones et renforcer la prévention pour les populations côtières.\r\n\r\nPour mieux comprendre les océans et leurs caractéristiques, les espèces qui y vivent et la météo marine, la NOAA (National Oceanic and Atmospheric Administration) s\'appuie notamment sur les drones marins élaborés par Saildrone Inc. depuis 2015.\r\nIl s\'agit de petits \"voiliers\" (6 m de long sur 5 m au-dessus de l\'eau pour 270 kg) complètement autonomes en énergie (grâce à leurs panneaux solaires et leur voile) capables d\'accomplir des missions scientifiques pendant des mois dans les conditions les plus extrêmes.\r\n\r\nBien moins coûteux que les imposants navires de recherche (où une journée en mer coûte près de 10 000 dollars), ces nouveaux drones marins pilotés à distance peuvent aller partout, sans limite de temps et quelque soient les conditions météorologiques comme en témoignent ces images inédites capturées au cœur du cyclone Sam, le 30 septembre 2021.\r\n\r\nLe drone marin Saildrone Explorer SD 1045 a été paramétré pour rencontrer l\'ouragan Sam qui traverse l\'océan Atlantique nord. Le SD 1045 a affronté des vagues de 15 mètres de haut et des vents de 200 km/h pour collecter des données scientifiques critiques et, nous fournit ainsi une toute nouvelle vision de l\'une des forces les plus destructrices de la Terre.\r\n« Saildrone va là où aucun navire de recherche ne s\'est jamais aventuré, naviguant droit dans l\'œil de l\'ouragan, recueillant des données qui transformeront notre compréhension de ces puissantes tempêtes », a déclaré Richard Jenkins, fondateur et PDG de Saildrone.\r\n\r\nÉquipé d\'une \"voile ouragan\" spécialement conçue pour affronter des conditions de vent extrêmes, le SD 1045 a collecté des données en temps réel pour les modèles numériques de prévision des ouragans, qui devraient fournir de nouvelles informations sur la taille et les cyclones tropicaux qui ont tendance à se multiplier et s\'intensifier, à cause du réchauffement des océans.\r\n', '2021-10-04 16:11:16', 2),
(3, 'Un nouveau skate park accessible bientôt le long du canal', 'C’est le premier véritable skate park à Bruxelles qui sera accessible gratuitement. Il est en cours d’aménagement le long du canal à Neder-Over-Hembeek. Le projet a été initié par le Port de Bruxelles qui espère l’inaugurer aux alentours du mois de mai. Les travaux de sécurisation doivent encore être terminés.\r\n\r\nPatrimoine industriel et espace récréatif\r\nSous une grande grue, juste au bord de l’eau, un skate park est en train de voir le jour le long du canal. Le gros du chantier est terminé, reste tous les travaux de sécurisation du site à réaliser. Mais pourquoi le port a-t-il décidé de développer une telle infrastructure à cet endroit ? \" En fait, il s’agissait d’une friche portuaire \" explique Philippe Matthis, le directeur du port. \"On avait là 625 mètres carrés qui étaient inutilisables pour les besoins du port. Et comme on a une logique d’intégration urbaine du port, on a imaginé un plan global. On a d’abord voulu mettre à cet endroit une grue industrielle, un témoin du passé que nous avons rénové. Et en dessous, comme la grue est quand même conséquente, on s’est dit qu’on allait utiliser l’espace pour une activité récréative. Et donc l’idée a germé d’en faire un skate park puisqu’il apparaissait qu’il y a peu d’espace pour ce genre de pratique. Et à cet endroit-là, c’est une pratique qui ne devrait gêner personne au contraire. Donc on a allié les deux : le témoin du passé avec une activité récréative qui s’inscrit dans une promenade le long de la berge\".\r\n\r\nBruxelles manque d’infrastructure pour les sports de glisse\r\nCe skate park de nouvelle génération (en béton) qui sera accessible gratuitement, est le premier du genre à Bruxelles. Les skaters considèrent davantage l’espace des Ursulines (Place de la Chapelle) comme une place \"skatable\". Alors certes, ceux que nous avons interrogés saluent l’initiative mais la juge insuffisante à l’échelle d’une ville comme Bruxelles. \"C’est bien sûr une bonne nouvelle d’avoir quand même quelque chose à disposition\" détaille Max Evrard, skater et organisateur d’événements de sports extrêmes. \"Maintenant voilà, ça reste quand même la capitale européenne. On s’attendrait plutôt à voir un grand grand skate park plutôt qu’un petit comme celui-ci. Mais comme je le dis, c’est déjà un bon début\".\r\n\r\nDamien Delsaux, skater et coordinateur de l\'asbl Skateboarders abonde dans le même sens : \"C’est que des infrastructures se développent, mais on manque vraiment d’un grand skate park digne de ce nom. Parce qu’aujourd’hui, tous les \" spots \" urbains (Mont des Arts, Trône, place Morichart…) sont saturés. Le skate revient à la mode avec le fait aussi qu’il sera aux prochains Jeux Olympiques. Il y a plein de monde partout\".\r\n\r\nManque d’espace, manque de volonté des autorités publiques\r\nComparées à la Flandre, la Wallonie et Bruxelles sont clairement à la traîne dans le développement de ce type d’infrastructure. \"Je pense que dans le cas de Bruxelles, c’est d’ailleurs un peu le problème des grandes villes, il y a un manque d’espace. Et on connaît aussi les difficultés institutionnelles de la capitale, entre les communes, la Région explique Pierre Jambé, ancien champion de Belgique de skate et concepteur de skate park. \"Je pense aussi que c’est l’histoire d’une rencontre qui n’a pas eu lieu. Entre des dirigeants qui ont des préoccupations et des jeunes qui ont des demandes qui ne sont pas rencontrées\".\r\n\r\nNouveaux projets\r\nL\'échevin des sports de la Ville de Bruxelles, Benoît Hellings, s’apprête justement a rencontré la semaine prochaine une série d’acteurs du monde du skate dans le cadre du développement de plusieurs skates park au Bois de la Cambre, à Laeken ou encore au centre-ville. Des skates parks modulaires et temporaires avant d’éventuels aménagements structurels. \"C’est vrai qu’il y a pas mal d’initiatives qui se mettent en place \", reconnaît Damien Delsaux. \"Mais de nouveaux ce sont de petits projets. Il n’y en a pas un seul qui répond réellement aux besoins des utilisateurs\".', '2021-10-04 16:15:13', 1);


