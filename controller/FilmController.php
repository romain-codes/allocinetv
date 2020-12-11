<?php 

namespace Controller;

use Model\Manager\FilmManager;

class FilmController {
    public function allFilms() {
        $manFilm = new FilmManager();
        $films = $manFilm->findAll();

        return [
            "view" => "film/films.php",
            "data" => [
                "films" => $films
            ],
            "titrePage" => "Liste des Films"
        ];
    }

    public function infoFilm($id) {
        $manFilm = new FilmManager();
        $film = $manFilm->findOneById($id);

        return [
            "view" => "film/infoFilm.php",
            "data" => [
                "film" => $film
            ],
            "titrePage" => "Info du Film"
        ];
    }
}