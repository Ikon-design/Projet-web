<?php
class BackOffices extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("BackOffice");
        $this->render('index');
    }
}