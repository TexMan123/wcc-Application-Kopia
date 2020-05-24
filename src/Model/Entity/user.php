<?php

class user{
    private $id;
    private $nom;
    private $prenom;
    private $sexe;
    private $dateN;
    private $lieuN;
    private $pere;
    private $lieuNP;
    private $dateNP;
    private $mere;
    private $lieuNM;
    private $dateNM;
    private $heureNais;
    private $commune;
    private $createdAt;
    private $createdTime;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function getSexe(){
        return $this->sexe;
    }
    public function setSexe($sexe){
        $this->sexe=$sexe;
    }

    public function getDateN(){
        return $this->dateN;
    }
    public function setDateN($dateN){
        $this->dateN=$dateN;
    }

    public function getLieuN(){
        return $this->lieuN;
    }
    public function setLieuN($lieuN){
        $this->lieuN=$lieuN;
    }

    public function getPere(){
        return $this->pere;
    }
    public function setPere($pere){
        $this->pere=$pere;
    }

    public function getLieuNP(){
        return $this->lieuNP;
    }
    public function setLieuNP($lieuNP){
        $this->lieuNP=$lieuNP;
    }

    public function getDateNP(){
        return $this->dateNP;
    }
    public function setDateNP($dateNP){
        $this->dateNP=$dateNP;
    }

    public function getMere(){
        return $this->mere;
    }
    public function setMere($mere){
        $this->mere=$mere;
    }

    public function getLieuNM(){
        return $this->lieuNM;
    }
    public function setLieuNM($lieuNM){
        $this->lieuNM=$lieuNM;
    }

    public function getDateNM(){
        return $this->dateNM;
    }
    public function setDateNM($dateNM){
        $this->dateNM=$dateNM;
    }

    public function getHeureNais(){
        return $this->heureNais;
    }
    public function setHeureNais($heureNais){
        $this->heureNais=$heureNais;
    }
    
    public function getCommune(){
        return $this->commune;
    }
    public function setCommune($commune){
        $this->commune=$commune;
    }
}