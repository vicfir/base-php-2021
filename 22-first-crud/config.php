<?php

// fichier de configuration

// MariaDB connexion
define("MDB_HOST","localhost");
define("MDB_PORT",3307);
define("MDB_NAME","crud013");
define("MDB_USER","root");
define("MDB_PWD","");
define("MDB_CHARSET","utf8");

// Règlages d'affichage des news
define("NEWS_HOME_LENGTH", 220); // nombre de caractères du texte sur la page d'accueil
define("NEWS_BR",true); // si true, retours automatiques à la ligne, si false pas de <br>