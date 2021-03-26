<?php
class Events extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("Event");
        $events = $this->Event->getAll();
        $this->render('index', compact('events'));
    }
}