<?php
class Articles extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("Article");
        $getArticle = $this->Article->getArticle();
        $getEvent = $this->Article->getEvent();
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
        $data = $this->Artciel->createArticle();
        $this->read('create', compact($data));
    }
}