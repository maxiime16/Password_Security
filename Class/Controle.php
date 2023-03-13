<?php
class Controle{
    /* ATTRIBUTS */
    private $_mot;
    private $_longueur;
    private $_maj;
    private $_min;
    private $_caract;
    private $_force = 0;

    /* CONSTRUCTEUR */
    public function __construct($prmMot)
    {
        $this->_mot = $prmMot;
    }

    /* GETTER SETTER */
    public function getMot()
    {
        return $this->_mot;
    }

    /* METHODES */
    // vérif de la longueur
    public function longueur($_mot)
    {
        $longueurMDP = strlen($_mot);
        if ($longueurMDP >= 12) {
            return "Longueur: test validé ✅ Longueur: " . $longueurMDP;
        } else {
            return "Longueur: test pas validé ❌ Le mot de passe trop court ! Longueur:" . $longueurMDP;
        }
    }

    // vérif si majuscule
    public function majuscule($_mot)
    {
        if (preg_match("~[A-Z]~", $_mot)) {
            return "Masjucule: test validé ✅ Le mot de passe contient au moins une majuscule";
        } else {
            return "Majsucule: test pas validé ❌ Le mot de passe ne contient pas de majuscule";
        }
    }

    // vérif si majuscule
    public function minuscule($_mot)
    {
        if (preg_match("~[a-z]~", $_mot)) {
            return "Minuscule: test validé ✅ Le mot de passe contient au moins une minuscule";
        } else {
            return "Minuscule: test pas validé ❌ Le mot de passe ne contient pas de minuscule";
        }
    }

    // vérif si chiffre
    public function chiffre($_mot)
    {
        if (preg_match("~[0-9]~", $_mot)) {
            return "Chiffre: test validé ✅ Le mot de passe contient au moins un chiffre";
        } else {
            return "Chiffre: test pas validé ❌ Le mot de passe ne contient pas de chiffre";
        }
    }

    // vérif si caractères spéciaux
    public function speciaux($_mot)
    {
        if (preg_match("~[\W]~", $_mot)) {
            return "Caractères spéciaux: test validé ✅ Le mot de passe contient au moins un caractère spéciacial";
        } else {
            return "Caractères spéciaux: test pas validé ❌ Le mot de passe ne contient pas de caractères spéciaux";
        }
    }
}