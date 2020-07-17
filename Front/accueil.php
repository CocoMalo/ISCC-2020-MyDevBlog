<!DOCTYPE html>
<html>
    <head>
        <title> Accueil </title>
        <meta charset="UTF-8">
    </head>

    <body>
        
    <?php
            include "front.php"
         ?>
    
        <main>
            <p> Un DevBlog est généralement un blog très simple tenue par une équipe de développement pour partager l’avancement d’un projet ou pour partager les techniques et technologies qu’ils utilisent durant leur travail. Ici nous en créons un afin de mettre en application ce que nous avons appris pendant l'ISCC 2020. </p>

            <h2> Dernières publications </h2>

            <?php
                $pdo = connect_to_database(MyDevBlog);

                $query = $pdo->query ("SELECT * FROM articles"); 
                $user = $query->fetch();
                var_dump($user);
        
                $users = $pdo->query("SELECT * FROM articles")->fetchAl1();
        
                var_dump($users); 
                foreach ($users as $user) { 
                    echo $user['articles']."<br/>"; 
                }

                try { 
                    $sdo = new PDO ("mysql:host=$servernamer;dbname=$databasename", $titre, $image, $Date_de_publication, $Auteur, $Contenu_texte, $Extraint);
                    

                    return $sdo;
                } catch (PDOExeption $e) { 
                    echo "<li> </li>". $e-> getMessage() ; 
                }

            ?>



        </main>
 
<footer>
        <?php 
         include "front-footer.php"
        ?>
    </footer>

    </body>
</html>