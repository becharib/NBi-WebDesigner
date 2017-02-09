<?php
function __autoload($class) { require_once "./Classes/$class.php"; }

session_start();
$InscritsDAO = new InscritsDAO(MaBD::getInstance());

if(isset($_POST['deconnexion']))
{
  unset($_SESSION['login']);
  header('Location: connexion.php');
  exit(0);
}

if(isset($_SESSION['login']))
{
  isGranted($_SESSION['login']);
}

function verification_mdp($mdp)
{
  //au moins une maj, une mini, un chiffre et 8 max
  $regexMaj = "#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$#";
  if (preg_match($regexMaj, $mdp))
  {
    return true;
  }
  else
  {
    return false;
  }
}

function verification_login($login)
{
  //au moins une maj, une mini, un chiffre et 8 max
  if(strlen($login)<5 || strlen($login)>15)
  {
    return false;
  }
  else
  {
    return true;
  }
}

function isGranted($login)
{
  global $InscritsDAO;
  $user = $InscritsDAO->getOne($login);
  if(strpos($_SERVER['REQUEST_URI'], 'confirme_delete.php') || strpos($_SERVER['REQUEST_URI'], 'admin.php'))
  {
    if($user['role'] != 'ROLE_ADMINISTRATEUR')
    {
        header('Location: index.php');
    }
    else
    {
      if(!isset($_SESSION['loginToSupp']) && strpos($_SERVER['REQUEST_URI'], 'confirme_delete.php'))
      {
        header('Location: admin.php');
      }
    }
  }

  if(strpos($_SERVER['REQUEST_URI'], 'motdepasseoublie.php') || strpos($_SERVER['REQUEST_URI'], 'formulaire.php') || strpos($_SERVER['REQUEST_URI'], 'reinitmdp.php'))
  {
    header('Location: index.php');
  }
}
?>
