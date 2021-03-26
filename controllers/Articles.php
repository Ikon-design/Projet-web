<?php
class Articles extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("Article");
        $articles = $this->Article->getAll();
        $this->render('index', compact('articles'));
    }
}