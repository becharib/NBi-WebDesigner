<?php
/* TODO INSCRIPTION SUCCESS */
$messageInsci = isset($_GET['inscri'])?"Vous êtes inscrit, un mail vous a été envoyé":"";


//Si il y a eu un clique sur le bouton de connexion
$param['login'] = isset($_POST['login'])?trim($_POST['login']):"";
$param['mdp'] = isset($_POST['mdp'])?trim($_POST['mdp']):"";
$param['erreur'] = false;
$param['message'] = "";

if(isset($_GET['deconnexion']))
{
  unset($_SESSION['login']);
}

if(isset($_POST['inscription']))
{
  header("Location: formulaire.php");
  exit(0);
}

if(isset($_POST['forgot']))
{
  header("Location: motdepasseoublie.php");
  exit(0);
}

if (isset($_POST['connexion']))
{ // On a cliqué sur le bouton
  if (empty($param['login']) || empty($param['mdp']))
  {
    /* TODO METTRE PANEL ERROR */
     $param['erreur'] = true;
     $param['message'] = "Merci de saisir un login et un mot de passe...\n";
  }
  else
  {
     // Recherche de l'identification dans la base
     $user = $InscritsDAO->checkAuthentification($param['login'], $param['mdp']);
     if (!$user)
     {
       /* TODO METTRE PANEL ERROR */
        $param['erreur'] = true;
        $param['message'] = "Erreur d'authentification (".$param['login'].").";
     }
     else
     {
        $_SESSION['login'] = $user['login'];

        if($user['role'] == 'ROLE_ADMINISTRATEUR')
        {
          header("Location: admin.php");
        }

        if($user['role'] == 'ROLE_UTILISATEUR')
        {
            header("Location: index.php");
        }
     }
  }
}
?>
