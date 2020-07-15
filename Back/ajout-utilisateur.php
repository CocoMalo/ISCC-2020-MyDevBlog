<!DOCTYPE html>
<html>
    <head>
        <title> Création utilisateur </title>
        <meta charset="UTF-8">
    <head> 

    <body>
        <header> <h1> My DevBlog </h1>
        </header>

        <form action="/action_page.php">
        
            <label for="username"> Identifiant </label>
            <input type="text" id="login" name="username"></br>

            <label for="mname"> Mot de passe </label>
            <input type="text" id="password" name="mname"><br>

            <label for="mname"> Confirmer mot de passe </label>
            <input type="text" id="password" name="mname"><br>

            <input type="submit" value="Création">

        </form>

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

    </body>
</html>