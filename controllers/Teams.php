<?php
class Teams extends Controller {
    /**
     * @return void
     * */
    public function index(){

        $this->loadModel("Team");
        $getTeam = $this->Team->getTeam();
        $this->render('index', compact('getTeam'));
    }
}