<!DOCTYPE html>
<html>
    <head>
        <title> Articles </titles>
        <meta charset="UTF-8">
    </head>

    <body>

    <?php
            include "front.php"
        ?>
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
    
    <main>
            <h2> Articles </h2>

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