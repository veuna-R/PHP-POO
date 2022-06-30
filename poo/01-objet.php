<!doctype html>
<html lang="fr">

<head>
    <title>Introduction - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="p-3 bg-light">
        <div class="container text-center">
            <h1 class="display-4">POO: la Programmation Orientée Objet</h1>
            <p class="lead">Introduction</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <h2 class="text-center">Que sont des objets</h2>
                <p>Les objets resemblent fortement aux variables que l'on connait (string, integer, float, array, etc.), mais ces dernières sont limitées et on peut se retrouvé blocqué. Par exemple, lorsque l'on crée un réseau social et que l'on veut sauvegarder un utilisateur. A ce moment là, on voudra définir ses limites, ses droits, etc.. Ces tableaux deviennent vite très complexes et si on droit les trasnmettre notre code, les personnes qui ne l'ont pas écrit s'y perdent facilement. Un autre exemple où le prcédural est compliqué à appliquer est lrosque l'on s'occupe des dates. Elles sont effet considérées comme des chaînes de caractêres et faire des ajouts de jours ou de mois dessus devient très compliqué. Il faudra convertir les donneées et passé d'un format à l'autre. En orienté objet, les manipulations de dates seront beaucoup plus simples.</p>
                <p class="alert alert-info"><strong>MaDate</strong> est une classe <br><strong>$date1 = new MaDate;</strong> sont des objets ou bien des instancations de celle classe.</p>
            </div><!-- fin de la classe "col-12: Historique" -->

            <div class="col-12">
                <h2 class="text-center">Les Propriétées</h2>
                <p>Sur nos différents objets (ou instanciations) nous allons avoir des propriétés, des variables. Un objet pourra contenir plusieurs propriétés mais aussi plusieurs méthodes: sur une classe 'MaDate' on pourra imaginer des propriétés pour afficher le nombre de jours mais aussi des méthodes pour ajouter des jours ou des mois.</p>
            </div><!-- fin de la classe "col-12: Propriétées" -->

            <div class="col-12">
                <h2 class="text-center">Les Méthodes</h2>
                <p>Comme nous en avons parlé en dessus, les classes peuvent aussi contenir des méthodes. Ces dernières sont en effet des fonctions, appelées méthode dans le cadre de la POO. Elles ont donc la même non-enclature qu'en procédural: <code>nomMethode();</code>.</p>
            </div><!-- fin de la classe "col-12: Méthodes" -->
        
        </div><!-- fin de la rangée -->
    </div><!-- fin du "container" -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>