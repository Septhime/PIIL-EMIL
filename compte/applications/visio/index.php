<?php ?>

<?php
include "../../commun.php";

?>

<!doctype html>
<html lang="fr" data-fr-theme>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visioconférence - EMIL</title>
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
                            <a class="fr-breadcrumb__link" aria-current="page">Visioconférence</a>
                        </li>
                    </ol>
                </div>
            </nav>
        </div>
    </div>
    <div class="fr-container fr-px-3w">
        <div class="fr-md-10w fr-mt-2w fr-mb-1w fr-grid-row">
            <div class="fr-col-10">
                <h1>Vos réunions</h1>
            </div>
            <div class="fr-col-2">
                <button class="fr-btn fr-icon-add-circle-fill fr-btn--icon-left" href="#">
                    Créer une réunion
                </button>
            </div>
        </div>
        <h3 style="color:grey;text-align: center">Aucune</h3>
        <div class="fr-mt-md-10w fr-mb-1w fr-grid-row">
            <div class="">
                <h1>Réunions programmées</h1>
                <div class="fr-grid-row fr-grid-row--gutters">
                    <div class="fr-col-12">
                        <div class="fr-tile fr-enlarge-link fr-tile--horizontal">
                            <div class="fr-tile__body">
                                <h4 class="fr-tile__title">
                                    <a class="fr-tile__link" href="#" data-fr-opened="false" aria-controls="modal-visio-1">Relecture des projets <div class="fr-badge fr-mx-2v">Commission &Eacute;galité</div> </a>
                                </h4>
                                <p class="fr-tile__desc">Organisé par M. ... &bull; Prévu pour le 24/06/2023 à 14H00</p>
                            </div>
                        </div>
                    </div>
                    <div class="fr-col-12">
                        <div class="fr-tile fr-enlarge-link fr-tile--horizontal">
                            <div class="fr-tile__body">
                                <h4 class="fr-tile__title">
                                    <a class="fr-tile__link" href="#" data-fr-opened="false" aria-controls="modal-visio-2">Réunion préparatif au CAVL <div class="fr-badge fr-mx-2v">CAVL</div><div class="fr-badge fr-badge--error">Déclaré absent</div></a>
                                </h4>
                                <p class="fr-tile__desc">Organisé par M. ... &bull; Prévu pour le 11/08/2023 à 14H30</p>
                            </div>
                        </div>
                    </div>
                    <div class="fr-col-12">
                        <div class="fr-tile fr-enlarge-link fr-tile--horizontal">
                            <div class="fr-tile__body">
                                <h4 class="fr-tile__title">
                                    <a class="fr-tile__link" href="#" data-fr-opened="false" aria-controls="modal-visio-3">Inter-CVL Informatif</a>
                                </h4>
                                <p class="fr-tile__desc">Organisé par M. ... &bull; Prévu pour le 04/12/2023 à 09H00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fr-mt-7w fr-mb-2w fr-mb-1w fr-grid-row fr-grid-row--center">
            <nav role="navigation" class="fr-pagination" aria-label="Pagination">
                <ul class="fr-pagination__list">
                    <li>
                        <a class="fr-pagination__link fr-pagination__link--first" aria-disabled="true" role="link">Première page</a>
                    </li>
                    <li>
                        <a class="fr-pagination__link fr-pagination__link--prev fr-pagination__link--lg-label" aria-disabled="true" role="link">Page précédente</a>
                    </li>
                    <li>
                        <a class="fr-pagination__link" aria-current="page" title="Page 1">1</a>
                    </li>
                    <li>
                        <a class="fr-pagination__link fr-pagination__link--next fr-pagination__link--lg-label" aria-disabled="true">Page suivante</a>
                    </li>
                    <li>
                        <a class="fr-pagination__link fr-pagination__link--last" aria-disabled="true">Dernière page</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="fr-mb-10w fr-grid-row fr-grid-row--right">
            <a class="fr-link fr-icon-arrow-right-line fr-link--icon-right" href="#">
                Voir les réunions passées
            </a>
        </div>
    </div>
