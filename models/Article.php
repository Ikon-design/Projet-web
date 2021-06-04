<?php

class Article extends Model{

    public function __construct()
    {
        $this->bddConnexion();
    }
    public function getArticle(){
        $sql = 'SELECT Date, Title,Content,articles.ArticleID ,articles.UserID, users.UserID, users.Pseudo FROM articles INNER JOIN users ON articles.UserID = users.UserID WHERE articles.Article = 1';
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
        $sql = 'SELECT articles.ArticleID, articles.Date, articles.Title, articles.Content, users.Pseudo FROM articles JOIN users ON articles.UserID = users.UserID WHERE articles.ArticleID = '.$id;
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

    public function deleteArticle($id){
        $sql = 'DELETE articles FROM articles LEFT JOIN comments ON articles.ArticleID = comments.ArticleID WHERE articles.ArticleID ='.$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
    }

    public function editArticles($id){
        $content = htmlspecialchars($_POST["content"], ENT_QUOTES);
        $title = htmlspecialchars($_POST["title"], ENT_QUOTES);
        $sql = "UPDATE articles SET  Title = '$title', Content = '$content' WHERE ArticleID = '$id'";
        $query = $this->bdd->prepare($sql);
        $res = $query->execute();
        var_dump($res);
    }

    public function createArticle($article, $evenement){
        $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
        $title = htmlspecialchars($_POST["title"], ENT_QUOTES);
        $userID = $_SESSION['UserID'];
        $sql = "INSERT INTO articles (ArticleID, Content, Title, Article, Evenement, UserID, Date) VALUES ( NULL , '$content' , '$title' , $article , $evenement , $userID , NOW() )";
        $query = $this->bdd->prepare($sql);
        $res = $query->execute();
    }
}