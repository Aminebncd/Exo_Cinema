<h1>CINEMA</h1>


<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br> <br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
cinématographique (science-fiction, aventure, action, ...). <br><br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage)
joué par l’acteur dans le(s) film(s) concerné(s). <br><br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre
en place correctement ! <br><br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure
où ce rôle a été incarné par plusieurs acteurs.) <br><br>
On doit pouvoir : <br><br>
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de
Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br><br>
Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br><br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade
Runner, ...)<br><br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br><br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>


<h2>RESULTAT :</h2>


<?php

spl_autoload_register(function ($class_name) {
    require "classes/".$class_name . '.php';
});


$policier = new Genre("policier");
$drame = new Genre("Drame");
$gangster = new Genre("Gangster");
$thriller = new Genre("Thriller");


$michaelMann = new Realisateur("Mann", "Michael");
$film1 = new Film("Heat", 1995, 171, $policier, $michaelMann);
$film2 = new Film("Miami Vice : Deux Flics à Miami", 2006, 132, $policier, $michaelMann);
$film3 = new Film("Ennemis Publics", 2009, 134, $drame, $michaelMann);
$film4 = new Film("Ali", 2001, 157, $drame, $michaelMann);



$martinScorcese = new Realisateur("Scorcese", "Martin");
$film1 = new Film("Les Affranchis", 1990, 146, $gangster, $martinScorcese);
$film2 = new Film("Casino", 1995, 178, $drame, $martinScorcese);
$film3 = new Film("Shutter Island", 2010, 130, $thriller, $martinScorcese);



// echo  $film1->getInfos();
// echo  $film2->getInfos();
// echo  $film3->getInfos();
// echo  $film4->getInfos();


echo $michaelMann->infosReal();
echo $martinScorcese->infosReal();



echo $policier->infosGenre();
echo $drame->infosGenre();
