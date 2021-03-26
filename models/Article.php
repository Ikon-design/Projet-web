<?php

class Article extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "articles";
    }
}