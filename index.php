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

<?php
include("templates/footer.php");
?>