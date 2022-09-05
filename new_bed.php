<?php
if (!empty($_POST)) {
    
    $errors = [];

    $image =trim(strip_tags($_POST["image"]));
    $name = trim(strip_tags($_POST["name"]));
    $marque = trim(strip_tags($_POST["marque"]));
    $taille = trim(strip_tags($_POST["taille"]));
    $prix = trim(strip_tags($_POST["prix"]));

    if (empty($errors)) {

        $db = new PDO("mysql:host=localhost;dbname=literie3000", "root", "");
       
        $query = $db->prepare("INSERT INTO users (image, marque, name, taille, prix) VALUES (: image, :marque, :name, :taille, :prix)");

        $query->bindParam(":image", $image);
        $query->bindParam(":marque", $marque);
        $query->bindParam(":name", $name);
        $query->bindParam(":taille", $taille);
        $query->bindParam(":prix", $prix);

        if ($query->execute()) {
            header("Location: index.php");
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
    <title>Nouvelles informations du matelas</title>
</head>

<body>
    <h2>Création de la nouvelle fiche produit du matelas</h2>

    <form action="" method="POST">
    <div class="form-group">
            <label for="inputImage">Image du matelas:</label>
            <input type="" id="inputImage" name="Image" value="<?= isset($image) ? $image : "" ?>">
        </div>
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
            <input type="text" id="inputPrix" name="Prix" value="<?= isset($prix) ? $prix : "" ?>">
        </div>

        <input type="submit" value="Création du matelas">
    </form>
</body>

</html>