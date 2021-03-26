<?php

class Event extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "articles";
    }
}