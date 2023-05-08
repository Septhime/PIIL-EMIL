<?php
if (isset($_GET['s'])) {
    $s = $_GET['s'];
    if ($s < 7 && $s > 0) {
        setcookie("account", $_GET['s'], time()+60*60*24*30);
        header("Location: ../compte");
    } elseif ($s == 99) {
        setcookie("account", 0);
        header("Location: ../");
    } else {
        echo "Erreur: Code non reconnu";
        exit();
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <meta name="theme-color" content="#000091"><!-- Défini la couleur de thème du navigateur (Safari/Android) -->
    <link rel="apple-touch-icon" href="../dist/favicon/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="icon" href="../dist/favicon/favicon.svg" type="image/svg+xml">
    <!-- si favicon.ico peut etre placé à la racine du serveur, retirer la ligne ci-dessous -->
    <link rel="shortcut icon" href="../dist/favicon/favicon.ico" type="image/x-icon"><!-- 32×32 -->
    <link rel="manifest" href="../dist/favicon/manifest.webmanifest" crossorigin="use-credentials">
    <!-- Modifier les chemins relatifs des favicons en fonction de la structure du projet -->
    <!-- Dans le fichier manifest.webmanifest aussi, modifier les chemins vers les images -->
    <link href="../dist/core/core.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/button/button.main.css" rel="stylesheet" file="main">
    <link href="../dist/scheme/scheme.css" rel="stylesheet" file="main">
    <link href="../dist/component/link/link.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/form/form.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/logo/logo.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/badge/badge.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/radio/radio.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/modal/modal.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/navigation/navigation.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/tile/tile.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/input/input.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/footer/footer.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/card/card.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/tag/tag.main.css" rel="stylesheet" file="legacy">
    <link href="../dist/utility/utility.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/search/search.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/translate/translate.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/header/header.main.css" rel="stylesheet" file="main">
    <link href="../dist/component/tag/tag.main.css" rel="stylesheet" file="main">
    <link href="../dist/core/core.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/button/button.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/link/link.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/accordion/accordion.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/form/form.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/logo/logo.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/badge/badge.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/radio/radio.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/modal/modal.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/navigation/navigation.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/tile/tile.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/input/input.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/footer/footer.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/card/card.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/tag/tag.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/utility/utility.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/search/search.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/translate/translate.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/header/header.legacy.css" rel="stylesheet" file="legacy">
    <link href="../dist/component/tag/tag.legacy.css" rel="stylesheet" file="legacy">
    <style>
        code[class*="language-"],
        pre[class*="language-"] {
            white-space: pre-wrap;
        }

        .example-controls {
            z-index: 100000;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.1), 0 8px 16px -16px rgba(0, 0, 0, 0.32);
        }

        .example-controls>button {
            position: absolute;
            right: 0;
            top: 0;
        }

        .example-controls__content {
            padding: 16px;
            background-color: var(--background-elevated-white);
        }

        .example-controls .fr-collapse--expanded~[aria-expanded] {
            display: none;
        }

        .example-controls .fr-collapse:not(.fr-collapse--expanded)~button:not([aria-expanded]) {
            display: none;
        }

        .example-controls [class*="-form-group"] {
            margin-bottom: 0;
        }

        .fr-display-button {
            position: fixed;
            bottom: 3.5rem;
            right: 2rem;
        }

        @media screen and (-ms-high-contrast: active),
        (-ms-high-contrast: none) {

            /* IE10+ specific styles go here */
            .example-controls {
                display: none;
            }
        }

        .fr-icon--lg::before {
            width: 5rem;
            height: 5rem;
        }

    </style>
    <script>
        window['dsfr'] = {
            verbose: false,
            //mode: 'manual'
        }

    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/toolbar/prism-toolbar.min.css" rel="stylesheet" />
</head>

<body id="top">
<header role="banner" class="fr-header">
    <div class="fr-header__body">
        <div class="fr-container">
            <div class="fr-header__body-row">
                <div class="fr-header__brand fr-enlarge-link">
                    <div class="fr-header__brand-top">
                        <!--<div class="fr-header__logo">
                            <p class="fr-logo">
                                Ministère
                                <br>de l'éducation
                                <br>nationale
                                <br>et de la jeunesse
                            </p>
                        </div>-->
                        <div class="fr-header__navbar">
                            <button class="fr-btn--menu fr-btn" data-fr-opened="false" aria-controls="modal-1257" aria-haspopup="menu" id="button-1258" title="Menu">
                                Menu
                            </button>
                        </div>
                    </div>
                    <div class="fr-header__service">
                        <a href="/" title="Accueil - Espace des membres d'instances lycéennes">
                            <p class="fr-header__service-title">
                                Espace des membres d'instances lycéennes
                                <span class="fr-badge fr-badge--sm fr-badge--green-emeraude">PROTOTYPE</span>
                            </p>
                        </a>
                        <!--<p class="fr-header__service-tagline">baseline - précisions sur l‘organisation</p>-->
                    </div>
                </div>
                <div class="fr-header__tools">
                    <div class="fr-header__tools-links">
                        <ul class="fr-btns-group">
                            <li>
                                <a class="fr-btn fr-icon-arrow-go-back-line" href="../index.html">
                                    Revenir à l'accueil
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main role="main" id="content" class="fr-pb-15w" style="background: #f2f2f9">
    <div class="fr-container fr-px-3w">
        <div class="fr-py-10w fr-pt-md-12w fr-mb-md-10w">
            <!-- Tuiles verticales placées dans la grille -->
            <h2 class="fr-pt-5v" style="text-align: center">Se connecter</h2>
            <div class="fr-grid-row fr-grid-row--gutters fr-grid-row--center fr-mx-5v">
                <div class="fr-col-6 fr-col-md-4 fr-col-lg-3">
                    <div class="fr-tile fr-enlarge-link">
                        <div class="fr-tile__body">
                            <h4 class="fr-tile__title">
                                <a class="fr-tile__link" href="#" data-fr-opened="false" aria-controls="fr-modal-3">DAVLC & DNVLC</a>
                            </h4>
                            <p class="fr-tile__desc">Connexion via ...</p>
                        </div>
                        <div class="fr-tile__img">
                            <span class="fr-icon-team-line fr-icon--lg"></span>
                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                        </div>
                    </div>
                </div>
                <div class="fr-col-6 fr-col-md-4 fr-col-lg-3">
                    <div class="fr-tile fr-enlarge-link">
                        <div class="fr-tile__body">
                            <h4 class="fr-tile__title">
                                <a class="fr-tile__link" href="login.php?s=3">Référent Lycéen</a>
                            </h4>
                            <p class="fr-tile__desc">Connexion via Arena</p>
                        </div>
                        <div class="fr-tile__img">
                            <span class="fr-icon-admin-line fr-icon--lg"></span>
                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                        </div>
                    </div>
                </div>
                <div class="fr-col-6 fr-col-md-4 fr-col-lg-3">
                    <div class="fr-tile fr-enlarge-link">
                        <div class="fr-tile__body">
                            <h4 class="fr-tile__title">
                                <a class="fr-tile__link">Autres membres</a>
                            </h4>
                            <p class="fr-tile__desc">Connexion impossible</p>
                        </div>
                        <div class="fr-tile__img">
                            <span class="fr-icon-user-star-line fr-icon--lg"></span>
                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                        </div>
                    </div>
                </div>
                <div class="fr-col-6 fr-col-md-4 fr-col-lg-3">
                    <div class="fr-tile fr-enlarge-link">
                        <div class="fr-tile__body">
                            <h4 class="fr-tile__title">
                                <a class="fr-tile__link" href="#" data-fr-opened="false" aria-controls="fr-modal-2">Élèves</a>
                            </h4>
                            <p class="fr-tile__desc">Connexion via ÉduConnect</p>
                        </div>
                        <div class="fr-tile__img">
                            <span class="fr-icon-user-line fr-icon--lg"></span>
                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <dialog aria-labelledby="fr-modal-2-title" id="fr-modal-2" class="fr-modal" role="dialog">
        <div class="fr-container fr-container--fluid fr-container-md">
            <div class="fr-grid-row fr-grid-row--center">
                <div class="fr-col-12 fr-col-md-8 fr-col-lg-6">
                    <div class="fr-modal__body">
                        <div class="fr-modal__header">
                            <button class="fr-link--close fr-link" aria-controls="fr-modal-2">Fermer</button>
                        </div>
                        <div class="fr-modal__content">
                            <h1 id="fr-modal-2-title" class="fr-modal__title">
                                <span class="fr-fi-arrow-right-line fr-fi--lg"></span>
                                Simuler un élève membre d'une instance lycéenne <p class="fr-badge fr-badge--info" title="Cette mention apparaît pour informer que cette fenêtre (Modal) n'apparaît que lors du prototypage.">Developer Mode</p>
                            </h1>
                            <p></p>
                        </div>
                        <div class="fr-modal__footer">
                            <div class="fr-grid-row fr-grid-row--gutters fr-grid-row--center">
                                <div class="fr-col-6 fr-col-md-4 fr-col-lg-4">
                                    <div class="fr-tile fr-enlarge-link">
                                        <div class="fr-tile__body">
                                            <h4 class="fr-tile__title">
                                                <a class="fr-tile__link" href="login.php?s=4">CNVL</a>
                                            </h4>
                                            <p class="fr-tile__desc">Simuler un membre du CNVL<br></p>
                                        </div>
                                        <div class="fr-tile__img">
                                            <span class="fr-icon-team-line fr-icon--lg"></span>
                                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                                        </div>
                                    </div>
                                </div>
                                <div class="fr-col-6 fr-col-md-4 fr-col-lg-4">
                                    <div class="fr-tile fr-enlarge-link">
                                        <div class="fr-tile__body">
                                            <h4 class="fr-tile__title">
                                                <a class="fr-tile__link" href="login.php?s=5">CAVL</a>
                                            </h4>
                                            <p class="fr-tile__desc">Simuler un membre du CAVL de Normandie</p>
                                        </div>
                                        <div class="fr-tile__img">
                                            <span class="fr-icon-admin-line fr-icon--lg"></span>
                                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                                        </div>
                                    </div>
                                </div>
                                <div class="fr-col-6 fr-col-md-4 fr-col-lg-4">
                                    <div class="fr-tile fr-enlarge-link">
                                        <div class="fr-tile__body">
                                            <h4 class="fr-tile__title">
                                                <a class="fr-tile__link" href="login.php?s=6">CVL</a>
                                            </h4>
                                            <p class="fr-tile__desc">Simuler un membre du CVL de LGT Pablo Neruda</p>
                                        </div>
                                        <div class="fr-tile__img">
                                            <span class="fr-icon-user-line fr-icon--lg"></span>
                                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
    <dialog aria-labelledby="fr-modal-3-title" id="fr-modal-3" class="fr-modal" role="dialog">
        <div class="fr-container fr-container--fluid fr-container-md">
            <div class="fr-grid-row fr-grid-row--center">
                <div class="fr-col-12 fr-col-md-8 fr-col-lg-6">
                    <div class="fr-modal__body">
                        <div class="fr-modal__header">
                            <button class="fr-link--close fr-link" aria-controls="fr-modal-2">Fermer</button>
                        </div>
                        <div class="fr-modal__content">
                            <h1 id="fr-modal-2-title" class="fr-modal__title">
                                <span class="fr-fi-arrow-right-line fr-fi--lg"></span>
                                Simuler un Délégué à la vie lycéenne et collégienne <p class="fr-badge fr-badge--info" title="Cette mention apparaît pour informer que cette fenêtre (Modal) n'apparaît que lors du prototypage.">Developer Mode</p>
                            </h1>
                            <p></p>
                        </div>
                        <div class="fr-modal__footer">
                            <div class="fr-grid-row fr-grid-row--gutters fr-grid-row--center">
                                <div class="fr-col-6 fr-col-md-4 fr-col-lg-4">
                                    <div class="fr-tile fr-enlarge-link">
                                        <div class="fr-tile__body">
                                            <h4 class="fr-tile__title">
                                                <a class="fr-tile__link" href="login.php?s=1">DNVLC</a>
                                            </h4>
                                            <p class="fr-tile__desc">Simuler un Délégué national<br></p>
                                        </div>
                                        <div class="fr-tile__img">
                                            <span class="fr-icon-team-fill fr-icon--lg"></span>
                                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                                        </div>
                                    </div>
                                </div>
                                <div class="fr-col-6 fr-col-md-4 fr-col-lg-4">
                                    <div class="fr-tile fr-enlarge-link">
                                        <div class="fr-tile__body">
                                            <h4 class="fr-tile__title">
                                                <a class="fr-tile__link" href="login.php?s=2">DAVLC</a>
                                            </h4>
                                            <p class="fr-tile__desc">Simuler un Délégué académique</p>
                                        </div>
                                        <div class="fr-tile__img">
                                            <span class="fr-icon-team-line fr-icon--lg"></span>
                                            <!-- L'alternative de l'image (attribut alt) doit à priori rester vide car l'image est illustrative et ne doit pas être restituée aux technologies d’assistance. Vous pouvez toutefois remplir l'alternative si vous estimer qu'elle apporte une information essentielle à la compréhension du contenu non présente dans le texte -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</main>
<footer class="fr-footer" role="contentinfo" id="footer-1267">
    <div class="fr-container">
        <div class="fr-footer__body">
            <div class="fr-footer__brand fr-enlarge-link">
                <!--<a href="/" title="Retour à l’accueil du site - Nom de l’entité (ministère, secrétariat d‘état, gouvernement)">
                    <p class="fr-logo">
                        Ministère
                        <br>de l'éducation
                        <br>nationale
                        <br>et de la jeunesse
                    </p>
                </a>-->
                <a id="footer-brand" class="fr-footer__brand-link" href="#" title="Espace des membres d'instances lycéennes">
                    <img class="fr-footer__logo" style="width:8rem;" src="../assets/img/emil_logo.svg" alt="Logo du Projet EMIL" />
                </a>
            </div>
            <div class="fr-footer__content">
                <p class="fr-footer__content-desc">Un espace collaboratif et utilitaire destiné aux membres des instances lycéennes afin de faire vivre la démocratie scolaire au mieux.</p>
                <!--<ul class="fr-footer__content-list">
                    <li class="fr-footer__content-item">
                        <a class="fr-footer__content-link" target="_blank" href="https://legifrance.gouv.fr">legifrance.gouv.fr</a>
                    </li>
                    <li class="fr-footer__content-item">
                        <a class="fr-footer__content-link" target="_blank" href="https://gouvernement.fr">gouvernement.fr</a>
                    </li>
                    <li class="fr-footer__content-item">
                        <a class="fr-footer__content-link" target="_blank" href="https://service-public.fr">service-public.fr</a>
                    </li>
                    <li class="fr-footer__content-item">
                        <a class="fr-footer__content-link" target="_blank" href="https://data.gouv.fr">data.gouv.fr</a>
                    </li>
                </ul>-->
            </div>
        </div>
        <div class="fr-footer__bottom">
            <ul class="fr-footer__bottom-list">
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../accessibility.html" target="_blank">Accessibilité : non<!--/partiellement/totalement--> conforme</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../legal.html" target="_blank">Mentions légales</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../privacy.html" target="_blank">Données personnelles</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="#">Gestion des cookies</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <span id="version" class="fr-footer__bottom-link">vf-1.1.0</span>
                </li>
            </ul>
            <div class="fr-footer__bottom-copy">
                <p>Sauf mention contraire, tous les contenus de ce site sont sous
                    <a class="fr-mr-2v" href="https://github.com/etalab/licence-ouverte/blob/master/LO.md" target="_blank">licence etalab-2.0</a> &bullet; <a class="fr-ml-2v" href="https://github.com/Septhime/PIIL-EMIL" target="_blank">Code source</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script type="module" src="../dist/core/core.module.js"></script>
<script type="module" src="../dist/scheme/scheme.module.js"></script>
<script type="module" src="../dist/component/accordion/accordion.module.js"></script>
<script type="module" src="../dist/component/modal/modal.module.js"></script>
<script type="module" src="../dist/component/navigation/navigation.module.js"></script>
<script type="module" src="../dist/component/display/display.module.js"></script>
<script type="module" src="../dist/component/header/header.module.js"></script>
<script type="text/javascript" nomodule src="../dist/legacy/legacy.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/core/core.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/accordion/accordion.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/modal/modal.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/navigation/navigation.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/header/header.nomodule.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
</body>

</html>