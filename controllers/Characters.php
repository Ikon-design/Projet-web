<?php
class Characters extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("Character");
        $characters = $this->Character->getAll();
        $this->render('index', compact('characters'));
    }
}