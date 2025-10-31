<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <h1>Inscription validée </h1>

<?php
echo "<p>Login : " . htmlspecialchars($_POST['login']) . "</p>";
echo "<p>Mot de passe : " . htmlspecialchars($_POST['mdp']) . "</p>";
echo "<p>Nom : " . htmlspecialchars($_POST['Nom']) . "</p>";
echo "<p>Genre : " . htmlspecialchars($_POST['Genre']) . "</p>";
echo "<p>Catégorie : " . htmlspecialchars($_POST['Categorie']) . "</p>";
?>
</body>
</html>
