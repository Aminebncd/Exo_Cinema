<?php


class Role{

    private string $role;
    private array $casting;

    public function __construct(string $role)
    {

        $this->role = $role;
        $this->casting = [];

    }
    
    public function getRole()
    {
        return $this->role;
    }

   
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getCasting()
    {
        return $this->casting;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;

        return $this;
    }

    public function addCasting(Casting $casting)
    {
        $this->casting[] = $casting;
    }
    public function castRole(){
        $result = "<h2>Personnes ayant interprétées $this</h2>";

        foreach ($this->casting as $casting){
            $result .= "<b>".$casting->getActeur()."</b>"." dans ".$casting->getFilm()."<br>";
        }

        return $result;
    }
    

    public function __toString(){
        return $this->getRole();

    }

    
}