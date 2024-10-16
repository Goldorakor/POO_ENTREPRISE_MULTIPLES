<?php

class Employe {
    private string $_nom;
    private string $_prenom;
    private string $_email;
    private array $_contrats;

    public function __construct (string $nom, string $prenom, string $email) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_contrats = [];
    }

     
    public function getNom () : string
    {
        return $this->_nom;
    }

    
    public function setNom (string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }

     
    public function getPrenom () : string
    {
        return $this->_prenom;
    }

    
    public function setPrenom (string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

     
    public function getEmail () : string
    {
        return $this->_email;
    }

    
    public function setEmail (string $email)
    {
        $this->_email = $email;

        return $this;
    }

    public function getContrats()
    {
        return $this->_contrats;
    }

    public function setContrats($_contrats)
    {
        $this->_contrats = $_contrats;

        return $this;
    }

    public function addContrat (Contrat $contrat) {
        $this->_contrats[] = $contrat;
    }
    // méthode pour ajouter des éléments à notre tableau


    public function AfficherEntreprises () {
        $result = "<h2>Entreprise où $this a déjà travaillé, avec la date d'embauche</h2>";

        foreach ($this->_contrats as $contrat) {
            $result .= $contrat->getEntreprise()->getRaisonSociale()." (".$contrat->getDateEmbauche()->format("d-m-Y").") en ".$contrat->getTypeContrat().".<br>"; // ' $contrat->getEntreprise() ' est un objet de la classe Entreprise
        } // revoir boucle foreach avec tableau associatif

        // $contrat->getEntreprise()->getRaisonSociale() car __toString () de la classe Entreprise affiche aussi la date de création de l'entreprise, ce dont nous ne voulons pas ici .... permet de s'entrainer au chainage.

        return $result;
    }


    public function __toString () {
        return $this->_prenom." ".$this->_nom;
    }
}
