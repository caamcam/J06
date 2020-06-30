<?php
    $nom_produit = 't-shirt simple';
    $couleur = 'rouge';
    $prix = '15,50';
    $disponible ='true';
    $quantité ='10';
    ?>

    <html>
    <?php
    include "./affichage.php"
    ?>
    <head>
    <title> Tests focntions </title>
    <meta charset="utf-8">
    </head>
    <body>
    <?php
    $nom_produit = 't-shirt femme ' . PHP_EOL ;
    echo $nom_produit;
    $couleur = ' rouge ';
    echo $couleur ;
    $prix = ' 15,50 ';
    echo $prix ;
    $disponible = 'true';
    echo $disponible;
    $quantité = '10'; 
    echo $quantité ;

    echo" le nom du produit est $nom_produit " . PHP_EOL ;
    echo " La couleur du produit est $couleur " . PHP_EOL ;
    echo " le prix du t-shirt est $prix ". PHP_EOL ;

    ?>

<?php
$nom_produit = ' t-shirt femme ';
$couleur =" rouge " ;

$disponible = true; 
$quantité = 10 ;
$nb_ajout = 5;
afficheproduit ($nom_produit,$couleur, $prix, $disponible);
$quantité= achat ($quantité, $nb_ajout);
updatedispo ($quantité);
affichageproduit ($nom_produit,$couleur,$prix,$disponible);
$quantité = restockage ($quantité, $nb_ajout);
updatedispo ($quantité);
affichageproduit ($nom_produit, $couleur, $prix, $disponible);
?>
</body>
</htlm>