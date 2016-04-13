<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];

$nom=strtolower($nom);
$nom=ucfirst($nom);

$prenom=strtolower($prenom);
$prenom=ucfirst($prenom);

if ($sexe=="homme"){
  $sexe2="Monsieur";
}
else{
  $sexe2="Madame";
}

echo "Bonjour $sexe2 $prenom $nom";
?>