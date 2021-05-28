<?php

class Team extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }
    public function getTeam()
    {
        $sql = 'SELECT * FROM users LEFT JOIN characters ON users.CharacterID = characters.CharacterID WHERE Manager = 1 OR Player = 1';
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

    public function edit($id)
    {
        $player = $_POST["player"] ? 1 : 0;
        $manager = $_POST["manager"] ? 1 : 0;
        $admin = $_POST["admin"] ? 1 : 0;
        $sql = "UPDATE users SET users.Player = ${player}, users.Admin = ${admin}, users.Manager = ${manager} WHERE UserID =".$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();

    }
}