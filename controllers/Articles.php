<?php
class Articles extends Controller {
    public function index(){
        $this->loadModel("Article");
        $getArticle = $this->Article->getArticle();
        $getEvent = $this->Article->getEvent();
        foreach ($getEvent as $key => $article) {
            $formatedDate = date('d m Y', strtotime($article['Date']));
            $getEvent[$key]['Date'] = $formatedDate;
        }
        var_dump($getEvent);
        $this->render('index', compact('getArticle', 'getEvent'));
    }

    public function read($id){
        $this->loadModel("Article");
        $readArticle = $this->Article->readArticle($id);
        $commentsArticle = $this->Article->commentsArticle($id);
        $this->render('read', compact('readArticle', 'commentsArticle'));
    }

    public function delete($id){
        $this->loadModel("Article");
        $this->Article->deleteArticle($id);
        header("Location: /articles");
    }

    public function edit($id){
        $this->loadModel("Article");
        $article = $this->Article->readArticle($id);
        if ( count($_POST) > 0) {
            $this->Article->editArticles($id);
            $article = $this->Article->readArticle($id);
        }
        $this->render('edit', compact('article'));
    }

    public function create(){
        $this->loadModel('Article');
        if ($_POST['event'] == 'Article'){
            $evenement = 0;
            $article = 1;
            var_dump('caca');
        }else{
            var_dump('coucou');
            $evenement = 1;
            $article = 0;
        }
        $this->Article->createArticle($article, $evenement);
        var_dump($_POST, $evenement, $article);
        $this->render('create');
        //header("Location: /articles");
    }
}