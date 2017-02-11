<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 10/02/2017
 * Time: 22:57
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
    <link rel="stylesheet" href="css/page_inscription.css">
    <!-- Media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body>
<!-- Navbar -->
<?php include 'include/navbar.php'; ?>

<div class="cont">
    <div class="demo wow zoomIn animated">
        <div class="login">
            <div class="logo-nbi">
                <img src="img/logo-page-ins.png">
            </div>
            <form>
                <div class="login__form">
                    <div class="login__row">
                        <i class="fa fa-user fa-lg login__icon"></i>
                        <input type="text" class="login__input name" placeholder="Prenom"/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-user fa-lg login__icon"></i>
                        <input type="text" class="login__input name" placeholder="Nom"/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-envelope-o fa-lg login__icon"></i>
                        <input type="text" class="login__input name" placeholder="E-mail"/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock-alt fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" placeholder="Mot de passe"/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" placeholder="Confirmation mot de passe"/>
                    </div>
                    <button type="button" class="login__submit">Créer un compte</button>
                    <p class="login__signup">Vous avez déjà un compte ? &nbsp;<a href="page_connexion.php">Connectez-vous</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>