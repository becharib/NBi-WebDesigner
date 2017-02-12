<?php
/**
 * Created by PhpStorm.
 * User: Bilal
 * Date: 10/02/2017
 * Time: 22:57
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
    <link rel="stylesheet" href="css/page_inscription.css">
    <!-- Media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body>
<!-- Navbar -->

<?php include "php/envoi_inscription_php.php";?>
<?php include 'include/navbar_page_autre_que_index.php'; ?>


<div class="cont">
    <div class="demo wow zoomIn animated">
        <div class="login">
            <div class="logo-nbi">
                <img src="img/logo-page-ins.png">
            </div>
            <form action="" method="post">
                <div class="login__form">
                    <div class="login__row">
                        <i class="fa fa-user fa-lg login__icon"></i>
                        <input type="text" class="login__input name" name="prenomInscri" value="<?php echo @$_POST['prenomInscri']; ?>" placeholder="Prenom" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-user fa-lg login__icon"></i>
                        <input type="text" class="login__input name" name="nomInscri" value="<?php echo @$_POST['nomInscri']; ?>" placeholder="Nom" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-user fa-lg login__icon"></i>
                        <input type="text" class="login__input name" name="loginInscri" value="<?php echo @$_POST['loginInscri']; ?>" placeholder="Login" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-envelope-o fa-lg login__icon"></i>
                        <input type="email" class="login__input name" placeholder="E-mail" name="mailInscri" value="<?php echo @$_POST['subscribe_nbi']; echo @$_POST['mailInscri'];?>" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock-alt fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" name="mdpInscri" value="<?php echo @$_POST['mdpInscri']; ?>" placeholder="Mot de passe" required/>
                    </div>
                    <div class="login__row">
                        <i class="fa fa-unlock fa-lg login__icon"></i>
                        <input type="password" class="login__input pass" name="confirmInscri" value="<?php echo @$_POST['confirmInscri']; ?>" placeholder="Confirmation mot de passe" required/>
                    </div>
                    <button type="submit" name="envoyerInscription" class="login__submit">Créer un compte</button>
                    <p class="login__signu">Vous avez déjà un compte ? &nbsp;<a href="page_connexion.php">Connectez-vous</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>