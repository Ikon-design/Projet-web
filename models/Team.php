<?php

class Team extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }
    public function getTeam()
    {
        $sql = 'SELECT * FROM users LEFT JOIN characters ON users.CharacterID = characters.CharacterID JOIN class ON characters.ClassID = class.ClassID WHERE Player = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetchALl();
        return $res;
    }

    public function deleteUser($id)
    {
        $sql = 'UPDATE users SET users.Player = 0, users.Manager = 0 WHERE users.UserID = '.$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
    }
    public function getUsers()
    {
        $sql = 'SELECT Pseudo, UserID FROM users';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getcharacters()
    {
        $sql = 'SELECT Name, CharacterID FROM characters';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function editProfil()
    {
        $id = $_POST["UserID"];
        $character = $_POST["CharacterID"];
        $player = isset($_POST["player"]) ? 1 : 0;
        $manager = isset($_POST["manager"]) ? 1 : 0;
        $admin = isset($_POST["admin"]) ? 1 : 0;
        $sql = "UPDATE users SET users.Player = ${player}, users.Admin = ${admin}, users.Manager = ${manager}, CharacterID = ${character} WHERE UserID =".$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
    }

}