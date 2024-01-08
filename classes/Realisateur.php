<?php


class Realisateur extends Personne{

    // private string $nom;
    // private string $prenom;
    private array $films;

    public function __construct(string $nom, string $prenom){
        parent:: __construct( $nom, $prenom);
        $this->films = [];
    }

    

    public function getFilms(): array
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

    public function addFilm(Film $film) {
        $this->films[] = $film;
    }


    public function infosReal(){
        $result = "<h3>Films de " . $this . "</h3><ul>";
    
        foreach ($this->films as $film) {
            $result .= "<li>" . $film->getInfos() . "</li>";
        }
    
        $result .= "</ul>";
        return $result;
    }
}