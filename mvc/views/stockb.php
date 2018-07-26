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
                <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0816-768x1024.jpg">
            </div>
            <div class="descrip">
                <div class="titre">
                    <h1>Pharmacie ancienne</h1>
                <div>
                <div class="des">
                    <p>Ensemble de meubles en chêne d’une pharmacie d’époque fin XIXème. Origine : nord de la France. Tiroirs avec de belles poignées « coquille », portes décorées de vases avec des fleurs de pavot.</p>
                    <p>Porte centrale avec verre gravé à l’acide surmontée d’une horloge dans un fronton sculpté. (Petit éclat d’un cm dans un coin de la vitre ).</p>
                    <p>L’ensemble peut-être facilement replacé en ligne droite.</p>
                    <p><strong>Dimensions</strong><br>Largeur: 615cm x hauteur: 270cm x profondeur: 12 cm </p>
                    <p><strong>Status</strong><br>En stock</p>
                    <p><strong>Catégorie</strong><br>Meubles de métier & meubles industriels</p>
                    <p><strong>Mots-clef</strong><br>Intérieur de pharmacie, Pharmacie ancienne</p>
                </div>
            </div>
            <div class="imgM">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0816-250x250.jpg" class="min1">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0819-250x250.jpg" class="min2">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0821-250x250.jpg" class="min3">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0823-250x250.jpg" class="min4">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0825-250x250.jpg" class="min5">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0822-250x250.jpg" class="min6">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0743_4-250x250.jpg" class="min7">
               <img src="https://didiermotte.be/app/uploads/2017/01/IMG_0837-250x250.jpg" class="min8">
            </div>
            <div class="ap">
                <h1>Article apparentés</h1>
                <a href="stockb.php"><img src="https://didiermotte.be/app/uploads/2017/12/IMG_3402-250x250.jpg" class="img4" alt="Comptoir de pharmacie – herboristerie double-face" title="Comptoir de pharmacie – herboristerie double-face">Comptoir de pharmacie – herboristerie double-face</a>
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