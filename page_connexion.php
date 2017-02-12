<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 11/02/2017
 * Time: 17:28
 */
include './app/bootstrap.inc.php';

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

<?php include 'php/connexion_php.php'; ?>
<?php include 'include/navbar_page_autre_que_index.php'; ?>

<div class="cont">
    <div class="demo wow zoomIn animated">
        <div class="login">
            <div class="logo-nbi">
                <img src="img/logo-page-ins.png">
            </div>
            <form method="POST" action="">
                <div class="login__form">
                    <div class="login__row">
                        <i class="fa fa-envelope-o fa-lg login__icon"></i>
                        <input type="text" class="login__input name" name="login" placeholder="Login" value="<?php echo @$_POST['login']?>" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock-alt fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" name="mdp" placeholder="Mot de passe" value="<?php echo @$_POST['login']?>" required/>
                    </div>
                    <button type="submit" class="login__submit" name="connexion">Se connecter</button>
                    <p class="login__signup">Vous n'avez pas de compte ? &nbsp;<a href="page_inscription.php">Inscrivez-vous</a></p>
                    <p class="login__signup">Vous avez perdu votre &nbsp;<a href="motdepasseoublie.php">mot de passe</a> ?</p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
