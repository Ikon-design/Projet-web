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
}