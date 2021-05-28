<?php
class BackOffices extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("BackOffice");
        $getUser = $this->BackOffice->getUser($_SESSION['UserID']);
        $getArticlesUser = $this->BackOffice->getArticlesUser($_SESSION['UserID']);
        $getTeam = $this->BackOffice->getTeam();
        $getCharacters = $this->BackOffice->getCharacters();
        foreach ($getArticlesUser as $key => $article){
            $getArticlesUser[$key]['lastComment'] = $this->BackOffice->getLastArticleComment($article['ArticleID']);
        }
        $this->render('index', compact('getUser', 'getArticlesUser', 'getTeam', 'getCharacters'));
    }

    public function edit($id){
        $this->loadModel("BackOffice");
        $updateUser = $this->BackOffice->edit($id);
        header("Location: /backOffices/index/11");
    }
}