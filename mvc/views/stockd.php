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
                <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3360-768x1024.jpg">
            </div>
            <div class="descrip">
                <div class="titre">
                    <h1>Comptoir de réception en chêne</h1>
                <div>
                <div class="des">
                    <p>Superbe comptoir de réception d’hôtel en chêne avec ses deux côtés galbés.</p>
                    <p>L’intérieur se présente avec une tablette et deux tiroirs avec serrures et clés dans la ceinture.</p>
                    <p>Très belle qualité d’ébénisterie.</p>
                    <p><strong>Dimensions</strong><br>largeur: 214cm x hauteur: 103cm x profondeur: 73cm</p>
                    <p><strong>Status</strong><br>En stock</p>
                    <p><strong>Catégorie</strong><br>Meubles de métier & meubles industriels</p>
                    <p><strong>Mots-clef</strong><br>Comptoir ancien, Comptoir de métier, Comptoir de réception</p>
                </div>
            </div>
            <div class="imgM">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3360-250x250.jpg" class="min1">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3358-250x250.jpg" class="min2">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3363-250x250.jpg" class="min3">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3364-250x250.jpg" class="min4">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3357-250x250.jpg" class="min5">
               <img src="https://didiermotte.be/app/uploads/2017/12/IMG_3355-250x250.jpg" class="min6">
            </div>
            <div class="ap">
                <h1>Article apparentés</h1>
                <a href="stocke.php"><img src="https://didiermotte.be/app/uploads/2017/12/IMG_3402-250x250.jpg" class="img4" alt="Comptoir de pharmacie – herboristerie double-face" title="Comptoir de pharmacie – herboristerie double-face">Comptoir de pharmacie – herboristerie double-face</a>
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