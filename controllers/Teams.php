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
        foreach ($getTeam as $key => $user){
            $getTeam[$key]['id'] = $key;
            if ($user['Image'] == NULL || $user['Image'] == null){
                $getTeam[$key]['Image'] = '/public/img/account.svg';
            }
        }
        $me = $this->Team->me();
        $this->render('index', compact('getTeam', 'getUsers', 'getcharacters', 'me'));
    }

    public function delete($id){
        $this->loadModel("Team");
        $this->Team->deleteUser($id);
        header("Location: /teams");
    }

    public function edit(){
        $this->loadModel("Team");
        $this->Team->editProfil();
        $this->render('edit');
        //header("Location: /teams");
    }

}