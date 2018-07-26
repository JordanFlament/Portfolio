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
                <img src="https://didiermotte.be/app/uploads/2017/08/IMG_2698-768x1024.jpg">
            </div>
            <div class="descrip">
                <div class="titre">
                    <h1>Meuble de barbier / coiffeur</h1>
                <div>
                <div class="des">
                    <p>Meuble de barbier / coiffeur double-cuvettes en pitchpin début XXème de style Art Nouveau.</p>
                    <p>Il se compose de 4 tiroirs et de 2 portes et est surmonté de 2 grands miroirs avec encadrements sculptés.</p>
                    <p>Les miroirs sont légèrement  » piqués  » mais tout à fait utilisables dans le cadre d’un salon.</p>
                    <p>Les marbres sont d’origine avec des restaurations à 3 endroits.</p>
                    <p>Boiserie en bon état.</p>
                    <p>Cuvettes et robinets à revoir.</p>
                    <p><strong>Dimensions</strong><br>largeur: 262cm x hauteur: 255cm x profondeur: 65cm </p>
                    <p><strong>Status</strong><br>En stock</p>
                    <p><strong>Catégorie</strong><br>Meubles de métier & meubles industriels</p>
                    <p><strong>Mots-clef</strong><br>Meuble de barbier, meuble de coiffeur, Meuble de métier</p>
                </div>
            </div>
            <div class="imgM">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3800-250x250.jpg" class="min1">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3801-250x250.jpg" class="min2">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3802-250x250.jpg" class="min3">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3803-250x250.jpg" class="min4">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3804-250x250.jpg" class="min5">
               <img src="https://didiermotte.be/app/uploads/2018/02/IMG_3805-250x250.jpg" class="min6">
            </div>
            <div class="ap">
                <h1>Article apparentés</h1>
                <a href="stockf.php"><img src="https://didiermotte.be/app/uploads/2018/01/IMG_E3546-250x250.jpg" class="img4" alt="Meuble de coiffeur / barbier" title="Meuble de coiffeur / barbier">Meuble de coiffeur / barbier</a>
                <a href="stockc.php"><img src="https://didiermotte.be/app/uploads/2017/08/IMG_2698-250x250.jpg" class="img4" alt="Lavabo double-cuvettes en marbre" title="Lavabo double-cuvettes en marbre">Lavabo double-cuvettes en marbre</a>
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