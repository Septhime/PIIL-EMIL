<?php
if(isset($_GET['select-hint'])) {
  header('Location:'. $_GET['select-hint']);
}
?>
<!-- Conçu par Timothée Varin grâce au DSFR - CAVL de Normandie -->
<!-- La police "Marianne" utilisé dans ce projet est la police "Open Sans" de Steve Matteson renommée en celui-ci -->
<!-- La police "Spectral" utilisé dans ce projet est la police "EB Garamond" de Georg Duffner & Octavio Pardo renommée en celui-ci -->
<!-- Le DSFR n'est en aucun cas une création de Timothée Varin et nous ne l'approprions pas. -->
<!-- En aucun cas, la création de ce site est à but trompeur ou frauduleux et elle n'est pas à usage commercial. -->
<!doctype html>
<html lang="fr" data-fr-theme>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Conseil Académique de Vie Lycéen de Normandie - Engagement Lycéen</title>
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
  <link href="../dist/component/input/input.main.css" rel="stylesheet" file="main">
  <link href="../dist/component/footer/footer.main.css" rel="stylesheet" file="main">
  <link href="../dist/utility/utility.main.css" rel="stylesheet" file="main">
  <link href="../dist/component/search/search.main.css" rel="stylesheet" file="main">
  <link href="../dist/component/header/header.main.css" rel="stylesheet" file="main">
  <link href="../dist/component/select/select.main.css" rel="stylesheet" file="main">
  <link href="../dist/core/core.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/button/button.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/link/link.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/form/form.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/logo/logo.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/badge/badge.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/radio/radio.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/modal/modal.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/navigation/navigation.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/input/input.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/footer/footer.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/utility/utility.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/search/search.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/header/header.legacy.css" rel="stylesheet" file="legacy">
  <link href="../dist/component/select/select.legacy.css" rel="stylesheet" file="legacy">
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
              <button class="fr-btn--menu fr-btn" data-fr-opened="false" aria-controls="modal-616" aria-haspopup="menu" id="button-617" title="Menu">
                Menu
              </button>
            </div>
          </div>
          <div class="fr-header__service">
            <a href="../" title="Accueil - Engagement Lycéen">
              <p class="fr-header__service-title">
                Engagement Lycéen
                <span class="fr-badge fr-badge--sm fr-badge--green-emeraude">PROTOTYPE</span>
              </p>
            </a>
          </div>
        </div>
        <div class="fr-header__tools">
          <div class="fr-header__tools-links">
            <ul class="fr-btns-group">
              <li>
                <a class="fr-btn fr-icon-lock-line" href="../compte/login.php">
                  Accéder à l'espace des membres
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fr-header__menu fr-modal" id="modal-616" aria-labelledby="button-617">
    <div class="fr-container">
      <button class="fr-btn--close fr-btn" aria-controls="modal-616" title="Fermer">
        Fermer
      </button>
      <div class="fr-header__menu-links">
      </div>
      <nav class="fr-nav" id="navigation-1259" role="navigation" aria-label="Menu principal">
        <ul class="fr-nav__list">
          <li class="fr-nav__item">
            <a class="fr-nav__link" href="../cse" target="_self">CSE</a>
          </li>
          <li class="fr-nav__item">
            <a class="fr-nav__link" href="../cnvl" target="_self">CNVL</a>
          </li>
          <li class="fr-nav__item">
            <button class="fr-nav__btn" aria-expanded="false" aria-controls="mega-menu-1262" aria-current="true" style="text-align: center">CAVL</button>
            <div class="fr-collapse fr-mega-menu" id="mega-menu-1262">
              <div class="fr-container fr-container--fluid fr-container-lg">
                <div class="fr-grid-row fr-grid-row-lg--gutters">
                  <div class="fr-col-12 fr-mb-n3v">
                    <button class="fr-btn--close fr-btn" aria-controls="mega-menu-1262" title="Fermer">
                      Fermer
                    </button>
                  </div>
                  <div class="fr-col-12 fr-col-lg-8 fr-col-offset-lg-4--right fr-mb-4v">
                    <div class="fr-mega-menu__leader">
                      <h4 class="fr-h4 fr-mb-2v">Conseils Académique de Vie Lycéenne</h4>
                      <p class="fr-hidden fr-unhidden-lg">Découvrez les actualités et le compte rendu de séance des CAVL de chaque académie de métropole & d'outre-mer.</p>
                      <a class="fr-link fr-icon-arrow-right-line fr-link--icon-right" href="#">
                        Qu'est-ce que le CAVL ?
                      </a>
                    </div>
                  </div>
                  <div class="fr-col-12 fr-col-lg-4">
                    <ul class="fr-mega-menu__list">
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie d'Aix-Marseille</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie d'Amiens</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Besançon</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Bordeaux</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Clermont-Ferrand</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Corse</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Créteil</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Dijon</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Grenoble</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de la Guadeloupe</a>
                      </li>
                    </ul>
                  </div>
                  <div class="fr-col-12 fr-col-lg-4">
                    <ul class="fr-mega-menu__list">
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de la Guyane</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de La Réunion</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Lille</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Limoges</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Lyon</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de la Martinique</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Mayotte</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Montpellier</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Nancy-Metz</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Nantes</a>
                      </li>
                    </ul>
                  </div>
                  <div class="fr-col-12 fr-col-lg-4">
                    <ul class="fr-mega-menu__list">
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Nice</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="normandie" target="_self">Académie de Normandie</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie d'Orléans-Tours</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Paris</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Poitiers</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Reims</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Rennes</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Strasbourg</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Toulouse</a>
                      </li>
                      <li>
                        <a class="fr-nav__link" href="#" target="_self">Académie de Versailles</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<main role="main" id="content">
  <div class="fr-container fr-px-3w">
    <div class="fr-my-7w fr-mt-md-12w">
      <div class="fr-grid-row">
        <h1>Qu'est-ce que le CAVL ?</h1>
        <p>Le CAVL est une instance lycéenne située hiérarchiquement au-dessus des CVL des lycées. Il est composé de représentants de l'éducation nationale, de conseillers régionaux et d'élèves des lycées de l’académie. Il est présidé par le/la recteur/rectrice de l’académie.</p>
      </div>
      <h1>Voir les actualités de mon académie</h1>
      <figure class="fr-content-media fr-content-media--sm" role="group" aria-label="© Légende de l‘image">
        <div class="fr-content-media__img">
          <img class="fr-responsive-img fr-ratio-1x1" src="../assets/img/placeholder.1x1.png" alt="[À MODIFIER - vide ou texte alternatif de l’image]" />
        </div>
        <figcaption style="text-align: center" class="fr-content-media__caption">Placeholder pour carte de la france cliquable</figcaption>
      </figure>
      <form action="#">
          <div class="fr-grid-row--bottom fr-grid-row fr-grid-row--gutters fr-grid-row fr-grid-row--gutter">
            <div class="fr-col-11">
              <div class="fr-select-group">
                <select class="fr-select" id="select-hint" name="select-hint">
                  <option value="" selected disabled hidden>Choisir une académie</option>
                  <option value="aix-marseille">Aix-Marseille</option>
                  <option value="amiens">Amiens</option>
                  <option value="besancon">Besançon</option>
                  <option value="bordeaux">Bordeaux</option>
                  <option value="clermont-ferrand">Clermont-Ferrand</option>
                  <option value="corse">Corse</option>
                  <option value="creteil">Créteil</option>
                  <option value="dijon">Dijon</option>
                  <option value="grenoble">Grenoble</option>
                  <option value="guadeloupe">Guadeloupe</option>
                  <option value="guyane">Guyane</option>
                  <option value="la-reunion">La Réunion</option>
                  <option value="lille">Lille</option>
                  <option value="limoges">Limoges</option>
                  <option value="lyon">Lyon</option>
                  <option value="martinique">Martinique</option>
                  <option value="mayotte">Mayotte</option>
                  <option value="montpellier">Montpellier</option>
                  <option value="nancy-metz">Nancy-Metz</option>
                  <option value="nantes">Nantes</option>
                  <option value="nice">Nice</option>
                  <option value="normandie">Normandie</option>
                  <option value="orleans-tours">Orléans-Tours</option>
                  <option value="paris">Paris</option>
                  <option value="poitiers">Poitiers</option>
                  <option value="reims">Reims</option>
                  <option value="rennes">Rennes</option>
                  <option value="strasbourg">Strasbourg</option>
                  <option value="toulouse">Toulouse</option>
                  <option value="versailles">Versailles</option>
                </select>
              </div>
            </div>
            <div class="fr-col-1">
              <button class="fr-btn">OK</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</main>
