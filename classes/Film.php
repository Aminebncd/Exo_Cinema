<?php


class Film {

    private string $titre;
    private DateTime $dateSortie;
    private int $duree; 
    // private Acteur $acteur;
    public Genre $genre;
    private Realisateur $realisateur;


    public function __construct(string $titre, int $anneeParution, int $duree, Genre $genre,  Realisateur $realisateur){
        $this->titre = $titre;
        $this->dateSortie = new DateTime("$anneeParution-01-01");
        $this->duree = $duree;
        $this->genre = $genre;
        $this->realisateur = $realisateur;
        // $this->acteur = $acteur;
        $realisateur->addFilm($this); 
        $genre->addFilm($this);
        // $acteur->addFilm($this); 
    }

    // ex : $film = new Film("Heat", 1995, 171, "Policier", $michaelMann);
    
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    
    public function setDateSortie($DateSortie)
    {
        $this->dateSortie = $DateSortie;
        
        return $this;
    }
    
    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
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
    // public function getActeur()
    // {
    //     return $this->acteur;
    // }

    //  public function setActeur($acteur)
    // {
    //     $this->acteur = $acteur;

    //     return $this;
    // }
    
    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

   
    public function getInfos(): string {
        return $this . ": " . $this->getGenre()." / ".$this->getRealisateur()."<br>";
    }
    
   
    public function __toString(){
        return $this->getTitre()." ( ".$this->getDateSortie()->format('Y')." - ".$this->getduree()."min )";   
    }



}
