<?php



/**
 * cuteText
 *
 * @param  String $text
 * @param  Int $length
 * @return String
 */
function cuteText(String $text, Int $length=255): String{
    if(strlen($text)>$length){
        return substr($text,0,$length). " ...";
    }else{
        return $text;
    }
}

// coupe sans couper les mots
function cuteTheText(string $text,int $length=255):string{
    if(strlen($text)>$length){ //si le texte est plus grand que $length
        $text = substr($text,0,$length); // couper le text à la valeur donnée dans la fonction
        $int = strrpos($text,' '); // retourne le dernier espace sur la phrase coupée (int)
        $text = substr($text,0,$int); //coupe au dernier espace
        return $text." ..."; //retourne la phrase en concaténant "..."
    }
    else{
        return $text; //retourne le texte initiale
    }
    // idem en ternaire
    return strlen($text)>$length?substr($text,0,strrpos(substr($text,0,$length),' '))." ...":$text;
}

/**
 * frenchDate
 * 
 * Permet de transformer une date au format datetime (en français YYYY-MM-JJ HH:MM:SS - en date("Y-m-d H:i/s"))
 * 
 * Si le paramètre est 1, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 09:11"
 * 
 * Si le paramètre vaut 2, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le 15 juillet 2019 à 09h11"
 * 
 * Si le paramètre vaut 3, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 9 heures" (si <= 1 heure -> pas de s à heure !!!)
 * 
 * @param  String $date
 * @return String
 */
function frenchDate($date,$format=1){

    // sortie
    $out="";

    // Les jours en français
    $joursTab = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];

    // Les mois en français, on le fait commencer à 1, car l'expression "n" de date nous donne les mois de 1 (janvier) à 12 (décembre)
    $moisTab = [1=>"janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];

    // transformation de la date en Timestamp (secondes depuis le 1/1/1970 )
    $date = strtotime($date);

    // En switch (vérification d'égalité non stricte "==")
    switch($format){

        case 1:
        $out.="Le "
                .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à H:i",$date); // année / heures / minutes
                break;

        case 2:        
        $out.="Le "
               // .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à H\hi",$date); // antislash pour éviter l'interprétation de h
                break;
        case 3:
        $out.="Le "
                .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à ",$date); // année
        // vérification pour le "s" de heure (si au dessus "01", récupération de l'heure, toujours unstring)
        $h = date("H",$date);
        // avec un comparaison non stricte, par défaut PHP utilise le transtypage, donc "H" qui est un string, par exemple "02" (convertit en int) sera comparé à 2 
        if($h >= 2) {
            $out.=$h." heures";
        }else{
            $out.=$h." heure";
        }
        break;

        // équivalence du else (si rien n'est vrai)
        default:

            return "Format de date non reconnue";   
    }


    return $out;
}

