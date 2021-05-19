<?php

class Article extends Model{

    public function __construct()
    {
        $this->bddConnexion();
    }
    public function getArticle(){
        $sql = 'SELECT Date,Title,Content,articles.ArticleID ,articles.UserID, users.UserID, users.Pseudo FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.Article = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }
    public function getEvent(){
        $sql = 'SELECT Date,Title,Content,articles.ArticleID ,articles.UserID, users.UserID, users.Pseudo FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.Evenement = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }

    public function readArticle($id){
        $sql = 'SELECT articles.Date, articles.Title, articles.Content, users.Pseudo FROM articles JOIN users ON articles.UserID = users.UserID WHERE articles.ArticleID = '.$id;
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