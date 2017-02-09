<?php

class InscritsDAO extends DAO {
    protected $class = "Inscrit";

    public function checkAuthentification($login, $mdp)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM inscrits WHERE login=:login");
        $stmt->execute(['login' => $login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user !== false && password_verify($mdp, $user['mdp']))
        {
            return $user;
        }
        else
        {
            return null;
        }
    }

    public function getAllUsers() {
        $res = array();
        $stmt = $this->pdo->query("SELECT * FROM inscrits ORDER BY nom");
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
            {
             $res[] = new Inscrit(array('login' => $row['login'],'nom' => $row['nom'],'prenom' => $row['prenom'],
              'mdp' => $row['mdp'],'mail' => $row['mail'],'role' => $row['role'],
              'code_validation' => $row['code_validation']));
            }

        return $res;
    }

    public function getOne($login)
    {
      $stmt = $this->pdo->prepare("SELECT * FROM inscrits WHERE login=:login");
      $stmt->execute(['login' => $login]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      return $user;
    }

    public function getOneWithCode($code)
    {
      $stmt = $this->pdo->prepare("SELECT * FROM inscrits WHERE code_validation=:code_validation");
      $stmt->execute(['code_validation' => $code]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      return $user;
    }

    public function valide_code($login)
    {
      $stmt = $this->pdo->prepare("UPDATE inscrits SET code_validation=:code_vide WHERE login=:login");
      $res = $stmt->execute(array('code_vide' => "",'login' => $login));
      return $res;
    }

    public function valide_mdp($login, $code_reinit)
    {
      $stmt = $this->pdo->prepare("UPDATE inscrits SET code_reinit=:code_reinit WHERE login=:login");
      $res = $stmt->execute(array('code_reinit' => $code_reinit,'login' => $login));
      return $res;
    }

    public function getUserWithCodeReinit($code_reinit)
    {
      $stmt = $this->pdo->prepare("SELECT * FROM inscrits WHERE code_reinit=:code_reinit");
      $stmt->execute(['code_reinit' => $code_reinit]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      return $user;
    }

    public function getAllValidMails()
    {
      $res = array();
      $stmt = $this->pdo->query("SELECT mail FROM inscrits");
      foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
          $res[] = $row;
      return $res;
    }

    public function insert($obj)
    {
      $stmt = $this->pdo->prepare("INSERT INTO inscrits (nom, prenom, login, mdp, mail, role, code_validation) VALUES (:nom, :prenom, :login, :mdp, :mail, :role, :code_validation)");
      $res = $stmt->execute(array('nom' => $obj->nom,
                                  'prenom' => $obj->prenom,
                                  'login' => $obj->login,
                                  'mdp' => $obj->mdp,
                                  'mail' => $obj->mail,
                                  'role' => $obj->role,
                                  'code_validation' => $obj->code_validation));
      return $res;
    }

    public function delete($obj)
   {
        $stmt = $this->pdo->prepare("DELETE FROM inscrits WHERE login=:login");
        $res = $stmt->execute(['login' => $obj['login']]);
        return $res;
    }

    public function updateUser( $nom,$prenom, $login, $mail, $role, $code_validation)
    {
      $stmt = $this->pdo->prepare("UPDATE inscrits SET nom=:nom, prenom=:prenom, login=:login, mail=:mail, role=:role, code_validation=:code_validation  WHERE login=:login");
      $res = $stmt->execute(array('nom' => $nom, 'prenom' => $prenom,'login' => $login,'mail' => $mail,'role' => $role, 'code_validation' => $code_validation));
      return $res;
    }

    public function updateUserReinit($login, $mdp)
    {
      $stmt = $this->pdo->prepare("UPDATE inscrits SET mdp=:mdp  WHERE login=:login");
      $res = $stmt->execute(array('login' => $login,'mdp' => password_hash($mdp, PASSWORD_DEFAULT)));
      return $res;
    }

    public function updateUserGestion( $nom,$prenom, $login, $mdp, $mail, $code_validation)
    {
      $stmt = $this->pdo->prepare("UPDATE inscrits SET nom=:nom, prenom=:prenom, login=:login, mdp=:mdp, mail=:mail, code_validation=:code_validation  WHERE login=:login");
      $res = $stmt->execute(array('nom' => $nom, 'prenom' => $prenom,'login' => $login,'mdp' => $mdp,'mail' => $mail,'code_validation' => $code_validation));
      return $res;
    }
}
