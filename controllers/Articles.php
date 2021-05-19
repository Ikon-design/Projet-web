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
}