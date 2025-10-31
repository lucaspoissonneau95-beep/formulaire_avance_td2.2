<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        form {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            text-align: left;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Formulaire d'inscription</h1>

    <form action="accueil.php" method="post">
        <label>Login :</label>
        <input type="text" name="login" required>

        <label>Mot de passe :</label>
        <input type="password" name="mdp" required>

        <label>Genre :</label>
        <select name="genre" required>
            <option value="M">Homme</option>
            <option value="F">Femme</option>
        </select>

        <label>Catégorie :</label>
        <select name="categorie" required>
            <option value="cadre">Cadre</option>
            <option value="ouvrier">Ouvrier</option>
            <option value="sans emploi">Sans emploi</option>
            <option value="autre">Autre</option>
        </select>

        <label>Description :</label>
        <textarea name="description" rows="4" placeholder="Décrivez-vous..."></textarea>

        <label>Nom :</label>
        <input type="text" name="nom" required>

        <label>Email :</label>
        <input type="email" name="email" required>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
