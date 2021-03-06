<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 11/02/2017
 * Time: 18:12
 */
?>
<!--
Navbar Fixe
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- Bouton Nav responsive -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i id="bouton-navbar-mobile" class="fa fa-bars fa-2x"></i>
            </button>
            <!-- Fin Bouton Nav responsive -->

            <!-- Logo -->
            <a class="navbar-brand wow bounceInLeft animated" href="index.php">
                <h1 id="logo">
                    <img id="logo-navbar" class="padding-left-top" src="img/logobleu.png" alt="NBi - Communication">
                </h1>
            </a>
            <!-- Fin Logo -->
        </div>

        <!-- Nav -->
        <nav class="collapse navbar-collapse navbar-right wow fadeInRightBig animated" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a class="a-navbar" href="index.php" id="navbar-accueil">Accueil</a></li>
                <li><a class="a-navbar" href="index.php#prestations" id="navbar-prestations">Prestations</a></li>
                <li><a class="a-navbar" href="index.php#works" id="navbar-realisations">Réalisations</a></li>
                <li><a class="a-navbar" href="index.php#equipe" id="navbar-equipe">Équipe</a></li>
                <li><a class="a-navbar" href="index.php#contact" id="navbar-contact">Contact</a></li>
                <li><a class="a-navbar" href="page_connexion.php" id="navbar-seconnecter">Se connecter</a></li>
                <li><a class="a-navbar" href="page_inscription.php" id="navbar-sinscrire">S'inscrire</a></li>
            </ul>
        </nav>
        <!-- Fin Nav -->

    </div>
</header>
<!--
Fin Navbar Fixe
==================================== -->

