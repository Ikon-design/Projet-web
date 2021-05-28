<?php
class Logins extends Controller {
    /**
     * @return void
     * */
    public function index(){
        $this->loadModel("Login");
        $this->render('index');

        if(isset($_POST['matricule']) AND isset($_POST['psw'])){

            $matricule = $_POST['matricule'];

            $verifyUser = $this->Login->verify($matricule);

            if($verifyUser[1] == '1'){

                $psw = $_POST['psw'];
                $pswdb = $verifyUser[0]['Password'];


                $verif = password_verify($psw, $pswdb);

                if($verif == 1){
                    session_start();
                    $_SESSION['Pseudo'] = $verifyUser[0]['Pseudo'];
                    $_SESSION['UserID'] = $verifyUser[0]['UserID'];
                    header('Location:/');
                }else{
                    echo "Mot de passe incorrect";
                }

            }else{
                echo "Pseudo introuvÃ©";
            }
        }
    }

    // public function test()
}
