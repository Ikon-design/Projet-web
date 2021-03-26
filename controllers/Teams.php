<?php
class Teams extends Controller {
    /**
     * @return void
     * */
    public function index(){

        $this->loadModel("Team");
        $teams = $this->Team->getAll();
        $this->render('index', compact('teams'));
    }
}