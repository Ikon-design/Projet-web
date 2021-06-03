<?php

// Connection à la bdd
abstract class Model{
    private $host = "localhost";
    private $db_name = "cubes";
    private $username = "root";
    private $password = "";

    protected $bdd;

    public $table;

    public function bddConnexion(){
        $this->bdd = null;

        try{
            $this->bdd = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name.";charset=utf8", $this->username, $this->password);
        }catch (Exception $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    /**
     * @return void
     */
    public function getAll(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }
}

