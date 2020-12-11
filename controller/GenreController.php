<?php 

namespace Controller;

use Model\Manager\GenreManager;

class GenreController {
    public function allGenres() {
        $manGenre = new GenreManager();
        $genres = $manGenre->findAll();

        return [
            "view" => "genre/genres.php",
            "data" => [
                "genres" => $genres
            ],
            "titrePage" => "Liste des Genres"
        ];
    }
}