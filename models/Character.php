<?php

class Character extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "characters";
    }
}