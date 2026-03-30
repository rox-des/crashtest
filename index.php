<?php 

include 'include_php/config.php';

$produits = $db->query("SELECT * FROM produits");
$titre_part1 = "Départements";
    $titre_part2 = "Extérieur et jardin";
    $sous_titre = "Barbecues et cuisson d'extérieur";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quincaillerie Marceau</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="interface">
       <?php include 'components/header.php'?>

        <main>
            <?php include 'components/header-titre.php'?>

            <?php include 'components/produits.php'?>
            <!-- lol -->
        </main>
    </div>
</body>
</html>