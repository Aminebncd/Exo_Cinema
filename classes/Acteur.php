<?php


class Acteur extends Personne{

    // private string $nom;
    // private string $prenom;
    private array $casting;


    public function __construct(string $nom, string $prenom)
    {
        parent:: __construct( $nom, $prenom);
        $this->casting = [];


    }


    // public function getFilms(): array
    // {
    //     return $this->films;
    // }

    // public function setFilms($films)
    // {
    //     $this->films = $films;

    //     return $this;
    // }
    
    // public function getRole(): array
    // {
    //     return $this->role;
    // }
    
    // public function setRole($role)
    // {
    //     $this->role = $role;
    
    //     return $this;
    // }

    // public function addFilm(Film $film) {
    //     $this->films[] = $film;
    // }
    // public function addRole(Role $film) {
    //     $this->roles[] = $role;
    // }


    // public function infosActeur(){
    //     $result = "<h3>Films de " . $this . "</h3><ul>";
    
    //     foreach ($this->films as $film) {
    //         $result .= "<li>" . $film->getInfos() . "</li>";
    //     }
    
    //     $result .= "</ul>";
    //     return $result;
    // }


    
    
    public function getCasting(): array
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
    
    public function castActeur(){
        $result = "<h2>Roles joués par $this</h2>";

        foreach ($this->casting as $casting){
            $result .= "<b>".$casting->getRole()."</b>"." dans ".$casting->getFilm()."<br>";
        }

        return $result;
    } 
}