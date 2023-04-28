<?php
$connected = False;
$incorrect = False;

if ($_COOKIE["CID"] == "y3N72DQ3v5sfuKD") {
    $connected = True;
    header("Location: warning.php");
} else {
    if (isset($_POST["mdp"])) {
        if ($_POST["mdp"] == "arméedes15chats") {
            $connected = True;
            setcookie("CID", "y3N72DQ3v5sfuKD", time()+60*60*24*30);
            header("Location: warning.php");
        } else {
            $incorrect = True;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet CAVL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800;900&display=swap');

        body{
            margin: 0;
            background-color: black;
        }

        h1{
            margin: 0;
        }

        button {
            background-color: white;
            border: none;
            padding: 5px 11px;
            border-radius: 50px;
            text-align: center;
            display: inline-block;
            font-family: 'Unbounded', cursive;
            font-weight: 100;
            font-size: 16px;
            margin: 2px 0;
            cursor: pointer;
            color: black;
        }

        button:hover {
            background-color: #ddd;
        }

        /* ----------------- Header ----------------- */

        .header-fullscreen{
            color: white;
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            flex-wrap: wrap;
            min-height: 100vh;
            min-width: 100vh;
        }

        .header-title{
            display: flex;
            flex-direction: row;
            font-family: 'Unbounded', cursive;
            font-weight: 900;
            font-size: xxx-large;
            text-transform: uppercase;
        }

        .header-subtitle{
            display: flex;
            justify-content: center;
            font-family: 'Unbounded', cursive;
            font-weight: 200;
        }
    </style>
</head>
<body>
<div class="body-landscape">
    <div class="header-fullscreen">
        <div class="header-text" style="text-align: center">
            <h1 class="header-title">Projet CAVL</h1>
            <?php //if ($connected) {
                echo '<h2 class="header-subtitle">Bienvenue</h2>
                      <a href="verify.php"><button>Projet PIIL & EMIL</button></a>';
            //} else { echo '<h2 class="header-subtitle">Connectez-vous</h2>
            //<form method="post" action="index.php">
            //    <input type="text" id="mdp" name="mdp">
            //    <button type="submit">Se connecter</button>';
            //    if ($incorrect) {echo '<p class="header-subtitle" style="margin-top: 0.5rem">Mot de passe incorrect</p>';}
            //    echo '</form>';}
            ?>
        </div>
    </div>
</div>
</body>
</html>