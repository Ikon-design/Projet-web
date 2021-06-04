<?php

class BackOffice extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }

    public function getUser($id){
        $sql = "SELECT * FROM users LEFT JOIN characters ON users.CharacterID = characters.CharacterID LEFT JOIN class ON characters.ClassID = class.ClassID WHERE UserID =". $id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetch();
        return $res;
    }

    public function getUsers(){
        $sql = "SELECT Pseudo, UserID FROM users";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getArticlesUser($id){
        $sql = "SELECT * FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.UserID =". $id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getLastArticleComment($id){
        $sql = 'SELECT comments.Content, comments.Date, users.Pseudo FROM comments JOIN users ON comments.UserID = users.UserID WHERE comments.ArticleID = '.$id .' ORDER BY comments.Date DESC' ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
    public function commentsArticle($id){
        $sql = 'SELECT comments.Content, comments.Date, users.Pseudo FROM comments JOIN users ON comments.UserID = users.UserID WHERE comments.ArticleID = '.$id.' LIMIT 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getTeam(){
        $sql = 'SELECT * FROM users LEFT JOIN characters ON users.CharacterID = characters.CharacterID JOIN class ON characters.ClassID = class.ClassID WHERE Manager = 1 OR Player = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public function getCharacters(){
        $sql = 'SELECT * FROM characters';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function edit($id){
        $sql = "UPDATE users SET Player = :player, Manager = :manager, Admin = :admin";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetch();
        return $res;
    }
    public function editMe(){
        $pseudo = $_POST['Pseudo'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $mail = $_POST['Mail'];
        $characterId = $_POST['CharacterID'];
        $sql = "UPDATE users SET Pseudo = '$pseudo', Fname = '$fname', Lname = '$lname', Mail = '$mail', CharacterID = $characterId WHERE UserID = ".$_SESSION['UserID'];
        $query = $this->bdd->prepare($sql);
        $query->execute();
        $res = $query->fetch();
        return $res;
    }
}