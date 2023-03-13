<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vérification de sécurité</title>
</head>
<body>
<div style="background-color: lightgrey;width: 50%;margin: auto;text-align: center;border: 1px solid black;border-radius: 5px;padding:5px;">
    <!--Formulaire d'ajout de véhicule-->
    <div>
        <h1>Vérification de sécurité</h1>
        <form action="" method="post">
            <label for="motdepasse">Saisir un mot de passe: </label>
            <br>
            <input type="password" name="motdepasse" id="motdepasse" required>
            <br>
            <input type="submit" name="valider" value="TESTER" style="font-size: 10rem">
        </form>
    </div>
    <br>
    <div>
        <?php
        // si un mot de passe est saisie alors on affiche la sécurité de celui-ci
        if (isset($_POST['valider'])) {
        require_once("../Class/Controle.php"); ?>
        <!-- Bouton pour afficher le mot de passe -->
        <div>
            <button onclick="afficherMot()">Afficher le mot de passe :</button>
            <br>
            <p id="mdp"
               style="display: none;border: 1px solid black;border-radius: 5px; width: max-content; text-align: center;margin: auto;padding: 4px"><?php echo $_POST['motdepasse'] ?></p>
            <script>
                function afficherMot() {
                    if (document.getElementById("mdp").style.display === "none") {
                        document.getElementById("mdp").style.display = "block";
                    } else {
                        document.getElementById("mdp").style.display = "none";
                    }
                }
            </script>
        </div>
        <br>
        <!-- Affichage des différents tests de sécurité -->
        <div style="text-align: left">
            <?php
            // on instancie la classe
            $ControleMDP = new Controle($_POST['motdepasse']);

            // on fait les différents tests
            echo $TestLongueur = $ControleMDP->longueur($ControleMDP->getMot()) . "<br>";
            echo $TestMajuscule = $ControleMDP->majuscule($ControleMDP->getMot()) . "<br>";
            echo $TestMinuscule = $ControleMDP->minuscule($ControleMDP->getMot()) . "<br>";
            echo $TestChiffre = $ControleMDP->chiffre($ControleMDP->getMot()) . "<br>";
            echo $TestSpecieux = $ControleMDP->speciaux($ControleMDP->getMot()) . "<br>";
            }; ?>
        </div>
    </div>
</div>
</body>
</html>