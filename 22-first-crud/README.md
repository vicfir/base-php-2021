# Notre premier CRUD

CRUD signifie Create, Read, Update, Delete

## Base de donnée

La DB doit être installée sur MariaDB ou MySQL v5.7 

- Inportez dans PHPMyAdmin d'abord `datas/crud01-structure.sql` (création de la DB et des tables)
- Inportez dans PHPMyAdmin en ayant sélectionné la DB crud01  `datas/crud01-datas.sql` (importation des données, désactivez la vérification des clefs étrangères , Foreign keys)

## Structure du site
#### Dossiers:
- datas -> données de préparation du travail, fichier SQL, PDF, PSD etc...
- admin -> les pages permettant d'administrer le site
- public_page -> nos pages publiques chargées par notre contrôleur frontal index.php
#### Fichiers
- index.php -> contrôleur frontal
- config.php -> contient nos constantes de règlage SQL et autre
