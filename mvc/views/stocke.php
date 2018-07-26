<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../assets/style.css">
        <?php require('../controller/regles.php');?>
        <title></title>
    </head>
    <body>
        <?php include('barre.php');?>
        <section class="grid">
            <div class="imgB">
                <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3402-768x1024.jpg">
            </div>
            <div class="descrip">
                <div class="titre">
                    <h1>Comptoir de pharmacie – herboristerie double-face</h1>
                <div>
                <div class="des">
                    <p>Comptoir de pharmacie – herboristerie double-face.</p>
                    <p>Côté clientèle avec vitrine fermée par 3 double –  portes , chacune avec serrure et clé , servant à exposer des flacons ou boîtes de médicaments et côté intérieur avec 24 tiroirs coulissant parfaitement.</p>
                    <p>Chaque tiroir possède une plaquette émaillée déterminant son contenu.</p>
                    <p>Belle patine beige et noire d’origine.</p>
                    <p>Plateau en marbre blanc avec traces de restauration.</p>
                    <p> La face et les côtés sont décorés de 8 colonnes sculptées.</p>
                    <p><strong>Dimensions</strong><br>largeur: 300cm x hauteur: 112cm x profondeur: 61cm</p>
                    <p><strong>Status</strong><br>En stock</p>
                    <p><strong>Catégorie</strong><br>Meubles de métier & meubles industriels</p>
                    <p><strong>Mots-clef</strong><br>Meuble d'herboristerie, Meuble de métier, meuble de pharmacie</p>
                </div>
            </div>
            <div class="imgM">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3402-250x250.jpg" class="min1">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3398-250x250.jpg" class="min2">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3403-250x250.jpg" class="min3">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3410-250x250.jpg" class="min4">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3400-250x250.jpg" class="min5">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3406-250x250.jpg" class="min6">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3411-250x250.jpg" class="min7">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3407-250x250.jpg" class="min8">
            </div>
            <div class="ap">
                <h1>Article apparentés</h1>
                <a href="stockb.php"><img src="https://didiermotte.be/app/uploads/2017/01/IMG_0816-250x250.jpg" class="img4" alt="Pharmacie ancienne" title="Pharmacie ancienne">Pharmacie ancienne</a>
                <a href="stockd.php"><img src="https://didiermotte.be/app/uploads/2017/12/IMG_3360-250x250.jpg" class="img4" alt="Comptoir de réception en chêne" tlte="Comptoir de réception en chêne">Comptoir de réception en chêne</a>
            </div>
        </section>
        <div class="cata">
            <h4>Catalogue</h4>
            <input type="text" name="search" placeholder="Que cherchez-vous ?">
            <a href="result.php"><input type="submit" name="ok" value="recherche"></a><br/><br/>
            <a href="result.php" name="a" class="ima">Réception(1)</a>
            <a href="result.php" name="b"  class="ima">Commerce(2)</a>
            <a href="result.php" name="c" class="ima">Lavabo(3)</a>
        </div>
        <?php include('information.php');?>
    </body>
</html>