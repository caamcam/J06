<html>
<head>
<title> Exo 1 </title>
</head>

<h1>
<?php
function afficher_titre ($nom_produit)
{ 
    echo "Fiche produit : $nom_produit" . '</br>' ;
}
?>
</h1> 
<p>
<?php
function affichage ($couleur,$prix)
{ 
    echo "couleur: $couleur, . '</br>  prix: $prix";
}
?>
</p> 
<p>
<?php
function afficher_produit ($nom_produit, $couleur, $prix,$disponible ){

if ($disponible= true ) { 
    echo" $nom_produit, $couleur, $prix";
}
if ($disponible= false ) { 
    echo" le produit $nom_produit, n'est malheureusement plus disponible";
}
}
?>
</p>

</html>