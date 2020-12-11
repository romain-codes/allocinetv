<?php

namespace Model\Entity;

use App\AbstractEntity;

class Film extends AbstractEntity {
    //! Propriétés
    private $id;
    private $titre;
    private $sortie;
    private $duree;
    private $synopsis;
    private $note;
    private $affiche;
    private $realisateur;

    //! Constructeur
    public function __construct($data) {
        parent::hydrate($data, $this);
    }

    //! Méthodes
    //$ Getters
    public function getId() {
        return $this->id;
    }
    public function getTitre() {
        return $this->titre;
    }
    public function getSortie() {
        return $this->sortie->format("d/m/Y");
    }
    public function getDuree() {
        return $this->duree;
    }
    public function getSynopsis() {
        return $this->synopsis;
    }
    public function getNote() {
        return $this->note;
    }
    public function getAffiche() {
        return $this->affiche;
    }
    public function getRealisateur() {
        return $this->realisateur;
    }

    //$ Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }
    public function setSortie($sortie) {
        $this->sortie = new \DateTime($sortie);
        return $this;
    }
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }
    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
        return $this;
    }
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }
    public function setAffiche($affiche) {
        $this->affiche = $affiche;
        return $this;
    }
    public function setRealisateur($realisateur) {
        $this->realisateur = $realisateur;
        return $this;
    }

    //$ toString
    public function __toString() {
        return $this->getTitre();
    }
}
