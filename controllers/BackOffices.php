<?php
class BackOffices extends Controller {
    /**
     * @return void
     * */
    public function index($id){
        $this->loadModel("BackOffice");
        $data = $this->BackOffice->getUser($id);
        $getArticlesUser = $this->BackOffice->getArticlesUser($id);

        $this->render('index', compact('data', 'getArticlesUser'));
    }
}