<?php

class Genre{

    private string $genre;
    private array $films;



    public function __construct($genre){
        $this->genre = $genre;
        $this->films = [];
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getFilms()
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

    public function infosGenre(){
        $result = "<h3>films $this :</h3><ul>";
    
        foreach ($this->films as $film) {
            $result .= "<li>" . $film->getInfos() . "</li>";
        }
    
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->getGenre();
    }
}