</main>
<footer class="fr-footer" role="contentinfo" id="footer-1267">
    <div class="fr-container">
        <div class="fr-footer__body">
            <div class="fr-footer__brand fr-enlarge-link">
                
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
                    <a class="fr-footer__bottom-link" href="../../../accessibility.html" target="_blank">Accessibilité : non<!--/partiellement/totalement--> conforme</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../../../legal.html" target="_blank">Mentions légales</a>
                </li>
                <li class="fr-footer__bottom-item">
                    <a class="fr-footer__bottom-link" href="../../../privacy.html" target="_blank">Données personnelles</a>
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
<dialog id="modal-visio-1" class="fr-modal" role="dialog" aria-labelledby="modal-visio-1-title">
    <div class="fr-container fr-container--fluid fr-container-md">
        <div class="fr-grid-row fr-grid-row--center">
            <div class="fr-col-12 fr-col-md-8 fr-col-lg-6">
                <div class="fr-modal__body">
                    <div class="fr-modal__header">
                        <button class="fr-btn--close fr-btn" aria-controls="modal-visio-1" title="Fermer">
                            Fermer
                        </button>
                    </div>
                    <div class="fr-modal__content">
                        <h1 id="modal-visio-1-title" class="fr-modal__title">
                            <span class="fr-icon-arrow-right-line fr-icon--lg" aria-hidden="true"></span>
                            Informations sur la visioconférence
                        </h1>
                        <p><b>Titre:</b> Relecture de projets (Commission &Eacute;galité)</p>
                        <p><b>Date & heure:</b> 24/06/2023 à 14H00</p>
                        <p><b>Description:</b> Après la réunion du CAVL le 12 avril, nous fessons une dernière lecture afin de conclure l'appel à projet.</p>
                    </div>
                    <div class="fr-modal__footer">
                        <ul class="fr-btns-group fr-btns-group--right fr-btns-group--inline-reverse fr-btns-group--inline-lg fr-btns-group--icon-left">
                            <li>
                                <button class="fr-btn fr-icon-arrow-right-line fr-btn--icon-right">
                                    Se connecter
                                </button>
                            </li>
                            <li>
                                <button class="fr-btn fr-btn--secondary">
                                    Se déclarer absent
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dialog>
<dialog id="modal-visio-2" class="fr-modal" role="dialog" aria-labelledby="modal-visio-2-title">
    <div class="fr-container fr-container--fluid fr-container-md">
        <div class="fr-grid-row fr-grid-row--center">
            <div class="fr-col-12 fr-col-md-8 fr-col-lg-6">
                <div class="fr-modal__body">
                    <div class="fr-modal__header">
                        <button class="fr-btn--close fr-btn" aria-controls="modal-visio-2" title="Fermer">
                            Fermer
                        </button>
                    </div>
                    <div class="fr-modal__content">
                        <h1 id="modal-visio-2-title" class="fr-modal__title">
                            <span class="fr-icon-arrow-right-line fr-icon--lg" aria-hidden="true"></span>
                            Informations sur la visioconférence
                        </h1>
                        <p><b>Titre:</b> Réunion préparatif du CAVL (CAVL)</p>
                        <p><b>Date & heure:</b> 24/06/2023 à 14H30</p>
                        <p><b>Description:</b> Avant la prochaine réunion du CAVL, nous fessons une réunion préparatif afin de tous mettre au clair.</p>
                    </div>
                    <div class="fr-modal__footer">
                        <ul class="fr-btns-group fr-btns-group--right fr-btns-group--inline-reverse fr-btns-group--inline-lg fr-btns-group--icon-left">
                            <li>
                                <button class="fr-btn fr-icon-checkbox-circle-line fr-btn--icon-left fr-btn--secondary">
                                    Se déclarer présent
                                </button>
                            </li>
                            <li class="fr-py-2v fr-mx-2v">
                                <p class="fr-m-0">Vous êtes déclaré absent</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dialog>
<dialog id="modal-visio-3" class="fr-modal" role="dialog" aria-labelledby="modal-visio-3-title">
    <div class="fr-container fr-container--fluid fr-container-md">
        <div class="fr-grid-row fr-grid-row--center">
            <div class="fr-col-12 fr-col-md-8 fr-col-lg-6">
                <div class="fr-modal__body">
                    <div class="fr-modal__header">
                        <button class="fr-btn--close fr-btn" aria-controls="modal-visio-3" title="Fermer">
                            Fermer
                        </button>
                    </div>
                    <div class="fr-modal__content">
                        <h1 id="modal-visio-3-title" class="fr-modal__title">
                            <span class="fr-icon-arrow-right-line fr-icon--lg" aria-hidden="true"></span>
                            Informations sur la visioconférence
                        </h1>
                        <p><b>Titre:</b> Inter-CVL Informatif</p>
                        <p><b>Date & heure:</b> 04/12/2023 à 09H00</p>
                        <p><b>Description:</b> Cette réunion permet d'informer les CVL normands de nos avancées au sein du CAVL.</p>
                    </div>
                    <div class="fr-modal__footer">
                        <ul class="fr-btns-group fr-btns-group--right fr-btns-group--inline-reverse fr-btns-group--inline-lg fr-btns-group--icon-left">
                            <li>
                                <button class="fr-btn fr-icon-arrow-right-line fr-btn--icon-right" disabled>
                                    Se connecter
                                </button>
                            </li>
                            <li>
                                <button class="fr-btn fr-btn--secondary">
                                    Se déclarer absent
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dialog>
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

