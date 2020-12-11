<?php

namespace Model\Entity;

use App\AbstractEntity;

class Genre extends AbstractEntity {
    //! Propriétés
    private $id;
    private $libelle;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //$ Getters
    public function getLibelle() {
        return $this->libelle;
    }
    public function getId() {
        return $this->id;
    }

    //$ Setters
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    //$ toString
    public function __toString() {
        return $this->getLibelle();
    }
}
