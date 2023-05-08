<?php
include "../../commun.php";

if ($_COOKIE['account'] > 3) {
    header('Location: ../');
    exit();
}

?>

<!doctype html>
<html lang="fr" data-fr-theme>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des permissions - EMIL</title>
    <meta name="theme-color" content="#000091"><!-- Défini la couleur de thème du navigateur (Safari/Android) -->
    <link rel="apple-touch-icon" href="../../../dist/favicon/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="icon" href="../../../dist/favicon/favicon.svg" type="image/svg+xml">
    <!-- si favicon.ico peut etre placé à la racine du serveur, retirer la ligne ci-dessous -->
    <link rel="shortcut icon" href="../../../dist/favicon/favicon.ico" type="image/x-icon"><!-- 32×32 -->
    <link rel="manifest" href="../../../dist/favicon/manifest.webmanifest" crossorigin="use-credentials">
    <!-- Modifier les chemins relatifs des favicons en fonction de la structure du projet -->
    <!-- Dans le fichier manifest.webmanifest aussi, modifier les chemins vers les images -->
    <link href="../../../dist/core/core.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/pagination/pagination.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/button/button.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/scheme/scheme.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/link/link.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/accordion/accordion.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/form/form.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/logo/logo.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/badge/badge.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/radio/radio.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/modal/modal.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/tile/tile.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/navigation/navigation.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/input/input.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/footer/footer.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/card/card.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/table/table.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/tag/tag.main.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/utility/utility.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/search/search.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/translate/translate.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/header/header.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/tile/tile.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/breadcrumb/breadcrumb.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/toggle/toggle.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/component/select/select.main.css" rel="stylesheet" file="main">
    <link href="../../../dist/core/core.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/button/button.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/link/link.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/pagination/pagination.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/accordion/accordion.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/form/form.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/logo/logo.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/badge/badge.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/radio/radio.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/modal/modal.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/tile/tile.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/navigation/navigation.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/input/input.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/footer/footer.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/card/card.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/tag/tag.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/utility/utility.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/search/search.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/translate/translate.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/header/header.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/table/table.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/tile/tile.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/breadcrumb/breadcrumb.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/toggle/toggle.legacy.css" rel="stylesheet" file="legacy">
    <link href="../../../dist/component/select/select.legacy.css" rel="stylesheet" file="legacy">
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
                        <a href="../../" title="<?php echo $title ?>">
                            <p class="fr-header__service-title">
                                <?php echo $title ?>
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
                                <a class="fr-btn fr-icon-account-circle-line" href="../../compte">
                                    <b><?php echo $name[$_COOKIE["account"]].'<span class="fr-ml-1v fr-badge fr-badge--sm fr-badge--blue-cumulus">'.$r[$_COOKIE["account"]] ?></span></b>
                                </a>
                            </li>
                            <li>
                                <a class="fr-btn fr-icon-close-circle-line" href="../../../">
                                    <b>Se déconnecter</b>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fr-header__menu fr-modal" id="modal-1257" aria-labelledby="button-1258">
        <div class="fr-container">
            <button class="fr-btn--close fr-btn" aria-controls="modal-1257" title="Fermer">
                Fermer
            </button>
            <div class="fr-header__menu-links">
            </div>
            <nav class="fr-nav" id="navigation-1259" role="navigation" aria-label="Menu principal">
                <ul class="fr-nav__list">
                    <li class="fr-nav__item">
                        <a class="fr-nav__link" href="../../" target="_self">Fil d'actualité</a>
                    </li>
                    <li class="fr-nav__item">
                        <a class="fr-nav__link" href="../../messagerie" target="_self">Messagerie</a>
                    </li>
                    <li class="fr-nav__item">
                        <button class="fr-nav__btn" aria-expanded="false" aria-controls="menu-1263">Annuaire</button>
                        <div class="fr-collapse fr-menu" id="menu-1263">
                            <ul class="fr-menu__list">
                                <li>
                                    <a class="fr-nav__link" href="../../annuaire/cse" target="_self">CSE</a>
                                </li>
                                <li>
                                    <a class="fr-nav__link" href="../../annuaire/cnvl" target="_self">CNVL</a>
                                </li>
                                <li>
                                    <a class="fr-nav__link" href="../../annuaire/cavl" target="_self">CAVL</a>
                                </li>
                                <li>
                                    <a class="fr-nav__link" href="../../annuaire/cvl" target="_self">CVL</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="fr-nav__item">
                        <a class="fr-nav__link" href="../../applications" target="_self" aria-current="true">Applications</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main role="main" id="content">
    <div class="fr-container fr-px-3w">
        <div class="fr-mt-md-2w fr-grid-row fr-grid-row--gutters fr-grid-row--middle">
            <nav role="navigation" class="fr-breadcrumb" aria-label="vous êtes ici :">
                <button class="fr-breadcrumb__button" aria-expanded="false" aria-controls="breadcrumb-1">Voir le fil d’Ariane</button>
                <div class="fr-collapse" id="breadcrumb-1">
                    <ol class="fr-breadcrumb__list">
                        <li>
                            <a class="fr-breadcrumb__link" href="../../">Accueil</a>
                        </li>
                        <li>
                            <a class="fr-breadcrumb__link" href="../">Applications</a>
                        </li>
                        <li>
                            <a class="fr-breadcrumb__link" aria-current="page">Gestion des permissions</a>
                        </li>
                    </ol>
                </div>
            </nav>
        </div>
        <h1>Gestion des permissions</h1>
        <div class="fr-select-group">
            <label class="fr-label" for="select">
                Liste des membres
            </label>
            <select class="fr-select" aria-describedby="select-messages" id="select" name="select">
                <option value="" disabled><?php if($_COOKIE['account'] == 1) {echo 'CNVL';} elseif($_COOKIE['account'] == 2) {echo 'CAVL';} else {echo 'LGT Pablo Neruda';} ?></option>
                <option value="" selected>Tous membre <?php if($_COOKIE['account'] == 1) {echo 'du CNVL';} elseif($_COOKIE['account'] == 2) {echo 'du CAVL de Normandie';} else {echo 'de LGT Pablo Neruda';} ?></option>
                <option value=""><?php if($_COOKIE['account'] == 2 OR $_COOKIE['account'] == 3) {echo 'Varin T.';} else {echo '...';} ?></option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
            </select>
            <div class="fr-messages-group" id="select-messages" aria-live="assertive">
            </div>
            <hr class="fr-hr--sm fr-my-4v">
        </div>
        <div class="fr-grid-row fr-my-6v">
            <div class="fr-col-12">
                <h3>Permission des applications</h3>
            </div>
            <div class="fr-col-12">
                <h4>Actualités</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-access-module-writer-hint-text" id="toggle-access-module-writer">
                    <label class="fr-toggle__label" for="toggle-access-module-writer">Accès au module de rédaction</label>
                    <p class="fr-hint-text" id="toggle-access-module-writer-hint-text">Permets à l'utilisateur d'écrire des actualités (autorisation avant publication)</p>
                </div>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-instant-publish-hint-text" id="toggle-instant-publish">
                    <label class="fr-toggle__label" for="toggle-instant-publish">Publication instantané</label>
                    <p class="fr-hint-text" id="toggle-instant-publish-hint-text">Permets à l'utilisateur de publier sans autorisation préalable</p>
                </div>
            </div>
            <div class="fr-col-12">
                <h4>Documents partagés</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-access-module-writer-hint-text" id="toggle-add-doc">
                    <label class="fr-toggle__label" for="toggle-add-doc">Ajout de document dans global</label>
                    <p class="fr-hint-text" id="toggle-add-doc-hint-text">Permets à l'utilisateur d'ajouter des documents dans l'espace global</p>
                </div>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-instant-publish-hint-text" id="toggle-modify-doc">
                    <label class="fr-toggle__label" for="toggle-modify-doc">Modification de document dans global</label>
                    <p class="fr-hint-text" id="toggle-modify-doc-hint-text">Permets à l'utilisateur de modifier (dont la suppression) les documents dans l'espace global</p>
                </div>
            </div>
            <div class="fr-col-12">
                <h4>Gestion des permissions</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-instant-permissions-hint-text" id="toggle-modify-permissions">
                    <label class="fr-toggle__label" for="toggle-modify-permissions">Modification des permissions</label>
                    <p class="fr-hint-text" id="toggle-modify-permissions-hint-text">Permets à l'utilisateur de modifier les permissions d'autres utilisateurs</p>
                </div>
            </div>
            <div class="fr-col-12">
                <h4>Documents partagés</h4>
            </div>
            <div class="fr-col-12">
                <p>Aucun (pour l'instant)</p>
            </div>
            <div class="fr-col-12">
                <h4>Remboursements</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-access-refund-hint-text" id="toggle-access-refund">
                    <label class="fr-toggle__label" for="toggle-access-refund">Accès au module des remboursements</label>
                    <p class="fr-hint-text" id="toggle-access-refund-hint-text">Permets à l'utilisateur de soumettre des dossiers de remboursement</p>
                </div>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-manage-refund-hint-text" id="toggle-manage-declare">
                    <label class="fr-toggle__label" for="toggle-manage-refund">Accès à la gestion des remboursements</label>
                    <p class="fr-hint-text" id="toggle-manage-refund-hint-text">Permets à l'utilisateur d'accéder au module de gestion des remboursements (Déclaration non compris)</p>
                </div>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-declare-refund-hint-text" id="toggle-declare-refund">
                    <label class="fr-toggle__label" for="toggle-declare-refund">Accès aux déclarations des déplacements</label>
                    <p class="fr-hint-text" id="toggle-declare-refund-hint-text">Permets à l'utilisateur de déclarer des déplacements pour réunion ou missions qui sont éligibles à un remboursement</p>
                </div>
            </div>
            <div class="fr-col-12">
                <h4>Réunion Visioconférence</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-create-meeting-hint-text" id="toggle-create-meeting">
                    <label class="fr-toggle__label" for="toggle-create-meeting">Créer une visioconférence</label>
                    <p class="fr-hint-text" id="toggle-create-meeting-hint-text">Permets à l'utilisateur de créer une visioconférence</p>
                </div>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-schedule-meeting-hint-text" id="toggle-schedule-meeting">
                    <label class="fr-toggle__label" for="toggle-schedule-meeting">Programmer une visioconférence</label>
                    <p class="fr-hint-text" id="toggle-schedule-meeting-hint-text">Permets à l'utilisateur de programmer une visioconférence visible à tous</p>
                </div>
            </div>
            <div class="fr-col-12">
                <h4>Sondage</h4>
            </div>
            <div class="fr-col-4">
                <div class="fr-toggle">
                    <input type="checkbox" class="fr-toggle__input" aria-describedby="toggle-create-survey-hint-text" id="toggle-create-survey">
                    <label class="fr-toggle__label" for="toggle-create-survey">Permettre la création d'un sondage</label>
                    <p class="fr-hint-text" id="toggle-create-survey-hint-text">Permets à l'utilisateur de créer un sondage</p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="fr-footer" role="contentinfo" id="footer-1267">
    <div class="fr-container fr-px-3w">
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
                <a id="footer-brand" class="fr-footer__brand-link" href="../../" title="Retour à l’accueil du site - Espace des membres d'instances lycéennes">
                    <img class="fr-footer__logo" style="width:8rem;" src="../../../assets/img/emil_logo.svg" alt="Logo du Projet EMIL" />
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
                    <a class="fr-footer__bottom-link" href="../../accessibility.html" target="_blank">Accessibilité : non<!--/partiellement/totalement--> conforme</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../../legal.html" target="_blank">Mentions légales</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../../privacy.html" target="_blank">Données personnelles</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="#">Gestion des cookies</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <span id="version" class="fr-footer__bottom-link"><?php echo $version;?></span>
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
<button class="fr-display-button fr-background-default--grey fr-btn fr-btn--lg fr-icon-theme-fill fr-btn--secondary" aria-controls="fr-theme-modal" data-fr-opened="false" style="z-index: 1600">
    Label bouton
</button>
<dialog id="fr-theme-modal" class="fr-modal" role="dialog" aria-labelledby="fr-theme-modal-title">
    <div class="fr-container fr-container--fluid fr-container-md">
        <div class="fr-grid-row fr-grid-row--center">
            <div class="fr-col-12 fr-col-md-6 fr-col-lg-4">
                <div class="fr-modal__body">
                    <div class="fr-modal__header">
                        <button class="fr-btn--close fr-btn" aria-controls="fr-theme-modal" title="Fermer">
                            Fermer
                        </button>
                    </div>
                    <div class="fr-modal__content">
                        <h1 id="fr-theme-modal-title" class="fr-modal__title">
                            Paramètres d’affichage
                        </h1>
                        <div id="fr-display" class="fr-display">
                            <div class="fr-form-group">
                                <fieldset class="fr-fieldset">
                                    <legend class="fr-fieldset__legend fr-text--regular" id='-legend'>
                                        Choisissez un thème pour personnaliser l’apparence du site.
                                    </legend>
                                    <div class="fr-fieldset__content">
                                        <div class="fr-radio-group fr-radio-rich">
                                            <input value="light" type="radio" id="fr-radios-theme-light" name="fr-radios-theme">
                                            <label class="fr-label" for="fr-radios-theme-light">
                                                Thème clair
                                            </label>
                                            <div class="fr-radio-rich__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fr-artwork" width="80px" height="80px" viewBox="0 0 80 80">
                                                    <use class="fr-artwork-decorative" xlink:href="../../../dist/artwork/light.svg#artwork-decorative"></use>
                                                    <use class="fr-artwork-minor" xlink:href="../../../dist/artwork/light.svg#artwork-minor"></use>
                                                    <use class="fr-artwork-major" xlink:href="../../../dist/artwork/light.svg#artwork-major"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="fr-radio-group fr-radio-rich">
                                            <input value="dark" type="radio" id="fr-radios-theme-dark" name="fr-radios-theme">
                                            <label class="fr-label" for="fr-radios-theme-dark">
                                                Thème sombre
                                            </label>
                                            <div class="fr-radio-rich__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fr-artwork" width="80px" height="80px" viewBox="0 0 80 80">
                                                    <use class="fr-artwork-decorative" xlink:href="../../../dist/artwork/dark.svg#artwork-decorative"></use>
                                                    <use class="fr-artwork-minor" xlink:href="../../../dist/artwork/dark.svg#artwork-minor"></use>
                                                    <use class="fr-artwork-major" xlink:href="../../../dist/artwork/dark.svg#artwork-major"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="fr-radio-group fr-radio-rich">
                                            <input value="system" type="radio" id="fr-radios-theme-system" name="fr-radios-theme">
                                            <label class="fr-label" for="fr-radios-theme-system">
                                                Système
                                                <span class="fr-hint-text">Utilise les paramètres système.</span>
                                            </label>
                                            <div class="fr-radio-rich__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fr-artwork" width="80px" height="80px" viewBox="0 0 80 80">
                                                    <use class="fr-artwork-decorative" xlink:href="../../../dist/artwork/system.svg#artwork-decorative"></use>
                                                    <use class="fr-artwork-minor" xlink:href="../../../dist/artwork/system.svg#artwork-minor"></use>
                                                    <use class="fr-artwork-major" xlink:href="../../../dist/artwork/system.svg#artwork-major"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dialog>
<script type="module" src="../../../dist/core/core.module.js"></script>
<script type="module" src="../../../dist/scheme/scheme.module.js"></script>
<script type="module" src="../../../dist/component/accordion/accordion.module.js"></script>
<script type="module" src="../../../dist/component/modal/modal.module.js"></script>
<script type="module" src="../../../dist/component/navigation/navigation.module.js"></script>
<script type="module" src="../../../dist/component/display/display.module.js"></script>
<script type="module" src="../../../dist/component/header/header.module.js"></script>
<script type="text/javascript" nomodule src="../../../dist/legacy/legacy.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/core/core.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/component/accordion/accordion.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/component/modal/modal.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/component/navigation/navigation.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/component/display/display.nomodule.js"></script>
<script type="text/javascript" nomodule src="../../../dist/component/header/header.nomodule.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
</body>

</html>

