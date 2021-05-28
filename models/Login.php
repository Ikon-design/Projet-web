<?php

class Login extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }

    public function verify($matricule)
    {
        $sql = "SELECT * FROM users WHERE Pseudo = '$matricule' ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $act = $query->fetch();
        $count = $query->rowCount();

        return array($act, $count);
    }
}