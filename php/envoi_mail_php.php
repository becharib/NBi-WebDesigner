<?php
//Les paramètres du contact
$lesParams['nom'] = isset($_POST['nom'])?trim($_POST['nom']):"";
$lesParams['mail'] = isset($_POST['mail'])?trim($_POST['mail']):"";
$lesParams['objet'] = isset($_POST['objet'])?trim($_POST['objet']):"";
$lesParams['message'] = isset($_POST['message'])?trim($_POST['message']):"";


  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $privatekey = '';

  $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
  $data = json_decode($response);

  if(isset($data->success) AND $data->success==true) {

    //Pour les anciens navigateurs qui ne connaissent pas "required"
    if (empty($lesParams['nom'])) {
    /*  echo '<div class="panelError myalert-danger" style="padding-top: 51px;" align="center" role="alert" id="error">';
      echo '<div class="alert panelError">';
      echo '<div class="alert-icon">';
      echo '<i class="material-icons left">error_outline</i>';
      echo '</div>';
      echo '<button type="button" class="close buttonSupp" data-dismiss="alert" aria-label="Close">';
      echo '<span aria-hidden="true"><i class="material-icons">clear</i></span>';
      echo '</button>';
      echo '<p style="margin-top: -8px; padding-left: 30px; color: white"><b>ERREUR:</b> Veuillez entrer un nom</p>';
      echo '</div></div>';*/

    } //Pour les anciens navigateurs qui ne connaissent pas "required"
    elseif (empty($lesParams['mail'])) {
    /*  echo '<div class="panelError" style="padding-top: 51px;" align="center" role="alert" id="error">';
      echo '<div class="alert panelError myalert-danger">';
      echo '<div class="alert-icon">';
      echo '<i class="material-icons left">error_outline</i>';
      echo '</div>';
      echo '<button type="button" class="close buttonSupp" data-dismiss="alert" aria-label="Close">';
      echo '<span aria-hidden="true"><i class="material-icons">clear</i></span>';
      echo '</button>';
      echo '<p style="margin-top: -8px; padding-left: 30px; color: white"><b>ERREUR:</b>  Veuillez entrer une adresse mail valide</p>';
      echo '</div></div>'; */
    } else {
      $nom = $lesParams['nom'];
      $mail = $lesParams['mail'];
      $sujet = $lesParams['objet'];
      $message = $lesParams['message'];

      $headers = "MIME-Version: 1.0\r\n";

      $headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

      $subject = "$sujet";
      $destinataire = "nicolas.jourdan.c@gmail.com, bilal84600@gmail.com";
      $body = "$message";


      $mail = filter_var($lesParams['mail'], FILTER_SANITIZE_EMAIL);

      if (filter_var($lesParams['mail'], FILTER_VALIDATE_EMAIL)) {
        if (mail($destinataire, $subject, $body, $headers)) {
        /*  echo '<div class="panelError" style="padding-top: 51px;" align="center" role="alert" id="error">';
          echo '<div class="alert panelError myalert-success">';
          echo '<div class="alert-icon">';
          echo '<i class="material-icons left">check</i>';
          echo '</div>';
          echo '<button type="button" class="close buttonSupp" data-dismiss="alert" aria-label="Close">';
          echo '<span aria-hidden="true"><i class="material-icons">clear</i></span>';
          echo '</button>';
          echo '<p style="margin-top: -8px; padding-left: 30px; color: white; text-align: left!important;"><b>SUCCES:</b> Votre mail a été envoyé</p>';
          echo '</div></div>';*/

        } else {
          echo "Une ERREUR interne s'est produite";
        }
      } else {
      /*  echo '<div class="panelError" style="padding-top: 51px;" align="center" role="alert" id="error">';
        echo '<div class="alert panelError myalert-danger">';
        echo '<div class="alert-icon">';
        echo '<i class="material-icons left">error_outline</i>';
        echo '</div>';
        echo '<button type="button" class="close buttonSupp" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true"><i class="material-icons">clear</i></span>';
        echo '</button>';
        echo '<p style="margin-top: -8px; padding-left: 30px; color: white"><b>ERREUR:</b>  Entrez une adresse mail valide</p>';
        echo '</div></div>';*/
      }
    }
  }else{
  /*  echo '<div class="panelError" style="padding-top: 51px;" align="center" role="alert" id="error">';
    echo '<div class="alert panelError myalert-danger">';
    echo '<div class="alert-icon">';
    echo '<i class="material-icons left">error_outline</i>';
    echo '</div>';
    echo '<button type="button" class="close buttonSupp" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true"><i class="material-icons">clear</i></span>';
    echo '</button>';
    echo '<p style="margin-top: -8px; padding-left: 30px; color: white"><b>ERREUR:</b> Veuillez valider le captcha</p>';
    echo '</div></div>';*/
  }
}

?>
