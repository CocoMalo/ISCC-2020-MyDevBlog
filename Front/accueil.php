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

            <a href= "article.php" ><h3> BTS - Lancement du drama Save Me </h3> </a>
                <img src= "https://6.viki.io/image/84f93ded4dc34611a246f55c24cffd42.jpeg?s=900x600&e=t"width= "720" height= "340">
            <h4> D. S.kim </h4>
            <p> BTS, in collaboration with Naver Webtoon, has published a comic series about the BTS Universe.  The webtoon “Save Me” will dive deep into BTS Universe, which has also been illustrated in the “The Most Beautiful Moment in Life” music videos. Big Hit Entertainment provided the plots, and LICO adapted and incorporated them into the webtoon. It will tell the story of seven protagonists who end up going separate ways. Two years later, one of the protagonists Seok Jin returns from the United States and begins searching for his old friends. Stories about each protagonist will be revealed in the course of 16 episodes. The prologue and first two episodes of “Save Me” are now available here, and each episode will be updated every week until April. </p>

            <a href= "article.php" ><h3> BIGHIT X SOURCE MUSIC donne plus d’informations sur son audition mondiale </h3>  </a>
                <img src= "https://altselection.com/wp-content/uploads/2019/09/201351310_1280.jpg"width= "720" height= "340">
            <h4> K-Selection </h4>
            <p> L’audition mondiale de BigHit et de Source Music pour leur nouveau groupe de filles a commencé à accepter les candidatures le 10 septembre. Les deux agences ont ouvert le site web de candidature et révélé les conditions à remplir par les candidates. Selon le site, toute fille âgée de 13 à 19 ans (née entre 2001 et 2007) peut postuler pour les auditions. Vous pouvez postuler en visitant le site web et en soumettant le formulaire d’audition. Les candidates qui réussissent les tests en ligne seront informées séparément de l’audition et les finalistes seront choisies dans les 4 semaines suivant la date de l’audition. PLUS Global Audition est une audition mondiale à grande échelle lancée par BigHit et Source Music pour le prochain groupe de filles qui fera ses débuts en 2021. Il s’agit de leur premier lancement de groupe de filles dirigé par Bang Shi-hyuk de BigHit et par Min Hee-jin, qui attire inévitablement l’attention du monde entier. Les auditions auront lieu dans 16 villes différentes, notamment LA, New York, Melbourne, Taipei, Sapporo, Hanoï, Bangkok et d’autres à partir du 5 au 27 octobre. </p>

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