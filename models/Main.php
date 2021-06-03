<?php

class Main extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }

    public function getLastThreeArticles()
    {
        $sql = "SELECT * FROM articles ORDER BY ArticleID DESC LIMIT 3";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getTank()
    {
        $sql = "SELECT users.UserID ,users.Pseudo, users.Lname, users.Fname, users.Mail, users.Image, characters.Name, characters.Icon, class.Type FROM users JOIN characters ON users.CharacterID = characters.CharacterID JOIN class ON characters.ClassID = class.ClassID WHERE characters.ClassID = 2";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getHeal()
    {
        $sql = "SELECT users.UserID ,users.Pseudo, users.Lname, users.Fname, users.Mail, users.Image, characters.Name, characters.Icon, class.Type  FROM users JOIN characters ON users.CharacterID = characters.CharacterID JOIN class ON characters.ClassID = class.ClassID WHERE characters.ClassID = 3";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getDps()
    {
        $sql = "SELECT users.UserID ,users.Pseudo, users.Lname, users.Fname, users.Mail, users.Image, characters.Name, characters.Icon, class.Type  FROM users JOIN characters ON users.CharacterID = characters.CharacterID JOIN class ON characters.ClassID = class.ClassID WHERE characters.ClassID = 1";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}