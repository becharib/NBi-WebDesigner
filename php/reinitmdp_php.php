<?php
$param['messageOK']="";

if(!isset($_GET['code']))
{
  header("Location: index.php");
}
if(isset($_POST['envoyerReinit']))
{
    $user = $InscritsDAO->getUserWithCodeReinit($_GET['code']);
    if($user)
    {
      if($_POST['mdpReinit'] != $_POST['confirmReinit'])
      {
        /* TODO PANEL ERROR */
        $param['messageOK'] = "Les mots de passent ne correspondent pas !";
      }
      elseif (!(verification_mdp($_POST['mdpReinit'])))
      {
        /* TODO PANEL ERROR */
        $param['messageOK'] = "Le mot de passe doit contenir une majuscule et un chiffre et faire 8 caractères au minimum";
      }
      else
      {
        /* TODO PANEL SUCCESS */
        $InscritsDAO->updateUserReinit($user['login'], $_POST['mdpReinit']);
        $param['messageOK'] = "Le mot de passe a bien été modifié";
      }
    }
    else
    {
      /* TODO PANEL ERROR */
      $param['messageOK']="Le lien est expiré ...";
    }

  }
?>
