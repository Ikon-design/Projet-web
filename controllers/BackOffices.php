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
        foreach ($getTeam as $key => $user){
            $getTeam[$key]['id'] = $key;
            if ($user['Image'] == NULL || $user['Image'] == null){
                $getTeam[$key]['Image'] = '/public/img/account.svg';
            }
        }
        $getCharacters = $this->BackOffice->getCharacters();
        $getUsers = $this->BackOffice->getUsers();
        $me = $this->BackOffice->me();
        foreach ($getArticlesUser as $key => $article){
            $getArticlesUser[$key]['lastComment'] = $this->BackOffice->getLastArticleComment($article['ArticleID']);
        }
        $this->render('index', compact('getUser', 'getArticlesUser', 'getTeam', 'getCharacters', 'getUsers', 'me'));
    }

    public function edit($id){
        $this->loadModel("BackOffice");
        $updateUser = $this->BackOffice->edit($id);
        header("Location: /backOffices");
    }
}