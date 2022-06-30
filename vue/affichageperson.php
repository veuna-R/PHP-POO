<?php

/* La pratique veut que l'on affiche un objet dans une page différente de celle de la class. La classe se trouve dans un fichier externe qui prendra une majuscule et qui devra être nommé du nom de la class : exo : Class.php */

spl_autoload_register(function ($class) {
    include '../class/' . $class . '.php';
});
/* Une notion importante à comprendre est que chaque objet est différent. C'est à dire que je si je créée une nouvelle instance de ma class, le personnage héritera des propriétés mais pas des méthodes si je ne lui applique pas. */
//Créer un personnage et lui appliquer la méthode crier() et en faire un var_dump
$mario = new Personnage("Mario");
$luigi = new Personnage("Luigi");
$princess = new Personnage("Princess Peach");
$magic = new Magicien("Magic Koopa");

$princess->crier();
$mario->crier();
/* On applique la méthode regenerer a notre personnage et, par consequent, sa vie repasse à 100 */
$luigi->regenerer(5);
// $princess->vie = 0;
var_dump($princess->mort());

echo "<p>" . $princess->getNom() . "</p>";

var_dump($mario);
echo "<br>";
var_dump($luigi);
echo "<br>";
var_dump($princess);

$princess->attaque($mario);
/* Si je veux afficher quelque chose du côté de la vue j'utilise echo */


// if($mario->mort()) {
//     echo "<p>Mario est mort</p>";
// } else {
//     echo "<p>Mario a survécu, il lui reste ". $mario->vie ." vies</p>";
// }

// var_dump($mario->vie);

echo "<br>";

$princess->setNom("Princesse Daisy");
var_dump($princess->getNom());

echo "<br>";
var_dump($magic);

echo "<br>";
$magic->attaque($luigi);
var_dump($luigi);