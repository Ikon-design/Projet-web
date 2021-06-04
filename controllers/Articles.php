<?php
class Articles extends Controller {
    public function index(){
        $this->loadModel("Article");
        $getArticle = $this->Article->getArticle();
        $getEvent = $this->Article->getEvent();

        foreach ($getArticle as $key => $article) {
            $formatedDate = date('d/m/Y', strtotime($article['Date']));
            $getArticle[$key]['Date'] = $formatedDate;

            if (strlen($article['Content']) > 200){
                $getArticle[$key]['Content'] = substr($article['Content'], 0, 200)."...";
                $getArticle[$key]['oversize'] = true;
            }
        }

        foreach ($getEvent as $key => $article) {
            $formatedDate = date('d/m/Y', strtotime($article['Date']));
            $getEvent[$key]['Date'] = $formatedDate;

            if (strlen($article['Content']) > 200){
                $getEvent[$key]['Content'] = substr($article['Content'], 0, 200)."...";
                $getEvent[$key]['oversize'] = true;
            }
        }

        $me = $this->Article->me();
        $this->render('index', compact('getArticle', 'getEvent', 'me'));
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
            header("Location: /articles");
        }
        $this->render('edit', compact('article'));
    }

    public function create(){
        $this->loadModel('Article');
        if ($_POST['event'] == 'Article'){
            $evenement = 0;
            $article = 1;
        }else{
            $evenement = 1;
            $article = 0;
        }
        $this->Article->createArticle($article, $evenement);
        header("Location: /articles");
    }
}