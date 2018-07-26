<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chat</title>
        <link rel="SHORTCUT ICON" href="../../assets/css/images/MyIconx16.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Acme|Roboto|Source+Code+Pro" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/stylechat.css">
    </head>
    <body>
        <?php include("regles.php");?>
        <form action="chat.php" method="post"> 
            <div class="message">
                <!-- requête sql pour sélectionné tous les derniers messages dernier dans un ordre logique de conversation en limitant le nombre de message à afficher -->
                <?php $recup = $data->query('SELECT Pseudo, Message FROM messages ORDER BY ID DESC LIMIT 25');
                    // récupération des message et affichage
                    $varmess = $recup->fetchAll();
                        // pour chaque messages récupéré dans la dase de donnée, les afficher de cette maniere = pseudo:message
                        foreach($varmess as $value){
                            echo $value['Pseudo']." : ".$value['Msg']."<br/>";
                        }
                    ?>
            </div>
            <div class="mess">
                <textarea rows="5" cols="120" name="message" class="tap" placeholder="Write your message."></textarea>
                <input type="submit" name="send" value="Send" class="envoie">
                <a href="deco.php" name="logout" class="deco">Logout</a>
            </div> 
        </form>
    </body>
</html>