<?php

class Disconnect extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "users";
    }
}