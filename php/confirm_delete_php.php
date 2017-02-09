<?php
include './app/bootstrap.inc.php';
$userNameToSupp = $InscritsDAO->getOne($_SESSION['loginToSupp'])['login'];

//Si on a cliqué sur un bouton
if (isset($_POST['confirm_supp_oui'])) {
      $userToSupp = $InscritsDAO->getOne($_SESSION['loginToSupp']);
      $InscritsDAO->delete($userToSupp);
      unset($_SESSION['loginToSupp']);
    header("Location: admin.php");
    exit(0);
}
if (isset($_POST['confirm_supp_non'])) {
    header("Location: admin.php");
    exit(0);
}
?>
