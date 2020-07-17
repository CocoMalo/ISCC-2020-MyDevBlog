<!DOCTYPE html>
<html>
    <head>
        <title> Utilisateurs </title>
        <meta charset="UTF-8">
    <head> 

    <body>
        <?php
            include "front.php"
        ?>

    <?php
            $pdo = connect_to_database(MyDevBlog);

            $query = $pdo->query ("SELECT * FROM utilisateurs"); 
            $user = $query->fetch();
            var_dump($user);
        
            $users = $pdo->query("SELECT * FROM utilisateurs")->fetchAl1();
        
            var_dump($users); 
            foreach ($users as $user) { 
                echo $user['utilisateurs']."<br/>"; 
            }
    ?>

    <?php
        function afficher_utilisateurs ($id, $Login) { 
            echo "$id, $Login </br>";
        }
        afficher_utilisateurs ();
    ?>

    </body>
</html>