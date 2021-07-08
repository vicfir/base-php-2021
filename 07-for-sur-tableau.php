<?php
// variable contenant tous les pays (ou presque) dans un tableau indexé à 1 niveau (1 dimension)
$tabPays = array(' 
Afghanistan ', ' Afrique du Sud ', ' Albanie ', ' Algérie ', ' Allemagne ', ' Andorre ', ' Angola ', ' Anguilla ', ' Antarctique ', ' Antigua-et-Barbuda ', ' Antilles néerlandaises ', ' Arabie saoudite ', ' Argentine ', ' Arménie ', ' Aruba ', ' Australie ', ' Autriche ', ' Azerbaïdjan ', ' Bahamas ', ' Bahreïn ', ' Bangladesh ', ' Barbade ', ' Bélarus ', ' Belgique ', ' Belize ', ' Bénin ', ' Bermudes ', ' Bhoutan ', ' Bolivie ', ' Bosnie-Herzégovine ', ' Botswana ', ' Brésil ', ' Brunéi Darussalam ', ' Bulgarie ', ' Burkina Faso ', ' Burundi ', ' Cambodge ', ' Cameroun ', ' Canada ', ' Cap-Vert ', ' Chili ', ' Chine ', ' Chypre ', ' Colombie ', ' Comores ', ' Congo ', ' Corée du nord ', ' Corée du sud ', ' Costa Rica ', ' Côte d’Ivoire ', ' Croatie ', ' Cuba ', ' Danemark ', ' Djibouti ', ' Dominique ', ' Egypte ', ' El Salvador ', ' Emirats arabes unis ', ' Equateur ', ' Erythrée ', ' Espagne ', ' Estonie ', ' Etats-Unis d’Amérique ', ' Ethiopie ', ' Fédération de Russie ', ' Fidji ', ' Finlande ', ' France ', ' Gabon ', ' Gambie ', ' Géorgie ', ' Ghana ', ' Gibraltar ', ' Grèce ', ' Groenland ', ' Guadeloupe ', ' Guam ', ' Guatemala ', ' Guinée ', ' Guinée équatoriale ', ' Guinée-Bissau ', ' Guyana ', ' Guyane française ', ' Haïti ', ' Honduras ', ' Hong Kong ', ' Hongrie ', ' Ile De Bouvet ', ' Ile Norfolk ', ' Iles Caïmanes ', ' Iles Cook<' , ' Iles d’Aland ', ' Iles Falkland ', ' Iles Féroé ', ' Iles Mariannes septentrionales ', ' Iles Marshall ', ' Iles Salomon ', ' Iles Svalbard et Jan Mayen ', ' Iles Turques et Caïques ', ' Iles Vierges américaines ', ' Iles Vierges britanniques ', ' Iles Wallis et Futuna ', ' Inde ', ' Indonésie ', ' Iran ', ' Iraq ', ' Irlande ', ' Islande ', ' Israel ', ' Italie ', ' Jamaïque ', ' Japon ', ' Jordanie ', ' Kazakhstan ', ' Kenya ', ' Kirghizistan ', ' Kiribati ', ' Koweït ', ' Laos ', ' Lesotho ', ' Lettonie ', ' Liban ', ' Libéria ', ' Libye ', ' Liechtenstein ', ' Lituanie ', ' Luxembourg ', ' Macao ', ' Madagascar ', ' Malaisie ', ' Malawi ', ' Maldives ', ' Mali ', ' Malte ', ' Maroc ', ' Martinique ', ' Maurice ', ' Mauritanie ', ' Mayotte ', ' Mexique ', ' Micronésie ', ' Moldovie ', ' Monaco ', ' Mongolie ', ' Montserrat ', ' Mozambique ', ' Myanmar ', ' Namibie ', ' Nauru ', ' Népal ', ' Nicaragua ', ' Niger ', ' Nigéria ', ' Nioué ', ' Norvège ', ' Nouvelle-Calédonie ', ' Nouvelle-Zélande ', ' Oman ', ' Ouganda ', ' Ouzbékistan ', ' Pakistan ', ' Palaos ', ' Panama ', ' Papouasie-Nouvelle-Guinée ', ' Paraguay ', ' Pays-Bas ', ' Pérou ', ' Philippines ', ' Pitcairn ', ' Pologne ', ' Polynésie française ', ' Porto Rico ', ' Portugal ', ' Qatar ', ' République centrafricaine ', ' République démocratique du Congo ', ' République dominicaine ', ' République tchèque ', ' Réunion ', ' Roumanie ', ' Royaume-Uni ', ' Rwanda ', ' Saint-Kitts-et-Nevis ', ' Saint-Marin ', ' Saint-Pierre-et-Miquelon ', ' Saint-Siège ', ' Saint-Vincent-et-les Grenadines ', ' Sainte-Hélène ', ' Sainte-Lucie ', ' Samoa ', ' Samoas américaines ', ' Sao Tomé-et-Principe ', ' Sénégal ', ' Serbie-et-Monténégro ', ' Seychelles ', ' Sierra Leone ', ' Singapour ', ' Slovaquie ', ' Slovénie ', ' Somalie ', ' Soudan ', ' Sri Lanka ', ' Suède ', ' Suisse ', ' Suriname ', ' Swaziland ', ' Syrie ', ' Tadjikistan ', ' Taiwan ', ' Tanzanie ', ' Tchad ', ' Territoire palestinien occupé ', ' Thaïlande ', ' Timor-Leste ', ' Togo ', ' Tokélaou ', ' Tonga ', ' Trinité-et-Tobago ', ' Tunisie ', ' Turkménistan ', ' Turquie ', ' Tuvalu ', ' Ukraine ', ' Uruguay ', ' Vanuatu ', ' Venezuela ', ' Viet Nam ', ' Yémen ', ' Zambie ', ' Zimbabwe ');

// affichez tous les pays de la liste avec une boucle for() et un count()

// on va compter le nombre d'éléments contenus dans le tableau et le mettre dans une variable
$countPays = count($tabPays);

// on va afficher le nombre de pays
echo "<h1>Il y a $countPays pays dans notre liste</h1>";

// on va utiliser la boucle for pour afficher chaque pays
for($i=0; $i<$countPays; $i++){

    // Pour afficher le résultat d'une addition on va utiliser la règle PEMDAS ( https://math-coaching.com/fiche/determiner-ordre-priorite-operations-PEMDAS-47 ), donc exécution des parenthèses AVANT l'affichage de l'echo. La conversion de numérique ( $i+1 = int) vers la chaîne de caractère est automatiquement faite en PHP avec le signe de concaténation (. ou ,). On utilise $i comme clef (ou index) du tableau $tabPays avec les [] pour récupérer la valeur
    echo ($i+1).") $tabPays[$i]<br>";
}
// vérification de la première et dernière clef supposées existantes
echo "<br>$tabPays[0] - $tabPays[229]";
// quand on dit que PHP est tableau
$string = "bonjour les amis";
// variable qui contient le nombre de caractères
$nbString = strlen($string);
