<?php

class Mains extends Controller {
    /**
     * @return void
     */
    public function index(){
        $this->loadModel('Main');
        $getArticle = $this->Main->getLastThreeArticles();
        $lastArticle = $getArticle[0];
        $llastArticle = $getArticle[1];
        $lllastArticle = $getArticle[2];
        $getTank = $this->Main->getTank();
        $getHeal = $this->Main->getHeal();
        $getDps = $this->Main->getDps();
        $this->render('index', compact('lastArticle', 'llastArticle', 'lllastArticle', 'getDps', 'getHeal', 'getTank'));
    }
}