<?php
if(isset($_POST['modif']))
{
    $InscritsDAO->updateUser($_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['mail'],$_POST['selectRole']);
    header("Location: admin.php?modif=OK");
    exit(0);
}

/*TODO METTRE PANEL SUCCESS */
$message = isset($_GET["modif"])?"<center>Modification effectuée</center>\n":"";
//si on supp
if(isset($_POST['supp']))
{
    $_SESSION['loginToSupp'] = $_POST['login'];
    header("Location: confirme_delete.php");
    exit(0);
}

?>
