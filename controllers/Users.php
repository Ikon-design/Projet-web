<?php

class Users extends Controller {
    /**
     * @return void
     */
    public function edit($id){
        var_dump($_POST);
        $this->loadModel('User');
        $this->User->editUserTeam($id);
        $this->render('edit');
        header("Location: /backOffices");
    }
}