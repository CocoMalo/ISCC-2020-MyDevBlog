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
            ?>


<?php

echo "<ul>";

foreach ($article as $article) { 
    
    echo "<li>" ;
    echo $article ["titre"]."<br/>";
    echo "<a href= "'front.php?page=article. & id= ".$article ["id"]."'> ".$article["titre"]." </a>"" ; 
    echo "</li>"
}
    echo "</ul>"


echo "<a href= "article.php"> $query </a>" ;
  
?>
        </main>

        <footer>
        <?php 
        include "front-footer.php"
        ?>
        </footer>
    </body>
</html>