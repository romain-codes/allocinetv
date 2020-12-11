<?php 

namespace Controller;

use Model\Manager\RealisateurManager;

class RealisateurController {
    public function allRealisateurs() {
        $manRealisateur = new RealisateurManager();
        $realisateurs = $manRealisateur->findAll();

        return [
            "view" => "realisateur/realisateurs.php",
            "data" => [
                "realisateurs" => $realisateurs
            ],
            "titrePage" => "Liste des Réalisateurs"
        ];
    }
}