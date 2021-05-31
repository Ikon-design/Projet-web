<?php

class User extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }
    public function editUserTeam(){
            $player = $_POST["player"] ? 1 : 0;
            $manager = $_POST["manager"] ? 1 : 0;
            $admin = $_POST["admin"] ? 1 : 0;
            $sql = "UPDATE users SET users.Player = ${player}, users.Admin = ${admin}, users.Manager = ${manager} WHERE UserID =".$id;
            $query = $this->bdd->prepare($sql);
            $query->execute();
    }

}