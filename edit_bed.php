<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de la fiche produit d'un matelas</title>
</head>

<body>
    <h3>Modification d'un matelas</h3>

    
    <div class="form-group">
        <label for="inputName">Nom du matelas:</label>
        <input type="text" id="inputName" name="Name" value="<?= isset($name) ? $name : "" ?>">
       
        <nav>
            <a href="http://localhost/ecf-back-literie/ecf-literie/new_bed.php"><input type="submit" value="Modification du matelas"></a>
        </nav>
        </form>
</body>

</html>