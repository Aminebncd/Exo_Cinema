<?php


class Realisateur extends Personne{

    // private string $nom;
    // private string $prenom;
    private array $films;

    public function __construct(string $nom, string $prenom){
        parent:: __construct( $nom, $prenom);
        $this->films = [];
    }

    // ex : $michaelMann = new Realisateur("Mann", "Michael");

    // public function getNom()
    // {
    //     return $this->nom;
    // }

    // public function setNom($nom)
    // {
    //     $this->nom = $nom;

    //     return $this;
    // }

    // public function getPrenom()
    // {
    //     return $this->prenom;
    // }

    // public function setPrenom($prenom)
    // {
    //     $this->prenom = $prenom;

    //     return $this;
    // }

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


    public function __toString(){
        return $this->getPrenom()." ".$this->getNom();
    }
}