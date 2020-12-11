<?php

namespace Model\Entity;

use App\AbstractEntity;

class Realisateur extends AbstractEntity {
    //! Propriétés
    private $id;
    private $prenom;
    private $nom;
    private $sexe;
    private $dateNaissance;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //$ Getters
    public function getId() {
        return $this->id;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getSexe() {
        return $this->sexe;
    }
    public function getDateNaissance() {
        return $this->dateNaissance->format("d/m/Y");
    }

    //$ Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = new \DateTime($dateNaissance);
        return $this;
    }

    //$ toString
    public function __toString() {
        return $this->getPrenom() . " " . $this->getNom();
    }
}
