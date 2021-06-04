<?php
class Teams extends Controller {
    /**
     * @return void
     * */
    public function index(){

        $this->loadModel("Team");
        $getTeam = $this->Team->getTeam();
        $getUsers = $this->Team->getUsers();
        $getcharacters = $this->Team->getcharacters();
        $me = $this->Team->me();
        $this->render('index', compact('getTeam', 'getUsers', 'getcharacters'));
    }

    public function delete($id){
        $this->loadModel("Team");
        $this->Team->deleteUser($id);
        header("Location: /teams");
    }

    public function edit($id){
        $this->loadModel("Team");
        $this->Team->editProfil($id);
        header("Location: /teams");
    }
}