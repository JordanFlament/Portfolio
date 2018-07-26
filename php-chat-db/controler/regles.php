<?php

// mise en place de la connexion avec la base de données
try {
    $data = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '' );
} 
// si connexion impossible pour la transation de donnée, alors message d'erreur
catch(PDOException $e){
    echo $e -> getMessage();
}

// filtrage de tout les inputs avec la méthode post afin de limité les dégats des attaques
$filtre = array(
'IDC'    => FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS,
'pwd'  => FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS,
'pwd2'  => FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS,
'validate'  => FILTER_SANITIZE_STRING | FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP | FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_SPECIAL_CHARS,
'co'    => FILTER_SANITIZE_STRING | FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP | FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_SPECIAL_CHARS,
'message'   => FILTER_SANITIZE_SPECIAL_CHARS,
'send'  => FILTER_SANITIZE_STRING | FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP | FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_SPECIAL_CHARS,
'logout'    => FILTER_SANITIZE_STRING | FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP | FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_SPECIAL_CHARS);
$result = filter_input_array(INPUT_POST, $filtre);
    
// résulta des données filtées, le trim est une fonction php qui permet de supprimer des espaces blanc lors de l'encodage des données dans la base de données. Ce qui empeche des bug stupide lié à une erreur de syntaxe lorsque par exemple vous entrez votre mdp.       
$ID = trim($result["IDC"]);
$pwd = trim($result['pwd']);
$pwd2 = trim($result['pwd2']);
$co = trim($result["co"]);
$valid = trim($result["validate"]);
$mess = trim($result["message"]);
$send = trim($result["send"]);
$deco = trim($result["logout"]);     

//hashage mots de passe 

$hash = ['cost' =>  18,];
$mdpc = password_hash($pwd, PASSWORD_BCRYPT, $hash);

//condition pour la connection et l'inscription 
// si le résulta des filtrages ci-dessus sont correct et que l'un des formulaires est rempli alors passé à l'étape suivante.
if($result != false && isset($_POST['mode'])){
    //selon le formulaire
    switch($_POST['mode']){
    // pour le formulaire de connexion
    case "connexion":
    // Si l'identifiant et le mot de passe sont rempli et que vous clické sur le bouton de connexion ..
        if(isset($ID) && isset($pwd) && isset($co)){
        // Alors connexion à la base de donné et lui demander de vérifié parmis les données existantes, se trouve un identifiant qui est celui entré au préalable
        $select = $data->query('SELECT * FROM user WHERE Pseudo="'.$ID.'"');
        if(password_verify($pwd, $mdpc)){
            // Si la requête renvoie une erreur
            if($select->fetch() == false){
                //alors erreur
                echo "Vos infomation son incorrect.";
            } else {
                //Sinon, alors ouverture de la session dans le chat
                header('Location: controler/chat.php');
                session_start();
                $_SESSION['IDC'] = $ID;
                $_SESSION['pwd'] = $pwd;
                }
        }else{
            echo "Vos infomation son incorrect.";
        }
        // breack défini fin de la première case (formulaire de connexion)
    }break;
    // pour le formulaire d'inscription
    case "register":
        // si l'indentifiant et les deux cases de mot de passe sont remplies et pareil, et clicker sur inscription
        if(isset($ID) && isset($pwd) && isset($pwd2) && $pwd == $pwd2 && isset($valid)){
            
                // ecéxuté une requete sql pour ajouté dans les données existante du tableau user les nouvelles valeur données
                $data->exec('INSERT INTO user (Pseudo, MDP) VALUES ("'.$ID.'", "'.$mdpc.'")');
                //petit message dans la console pour confirmé que vous êtes inscrit 
                echo "<script>console.log('Veuillez vous connectez.');</script>";
            //sinon petit message pour vous informée que vos information son incorrect
            } else { 
        echo "<script>console.log('Vos informations sont incomplètes.');</script>";
        echo "Informations incomplètes.";
        }
    break;}
    //fin de la case d'inscription
}

// un message est écrit et que vous clickez sur envoyé
if(isset($mess) && !empty($mess) && isset($send)){
    $data->exec('INSERT INTO messages (Pseudo, Message) VALUES ("'.$_SESSION['IDC'].'","'.$mess.'")');
    //exécution requête SQL pour ajouté les messages et le pseudo du rédacteur dans la base de donnée
}

?>