<?php
$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

$query = $db->query("SELECT * FROM beds");

$beds = $query->fetchAll(PDO::FETCH_ASSOC);

include("templates/header.php");
?>

<h1>Notre catalogue</h1>
<div class="beds">
    <?php
    foreach ($beds as $bed) {
    ?>

        <div class="bed">
            <img src="<?= $bed["image"] ?>" alt="">
            <div class="bed-details">
                <p><?= $bed["marque"] ?></p>
                <p><?= $bed["name"] ?></p>
                <p><?= $bed["taille"] ?></p>
                <p><?= $bed["prix"] ?> €</p>
            </div>
        </div>
    <?php
    }
    ?>

</div>
<div class="bottom">
   
    <a href="bed.php?id=<?= $bed["id"] ?>"> Retrouvez la suite du catalogue en page 2</a>
    
    <div class="dimensions">
        <p>Vous y découvrirez toutes nos dimensions :</p>
    </div>
    <div class="others-dimensions">
        <p>90x190, 140x190, 160x200, 180x200, 200x200</p>

    </div>

    <div class="marks">
        <p>Et toutes nos marques de matelas :</p>
        <div class="others-marks">
            <p> Epeda, Dreamway, Bultex, Dorsoline, MemoryLine</p>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>