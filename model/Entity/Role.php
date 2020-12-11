<?php

namespace Model\Entity;

use App\AbstractEntity;

class Role extends AbstractEntity {
    //! Propriétés
    private $id;
    private $nomrole;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //$ Getters
    public function getId() {
        return $this->id;
    }
    public function getNomrole() {
        return $this->nomrole;
    }

    //$ Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setNomrole($nomrole) {
        $this->nomrole = $nomrole;
        return $this;
    }

    //$ toString
    public function __toString() {
        return $this->getNomrole();
    }
}
