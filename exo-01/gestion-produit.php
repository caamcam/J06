<html>
<head>
<title> Exo 1 </title>
</head>

<body>

<?php include 'affichage.php';
include 'gestion-produit.php '
?>

<?php
function update ($quantité)
{ 
if  ($quantité>0){ 
    return true;

}
if ($quantité<0) {
    return false;
}
}
?>
<p>
<?php
function achat_restockage($quantité,$nb_ajout)
{ 
    echo "<p>$nb_ajout produits qui ont été ajoutés au stock </p>"; 
    echo $quantité+$nb_ajout;
}
function restockage ($quantité,$nb_achat)
{ 
    echo "<p> $nb_achat produits qui ont été acheter </p>";
    echo $quantité - $nb_achat;
}
?>
</p>
</body>
</html>

