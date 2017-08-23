<?php

/**
 * Description of Artiste.class
 *
 * @author webform
 */
class Artiste {
    // Attributs de mapping de la table
    private $idArtiste;
    private $lenom;
    private $leprenom;
    private $naissance;
    // Attributs complémentaires de tableau
    private $id;
    private $titre;
    private $image;
    // Constantes
    // méthodes
     public function __construct(Array $datas) {
        $this->hydrate($datas);
    }
    
    // hydratation
    private function hydrate(Array $a) {
        foreach ($a AS $clef => $valeur){
            $maMethode = "set".ucfirst($clef);
            if(method_exists($this, $maMethode)){
                $this->$maMethode($valeur);
            }
        }
    }
    public function getIdArtiste() {
        return $this->idArtiste;
    }

    public function getLenom() {
        return $this->lenom;
    }

    public function getLeprenom() {
        return $this->leprenom;
    }

    public function getNaissance() {
        return $this->naissance;
    }

    public function setIdArtiste($idArtiste) {
        $this->idArtiste = $idArtiste;
    }

    public function setLenom($lenom) {
        $this->lenom = $lenom;
    }

    public function setLeprenom($leprenom) {
        $this->leprenom = $leprenom;
    }

    public function setNaissance($naissance) {
        $this->naissance = $naissance;
    }
    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getImage() {
        return $this->image;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setImage($image) {
        $this->image = $image;
    }



}
