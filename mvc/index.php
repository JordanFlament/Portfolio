<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Antiquités, Décoration, Aménagements d'intérieur:</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="SHORTCUT ICON" href="../assets/css/images/MyIconx16.ico"/>
    </head>
    <body>
        <?php include('controller/regles.php');?>
        <section class="pa">
            <div class="barren"></div>
            <div class="card">
                <a href="index.php"><img src="assets/didier.png" alt="acceuille"></a>
                <p>Antiquités • Décoration • Aménagements d'intérieur</p>
                <p><a href="tel:+32 495/20.59.34" title="Clickez pour lancer l'appel" class="nt">&#9742; +32 495/20.59.34</a></p>
                <a href="views/presentation.php" class="pr">Présentation</a>
                <a href="views/stock.php" class="st">Le stock</a>
                <a href="views/contact.php" class="ct">Contact</a>
            </div>
            <?php include('views/stocka.php');?>
            <blockcote class="citation">
                <span class="cit"><em>  "L'ennui naquit un jour de l'inuformité"  </em></span><br/>
                <cite class="qui"> - Antoine Houdar de le Motte</cite>            
            </blockquote>
                <?php include('views/information.php');?>
</section>
    </body>
</html>