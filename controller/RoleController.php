<?php 

namespace Controller;

use Model\Manager\RoleManager;

class RoleController {
    public function allRoles() {
        $manRole = new RoleManager();
        $roles = $manRole->findAll();

        return [
            "view" => "role/roles.php",
            "data" => [
                "roles" => $roles
            ],
            "titrePage" => "Liste des Rôles"
        ];
    }
}