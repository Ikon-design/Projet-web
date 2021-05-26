<?php
class BackOffices extends Controller {
    /**
     * @return void
     * */
    public function index($id){
        $this->loadModel("BackOffice");
        $data = $this->BackOffice->getUser($id);
        $getArticlesUser = $this->BackOffice->getArticlesUser($id);
        $getCommentArticle = [];
        foreach ($getArticlesUser as $articles){
            $getCommentArticle[$articles["ArticleID"]] = $this->BackOffice->commentsArticle($articles['ArticleID']);
        }
        var_dump($getCommentArticle);
        $this->render('index', compact('data', 'getArticlesUser', 'getCommentArticle'));
    }
}