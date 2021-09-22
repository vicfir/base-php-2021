<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon livre d'or</title>
        <link type="text/css" rel="stylesheet" href="livre.css" />
    </head>
    <body>
        <nav>
            <?php
            // on importe le fichier contenant le menu
            include "menu.php";
            ?>
        </nav>
        <header>
            <h1>Lire les messages</h1>
        </header>
        <main>
            <div class="bouton">
                <a href="ajout.php">Ajouter un nouveau message</a>
            </div>
            <!-- NB: pour connaître le nombre de messages présents dans la DB,
                 on pourrait utiliser une requête comme :
                 SELECT COUNT(id) FROM messages;
            -->     
            <!-- Cette section doit être affichée quand il n'y a encore aucun message -->
<!--
            <section class="no-msg">
                <h2>Il n'y a pas de message à afficher</h2>
                <p>Utiliser le bouton "Ajouter un message" pour en créer un.</p>
            </section>
-->            
            <!-- Cette section doit être affichée quand il y a des messages dans la DB -->
            <section class="msgs">
                <!-- On a besoin d'un requête qui va renvoyer :
                le pseudo, le texte du message et la date/heure, pour tous les messages
                classés du plus récent jusqu'au plus ancien.
                    SELECT pseudo, msg, date_msg
                    FROM messages
                    ORDER BY date_msg DESC;
                -->
                <h2>Les derniers messages</h2>
                <article>
                    <!-- titre contient le pseudo et l'email -->
                    <h3>Message de André</h3>
                    <!-- div avec le contenu du message -->
                    <div>Hello les gars !</div>
                    <!-- date et heure de création du message -->
                    <p>Ecrit le 08-09-2021 11:32:51</p>
                </article>
                <article>
                    <!-- titre contient le pseudo et l'email -->
                    <h3>Message de Michaël</h3>
                    <!-- div avec le contenu du message -->
                    <div>Salut lulu !
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit optio, non veritatis praesentium accusamus dolor tempora, ea reprehenderit nobis incidunt, impedit dolores. Eius, atque corrupti labore possimus sed quidem sequi.</div>
                    <!-- date et heure de création du message -->
                    <p>Ecrit le 08-09-2021 11:15:25</p>
                </article>
                <article>
                    <!-- titre contient le pseudo et l'email -->
                    <h3>Message de Pierre</h3>
                    <!-- div avec le contenu du message -->
                    <div>Bonjour les amis !
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi eligendi quibusdam omnis voluptates, natus molestiae totam eius ratione, fugiat voluptatum esse voluptatibus nostrum. Quisquam odio culpa, voluptates velit id soluta.</div>
                    <!-- date et heure de création du message -->
                    <p>Ecrit le 08-09-2021 11:06:45</p>
                </article>
            </section>
        </main>
        <footer>
            <p>Réalisé par Pierre, dans le cadre de la formation Web Développeur du CF2m</p>
        </footer>
    </body>
</html>