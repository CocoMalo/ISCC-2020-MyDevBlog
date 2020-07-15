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
