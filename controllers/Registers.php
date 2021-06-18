<?php
class Registers extends Controller
{
    /**
     * @return void
     * */
    public function index()
    {
        $this->loadModel("Register");
        $characters = $this->Register->getAllCharacters();

        if (isset($_POST['matricule']) and isset($_POST['psw']) and isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['email']) and isset($_POST['character']) and isset($_POST['role'])) {

            $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);

            $verifyUser = $this->Register->verify($_POST['matricule']);

            $player = 0;
            $manager = 0;
            if ($_POST['role'] == 'player') {
                $player = 1;
                $manager = 0;
            } elseif ($_POST['role'] == 'manager') {
                $player = 0;
                $manager = 1;
            }

            if ($verifyUser[0][0] == '0') {
                $addUser = $this->Register->addUser($_POST['matricule'], $psw, $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['character'], $player, $manager);
                header('location:/logins');
            } else {
                header('location:/registers');
            }

        }
        $this->render('index', compact('characters'));
    }
}