<?php
class livre {
    public $titre;
    public $auteur;
    public $nombrePages;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombrePages = $nombrePages;
    }

    public function AfficherDetails() {
        return "{$this->titre} avec {$this->nombrePages} est écrit par {$this->auteur} ";
    }
}

class Etudiant {
    public $nom;
    public $prenom;
    public $age;
    public $matricule;

    public function __construct($nom, $prenom, $age, $matricule) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->matricule = $matricule;
    }

    public function sePresenter() {
        return "Je suis {$this->prenom} {$this->nom}, âgé de {$this->age} ans,
        matricule : {$this->matricule}";
    }
}

$etudiant_un = new Etudiant("Miaou", "Alicia", 18, "loli");
$etudiant_deux = new Etudiant("Pacari", "Manon", 18, "<3");

class CompteBancaire {
    //Private = On ne peut pas récuperer les infos en dehors de la classe
    private $numeroCompte;
    private $solde;

    public function __construct($numeroCompte, $solde){
        $this->numeroCompte = $numeroCompte;
        $this->solde = $solde;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function deposer($montant) {
        $this->solde += $montant;
    }

    public function retirer($montant) {
        $this->solde -= $montant;
    }

    public function afficherInfos() {
        echo "{$this->numeroCompte} : {$this->solde}";
    }
}

$test = new CompteBancaire(1234, 18);
$test->deposer(24);