<?php

class Character extends Model{

    public function __construct()
    {
        $this->bddConnexion();
        $this->table = "characters";
    }

    public function getSkills($id)
    {
        $sql = "SELECT characters.Name, skills.Name, skills.Description , skills.Video,skills.Icon, SkillID FROM skills INNER JOIN characters ON skills.CharacterID = characters.CharacterID WHERE skills.CharacterID = ".$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchALl();
    }

    public function character($id)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE CharacterID = ".$id;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}