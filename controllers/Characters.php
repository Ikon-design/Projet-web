<?php
class Characters extends Controller {
    /**
     * @return void
     * */
    public function index($id){
        $this->loadModel("Character");
        $characters = $this->Character->getAll();
        $getSkills = $this->Character->getSkills($id);
        $character = $this->Character->character($id);
        $this->render('index', compact( 'getSkills', 'characters', 'character', 'id'));
    }
}