<!DOCTYPE html>
<html>
    <head>
        <title> Contacts </titles>
        <meta charset="UTF-8">
    </head>

    <body>

    <?php
            include "front.php"
        ?>
    
    <form action="/action_page.php">
        
        <label for="fname"> Nom </label>
        <input type="text" id="fname" name="fname">

        <label for="lname"> Prémon </label>
        <input type="text" id="lname" name="lname"><br>

        <label for="lname"> E-mail </label>
        <input type="text" id="lname" name="lname"><br>

        <label for="lname"> Message </label>
        <input type="text" id="lname" name="lname"><br>

        <input type="submit" value="Envoyer">
    </form> 

<footer>
        <?php 
        include "front-footer.php"
        ?>
    </footer>

    </body>
</html>