<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 11/02/2017
 * Time: 17:28
 */
?>

<!DOCTYPE html>
<!-- Cas où le navigateur est IE -->
<?php include "include/internet_explorer.php"; ?>

<head>
    <!-- Meta -->
    <?php include 'include/meta.php'; ?>

    <!-- Link -->
    <?php include 'include/link.php'; ?>

    <!-- CSS navbar -->
    <link rel="stylesheet" href="css/navbar.css">
    <!-- CSS général -->
    <link rel="stylesheet" href="css/page_connexion.css">
    <!-- Media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body>
<!-- Navbar -->
<?php include 'include/navbar_page_autre_que_index.php'; ?>

<div class="cont">
    <div class="demo wow zoomIn animated">
        <div class="login">
            <div class="logo-nbi">
                <img src="img/logo-page-ins.png">
            </div>
            <form>
                <div class="login__form">
                    <div class="login__row">
                        <i class="fa fa-envelope-o fa-lg login__icon"></i>
                        <input type="text" class="login__input name" placeholder="E-mail"/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock-alt fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" placeholder="Mot de passe"/>
                    </div>
                    <button type="button" class="login__submit">Se connecter</button>
                    <p class="login__signup">Vous n'avez pas de compte ? &nbsp;<a href="page_inscription.php">Inscrivez-vous</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
