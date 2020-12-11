<?php

namespace Model\Manager;

use App\AbstractManager;

class GenreManager extends AbstractManager {
    //! Propriétés
    private static $className = "Model\Entity\Genre";

    //! Constructeur
    public function __construct() {
        self::connect();
    }

    //! Méthodes
    public function findAll() {
        $sql = "SELECT *
                FROM genre";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id) {
        $sql = "SELECT * 
                FROM genre 
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}