<?php

class User extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }
    public function editUserTeam(){
        var_dump($_POST);
            $id = $_POST["UsersID"];
            $character = $_POST["CharacterID"];
            $player = isset($_POST["player"]) ? 1 : 0;
            $manager = isset($_POST["manager"]) ? 1 : 0;
            $admin = isset($_POST["admin"]) ? 1 : 0;
            $sql = "UPDATE users SET users.Player = ${player}, users.Admin = ${admin}, users.Manager = ${manager}, CharacterID = ${character} WHERE UserID =".$id;
            $query = $this->bdd->prepare($sql);
            $query->execute();
    }

}