<?php
    /* Pour créer une classe, on va utiliser le mot clé "class" suivi du nombre de notre classe, avec une majuscule. Le nom du fichier, lorsqu'il contient une classe doit prendred une majuscule.
    Attention un fichier de classe ne contient que les informations relatives à la classe à l'intérieur, l'affichage se fera sur une autre page.
    */
    class Personnage {
        /* on définit des caracteristiques de nos personnagess grâce à des propriétés*/
            protected $vie = 80;
            public $atk = 20;
        /* C'est sûrement par convention et pour s'y retrouver dans le code que l'on déclare notre propriété à cet endroit. On pourrait définir le nom directement dans la page affichage.php mais c'est fortement déconseillé*/
            protected $nom;
        /* public est la visibilité de notre variable . On en repalera plus tard pour définir ce qu'elle veut dire mais il existe aussi par exemple "protected"*/

        /*Lorsque l'on crée une instance de classe, on fait appel à un constructeur. Si on veut initialiser une donnée dès la création il faudra utiliser la methode "__construct". Grâce à cette méthode, tous les paramètres qui seront passé entre parenthèses permettront de définir les données voulues. */

        /* En l'occurence, nous voulons définir le nom de notre personnage dès sa création. */

            public function __construct($nom) {
                /* Grâce à la façon de faire qui suit, nous allons pouvoir sauvegarder le nom du personnage passé lors de l'instanciation. Le constructeur permet en fait d'implimenter des propriétés de manière initiale. */
                $this->nom = $nom;
            }

        /* LES GETTERS */
            public function getNom() {
                return $this->nom;
            }
        
        /* LES SETTERS */
            public function setNom($nom) {
                $this->nom = $nom;
            }

        /* On définit une fonction(méthode) qui lorsqu'on l'appelle, fait un echo de la phrase */
            public function crier() {
                echo "HELP ME!";
            }

        /* Création de la méhtode regénérer */
        /* Pour cette méthode, il faudra utiliser "$this =>" fait rférence au personnage (à l'objet) sur lequel on va appliquer notre méthode. Pour cette méthode, le but est de mêtre la vie du personnage sur lequel elle est appliquée à 100% */
            public function regenerer($vie = null) {
        /* Si on ne précise pas de chiffres en paramètres alors la vie sera regénérer à 100%, sinon si en paramètres, on passe 5% par exemple, alors on rajoutra 5% à la vie de notre personnage */
                if(is_null($vie)) {
                    $this->vie = 100;
                } else {
                    $this->vie += $vie;
                }
            }

            public function mort() {
        /* Cette méthode renvoie le booléan "false" quand le personnage n'est pas mort et "true" si le personnage est mort */
                return $this->vie <= 0;
            }

            protected function empecher_negatif() {
                if($this->vie <0) {
                    $this->vie = 0;
                }
            }
    }
?>