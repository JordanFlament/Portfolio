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
                <img src="https://didiermotte.be/app/uploads/2018/01/IMG_E3546-768x1024.jpg">
            </div>
            <div class="descrip">
                <div class="titre">
                    <h1>Meuble de coiffeur / barbier</h1>
                <div>
                <div class="des">
                    <p>Meuble de coiffeur / barbier en noyer d’un ancien salon de la région de Caen .</p>
                    <p>Il possède 10 tiroirs garnis chacun d’une très belle poignée en métal , marquée  » GELLE FRERES PARIS  » .</p>
                    <p>Un marbre rouge est surmonté d’un miroir avec fronton.</p>
                    <p>La hauteur de celui-ci peut éventuellement être réduite.</p>
                    <p><strong>Dimensions</strong><br>largeur: 120cm x hauteur: 335cm x profondeur: 65cm </p>
                    <p><strong>Status</strong><br>En stock</p>
                    <p><strong>Catégorie</strong><br>Meubles de métier & meubles industriels</p>
                    <p><strong>Mots-clef</strong><br>Meuble de barbier, meuble de coiffeur</p>
                </div>
            </div>
            <div class="imgM">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_E3546-250x250.jpg" class="min1">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_3527-250x250.jpg" class="min2">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_3528-250x250.jpg" class="min3">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_E3526-250x250.jpg" class="min4">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_3530-250x250.jpg" class="min5">
               <img src="https://didiermotte.be/app/uploads/2018/01/IMG_E3547-250x250.jpg" class="min6">
            </div>
            <div class="ap">
                <h1>Article apparentés</h1>
                <a href="stockc.php"><img src="https://didiermotte.be/app/uploads/2017/08/IMG_2698-250x250.jpg" class="img4" alt="Lavabo double-cuvettes en marbre" title="Lavabo double-cuvettes en marbre">Lavabo double-cuvettes en marbre</a>
                <a href="stockg.php"><img src="https://didiermotte.be/app/uploads/2018/02/IMG_3800-250x250.jpg" class="img4" alt="Meuble de barbier / coiffeur" title="Meuble de barbier / coiffeur">Meuble de barbier / coiffeur</a>
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