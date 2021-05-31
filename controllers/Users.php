<?php

class Users extends Controller {
    /**
     * @return void
     */
    public function edit(){
        $this->loadModel('User');
        $this->User->editUserTeam();
        header("Location: /backOffices");
    }
}