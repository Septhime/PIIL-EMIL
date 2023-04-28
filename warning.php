<?php

if (!$_COOKIE["CID"] == "y3N72DQ3v5sfuKD") {
    //header("Location: https://cavl.septhime.fr/");
}

if (isset($_GET["understand"])) {
    setcookie("warn", "True", time()+60*60*24*30);
    header("Location: platfrom");
}

if (isset($_COOKIE["warn"]) ) {
    header("Location: platfrom");
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

        input[type=submit] {
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

        input[type=submit]:hover {
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
        <div class="header-text" style="text-align: center;justify-content: center">
            <h1 class="header-title" style="justify-content: center">Projet PIIL & EMIL</h1>
            <h2 class="header-subtitle">ATTENTION</h2>
            <p class="header-subtitle">Ce site internet n'est qu'un prototype de ce que pourrait être un espace destiné aux membres des instances lycéennes ainsi qu'une plateforme informative de ces mêmes instances.</p>
            <p class="header-subtitle">En aucun cas, l'auteur du site n'est affilié à l'état, ni n'utilise le site à un usage commercial, trompeuse ou frauduleuse</p>
            <p class="header-subtitle">Le système de design de l'État français est utilisé à des fins de démonstration et n'appartient pas à Timothée Varin</p>
            <p class="header-subtitle">&Eacute;tant donné le manque d'informations sur les licences de la police "Marianne" & "Spectral", nous les avons modifiées avec des polices libres de droits provenant de Google Fonts.</p>
            <p class="header-subtitle">Si le sujet de l’utilisation du DSFR reste un problème légal indiscutable, nous nous mettons à votre disposition afin de faire respecter la loi et d’interrompre ce projet.</p>
            <p class="header-subtitle">Nous sommes disponibles à cette adresse : <a style="color:white; margin-left: 5px" href="mailto:varintimo@gmail.com">varintimo@gmail.com</a></p>
            <form action="warning.php" method="get">
                <input type="hidden" id="understand" name="understand" value="True">
                <input type="submit" value="J'ai compris">
            </form>
        </div>
    </div>
</div>
</body>
</html>