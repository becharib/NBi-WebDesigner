<?php
$param['erreur'] = false;
$param['succes'] = false;
$param['message'] = "";

if (isset($_POST['mail_mdp_oublie']))
{ // On a cliqué sur le bouton
  if (empty($_POST['loginperdu']))
  {
    /* TODO METTRE PANEL ERROR */
    $param['erreur'] = true;
    $param['message'] = "Merci de saisir un login...";
  }
  else
  {
    $utilisateurMdpPerdu = $InscritsDAO->getOne($_POST['loginperdu']);
    if($utilisateurMdpPerdu)
    {
      $prenom = $utilisateurMdpPerdu['prenom'];
      $nom = $utilisateurMdpPerdu['nom'];
      $code_mdp = uniqid();
      $InscritsDAO->valide_mdp($_POST['loginperdu'], $code_mdp);
      $sujet = "Mot de passe perdu";
      $message = "Bonjour $prenom $nom<html><head></head><body><br></body></html>Voici le lien reinitialiser votre mot de passe : "
              . '<html><head></head><body><a href="http://NBi-Communication.fr/reinitmdp.php?code='
              ."$code_mdp"
              .'">cliquez ici</a></body></html>' ;
      $headers .= "From: administrateur@NBi-Communication.fr\r\nX-Mailer:PHP\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      if(mail($utilisateurMdpPerdu['mail'],$sujet,$message,$headers))
      {
        /* TODO METTRE PANEL SUCCESS */
        $param['succes'] = true;
        $param['message'] = "Un lien de réinitialisation a été envoyé sur l'adresse mail liée a " . $_POST['loginperdu'] ." !";
      }
      else
      {
        /* TODO METTRE PANEL ERROR */
        $param['erreur'] = true;
        $param['message'] = "Une erreur s'est produite durant l'envoi du mail";
      }
    }
    else
    {
      /* TODO METTRE PANEL ERROR */
      $param['erreur'] = true;
      $param['message'] = "Le login n'est pas dans la base de données ...";
    }
  }
}
?>
