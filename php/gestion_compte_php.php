<?php
$currentUser = $InscritsDAO->getOne($_SESSION['login']);

$param['message']="";

if(isset($_POST['envoyerModif']))
{
    if($_POST['mdpGestion'] != $_POST['mdpConfirmGestion'])
    {
      /* TODO METTRE PANEL ERROR */
      $param['message'] = "Les mots de passent ne correspondent pas !";
    }
    elseif (!(verification_mdp($_POST['mdpGestion'])))
    {
      /* TODO METTRE PANEL ERROR */
      $param['message'] = "Le mot de passe doit contenir une majuscule, une minuscule et un chiffre et faire 8 caractères au minimum";
    }

    elseif($_POST['mailGestion'] != $_POST['mailConfirmGestion'])
    {
      /* TODO METTRE PANEL ERROR */
      $param['message'] = "Les adresses mails ne correspondent pas !";
    }
    else if(filter_var($_POST['mailGestion'], FILTER_VALIDATE_EMAIL))
    {
      $userTest = $InscritsDAO->getOne($_POST['idGestion']);
      if($_POST['mailGestion'] != $userTest['mail'])
      {
        $code_validation = uniqid();

        $message = "Voici le lien de votre validation de votre nouvelle adresse mail (celle-ci) : "
        . '<html><head></head><body><a href="http://NBi-Communication.fr/validation.php?code='
        ."$code_validation"
        .'">ici</a></body></html>';
      }
      else
      {
        $message = "Voici votre nouveau mot de passe : " . $_POST['mdpGestion'];
      }

      $InscritsDAO->updateUserGestion($_POST['nomGestion'], $_POST['prenomGestion'], $_POST['idGestion'], password_hash($_POST['mdpGestion'], PASSWORD_DEFAULT),$_POST['mailGestion'],$code_validation);

      $sujet = "Gestion de votre compte";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "From:  administrateur@NBi-Communication.fr\r\nX-Mailer:PHP\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $destinataire = $_POST['mailGestion'];

      if(mail($destinataire,$sujet,$message,$headers))
      {
        /* TODO METTRE PANEL SUCCESS */
          $param['message'] = "Message envoyé pour vos modifications";
      }
      else
      {
        /* TODO METTRE PANEL ERROR */
        $param['message'] = "Une erreur s'est produite";
      }

    }
    else
    {
      /* TODO METTRE PANEL ERROR */
      $param['message'] = "L'adresse mail n'est pas valide !";
    }
}

?>
