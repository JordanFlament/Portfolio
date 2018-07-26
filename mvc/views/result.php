<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="../index.php"><img src="../assets/didier2.png" alt="acceuille">Antiquités • Décoration • Aménagements d'intérieur</a></li>
    <li><a href="presentation.php" class="presentation">PRESENTATION</a></li>
    <li><a href="stock.php" class="stock">STOCK</a></li>
    <li><a href="contact.php" class="contact">CONTACT</a></li>
    <li><a href="tel:+32 495/20.59.34" title="Clickez pour lancer l'appel" class="ntel">&#9742; +32 495/20.59.34</a></li>
</ul>
    <div class="error">
        <h1><strong>Notre stock de art déco</strong></h1>
        <h1><strong>Désolé, aucun résultat.</strong></h1>
        <h2>Essayez une autre recherche.</h2>
        <h4>fouiller le stock</h4>
        <input type="text" name="search">
        <a href="result.php"><input type="submit" name="ok" value="recherche"></a>
    </div>
    <div class="cata">
        <h4>Catalogue</h4>
        <a href="result.php" name="a" class="ima">Réception(1)</a>
        <a href="result.php" name="b"  class="ima">Commerce(2)</a>
        <a href="result.php" name="c" class="ima">Lavabo(3)</a>
    </div>
    <?php include('information.php');?>
</body>
</html>