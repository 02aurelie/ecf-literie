<?php
if (!empty($_POST)) {
    // Le formulaire a été soumis
    $errors = [];

    $name = trim(strip_tags($_POST["name"]));
    $marque = trim(strip_tags($_POST["marque"]));
    $taille = trim(strip_tags($_POST["taille"]));
    $prix = trim(strip_tags($_POST["prix"]));

    if (empty($errors)) {

        $db = new PDO("mysql:host=localhost;dbname=literie3000", "root", "");
       
        $query = $db->prepare("INSERT INTO users (marque, taille, prix) VALUES (:marque, :name, :taille, :prix)");

        $query->bindParam(":marque", $marque);
        $query->bindParam(":name", $name);
        $query->bindParam(":taille", $taille);
        $query->bindParam(":prix", $prix);

        if ($query->execute()) {
            header("Location: login.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de la fiche produit d'un matelas</title>
</head>

<body>
    <h1>Création de la fiche produit d'un matelas</h1>

    <form action="" method="POST">
    <div class="form-group">
            <label for="inputMarque">Marque du matelas:</label>
            <input type="text" id="inputMarque" name="Marque" value="<?= isset($marque) ? $marque : "" ?>">
        </div>
        <div class="form-group">
            <label for="inputName">Nom du matelas:</label>
            <input type="text" id="inputName" name="Name" value="<?= isset($name) ? $name : "" ?>">
        </div>
        <div class="form-group">
            <label for="inputTaille">Taille :</label>
            <input type="text" id="inputTaille" name="Taille" value="<?= isset($taille) ? $taille : "" ?>">
        </div>
        <div class="form-group">
            <label for="inputPrix">Prix :</label>
            <input type="" name="Prix" id="inputPrix" value="<?= isset($prix) ? $prix : "" ?>">

        </div>

        <input type="submit" value="Création du matelas">
    </form>
</body>

</html>