<footer class="fr-footer" role="contentinfo" id="footer-5965">
  <div class="fr-container">
    <div class="fr-footer__body">
      <div class="fr-footer__brand fr-enlarge-link">
        
        <a id="footer-brand" class="fr-footer__brand-link" href="#" title="Retour à l’accueil du site - Plateforme informative des instances lycéennes">
          <img class="fr-footer__logo" style="width:8rem;" src="../assets/img/piil_logo.svg" alt="Logo du Projet PIIL" />
          <!-- L’alternative de l’image (attribut alt) doit impérativement être renseignée et reprendre le texte visible dans l’image -->
        </a>
      </div>
      <div class="fr-footer__content">
        <p class="fr-footer__content-desc"><b>La plateforme informative des instances lycéennes</b> vous communique les dernières actualités concernant les différents conseils lycéens ainsi que des élu.e.s de ces derniers.</p>
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
          <a class="fr-footer__bottom-link" id="footer__bottom-link-5970" href="../plan.html">Plan du site</a>
        </li>
        <li class="fr-footer__bottom-item">
          <a class="fr-footer__bottom-link" id="footer__bottom-link-5971" href="../accessibility.html">Accessibilité : non<!--/partiellement/totalement--> conforme</a>
        </li>
        <li class="fr-footer__bottom-item">
          <a class="fr-footer__bottom-link" id="footer__bottom-link-5972" href="../legal.html">Mentions légales</a>
        </li>
        <li class="fr-footer__bottom-item">
          <a class="fr-footer__bottom-link" id="footer__bottom-link-5973" href="../privacy.html">Données personnelles</a>
        </li>
        <li class="fr-footer__bottom-item">
          <a class="fr-footer__bottom-link" id="footer__bottom-link-5974" href="#">Gestion des cookies</a>
        </li>
        <li class="fr-footer__bottom-item">
          <span class="fr-footer__bottom-link" id="version">vf-1.1.1</span>
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
                          <use class="fr-artwork-decorative" xlink:href="../dist/artwork/light.svg#artwork-decorative"></use>
                          <use class="fr-artwork-minor" xlink:href="../dist/artwork/light.svg#artwork-minor"></use>
                          <use class="fr-artwork-major" xlink:href="../dist/artwork/light.svg#artwork-major"></use>
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
                          <use class="fr-artwork-decorative" xlink:href="../dist/artwork/dark.svg#artwork-decorative"></use>
                          <use class="fr-artwork-minor" xlink:href="../dist/artwork/dark.svg#artwork-minor"></use>
                          <use class="fr-artwork-major" xlink:href="../dist/artwork/dark.svg#artwork-major"></use>
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
                          <use class="fr-artwork-decorative" xlink:href="../dist/artwork/system.svg#artwork-decorative"></use>
                          <use class="fr-artwork-minor" xlink:href="../dist/artwork/system.svg#artwork-minor"></use>
                          <use class="fr-artwork-major" xlink:href="../dist/artwork/system.svg#artwork-major"></use>
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
<script type="module" src="../dist/core/core.module.js"></script>
<script type="module" src="../dist/scheme/scheme.module.js"></script>
<script type="module" src="../dist/component/modal/modal.module.js"></script>
<script type="module" src="../dist/component/navigation/navigation.module.js"></script>
<script type="module" src="../dist/component/display/display.module.js"></script>
<script type="module" src="../dist/component/header/header.module.js"></script>
<script type="text/javascript" nomodule src="../dist/legacy/legacy.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/core/core.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/modal/modal.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/navigation/navigation.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/display/display.nomodule.js"></script>
<script type="text/javascript" nomodule src="../dist/component/header/header.nomodule.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
</body>
</html>