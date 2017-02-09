<?php
$param['message_information'] = "";

if(isset($_POST['envoyerInscription']))
{
  if(!($InscritsDAO->getOne($_POST['loginInscri'])))
  {
    if($_POST['mdpInscri'] != $_POST['confirmInscri'])
    {
      /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
      $param['message_information'] = "Les mots de passent ne correspondent pas !";
    }
    elseif (!(verification_mdp($_POST['mdpInscri'])))
    {
      /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
      $param['message_information'] = "Le mot de passe doit contenir une majuscule, une minuscule et un chiffre et faire 8 caractères au minimum";
    }
    elseif (!(verification_login($_POST['loginInscri'])))
    {
      /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
      $param['message_information'] = "Le login doit contenir 5 caractères au minimum";
    }

    else if(filter_var($_POST['mailInscri'], FILTER_VALIDATE_EMAIL))
    {
      /* TODO METTRE PANEL SUCCESS */
      $code_validation = uniqid();
      $nom = $_POST['nomInscri'];
      $prenom = $_POST['prenomInscri'];
      $nouveauInscri = new Inscrit(array('nom' => $_POST['nomInscri'], 'prenom' => $_POST['prenomInscri'],
                                         'login' => $_POST['loginInscri'], 'mdp' => password_hash($_POST['mdpInscri'], PASSWORD_DEFAULT),
                                         'mail' => $_POST['mailInscri'], 'role' => 'ROLE_UTILISATEUR', 'code_validation' => $code_validation));
      $InscritsDAO->insert($nouveauInscri);

      $sujet = "Validation email";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "From: administrateur@NBi-Communication.fr\r\nX-Mailer:PHP\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $message = "Bienvenu $prenom $nom<html><head></head><body><br></body></html>Voici le lien pour activer votre compte : "
              . '<html><head></head><body><a href="http://NBi-Communication.fr/validation.php?code='
              ."$code_validation"
              .'">cliquez ici</a></body></html>' ;

      $destinataire = $_POST['mailInscri'];

      if(mail($destinataire,$sujet,$message,$headers))
      {
          header("Location: connexion.php?inscri=succes");
      }
      else
      {
        /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
        $param['message_information'] = "Une erreur s'est produite";
      }
    }
    else
    {
      /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
      $param['message_information'] = "L'adresse mail n'est pas valide !";
    }
  }
  else
  {
    /* TODO METTRE LES ECHOS POUR LE PANEL ERROR*/
    $param['message_information'] = "Cet identifiant est déjà réservé !";
  }

}
?>
