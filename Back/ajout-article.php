<!DOCTYPE html>
<html>
    <head>
        <title> Ajout d'article </title>
        <meta charset="UTF-8">
    <head> 

    <body>
        <header> <h1> My DevBlog </h1>
        </header>
        
        <form action="verification.php" method="POST">
                
            <input type="text" placeholder="Titre" name="Title" required>
            <input type="text" placeholder="Article" name="article" required>
            <input type="text" placeholder="Signature" name="auteur">

            <input type="submit" value="Envoyer">

        </form>

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
    </body>
</html>