<?php
class BackOffices extends Controller {
    /**
     * @return void
     * */
    public function index($id){
        $this->loadModel("BackOffice");
        $getUser = $this->BackOffice->getUser($id);
        $getArticlesUser = $this->BackOffice->getArticlesUser($id);
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