<?php

class Article extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "articles";
    }
    public function getArticle(){
        $sql = 'SELECT Date,Title,Content,articles.UserID, users.UserID, users.Pseudo FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.Article = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }
    public function getEvent(){
        $sql = 'SELECT Date,Title,Content,articles.UserID, users.UserID, users.Pseudo FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.Evenement = 1';
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }
}