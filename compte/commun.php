<?php

echo '<!-- Conçu par Timothée Varin grâce au DSFR - CAVL de Normandie -->
<!-- La police "Marianne" utilisé dans ce projet est la police "Open Sans" de Steve Matteson renommée en celui-ci -->
<!-- La police "Spectral" utilisé dans ce projet est la police "EB Garamond" de Georg Duffner & Octavio Pardo renommée en celui-ci -->
<!-- Le DSFR n\'est en aucun cas une création de Timothée Varin et nous ne l\'approprions pas. -->
<!-- En aucun cas, la création de ce site est à but trompeur ou frauduleux et elle n\'est pas à usage commercial. -->';

$title = "Espace des membres d'instances lycéennes";

$version = "vf-1.1.1";

$footer = "";

if (isset($_COOKIE["account"])) {
    if ($_COOKIE["account"] > 7 or $_COOKIE["account"] < 0) {
        header("Location: https://cavl.septhime.fr/platform/compte/login.php");
        exit();
    }
} else {
    header("Location: https://cavl.septhime.fr/platform/compte/login.php");
    exit();
}

$r = [
    1 => 'DNVLC',
    2 => 'DAVLC',
    3 => 'Référent Lycéen',
    4 => 'CNVL',
    5 => 'CAVL',
    6 => 'CVL',
];

$name = [
    1 => 'M./Mme. ...',
    2 => 'M./Mme. ...',
    3 => 'M./Mme. ...',
    4 => '... ...',
    5 => 'Timothée Varin',
    6 => 'Timothée Varin',
];

?>