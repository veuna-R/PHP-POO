<?php
    /* La pratique veut que l'on affiche un objet dans une page différente que celle de la classe. La classe se trouve dans un fichier externe; il prendra une majuscule et qui devra être nommer du nom de la classe par ex: "Class.php". */

        require "Personnage.php";
        require "Magicien.php";

        $mario = new Personnage("Mario");
        $luigi = new Personnage("Luigi");
        $princess = new Personnage("Princess Peach");
        $bowser = new Personnage("Bowser");

        var_dump($mario);

        $princess -> crier();
        /* On applique la méthode regénérer à notre personnage et par conséquent sa vie repasse à 100 */

        $luigi -> regenerer(10);
        var_dump($princess->mort());
        /* $princess -> vie = 0 */

        echo "<p>" . $princess->getNom() . "</p>";

        var_dump($mario);
        echo "<br>";

        var_dump($luigi);
        echo "<br>";

        var_dump($princess);
        echo "<br>";

        var_dump($princess -> mort());

        $mario -> attaque($bowser);
            if($bowser->mort()) {
                echo "<p>Bowser is down! VICTORY!!</p>";
            } else {
                echo "<p>Bowser is not down yet, he still has " . $bowser -> vie . " life.</p>";
            }

        echo "<br>";
        
        /* to change name: */
        // $princess -> setNom("Princess Daisy"); 
        // var_dump($princess);

        echo "<br>";
        $koopa = new Magicien("Magic Koopa");
        var_dump($koopa);

        $koopa -> attaque($luigi);
        // echo "<p>Luigi has" . $luigi->vie . "life.</p>";
        var_dump($luigi);
            
        
?>