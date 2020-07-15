<!DOCTYPE html>
<html>
    <head>
        <title> Connexion </title>
        <meta charset="UTF-8">
    </head>

    <body>
        <header> <h1> My DevBlog </h1>
        </header>

        <form action="/action_page.php">
        
            <label for="username"> Identifiant </label>
            <input type="text" id="login" name="username"></br>

            <label for="mname"> Mot de passe </label>
            <input type="text" id="password" name="mname"><br>

            <input type="submit" value="Connexion">

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

    <?php
        session_start();
        if(isset($_POST['id']) && isset($_POST['Mot de passe']) && isset($_POST['Login'])) {


            $db_id = 'id';
            $db_Mot_de_passe = 'Mot de passe';
            $db_Login     = 'Login';
            $db = mysqli_connect($db_id, $db_Mot_de_passe, $db_Lofin)
               or die('could not connect to database');
        
            $id = mysqli_real_escape_string($db,htmlspecialchars($_POST['id'])); 
            $Mot_de_passe = mysqli_real_escape_string($db,htmlspecialchars($_POST['Mot de passe']));
            $Login = mysqli_real_escape_string($db,htmlspecialchars($_POST['Login']));
        
            if($id !== "" && $Mot_de_passe !== "" && $Login !== "")
        {
        
            $requete = "SELECT count(*) FROM utilisateur where 
                nom_utilisateur = '".$id."' and mot_de_passe = '".$Mot_de_passe."' and Login = '".$Login."' ";
        
        
            $exec_requete = mysqli_query($db,$requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
        
            if($count!=0)
        {
           $_SESSION['id'] = $id;
           header('Location: articleS.php');
        }
            else
        {
           header('Location: form-connexion.php');
        }
        }
        
        ?>
    </body>
</html>