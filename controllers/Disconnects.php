<?php
class Disconnects extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel('Disconnect');
        session_destroy();
        session_unset();
        header('Location: /');
    }
}