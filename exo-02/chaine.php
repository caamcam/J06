<p>La Chaine</p> <?php echo $nom ?> contient 
<?php
$str = 'La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.';
echo strlen($str); // sortie: 21
?>
 
<p>La Chaine</p> <?php echo $nom ?> contient 
<?php
$str = 'La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.';
{ 
    echo str_word_count ($str);
}
?>
 
<p>

<?php 
$texteminuscule= strtolower($str);
{
 echo $texteminuscule;
}
?> 
</p>
 
<p>
<?php
$textemajuscule= strtouper($str);
{ 
    echo $textemajuscule ;
}
?>
</p>
 
<p>
<?php
$textemelange= str_shuffle($str);
{ 
    echo $textemelange ;
}
?>
</p>