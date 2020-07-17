-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 15 juil. 2020 à 09:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `MyDevBlog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Titre` text NOT NULL,
  `Image` int(11) NOT NULL,
  `Date publication` date NOT NULL,
  `Auteur` text NOT NULL,
  `Contenu texte` text NOT NULL,
  `Extrait` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT * FROM `article` WHERE 1;
INSERT INTO Titre VALUES ("BTS - Lancement du drama Save Me", "BIGHIT X SOURCE MUSIC donne plus d’informations sur son audition mondiale", );
INSERT INTO Image VALUES ("save-me", "BigHit-audition",  );
INSERT INTO Date publication VALUES ("Jan 17, 2019", "Jan 20, 2020", );
INSERT INTO Auteur VALUES ("D. S.kim", "K-Selection",  );
INSERT INTO Contenu VALUES ("BTS, in collaboration with Naver Webtoon, has published a comic series about the BTS Universe.  The webtoon “Save Me” will dive deep into BTS Universe, which has also been illustrated in the “The Most Beautiful Moment in Life” music videos. Big Hit Entertainment provided the plots, and LICO adapted and incorporated them into the webtoon. It will tell the story of seven protagonists who end up going separate ways. Two years later, one of the protagonists Seok Jin returns from the United States and begins searching for his old friends. Stories about each protagonist will be revealed in the course of 16 episodes. The prologue and first two episodes of “Save Me” are now available here, and each episode will be updated every week until April.",
"L’audition mondiale de BigHit et de Source Music pour leur nouveau groupe de filles a commencé à accepter les candidatures le 10 septembre. Les deux agences ont ouvert le site web de candidature et révélé les conditions à remplir par les candidates. Selon le site, toute fille âgée de 13 à 19 ans (née entre 2001 et 2007) peut postuler pour les auditions. Vous pouvez postuler en visitant le site web et en soumettant le formulaire d’audition. Les candidates qui réussissent les tests en ligne seront informées séparément de l’audition et les finalistes seront choisies dans les 4 semaines suivant la date de l’audition. PLUS Global Audition est une audition mondiale à grande échelle lancée par BigHit et Source Music pour le prochain groupe de filles qui fera ses débuts en 2021. Il s’agit de leur premier lancement de groupe de filles dirigé par Bang Shi-hyuk de BigHit et par Min Hee-jin, qui attire inévitablement l’attention du monde entier. Les auditions auront lieu dans 16 villes différentes, notamment LA, New York, Melbourne, Taipei, Sapporo, Hanoï, Bangkok et d’autres à partir du 5 au 27 octobre.",
 );
INSERT INTO Extrait VALUES ("BTS, in collaboration with Naver Webtoon, has published a comic series about the BTS Universe. The webtoon “Save Me” will dive deep into BTS Universe, which has also been illustrated in the “The Most Beautiful Moment in Life” music videos. Big Hit Entertainment provided the plots, and LICO adapted and incorporated them into the webtoon.",
"L’audition mondiale de BigHit et de Source Music pour leur nouveau groupe de filles a commencé à accepter les candidatures le 10 septembre.",
 );