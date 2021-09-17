<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion des messages</title>
        <link type="text/css" rel="stylesheet" href="livre.css" />
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Lire les messages</a></li>
                <li><a href="ajout.php">Ajouter un message</a></li>
                <li><a href="gestion.php">Gérer les messages</a></li>
            </ul>
        </nav>
        <header>
            <h1>Gérer les messages</h1>
        </header>
        <main>
            <!-- Pour supprimer un message de la liste, on a une requête comme :
            DELETE FROM messages WHERE id=4;
            -->
            <!-- Pour récupérer toutes les données de la table
            On a besoin d'un requête comme :
            SELECT * FROM messages ORDER BY date_msg DESC;
            -->
            <!-- Pour modifier le texte d'un message sur le 1er enregistrement
            UPDATE messages
            SET msg="Nouveau Message corrigé"
            WHERE id=1;     si on veut modifier le 1er message
            -->
            <table class="admin">
                <!-- Rangée avec les titres des colonnes du tableau -->
                <tr>
                    <th>id</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date-Heure</th>
                    <th></th>
                </tr>
                <!-- Rangées de contenu -->
                <tr>
                    <td>3</td>
                    <td>André</td>
                    <td>andre.palmisano@cf2m.be</td>
                    <td>Hello les gars !</td>
                    <td>08-09-2021 11:32:51</td>
                    <td>Supprimer</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Michaël</td>
                    <td>michael.pitz@cf2m.be</td>
                    <td>Salut lulu !
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit optio, non veritatis praesentium accusamus dolor tempora, ea reprehenderit nobis incidunt, impedit dolores. Eius, atque corrupti labore possimus sed quidem sequi.</td>
                    <td>08-09-2021 11:15:25</td>
                    <td>Supprimer</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pierre</td>
                    <td>pierre.sandron@cf2m.be</td>
                    <td>Bonjour les amis !
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi eligendi quibusdam omnis voluptates, natus molestiae totam eius ratione, fugiat voluptatum esse voluptatibus nostrum. Quisquam odio culpa, voluptates velit id soluta.</td>
                    <td>08-09-2021 11:06:45</td>
                    <td>Supprimer</td>
                </tr>
            </table>
        </main>
        <footer>
            <p>Réalisé par Pierre, dans le cadre de la formation Web Développeur du CF2m</p>
        </footer>
    </body>
</html>