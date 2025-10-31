<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
<?php
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$nom = $_POST['nom'];
$genre = $_POST['genre'];
$categorie = $_POST['categorie'];

if (strlen($mdp) < 10) {
    echo "<p style='color:red;'>Erreur : le mot de passe doit contenir au moins 10 caractères.</p>";
} else {
    echo "<h2>Bonjour ";
    if ($genre == "M") {
        echo "Monsieur ";
    } else {
        echo "Madame ";
    }
    echo htmlspecialchars($nom) . "</h2>";

    switch ($categorie) {
        case "cadre":
            $prix = 50;
            break;
        case "ouvrier":
            $prix = 10;
            break;
        case "sans emploi":
            $prix = 0;
            break;
        default:
            $prix = 20;
            break;
    }

    echo "<p>Coût d'inscription : $prix €</p>";

    echo '<form action="confirmer.php" method="post">';
    echo "<input type='hidden' name='login' value='$login'>";
    echo "<input type='hidden' name='mdp' value='$mdp'>";
    echo "<input type='hidden' name='nom' value='$nom'>";
    echo "<input type='hidden' name='genre' value='$genre'>";
    echo "<input type='hidden' name='categorie' value='$categorie'>";
    echo '<input type="submit" value="CONFIRMER">';
    echo '</form>';
}
?>
</body>
</html>
