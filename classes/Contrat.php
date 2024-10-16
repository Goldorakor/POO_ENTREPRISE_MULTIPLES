<?php

class Contrat {
    private Entreprise $_entreprise;
    private Employe $_employe;
    private DateTime $_dateEmbauche;
    private string $_typeContrat;

    public function __construct (Entreprise $entreprise, Employe $employe, string $dateEmbauche, string $typeContrat) {
        $this->_entreprise = $entreprise;
        $this->_employe = $employe;
        $this->_dateEmbauche = new DateTime ($dateEmbauche);
        $this->_typeContrat = $typeContrat;
        $this->_entreprise->addContrat($this);
        $this->_employe->addContrat($this);
    }

    public function getEntreprise()
    {
        return $this->_entreprise;
    }

    public function setEntreprise($entreprise)
    {
        $this->_entreprise = $entreprise;

        return $this;
    }
 
    public function getEmploye()
    {
        return $this->_employe;
    }

    public function setEmploye($employe)
    {
        $this->_employe = $employe;

        return $this;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;

        return $this;
    }

        public function getTypeContrat()
        {
                return $this->_typeContrat;
        }

        public function setTypeContrat($typeContrat)
        {
                $this->_typeContrat = $typeContrat;

                return $this;
        }
}