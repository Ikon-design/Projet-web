<?php

class BackOffice extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }

    public function getUser($id){
        $sql = "SELECT * FROM users where UserID =". $id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }

    public function getArticlesUser($id){
        $sql = "SELECT * FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.UserID =". $id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getLastArticleComment($id){
        $sql = 'SELECT comments.Content, comments.Date, users.Pseudo FROM comments JOIN users ON comments.UserID = users.UserID WHERE comments.ArticleID = '.$id .'ORDER BY comments.Date DESC' ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
    public function commentsArticle($id){
        $sql = 'SELECT comments.Content, comments.Date, users.Pseudo FROM comments JOIN users ON comments.UserID = users.UserID WHERE comments.ArticleID = '.$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }
}