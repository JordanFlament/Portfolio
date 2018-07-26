<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Connexion</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="SHORTCUT ICON" href="../assets/css/images/MyIconx16.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Acme|Roboto|Source+Code+Pro" rel="stylesheet"> 
    </head>
    <body>
        <div class="co">
            <form action="connexion.php" method="post">
            <?php require("controler/regles.php");?>
            <h1><em>Connexion :</em></h1>
                <input type="hidden" name="mode" value="connexion">
                <p><label for="idconnexion"><input type="text" name="IDC" value="" placeholder="ID" autocomplete="off" required></label></p>
                <p><label for="Password"><input type="password" name="pwd" value="" placeholder="Password" autocomplete="off" required></label></p>
                <p><label for="connexion"><input type="submit" class="confirmer" name="co" value="Connexion" autocomplete="off"></label>
            </form>
            <hr>
            <form action="connexion.php" method="post">
            <?php require("controler/regles.php");?>
            <h2><em>Register :</em></h2>
                <input type="hidden" name="mode" value="register">
                <p><label for="Pseudoinscription"><input type="text" name="IDC" value="" placeholder="ID (max 16)" autocomplete="off" required></label></p>
                <p><label for="mdp"><input type="password" name="pwd" value="" placeholder="Password (max 12)" autocomplete="off" required></label></p>
                <p><label for="mdp2"><input type="password" name="pwd2" value="" placeholder="Confirm password" autocomplete="off" required></label> </p>               
                <p><label for="creation"><input type="submit" class="confirmer" name="validate" value="Confirm" autocomplete="off"></label>  
            </form>
        </div>
    </body>
</html>