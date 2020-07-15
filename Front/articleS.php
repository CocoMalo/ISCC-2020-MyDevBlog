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
            <a href= "article.php"> Joindre Basedonnée </a> </br>

    </main>
    
    <footer>
        <?php 
        include "front-footer.php"
        ?>
    </footer>

    </body>
</html>